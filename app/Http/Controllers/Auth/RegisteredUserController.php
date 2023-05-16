<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Traits\ImageTrait;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
   
   use ImageTrait ;
   
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('front.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
         
        $request->validate([
            'name'     => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255' , "unique:users,username"],
            'email'    => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'image'    => ['image'],
            'checkbox' => ['accepted']
        ] , ['checkbox' => 'please agree our terms']);

        
        $image = $this->Saveimage('/profile_images');
        
        $user = User::create([
            'name'     => $request->name,
            'username' => $request->username,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
            'image'    => $image ,
            'role'     => $request->role ,
        ]);

        event(new Registered($user));

        Auth::login($user);

        toastr()->success('user created successfully');

        return redirect(RouteServiceProvider::HOME);
    }
}
