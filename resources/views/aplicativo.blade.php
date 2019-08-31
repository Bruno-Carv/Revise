<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aplicativo</title>
    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway:100,600">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/index.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Ubuntu|Cairo|Rubik&display=swap">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/aplicativo.css')}}">
</head>

<body>
    <!-- Menu -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark  barra_nav">
            <div class="container-fluid">
                <!-- Logo -->
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('img/logo.png')}}" width="50" height="50" alt="Revise">
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
                            <a class="nav-link" href="./index.html">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="./planos.html" id="planoMenu">
                                Planos
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link active dropdown-toggle" href="#" id="empresaEmpresa" role="button"
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
    <section class="bg-dark">
        <div class="container">
            <br>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 align-self-start">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 TituloAplicativoIntroducao">
                                <h1 class="tituloBranco">
                                    Aplicativo Revise
                                </h1>
                            </div>
                            <div class="col-12">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <img src="{{ asset('img/app.png')}}" class="smartphoneIntroducao wow bounceInRight"
                        data-wow-duration="1.5s">
                </div>
            </div>
        </div>
    </section>
    <section class="bg-light" id="sobre">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="col-12 col-sm-12 col-md-auto col-lg-auto col-xl-auto text-dark">
                        <br><br>
                        <h1>Sobre</h1>
                        <br>
                    </div>
                </div>
                <div class="col-12">
                    <p class="text-dark h5">

                        Ao adquirir o sensor através do plano Deluxe Edition ou pela compra do pacote App+Obd2, esse
                        dispositivo é conectado ao veículo e
                        acionado. Em seguida, para que as informações cheguem até aplicativo do Revise, é necessário
                        acionar a
                        conexão bluetooth do seu aparelho e logo após, realizar o scanner. Mas o que de fato ele
                        detecta? Veja a seguir:
                        <br><br>
                        <ul>
                            <li class="text-dark h5">Quilometragem para fazer as manutenções preditivas</li>
                            <li class="text-dark h5">Nível de combustível</li>
                        </ul>
                    </p>
                    </p>
                </div>
            </div>
        </div>
        <br><br>
    </section>
    <section class="backgroundYellow" id="requisitos">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-auto col-lg-auto col-xl-auto tituloPreto">
                    <h1 class="text-white">Requisitos do aplicativo</h1>
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="accordion" id="accordionExample">
                        <div class="card card_hover">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link text-dark " type="button" data-toggle="collapse"
                                        data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"
                                        id="android">
                                        Clique para ver sobre Android
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>

                                    </p>

                                    <table class="table">
                                        <tr>
                                            <th scope="col">Categorias</th>
                                            <th scope="col">Requisitos</th>
                                        </tr>
                                        <tr>
                                            <td>Android</td>
                                            <td>5.0 ou superior</td>
                                        </tr>
                                        <tr>
                                            <td>Dispositivo</td>
                                            <td>Smartphone e tablet</td>
                                        </tr>
                                        <tr>
                                            <td>Idioma</td>
                                            <td>Português</td>
                                        </tr>
                                    </table>
                                    <br><br>
                                    <table class="table">
                                        <tr>
                                            <th scope="col">Funções</th>
                                            <th scope="col">Gratuito</th>
                                            <th scope="col">Pago</th>
                                        </tr>
                                        <tr>
                                            <td>Notificação</td>
                                            <td>2 carros</td>
                                            <td>+ de 2</td>
                                        </tr>
                                        <tr>
                                            <td>Perfil</td>
                                            <td>Contém</td>
                                            <td>Contém</td>
                                        </tr>
                                        <tr>
                                            <td>Acesso aos veículos pelo aplicativo</td>
                                            <td> 2 carros</td>
                                            <td> + de 2 </td>
                                        </tr>
                                        <tr>
                                            <td>Suporte scanner OBD</td>
                                            <td> --- </td>
                                            <td> Contém </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="card card_hover">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed text-dark" type="button"
                                        data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo" id="IOS">
                                        Clique para ver sobre IOS
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                        <table class="table">
                                            <tr>
                                                <th scope="col">Categorias</th>
                                                <th scope="col">Requisitos</th>
                                            </tr>
                                            <tr>
                                                <td>IOS </td>
                                                <td>9 ou superior</td>
                                            </tr>
                                            <tr>
                                                <td>Dispositivo</td>
                                                <td>Iphone 5s ou superior / IPad retina ou superior</td>
                                            </tr>
                                            <tr>
                                                <td>Idioma</td>
                                                <td>Português</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <br><br>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                        <table class="table">
                                            <tr>
                                                <th scope="col">Funções</th>
                                                <th scope="col">Gratuito</th>
                                                <th scope="col">Pago</th>
                                            </tr>
                                            <tr>
                                                <td>Notificação</td>
                                                <td> 2 carros</td>
                                                <td> + de 2</td>
                                            </tr>
                                            <tr>
                                                <td>Perfil</td>
                                                <td>Contém</td>
                                                <td>Contém</td>
                                            </tr>
                                            <tr>
                                                <td>Acesso dos veículos pelo aplicativo</td>
                                                <td> 2 carros</td>
                                                <td> + de 2</td>
                                            </tr>
                                            <tr>
                                                <td>Suporte scanner OBD</td>
                                                <td> --- </td>
                                                <td> Contém</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <img id="imgRequisito" src="{{ asset('img/nexus5x-landscape.png')}}" class="AppSmart ">
                </div>
            </div>
        </div>
    </section>
    <section class="backgroundBlack" id="suporte">
        <div class="container">
            <div class="row">
                <div class="col-12 tituloBranco">
                    <h1>Suporte</h1>
                </div>
            </div>
            <div class="row">
                <div class=" col-12 SuporteTexto tituloBranco">
                    <p>
                        Caso tenha algum problema, insira as informações necessárias no formulário abaixo. Iremos
                        receber
                        sua requisição e retornar o mais rápido possível.
                    </p>
                    <p>
                        Qualquer dúvida, entre em contato conosco pelas redes sociais, e-mail <a
                            href="mailto:contatoRevise@revise.com">contatoRevise@revise.com</a> ou pelo telefone:<a
                            href="tel:13997934483">+55 (13) 99199-4978.</a>
                    </p>
                </div>
            </div>
            <form action="" method="POST" onsubmit="">
                <div class="formularioSuport row tituloBranco">
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                        <span>Digite seu e-mail aqui:</span>
                        <div class="input-group input-group-lg">
                            <input type="text" class="form-control" aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-lg">
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <span>Como podemos ajudar?</span>
                        <div class="input-group">
                            <textarea class="form-control resize" aria-label="With textarea" rows="4"></textarea>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                        <div class="input-group suporteBotao">
                            <button type="button" class="btn btn-outline-warning porcentagem"
                                type="submit">Enviar</button>
                        </div>
                    </div>
                </div>
            </form>
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
<script src="{{     asset('/js/wow.js')   }}">
</script>
<script src="{{     asset('js/index.js')   }}"></script>
<script>
    new WOW().init();
    $(document).ready(function () {
        $("#IOS").click(function () {
            $("#imgRequisito").attr('src', 'img/iphone8spacegrey_landscape.png');
        });
        $('#android').click(function () {
            $("#imgRequisito").attr('src', 'img/nexus5x-landscape.png');
        });
    });
</script>

</html>