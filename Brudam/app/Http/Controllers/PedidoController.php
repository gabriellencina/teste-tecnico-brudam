<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pedido;
use App\Models\User;

class PedidoController extends Controller
{

    public function index() {
        
        $pedidos = Pedido::all();

        return view('home',['pedidos' => $pedidos]);
    }


    public function create() {
        return view('events.create');
    }
    
    
    public function store(Request $request) {
        $pedido = new Pedido;

        $pedido->title = $request->title;
        $pedido->description = $request->description;
        $pedido->city = $request->city;
        $pedido->date = $request->date;

        $pedido->save();

        return redirect('/')->with('msg', 'Parabéns, seu pedido foi relizado com sucesso!');
    }
      

    public function dashboard() {
        
          $pedidos = Pedido::all();
          return view('events.dashboard',['pedidos'=> $pedidos]);
    }


}
