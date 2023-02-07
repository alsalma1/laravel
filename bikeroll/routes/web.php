<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\principalPageController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\aseguradoraController;
use App\Http\Controllers\sponsorController;
use App\Http\Controllers\corredorController;
use App\Http\Controllers\carreraController;


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

Route::post('/formAdmin', [adminController::class , 'create']);


//Aseguradores
Route::get('anyadirAseguradora', [aseguradoraController::class , 'create']);
Route::post('anyadirAseguradora', [aseguradoraController::class , 'create']);
Route::get('mostrarTodosAs', [aseguradoraController::class , 'index'])->name('mostrarTodosAs');
Route::get('editarAseguradora/{id}' , [aseguradoraController::class , 'edit']);
Route::post('editarAseguradora/{id}' , [aseguradoraController::class , 'edit']);
Route::get('activarAseguradora/{id}' , [aseguradoraController::class , 'activate']);

//Sponsors
Route::get('anyadirSponsor' , [sponsorController::class , 'create']);
Route::post('anyadirSponsor' , [sponsorController::class , 'create']);
Route::get('mostrarSponsors', [sponsorController::class , 'index'])->name('mostrarSponsors');
Route::get('editarSponsor/{id}' , [sponsorController::class , 'edit']);
Route::post('editarSponsor/{id}' , [sponsorController::class , 'edit']);
Route::get('activarSponsor/{id}' , [sponsorController::class , 'activate']);
Route::get('editarLogo/{id}' , [sponsorController::class , 'editLogo']);
Route::post('editarLogo/{id}' , [sponsorController::class , 'editLogo']);



//Carrera
Route::get('anyadirCarrera', [carreraController::class , 'showAddRace']);
Route::post('anyadirCarrera', [carreraController::class , 'addRace']);

Route::get('editarCarrera', [carreraController::class , 'showEditRace']);
Route::get('desactivarCarrera', [carreraController::class , 'deleteRace']);
