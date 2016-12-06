<?php

namespace App\Http\Controllers\es;

use App\Http\Controllers\Controller;

use App\Noticias;

class HomeController extends Controller {
	public function index() {
		$noticias = noticias::simplePaginate(6);
		return view('page.es.index', compact('noticias'));
	}
}
