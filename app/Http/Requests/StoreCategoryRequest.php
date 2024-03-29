<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
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
            'name' => 'required|unique:categories',
            'slug' => 'required|unique:categories'
        ];
    }
    public function messages():array{
        return [
            'name.required'=>'Vui lòng điền tên danh mục',
            'name.unique'=>"$this->name đã tồn tại",
            'slug.required'=>'Vui lòng điền đường dẫn danh mục',
            'slug.unique'=>"$this->slug đã tồn tại",
        ];
    }
}
