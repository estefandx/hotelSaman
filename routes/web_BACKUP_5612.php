<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

//Auth::routes();

Route::get('/home', 'HomeController@index');

//rutas  de la pagina
Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/gallerysingle', function () {
    return view('gallerysingle');
});

Route::get('/services', function () {
    return view('services');
});

<<<<<<< HEAD
//NUEVAS RUTAS

Route::get('/ingresar', function () {	//Bryan asumo que asi sera la ruta para el login
  	return view('ingresar');
});

Route::get('/restaurante', function () {	//Ruta para Restaurante las Tapas
  	return view('restaurante');
});

Route::get('/piscinas', function () {	//Ruta para vista de polideportivo y piscinas
  	return view('piscinas');
});

Route::get('/eventos', function () {	//Ruta para la vista eventos saman
  	return view('eventos');
});

Route::get('/reglamento', function () {	//Ruta para el reglamento del hotel
  	return view('reglamento');
});
=======

/*panel de administracion*/

Route::get('/panel', function () {
    return view('panel.panel');
});


Route::get('/panel', function () {
    return view('panel.panel');
});
Route::get('/logeo', function () {
    return view('auth.logeo');
});


Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/list', 'HomeController@listar');
>>>>>>> origin/paneladmin
