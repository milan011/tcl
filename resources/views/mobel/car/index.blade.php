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
    <a href="http://www.guazi.com/sjz/" rel="nofollow">首页</a>
    <em>></em>
    <a href="http://www.guazi.com/sjz/buy/">石家庄个人二手车</a>
    <em>></em>
    <a href="http://www.guazi.com/sjz/dazhong/">石家庄大众二手车</a>
    <em>></em>
    <a href="http://www.guazi.com/sjz/jiakechong/">石家庄二手甲壳虫</a>
    <em>></em>
    <span>大众甲壳虫 2013款 1.2TSI 时尚型(进口)</span>
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
                                <img src="http://www.sjztcl.com/uploads/car/201709/images/img20170920142043.jpg" alt="大众甲壳虫 2013款 1.2TSI 时尚型(进口)">
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="det-sumright appoint">
                    <div class="dt-titbox">
                        <h1 class="dt-titletype" title="大众甲壳虫 2013款 1.2TSI 时尚型(进口)">大众甲壳虫 2013款 1.2TSI 时尚型(进口)</h1>
                        <div class="dt-titleinfo clearfix">
                            <span style="color:#999">车源号：</span><span style="color:#000">HC-6472663</span>
                        </div>
                    </div>
                    <div class="basic-box">
                        <div class="pricebox">
                            <i class="ico-txt ico-mt">车主报价：</i>
                            <span class="fc-org pricestype"><b class="f30 numtype">&yen;13.50</b>万</span>
                        </div>                    
                    </div>
                    <ul class="assort clearfix">
                        <li class="one"><b>2013-07</b>上牌时间</li>
                        <li><b>4.8万公里</b>里程</li>
                        <li><b>自动</b>变速箱</li>
                        <!-- <li class="em-sta detailHoverTips">
                            <em class="tip-icon"></em>
                            <p class="sta-tip-txt"><i></i> 各地车管所对排放标准认定有差异，结果仅供参考，外迁请详细咨询迁入地车管所。
                            </p>
                            <b>国五</b>排放标准</li> -->
                        <li>
                            <b>石家庄</b>上牌地</li>
                    </ul>
                    <p class="stipul-p">
                        <!-- <span class="f18">
                            <i class="fc-org yahei">看车电话：</i>
                            <b class="teltype">400-023-1529</b>
                        </span> -->
                    </p>
                    <div class="combox indem-box">
                        <h3 class="indem-tt f14">销售顾问： 刘莹（辛集店）</h3>
                        <ul class="indem-ul">
                            <li>
                                
                                <p class="f-type01">门店地址： 辛集澳森生活区北行100米路西中石油门店</p>
                                <p class="f-type01">联系电话： 15373418555</p>
                                <p class="f-type01">发布时间： 2017-04-06</p>
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
                                    红色 
                                </li>
                                <li class="nianjian">
                                    <label>年检到期：</label>
                                    2017-7
                                </li>
                                <li class="baoxian">
                                    <label>交强险到期：</label>
                                    2017-7
                                </li>
                                <li class="baoxian">
                                    <label>商业险到期：</label>已过期
                                </li>
                                <li class="guohu">
                                    <label>过户次数：</label>2
                                </li>
                                <li class="guohu">
                                    <label>归属地：</label>石家庄
                                </li>
                            </ul>
                            <p class="f-type03">
                                <em></em>这车开了三年多，平时用车也很在意，没出过什么大问题。公里数不多，才跑了四万多公里。经常在市内开，道路平坦很省车的，平时的话也不怎么开也就上下班开开。平常使用的时候很爱惜，所以就近修理厂保养，车况很好。加装倒车影像系统、GPS导航、倒车雷达。准备换车了，所以出售此车。车况很好，欢迎喜欢的朋友来看车、试驾。
                            </p>
                        </div>
                        <!--车辆图片-->
                        <div class="modbox" id="picture">
                            <h3 class="yahei publicTit"><i class="deck"></i>车辆图片</h3>
                            <div class="dt-pictype lazyLoadV2">
                                <img width="580" height="400" class="js-lazy-load" src="http://www.sjztcl.com/uploads/car/201709/images/img20170920142043.jpg"  />
                                <img width="580" height="400" class="js-lazy-load" src="http://www.sjztcl.com/uploads/car/201709/images/img20170920142043.jpg"  />
                                <img width="580" height="400" class="js-lazy-load" src="http://www.sjztcl.com/uploads/car/201709/images/img20170920142043.jpg"  />
                            </div>
                        </div>                    
                    </div>
                </div>
            </div>
            <!-- 猜你喜欢 -->
            <div class="guessbox">
                <h3 class="yahei publicTit"><i class="deck"></i>这些车你也会感兴趣</h3>
                <div class="guesslike">
                    <ul class="list-bigimg clearfix">
                        <li>
                            <div class="list-infoBox">
                                <a  title="大众甲壳虫 2014款 1.2TSI 时尚型(进口)"  target="_blank" class="imgtype" href="">
                                    <span class="hover-bg"></span>
                                    <img width="290" height="192" src="http://www.sjztcl.com/uploads/car/201709/images/img20170920142043.jpg">
                                </a>
                                <p class="infoBox">
                                    <a title="大众甲壳虫 2014款 1.2TSI 时尚型(进口)"  href="" target="_blank" class="info-title">
                                        大众甲壳虫 2014款 1.2TSI 时尚型(进口)                            
                                    </a>
                                </p>
                                <p class="fc-gray">
                                    <span class="">2015年8月上牌</span>
                                    <em class="shuxian">|</em> 行驶1.2万公里 <em class="shuxian"></em><span class="tag-gray">石家庄</span> </p>
                                <p class="priType-s">
                                    <span><i class="fc-org priType">15.18</i>万</span>
                                    <!-- <s>21.71万</s> -->
                                </p>
                            </div>
                        </li>
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