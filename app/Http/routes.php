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
    

	Route::get('/','MembershipController@create');
	Route::resource('membership', 'MembershipController');
	Route::put('submission-confirm/{id}','MembershipController@submissionConfirm');
	Route::get('submission-messages','MembershipController@messages');
	
	Route::get('make-pdf/{id}','PdfController@index');
	Route::get('make-bulk-pdf/{id}','PdfController@makeBulkPdf');
	Route::get('mailtest/{id}','PdfController@sendEmailReminder');
	Route::get('confirmmail/{id}','PdfController@sendConfirmEmail');



	Route::auth();

	Route::get('/admin', 'HomeController@index');

	Route::resource('admin/users', 'Admin\UsersController');
	Route::resource('admin/membership-manage', 'Admin\MembershipManageController');
	Route::post('admin/membership-manage/payment-confirm', 'Admin\MembershipManageController@paymentConfirm');

	Route::get('admin/reports/member-statistics', 'Admin\ReportsController@memberStatistics');
	Route::get('admin/reports/finance-statistics', 'Admin\ReportsController@financeStatistics');
	Route::get('admin/reports/custom', 'Admin\ReportsController@index');
	Route::post('admin/reports/custom', 'Admin\ReportsController@index');



});


