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
                <!-- <a class="nav-item" href="javascript:void(0);">推荐车源</a> -->
                <a class="nav-item brand" href="javascript:void(0);">品牌</a>
                <a class="nav-item price" href="javascript:void(0);">价格</a>
                <a class="nav-item option" href="javascript:void(0);">更多筛选</a>
            </nav>
            <!-- <div class="filter-box" id="filter-rank">
                <ul class="row-list" data-urlKey="i">
                    <li class=" active js-single-option" data-urlVal=0 baidu_alog="wap_listB_order&click&wap_listB_order_0_c" data-gzlog="tracking_type=click&eventid=1111000000000004&evmsg=sort&sort=order&order=0">
                        <a href="javascript:void(0);"><i class="iconbg icon-rank1"></i>智能排序</a>
                    </li>
                    <li class=" js-single-option" data-urlVal=7 baidu_alog="wap_listB_order&click&wap_listB_order_7_c" data-gzlog="tracking_type=click&eventid=1111000000000004&evmsg=sort&sort=order&order=7">
                        <a href="javascript:void(0);"><i class="iconbg icon-rank3"></i>最新上架</a>
                    </li>
                    <li class=" js-single-option" data-urlVal=1 baidu_alog="wap_listB_order&click&wap_listB_order_1_c" data-gzlog="tracking_type=click&eventid=1111000000000004&evmsg=sort&sort=order&order=1">
                        <a href="javascript:void(0);"><i class="iconbg icon-rank4"></i>价格最低</a>
                    </li>
                    <li class=" js-single-option" data-urlVal=2 baidu_alog="wap_listB_order&click&wap_listB_order_2_c" data-gzlog="tracking_type=click&eventid=1111000000000004&evmsg=sort&sort=order&order=2">
                        <a href="javascript:void(0);"><i class="iconbg icon-rank5"></i>价格最高</a>
                    </li>
                    <li class=" js-single-option" data-urlVal=4 baidu_alog="wap_listB_order&click&wap_listB_order_4_c" data-gzlog="tracking_type=click&eventid=1111000000000004&evmsg=sort&sort=order&order=4">
                        <a href="javascript:void(0);"><i class="iconbg icon-rank2"></i>车龄最短</a>
                    </li>
                    <li class=" js-single-option" data-urlVal=5 baidu_alog="wap_listB_order&click&wap_listB_order_5_c" data-gzlog="tracking_type=click&eventid=1111000000000004&evmsg=sort&sort=order&order=5">
                        <a href="javascript:void(0);"><i class="iconbg icon-rank6"></i>里程最少</a>
                    </li>
                </ul>
            </div> -->
            <div class="filter-box" id="filter-price">
                <ul class="lab-list" data-urlKey="p">
                    <li class="js-single-option" data-urlVal='0' baidu_alog="wap_listB_price&click&wap_listB_price_0_c"><a href="javascript:void(0);">不限</a></li>
                    <li class="js-single-option " data-urlVal=11 baidu_alog="wap_listB_price&click&wap_listB_price_11_c" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=price_index&price_index=11">
                        <a href="javascript:void(0);">3万以下</a>
                    </li>
                    <li class="js-single-option " data-urlVal=12 baidu_alog="wap_listB_price&click&wap_listB_price_12_c" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=price_index&price_index=12">
                        <a href="javascript:void(0);">3-5万</a>
                    </li>
                    <li class="js-single-option " data-urlVal=13 baidu_alog="wap_listB_price&click&wap_listB_price_13_c" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=price_index&price_index=13">
                        <a href="javascript:void(0);">5-7万</a>
                    </li>
                    <li class="js-single-option " data-urlVal=14 baidu_alog="wap_listB_price&click&wap_listB_price_14_c" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=price_index&price_index=14">
                        <a href="javascript:void(0);">7-9万</a>
                    </li>
                    <li class="js-single-option " data-urlVal=15 baidu_alog="wap_listB_price&click&wap_listB_price_15_c" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=price_index&price_index=15">
                        <a href="javascript:void(0);">9-12万</a>
                    </li>
                    <li class="js-single-option " data-urlVal=16 baidu_alog="wap_listB_price&click&wap_listB_price_16_c" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=price_index&price_index=16">
                        <a href="javascript:void(0);">12-16万</a>
                    </li>
                    <li class="js-single-option " data-urlVal=17 baidu_alog="wap_listB_price&click&wap_listB_price_17_c" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=price_index&price_index=17">
                        <a href="javascript:void(0);">16-20万</a>
                    </li>
                    <li class="js-single-option " data-urlVal=18 baidu_alog="wap_listB_price&click&wap_listB_price_18_c" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=price_index&price_index=18">
                        <a href="javascript:void(0);">20万以上</a>
                    </li>
                </ul>
            </div>
            <!-- <div class="filter-result">
                <ul class="mod-tags fl" baidu_alog="wap_listB_current&amp;click&amp;wap_listB_current_c">
                    <a href="/sjz/buy/" data-gzlog="tracking_type=click&amp;eventid=1111000000000010&amp;evmsg=delkey&amp;delkey=price_index&amp;price_index=17">
                        <li>16-20万<i class="icon-close"></i></li>
                    </a>
                    <li class="btn-reset"><a class="icon-reset" href="/sjz/buy/">重置</a></li>
                </ul>
            </div> -->
        </div>
        <!-- filter end -->
        <div class="loading"><i class="icon-load01"></i>松开可以刷新</div>
        <!-- 行列表 start -->
        <section class="mod-list js-car-list">
            <!-- <div class="find-num bg-shadow active">共为您找到2312辆车</div> -->
            <ul class="list">
                <li class="list-item" data-scroll-track="15069551@0@0&1111000000000002" data-clue=15069551 data-type=city>
                    <a class="car-info" href="javascript:void(0);">
                        <div class="car-img">
                            <img class="js-lazy-load" src="http://www.sjztcl.com/uploads/car/201709/images/mmexport1504749705099副本爱奇艺.jpg" data-original="https://image1.guazistatic.com/qn170806104327f6393d7b7e192acfbaa21e334f203220.jpg?imageView2/1/w/240/h/160/q/88" alt="日产阳光 2011款 1.5XL CVT豪华版">
                        </div>
                        <h3 class="car-name">日产阳光 2011款 1.5XL CVT豪华版</h3>
                        <div class="car-km">
                            <span class="fl">2011年/6.7万公里</span>
                            <p class="label-pbox clearfix fr hide-icon">
                                <span class="icon-sta-sell">保卖车</span> </p>
                        </div>
                        <div class="car-price">
                            <i class="finance-price">4.39万</i>
                            <span class="index-price"><span>首付1.32</span>万</span>
                        </div>
                        <p class="page-size" style="display: none">1/50</p>
                    </a>
                </li>
                
                
                <li class="list-item" data-scroll-track="15069551@0@0&1111000000000002" data-clue=15069551 data-type=city>
                    <a class="car-info" href="javascript:void(0);">
                        <div class="car-img">
                            <img class="js-lazy-load" src="http://www.sjztcl.com/uploads/car/201709/images/mmexport1504749705099副本爱奇艺.jpg" data-original="https://image1.guazistatic.com/qn170806104327f6393d7b7e192acfbaa21e334f203220.jpg?imageView2/1/w/240/h/160/q/88" alt="日产阳光 2011款 1.5XL CVT豪华版">
                        </div>
                        <h3 class="car-name">日产阳光 2011款 1.5XL CVT豪华版</h3>
                        <div class="car-km">
                            <span class="fl">2011年/6.7万公里</span>
                            <p class="label-pbox clearfix fr hide-icon">
                                <span class="icon-sta-sell">保卖车</span> </p>
                        </div>
                        <div class="car-price">
                            <i class="finance-price">4.39万</i>
                            <span class="index-price"><span>首付1.32</span>万</span>
                        </div>
                        <p class="page-size" style="display: none">1/50</p>
                    </a>
                </li>
            </ul>
        </section>
        <!-- 一键订阅 start -->
        <section class="subscribe">
            <h3 class="subs-tit">订阅后，有满足条件新车将及时通知您</h3>
            <div class="orient-list">
                <ul class="mod-tags">
                    <li class="js-fast-cancel " data-urlkey=c data-urlval=1 baidu_alog="wap_listB_oneKeySub&click&wap_listB_oneKeySub_cancel_c" data-gzlog="tracking_type=click&eventid=1111000000000011&evmsg=delkey&delkey=city_filter&city_filter=1">
                        石家庄<i class="icon-close"></i>
                    </li>
                </ul>
            </div>
            <div class="subs-btn js-fast-sub" data-cond="/sjz/buy/" baidu_alog="wap_listB_oneKeySub&click&wap_listB_oneKeySub_submit_c">
                <button class="btn" type="button">一键订阅</button>
            </div>
            <div class="toast js-sub-notice">订阅成功</div>
        </section>
        <!-- 一键订阅 end -->
        <!-- 行列表 end -->
        <!-- 一键订阅浮层 start -->
        <div class="poptips01">
            <p>点击底部“<span class="iconcollect"></span>”图标
                <br>找到“添加到主屏幕”
                <br>点击添加就可以了！</p>
            <a class="btnknow">我知道了</a>
            <div class="lines"></div>
        </div>
        <div class="mask" id="maskList1" style="z-index: 200 "></div>
        <div class="mask mask-list" id="maskEl"></div>
        <!-- 一键订阅浮层 end -->
        <!-- 相关车系 start -->
        <div class="js-relate-div" style="width: 100%;height: 30px;"></div>
        <!-- 相关车系 end -->
        <!-- 周边城市车源 start -->
        <div style="display: none;" class="js-pre-around"></div>
        <!-- 周边城市车源 end -->
        <input type="hidden" value=15069551@1@0@city_16024237@1@1@city_15737136@1@2@city_8941787@1@3@city_15923307@1@4@city_15986854@1@5@city_16035812@1@6@city_16012481@1@7@city_15948750@1@8@city_15797870@1@9@city_12731193@1@10@city_15966194@1@11@city_13502198@1@12@city_13002202@1@13@city_15818314@1@14@city_16026983@1@15@city_12788642@1@16@city_15292195@1@17@city_15982454@1@18@city_14936838@1@19@city_16050639@1@20@city_15967788@1@21@city_15664879@1@22@city_15346812@1@23@city_12649332@1@24@city_15879422@1@25@city_14772631@1@26@city_15997098@1@27@city_16014780@1@28@city_15834255@1@29@city id="listCarIds" />
        <input type="hidden" value={ "city_filter": "1"} id="listFilter" />
        <!-- <div class="loading active"><i class="icon-load02 iconbg"></i>上拉查看更多</div> -->
        <div class="page-fixed bg-shadow active" style="display: none">1/1</div>
        <div class="fixed-icon">
            <!--<a class="icon-totel" href="#">咨询</a>-->
            <a class="icon-totop" style="display: none;" href="javascript:void(0);"></a>
        </div>
        <div class="mask" id="maskList"></div>
        <input type="hidden" value="http://m-jr.guazi.com/www/?jr_from=listpagebanner&platform=wap" class="j-jrAdUrl" />
        <input type="hidden" value="https://image.guazistatic.com/gz01170601/18/10/4fd59f2c922dc1bdd262525a6029288b.jpg@base@tag=imgScale" class="j-jrAdImgUrl" />
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


<header class="heading search-box" style="display:none;" id="search_list"
        data-id="1" data-domain="sjz"
        data-evid="0230220000000099">
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

    <div class="search-result active" id="search_history" >
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






<!--更多筛选-->

<div class="filter-wrap js-choose-option" style="display: none;">
    <header class="heading2" style="z-index: 98;">
        <a class="icon-close js-close-option" href="javascript:void(0);">关闭</a>
        <h1>筛选</h1>
        <a class="icon-reset2 js-reset-option" href="javascript:void(0);" baidu_alog="wap_listB_option&click&wap_listB_option_reset_c">重置</a>
    </header>
    <div class="filter-main">
        <!-- 车型 start -->
                <section class="filter-section" data-urlKey="h">
            <h3 class="subtit">车型</h3>
            <ul class="type-car clearfix js-single-item">
                                                <li baidu_alog="wap_listB_option&click&wap_listB_option_auto_5_c" class=" js-multi-option" data-urlVal=5
                    data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=chexing&chexing=5">
                    <a href="javascript:void(0);"><i class="icon-car icon-ctwo"></i>两厢轿车</a>
                </li>
                                                                <li baidu_alog="wap_listB_option&click&wap_listB_option_auto_6_c" class=" js-multi-option" data-urlVal=6
                    data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=chexing&chexing=6">
                    <a href="javascript:void(0);"><i class="icon-car icon-cthree"></i>三厢轿车</a>
                </li>
                                                                <li baidu_alog="wap_listB_option&click&wap_listB_option_auto_4_c" class=" js-multi-option" data-urlVal=4
                    data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=chexing&chexing=4">
                    <a href="javascript:void(0);"><i class="icon-car icon-crun"></i>跑车</a>
                </li>
                                                                <li baidu_alog="wap_listB_option&click&wap_listB_option_auto_2_c" class=" js-option-suv" data-urlVal=2
                    data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=chexing&chexing=2">
                    <div class="downbox">
                        <a href="javascript:void(0);"><i class="icon-car icon-csuv"></i><p class="js-show-text">SUV</p></a>
                        <div class="mask js-optionMask"></div>
                        <div class="csuv-box js-suv-box">
                            <ul class="lab-list">
                                                                <li baidu_alog="wap_listB_option&click&wap_listB_option_autoSUV_0_c" class=" js-option-suv-item" data-urlval=0 data-merge="SUV"
                                    data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=driving_type&driving_type=0">
                                    <a href="javascript:void(0);">不限</a>
                                </li>
                                                                <li baidu_alog="wap_listB_option&click&wap_listB_option_autoSUV_1_c" class=" js-option-suv-item" data-urlval=1 data-merge="前驱SUV"
                                    data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=driving_type&driving_type=1">
                                    <a href="javascript:void(0);">前轮驱动</a>
                                </li>
                                                                <li baidu_alog="wap_listB_option&click&wap_listB_option_autoSUV_2_c" class=" js-option-suv-item" data-urlval=2 data-merge="后驱SUV"
                                    data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=driving_type&driving_type=2">
                                    <a href="javascript:void(0);">后轮驱动</a>
                                </li>
                                                                <li baidu_alog="wap_listB_option&click&wap_listB_option_autoSUV_3_c" class=" js-option-suv-item" data-urlval=3 data-merge="四驱SUV"
                                    data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=driving_type&driving_type=3">
                                    <a href="javascript:void(0);">四轮驱动</a>
                                </li>
                                                            </ul>
                        </div>
                    </div>
                </li>
                                                                <li baidu_alog="wap_listB_option&click&wap_listB_option_auto_3_c" class=" js-multi-option" data-urlVal=3
                    data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=chexing&chexing=3">
                    <a href="javascript:void(0);"><i class="icon-car icon-cmpv"></i>MPV</a>
                </li>
                                                                <li baidu_alog="wap_listB_option&click&wap_listB_option_auto_7_c" class=" js-multi-option" data-urlVal=7
                    data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=chexing&chexing=7">
                    <a href="javascript:void(0);"><i class="icon-car icon-cmbc"></i>面包车</a>
                </li>
                                                                <li baidu_alog="wap_listB_option&click&wap_listB_option_auto_8_c" class=" js-multi-option" data-urlVal=8
                    data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=chexing&chexing=8">
                    <a href="javascript:void(0);"><i class="icon-car icon-cpk"></i>皮卡</a>
                </li>
                                            </ul>
        </section>
                <!--车牌所在地-->
                <section class="filter-section" data-urlKey="d">
            <h3 class="subtit">车牌所在地</h3>
            <ul class="lab-list js-single-item">
                <li data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=diff_city&diff_city=0"
                    class="js-multi-option " data-urlVal="1">
                    <a href="javascript:void(0);">本地</a>
                </li>
                <li data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=diff_city&diff_city=1"
                    class="js-multi-option " data-urlVal="1-">
                    <a href="javascript:void(0);">外地</a>
                </li>
            </ul>
        </section>
                <!-- 标签 start -->
                <section class="filter-section" data-urlKey="r">
            <h3 class="subtit">热门车</h3>
            <ul class="lab-list">
        <li baidu_alog="wap_listB_option&click&wap_listB_option_type_3_c" class=" js-multi-option" data-urlVal=3
    data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=tag_types&tag_types=3"    >
        <a href="javascript:void(0);">  降价急售</a>
    </li>
        <li baidu_alog="wap_listB_option&click&wap_listB_option_type_4_c" class=" js-multi-option" data-urlVal=4
    data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=tag_types&tag_types=4"    >
        <a href="javascript:void(0);">  准新车</a>
    </li>
        <li baidu_alog="wap_listB_option&click&wap_listB_option_type_6_c" class=" js-multi-option" data-urlVal=6
    data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=tag_types&tag_types=6"    >
        <a href="javascript:void(0);">  可迁全国</a>
    </li>
        <li baidu_alog="wap_listB_option&click&wap_listB_option_type_2_c" class=" js-multi-option" data-urlVal=2
    data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=tag_types&tag_types=2"    >
        <a href="javascript:void(0);">  女车主</a>
    </li>
        <li baidu_alog="wap_listB_option&click&wap_listB_option_type_7_c" class=" js-multi-option" data-urlVal=7
    data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=tag_types&tag_types=7"    >
        <a href="javascript:void(0);">  7座车</a>
    </li>
        <li baidu_alog="wap_listB_option&click&wap_listB_option_type_8_c" class=" js-multi-option" data-urlVal=8
    data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=tag_types&tag_types=8"    >
        <a href="javascript:void(0);">  练手车</a>
    </li>
        <li baidu_alog="wap_listB_option&click&wap_listB_option_type_9_c" class=" js-multi-option" data-urlVal=9
    data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=tag_types&tag_types=9"    >
        <a href="javascript:void(0);">  女性专场</a>
    </li>
        <li baidu_alog="wap_listB_option&click&wap_listB_option_type_10_c" class=" js-multi-option" data-urlVal=10
    data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=tag_types&tag_types=10"    >
        <a href="javascript:void(0);">  萌宝专车</a>
    </li>
        <li baidu_alog="wap_listB_option&click&wap_listB_option_type_19_c" class=" js-multi-option" data-urlVal=19
    data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=tag_types&tag_types=19"    >
        <a href="javascript:void(0);">  付三成</a>
    </li>
    </ul>        </section>
                <!-- 变速箱 start -->
                <section class="filter-section"  data-urlKey="n">
            <h3 class="subtit">变速箱</h3>
            <ul class="lab-list">
        <li baidu_alog="wap_listB_option&click&wap_listB_option_gear_1_c" class=" js-multi-option" data-urlVal=1
    data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=gearbox&gearbox=1"    >
        <a href="javascript:void(0);">  手动</a>
    </li>
        <li baidu_alog="wap_listB_option&click&wap_listB_option_gear_2_c" class=" js-multi-option" data-urlVal=2
    data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=gearbox&gearbox=2"    >
        <a href="javascript:void(0);">  自动</a>
    </li>
    </ul>        </section>
        
        <!-- 车龄刻度 start -->
                <section class="filter-section" data-urlKey="l" data-logkey="cheling">
            <div class="range-title">
                <h3 class="fl">车龄要求</h3>
                <span>（单位: 年）</span>
                                <span class="ramout" data-cancle="不限车龄">不限车龄</span>
                            </div>
            
<div class="range-box js-option-continue"
     data-unit="1" data-text="年" data-scale="1"
     data-min="0" data-max="8"
     >
    <div class="load-outer">
        <!-- width:选中的总长度比例　　　left:左边开始偏移 -->
        <div class="load-inner"
             style="width: 100%; left: 0%;">

                    </div>
        <!--　左边圆块开始位置：左侧偏移量　-->
        <span baidu_alog="wap_listB_JRange&touchend&wap_listB_JRange_age_l_c" class="icon-range icon-low" style="left: 0%;"></span>
        <!--　右边圆块开始位置：左侧偏移量　-->
        <span baidu_alog="wap_listB_JRange&touchend&wap_listB_JRange_age_R_c" class="icon-range icon-high" style="left: 100%;"></span>
    </div>
    <!-- 下方文案开始标记 -->
    <span class="load-zero">0</span>
    <!--　下方文案标记　-->
    <ul class="load-num">
                <li>2</li>
                <li>4</li>
                <li>6</li>
                <li>8</li>
            </ul>
</div>
        </section>
                <!-- 里程刻度 start -->
                <section class="filter-section" data-urlKey="g" data-logkey="road_haul">
            <div class="range-title">
                <h3 class="fl">行驶里程</h3>
                <span>（单位: 万公里）</span>
                                <span class="ramout" data-cancle="不限里程">不限里程</span>
                            </div>
            
<div class="range-box js-option-continue"
     data-unit="10000" data-text="万公里" data-scale="1"
     data-min="0" data-max="15"
     >
    <div class="load-outer">
        <!-- width:选中的总长度比例　　　left:左边开始偏移 -->
        <div class="load-inner"
             style="width: 100%; left: 0%;">

                    </div>
        <!--　左边圆块开始位置：左侧偏移量　-->
        <span baidu_alog="wap_listB_JRange&touchend&wap_listB_JRange_road_l_c" class="icon-range icon-low" style="left: 0%;"></span>
        <!--　右边圆块开始位置：左侧偏移量　-->
        <span baidu_alog="wap_listB_JRange&touchend&wap_listB_JRange_road_R_c" class="icon-range icon-high" style="left: 100%;"></span>
    </div>
    <!-- 下方文案开始标记 -->
    <span class="load-zero">0</span>
    <!--　下方文案标记　-->
    <ul class="load-num">
                <li>3</li>
                <li>6</li>
                <li>9</li>
                <li>12</li>
                <li>15</li>
            </ul>
</div>
        </section>
                <!-- 排量刻度 start -->
                <section class="filter-section" data-urlKey="j" data-logkey="air_displacement">
            <div class="range-title">
                <h3 class="fl">排量</h3>
                <span>（单位: 升）</span>
                                <span class="ramout" data-cancle="不限排量">不限排量</span>
                            </div>
            
<div class="range-box js-option-continue"
     data-unit="1" data-text="升" data-scale="0.5"
     data-min="0" data-max="4.5"
      data-more="99" >
    <div class="load-outer">
        <!-- width:选中的总长度比例　　　left:左边开始偏移 -->
        <div class="load-inner"
             style="width: 100%; left: 0%;">

                    </div>
        <!--　左边圆块开始位置：左侧偏移量　-->
        <span baidu_alog="wap_listB_JRange&touchend&wap_listB_JRange_air_l_c" class="icon-range icon-low" style="left: 0%;"></span>
        <!--　右边圆块开始位置：左侧偏移量　-->
        <span baidu_alog="wap_listB_JRange&touchend&wap_listB_JRange_air_R_c" class="icon-range icon-high" style="left: 100%;"></span>
    </div>
    <!-- 下方文案开始标记 -->
    <span class="load-zero">0</span>
    <!--　下方文案标记　-->
    <ul class="load-num">
                <li></li>
                <li>1.0</li>
                <li></li>
                <li>2.0</li>
                <li></li>
                <li>3.0</li>
                <li></li>
                <li>4.0</li>
                <li></li>
                <li>不限</li>
            </ul>
</div>
        </section>
        
        <!-- 座位数 start -->
                <section class="filter-section" data-urlKey="s">
            <h3 class="subtit">座位数</h3>
            <ul class="lab-list">
        <li baidu_alog="wap_listB_option&click&wap_listB_option_seat_2_c" class=" js-multi-option" data-urlVal=2
    data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=seat&seat=2"    >
        <a href="javascript:void(0);">  2座</a>
    </li>
        <li baidu_alog="wap_listB_option&click&wap_listB_option_seat_4_c" class=" js-multi-option" data-urlVal=4
    data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=seat&seat=4"    >
        <a href="javascript:void(0);">  4座</a>
    </li>
        <li baidu_alog="wap_listB_option&click&wap_listB_option_seat_5_c" class=" js-multi-option" data-urlVal=5
    data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=seat&seat=5"    >
        <a href="javascript:void(0);">  5座</a>
    </li>
        <li baidu_alog="wap_listB_option&click&wap_listB_option_seat_6_c" class=" js-multi-option" data-urlVal=6
    data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=seat&seat=6"    >
        <a href="javascript:void(0);">  6座</a>
    </li>
        <li baidu_alog="wap_listB_option&click&wap_listB_option_seat_7_c" class=" js-multi-option" data-urlVal=7
    data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=seat&seat=7"    >
        <a href="javascript:void(0);">  7座及以上</a>
    </li>
    </ul>        </section>
                <!-- 排放标准 start -->
                <section class="filter-section" data-urlKey="v">
            <h3 class="subtit">排放标准</h3>
            <ul class="lab-list">
        <li baidu_alog="wap_listB_option&click&wap_listB_option_vehicle_1_c" class=" js-multi-option" data-urlVal=1
    data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=vehicle_config&vehicle_config=1"    >
        <a href="javascript:void(0);">  国二及以上</a>
    </li>
        <li baidu_alog="wap_listB_option&click&wap_listB_option_vehicle_2_c" class=" js-multi-option" data-urlVal=2
    data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=vehicle_config&vehicle_config=2"    >
        <a href="javascript:void(0);">  国三及以上</a>
    </li>
        <li baidu_alog="wap_listB_option&click&wap_listB_option_vehicle_3_c" class=" js-multi-option" data-urlVal=3
    data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=vehicle_config&vehicle_config=3"    >
        <a href="javascript:void(0);">  国四及以上</a>
    </li>
        <li baidu_alog="wap_listB_option&click&wap_listB_option_vehicle_4_c" class=" js-multi-option" data-urlVal=4
    data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=vehicle_config&vehicle_config=4"    >
        <a href="javascript:void(0);">  国五</a>
    </li>
    </ul>        </section>
                <!-- 颜色 start -->
                <section class="filter-section" data-urlKey="m">
            <h3 class="subtit">颜色</h3>
            <ul class="lab-list">
        <li baidu_alog="wap_listB_option&click&wap_listB_option_color_1_c" class=" js-multi-option" data-urlVal=1
    data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=car_color&car_color=1"    >
        <a href="javascript:void(0);"> <i class="icon-color icon-black"></i> 黑色</a>
    </li>
        <li baidu_alog="wap_listB_option&click&wap_listB_option_color_2_c" class=" js-multi-option" data-urlVal=2
    data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=car_color&car_color=2"    >
        <a href="javascript:void(0);"> <i class="icon-color icon-white"></i> 白色</a>
    </li>
        <li baidu_alog="wap_listB_option&click&wap_listB_option_color_3_c" class=" js-multi-option" data-urlVal=3
    data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=car_color&car_color=3"    >
        <a href="javascript:void(0);"> <i class="icon-color icon-grey"></i> 银灰色</a>
    </li>
        <li baidu_alog="wap_listB_option&click&wap_listB_option_color_4_c" class=" js-multi-option" data-urlVal=4
    data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=car_color&car_color=4"    >
        <a href="javascript:void(0);"> <i class="icon-color icon-grey2"></i> 深灰色</a>
    </li>
        <li baidu_alog="wap_listB_option&click&wap_listB_option_color_6_c" class=" js-multi-option" data-urlVal=6
    data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=car_color&car_color=6"    >
        <a href="javascript:void(0);"> <i class="icon-color icon-red"></i> 红色</a>
    </li>
        <li baidu_alog="wap_listB_option&click&wap_listB_option_color_10_c" class=" js-multi-option" data-urlVal=10
    data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=car_color&car_color=10"    >
        <a href="javascript:void(0);"> <i class="icon-color icon-orange"></i> 橙色</a>
    </li>
        <li baidu_alog="wap_listB_option&click&wap_listB_option_color_8_c" class=" js-multi-option" data-urlVal=8
    data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=car_color&car_color=8"    >
        <a href="javascript:void(0);"> <i class="icon-color icon-green"></i> 绿色</a>
    </li>
        <li baidu_alog="wap_listB_option&click&wap_listB_option_color_7_c" class=" js-multi-option" data-urlVal=7
    data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=car_color&car_color=7"    >
        <a href="javascript:void(0);"> <i class="icon-color icon-blue"></i> 蓝色</a>
    </li>
        <li baidu_alog="wap_listB_option&click&wap_listB_option_color_5_c" class=" js-multi-option" data-urlVal=5
    data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=car_color&car_color=5"    >
        <a href="javascript:void(0);"> <i class="icon-color icon-brown"></i> 咖啡色</a>
    </li>
        <li baidu_alog="wap_listB_option&click&wap_listB_option_color_12_c" class=" js-multi-option" data-urlVal=12
    data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=car_color&car_color=12"    >
        <a href="javascript:void(0);"> <i class="icon-color icon-purple"></i> 紫色</a>
    </li>
        <li baidu_alog="wap_listB_option&click&wap_listB_option_color_11_c" class=" js-multi-option" data-urlVal=11
    data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=car_color&car_color=11"    >
        <a href="javascript:void(0);"> <i class="icon-color icon-champagne"></i> 香槟色</a>
    </li>
        <li baidu_alog="wap_listB_option&click&wap_listB_option_color_13_c" class=" js-multi-option" data-urlVal=13
    data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=car_color&car_color=13"    >
        <a href="javascript:void(0);"> <i class="icon-color icon-multicolor"></i> 多彩色</a>
    </li>
        <li baidu_alog="wap_listB_option&click&wap_listB_option_color_9_c" class=" js-multi-option" data-urlVal=9
    data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=car_color&car_color=9"    >
        <a href="javascript:void(0);"> <i class="icon-color icon-yellow"></i> 黄色</a>
    </li>
        <li baidu_alog="wap_listB_option&click&wap_listB_option_color_14_c" class=" js-multi-option" data-urlVal=14
    data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=car_color&car_color=14"    >
        <a href="javascript:void(0);"> <i class="icon-color icon-other"></i> 其它</a>
    </li>
    </ul>        </section>
                <!-- 燃油 start -->
                <section class="filter-section" data-urlKey="f">
            <h3 class="subtit">燃油类型</h3>
            <ul class="lab-list">
        <li baidu_alog="wap_listB_option&click&wap_listB_option_fuel_1_c" class=" js-multi-option" data-urlVal=1
    data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=fuel_type&fuel_type=1"    >
        <a href="javascript:void(0);">  汽油</a>
    </li>
        <li baidu_alog="wap_listB_option&click&wap_listB_option_fuel_2_c" class=" js-multi-option" data-urlVal=2
    data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=fuel_type&fuel_type=2"    >
        <a href="javascript:void(0);">  柴油</a>
    </li>
        <li baidu_alog="wap_listB_option&click&wap_listB_option_fuel_3_c" class=" js-multi-option" data-urlVal=3
    data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=fuel_type&fuel_type=3"    >
        <a href="javascript:void(0);">  电动</a>
    </li>
        <li baidu_alog="wap_listB_option&click&wap_listB_option_fuel_4_c" class=" js-multi-option" data-urlVal=4
    data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=fuel_type&fuel_type=4"    >
        <a href="javascript:void(0);">  油电混合</a>
    </li>
        <li baidu_alog="wap_listB_option&click&wap_listB_option_fuel_5_c" class=" js-multi-option" data-urlVal=5
    data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=fuel_type&fuel_type=5"    >
        <a href="javascript:void(0);">  其他</a>
    </li>
    </ul>        </section>
                <!-- 国别 start -->
                <section class="filter-section" data-urlKey="u">
            <h3 class="subtit">国别</h3>
            <ul class="lab-list">
        <li baidu_alog="wap_listB_option&click&wap_listB_option_guo_4_c" class=" js-multi-option" data-urlVal=4
    data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=guobie&guobie=4"    >
        <a href="javascript:void(0);">  德系</a>
    </li>
        <li baidu_alog="wap_listB_option&click&wap_listB_option_guo_5_c" class=" js-multi-option" data-urlVal=5
    data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=guobie&guobie=5"    >
        <a href="javascript:void(0);">  日系</a>
    </li>
        <li baidu_alog="wap_listB_option&click&wap_listB_option_guo_2_c" class=" js-multi-option" data-urlVal=2
    data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=guobie&guobie=2"    >
        <a href="javascript:void(0);">  美系</a>
    </li>
        <li baidu_alog="wap_listB_option&click&wap_listB_option_guo_1_c" class=" js-multi-option" data-urlVal=1
    data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=guobie&guobie=1"    >
        <a href="javascript:void(0);">  法系</a>
    </li>
        <li baidu_alog="wap_listB_option&click&wap_listB_option_guo_6_c" class=" js-multi-option" data-urlVal=6
    data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=guobie&guobie=6"    >
        <a href="javascript:void(0);">  韩系</a>
    </li>
        <li baidu_alog="wap_listB_option&click&wap_listB_option_guo_3_c" class=" js-multi-option" data-urlVal=3
    data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=guobie&guobie=3"    >
        <a href="javascript:void(0);">  国产</a>
    </li>
        <li baidu_alog="wap_listB_option&click&wap_listB_option_guo_7_c" class=" js-multi-option" data-urlVal=7
    data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=guobie&guobie=7"    >
        <a href="javascript:void(0);">  其他</a>
    </li>
    </ul>        </section>
            </div>
    <div class="result-fixed">
        <p>已选条件共<strong>2312</strong>辆车</p>
        <a class="btn js-submit-option" href="javascript:void(0);" baidu_alog="wap_listB_option&click&wap_listB_option_sub_c">查看</a>
    </div>
</div>
<!-- 筛选页 end --><!-- app-pub-->



    <div class="popup-wrap js-sub-app-show">
    <div class="popup popup-downapp js-sub-app-pub">
        <a href="javascript:;" class="close-btn">关闭按钮</a>
        <div class="popup-body">
            <div class="pop-tit">
                <div class="title">
                    <i class="icon-succ"></i>
                    <span class="js-title">提交成功!</span>
                </div>
                <p class="js-subtitle">若车主降价，瓜子APP及时通知您。</p>
            </div>

            <div class="form-deliver">
                <div class="fl">
                    <p class="downapp">下载APP</p>
                    <p class="js-item-l2">车源降价</p>
                    <p class="js-item-l3">随时知晓</p>
                </div>
                <ul class="down-list fr">
                    <li class="js-item-r1">一键收藏</li>
                    <li class="js-item-r2">上新提醒</li>
                    <li class="js-item-r3">降价提醒</li>
                </ul>
            </div>

            <div class="btn-app" data-url="http://app.guazistatic.com/2017070715535087_guazi_android_pub_3.2.1.0_app_self_guaziwap.apk ">
                <a href="javascript:void(0);" class="btn" data-gzlog="tracking_type=click&eventid=0000000000000430">去下载<i class="icon-download"></i></a>
            </div>
        </div>
    </div>
</div>
<div class="popup-wrap js-sub-app-show-new">
    <div class="popup popup-downapp js-sub-app-pub">
        <a href="javascript:;" class="close-btn">关闭按钮</a>
        <div class="popup-body">
            <div class="pop-tit">
                <div class="textsucc">APP端才能查看哦!</div> <!-- 您已收藏过这辆车了 -->
                <p class="js-subtitle">快去下载APP，管理个人账号吧</p>
            </div>
           <div class="introducecon clearfix">
               <div class="cl">
                   <p>APP四大法宝</p>
                   <ul>
                       <li>收藏查车—更方便</li>
                       <li>降价提醒—更及时</li>
                       <li>账户管理—更智能</li>
                       <li>上架新车—更实时</li>
                   </ul>
               </div>
               <div class="cr">
                    <span class="imgcollect" id="tancengPic"></span>
                </div>
           </div>
        </div>
    </div>
</div>
<div class="tiplayer" id="errorDis"><span class="textcon" id="errorCont">提交失败</span></div>
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
                // console.log(option_obj);

                $('.js-list-page').hide();
                option_obj.show();
            });

            $('a.js-close-option').click(function(event) {
                /* 关闭其他筛选 */
                var option_obj   = $('.js-choose-option');
                // console.log(option_obj);
                // 
                $('.js-list-page').show();
                option_obj.hide();

            });

        });
    </script>
@endsection