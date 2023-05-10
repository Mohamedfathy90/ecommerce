<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\traits\ImageTrait;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;
use Illuminate\Validation\Rules\Unique;

class VendorController extends Controller
{
    
    use ImageTrait;
    
    public function index(){
        return view ('vendor.dashboard');
    }
    public function create(){
        return view ('vendor.login');
    }
    
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended('vendor/dashboard');
    }

    public function ViewvendorProfile() {
        return view ('vendor.vendorprofile');
    }
    
    public function UpdatevendorProfile(){
        
        request()->validate([
            'name'     =>  ['required','min:5','max:15','string'] ,
            'email'    =>  ['required' , 'email' , Rule::unique('users','email')->ignore(auth()->user())],
            'address'  =>  ['string'] ,
            'image'    =>  ['image']
        ]);
       
        $image = $this->Saveimage('/profile_images/');
              
        User::where('id',Auth::id())->update([
            'name'     => request('name') ,
            'email'    => request('email') ,
            'address'  => request('address') ,
            'image'    => $image ,
        ]);

        toastr()->success('Profile Updated Successfully');
        return back();
    }

    public function ViewPassword(){
        return view ('vendor.updatepassword');
    }

    public function UpdatePassword(){
       request()->validate([
        'old_password' => ['required','current_password'] , 
        'new_password' => ['required','confirmed' , Rules\password::defaults()]
       ]);
       
       Auth::user()->update([
        'password' => Hash::make(request('new_password')) ,
       ]);
    
    toastr()->success('Password Updated Successfully');

    auth()->logout();

    return redirect ("/vendor/login");
    
    
    }

}
