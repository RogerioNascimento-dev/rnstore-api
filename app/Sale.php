<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable =  ['customer_id','sale_date','total_price','estimate_delivery'];


    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }

    public function products(){
        return $this->belongsToMany('App\Product');
    }

    public function productSale(){
        return $this->hasMany('App\ProductSale');
    }
}
