@extends('mobel.main')

@section('title')
    
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
    <h1>我要卖车</h1>
    <a href="javascript:history.go(-1);" class="back">返回</a>
    <a data-callcs="call_phone=4006706969" href="javascript:void(0);" class="operate"></a>
    <!-- <a href="#" class="usericon" data-gzlog="tracking_type=click&amp;eventid=1113432100000001"></a> -->
</header>

<section class="shl">
        <img src="{{URL::asset('mobel/images/bannerBg.jpg')}}" alt="">
    </section>

<section class="sell-area">
    <!-- <p class="sell-num"><span>13548042</span>车主提交了卖车申请</p> -->
    <div class="sell-input">
        <!-- <div>
            <button class="sub-input j-sellSub" style="width:30%;margin-bottom:5px;display:inline-block;">选择品牌</button>
            <input class="j-input-phone" readonly type="text" data-role="phone" placeholder="" style="width:30%;display: inline-block;" />
        </div> -->
        <div class="input-border">
            {!! csrf_field() !!}
            <input class="j-input-phone input-phone" name="mobile" type="text" data-role="phone" placeholder="请输入手机号码" />
            <input class="j-input-phone" name="request_url" type="hidden" value="{{route('mobel.sale.store')}}">

        </div>
        <button class="sub-input j-sellSub" id="storeInfo" data-clue-entry="05" data-needpub="1">预约卖车</button>
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
        
        /*$("input[name='mobile']").val('');

        $('#storeInfo').click(function(){

            var request_url = '{{route('mobel.sale.store')}}';
            var mobile      = $("input[name='mobile']").val();

            console.log(typeof(mobile));

            if(!(/^1(3|4|5|7|8)\d{9}$/.test(mobile))){ 
                alert("请填写正确的手机号码");  
                return false; 
            }

            $.ajax({
                method: 'POST',
                url: request_url,
                data:{ mobile : mobile},
                dataType: 'json',
                headers: {      
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'        
                },
                success:function(data){

                    //设置图片对应车源ID
                    alert(data.msg);
                    
                },
                error: function(xhr, type){
                    
                    if(xhr.status == 422){ //表单验证失败，返回的状态
                        console.log(JSON.parse(xhr.responseText));
                        var content_error = '';
                        
                        content_error += '<div>';
                        content_error += "<div class='alert alert-warning' style='text-align:center;'>";
                        $.each(JSON.parse(xhr.responseText),function(name,value) {
                            // console.log(name);
                            // console.log(value);                          
                            content_error += value[0];
                            content_error += '<div>';                           
                        });
                        content_error += '</div>';
                        content_error += '</div>';
                        console.log(content_error);

                        return false;
                    }
                    alert('额,提交失败,请重试一次');
                }
            });

            return false;
        });*/
    });
</script>
@endsection