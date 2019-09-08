@extends('template/template')


@section('titulo', 'Cadastro Juridico')


@section('conteudo')
<section class="backgroundBlackLight">
    <div class="container">
        <!-- Titulo do cadastro -->
        <div class="row">
            <div class="col-12">
                <h1>Cadastro Juridico</h1>
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
                                <input type="email" class="form-control" id="campoEmail" required="" placeholder="nome@exemplo.com">
                            </div>
                            <div class="form-group inputCadastro">
                                <div class="form-row">
                                    <!-- CNPJ -->
                                    <div class="col-12 col-sm-12 col-md col-lg col-xl">
                                        <label for="exampleFormControlInput1">CNPJ</label>
                                        <input type="text" class="form-control" id="campoDoCpf" placeholder="xxx.xxx.xxx-xx">
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
                    <!--Botões slide 1-->
                    <div class="row">
                        <div class="col-0 col-sm-0 col-md-6 col-lg-8 col-xl-8"></div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                            <div class="row">
                                <div class="ol-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                    <button class="btn btn-outline-warning btn-block" id="btnVolta" href="#carouselExampleSlidesOnly" role="button" data-slide="prev" onclick="redirecionar()">Voltar</button>
                                </div>
                                <div class="ol-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                    <button class="btn btn-outline-warning  btn-block" id="btnContinua" href="#carouselExampleSlidesOnly" role="button" data-slide="next" value="1">Continuar</button>
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
                            <br>
                        </div>
                    </div>
                    <!--Botões slide 2-->
                    <div class="row" style="">
                        <div class="col-0 col-sm-0 col-md-6 col-lg-8 col-xl-8"></div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                            <div class="row">
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
                                                                <input id="servicoInput" type="number" class="form-control" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <span>Produtos</span>
                                                                <input id="produtoInput" type="number" class="form-control" placeholder="">
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
                                                                <h6>Serviço:</h6>
                                                            </div>
                                                            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                                                                <h6><b id="valorServico"></b></h6>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="row">
                                                            <div class="col-12 col-sm-12 col-md-6 col-lg-8 col-xl-8">
                                                                <h6>Produtos anúnciados:</h6>
                                                            </div>
                                                            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                                                                <h6><b id="valorProduto"></b></h6>
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
                                            <button class="btn btn-outline-warning btn-block" id="btnVolta" href="#carouselExampleSlidesOnly" role="button" data-slide="prev">Voltar</button>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <button class="btn btn-outline-warning  btn-block" id="btnContinua" href="#carouselExampleSlidesOnly" role="button" data-slide="next" value="1" onclick="confirma()">Finalizar Cadastro</button>
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
@stop

@section('script')
<script src="{{     asset('js/jquery.mask.js')   }}"></script>
<script src="{{     asset('js/cadastro.js')   }}"></script>
@stop