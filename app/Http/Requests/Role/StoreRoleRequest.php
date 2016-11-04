<?php

namespace App\Http\Requests\Role;

use App\Http\Requests\Request;

class StoreRoleRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->user()->hasRole('administrator');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'slug' => 'required|unique:roles',
            'description' => 'required'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     * 验证失败信息提示
     * @return array
    */
    public function messages(){
        return [
            'name.required'          => '请输入角色名称',
            'slug.required'          => '请输入角色标识',
            'slug.unique'            => '角色标识不能重复',
            'description.required'   => '请输入角色描述',
        ];
    }
}
