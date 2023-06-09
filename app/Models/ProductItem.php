<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductItem extends Model
{
    use HasFactory;
    protected $guarded =[];
    
    public function product(){
        return $this->belongsTo(Product::class) ;
    }
    public function productitemsize(){
        return $this->belongsTo(ProductSize::class , 'size_id') ;
    }
    public function productitemcolor(){
        return $this->belongsTo(ProductColor::class , 'color_id') ;
    }
}
