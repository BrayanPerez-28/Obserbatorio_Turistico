<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('cpanel.miVista');
});
Route::get('/mapa', function () {
    return view('cpanel.mapa');
});

Route::get('/encuesta', function () {
    return view('encuesta');
});

Route::get('/repositorio', function () {
    return view('cpanel.repositorio');
});