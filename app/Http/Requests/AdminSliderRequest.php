<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminSliderRequest extends FormRequest
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
            'image_path' => 'bail|required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'name' => 'required',
            'description' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'image_path.required' => 'Không được để trống hình ảnh',
            'image_path.mimes' => 'Phần mở rộng không phù hợp',
            'image_path.max' => 'Tối đa 2048 kilobytes',
            'name.required' => 'Tên không được để trống',
            'description.required' => 'Mô ta không tại tại',
        ];
    }
}
