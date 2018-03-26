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

