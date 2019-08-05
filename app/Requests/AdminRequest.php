<?php
namespace App\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest {

    /**
     *  处理用户请求
     */

    public function rules()
    {
        return [
            'username' =>'required',
        ];
    }

    public function authorize()
    {
        return true;
    }

    public function messages()
    {
        return [
            'username.required' => '用户名不能为空',
        ];
    }
}