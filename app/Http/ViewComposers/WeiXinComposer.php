<?php
namespace App\Http\ViewComposers;

use Illuminate\View\View;
use Request;
use Session;

class WeiXinComposer
{  
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {   
        $jssdk   = new \JSSDK("wx195ad83501ef1dab", "54decf6337e896ffc393bd0110b70758");
        $weixsdk = $jssdk->GetSignPackage();
        
        // p('wo u');
        // dd($weixsdk);
        $view->with('weixsdk', $weixsdk);
    }
}