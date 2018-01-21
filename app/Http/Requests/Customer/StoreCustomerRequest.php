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
        // p($this->all());exit;
        if($this->is_insurance == '1'){
            //保险客户电话可以为空
            return [
                // 'name'     => 'required|unique:tcl_category',
                'customer_name'  => 'required',
                'telephone'      => 'phone_number',
                'indentily_card' => 'alpha_num|size:18',
            ];
        }else{
           return [
                // 'name'     => 'required|unique:tcl_category',
                'customer_name'  => 'required',
                'telephone'      => 'required|phone_number',
                'indentily_card' => 'alpha_num|size:18',
            ]; 
        }
        
    }

    /**
     * Get the error messages for the defined validation rules.
     * 验证失败信息提示
     * @return array
     */
    public function messages(){
        return [
            'customer_name.required'   => '请输入客户名称',
            'telephone.required'       => '请输入手机号码',
            'telephone.phone_number'   => '手机号码无效',
            // 'indentily_card.required'  => '请输入身份证号',
            'indentily_card.alpha_num' => '身份证号应由字母和数字组成',
            'indentily_card.size'      => '请输入18位身份证号',
        ];
    }
}
