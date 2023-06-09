<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductColor extends Model
{
    use HasFactory;
    protected $guarded =[];
    
    public function products(){
        return $this->belongsToMany(Product::class,'product_items') ;
    }
    public function productitem(){
        return $this->hasMany(ProductItem::class,'color_id') ;
    }
}
