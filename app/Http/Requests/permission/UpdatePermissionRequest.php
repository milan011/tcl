<?php

namespace App\Http\Requests\Permission;

use App\Http\Requests\Request;

class UpdatePermissionRequest extends Request
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
     * 验证规则
     * @return array
     */
    public function rules()
    {   
        // p($this->all());exit;

        $id = $this->route('permission');

        return [
            'name'        => 'required',
            'slug'        => 'required',
            'slug'        => "unique:permissions,slug,".$id,
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
            'name.required'          => '请输入权限名称',
            'slug.required'          => '请输入权限标识',
            'slug.unique'            => '权限标识不能重复',
            'description.required'   => '请输入权限描述',
        ];
    }
}
