@extends('template\juridico')

@section('titulo','Anuncio')

@section('menu_anuncios','active')





@section('style')

@endsection




@section('sistema_juridico')
<div class="col-12 inputPesquisa shadow-sm p-3 mb-5 rounded">
    <div class="row">
        <div class="col">
             <button class="btn btn-dark btn-rounded text-right" data-toggle="modal"
    data-target="#modalLoginForm">Novo Anúncio</button>
        </div>
    </div>
</div>
<div id="list" class="row">
    <div class="table-responsive col-md-12">
        <table class="table table-striped shadow-sm p-3 mb-5 rounded" cellspacing="0" cellpadding="0">
            <thead class="shadow">
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Título</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Data de Publicação</th>
                    <th scope="col">Validade</th>
                    <th scope="col">Tipo</th>
                    <th class="actions">Ações</th>
                </tr>
            </thead>
            <tbody class="mt-5">
                @if(isset($Anuncios))
                    @foreach ($Anuncios as $Anuncios)
                        <tr>
                            <td scope="row">
                            <form action="{{ url('/Painel/Anuncios', ['anuncio' => $Anuncios->ID]) }}" method="post">
                            <td>{{ $Anuncios->Titulo }}</td>
                            <td>{{ $Anuncios->Valor }}</td>
                            <td>{{ $Anuncios->Data }}</td>
                            <td>{{ $Anuncios->Validade }}</td>
                            <td>{{ $Anuncios->Tipo }}</td>
                            <td class="actions">
                                <!--<button class="btn btn-success">Visualizar</button>
                                <button class="btn btn-warning">Editar</button>-->
                                <button type="submit" class="btn btn-danger">Excluir</button>
                                @method('delete')
                                @csrf
                            </form>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>
@include('componentes.adicionarAnuncio')
@include('componentes.adicionarProduto')
@include('componentes.adicionarServico')
@endsection


@section('mensagem')
@if(session()->has('Retorno'))
    @component('componentes.alert')
        @slot('titulo',session()->get('Retorno')->Titulo)
        @slot('icone',session()->get('Retorno')->Tipo)
        @slot('mensagem')
            {{ session()->get('Retorno')->Mensagem }}
        @endslot
    @endcomponent
@endif
@endsection



@section('script')

@endsection
