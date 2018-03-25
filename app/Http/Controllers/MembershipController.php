<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Membership;
use Illuminate\Http\Request;

class MembershipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $membership = Membership::where('membership_type', 'LIKE', "%$keyword%")
                ->orWhere('reg_email', 'LIKE', "%$keyword%")
                ->orWhere('reg_email_repeat', 'LIKE', "%$keyword%")
                ->orWhere('fullname', 'LIKE', "%$keyword%")
                ->orWhere('fullname_bn', 'LIKE', "%$keyword%")
                ->orWhere('mothers_name', 'LIKE', "%$keyword%")
                ->orWhere('fathers_name', 'LIKE', "%$keyword%")
                ->orWhere('spouse_name', 'LIKE', "%$keyword%")
                ->orWhere('mobile_no', 'LIKE', "%$keyword%")
                ->orWhere('gender', 'LIKE', "%$keyword%")
                ->orWhere('religion', 'LIKE', "%$keyword%")
                ->orWhere('present_address', 'LIKE', "%$keyword%")
                ->orWhere('present_district', 'LIKE', "%$keyword%")
                ->orWhere('permanent_address', 'LIKE', "%$keyword%")
                ->orWhere('permanent_district', 'LIKE', "%$keyword%")
                ->orWhere('sust_department', 'LIKE', "%$keyword%")
                ->orWhere('sust_reg_no', 'LIKE', "%$keyword%")
                ->orWhere('sust_session', 'LIKE', "%$keyword%")
                ->orWhere('sust_graduation_year', 'LIKE', "%$keyword%")
                ->orWhere('member_photo', 'LIKE', "%$keyword%")
                ->orWhere('member_payment_doc', 'LIKE', "%$keyword%")
                ->orWhere('is_submission_confirmed', 'LIKE', "%$keyword%")
                ->orWhere('is_finance_approved', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $membership = Membership::paginate($perPage);
        }

        return view('front.membership.index', compact('membership'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
		echo public_path('uploads');
        return view('front.membership.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->validate($request, [
			'membership_type' => 'required',
			'reg_email' => 'required',
			'reg_email_repeat' => 'required|same:reg_email',
			'mobile_no' => 'required',
			'gender' => 'required',
			'religion' => 'required',
			'present_address' => 'required',
			'permanent_address' => 'required',
			'permanent_district' => 'required',
			'sust_department' => 'required',
			'sust_reg_no' => 'required',
			'sust_session' => 'required',
			'member_photo' => 'required',
			'member_payment_doc' => 'required'
		]);
        $requestData = $request->all();
        
	//dd($requestData);
        


        if ($request->hasFile('member_payment_doc')) {
            //foreach($request['member_payment_doc'] as $file){
				$file = $request['member_payment_doc'];
                $uploadPath = public_path('uploads');

                $extension = $file->getClientOriginalExtension();
                $fileName = $request->sust_reg_no. '_payment.' . $extension;
				
                $file->move($uploadPath, $fileName);
                $requestData['member_payment_doc'] = $fileName;
            //}
        }
		if ($request->hasFile('member_photo')) {
            //foreach($request['member_photo'] as $file){
                $file = $request['member_photo'];
				$uploadPath = public_path('uploads');

                $extension = $file->getClientOriginalExtension();
                $fileName = $request->sust_reg_no . '_photo.' . $extension;
	
                $file->move($uploadPath, $fileName);
                $requestData['member_photo'] = $fileName;
				
            //}
        }

        //Membership::create($requestData);
		
		$id= Membership::create($requestData)->id;
        //return redirect('membership')->with('flash_message', 'Membership added!');
        return redirect('membership/'.$id)->with('flash_message', 'Your Form Has been submitted do you want to confirm?!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $membership = Membership::findOrFail($id);

        return view('front.membership.show', compact('membership'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $membership = Membership::findOrFail($id);

        return view('front.membership.edit', compact('membership'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
			'membership_type' => 'required',
			'reg_email' => 'required',
			'reg_email_repeat' => 'required|same:reg_email',
			'mobile_no' => 'required',
			'gender' => 'required',
			'religion' => 'required',
			'present_address' => 'required',
			'permanent_address' => 'required',
			'permanent_district' => 'required',
			'sust_department' => 'required',
			'sust_reg_no' => 'required',
			'sust_session' => 'required',
			'member_photo' => 'required',
			'member_payment_doc' => 'required'
		]);
        $requestData = $request->all();
        

        if ($request->hasFile('member_photo')) {
            foreach($request['member_photo'] as $file){
                $uploadPath = public_path('/uploads/member_photo');

                $extension = $file->getClientOriginalExtension();
                $fileName = rand(11111, 99999) . '.' . $extension;

                $file->move($uploadPath, $fileName);
                $requestData['member_photo'] = $fileName;
            }
        }


        if ($request->hasFile('member_payment_doc')) {
            foreach($request['member_payment_doc'] as $file){
                $uploadPath = public_path('/uploads/member_payment_doc');

                $extension = $file->getClientOriginalExtension();
                $fileName = rand(11111, 99999) . '.' . $extension;

                $file->move($uploadPath, $fileName);
                $requestData['member_payment_doc'] = $fileName;
            }
        }

        $membership = Membership::findOrFail($id);
        $membership->update($requestData);

        return redirect('membership')->with('flash_message', 'Membership updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Membership::destroy($id);

        return redirect('membership')->with('flash_message', 'Membership deleted!');
    }
}
