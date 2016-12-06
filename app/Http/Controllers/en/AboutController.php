<?php

namespace App\Http\Controllers\en;

use App\Http\Controllers\Controller;

class AboutController extends Controller {
	public function index() {
		return view('page.en.about');
	}
}
