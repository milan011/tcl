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
                    <a href="{{$clean_recomment_brands_url}}">不限</a>
                    <!-- 热门品牌 -->
                    @foreach($recomment_brands as $key=>$brand)
                        <a href="{{$brand->url}}">{{$brand->name}}</a>
                    @endforeach
                </span>
                <!-- 点击全部为span添加class名active -->
                <span class="dd-btn js-disAll js-option-hid" data-local="js-brand">全部<i></i></span>
            </div>
            <div class="dd-all clearfix js-brand js-option-hid-info" style="display: none;">
                @foreach($brand_letter_list as $key=>$letter)
                <ul>
                    @foreach($letter as $ke=>$let)
                    <li>

                        <label>{{$ke}}</label>
                        <p>
                            @foreach($let as $k=>$le)
                            <a href="{{$le->url}}">{{$le->name}}</a>
                            @endforeach
                        </p>
                    </li>
                    @endforeach
                </ul>
                @endforeach 
            </div>
        </dd>
    </dl>
    <!-- 车系 -->
    <dl class="clearfix">
        <dt>车系</dt>
        <dd>
            <div class="dd-top">
                <span class="a-box">
                    <a href="{{$clean_current_category_url}}">不限</a>
                    @foreach($current_category as $key=>$cate)
                        @if($key <= 13)
                        <a href="{{$cate['url']}}">{{$cate['name']}}</a>
                        @endif
                    @endforeach
                </span>
                <!-- 点击全部为span添加class名active -->
                @if(count($current_category) > 13)
                <span class="dd-btn js-disAll js-option-hid" data-local="js-tag">全部<i></i></span>
                @endif
            </div>
            <div class="dd-car js-tag js-option-hid-info" style="display: none;">
                <ul>
                    <li>
                        <p>
                        @foreach($current_category as $key=>$cate)
                            @if($key > 13)
                                <a href="{{$cate['url']}}">{{$cate['name']}}</a>
                            @endif
                        @endforeach
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
                @foreach($price_with_url as $key=>$price)
                    @if($key < 10)
                        <a class="@if($key == 1) active @endif" href="{{$price['url']}}">
                            {{$price['content']}}
                        </a>
                    @endif
                @endforeach
                <!-- <div class="rangeFilter" data-url-template="">
                    <input value="" class="screen-price js-begin" data-default-value="0" size="4" maxlength="3" id="my_price_b" name="b" type="text">
                    <em class="screen-em">-</em>
                    <input value="" class="screen-price js-end" data-default-value="999" size="4" maxlength="3" id="my_price_e" name="e" type="text">
                    <em class="screen-em">万</em>
                    <button class="price-btn js-btn">确定</button>
                </div> -->
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
                        @foreach($age_with_url as $key=>$ag)
                            <a href="{{$ag['url']}}">{{$ag['content']}}</a>
                        @endforeach
                    </div>
                </li>
                <!-- 变速箱 -->
                <li class="js-hover">
                    <p class="dd-sel"><i></i> 变速箱 </p>
                    <div class="dd-option">
                        @foreach($gearbox_with_url as $key=>$gearbox)
                            <a href="{{$gearbox['url']}}"  >
                                <div class="tagItem dib  @if($key == 1) active @endif ">
                                    {{$gearbox['content']}}
                                </div>
                            </a>
                        @endforeach
                    </div>
                </li>
                <!-- 车型 -->
                <li class="js-hover">
                    <p class="dd-sel"><i></i> 车型 </p>
                    <div class="dd-option">
                        <a href="{{$clean_category_type_url}}">不限</a>
                        @foreach($category_type_with_url as $key=>$category)
                            <a href="{{$category['url']}}">{{$category['content']}}</a>
                        @endforeach
                    </div>
                </li>
                <!-- 里程 -->
                <!-- <li class="js-hover">
                    <p class="dd-sel"><i></i> 里程 </p>
                    <div class="dd-option">
                        <a href="/sjz/benz-a/#bread">不限</a>
                        <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=road_haul&amp;road_haul=1" href="/sjz/benz-a/g1/#bread">1万公里内</a>
                        <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=road_haul&amp;road_haul=2" href="/sjz/benz-a/g2/#bread">3万公里内</a>
                        <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=road_haul&amp;road_haul=3" href="/sjz/benz-a/g3/#bread">5万公里内</a>
                        <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=road_haul&amp;road_haul=4" href="/sjz/benz-a/g4/#bread">5万公里以上</a>
                    </div>
                </li> -->
                <!-- 颜色 -->
                <li class="js-hover">
                    <p class="dd-sel"><i></i> 颜色 </p>
                    <div class="dd-color">
                        @foreach($color_with_url as $key=>$color)
                            @if($key > 0)
                            <a href="{{$color['url']}}"><i class="icon-color icon-{{$color['des']}}"></i>{{$color['content']}}</a>
                            @endif
                        @endforeach
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
<!-- <div class="list-filter"> -->
    <!-- <div class="list-tab">
            <a class="active" data-gzlog="tracking_type=click&amp;eventid=1011000000000008" href="/sjz/benz-a/#bread">全部</a>
    
                <em></em>
        <a class="loan" data-gzlog="tracking_type=click&amp;eventid=0070000000000045" href="/sjz/benz-a/r18/#bread">保卖车</a>
        
                <em></em>
        <a class="loan" data-gzlog="tracking_type=click&amp;eventid=1011001001000007" href="/sjz/benz-a/r19/#bread">付三成<i></i></a>
    </div> -->
    <!-- <div class="list-sort">
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
    </div> -->
<!-- </div> -->
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