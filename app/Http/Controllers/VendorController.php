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

class VendorController extends Controller
{
    
    use ImageTrait;
    use UpdatePasswordTrait;
    
    public function index(){
        return view ('vendor.vendordashboard');
    }
    
    public function create(){
        return view ('vendor.vendorlogin');
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
        $credentials = request()->validate([
            'name'         =>  ['required','min:5','max:15','string'] ,
            'email'        =>  ['required' , 'email' , Rule::unique('users','email')->ignore(auth()->user())],
            'address'      =>  ['string'] ,
            'vendor_info'  =>  ['min:0' , 'max:1000'] ,
            'image'        =>  ['image']
        ]);
           
        $credentials['image'] = $this->Saveimage('/profile_images/');
              
        Auth::user()->update($credentials);

        toastr()->success('Profile Updated Successfully');
        return back();
    }

    public function ViewPassword(){
        return view ('vendor.vendorupdatepassword');
    }

    public function UpdatePassword(){
    
    $this->ChangePassword();
    
    return redirect ('/vendor/login');

    }

}
