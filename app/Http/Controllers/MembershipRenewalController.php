<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\MembershipRenewal;
use App\Models\Memberdirectory;
use Illuminate\Http\Request;

class MembershipRenewalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        
    return view('front.membership-renewal.index', compact('membershiprenewal'));    
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create( )
    {

        if (isset($_GET['search'])) { 
            $member = Memberdirectory::find($_GET['search']);
            
            if(!$member){
                $msg = "No user Exists with this Membership ID";
                return view('front.membership-renewal.index', compact('membershiprenewal','msg'));  
            }else{
                $memberrnl = MembershipRenewal::where('membership_no',$_GET['search'])->count();
                //dd($memberrnl);
                if($memberrnl!=0){
                    $msg = "You Have already submitted your membership renewal info";
                        return view('front.membership-renewal.index', compact('membershiprenewal','msg')); 
                }else{
                    $department_path = storage_path() . "/json/department.json";
                    $departments = json_decode(file_get_contents($department_path), true);
                    $batch_path = storage_path() . "/json/batch.json";
                    $batch = json_decode(file_get_contents($batch_path), true); 

                    return view('front.membership-renewal.create', compact('member','departments','batch'));
                }
                
            }  
        }else{
            return view('front.membership-renewal.index', compact('membershiprenewal'));  
        }
         
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
            //'id' => 'required|max:10',
            'renewal_type' => 'required',
            'member_payment_info' => 'required',
            'member_payment_doc' => 'required'
        ]);
        //$requestData = $request->all();
        
    $requestData['membership_no'] = $request['membership_no'];
    $requestData['renewal_type'] = $request['renewal_type'];
    $requestData['member_payment_period'] = $request['member_payment_period'];
    $requestData['member_payment_info'] = $request['member_payment_info'];
    $requestData['member_payment_doc'] = $request['member_payment_doc'];

        //dd($requestData);
        if ($request->hasFile('member_payment_doc')) {
            
                $file = $request['member_payment_doc'];
                $uploadPath = public_path('renewal');

                $extension = $file->getClientOriginalExtension();
                $fileName =  $request['membership_no'] .'.' . $extension;

                $file->move($uploadPath, $fileName);
                $requestData['member_payment_doc'] = $fileName;
                
            
        }
        
        MembershipRenewal::firstOrCreate($requestData);

        $member = Memberdirectory::find($request['membership_no']);
        return redirect('membership-renewal')->with(['flash_message'=> 'Your  Renewal info submitted successfully!', 'name' => $member->fullname ]);
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
        dd();
        $membershiprenewal = MembershipRenewal::findOrFail($id);

        return view('front.membership-renewal.show', compact('membershiprenewal'));
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
        $membershiprenewal = MembershipRenewal::findOrFail($id);

        return view('front.membership-renewal.edit', compact('membershiprenewal'));
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

        $membershiprenewal = MembershipRenewal::findOrFail($id);
        $membershiprenewal->update($requestData);

        return redirect('membership-renewal')->with('flash_message', 'MembershipRenewal updated!');
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

        return redirect('membership-renewal')->with('flash_message', 'MembershipRenewal deleted!');
    }
}
