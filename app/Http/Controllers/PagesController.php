<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function welcome(){
    	$img_files = glob("img/front-page-image/*.*");
		//dd($img_files);

    	$path = storage_path() . "/json/notice.json"; // ie: /var/www/laravel/app/storage/json/filename.json

		$json = json_decode(file_get_contents($path), true); 
    	//dd($json['Notices']);
		$notices = $json['Notices'];
		// foreach ($n as $n) {
		// 	echo $n['Date'];
		// 	echo $n['Description'];
		// }

    	return view('welcome',compact('img_files','notices'));
    }
}
