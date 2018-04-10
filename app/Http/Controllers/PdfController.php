<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Membership;
use PDF;
use File;
use Mail;

class PdfController extends Controller
{
    public function index($id){

    	$membership = Membership::findOrFail($id);
        $department_path = storage_path() . "/json/department.json";
        $departments = json_decode(file_get_contents($department_path), true);
        //dd($departments);
        //return view('front.membership.show', compact('membership','departments'));
    	
       // $path = 'public/uploads/'.$membership->member_photo;
        //$type = pathinfo($path, PATHINFO_EXTENSION);
        //$data = file_get_contents($path);
        //$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
        //$membership->member_photo = $base64;
    	//$pdf = PDF::loadView('front.membership.create', compact('districts','departments','sessions','blood_groups','question','religions'));

        $html = view('front.pdf.show', compact('membership','departments'));
        
		PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);
        PDF::loadHTML($html)->setWarnings(false)->save('public/pdf/'.$id.'.pdf');


		
        //dd($membership);

        return view('front.pdf.show', compact('membership','departments'));
/*
        Mail::send('front.email.confirm', array('membership' =>$membership,'departments'=>$departments ), function ($message) use ($membership)  {

            $message->from('membership@sustclubltd.com', 'SUST Club Ltd');
            $message->subject('SUST CLUB Membership Confirmation');
            //dd($membership);
            $message->to('sat.sust@gmail.com');
            $message->attach('public/pdf/'.$membership->id.'.pdf');
        });

        return redirect('membership/'.$id);	
        */
        
    }

    public function sendEmailReminder($id)
    {
        //$user = User::findOrFail($id);

    	$membership = Membership::findOrFail($id);
        $department_path = storage_path() . "/json/department.json";
        $departments = json_decode(file_get_contents($department_path), true);
        //dd($membership);
        //return view('front.membership.show', compact('membership','departments'));

        Mail::send('front.email.show', array('membership' =>$membership,'departments'=>$departments ), function ($message) use ($membership)  {

        	$message->from('membership@sustclubltd.com', 'SUST Club Ltd');
		    $message->subject('SUST CLUB Membership Submission');
		    $message->bcc('sat.sust@gmail.com', 'Submission');
			//dd($membership);
		    $message->to($membership->reg_email);
		});

        return redirect('membership/'.$id);
    }
    
}
