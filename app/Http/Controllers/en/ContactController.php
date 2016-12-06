<?php

namespace App\Http\Controllers\en;

use App\Http\Controllers\Controller;

class ContactController extends Controller {
	public function index() {
		return view('page.en.contact');
	}
}
