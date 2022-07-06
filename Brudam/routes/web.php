<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PedidoController;

Route::get('/', [PedidoController::class, 'index']);
Route::get('/events/create', [PedidoController::class, 'create'])->middleware('auth');
Route::post('/events', [PedidoController::class, 'store']);
Route::get('/dashboard', [PedidoController::class, 'dashboard'])->middleware('auth');
Route::delete('/events/{id}', [PedidoController::class, 'destroy'])->middleware('auth');
Route::get('/events/edit/{id}', [PedidoController::class, 'edit'])->middleware('auth');
Route::put('/events/update/{id}', [PedidoController::class, 'update'])->middleware('auth');

Route::get('/saber', function () {
    return view('saber');
});





