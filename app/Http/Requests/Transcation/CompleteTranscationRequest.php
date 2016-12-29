<?php

namespace App\Http\Requests\Transcation;

use App\Http\Requests\Request;

class CompleteTranscationRequest extends Request
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
            'deal_price'        => 'required|numeric',
            'earnest'           => 'required|numeric',
            'first_pay'         => 'required|numeric',
            'last_pay'          => 'required|numeric',
            'commission'        => 'required|numeric',
            'commission_infact' => 'required|numeric',          
            'done_time'         => 'required|date',          
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     * 验证失败信息提示
     * @return array
     */
    public function messages(){
        return [
            'deal_price.numeric'         => '成交价应该是数字',
            'deal_price.required'        => '请输入成交价格',
            'earnest.required'           => '请输入定金',
            'first_pay.required'         => '请输入首款',
            'last_pay.required'          => '请输入尾款',
            'commission.required'        => '请输入佣金',
            'commission_infact.required' => '请输入实际佣金',
            'done_time.required'         => '请输入成交时间',
            'earnest.numeric'            => '定金应该是数字',
            'first_pay.numeric'          => '首款应该是数字',
            'last_pay.numeric'           => '尾款应该是数字',
            'commission.numeric'         => '应收佣金应该是数字',
            'commission_infact.numeric'  => '实收佣金应该是数字',
            'done_time.date'             => '成交时间应为日期',
        ];
    }
}
