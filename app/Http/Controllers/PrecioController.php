<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Precio;

class PrecioController extends Controller
{
       public function index() {

         $product = Product::all();
         $precio = Precio::with('productos_relacion')->get();

        return view('precio', compact('product'),compact('precio'));


    }
  
    public function edit($id){

    
     $product = Product::all();
     $precio = Precio::with('productos_relacion')->get();
     $precio  = Precio::find($id);     
     
   
     return view('precio-edit', compact('product'),compact('precio'));
        
    }
    public function update(Request $request, $id){

    
   
      $precio = Precio::find($id);

      $precio->monto           = $request->monto;
      $precio->product_id      = $request->productos; 
      $precio->fecha           = $request->fecha; 
      

      $precio->update();

   return redirect()->route('precio.index');
        
    }
    public function desactiva(Request $request, $id){

    
   
      $product = Precio::find($id);

      $product->estatus = 'Inactivo';

      $product->update();

   return redirect()->route('precio.index');
        
    }
     public function activa(Request $request, $id){

    
   
      $product = Precio::find($id);

      $product->estatus = 'Activo';

      $product->update();

   return redirect()->route('precio.index');
        
    }

    public function store(Request $request){

      $precio = New Precio();

      
      $precio->monto           = $request->monto;
      $precio->product_id      = $request->productos; 
      $precio->fecha           = $request->fecha; 
      
      $precio->estatus         = 'Activo'; 


      $precio->save();
      

   return redirect()->route('precio.index');

          }
}
