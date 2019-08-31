<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    <link rel="stylesheet" href="/bootstrap/app.php">
    <link rel="stylesheet" type="text/css" href="Views/css/index.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu|Cairo|Rubik&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Menu -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark barra_nav">
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
                                <a class="dropdown-item bg-light" href="./aplicativo.html">Sobre o Aplicativo Revise</a>
                                <a class="dropdown-item bg-light" href="./aplicativo.html#suporte">Suporte</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="empresaEmpresa" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Empresa</a>
                            <div class="dropdown-menu" aria-labelledby="empresaEmpresa">
                                <a class="dropdown-item bg-light" href="./empresa.html#sobre">Quem Somos?</a>

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
    <!-- Apresentação -->
    <br><br>
    <section class="bg-dark espaco">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-0 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                            <div class=" text-warning text_definition">
                                PRATICIDADE E SEGURANÇA QUE VOCÊ EXIGE?
                            </div>
                            <p class="text-definition2 text-light">REVISE SUAS MANUTENÇÕES USANDO O SISTEMA DE
                                NOTIFICAÇÃO PREDITIVA E
                                COMPARE PREÇOS ANTES DA TROCA DOS COMPONENTES NA ABA DE ANÚNCIOS DOS FORNECEDORES</p>
                        </div>
                        <div class="col-0 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                            <img src="./Views/img/note_app.png" id="icone">
                            <br><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Sobre o revise -->
    <section class="backgroundWhite" id="sobre">
        <div class="container">
            <div class="row">
                <div class="col-12"></div>
                <video class=" w-100" height="450" alt="..." controls muted autoplay allowfullscreen>
                    <source src="./Views/img/pitch_oficial.mp4" type="video/mp4">
            </div>
        </div>
    </section>
    <!-- Planos-->
    <section class="backgroundYellow">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 tituloBranco">
                    <h1>Planos</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 PlanoCard card_hover">
                    <div class="card tamanhoCard">
                        <div class="card-body">
                            <h5 class="card-title plano_nomes">Basic</h5>
                            <p class="card-text">
                                <ul>
                                    <li class="planos_padding">Gratuito</li>
                                    <li class="planos_padding">Máximo de 2 carros cadastrados</li>
                                    <li class="planos_padding">Obd2 e App não inclusos (compra a parte opcional)</li>
                                    <li class="planos_padding">Visualização dos anúncios postados pelos fornecedores
                                    </li>
                                    <div class="vazia"></div>
                                </ul>
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 PlanoCard card_hover">
                    <div class="card tamanhoCard">
                        <div class="card-body">
                            <h5 class="card-title plano_nomes">Standart</h5>
                            <p class="card-text">
                                <ul>
                                    <li class="planos_padding">R$ 9,99 p/ mês</li>
                                    <li class="planos_padding">Máximo de 5 carros cadastrados</li>
                                    <li class="planos_padding">Obd2 e App não inclusos (compra a parte opcional)</li>
                                    <li class="planos_padding">Visualização dos anúncios postados pelos fornecedores
                                    </li>
                                    <div class="vazia"></div>
                                </ul>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 PlanoCard card_hover">
                    <div class="card tamanhoCard">
                        <div class="card-body">
                            <h5 class="card-title plano_nomes">Profission</h5>
                            <p class="card-text">

                                <ul>
                                    <li class="planos_padding">R$ 39,99 p/ mês</li>
                                    <li class="planos_padding">Máximo de 20 carros cadastrados</li>
                                    <li class="planos_padding">Obd2 e App não inclusos (compra a parte opcional)</li>
                                    <li class="planos_padding">Desconto na compra do Obd2 e App</li>
                                    <li class="planos_padding">Visualização dos anúncios postados pelos fornecedores
                                    </li>
                                </ul>

                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 PlanoCard card_hover">
                    <div class="card tamanhoCard">
                        <div class="card-body">
                            <h5 class="card-title plano_nomes">Deluxe Edition</h5>
                            <p class="card-text">

                                <ul>
                                    <li class="planos_padding">R$ 99,90 p/ mês</li>
                                    <li class="planos_padding">Máximo de 50 carros cadastrados</li>
                                    <li class="planos_padding">Obd2 e App inclusos (1 unidade)</li>
                                    <li class="planos_padding">Desconto na compra do Obd2 e App</li>
                                    <li class="planos_padding">Visualização dos anúncios postados pelos fornecedores
                                    </li>
                                </ul>

                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Aplicativo section -->
    <section class="backgroundBlack bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
                    <div class="row">
                        <div class="Texto ">
                            <!-- Titulo do texto -->
                            <header>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 tituloPreto">
                                    <h1 class="text-white">Aplicativo</h1>
                                </div>
                            </header>
                            <!-- Texto -->
                            <section>
                                <p>

                                </p>
                            </section>
                            <!-- Rodapé -->
                            <footer>
                                <div class="container">
                                    <div class="row DownloadApp center">
                                        <div
                                            class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 iconAppDownload center margem">
                                            <a href="">
                                                <img src="./Views/img/button_download_android.png" class="">
                                            </a>
                                        </div>
                                        <div
                                            class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 iconAppDownload center margem">
                                            <a href="">
                                                <img src="./Views/img/button_download_ios.png" class="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </footer>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 wow bounceInRight center"
                    data-wow-duration="2s">
                    <img src="./Views/img/AppRevise.png" class="AppSmart">
                </div>
            </div>
        </div>
    </section>
    <!--Obd2 section-->
    <section class="bg-dark">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 tituloBranco">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators index">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="./Views/img/1.jpg" class="d-block w-100 altura" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./Views/img/2.jpg" class="d-block w-100 altura" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./Views/img/3.jpg" class="d-block w-100 altura" alt="...">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Desenvolvedores -->
    <section class="backgroundWhite">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-auto col-lg-auto col-xl-auto tituloPreto">
                    <h1>Time de Desenvolvedores</h1>

                </div>
            </div>
            <div class="row space">

                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-2">
                    <div class="card card_align" style="width: 12rem;">
                        <img src="./Views/img/integrantes/fe.jpeg" class="card-img-top rounded-circle foto" alt="...">
                        <div class="card-body">
                            <p class="card-text text-secondary h5 descricao">Analista</p>
                            <p class="card-text text-secondary descricao">Fernanda Pereira</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-2">
                    <div class="card card_align" style="width: 12rem;">
                        <img src="./Views/img/integrantes/lucas.jpeg" class="card-img-top rounded-circle foto"
                            alt="...">
                        <div class="card-body">
                            <p class="card-text text-secondary h5 descricao">DBA</p>
                            <p class="card-text text-secondary descricao">Lucas Juan</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-2">
                    <div class="card  card_align" style="width: 12rem;">
                        <img src="./Views/img/integrantes/bruno.jpeg" class="card-img-top rounded-circle foto"
                            alt="...">
                        <div class="card-body">
                            <p class="card-text text-secondary h5 descricao">Front-end</p>
                            <p class="card-text text-secondary descricao">Bruno Silva</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-2">
                    <div class="card card_align" style="width: 12rem;">
                        <img src="./Views/img/integrantes/luiz.jpeg" class="card-img-top rounded-circle foto" alt="...">
                        <div class="card-body">
                            <p class="card-text text-secondary h5 descricao">Designer</p>
                            <p class="card-text text-secondary descricao">Luiz Marcelo </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-2">
                    <div class="card card_align" style="width: 12rem;">
                        <img src="./Views/img/integrantes/katry.jpeg" class="card-img-top rounded-circle foto"
                            alt="...">
                        <div class="card-body">
                            <p class="card-text text-secondary h5 descricao">Back-end</p>
                            <p class="card-text text-secondary descricao">Katryel Menezes</p>
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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
<script src="Views/js/wow.js"></script>
<script src="Views/js/index.js"></script>
<script>
    new WOW().init();
</script>

</html>