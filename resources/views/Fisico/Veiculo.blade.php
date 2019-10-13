@extends('template/fisico')

@section('titulo','Veículos')

@section('menu_veiculos','active')



@section('style')
<style>

:root {
  --gutter: 20px;
}

.app {
  padding: var(--gutter) 0;
  display: grid;
  grid-gap: var(--gutter) 0;
  grid-template-columns: var(--gutter) 1fr var(--gutter);
  align-content: start;
}

.app > * {
  grid-column: 2 / -2;
}

.app > .full {
  grid-column: 1 / -1;
}

.hs {
  display: grid;
  grid-gap: calc(var(--gutter) / 2);
  grid-template-columns: repeat(6, calc(50% - var(--gutter) * 2));
  grid-template-rows: minmax(150px, 1fr);

  overflow-x: scroll;
  scroll-snap-type: x proximity;
  padding-bottom: calc(.75 * var(--gutter));
  margin-bottom: calc(-.25 * var(--gutter));
}

ul {
  list-style: none;
  padding: 0;
}

h1,
h2,
h3 {
  margin: 0;
}

.app {
  width: 375px;
  height: 667px;
  background: #DBD0BC;
  overflow-y: scroll;
}

.hs > li,
.item {
  scroll-snap-align: center;
  padding: calc(var(--gutter) / 2 * 1.5);
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  background: #fff;
  border-radius: 8px;
}


</style>
@endsection




@section('sistema_fisico')
<div class="row">
    <div class="app">
        <ul class="hs">
            @foreach ($Veiculos as $Veiculo)
                <li>
                    <div class="card">
                        {{ $Veiculo->placa }} / {{ $Veiculo->modelo }}
                    </div>
                </li>
            @endforeach
        </ul>
  </div>
</div>
@endsection




@section('script')

@endsection
