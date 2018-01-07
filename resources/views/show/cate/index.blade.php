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
    <link type="text/css" rel="stylesheet" href="{{URL::asset('newShow/css/baoming.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('newShow/css/page.css')}}">
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
    <!-- 门店 -->
    <dl class="clearfix">
        <dt>门店</dt>
        <dd>
            <div class="dd-top">
                <span class="a-box">
                    <!-- 不限 -->
                    <a href="{{$clean_shop_url}}">不限</a>
                    <!-- 热门品牌 -->
                    @foreach($all_shop as $key=>$shop)
                        <a href="{{$shop['url']}}">{{$shop->name}}</a>
                    @endforeach 
                </span>
                <!-- 点击全部为span添加class名active -->
                <!-- <span class="dd-btn js-disAll js-option-hid" data-local="js-brand">全部<i></i></span> -->
            </div>
            <!-- <div class="dd-all clearfix js-brand js-option-hid-info" style="display: none;">
                <ul>
                    <li>
                        <p>
                            @foreach($all_shop as $key=>$shop)
                            <a href="{{$shop['url']}}">{{$shop->name}}</a>
                            @endforeach 
                        </p>
                    </li>
                </ul>
            </div> -->
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
        @foreach($current_condition as $condition)       
        <li><a href="{{$condition['url']}}"><i></i>{{$condition['content']}}</a></li>
        @endforeach
    </ul>
    <p class="result-p2"><a href="{{route('show.cate.index')}}">重置条件</a></p>
    <p class="result-p3">共为您找到{{$cars->total()}}辆好车</p>
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
        @if($cars->total() > 0)
        <div class="list ">
            <ul class="list-bigimg clearfix lazyLoadV2 ">
            @foreach($cars as $car)
            <li>
            <!-- 车源售卖状态显示 --> 
            <div class="list-infoBox ">
                <a title="{{$car->name}}" target="_blank" class="imgtype " href="{{route('show.car.index', ['car'=>$car->id])}}" >
                    @if(isset($car->hasOneImagesOnFirst->filename))
                        <img width="290 " height="194 " src="{{URL::asset('uploads/car/'.$car->hasOneImagesOnFirst->filename)}}" alt="{{$car->name}}">
                    @else
                        <img src="{{URL::asset('images/default.jpg')}}" alt="" />
                    @endif
                </a>
                <p class="infoBox ">
                        <a title="{{$car->name}}" href="{{route('show.car.index', ['car'=>$car->id])}}" target="_blank " class="info-title">{{$car->name}}</a>
                </p>
                <p class="fc-gray ">
                    <span class=" ">{{$car->plate_date}}上牌</span>                        
                    <em class="shuxian ">|</em>行驶{{$car->mileage}}万公里   
                    <span>
                       &nbsp&nbsp <i class="fc-org priType ">{{$car->top_price}}万</i>
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
        @endforeach
    </ul>
</div>
     <div class="pagination dib-con">
                <!-- <div class="item dib prev">&lt;</div>
                <div class="item dib num active">1</div>
                <div class="item dib num">2</div>
                <div class="item dib num">3</div>
                <div class="item dib num">4</div>
                <div class="item dib next">&gt;</div> -->
                
                {!! $cars->links() !!}
    </div>   
    <!--page-->
    @else
    <div class="subscribe js-subscribe" id="subscribe2">
        <p class="sub-p1">没有您想要的爱车？</p>
        <p class="sub-p2">订阅后有符合条件的新车上架将通知您</p>
        <ul class="sub-box">
            <li>
                <p class="li-tit">品牌</p>
                <div class="conselect js-subbrand">
                    <input id="brand_id" class="inputype js-brandinput" readonly="readonly" placeholder="不限" brandnum="0" brandname="" value="">
                    <div class="p-r">
                        <div class="down-box">
                            <div class="brand-box ios js-brandlist js-subscribescroll">
                                <ul class="all-brand ">
                                    <li class="js_choosetag" brandnum="0">不限</li>
                                </ul>
                                <p class="s-tt"><a id="hot">热门</a></p>
                                
                                <ul class="hot-car clearfix">
                                    @foreach($recomment_brands as $key=>$brand)
                                        <li class="js_choosetag" brandnum="{{$brand->id}}" brandname="{{$brand->name}}">{{$brand->name}}</li>
                                    @endforeach
                                </ul>
                                @foreach($brand_letter_list_with_no_chunk as $key=>$letter)
                                <p class="s-tt" data-dict="{{$key}}"><a id="{{$key}}">{{$key}}</a></p>
                                <ul class="all-brand">
                                    @foreach($letter as $k=>$le)
                                    <li class="js_choosetag" brandnum="{{$le->id}}">{{$le->name}}</li>
                                    @endforeach
                                </ul>
                            @endforeach
                             </div>
                        </div>
                    </div>
                </div>
                <p class="li-tit">车系</p>
                <div class="conselect js-series">
                    <input id="category_id" class="inputype js-seriesinput" placeholder="不限" readonly="readonly" seriesnum="0" value="">
                    <div class="p-r">
                        <div class="down-box">
                            <ul id="category_list" class="com-ul js-serieslist js-subscribescroll">
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <p class="li-tit">电话</p>
                <div class="conselect js-series">
                    <input type="text" name="mobile" class="inputype_no_xiahua js-seriesinput" placeholder="请输入您的手机号" seriesnum="0" value="">
                </div>
            </li>
        </ul>
    
        <p class="subscribed js-suberror">&nbsp;</p>
        <input type="hidden" name="ajax_request_url" value="{{route('show.sale.getChildCategory')}}">
        <button id="storeInfo" class="one-key-sub js-submit">一键订阅</button>
        {!! csrf_field() !!}
    </div>
    @endif
    <!-- <div class="ranklist ranklist2">
        <div class="rele-car">
            <p class="rele-tit">相关车系</p>
        </div>
        <ul>
                    <li>
                <a data-gzlog="tracking_type=click&amp;eventid=1011000000000004&amp;relatecar=h2" href="/sjz/h2/">
                    <img class="js-tag-img" src="https://image.guazistatic.com/files/tag_img/105029.jpg">
                    <div class="rank-car">
                        <h2 class="p1">哈弗H2</h2>
                        <p class="p2">约1辆车源</p>
                        <p class="p3"><span>7.86</span>万起</p>
                    </div>
                </a>
            </li>
                    <li>
                <a data-gzlog="tracking_type=click&amp;eventid=1011000000000004&amp;relatecar=chevrolet-keluzi" href="/sjz/chevrolet-keluzi/">
                    <img class="js-tag-img" src="https://image.guazistatic.com/files/tag_img/17411.jpg">
                    <div class="rank-car">
                        <h2 class="p1">雪佛兰科鲁兹</h2>
                        <p class="p2">约34辆车源</p>
                        <p class="p3"><span>4.10</span>万起</p>
                    </div>
                </a>
            </li>
                    <li>
                <a data-gzlog="tracking_type=click&amp;eventid=1011000000000004&amp;relatecar=gs4" href="/sjz/gs4/">
                    <img class="js-tag-img" src="https://image.guazistatic.com/files/tag_img/106615.jpg">
                    <div class="rank-car">
                        <h2 class="p1">传祺GS4</h2>
                        <p class="p2">约7辆车源</p>
                        <p class="p3"><span>7.80</span>万起</p>
                    </div>
                </a>
            </li>
                    <li>
                <a data-gzlog="tracking_type=click&amp;eventid=1011000000000004&amp;relatecar=fute-fukesi" href="/sjz/fute-fukesi/">
                    <img class="js-tag-img" src="https://image.guazistatic.com/files/tag_img/5492.jpg">
                    <div class="rank-car">
                        <h2 class="p1">福特福克斯</h2>
                        <p class="p2">约52辆车源</p>
                        <p class="p3"><span>3.50</span>万起</p>
                    </div>
                </a>
            </li>
                </ul>
        <input class="xgClue_ids" value="h2@0_chevrolet-keluzi@1_gs4@2_fute-fukesi@3" type="hidden">
    </div> -->

</div>

    
@endsection

@section('script_content')
<!-- 引入轮播js -->
<!-- <script src="{{URL::asset('newShow/js/common/swipeslider.js')}}"></script> -->
<script>
    $(document).ready(function(){

        $('#category_id').val('');
        $('#brand_id').val('');

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

        $('#subscribe2').click(function(){
            var obj_conselect = $('.conselect');

            obj_conselect.each(function(){
                $(this).removeClass('active');
            });
        });

        $('input.js-brandinput, input.js-seriesinput').click(function(e){

            //品牌选择事件
            var parent_obj = $(this).parent();

            parent_obj.hasClass('active') ? parent_obj.removeClass('active') : parent_obj.addClass('active') ;
            parent_obj.siblings().removeClass('active');
            e.stopPropagation();
        });
        
        $('li.js_choosetag').bind('click', function(e){
            //品牌变更事件
            // alert($(this).attr('brandnum'));
            var top_brand   = $(this).attr('brandnum');
            var brand_name  = $(this).attr('brandname');
            var token       = $("input[name='_token']").val();
            var request_url = $("input[name='ajax_request_url']").val();

            /*console.log(top_brand);
            console.log(brand_name);
            console.log(request_url);*/
            // alert(top_brand);return false;

            //获得该顶级品牌子品牌
            if(top_brand == '0'){
                $('#category_id').attr('seriesnum', '0');
                $('#category_id').attr('category_name', '');
                $('#category_id').val('');
                $('#brand_id').attr('brandnum', '0');
                $('#brand_id').attr('brandname', '');
                $('#brand_id').val('');
                $('#category_list').empty();
            }else{
                $.ajax({
                type: 'POST',       
                url: request_url,       
                data: { pid : top_brand},       
                dataType: 'json',       
                headers: {      
                    'X-CSRF-TOKEN': token       
                },      
                success: function(data){        
                    if(data.status == 1){
                        var content = '<li class="com-li js_choosechexi" chexinum="0">不限</li>';
                        // console.log(data.data);
                        $.each(data.data, function(index, value){
                            content += '<li class="com-li js_choosechexi" chexinum="';
                            content += value.id;
                            content += '"';
                            content += 'category_name="';
                            content += value.name;
                            content += '" >';
                            content += value.name;
                            content += '</li>';
                        });
                        // $('#top_brand').append(content);
                        // console.log($('#second_category'));
                        $('#category_list').empty();
                        $('#category_list').append(content);
                        $('#brand_id').attr('brandnum', top_brand);
                        $('#brand_id').attr('brandname', brand_name);
                        $('#brand_id').val(brand_name);
                        $('.js-series').addClass('active');
                        $('.js-subbrand').removeClass('active');
                        $('li.js_choosechexi').on('click', function(e){
                            //车系变更事件
                            var cate_id   = $(this).attr('chexinum');
                            var cate_name  = $(this).attr('category_name');

                            /*alert(cate_id);
                            alert(cate_name);*/

                            $('#category_id').attr('seriesnum', cate_id);
                            $('#category_id').attr('category_name', cate_name);
                            $('#category_id').val(cate_name);
                            $('.js-series').removeClass('active');
                        });
                    }else{
                        alert(data.message);
                        $('#category_list').empty();
                        return false;
                    }
                },      
                error: function(xhr, type){
    
                    alert('Ajax error!');
                }
            });    
            }
        });

        //报名
        $('#storeInfo').click(function(){

            var request_url = '{{route('show.sale.store')}}';

            var brand_id  = $("#brand_id").attr('brandnum');
            var cate_id   = $("#category_id").attr('seriesnum');
            var mobile  = $("input[name='mobile']").val();

            /*console.log(brand_id);
            console.log(cate_id);
            console.log(mobile);*/

            if(brand_id == ''){

                alert('请选择品牌');
                return false;
            }

            if(cate_id == ''){

                alert('请选择车系');
                return false;
            }

            if(!(/^1(3|4|5|7|8)\d{9}$/.test(mobile))){ 
                alert("请填写正确的手机号码");  
                return false; 
            }

            $.ajax({
                method: 'POST',
                url: request_url,
                data:{brand:brand_id, type:cate_id, mobile:mobile},
                dataType: 'json',
                headers: {      
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'        
                },
                success:function(data){

                    //设置图片对应车源ID
                    alert(data.msg);
                    
                },
                error: function(xhr, type){
                    
                    alert('请正确选择车型并填写正确的手机号码');
                }
            });

            return false;
        });
    });
</script>
@endsection