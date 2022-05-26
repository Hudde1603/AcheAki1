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

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
    </script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">

    <title>@yield('tittle')</title>
</head>

<body>

    <!-- Nav -->
    <nav class="navbar navbar-expand-lg navbar-light  fixed-top bg-light">

        <a class="navbar-brand" href="#">ACHEACKI</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href=""> Principal</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href=""> Artigos </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href=""> Usuários</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href=""> P. Referências</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- End Nav -->
    @yield('content')

    <footer class="text-center text-lg-start text-white  ">
        <div class="tudo">
            <div class=" p-4 pb-0">
                <section class="">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <h5 class="text-uppercase uppercase">LOGO</h5>

                            <p class="list-unstyled  unstyled mb-0">
                                O xxx é uma plataforma online criada com o propósito de ajudar a trazer de volta aos
                                seus familiares as pessoas perdidas e devolver aos seus respectivos donos os bens e
                                animais de estimação perdidos.
                            </p>
                            <section class="list-unstyled  unstyled mb-0 mb-4 text-center">
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

                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <h5 class="text-uppercase uppercase">Institucional</h5>

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
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <h5 class="text-uppercase uppercase">Aviso</h5>

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




</body>

</html>