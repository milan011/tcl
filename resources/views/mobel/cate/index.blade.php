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
            <a href="#" class="usericon" data-gzlog="tracking_type=click&eventid=1111432100000001"></a>
            <a class="icon-home" href="/sjz/" baidu_alog="wap_listB_top&click&wap_listB_top_index_c">首页</a>
            <div class="box-size">
                <div class="top-nav">
                    <a class="tcity" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=show&show=city" href="javascript:void(0);" baidu_alog="wap_listB_top&click&wap_listB_top_city_c">石家庄<i class="arrow-down"></i></a>
                    <div class="tsearch" data-gzlog="tracking_type=click&eventid=0230220000000099" baidu_alog="wap_listB_top&click&wap_listB_top_search_c">
                        搜索您想要的车
                    </div>
                </div>
            </div>
            <a class="js-change-style icon-column" href="javascript:void(0);" data-gzlog="tracking_type=click&eventid=1111000000000007" baidu_alog="wap_listB_top&click&wap_listB_top_style_small_c">大图列表</a>
        </header>
        <!--sell banner-->
        <!-- filter start -->
        <div class="filter">
            <nav class="filter-nav">
                <a baidu_alog="wap_listB_filter&click&wap_listB_filter_order_c" data-gzlog="tracking_type=click&eventid=1111000000000004&evmsg=show&show=order" class="nav-item order" href="javascript:void(0);">智能排序</a>
                <a baidu_alog="wap_listB_filter&click&wap_listB_filter_brand_c" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=show&show=brand" class="nav-item brand" href="javascript:void(0);">品牌</a>
                <a baidu_alog="wap_listB_filter&click&wap_listB_filter_price_c" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=show&show=price" class="nav-item price" href="javascript:void(0);">价格</a>
                <a baidu_alog="wap_listB_filter&click&wap_listB_filter_more_c" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=show&show=option" class="nav-item option" href="javascript:void(0);">筛选</a>
                <!--<a baidu_alog="wap_listB_filter&click&wap_listB_filter_sub_c" data-gzlog="tracking_type=click&eventid=1111000000000006&evmsg=show&show=subscription" class="nav-subscribe" href="/misc/subscription/?condition=/sjz/buy/&refer=/sjz/buy/">订阅</a>-->
                <a class="nav-item-sell j-check-bao-mai " href="javascript:;"><i></i>保卖车</a>
            </nav>
            <div class="filter-box" id="filter-rank">
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
            </div>
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
                <div class="range-title">
                    <h3 class="fl">自定义价格</h3>
                    <span>（单位: 万）</span>
                    <button baidu_alog="wap_listB_JRange&click&wap_listB_JRange_price_sub_c" class="btn fr active js-submit-price" type="button">确定</button>
                </div>
                <div class="range-box js-option-continue" data-unit="10000" data-text="万" data-scale="1" data-min="0" data-max="50" data-more="99999999">
                    <div class="load-outer">
                        <!-- width:选中的总长度比例　　　left:左边开始偏移 -->
                        <div class="load-inner" style="width: 100%; left: 0%;">
                            <!-- 当前数值范围 -->
                            <div class="curr-price">不限</div>
                        </div>
                        <!--　左边圆块开始位置：左侧偏移量　-->
                        <span baidu_alog="wap_listB_JRange&touchend&wap_listB_JRange_price_l_c" class="icon-range icon-low" style="left: 0%;"></span>
                        <!--　右边圆块开始位置：左侧偏移量　-->
                        <span baidu_alog="wap_listB_JRange&touchend&wap_listB_JRange_price_R_c" class="icon-range icon-high" style="left: 100%;"></span>
                    </div>
                    <!-- 下方文案开始标记 -->
                    <span class="load-zero">0</span>
                    <!--　下方文案标记　-->
                    <ul class="load-num">
                        <li></li>
                        <li>10</li>
                        <li></li>
                        <li>20</li>
                        <li></li>
                        <li>30</li>
                        <li></li>
                        <li>40</li>
                        <li></li>
                        <li>不限</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- filter end -->
        <div class="loading"><i class="icon-load01"></i>松开可以刷新</div>
        <!-- 行列表 start -->
        <section class="mod-list js-car-list">
            <div class="find-num bg-shadow active">共为您找到2312辆车</div>
            <ul class="list">
                <li class="list-item" data-scroll-track="15069551@0@0&1111000000000002" data-clue=15069551 data-type=city>
                    <a class="car-info" href="/sjz/ce16af2959ea9264x?from=list&fr_page=list&fr_pos=city&fr_no=0">
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
                <li class="list-item" data-scroll-track="16024237@0@1&1111000000000002" data-clue=16024237 data-type=city>
                    <a class="car-info" href="/sjz/1a6170b4b11708ccx?from=list&fr_page=list&fr_pos=city&fr_no=1">
                        <div class="car-img">
                            <img class="js-lazy-load" src="picture/list-default-img.png" data-original="https://image1.guazistatic.com/qn170818173113a673f9789d8f7035fed3904309a73234.jpg?imageView2/1/w/240/h/160/q/88" alt="起亚智跑 2014款 2.0L 自动两驱版GLS">
                        </div>
                        <h3 class="car-name">起亚智跑 2014款 2.0L 自动两驱版GLS</h3>
                        <div class="car-km">
                            <span class="fl">2014年/5.4万公里</span>
                            <p class="label-pbox clearfix fr hide-icon">
                                <span class="icon-sta-sell">保卖车</span> </p>
                        </div>
                        <div class="car-price">
                            <i class="finance-price">10.94万</i>
                            <span class="index-price"><span>首付3.28</span>万</span>
                        </div>
                        <p class="page-size" style="display: none">1/50</p>
                    </a>
                </li>
                <li class="list-item" data-scroll-track="15737136@0@2&1111000000000002" data-clue=15737136 data-type=city>
                    <a class="car-info" href="/sjz/448695ae8110fdb5x?from=list&fr_page=list&fr_pos=city&fr_no=2">
                        <div class="car-img">
                            <img class="js-lazy-load" src="picture/list-default-img.png" data-original="https://image1.guazistatic.com/qn170810180616c55b98349456d91de51e68a8797a1ec2.jpg?imageView2/1/w/240/h/160/q/88" alt="日产阳光 2011款 1.5XL CVT豪华版">
                        </div>
                        <h3 class="car-name">日产阳光 2011款 1.5XL CVT豪华版</h3>
                        <div class="car-km">
                            <span class="fl">2011年/3.7万公里</span>
                            <p class="label-pbox clearfix fr hide-icon">
                                <span class="icon-sta-sell">保卖车</span> </p>
                        </div>
                        <div class="car-price">
                            <i class="finance-price">4.52万</i>
                            <span class="index-price"><span>首付1.36</span>万</span>
                        </div>
                        <p class="page-size" style="display: none">1/50</p>
                    </a>
                </li>
                <li class="list-item" data-scroll-track="8941787@0@3&1111000000000002" data-clue=8941787 data-type=city>
                    <a class="car-info" href="/sjz/fcbbef37b3bfdf60x?from=list&fr_page=list&fr_pos=city&fr_no=3">
                        <div class="car-img">
                            <img class="js-lazy-load" src="picture/list-default-img.png" data-original="https://image.guazistatic.com/gz01170302/17/57/aa381b65542b8fb6a583a98953b8f19e.jpg@base@tag=imgScale&w=240&h=160&c=1&m=2&q=88" alt="长安悦翔 2010款 三厢 1.5L 手动运动版">
                        </div>
                        <h3 class="car-name">长安悦翔 2010款 三厢 1.5L 手动运动版</h3>
                        <div class="car-km">
                            <span class="fl">2010年/12.2万公里</span>
                            <p class="label-pbox clearfix fr hide-icon">
                                <span class="icon-sta2">急售</span> </p>
                        </div>
                        <div class="car-price">
                            <i class="finance-price">1.60万</i>
                        </div>
                        <p class="page-size" style="display: none">1/50</p>
                    </a>
                </li>
                <li class="list-item" data-scroll-track="15923307@0@4&1111000000000002" data-clue=15923307 data-type=city>
                    <a class="car-info" href="/sjz/7f0c0879ebabcb4bx?from=list&fr_page=list&fr_pos=city&fr_no=4">
                        <div class="car-img">
                            <img class="js-lazy-load" src="picture/list-default-img.png" data-original="https://image1.guazistatic.com/qn170816150712ca90828c00aeed748a214be6f2b764b8.jpg?imageView2/1/w/240/h/160/q/88" alt="起亚K3 2013款 1.6L 自动GLS">
                        </div>
                        <h3 class="car-name">起亚K3 2013款 1.6L 自动GLS</h3>
                        <div class="car-km">
                            <span class="fl">2013年/4.0万公里</span>
                            <p class="label-pbox clearfix fr hide-icon">
                                <span class="icon-sta-sell">保卖车</span> </p>
                        </div>
                        <div class="car-price">
                            <i class="finance-price">7.25万</i>
                            <span class="index-price"><span>首付2.17</span>万</span>
                        </div>
                        <p class="page-size" style="display: none">1/50</p>
                    </a>
                </li>
                <li class="list-item" data-scroll-track="15986854@0@5&1111000000000002" data-clue=15986854 data-type=city>
                    <a class="car-info" href="/sjz/d1c4386c5574ab38x?from=list&fr_page=list&fr_pos=city&fr_no=5">
                        <div class="car-img">
                            <img class="js-lazy-load" src="picture/list-default-img.png" data-original="https://image1.guazistatic.com/qn170818124126ffa25c6c3286cd017b282f58894abbc6.jpg?imageView2/1/w/240/h/160/q/88" alt="日产天籁 2011款 2.5L XL领先版">
                        </div>
                        <h3 class="car-name">日产天籁 2011款 2.5L XL领先版</h3>
                        <div class="car-km">
                            <span class="fl">2011年/8.7万公里</span>
                            <p class="label-pbox clearfix fr hide-icon">
                                <span class="icon-sta-sell">保卖车</span> </p>
                        </div>
                        <div class="car-price">
                            <i class="finance-price">9.75万</i>
                            <span class="index-price"><span>首付2.92</span>万</span>
                        </div>
                        <p class="page-size" style="display: none">1/50</p>
                    </a>
                </li>
                <li class="list-item" data-scroll-track="16035812@0@6&1111000000000002" data-clue=16035812 data-type=city>
                    <a class="car-info" href="/sjz/967d679315e23e16x?from=list&fr_page=list&fr_pos=city&fr_no=6">
                        <div class="car-img">
                            <img class="js-lazy-load" src="picture/list-default-img.png" data-original="https://image1.guazistatic.com/qn170819143119f39c571f909815dfbc437553a03df1d7.jpg?imageView2/1/w/240/h/160/q/88" alt="雪铁龙爱丽舍 2012款 三厢 1.6L 手动科技型CNG">
                            <span class="tag-new">新上架</span>
                        </div>
                        <h3 class="car-name">雪铁龙爱丽舍 2012款 三厢 1.6L 手动科技型CNG</h3>
                        <div class="car-km">
                            <span class="fl">2011年/5.0万公里</span>
                        </div>
                        <div class="car-price">
                            <i class="finance-price">3.45万</i>
                            <span class="index-price"><span>首付1.03</span>万</span>
                        </div>
                        <p class="page-size" style="display: none">1/50</p>
                    </a>
                </li>
                <li class="list-item" data-scroll-track="16012481@0@7&1111000000000002" data-clue=16012481 data-type=city>
                    <a class="car-info" href="/sjz/797069e0fb14ef5cx?from=list&fr_page=list&fr_pos=city&fr_no=7">
                        <div class="car-img">
                            <img class="js-lazy-load" src="picture/list-default-img.png" data-original="https://image1.guazistatic.com/qn170819090851adcf674ecdc963b2187060e174855859.jpg?imageView2/1/w/240/h/160/q/88" alt="北京汽车E系列 2012款 两厢 1.5L 自动乐尚版">
                            <span class="tag-new">新上架</span>
                        </div>
                        <h3 class="car-name">北京汽车E系列 2012款 两厢 1.5L 自动乐尚版</h3>
                        <div class="car-km">
                            <span class="fl">2014年/3.8万公里</span>
                        </div>
                        <div class="car-price">
                            <i class="finance-price">3.90万</i>
                            <span class="index-price"><span>首付1.17</span>万</span>
                        </div>
                        <p class="page-size" style="display: none">1/50</p>
                    </a>
                </li>
                <li class="list-item" data-scroll-track="15948750@0@8&1111000000000002" data-clue=15948750 data-type=city>
                    <a class="car-info" href="/sjz/586cefee28609848x?from=list&fr_page=list&fr_pos=city&fr_no=8">
                        <div class="car-img">
                            <img class="js-lazy-load" src="picture/list-default-img.png" data-original="https://image1.guazistatic.com/qn170817152012f17615e364c53a90482a12740c3eb835.jpg?imageView2/1/w/240/h/160/q/88" alt="别克英朗 2013款 GT 1.6L 自动时尚版">
                        </div>
                        <h3 class="car-name">别克英朗 2013款 GT 1.6L 自动时尚版</h3>
                        <div class="car-km">
                            <span class="fl">2013年/3.3万公里</span>
                        </div>
                        <div class="car-price">
                            <i class="finance-price">7.36万</i>
                            <span class="index-price"><span>首付2.21</span>万</span>
                        </div>
                        <p class="page-size" style="display: none">1/50</p>
                    </a>
                </li>
                <li class="list-item" data-scroll-track="15797870@0@9&1111000000000002" data-clue=15797870 data-type=city>
                    <a class="car-info" href="/sjz/3397d3299c6a1987x?from=list&fr_page=list&fr_pos=city&fr_no=9">
                        <div class="car-img">
                            <img class="js-lazy-load" src="picture/list-default-img.png" data-original="https://image1.guazistatic.com/qn17081319462164e4d5399fd2a127f1ca07ecf19f54e8.jpg?imageView2/1/w/240/h/160/q/88" alt="日产阳光 2011款 1.5XE CVT舒适版">
                        </div>
                        <h3 class="car-name">日产阳光 2011款 1.5XE CVT舒适版</h3>
                        <div class="car-km">
                            <span class="fl">2011年/3.1万公里</span>
                            <p class="label-pbox clearfix fr hide-icon">
                                <span class="icon-sta-sell">保卖车</span> </p>
                        </div>
                        <div class="car-price">
                            <i class="finance-price">4.58万</i>
                            <span class="index-price"><span>首付1.37</span>万</span>
                        </div>
                        <p class="page-size" style="display: none">1/50</p>
                    </a>
                </li>
                <li class="list-item" data-scroll-track="12731193@0@10&1111000000000002" data-clue=12731193 data-type=city>
                    <a class="car-info" href="/sjz/b241547b4078cff5x?from=list&fr_page=list&fr_pos=city&fr_no=10">
                        <div class="car-img">
                            <img class="js-lazy-load" src="picture/list-default-img.png" data-original="https://image1.guazistatic.com/qn1706021433063166c8cfe960240b803f290fb8acf209.jpg?imageView2/1/w/240/h/160/q/88" alt="雪佛兰爱唯欧 2011款 两厢 1.6L AT SX">
                        </div>
                        <h3 class="car-name">雪佛兰爱唯欧 2011款 两厢 1.6L AT SX</h3>
                        <div class="car-km">
                            <span class="fl">2011年/5.9万公里</span>
                        </div>
                        <div class="car-price">
                            <i class="finance-price">4.40万</i>
                            <span class="index-price"><span>首付1.32</span>万</span>
                        </div>
                        <p class="page-size" style="display: none">1/50</p>
                    </a>
                </li>
                <li class="list-item" data-scroll-track="15966194@0@11&1111000000000002" data-clue=15966194 data-type=city>
                    <a class="car-info" href="/sjz/7edc1ba4a1bd5987x?from=list&fr_page=list&fr_pos=city&fr_no=11">
                        <div class="car-img">
                            <img class="js-lazy-load" src="picture/list-default-img.png" data-original="https://image1.guazistatic.com/qn170817133655a3f665ebff569c374d413b56dea42a74.jpg?imageView2/1/w/240/h/160/q/88" alt="奇瑞风云2 2010款 两厢 1.5L 豪华型">
                        </div>
                        <h3 class="car-name">奇瑞风云2 2010款 两厢 1.5L 豪华型</h3>
                        <div class="car-km">
                            <span class="fl">2012年/6.5万公里</span>
                        </div>
                        <div class="car-price">
                            <i class="finance-price">2.18万</i>
                            <span class="index-price"><span>首付0.65</span>万</span>
                        </div>
                        <p class="page-size" style="display: none">1/50</p>
                    </a>
                </li>
                <li class="list-item" data-scroll-track="13502198@0@12&1111000000000002" data-clue=13502198 data-type=city>
                    <a class="car-info" href="/sjz/3e8aa0bce3b78b7ax?from=list&fr_page=list&fr_pos=city&fr_no=12">
                        <div class="car-img">
                            <img class="js-lazy-load" src="picture/list-default-img.png" data-original="https://image1.guazistatic.com/qn170616163528e06f8b88a64e8aac0fa30021d2bb0841.jpg?imageView2/1/w/240/h/160/q/88" alt="斯柯达明锐 2012款 2.0L 手动逸杰版">
                        </div>
                        <h3 class="car-name">斯柯达明锐 2012款 2.0L 手动逸杰版</h3>
                        <div class="car-km">
                            <span class="fl">2012年/9.2万公里</span>
                            <p class="label-pbox clearfix fr hide-icon">
                                <span class="icon-sta2">急售</span> </p>
                        </div>
                        <div class="car-price">
                            <i class="finance-price">5.49万</i>
                            <span class="index-price"><span>首付1.65</span>万</span>
                        </div>
                        <p class="page-size" style="display: none">1/50</p>
                    </a>
                </li>
                <li class="list-item" data-scroll-track="13002202@0@13&1111000000000002" data-clue=13002202 data-type=city>
                    <a class="car-info" href="/sjz/8201edb6ebcb725bx?from=list&fr_page=list&fr_pos=city&fr_no=13">
                        <div class="car-img">
                            <img class="js-lazy-load" src="picture/list-default-img.png" data-original="https://image1.guazistatic.com/qn170604170907d4d817fc341bad6dfa7ef15e0214a4a2.jpg?imageView2/1/w/240/h/160/q/88" alt="荣威550 2010款 550 1.8L 手动启悦贺岁版">
                        </div>
                        <h3 class="car-name">荣威550 2010款 550 1.8L 手动启悦贺岁版</h3>
                        <div class="car-km">
                            <span class="fl">2010年/7.3万公里</span>
                            <p class="label-pbox clearfix fr hide-icon">
                                <span class="icon-sta2">急售</span> </p>
                        </div>
                        <div class="car-price">
                            <i class="finance-price">4.10万</i>
                            <span class="index-price"><span>首付1.23</span>万</span>
                        </div>
                        <p class="page-size" style="display: none">1/50</p>
                    </a>
                </li>
                <li class="list-item" data-scroll-track="15818314@0@14&1111000000000002" data-clue=15818314 data-type=city>
                    <a class="car-info" href="/sjz/a275915a6c5b8a72x?from=list&fr_page=list&fr_pos=city&fr_no=14">
                        <div class="car-img">
                            <img class="js-lazy-load" src="picture/list-default-img.png" data-original="https://image1.guazistatic.com/qn1708131627587017dc1fb489ca1fb0c6aaf07cbc97df.jpg?imageView2/1/w/240/h/160/q/88" alt="雪铁龙爱丽舍 2012款 三厢 1.6L 手动科技型CNG">
                        </div>
                        <h3 class="car-name">雪铁龙爱丽舍 2012款 三厢 1.6L 手动科技型CNG</h3>
                        <div class="car-km">
                            <span class="fl">2014年/2.3万公里</span>
                            <p class="label-pbox clearfix fr hide-icon">
                                <span class="icon-sta2">急售</span> </p>
                        </div>
                        <div class="car-price">
                            <i class="finance-price">4.30万</i>
                            <span class="index-price"><span>首付1.29</span>万</span>
                        </div>
                        <p class="page-size" style="display: none">1/50</p>
                    </a>
                </li>
                <li class="list-item" data-scroll-track="16026983@0@15&1111000000000002" data-clue=16026983 data-type=city>
                    <a class="car-info" href="/sjz/8badcd988cb7eb81x?from=list&fr_page=list&fr_pos=city&fr_no=15">
                        <div class="car-img">
                            <img class="js-lazy-load" src="picture/list-default-img.png" data-original="https://image1.guazistatic.com/qn17081917562026b6bfb85f864ed21d9039d2944bca7d.jpg?imageView2/1/w/240/h/160/q/88" alt="大众高尔夫 2012款 1.4TSI 自动舒适型">
                            <span class="tag-new">新上架</span>
                        </div>
                        <h3 class="car-name">大众高尔夫 2012款 1.4TSI 自动舒适型</h3>
                        <div class="car-km">
                            <span class="fl">2012年/8.3万公里</span>
                        </div>
                        <div class="car-price">
                            <i class="finance-price">8.50万</i>
                            <span class="index-price"><span>首付2.55</span>万</span>
                        </div>
                        <p class="page-size" style="display: none">1/50</p>
                    </a>
                </li>
                <li class="list-item" data-scroll-track="12788642@0@16&1111000000000002" data-clue=12788642 data-type=city>
                    <a class="car-info" href="/sjz/90d1b8fa78f5b801x?from=list&fr_page=list&fr_pos=city&fr_no=16">
                        <div class="car-img">
                            <img class="js-lazy-load" src="picture/list-default-img.png" data-original="https://image1.guazistatic.com/qn1705301820035c9b003c3fe2a6c2e3171291504e4570.jpg?imageView2/1/w/240/h/160/q/88" alt="雪佛兰科鲁兹 2010款 1.6L SL天地版 MT">
                        </div>
                        <h3 class="car-name">雪佛兰科鲁兹 2010款 1.6L SL天地版 MT</h3>
                        <div class="car-km">
                            <span class="fl">2011年/10.1万公里</span>
                            <p class="label-pbox clearfix fr hide-icon">
                                <span class="icon-sta2">急售</span> </p>
                        </div>
                        <div class="car-price">
                            <i class="finance-price">4.60万</i>
                            <span class="index-price"><span>首付1.38</span>万</span>
                        </div>
                        <p class="page-size" style="display: none">1/50</p>
                    </a>
                </li>
                <li class="list-item" data-scroll-track="15292195@0@17&1111000000000002" data-clue=15292195 data-type=city>
                    <a class="car-info" href="/sjz/0cbd5827797cba8cx?from=list&fr_page=list&fr_pos=city&fr_no=17">
                        <div class="car-img">
                            <img class="js-lazy-load" src="picture/list-default-img.png" data-original="https://image1.guazistatic.com/qn170731103627858f9b422034b2fc5a9ef15a4ff536d2.jpg?imageView2/1/w/240/h/160/q/88" alt="别克英朗 2013款 GT 1.8L 自动时尚版">
                        </div>
                        <h3 class="car-name">别克英朗 2013款 GT 1.8L 自动时尚版</h3>
                        <div class="car-km">
                            <span class="fl">2014年/4.1万公里</span>
                            <p class="label-pbox clearfix fr hide-icon">
                                <span class="icon-sta2">急售</span> </p>
                        </div>
                        <div class="car-price">
                            <i class="finance-price">8.25万</i>
                            <span class="index-price"><span>首付2.48</span>万</span>
                        </div>
                        <p class="page-size" style="display: none">1/50</p>
                    </a>
                </li>
                <li class="list-item" data-scroll-track="15982454@0@18&1111000000000002" data-clue=15982454 data-type=city>
                    <a class="car-info" href="/sjz/fd792ebcefc2994fx?from=list&fr_page=list&fr_pos=city&fr_no=18">
                        <div class="car-img">
                            <img class="js-lazy-load" src="picture/list-default-img.png" data-original="https://image1.guazistatic.com/qn170819190329ad45f72f9fb430335adb3a3790718d77.jpg?imageView2/1/w/240/h/160/q/88" alt="现代索纳塔八 2011款 2.0L 自动豪华版">
                            <span class="tag-new">新上架</span>
                        </div>
                        <h3 class="car-name">现代索纳塔八 2011款 2.0L 自动豪华版</h3>
                        <div class="car-km">
                            <span class="fl">2011年/12.5万公里</span>
                        </div>
                        <div class="car-price">
                            <i class="finance-price">7.79万</i>
                            <span class="index-price"><span>首付2.34</span>万</span>
                        </div>
                        <p class="page-size" style="display: none">1/50</p>
                    </a>
                </li>
                <li class="list-item" data-scroll-track="14936838@0@19&1111000000000002" data-clue=14936838 data-type=city>
                    <a class="car-info" href="/sjz/156d578b33727306x?from=list&fr_page=list&fr_pos=city&fr_no=19">
                        <div class="car-img">
                            <img class="js-lazy-load" src="picture/list-default-img.png" data-original="https://image1.guazistatic.com/qn1707241956177ec846458e92646b5c7779b28c507933.jpg?imageView2/1/w/240/h/160/q/88" alt="现代索纳塔八 2011款 2.0L 自动豪华版">
                        </div>
                        <h3 class="car-name">现代索纳塔八 2011款 2.0L 自动豪华版</h3>
                        <div class="car-km">
                            <span class="fl">2012年/6.5万公里</span>
                            <p class="label-pbox clearfix fr hide-icon">
                                <span class="icon-sta2">急售</span> </p>
                        </div>
                        <div class="car-price">
                            <i class="finance-price">9.30万</i>
                            <span class="index-price"><span>首付2.79</span>万</span>
                        </div>
                        <p class="page-size" style="display: none">1/50</p>
                    </a>
                </li>
                <li class="list-item" data-scroll-track="16050639@0@20&1111000000000002" data-clue=16050639 data-type=city>
                    <a class="car-info" href="/sjz/a158bd990c57f503x?from=list&fr_page=list&fr_pos=city&fr_no=20">
                        <div class="car-img">
                            <img class="js-lazy-load" src="picture/list-default-img.png" data-original="https://image1.guazistatic.com/qn170819122551c617cb8d0cda256672a3c8b5ff5e847e.jpg?imageView2/1/w/240/h/160/q/88" alt="现代ix25 2015款 1.6L 自动两驱智能型GLS">
                            <span class="tag-new">新上架</span>
                        </div>
                        <h3 class="car-name">现代ix25 2015款 1.6L 自动两驱智能型GLS</h3>
                        <div class="car-km">
                            <span class="fl">2016年/2.5万公里</span>
                            <p class="label-pbox clearfix fr hide-icon">
                                <span class="icon-sta1">准新车</span> </p>
                        </div>
                        <div class="car-price">
                            <i class="finance-price">10.95万</i>
                            <span class="index-price"><span>首付3.29</span>万</span>
                        </div>
                        <p class="page-size" style="display: none">1/50</p>
                    </a>
                </li>
                <li class="list-item" data-scroll-track="15967788@0@21&1111000000000002" data-clue=15967788 data-type=city>
                    <a class="car-info" href="/sjz/bf337f09e246c01fx?from=list&fr_page=list&fr_pos=city&fr_no=21">
                        <div class="car-img">
                            <img class="js-lazy-load" src="picture/list-default-img.png" data-original="https://image1.guazistatic.com/qn1708171547524bcea8c7c13d88ea438b001c24a89994.jpg?imageView2/1/w/240/h/160/q/88" alt="铃木启悦 2015款 1.6L 手动舒享型">
                        </div>
                        <h3 class="car-name">铃木启悦 2015款 1.6L 手动舒享型</h3>
                        <div class="car-km">
                            <span class="fl">2017年/400公里</span>
                            <p class="label-pbox clearfix fr hide-icon">
                                <span class="icon-sta1">准新车</span> </p>
                        </div>
                        <div class="car-price">
                            <i class="finance-price">6.20万</i>
                            <span class="index-price"><span>首付1.86</span>万</span>
                        </div>
                        <p class="page-size" style="display: none">1/50</p>
                    </a>
                </li>
                <li class="list-item" data-scroll-track="15664879@0@22&1111000000000002" data-clue=15664879 data-type=city>
                    <a class="car-info" href="/sjz/6af3314fbf22286ex?from=list&fr_page=list&fr_pos=city&fr_no=22">
                        <div class="car-img">
                            <img class="js-lazy-load" src="picture/list-default-img.png" data-original="https://image1.guazistatic.com/qn1708091318359fde82561d58b794e3be1331387a4079.jpg?imageView2/1/w/240/h/160/q/88" alt="标致3008 2015款 1.6THP 自动潮流版">
                        </div>
                        <h3 class="car-name">标致3008 2015款 1.6THP 自动潮流版</h3>
                        <div class="car-km">
                            <span class="fl">2016年/2.3万公里</span>
                            <p class="label-pbox clearfix fr hide-icon">
                                <span class="icon-sta1">准新车</span> <span class="icon-sta2">急售</span> </p>
                        </div>
                        <div class="car-price">
                            <i class="finance-price">13.30万</i>
                            <span class="index-price"><span>首付3.99</span>万</span>
                        </div>
                        <p class="page-size" style="display: none">1/50</p>
                    </a>
                </li>
                <li class="list-item" data-scroll-track="15346812@0@23&1111000000000002" data-clue=15346812 data-type=city>
                    <a class="car-info" href="/sjz/bec8868dd316d4cbx?from=list&fr_page=list&fr_pos=city&fr_no=23">
                        <div class="car-img">
                            <img class="js-lazy-load" src="picture/list-default-img.png" data-original="https://image1.guazistatic.com/qn170801194328e19724292e50c0eceb539b7dbf3a73b0.jpg?imageView2/1/w/240/h/160/q/88" alt="力帆320 2012款 冠军版 1.3L 手动酷跃型">
                        </div>
                        <h3 class="car-name">力帆320 2012款 冠军版 1.3L 手动酷跃型</h3>
                        <div class="car-km">
                            <span class="fl">2012年/5.8万公里</span>
                            <p class="label-pbox clearfix fr hide-icon">
                                <span class="icon-sta2">急售</span> </p>
                        </div>
                        <div class="car-price">
                            <i class="finance-price">1.20万</i>
                        </div>
                        <p class="page-size" style="display: none">1/50</p>
                    </a>
                </li>
                <li class="list-item" data-scroll-track="12649332@0@24&1111000000000002" data-clue=12649332 data-type=city>
                    <a class="car-info" href="/sjz/8ac911da23eb554dx?from=list&fr_page=list&fr_pos=city&fr_no=24">
                        <div class="car-img">
                            <img class="js-lazy-load" src="picture/list-default-img.png" data-original="https://image1.guazistatic.com/qn170527172250cceffbba0e9d5007ceae8defef55b047.jpg?imageView2/1/w/240/h/160/q/88" alt="哈弗H9 2015款 2.0T 豪华型 7座">
                        </div>
                        <h3 class="car-name">哈弗H9 2015款 2.0T 豪华型 7座</h3>
                        <div class="car-km">
                            <span class="fl">2015年/2.4万公里</span>
                            <p class="label-pbox clearfix fr hide-icon">
                                <span class="icon-sta2">急售</span> </p>
                        </div>
                        <div class="car-price">
                            <i class="finance-price">17.50万</i>
                            <span class="index-price"><span>首付5.25</span>万</span>
                        </div>
                        <p class="page-size" style="display: none">1/50</p>
                    </a>
                </li>
                <li class="list-item" data-scroll-track="15879422@0@25&1111000000000002" data-clue=15879422 data-type=city>
                    <a class="car-info" href="/sjz/fb259e2605f306b4x?from=list&fr_page=list&fr_pos=city&fr_no=25">
                        <div class="car-img">
                            <img class="js-lazy-load" src="picture/list-default-img.png" data-original="https://image1.guazistatic.com/qn1708151859286838190f7bb1e5312947afe5085a8bb1.jpg?imageView2/1/w/240/h/160/q/88" alt="现代瑞纳 2014款 1.4L 手动智能型GLS">
                        </div>
                        <h3 class="car-name">现代瑞纳 2014款 1.4L 手动智能型GLS</h3>
                        <div class="car-km">
                            <span class="fl">2014年/3.5万公里</span>
                        </div>
                        <div class="car-price">
                            <i class="finance-price">4.50万</i>
                            <span class="index-price"><span>首付1.35</span>万</span>
                        </div>
                        <p class="page-size" style="display: none">1/50</p>
                    </a>
                </li>
                <li class="list-item" data-scroll-track="14772631@0@26&1111000000000002" data-clue=14772631 data-type=city>
                    <a class="car-info" href="/sjz/c13bd30620086e05x?from=list&fr_page=list&fr_pos=city&fr_no=26">
                        <div class="car-img">
                            <img class="js-lazy-load" src="picture/list-default-img.png" data-original="https://image.guazistatic.com/gz01170719/11/27/d47e00b7b989b3814f0fca96fb36a396.jpg@base@tag=imgScale&w=240&h=160&c=1&m=2&q=88" alt="日产楼兰 2015款 2.5 S/C HEV XV 四驱混动旗舰版">
                        </div>
                        <h3 class="car-name">日产楼兰 2015款 2.5 S/C HEV XV 四驱混动旗舰版</h3>
                        <div class="car-km">
                            <span class="fl">2017年/100公里</span>
                            <p class="label-pbox clearfix fr hide-icon">
                                <span class="icon-sta1">准新车</span> <span class="icon-sta2">急售</span> </p>
                        </div>
                        <div class="car-price">
                            <i class="finance-price">30.00万</i>
                            <span class="index-price"><span>首付9.00</span>万</span>
                        </div>
                        <p class="page-size" style="display: none">1/50</p>
                    </a>
                </li>
                <li class="list-item" data-scroll-track="15997098@0@27&1111000000000002" data-clue=15997098 data-type=city>
                    <a class="car-info" href="/sjz/452f3d81678e6279x?from=list&fr_page=list&fr_pos=city&fr_no=27">
                        <div class="car-img">
                            <img class="js-lazy-load" src="picture/list-default-img.png" data-original="https://image1.guazistatic.com/qn1708181146344a9879d1d6bb4f9d910c6b47283cc091.jpg?imageView2/1/w/240/h/160/q/88" alt="比亚迪F0 2010款 尚酷爱国版 1.0L 铉酷型">
                        </div>
                        <h3 class="car-name">比亚迪F0 2010款 尚酷爱国版 1.0L 铉酷型</h3>
                        <div class="car-km">
                            <span class="fl">2010年/5.3万公里</span>
                        </div>
                        <div class="car-price">
                            <i class="finance-price">1.10万</i>
                        </div>
                        <p class="page-size" style="display: none">1/50</p>
                    </a>
                </li>
                <li class="list-item" data-scroll-track="16014780@0@28&1111000000000002" data-clue=16014780 data-type=city>
                    <a class="car-info" href="/sjz/0b78a714426b1f99x?from=list&fr_page=list&fr_pos=city&fr_no=28">
                        <div class="car-img">
                            <img class="js-lazy-load" src="picture/list-default-img.png" data-original="https://image1.guazistatic.com/qn170818131948c045c21193d7d3c7293e8126b29ca385.jpg?imageView2/1/w/240/h/160/q/88" alt="丰田威驰 2015款 1.5L 自动智享星光版">
                        </div>
                        <h3 class="car-name">丰田威驰 2015款 1.5L 自动智享星光版</h3>
                        <div class="car-km">
                            <span class="fl">2015年/1.6万公里</span>
                        </div>
                        <div class="car-price">
                            <i class="finance-price">7.10万</i>
                            <span class="index-price"><span>首付2.13</span>万</span>
                        </div>
                        <p class="page-size" style="display: none">1/50</p>
                    </a>
                </li>
                <li class="list-item" data-scroll-track="15834255@0@29&1111000000000002" data-clue=15834255 data-type=city>
                    <a class="car-info" href="/sjz/db88d5584cdbf6b9x?from=list&fr_page=list&fr_pos=city&fr_no=29">
                        <div class="car-img">
                            <img class="js-lazy-load" src="picture/list-default-img.png" data-original="https://image1.guazistatic.com/qn170813165338c2c31508221c563dd991f29aa98e9400.jpg?imageView2/1/w/240/h/160/q/88" alt="雪佛兰景程 2012款 1.8 致真版 MT">
                        </div>
                        <h3 class="car-name">雪佛兰景程 2012款 1.8 致真版 MT</h3>
                        <div class="car-km">
                            <span class="fl">2012年/5.5万公里</span>
                            <p class="label-pbox clearfix fr hide-icon">
                                <span class="icon-sta2">急售</span> </p>
                        </div>
                        <div class="car-price">
                            <i class="finance-price">4.55万</i>
                            <span class="index-price"><span>首付1.36</span>万</span>
                        </div>
                        <p class="page-size" style="display: none">1/50</p>
                    </a>
                </li>
                <!-- <li class="banbox-ps js-app-banner" baidu_alog="wap_list_app&click&wap_list_appguanggao_c">
                    <div class="banbox-ps">
                        <span class="closed-btn guide-close-brand"><span class="guide-close">关闭</span></span>
                        <a href="http://app.guazistatic.com/2017070715535087_guazi_android_pub_3.2.1.0_app_self_guaziwap.apk ">
                <img src="picture/app_down.png">
                            </a>
                    </div>
                </li> -->
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
        <div class="loading active"><i class="icon-load02 iconbg"></i>上拉查看更多</div>
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

<!-- <div class="popup-wrap" id="app-pub">
    <div class="popup popup-downapp popup-downapp2">
        <a href="javascript:;" class="close-btn">关闭按钮</a>
        <div class="popup-body">
            <div class="app-tit">
                <h1>下载APP</h1>
                <h2><span>收藏优质车源</span><span>抢先一步</span></h2>
            </div>
            <div class="form-deliver">
                <ul class="down-list fl">
                    <li>一键收藏</li>
                    <li>上新提醒</li>
                    <li>降价提醒</li>
                </ul>
                <div class="phone-bg fr"></div>
            </div>

            <div class="btn-app" data-url="http://app.guazistatic.com/2017070715535087_guazi_android_pub_3.2.1.0_app_self_guaziwap.apk " baidu_alog="wap_app_down&click&wap_other_appdown_1_c"  >
                <a href="javascript:void(0);" class="btn" data-gzlog="tracking_type=click&eventid=0000000000000430">去下载<i class="icon-download"></i></a>
            </div>
        </div>
    </div>
</div> -->

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
                        <div class="btn-app" data-url="http://app.guazistatic.com/2017070715535087_guazi_android_pub_3.2.1.0_app_self_guaziwap.apk ">
                <a href="javascript:void(0);" class="btn-layer-download" id="downLoadUrl" data-gzlog="">下载APP查看<i class="icon-download"></i></a>
            </div>
                    </div>
    </div>
</div>
<div class="tiplayer" id="errorDis"><span class="textcon" id="errorCont">提交失败</span></div>
@endsection