<?php

namespace App\Http\Requests\Notice;

use App\Http\Requests\Request;

class StoreNoticeRequest extends Request
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
            'title'   => 'required',
            'content' => 'required|unique:tcl_notice',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     * 验证失败信息提示
     * @return array
     */
    public function messages(){
        return [
            'title.required'   => '请输入标题',
            'content.required' => '公告内容不能为空',
            'title.unique'     => '标题已被使用',
        ];
    }
}
