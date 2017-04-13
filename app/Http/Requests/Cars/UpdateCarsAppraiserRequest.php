<?php

namespace App\Http\Requests\Cars;

use App\Http\Requests\Request;

class UpdateCarsAppraiserRequest extends Request
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
            'pg_description'   => 'required',
            'appraiser_price'  => 'required',
            'guide_price'      => 'required',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     * 验证失败信息提示
     * @return array
     */
    public function messages(){
        return [
            'pg_description.required'  => '请输入评估描述',
            'appraiser_price.required' => '请输入评估价格',
            'guide_price.required'     => '请输入指导价格',
        ];
    }
}
