<?php

namespace App\Http\Requests\product;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|unique:products',
            'slug' => 'required|unique:products'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Vui lòng điền tên sản phẩm',
            'slug.required' => 'Vui lòng điền đường dẫn sản phẩm',
            'name.unique' => "$this->name đã tồn tại",
            'slug.unique' => "$this->slug đã tồn tại"
        ];
    }
}
