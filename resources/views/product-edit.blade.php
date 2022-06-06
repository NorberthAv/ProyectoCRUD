@extends('layouts.app')

@section('title', 'Productos-edit')


@section('content')

<div class="fondo-edit container-fluid">
<br><br><br>

    <h1 class="titulo">Productos<h1>
<br>
        <div class="container">
            <div class="row">
<div class="col-md-4 col-xs-4 col-lg-4"></div>
                <div class="col-md-4 col-xs-4 col-lg-4 espacio-form">
                        <form method="POST" action="{{route('product.update',$product->id)}}">
                            @method('put')
                            @csrf

                        <h3>Agregar Producto</h3>

                         <input type="number" name="id" value="{{$product->id}}" disable class="ocul">
<br>
                          <label><b>Nombre:</b></label>                         
                        <input type="text" name="nombre" placeholder="{{$product->nombre}}" class="campo-form">
                        <br>
                          <label><b>Descripción:</b></label>                         
                        <input type="text" name="descripcion" placeholder="{{$product->descripcion}}" class="campo-form">
                        <br>
                        <label><b>Su producto esta exento de iva:</b></label>   
                            <br> 
                            <div class="row">
<br> 
                                <div class="col-md-6 col-xs-6 col-lg-6" ><p>SI</p><input type="radio" name="exento" class="campo-form-ch" value="si"></div>
                                <div class="col-md-6 col-xs-6 col-lg-6" ><p>NO</p><input type="radio" name="exento" class="campo-form-ch" value="no"></div>
                            </div>                     
                        
                        
                        <br>
                          <label><b>Categorias:</b></label> 
                                <select class="campo-form" name="categorias" placeholder="Categorias">
                                    <option selected disabled>Categorias</option>
                                    @foreach ($category as $row)  
                                    @if( $row->estatus == 'Activo') 
                                    <option value="{{$row->id}}">{{$row->nombre}}</option>
                                    @endif
                                    @endforeach 
                                </select>
                        

                        <br>
                        <br>
                                <div class="row">
                                        <div class="col-md-6 col-lg-6 col-xs-6"> <button class="btn-form"><b>Guardar</b></button></div>
                                       
                                        <div class="col-md-6 col-lg-6 col-xs-6"> <a type="button" href="{{route('product.index')}}" class="btn-form-neg"><b>Cancelar</b></a></div>
                                        
                                </div>

                        </form>

                </div>
<div class="col-md-4 col-xs-4 col-lg-4"></div>
             </div>   
        </div>
<br>


<br>
<br>

</div>

@endsection
