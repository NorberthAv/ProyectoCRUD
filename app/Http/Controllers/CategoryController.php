<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{
     public function index() {

         $category = Category::all();
        return view('category', compact('category'));

    }
    public function Dataclean(){

      $this->reset(['category']);

    }

    public function edit($id){


           
     $category = Category::find($id);
     return view('category-edit', compact('category'));
        
    }
    public function update(Request $request, $id){

    
   
      $category = Category::find($id);

      $category->nombre = $request->nombre;

      $category->update();

   return redirect()->route('category.index');
        
    }
    public function desactiva(Request $request, $id){

    
   
      $category = Category::find($id);

      $category->estatus = 'Inactivo';

      $category->update();

   return redirect()->route('category.index');
        
    }
     public function activa(Request $request, $id){

    
   
      $category = Category::find($id);

      $category->estatus = 'Activo';

      $category->update();

   return redirect()->route('category.index');
        
    }

    public function store(Request $request){

      $category = New Category();

      $category->nombre  = $request->category; 
      $category->estatus = 'Activo'; 



      $category->save();


   return redirect()->route('category.index');

          }

}
