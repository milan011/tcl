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
    <link type="text/css" rel="stylesheet" href="{{URL::asset('newShow/css/carInfo.css')}}">
    <!-- 首页脚本  -->
    <!-- <script type="text/javascript" src="../js/index.js"></script> -->
    <!-- <script type="text/javascript" src="{{URL::asset('js/tcl/home/index.js')}}"></script> -->
    <style>
        .crumbs, .crumbs a{
            font-size: 14px;
        }
    </style>

@endsection


@section('current_city_name')
    {{$show_city_name}}
@endsection

@section('content')
<div class="crumbs">
    <a href="{{route('show.index')}}" rel="nofollow">首页</a>
    <em>></em>
    <a href="{{route('show.cate.index')}}">我要买车</a>
    <em>></em>
    <span>{{$cars->name}}</span>
</div>
<div class="w">
        <div class="detailbox">
            <!-- 帖子基本信息 -->
            <div class="laybox clearfix">
                <!-- 图片展示组件 -->
                <div class="det-sumleft slideshow">
                    <div class="dt-sumpic" data-role="imgContainer">
                        <ul class="det-picside">
                            <li data-role="img" style="display: block">
                                <!-- 车源售卖状态显示 -->
                                <img src="{{URL::asset('uploads/car/'.$cars->hasOneImagesOnFirst->filename)}}" alt="{{$cars->name}}">
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="det-sumright appoint">
                    <div class="dt-titbox">
                        <h1 class="dt-titletype" title="{{$cars->name}}">{{$cars->name}}</h1>
                        <div class="dt-titleinfo clearfix">
                            <span style="color:#999">车源号：</span><span style="color:#000">{{$cars->car_code}}</span>
                        </div>
                    </div>
                    <div class="basic-box">
                        <div class="pricebox">
                            <i class="ico-txt ico-mt">车主报价：</i>
                            <span class="fc-org pricestype"><b class="f30 numtype">&yen;{{$cars->top_price}}</b>万</span>
                        </div>                    
                    </div>
                    <ul class="assort clearfix">
                        <li class="one"><b>{{$cars->plate_date}}</b>上牌时间</li>
                        <li><b>{{$cars->mileage}}万公里</b>里程</li>
                        <li><b>{{$gearbox[$cars->gearbox]}}/{{$capacity[$cars->capacity]}}</b>变速箱/排量</li>
                        <!-- <li class="em-sta detailHoverTips">
                            <em class="tip-icon"></em>
                            <p class="sta-tip-txt"><i></i> 各地车管所对排放标准认定有差异，结果仅供参考，外迁请详细咨询迁入地车管所。
                            </p>
                            <b>国五</b>排放标准</li> -->
                        <li>
                            <b>{{$cars->belongsToShop->belongsToArea->city_name or ''}}</b>上牌地</li>
                    </ul>
                    <p class="stipul-p">
                        <!-- <span class="f18">
                            <i class="fc-org yahei">看车电话：</i>
                            <b class="teltype">400-023-1529</b>
                        </span> -->
                    </p>
                    <div class="combox indem-box">
                        <h3 class="indem-tt f14">销售顾问： {{$cars->belongsToUser->nick_name or ''}}（{{$cars->belongsToShop->shop_name or ''}}）</h3>
                        <ul class="indem-ul">
                            <li>
                                
                                <p class="f-type01">门店地址： {{$cars->belongsToShop->shop_address}}</p>
                                <p class="f-type01">联系电话： {{$cars->belongsToUser->creater_telephone or $cars->belongsToShop->shop_tele}}</p>
                                <p class="f-type01">发布时间： {{substr($cars->created_at, 0 ,10)}}</p>
                                <!-- <p>没有中间环节，无差价</p> -->
                            </li>
                            <!-- <li>
                                
                                <p class="f-type01">联系电话： 15373418555</p>
                                <p>严苛检测标准，无事故</p>
                            </li>
                            <li>
                                
                                <p class="f-type01">发布时间： 2017-04-06</p>
                                <p>瓜子全程保障，无担忧</p>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </div>
            <!-- 帖子详细信息 -->
            <div class="laybox">
                <div class="descrip-box">
                    
                    <div class="descrip">
                        <!--车源基本信息-->
                        <div class="modbox" id="base">
                            <h3 class="yahei publicTit"><i class="deck"></i>基本信息</h3>
                            <ul class="owner-infor clearfix">
                                <li class="owner">
                                    <label>车身颜色：</label>
                                    {{$out_color[$cars->out_color]}} 
                                </li>
                                <li class="nianjian">
                                    <label>年检到期：</label>
                                    {{$cars->plate_end}}
                                </li>
                                <li class="baoxian">
                                    <label>交强险到期：</label>
                                    {{$cars->safe_end}}
                                </li>
                                <li class="baoxian">
                                    <label>商业险到期：</label>{{$cars->safe_end}}
                                </li>
                                <li class="guohu">
                                    <label>过户次数：</label>{{$sale_number[$cars->sale_number]}}
                                </li>
                                <li class="guohu">
                                    <label>归属地：</label>{{$cars->belongsToShop->belongsToArea->city_name or ''}}
                                </li>
                            </ul>
                            <p class="f-type03">
                                <em></em>{!! $cars->description !!}
                            </p>
                        </div>
                        <!--车辆图片-->
                        <div class="modbox" id="picture">
                            <h3 class="yahei publicTit"><i class="deck"></i>车辆图片</h3>
                            <div class="dt-pictype lazyLoadV2">
                                @foreach($images as $image)
                                <img width="580" height="400" class="js-lazy-load" src="{{URL::asset('uploads/car/'.$image->filename)}}"   onerror="this.src='{{URL::asset("images/default.jpg")}}'"  />
                                @endforeach
                                
                            </div>
                        </div>                    
                    </div>
                </div>
            </div>
            <!-- 猜你喜欢 -->
            <div class="guessbox">
                <h3 class="yahei publicTit"><i class="deck"></i>同类车推荐</h3>
                <div class="guesslike">
                    <ul class="list-bigimg clearfix">
                        @foreach($recommend_cars as $rcar)
                        <li>
                            <div class="list-infoBox">
                                <a  title="{{$rcar->name}}"  target="_blank" class="imgtype" href="{{route('show.car.index', ['car'=>$rcar->id])}}">
                                    <span class="hover-bg"></span>
                                    <img width="290" height="192" src="{{URL::asset('uploads/car/'.$rcar->hasOneImagesOnFirst->filename)}}">
                                </a>
                                <p class="infoBox">
                                    <a title="{{$rcar->name}}"  href="{{route('show.car.index', ['car'=>$rcar->id])}}" target="_blank" class="info-title">
                                        {{$rcar->name}}                            
                                    </a>
                                </p>
                                <p class="fc-gray">
                                    <span class="">{{$rcar->plate_date}}上牌</span>
                                    <em class="shuxian">|</em> 行驶{{$rcar->mileage}}万公里 <em class="shuxian"></em><span class="tag-gray">{{$rcar->belongsToShop->belongsToArea->city_name or ''}}</span> </p>
                                <p class="priType-s">
                                    <span><i class="fc-org priType">{{$rcar->top_price}}</i>万</span>
                                    <!-- <s>21.71万</s> -->
                                </p>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script_content')
<!-- 引入轮播js -->
<!-- <script src="{{URL::asset('newShow/js/common/swipeslider.js')}}"></script> -->
<script>
    $(document).ready(function(){

    });
</script>
@endsection