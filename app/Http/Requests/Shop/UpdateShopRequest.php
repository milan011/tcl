<?php

namespace App\Http\Requests\Shop;

use App\Http\Requests\Request;

class UpdateShopRequest extends Request
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
        // p($this->all()['shop_id']);exit;
        $id = $this->route('shop');
        // dd($id);
        return [
            'name'        => 'required',
            'type'        => 'required|numeric',
            'provence_id' => 'required|numeric',
            'city_id'     => 'required|numeric',
            'qq_number'   => '',
            'wx_number'   => '',
            'telephone'   => 'required',
            'email'       => "email",
            'email'       => "unique:tcl_shop,email,".$id,
            'address'     => '',
            'status'      => ''
            /*'password' => 'required|min:5|confirmed',
            'password_confirmation' => 'required|min:5',
            'image_path' => '',
            'roles' => 'required',
            'departments' => 'required'*/
        ];
    }

    /**
         * Get the error messages for the defined validation rules.
         * 验证失败信息提示
         * @return array
         */
        public function messages(){
            return [
                'name.required'          => '请输入门店名称',
                'type.required'          => '请选择门店类型',
                'provence_id.required'   => '请选择省份',
                'city_id.required'       => '请选城市',
                'telephone.required'     => '请输入门店联系电话',
                'email.unique'           => '邮箱地址已被使用',
                'email.email'            => '邮箱格式错误',
            ];
        }
}
