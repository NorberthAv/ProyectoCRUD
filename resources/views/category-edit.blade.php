@extends('layouts.app')

@section('title', 'Categoria')


@section('content')

<div class="fondo-edit container-fluid">


    <h1 class="titulo">Categorias<h1>
<br>
        <div class="container">
            <div class="row">
<div class="col-md-4 col-xs-4 col-lg-4"></div>
                <div class="col-md-4 col-xs-4 col-lg-4 espacio-form">

        
                        <form id="formulario" method="POST" action="{{route('categorie.update',$category->id)}}">
                        @csrf
                        @method('put')
                        <h3>Agregar Categoria </h3>

                         <input type="number" name="id" value="{{$category->id}}" disable class="ocul">

                        <label><b>Nombre:</b></label>                         
                        <input type="text" name="nombre" class="campo-form" value="{{$category->nombre}}">
                                <div class="row">
                                 <div class="col-md-6 col-lg-6 col-xs-12"> <button class="btn-form" type="submit"><b>Modificar</b></button></div>
                                 <div class="col-md-6 col-lg-6 col-xs-12"> <a href="{{route('category.index')}}"><button class="btn-form-neg" type="button"><b>Cancelar</b></button></a></div>
                     

                                        
                                        
                                </div>

                           </form> 
          
                </div>
<div class="col-md-4 col-xs-4 col-lg-4"></div>
             </div>   
        </div>
<br>


        


</div>

@endsection