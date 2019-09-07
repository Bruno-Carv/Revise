@extends('template/template')

@section('titulo', 'Home')

@section('menuHome', 'active')



@section('conteudo')
<!-- Apresentação -->
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
                        <img src="{{ asset('img/note_app.png')}}" id="icone">
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
                <source src="{{ asset('img/pitch_oficial.mp4')}}" type="video/mp4">
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
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 iconAppDownload center margem">
                                        <a href="">
                                            <img src="{{ asset('img/button_download_android.png')}}" class="">
                                        </a>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 iconAppDownload center margem">
                                        <a href="">
                                            <img src="{{ asset('img/button_download_ios.png')}}" class="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </footer>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 wow bounceInRight center" data-wow-duration="2s">
                <img src="{{ asset('img/AppRevise.png')}}" class="AppSmart">
            </div>
        </div>
    </div>
</section>
<!--Obd2 section-->
<section class="bg-dark">
    <div class="container">
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
                            <img src="{{ asset('img/1.jpg')}}" class="d-block w-100 altura" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/2.jpg')}}" class="d-block w-100 altura" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/3.jpg')}}" class="d-block w-100 altura" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
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
                    <img src="{{ asset('img/integrantes/fe.jpeg')}}" class="card-img-top rounded-circle foto" alt="...">
                    <div class="card-body">
                        <p class="card-text text-secondary h5 descricao">Analista</p>
                        <p class="card-text text-secondary descricao">Fernanda Pereira</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-2">
                <div class="card card_align" style="width: 12rem;">
                    <img src="{{ asset('img/integrantes/lucas.jpeg')}}" class="card-img-top rounded-circle foto" alt="...">
                    <div class="card-body">
                        <p class="card-text text-secondary h5 descricao">DBA</p>
                        <p class="card-text text-secondary descricao">Lucas Juan</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-2">
                <div class="card  card_align" style="width: 12rem;">
                    <img src="{{ asset('img/integrantes/bruno.jpeg')}}" class="card-img-top rounded-circle foto" alt="...">
                    <div class="card-body">
                        <p class="card-text text-secondary h5 descricao">Front-end</p>
                        <p class="card-text text-secondary descricao">Bruno Silva</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-2">
                <div class="card card_align" style="width: 12rem;">
                    <img src="{{ asset('img/integrantes/luiz.jpeg')}}" class="card-img-top rounded-circle foto" alt="...">
                    <div class="card-body">
                        <p class="card-text text-secondary h5 descricao">Designer</p>
                        <p class="card-text text-secondary descricao">Luiz Marcelo </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-2">
                <div class="card card_align" style="width: 12rem;">
                    <img src="{{ asset('img/integrantes/katry.jpeg')}}" class="card-img-top rounded-circle foto" alt="...">
                    <div class="card-body">
                        <p class="card-text text-secondary h5 descricao">Back-end</p>
                        <p class="card-text text-secondary descricao">Katryel Menezes</p>
                    </div>
                </div>
            </div>



</section>

@stop