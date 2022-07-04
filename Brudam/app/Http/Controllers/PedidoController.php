<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pedido;

class PedidoController extends Controller
{

    public function index() {
        $pedidos = Pedido::all();

        return view('home',['pedidos' => $pedidos]);
    }

    
    public function create(){
        return view('events.create');
    }












}
