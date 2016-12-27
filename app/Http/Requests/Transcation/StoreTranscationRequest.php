<?php

namespace App\Http\Requests\Transcation;

use App\Http\Requests\Request;

class StoreTranscationRequest extends Request
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
        return [
            'deal_price'        => 'required|numeric',
            'earnest'           => 'numeric',
            'first_pay'         => 'numeric',
            'last_pay'          => 'numeric',
            'commission'        => 'numeric',
            'commission_infact' => 'numeric',          
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     * 验证失败信息提示
     * @return array
     */
    public function messages(){
        return [
            'deal_price.numeric'        => '成交价应该是数字',
            'deal_price.required'       => '请输入成交价格',
            'earnest.numeric'           => '定金应该是数字',
            'first_pay.numeric'         => '首款应该是数字',
            'last_pay.numeric'          => '尾款应该是数字',
            'commission.numeric'        => '应收佣金应该是数字',
            'commission_infact.numeric' => '实收佣金应该是数字',
        ];
    }
}
