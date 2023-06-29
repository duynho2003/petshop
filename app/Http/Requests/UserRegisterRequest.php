<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|max:10',
            'gender' => 'required',
            'address' => 'required',
            'password' => 'required|min:8',
            'confirm_password' => 'required|same:password',
            'birthday' => 'bail|required|before_or_equal: -16 years',
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => 'First Name is required!',
            'last_name.required' => 'Last Name is required!',
            'email.required' => 'Email is required!',
            'email.email' => 'Email is invalid!',
            'phone.required' => 'Phone number is required!',
            'phone.max' => 'The phone number must not be greater than 10 numbers.',
            'gender.required' => 'Gender is required!',
            'address.required' => 'Address is required!',
            'password.required' => 'Password is required!',
            'confirm_password' => 'Confirm Password is required!',
            'birthday.required' => 'Birthday is required!',
            'birthday.before_or_equal' => 'Birthday must be 16 years old or equal!',
        ];
    }
}
