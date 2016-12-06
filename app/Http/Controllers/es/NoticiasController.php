<?php

namespace App\Http\Controllers\es;

use App\Http\Controllers\Controller;

use App\Noticias;

class NoticiasController extends Controller {
	public function index() {

		$noticias = noticias::simplePaginate(6);

		return view('page.es.noticias', compact('noticias'));

	}

}
