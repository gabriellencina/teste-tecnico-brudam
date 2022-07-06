@extends('layouts.main')

@section('title', 'Editando: ' . $pedido->title)

@section('content')
<div id="event-create-container" class="col-md-6 offset-md-3">
  <h1 class="title-editando">Editando: {{ $pedido->title }}</h1>
   <form action="/events/update/{{ $pedido->id }}" method="POST" class="container-form">
      @csrf
      @method('PUT')
         <div class="form-group">
           <label for="title">Titulo do pedido: </label>
           <input type="text" class="form-control" id="title" name="title" placeholder="Titulo do seu pedido" value="{{ $pedido->title }}">
         </div>

     <div class="form-group">
          <label for="title">Descrição do pedido: </label>
          <textarea name="description" id="description" class="form-control" placeholder="Escreva detalhes do seu pedido aqui" value="{{ $pedido->description }}"></textarea>
     </div>

     <div class="form-group">
         <label for="title">Cidade: </label>
         <input type="text" class="form-control" id="city" name="city" placeholder="Digite sua cidade" value="{{ $pedido->city }}">
     </div>

     <div class="form-group">
         <label for="title">Data de entrega: </label>
         <input type="date" class="form-control" id="date" name="date" value="{{ $pedido->date }}">
     </div>
     <input type="submit" class="btn- btn-primary btn-pedido" value="Editar pedido">
   </form>
</div>

@endsection