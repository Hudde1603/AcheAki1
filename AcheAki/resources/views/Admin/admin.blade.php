@extends('Admin/homeAd')

@section('tittle','Administrador - AcheAki')

@section('content')
<link rel="stylesheet" href="{{ asset('css/adminindex.css') }}">

<body>
    <div class="principal container">
        <div class="relatorio container">
            <div class="row">
                <h4>Relatório de Registros</h4>
                <hr>
            </div>
            <div class="cards row">
                <div class="card1 card col-md-3">
                    <div class="card-body">
                        <h6 class="card-tittle"> <i class="fa fa-users"></i> Usuários</h6>
                        <p>50</p>
                        <a class="card-link" href="#">Ir para</a>
                    </div>
                </div>
                <div class="card2 card col-md-3">
                    <div class="card-body">
                        <h6 class="card-tittle"> <i class="fa fa-archive"></i> Artigos</h6>
                        <p>50</p>
                        <a class="card-link" href="#">Ir para</a>
                    </div>
                </div>
                <div class="card3 card col-md-3">
                    <div class="card-body">
                        <h6 class="card-tittle"><i class="fa fa-location-arrow"></i> Pontos de Referência </h6>
                        <p>50</p>
                        <a class="card-link" href="#">Ir para</a>
                    </div>
                </div>
                <div class="card4 card col-md-3">
                    <div class="card-body">
                        <h6 class="card-tittle"><i class="fa fa-bar-chart"></i> Total</h6>
                        <p>50</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="processo container">
            <div class="row">
                <h4>Processos</h4>
                <hr>
            </div>
            <div class="row">
                <div class="process1 process col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <h6 class="p-des-blue"><i class="fa fa-bar-chart"></i> Perdidos</h6>
                    <p class="blu-numb"><b>293</b></p>
                </div>
                <div class="process2 process col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <h6 class="p-des-blue"><i class="fa fa-bar-chart"></i> Achados</h6>
                    <p class="blu-numb"><b>293</b></p>
                </div>
                <div class="process3 process col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <h6 class="p-des-blue"><i class="fa fa-bar-chart"></i> Entregues</h6>
                    <p class="blu-numb"><b>293</b></p>
                </div>
            </div>
        </div>
    </div>
</body>

@endsection