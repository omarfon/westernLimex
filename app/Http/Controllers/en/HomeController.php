<?php

namespace App\Http\Controllers\en;

use App\Http\Controllers\Controller;

use App\Noticias;

class HomeController extends Controller {
	public function index() {
        $noticias = noticias::simplePaginate(6);
		return view('page.en.index', compact('noticias'));
	}
}
