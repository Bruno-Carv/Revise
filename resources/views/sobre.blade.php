<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Empresa</title>
    <link rel="stylesheet" type="text/css" href="{{     asset('css/bootstrap.css')   }}">
    <link rel="stylesheet" type="text/css" href="{{     asset('css/index.css')   }}">
    <link rel="stylesheet" type="text/css" href="{{     asset('css/animate.min.css')   }}">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu|Cairo|Rubik&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Menu -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <!-- Logo -->
                <a class="navbar-brand" href="#">
                    <img src="{{     asset('img/logo.png')   }}" width="50" height="50" alt="Revise">
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
                        <li class="nav-item">
                            <a class="nav-link" href="{{  url('/')    }}">Home <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="{{  url('planos')    }}" id="planoMenu">
                                Planos
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="empresaEmpresa" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Aplicativo</a>
                            <div class="dropdown-menu" aria-labelledby="empresaEmpresa">
                                <a class="dropdown-item bg-light" href="{{  url('aplicativo')    }}">Sobre o Aplicativo
                                    Revise</a>
                                <a class="dropdown-item bg-light" href="{{  url('aplicativo#suporte')    }}">Suporte</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link active dropdown-toggle" href="#" id="empresaEmpresa" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Empresa</a>
                            <div class="dropdown-menu" aria-labelledby="empresaEmpresa">
                                <a class="dropdown-item bg-light" href="{{  url('sobre')    }}">Quem Somos?</a>

                                <a class="dropdown-item bg-light" href="{{  url('sobre#vagas')    }}">Trabalhar
                                    Conosco</a>
                            </div>
                        </li>
                    </ul>
                    <div class="form-inline my-2 my-lg-0">
                        <a href="{{ url('cadastro')}}">
                            <button class="btn btn-outline-warning my-2 my-sm-0 botaoLogin" type="button">
                                Cadastar
                            </button>
                        </a>
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
    <!-- Sobre -->
    <section class="bg-light" id="sobre">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="col-12 col-sm-12 col-md-auto col-lg-auto col-xl-auto text-dark">
                        <br><br>
                        <h1>Quem Somos?</h1>
                        <br>
                        <p>
                            A (nome nossa empresa) é uma empresa de tecnologia, composta por 5 desenvolvedores, que
                            estão cursando o técnico de Desenvolvimento de Sistemas
                            na instituição Etec Dra. Ruth Cardoso, localizada em São Vicente - Litoral de São Paulo.
                            O Revise é o primeiro projeto em constução pela Eow Company, tendo em vista, de primeira
                            instância, sua
                            elaboração para o desenvolvimento do TCC (Trabalho de Conclusão de Curso).
                            <p class="text-secondary h5">Visão</p>
                            <p>Nosso objetivo é entrar no mercado de trabalho e efetivar os sistemas desenvolvidos, além
                                da permanência e reconhecimento
                                no mercado de trabalho.
                            </p>
                            <p class="text-secondary h5">Missão</p>
                            <p>Nossa missão é levar soluções para problemas cotidianos através da tecnologia, levando em
                                conta o respeito, ética
                                e produzindo o melhor possível para alcançar as necessidades de diversos públicos.
                            </p>
                            <p class="text-secondary h5">Valores</p>
                            <p>A (nome nossa empresa) tem como valores o respeito, a ética ao lidar com dados pessoais
                                de indivíduos, prezamos um ambiente de trabalho
                                familiar e onde diversão na medida certa é sinônimo de produção saudável </p>
                        </p>
    </section>
    <!--Sobre os integrantes-->
    <section class="">
        <div class="container-fluid">
            <div class="row space">

                <div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-2">
                    <div class="card card_align" style="width: 12rem;">
                        <img src="{{     asset('img/integrantes/fe.jpeg')   }}" class="card-img-top rounded-circle foto"
                            alt="...">
                    </div>
                </div>

                <div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">
                    <div class="card-body bg-light rounded">
                        <p class="card-text text-secondary h5 descricao">Fernanda Pereira Santos da Silva</p>
                        <p class="card-text">

                            <ul>
                                <li class="text-secondary">Analista</li>
                                <li class="text-secondary">Coordenadora</li>
                                <li class="text-secondary">Front-end</li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row space">

            <div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-2">
                <div class="card card_align" style="width: 12rem;">
                    <img src="{{     asset('img/integrantes/bruno.jpeg')   }}" class="card-img-top rounded-circle foto"
                        alt="...">
                </div>
            </div>

            <div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">
                <div class="card-body bg-light rounded">
                    <p class="card-text text-secondary h5 descricao">Bruno Silva Carvalho</p>
                    <p class="card-text">
                        <ul>
                            <li class="text-secondary">Analista</li>
                            <li class="text-secondary">Desenvolvedor Mobile</li>
                            <li class="text-secondary">Full Stack</li>
                        </ul>
                    </p>
                </div>
            </div>
        </div>
        </div>

        <div class="row space">
            <div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-2">
                <div class="card card_align" style="width: 12rem;">
                    <img src="{{     asset('img/integrantes/lucas.jpeg')   }}" class="card-img-top rounded-circle foto"
                        alt="...">
                </div>
            </div>

            <div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">
                <div class="card-body bg-light rounded">
                    <p class="card-text text-secondary h5 descricao">Lucas Juan Souza de Oliveira Miranda Moraes</p>
                    <p class="card-text">
                        <ul>
                            <li class="text-secondary">DBA</li>
                            <li class="text-secondary">Editor de mídia</li>
                        </ul>
                    </p>
                </div>
            </div>
        </div>
        </div>

        <div class="row space">
            <div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-2">
                <div class="card card_align" style="width: 12rem;">
                    <img src="{{     asset('img/integrantes/luiz.jpeg')   }}" class="card-img-top rounded-circle foto"
                        alt="...">
                </div>
            </div>

            <div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">
                <div class="card-body bg-light rounded">
                    <p class="card-text text-secondary h5 descricao">Luiz Marcelo da Silva Garcia Filho</p>
                    <p class="card-text">
                        <ul>
                            <li class="text-secondary">Designer</li>
                            <li class="text-secondary">Auxiliar de Gerenciamento de projeto</li>
                        </ul>
                    </p>
                </div>
            </div>
        </div>
        </div>
        <div class="row space">
            <div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-2">
                <div class="card card_align" style="width: 12rem;">
                    <img src="{{     asset('img/integrantes/katry.jpeg')   }}" class="card-img-top rounded-circle foto"
                        alt="...">
                </div>
            </div>

            <div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">
                <div class="card-body bg-light rounded">
                    <p class="card-text text-secondary h5 descricao">Katryel Menezes Vieira</p>
                    <p class="card-text">
                        <ul>
                            <li class="text-secondary">Back-end</li>
                            <li class="text-secondary">Auxiliar de Gerenciamento de projeto</li>
                        </ul>
                    </p>
                </div>
            </div>
        </div>
        </div>
    </section>
    <br>
    <!-- Trabalhe conosco -->
    <section id="vagas" class="backgroundYellow">
        <h1 class="text-white">
            Deseja trabalhar conosco?
        </h1>
        <p class="text-white">
            Queremos te conhecer! Venha contribuir para o nosso projeto, entre em contato através das redes sociais
        </p>
    </section>
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
                <div class="col-6 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <ul class="nav justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <img src="{{     asset('img/icon/facebookIcon.png')   }}" class="redesocialIcones"
                                    alt="Facebook-revise" />
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <img src="{{     asset('img/icon/InstagramIcon.png')   }}" class="redesocialIcones"
                                    alt="Instagram-revise" />
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <img src="{{     asset('img/icon/YoutubeIcon.png')   }}" class="redesocialIcones"
                                    alt="Youtube-revise" />
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <img src="{{     asset('img/icon/twitterIcon.png')   }}" class="redesocialIcones"
                                    alt="Twitter-revise" />
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <img src="{{     asset('img/icon/githubIcon.png')   }}" class="redesocialIcones"
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
<script src="{{     asset('js/index.js')   }}"></script>
</html>