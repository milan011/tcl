<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InsuranceImage extends Model
{
    use SoftDeletes; //使用软删除

	/**
     * The database table used by the model.
     * 定义模型对应数据表及主键
     * @var string
     */
    // protected $table = 'users';
    protected $table = 'tcl_images_insurance';
    protected $primaryKey ='id';

    public static $rules = [
        'file' => 'required|mimes:png,gif,jpeg,jpg,bmp'
    ];

    public static $messages = [
        'file.mimes' => '图片格式错误',
        'file.required' => '图片不存在'
    ];

    /**
     * 应该被调整为日期的属性
     * 定义软删除
     * @var array
     */
    protected $dates = ['deleted_at'];

    // 定义Images表与Cars表一对多关系
    public function belongsToInsurance()
    {
        return $this->hasMany('App\Insurance', 'insurance_id', 'id');
    }
}