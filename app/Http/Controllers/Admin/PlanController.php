<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
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
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dd('hehe');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $chance_info = $this->chance->find($request->chance_id);
        $car_info    = $this->car->find($request->car_id);
        $want_info   = $this->want->find($request->want_id);

        // dd($chance_info);
        // dd($car_info->belongsToCustomer);
        // dd($want_info);
        return view('admin.plan.create',compact(
            'chance_info', 
            'car_info', 
            'want_info'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($brandRequest->all());
        $getInsertedId = $this->plan->create($request);
        // p(lastSql());exit;
        return redirect()->route('admin.plan.index')->withInput();
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
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
