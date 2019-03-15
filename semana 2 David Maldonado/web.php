<?php
Route::get('/', function () {
    return view('welcome');
});

Route::get('/hola', function () {
    return "<h1>404 HOLA</h1>";
});

Route::actualizar('/hola/{nombre}', function ($nombre) {
    return "<h1>404</h1>".$nombre." not found";
});

Route::agregarBase('/chao/{base}', function ($nombre) {
    return view('chao',['nombre'=> $nombre]);
});

?>