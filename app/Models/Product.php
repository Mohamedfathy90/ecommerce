<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    use \Conner\Tagging\Taggable;
    protected $guarded =[];

    public function productsizes(){
        return $this->belongsToMany(ProductSize::class,'product_productsize') ;
    }
    
    public function productcolors(){
        return $this->belongsToMany(ProductColor::class,'product_productcolor') ;
    }


}
