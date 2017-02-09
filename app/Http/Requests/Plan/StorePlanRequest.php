<?php

namespace App\Http\Requests\Plan;

use App\Http\Requests\Request;

class StorePlanRequest extends Request
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
            'plan_time'    => 'required',
            'hafe_day'     => 'required',
            'hours'        => 'required',
            'plan_address' => 'required|alpha|min:2',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     * 验证失败信息提示
     * @return array
     */
    public function messages(){
        return [
            'plan_time.required'    => '请输入看车日期',
            'hafe_day.required'     => '请输入具体时间',
            'hours.required'        => '请输入具体时间',
            'plan_address.required' => '请输入看车地点',
            'plan_address.alpha'    => '请选择看车地点',
            'plan_address.min'      => '请选择看车地点',
          
        ];
    }
}
