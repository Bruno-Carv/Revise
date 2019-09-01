<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>

<body class="centralizar">
    <div class="container menu">
        <div class="row justify-content-center">
            <div class="divLogin imagemLogin col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 align-self-center ">
                <div class="row">
                    <div class="col-0 col-sm-0 col-md-0 col-lg-0 col-xl-7 padding"></div>
                    <div class="col-0 col-sm-0 col-md-0 col-lg-12 col-xl-5 background">

                        <form method="POST" action="Controllers/controllerSignIn.php" onsubmit="">
                            <div class="row formularioLogin">
                                <div class="logoRevise">
                                    <img src="./Views/img/logo.png" width="300" alt="Revise">
                                </div>
                                <div class="col-12 inputLogin">
                                    <div class="label-float">
                                        <input type="text" placeholder=" " name="cpfcnpj" id="cpfcnpj" />
                                        <label>CPF/CNPJ</label>
                                    </div>
                                </div>
                                <div class="col-12 inputLogin">
                                    <div class="label-float">
                                        <input type="password" placeholder=" " name="senha"/>
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
                                    <button type="button" href="{{  url('/')    }}" class="btn btn-dark btn-lg btn-block">
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
                    <div class="col-0 col-sm-0 col-md-0 col-lg-3 col-xl-3 padding"></div>
                </div>
            </div>
        </div>
       
    </div>
</body>
<script src="{{     asset('js/jquery.min.js')   }}"></script>
<script src="{{     asset('js/jquery.mask.js')   }}"></script>
</html>