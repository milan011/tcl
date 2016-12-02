<?php

namespace App\Http\Requests\Customer;

use App\Http\Requests\Request;

class UpdateCustomerRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     * 更新用户验证规则
     * @return array
     */
    public function rules()
    {
        $id = $this->route('user');
        
        return [
            'name'      => 'required',
            'telephone' => 'required|phone_number',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     * 验证失败信息提示
     * @return array
     */
    public function messages(){
        return [
            'name.required'          => '请输入客户名称',
            'telephone.required'     => '请输入手机号码',
            'telephone.phone_number' => '手机号码无效',
        ];
    }
}
