@extends('Admin/homeAd')

@section('tittle','Gerenciamento de Artigos')

@section('content')

<link rel="stylesheet" href="{{ asset('css/artigos.css') }}">

<body>
    <div class="formulario container">
        <h3>Informações</h3>
        <hr>
        <form class="search-box">
            <div class="container register">
                <div class="row f1">
                    <div class="col-md-6 col-sm-6">
                        <label for="o que você achou?">O que você achou?</label>
                        <input class="form-control form-control-sm" type="text" required><br>
                        <label for="">Descrição</label>
                        <textarea class="form-control form-control-sm" rows="6" required></textarea> <br>
                        <select class="form-control" required>
                            <option>Categoria...</option>
                            <option>Categoria...</option>
                        </select><br>
                        <button class="btn btn-primary btn_confirmar align-self-center" type="submit">Confirmar</button>
                    </div>
                    <div class="col-md-6">
                        <label for="">Anexar Foto</label>
                        <input class="form-control-file" type="file" id="ficheiro">
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="gerenciamento container">
        <h3>Gerenciamento de Artigos</h3>
        <hr>
        <div class="datagrid row">
            <div class="grelha col-md-12">
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Id </th>
                            <th scope="col">Nome </th>
                            <th scope="col">Data </th>
                            <th scope="col">Status </th>
                            <th scope="col">Local </th>
                            <th scope="col">Cliente </th>
                            <th scope="col">Operação </th>
                            <th scope="col"> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Iphone 11 Pro MAx</td>
                            <td>12/12/2021</td>
                            <td>Perdido</td>
                            <td>Zamba 2</td>
                            <td>Hudson</td>
                            <td><a class ="Edit" href="#"> <i class ="fa fa-pencil"></i> Editar </a></td>
                            <td><a class ="delete" href="#"> <i class ="fa fa-trash"></i> Excluir</a> </a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>



@endsection