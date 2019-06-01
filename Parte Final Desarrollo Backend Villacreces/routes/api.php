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

Route::get('apifruits', 'FruitsApiController@index');
Route::get('´apifruits/{id}', 'FruitsApiController@show');
Route::post('apifruits', 'FruitsApiController@store');
Route::put('apifruits/{id}', 'FruitsApiController@update');
Route::delete('apifruits/{id}', 'FruitsApiController@delete');


Route::post('apirecipes/store', 'RecipesApiController@store');
Route::get('apirecipes/{id}', 'RecipesApiController@show');
Route::post('apirecipes', 'RecipesApiController@store');
Route::put('apirecipes/{id}', 'RecipesApiController@update');
Route::delete('apirecipes/{id}', 'RecipesApiController@delete');

Route::post('apilogin/store', 'LoginApiController@store');
Route::get('apilogin/{id}', 'LoginApiController@show');
Route::post('apilogin', 'LoginApiController@store');
Route::put('apilogin/{id}', 'LoginApiController@update');
Route::delete('apilogin/{id}', 'LoginApiController@delete');

Route::get('sensor', 'SensorController@index');

