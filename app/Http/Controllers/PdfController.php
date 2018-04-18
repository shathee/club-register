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
        for($i=$id; $i<=$id+9;$i++){
            $m = Membership::findOrFail($i);
            print $i."-".$m->is_finance_approved."</br>";
            if($m->is_finance_approved=='yes'){
                $this->sendInvitationMail($i);
            }else{
                echo "Mail Not sent for". $i."</br>";
            }
        }
        
    }
    public function sendInvitationMail($id)
    {
       
        $membership = Membership::findOrFail($id);
        
       
        Mail::send('front.email.invitation', array('membership' =>$membership ), function ($message) use ($membership)  {

            $message->from('membership@sustclubltd.com', 'SUST Club Ltd');
            $message->subject('Invitation for Founder Members Meeting');
            $message->to($membership->reg_email);
            $message->bcc('sat.sust@gmail.com', 'Confirmation');
            
        });
        //return redirect()->back();
       
    }
    
}
