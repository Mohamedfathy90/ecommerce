<?php

namespace App\Http\Livewire;


use App\Http\Traits\ImageTrait;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;
use Livewire\Component;

class UserProfileUpdate extends Component
{
    
    use ImageTrait;
    
    public $name ;
    public $email ;
    public $address ;
    public $image ;
    public $old_password ;
    public $new_password ;
    
    
    
    public function mount()
    {
        $this->name = auth()->user()->name ;
        $this->email = auth()->user()->email ;
    }
    
    
    public function render()
    {
        return view('livewire.user-profile-update');
    }
    
    public function update()
    {
            
        $rules['name']     = ['required','min:5','max:15','string'] ;
        $rules['email']    = ['required' , 'email' , Rule::unique('users','email')->ignore(auth()->user())] ;
        $rules['address']  = ['string'] ;
        
        if ($this->old_password){
            $rules['old_password'] =  ['current_password'];     
            $rules['new_password'] =  ['confirmed', Rules\password::defaults()];     
        }
        
        $credentials = $this->validate($rules);
        
        
        if (auth()->user()->isDirty('email')) {
            auth()->user()->email_verified_at = null;
        }

        
        auth()->user()->update($credentials);
        
        toastr()->success('Profile Updated Successfully');

        return redirect ('/dashboard');
    }
}
