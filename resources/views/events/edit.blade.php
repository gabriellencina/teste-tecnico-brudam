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
           <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" 
           placeholder="Titulo do seu pedido" value="{{ $pedido ->title }}">
           @error('title')
             <div class="invalid-feedback">
             {{ $message }}
             </div>
           @enderror
      </div>

     <div class="form-group">
          <label for="title">Descrição do pedido: </label>
          <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" 
          placeholder="Edite sua descrição do seu pedido aqui" value="{{ $pedido->description }}"></textarea>
          @error('description')
             <div class="invalid-feedback">
             {{ $message }}
             </div>
           @enderror
     </div>

     <div class="form-group">
         <label for="title">Cidade: </label>
         <input type="text" class="form-control" id="city" name="city" placeholder="Digite sua cidade" value="{{ $pedido->city }}">
     </div>

     <div class="form-group">
         <label for="title">Data de entrega: </label>
         <input type="date" class="form-control @error('date') is-invalid @enderror" id="date" name="date">
     </div>
     @error('date')
             <div class="invalid-feedback">
             {{ $message }}
             </div>
           @enderror
           
     <input type="submit" class="btn- btn-primary btn-pedido" value="Editar pedido">
   </form>
</div>

@endsection