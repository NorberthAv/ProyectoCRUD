<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

      protected $fillable = [

        'nombre',
        'descriptcion',
        'exento',
        'categories_id',
        'estatus'

    ];

   public function categorias(){

        return $this->belongsTo(Category::class,'categories_id','id');
    }
}
