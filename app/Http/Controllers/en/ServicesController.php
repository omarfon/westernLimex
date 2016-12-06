<?php

namespace App\Http\Controllers\en;

use App\Http\Controllers\Controller;

class ServicesController extends Controller {
	public function index() {
		return view('page.en.services');
	}
}
