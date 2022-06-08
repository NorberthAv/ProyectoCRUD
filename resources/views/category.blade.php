@extends('layouts.app')

@section('title', 'Categoria')


@section('content')

<div class="fondo container-fluid">


    <h1 class="titulo ocul">Categoria<h1>
<br>
        <div class="container">
            <div class="row">
<div class="col-md-4 col-xs-4 col-lg-4"></div>
                <div class="col-md-4 col-xs-4 col-lg-4 espacio-form">
                        <form id="formulario" method="POST" action="{{route('categorie.store')}}">
                        @csrf
                        <h3>Agregar Categoria </h3>

                        <label><b>Nombre:</b></label>                         
                        <input type="text" name="category" placeholder="categoria" class="campo-form">
                                <div class="row">
                                 <div class="col-md-6 col-lg-6 col-xs-12"> <button class="btn-form" type="submit"><b>Guardar</b></button></div>
                                 <div class="col-md-6 col-lg-6 col-xs-12"> <a href="{{ url()->current()}}" class="btn-form-neg" type="button"> <b>Cancelar</b></a></div>
                        </form> 

                                        
                                        
                                </div>

                        

                </div>
<div class="col-md-4 col-xs-4 col-lg-4"></div>
             </div>   
        </div>
<br>

<div class="container">
        <div class="row enunciado">

                <div class="col-md-4 col-xs-4 col-lg-4">
                      <h3>Nombre</h3>  
                </div>
                <div class="col-md-4 col-xs-4 col-lg-4">
                      <h3>Estatus</h3>   
                </div>
                <div class="col-md-4 col-xs-4 col-lg-4">
                      <h3>Acción</h3>    
                </div>
                
         </div>

         <div class="row contenido-tabla linea-2">

                @foreach ($category as $row)  

        <div class="row container-fluid linea-1 centrar">
                <div class="col-md-4 col-xs-4 col-lg-4">
                        <h3>  {{$row->nombre}}</h3>  
                </div>
                <div class="col-md-4 col-xs-4 col-lg-4">
                      <h3> {{$row->estatus}}</h3>   
                </div>
                <div class="col-md-4 col-xs-4 col-lg-4">

                        <div class="row ">

                                <div class="col-xs-12 col-md-6 col-lg-6">
                                @if( $row->estatus == 'Activo') 
                                        <form id="form-edit" method="POST" action="{{route('categorie.edit',$row->id)}}">
                                        @csrf
                                        <input type="number" name="id" value="{{$row->id}} disable" class="ocul">

                                    <button type="submit" value="{{$row->id}}" name="id" class="btn-form">Editar</button>    

                                        </form> 
                                @endif
                                </div>

                                <div class="col-xs-12 col-md-6 col-lg-6">

                                        <?php
                                        $estado = '{{$row->estatus}}';
                                        ?>


                         @if( $row->estatus == 'Activo') 
                                        <form id="form-edit" method="POST" action="{{route('categorie.desactiva',$row->id)}}">
                                        @csrf
                                        @method('put')
                                        <button name="Desactivar" type="submit" value="{{$row->id}}" class="btn-form-neg">Desactivar</button>   
                                        </form>

                        @endif 
                         @if( $row->estatus == 'Inactivo') 
                                        <form id="form-edit" method="POST" action="{{route('categorie.activa',$row->id)}}">
                                        @csrf
                                        @method('put')                           
                                        <button name="Activar" type="submit" value="{{$row->id}}" class="btn-form">Activar</button>  
                                        </form>                             
                            
                                
                                 
                         @endif  
                                </div>
                                 
                        </div>
                    </div>
                </div>
      @endforeach         
        </div>
              
        
</div>
<br>
<br>

</div>

@endsection