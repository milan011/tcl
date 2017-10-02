@extends('mobel.main')

@section('title')
    
@endsection

@section('head_content')
    <link type="text/css" rel="stylesheet" href="{{URL::asset('mobel/css/buy/head.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('mobel/css/buy/total.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('mobel/css/buy/list.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('mobel/css/buy/dingyue.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('mobel/css/buy/serach.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('mobel/css/buy/brand.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('mobel/css/buy/city.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('mobel/css/buy/app.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('mobel/css/buy/content.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('mobel/css/buy/send.css')}}">

    <style>
        .btngreen{
            background-color: gray;
            border: 1px solid #22ac38;
            height: 1.4rem;
            line-height: 1.4rem;
            display: block;
            text-align: center;
            color: #fff;
            font-size: 1.0rem;
            border-radius: .02rem;
            -webkit-border-radius: .02rem;
        }
        
        .btnbox{
            margin: 5px auto;
            width: 50%;
        }
        #prev_page{
            width: 45%;
            float: left;
        }

        #next_page{
            width: 45%;
            float: right;
        }

        .input-border{
            box-sizing: border-box;
            border: 1px solid #e0e0e0;
        }

        .input-phone{
            height: 42px;
            box-sizing: border-box;
            padding: 10px;
            font-size: 15px;
            color: #333;
            width: 100%;
        }

        .line-list {
            padding-bottom: 1rem;
        }
    </style>
@endsection

@section('content')
<div class="line-list js-list-page">
        <header class="heading">

            <a class="icon-home" href="{{route('mobel.index')}}">首页</a>
            <div class="box-size">
                <div class="top-nav">
                    <a class="tcity"  href="{{route('mobel.changeCity')}}" >{{$show_city_name}}<i class="arrow-down"></i></a>
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
                    @if($key < 10)
                    <li class="js-single-option" data-urlVal='0'>
                        <a href="{{$price['url']}}">{{$price['content']}}</a>
                    </li>
                    @endif
                    @endforeach
                </ul>
            </div>
            <div class="filter-result">
            <ul class="mod-tags fl">
                @foreach($current_condition as $key=>$condition)
                <a href="{{$condition['url']}}">
                    <li>{{$condition['content']}}<i class="icon-close"></i></li>
                </a>
                @endforeach
                <li class="btn-reset"><a class="icon-reset" href="{{route('mobel.cate.index')}}">重置</a></li>
            </ul>
            <!-- <a class="nav-subscribe" href="javascript:void(0);">订阅</a> -->
            </div>
        </div>
        <!-- filter end -->
        <div class="loading"><i class="icon-load01"></i>松开可以刷新</div>
        <!-- 行列表 start -->
        <section class="mod-list js-car-list">
            <!-- <div class="find-num bg-shadow active">共为您找到2312辆车</div> -->

            <ul class="list">
                @foreach($cars as $key=>$car)
                <li class="list-item" data-type=city>
                    <a class="car-info" target="_blank" href="{{route('mobel.car.index', ['car'=>$car->id])}}">
                        <div class="car-img">
                            @if(isset($car->hasOneImagesOnFirst->filename))
                                <img src="{{URL::asset('uploads/car/'.$car->hasOneImagesOnFirst->filename)}}" alt="{{$car->name}}">
                            @else
                                <img src="{{URL::asset('images/default.jpg')}}" alt="" />
                            @endif
                        </div>
                        <h3 class="car-name">{{$car->name}}</h3>
                        <div class="car-km">
                            <span class="fl">{{$car->plate_date}}年/{{$car->mileage}}万公里</span>
                        </div>
                        <div class="car-price">
                            <i class="finance-price">{{$car->top_price}}万</i>
                        </div>
                    </a>
                </li>
                @endforeach

                <li class="list-item" style="margin-top:10px;">
                    <div class="btnbox">
                    @if($cars->currentPage() > 1)
                        <a id="prev_page" href="{{$cars->previousPageUrl()}}" class="btngreen">上一页</a>
                    @endif
                    @if($cars->hasMorePages())
                        <a id="next_page" href="{{$cars->nextPageUrl()}}" class="btngreen">下一页</a>
                    @endif
                    </div>
                </li>
            </ul>
        </section>
        <!-- 一键订阅 start -->
        
        <!-- 一键订阅 end -->
        @if($cars->count() == 0)
        <!-- 行列表 start -->
        <div class="subs-notip">无符合条件车源,您可留下联系方式,我们会为您留意</div>
        <!-- 行列表 end -->
        <!-- 一键订阅浮层 start -->
        <div class="subscribe-form">
            <section class="filter-section filter-subslist" style="padding:15px;">
                <div class="input-border">
                    {!! csrf_field() !!}
                    <input class="j-input-phone" name="request_url" type="hidden" value="{{route('mobel.sale.store')}}">
                    <input class="j-input-phone input-phone" name="mobile" type="text" placeholder="请输入手机号码" />
                </div>
            </section>
        <!-- 订阅里程 start -->
            <div class="form-btn">
                <a class="btn btn-add js-submit-option" id="storeInfo" href="javascript:void(0);">
                    一键提交
                </a>
            </div>
            <div class="toast js-sub-notice">提交成功</div>
        </div>
        @endif
        <!-- 一键订阅浮层 end -->
        <!-- 相关车系 start -->
        <div class="js-relate-div" style="width: 100%;height: 30px;"></div>
        <!-- 相关车系 end -->
        <!-- 周边城市车源 start -->
        <div style="display: none;" class="js-pre-around"></div>
        <!-- 周边城市车源 end -->  
    </div>
<!--用户注册-->
<!-- <div class="mask " id="user-mask"></div> -->


<!-- <div class="popup-mobile  js-user-div" data-reload="0">
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
</div> -->

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
            <section class="filter-section"  data-urlKey="x">
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
            <!-- <div class="range-title"> -->
                <h3 class="fl">车龄要求</h3>
                <ul class="lab-list">
                    @foreach($age as $key=>$ag)
                    <li class=" js-multi-option" data-urlVal='{{$key}}'>
                        <a href="javascript:void(0);">{{$ag}}</a>
                    </li>
                    @endforeach
                </ul>
            <!-- </div> -->
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
<script type="text/javascript" src="{{URL::asset('mobel/js/dingyue.js')}}"></script>
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
            var redirect_url = '';

            if(current_url.indexOf("?") > 0 ){
                redirect_url = current_url + '&act=changeBrand';
            }else{
                redirect_url = current_url + '?act=changeBrand';
            }

            /*alert(redirect_url);
            return false;*/
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
            var price_conditon   = "{{$price_condition}}";
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
            if(price_conditon.length != 0){
               redirect_url += price_conditon; 
               redirect_url += '-'; 
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