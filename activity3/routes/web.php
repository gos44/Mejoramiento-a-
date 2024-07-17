<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OriginController;
use App\Http\Controllers\TavelerController;




Route::get('origen/listar', [OriginController::class, 'index'])->name('origen.index');
Route::get('origen/create', [OriginController::class, 'create']);
Route::post('origen/store', [OriginController::class, 'store'])->name('origen.store');
Route::get('origen/{origin}', [OriginController::class, 'show'])->name('origen.show');
Route::put('origenes/{origin}', [OriginController::class, 'update'])->name('origen.update');
Route::delete('origin/{origin}', [OriginController::class, 'destroy'])->name('origen.destroy');
Route::get('origen/{origin}/editar', [OriginController::class, 'edit'])->name('origen.edit');

Route::get('viajero/listar', [TavelerController::class, 'index'])->name('viajero.index');
Route::get('viajero/create', [TavelerController::class, 'create']);
Route::post('viajero/store', [TavelerController::class, 'store'])->name('viajero.store');
Route::get('viajero/{taveler}', [TavelerController::class, 'show'])->name('viajero.show');
Route::put('viajeros/{taveler}', [TavelerController::class, 'update'])->name('viajero.update');
Route::delete('taveler/{taveler}', [TavelerController::class, 'destroy'])->name('viajero.destroy');
Route::get('viajero/{taveler}/editar', [TavelerController::class, 'edit'])->name('viajero.edit');