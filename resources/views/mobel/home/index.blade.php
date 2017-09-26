@extends('mobel.main')

@section('title')
    
@endsection

@section('head_content')
    <link type="text/css" rel="stylesheet" href="{{URL::asset('mobel/css/content.css')}}">  
    <link type="text/css" rel="stylesheet" href="{{URL::asset('mobel/css/footer.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('mobel/css/indexHead.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('mobel/css/logo.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('mobel/css/home.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('mobel/css/serach.css')}}">
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
            <div class="search-ipt" data-role="vehicleSearch">搜索您想要的车</div>
        </div>
    </header>
    <section class="DoesNotContainCity">
        <div class="focus lazyload" id="slide_banner" data-interval="3000">
            <ul class="focus-pics" data-role="list" style="width: 500%;">
                <li data-role="item">
                    <a href="">
                        <img data-role="lazyloadImg" src="http://www.sjztcl.com/home/img/index/dbfile/kaiye.png" alt="">
                    </a>
                </li>
                <li data-role="item">
                    <a href="">
                        <img data-role="lazyloadImg" src="http://www.sjztcl.com/home/img/index/dbfile/slider.png" alt="">
                    </a>
                </li>
                <li data-role="item">
                    <a href="">
                        <img data-role="lazyloadImg" src="http://www.sjztcl.com/home/img/sell/dbfile/11111.png" alt="">
                    </a>
                </li>
                <li data-role="item" >
                    <a href="">
                        <img data-role="lazyloadImg" src="http://www.sjztcl.com/home/img/index/dbfile/kaiye.png" alt="">
                    </a>
                </li>
                <li data-role="item">
                    <a href="">
                        <img data-role="lazyloadImg" src="http://www.sjztcl.com/home/img/index/dbfile/slider.png" alt="">
                    </a>
                </li>
            </ul>
            <div class="focus-indexs" id="focusIndexs">
                <i data-slide-to="0" class="active"></i>
                <i data-slide-to="1"></i>
                <i data-slide-to="2"></i>
                <i data-slide-to="3"></i>
                <i data-slide-to="4"></i>
            </div>
        </div>
        <!-- column start -->
        <div class="column">
            <ul class="list row-four">
                @foreach($price_interval_mobel as $key=>$price)
                <li class="list-item">
                    <a href="javascript:void(0);">
                    {{$price}}
                    </a>
                </li>
                @endforeach
                            
            </ul>
            <ul class="list row-seven brand clearfix">
                @foreach($recomment_brands as $key=>$brand)
                @if($key < 7)
                <li class="list-item" data-url="url={{substr($brand->logo_img, 0, -4)}}">
                    <a href="" >
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
            <li><a href="{{route('mobel.cate.index')}}">免费卖车</a></li>
        </ul>
        
        <!-- 根据开通城市接口 三选一频道入口  start-->
        <div class="blank"></div>
        <div class="entrance three">
            <ul class="clearfix">
                <li id="j-finance" data-gzlog="tracking_type=click&eventid=1110200000000035">
                    <a href="http://m.jr.guazi.com/?jr_from=homepagemodule1&platform=wap" class="entry-loan-box">
                        <p class="entry-title">淘车乐金融</p>
                        <p class="entry-text">付三成 开好车</p>
                    </a>
                </li>
                <li id="j-baoMai" data-gzlog="tracking_type=click&eventid=1110200000000036">
                    <a href="https://m.guazi.com/misc/BaoMaiDes" class="entry-self-box">
                        <p class="entry-title">淘车乐寄售</p>
                        <p class="entry-text">限时出售 性价比高</p>
                    </a>
                </li>
                <li id="j-xinChe" data-gzlog="tracking_type=click&eventid=1110200000000037">
                    <a href="http://xinche.guazi.com/www/fyc" class="entry-new-box">
                        <p class="entry-title">淘车乐车源</p>
                        <p class="entry-text">真实车源 诚信可靠</p>
                    </a>
                </li>
            </ul>
        </div>
        <!-- 根据开通城市接口 三选一频道入口  end-->
        <div class="blank"></div>
        <!-- 广告位图 -->
 
        <div class="tabbox">
            <ul class="tabnav" id="tab">
                <li class="on" data-gzlog="tracking_type=click&eventid=1110200000000025"><a href="javascript:;">好车推荐</a></li>
                <!-- <li class="" data-gzlog="tracking_type=click&eventid=1110200000000026"><a href="javascript:;">保卖车</a></li> -->
                <!-- <li class="" data-gzlog="tracking_type=click&eventid=1110200000000027"><a href="javascript:;">降价急售</a></li> -->
            </ul>
            <div class="tabcon lazyload" id="tabcon">
                <ul class="on j-recommend-show">
                    @foreach($cars as $key=>$car)
                    <li class="list-item" >
                        <a class="car-info" href="javascript:void(0);">
                            @if(isset($cars->hasOneImagesOnFirst->filename))
                                <div class="car-img">
                                    <img data-role="lazyloadImg" class="js-lazy-load" src="{{URL::asset('uploads/car/'.$cars->hasOneImagesOnFirst->filename)}}"  alt="{{$car->name}}">
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
                    
                </ul>
            </div>
        </div>
    </section>
@endsection

@section('footer_content')
    @include('mobel.footer')
@endsection

@section('script_content')
    <script type="text/javascript" src="{{URL::asset('mobel/js/index.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('mobel/js/content/script.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('mobel/js/script.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('mobel/js/ExtensionContent.jsm')}}"></script>
    <script>
        $(document).ready(function(){

            // alert('阿拉曼');
        });
    </script>
@endsection