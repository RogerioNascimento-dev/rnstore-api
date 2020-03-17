<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductSale extends Model
{   protected $table = 'product_sale';
    protected $fillable = ['sale_id','product_id' ,'quantity' ,'unit_price'];

}
