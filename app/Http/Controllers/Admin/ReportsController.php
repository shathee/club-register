<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Membership;
use App\User;
use DB;
use Charts;

class ReportsController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $membership_type = $request->get('membership_type');
		$sust_session = $request->get('sust_session');
		$sust_department = $request->get('sust_department');
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
				
			     //dd($membership->get());
            	return view('admin.reports.index', compact('membership','departments','batch','sessions'));
			
			
        }else {
			if(!empty($membership_type)){
                $memberships = Membership::where('membership_type',$membership_type)->orderBy('id')->get();
            }
			
			if(!empty($sust_session)){
                $memberships = Membership::where('sust_session',$sust_session)->orderBy('id')->get();
            }
			if(!empty($sust_department)){
                $memberships = Membership::where('sust_department',$sust_department)->orderBy('id')->get();
            }
			
            return view('admin.reports.index', compact('memberships','departments','batch','sessions'));
        }

        
    }


    public function memberStatistics()
    {	
    	$department_path = storage_path() . "/json/department.json";
		$department_array = json_decode(file_get_contents($department_path), true);
	    $session_path = storage_path() . "/json/sessions.json";
        $sessions = json_decode(file_get_contents($session_path), true);
		$batch_path = storage_path() . "/json/batch.json";
        $batch = json_decode(file_get_contents($batch_path), true);

    	$trend_chart = Charts::database(Membership::all(), 'line', 'highcharts')
	    ->title("Registration Trend")
	    ->dimensions(1000, 500)
		->elementLabel("No of Registrants")
        ->responsive(true)
	    ->lastByDay(18, false);

    	$department_chart = Charts::database(Membership::all(), 'bar', 'google')
		->title("Registration Vs Department")
		->elementLabel("No of Registrants")
	    ->dimensions(1000, 500)
	    ->responsive(false)
	    ->colors($this->rand_color(30))
	    ->groupBy('sust_department', null, $department_array);
		
		
	    $batch_chart = Charts::database(Membership::all(), 'pie', 'highcharts')
	    ->elementLabel("Batch vs Registrant")
		->title("Batch vs Registrant")
	    ->dimensions(1000, 500)
	    ->responsive(false)
	    ->colors($this->rand_color(30))
	    ->groupBy('sust_session', null, $batch);

         
	    $session_chart = Charts::database(Membership::all(), 'pie', 'highcharts')
	    ->elementLabel("Session vs Registrant")
	    ->dimensions(1000, 500)
	    ->responsive(false)
	    ->colors($this->rand_color(30))
	    ->groupBy('sust_session', null, $sessions);

		

        return view('admin.reports.member',compact('department_chart','session_chart','trend_chart','batch_chart' ));
    }

    function rand_color($count) {
	    $color = [];
	    for($i=0; $i<$count;$i++)
	    {
	    	array_push($color, '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT));
	    }
	   // return '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
	    return $color;
	}

	public function financeStatistics(){
		
		
		
		$life_fee = 75000;
		$general_fee = 10000;

		$data['total_member_count'] = Membership::count();
		$data['general_member_count'] = Membership::where('membership_type','general')->count();
		$data['life_member_count'] = Membership::where('membership_type','life')->count();

		$data['general_member_total_fee'] = $data['general_member_count'] * $general_fee;
		$data['life_member_total_fee'] = $data['life_member_count'] * $life_fee;


		$data['total_member_confirmed_count'] = Membership::where('is_finance_approved','yes')->count();
		$data['general_member_confirmed_count'] = Membership::where('membership_type','general')->where('is_finance_approved','yes')->count();
		$data['life_member_confirmed_count'] = Membership::where('membership_type','life')->where('is_finance_approved','yes')->count();
		$data['general_member_confirmed_total_fee'] = $data['general_member_confirmed_count'] * $general_fee;
		$data['life_member_confirmed_total_fee'] = $data['life_member_confirmed_count'] * $life_fee;


		$data['total_member_onhold_count'] = Membership::where('is_finance_approved','hold')->count();
		$data['general_member_onhold_count'] = Membership::where('membership_type','general')->where('is_finance_approved','hold')->count();
		$data['life_member_onhold_count'] = Membership::where('membership_type','life')->where('is_finance_approved','hold')->count();
		$data['general_member_onhold_total_fee'] = $data['general_member_onhold_count'] * $general_fee;
		$data['life_member_onhold_total_fee'] = $data['life_member_onhold_count'] * $life_fee;


		$data['total_member_nostatus_count'] = Membership::where('is_finance_approved','no')->count();
		$data['general_member_nostatus_count'] = Membership::where('membership_type','general')->where('is_finance_approved','no')->count();
		$data['life_member_nostatus_count'] = Membership::where('membership_type','life')->where('is_finance_approved','no')->count();
		$data['general_member_nostatus_total_fee'] = $data['general_member_nostatus_count'] * $general_fee;
		$data['life_member_nostatus_total_fee'] = $data['life_member_nostatus_count'] * $life_fee;


		$data['total_member_rejected_count'] = Membership::where('is_finance_approved','rejected')->count();
		$data['general_member_rejected_count'] = Membership::where('membership_type','general')->where('is_finance_approved','rejected')->count();
		$data['life_member_rejected_count'] = Membership::where('membership_type','life')->where('is_finance_approved','rejected')->count();
		$data['general_member_rejected_total_fee'] = $data['general_member_rejected_count'] * $general_fee;
		$data['life_member_rejected_total_fee'] = $data['life_member_rejected_count'] * $life_fee;
		//dd($data);

		return view('admin.reports.finance', $data);
	}	



  
}
