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
    <link type="text/css" rel="stylesheet" href="{{URL::asset('newShow/css/sale.css')}}">
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
<div class="sell-box">
    <div class="img-0 sell_form" data-domain="sjz" data-type="sell" data-st="0">
            <form class="sel-box sell_panel_maskNav">
                <p class="sell-num">已有<span>6841277</span>人提交了卖车申请</p>
                <div class="write-box">
                    <input class="input-phone" placeholder="请输入手机号码" id="phone" type="text">
                    <input name="source_type" value="0" type="hidden">
                    <p class="valid-error"></p>
                </div>
                <button class="submit" data-clue-entry="01" data-role="navbtn" data-maskname="mask3" data-needpub="1">
                    免费卖车
                </button>
                <div class="plan">后续计划<span><input name="action-num" value="1" type="radio">买新车</span><span><input name="action-num" value="2" type="radio">买二手车</span><span><input name="action-num" value="3" type="radio">不买车</span></div>
                <p class="submit-tip">免费咨询<i class="nub-org">400-023-1529</i></p>
                <p class="ass-entra">卖车定价 做到心中有数
                    <a href="javascript:void(0)" id="quickEvalu" data-role="navbtn" data-maskname="mask2" gjalog="100000001211000100000010" baidu_alog="pc_sell_gujia&amp;click&amp;pc_sell_GuGejia_c">快速估个价&gt;</a>
                </p>
            </form>
            <div class="sel-suc successPop sell_panel_maskNav" style="display: none" gjalog="100000001144000100000010@source_type=0">
                <div class="ico-suc"></div>
                <p class="txt-suc">提交成功！</p>
                <p class="con-kefu"><span class="successMsg" style="color:#545454;font-family: 'Microsoft Yahei','arial','sans-serif'">瓜子客服将在30分钟内与您联系</span>，
                    <br>为您提供免费卖车服务，请保持电话畅通</p>
                <!--<p class="con-kefu">瓜子客服将在30分钟内与您联系，<br>为您提供免费卖车服务，请保持电话畅通。</p>-->
                <p class="back">
                    <a href="/sjz/buy" target="_blank" gjalog="100000001098000100000010">查看其它好车&gt;</a>
                    <!--<a href="http://www.ganji.com/vehicle/pinggu.php?domain=-->
                    <!--" target="_blank" gjalog="100000001099000100000010">给爱车估个价&gt;</a>-->
                    <a data-role="navbtn" data-maskname="mask2" target="_blank" gjalog="100000001099000100000010">给爱车估个价&gt;</a>
                </p>
                <a href="javascript:void(0);" class="mask4-button" style="display:none;" data-role="navbtn" data-maskname="mask4">
                    <p class="kefu-phone">瓜子客服工作时间&nbsp;&nbsp;8:00 ~ 21:00</p>
            </a></div><a href="javascript:void(0);" class="mask4-button" style="display:none;" data-role="navbtn" data-maskname="mask4">
        </a>
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