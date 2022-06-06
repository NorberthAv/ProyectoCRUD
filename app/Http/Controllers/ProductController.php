<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
       public function index() {

         $category = Category::all();
         $product = Product::with('categorias')->get();

       
        return view('product', compact('category'),compact('product'));


    }
    public function Dataclean(){

      $this->reset(['category']);

    }

    public function edit($id){

     $category = Category::all();
     $product = Product::find($id);     
     

     return view('product-edit', compact('category'),compact('product'));
        
    }
    public function update(Request $request, $id){

    
   
      $product = Product::find($id);

      $product->nombre          = $request->nombre;
      $product->descripcion     = $request->descripcion;
      $product->exento          = $request->exento; 
      $product->categories_id   = $request->categorias; 

      $product->update();

   return redirect()->route('product.index');
        
    }
    public function desactiva(Request $request, $id){

    
   
      $product = Product::find($id);

      $product->estatus = 'Inactivo';

      $product->update();

   return redirect()->route('product.index');
        
    }
     public function activa(Request $request, $id){

    
   
      $product = Product::find($id);

      $product->estatus = 'Activo';

      $product->update();

   return redirect()->route('product.index');
        
    }

    public function store(Request $request){

      $product = New Product();

      $product->nombre          = $request->name; 
      $product->descripcion     = $request->descripcion; 
      $product->exento          = $request->exento; 
      $product->categories_id   = $request->categorias; 
      $product->estatus         = 'Activo'; 


      $product->save();
      

   return redirect()->route('product.index');

          }


}
