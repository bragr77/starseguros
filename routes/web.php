<?php

use Illuminate\Support\Facades\Route;

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
    return view('frontend.index');
})->name('index');

Route::get('/english', function () {
    return view('frontend.english');
})->name('english');

Auth::routes();

/* agrupamos la ruta por grupo y usamos un mismo prefijo */
Route::group(['prefix' => 'panel'], function () {

    Route::get('/', 'HomeController@index')->name('panel');

    Route::resource('emails', 'EmailsmasivosController');

    Route::resource('mensajes', 'MensajeController');

    Route::resource('formularios', 'FormularioController');

});

Route::get('/msjenviado', function () {
    return view('frontend.msjenviado');
})->name('msjenviado');

Route::get('/formulario', function () {
    return view('frontend.formulario');
})->name('formulario');

