<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//La ruta se llama de http://miservidor/api/ventas
Route::get('/vista1/{local}', 'ApiVentas@index');
//Route::get('/vista1', 'ApiVentas@index');

Route::get('/vista1/{id}','ApiVentas@show');
Route::post('/vista1','ApiVentas@store');
Route::put('/vista1/{id}','ApiVentas@update');
Route::delete('/vista1/{id}','ApiVentas@delete');
