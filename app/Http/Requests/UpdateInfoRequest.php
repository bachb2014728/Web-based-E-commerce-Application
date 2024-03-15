<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateInfoRequest extends FormRequest
{
    public function authorize(): bool
    {
        // dd($this->all());
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
            //??
            'email' => 'bail|required|email|unique:users,email,'.$this->id,
            'phone' => 'required|unique:users,phone,'.$this->id
        ];
    }
    public function messages():array{
        return [
            'email.required'=>'Vui lòng điền email',
            'email.unique'=>"$this->email đã tồn tại",
            'phone.required'=>'Vui lòng điền so dien thoai',
            'phone.unique'=>"$this->phone đã tồn tại",
            'email.email' => 'Email không đúng định dạng',
        ];
    }
}
