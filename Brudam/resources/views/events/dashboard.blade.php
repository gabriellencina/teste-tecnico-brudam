@extends('layouts.main')

@section('title', 'Meus pedidos')

@section('content')
<div class="col-md-10 offset-md-1 dashboard-title-container">
   <h1>Meus pedidos</h1>
      <div class="col-md-10 offset-md-1 dashboard-events-container">
           <table class="table">
               <thead>
                  <tr>
                    <th scope="col">Id pedido</th>
                    <th scope="col">Titulo do pedido</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Cidade</th>
                    <th scope="col">Data do pedido</th>
                  </tr>
               </thead>
       
        <tbody>
            @foreach($pedidos as $pedido)
                <tr>
                   <td scropt="row">{{ $loop->index + 1 }}</td>
                   <td>{{$pedido['title']}}</td>
                   <td>{{$pedido['description']}}</td>
                   <td>{{$pedido['city']}}</td>
                   <td>{{$pedido['date']}}</td>
                </tr>
            @endforeach    
        </tbody>
    </table>

</div>
@endsection
