<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use App\Http\Controllers\Controller;
use App\Repositories\Transcation\TranscationRepositoryContract;
use App\Repositories\Plan\PlanRepositoryContract;
use App\Repositories\Car\CarRepositoryContract;
use App\Repositories\Want\WantRepositoryContract;
use App\Repositories\Chance\ChanceRepositoryContract;
use App\Http\Requests\Transcation\UpdateTranscationRequest;
use App\Http\Requests\Transcation\StoreTranscationRequest;

class TranscationController extends Controller
{
    protected $transcation;
    protected $plan;
    protected $car;
    protected $want;
    protected $chance;

    public function __construct(
        PlanRepositoryContract $plan,
        CarRepositoryContract $car,
        WantRepositoryContract $want,
        ChanceRepositoryContract $chance,
        TranscationRepositoryContract $transcation
    ) {
        $this->plan        = $plan;
        $this->car         = $car;
        $this->want        = $want;
        $this->chance      = $chance;
        $this->transcation = $transcation;
        // $this->middleware('brand.create', ['only' => ['create']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transcations = $this->transcation->getAllTransactions();

        p(lastSql());
        dd($transcations);
        dd($transcation[0]->belongsToChance);

        return view('admin.transcation.index', compact('transcation'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // dd(old('chance_id'));
        // dd($request->all());
        // dd(isset($request->chance_id));
        $chance_id = isset($request->chance_id) ? $request->chance_id : old('chance_id');
        $car_id    = isset($request->car_id) ? $request->car_id : old('car_id');
        $want_id   = isset($request->want_id) ? $request->want_id : old('want_id');
        $plan_id   = isset($request->plan_id) ? $request->plan_id : old('plan_id');

        // dd($chance_id);
        $chance_info = $this->chance->find($chance_id);
        $car_info    = $this->car->find($car_id);
        $want_info   = $this->want->find($want_id);
        $plan_info   = $this->plan->find($plan_id);

        // dd($chance_info);
        /*dd($car_info->belongsToCustomer);
        dd($want_info);*/
        return view('admin.transcation.create',compact(
            'chance_info', 
            'car_info', 
            'want_info',
            'plan_info'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTranscationRequest $transcationRequest)
    {
        // dd($transcationRequest->all());
        $getInsertedId = $this->transcation->create($transcationRequest);
        // p(lastSql());exit;
        /*if(!$getInsertedId){
            // dd('hehe sb');
            return redirect()->route('admin.transcation.edit', ['transcation'=>'1'])->withInput();
        }*/
        return redirect()->route('admin.transcation.index')->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        dd('sb 重复了吧');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTranscationRequest $transcationRequest, $id)
    {
        //
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
