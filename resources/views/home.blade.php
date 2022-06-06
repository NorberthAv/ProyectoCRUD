@extends('layouts.app')

@section('title', 'Home')


@section('content')

<div class="fondo container-fluid">
<br>
<br>
	<h1 class="titulo">Welcome a mi app<h1>
<br>
<br>
<div class="container-fluid">

	<div class="main row">

   			<div class="col-xs-12 col-md-3 col-lg-3 ">
   			<a href="{{route('category.index')}}">	<div class="container panel-p"> 
   					<h2>CATEGORIAS</h2>
   				</div>
   			</a>	
            </div>
            <div class="col-xs-12 col-md-3 col-lg-3 ">
            <a href="{{route('product.index')}}">	
              	<div class="container panel-p">
              		<h2>PRODUCTOS</h2>
              	</div>
             </a>
            </div>
            <div class="col-xs-12 col-md-3 col-lg-3 ">
            	  <a href="{{route('precio.index')}}">	
              <div class="container panel-p">
              		<h2>PRECIOS</h2>
              </div>
              	</a>
            </div>
            <div class="col-xs-12 col-md-3 col-lg-3 ">
            	  <a href="{{route('inventario.index')}}">	
            	<div class="container panel-p">
            		<h2>INVENTARIO</h2>
            	</div>
            </a>
            </div>

</div>
<br>
<br>


</div>

	

@endsection