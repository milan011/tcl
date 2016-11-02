<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transcation extends Model
{
    /**
     * The database table used by the model.
     * 定义模型对应数据表及主键
     * @var string
     */
    // protected $table = 'users';
    protected $table = 'tcl_shop';
    protected $primaryKey ='id';
}
