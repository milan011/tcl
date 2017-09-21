@extends('show.mainnew')

@section('title')
    <title>{{$title}}</title>
    <meta name="keywords" content="二手车,二手车交易市场,二手车网上交易平台,石家庄二手车，石家庄淘车乐,石家庄二手车交易平台，石家庄二手车交易">
    <meta name="description" content="石家庄淘车乐是河北省最大的二手车交易平台,二手车源信息最真实,最值得信赖的网上二手车交易市场,提供二手车评估,二手车报价,二手车交易等相关服务,买卖二手车就上淘车乐">
@endsection

@section('head_content')
    <!-- 买车页面 -->
    <!-- <link type="text/css" rel="stylesheet" href="{{URL::asset('newShow/css/list.css')}}"> -->
    <link type="text/css" rel="stylesheet" href="{{URL::asset('newShow/css/list.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('newShow/css/newbuy.css')}}">
    <!-- 首页脚本  -->
    <!-- <script type="text/javascript" src="../js/index.js"></script> -->
    <!-- <script type="text/javascript" src="{{URL::asset('js/tcl/home/index.js')}}"></script> -->


@endsection


@section('current_city_name')
    {{$show_city_name}}
@endsection

@section('content')
<div class="w">
    <div class="screen">
    <!-- 品牌 -->
    <dl class="clearfix">
        <dt>品牌</dt>
        <dd>
            <div class="dd-top">
                <span class="a-box">
                    <!-- 不限 -->
                    <a href="/sjz/buy/#bread">不限</a>
                    <!-- 热门品牌 -->
                    <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=brand&amp;brand=dazhong&amp;type=hot" href="/sjz/dazhong/#bread">大众</a>
                    <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=brand&amp;brand=hyundai&amp;type=hot" href="/sjz/hyundai/#bread">现代</a>
                </span>
                <!-- 点击全部为span添加class名active -->
                <span class="dd-btn js-disAll js-option-hid" data-local="js-brand">全部<i></i></span>
            </div>
            <div class="dd-all clearfix js-brand js-option-hid-info" style="display: none;">
                <ul>
                    <li>
                        <label>A</label>
                        <p>
                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=brand&amp;brand=audi" href="/sjz/audi/#bread">奥迪</a>
                        </p>
                    </li>
                    <li>
                        <label>B</label>
                        <p>
                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=brand&amp;brand=buick" href="/sjz/buick/#bread">别克</a>
                            
                        </p>
                    </li>
                    <li>
                        <label>C</label>
                        <p>
                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=brand&amp;brand=changan" href="/sjz/changan/#bread">长安</a>
                            
                        </p>
                    </li>
                    <li>
                        <label>D</label>
                        <p>
                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=brand&amp;brand=dazhong" href="/sjz/dazhong/#bread">大众</a>
                            
                        </p>
                    </li>
                    <li>
                        <label>F</label>
                        <p>
                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=brand&amp;brand=ford" href="/sjz/ford/#bread">福特</a>
                            
                        </p>
                    </li>
                    <li>
                        <label>G</label>
                        <p>
                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=brand&amp;brand=guanzhi" href="/sjz/guanzhi/#bread">观致</a>
                            
                        </p>
                    </li>
                </ul>
                <ul>
                    <li>
                        <label>H</label>
                        <p>
                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=brand&amp;brand=hafu" href="/sjz/hafu/#bread">哈弗</a>
                            
                        </p>
                    </li>
                    <li>
                        <label>J</label>
                        <p>
                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=brand&amp;brand=jili" href="/sjz/jili/#bread">吉利</a>
                            
                        </p>
                    </li>
                    <li>
                        <label>K</label>
                        <p>
                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=brand&amp;brand=cadillac" href="/sjz/cadillac/#bread">凯迪拉克</a>
                            
                        </p>
                    </li>
                    <li>
                        <label>L</label>
                        <p>
                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=brand&amp;brand=suzuki" href="/sjz/suzuki/#bread">铃木</a>
                            
                        </p>
                    </li>
                    <li>
                        <label>M</label>
                        <p>
                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=brand&amp;brand=mazda" href="/sjz/mazda/#bread">马自达</a>
                            
                        </p>
                    </li>
                    <li>
                        <label>N</label>
                        <p>
                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=brand&amp;brand=dongfengyulongnazhijie" href="/sjz/dongfengyulongnazhijie/#bread">纳智捷</a>
                            
                        </p>
                    </li>
                    <li>
                        <label>O</label>
                        <p>
                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=brand&amp;brand=acura" href="/sjz/acura/#bread">讴歌</a>
                            
                        </p>
                    </li>
                </ul>
                <ul>
                    <li>
                        <label>Q</label>
                        <p>
                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=brand&amp;brand=kia" href="/sjz/kia/#bread">起亚</a>
                            
                        </p>
                    </li>
                    <li>
                        <label>R</label>
                        <p>
                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=brand&amp;brand=richan" href="/sjz/richan/#bread">日产</a>
                            
                    </li>
                    <li>
                        <label>S</label>
                        <p>
                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=brand&amp;brand=skoda" href="/sjz/skoda/#bread">斯柯达</a>
                            
                        </p>
                    </li>
                    <li>
                        <label>T</label>
                        <p>
                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=brand&amp;brand=tesila" href="/sjz/tesila/#bread">特斯拉</a>
                            
                        </p>
                    </li>
                    <li>
                        <label>W</label>
                        <p>
                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=brand&amp;brand=wuling" href="/sjz/wuling/#bread">五菱</a>
                            
                        </p>
                    </li>
                    <li>
                        <label>X</label>
                        <p>
                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=brand&amp;brand=hyundai" href="/sjz/hyundai/#bread">现代</a>
                            
                    </li>
                    <li>
                        <label>Y</label>
                        <p>
                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=brand&amp;brand=tj-yiqi" href="/sjz/tj-yiqi/#bread">一汽</a>
                            
                        </p>
                    </li>
                    <li>
                        <label>Z</label>
                        <p>
                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=brand&amp;brand=zhongtai" href="/sjz/zhongtai/#bread">众泰</a>
                           
                        </p>
                    </li>
                </ul>
            </div>
        </dd>
    </dl>
    <!-- 车系 -->
    <dl class="clearfix">
        <dt>车系</dt>
        <dd>
            <div class="dd-top">
                <span class="a-box">
                    <a href="/sjz/benz/#bread">不限</a>
                    <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=tag&amp;tag=benz-e" href="/sjz/benz-e/#bread">奔驰E级</a>
                    <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=tag&amp;tag=benz-c" href="/sjz/benz-c/#bread">奔驰C级</a>
                    <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=tag&amp;tag=benz-s" href="/sjz/benz-s/#bread">奔驰S级</a>
                    <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=tag&amp;tag=glkji" href="/sjz/glkji/#bread">奔驰GLK级</a>
                </span>
                <!-- 点击全部为span添加class名active -->
                <span class="dd-btn js-disAll js-option-hid" data-local="js-tag">全部<i></i></span>
            </div>
            <div class="dd-car js-tag js-option-hid-info" style="display: none;">
                <ul>
                    <li>
                        <label>两厢轿车</label>
                        <p>
                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=tag&amp;tag=benz-c" href="/sjz/benz-c/h5/#bread">奔驰C级                                    
                                </a>
                        </p>
                    </li>
                    <li>
                        <label>三厢轿车</label>
                        <p>
                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=tag&amp;tag=benz-e" href="/sjz/benz-e/h6/#bread">奔驰E级                                    
                                </a>
                            
                        </p>
                    </li>
                    <li>
                        <label>跑车</label>
                        <p>
                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=tag&amp;tag=benz-e" href="/sjz/benz-e/h4/#bread">奔驰E级                                    
                                </a>
                            
                        </p>
                    </li>
                    <li>
                        <label>SUV</label>
                        <p>
                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=tag&amp;tag=glkji" href="/sjz/glkji/h2/#bread">奔驰GLK级                                    
                                </a>
                            
                        </p>
                    </li>
                    <li>
                        <label>MPV</label>
                        <p>
                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=tag&amp;tag=benz-newr" href="/sjz/benz-newr/h3/#bread">奔驰R级                                    
                                </a>
                            
                        </p>
                    </li>
                    <li>
                        <label>面包车</label>
                        <p>
                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=tag&amp;tag=benz-sprinter" href="/sjz/benz-sprinter/h7/#bread">凌特                                    
                                </a>
                        </p>
                    </li>
                    <li>
                        <label>其他</label>
                        <p>
                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=tag&amp;tag=benz-slc" href="/sjz/benz-slc/#bread">奔驰SLC级                                    
                                </a>
                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=tag&amp;tag=glsji_amg" href="/sjz/glsji_amg/#bread">奔驰GLS级AMG                                    
                                </a>
                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=tag&amp;tag=lls" href="/sjz/lls/#bread">劳伦士                                    
                                </a>
                        </p>
                    </li>
                </ul>
            </div>
        </dd>
    </dl>
    <!-- 价格 -->
    <dl class="clearfix">
        <dt>价格</dt>
        <dd>
            <div class="dd-top">
                <a class="active" data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=price_index&amp;price_index=0" href="/sjz/benz-a/#bread">不限</a>
                <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=price_index&amp;price_index=11" href="/sjz/benz-a/p11/#bread">3万以下</a>
                <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=price_index&amp;price_index=12" href="/sjz/benz-a/p12/#bread">3-5万</a>
                <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=price_index&amp;price_index=13" href="/sjz/benz-a/p13/#bread">5-7万</a>
                <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=price_index&amp;price_index=14" href="/sjz/benz-a/p14/#bread">7-9万</a>
                <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=price_index&amp;price_index=15" href="/sjz/benz-a/p15/#bread">9-12万</a>
                <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=price_index&amp;price_index=16" href="/sjz/benz-a/p16/#bread">12-16万</a>
                <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=price_index&amp;price_index=17" href="/sjz/benz-a/p17/#bread">16-20万</a>
                <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=price_index&amp;price_index=18" href="/sjz/benz-a/p18/#bread">20万以上</a>
                <div class="rangeFilter" data-url-template="">
                    <input value="" class="screen-price js-begin" data-default-value="0" size="4" maxlength="3" id="my_price_b" name="b" type="text">
                    <em class="screen-em">-</em>
                    <input value="" class="screen-price js-end" data-default-value="999" size="4" maxlength="3" id="my_price_e" name="e" type="text">
                    <em class="screen-em">万</em>
                    <button class="price-btn js-btn">确定</button>
                </div>
            </div>
        </dd>
    </dl>
    <!-- 更多 -->
    <dl class="clearfix js-more">
        <dt>更多</dt>
        <dd>
            <!-- 第一个li是默认大小，第二个是加长版，第三个是颜色下拉 -->
            <ul class="dd-more ">
                <!-- 车龄 -->
                <li class="js-hover">
                    <p class="dd-sel"><i></i> 车龄 </p>
                    <div class="dd-option">
                        <a href="/sjz/benz-a/#bread">不限</a>
                        <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=cheling&amp;cheling=1" href="/sjz/benz-a/l1/#bread">1年以内</a>
                        <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=cheling&amp;cheling=2" href="/sjz/benz-a/l2/#bread">3年内</a>
                        <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=cheling&amp;cheling=3" href="/sjz/benz-a/l3/#bread">5年内</a>
                        <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=cheling&amp;cheling=4" href="/sjz/benz-a/l4/#bread">5年以上</a>
                    </div>
                </li>
                <!-- 变速箱 -->
                <li class="js-hover">
                    <p class="dd-sel"><i></i> 变速箱 </p>
                    <div class="dd-option">
                        <a href="/sjz/benz-a/#bread">不限</a>
                        <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=gearbox&amp;gearbox=1" href="/sjz/benz-a/n1/#bread">手动</a>
                        <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=gearbox&amp;gearbox=2" href="/sjz/benz-a/n2/#bread">自动</a>
                    </div>
                </li>
                <!-- 车型 -->
                <li class="js-hover">
                    <p class="dd-sel"><i></i> 车型 </p>
                    <div class="dd-option">
                        <a href="/sjz/benz-a/#bread">不限</a>
                        <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=chexing&amp;chexing=5" href="/sjz/benz-a/h5/#bread">两厢轿车</a>
                        <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=chexing&amp;chexing=6" href="/sjz/benz-a/h6/#bread">三厢轿车</a>
                        <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=chexing&amp;chexing=4" href="/sjz/benz-a/h4/#bread">跑车</a>
                        <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=chexing&amp;chexing=2" href="/sjz/benz-a/h2/#bread">SUV</a>
                        <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=chexing&amp;chexing=3" href="/sjz/benz-a/h3/#bread">MPV</a>
                        <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=chexing&amp;chexing=7" href="/sjz/benz-a/h7/#bread">面包车</a>
                        <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=chexing&amp;chexing=8" href="/sjz/benz-a/h8/#bread">皮卡</a>
                    </div>
                </li>
                <!-- 里程 -->
                <li class="js-hover">
                    <p class="dd-sel"><i></i> 里程 </p>
                    <div class="dd-option">
                        <a href="/sjz/benz-a/#bread">不限</a>
                        <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=road_haul&amp;road_haul=1" href="/sjz/benz-a/g1/#bread">1万公里内</a>
                        <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=road_haul&amp;road_haul=2" href="/sjz/benz-a/g2/#bread">3万公里内</a>
                        <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=road_haul&amp;road_haul=3" href="/sjz/benz-a/g3/#bread">5万公里内</a>
                        <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=road_haul&amp;road_haul=4" href="/sjz/benz-a/g4/#bread">5万公里以上</a>
                    </div>
                </li>
                <!-- 排量 -->
                <li class="js-hover">
                    <p class="dd-sel"><i></i> 排量 </p>
                    <div class="dd-option">
                        <a href="/sjz/benz-a/#bread">不限</a>
                        <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=air_displacement&amp;air_displacement=1" href="/sjz/benz-a/j1/#bread">1.0L以下</a>
                        <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=air_displacement&amp;air_displacement=2" href="/sjz/benz-a/j2/#bread">1.0-1.6L</a>
                        <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=air_displacement&amp;air_displacement=3" href="/sjz/benz-a/j3/#bread">1.6-2.0L</a>
                        <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=air_displacement&amp;air_displacement=4" href="/sjz/benz-a/j4/#bread">2.0-3.0L</a>
                        <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=air_displacement&amp;air_displacement=5" href="/sjz/benz-a/j5/#bread">3.0L以上</a>
                    </div>
                </li>
                <!-- 颜色 -->
                <li class="js-hover">
                    <p class="dd-sel"><i></i> 颜色 </p>
                    <div class="dd-color">
                        <a href="/sjz/benz-a/#bread">不限</a>
                        <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=car_color&amp;car_color=1" href="/sjz/benz-a/m1/#bread"><i class="icon-color icon-black"></i>黑色</a>
                        <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=car_color&amp;car_color=2" href="/sjz/benz-a/m2/#bread"><i class="icon-color icon-white"></i>白色</a>
                        <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=car_color&amp;car_color=3" href="/sjz/benz-a/m3/#bread"><i class="icon-color icon-grey"></i>银灰色</a>
                        <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=car_color&amp;car_color=4" href="/sjz/benz-a/m4/#bread"><i class="icon-color icon-grey2"></i>深灰色</a>
                        <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=car_color&amp;car_color=6" href="/sjz/benz-a/m6/#bread"><i class="icon-color icon-red"></i>红色</a>
                        <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=car_color&amp;car_color=10" href="/sjz/benz-a/m10/#bread"><i class="icon-color icon-orange"></i>橙色</a>
                        <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=car_color&amp;car_color=8" href="/sjz/benz-a/m8/#bread"><i class="icon-color icon-green"></i>绿色</a>
                        <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=car_color&amp;car_color=7" href="/sjz/benz-a/m7/#bread"><i class="icon-color icon-blue"></i>蓝色</a>
                        <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=car_color&amp;car_color=5" href="/sjz/benz-a/m5/#bread"><i class="icon-color icon-brown"></i>咖啡色</a>
                        <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=car_color&amp;car_color=12" href="/sjz/benz-a/m12/#bread"><i class="icon-color icon-purple"></i>紫色</a>
                        <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=car_color&amp;car_color=11" href="/sjz/benz-a/m11/#bread"><i class="icon-color icon-champagne"></i>香槟色</a>
                        <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=car_color&amp;car_color=13" href="/sjz/benz-a/m13/#bread"><i class="icon-color icon-multicolor"></i>多彩色</a>
                        <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=car_color&amp;car_color=9" href="/sjz/benz-a/m9/#bread"><i class="icon-color icon-yellow"></i>黄色</a>
                        <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=car_color&amp;car_color=14" href="/sjz/benz-a/m14/#bread"><i class="icon-color icon-other"></i>其它</a>
                    </div>
                </li>
            </ul>
        </dd>
    </dl>
</div>    
    <!--排序-->
    <div class="screen-result js-top" id="post">
    <p class="result-p1">当前筛选：</p>
    <ul class="result-li">
                    <li><a href="/sjz/buy/#bread"><i></i><span>品牌：</span>奔驰</a></li>
                <li><a href="/sjz/benz/#bread"><i></i><span>车系：</span>奔驰A级</a></li>
        </ul>
            <p class="result-p2"><a href="/sjz/buy/#bread">重置条件</a></p>
        <p class="result-p3">共为您找到2辆好车</p>
</div>
<div class="list-filter">
    <div class="list-tab">
            <a class="active" data-gzlog="tracking_type=click&amp;eventid=1011000000000008" href="/sjz/benz-a/#bread">全部</a>

                <em></em>
        <a class="loan" data-gzlog="tracking_type=click&amp;eventid=0070000000000045" href="/sjz/benz-a/r18/#bread">保卖车</a>
        
                <em></em>
        <a class="loan" data-gzlog="tracking_type=click&amp;eventid=1011001001000007" href="/sjz/benz-a/r19/#bread">付三成<i></i></a>
            </div>
    <div class="list-sort">
        <div class="hot-screen js-hover">
                    <p class="hot-sel"><i></i>热门筛选</p>
            <div class="hot-option">
                                <a href="/sjz/benz-a/r3/#bread" data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=tag_types&amp;tag_types=3">
                <i></i>急售</a>

                                <a href="/sjz/benz-a/r16/#bread" data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=tag_types&amp;tag_types=16">
                <i></i>超值</a>

                                <a href="/sjz/benz-a/r4/#bread" data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=tag_types&amp;tag_types=4">
                <i></i>准新车</a>

                                <a href="/sjz/benz-a/r8/#bread" data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=tag_types&amp;tag_types=8">
                <i></i>练手车</a>
                
                                <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=tag_types&amp;tag_types=6" href="/sjz/benz-a/r6/#bread">
                <i></i>可迁全国</a>             
            </div>
        </div>
                                                                <a rel="nofollow" class="sort-a " data-gzlog="tracking_type=click&amp;eventid=0070000000000056&amp;sort=licheng" href="/sjz/benz-a/i5/#bread">里程
            <i class=""></i>
        </a>

        <a rel="nofollow" class="sort-a " data-gzlog="tracking_type=click&amp;eventid=0070000000000056&amp;sort=cheling" href="/sjz/benz-a/i4/#bread">车龄
            <i class=""></i>
        </a>

        <a rel="nofollow" class="sort-a " data-gzlog="tracking_type=click&amp;eventid=0070000000000056&amp;sort=price" href="/sjz/benz-a/i1/#bread">价格
            <i class=""></i>
        </a>

        <a class="sort-a " data-gzlog="tracking_type=click&amp;eventid=0070000000000056&amp;sort=new" href="/sjz/benz-a/i7/#bread">最新发布</a>

        <a class="sort-a active" data-gzlog="tracking_type=click&amp;eventid=0070000000000056&amp;sort=default" href="/sjz/benz-a/#bread">默认排序</a>
    </div>
</div>
            <!--列表-->
        <div class="list ">
    <ul class="list-bigimg clearfix lazyLoadV2 ">
        <li>
            <!-- 车源售卖状态显示 -->                          
            <div class="list-infoBox ">
                <a title="福特福克斯 2015款 两厢 1.6L 自动风尚型 " target="_blank " class="imgtype " href="{{route('show.car.index', 2165)}}" >
                    <img width="290 " height="194 " src="http://www.sjztcl.com/uploads/car/201709/images/572418563913612577.jpg" alt="福特福克斯 2015款 两厢 1.6L 自动风尚型 ">
                </a>
                <p class="infoBox ">
                        <a baidu_alog='pc_list_xiangqingye&click&pc_list_xiangqingye_c' title="福特福克斯 2015款 两厢 1.6L 自动风尚型 " href="/sjz/5c3efaf456009940x.htm " target="_blank " class="info-title " >福特福克斯 2015款 两厢 1.6L 自动风尚型</a>
                </p>
                <p class="fc-gray ">
                    <span class=" ">2015年4月上牌</span>                        
                    <em class="shuxian ">|</em>行驶3.5万公里   
                    <span>
                       &nbsp&nbsp <i class="fc-org priType ">9.50万</i>
                    </span>                 
                </p>
                <!-- <p class="priType-s ">
                    <span>
                        <i class="fc-org priType ">
                            9.50万
                        </i>
                    </span>
                </p> -->
            </div>
        </li>
    </ul>
</div>
        
    <!--page-->
    <div class="pageBox " data-widget="app/ms_v2/common/list_page.js#pagination "><ul class="pageLink clearfix "><li><a class="c linkOn "><span>1</span></a></li><li><a href="/sjz/buy/o2/ " data-gzlog='tracking_type=click&eventid=0060000000000060&pageno=2'><span>2</span></a></li><li><a href="/sjz/buy/o3/ " data-gzlog='tracking_type=click&eventid=0060000000000060&pageno=3'><span>3</span></a></li><li><a href="/sjz/buy/o4/ " data-gzlog='tracking_type=click&eventid=0060000000000060&pageno=4'><span>4</span></a></li><li><a href="/sjz/buy/o5/ " data-gzlog='tracking_type=click&eventid=0060000000000060&pageno=5'><span>5</span></a></li><li><a href="/sjz/buy/o6/ " data-gzlog='tracking_type=click&eventid=0060000000000060&pageno=6'><span>6</span></a></li><li><a href="/sjz/buy/o7/ " data-gzlog='tracking_type=click&eventid=0060000000000060&pageno=7'><span>7</span></a></li><li>...</li><li><a href="/sjz/buy/o50/ " data-gzlog='tracking_type=click&eventid=0060000000000060&pageno=50'><span>50</span></a></li><li><a href="/sjz/buy/o2/ "  data-gzlog='tracking_type=click&eventid=0060000000000059' class="next "><span>下一页</span></a></li></ul></div></div>
@endsection

@section('script_content')
<!-- 引入轮播js -->
<!-- <script src="{{URL::asset('newShow/js/common/swipeslider.js')}}"></script> -->
<script>
    $(document).ready(function(){

        $(".js-hover").mouseover(function(event) {
            /* Act on the event */
            // console.log(this);
            $(this).addClass('active');
        });

        $(".js-hover").mouseout(function(event) {
            /* Act on the event */
            // console.log(this);
            $(this).removeClass('active');
        });

        /*$('#brand_show').click(function(event) {

            var ortherBrandStatus = $('.otherbrand').css('display');

            // console.log(ortherBrandStatus);

            if(ortherBrandStatus == 'none'){

                $('.otherbrand').show();
            }else{
                $('.otherbrand').hide();
            }
        });*/

        $('.js-option-hid').click(function(event) {
            console.log($(this).parent().next());

            var needShow = $(this).parent().next();

            if(needShow.css('display') == 'none'){
                $(this).html('收起<i></i>');
                $(this).addClass('active');
                needShow.show();
            }else{
                $(this).html('全部<i></i>');
                $(this).removeClass('active');
                needShow.hide();
            }
        });

    });
</script>
@endsection