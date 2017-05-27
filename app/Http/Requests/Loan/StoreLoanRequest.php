<?php

namespace App\Http\Requests\Loan;

use App\Http\Requests\Request;

class StoreLoanRequest extends Request
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
            'car_name'             => 'required',
            'card'                 => 'required|numeric|',
            'appraiser_price'      => 'required',
            'loan_price'           => 'required',
            'plate_date'           => 'required|date',
            'loan_date'            => 'required|date',
            'repayment_frist'      => 'required',
            'repayment_everymonth' => 'required',
            'loan_begin_date'      => 'required|date',
            'recognizor'           => 'required',
            'recognizor_phone'     => 'required|phone_number',
            'insurance_provence'   => 'required|numeric|min:1',
            'insurance_city'       => 'required|numeric|min:1',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     * 验证失败信息提示
     * @return array
     */
    public function messages(){
        return [
            'car_name.required'             => '请输入车型',
            'card.required'                 => '请输入银行卡号',
            'card.numeric'                  => '银行卡号均为数字',
            'appraiser_price.required'      => '请输入评估价',
            'loan_price.required'           => '请输入车贷金额',
            'plate_date.required'           => '请输入上牌日期',
            'plate_date.date'               => '上牌日期格式错误',
            'loan_date.required'            => '请输入放款日期',
            'loan_date.date'                => '放款日期格式错误',
            'repayment_everymonth.required' => '请输入首页还款',
            'repayment_frist.required'      => '请输入每月还款',
            'loan_begin_date.required'      => '请输入保险起始日期',
            'loan_begin_date.date'          => '保险起始日期格式错误',
            'recognizor.required'           => '请输入担保人',
            'recognizor_phone.required'     => '请输入担保人手机号',
            'recognizor_phone.phone_number' => '担保人手机号码无效',
            'insurance_provence.min'        => '请输入车源所在省份',
            'insurance_city.min'            => '请输入车源所在城市',

        ];
    }
}
