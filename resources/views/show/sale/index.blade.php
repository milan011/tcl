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
    <link type="text/css" rel="stylesheet" href="{{URL::asset('newShow/css/baoming.css')}}">
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
            <form class="sel-box sell_panel_maskNav" id="want_form" action="" method="post">
                {!! csrf_field() !!}
                <!-- <p class="sell-num">已有<span>6841277</span>人提交了卖车申请</p> -->
                <div class="write-box" id="subscribe2">

                    <!-- <input class="inputype" placeholder="品牌" id="brand_id" name="brand_id" type="text"> -->
                    <div class="conselect js-subbrand">
                    <input id="brand_id" class="inputype js-brandinput" readonly="readonly" placeholder="品牌" brandnum="0" brandname="" value="" style="margin: 10px auto;">
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
                    <div class="conselect js-series">
                    <input id="category_id" class="inputype js-seriesinput" placeholder="车系" readonly="readonly" seriesnum="0" value="" style="margin: 10px auto;">
                    <div class="p-r">
                        <div class="down-box">
                            <ul id="category_list" class="com-ul js-serieslist js-subscribescroll">
                                
                            </ul>
                        </div>
                    </div>
                    </div>
                    <!-- <input class="inputype" placeholder="车系" id="category_id" name="category_id" type="text" style="float:right;"> -->
                    <input class="input-phone" placeholder="请输入手机号码" name="mobile" id="mobile" type="text">
                    <!-- <input name="source_type" value="0" type="hidden"> -->
                    <input type="hidden" name="ajax_request_url" value="{{route('show.sale.getChildCategory')}}">
                    <p class="valid-error"></p>
                </div>
                <button class="submit" id="storeInfo" data-clue-entry="01" data-role="navbtn" data-maskname="mask3" data-needpub="1">
                    我要预约
                </button>
                <!-- <div class="plan">后续计划<span><input name="action-num" value="1" type="radio">买新车</span><span><input name="action-num" value="2" type="radio">买二手车</span><span><input name="action-num" value="3" type="radio">不买车</span></div> -->
                <p class="submit-tip">免费咨询<i class="nub-org">400-670-6969</i></p>
                <!-- <p class="ass-entra">卖车定价 做到心中有数
                    <a href="javascript:void(0)" id="quickEvalu" data-role="navbtn" data-maskname="mask2" gjalog="100000001211000100000010" baidu_alog="pc_sell_gujia&amp;click&amp;pc_sell_GuGejia_c">快速估个价&gt;</a>
                </p> -->
            </form>
            <div class="sel-suc successPop sell_panel_maskNav" id="storeSucess" style="display: none">
                <div class="ico-suc"></div>
                <p class="txt-suc">提交成功！</p>
                <p class="con-kefu"><span class="successMsg" style="color:#545454;font-family: 'Microsoft Yahei','arial','sans-serif'">销售顾问将尽快跟您联系</span>，
                    <br>为您提供专业卖车服务，请保持电话畅通</p>
                <!--<p class="con-kefu">瓜子客服将在30分钟内与您联系，<br>为您提供免费卖车服务，请保持电话畅通。</p>-->
                <p class="back">
                    <a href="{{route('show.cate.index')}}" target="_blank">查看其它车源&gt;</a>
                </p>
            </a></div><a href="javascript:void(0);" class="mask4-button" style="display:none;" data-role="navbtn" data-maskname="mask4">
        </a>
    </div>
    <div class="con-tit">我们是谁</div>
        <div class="haoche-rec">
            &emsp;&emsp;河北淘车乐二手车交易有限公司成立于2011年9月，公司以“诚实信用 合作共赢，透明交易，连锁经营”的理念，打破传统的二手车交易模式，配以旗下“定盘星”二手车鉴定评估有限公司，一站式服务，让买车卖车更加便捷放心。五年多的时间，公司累计销售二手车十几万辆，现已建立了网上销售平台—淘车乐官方网站,并成立淘车乐二手车服务中心，加盟连锁店接近60家，客户遍布北京、河北、新疆、浙江、吉林、黑龙江、山西、陕西等多个省份并与荣华集团、广汇集团、晨阳集团、冀中合力等旗下数十家4S店进行深度合作，实现了线上线下的有效结合。
            <br>
        </div>
        <div class="con-tit">卖车指南</div>
        <ul class="sell-guide clearfix">
            <li class="fl">
                <p class="p1">Q1：卖车流程是怎样的？</p>
                <div class="txt-box">
                    1、在本页填写卖车信息或拨打400-670-6969联系我们。
                    <br> 2、接受评估师专业的上门质检，定出售价。
                    <br> 3、交易专员带领买家上门看车。
                    <br> 4、达成交易协议，淘车乐帮你办过户。
                </div>
            </li>
            <li class="fr">
                <p class="p1">Q2：卖车需要准备什么？</p>
                <div class="txt-box">
                    <table>
                        <tr>
                            <td>身份证</td>
                            <td>环保标</td>
                            <td>购置税本</td>
                        </tr>
                        <tr>
                            <td>行驶证</td>
                            <td>检字标</td>
                            <td>购置税发票</td>
                        </tr>
                        <tr>
                            <td>车辆登记证</td>
                            <td>交强险标</td>
                            <td>购车发票/最近一次过户发票</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>交强险单</td>
                            <td></td>
                        </tr>
                    </table>
                </div>
            </li>
            <li class="fl">
                <p class="p1">Q3：大概多久能成交？</p>
                <div class="txt-box">
                    大部分车辆在淘车乐只需一周就可成交。
                </div>
            </li>
            <li class="fr">
                <p class="p1">Q4：是否收取费用？</p>
                <div class="txt-box">
                    淘车乐不会收取卖家任何费用，也不赚差价,交易达成才会向买家收取服务费。
                </div>
            </li>
        </ul>
</div>
@endsection

@section('script_content')
<!-- 引入轮播js -->
<!-- <script src="{{URL::asset('newShow/js/common/swipeslider.js')}}"></script> -->
<script>
    $(document).ready(function(){

        $('#category_id').val('');
        $('#brand_id').val('');

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
                    // alert(data.msg);
                    $('#storeSucess').show();
                    
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