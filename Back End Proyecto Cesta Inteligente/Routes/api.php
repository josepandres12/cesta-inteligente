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

Route::post('fruits/store', 'FruitsApiController@store');
Route::get('fruits/{id}', 'FruitsApiController@show');
Route::post('fruits', 'FruitsApiController@store');
Route::put('fruits/{id}', 'FruitsApiController@update');
Route::delete('fruits/{id}', 'FruitsApiController@delete');


Route::post('recipes/store', 'RecipesApiController@store');
Route::get('recipes/{id}', 'RecipesApiController@show');
Route::post('recipes', 'RecipesApiController@store');
Route::put('recipes/{id}', 'RecipesApiController@update');
Route::delete('recipes/{id}', 'RecipesApiController@delete');

Route::post('login/store', 'LoginApiController@store');
Route::get('login/{id}', 'LoginApiController@show');
Route::post('login', 'LoginApiController@store');
Route::put('login/{id}', 'LoginApiController@update');
Route::delete('login/{id}', 'LoginApiController@delete');

