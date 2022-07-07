<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Http\Requests\StoreUpdateUserFormRequest;
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
    
    
    public function store(StoreUpdateUserFormRequest $request) {
 
        $pedido = new Pedido;
    
        $pedido->title = $request->title;
        $pedido->description = $request->description;
        $pedido->city = $request->city;
        $pedido->date = $request->date;
         
        $user = auth()->user();
        $pedido->user_id = $user->id;
   
        $pedido->save();
        
        return redirect('/dashboard')->with('msg', 'Parabéns, seu pedido foi relizado com sucesso!');
    } 
      

    public function dashboard() {

         $user = auth()->user();

         $pedidos = $user->pedidos;  
          
         return view('events.dashboard',['pedidos' => $pedidos]);
    }


    public function destroy($id) {

        Pedido::findOrFail($id)->delete();

        return redirect('/dashboard')->with('msg', 'Pedido excluído com sucesso!');
    }


    public function edit($id) {

        $pedido = Pedido::findOrFail($id);

        return view('events.edit', ['pedido' => $pedido]);
    } 

    
    public function update(StoreUpdateUserFormRequest $request) {

        Pedido::findOrFail($request->id)->update($request->all());
        
        return redirect('/dashboard')->with('msg', 'Evento editado com sucesso!');

    }


}
