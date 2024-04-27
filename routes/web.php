<?php

use App\Http\Controllers\ProfileController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//eventos
use App\Http\Controllers\EventoController;
Route::get('/eventos/create', [EventoController::class, 'create'])->name('eventos.create');
Route::delete('/eventos/{evento}/destroy', [EventoController::class, 'destroy'])->name('eventos.destroy');
Route::get('/eventos/{evento}/edit', [EventoController::class, 'edit'])->name('eventos.edit');
Route::get('/eventos/index', [EventoController::class, 'index'])->name('eventos.index');
Route::post('/eventos/store', [EventoController::class, 'store'])->name('eventos.store');
Route::put('/eventos/{evento}/update', [EventoController::class, 'update'])->name('eventos.update');

//organizadores
use App\Http\Controllers\OrganizadorController;
Route::get('/organizadores/create', [OrganizadorController::class, 'create'])->name('organizadores.create');
Route::delete('/organizadores/{organizador}/destroy', [OrganizadorController::class, 'destroy'])->name('organizadores.destroy');
Route::get('/organizadores/{organizador}/edit', [OrganizadorController::class, 'edit'])->name('organizadores.edit');
Route::get('/organizadores/index', [OrganizadorController::class, 'index'])->name('organizadores.index');
Route::post('/organizadores/store', [OrganizadorController::class, 'store'])->name('organizadores.store');
Route::put('/organizadores/{organizador}/update', [OrganizadorController::class, 'update'])->name('organizadores.update');

//participaciones
use App\Http\Controllers\ParticipacionController;
Route::get('/participaciones/create', [ParticipacionController::class, 'create'])->name('participaciones.create');
Route::delete('/participaciones/{participacion}/destroy', [ParticipacionController::class, 'destroy'])->name('participaciones.destroy');
Route::get('/participaciones/{participacion}/edit', [ParticipacionController::class, 'edit'])->name('participaciones.edit');
Route::get('/participaciones/index', [ParticipacionController::class, 'index'])->name('participaciones.index');
Route::post('/participaciones/store', [ParticipacionController::class, 'store'])->name('participaciones.store');
Route::put('/participaciones/{participacion}/update', [ParticipacionController::class, 'update'])->name('participaciones.update');

