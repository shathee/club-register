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


    public function memberStatistics()
    {	
    	$department_path = storage_path() . "/json/department.json";
		$department_array = json_decode(file_get_contents($department_path), true);
	    $session_path = storage_path() . "/json/sessions.json";
        $sessions = json_decode(file_get_contents($session_path), true);

    	$trend_chart = Charts::database(Membership::all(), 'line', 'highcharts')
	    ->title("Registration Trend")
	    ->dimensions(1000, 500)
	    ->responsive(false)
	    ->lastByDay(15, false);

    	$department_chart = Charts::database(Membership::all(), 'bar', 'highcharts')
	    ->dimensions(1000, 500)
	    ->responsive(false)
	    ->colors($this->rand_color(30))
	    ->groupBy('sust_department', null, $department_array);

	    $session_chart = Charts::database(Membership::all(), 'pie', 'highcharts')
	    ->elementLabel("Batch")
	    ->dimensions(1000, 500)
	    ->responsive(false)
	    ->colors($this->rand_color(30))
	    ->groupBy('sust_session', null, $sessions);

         

        return view('admin.reports.member',compact('department_chart','session_chart','trend_chart'));
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

		//dd($data);

		return view('admin.reports.finance', $data);
	}	



  
}
