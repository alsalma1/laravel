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

Route::get('paginaPrincipal', function () {
    return view('admin.paginaPrincipal');
});

//Aseguradores
Route::get('anyadirAsegurador', function () {
    return view('admin.aseguradores.anyadirAsegurador');
});
Route::get('editarAsegurador' , function() {
    return view('admin.aseguradores.editarAsegurador');
});
Route::get('desactivarAsegurador' , function() {
    return view('admin.aseguradores.desactivarAsegurador');
});