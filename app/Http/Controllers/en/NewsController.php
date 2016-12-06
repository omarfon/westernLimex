<?php

namespace App\Http\Controllers\en;

use App\Http\Controllers\Controller;

use\App\Noticias;

class NewsController extends Controller {
	public function index() {
		$noticias = noticias::simplePaginate(6);
		return view('page.en.news', compact('noticias'));
	}
}
