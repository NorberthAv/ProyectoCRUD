@extends('layouts.app')

@section('title', 'Login')


@section('content')

<div class="fondo container-fluid">
<br>
<br>
	<h1 class="titulo">Login<h1>
	<br>
<br>
<div container>
		<div class="main row">

				<div class="col-md-4 col-xs-4 col-lg-4"></div>
		<div class="ingreso col-md-4 col-xs-4 col-lg-4">
				<br>
				<h1>Log In</h1>
				<br>
				<form class="formulario" method="POST" action="">
	@csrf				
				<input type="email" name="email" placeholder="Email" class=campo-form id=email>
				<br>
				<input type="password" name="password" placeholder="Contraseña" class=campo-form id=password>
				<br>
				@error('message')
				<p class="error-msg">{{ $message}}</p>
				@enderror
				<button type="submit" class="button-form">Enviar</button>
				</form>

		</div>
				<div class="col-md-4 col-xs-4 col-lg-4"></div>
		</div>	
</div>
<br>

</div>

@endsection