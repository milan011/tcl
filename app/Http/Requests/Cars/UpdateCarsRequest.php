<?php

namespace App\Http\Requests\Cars;

use App\Http\Requests\Request;

class UpdateCarsRequest extends Request
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
     * 验证规则
     * @return array
     */
    public function rules()
    {

        return [
            'name'           => 'required',
            'capacity'       => 'required',
            'plate_date'     => 'required|date',
            'plate_end'      => 'required|date',
            'mileage'        => 'required',
            'description'    => 'required',
            'top_price'      => 'required',
            'bottom_price'   => 'required',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     * 验证失败信息提示
     * @return array
     */
    public function messages(){
        return [
            'name.required'         => '请确认车型名称',
            'capacity.required'     => '请输入排量',
            'plate_date.required'   => '请输入上牌日期',
            'plate_date.date'       => '日期格式错误',
            'plate_end.required'    => '请输到检日期',
            'plate_end.date'        => '日期格式错误',
            'mileage.required'      => '请输入行驶里程',
            'description.required'  => '请输入车况描述',
            'top_price.required'    => '请输入期望价格',
            'bottom_price.required' => '请输入底价',

        ];
    }
}
