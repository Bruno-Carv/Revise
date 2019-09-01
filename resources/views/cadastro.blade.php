<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro</title>
    <link rel="stylesheet" type="text/css" href="{{     asset('css/bootstrap.css')   }}">
    <link rel="stylesheet" type="text/css" href="{{     asset('css/index.css')   }}">
    <link rel="stylesheet" type="text/css" href="{{     asset('css/animate.min.css')   }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu|Cairo|Rubik&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <!-- Menu -->
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
                        <li class="nav-item active">
                            <a class="nav-link" href="{{  url('/')    }}">Home <span class="sr-only">(current)</span></a>
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
                                <a class="dropdown-item bg-light" href="{{  url('aplicativo')    }}./aplicativo.html">Sobre o Aplicativo Revise</a>
                                <a class="dropdown-item bg-light" href="{{  url('aplicativo#suporte')    }}./aplicativo.html#suporte">Suporte</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="empresaEmpresa" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Empresa</a>
                            <div class="dropdown-menu" aria-labelledby="empresaEmpresa">
                                <a class="dropdown-item bg-light" href="{{  url('sobre')    }}./empresa.html#sobre">Sobre</a>
                                <a class="dropdown-item bg-light" href="{{  url('sobre#vagas')    }}./empresa.html#vagas">Trabalhar Conosco</a>
                            </div>
                        </li>
                    </ul>
                    <div class="form-inline my-2 my-lg-0">
                        <button class="btn btn-outline-warning my-2 my-sm-0 botaoLogin" 
                            type="button">Cadastar</button>
                        <button class="btn btn-outline-warning my-2 my-sm-0 botaoLogin" 
                            type="button">Acessar</button>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <section class="backgroundBlackLight">
        <div class="container">
            <!-- Titulo do cadastro -->
            <div class="row">
                <div class="col-12">
                    <h1>Cadastrar</h1>
                </div>
            </div>
            <!-- Barra de progresso -->
            <div class="progress">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 0%" aria-valuenow="0"
                    aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </section>
    <div id="carouselExampleSlidesOnly" class="carousel slide top" data-ride="carousel" >
        <div class="carousel-inner">
            <form action="" method="POST" onsubmit="">
                <section class=" backgroundBlackLight carousel-item active cadastro">
                    <div class="container">
                        <!-- Nome do formulario -->
                        <div class="row">
                            <div class="col-12">
                                <h4>Dados pessoais</h4>
                            </div>
                        </div>
                        <div class="row formularioCadastro">
                            <div class="col-12">
                                <!-- Nome completo -->
                                <div class="form-group inputCadastro">
                                    <div class="form-row">
                                        <div class="col-12">
                                            <label for="campoNome">Nome completo</label>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md col-lg col-xl">
                                            <input type="text" class="form-control" id="campoNome" placeholder="Nome">
                                        </div>
                                        <div class="col-12 col-sm-12 col-md col-lg col-xl">
                                            <input type="text" class="form-control" id="campoSobrenome"
                                                placeholder="Sobrenome">
                                        </div>
                                    </div>
                                </div>
                                <!-- E-mail -->
                                <div class="form-group inputCadastro">
                                    <label for="exampleFormControlInput1">Endereço de email</label>
                                    <input type="email" class="form-control" id="campoEmail"
                                        placeholder="nome@exemplo.com">
                                </div>
                                <div class="form-group inputCadastro">
                                    <div class="form-row">
                                        <!-- CPF -->
                                        <div class="col-12 col-sm-12 col-md col-lg col-xl">
                                            <label for="exampleFormControlInput1">CPF</label>
                                            <input type="text" class="form-control" id="campoDoCpf"
                                                placeholder="xxx.xxx.xxx-xx">
                                        </div>
                                        <!-- Data de nascimento -->
                                        <div class="col-12 col-sm-12 col-md col-lg col-xl">
                                            <label for="exampleFormControlInput1">Data de nascimento</label>
                                            <input type="date" class="form-control" id="campoDeNascimento"
                                                placeholder="nome@exemplo.com">
                                        </div>
                                    </div>
                                </div>
                                <!-- Senha -->
                                <div class="form-group inputCadastro">
                                    <label for="campoSenha">Senha</label>
                                    <input type="password" id="campoSenha" class="form-control"
                                        aria-describedby="descricaoSenha">
                                    <small id="descricaoSenha" class="form-text text-muted">
                                        Sua senha deve ter entre 6 e 20 caracteres, os quais devem ser letras e números,
                                        sem
                                        espaços, caracteres especiais ou emojis.
                                    </small>
                                </div>
                                <!-- Confirma senha -->
                                <div class="form-group inputCadastro">
                                    <label for="campoSenha">Confirmar senha</label>
                                    <input type="password" id="campoConfirmaSenha" class="form-control"
                                        aria-describedby="descricaoSenha">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class=" backgroundBlackLight carousel-item cadastro">
                    <div class="container">
                        <!-- Nome do formulario dois -->
                        <div class="row">
                            <div class="col-12">
                                <h4>Dados do veículo</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <fieldset>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="disabledTextInput">Placa</label>
                                                <input type="text" id="disabledTextInput" class="form-control"
                                                    placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <button type="button" class="btn btn-outline-warning">Verificar</button>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset disabled>
                                    <div class="form-group">
                                        <label for="disabledTextInput">Marca</label>
                                        <input type="text" id="disabledTextInput" class="form-control" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="disabledTextInput">Modelo</label>
                                        <input type="text" id="disabledTextInput" class="form-control" placeholder="">
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="anoVeiculo">Ano</label>
                                            <input type="text" class="form-control" id="anoVeiculo" placeholder="">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="corVeiculo">Cor</label>
                                            <input type="text" class="form-control" id="corVeiculo" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-7">
                                            <label for="cidadeVeiculo">Cidade</label>
                                            <input type="text" class="form-control" id="cidadeVeiculo"
                                                placeholder="Cidade">
                                        </div>
                                        <div class="col">
                                            <label for="estadoVeiculo">Estado</label>
                                            <input type="text" class="form-control" id="estadoVeiculo"
                                                placeholder="Estado">
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </section>
                <section class=" backgroundBlackLight carousel-item cadastro">
                    <div class="container">
                        <!-- Nome do formulario três -->
                        <div class="row">
                            <div class="col-12">
                                <h4>Planos</h4>
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
                <section class=" backgroundBlackLight">
                    <div class="container top_btn">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6"></div>
                            <div class="ol-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <div class="row">
                                    <div class="ol-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                        <button class="btn btn-outline-warning btn-block" id="btnVolta"
                                            href="#carouselExampleSlidesOnly" role="button"
                                            data-slide="prev">Voltar</button>
                                    </div>
                                    <div class="ol-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                        <button class="btn btn-outline-warning  btn-block" id="btnContinua"
                                            href="#carouselExampleSlidesOnly" role="button" data-slide="next"
                                            value="1">Continuar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </form>
        </div>
    </div>
    <!-- Rodapé -->
    <footer class="RodapeLight navbar-light bg-light ">
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
    <div id="notifications"></div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
<script src="{{     asset('js/wow.js')   }}"></script>
<script src="{{     asset('js/index.js')   }}"></script>
<script src="{{     asset('js/cadastro.js')   }}"></script>
</html>