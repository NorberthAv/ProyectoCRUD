@extends('layouts.app')

@section('title', 'Precios-edit')


@section('content')

<div class="fondo-edit container-fluid">


    <h1 class="titulo ocul">Precios- edit<h1>
<br>
        <div class="container">
            <div class="row">
<div class="col-md-4 col-xs-4 col-lg-4"></div>
                <div class="col-md-4 col-xs-4 col-lg-4 espacio-form">
                        <form method="POST" action="{{route('precio.update',$precio->id)}}">
                            @csrf
                            @method('put')
                        <h3>Agregar Precios</h3>
<br>    
                        <input type="number" name="id" value="{{$precio->id}}" disable class="ocul">
                          <label><b>Fecha:</b></label>                         
                        <input type="date" name="fecha" placeholder="Fecha" value="{{$precio->fecha}}" class="campo-form">
                        <br>
                                                 
                       <input type="numeric" name="monto" value="{{$precio->monto}}" class="campo-form">
                        <br>
                        <label><b>Productos:</b></label> 
                                <select class="campo-form" name="productos" placeholder="Productos">
                                    <option selected value="{{$precio->product_id}}">{{$precio->productos_relacion->nombre}}</option>
                                    @foreach ($product as $row)  
                                    @if( $row->estatus == 'Activo') 
                                    <option value="{{$row->id}}">{{$row->nombre}}</option>
                                    @endif
                                    @endforeach 
                                </select>
                                               
                          <div class="row">
                                        <div class="col-md-6 col-lg-6 col-xs-6"> <button class="btn-form" type="submit"><b>Guardar</b></button></div>
                                       
                                        <div class="col-md-6 col-lg-6 col-xs-6"> <a type="button" href="{{route('precio.index')}}" class="btn-form-neg"><b>Cancelar</b></a></div>
                                        
                                </div>

                        </form>

                </div>
<div class="col-md-4 col-xs-4 col-lg-4"></div>
             </div>   
        </div>

<br>

</div>

@endsection
