<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Membership;
use PDF;
use File;
use Mail;
use Carbon\Carbon;

class PdfController extends Controller
{
    public function index($id){

    	$membership = Membership::findOrFail($id);
        $department_path = storage_path() . "/json/department.json";
        $departments = json_decode(file_get_contents($department_path), true);
        

        $html = view('front.pdf.show', compact('membership','departments'));
        
		
        PDF::loadHTML($html)->setWarnings(false)->save('public/pdf/'.$membership->membership_no.'.pdf');


		
        //dd($membership);

        //return view('front.pdf.show', compact('membership','departments'));

        
    }

    public function makeBulkPdf($id){
       print Carbon::now()->toDateTimeString();
        dd();
        for($i=$id; $i<=$id+9;$i++){
            $this->index($i);
        }
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


    public function sendConfirmEmail($id)
    {
       
        $membership = Membership::findOrFail($id);
        
       
        Mail::send('front.email.confirm', array('membership' =>$membership ), function ($message) use ($membership)  {

        	$message->from('membership@sustclubltd.com', 'SUST Club Ltd');
		    $message->subject('SUST CLUB Membership Confirmation for '. $membership->membership_no);
		    $message->to($membership->reg_email);
			$message->bcc('sat.sust@gmail.com', 'Confirmation');
		    
		});
		return redirect()->back();
       
    }
    
}
