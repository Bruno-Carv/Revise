<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway:100,600">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projeto Revise - @yield('titulo')</title>
    <base href="{{ asset('img/logo.png') }}" target="_blank">
</head>

<body class="centralizar">
    <div class="container menu">
        <div class="row justify-content-center">
            <div class="divLogin imagemLogin col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 align-self-center ">
                <div class="row">
                    <div class="col-0 col-sm-0 col-md-0 col-lg-7 col-xl-7 padding"></div>
                    <div class="col-0 col-sm-0 col-md-0 col-lg-5 col-xl-5 background">
                        @yield('conteudoLogin')

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="{{     asset('js/jquery.min.js')       }}"></script>
<script src="{{     asset('js/jquery.mask.js')       }}"></script>
<script src="{{     asset('js/login.js')       }}"></script>

</html>