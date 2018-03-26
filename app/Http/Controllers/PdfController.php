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
    	

    	//$pdf = PDF::loadView('front.membership.create', compact('districts','departments','sessions','blood_groups','question','religions'));
        $html = view('front.pdf.show', compact('membership','departments'));

        PDF::loadHTML($html)->setWarnings(false)->save('myfile.pdf');


		///return $pdf->download('invoice.pdf');	
    }

    public function sendEmailReminder($id)
    {
        //$user = User::findOrFail($id);

    	$membership = Membership::findOrFail($id);
        $department_path = storage_path() . "/json/department.json";
        $departments = json_decode(file_get_contents($department_path), true);
        //dd($membership);
        //return view('front.membership.show', compact('membership','departments'));

        Mail::send('front.pdf.show', array('membership' =>$membership,'departments'=>$departments ), function ($message) use ($membership)  {

        	$message->from('membership@sustclubltd.com', 'SUST Club Ltd');
		    $message->subject('SUST CLUB Membership Submission');
		    //dd($membership);
		    $message->to($membership->reg_email);
		});

        return redirect('membership/'.$id);
    }
    
}
