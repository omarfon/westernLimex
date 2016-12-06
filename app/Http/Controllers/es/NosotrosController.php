<?php

namespace App\Http\Controllers\es;

use App\Http\Controllers\Controller;

class NosotrosController extends Controller {
	public function index() {
		return view('page.es.nosotros');
	}
}
