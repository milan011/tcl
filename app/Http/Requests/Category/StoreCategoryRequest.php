<?php

namespace App\Http\Requests\Category;

use App\Http\Requests\Request;

class StoreCategoryRequest extends Request
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
            // 'name'     => 'required|unique:tcl_category',
            'name'     => 'required',
            'brand_id' => 'required',
            'year_type'=> 'required',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     * 验证失败信息提示
     * @return array
     */
    public function messages(){
        return [
            'name.required'      => '请输入车型名称',
            // 'name.unique'        => '车型名称已经存在',
            'brand_id.required'  => '请选择二级品牌',
            'year_type.required' => '请选择车款年份',

        ];
    }
}
