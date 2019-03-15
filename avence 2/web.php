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
    return view('welcome');
});
Route::get('/pantalla', function () {
    return view('Pantalla');
});
Route::get('/ventas/{local}', 'local@calcularventas');


Route::get('proyecto/{id_table}, {type}', array('as' => 'cesta', 'uses' => 'ItalianController@pastaWithMeatBalls'))->where(‘id_table’, ‘[0-9]+’);