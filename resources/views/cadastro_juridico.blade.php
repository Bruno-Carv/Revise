<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro</title>
    <link rel="stylesheet" type="text/css" href="Views/css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu|Cairo|Rubik&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Views/css/bootstrap.css">
</head>

<body>
    <header>
        <!-- Menu -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <!-- Logo -->
                <a class="navbar-brand" href="#">
                    <img src="./Views/img/logo.png" width="50" height="50" alt="Revise">
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
                            <a class="nav-link" href="./index.html">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="./planos.html" id="planoMenu">
                                Planos
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="empresaEmpresa" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Aplicativo</a>
                            <div class="dropdown-menu" aria-labelledby="empresaEmpresa">
                                <a class="dropdown-item" href="./aplicativo.html">Sobre o Aplicativo Revise</a>
                                <a class="dropdown-item" href="./aplicativo.html#suporte">Suporte</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="empresaEmpresa" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Empresa</a>
                            <div class="dropdown-menu" aria-labelledby="empresaEmpresa">
                                <a class="dropdown-item bg-light" href="./empresa.html#sobre">Sobre</a>
                                <a class="dropdown-item bg-light" href="./empresa.html#vagas">Trabalhar Conosco</a>
                            </div>
                        </li>
                    </ul>
                    <div class="form-inline my-2 my-lg-0">
                        <button class="btn btn-outline-warning my-2 my-sm-0 botaoLogin" onclick="signUp()"
                            type="button">Cadastar</button>
                        <button class="btn btn-outline-warning my-2 my-sm-0 botaoLogin" onclick="signIn()"
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
    <div id="carouselExampleSlidesOnly" class="carousel slide top" data-ride="carousel">
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
                                    <input type="email" class="form-control" id="campoEmail" required=""
                                        placeholder="nome@exemplo.com">
                                </div>
                                <div class="form-group inputCadastro">
                                    <div class="form-row">
                                        <!-- CNPJ -->
                                        <div class="col-12 col-sm-12 col-md col-lg col-xl">
                                            <label for="exampleFormControlInput1">CNPJ</label>
                                            <input type="text" class="form-control" id="campoDoCpf"
                                                placeholder="xxx.xxx.xxx-xx">
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
                        <!--Botões slide 1-->
                        <div class="row">
                            <div class="col-0 col-sm-0 col-md-6 col-lg-8 col-xl-8"></div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                                <div class="row">
                                    <div class="ol-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                        <button class="btn btn-outline-warning btn-block" id="btnVolta"
                                            href="#carouselExampleSlidesOnly" role="button" data-slide="prev"
                                            onclick="redirecionar()">Voltar</button>
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
                                <br>
                            </div>
                        </div>
                        <!--Botões slide 2-->
                        <div class="row" style="">
                            <div class="col-0 col-sm-0 col-md-6 col-lg-8 col-xl-8"></div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
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
                <section class=" backgroundBlackLight carousel-item cadastro">
                    <div class="container">
                        <!-- Nome do formulario três -->
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-auto col-lg-auto col-xl-auto tituloPreto">
                                        <h4>Escolha seus anúncios</h4>
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
                                                                    <span>Serviço</span>
                                                                    <input id="servicoInput" type="number"
                                                                        class="form-control" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <span>Produtos</span>
                                                                    <input id="produtoInput" type="number"
                                                                        class="form-control" placeholder="">
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
                                                                <div
                                                                    class="col-12 col-sm-12 col-md-6 col-lg-8 col-xl-8">
                                                                    <h6>Serviço:</h6>
                                                                </div>
                                                                <div
                                                                    class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                                                                    <h6><b id="valorServico"></b></h6>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="row">
                                                                <div
                                                                    class="col-12 col-sm-12 col-md-6 col-lg-8 col-xl-8">
                                                                    <h6>Produtos anúnciados:</h6>
                                                                </div>
                                                                <div
                                                                    class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                                                                    <h6><b id="valorProduto"></b></h6>
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <div class="row border-top-5">
                                                                <div
                                                                    class="col-12 col-sm-12 col-md-6 col-lg-8 col-xl-8">
                                                                    <h5>Total:</h5>
                                                                </div>
                                                                <div
                                                                    class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                                                                    <h5><b id="valorTotal"></b></h5>
                                                                </div>
                                                            </div>
                                                            <br>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Botões slide 3-->
                                <div class="row">
                                    <div class="col-0 col-sm-0 col-md-6 col-lg-8 col-xl-8"></div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                <button class="btn btn-outline-warning btn-block" id="btnVolta"
                                                    href="#carouselExampleSlidesOnly" role="button"
                                                    data-slide="prev">Voltar</button>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                <button class="btn btn-outline-warning  btn-block" id="btnContinua"
                                                    href="#carouselExampleSlidesOnly" role="button" data-slide="next"
                                                    value="1" onclick="confirma()">Finalizar Cadastro</button>
                                            </div>
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
    <footer class=" navbar-light bg-light ">
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
    <div id="notifications"></div>
</body>
<script src="{{     asset('/js/jquery-3.3.1.slim.min.js')   }}"></script>
<script src="{{     asset('/js/popper.min.js')   }}"></script>
<script src="{{     asset('/js/bootstrap.min.js')   }}"></script>
<script src="{{     asset('/js/wow.js')   }}"></script>
<script src="{{     asset('/js/cadastro.js')   }}"></script>
<script src="{{     asset('/js/index.js')   }}"></script>
<script>
    $(document).ready(function () {
        $('#servicoInput').click(function () {
            var valorPro = 1.00;
            var valorProduto = $('#produtoInput').val();
            $('#valorProduto').text('R$  ' + valorProduto * valorPro);
        });
        $('#produtoInput').click(function () {
            var valorPro = 1.00;
            var valorProduto = $('#produtoInput').val();
            $('#valorProduto').text('R$  ' + valorProduto * valorPro);
        });
        setInterval(function () {
            var valorPro = 1.00;
            var valorProduto = $('#produtoInput').val();
            $('#valorProduto').text('R$  ' + valorProduto * valorPro);
            var valorSer = 10.00;
            var valorServico = $('#servicoInput').val();
            $('#valorServico').text('R$  ' + valorServico * valorSer);
            $('#valorTotal').text('R$  ' + (valorServico + valorProduto));
        });
    });
</script>

</html>