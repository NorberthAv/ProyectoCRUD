@extends('layouts.app')

@section('title', 'Precios')


@section('content')

<div class="fondo container-fluid">


    <h1 class="titulo">Precios<h1>
<br>
        <div class="container">
            <div class="row">
<div class="col-md-4 col-xs-4 col-lg-4"></div>
                <div class="col-md-4 col-xs-4 col-lg-4 espacio-form">
                        <form method="POST" action="{{route('precio.store')}}">
                            @csrf
                        <h3>Agregar Precios</h3>
<br>
                          <label><b>Fecha:</b></label>                         
                        <input type="date" name="fecha" placeholder="Fecha" class="campo-form">
                        <br>
                                                 
                       <input type="numeric" name="monto" placeholder="Monto" class="campo-form">
                        <br>
                        <label><b>Productos:</b></label> 
                                <select class="campo-form" name="productos" placeholder="Productos">
                                    <option selected disabled>Productos</option>
                                    @foreach ($product as $row)  
                                    @if( $row->estatus == 'Activo') 
                                    <option value="{{$row->id}}">{{$row->nombre}}</option>
                                    @endif
                                    @endforeach 
                                </select>
                                               
                          <div class="row">
                                        <div class="col-md-6 col-lg-6 col-xs-6"> <button class="btn-form" type="submit"><b>Guardar</b></button></div>
                                       
                                        <div class="col-md-6 col-lg-6 col-xs-6"> <a type="button" href="{{ url()->current()}}" class="btn-form-neg"><b>Cancelar</b></a></div>
                                        
                                </div>

                        </form>

                </div>
<div class="col-md-4 col-xs-4 col-lg-4"></div>
             </div>   
        </div>
<br>

<div class="container">
        <div class="row enunciado">

                <div class="col-md-2 col-xs-2 col-lg-2">
                      <h3>Fecha</h3>  
                </div>
                   <div class="col-md-3 col-xs-3 col-lg-3">
                      <h3>Producto</h3>   
                </div>
                   <div class="col-md-3 col-xs-3 col-lg-3">
                      <h3>Monto</h3>   
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

              <div class="col-md-2 col-xs-12 col-lg-2">
                      <h3>{{$row->fecha}}</h3>  
                </div>
                   <div class="col-md-3 col-xs-12 col-lg-3">
                      <h3>{{$row->productos_relacion->nombre}}</h3>   
                </div>
                   <div class="col-md-3 col-xs-12 col-lg-3">
                      <h3>{{$row->monto}}</h3>   
                </div>
                <div class="col-md-2 col-xs-12 col-lg-2">
                      <h3>{{$row->estatus}}</h3>   
                </div>
               
                <div class="col-md-2 col-xs-12 col-lg-2">

                        <div class="row ">

                                <div class="col-xs-12 col-md-6 col-lg-6">
                                     @if( $row->estatus == 'Activo') 

                                        <form id="form-edit" method="POST" action="{{route('precio.edit',$row->id)}}">
                                        @csrf
                                        <input type="number" name="id" value="{{$row->id}} disabled" class="ocul">

                                    <button type="submit" value="{{$row->id}}" name="id" class="btn-form">Editar</button>    

                                        </form> 
                                        @endif 
                                </div>

                                <div class="col-xs-12 col-md-6 col-lg-6">

                                        <?php
                                        $estado = '{{$row->estatus}}';
                                        ?>


                         @if( $row->estatus == 'Activo') 
                                        <form id="form-edit" method="POST" action="{{route('precio.desactiva',$row->id)}}">
                                        @csrf
                                        @method('put')
                                        <button name="Desactivar" type="submit" value="{{$row->id}}" class="btn-form-neg">Desactivar</button>   
                                        </form>

                        @endif 
                         @if( $row->estatus == 'Inactivo') 
                                        <form id="form-edit" method="POST" action="{{route('precio.activa',$row->id)}}">
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
