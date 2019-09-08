@if (isset(Auth::user()->id))
     @php
          return back();
     @endphp
@else
     @yield('conteudo')
     include('alert')
@endif

