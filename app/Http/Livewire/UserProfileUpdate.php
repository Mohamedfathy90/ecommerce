<?php

namespace App\Http\Livewire;


use App\Http\Traits\ImageTrait;
use Illuminate\Support\Facades\Hash;
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
    public $newpassword ;
    public $newpassword_confirmation ;
    public $password ;
    
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
       
        
        if ($this->old_password != null){
            $rules['old_password'] =  ['current_password'];     
            $rules['newpassword'] =   ['confirmed', Rules\password::defaults()];
        }
        
      $this->validate($rules);
 
        auth()->user()->fill([
            'name'     => $this->name ,
            'email'    => $this->email ,
        ]);

        if ($this->old_password != null){
        auth()->user()->update([
        'password' => Hash::make($this->newpassword) ,
        ]);
        }

        if (auth()->user()->isdirty('email')) {
            auth()->user()->email_verified_at = null;
        }

        auth()->user()->save();
        
        toastr()->success('Profile Updated Successfully');

        return redirect ('/dashboard');
    }
}
