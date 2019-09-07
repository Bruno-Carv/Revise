<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projeto Revise - @yield('titulo')</title>
    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway:100,600">
    <link rel="stylesheet" type="text/css" href="{{     asset('css/bootstrap.css')   }}">
    <link rel="stylesheet" type="text/css" href="{{     asset('css/index.css')   }}">
    <link rel="stylesheet" type="text/css" href="{{     asset('css/animate.min.css')   }}">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Ubuntu|Cairo|Rubik&display=swap">
</head>

<body>
    <!-- Menu -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark barra_nav">
            <div class="container-fluid">
                <!-- Logo -->
                <a class="navbar-brand" href="#">
                    <img src="{{   asset('img/logo.png')  }}" width="50" height="50" alt="Revise">
                </a>
                <!-- Botão do menu -->
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Links do menu -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item @yield('menuHome')">
                            <a class="nav-link" href="{{  url('/')    }}">Home <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown @yield('menuPlanos')">
                            <a class="nav-link" href="{{  url('planos')    }}" id="planoMenu">
                                Planos
                            </a>
                        </li>
                        <li class="nav-item dropdown @yield('menuApp')">
                            <a class="nav-link dropdown-toggle" href="#" id="empresaEmpresa" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Aplicativo</a>
                            <div class="dropdown-menu" aria-labelledby="empresaEmpresa">
                                <a class="dropdown-item bg-light" href="{{  url('aplicativo')    }}">Sobre o Aplicativo
                                    Revise</a>
                                <a class="dropdown-item bg-light" href="{{  url('aplicativo#suporte')    }}">Suporte</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown @yield('menuSobre')">
                            <a class="nav-link dropdown-toggle" href="#" id="empresaEmpresa" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Empresa</a>
                            <div class="dropdown-menu" aria-labelledby="empresaEmpresa">
                                <a class="dropdown-item bg-light" href="{{  url('sobre')    }}">Quem Somos?</a>

                                <a class="dropdown-item bg-light" href="{{  url('sobre#vagas')    }}">Trabalhar
                                    Conosco</a>
                            </div>
                        </li>
                    </ul>
                    <div class="form-inline my-2 my-lg-0">
                            <button id="btnCadastro" class="btn btn-outline-warning my-2 my-sm-0 botaoLogin" type="button">
                                Cadastar
                            </button>
                        <a href="{{ url('SignIn')}}">
                            <button class="btn btn-outline-warning my-2 my-sm-0 botaoLogin" type="button">
                                Acessar
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    
    
    @yield('conteudo')


    <!-- Rodapé -->
    <footer class="RodapeLight navbar-light bg-light">
        <div class="container-fluid">
            <div class="row navbar ConteudoRodape">
                <div class="col-6 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <ul class="nav">
                        <li class="nav-item">
                            <div class="nav-link">© 2019 Revise, Inc.</div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Termos de uso</a>
                        </li>
                    </ul>
                </div>
                <div class="col-6 col-sm-12 col-md-12 col-lg-12 col-xl-6">
                    <ul class="nav justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <img src="{{ asset('img/icon/facebookIcon.png')}}" class="redesocialIcones"
                                    alt="Facebook-revise" />
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <img src="{{ asset('img/icon/InstagramIcon.png')}}" class="redesocialIcones"
                                    alt="Instagram-revise" />
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <img src="{{ asset('img/icon/YoutubeIcon.png')}}" class="redesocialIcones"
                                    alt="Youtube-revise" />
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <img src="{{ asset('img/icon/twitterIcon.png')}}" class="redesocialIcones"
                                    alt="Twitter-revise" />
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <img src="{{ asset('img/icon/githubIcon.png')}}" class="redesocialIcones"
                                    alt="Github-revise" />
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>
<script src="{{     asset('js/jquery-3.3.1.slim.min.js')   }}"></script>
<script src="{{     asset('js/popper.min.js')   }}"></script>
<script src="{{     asset('js/bootstrap.min.js')   }}"></script>
<script src="{{     asset('js/wow.js')   }}"></script>
<script src="{{     asset('js/sweetalert.min.js')   }}"></script>
<script src="{{     asset('js/index.js')   }}"></script>
@yield('script')
</html>