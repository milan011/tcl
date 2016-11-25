<?php

namespace App\Http\Requests\Brand;

use App\Http\Requests\Request;

class StoreBrandRequest extends Request
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
            'name'         => 'required|unique:tcl_brand',
            'logo_img'     => 'required|image|unique:tcl_brand',
            'frist_letter' => 'required|alpha|min:1|max:1',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     * 验证失败信息提示
     * @return array
     */
    public function messages(){
        return [
            'name.required'         => '请输入品牌名',
            'name.unique'           => '品牌名重复',
            'logo_img.unique'       => '车型图片名称重复',
            'logo_img.required'     => '请添加车型图片',
            'logo_img.image'        => '添加文件必须是图片',
            'frist_letter.required' => '请输车型首字母',
            'frist_letter.alpha'    => '车型首字母必须是字母',
            'frist_letter.min'      => '请输入一位字母',
            'frist_letter.max'      => '请输入一位字母',
            
        ];
    }
}
