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
    return view('index');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
Route::resource('fechas', 'FechasController');

Auth::routes();
Route::resource('jugadores', 'JugadoresController');

Auth::routes();
Route::resource('posiciones', 'PosicionesController');

Auth::routes();
Route::resource('estadisticas', 'EstadisticasController');

Auth::routes();
Route::resource('/moders', ModeradorController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/users', UserController::class);
Auth::routes();
