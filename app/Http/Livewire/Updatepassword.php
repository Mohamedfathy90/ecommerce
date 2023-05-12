<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Http\Traits\UpdatePasswordTrait;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class Updatepassword extends component
{
    public $old_password ;
    public $new_password ;
    public $new_password_confirmation ;
    public $role ;
    
    public function render()
    {
        return view('livewire.updatepassword');
    }

    public function save(){
        
        $this->validate([
            'old_password' => ['required','current_password'] , 
            'new_password' => ['required','confirmed' , Rules\password::defaults()]
           ]);
           
           $this->role = auth()->user()->role ;
           
           Auth::user()->update([
            'password' => Hash::make($this->new_password) ,
           ]);
        
            toastr()->success('Password Updated Successfully');
    
            auth()->logout();

            return redirect ('/'.$this->role.'/login');
    }

}