<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\MembershipRenewal;
use Illuminate\Http\Request;

class MembershipRenewalManagementController extends Controller
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
            $membershiprenewalmanagement = MembershipRenewal::where('id', 'LIKE', "%$keyword%")
                ->orWhere('renewal_type', 'LIKE', "%$keyword%")
                ->orWhere('member_payment_info', 'LIKE', "%$keyword%")
                ->orWhere('member_payment_doc', 'LIKE', "%$keyword%")
                ->orWhere('is_submission_confirmed', 'LIKE', "%$keyword%")
                ->orWhere('is_finance_approved', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {



            $membershiprenewalmanagement = MembershipRenewal::latest()->paginate($perPage);
        }

        $department_path = storage_path() . "/json/department.json";
        $departments = json_decode(file_get_contents($department_path), true);

        $sessions_path = storage_path() . "/json/sessions.json";
        $sessions = json_decode(file_get_contents($sessions_path), true);

        $batch_path = storage_path() . "/json/batch.json";
        $batch = json_decode(file_get_contents($batch_path), true);

        return view('admin.membership-renewal-management.index', compact('membershiprenewalmanagement','departments','batch','sessions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.membership-renewal-management.create');
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
			'id' => 'required|max:10',
			'renewal_type' => 'required',
			'member_payment_info' => 'required',
			'member_payment_doc' => 'required'
		]);
        $requestData = $request->all();
        

        if ($request->hasFile('member_payment_doc')) {
            foreach($request['member_payment_doc'] as $file){
                $uploadPath = public_path('/uploads/member_payment_doc');

                $extension = $file->getClientOriginalExtension();
                $fileName = rand(11111, 99999) . '.' . $extension;

                $file->move($uploadPath, $fileName);
                $requestData['member_payment_doc'] = $fileName;
            }
        }

        MembershipRenewal::create($requestData);

        return redirect('membership-renewal-management')->with('flash_message', 'MembershipRenewalManagement added!');
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
        $membershiprenewalmanagement = MembershipRenewal::findOrFail($id);

        return view('admin.membership-renewal-management.show', compact('membershiprenewalmanagement'));
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
        $membershiprenewalmanagement = MembershipRenewal::findOrFail($id);

        return view('admin.membership-renewal-management.edit', compact('membershiprenewalmanagement'));
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
			'id' => 'required|max:10',
			'renewal_type' => 'required',
			'member_payment_info' => 'required',
			'member_payment_doc' => 'required'
		]);
        $requestData = $request->all();
        

        if ($request->hasFile('member_payment_doc')) {
            foreach($request['member_payment_doc'] as $file){
                $uploadPath = public_path('/uploads/member_payment_doc');

                $extension = $file->getClientOriginalExtension();
                $fileName = rand(11111, 99999) . '.' . $extension;

                $file->move($uploadPath, $fileName);
                $requestData['member_payment_doc'] = $fileName;
            }
        }

        $membershiprenewalmanagement = MembershipRenewal::findOrFail($id);
        $membershiprenewalmanagement->update($requestData);

        return redirect('membership-renewal-management')->with('flash_message', 'MembershipRenewalManagement updated!');
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
        MembershipRenewal::destroy($id);

        return redirect('membership-renewal-management')->with('flash_message', 'MembershipRenewalManagement deleted!');
    }
}
