<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [ 
        'car_name', 
        'brand', 
        'model', 
        'image', 
        'price', 
        'location', 
        'status', 
        ];
}
