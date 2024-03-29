@extends('plantilla\plantilla')

@section('titulo')
	Ingreso
@endsection

@section('contenido')
	<form method="POST" action="{{route('ingresar')}}">
		@csrf
		<div class="mb-3">
		    <label for="emailInput" class="form-label">Email</label>
		    <input type="email" class="form-control" id="emailInput" name="email" required>
		</div>
		<div class="mb-3">
		    <label for="passwordInput" class="form-label">Password</label>
		    <input type="password" class="form-control" id="passwordInput" name="password" required>
		</div>
		<div class="mb-3 form-check">
		    <input type="checkbox" class="form-check-input" id="rememberCheck" name="remember">
		    <label class="form-check-label" for="rememberCheck">Mantener sesión iniciada</label>
		</div>
		<button type="submit" class="btn btn-primary">Acceder</button>
	</form>
@endsection

@section('footer')
	<p>¿No tienes cuenta? <a href="{{route('registro')}}">Regístrate</a></p>
@endsection
