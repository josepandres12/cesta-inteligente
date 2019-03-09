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
//Rutas Antiguas
Route::get('/', function () {
    return view('welcome');
});
//Rutas Ejemplo
Route::get('/Saludar/{nombre}', function ($nombre) {
    return "HOLA".$nombre;
});

Route::get('/Saludar2/', function () {
    return view ('saludar');
});

Route::get('/Saludar2/{nombre}', function ($nombre) {
    return view ('saludar',['nombre'=>$nombre]);
});
//Ruta Laboratorio
Route::get('/vista1/{local}', function ($local) {
    return view ('vista1',['local'=>$local]);
});
//Ruta Vue Ejemplo
Route::get('/ejemplovue', function () {
    return view('ejemplovue');
});