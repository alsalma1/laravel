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



//Carrera
Route::get('anyadirCarrera', [carreraController::class , 'showAddRace']);

Route::post('anyadirCarrera', [carreraController::class , 'addRace']);

//cambiar estado carrera
Route::get('editarCarrera', [carreraController::class , 'showEditRace'])->name('editarCarrera');
Route::get('estadoCarrera/{id}', [carreraController::class , 'changeState']);

//editar datos carrera
Route::get('datosCarrera/{id}', [carreraController::class , 'editRace']);
Route::post('datosCarrera/{id}', [carreraController::class , 'editRace']);

//editar imagen carrera
Route::get('imagenCarrera/{id}', [carreraController::class , 'editImage']);
Route::post('imagenCarrera/{id}', [carreraController::class , 'editImage']);

//editar cartel de promoción carrera
Route::get('cartelCarrera/{id}', [carreraController::class , 'editProm']);
Route::post('cartelCarrera/{id}', [carreraController::class , 'editProm']);

//subir fotos
Route::get('subirFotos/{id}', [pictureController::class , 'uploadF']);
Route::post('subirFotos/{id}', [pictureController::class , 'uploadF']);

//ver fotos
Route::get('verFotos/{id}', [pictureController::class , 'viewF']);


// Route::get('desactivarAsegurador' , function() {
//     return view('admin.aseguradores.desactivarAsegurador');
// });
