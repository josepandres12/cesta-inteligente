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

Route::get('/Saludar/{nombre}', function ($nombre) {
    return "HOLA".$nombre;
});

Route::get('/Saludar2/', function () {
    return view ('saludar');
});

Route::get('/Saludar2/{nombre}', function ($nombre) {
    return view ('saludar',['nombre'=>$nombre]);
});
//Vista del Local
Route::get('/vista1/{local}', 'local@calcularVentas');

//
Route::get('/inicio/{nombre}', function ($nombre) {
    return view ('inicio',['nombre'=>$nombre]);
});

Route::get('/totales', function () {
    return view('totales');
});
//Practicando
Route::get('/aportes/{aporte}', 'notas@mostrarNotas');
Route::get('/estudiantes/{total}','promedio@promedioEstu');
//Ruta Examen
Route::get('/vistaExamen/{ubicacion}','Examen1@mostrarUbicacion');
//Route::get('/vistaExamen/{ubicacion}/{tipo}','Examen1@mostrarUbicacion','Examen1Tipo@Listartipo');
//La Rute de arriba era la que en la misma vista iba a permitir filtrar ubicación y tipo
//Ruta Para Trabajar Con Guzzle
Route::get('/vistaGuzzle', 'demoguzzle@consultarPosts');