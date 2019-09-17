<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


use App\Http\Controllers\Controller;
use App\Models\NewMembership;

use Input;
use Session;

class NewMembershipController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request) {
        return redirect()->route('membership.create');
        
        $keyword = $request->get('search');
        $membership_type = $request->get('membership_type');
        $sust_session = $request->get('sust_session');
        $perPage = 25;

        $department_path = storage_path() . "/json/department.json";
        $departments = json_decode(file_get_contents($department_path), true);

        $sessions_path = storage_path() . "/json/sessions.json";
        $sessions = json_decode(file_get_contents($sessions_path), true);

        $batch_path = storage_path() . "/json/batch.json";
        $batch = json_decode(file_get_contents($batch_path), true);

        if (!empty($keyword)) {
            $membership = NewMembership::where('membership_no', "$keyword")
                ->orWhere('reg_email', "$keyword")
                ->orWhere('mobile_no', "$keyword")
                ->orWhere('sust_reg_no', "$keyword")
                ->first();

            //$membership = Membership::findOrFail($id);

            //dd($membership->get());
            return view('front.membership.index', compact('membership', 'departments', 'batch', 'sessions'));

        } else {
            if (!empty($membership_type)) {
                $memberships = NewMembership::where('membership_type', $membership_type)->orderBy('id')->get();
            }

            if (!empty($sust_session)) {
                $memberships = NewMembership::where('sust_session', $sust_session)->orderBy('id')->get();
            }

            $memberships = NewMembership::paginate($perPage);
            return view('front.membership.index', compact('memberships', 'departments', 'batch', 'sessions'));
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create() {
        //dd();

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
        // dd(sort($districts));

        Mc::putMcData();
        $question = Mc::getMcQuestion();

        return view('front.membership.create', compact('districts', 'departments', 'sessions', 'blood_groups', 'question', 'religions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request) {
        //dd();
        $this->validate($request, [
            'membership_type' => 'required',
            'reg_email' => 'required|unique:memberships',
            'reg_email_repeat' => 'required|same:reg_email',
            'mobile_no' => 'required',
            //'gender' => 'required',
            //'religion' => 'required',
            //'present_address' => 'required',
            'permanent_address' => 'required',
            'permanent_district' => 'required',
            'sust_department' => 'required',
            //'sust_reg_no' => 'required|unique:memberships',
            'sust_session' => 'required',
            'member_photo' => 'required|image|max:5000',
            'member_payment_info' => 'required',
            'member_payment_doc' => 'required|max:5000',
            'name_of_proposer' => 'required',
            'membership_no_of_proposer' => 'required',
            'name_of_seconder' => 'required',
            'membership_no_of_seconder' => 'required',
            'is_declaration_given' => 'required'
        ], [
            'membership_type.required' => 'Please Select Your Membership Type.',
            'reg_email.unique' => 'Sorry, This Email Address Is Already Used By Another User. Please Try With Different One, Thank You.',
            'member_photo.required' => 'You Must Upload your photograph.',
            'member_photo.max' => 'Maximum Allowable size of photograph is 5MB.',
            'member_payment_doc.required' => 'You Must Upload Reference Document of Payment.',
            'member_payment_doc.max' => 'Maximum Allowable size of document is 5MB.',
            'name_of_proposer' => 'You Must mention The name of the proposer ',
            'membership_no_of_proposer' => 'You Must mention The Membership No of the proposer',
            'name_of_seconder' => 'You Must mention The name of the Seconder',
            'membership_no_of_seconder' => 'You Must mention The Membership No of the Seconder',
            'is_declaration_given' => 'You must agree with the declaration'
        ]);
        $requestData = $request->all();

       // dd($requestData);
        $answer = $request->answer;
        if ($answer == Mc::getMcAnswer()) {
            if ($request->hasFile('member_payment_doc')) {
                //foreach($request['member_payment_doc'] as $file){
                $file = $request['member_payment_doc'];
                $uploadPath = public_path('new_uploads');

                $extension = $file->getClientOriginalExtension();
                //$fileName = $request->sust_reg_no. '_payment.' . $extension;
                $fileName = $request->reg_email . '_payment.' . $extension;

                $file->move($uploadPath, $fileName);
                $requestData['member_payment_doc'] = $fileName;
                //}
            }
            if ($request->hasFile('member_photo')) {
                //foreach($request['member_photo'] as $file){
                $file = $request['member_photo'];
                $uploadPath = public_path('new_uploads');

                $extension = $file->getClientOriginalExtension();
                //$fileName = $request->sust_reg_no . '_photo.' . $extension;
                $fileName = $request->reg_email . '_photo.' . $extension;

                $file->move($uploadPath, $fileName);
                $requestData['member_photo'] = $fileName;

            }

            $id = NewMembership::create($requestData)->id;

            if ($request['membership_type'] == 'life') {
                $requestData['membership_no'] = "LM" . date("Ymd") . sprintf('%06d', $id);
            } else {
                $requestData['membership_no'] = "GM" . date("Ymd") . sprintf('%06d', $id);
            }

            NewMembership::where('id', $id)
                ->update(['membership_no' => $requestData['membership_no']]);

           // app(\App\Http\Controllers\PdfController::class)->sendEmailReminder($id);


            Session::flash('mid', $id);
            return redirect()->route('membership.show', compact('id'))->with('flash_message', 'Your Submisson is successful Thank You for becoming a part of SUST Club Ltd!');
        }
            
        return redirect()->route('membership.create')->withInput(Input::all())->withErrors(['captcha', 'captcha does not match']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id) {
        //dd();
        //die($id);
        if(Session::has('mid')){
            $membership = NewMembership::findOrFail($id);
            $department_path = storage_path() . "/json/department.json";
            $departments = json_decode(file_get_contents($department_path), true);
            return view('front.membership.show', compact('membership', 'departments'));

        }else{
            abort(403,'You dont have permission to access this ');

        }
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

        $membership = NewMembership::findOrFail($id);
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

    public function submissionConfirm(Request $request, $id) {

        NewMembership::where('id', $id)
            ->update(['is_submission_confirmed' => 'yes']);

        return redirect('submission-messages')->with('flash_message', 'Dear Sustian Your Submission has been completed!');
    }

    public function messages() {

        return view('front.membership.message');
    }

}
