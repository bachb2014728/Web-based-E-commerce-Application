<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class UpdateProductRequest extends FormRequest
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

            'name' => ['required', Rule::unique('products')->ignore($this->product)],
            'slug' => ['required', Rule::unique('products')->ignore($this->product)]
        ];
    }
    public function messages():array{
        return [
            'name.required'=>'Vui lòng điền tên sản phẩm',
            'name.unique'=>"$this->name đã tồn tại",
            'slug.required'=>'Vui lòng điền đường dẫn sản phẩm',
            'slug.unique'=>"$this->slug đã tồn tại"
        ];
    }
}
