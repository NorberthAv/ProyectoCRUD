<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Precio extends Model
{
    use HasFactory;


      protected $fillable = [

        'monto',
        'fecha',
        'product_id',
        'estatus'

    ];
     public function productos_relacion(){

        return $this->belongsTo(Product::class,'product_id','id');
    }
}
