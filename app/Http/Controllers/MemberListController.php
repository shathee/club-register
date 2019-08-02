<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Memberdirectory;
use Illuminate\Support\Facades\DB;

class MemberListController extends Controller
{
    public function index(Request $request){


       
        $keyword1 = $request->get('sust_department');
    	$keyword2 = $request->get('sust_session');
        $membership_type = $request->get('membership_type');
        $sust_session = $request->get('sust_session');
        $perPage = 70;

        $department_path = storage_path() . "/json/department.json";
        $departments = json_decode(file_get_contents($department_path), true);

        $sessions_path = storage_path() . "/json/sessions.json";
        $sessions = json_decode(file_get_contents($sessions_path), true);

        $batch_path = storage_path() . "/json/batch.json";
        $batch = json_decode(file_get_contents($batch_path), true); 

        


            if (!empty($keyword1)) {

                $memberships = Memberdirectory::where('sust_department', $keyword1)->paginate($perPage);
                return view('front.memberList.index', compact('memberships', 'departments', 'batch', 'sessions'));

            }elseif (!empty($keyword2)) {

                $memberships = Memberdirectory::where('sust_session', $keyword2)->paginate($perPage);
                return view('front.memberList.index', compact('memberships', 'departments', 'batch', 'sessions'));

            }else {

                $memberships = Memberdirectory::paginate($perPage);
                return view('front.memberList.index', compact('memberships', 'departments', 'batch', 'sessions'));
            }
        
        


        
    }



    public function life(Request $request){

        $keyword1 = $request->get('sust_department');
        $keyword2 = $request->get('sust_session');
        $membership_type = $request->get('membership_type');
        $sust_session = $request->get('sust_session');
        $perPage = 70;

        $department_path = storage_path() . "/json/department.json";
        $departments = json_decode(file_get_contents($department_path), true);

        $sessions_path = storage_path() . "/json/sessions.json";
        $sessions = json_decode(file_get_contents($sessions_path), true);

        $batch_path = storage_path() . "/json/batch.json";
        $batch = json_decode(file_get_contents($batch_path), true); 

            if (!empty($keyword1)) {

                $memberships = Memberdirectory::where('membership_type', 'life')->where('sust_department', $keyword1)->paginate($perPage);
                return view('front.memberList.index', compact('memberships', 'departments', 'batch', 'sessions'));

            }elseif (!empty($keyword2)) {

                $memberships = Memberdirectory::where('membership_type', 'life')->where('sust_session', $keyword2)->paginate($perPage);
                return view('front.memberList.index', compact('memberships', 'departments', 'batch', 'sessions'));

            }else {

                $memberships = Memberdirectory::where('membership_type', 'life')->paginate($perPage);
                return view('front.memberList.index', compact('memberships', 'departments', 'batch', 'sessions', 'key'));
            }
    }


    public function general(Request $request){


      
        $keyword1 = $request->get('sust_department');
        $keyword2 = $request->get('sust_session');
        $membership_type = $request->get('membership_type');
        $sust_session = $request->get('sust_session');
        $perPage = 70;

        $department_path = storage_path() . "/json/department.json";
        $departments = json_decode(file_get_contents($department_path), true);

        $sessions_path = storage_path() . "/json/sessions.json";
        $sessions = json_decode(file_get_contents($sessions_path), true);

        $batch_path = storage_path() . "/json/batch.json";
        $batch = json_decode(file_get_contents($batch_path), true); 

            if (!empty($keyword1)) {

                $memberships = Memberdirectory::where('membership_type', 'general')->where('sust_department', $keyword1)->paginate($perPage);
                return view('front.memberList.index', compact('memberships', 'departments', 'batch', 'sessions'));

            }elseif (!empty($keyword2)) {

                $memberships = Memberdirectory::where('membership_type', 'general')->where('sust_session', $keyword2)->paginate($perPage);
                return view('front.memberList.index', compact('memberships', 'departments', 'batch', 'sessions'));

            }else {

                $memberships = Memberdirectory::where('membership_type', 'general')->paginate($perPage);
                return view('front.memberList.index', compact('memberships', 'departments', 'batch', 'sessions', 'key'));
            }
    }

    public function founders(Request $request){


       
        $keyword1 = $request->get('sust_department');
        $keyword2 = $request->get('sust_session');
        $membership_type = $request->get('membership_type');
        $sust_session = $request->get('sust_session');
        $perPage = 50;

        $department_path = storage_path() . "/json/department.json";
        $departments = json_decode(file_get_contents($department_path), true);

        $sessions_path = storage_path() . "/json/sessions.json";
        $sessions = json_decode(file_get_contents($sessions_path), true);

        $batch_path = storage_path() . "/json/batch.json";
        $batch = json_decode(file_get_contents($batch_path), true); 

            

                $memberships = Memberdirectory::where('id', '<', 496)->paginate($perPage);
                
                return view('front.memberList.index', compact('memberships', 'departments', 'batch', 'sessions'));
            
    }

}
