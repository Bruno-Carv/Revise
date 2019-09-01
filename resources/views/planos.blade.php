<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Planos</title>
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
                            <a class="nav-link" href="{{  url('/')    }}">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link active" href="{{  url('planos')    }}" id="planoMenu">
                                Planos
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="empresaEmpresa" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Aplicativo</a>
                            <div class="dropdown-menu" aria-labelledby="empresaEmpresa">
                                <a class="dropdown-item bg-light" href="{{  url('aplicativo')    }}">Sobre o Aplicativo Revise</a>
                                <a class="dropdown-item bg-light" href="{{  url('aplicativo#suporte')    }}">Suporte</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="empresaEmpresa" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Empresa</a>
                            <div class="dropdown-menu" aria-labelledby="empresaEmpresa">
                                <a class="dropdown-item bg-light" href="{{  url('sobre')    }}">Quem Somos?</a>
                                <a class="dropdown-item bg-light" href="{{  url('sobre#vagas')    }}">Trabalhar Conosco</a>
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
    <!-- Sobre o plano -->

    </section>
    <!-- Plano do fisico -->
    <section id="fisico" class="backgroundBlackLight">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-auto col-lg-auto col-xl-auto tituloPreto">
                    <h1>Físico</h1>
                    <p class="text-dark card-text h5 descricao">Planos para usuários que utilizarão o sistema de
                        notificação das manutenções veículares</p>
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 PlanoCard card_hover ">
                            <div class="card tamanhoCard shadow mb-5 bg-white">
                                <div class="card-body">
                                    <h5 class="card-title plano_nomes">Basic</h5>
                                    <p class="card-text">
                                        <ul>
                                            <li class="planos_padding">Gratuito</li>
                                            <li class="planos_padding">Máximo de 2 carros cadastrados</li>
                                            <li class="planos_padding">Obd2 e App não inclusos (compra a parte opcional)
                                            </li>
                                            <li class="planos_padding">Visualização dos anúncios postados pelos
                                                fornecedores
                                            </li>
                                            <div class="vazia"></div>
                                        </ul>
                                    </p>
                                    <a href="#" class="btn btn-outline-dark porcentagem">Assinar</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 PlanoCard card_hover">
                            <div class="card tamanhoCard shadow mb-5 bg-white">
                                <div class="card-body">
                                    <h5 class="card-title plano_nomes">Standart</h5>
                                    <p class="card-text">
                                        <ul>
                                            <li class="planos_padding">R$ 9,99 p/ mês</li>
                                            <li class="planos_padding">Máximo de 5 carros cadastrados</li>
                                            <li class="planos_padding">Obd2 e App não inclusos (compra a parte opcional)
                                            </li>
                                            <li class="planos_padding">Visualização dos anúncios postados pelos
                                                fornecedores
                                            </li>
                                            <div class="vazia"></div>
                                        </ul>
                                    </p>
                                    <a href="#" class="btn btn-outline-dark porcentagem">Assinar</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 PlanoCard card_hover">
                            <div class="card tamanhoCard shadow mb-5 bg-white">
                                <div class="card-body">
                                    <h5 class="card-title plano_nomes">Profission</h5>
                                    <p class="card-text">

                                        <ul>
                                            <li class="planos_padding">R$ 39,99 p/ mês</li>
                                            <li class="planos_padding">Máximo de 20 carros cadastrados</li>
                                            <li class="planos_padding">Obd2 e App não inclusos (compra a parte opcional)
                                            </li>
                                            <li class="planos_padding">Desconto na compra do Obd2 e App</li>
                                            <li class="planos_padding">Visualização dos anúncios postados pelos
                                                fornecedores
                                            </li>
                                        </ul>

                                    </p>
                                    <a href="#" class="btn btn-outline-dark porcentagem">Assinar </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 PlanoCard card_hover">
                            <div class="card tamanhoCard shadow mb-5 bg-white">
                                <div class="card-body">
                                    <h5 class="card-title plano_nomes">Deluxe Edition</h5>
                                    <p class="card-text">

                                        <ul>
                                            <li class="planos_padding">R$ 99,90 p/ mês</li>
                                            <li class="planos_padding">Máximo de 50 carros cadastrados</li>
                                            <li class="planos_padding">Obd2 e App inclusos (1 unidade)</li>
                                            <li class="planos_padding">Desconto na compra do Obd2 e App</li>
                                            <li class="planos_padding">Visualização dos anúncios postados pelos
                                                fornecedores
                                            </li>
                                        </ul>

                                    </p>
                                    <a href="#" class="btn btn-outline-dark porcentagem">Assinar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </section>
    <!-- Plano do juridico -->
    <section id="juridico" class="backgroundYellow">
        <div class="container">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-auto col-lg-auto col-xl-auto tituloPreto">
                        <h1 class="text-white">Jurídico</h1>
                        <p class="text-white card-text h5 descricao">Escolha quantos serviços e anúncios deseja e faça
                            um orçamento abaixo:</p>
                        <br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <div class="card shadow mb-5 bg-white">
                                    <div class="card-body ">
                                        <h5 class="card-title">Anúncios</h5>
                                        <p class="card-text">
                                            <div class="row">
                                                <div class="col">
                                                    <span>Produtos</span>
                                                    <input id="produtoInput" type="number" class="form-control"
                                                        placeholder="">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <span>Serviço</span>
                                                    <input id="servicoInput" type="number" class="form-control"
                                                        placeholder="">
                                                </div>
                                            </div>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <div class="card shadow mb-5 bg-white">
                                    <div class="card-body">
                                        <h5 class="card-title">Plano mensal personalizado</h5>
                                        <p class="card-text">
                                            <br>
                                            <div class="row">
                                                <div class="col-12 col-sm-12 col-md-6 col-lg-8 col-xl-8">
                                                    <h6>Produtos anúnciados:</h6>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                                                    <h6><b id="valorProduto"></b></h6>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-12 col-sm-12 col-md-6 col-lg-8 col-xl-8">
                                                    <h6>Serviço:</h6>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                                                    <h6><b id="valorServico"></b></h6>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row border-top-5">
                                                <div class="col-12 col-sm-12 col-md-6 col-lg-8 col-xl-8">
                                                    <h5>Total:</h5>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                                                    <h5><b id="valorTotal"></b></h5>
                                                </div>
                                            </div>
                                            <br>
                                            <a href="#" class="btn btn-outline-dark porcentagem">Cadastar para assinar
                                                plano</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                <div class="col-6 col-sm-12 col-md-12 col-lg-12 col-xl-6">
                    <ul class="nav justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <img src="./Views/img/icon/facebookIcon.png" class="redesocialIcones"
                                    alt="Facebook-revise" />
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <img src="./Views/img/icon/InstagramIcon.png" class="redesocialIcones"
                                    alt="Instagram-revise" />
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <img src="./Views/img/icon/YoutubeIcon.png" class="redesocialIcones"
                                    alt="Youtube-revise" />
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <img src="./Views/img/icon/twitterIcon.png" class="redesocialIcones"
                                    alt="Twitter-revise" />
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <img src="./Views/img/icon/githubIcon.png" class="redesocialIcones"
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
<script src="{{     asset('js/planos.js')   }}"></script>
</html>