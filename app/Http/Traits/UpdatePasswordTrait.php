<?php

namespace App\Http\Traits;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

trait UpdatePasswordTrait {
     
    public function ChangePassword(){
        
        request()->validate([
            'old_password' => ['required','current_password'] , 
            'new_password' => ['required','confirmed' , Rules\password::defaults()]
           ]);
           
           Auth::user()->update([
            'password' => Hash::make(request('new_password')) ,
           ]);
        
            toastr()->success('Password Updated Successfully');
    
            auth()->logout();
        
       
    }
}