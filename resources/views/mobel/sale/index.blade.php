@extends('mobel.main')

@section('title')
    <title>{{$title}}</title>
    <meta name="keywords" content="二手车,二手车交易市场,二手车网上交易平台,石家庄二手车，石家庄淘车乐,石家庄二手车交易平台，石家庄二手车交易">
@endsection

@section('head_content')
    <link type="text/css" rel="stylesheet" href="{{URL::asset('mobel/css/content.css')}}">  
    <link type="text/css" rel="stylesheet" href="{{URL::asset('mobel/css/footer.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('mobel/css/sale/list.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('mobel/css/sale/info.css')}}">
    
@endsection

@section('bodyClass')
    class="bottombox-app-active"
@endsection

@section('content')
<header class="heading">
    {{-- <h1>我要卖车{{$enroll_type[$type]}}</h1> --}}
    <h1>{{$enroll_type[$type]}}咨询</h1>
    <a href="javascript:history.go(-1);" class="back">返回</a>
    <a data-callcs="call_phone=4006706969" href="javascript:void(0);" class="operate"></a>
    <!-- <a href="#" class="usericon" data-gzlog="tracking_type=click&amp;eventid=1113432100000001"></a> -->
</header>

<!-- <section class="shl">
    <img src="{{URL::asset('mobel/images/bannerBg.jpg')}}" alt="">
</section> -->

<section class="shl">
    @if($type == 1)
        {{-- 买车 --}}
        <div>
           <img src="{{URL::asset('mobel/bm/bm_buy.png')}}" alt=""> 
           <p style="font-size:16px;text-indent:2em;padding: 5px 15px 15px;">
                请输入您的手机号码并提交。我们工作人员会在24小时内联系您，淘车乐平台认证车辆，无泡水、无火烧、无事故！价格透明、还原真实车况！让您买的放心、用的放心！
           </p>
        </div>
    @elseif($type == 2)
        {{-- 卖车 --}}
        <div>
           <img src="{{URL::asset('mobel/bm/bm_sale.png')}}" alt=""> 
           <p style="font-size:16px;text-indent:2em;padding: 5px 15px 15px;">
                二手车帮卖平台，点击报名，填写您的爱车信息，提交资料后，我们会有专人与您联系！全程免费帮您出售，快来体验吧
           </p>
        </div>
    @elseif($type == 3)
        {{-- 贷款 --}}
        <div>
           <img src="{{URL::asset('mobel/bm/bm_daikuan.png')}}" alt=""> 
           <p style="font-size:16px;text-indent:2em;padding: 5px 15px 15px;">
                您知道吗？购买二手车也可以像购买新车一样分期付款了，淘车 乐分期业务，首付少、利息低、手续简单、放款快、让您购车无忧！您可通过我司的分期付款业务，自由自在的购车，随时随地分享分期购车带来的快乐生活！
           </p>
        </div>
    @elseif($type == 4)
        {{-- 保险 --}}
        <div>
           <img src="{{URL::asset('mobel/bm/bm_baoxian.png')}}" alt=""> 
           <p style="font-size:16px;text-indent:2em;padding: 5px 15px 15px;">
                投保咨询、理赔咨询请拨打淘车乐保险经理电话：15373067307！</br>
                经济实惠的车辆保险服务；与多家保险公司合作，提供多种保险方案服务于二手车交易，经济实惠，不以盈利为目的.</br>
                只需发送行车本，身份证，保单邮寄到家，省时、省心、省力！
                专业保险顾问解惑答疑（险种、理赔）</br>
                温馨提示：如您有购买车险的需要，请点击报名按钮，我们的工作人员会在24小时内联系您。
           </p>
        </div>
    @elseif($type == 5)
        {{-- 评估 --}}
        <div>
           <img src="{{URL::asset('mobel/bm/tcl.png')}}" alt=""> 
           <p style="font-size:16px;text-indent:2em;padding: 5px 15px 15px;">
                您好，淘车乐竭诚为您服务，填写个人
                信息，点击下方提交按钮，我们工作人员24小时内会跟您联系！
           </p>
        </div>
    @else
       <div>
           {{-- <img src="{{URL::asset('mobel/bm/tcl.png')}}" alt="">  --}}
           <p style="font-size:16px;text-indent:2em;padding: 5px 15px 15px;">
                您好，淘车乐竭诚为您服务.
           </p>
        </div> 
    @endif
</section>

<section class="sell-area">
    {{-- <p class="sell-num"><span>13548042</span>车主提交了卖车申请</p> --}}
    <div class="sell-input">
        <!-- <div>
            <button class="sub-input j-sellSub" style="width:30%;margin-bottom:5px;display:inline-block;">选择品牌</button>
            <input class="j-input-phone" readonly type="text" data-role="phone" placeholder="" style="width:30%;display: inline-block;" />
        </div> -->
        <div class="input-border">
            {!! csrf_field() !!}
            <input class="j-input-phone input-phone" name="mobile" type="text" data-role="phone" placeholder="请输入手机号码" />
            <input class="j-input-phone" name="request_url" type="hidden" value="{{route('mobel.sale.store')}}">
            <input type="hidden" id="enroll_type" value="{{$type}}">
        </div>
        <button class="sub-input j-sellSub" id="storeInfo" data-clue-entry="05" data-needpub="1">提交</button>
    </div>
</section>

<section class="gray-blank"></section>

<!-- 保卖  start -->

<!-- 保卖  end -->

<!--新车-->

<section class="gray-blank"></section>

<!-- 成交记录 start -->

<section class="gray-blank"></section>
<!-- 成交记录 end -->

<!-- <section class="fix-input">
    <div class="sell-input">
        <div class="input-border">
            <input class="input-phone" type="tel" data-role="phone1" placeholder="请输入手机号码" />
        </div>
        <button class="sub-input" data-role="sellSubmit1" data-clue-entry="01"
                data-needpub="1">预约卖车</button>
    </div>
</section> -->


<!-- <div class="tip">手机号码格式不正确</div> -->

@endsection

@section('footer_content')
    @include('mobel.footer')
@endsection

@section('script_content')
<!-- <script type="text/javascript" src="{{URL::asset('mobel/js/index.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('mobel/js/content/script.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('mobel/js/script.js')}}"></script> -->
<script type="text/javascript" src="{{URL::asset('mobel/js/dingyue.js')}}"></script>
<script>
    $(document).ready(function(){
        
        
    });
</script>
@endsection