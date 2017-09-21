@extends('show.mainnew')

@section('title')
    <title>{{$title}}</title>
    <meta name="keywords" content="二手车,二手车交易市场,二手车网上交易平台,石家庄二手车，石家庄淘车乐,石家庄二手车交易平台，石家庄二手车交易">
    <meta name="description" content="石家庄淘车乐是河北省最大的二手车交易平台,二手车源信息最真实,最值得信赖的网上二手车交易市场,提供二手车评估,二手车报价,二手车交易等相关服务,买卖二手车就上淘车乐">
@endsection

@section('head_content')
    <!-- 首页样式 -->
    <link type="text/css" rel="stylesheet" href="{{URL::asset('newShow/css/list.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('newShow/css/content.css')}}">
    <!-- 轮播图样式 -->
    <link type="text/css" rel="stylesheet" href="{{URL::asset('newShow/css/swipeslider.css')}}">
    <!-- 首页脚本  -->
    <!-- <script type="text/javascript" src="../js/index.js"></script> -->
    <!-- <script type="text/javascript" src="{{URL::asset('js/tcl/home/index.js')}}"></script> -->


@endsection


@section('current_city_name')
    {{$show_city_name}}
@endsection

@section('content')
<div class="index-area">

    <!--banner显示 s-->
    <div class="sel-op clearfix">
    <div class="sel-area fl">
        <div class="buy-tit">免费卖车<span><em class="orgtext">平均7天卖出</em>已有<em class="clue_num">6841277</em>人提交了申请</span></div>
        <div class="sell-car-box" data-value-domain="sjz">
            <form action="" class="clearfix" data-role="sell_form">
                <input type="text" class="sell-phone-input" data-role="sellPhone" placeholder="请输入手机号码">
                <button class="sell-phone-submit" data-clue-entry="03" data-gzlog="tracking_type=click&eventid=0210050000000013" >我要卖车</button>
                <input type="hidden" name="source_type" value="">
            </form>
            <p class="sell-phone-error"></p>
            <div class="submit-suc" style="display: none">
                <i></i>
                提交成功！
                <a href="javascript:void(0)" data-role="go_back">返回</a>
            </div>
        </div>
        <div class="buy-tit">我要买车<span>1年2万公里质保</span></div>
        <div class="sx">
            <div class="sx-pinpai js_brands_index">
                <div class="dt">品牌</div>
                <div class="dd" id="baidu_alog">
                <a href="/sjz/dazhong/" class="i-dazhong" title="大众二手车">大众</a>
                <a href="/sjz/dazhong/" class="i-dazhong" title="大众二手车">大众</a>
                <a href="/sjz/dazhong/" class="i-dazhong" title="大众二手车">大众</a>
                <a href="/sjz/dazhong/" class="i-dazhong" title="大众二手车">大众</a>
                <a href="/sjz/dazhong/" class="i-dazhong" title="大众二手车">大众</a>
                <a href="/sjz/dazhong/" class="i-dazhong" title="大众二手车">大众</a>
                <a href="/sjz/dazhong/" class="i-dazhong" title="大众二手车">大众</a>
                </div>
            </div>

            <div class="sx-price">
                <div class="dt">价格</div>
                <div class="dd">
                    <a href="/sjz/buy/p3/" title='5万以下二手车'>5万以下</a>
                    <a href="/sjz/buy/p3/" title='5万以下二手车'>5万以下</a>
                    <a href="/sjz/buy/p3/" title='5万以下二手车'>5万以下</a>
                    <a href="/sjz/buy/p3/" title='5万以下二手车'>5万以下</a>
                    <a href="/sjz/buy/p3/" title='5万以下二手车'>5万以下</a>
                    <a href="/sjz/buy/p3/" title='5万以下二手车'>5万以下</a>
                </div>
            </div>
            <div class="sx-chexing">
                <div class="dt">车型</div>
                <div class="dd">
                    <a href="/sjz/buy/h1/" class="x-sanxiang" title="二手SUV">轿车</a>
                    <a href="/sjz/buy/h2/" class="x-suv" title="二手SUV">SUV</a>
                    <a href="/sjz/buy/h3/" class="x-mpv" title="二手SUV">MPV</a>
                    <a href="/sjz/buy/h4/" class="x-paoche" title="二手SUV">跑车</a>
                </div>
            </div>
        </div>
    </div>
    <div class="op-area fr">
        <!--banner -->
        <div class="op-slide" data-widget="app/ms_v2/widget/slide.js" data-slide-fn="app/ms_v2/self_service/page/promotion_index.js#slideFn" data-interval="3000">
            <!-- <div data-role="list"> -->
                <div class="slide-li" data-role="item">
                    <figure id="full_feature" class="swipslider" style="width:860px;height:305px;margin: 0px;">
                        <ul class="sw-slides">
                            <li class="sw-slide">
                                <img src="{{URL::asset('newShow/images/banner1.png')}}" alt="Summer beach concept">
                            </li>
                            <li class="sw-slide">
                                <img src="{{URL::asset('newShow/images/banner2.png')}}" alt="Lang from Yie Ar Kung Fu">
                            </li>
                            <li class="sw-slide">
                                <img src="{{URL::asset('newShow/images/banner3.png')}}" alt="Tiny Tina">
                            </li>
                            <li class="sw-slide">
                                <img src="{{URL::asset('newShow/images/banner4.png')}}" alt="Tiny Tina from Borderlands 2">
                            </li>
                        </ul>
                    </figure>
                </div>
                <!-- <div class="slide-li" data-role="item" style="background: url('{{URL::asset('css/tcl/show/images/banner2.jpg')}}') center center no-repeat;" >
                    <a  href="http://www.guazi.com/zq_article/4248/" class="ban_a"></a>
                </div>
                <div class="slide-li" data-role="item" style="background: url('{{URL::asset('css/tcl/show/images/banner3.png')}}') center center no-repeat;" >
                    <a  href="http://www.guazi.com/zq_article/4248/" class="ban_a"></a>
                </div>
                <div class="slide-li" data-role="item" style="background: url('{{URL::asset('css/tcl/show/images/banner4.jpg')}}') center center no-repeat;" >
                    <a  href="http://www.guazi.com/zq_article/4248/" class="ban_a"></a>
                </div> -->
            <!-- </div> -->

            <!-- <div class="slide-ctrl">
                <span class="on active" data-role="point" data-slide-to="0"></span>
                <span class="on " data-role="point" data-slide-to="1"></span>
                <span class="on " data-role="point" data-slide-to="2"></span>
                <span class="on " data-role="point" data-slide-to="3"></span>
            </div> -->
        </div>

        <!--三个运营位 -->
        <div class="op-img">
            <ul class="clearfix">
                <li>
                    <a  class=""  href="javascript:void(0);">
                        <img src="{{URL::asset('newShow/images/banner_bottm1.png')}}" alt="">
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <img src="{{URL::asset('newShow/images/banner_bottom2.png')}}" alt="">
                    </a>
                </li>
                <li>
                    <a  href="javascript:void(0);">
                        <img src="{{URL::asset('newShow/images/banner_bottom3.png')}}" alt="">
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
    <!--banner显示 e -->

    <!--服务介绍 s-->
    <ul class="ser-gua clearfix">
    <li><i class="ser-1"></i>100%个人二手车</li>
    <li><i class="ser-2"></i>259项全面检测</li>
    <li><i class="ser-3"></i>14天可退</li>
    <li><i class="ser-4"></i>1年2万公里质保</li>
</ul>    <!--服务介绍 e -->

    <div class="w indexTab">
    <div class="title clearfix">
        <span class="ti-left">
            <span>热门好车</span>
        </span>
    </div>

    <!--帖子列表 -->
    <div data-role="showList">
                    <div class="list" style="
    display:block;">
    <ul class="list-bigimg clearfix">
        <li clue_id="7357501">
            <div class="list-infoBox">
                <a   title="青年莲花莲花L5 2011款 三厢 1.6L 自动风尚版" target="_blank" class="imgtype" href="/sjz/2c0b2fbc38ed997cx.htm" >
                    <img width="290" height="194" src="http://www.sjztcl.com/uploads/car/201709/images/572418563913612577.jpg" alt="青年莲花莲花L5 2011款 三厢 1.6L 自动风尚版">
                </a>
                <p class="infoBox">
                    <a data-gzlog="tracking_type=click&eventid=0080310000000030&carid=7357501@0" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_guesslike_post_c' title="青年莲花莲花L5 2011款 三厢 1.6L 自动风尚版" href="/sjz/2c0b2fbc38ed997cx.htm" target="_blank" class="info-title" gjalog="100000000050000100000010">青年莲花莲花L5 2011款 三厢 1.6L 自动风尚版</a>
                </p>
                <p class="fc-gray">
                    <span class="">2014年1月上牌</span>
                    <em class="shuxian">|</em>行驶4.9万公里
                </p>
                <p class="priType-s">
                    <span>
                        <i class="fc-org priType">
                        4.20万
                        </i>
                    </span>
                    <s>11.92万</s>
                </p>
            </div>
        </li>
    </ul>
    <div class="all-car-link">
        <a href="javascript:void(0);">更多车源</a>
    </div>
</div>
                              
    </div>
</div>    
</div>
@endsection

@section('script_content')
<!-- 引入轮播js -->
<script src="{{URL::asset('newShow/js/common/swipeslider.js')}}"></script>
<script>
    $(document).ready(function(){

        // alert('hehe');
        $('#full_feature').swipeslider();
    });
</script>
@endsection