@extends('layouts.main')

@section('title', 'Brudam')

@section('content')
<div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg container-saber">
    <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
        <h1 class="display-4 fw-bold lh-1 title-saber">A Brudam é resultado de um time formado por pessoas que sabem o que fazem</h1>
        <p class="lead">Nossa história de sucesso surgiu da necessidade de ter um sistema que nos atendesse da forma que os outros não conseguiam. Especialistas no mercado de transportes de cargas, contribuímos há mais de uma década com o crescimento do setor logístico do país.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
        </div>
    </div>
    <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden">
        <img src="./img/img4.svg" alt="grupo-de-pessoas" width="500px">
    </div>
</div>

<div class="container px-4 py-5" id="featured-3">
    <h2 class="pb-4 border-bottom inititle">O que prezamos?</h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
        <div class="feature col">
            <h2 class="title1">NOSSA MISSÃO</h2>
            <p class="text">Através de pessoas fora da curva e que pensam fora das caixas, criar e customizar diariamente um software
                competitivo que contribua com a excelência do setor logístico e que nunca fique inoperante, além de ser ágil e
                amigável para os seus usuários.
            </p>
        </div>
        <div class="feature col">
            <h2 class="title1">NOSSA VISÃO</h2>
            <p class="text">Ser até 2025 a empresa de software logístico mais utilizada entre as transportadoras de qualquer porte, de modais rodoviários e aéreos.</p>
        </div>
        <div class="feature col">
            <h2 class="title1">NOSSOS VALORES</h2>
             <ul>
                <li>Verdade</li>
                <li>Transparência</li>
                <li>Parceria</li>
             </ul>
        </div>
    </div>


    @endsection