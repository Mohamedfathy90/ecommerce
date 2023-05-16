<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name'               =>  ['required','min:5','max:15','string'] ,
            'email'              =>  ['required' , 'email' , Rule::unique('users','email')->ignore(auth()->user())],
            'address'            =>  ['string'] ,
            'image'              =>  ['image'],
            'old_password'       =>  ['exclude_if:old_password,null' , 'current_password'],
            'new_password'       =>  ['exclude_if:old_password,null' , 'confirmed', Rules\password::defaults()]
        ];
    }
}
