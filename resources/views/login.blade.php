@extends('template.Layoutlogin')

@section('titulo','Login')

@section('login')
<form method="POST" action="{{ url('/Home') }}" onsubmit="">
    @csrf
    <div class="row formularioLogin">
        <div class="logoRevise">
            <img src="{{asset('img/logo.png')}}" width="200" alt="Revise">
        </div>
        <div class="col-12 inputLogin">
            <div class="label-float">
                <input type="text" placeholder=" " name="cpfcnpj" id="cpfcnpj">
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
            <?php if (isset($_SESSION["N-Autenticado"])) {
                echo '<div class="alert alert-danger" role="alert">
                                CPF/CNPJ ou senha está inválido.
                                </div>';
                unset($_SESSION["N-Autenticado"]);
            }
            if (isset($_SESSION["CADASTRADO-SUCESSO"])) {
                echo '<div class="alert alert-success" role="alert">
                                Usuário cadastrado com sucesso.
                                </div>';
                unset($_SESSION["CADASTRADO-SUCESSO"]);
            }
            ?>
            <button type="submit" class="btn btn-dark btn-lg btn-block">
                ENTRAR
            </button>
        </div>
        <div class="col-12 linkEsqueci">
            <a href="{{ url('/Esqueci') }}">
                <label>
                    Esqueceu sua senha?
                </label>
            </a>
        </div>
        <div class="col-12 btnCadastrar">
            <button type="button" onclick="signUp()" class="btn btn-dark btn-lg btn-block">
                CADASTAR
            </button>
        </div>
        <div class="col-12 linkEsqueci">
            <a href="{{url('/')}}">
                <label>
                    Voltar
                </label>
            </a>
        </div>
    </div>
</form>
@endsection
