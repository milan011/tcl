<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use DB;
use App\Shop;
use App\Http\Controllers\Controller;
use App\Repositories\Plan\PlanRepositoryContract;
use App\Repositories\Car\CarRepositoryContract;
use App\Repositories\Want\WantRepositoryContract;
use App\Repositories\Chance\ChanceRepositoryContract;
use App\Http\Requests\Plan\UpdatePlanRequest;
use App\Http\Requests\Plan\StorePlanRequest;

class PlanController extends Controller
{
    
    protected $plan;
    protected $car;
    protected $want;
    protected $chance;

    public function __construct(

        PlanRepositoryContract $plan,
        CarRepositoryContract $car,
        WantRepositoryContract $want,
        ChanceRepositoryContract $chance
    ) {

        $this->plan   = $plan;
        $this->car    = $car;
        $this->want   = $want;
        $this->chance = $chance;


        // $this->middleware('brand.create', ['only' => ['create']]);
    }
    /**
     * Display a listing of the resource.
     * 用户参与的约车列表
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // 先搜索属于该用户的销售机会，再得到约车信息
        $request['participate'] = true;
        // dd($request->all());
        $plans              = $this->plan->getAllPlans($request);
        $select_conditions  = $request->all();
        // dd(lastSql());
        // dd($plan_stauts_config);
        // dd($plans);

        return view('admin.plan.index', compact('plans', 'select_conditions'));
    }

    /**
     * Display a listing of the resource.
     * 用户发起的约车列表
     * @return \Illuminate\Http\Response
     */
    public function selfPlan(Request $request)
    {
        // p($request->method());
        
        $request['participate'] = false;
        $plans = $this->plan->getAllPlans($request);
        // dd(lastSql());
        // dd($chances);
        // dd($request->all());
        if($request->method() == 'POST'){
            //初始搜索条件
            $select_conditions  = $request->all();
        }else{
            $select_conditions['status'] = '1';
        }
        // dd($select_conditions);
        $chance_launch = isset($request->chance_launch) ? $request->chance_launch : '1';


        return view('admin.plan.self', compact('plans', 'chance_launch','select_conditions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $shops = Shop::where('status', '1')->select('id', 'name')->get();
        // dd($shops);
        // dd($request->all());

        $chance_id = isset($request->chance_id) ? $request->chance_id : old('chance_id');
        $car_id    = isset($request->car_id) ? $request->car_id : old('car_id');
        $want_id   = isset($request->want_id) ? $request->want_id : old('want_id');

        $chance_info = $this->chance->find($chance_id);
        $car_info    = $this->car->find($car_id);
        $want_info   = $this->want->find($want_id);

        // dd($chance_info);
        // dd($car_info->belongsToCustomer);
        // dd($want_info);
        return view('admin.plan.create',compact(
            'chance_info', 
            'car_info', 
            'want_info',
            'shops'
        ));
    }

    /**
     * Show the form for creating a new resource.
     * 约车发起/确认
     * @return \Illuminate\Http\Response
     */
    public function planLaunch(Request $request)
    {
        // dd($request->all());
        $plan = $this->plan->planLaunch($request);

        if($request->chance_status == 1){

            return response()->json(array(
                'data'       => $plan,
                'msg'        => '发起约车成功',
                'msg_change' => '待确认',
            ));
        }elseif($request->chance_status == 2){

            return response()->json(array(
                'data'       => $plan,
                'msg_change' => '已确认',
                'msg'        => '确认约车成功',
            ));
        }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePlanRequest $request)
    {
        // dd($request->all());

        $getInsertedId = $this->plan->create($request);
        // p(lastSql());exit;
        return redirect()->route('admin.plan.self')->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $plans     = $this->plan->find($id);
        $chances   =$this->chance->find($plans->chance_id);
        $car_info  = $this->car->find($chances->car_id); //车源信息
        $want_info = $this->want->find($chances->want_id); //求购信息
        // dd($chances);

        // dd($car_info->belongsToUser);
        // dd($want_info);
        /*$gearbox        = config('tcl.gearbox'); //获取配置文件中变速箱类别
        $out_color      = config('tcl.out_color'); //获取配置文件中外观颜色
        $capacity       = config('tcl.capacity'); //获取配置文件排量
        $category_type  = config('tcl.category_type'); //获取配置文件中车型类别
        $mileage        = config('tcl.mileage'); //获取配置文件中车型类别
*/
        // dd($chances->hasManyImages()->get());
        return view('admin.plan.show', compact('plans', 'chances',  'car_info', 'want_info'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd($this->plan->find($id));
        $plan_info   = $this->plan->find($id);
        $chance_info = $this->chance->find($plan_info->chance_id);
        $car_info    = $this->car->find($chance_info->car_id);
        $want_info   = $this->want->find($chance_info->want_id);

        // dd($plan_info);
        //dd($plan_info);

        return view('admin.plan.edit',compact(
            'chance_info', 
            'plan_info', 
            'car_info',
            'want_info'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePlanRequest $request, $id)
    {
        // dd($request->all());
        $plan = $this->plan->update($request, $id);
        
        return redirect()->route('admin.plan.self')->withInput();
        /*$book_created = (object) false;
        $book_id      = (object) '';*/

        /*DB::transaction(function() use ($request, $id, $book_created, $book_id){
            if($request->plan_del == '1'){

                $book = $this->book->create($request->chance_id);   
                $plan = $this->plan->update($request, $id);
                // dd($book->id);
                // dd($book_id);
                $book_created->scalar  = true;
                $book_id->scalar       = $book->id;

                Session::flash('sucess', '恭喜您，该销售机会成功转为订单，请及时跟进');               
            }else{

                $plan = $this->plan->update($request, $id);
                Session::flash('sucess', '革命尚未成功，同志仍需努力');
            }
        });

        if($book_created->scalar){

            return redirect()->route('admin.book.edit', ['plan'=>$book_id->scalar])->withInput();
        }else{
            dd('xixi');
            return redirect()->route('admin.plan.index')->withInput();
        }*/
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
