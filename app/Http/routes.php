<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/





Route::group(['middleware' => ['throttle']], function () {
  Route::get('/','PagesController@welcome');
  Route::get('/contact',function(){
  	 return view('front.pages.contact'); 
  });
  Route::post('/contact',function(){
  	 
  	 return view('front.pages.contact'); 
  });
    
    
		//$dt1 = Carbon\Carbon::now();
        //$dt2 = Carbon\Carbon::create(2018, 04, 19, 0, 0, 0);
        //if($dt1->gte($dt2)){
       // 	Route::get('/apply','MembershipController@index');
            
        //}else {
        	// Route::get('/apply','MembershipController@create');
       // }
    
    Route::get('/apply','NewMembershipController@create');
    //Route::get('/apply','MembershipController@create');
     

  	Route::get('founder-member-list','MemberListController@index');
  	Route::get('member-list','MemberListController@index');
  	Route::get('new-member-list','NewMemberListController@index');
	


	Route::resource('membership', 'NewMembershipController');
	//Route::resource('membership', 'MembershipController');



	//Route::put('submission-confirm/{id}','MembershipController@submissionConfirm');
	Route::put('submission-confirm/{id}','NewMembershipController@submissionConfirm');


	//Route::get('submission-messages','MembershipController@messages');
	Route::get('submission-messages','NewMembershipController@messages');
	
	//Route::get('admin', 'HomeController@index');
		Route::get('/admin/dashboard', 'HomeController@index');



	Route::auth();

	Route::group(['middleware' => ['auth']], function () {
	    
		Route::get('make-pdf/{id}','PdfController@index');
		Route::get('admin/make-all-pdf','PdfController@allPdfReport');
		Route::get('make-bulk-pdf/{id}','PdfController@makeBulkPdf');
		Route::get('mailtest/{id}','PdfController@sendEmailReminder');
		Route::get('confirmmail/{id}','PdfController@sendConfirmEmail');
		Route::get('admin/invitationmail/{id}','PdfController@sendInvitation');
		Route::get('admin/invitationmailPersonal/{id}','PdfController@sendInvitationPersonal');


		

		Route::resource('admin/users', 'Admin\UsersController');
		Route::resource('admin/membership-manage', 'Admin\MembershipManageController');
		
		Route::post('admin/membership-manage/payment-confirm', 'Admin\MembershipManageController@paymentConfirm');
		Route::post('admin/membership-manage/payment-confirm', 'Admin\MembershipManageController@paymentConfirm');
		Route::post('admin/membership-manage/payment-reject', 'Admin\MembershipManageController@paymentReject');
		Route::post('admin/membership-manage/payment-hold', 'Admin\MembershipManageController@paymentHold');

		Route::get('admin/reports/member-statistics', 'Admin\ReportsController@memberStatistics');
		Route::get('admin/reports/finance-statistics', 'Admin\ReportsController@financeStatistics');


		Route::get('admin/reports/custom', 'Admin\ReportsController@index');
		Route::post('admin/reports/custom', 'Admin\ReportsController@index');

		Route::get('admin/reports/all-member-statistics', 'Admin\ReportsController@allMemberStat');
		Route::get('admin/reports/member-address', 'Admin\ReportsController@allMemberAddress');



	});
	


});


