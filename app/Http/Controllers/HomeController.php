<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use App\Models\Membership;
use DB;
use Charts;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$members_by_department = DB::table('new_memberships')
                 ->select('sust_department', DB::raw('count(*) as total'))
                 ->groupBy('sust_department')
				 ->pluck('total','sust_department');
		
		$department_path = storage_path() . "/json/department.json";
        $departments = json_decode(file_get_contents($department_path), true);
		
		$members_by_batch = DB::table('new_memberships')
		 ->select('sust_session', DB::raw('count(*) as total'))
		 ->groupBy('sust_session')
		 ->pluck('total','sust_session');
		
		$batch_path = storage_path() . "/json/batch.json";
        $batch = json_decode(file_get_contents($batch_path), true);
		
		
		return view('home', compact('members_by_department','departments','members_by_batch','batch'));
    }
}
