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
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     * 更新用户验证规则
     * @return array
     */
    public function rules()
    {
        $id = $this->route('customer');
        
        return [
            'name'      => 'required',
            'telephone' => 'required|phone_number',
            'telephone' => "unique:tcl_customer,telephone,".$id,
            'indentily_card' => 'alpha_num|size:18',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     * 验证失败信息提示
     * @return array
     */
    public function messages(){
        return [
            'name.required'            => '请输入客户名称',
            'telephone.required'       => '请输入手机号码',
            'telephone.phone_number'   => '手机号码无效',
            'telephone.unique'         => '已存在该手机号',
            'indentily_card.alpha_num' => '身份证号应由字母和数字组成',
            'indentily_card.size'      => '请输入18位身份证号',
        ];
    }
}
