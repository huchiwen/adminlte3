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
            'password' =>'required',
            'role_id'  => 'required:integer',
            'status'   => 'required:integer',

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
            'password.required' => '密码名不能为空',
            'role_id.required' => '所属角色不能为空',
            'status.required' =>'状态只必须为整数',
        ];
    }
}