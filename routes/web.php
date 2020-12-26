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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



//ESTUDIANTES
Route::get('/estudiantes', 'NombreController@index');
Route::post('/registrar', 'NombreController@store');
Route::put('/actualizar/{id}', 'NombreController@update');
Route::delete('/eliminar/{id}', 'NombreController@delete');

Route::get('/apellidos', 'ApellidoController@archivo');

