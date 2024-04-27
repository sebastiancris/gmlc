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

// Route::get('/', function () {

//     //return view('welcome');

// });

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/registro', 'HomeController@registro')->name('registro');

// USER
Route::get('/editarPerfil', 'HomeController@editarPerfil')->name('editarPerfil');

Route::get('/postularProyectos', 'HomeController@postularProyectos')->name('postularProyectos');

Route::get('/seguimientoProyectos', 'HomeController@seguimientoProyectos')->name('seguimientoProyectos');
Route::get('/verPostulacionesFondos', 'HomeController@verPostulacionesFondos')->name('verPostulacionesFondos');
Route::get('/enviarCaso', 'HomeController@enviarCaso')->name('enviarCaso');
Route::get('/seguimientoCasosUsu', 'HomeController@seguimientoCasosUsu')->name('seguimientoCasosUsu');

Route::get('/detalleProyecto', 'HomeController@detalleProyecto')->name('detalleProyecto');
Route::get('/respuestaProyecto', 'HomeController@respuestaProyecto')->name('respuestaProyecto');
Route::get('/agradecimiento', 'HomeController@agradecimiento')->name('agradecimiento');

// ADMIN
Route::get('/usuariosRegistrados', 'HomeController@usuariosRegistrados')->name('usuariosRegistrados');
Route::get('/postularFondos', 'HomeController@postularFondos')->name('postularFondos');
Route::get('/seguimientoFondos', 'HomeController@seguimientoFondos')->name('seguimientoFondos');

Route::get('/seguimientoCasosAdmin', 'HomeController@seguimientoCasosAdmin')->name('seguimientoCasosAdmin');