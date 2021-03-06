<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Membership;
use PDF;
use File;
use Mail;
use Carbon\Carbon;
use App\Models\Memberdirectory;

class PdfController extends Controller
{
    public function index($id){

    	$membership = Membership::findOrFail($id);
        $department_path = storage_path() . "/json/department.json";
        $departments = json_decode(file_get_contents($department_path), true);
        

       $html = view('front.pdf.show', compact('membership','departments'));
        
		
        PDF::loadHTML($html)->setWarnings(false)->save('public/pdf/'.$membership->membership_no.'.pdf');


		
        //dd($membership);

        return view('front.pdf.show', compact('membership','departments'));

        
    }



    public function allPdfReport(){

        $memberships = Membership::all()->groupBy('sust_department');
        $department_path = storage_path() . "/json/department.json";
        $departments = json_decode(file_get_contents($department_path), true);
        

        //$html = view('front.pdf.all', compact('memberships','departments'));
        
        
       //PDF::loadHTML($html)->setWarnings(false)->save('public/pdf/all.pdf');


        
        //dd($memberships);

       // return view('front.pdf.all', compact('memberships','departments'));
        foreach ($memberships as $key => $value) {
            $this->attendancePDF($key);
        }
    }

    public function deptPDF($dept){
        $memberships = Membership::where('sust_department',$dept)->orderBy('sust_session')->get();
        $department_path = storage_path() . "/json/department.json";
        $departments = json_decode(file_get_contents($department_path), true);
//dd($memberships);
        //return view('front.pdf.dept', compact('memberships','departments','dept'));
        $html = view('front.pdf.dept', compact('memberships','departments','dept'));
        
        
     PDF::loadHTML($html)->setWarnings(false)->save('public/pdf/'.$dept.'.pdf');

    }

    public function attendancePDF($dept){
        $memberships = Membership::where('sust_department',$dept)->orderBy('sust_session')->get();
        $department_path = storage_path() . "/json/department.json";
        $departments = json_decode(file_get_contents($department_path), true);
        $batch_path = storage_path() . "/json/batch.json";
        $batch = json_decode(file_get_contents($batch_path), true);
//dd($memberships);
        //return view('front.pdf.attendance', compact('memberships','departments','dept','batch'));
        $html = view('front.pdf.attendance', compact('memberships','departments','dept','batch'));
        
        PDF::loadHTML($html)->setWarnings(false)->save('public/pdf/attendance_'.$dept.'.pdf');

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

    public function sendInvitation($id){
         for($i=$id; $i>$id-50;$i--){
             //$m = Membership::findOrFail($i);
             $this->sendInvitationMail($i);
			echo $i."sent at ";
			echo date("F d, Y h:i:s A", time())."</br>";
         }
        //$this->sendInvitationMail($id);
    }
	
	public function sendInvitationPersonal($id){
        // for($i=$id; $i>$id-50;$i--){
        //     //$m = Membership::findOrFail($i);
        //     $this->sendInvitationMail($i);
         
        // }
        $this->sendInvitationMail($id);
    }
	
    public function sendInvitationMail($id)
    {
       
        $membership = Membership::where('id', $id)->where('is_finance_approved','yes')->first();
        if($membership){
			echo "s";
		}else{
			echo "N";
		}
		
		
		if($membership!=null){
			Mail::send(array('html'=>'front.email.picnic'), array('membership' =>$membership ), function ($message) use ($membership)  {

				$message->from('info@sustclubltd.com', 'SUST Club Ltd');
				$message->subject('Invitation for Registration of Picnic');
				$message->to($membership->reg_email);
				$message->bcc('sat.sust@gmail.com', 'Invitation');
				
			});
		}else{
			echo "Not sent for ID".$id;
		}
		
			//return redirect()->back();
       
    }



    public function sendEmailPaymentConfirm($id)
    {
        

        $membership = Memberdirectory::findOrFail($id);
      
        Mail::send('front.email.renewal', array('membership' =>$membership ), function ($message) use ($membership)  {

            $message->from('membership@sustclubltd.com', 'SUST Club Ltd');
            $message->subject('Annual Subscription fee ');
            $message->bcc('sat.sust@gmail.com', 'Annual Subscription fee');
           
            $message->to($membership->reg_email);
        });

        return redirect('membership/'.$id);
    }
    
}
