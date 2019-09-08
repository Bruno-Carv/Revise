@extends('template.fisico')

@section('titulo', 'Home Fisico')

@section('conteudoFisico')

<form action="" method="POST" onsubmit="">
    <div class="container-fluid">
        <div class="row formularioCadastro">
            <div class="col-12">
                <!-- Nome completo -->
                <div class="form-group inputCadastro">
                    <div class="form-row">
                        <div class="col-12">
                            <label for="campoNome">Nome completo</label>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <input type="text" class="form-control" id="campoNome">

                        </div>
                    </div>
                </div>
                <!-- E-mail -->
                <div class="form-group inputCadastro">
                    <label for="exampleFormControlInput1">Endereço de email</label>
                    <input type="email" class="form-control" id="campoEmail">
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
                            <input type="date" class="form-control" id="campoDeNascimento">
                        </div>
                    </div>
                </div>
                <!--Botões para alteração-->
                <br>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4" style="display: block;" id="btn_off">
                        <button type="button" class="btn btn-warning btn-block" onclick="btnPerfil()">Alterar dados</button>
                    </div>
                    <!--Botões escondidos-->
                    <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8" style="display: none;" id="btn_hidden">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5">
                                <button type="button" class="btn btn-warning btn-block" onclick="Salvar()">Salvar</button>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5">
                                <button type="button" class="btn btn-warning btn-block" onclick="Cancelar()">Cancelar</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
</form>

@stop