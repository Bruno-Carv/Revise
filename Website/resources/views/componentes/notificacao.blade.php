<div class="bg-ligth card shadow" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
        <img src="{{ asset('img/logo.png')}}" width="20" height="20" class="rounded mr-2" alt="...">
        <strong class="mr-auto">{{ $Nome }} ({{$Placa}})</strong>
        <small class="text-muted">{{ $Data }}</small>
    </div>
    <div class="toast-body bg-ligth">
        Opa! Chegou a hora da verificar o {{ $Nome }}<br><br>
        Que tal já realizar suas pesquisas?<br>
        <div class="row mt-3">
            <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                <a href="{{ route('pesquisa') }}?pesquisa={{ urlencode($Nome) }}&tipo=&preco=">
                    <button class="btn btn-success mt-3">Pesquisar</button>
                </a>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg col-xl">
                <form action="{{ route('deletarNotificacao') }}" method="POST">
                    <input type="hidden" name="placa" value="{{ $Placa }}">
                    <button class="btn btn-dark mt-3" name="Id" value="{{ $Id }}">Problema resolvido</button>
                    @csrf
                    @method('delete')
                </form>
            </div>
            <div class="col-0 col-sm-0 col-md-0 col-lg-4 col-xl-4"></div>
        </div>
    </div>
</div>
