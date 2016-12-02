<?php

namespace App\Http\Requests\Customer;

use App\Http\Requests\Request;

class StoreCustomerRequest extends Request
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
        // dd($this->all());
        return [
            // 'name'     => 'required|unique:tcl_category',
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
