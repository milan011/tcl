<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
	/**
     * The database table used by the model.
     * 定义模型对应数据表及主键
     * @var string
     */
    // protected $table = 'users';
    protected $table = 'tcl_images';
    protected $primaryKey ='id';

    public static $rules = [
        'file' => 'required|mimes:png,gif,jpeg,jpg,bmp'
    ];

    public static $messages = [
        'file.mimes' => '图片格式错误',
        'file.required' => '图片不存在'
    ];

    // 定义Images表与Cars表一对多关系
    public function belongsToCars()
    {
        return $this->hasMany('App\Cars', 'car_id', 'id');
    }
}