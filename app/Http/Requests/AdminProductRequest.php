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
            'feature_image_path' => 'bail|required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'feature_image_name' => 'required',
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
            'feature_image_path.required' => 'Không được để trống hình ảnh',
            'feature_image_path.mimes' => 'Phần mở rộng không phù hợp',
            'feature_image_path.max' => 'Tối đa 2048 kilobytes',
            'image_path.required' => 'Không được để trống hình ảnh',
            'description.required' => 'Mô ta không được để trống',
            'type_id.required' => 'Loại sản phẩm không được để trống',
        ];
    }
}
