@extends('template/login.template')


@section('titulo', 'SignIn')


@section('conteudoLogin')
<div class="divLogin imagemLogin col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 align-self-center ">
    <div class="row">
        <div class="col-0 col-sm-0 col-md-0 col-lg-7 col-xl-7 padding"></div>
        <div class="col-0 col-sm-0 col-md-0 col-lg-5 col-xl-5 background">

            <form method="POST" action="Controllers/controllerSignIn.php" onsubmit="">
                <div class="row formularioLogin">
                    <div class="logoRevise">
                        <img src="{{    asset('img/logo.png')    }}" width="200" alt="Revise">
                    </div>
                    <div class="col-12 inputLogin">
                        <div class="label-float">
                            <input type="text" placeholder=" " name="cpfcnpj" id="cpfcnpj" />
                            <label>CPF/CNPJ</label>
                        </div>
                    </div>
                    <div class="col-12 inputLogin">
                        <div class="label-float">
                            <input type="password" placeholder=" " name="senha" />
                            <label>Senha</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="custom-control  custom-checkbox my-1 mr-sm-2">
                            <input type="checkbox" class="custom-control-input" id="manterContectado">
                            <label class="custom-control-label " for="manterContectado">
                                Manter-me contectado.
                            </label>
                        </div>
                    </div>
                    <div class="col-12 btnEntrar">
                        <button type="submit" class="btn btn-dark btn-lg btn-block">
                            ENTRAR
                        </button>
                    </div>
                    <div class="col-12 linkEsqueci">
                        <a href="">
                            <label>
                                Esqueceu sua senha?
                            </label>
                        </a>
                    </div>
                    <div class="col-12 btnCadastrar">
                        <button type="button" href="{{  url('cadastrar')    }}" class="btn btn-dark btn-lg btn-block">
                            CADASTAR
                        </button>
                    </div>
                    <div class="col-12 linkEsqueci">
                        <a href="{{  url('/')    }}">
                            <label>
                                Voltar
                            </label>
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@stop