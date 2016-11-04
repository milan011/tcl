<?php

namespace App\Http\Requests\Role;

use App\Http\Requests\Request;

class UpdateRoleRequest extends Request
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
        // p($this->all()['shop_id']);exit;
        $id = $this->route('role');
        // dd($id);
        return [
            'name'        => 'required',
            'slug'        => 'required|unique:roles',
            'slug'        => "unique:roles,slug,".$id,
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
