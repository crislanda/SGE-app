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
Route::get('/eventos/create', [EventoController::class, 'create'])->name('eventos.create');
Route::get('/eventos/edit', [EventoController::class, 'edit'])->name('eventos.edit');
Route::get('/eventos/show', [EventoController::class, 'show'])->name('eventos.show');
Route::get('/eventos/index', [EventoController::class, 'index'])->name('eventos.index');
Route::delete('/eventos/destroy', [EventoController::class, 'destroy'])->name('eventos.destroy');


//organizadores

Route::get('/organizadores/create', [OrganizadorController::class, 'create'])->name('organizadores.create');
Route::post('/organizadores', [OrganizadorController::class, 'store'])->name('organizadores.store');

Route::get('/organizadores/edit', [OrganizadorController::class, 'edit'])->name('organizadores.edit');
Route::put('/organizadores/{organizador}', [OrganizadorController::class, 'update'])->name('organizadores.update');

Route::get('/organizadores/show', [OrganizadorController::class, 'show'])->name('organizadores.show');

Route::delete('/organizadores/destroy', [OrganizadorController::class, 'destroy'])->name('organizadores.destroy');

Route::get('/organizadores/index', [OrganizadorController::class, 'index'])->name('organizadores.index');


//participaciones
Route::get('/participaciones/create', [ParticipacionController::class, 'create'])->name('participaciones.create');
Route::post('/participaciones', [ParticipacionController::class, 'store'])->name('participaciones.store');

Route::get('/participaciones/edit', [ParticipacionController::class, 'edit'])->name('participaciones.edit');
Route::put('/participaciones/{participacion}', [ParticipacionController::class, 'update'])->name('participaciones.update');

Route::get('/participaciones/show', [ParticipacionController::class, 'show'])->name('participaciones.show');

Route::get('/participaciones/index', [ParticipacionController::class, 'index'])->name('participaciones.index');

