@extends('mobel.main')

@section('title')
    
@endsection

@section('head_content')
    <link type="text/css" rel="stylesheet" href="{{URL::asset('mobel/css/carInfo/common.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('mobel/css/carInfo/swipe.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('mobel/css/carInfo/report.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('mobel/css/carInfo/server.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('mobel/css/carInfo/footer.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('mobel/css/carInfo/content.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('mobel/css/carInfo/serv.css')}}">
    <style>
        
    </style>
@endsection

@section('content')
<section class="detail">
        <!-- header -->
        <div class="topnav-embed active">
            <a class="head-back" href="javascript:history.go(-1);">
                <!--返回-->
            </a>
        </div>
        <!-- 悬浮head -->
       
        <div class="main-layout">
            <div id="detailInfo" class="layout-item active  posout">
                <!-- 轮播 -->
                <div class="thumb-houseimg-box thumb-auto" data-loop="noloop" data-interval="3000" id="responsiveBanner">
                    <!--图片列表（针对ios设备适配retina屏幕） -->
                    <ul class="slide-area" data-role="list">
                        @foreach($images as $image)
                        <li data-role="item" class="wap_detail_image_size">
                            <a href="javascript:void(0);" >
                                <img src="{{URL::asset('uploads/car/'.$image->filename)}}">
                            </a>
                        </li>
                        @endforeach
                    </ul>
                    <!--图片序号-->
                    <!-- <span class="thumb-img-numcar">车源号 <i>HC-16023691</i></span> -->
                </div>
                <div class="product-head showNotice">
                    <h1 class="product-title">
                        {{$cars->name}}
                    </h1>
                    <div class="carmaster-price">
                        车主报价<span class="number-price">{{$cars->top_price}}万</span>
                    </div>
                </div>
                
                <div class="blank" style="margin: .06rem 0;"></div>
                <div class="column base-info" data-widget="">
                    <a href="javascript:;" class="column-head">
                        <div class="column-title">基本信息</div>
                    </a>
                    <ul class="mod-base showNotice">
                        <li>
                            <span>表显里程</span>
                            <p>{{$cars->mileage}}万公里</p>
                        </li>
                        <li>
                            <span>上牌地</span>
                            <p>{{$cars->belongsToShop->belongsToArea->city_name}}</p>
                        </li>
                        <li>
                            <span>变速箱</span>
                            <p>{{$gearbox[$cars->gearbox]}}</p>
                        </li>
                        <li>
                            <span>过户次数</span>
                            <p>{{$sale_number[$cars->sale_number]}}</p>
                        </li>
                        
                        <li>
                            <span>排量</span>
                            <p>{{$capacity[$cars->capacity]}}</p>
                        </li>
                        <li>
                            <span>上牌时间</span>
                            <p>{{$cars->plate_date}}</p>
                        </li>
                    </ul>
                </div>
                <div class="diverman-say">
                    <a href="javascript:;" class="column-head">
                        <div class="column-title">车辆介绍</div>
                    </a>
                    <div class="prob-list">
                        <p>{{$cars->description}}</p>
                    </div>
                </div>
                <div id="xiangqing" class="third-content layout-item active" style="transform: translate3d(0px, 0px, 0px);">
                    <div class="third-tab active">
                        <div class="column-body product-img lazyload">
                            @foreach($images as $image)
                            <a href="javascript:void(0);">
                                <img class="wap_detail_image_size" data-role="lazyloadImg" src="{{URL::asset('uploads/car/'.$image->filename)}}">
                            </a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- 检测报告 -->
                
                <!-- 常见问题 start -->
                
                <!-- 常见问题 end -->
                <!-- 同车系成交记录 -->
                
                <!-- 同车系成交记录 end -->
                <!-- 猜你喜欢 -->
                <div class="column product-picture line-list j-recommend-show">
                    <div class="column-head">
                        <div class="column-title">猜你喜欢</div>
                    </div>
                    <div class="column-body">
                        <ul class="list">
                            @foreach($recommend_cars as $rcar)
                            <li class="list-item">
                                <a href="{{route('mobel.car.index', ['car'=>$rcar->id])}}" class="car-info">
                                    <div class="car-img">
                                        <img class="js-lazy-load" src="{{URL::asset('uploads/car/'.$rcar->hasOneImagesOnFirst->filename)}}"/>
                                    </div>
                                    <h3 class="car-name">{{$rcar->name}}</h3>
                                    <div class="car-km">
                                        <span class="fl">{{$rcar->plate_date}}年/{{$rcar->mileage}}万公里/{{$gearbox[$rcar->gearbox]}}</span>
                                    </div>
                                    <div class="car-price"><strong class="fl">{{$rcar->top_price}}<span>万元</span></strong></div>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- <div class="drag-up-more">
                    <div class="drag-up-more-content">
                        上拉查看图文详情
                    </div>
                    <div class="drag-up-more-arrow">
                        <div class="drag-up-more-arrowChild"></div>
                    </div>
                </div> -->
                <!--<div class="drag-more">-->
                <!--继续拖动，查看图文详情-->
                <!--</div>-->
            </div>
            <!-- <input type="hidden" value="1" id="isBianlianPro" /> -->
        </div>
    </section>
@endsection

@section('script_content')
<script type="text/javascript" src="{{URL::asset('mobel/js/base.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('mobel/js/detail.js')}}"></script>
@endsection