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
    return view('about');
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

/*gestionar imagenes */
Route::resource('foto', 'PhotoController');
