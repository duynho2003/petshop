<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserChangePasswordRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'current_pass' => 'required',
            'new_pass' => 'required|min:8',
            'confirm_pass' => 'required|same:password',
        ];
    }

    public function messages()
    {
        return [
            'current_pass.required' => 'Current Password is required!',
            'new_pass.required' => 'New Password is required!',
            'confirm_pass.required' => 'Confirm Password is required!',
        ];
    }
}
