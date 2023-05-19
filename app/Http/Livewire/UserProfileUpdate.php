<?php

namespace App\Http\Livewire;

use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;
use Livewire\Component;
use Livewire\WithFileUploads;

class UserProfileUpdate extends Component
{
    
    use WithFileUploads;
    
    public $name ;
    public $email ;
    public $address ;
    public $image ;
    public $image_url;
    
    
    public function mount()
    {
        $this->name = auth()->user()->name ;
        $this->email = auth()->user()->email ;
        $this->address = auth()->user()->address ;
    }
    
    
    public function render()
    {
        return view('livewire.user-profile-update');
    }
    
    public function update()
    {
            
        $rules['name']     = ['required','min:5','max:15','string'] ;
        $rules['email']    = ['required' , 'email' , Rule::unique('users','email')->ignore(auth()->user())] ;
        $rules['address']  = ['string'];
         
        if($this->image!=null){
        $rules['image'] = ['image'] ;
        $image_name = 'img_'.time().".".$this->image->getclientoriginalextension();
        $this->image->storeAs( "profile_images" , $image_name);
        $this->image_url = "/storage/profile_images/".$image_name;
        }
   
        $this->validate($rules);

        auth()->user()->fill([
            'name'     => $this->name ,
            'email'    => $this->email ,
            'address'    => $this->address ,
        ]);

        if($this->image!=null)
        auth()->user()->fill(['image' => $this->image_url ]);
        
       
        if (auth()->user()->isdirty('email')) {
            auth()->user()->email_verified_at = null;
        }

        auth()->user()->save();
        
        toastr()->success('Profile Updated Successfully');

        return redirect ('/dashboard');
    }
}
