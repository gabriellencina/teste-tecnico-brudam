@extends('layouts.main')

@section('title', 'Meus pedidos')

@section('content')
<div class="col-md-10 offset-md-1 dashboard-title-container">
   <h1 class="title-dashboard">Meus pedidos</h1>
      <div class="col-md-10 offset-md-1 dashboard-events-container">
        @if(count($pedidos)>0)
           <table class="table">
               <thead>
                  <tr>
                    <th scope="col">Id pedido</th>
                    <th scope="col">Titulo do pedido</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Cidade</th>
                    <th scope="col">Data do pedido</th>
                    <th scope="col">Opções</th>
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
                   <td>
                    <a href="/events/edit/{{ $pedido->id }}" class="btn btn-info edit-btn botao-editar"><i class="fa-solid fa-pen"></i> Editar</a>
                    <form action="/events/{{ $pedido->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger delete-btn botao-excluir"><i class="fa-solid fa-trash"></i> Excluir</button>
                </td>
                </tr>
            @endforeach    
        </tbody>
    </table>
    @else
    <p>Você ainda não tem pedidos =/ , <a href="/events/create">faça seu pedido!</a></p>
    @endif
</div>

@endsection
