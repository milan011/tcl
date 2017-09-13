<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use DB;
use Debugbar;
use View;
use Carbon;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\Transcation\TranscationRepositoryContract;
use App\Repositories\Plan\PlanRepositoryContract;
use App\Repositories\Car\CarRepositoryContract;
use App\Repositories\Want\WantRepositoryContract;
use App\Repositories\Chance\ChanceRepositoryContract;
use App\Repositories\Notice\NoticeRepositoryContract;

class HomeController extends Controller
{   

    protected $transcation;
    protected $plan;
    protected $car;
    protected $want;
    protected $chance;
    protected $notice;

    public function __construct(
        PlanRepositoryContract $plan,
        CarRepositoryContract $car,
        WantRepositoryContract $want,
        ChanceRepositoryContract $chance,
        TranscationRepositoryContract $transcation,
        NoticeRepositoryContract $notice
    ) {
        $this->plan        = $plan;
        $this->car         = $car;
        $this->want        = $want;
        $this->chance      = $chance;
        $this->transcation = $transcation;
        $this->notice      = $notice;
        // $this->middleware('brand.create', ['only' => ['create']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request['car_status']  = '1';
        $request['want_status']  = '1';
        
        $user = $request->user();
        $cars_num = $this->car->getAllCars($request, true)->toArray()['total'];
        $wants_num = $this->want->getAllWants($request, true)->toArray()['total'];
        $request['participate'] = false;
        $transcations_num = $this->transcation->getAllTranscations($request)->toArray()['total'];
        $plans_num = $this->plan->getAllPlans($request)->toArray()['total'];
        $chances_num = $this->chance->getAllChances($request)->toArray()['total'];

        $request['need_follow'] = getExpiredDate();
        
        $need_follow_cars  = $this->car->getAllCars($request, true); //待跟进车源
        // dd(lastSql());
        $need_follow_wants = $this->want->getAllWants($request, true); //待跟进客源

        $notice = $this->notice->findTopNotice();
        // dd(lastSql());
        // dd($notice);
        // dd(lastSql());
        // dd($need_follow_wants);
        // dd($threeDaysAgo = getExpiredDate());
        /*p(lastSql());
        p($user['attributes']);exit;*/
        /*p($cars->toArray()['total']);
        p($wants->toArray()['total']);
        p($transcations->toArray()['total']);
        p($plans->toArray()['total']);
        dd($chances->toArray()['total']);*/

        return view('admin.home.index', compact(
            'cars_num', 'wants_num', 'transcations_num', 'plans_num', 'chances_num','need_follow_cars','need_follow_wants','notice'
        ));
    }
}
