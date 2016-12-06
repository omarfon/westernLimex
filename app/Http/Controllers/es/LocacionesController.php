<?php

namespace App\Http\Controllers\es;

use App\Http\Controllers\Controller;

class LocacionesController extends Controller {
	public function index() {
		return view('page.es.locaciones');
	}
}
