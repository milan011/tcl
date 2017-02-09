<?php

namespace App\Http\Requests\Plan;

use App\Http\Requests\Request;

class UpdatePlanRequest extends Request
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
            'plan_remark'  => 'required',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     * 验证失败信息提示
     * @return array
     */
    public function messages(){
        return [
            'plan_remark.required'  => '请输入看车反馈',
        ];
    }
}
