<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JugadorController;
use App\Http\Controllers\EquipoController;

Route::get('/jugadors/cosa', [JugadorController::class, 'index'])->name('jugadores.index');
Route::get('/jugadors/create', [JugadorController::class, 'create']);
Route::post('/jugadors', [JugadorController::class, 'store'])->name('jugadores.store');
Route::get('/jugadors/{jugador}', [JugadorController::class, 'show'])->name('jugadores.show');
Route::put('/jugadors/{jugador}', [JugadorController::class, 'update'])->name('jugadores.update');
Route::delete('/jugadors/{jugador}', [JugadorController::class, 'destroy'])->name('jugadores.destroy');
Route::get('/jugadors/{jugador}/edit', [JugadorController::class, 'edit'])->name('jugadores.edit');

Route::get('/equipos', [EquipoController::class, 'index'])->name('equipos.index');
Route::get('/equipos/create', [EquipoController::class, 'create'])->name('equipos.create');
Route::post('/equipos', [EquipoController::class, 'store'])->name('equipos.store');
Route::get('/equipos/{equipo}', [EquipoController::class, 'show'])->name('equipos.show');
Route::get('/equipos/{equipo}/edit', [EquipoController::class, 'edit'])->name('equipos.edit');
Route::put('/equipos/{equipo}', [EquipoController::class, 'update'])->name('equipos.update');
Route::delete('/equipos/{equipo}', [EquipoController::class, 'destroy'])->name('equipos.destroy');

