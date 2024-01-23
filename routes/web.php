<?php

use App\Http\Controllers\AsignacionPreviaController;
use App\Models\AsignacionPrevia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AsignacionAulaController;
use App\Http\Controllers\AulaController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\UsuarioController;

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
    return view('auth.login');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('asignaciones', AsignacionPreviaController::class);


Route::get('/asignaciones', [AsignacionPreviaController::class, 'index'])->name('asignaciones.index');
Route::post('/asignaciones/store', [AsignacionPreviaController::class, 'store'])->name('asignaciones.store');

Route::post('/asignaciones/asignar-aulas/{asignacionPrevia}', [AsignacionPreviaController::class, 'asignarAulas'])
    ->name('asignaciones.asignarAulas');

Route::get('/aulas-asignadas', [AsignacionPreviaController::class, 'aulasAsignadas'])->name('aulas.asignadas');



Route::post('/asignaciones/asignar-aula/{asignacionPrevia}', [AsignacionPreviaController::class, 'asignarAula'])
    ->name('asignaciones.asignarAula');

Route::post('/asignaciones/asignar-aulas-masivo', [AsignacionPreviaController::class, 'asignarAulasMasivo'])
    ->name('asignaciones.asignarAulasMasivo');

Route::resource('docentes', DocenteController::class);
Route::resource('materias', MateriaController::class);
Route::resource('aulas', AulaController::class);
Route::resource('usuarios', UsuarioController::class);