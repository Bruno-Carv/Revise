@extends('template/template')


@section('titulo', 'Sobre')

@section('menuSobre', 'active')



@section('conteudo')
    <!-- Sobre -->
    <section class="bg-light inicio" id="sobre">
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
@stop
