<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\principalPageController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\aseguradoraController;
use App\Http\Controllers\sponsorController;
use App\Http\Controllers\corredorController;
use App\Http\Controllers\carreraController;
use App\Http\Controllers\pictureController;
use App\Http\Controllers\inscripcionController;
use App\Http\Controllers\patronizeController;
use App\Http\Controllers\pdfController;
use App\Models\Inscription;

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

Route::get('/', principalPageController::class , 'show');

Route::get('paginaPrincipal', [principalPageController::class , 'show'])->name('paginaPrincipal');
Route::get('paginaPrincipalAdmin', [principalPageController::class , 'showPrincipalPage'])->name('paginaPrincipalAdmin');

Route::get('altaCorredor/{id}', [corredorController::class , 'showForm']);
Route::post('altaCorredor/{id}', [corredorController::class , 'showForm']);

Route::get('/formAdmin', [adminController::class , 'show']);
Route::post('/formAdmin', [adminController::class , 'create']);

Route::get('logout', [adminController::class , 'logout']);


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

//Ver corredores apuntados
Route::get('verCorredores' , [carreraController::class , 'showAllRaces']);
Route::post('verCorredores' , [carreraController::class , 'showAllRaces']);

Route::get('runnersRace/{id}' , [inscripcionController::class , 'showRunners']);
Route::post('runnersRace/{id}' , [inscripcionController::class , 'showRunners']);

//Sponsors-Carrera
Route::get('sponsorCarrera' , [patronizeController::class , 'showSponsors']);

//Mostrar informacion carrera
Route::get('infoRace/{id}' , [carreraController::class , 'showInfoRace']);

//inscripcion
Route::get('inscribir', [inscripcionController::class, 'inscribir'])->name('ins');
Route::post('inscribir', [inscripcionController::class, 'inscribir'])->name('ins');

//escoger aseguradora carrera
Route::get('aseguradoraC/{id}', [aseguradoraController::class, 'precioCarrera']);
Route::post('aseguradoraC/{id}', [aseguradoraController::class, 'precioCarrera']);

//Paypal
Route::get('/paypal/pay', 'App\Http\Controllers\PaymentController@payWithPayPal')->name('paypal');

//Seleccionar las carreras para cada sponsor
Route::get('selectRaces/{id}' , [patronizeController::class , 'showRaces']);
Route::post('selectRaces' , [patronizeController::class , 'showRaces'])->name('selectRaces');

//descargar pdf
Route::get('download-pdf', [inscripcionController::class, 'downloadPdf'])->name('download-pdf');
