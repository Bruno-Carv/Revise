@extends('template/fisico')

@section('titulo','Serviços e Produtos')

@section('menu_anuncio','active')

@section('style')
<style>

</style>
@endsection

@section('sistema_fisico')
    @if(isset($Anuncio))
        @foreach ($Anuncio as $Anuncio)
        <div class="row p-1">
        <!--Anúncios Postados-->
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 paddingCards">
                    <div class="card bg-white h-100">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="d-block w-100" src="{{ asset('img/ausente.jpg') }}" height="500" width="500" alt="Primeiro Slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="{{ asset('img/ausente.jpg') }}" height="500" width="500" alt="Primeiro Slide">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-5">
                                    <h5 class="card-subtitle mb-3" align="center">{{ $Anuncio->Tipo }}</h5>
                                    <h4 class="card-title text-dark" align="center">{{ $Anuncio->Titulo }}</h4>
                                    @if($Anuncio->Valor != null)
                                        <h3 class="card-text text-dark m-5" align="center">R$ {{ $Anuncio->Valor }} </h3>
                                    @endif
                                    <h5 class="card-text mt-5">Descrição</h5>
                                    <p class="card-text text-dark mt-3" align="justify">{{ $Anuncio->Descricao }}</p>
                                    <h5 class="card-text mt-5">Empresa</h5>
                                    <p class="card-text text-dark mt-3" align="justify">{{ $Anuncio->Empresa }}</p>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-12">
                                    <h5>Endereço</h5>
                                    <iframe id="ifr-google" src="https://maps.google.com/maps?width=100%&amp;height=500&amp;hl=en&amp;q={{ urlencode($Anuncio->Numero.''.$Anuncio->Endereco.''.$Anuncio->Bairro.''.$Anuncio->Cidade.''.$Anuncio->Estado) }}&amp;ie=UTF8&amp;t=&amp;z=19&amp;iwloc=B&amp;output=embed" scrolling="no" marginheight="0" marginwidth="0" width="100%" height="500" frameborder="0"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    @endif
@endsection

@section('script')
<!--<script src="https://maps.googleapis.com/maps/api/place/textsearch/json?query={{ urlencode(utf8_encode($Anuncio->Endereco))}}&key=AIzaSyBoC_pjXcdmJvbmB_nUbbQQfbv2n8iPB6c"></script>-->
@endsection
