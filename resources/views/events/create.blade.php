@extends('layouts.main')

@section('title', 'Fazer pedido')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
  <h1 class="title-pedidos">Faça seu pedido</h1>

   <form action="/events" method="POST" class="container-form">
      @csrf
        
      <div class="form-group">
           <label for="title">Titulo do pedido: </label>
           <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" 
           placeholder="Titulo do seu pedido">
           @error('title')
             <div class="invalid-feedback">
             {{ $message }}
             </div>
           @enderror
      </div>

     <div class="form-group">
          <label for="title">Descrição do pedido: </label>
          <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" 
          placeholder="Escreva detalhes do seu pedido aqui"></textarea>
          @error('description')
            <div class="invalid-feedback">
             {{ $message }}
            </div>
           @enderror
     </div>

     <div class="form-group">
         <label for="title">Cidade: </label>
         <input type="text" class="form-control @error('city') is-invalid @enderror" id="city" name="city" 
         placeholder="Digite sua cidade">
         @error('city')
             <div class="invalid-feedback">
             {{ $message }}
             </div>
           @enderror
     </div>

     <div class="form-group">
         <label for="date">Data de entrega: </label>
         <input type="date" class="form-control  @error('date') is-invalid @enderror" id="date" name="date">
         @error('date')
             <div class="invalid-feedback">
             {{ $message }}
             </div>
           @enderror
        </div>
      
     <input type="submit" class="btn- btn-primary btn-pedido" value="Fazer pedido">

   </form>
</div>

@endsection