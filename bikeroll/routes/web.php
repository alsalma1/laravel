<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\principalPageController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\aseguradoraController;



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

Route::get('/', principalPageController::class);

Route::get('/paginaPrincipal', [principalPageController::class , 'show']);

//Aseguradores
Route::get('mostrarTodosAs', [aseguradoraController::class , 'index']);
Route::get('anyadirAseguradora', [aseguradoraController::class , 'create']);
Route::get('editarAsegurador' , [aseguradoraController::class , 'edit']);
Route::get('/' , [adminController::class , 'create']);
// Route::get('desactivarAsegurador' , function() {
//     return view('admin.aseguradores.desactivarAsegurador');
// });