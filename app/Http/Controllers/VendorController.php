<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\traits\ImageTrait;
use App\Http\Traits\UpdatePasswordTrait;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;
use Illuminate\Validation\Rules\Unique;
use Yoeunes\Toastr\Facades\Toastr;
use Illuminate\Support\Arr;

class VendorController extends Controller
{
    
    use ImageTrait;
    use UpdatePasswordTrait;
    
    public function index(){
        return view ('vendor.vendordashboard');
    }
    
    public function create(){
        return view ('vendor.vendorregister');
    }

    
    public function store(){
        $credentials = request()->validate([
            'name'     => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255' , "unique:users,username"],
            'email'    => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'phone'    => ['required'],
            'checkbox' => ['accepted']
        ] , ['checkbox' => 'please agree our terms']);
        
        $credentials['role']     = 'vendor' ; 
        $credentials['password'] = Hash::make(request('password')); 
        User::create(Arr::except($credentials, ['checkbox']));
        Toastr()->success("Vendor Created Successfully !!");
        return redirect('/vendor/login');
    }
    
    
    public function loginpage(){
        return view ('vendor.vendorlogin');
    }
    
    public function loginrequest(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended('vendor/dashboard');
    }

    
    public function ViewvendorProfile() {
        return view ('vendor.vendorprofile');
    }
    
    public function UpdatevendorProfile(){
        
        $credentials = request()->validate([
            'name'         =>  ['required','min:5','max:15','string'] ,
            'email'        =>  ['required' , 'email' , Rule::unique('users','email')->ignore(auth()->user())],
            'address'      =>  ['string'] ,
            'vendor_info'  =>  ['min:0' , 'max:1000'] ,
            'image'        =>  ['image']
        ]);
           
        if(request()->has('image'))
        $credentials['image'] = $this->Saveimage('/profile_images/');
              
        Auth::user()->update($credentials);

        toastr()->success('Profile Updated Successfully');
        return back();
    }

    public function ViewPassword(){
        return view ('vendor.vendorupdatepassword');
    }


}
