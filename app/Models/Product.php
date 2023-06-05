<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    use \Conner\Tagging\Taggable;
    protected $guarded =[];

    
    public function brand(){
        return $this->belongsTo(Brand::class,'brand_id') ;
    }
    
    public function seller(){
        return $this->belongsTo(User::class,'user_id') ;
    }

    public function productitems(){
        return $this->hasMany(ProductItem::class) ;
    }

}
