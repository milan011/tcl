<?php

namespace App\Http\Controllers\Show;

use Illuminate\Http\Request;
use DB;
use Debugbar;
use Session;
use View;

class JoinController extends CommonController
{   
    protected $request;

    public function __construct(
        Request $request
    ) {
        
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
        
        return view('home.join.index', compact('current_page', 'title'));
    }
}
