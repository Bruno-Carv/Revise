@extends('template.template')


@section('titulo', 'Cadastro Fisico')


@section('conteudo')
<section class="backgroundBlackLight inicio">
    <div class="container">
        <!-- Titulo do cadastro -->
        <div class="row">
            <div class="col-12">
                <h1>Cadastro Fisico</h1>
            </div>
        </div>
        <!-- Barra de progresso -->
        <div class="progress">
            <div class="progress-bar bg-warning" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
    </div>
</section>
<div id="carouselExampleSlidesOnly" class="carousel slide top" data-ride="carousel">
    <div class="carousel-inner">
        <form method="POST" action="{{ url('') }}">
            {{ csrf_field() }}
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
                                        <input type="text" class="form-control" id="campoSobrenome" placeholder="Sobrenome">
                                    </div>
                                </div>
                            </div>
                            <!-- E-mail -->
                            <div class="form-group inputCadastro">
                                <label for="exampleFormControlInput1">Endereço de email</label>
                                <input type="email" class="form-control" id="campoEmail" placeholder="nome@exemplo.com">
                            </div>
                            <div class="form-group inputCadastro">
                                <div class="form-row">
                                    <!-- CPF -->
                                    <div class="col-12 col-sm-12 col-md col-lg col-xl">
                                        <label for="exampleFormControlInput1">CPF</label>
                                        <input type="text" class="form-control" id="campoDoCpf" placeholder="xxx.xxx.xxx-xx">
                                    </div>
                                    <!-- Data de nascimento -->
                                    <div class="col-12 col-sm-12 col-md col-lg col-xl">
                                        <label for="exampleFormControlInput1">Data de nascimento</label>
                                        <input type="date" class="form-control" id="campoDeNascimento" placeholder="nome@exemplo.com">
                                    </div>
                                </div>
                            </div>
                            <!-- Senha -->
                            <div class="form-group inputCadastro">
                                <label for="campoSenha">Senha</label>
                                <input type="password" id="campoSenha" class="form-control" aria-describedby="descricaoSenha">
                                <small id="descricaoSenha" class="form-text text-muted">
                                    Sua senha deve ter entre 6 e 20 caracteres, os quais devem ser letras e números,
                                    sem
                                    espaços, caracteres especiais ou emojis.
                                </small>
                            </div>
                            <!-- Confirma senha -->
                            <div class="form-group inputCadastro">
                                <label for="campoSenha">Confirmar senha</label>
                                <input type="password" id="campoConfirmaSenha" class="form-control" aria-describedby="descricaoSenha">
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
                                            <input type="text" id="disabledTextInput" class="form-control" placeholder="">
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
                                        <input type="text" class="form-control" id="cidadeVeiculo" placeholder="Cidade">
                                    </div>
                                    <div class="col">
                                        <label for="estadoVeiculo">Estado</label>
                                        <input type="text" class="form-control" id="estadoVeiculo" placeholder="Estado">
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
                            <div class="row botaoCadastro">
                                <div class="ol-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                    <button class="btn btn-outline-warning btn-block" id="btnVolta" href="#carouselExampleSlidesOnly" role="button" data-slide="prev">Voltar</button>
                                </div>
                                <div class="ol-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                    <button class="btn btn-outline-warning  btn-block" id="btnContinua" href="#carouselExampleSlidesOnly" role="button" data-slide="next" value="1">Continuar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </form>
    </div>
</div>
@stop

@section('script')
<script src="{{     asset('js/jquery.mask.js')   }}"></script>
<script src="{{     asset('js/cadastro.js')   }}"></script>
@stop