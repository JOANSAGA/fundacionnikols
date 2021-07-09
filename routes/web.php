<?php

use Illuminate\Support\Facades\Route;

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
    return view('web.welcome');
})->name('inicio');

Route::get('/nosotros', function () {
    return view('web.nosotros');
})->name('nosotros');

Route::get('/servicios', function () {
    return view('web.servicios');
})->name('servicios');

Route::get('/publicaciones', function () {
    return view('web.publicaciones');
})->name('publicaciones');

Route::get('/donaciones', function () {
    return view('web.donaciones');
})->name('donaciones');

Route::get('/contacto', function () {
    return view('web.contacto');
})->name('contacto');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
