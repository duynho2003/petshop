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
            'type_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên không được để trống',
            'normal_price.required' => 'Giá không được để trống',
            'normal_price.max' => 'Giá phải nhỏ hơn 1,000,000,000',
            'promotion_price.required' => 'Giá khuyến mãi không được để trống',
            'promotion_price.max' => 'Giá phải nhỏ hơn 1,000,000,000',
            'description.required' => 'Mô ta không được để trống',
            'type_id.required' => 'Loại sản phẩm không được để trống',
        ];
    }
}
