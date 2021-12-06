<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orders_detail extends Model
{
    use HasFactory;
    protected $table = 'orders_detail';
    protected $fillable = ['articulo' , 'cantidad','precio','total'];
 
}
