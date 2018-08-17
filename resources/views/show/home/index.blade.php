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
        <div class="buy-tit">免费卖车<span><em class="orgtext">平均7天卖出</em>已有<em class="clue_num">{{$all_nums}}</em>人登记信息</span></div>
        <div class="sell-car-box" data-value-domain="sjz">
            <form action="" class="clearfix" data-role="sell_form">
                <input name="mobile" type="text" class="sell-phone-input" data-role="sellPhone" placeholder="请输入手机号码">
                <button id="storeInfo" class="sell-phone-submit" data-clue-entry="03" >我要卖/买车</button>
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
                @foreach($recomment_brands as $key=>$brand)
                    @if($key < 7)
                    <a href="/cate/b{{$brand->id}}" class="i-{{substr($brand->logo_img, 0, -4)}}">{{$brand->name}}</a>
                    @endif
                @endforeach
                </div>
            </div>

            <div class="sx-price">
                <div class="dt">价格</div>
                <div class="dd">
                    @foreach($price_interval as $key=>$price)
                        @if($key >= 10)
                            <a href="/cate/p{{$key}}">{{$price}}</a>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="sx-chexing">
                <div class="dt">车型</div>
                <div class="dd">
                    <a href="/cate/t1" class="x-sanxiang" title="轿车">轿车</a>
                    <a href="/cate/t2" class="x-suv" title="SUV">SUV</a>
                    <a href="/cate/t6" class="x-mpv" title="MPV">MPV</a>
                    <a href="/cate/t3" class="x-paoche" title="面包车">面包车</a>
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
                                <img src="{{URL::asset('newShow/images/realcar.jpg')}}" alt="Summer beach concept">
                            </li>
                            <li class="sw-slide">
                                <img src="{{URL::asset('newShow/images/zhaoshang5-30.jpg')}}" alt="Lang from Yie Ar Kung Fu">
                            </li>
                            <li class="sw-slide">
                                <img src="{{URL::asset('newShow/images/jinrong5-30.jpg')}}" alt="Tiny Tina">
                            </li>
                            <li class="sw-slide">
                                <img src="{{URL::asset('newShow/images/zhaosheng5-30.jpg')}}" alt="Tiny Tina">
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
                        <img src="{{URL::asset('newShow/images/jiameng.png')}}" alt="">
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <img src="{{URL::asset('newShow/images/mentou.png')}}" alt="">
                    </a>
                </li>
                <li>
                    <a  href="javascript:void(0);">
                        <img src="{{URL::asset('newShow/images/nianhui.jpg')}}" alt="">
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
    <!--banner显示 e -->

    <!--服务介绍 s-->
    <!-- <ul class="ser-gua clearfix">
       <li><i class="ser-1"></i>100%个人二手车</li>
       <li><i class="ser-2"></i>全面检测</li>
       <li><i class="ser-3"></i>14天可退</li>
       <li><i class="ser-4"></i>1年2万公里质保</li>
       </ul>  -->   <!--服务介绍 e -->

    <div class="w indexTab">
    <div class="title clearfix">
        <span class="ti-left">
            <span></span>
        </span>
    </div>

    <!--帖子列表 -->
    <div data-role="showList">
    <div class="list" style="display:block;">
    <ul class="list-bigimg clearfix">
        @foreach($cars as $car)
        <li>
            <div class="list-infoBox">
                <a  title="{{$car->name}}" target="_blank" class="imgtype" href="{{route('show.car.index', ['car'=>$car->id])}}" >
                    
                    @if(isset($car->hasOneImagesOnFirst->filename))
                    <img width="290" height="194" src="{{URL::asset('uploads/car/'.$car->hasOneImagesOnFirst->filename)}}"  alt="{{$car->name}}" />
                    @else
                    <img width="290" height="194" src="{{URL::asset('images/default.jpg')}}"  alt="{{$car->name}}" />
                    @endif
                </a>
                <p class="infoBox">
                    <a title="{{$car->name}}" href="{{route('show.car.index', ['car'=>$car->id])}}" target="_blank" class="info-title">{{$car->name}}</a>
                </p>
                <p class="fc-gray">
                    <span class="">{{$car->plate_date}}上牌</span>
                    <em class="shuxian">|</em>行驶{{$car->mileage}}万公里
                </p>
                <p class="priType-s">
                    <span>
                        <i class="fc-org priType">
                        {{$car->top_price}}万
                        </i>
                    </span>
                    <!-- <s>11.92万</s> -->
                </p>
            </div>
        </li>
        @endforeach
    </ul>
    <div class="all-car-link">
        <a target="_blank" href="{{route('show.cate.index')}}">更多车源</a>
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

        $('#storeInfo').click(function(){

            var request_url = '{{route('show.sale.store')}}';

            //var brand_id  = $("#brand_id").attr('brandnum');
            //var cate_id   = $("#category_id").attr('seriesnum');
            var mobile  = $("input[name='mobile']").val();

            /*console.log(brand_id);
            console.log(cate_id);
            console.log(mobile);*/

            if(!(/^1(3|4|5|7|8)\d{9}$/.test(mobile))){ 
                alert("请填写正确的手机号码");  
                return false; 
            }

            $.ajax({
                method: 'POST',
                url: request_url,
                data:{mobile:mobile},
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