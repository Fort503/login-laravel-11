@extends('plantilla\plantilla')

@section('titulo')
	perfil
@endsection

@section('contenido')
    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <a class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                has iniciado sesion como: @auth {{Auth::user()->name}} @endauth
            </a>
            <div class="col-md-3 text-end">
                @auth
                <form method="POST" action="{{ route('cerrarSesion') }}">
                  @csrf  <a href="{{route('cerrarSesion')}}"><button type="submit" class="btn btn-outline-primary me-2">Salir</button></a>
                </form>
              @endauth
        </header>
    </div>
    <article class="container">
        <h2>Nada que ver por aqui</h2>
    </article>
@endsection

@section('footer')
	
@endsection
