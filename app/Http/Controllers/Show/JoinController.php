<?php

namespace App\Http\Controllers\Show;

use Illuminate\Http\Request;
use DB;
use Debugbar;
use Session;
use View;

use App\Repositories\Shop\ShopRepositoryContract;

class JoinController extends CommonController
{   
    protected $request;
    protected $shop;

    public function __construct(
        ShopRepositoryContract $shop,
        Request $request
    ) {
        
        $this->shop  = $shop;
        $this->request = $request;
        // $this->middleware('brand.create', ['only' => ['create']]);
        parent::__construct($request);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd('join us');
        $current_page    = 'join';
        $title           = '加盟石家庄淘车乐二手车交易有限公司';

        $sel_city_id   = (null !==Session('chosen_city_id')) ? Session('chosen_city_id') : Session('current_city');

        // dd(Session::all());
        $sel_city = getSelCity($sel_city_id, $this->shop); //车源来自城市信息

        $show_city_name = $sel_city['show_city_name'];       
        $chosen_city_selection = Session('chosen_city_id');
        $show_city_name = $sel_city['show_city_name'];
        
        return view('show.join.index', compact('current_page', 'title', 'show_city_name'));
    }
}
