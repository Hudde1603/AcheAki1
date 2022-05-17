@extends('home')

@section('tittle', 'AcheAki - Principal')

@section('content')

    <img class="img-nav" src="{{ asset('img/Rectangle 1267.png') }}" alt="" srcset="" />
    <div class="h3-over-img">
        <h1 class="text-hover">Mesmo perdido, achamos, faça a sua pesquisa</h1>
        <form class="search-box">
            <input class="search" type="search" placeholder="Pesquisar Item" aria-label="Search">
            <button class="search-buttton" type="submit">Pesquisar</button>
        </form>
    </div>


    <div class="tudo mrg-tudo">
        <h5 class="intesRecentes-Scroll">Itens recentes</h5>

        <div class="mais-recentes-buttuns">
            <button type="submit" class="buttun-achados">Achados</button>
            <button type="submit" class="buttun-perdidos">Perdidos</button>

        </div>

        <ul class="este over">
            
                <li>
                    <img src="{{ asset('img/Rectangle 1279.png') }}" class="scrollIMG-Index" alt="" srcset="">
                    <p>
                    <h6>Iphone 11 pro</h6>
                    </p>
                    <p>Angola-Lunada
                    <p>
                        Data:20/12/2021</p>
                </li>
                <li>
                    <img src="{{ asset('img/Rectangle 1279.png') }}" class="scrollIMG-Index" alt="" srcset="">
                    <p>
                    <h6>Iphone 11 pro</h6>
                    </p>
                    <p>Angola-Lunada
                    <p>
                        Data:20/12/2021</p>
                </li>
                <li>
                    <img src="{{ asset('img/Rectangle 1279.png') }}" class="scrollIMG-Index" alt="" srcset="">
                    <p>
                    <h6>Iphone 11 pro</h6>
                    </p>
                    <p>Angola-Lunada
                    <p>
                        Data:20/12/2021</p>
                </li>
                <li>
                    <img src="{{ asset('img/Rectangle 1279.png') }}" class="scrollIMG-Index" alt="" srcset="">
                    <p>
                    <h6>Iphone 11 pro</h6>
                    </p>
                    <p>Angola-Lunada
                    <p>
                        Data:20/12/2021</p>
                </li>
                <li>
                    <img src="{{ asset('img/Rectangle 1279.png') }}" class="scrollIMG-Index" alt="" srcset="">
                    <p>
                    <h6>Iphone 11 pro</h6>
                    </p>
                    <p>Angola-Lunada
                    <p>
                        Data:20/12/2021</p>
                </li>
                <li>
                    <img src="{{ asset('img/Rectangle 1279.png') }}" class="scrollIMG-Index" alt="" srcset="">
                    <p>
                    <h6>Iphone 11 pro</h6>
                    </p>
                    <p>Angola-Lunada
                    <p>
                        Data:20/12/2021</p>
                </li>
                <li>
                    <img src="{{ asset('img/Rectangle 1279.png') }}" class="scrollIMG-Index" alt="" srcset="">
                    <p>
                    <h6>Iphone 11 pro</h6>
                    </p>
                    <p>Angola-Lunada
                    <p>
                        Data:20/12/2021</p>
                </li>
                <li>
                    <img src="{{ asset('img/Rectangle 1279.png') }}" class="scrollIMG-Index" alt="" srcset="">
                    <p>
                    <h6>Iphone 11 pro</h6>
                    </p>
                    <p>Angola-Lunada
                    <p>
                        Data:20/12/2021</p>
                </li>
        </ul>


    </div>

    <div class="tudo">
        <div id="About" class="baixo">
            <div class="txt-imge">


                <h6 class="h6h">Quem Somos & o que fizemos </h6>
                <div class="h-txt">
                    Somos uma agência angolana que se que com promete com o bem estar da população, e visando isso
                    pretamos o serviço de proteger os teus bens perdidos, e fazer chegar ao devido proprietario os bens
                    perdidos, a segurando a  segurança dos bens, e dos entes envolvidos no processo

                </div>
                <div class="about">Sobre Nós</div>
            </div>
            <img class="img-txt" src="{{ asset('img/about.png') }}" alt="" srcset="" />
        </div>
    </div>

    <div class="num-blue container-fluid" id="Contact">
        <div class="row">
            <div class="num-blue-box">
                <p class="p-blue-box"><b>Estatisticas</b></p>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <p class="p-des-blue">Achados</p>
                <p class="blu-numb"><b>293</b></p>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <p class="p-des-blue">Perdidos</p>
                <p class="blu-numb"><b>453</b></p>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <p class="p-des-blue">Entregues</p>
                <p class="blu-numb"><b>89</b></p>
            </div>
        </div>
    </div>

    <div class="tudo">
        <div class="contacte">
            <p class="contact-p">
                Contacte-nos
            </p>


            <form action="">
                <input class="text-contac" type="text" name="Contacto" id=""><br>

                <textarea class="areatex" name="" id="" cols="30" rows="10"></textarea><br>

                <button class="button-contac" type="submit">Contact</button>
            </form>
        </div>




    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script type="text/javascript" src="{{ asset('css/slider.js') }}"></script>

@endsection
