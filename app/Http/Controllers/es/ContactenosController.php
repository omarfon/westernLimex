<?php

namespace App\Http\Controllers\es;

use App\Http\Controllers\Controller;

class ContactenosController extends Controller {
	public function index() {
		return view('page.es.contactenos');
	}
}
