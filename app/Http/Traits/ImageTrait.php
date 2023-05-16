<?php

namespace App\Http\Traits;

use Illuminate\Support\Facades\Auth;

trait ImageTrait {
    
    
    public function Saveimage($path){
        
        if(request()->has('image')){
            $image_name = 'img_'.time().".".request('image')->getclientoriginalextension();
            request()->file('image')->storeAs( $path , $image_name);
            $image_url = "/storage".$path.$image_name;
            return $image_url ;
        }

        else{
            if(Auth::check())
            return auth()->user()->image ;
            else
            return "/storage/profile_images/nophoto.jpg";
        }
        
       



    }


}




?>