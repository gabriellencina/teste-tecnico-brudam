<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PedidoController;

Route::get('/', [PedidoController::class, 'index']);
Route::get('/events/create', [PedidoController::class, 'create'])->middleware('auth');
Route::post('/events', [PedidoController::class, 'store']);

Route::get('/saber', function () {
    return view('saber');
});


Route::get('/dashboard', [PedidoController::class, 'dashboard'])->middleware('auth');



