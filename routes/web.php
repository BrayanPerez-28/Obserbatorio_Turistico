<?php

<<<<<<< HEAD
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TablaController;
=======
use App\Http\Controllers\ProveedoresController;
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

>>>>>>> 62f665bbe0314b9ae41b6be391e1b6dbb2c32772

Route::get('/', function () {
    return view('cpanel.index');
});


<<<<<<< HEAD
Route::get('/table', [TablaController::class, 'index'])->name('tabla');
Route::get('/tabla/create', [TablaController::class, 'create'])->name('contacts.create');
Route::post('/tabla', [TablaController::class, 'store'])->name('contacts.store');
Route::get('/tabla/{id}/edit', [TablaController::class, 'edit'])->name('contacts.edit');
Route::put('/tabla/{id}', [TablaController::class, 'update'])->name('contacts.update');
Route::delete('/tabla/{id}', [TablaController::class, 'destroy'])->name('contacts.destroy');

Route::get('/seccion', function () {
    return view('cpanel.DashBoard');
});
=======


Route::get('/table', function () {
    return view('cpanel.js-grid');
})->name('tabla');
>>>>>>> 62f665bbe0314b9ae41b6be391e1b6dbb2c32772
