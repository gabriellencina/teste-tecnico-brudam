<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonte do Google -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Sora:wght@300&display=swap" rel="stylesheet">

        <!-- CSS Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        
        <!-- CSS da aplicação -->
        <link rel="stylesheet" href="/css/styles.css">
    </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="collapse navbar-collapse" id="navbar">
             <a href="/" class="navbar-brand">
              <img src="/img/brudam.png" alt="Brudam Logo">
             </a>
          <ul class="navbar-nav">
            <li class="nav-item">
                <a href="/" class="nav-link">Inicio</a>
            </li>
            <li class="nav-item">
                <a href="/events/create" class="nav-link">Adicionar Pedido</a>
            </li>
              @auth
            <li class="nav-item">
                <a href="/dashboard" class="nav-link">Meus pedidos</a>
            </li>
            <li class="nav-item">
                <form action="/logout" method="POST">
                  @csrf
                  <a href="/logout" 
                  class="nav-link" 
                  onclick="event.preventDefault();
                  this.closest('form').submit();">Sair</a>
                </form>
            </li>
              @endauth
              @guest
            <li class="nav-item">
                <a href="/login" class="nav-link">Entrar</a>
            </li>
            <li class="nav-item">
                <a href="/register" class="nav-link">Cadastre-se</a>
            </li>
               @endguest
            </ul>
          </div>
        </nav>
      </header>
      <main>
         <div class="container-fluid">
           <div class="row">
             @if(session('msg'))
             <p class="msg">{{ session('msg') }}</p>
             @endif
            </div>
            @yield('content')
         </div>
      </main>
       <footer>
        <p>Brudam &copy; 2022</p>
       </footer>
      <script src="/js/scripts.js"></script>
      <script src="https://kit.fontawesome.com/de5e098c52.js" crossorigin="anonymous"></script>
  </body>
</html>