<?php

namespace App\Http\Requests\Insurance;

use App\Http\Requests\Request;

class UpdateInsuranceRequest extends Request
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
            //'category_id'  => 'required',
            //'car_plate'    => 'required',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     * 验证失败信息提示
     * @return array
     */
    public function messages(){
        return [
            //'category_id.required' => '请选择车型',
            //'car_plate.required'   => '车牌号',
        ];
    }
}
