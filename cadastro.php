<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Revise - Cadastro</title>
    <link rel="shortcut icon" href="./Views/img/logo.ico" />
    <link rel="stylesheet" type="text/css" href="Views/css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu|Cairo|Rubik&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./Views/css/bootstrap.css">
</head>

<body>
    <header>
        <!-- Menu -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <!-- Logo -->
                <a class="navbar-brand" href="#">
                    <img src="./Views/img/logo.png" width="50" height="50" alt="Revise">
                </a>
                <!-- Botão do menu -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Links do menu -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="./index.html">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="./planos.html" id="planoMenu">
                                Planos
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="empresaEmpresa" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Aplicativo</a>
                            <div class="dropdown-menu" aria-labelledby="empresaEmpresa">
                                <a class="dropdown-item bg-light" href="./aplicativo.html">Sobre o Aplicativo Revise</a>
                                <a class="dropdown-item bg-light" href="./aplicativo.html#suporte">Suporte</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="empresaEmpresa" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Empresa</a>
                            <div class="dropdown-menu" aria-labelledby="empresaEmpresa">
                                <a class="dropdown-item bg-light" href="./empresa.html#sobre">Sobre</a>
                                <a class="dropdown-item bg-light" href="./empresa.html#vagas">Trabalhar Conosco</a>
                            </div>
                        </li>
                    </ul>
                    <div class="form-inline my-2 my-lg-0">
                        <button class="btn btn-outline-warning my-2 my-sm-0 botaoLogin" onclick="signUp()" type="button">Cadastar</button>
                        <button class="btn btn-outline-warning my-2 my-sm-0 botaoLogin" onclick="signIn()" type="button">Acessar</button>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- Titulo do cadastro -->
    <section>
        <div class=" backgroundBlackLight">
            <div class="row">
                <div class="col-12">
                    <h1>Cadastro Físico</h1>
                </div>
            </div>
            <!-- Barra de progresso -->
            <div class="progress bg-dark">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 0%" aria-valuenow="0"
                    aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
        <!--Inicio dos Forms-->
        <div class="backgroundBlackLight">
            <!--Form dados pessoais-->
            <form name="CadastroFisico" method="POST" action="./Controllers/controllerCadastroFisico.php" onSubmit="return ValidarCadastroFisico()">
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
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                    <input type="text" maxlength="125" class="form-control" id="txtnome" name="txtnome" onkeypress="return bloqueioNumero(event)">
                                </div>
                            </div>
                        </div>
                        <!-- E-mail -->
                        <div class="form-group inputCadastro">
                            <label for="exampleFormControlInput1">Endereço de email</label>
                            <input type="email" class="form-control" maxlength="60" id="txtemail" name="txtemail" placeholder="nome@exemplo.com">
                        </div>
                        <div class="form-group inputCadastro">
                            <div class="form-row">
                                <!-- CPF -->
                                <div class="col-12 col-sm-12 col-md col-lg col-xl">
                                    <label for="exampleFormControlInput1">CPF</label>
                                    <input type="text" class="form-control" maxlength="14" id="txtcpf" name="txtcpf" placeholder="XXX.XXX.XXX-XX">
                                </div>
                                <!-- Data de nascimento -->
                                <div class="col-12 col-sm-12 col-md col-lg col-xl">
                                    <label for="exampleFormControlInput1">Data de nascimento</label>
                                    <input type="date" class="form-control" id="txtNascimento" name="txtNascimento" placeholder="DIA/MÊS/ANO">
                                </div>
                            </div>
                        </div>
                        <!-- Senha -->
                        <div class="form-group inputCadastro">
                            <label for="campoSenha">Senha</label>
                            <input type="password" id="txtsenha" maxlength="20" name="txtsenha" class="form-control" aria-describedby="descricaoSenha">
                            <small id="descricaoSenha" class="form-text text-muted">
                                Sua senha deve ter entre 6 e 20 caracteres, os quais devem ser letras e números,
                                sem
                                espaços, caracteres especiais ou emojis.
                            </small>
                        </div>
                        <!-- Confirma senha -->
                        <div class="form-group inputCadastro">
                            <label for="campoSenha">Confirmar senha</label>
                            <input type="password" id="txtcsenha" name="txtcsenha" maxlength="20"  class="form-control" aria-describedby="descricaoSenha">
                        </div>
                    </div>
                </div>
                <!--Form dados veiculo-->
                <br>
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
                                        <input type="text" id="txtplaca" maxlength="8" name="txtplaca" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <button type="button" onclick="consultar();" id="buscaPlaca" class="btn btn-warning">Pesquisar Placa</button>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                            <div class="form-group">
                                <label for="disabledTextInput">Marca/Modelo</label>
                                <input type="text" readonly="true"  class="form-control" id="txtMarca" name="txtMarca" placeholder="">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="anoVeiculo">Ano</label>
                                    <input type="text" readonly="true"  class="form-control" id="txtAno" name="txtAno" placeholder="">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="corVeiculo">Cor</label>
                                    <input type="text" readonly="true"  class="form-control"  id="txtCor" name="txtCor" placeholder="">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-7">
                                    <label for="cidadeVeiculo">Cidade</label>
                                    <input type="text" readonly="true" class="form-control"  id="txtCidade" name="txtCidade" placeholder="Cidade">
                                </div>
                                <div class="col">
                                    <label for="estadoVeiculo">Estado</label>
                                    <input type="text" readonly="true"  class="form-control" id="txtEstado" name="txtEstado" placeholder="Estado">
                                </div>
                            </div>
                    </div>
                </div>
                <!--Form planos-->
                <br>
                <div class="row">
                    <div class="col-12">
                        <h4>Planos</h4>
                    </div>
                    <br><br>
                </div>
                <!--Seleção-->
                <div class="row">
                    <div class="col-5">
                        <div class="input-group mb-3">
                            <select class="custom-select" id="txtplano" name="txtplano" aria-label="Exemplo de select com botão addon">
                                <option value="0" selected>Selecione seu plano...</option>
                                <option value="1">Basic</option>
                                <option value="2">Standart</option>
                                <option value="3">Profission</option>
                                <option value="4">Deluxe Edition </option>

                            </select>
                        </div>
                    </div>
                </div>
                <!--Cards plano-->
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3 PlanoCard card_hover ">
                        <div class="card tamanhoCard shadow mb-5 bg-white">
                            <div class="card-body">
                                <h5 class="card-title plano_nomes">Basic</h5>
                                <p class="card-text">
                                    <ul>
                                        <li class="planos_padding">Gratuito</li>
                                        <li class="planos_padding">Máximo de 2 carros cadastrados</li>
                                        <li class="planos_padding">Obd2 e App não inclusos (compra a
                                            parte opcional)
                                        </li>
                                        <li class="planos_padding">Visualização dos anúncios postados
                                            pelos
                                            fornecedores
                                        </li>
                                        <div class="vazia"></div>
                                    </ul>
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3 PlanoCard card_hover ">
                        <div class="card tamanhoCard shadow mb-5 bg-white">
                            <div class="card-body">
                                <h5 class="card-title plano_nomes">Standart</h5>
                                <p class="card-text">
                                    <ul>
                                        <li class="planos_padding">R$ 9,99 p/ mês</li>
                                        <li class="planos_padding">Máximo de 5 carros cadastrados</li>
                                        <li class="planos_padding">Obd2 e App não inclusos (compra a
                                            parte opcional)
                                        </li>
                                        <li class="planos_padding">Visualização dos anúncios postados
                                            pelos
                                            fornecedores
                                        </li>
                                        <div class="vazia"></div>
                                    </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3 PlanoCard card_hover ">
                        <div class="card tamanhoCard shadow mb-5 bg-white">
                            <div class="card-body">
                                <h5 class="card-title plano_nomes">Profission</h5>
                                <p class="card-text">

                                    <ul>
                                        <li class="planos_padding">R$ 39,99 p/ mês</li>
                                        <li class="planos_padding">Máximo de 20 carros cadastrados</li>
                                        <li class="planos_padding">Obd2 e App não inclusos (compra a
                                            parte opcional)
                                        </li>
                                        <li class="planos_padding">Desconto na compra do Obd2 e App</li>
                                        <li class="planos_padding">Visualização dos anúncios postados
                                            pelos
                                            fornecedores
                                        </li>
                                    </ul>

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3 PlanoCard card_hover ">
                        <div class="card tamanhoCard shadow mb-5 bg-white">
                            <div class="card-body">
                                <h5 class="card-title plano_nomes">Deluxe Edition</h5>
                                <p class="card-text">

                                    <ul>
                                        <li class="planos_padding">R$ 99,90 p/ mês</li>
                                        <li class="planos_padding">Máximo de 50 carros cadastrados</li>
                                        <li class="planos_padding">Obd2 e App inclusos (1 unidade)</li>
                                        <li class="planos_padding">Desconto na compra do Obd2 e App</li>
                                        <li class="planos_padding">Visualização dos anúncios postados
                                            pelos
                                            fornecedores
                                        </li>
                                    </ul>

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Botão-->
                <br><br>
                <div class="row">
                    <div class="col-0 col-sm-0 col-md-0 col-lg-8 col-xl-8"></div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                            <button class="btn btn-warning btn-block" id="btnContinua" type="submit" onclick="">Finalizar</button>
                        </div>
                </div>
        </div>
        </form>
    </section>
    <!-- Rodapé -->
    <footer class="RodapeLight navbar-light bg-light ">
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
                                <img src="./Views/img/icon/facebookIcon.png" class="redesocialIcones" alt="Facebook-revise" />
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <img src="./Views/img/icon/InstagramIcon.png" class="redesocialIcones" alt="Instagram-revise" />
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <img src="./Views/img/icon/YoutubeIcon.png" class="redesocialIcones" alt="Youtube-revise" />
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <img src="./Views/img/icon/twitterIcon.png" class="redesocialIcones" alt="Twitter-revise" />
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <img src="./Views/img/icon/githubIcon.png" class="redesocialIcones" alt="Github-revise" />
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        </div>
    </footer>
    <div id="notifications"></div>
</body>
<script src="./Views/js/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
<script src="./Views/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
<script src="./Views/js/wow.js"></script>
<script src="./Views/js/cadastro.js"></script>
<script src="./Views/js/index.js"></script>
<script src="./Views/js/jquery-3.4.1.js"></script>
<script src="./Views/js/sweetalert.min.js"></script>
<script src="./Views/js/jquery.mask.js"></script>
<script src="./Views/js/API.js"></script>
<script src="./Views/js/validation/CadastroFisico.js"></script>
<?php 
if(isset($_SESSION["ERRO-CADASTRO"]))
{
    echo $_SESSION["ERRO-CADASTRO"];
}
unset($_SESSION["ERRO-CADASTRO"]);
?>
</html>