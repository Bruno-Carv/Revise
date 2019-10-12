@extends('template/fisico')

@section('titulo','Perfil')

@section('menu_perfil','active')



@section('style')

@endsection



@section('sistema_fisico')
<div class="card testimonial-card">
    <div class="card-up lighten-1"></div>

    <div class="avatar mx-auto col">
        <img src="{{ asset('img/user.jpg') }}" width="300" height="300" class="rounded-circle" alt="woman avatar">
    </div>
    <div class="card-body">
        <h4 class="card-title">{{ $dados->Nome }}</h4>
        <hr>
        <p><i class="fas fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, adipisci</p>
    </div>
</div>
@endsection



@section('script')


@endsection
