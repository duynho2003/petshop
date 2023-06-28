<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminProductRequest extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'normal_price' => 'bail|required|max:1000000000',
            'promotion_price' => 'bail|required|max:1000000000',
            'description' => 'required',
            // 'type_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Name is required',
            'normal_price.required' => 'Price is required',
            'normal_price.max' => 'Price must smaller than 1,000,000,000',
            'promotion_price.required' => 'Promotion price required',
            'promotion_price.max' => 'Price must smaller than 1,000,000,000',
            'description.required' => 'Description required',
            // 'type_id.required' => 'Loại sản phẩm required',
        ];
    }
}
