<?php

namespace App\Http\Requests\Want;

use App\Http\Requests\Request;

class UpdateWantRequest extends Request
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
            'top_price'    => 'required',
            'bottom_price' => 'required',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     * 验证失败信息提示
     * @return array
     */
    public function messages(){
        return [
            'top_price.required'    => '请输入最高可接受价格',
            'bottom_price.required' => '请输入期望价',
        ];
    }
}
