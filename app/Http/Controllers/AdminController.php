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
use Illuminate\Validation\Rules;

class AdminController extends Controller
{
    
    use ImageTrait;
    
    public function index(){
        return view ('admin.dashboard');
    }
    public function create(){
        return view ('admin.login');
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
        
        request()->validate([
            'name'     =>  ['required','min:5','max:15','string'] ,
            'address'  =>  ['string'] ,
            'image'    =>  ['image']
        ]);
       
        $image = $this->Saveimage('/profile_images/');
              
        User::where('id',Auth::id())->update([
            'name'    => request('name') ,
            'address' => request('address') ,
            'image'   => $image ,
        ]);

        toastr()->success('Profile Updated Successfully');
        return back();
    }

    public function ViewPassword(){
        return view ('admin.updatepassword');
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

    return redirect ("/admin/login");
    
    
    }


}
