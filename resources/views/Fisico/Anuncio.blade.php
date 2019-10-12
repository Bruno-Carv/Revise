@extends('template/fisico')

@section('titulo','Serviços e Produtos')

@section('style')

@endsection

@section('sistema_fisico')
<div class="row">
    <div class="col-12 inputPesquisa">
        <form action="">
            <div class="input-group">
                <input type="text" class="form-control" aria-label="Text input with dropdown button">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Filtros</button>
                    <div class="dropdown-menu">
                        <div class="form-group">
                            <div class="form-check">
                                <div class="dropdown-item">
                                    <input class="form-check-input" type="radio" name="tipo" id="tipo1" value="todos" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Todos
                                    </label>
                                </div>
                            </div>
                            <div class="form-check">
                                <div class="dropdown-item">
                                    <input class="form-check-input" type="radio" name="tipo" id="tipo2" value="servico">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Serviços
                                    </label>
                                </div>
                            </div>
                            <div class="form-check">
                                <div class="dropdown-item">
                                    <input class="form-check-input" type="radio" name="tipo" id="tipo3" value="produto">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Produtos
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <div class="form-group">
                            <div class="form-check">
                                <div class="dropdown-item">
                                    <input class="form-check-input" type="radio" name="preco" id="preco1" value="todos" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Todos
                                    </label>
                                </div>
                            </div>
                            <div class="form-check">
                                <div class="dropdown-item">
                                    <input class="form-check-input" type="radio" name="preco" id="preco2" value="menor">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Menores preços
                                    </label>
                                </div>
                            </div>
                            <div class="form-check">
                                <div class="dropdown-item">
                                    <input class="form-check-input" type="radio" name="preco" id="preco3" value="maior">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Maiores preços
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="input-group-append btn btn-dark">Pesquisar</button>
            </div>
        </form>
    </div>
</div>
<div class="row">

</div>
@endsection

@section('script')

@endsection
