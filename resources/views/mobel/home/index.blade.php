@extends('mobel.main')

@section('title')
    
@endsection

@section('head_content')
    <link type="text/css" rel="stylesheet" href="{{URL::asset('mobel/css/indexHead.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('mobel/css/logo.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('mobel/css/home.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('mobel/css/serach.css')}}">
@endsection

@section('content')
<!-- 头部搜索框 -->
<!-- <header class="heading search-box" style="display:none;" id="search_list" data-id="1" data-domain="sjz" >
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
</header> -->
    <!-- search end -->
    <header class="head-index">
        <a class="gz-logo fl" href="" ></a>
        <div class="gz-search" id="open_search">
            <a href="" class="local-city" >石家庄</a>
            <!-- <div class="search-ipt" data-role="vehicleSearch">搜索您想要的车</div> -->
        </div>
    </header>
    <section class="DoesNotContainCity">
        <div class="focus lazyload" id="slide_banner" data-interval="3000">
            <ul class="focus-pics" data-role="list" style="width: 500%;">
                <li data-role="item">
                    <a href="">
                        <img data-role="lazyloadImg" src="{{URL::asset('mobel/images/07b551667881989d8f7feac278bc44b6.jpg')}}" alt="">
                    </a>
                </li>
                <li data-role="item" data-gzlog="tracking_type=click&eventid=1110713000000002">
                    <a href="">
                <img data-role="lazyloadImg"
                     data-url="picture/f24910b5b878420b6f61021153567e67.png@base@tag=imgscale&w=640&h=290&q=88"
                     data-src="https://image.guazistatic.com/gz01170713/10/20/f24910b5b878420b6f61021153567e67.png@base@tag=imgScale&w=640&h=290&q=88"
                     src="{{URL::asset('mobel/images/07b551667881989d8f7feac278bc44b6.jpg')}}" alt="">
            </a>
                </li>
                <li data-role="item" data-gzlog="tracking_type=click&eventid=1110200000000028">
                    <a href="">
                <img data-role="lazyloadImg"
                     data-url="picture/c46e5777d6f42b2b264e7b93d2a12b39.png@base@tag=imgscale&w=640&h=290&q=88"
                     data-src="https://image.guazistatic.com/gz01170630/21/07/c46e5777d6f42b2b264e7b93d2a12b39.png@base@tag=imgScale&w=640&h=290&q=88"
                     src="{{URL::asset('mobel/images/07b551667881989d8f7feac278bc44b6.jpg')}}" alt="">
            </a>
                </li>
                <li data-role="item" data-gzlog="tracking_type=click&eventid=1010000000000333">
                    <a href="">
                <img data-role="lazyloadImg"
                     data-url="picture/aad102be4203158dedfc833e0786c59e.png@base@tag=imgscale&w=640&h=290&q=88"
                     data-src="https://image.guazistatic.com/gz01170523/11/28/aad102be4203158dedfc833e0786c59e.png@base@tag=imgScale&w=640&h=290&q=88"
                     src="{{URL::asset('mobel/images/07b551667881989d8f7feac278bc44b6.jpg')}}" alt="">
            </a>
                </li>
                <li data-role="item" data-gzlog="tracking_type=click&eventid=1110200000000033">
                    <a href="">
                <img data-role="lazyloadImg"
                     data-url="picture/07b551667881989d8f7feac278bc44b6.jpg@base@tag=imgscale&w=640&h=290&q=88"
                     data-src="https://image.guazistatic.com/gz01170418/17/39/07b551667881989d8f7feac278bc44b6.jpg@base@tag=imgScale&w=640&h=290&q=88"
                     src="{{URL::asset('mobel/images/07b551667881989d8f7feac278bc44b6.jpg')}}" alt="">
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
                <li class="list-item">
                    <a href="">
                    5万以下
                    </a>
                </li>
                <li class="list-item">
                    <a href="" >
                    5-10万
                </a>
                </li>
                <li class="list-item">
                    <a href="">
                    10-15万
                </a>
                </li>
                <li class="list-item">
                    <a href="" >
                    15万以上
                </a>
                </li>               
            </ul>
            <ul class="list row-seven brand clearfix">
                <li class="list-item" data-url="url=dazhong">
                    <a href="" >
                    <i class="icon icon-dazhong"></i>
                    大众
                </a>
                </li>
                <li class="list-item" data-url="url=hyundai">
                    <a href="" >
                    <i class="icon icon-hyundai"></i>
                    现代
                </a>
                </li>
                <li class="list-item" data-url="url=ford">
                    <a href="" >
                    <i class="icon icon-ford"></i>
                    福特
                </a>
                </li>
                <li class="list-item" data-url="url=chevrolet">
                    <a href="" >
                    <i class="icon icon-chevrolet"></i>
                    雪佛兰
                </a>
                </li>
                <li class="list-item" data-url="url=buick">
                    <a href="" >
                    <i class="icon icon-buick"></i>
                    别克
                </a>
                </li>
                <li class="list-item" data-url="url=citroen">
                    <a href="" >
                    <i class="icon icon-citroen"></i>
                    雪铁龙
                </a>
                </li>
                <li class="list-item" data-url="url=byd">
                    <a href="" >
                    <i class="icon icon-byd"></i>
                    比亚迪
                </a>
                </li>
            </ul>
        </div>
        <!-- column end -->
        <ul class="buttonbox cleafix">
            <li><a href="/sjz/buy?ifid=from_wap_shouyebuy" data-gzlog="tracking_type=click&eventid=0600000000000232">我要买车</a></li>
            <li><a href="/sjz/sell?ifid=from_wap_shouyesell&clueS=10" data-gzlog="tracking_type=click&eventid=0600000000000231">免费卖车</a></li>
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
                    <li class="list-item" data-clue="16024237" data-type="city" data-gzlog="tracking_type=click&eventid=0290230000000118&carid=16024237@0">
                        <a class="car-info" href="/sjz/1a6170b4b11708ccx/?fr_page=index&fr_pos=rec&fr_no=0&from=index">
                            <div class="car-img">
                                <img data-role="lazyloadImg" class="js-lazy-load" src="http://www.sjztcl.com/uploads/car/201709/images/mmexport1505259655842副本.jpg" data-url="https://image1.guazistatic.com/qn170818173113a673f9789d8f7035fed3904309a73234.jpg?imageView2/1/w/287/h/192/q/88" alt="起亚智跑 2014款 2.0L 自动两驱版GLS">
                            </div>
                            <h3 class="car-name">起亚智跑 2014款 2.0L 自动两驱版GLS</h3>
                            <div class="car-km">
                                <span class="fl">2014年/5.4万公里</span> </div>
                            <div class="car-price">
                                <strong class="fl">10.94万</strong>
                                <span class="fc-ac fl">                         20.90万
                            </span>
                            </div>
                            <p class="page-size" style="display: none">1/50</p>
                        </a>
                    </li>
                    <li class="list-item" data-clue="15777600" data-type="city" data-gzlog="tracking_type=click&eventid=0290230000000118&carid=15777600@1">
                        <a class="car-info" href="/sjz/de49d35860063060x/?fr_page=index&fr_pos=rec&fr_no=1&from=index">
                            <div class="car-img">
                                <img data-role="lazyloadImg" class="js-lazy-load" src="http://www.sjztcl.com/uploads/car/201709/images/mmexport1505259655842副本.jpg" data-url="https://image1.guazistatic.com/qn1708181457438e97712d6d27ca0b40129b0ce1ae526f.jpg?imageView2/1/w/287/h/192/q/88" alt="中华V3 2016款 1.5L 手动智能型">
                            </div>
                            <h3 class="car-name">中华V3 2016款 1.5L 手动智能型</h3>
                            <div class="car-km">
                                <span class="fl">2016年/1.5万公里</span> </div>
                            <div class="car-price">
                                <strong class="fl">5.50万</strong>
                                <span class="fc-ac fl">                         8.40万
                            </span>
                            </div>
                            <p class="page-size" style="display: none">1/50</p>
                        </a>
                    </li>
                    <li class="list-item" data-clue="16022230" data-type="city" data-gzlog="tracking_type=click&eventid=0290230000000118&carid=16022230@2">
                        <a class="car-info" href="/sjz/de8b6406fc44d64dx/?fr_page=index&fr_pos=rec&fr_no=2&from=index">
                            <div class="car-img">
                                <img data-role="lazyloadImg" class="js-lazy-load" src="http://www.sjztcl.com/uploads/car/201709/images/mmexport1505259655842副本.jpg" data-url="https://image1.guazistatic.com/qn1708181743275c51fb9246a365977e18991a75d6b577.jpg?imageView2/1/w/287/h/192/q/88" alt="现代ix35 2015款 2.0L 自动两驱智能型 国IV">
                            </div>
                            <h3 class="car-name">现代ix35 2015款 2.0L 自动两驱智能型 国IV</h3>
                            <div class="car-km">
                                <span class="fl">2015年/4.2万公里</span> </div>
                            <div class="car-price">
                                <strong class="fl">11.50万</strong>
                                <span class="fc-ac fl">                         19.20万
                            </span>
                            </div>
                            <p class="page-size" style="display: none">1/50</p>
                        </a>
                    </li>
                    <li class="list-item" data-clue="15069551" data-type="city" data-gzlog="tracking_type=click&eventid=0290230000000118&carid=15069551@3">
                        <a class="car-info" href="/sjz/ce16af2959ea9264x/?fr_page=index&fr_pos=rec&fr_no=3&from=index">
                            <div class="car-img">
                                <img data-role="lazyloadImg" class="js-lazy-load" src="http://www.sjztcl.com/uploads/car/201709/images/mmexport1505259655842副本.jpg" data-url="https://image1.guazistatic.com/qn170806104327f6393d7b7e192acfbaa21e334f203220.jpg?imageView2/1/w/287/h/192/q/88" alt="日产阳光 2011款 1.5XL CVT豪华版">
                            </div>
                            <h3 class="car-name">日产阳光 2011款 1.5XL CVT豪华版</h3>
                            <div class="car-km">
                                <span class="fl">2011年/6.7万公里</span> </div>
                            <div class="car-price">
                                <strong class="fl">4.39万</strong>
                                <span class="fc-ac fl">                         11.20万
                            </span>
                            </div>
                            <p class="page-size" style="display: none">1/50</p>
                        </a>
                    </li>
                    <li class="list-item" data-clue="16016819" data-type="city" data-gzlog="tracking_type=click&eventid=0290230000000118&carid=16016819@4">
                        <a class="car-info" href="/sjz/9a458ce1161fb2bfx/?fr_page=index&fr_pos=rec&fr_no=4&from=index">
                            <div class="car-img">
                                <img data-role="lazyloadImg" class="js-lazy-load" src="http://www.sjztcl.com/uploads/car/201709/images/mmexport1505259655842副本.jpg" data-url="https://image1.guazistatic.com/qn17081816194860428b22796036cca86dc77ced565a27.jpg?imageView2/1/w/287/h/192/q/88" alt="MG3 2014款 1.5L 手动超值版">
                            </div>
                            <h3 class="car-name">MG3 2014款 1.5L 手动超值版</h3>
                            <div class="car-km">
                                <span class="fl">2013年/4.9万公里</span> </div>
                            <div class="car-price">
                                <strong class="fl">3.88万</strong>
                                <span class="fc-ac fl">                         8.30万
                            </span>
                            </div>
                            <p class="page-size" style="display: none">1/50</p>
                        </a>
                    </li>
                    <li class="list-item" data-clue="15911533" data-type="city" data-gzlog="tracking_type=click&eventid=0290230000000118&carid=15911533@5">
                        <a class="car-info" href="/sjz/9b07fe623418137bx/?fr_page=index&fr_pos=rec&fr_no=5&from=index">
                            <div class="car-img">
                                <img data-role="lazyloadImg" class="js-lazy-load" src="http://www.sjztcl.com/uploads/car/201709/images/mmexport1505259655842副本.jpg" data-url="https://image1.guazistatic.com/qn1708161005377ed3fed3eab5284e975fad037029c648.jpg?imageView2/1/w/287/h/192/q/88" alt="丰田RAV4 2011款 2.0L 手动四驱版">
                            </div>
                            <h3 class="car-name">丰田RAV4 2011款 2.0L 手动四驱版</h3>
                            <div class="car-km">
                                <span class="fl">2011年/13.9万公里</span> </div>
                            <div class="car-price">
                                <strong class="fl">9.07万</strong>
                                <span class="fc-ac fl">                         22.60万
                            </span>
                            </div>
                            <p class="page-size" style="display: none">1/50</p>
                        </a>
                    </li>
                    <li class="list-item" data-clue="16023691" data-type="city" data-gzlog="tracking_type=click&eventid=0290230000000118&carid=16023691@6">
                        <a class="car-info" href="/sjz/9525bfaf5877adeax/?fr_page=index&fr_pos=rec&fr_no=6&from=index">
                            <div class="car-img">
                                <img data-role="lazyloadImg" class="js-lazy-load" src="http://www.sjztcl.com/uploads/car/201709/images/mmexport1505259655842副本.jpg" data-url="https://image1.guazistatic.com/qn1708181619282aa52763702fa3422b779ae14a88ff48.jpg?imageView2/1/w/287/h/192/q/88" alt="大众宝来 2011款 1.6L 手动舒适型">
                            </div>
                            <h3 class="car-name">大众宝来 2011款 1.6L 手动舒适型</h3>
                            <div class="car-km">
                                <span class="fl">2010年/10.3万公里</span> </div>
                            <div class="car-price">
                                <strong class="fl">4.99万</strong>
                                <span class="fc-ac fl">                         12.90万
                            </span>
                            </div>
                            <p class="page-size" style="display: none">1/50</p>
                        </a>
                    </li>
                    <li class="list-item" data-clue="15307378" data-type="city" data-gzlog="tracking_type=click&eventid=0290230000000118&carid=15307378@7">
                        <a class="car-info" href="/sjz/bbc2c9a5b4ba171bx/?fr_page=index&fr_pos=rec&fr_no=7&from=index">
                            <div class="car-img">
                                <img data-role="lazyloadImg" class="js-lazy-load" src="http://www.sjztcl.com/uploads/car/201709/images/mmexport1505259655842副本.jpg" data-url="https://image1.guazistatic.com/qn170802082216470fff44ecb8c83ac3d335538ceb03ea.jpg?imageView2/1/w/287/h/192/q/88" alt="雪铁龙世嘉 2011款 三厢 1.6L 手动时尚型">
                            </div>
                            <h3 class="car-name">雪铁龙世嘉 2011款 三厢 1.6L 手动时尚型</h3>
                            <div class="car-km">
                                <span class="fl">2012年/7.4万公里</span> </div>
                            <div class="car-price">
                                <strong class="fl">4.33万</strong>
                                <span class="fc-ac fl">                         11.80万
                            </span>
                            </div>
                            <p class="page-size" style="display: none">1/50</p>
                        </a>
                    </li>
                    <li class="list-item" data-gzlog="tracking_type=click&eventid=1110200000000008">
                        <div class="btnbox"><a href="/sjz/buy" class="btnwhite">查看更多车源</a></div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
@endsection

@section('footer_content')
    @include('mobel.footer')
@endsection