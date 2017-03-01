<?php
namespace App\Http\ViewComposers;

use Illuminate\View\View;
use Request;
use Session;
use App\Area;

class CityComposer
{  
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {   
        $tcl_citys = Area::where('pid', '10')->where('status', '1')->get();
        // dd($tcl_citys);
        $view->with('citysHasTcl', $tcl_citys);
    }
}