@extends('layouts.app')

@section('title', 'Inventario')


@section('content')

<div class="fondo container-fluid">

<br>
     
<br>
    <h1 class="titulo">Inventario<h1>
<br>
     
<br>

<div class="container tabla">
        <div class="row enunciado">

                <div class="col-md-2 col-xs-2 col-lg-2">
                      <h3>Categorias</h3>  
                </div>
                <div class="col-md-2 col-xs-2 col-lg-2">
                      <h3>Producto</h3>   
                </div>
                <div class="col-md-2 col-xs-2 col-lg-2">
                      <h3>Monto</h3>    
                </div>
                  <div class="col-md-2 col-xs-2 col-lg-2">
                      <h3>Fecha</h3>  
                </div>
                <div class="col-md-2 col-xs-2 col-lg-2">
                      <h3>Estatus</h3>   
                </div>
                <div class="col-md-2 col-xs-2 col-lg-2">
                      <h3>Acción</h3>    
                </div>
                
        </div>
         <div class="row contenido-tabla linea-2">
        @foreach ($precio as $row)  
                <div class="row container-fluid linea-1 centrar">
                       
                
                <div class="col-md-2 col-xs-2 col-lg-2">
                        
                        <h3>{{ $row->productos_relacion->categorias->nombre}}</h3>  
                </div>
                
                      
                <div class="col-md-2 col-xs-2 col-lg-2">
                      <h3>{{$row->productos_relacion->nombre}}</h3>   
                </div>
                <div class="col-md-2 col-xs-2 col-lg-2">
                      <h3>{{$row->monto}}</h3>    
                </div>
                  <div class="col-md-2 col-xs-2 col-lg-2">
                      <h3>{{$row->fecha}}</h3>  
                </div>
                <div class="col-md-2 col-xs-2 col-lg-2">
                      <h3>{{$row->estatus}}</h3>   
                </div>
                <div class="col-md-2 col-xs-2 col-lg-2">

                        <div class="row ">

                                <div class="col-xs-12 col-md-12 col-lg-12">
                        
                         @if( $row->estatus == 'Activo') 
                                        <form id="form-edit" method="POST" action="{{route('inventario.desactiva',$row->id)}}">
                                        @csrf
                                        @method('put')
                                        <button name="Desactivar" type="submit" value="{{$row->id}}" class="btn-form-neg">Desactivar</button>   
                                        </form>

                        @endif 
                         @if( $row->estatus == 'Inactivo') 
                                        <form id="form-edit" method="POST" action="{{route('inventario.activa',$row->id)}}">
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
@section('footer')

@endsection