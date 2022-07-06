@extends('layouts.main')

@section('title', 'Fazer pedido')

@section('content')
<div id="event-create-container" class="col-md-6 offset-md-3">
  <h1 class="title-pedidos">Faça seu pedido</h1>
   <form action="/events" method="POST" class="container-form">
      @csrf
         <div class="form-group">
           <label for="title">Titulo do pedido: </label>
           <input type="text" class="form-control" id="title" name="title" placeholder="Titulo do seu pedido">
         </div>

     <div class="form-group">
          <label for="title">Descrição do pedido: </label>
          <textarea name="description" id="description" class="form-control" placeholder="Escreva detalhes do seu pedido aqui"></textarea>
     </div>

     <div class="form-group">
         <label for="title">Cidade: </label>
         <input type="text" class="form-control" id="city" name="city" placeholder="Digite sua cidade">
     </div>

     <div class="form-group">
         <label for="title">Data de entrega: </label>
         <input type="date" class="form-control" id="date" name="date">
     </div>
     <input type="submit" class="btn- btn-primary btn-pedido" value="Fazer pedido">
   </form>
</div>

@endsection