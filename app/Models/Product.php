<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Product extends Model
{
    public $fillable =["vendor_id","product_name","product_price","category_id","product_stock","product_description","product_image"];

    function category(){
        return $this->belongsTo(Category::class,'category_id');
    }
    protected $primaryKey = 'p_id';
}
