<?php

namespace App\Http\Controllers\en;

use App\Http\Controllers\Controller;

class LocationsController extends Controller {
	public function index() {
		return view('page.en.locations');
	}
}
