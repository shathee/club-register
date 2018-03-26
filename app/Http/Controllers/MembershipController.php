<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Membership;
use Illuminate\Http\Request;
use Input;

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
		//echo storage_path();
        $district_path = storage_path() . "/json/districts.json";
        $districts = json_decode(file_get_contents($district_path), true);

        $department_path = storage_path() . "/json/department.json";
        $departments = json_decode(file_get_contents($department_path), true);

        $session_path = storage_path() . "/json/sessions.json";
        $sessions = json_decode(file_get_contents($session_path), true);

        $blood_group_path = storage_path() . "/json/bloodgroup.json";
        $blood_groups = json_decode(file_get_contents($blood_group_path), true);

        $religions_path = storage_path() . "/json/religions.json";
        $religions = json_decode(file_get_contents($religions_path), true);
        //dd($departments);

        Mc::putMcData();
        $question=Mc::getMcQuestion();

        return view('front.membership.create', compact('districts','departments','sessions','blood_groups','question','religions'));
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
			'reg_email' => 'required|unique:memberships',
			'reg_email_repeat' => 'required|same:reg_email',
			'mobile_no' => 'required',
			'gender' => 'required',
			'religion' => 'required',
			'present_address' => 'required',
			'permanent_address' => 'required',
			'permanent_district' => 'required',
			'sust_department' => 'required',
			//'sust_reg_no' => 'required|unique:memberships',
			'sust_session' => 'required',
            'member_photo' => 'required|image|max:3000',
			'member_payment_info' => 'required',
			'member_payment_doc' => 'required|max:3000'
		]);
        $requestData = $request->all();
        
	//dd($requestData);
        $answer=$request->answer;
        if($answer==Mc::getMcAnswer())
         {
            if ($request->hasFile('member_payment_doc')) {
            //foreach($request['member_payment_doc'] as $file){
                $file = $request['member_payment_doc'];
                $uploadPath = public_path('uploads');

                $extension = $file->getClientOriginalExtension();
                //$fileName = $request->sust_reg_no. '_payment.' . $extension;
                $fileName = $request->reg_email. '_payment.' . $extension;
                
                $file->move($uploadPath, $fileName);
                $requestData['member_payment_doc'] = $fileName;
                //}
            }
            if ($request->hasFile('member_photo')) {
                //foreach($request['member_photo'] as $file){
                    $file = $request['member_photo'];
                    $uploadPath = public_path('uploads');

                    $extension = $file->getClientOriginalExtension();
                    //$fileName = $request->sust_reg_no . '_photo.' . $extension;
                    $fileName = $request->reg_email . '_photo.' . $extension;
        
                    $file->move($uploadPath, $fileName);
                    $requestData['member_photo'] = $fileName;
                    
            }

            
            $id= Membership::create($requestData)->id;
            
            if($request['membership_type']=='life'){
                $requestData['membership_no'] = "LM".sprintf('%06d',$id);
            }else{
                $requestData['membership_no'] = "GM".sprintf('%06d',$id);
            }

            Membership::where('id', $id)
              ->update(['membership_no' => $requestData['membership_no'] ]);

            return redirect('membership/'.$id)->with('flash_message', 'Your Submisson is successful Thank You for becoming a part of SUST Club Ltd!');
         }
        else
         {
            return redirect('membership/create')->withInput(Input::all())->withErrors(['captcha', 'captcha does not match']);
            
         }
        

        
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
        $department_path = storage_path() . "/json/department.json";
        $departments = json_decode(file_get_contents($department_path), true);
        //dd($departments);
        return view('front.membership.show', compact('membership','departments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */

    /*
    public function edit($id)
    {
        $membership = Membership::findOrFail($id);

        $district_path = storage_path() . "\json\districts.json";
        $districts = json_decode(file_get_contents($district_path), true);

        $department_path = storage_path() . "\json\department.json";
        $departments = json_decode(file_get_contents($department_path), true);

        $session_path = storage_path() . "\json\sessions.json";
        $sessions = json_decode(file_get_contents($session_path), true);
        $blood_group_path = storage_path() . "\json\bloodgroup.json";
        $blood_groups = json_decode(file_get_contents($blood_group_path), true);

        return view('front.membership.edit', compact('membership','districts','departments','sessions','blood_groups'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    /*
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
			'sust_reg_no' => 'required|unique:memberships',
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
    */

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    /*
    public function destroy($id)
    {
        Membership::destroy($id);

        return redirect('membership')->with('flash_message', 'Membership deleted!');
    }

    */

    public function submissionConfirm(Request $request, $id){

        Membership::where('id', $id)
          ->update(['is_submission_confirmed' => 'yes']);

        return redirect('submission-messages')->with('flash_message', 'Dear Sustian Your Submission has been completed!');
    }

    public function messages(){

       return view('front.membership.message');
    }


}
