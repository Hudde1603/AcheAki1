@extends('home')

@section('tittle','Itens Perdidos')

@section('content')

<link rel="stylesheet" href="{{ asset('css/item.css') }}">


<div class="corpo container">
    <div class="titulo row">
        <h2 class="itemP">Item Perdido</h2>
    </div>
    <div class="resto row">
        <div class="imagem col-sm-12 col-md-6 col-lg-6">
            <img src="img/Rectangle 1267.png" alt="">
            <p class="location">Angola-Luanda</p>
            <p class="data">20/12/2021</p>
        </div>
        <div class="descri col-sm-12 col-md-6 col-lg-6">
            <h6 class="nomeitem h4">Iphone 11 Pro</h6>
            <h5 class="descri_titulo">Descrição</h5>
            <p class="descricao_txt text-justify">
                O xxx é uma plataforma online criada com o propósito de ajudar a trazer de volta aos
                seus familiares as pessoas perdidas e devolver aos seus respectivos donos os bens e
                animais de estimação perdidos.
            </p>
            <input class="button-place btn btn-primary btn" type="button" value="Marcar ponto de encontro">
            <input class="button-place2 btn btn-primary btn" type="button" value="Marcar ponto de Referência">

        </div>
    </div>

</div>

@endsection