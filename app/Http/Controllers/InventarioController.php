<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Precio;

class InventarioController extends Controller
{
    public function index() {

      
       
        $precio     = Precio::with('productos_relacion.categorias')->get();


        
        return view('inventario',compact('precio'));



    }
     public function desactiva(Request $request, $id){

    
   
      $product = Precio::find($id);

      $product->estatus = 'Inactivo';

      $product->update();

   return redirect()->route('inventario.index');
        
    }
     public function activa(Request $request, $id){

    
   
      $product = Precio::find($id);

      $product->estatus = 'Activo';

      $product->update();

   return redirect()->route('inventario.index');
        
    }
}
