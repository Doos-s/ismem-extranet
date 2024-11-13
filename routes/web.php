<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/alumnos/listar', [
    App\Http\Controllers\AlumnosController::class, "listar"
]);