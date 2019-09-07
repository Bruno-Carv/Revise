@extends('template/login.template')


@section('titulo', 'SignIn')


@section('conteudoLogin')
<div class="divLogin imagemLogin col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 align-self-center ">
    <div class="row">
        <div class="col-0 col-sm-0 col-md-0 col-lg-7 col-xl-7 padding"></div>
        <div class="col-0 col-sm-0 col-md-0 col-lg-5 col-xl-5 background">

            <form method="POST" action="Controllers/controllerSignIn.php" onsubmit="">
                <div class="row formularioLogin">
                    
                </div>
            </form>
        </div>
    </div>
</div>
@stop