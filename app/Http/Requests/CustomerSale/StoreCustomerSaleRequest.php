<?php

namespace App\Http\Requests\CustomerSale;

use App\Http\Requests\Request;

class StoreCustomerSaleRequest extends Request
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
            // 'brand'   => 'required|numeric|min:1',
            // 'company' => 'required|numeric|min:1',
            // 'type'    => 'required|numeric|min:1',
            'mobile'  => 'required|phone_number',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     * 验证失败信息提示
     * @return array
     */
    public function messages(){
        return [
            // 'brand.min'           => '请选择品牌',
            // 'company.min'         => '请选择品牌',
            // 'type.min'            => '请选择品牌',
            'mobile.required'     => '请输入手机号码',
            'mobile.phone_number' => '手机号码无效',

        ];
    }
}
