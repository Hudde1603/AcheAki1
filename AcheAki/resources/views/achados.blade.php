<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="{{ asset('css/jquery.slim.min.js') }}"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="{{ asset('css/popper.min.js') }}"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="{{ asset('css/bootstrap.min.js') }}"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css">
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/after_nav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/achados.css') }}">

    <title>Achados</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light  fixed-top bg-light">

        <a class="navbar-brand" href="#">LOGO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav mr-auto">

                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('home') }}">Home </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('achados') }}">Achados </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('perdidos') }}">Perdidos </a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="tudo mrge1">
        <div class="box_wh1">
            <div class="itens-wth">
                <h6 class="h6h">Pesquisar Item Achados </h6>
                <form action="{{ route('itemachado') }}" method="POST">
                    @csrf
                    <div class="search-box">
                        <input class="search" type="search" placeholder="Pesquisar Item" aria-label="Search">
                        <button class="search-buttton" type="submit">Pesquisar</button> <br>
                    </div>

                    <select class="button-search" name="selType">
                        <option>Categoria</option>
                        <option value="electronico">electronico</option>
                        <option value="acessorios">acessorios</option>
                        <option value="documento">documento</option>
                    </select>

                </form>
                <div class="tudo mrg-tudo">
                    <h5 class="intesRecentes-Scroll">Itens recentes</h5>


                    <ul class="este over">

                        @foreach ($todos as $key)
                            <<!-- Mandar id do item selecionado -->
                                <a class="itemFor"
                                    href="{{ route('itemUnico', ['id' => $key->idartigo, 'nome' => $key->item_name]) }}">
                                    <li>
                                        <img src="{{ asset('img/Rectangle 1279.png') }}" class="scrollIMG-Index"
                                            alt="" srcset="">
                                        <p>
                                        <h6>{{ $key->item_name }}</h6>
                                        </p>
                                        <p>Angola-{{ $key->local }}
                                        <p>
                                            Data:{{ $key->data }}</p>
                                    </li>
                                </a>
                        @endforeach


                    </ul>


                </div>

            </div>
        </div>
    </div>

    @if (Session::has('success'))
        <div class="tudo wrapper ">
            {{ Session::get('success') }}

        </div>
    @endif

    <div class="tudo wht mrge2 container">
        <div class="box_wh2">

            <div class="itens-wth">
                <h6 class="h6h"> Registar Item Achados </h6>
                <form id="form_item" class="search-box" action="{{ route('achados') }}" method="post">
                    @csrf
                    <div class="container register">
                        <div class="row f1">
                            <div class="col-md-6 col-sm-6">
                                @if ($errors->has('item_name'))
                                    <span class="error" style="color: red">*</span>
                                    <style>
                                        .erro {
                                            color: red
                                        }

                                    </style>
                                @endif
                                <label for="o que você achou?" class="erro">O que você achou?</label>
                                <input class="form-control form-control-sm" type="text" name="item_name"
                                    value="{{ old('item_name') }}"><br>

                                @if ($errors->has('local'))
                                    <span class="error" style="color: red">*</span>
                                    <style>
                                        .erro {
                                            color: red
                                        }

                                    </style>
                                @endif

                                <label for="o que você achou?" class="erro">Local ou Cidade</label>
                                <input class="form-control form-control-sm" type="text" name="local"
                                    value="{{ old('descricao') }}"><br>

                                @if ($errors->has('local'))
                                    <span class="error" style="color: red">*</span>
                                    <style>
                                        .erro {
                                            color: red
                                        }

                                    </style>
                                @endif

                                <label for="" class="erro">Descrição</label>
                                <textarea class="form-control form-control-sm" name="descricao" rows="6"> {{ old('descricao') }}</textarea> <br>

                                @if ($errors->has('selType'))
                                    <span class="error" style="color: red">*</span>
                                    <style>
                                        .erro {
                                            color: red
                                        }

                                    </style>
                                @endif
                                <select class="form-control erro" name="selType" value="{{ old('selType') }}">
                                    <option>Categoria</option>
                                    <option value="electronico">electronico</option>
                                    <option value="acessorios">acessorios</option>
                                    <option value="documento">documento</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                @if ($errors->has('foto'))
                                    <span class="error" style="color: red">*</span>
                                    <style>
                                        .erro {
                                            color: red
                                        }

                                    </style>
                                @endif
                                <label for="" class="erro">Anexar Foto</label>
                                <input class="form-control-file" type="file" name="foto" value="{{ old('foto') }}"
                                    id="ficheiro"><br>
                                <!-- Botão de opção-->

                                <!--  Para electronico -->
                                @if ($errors->has('Cor'))
                                    <span class="error" style="color: red">*</span>
                                    <style>
                                        .erro {
                                            color: red
                                        }

                                    </style>
                                @endif
                                <label class="electronico box erro" for="Cor">Cor</label>
                                <input class="electronico box" id="" class="" name="cor"
                                    value="{{ old('cor') }}" type="text" placeholder="Exemplo: Pedro">

                                @if ($errors->has('marca'))
                                    <span class="error" style="color: red">*</span>
                                    <style>
                                        .erro {
                                            color: red
                                        }

                                    </style>
                                @endif

                                <label class="electronico box erro" for="Marca">Marca</label>
                                <input class="electronico box" id="Marca" class="" type="text"
                                    name="marca" value="{{ old('marca') }}" placeholder="Exemplo: Pedro"><br>

                                @if ($errors->has('modelo'))
                                    <span class="error" style="color: red">*</span>
                                    <style>
                                        .erro {
                                            color: red
                                        }

                                    </style>
                                @endif

                                <label class="electronico box erro" for="Modelo">Modelo</label>
                                <input class="electronico box" id="Modelo" class="" type="text"
                                    name="modelo" value="{{ old('modelo') }}" placeholder="Exemplo: Pedro"><br>

                                <!-- Para cada categoria de electronicos-->
                                @if ($errors->has('Telefone_Tipo'))
                                    <span class="error" style="color: red">*</span>
                                    <style>
                                        .erro {
                                            color: red
                                        }

                                    </style>
                                @endif
                                <label class="Telefone box1 box erro" for="Telefone">Telefone Tipo</label>
                                <input class="Telefone box1 box" id="Telefone" class="" type="text"
                                    name="Telefone_Tipo" value="{{ old('Telefone_Tipo') }}"
                                    placeholder="Exemplo: Pedro"><br>


                                <!-- Radio Buttum cada categoria de electronicos-->
                                <input class="electronico box" type="radio" id="age1" name="Ipad" value="Ipad">
                                <label class="electronico box" for="age1">Ipad</label>
                                <input class="electronico box" type="radio" id="age2" name="Telefone" value="Telefone">
                                <label class="electronico box" for="age2">Telefone</label>
                                <input class="electronico box" type="radio" id="age3" name="Computador"
                                    value="Computador">
                                <label class="electronico box" for="age3">Computador</label>



                                <!-- end-->

                                <!-- acessorios -->
                                @if ($errors->has('cor_acessorio'))
                                    <span class="error" style="color: red">*</span>
                                    <style>
                                        .erro {
                                            color: red
                                        }

                                    </style>
                                @endif
                                <label class="acessorios box erro" for="Cor">Cor</label><br>
                                <input class="acessorios box" id="" class="" name="cor_acessorio"
                                    value="{{ old('cor_acessorio') }}" type="text" placeholder="Exemplo: Pedro">

                                @if ($errors->has('Tamanho'))
                                    <span class="error" style="color: red">*</span>
                                    <style>
                                        .erro {
                                            color: red
                                        }

                                    </style>
                                @endif
                                <label class="acessorios box erro" for="Tmanho">Tamanho</label>
                                <input class="acessorios box" id="" name="Tamanho" value="{{ old('Tamanho') }}"
                                    class="" type="text" placeholder="Exemplo: Pedro"><br>


                                @if ($errors->has('marca_acessorio'))
                                    <span class="error" style="color: red">*</span>
                                    <style>
                                        .erro {
                                            color: red
                                        }

                                    </style>
                                @endif
                                <label class="acessorios box erro" for="Marca">Marca</label><br>
                                <input class="acessorios box" id="marca_acessorio" name="marca_acessorio"
                                    value="{{ old('marca_acessorio') }}" class="" type="text"
                                    placeholder="Exemplo: Pedro"><br>



                                <!-- Radio Buttum cada categoria de acessorio-->
                                <input class="acessorios box" type="radio" id="age1" name="Fio" value="Fio">
                                <label class="acessorios box" for="Fio">Fio</label>
                                <input class="acessorios box" type="radio" id="age2" name="Anel" value="Anel">
                                <label class="acessorios box" for="Anel">Anel</label>
                                <input class="acessorios box" type="radio" id="age3" name="Pasta" value="Pasta">
                                <label class="acessorios box" for="Pasta">Pasta</label>
                                <input class="acessorios box" type="radio" id="age3" name="Oculos" value="Oculos">
                                <label class="acessorios box" for="Oculos">Oculos</label>

                                <!-- end-->


                                <!-- documento -->
                                @if ($errors->has('genero_doc'))
                                    <span class="error" style="color: red">*</span>
                                    <style>
                                        .erro {
                                            color: red
                                        }

                                    </style>
                                @endif
                                <label class="documento box erro" for="Cor">Genero</label>
                                <input class="documento box" id="Cor" name="genero_doc"
                                    value="{{ old('genero_doc') }}" class="Genero" type="text"
                                    placeholder="Exemplo: Pedro">

                                @if ($errors->has('nome_documento'))
                                    <span class="error" style="color: red">*</span>
                                    <style>
                                        .erro {
                                            color: red
                                        }

                                    </style>
                                @endif

                                <label class="documento box erro" for="Marca">Nome Documento</label>
                                <input class="documento box" id="Marca" name="nome_documento"
                                    value="{{ old('nome_documento') }}" class="nome_documento" class=""
                                    type="text" placeholder="Exemplo: Pedro"><br>

                                <!-- Para cada categoria de documento-->

                                <!-- Bilhete dados  -->
                                @if ($errors->has('filhacao_pai'))
                                    <span class="error" style="color: red">*</span>
                                    <style>
                                        .erro {
                                            color: red
                                        }

                                    </style>
                                @endif
                                <label class="Bilhete box1 box erro" for="Bilhete">Filhação Pai</label>
                                <input class="Bilhete box1 box" id="Bilhete" name="filhacao_pai"
                                    value="{{ old('filhacao_pai') }}" class="" class="filhacao_pai"
                                    type="text" placeholder="Exemplo: Pedro">

                                @if ($errors->has('filhacao_mae'))
                                    <span class="error" style="color: red">*</span>
                                    <style>
                                        .erro {
                                            color: red
                                        }

                                    </style>
                                @endif
                                <label class="Bilhete box1 box erro" for="Bilhete">Filhação Mãe</label>
                                <input class="Bilhete box1 box" id="Bilhete" name="filhacao_mae"
                                    value="{{ old('filhacao_mae') }}" class="filhacao_mae" type="text"
                                    placeholder="Exemplo: Pedro">


                                <!-- Passaporte Dados -->
                                @if ($errors->has('nmero_passaporte'))
                                    <span class="error" style="color: red">*</span>
                                    <style>
                                        .erro {
                                            color: red
                                        }

                                    </style>
                                @endif
                                <label class="Passaporte box1 box erro" for="Anel">Numero</label>
                                <input class="Passaporte box1 box" id="Telefone" name="nmero_passaporte"
                                    value="{{ old('nmero_passaporte') }}" class=""
                                    class="" type="text" placeholder="Exemplo: Pedro">

                                @if ($errors->has('nmero_passaporte'))
                                    <span class="error" style="color: red">*</span>
                                    <style>
                                        .erro {
                                            color: red
                                        }

                                    </style>
                                @endif
                                <label class="Passaporte box1 box erro" for="Anel">Nome Pessoal</label>
                                <input class="Passaporte box1 box" id="Telefone" name="nome_pessoal"
                                    value="{{ old('nome_pessoal') }}" class="" type="text"
                                    placeholder="Exemplo: Pedro">

                                @if ($errors->has('tipo_passarporte'))
                                    <span class="error" style="color: red">*</span>
                                    <style>
                                        .erro {
                                            color: red
                                        }

                                    </style>
                                @endif
                                <label class="Passaporte box1 box erro" for="Anel">Tipo</label>
                                <input class="Passaporte box1 box" id="Telefone" name="tipo_passarporte"
                                    value="{{ old('tipo_passarporte') }}" class="" type="text"
                                    placeholder="Exemplo: Pedro">


                                <!-- Dados Cartão eleitoral -->
                                @if ($errors->has('crupo_eleitoral'))
                                    <span class="error" style="color: red">*</span>
                                    <style>
                                        .erro {
                                            color: red
                                        }

                                    </style>
                                @endif
                                <label class="Cartão_Eleitoral box1 box erro" for="Pasta">Grupo</label>
                                <input class="Cartão_Eleitoral box1 box" id="Cartão_Eleitoral" name="crupo_eleitoral"
                                    value="{{ old('crupo_eleitoral') }}" class="" type="text"
                                    placeholder="Exemplo: Pedro"><br>

                                @if ($errors->has('numero_eleitoral'))
                                    <span class="error" style="color: red">*</span>
                                    <style>
                                        .erro {
                                            color: red
                                        }

                                    </style>
                                @endif
                                <label class="Cartão_Eleitoral box1 box erro" for="Pasta">Numero Eleitor</label>
                                <input class="Cartão_Eleitoral box1 box" class="numero_eleitoral"
                                    value="{{ old('numero_eleitoral') }}" name="numero_eleitoral"
                                    id="Cartão_Eleitoral" class="" type="text"
                                    placeholder="Exemplo: Pedro"><br>

                                <!-- Radio Buttum cada categoria de documento-->
                                <input class="documento box" type="radio" id="age1" name="Bilhete" value="Bilhete">
                                <label class="documento box" for="Fio">Bilhete</label>
                                <input class="documento box" type="radio" id="age2" name="Passaporte"
                                    value="Passaporte">
                                <label class="documento box" for="Passaporte">Passaporte</label>
                                <input class="documento box" type="radio" id="age3" name="Cartão_Eleitoral"
                                    value="Cartão_Eleitoral">
                                <label class="documento box" for="Cartão_Eleitoral">Cartão Eleitoral</label>

                                <!-- end-->
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <h6 class="h6h">Seus Dados</h6> <br>
                        <div class="row f2">
                            <div class="col-md-6 col-sm-6">
                                @if ($errors->has('nome'))
                                    <span class="error" style="color: red">*</span>
                                    <style>
                                        .erro {
                                            color: red
                                        }

                                    </style>
                                @endif
                                <label for="Nome" class="erro">Nome Completo</label>
                                <input class="form-control form-control-sm" type="text" name="nome"
                                    value="{{ old('nome') }}" placeholder="Exemplo: Pedro"><br>

                                @if ($errors->has('telefone'))
                                    <span class="error" style="color: red">*</span>
                                    <style>
                                        .erro {
                                            color: red
                                        }

                                    </style>
                                @endif
                                <label for="Nome" class="erro">Telefone</label>
                                <input class="form-control form-control-sm" type="text" name="telefone"
                                    value="{{ old('telefone') }}" placeholder="9XX XXX XXX"><br>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                @if ($errors->has('emial'))
                                    <span class="error" style="color: red">*</span>
                                    <style>
                                        .erro {
                                            color: red !important
                                        }

                                    </style>
                                @endif
                                <label for="Nome" class="erro">Email</label>
                                <input class="form-control form-control-sm " type="email" name="emial"
                                    value="{{ old('emial') }}" placeholder="Exemplo@exemplo.com"><br>
                            </div>
                        </div>
                        <button class="btn btn-primary btn_confirmar align-self-center"
                            type="submit">Confirmar</button>
                    </div>
                </form>
            </div>
        </div>

    </div>

    <footer class="text-center text-lg-start text-white fixed-bottom">
        <div class="tudo">
            <div class=" p-4 pb-0">
                <section class="">
                    <div class="row ">
                        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                            <h5 class="text-uppercase uppercase">LOGO</h5>

                            <p class="inform-footer">
                                O xxx é uma plataforma online criada com o propósito de ajudar a trazer de volta aos
                                seus familiares as pessoas perdidas e devolver aos seus respectivos donos os bens e
                                animais de estimação perdidos.
                            </p>
                            <section class="mb-4 text-center">
                                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                                        class="fa fa-facebook"></i></a>
                                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                                        class="fa fa-twitter"></i></a>

                                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                                        class="fa fa-linkedin"></i></a>

                                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                                        class="fa fa-github"></i></a>
                            </section>

                        </div>

                        <div class="col-lg-2 marg col-md-6 mb-4 mb-md-0">
                            <h5 class="text-uppercase">Institucional</h5>

                            <ul class="list-unstyled unstyled mb-0">
                                <li>
                                    <a href="#!" class="text-white ">Sobre o Nos</a>
                                </li>
                                <li>
                                    <a href="#!" class="text-white "> Achei um Artigo</a>
                                </li>
                                <li>
                                    <a href="#!" class="text-white ">Perdi um Artigo </a>
                                </li>
                                <li>
                                    <a href="#!" class="text-white ">Contacto</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                            <h5 class="text-uppercase">Aviso</h5>

                            <ul class="list-unstyled  unstyled mb-0">
                                <li>
                                    <a href="#!" class="text-white  inform-footer">
                                        <p>Se perdeu o seu multicaixa, deve contactar de imediato as entidades emissoras
                                            dos cartões de crédito ou débito, numa agência bancária mais próxima de si
                                        </p>
                                    </a>
                                </li>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>

                <hr class="mb-4" />


                <hr class="mb-4" />

            </div>
        </div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2022 Todos os direitos reservados:
            <a class="text-white" href="">Fantastic 6</a>
        </div>

    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.4/jquery.validate.min.js"
        integrity="sha512-FOhq9HThdn7ltbK8abmGn60A/EMtEzIzv1rvuh+DqzJtSGq8BRdEN0U+j0iKEIffiw/yEtVuladk6rsG4X6Uqg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(function() {
            $("#form_item").validate();
        });
    </script>
    <script type="text/javascript" src="{{ asset('css/option.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script type="text/javascript" src="{{ asset('css/slider.js') }}"></script>

</body>

</html>
