@extends('layouts.main')

@section('title', 'Brudam')

@section('content')
<div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
      <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
        <h1 class=" title1 display-4 fw-bold lh-1">Transforme a sua gestão de transporte aéreo e rodoviário</h1>
        <p class="lead"> Encomendas em tempo real, totalmente automatizado.
             Ganhe produtividade e fidelize seus clientes com o TMS Brudam, junte-se aos mais de 3 mil clientes que confiam na Brudam
             e prepare sua gestão para decolar no transporte de cargas. Faça agora seu pedido de entrega conosco!</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
         <a href="/saber"class="btn btn-primary btn-lg px-4 me-md-2 fw-bold">Saber mais</a>
        </div>
      </div>
      <div class="col-lg-4 p-0 overflow-hidden">
          <img class="rounded-lg-3" src="/img/img1.svg" alt="500" width="700">
      </div>
</div>

<div class=" container2 px-4 pt-5 my-5 text-center border-bottom">
    <h1 class=" title2 display-4 fw-bold lh-1">O software TMS criado por uma<br>equipe de transportadores!</br></h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Ninguém conhece seu negócio mais que você e a Brudam, <br> É por isso que somos os melhores em simplificar.</br></p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
      </div>
    </div>
    <div class="overflow-hidden" style="max-height: 30vh;">
      <div class="container px-5">
        <img src="/img/img2.svg"  alt="Example image" width="600" height="300" loading="lazy">
      </div>
    </div>
</div>

<div class="container3 row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="/img/img3.svg" class=" img3 d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
      </div>
      <div class=" text3 col-lg-6">
        <h1 class=" title3 display-4 fw-bold lh-1 mb-3">Benefícios para você</h1>
        <p class="lead">Faça cotações, tabelas de frete, controle de visitas, fechamento de comissões e relatórios, com eficiência e precisão.
        Invista na experiência do seu cliente e na fidelização. Através do portal do cliente é possível oferecer informações completas e seguras sobre as entregas.
        </p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
        </div>
      </div>
</div>
@endsection