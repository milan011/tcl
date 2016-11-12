<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use DB;
use Debugbar;
use View;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{   

    public function __construct(){
        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $user = $request->user();
        /*p(lastSql());
        p($user['attributes']);exit;*/

        $hehe = 'hehehehe ni mei a';
        $haha = 'hahahaha ni mei a';
        $xixi = 'xixixixi ni mei a';

        return view('admin.home.index', compact(

                'hehe',
                'haha',
                'xixi'
            ));
    }
}
