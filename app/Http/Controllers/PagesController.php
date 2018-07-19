<?php

namespace App\Http\Controllers;

class PagesController extends Controller {
	
	public function getAbout(){
		$first = 'Anh'; 
		$last = 'Nguyen';

		$full = $first . " " . $last;
		$email = 'vank58.bk@gmail.com';

		// return view('pages.about')->with(['fullname' => $full, 'email' => $email]);
		return view('pages.about', ['fullname' => $full, 'email' => $email]);
	}

}