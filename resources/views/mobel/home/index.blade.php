@extends('mobel.main')

@section('title')
    
@endsection

@section('head_content')
    <link type="text/css" rel="stylesheet" href="{{URL::asset('mobel/css/content.css')}}"> 
    <link type="text/css" rel="stylesheet" href="{{URL::asset('mobel/css/buy/dingyue.css')}}"> 
    <link type="text/css" rel="stylesheet" href="{{URL::asset('mobel/css/footer.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('mobel/css/indexHead.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('mobel/css/logo.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('mobel/css/home.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('mobel/css/serach.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('mobel/css/swipeslider.css')}}">
    <style>
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
        .sw-bullet { 

            bottom: .05rem;
        }
    </style>
@endsection

@section('content')
<!-- 头部搜索框 -->
<header class="heading search-box" style="display:none;" id="search_list" data-id="1" data-domain="sjz" >
        <a class="icon-close js-close-search" href="javascript:void(0);">取消</a>
        <form action="" data-role="searchForm">
            <div class="box-size">
                <div class="top-nav">
                    <input id="search_input" class="ipt" type="search" data-role="input" data-init="0">
                    <a class="icon-close" href="javascript:void(0);" autocomplete="off" data-role="cleanValue">关闭</a>
                </div>
            </div>
            <button class="icon-search" type="button" data-role="search"></button>
        </form>
        <div class="search-result active" id="search_history">
            <ul class="row-list history-list" data-role="hotList" data-gzlog="tracking_type=click&eventid=1110200000000023"></ul>
            <a href="javascript:void(0);" class="history-clear active" data-gzlog="tracking_type=click&eventid=0230220000000102">清除历史记录</a>
        </div>
        <div class="blank"></div>
        <div class="search-hot" style="display: none;">
            <h3>热销车系：</h3>
            <ul class="lab-list">
                <li><a href="javascript:void(0);">x5</a></li>
            </ul>
        </div>
</header>
    <!-- search end -->
    <header class="head-index">
        <a class="gz-logo fl" href="javascript:void(0);" ></a>
        <div class="gz-search" id="open_search">
            <a href="{{route('mobel.changeCity')}}" class="local-city" >{{$show_city_name}}</a>
            <!-- <div class="search-ipt" data-role="vehicleSearch">搜索您想要的车</div> -->
        </div>
    </header>
    
    <section class="DoesNotContainCity">
        <div class="focus lazyload" id="slide_banner" data-interval="3000">
            <!-- <ul class="focus-pics sw-slides" data-role="list" style="width: 500%;">
                <li class="sw-slide" data-role="item">
                    <a href="">
                        <img data-role="lazyloadImg" src="http://www.sjztcl.com/home/img/index/dbfile/kaiye.png" alt="">
                    </a>
                </li>
                <li class="sw-slide" data-role="item">
                    <a href="">
                        <img data-role="lazyloadImg" src="http://www.sjztcl.com/home/img/index/dbfile/slider.png" alt="">
                    </a>
                </li>
                <li class="sw-slide" data-role="item">
                    <a href="">
                        <img data-role="lazyloadImg" src="http://www.sjztcl.com/home/img/sell/dbfile/11111.png" alt="">
                    </a>
                </li>
                <li class="sw-slide" data-role="item" >
                    <a href="">
                        <img data-role="lazyloadImg" src="http://www.sjztcl.com/home/img/index/dbfile/kaiye.png" alt="">
                    </a>
                </li>
            </ul> -->
            <figure id="full_feature" class="swipslider" style="height:1.5rem;">
                <ul class="sw-slides">
                    <li class="sw-slide">
                        <img style="height:90%;" src="{{URL::asset('mobel/images/kaiye.png')}}" alt="Summer beach concept">
                    </li>
                    <li class="sw-slide">
                        <img style="height:90%;" src="{{URL::asset('mobel/images/slider.png')}}" alt="Lang from Yie Ar Kung Fu">
                    </li>
                    <li class="sw-slide">
                        <img style="height:90%;" src="{{URL::asset('mobel/images/11111.png')}}" alt="Tiny Tina">
                    </li>
                    <!-- <li class="sw-slide">
                        <img src="{{URL::asset('newShow/images/banner4.png')}}" alt="Tiny Tina from Borderlands 2">
                    </li> -->
                </ul>
            </figure>
            <!-- <div class="focus-indexs" id="focusIndexs">
                <i data-slide-to="0" class="active"></i>
                <i data-slide-to="1"></i>
                <i data-slide-to="2"></i>
                <i data-slide-to="3"></i>
            </div> -->
        </div>
        <!-- column start -->
        <div class="column">
            <ul class="list row-four">
                @foreach($price_interval_mobel as $key=>$price)
                <li class="list-item">
                    <a href="{{route('mobel.cate.index')}}/p{{$key}}@if(isset($chose_city))/d{{$chose_city}} @endif">
                    {{$price}}
                    </a>
                </li>
                @endforeach           
            </ul>
            <ul class="list row-seven brand clearfix">
                @foreach($recomment_brands as $key=>$brand)
                @if($key < 7)
                <li class="list-item" data-url="url={{substr($brand->logo_img, 0, -4)}}">
                    <a href="{{route('mobel.cate.index')}}/b{{$brand->id}}@if(isset($chose_city))/d{{$chose_city}} @endif" >
                        <i class="icon icon-{{substr($brand->logo_img, 0, -4)}}"></i>
                        {{$brand->name}}
                    </a>
                </li>
                @endif
                @endforeach
            </ul>
        </div>
        <!-- column end -->
        <ul class="buttonbox cleafix">
            <li><a href="{{route('mobel.cate.index')}}">我要买车</a></li>
            <li><a href="{{route('mobel.sale.index')}}">免费卖车</a></li>
        </ul>
        
        <!-- 根据开通城市接口 三选一频道入口  start-->
        <div class="blank"></div>
        <div class="entrance three">
            <ul class="clearfix">
                <li id="j-finance">
                    <a href="javascript:void(0);" class="entry-loan-box">
                        <p class="entry-title">淘车乐金融</p>
                        <p class="entry-text">付三成 开好车</p>
                    </a>
                </li>
                <li id="j-baoMai">
                    <a href="javascript:void(0);" class="entry-self-box">
                        <p class="entry-title">淘车乐寄售</p>
                        <p class="entry-text">限时出售 性价比高</p>
                    </a>
                </li>
                <li id="j-xinChe">
                    <a href="javascript:void(0);" class="entry-new-box">
                        <p class="entry-title">淘车乐车源</p>
                        <p class="entry-text">真实车源 诚信可靠</p>
                    </a>
                </li>
            </ul>
        </div>
        <!-- 根据开通城市接口 三选一频道入口  end-->
        <div class="blank"></div>
        <!-- 广告位图 -->
        @if($cars->count() != 0)
        <div class="tabbox">
            <ul class="tabnav" id="tab">
                <li class="on"><a href="javascript:;">好车推荐</a></li>
                <!-- <li class="" data-gzlog="tracking_type=click&eventid=1110200000000026"><a href="javascript:;">保卖车</a></li> -->
                <!-- <li class="" data-gzlog="tracking_type=click&eventid=1110200000000027"><a href="javascript:;">降价急售</a></li> -->
            </ul>
            <div class="tabcon lazyload" id="tabcon">
                <ul class="on j-recommend-show">
                    @foreach($cars as $key=>$car)
                    <li class="list-item" >
                        <a class="car-info" target="_blank" href="{{route('mobel.car.index', ['car'=>$car->id])}}">
                            @if(isset($car->hasOneImagesOnFirst->filename))
                                <div class="car-img">
                                    <img data-role="lazyloadImg" class="js-lazy-load" src="{{URL::asset('uploads/car/'.$car->hasOneImagesOnFirst->filename)}}"  alt="{{$car->name}}">
                                </div>
                            @else
                            <div class="car-img">
                                <img data-role="lazyloadImg" class="js-lazy-load" src="{{URL::asset('images/default.jpg')}}"  alt="{{$car->name}}">
                            </div>
                            @endif
                            <h3 class="car-name">{{$car->name}}</h3>
                            <div class="car-km">
                                <span class="fl">{{$car->plate_date}}年/{{$car->mileage}}万公里</span> </div>
                            <div class="car-price">
                                <strong class="fl">{{$car->top_price}}万</strong>
                            </div>
                            <!-- <p class="page-size" style="display: none">1/50</p> -->
                        </a>
                    </li>
                    @endforeach
                    <li class="list-item">
                        <div class="btnbox">
                            <a href="{{route('mobel.cate.index')}}" class="btnwhite">查看更多车源</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        @else
        <!-- 行列表 start -->
        <div class="subs-notip">无符合条件车源</div>
        <!-- 行列表 end -->
        <!-- 一键订阅浮层 start -->
        <div>
            <section class="filter-section filter-subslist" style="padding:15px;">
                <!-- <div class="input-border" style="width:50%;display: inline-block;">
                    {!! csrf_field() !!}
                    <input class="j-input-phone" name="request_url" type="hidden" value="{{route('mobel.sale.store')}}">
                    <input class="j-input-phone input-phone" name="mobile" type="text" placeholder="请输入手机号码" />
                
                </div> -->
                <!-- <button class="btn" id="storeInfo" style="display: inline-block;width:30%">一建提交</button> -->
                <a class="btn btn-add js-submit-option" style="width:100%;" href="{{route('mobel.index')}}/city/138">
                    浏览其他城市车源
                </a>
            </section>
        <!-- 订阅里程 start -->
            <!-- <div class="form-btn">
                <a class="btn btn-add js-submit-option"  href="javascript:void(0);">
                    一键提交
                </a>
            </div> -->
            <!-- <div class="toast js-sub-notice">提交成功</div> -->
        </div>
    @endif
    </section>
    
@endsection

@section('footer_content')
    @include('mobel.footer')
@endsection

@section('script_content')
    <!-- <script type="text/javascript" src="{{URL::asset('mobel/js/base.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('mobel/js/index.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('mobel/js/content/script.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('mobel/js/script.js')}}"></script> -->
    <script type="text/javascript" src="{{URL::asset('mobel/js/dingyue.js')}}"></script>
    <script src="{{URL::asset('mobel/js/common/swipeslider.js')}}"></script>
    <script>
        $(document).ready(function(){

            $('#full_feature').swipeslider();
        });
    </script>
    
@endsection