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

Route::get('/','MembershipController@create');

Route::resource('membership', 'MembershipController');

Route::put('submission-confirm/{id}','MembershipController@submissionConfirm');
Route::get('submission-messages','MembershipController@messages');

Route::get('make-pdf/{id}','PdfController@index');
Route::get('mailtest','PdfController@sendEmailReminder');



Route::auth();

Route::get('/admin', 'HomeController@index');

Route::resource('admin/users', 'Admin\UsersController');
Route::resource('admin/membership-manage', 'Admin\MembershipManageController');
Route::post('admin/membership-manage/payment-confirm', 'Admin\MembershipManageController@paymentConfirm');

Route::get('admin/reports/member-statistics', 'Admin\ReportsController@memberStatistics');
Route::get('admin/reports/finance-statistics', 'Admin\ReportsController@financeStatistics');
