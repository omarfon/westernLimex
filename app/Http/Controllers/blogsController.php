<?php

namespace App\Http\Controllers;

use App\noticias;

use Illuminate\Http\Request;

use Storage;

class blogsController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {

		return view('admin.blog.desarrollo');
	}

	public function create() {
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {

		$this->validate($request, [
				'title_en'   => 'required',
				'title_es'   => 'required',
				'content_en' => 'required',
				'content_es' => 'required',
				'author'     => 'required',
			]);

		$noticias             = new Noticias();
		$noticias->title_en   = $request->title_en;
		$noticias->title_es   = $request->title_es;
		$noticias->content_en = $request->content_en;
		$noticias->content_es = $request->content_es;
		$noticias->author     = $request->author;

		$img = $request->file('photo');

		$file_route = time().'_'.$img->getClientOriginalName();

		Storage::disk('photo')->put($file_route, file_get_contents($img->getRealPath()));

		$noticias->photo = $file_route;

		if ($noticias ->save()) {
			return back()->with('msj', 'Datos guardados');
		} else {
			return back()->with('errormsj', 'Los datos no se guardaron');
		}

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {

        $noticias = noticias::where('id', $id)->first();
		return view('admin.blog.desarrollo', compact('noticias'));

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {

		$noticia = noticias::find($id);
		return view('home')->with(['edit' => true, 'noticia' => $noticia]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {

		$this->validate($request, [
				'title_en'   => 'required',
				'title_es'   => 'required',
				'content_en' => 'required',
				'content_es' => 'required',
				'author'     => 'required',
			]);

		$noticias             = Noticias::find($id);
		$noticias->title_en   = $request->title_en;
		$noticias->title_es   = $request->title_es;
		$noticias->content_en = $request->content_en;
		$noticias->content_es = $request->content_es;
		$noticias->author     = $request->author;

		$img = $request->file('photo');

		$file_route = time().'_'.$img->getClientOriginalName();

		Storage::disk('photo')->put($file_route, file_get_contents($img->getRealPath()));
		Storage::disk('photo')->delete($request->img);

		$noticias->photo = $file_route;

		if ($noticias->save()) {
			return redirect('home');
		} else {
			return back()->with('errormsj', 'Los datos no se guardaron');
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		//
		noticias::destroy($id);

		return back();
	}
}
