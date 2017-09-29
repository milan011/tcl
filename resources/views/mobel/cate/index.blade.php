@extends('mobel.main')

@section('title')
    
@endsection

@section('head_content')
    <link type="text/css" rel="stylesheet" href="{{URL::asset('mobel/css/buy/head.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('mobel/css/buy/total.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('mobel/css/buy/list.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('mobel/css/buy/serach.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('mobel/css/buy/brand.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('mobel/css/buy/city.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('mobel/css/buy/app.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('mobel/css/buy/content.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('mobel/css/buy/send.css')}}">
@endsection

@section('content')
<div class="line-list js-list-page">
        <header class="heading">

            <a class="icon-home" href="{{route('mobel.index')}}">首页</a>
            <div class="box-size">
                <div class="top-nav">
                    <a class="tcity"  href="javascript:void(0);" >石家庄<i class="arrow-down"></i></a>
                    <div class="tsearch">
                        搜索您想要的车
                    </div>
                </div>
            </div>
        </header>
        <!--sell banner-->
        <!-- filter start -->
        <div class="filter">
            <nav class="filter-nav">
                <a class="nav-item brand" href="javascript:void(0);">品牌</a>
                <a class="nav-item price" href="javascript:void(0);">价格</a>
                <a class="nav-item option" href="javascript:void(0);">更多筛选</a>
            </nav>
            <div class="filter-box" id="filter-price">
                <ul class="lab-list" data-urlKey="p">
                    @foreach($price_with_url as $key=>$price)
                    <li class="js-single-option" data-urlVal='0'>
                        <a href="{{$price['url']}}">{{$price['content']}}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="filter-result">
            <ul class="mod-tags fl">
                <a href="javascript:void(0);">
                    <li>16-20万<i class="icon-close"></i></li>
                </a>
                <a href="javascript:void(0);">
                    <li>16-20万<i class="icon-close"></i></li>
                </a>
                <li class="btn-reset"><a class="icon-reset" href="javascript:void(0);">重置</a></li>
            </ul>
            <a class="nav-subscribe" href="javascript:void(0);">订阅</a>
            </div>
        </div>
        <!-- filter end -->
        <div class="loading"><i class="icon-load01"></i>松开可以刷新</div>
        <!-- 行列表 start -->
        <section class="mod-list js-car-list">
            <!-- <div class="find-num bg-shadow active">共为您找到2312辆车</div> -->
            <ul class="list">
                <li class="list-item" data-type=city>
                    <a class="car-info" href="javascript:void(0);">
                        <div class="car-img">
                            <img class="js-lazy-load" src="http://www.sjztcl.com/uploads/car/201709/images/mmexport1504749705099副本爱奇艺.jpg" alt="日产阳光 2011款 1.5XL CVT豪华版">
                        </div>
                        <h3 class="car-name">日产阳光 2011款 1.5XL CVT豪华版</h3>
                        <div class="car-km">
                            <span class="fl">2011年/6.7万公里</span>
                        </div>
                        <div class="car-price">
                            <i class="finance-price">4.39万</i>
                        </div>
                    </a>
                </li>
                
                
                <li class="list-item" data-type=city>
                    <a class="car-info" href="javascript:void(0);">
                        <div class="car-img">
                            <img class="js-lazy-load" src="http://www.sjztcl.com/uploads/car/201709/images/mmexport1504749705099副本爱奇艺.jpg" alt="日产阳光 2011款 1.5XL CVT豪华版">
                        </div>
                        <h3 class="car-name">日产阳光 2011款 1.5XL CVT豪华版</h3>
                        <div class="car-km">
                            <span class="fl">2011年/6.7万公里</span>
                        </div>
                        <div class="car-price">
                            <i class="finance-price">4.39万</i>
                        </div>
                    </a>
                </li>
            </ul>
        </section>
        <!-- 一键订阅 start -->
        
        <!-- 一键订阅 end -->
        <!-- 行列表 end -->
        <!-- 一键订阅浮层 start -->
        
        <!-- 一键订阅浮层 end -->
        <!-- 相关车系 start -->
        <div class="js-relate-div" style="width: 100%;height: 30px;"></div>
        <!-- 相关车系 end -->
        <!-- 周边城市车源 start -->
        <div style="display: none;" class="js-pre-around"></div>
        <!-- 周边城市车源 end -->  
    </div>
<!--用户注册-->
<div class="mask " id="user-mask"></div>


<div class="popup-mobile  js-user-div" data-reload="0">
    <p class="pop-tit">手机号验证</p>
    <p class="pop-text">留下您的手机号，我们才能及时通知您新车上架哦~</p>
    <p class="pop-ipt">
        <input class="box-size js-user-phone" type="tel" placeholder="请输入您的手机号">
        <button class="btn-code js-user-register" type="button">获取验证码</button>
    </p>
    <p class="pop-ipt mt10"><input class="box-size js-user-code" type="tel" placeholder="请输入验证码"></p>
    <p class="pop-error"><span class="js-waring-notice" style="display: none;">验证码错误</span></p>
    <div class="pop-btn js-user-check">
        <button class="btn btn-cancel" type="button">取消</button>
        <button class="btn btn-sure" type="button">提交</button>
    </div>
</div>

<!-- search end -->






<!--更多筛选-->

<div class="filter-wrap js-choose-option" style="display: none;">
    <header class="heading2" style="z-index: 98;">
        <a class="icon-close js-close-option" href="javascript:void(0);">关闭</a>
        <h1>筛选</h1>
        <a class="icon-reset2 js-reset-option" id="mor_condition_clean" href="javascript:void(0);">重置</a>
    </header>
    <div class="filter-main">
        <!-- 车型 start -->
            <section class="filter-section" data-urlKey="t">
                <h3 class="subtit">车型</h3>
                <ul class="type-car clearfix js-single-item">
                    @foreach($category_type_mobel as $key=>$cate)
                    <li class=" js-multi-option" data-urlVal={{$key}} >
                        <a href="javascript:void(0);">
                            <i class="icon-car icon-{{$cate['des']}}"></i>
                            {{$cate['name']}}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </section>
            <!-- 变速箱 start -->
            <section class="filter-section"  data-urlKey="d">
                <h3 class="subtit">变速箱</h3>
                <ul class="lab-list">
                    @foreach($gearbox as $key=>$gear)
                    <li class="js-multi-option" data-urlVal='{{$key}}'>
                        <a href="javascript:void(0);">{{$gear}}</a>
                    </li>
                    @endforeach
                </ul>  
            </section>
        
        <!-- 车龄刻度 start -->
            <section class="filter-section" data-urlKey="a" data-logkey="cheling">
            <div class="range-title">
                <h3 class="fl">车龄要求</h3>
                <ul class="lab-list">
                    @foreach($age as $key=>$ag)
                    <li class=" js-multi-option" data-urlVal='{{$key}}'>
                        <a href="javascript:void(0);">{{$ag}}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </section>
                <!-- 里程刻度 start -->
        <!-- <section class="filter-section" data-urlKey="g" data-logkey="road_haul">
            <div class="range-title">
                <h3 class="fl">行驶里程</h3>
                <ul class="lab-list">
                    <li class=" js-multi-option" >
                        <a href="javascript:void(0);"> 1-3年</a>
                    </li>
                    <li class=" js-multi-option">
                        <a href="javascript:void(0);">3-5年</a>
                    </li>
                    <li class=" js-multi-option">
                        <a href="javascript:void(0);">5年以上</a>
                    </li>
                </ul>
            </div>
        </section> -->
                <!-- 排量刻度 start -->       
        <!-- 座位数 start -->
                
                <!-- 排放标准 start -->
                
        <!-- 颜色 start -->
        <section class="filter-section" data-urlKey="y">
            <h3 class="subtit">颜色</h3>
            <ul class="lab-list">
                @foreach($out_color_mobel as $key=>$color)
                <li class="js-multi-option" data-urlVal={{$key}}>
                    <a href="javascript:void(0);"><i class="icon-color icon-{{$color['des']}}"></i>
                        {{$color['name']}}
                    </a>
                </li>
                @endforeach
                
            </ul>        
        </section>
    <!-- 燃油 start -->               
    <!-- 国别 start -->

    <!-- 门店 start -->
    <section class="filter-section" data-urlKey="s" data-logkey="shop">
        <div class="range-title">
            <h3 class="fl">门店</h3>
            <ul class="lab-list">
                <li class=" js-multi-option" data-urlVal='0'>
                    <a href="javascript:void(0);">不限</a>
                </li>
                @foreach($all_shop as $shop)
                <li class=" js-multi-option" data-urlVal='{{$shop->id}}'>
                    <a href="javascript:void(0);">{{$shop->name}}</a>
                </li>
                @endforeach
                
            </ul>
        </div>
    </section>             
</div>
    <div class="result-fixed">
        <!-- <p>已选条件共<strong>2312</strong>辆车</p> -->
        <a class="btn js-submit-option" id="search_car" href="javascript:void(0);">搜索</a>
    </div>
</div>
<!-- 筛选页 end --><!-- app-pub-->

<!-- <div class="tiplayer" id="errorDis"><span class="textcon" id="errorCont">提交失败</span></div> -->
@endsection
@section('script_content')
<!-- <script type="text/javascript" src="{{URL::asset('mobel/js/base.js')}}"></script> -->
<!-- <script type="text/javascript" src="{{URL::asset('mobel/js/list.js')}}"></script> -->
<!-- <script type="text/javascript" src="{{URL::asset('mobel/js/content/script.js')}}"></script> -->
<!-- <script type="text/javascript" src="{{URL::asset('mobel/js/script.js')}}"></script> -->
<script>
    $(document).ready(function(){

        $('a.price').click(function(event) {
            // 价格筛选
            var filter_price = $('#filter-price');
            if(filter_price.hasClass('active')){
                filter_price.removeClass('active');
            }else{
                filter_price.addClass('active');
            }
        });

        $('a.option').click(function(event) {
            /* 其他筛选*/
            var option_obj   = $('.js-choose-option');
            var filter_price = $('#filter-price');
            // console.log(option_obj);
            $('.js-list-page').hide();
            filter_price.removeClass('active');
            option_obj.show();
        });

        $('a.js-close-option').click(function(event) {
            /* 关闭其他筛选 */
            var option_obj   = $('.js-choose-option');
            var filter_price = $('#filter-price');
            // console.log(option_obj);
            // 
            $('.js-list-page').show();
            filter_price.removeClass('active');
            option_obj.hide();
        });

        $('a.brand').click(function(event) {
            /* 品牌筛选 */
            var current_url  = window.location.href; //当前URL
            var redirect_url = current_url + '?act=changeBrand';
            // alert(current_url);
            // alert(redirect_url);

             window.location.href = redirect_url;
        });

        $('.js-multi-option').click(function(){
            // 其他条件筛选
            if($(this).hasClass('active')){

                $(this).removeClass('active');
            }else{

                $(this).addClass('active');
                $(this).siblings().removeClass('active');
            }
            
        });

        $('#search_car').click(function(event) {
            /* 搜索车源*/
            var condition_brand  = '{{$condition_brand}}'; //车型筛选条件
            var redirect_url     = "{{route('mobel.cate.index')}}/" + condition_brand;
            var chosen_url       = '';

            $('.js-multi-option').each(function(index, el) {
                if($(this).hasClass('active')){
                    /*console.log($(this).attr('data-urlval'));
                    console.log($(this).parents('section').attr('data-urlkey'));
                    console.log('----');*/
                    chosen_url += $(this).parents('section').attr('data-urlkey');
                    chosen_url += $(this).attr('data-urlval');
                    chosen_url += '-';
                }
            });
            chosen_url = chosen_url.substring(0,(chosen_url.length-1));
            // console.log(chosen_url);
            if(condition_brand.length != 0){
               redirect_url += '/'; 
            }           
            redirect_url += chosen_url;
            // console.log(redirect_url);
            window.location.href = redirect_url;
        });

        $('#mor_condition_clean').click(function(event) {
            /* 重置筛选条件 */
            $('.js-multi-option').each(function(index, el) {
                $(this).removeClass('active');
            });
        });
    });
</script>
@endsection