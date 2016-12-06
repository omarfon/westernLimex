<?php

namespace App\Http\Controllers;

use App\Noticias;

class EspanishController extends Controller {
	public function index() {
		$noticias = noticias::simplePaginate(6);
		return view('page.es.index', compact('noticias'));

	}
}
