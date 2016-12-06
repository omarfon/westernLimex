<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
 */

Auth::routes();
Route::get('/', 'es\HomeController@index');

Route::get('/home', 'HomeController@index');

Route::get('noticias/{id}', 'blogsController@show');
Route::get('noticias/{id}', 'blogsController@show');

/// Noticias
Route::resource('/blog', 'blogsController');
Route::resource('mail', 'MailController');

Route::get('/en', ['as' => 'page.en.index', 'uses' => 'EnglishController@index']);

Route::get('/es', ['as' => 'page.es.index', 'uses' => 'EspanishController@index']);

Route::get('es/home', ['as'        => 'home', 'uses'        => 'es\HomeController@index']);
Route::get('es/nosotros', ['as'    => 'nosotros', 'uses'    => 'es\NosotrosController@index']);
Route::get('es/servicios', ['as'   => 'servicios', 'uses'   => 'es\ServiciosController@index']);
Route::get('es/noticias', ['as'    => 'noticias', 'uses'    => 'es\NoticiasController@index']);
Route::get('es/locaciones', ['as'  => 'locaciones', 'uses'  => 'es\LocacionesController@index']);
Route::get('es/contactenos', ['as' => 'contactenos', 'uses' => 'es\ContactenosController@index']);

Route::get('en/home', ['as'      => 'home', 'uses'      => 'en\HomeController@index']);
Route::get('en/about', ['as'     => 'about', 'uses'     => 'en\AboutController@index']);
Route::get('en/services', ['as'  => 'services', 'uses'  => 'en\ServicesController@index']);
Route::get('en/news', ['as'      => 'news', 'uses'      => 'en\NewsController@index']);
Route::get('en/locations', ['as' => 'locations', 'uses' => 'en\LocationsController@index']);
Route::get('en/contact', ['as'   => 'contact', 'uses'   => 'en\ContactController@index']);
