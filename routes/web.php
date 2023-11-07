<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/**
 * Route::get()    |  Consultar
 * Route::post()   |  Guardar
 * Route::delete() |  Eliminar
 * Route::put()    |  Actualizar
 */

Route::get('/', function () {
    // return view('welcome');
    return 'Ruta Home';
});

Route::get('blog', function () {
    return 'Listado de publicaciones';
});

Route::get('blog/{slug}', function ($slug) {
    // consulta a la base de datos
    return $slug;
});

Route::get('buscar', function (Request $request) {
    // consulta a la base de datos
    return $request->all();
    // http://localhost:8000/buscar?query=php
    // {"query":"php"}
});