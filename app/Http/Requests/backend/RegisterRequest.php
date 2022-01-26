<?php

namespace App\Http\Requests\backend;

use Illuminate\Foundation\Http\FormRequest;
use function Symfony\Component\Translation\t;

class RegisterRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'required',
            'email'=>'required|email|unique:users,email,'.request()->id,
            'password' => 'required',
            'confirm_password' => 'required|same:password'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập tên đầy đủ của bạn',
            'email.required' => 'Vui lòng nhập email',
            'email.unique' => 'Email này đã được dùng đăng ký',
            'password.required' => 'Vui lòng nhập mật khẩu',
            'confirm_password.required' => 'Vui lòng nhập mật khẩu xác nhận'
        ];
    }
}
