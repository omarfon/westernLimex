<?php

namespace App\Http\Controllers;

use App\Noticias;

class EnglishController extends Controller {
	public function index() {
		return view('page.en.index');

	}
}
