<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Membership;

class MemberListController extends Controller
{
    public function index(Request $request){
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
            $membership = Membership::where('membership_no', "$keyword")
                ->orWhere('reg_email', "$keyword")
                ->orWhere('mobile_no', "$keyword")
                ->orWhere('sust_reg_no', "$keyword")
                ->first();

            //$membership = Membership::findOrFail($id);

            //dd($membership);
            return view('front.memberList.index', compact('membership', 'departments', 'batch', 'sessions'));

        } else {

            $memberships = Membership::where('is_finance_approved','yes')->paginate($perPage);
            //dd($memberships);
            return view('front.memberList.index', compact('memberships', 'departments', 'batch', 'sessions'));
        }
    }
}
