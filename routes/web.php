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
    return view('welcome');
});

Route::get('login', function () {
    return view('auth.login');
});

Route::get('paginas', function () {
    return view('paginas.index');
});
Route::get('paginas/register', function () {
    return view('paginas.register');
});
Route::get('paginas/edit', function () {
    return view('paginas.edit');
});


Route::get('usuarios', function () {
    return view('usuarios.index');
});

Route::get('usuarios/register', function () {
    return view('usuarios.register');
});
Route::get('usuarios/edit', function () {
    return view('usuarios.edit');
});