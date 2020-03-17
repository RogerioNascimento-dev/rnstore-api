<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'description', 'price','estimate_delivery'
    ];

    public function sales(){
        return $this->belongsToMany('App\Sales');
    }
}
