@extends('layouts.app')

@section('title', 'Register')


@section('content')
<div class="fondo container-fluid">
<br>
<br>

	<h1 class="titulo">Registro a mi app<h1>
<br>

		<div container>
		<div class="main row">

				<div class="col-md-4 col-xs-4 col-lg-4"></div>
		<div class="ingreso col-md-4 col-xs-4 col-lg-4">
				<br>
				<h1>Registro</h1>
				<br>
				<form class="formulario" method="POST" action="{{route('register.store')}}">
			@csrf
				<input type="text" name="name" placeholder="Usuario" class=campo-form id=name>
				<br>
				@error('name')
				<p class="error-msg">*{{ $message}}</p>
				@enderror
				<input type="email" name="email" placeholder="Email" class=campo-form id=email>
				<br>	
				@error('email')
				<p class="error-msg">*{{ $message}}</p>
				@enderror
				<input type="password" name="password" placeholder="Contraseña" class=campo-form id=password>
				@error('password')
				<p class="error-msg">*{{ $message}}</p>
				@enderror
				<br>
				<input type="password" name="password_confirmation" placeholder="Confirmar Contraseña" class=campo-form id="password_confirmation">
				<br>
				<button type="submit" class="button-form">Enviar</button>
				</form>

		</div>
				<div class="col-md-4 col-xs-4 col-lg-4"></div>
		</div>	
</div>
<br>
<br>
</div>
@endsection