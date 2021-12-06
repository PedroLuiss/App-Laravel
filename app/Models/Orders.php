<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
     protected $table = 'orders';
    protected $fillable = ['number_orden' , 'fecha','monto', 'estado', 'id_detalle', 'id_usuario'];
    //public function Orders(){
     //   return $this->belongsTo('App\Models\Orders');
   // }
}
