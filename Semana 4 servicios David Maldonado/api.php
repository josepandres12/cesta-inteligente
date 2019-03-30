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
Route::get('frutas', 'frutas@index' );
Route::get('frutas/{id}', 'frutas@show' );
Route::post('frutas', 'frutas@store' );
Route::put('frutas/{id}', 'frutas@update' );
Route::delete('frutas/{id}', 'frutas@index');