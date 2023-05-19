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

class AdminController extends Controller
{
    
    use ImageTrait;
    use UpdatePasswordTrait;
    
    public function index(){
        return view ('admin.admindashboard');
    }
    public function create(){
        return view ('admin.adminlogin');
    }
    
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended('admin/dashboard');
    }

    public function ViewAdminProfile() {
        return view ('admin.adminprofile');
    }
    
    public function UpdateAdminProfile(){
        
        $credentials = request()->validate([
            'name'     =>  ['required','min:5','max:15','string'] ,
            'email'    =>  ['required' , 'email' , Rule::unique('users','email')->ignore(auth()->user())],
            'address'  =>  ['string'] ,
            'image'    =>  ['image']
        ]);
       
        if(request()->has('image')){
        $credentials['image'] = $this->Saveimage('/profile_images/');
        }
    
        auth()->user()->update($credentials) ;
        
        toastr()->success('Profile Updated Successfully');

        return back();
    }

    public function ViewPassword(){
        return view ('admin.adminupdatepassword');
    }

    public function UpdatePassword(){
      
        $this->ChangePassword();
        return redirect ('/admin/login');
    }

}
