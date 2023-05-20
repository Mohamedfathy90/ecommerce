<?php

namespace App\Http\Traits;

use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

trait ImageTrait {
    
    public function Saveimage($path){
    $image_name = 'img_'.time().".".request('image')->getclientoriginalextension();
    $image_url = "/storage".$path.$image_name;
    
    if($path === "/Brands_images/")
    Image::make(request()->file('image'))->resize(300,300)->save(storage_path('/app/public').$path.$image_name);
    else
    request()->file('image')->storeAs( $path , $image_name);
    
    return $image_url ;
    }


}




?>