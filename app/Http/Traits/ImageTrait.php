<?php

namespace App\Http\Traits;

use Illuminate\Support\Facades\Auth;

trait ImageTrait {
    
    
    public function Saveimage($path){
        
    $image_name = 'img_'.time().".".request('image')->getclientoriginalextension();
    request()->file('image')->storeAs( $path , $image_name);
    $image_url = "/storage".$path.$image_name;
    return $image_url ;
    }


}




?>