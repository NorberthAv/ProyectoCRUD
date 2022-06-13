@extends('layouts.app')

@section('title', 'Productos')


@section('content')

<div class="fondo container-fluid">
<br>

    <h1 class="titulo ocul">Productos <h1>
<br>
        <div class="container">
            <div class="row">
<div class="col-md-4 col-xs-4 col-lg-4"></div>
                <div class="col-md-4 col-xs-4 col-lg-4 espacio-form">
                        <form method="POST" action="{{route('product.store')}}">
                            @csrf
                            
                        <h3>Agregar Producto</h3>
<br>
                          <label><b>Nombre:</b></label>                         
                        <input type="text" name="name" placeholder="Nombre" class="campo-form">
                        <br>
                          <label><b>Descripción:</b></label>                         
                        <input type="text" name="descripcion" placeholder="Descripción" class="campo-form">
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
                      <h3>Nombre</h3>  
                </div>
                   <div class="col-md-3 col-xs-3 col-lg-3">
                      <h3>Descripción</h3>   
                </div>
                   <div class="col-md-3 col-xs-3 col-lg-3">
                      <h3>Categoria</h3>   
                </div>
                
                <div class="col-md-2 col-xs-2 col-lg-2">
                      <h3>Estatus</h3>   
                </div>
                <div class="col-md-2 col-xs-2 col-lg-2">
                      <h3>Acción</h3>    
                </div>
                
        </div>


         <div class="row contenido-tabla linea-2">


                @foreach ($product as $row)  

        <div class="row container-fluid linea-1 centrar">

              <div class="col-md-2 col-xs-12 col-lg-2">
                      <h3>{{$row->nombre}}</h3>  
                </div>
                   <div class="col-md-3 col-xs-12 col-lg-3">
                      <h3>{{$row->descripcion}}</h3>   
                </div>
                   <div class="col-md-3 col-xs-12 col-lg-3">
                      <h3>{{$row->categorias->nombre}}</h3>   
                </div>
                <div class="col-md-2 col-xs-12 col-lg-2">
                      <h3>{{$row->estatus}}</h3>   
                </div>
               
                <div class="col-md-2 col-xs-12 col-lg-2">

                        <div class="row ">

                                <div class="col-xs-12 col-md-6 col-lg-6">
                                     @if( $row->estatus == 'Activo') 
                                        <form id="form-edit" method="POST" action="{{route('product.edit',$row->id)}}">
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
                                        <form id="form-edit" method="POST" action="{{route('product.desactiva',$row->id)}}">
                                        @csrf
                                        @method('put')
                                        <button name="Desactivar" type="submit" value="{{$row->id}}" class="btn-form-neg">Desactivar</button>   
                                        </form>

                        @endif 
                         @if( $row->estatus == 'Inactivo') 
                                        <form id="form-edit" method="POST" action="{{route('product.activa',$row->id)}}">
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
<script type="text/javascript">
        
        function cambiar(){

        if($(".linea-3").hasClass('pag')){
            $(".linea-3").removeClass('pag').addClass('ocul');

        }else if($(".linea-3").hasClass('ocul')){
            $(".linea-3").removeClass('ocul').addClass('pag');
        }
          
        

    };
           

    </script>

</div>

@endsection
