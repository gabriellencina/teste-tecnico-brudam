<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PedidoController;

Route::get('/', [PedidoController::class, 'index']);
Route::get('/events/create',[PedidoController::class, 'create']);

