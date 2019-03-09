@extends('mobel.main')

@section('title')
    <title>{{$title}}</title>
    <meta name="keywords" content="二手车,二手车交易市场,二手车网上交易平台,石家庄二手车，石家庄淘车乐,石家庄二手车交易平台，石家庄二手车交易">
    <meta name="description" content="{{$meta_des}}">
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
        .btnbox {
            padding: 0 .15rem;
            text-align: center;
        }
        .btnwhite {
            background-color: #fff;
            border: 1px solid #bec7ce;
            width: 60%;
            margin: .18rem auto .28rem;
            color: #757f89;
            font-size: .14rem;
            height: .35rem;
            line-height: .35rem;
            display: block;
            -webkit-border-radius:.02rem;
        }
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
                        <span>{{$cars->name}}</span>
                        
                    </h1>
                    <div class="carmaster-price">
                        车主报价<span class="number-price">{{$cars->top_price}}万</span>
                    </div>
                    <div class="carmaster-price">
                        销售顾问:{{$cars->belongsToUser->nick_name or ''}}({{$cars->belongsToShop->shop_name}})
                    </div>
                    <div class="carmaster-price">
                        联系电话:{{$cars->belongsToUser->creater_telephone or $cars->belongsToShop->shop_tele}}
                        &nbsp&nbsp&nbsp&nbsp
                        发布时间:{{substr($cars->created_at, 0 ,10)}}
                    </div>
                    <!-- <div class="carmaster-price">
                        发布时间:{{substr($cars->created_at, 0 ,10)}}
                    </div> -->
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
                <div class="btnbox">
                    <a href="{{route('mobel.cate.index')}}{{$wxShouQuanUrl}}" class="btnwhite">查看更多车源</a>
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
                                <a href="{{route('mobel.car.index', ['car'=>$rcar->id])}}{{$wxShouQuanUrl}}" class="car-info">
                                    <div class="car-img">
                                        @if(isset($rcar->hasOneImagesOnFirst->filename))
                <img src="{{URL::asset('uploads/car/'.$rcar->hasOneImagesOnFirst->filename)}}" onerror="this.src='{{URL::asset("images/default.jpg")}}'" alt="{{$rcar->name}}" />
            @else
                <img src="{{URL::asset('images/default.jpg')}}" alt="" />
            @endif
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
<script type="text/javascript" src="{{URL::asset('mobel/js/jweixin-1.0.0.js')}}"></script>
<script>

        $(document).ready(function(){
            wx.config({
            debug: false,
            appId: '{{$weixsdk["appId"]}}',
            timestamp: {{$weixsdk['timestamp']}},
            nonceStr: '{{$weixsdk["nonceStr"]}}',
            signature: '{{$weixsdk["signature"]}}',
            jsApiList: [
                'checkJsApi',
                'onMenuShareTimeline',
                'onMenuShareAppMessage',
                'onMenuShareQQ',
                'onMenuShareWeibo',
                'hideMenuItems',
                'showMenuItems',
                'hideAllNonBaseMenuItem',
                'showAllNonBaseMenuItem',
                'translateVoice',
                'startRecord',
                'stopRecord',
                'onRecordEnd',
                'playVoice',
                'pauseVoice',
                'stopVoice',
                'uploadVoice',
                'downloadVoice',
                'chooseImage',
                'previewImage',
                'uploadImage',
                'downloadImage',
                'getNetworkType',
                'openLocation',
                'getLocation',
                'hideOptionMenu',
                'showOptionMenu',
                'closeWindow',
                'scanQRCode',
                'chooseWXPay',
                'openProductSpecificView',
                'addCard',
                'chooseCard',
                'openCard'
            ]
        });
    
        wx.ready(function () {
            // 在这里调用 API
            // 1 判断当前版本是否支持指定 JS 接口，支持批量判断
            // document.querySelector('#checkJsApi').onclick = function () {
              wx.checkJsApi({
                jsApiList: [
                    'getNetworkType',
                    'previewImage',
                    'onMenuShareTimeline',
                    'onMenuShareAppMessage',
                    'onMenuShareQQ',
                    'onMenuShareWeibo'
                ],
                success: function (res) {
                  // alert(JSON.stringify(res));
                }
              });
            // };
            // 2. 分享接口
            // 2.1 监听“分享给朋友”，按钮点击、自定义分享内容及分享结果接口
            wx.onMenuShareAppMessage({
                title: "{{$cars->name}}",
                desc: '{{$cars->name}}',
                link: 'http://m.sjztcl.com/car/' + "{{$cars->id}}" + "{{$wxShouQuan}}",
                imgUrl:'http://www.sjztcl.com/uploads/car/' + "{{$cars->hasOneImagesOnFirst->filename}}",
                trigger: function (res) {
                  // alert('用户点击发送给朋友');
                },
                success: function (res) {
                  // alert('已分享');
                },
                cancel: function (res) {
                  // alert('已取消');
                },
                fail: function (res) {
                  // alert(JSON.stringify(res));
                }
            });
        // 2.2 监听“分享到朋友圈”按钮点击、自定义分享内容及分享结果接口
            wx.onMenuShareTimeline({
            title: '{{$cars->name}}',
            desc: '{{$cars->name}}',
            link: 'http://m.sjztcl.com/car/' + "{{$cars->id}}" + "{{$wxShouQuan}}",
            imgUrl: 'http://www.sjztcl.com/uploads/car/' + "{{$cars->hasOneImagesOnFirst->filename}}",
            trigger: function (res) {
              // alert('用户点击分享到朋友圈');
            },
            success: function (res) {
              // alert('已分享');
            },
            cancel: function (res) {
              // alert('已取消');
            },
            fail: function (res) {
              alert(JSON.stringify(res));
            }
          });
        // 2.3 监听“分享到QQ”按钮点击、自定义分享内容及分享结果接口
        wx.onMenuShareQQ({
          title: '{{$cars->name}}',
          desc: '{{$cars->name}}',
          link: 'http://m.sjztcl.com/car/' + "{{$cars->id}}" + "{{$wxShouQuan}}",
          imgUrl: 'http://www.sjztcl.com/uploads/car/' + "{{$cars->hasOneImagesOnFirst->filename}}",
          trigger: function (res) {
            // alert('用户点击分享到QQ');
          },
          complete: function (res) {
            // alert(JSON.stringify(res));
          },
          success: function (res) {
            // alert('已分享');
          },
          cancel: function (res) {
            // alert('已取消');
          },
          fail: function (res) {
            // alert(JSON.stringify(res));
          }
        });
      
      // 2.4 监听“分享到微博”按钮点击、自定义分享内容及分享结果接口
        wx.onMenuShareWeibo({
            title:'{{$cars->name}}',
            desc: '{{$cars->name}}',
            link: 'http://m.sjztcl.com/car/' + "{{$cars->id}}" + "{{$wxShouQuan}}",
            imgUrl: 'http://www.sjztcl.com/uploads/car/' + "{{$cars->hasOneImagesOnFirst->filename}}",
            trigger: function (res) {
              // alert('用户点击分享到微博');
            },
            complete: function (res) {
              // alert(JSON.stringify(res));
            },
            success: function (res) {
              // alert('已分享');
            },
            cancel: function (res) {
              // alert('已取消');
            },
            fail: function (res) {
              // alert(JSON.stringify(res));
            }
        });
    });
    
        wx.error(function (res) {
            alert(res.errMsg);
        });
    });
    </script>
@endsection