<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Loan extends Model
{
    /**
     * The database table used by the model.
     * 定义模型对应数据表及主键
     * @var string
     */
    // protected $table = 'users';
    protected $table = 'tcl_loan';
    protected $primaryKey ='id';

    /**
     * The attributes that are mass assignable.
     * 定义可批量赋值字段
     * @var array
     */
    protected $fillable = ['loan_code', 'name', 'card', 'bill_day', 'telephone', 'car_name', 'cate_id', 'category_id', 'appraiser_price', 'loan_price', 'insurance_loan', 'orther_loan', 'total_loan', 'loan_phase', 'loan_date', 'repayment_frist', 'repayment_everymonth', 'loan_begin_date', 'car_plate_old', 'car_plate_new', 'other_contact1', 'other_contact2', 'other_contact1_phone', 'other_contact2_phone', 'recognizor', 'recognizor_adress', 'recognizor_phone', 'plate_date', 'appraiser_cost', 'poundage', 'qm_profits', 'loan_profits', 'visits_profits', 'loan_channels', 'customer_sorcue', 'customer_id','loan_status', 'insurance_status', 'remark', 'creater_id', 'insurance_provence', 'insurance_city'];

    /**
     * The attributes excluded from the model's JSON form.
     * //在模型数组或 JSON 显示中隐藏某些属性
     * @var array
     */
    protected $hidden = [   
        'password', 'remember_token',
    ];

    /**
     * 应该被调整为日期的属性
     * 定义软删除
     * @var array
     */
    protected $dates = ['deleted_at'];

    // 插入数据时忽略唯一索引
    public static function insertIgnore($array){
        $a = new static();
        if($a->timestamps){
            $now = \Carbon\Carbon::now();
            $array['created_at'] = $now;
            $array['updated_at'] = $now;
        }
        DB::insert('INSERT IGNORE INTO '.$a->table.' ('.implode(',',array_keys($array)).
            ') values (?'.str_repeat(',?',count($array) - 1).')',array_values($array));
    }

    // 搜索条件处理
    public function addCondition($requestData){

        $query = $this;

        if(!(Auth::user()->isSuperAdmin())){

            if(!(Auth::user()->isDkLeader())){
                //贷款顾问
                // dd('小兵');
                $query = $query->where('creater_id', Auth::id());  
            }/*else{
                //贷款主管
                dd('主管');
            } */
        }           

        if(!empty($requestData['loan_code'])){

            $query = $query->where('loan_code', $requestData['loan_code']);

            return $query;
        }

        if(isset($requestData['loan_status']) && $requestData['loan_status'] != ''){
            
            $query = $query->where('loan_status', $requestData['loan_status']);
            
        }else{

            $query = $query->where('loan_status', '1');
        }  

        if(!empty($requestData['telephone'])){

            $query = $query->where('telephone', $requestData['telephone']);
        }

        if(!empty($requestData['name'])){

            $query = $query->where('name','LIKE','%'.$requestData['name'].'%');
        } 

        if(!empty($requestData['end_date'])){
            $query = $query->where('created_at', '<=', $requestData['end_date']);
        }
        
        if(!empty($requestData['begin_date'])){
            $query = $query->where('created_at', '>=', $requestData['begin_date']);
        } 

        return $query;
    }

    // 定义Category表与insurance表一对多关系
    public function belongsToCategory(){

      return $this->belongsTo('App\Category', 'cate_id', 'id')->select('id', 'name AS category_name');
    }

    // 定义Brand表与Loan表一对多关系
    public function belongsToBrand(){

      return $this->belongsTo('App\Brand', 'category_id', 'id')->select('id', 'name AS brand_name');
    }

    // 定义Shop表与insurance表一对多关系
    public function belongsToShop(){

      return $this->belongsTo('App\Shop', 'shop_id', 'id')->select('id', 'city_id', 'name AS shop_name', 'address as shop_address');
    }

    // 定义User表与insurance表一对多关系
    public function belongsToUser(){

      return $this->belongsTo('App\User', 'creater_id', 'id')->select('id as user_id', 'nick_name', 'telephone as creater_telephone');
    }

    // 定义customer表与insurance表一对多关系
    /*public function belongsToCustomer(){

      return $this->belongsTo('App\Customer', 'customer_id', 'id')->select('id', 'name as customer_name', 'telephone as customer_telephone');
    }*/

    // 定义loan表与Area表一对多关系
    public function belongsToCity(){

      return $this->belongsTo('App\Area', 'insurance_city', 'id')->select('id', 'name as city_name');
    }

    // 定义loan表与Area表一对多关系
    public function belongsToProvence(){

      return $this->belongsTo('App\Area', 'insurance_provence', 'id')->select('id', 'name as provence_name');
    }

    // 定义loan表与Customer表一对多关系
    public function belongsToCustomer(){

      return $this->belongsTo('App\Customer', 'customer_id', 'id')->select('id', 'name as customer_name', 'indentily_card as customer_indentily_card','address as customer_address');
    }

    // 定义Car表与images表一对多关系
    public function hasManyImages()
    {
        return $this->hasMany('App\LoanImage', 'loan_id', 'id');
    }
}
