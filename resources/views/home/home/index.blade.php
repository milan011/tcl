@extends('home.main')

@section('title')
    <title>{{$title}}</title>
    <meta name="keywords" content="二手车,二手车交易市场,二手车网上交易平台,石家庄二手车，石家庄淘车乐,石家庄二手车交易平台，石家庄二手车交易">
    <meta name="description" content="石家庄淘车乐是河北省最大的二手车交易平台,二手车源信息最真实,最值得信赖的网上二手车交易市场,提供二手车评估,二手车报价,二手车交易等相关服务,买卖二手车就上淘车乐">
@endsection

@section('head_content')
    <!-- 首页样式 -->
    <link type="text/css" rel="stylesheet" href="{{URL::asset('css/tcl/home/index.css')}}">
    <!-- 首页脚本  -->
    <!-- <script type="text/javascript" src="../js/index.js"></script> -->
    <script type="text/javascript" src="{{URL::asset('js/tcl/home/index.js')}}"></script>
@endsection

@section('current_city_name')
    {{$show_city_name}}
@endsection

@section('content')
<main>
    <div class="banner">
        <div id="bannerSlider" class="slider" style="background-color: #000;">
            <div class="sliderItem active transition" bgColor="#000">
                <img src="{{URL::asset('home/img/index/dbfile/kaiye.png')}}" alt="真车源 真放心">
            </div>
            <div class="sliderItem transition" bgColor="#000">
                <img src="{{URL::asset('home/img/index/dbfile/slider.png')}}" alt="一站式卖车">
            </div>
            <div class="sliderItem transition" bgColor="#000">
                <img src="{{URL::asset('home/img/sell/dbfile/11111.png')}}" alt="一站式卖车">
            </div>
            <div class="container bannerContent">
                <div class="sliderControl dib-con">
                    <div class="item dib active"></div>
                    <div class="item dib"></div>
                    <div class="item dib"></div>
                </div>
                <div class="right">
                    <a href="#">
                        <div class="item auth">
                            <div class="icon"></div>
                            车辆认证
                        </div>
                    </a>
                    <a href="#">
                        <div class="item check">
                            <div class="icon"></div>
                            专业检测
                        </div>
                    </a>
                    <a href="#">
                        <div class="item source">
                            <div class="icon"></div>
                            100%个人车源
                        </div>
                    </a>
                </div>
                <nav class="kindNav col-5">
                    <div class="group row4">
                        <div class="title">品牌</div>
                        <div class="dib-con">
                            @foreach($recomment_brands as $brand)
                            <div class="dib item"><a data-info="1" data-stype="brand_id" class="cate" href="{{route('home.cate.index')}}/b{{$brand->id}}@if(isset($chose_city))/d{{$chose_city}} @endif">{{$brand->name}}</a></div>
                            @endforeach                         
                            <div class="dib item"><a data-info="" class="cate brand_id" href="{{route('home.cate.index')}}">更多&gt;</a></div>
                        </div>
                    </div>
                    <div class="group row4">
                        <div class="title">级别</div>
                        <div class="dib-con">
                        @foreach($category_type as $key=>$category)
                            <div class="dib item"><a data-info="1" data-stype="categorey_type" class="cate" href="{{route('home.cate.index')}}/t{{$key}}@if(isset($chose_city))/d{{$chose_city}} @endif">{{$category}}</a></div>
                        @endforeach 
                        </div>
                    </div>
                    <div class="group row3">
                        <div class="title">价格</div>
                        <div class="dib-con">
                        @foreach($price_interval as $key=>$price)
                            <div class="dib item"><a data-info="1" data-stype="top_price" class="cate" href="{{route('home.cate.index')}}/p{{$key}}@if(isset($chose_city))/d{{$chose_city}} @endif">{{$price}}</a></div>
                        @endforeach 
                        </div>
                    </div>
                    <div class="group row4 noborder">
                        <div class="title">车龄</div>
                        <div class="dib-con">
                        @foreach($age as $key=>$ag)
                            <div class="dib item"><a data-info="1" data-stype="age" class="cate" href="{{route('home.cate.index')}}/a{{$key}}@if(isset($chose_city))/d{{$chose_city}} @endif">{{$ag}}</a></div>
                        @endforeach
                        </div>
                    </div>
                    <form class="form-horizontal" id="cate_form" action="{{route('home.cate.index')}}" method="post">
                        {!! csrf_field() !!}
                        <div>
                            <input type="hidden" name="brand_id" value="">
                            <input type="hidden" name="categorey_type" value="">
                            <input type="hidden" name="top_price" value="">
                            <input type="hidden" name="age"   value="">
                        </div>                    
                    </form>
                </nav>
            </div>
        </div>
    </div>
    <div class="searchForm dib-con container">
        <form class="form-horizontal" id="want_form" action="" method="post">
                    {!! csrf_field() !!}
            <div class="dib img">
                <img src="{{URL::asset('home/img/index/sell.png')}}">
            </div>
        <!-- combo 节点结构 表单提交时提交  隐藏文本框的值  ul 中的列表 为下拉框的列表  选中的li的value值 会填充在 隐藏文本域中  -->
        
            <div id="brand" class="dib combo dib-con brand">
                <input type="hidden" name="brand" id="brands1"  value="-1"/>
                <div class="dib text">品牌</div>
                <div class="dib icon"></div>
                <div class="optionList">
                    <ul>
                        @foreach($all_top_brands as $brand)
                        <li value="{{$brand->id}}">{{$brand->name}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div id="kind" class="dib combo dib-con brand">
                <input type="hidden" name="company" id="company" value="" />
                <div class="dib text" id="company_name">厂家</div>
                <div class="dib icon"></div>
                <div class="optionList">
                    <ul id="company_content">
                        
                    </ul>
                </div>
            </div>
            <div id="kind" class="dib combo dib-con brand">
                <input type="hidden" name="type" id="type" value="" />
                <div class="dib text" id="type_name">车系</div>
                <div class="dib icon"></div>
                <div class="optionList">
                    <ul id="type_content">
                        
                    </ul>
                </div>
            </div>
            <div class="dib textInput mobile">
                <input name="mobile" type="text" class="text" placeholder="手机号">
                <input type="hidden" name="ajax_request_url" value="{{route('home.sale.getChildBrand')}}">
            </div>
            <div class="dib button" id="storeInfo">预约卖车</div>
        </form>
    </div>
    <section class="authSection">
        <div class="container floor auth dib-con" style="height:auto;">
            <!-- <div class="dib col-5 left" style="background-image: url(../img/index/authBg.png);"> -->
            <!-- <div class="dib col-5 left" style="background-image: url({{URL::asset('home/img/index/authBg.png')}});">
                <div class="title">
                    <span>认证车源</span>
                    <a href="#">更多>></a>
                </div>
                <div class="content">
                    <div class="desc dib-con">
                        <div class="dib img"></div>
                        <div class="dib text">
                            <p>淘车乐认证</p>
                            <p>1年2万公里担保</p>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="dib col-25 dib-con cars">
                @foreach($cars as $car)
                <div class="dib col-6 item">
                    <a href="{{route('home.car.index', ['car'=>$car->id])}}" target="_blank">
                        <div class="car">
                            <!-- <img src="../img/index/dbfile/carItem.png" alt="哈佛 2011年款 哈佛 H5 2.4 手动尊爵 四驱超豪华差速版" /> -->
                            @if(isset($car->hasOneImagesOnFirst->filename))
                            <img src="{{URL::asset('uploads/car/'.$car->hasOneImagesOnFirst->filename)}}" onerror="this.src='{{URL::asset("images/default.jpg")}}'" alt="{{$car->name}}" />
                            @else
                            <img src="{{URL::asset('images/default.jpg')}}" alt="" />
                            @endif
                            <p class="carName">{{$car->name}}</p>
                            <p class="carPrice">￥{{$car->top_price}}万</p>
                            <div class="carDesc">
                                <span>上牌：{{$car->plate_date}}</span>
                                <span class="fr">里程：{{$car->mileage}}万公里</span>
                            </div>
                        </div>
                    </a>
                    <div class="connect">
                        <span class="fr">{{$car->belongsToUser->nick_name or ''}}({{$car->belongsToShop->shop_name or ''}})</span>
                        <div class="mobile">{{$car->belongsToUser->creater_telephone or $cars->belongsToShop->shop_tele}}</div>
                    </div>
                </div>
                @endforeach
            </div>
            <div style="width:100%;margin-top:24px;">
               <div class="title" style="width:20%;margin:1px auto;">
                    <span>查看更多车源</span>
                    <a href="{{route('home.cate.index')}}" style="font-size:18px;">更多>></a>
                </div> 
            </div>
            <!-- <div class="dib col-4 right" style="background-image: url(../img/index/authRightBg.png);">
                <div class="dib-con stores">
                    <a href="#"><div class="dib store">秦华店</div></a>
                    <a href="#"><div class="dib store">秦华店</div></a>
                    <a href="#"><div class="dib store">秦华店</div></a>
                    <a href="#"><div class="dib store">秦华店</div></a>
                    <a href="#"><div class="dib store">秦华店</div></a>
                    <a href="#"><div class="dib store">秦华店</div></a>
                    <a href="#"><div class="dib store">秦华店</div></a>
                    <a href="#"><div class="dib store">秦华店</div></a>
                    <a href="#"><div class="dib store">秦华店</div></a>
                </div>
            </div> -->
        </div>
    </section>
</main>    
@endsection
@section('script_content')
<script>
    $(document).ready(function(){
        
        $("input[name='brand']").val('');
        $("input[name='company']").val('');
        $("input[name='type']").val('');
        $("input[name='mobile']").val('');

        $('#brands1').change(function(){

            var top_brand   = $(this).val();
            var token       = $("input[name='_token']").val();
            var request_url = $("input[name='ajax_request_url']").val();

            $('#second_category').hide();
            $('#thrid_category').hide();
            $('#four_category').hide();
            $('#name').val('');
            // alert(top_brand);return false;

            //获得该顶级品牌子品牌
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
                        var content = '';
                        // console.log(data.data);
                        $.each(data.data, function(index, value){
                            content += '<li value="';
                            content += value.id;
                            content += '">';
                            content += value.name;
                            content += '</li>';
                        });
                        // $('#top_brand').append(content);
                        // console.log($('#second_category'));
                        $('#company_content').empty();
                        $('#company_name').text('厂家');
                        $('#type_name').text('车系');
                        $('#company_content').append(content);
                    }else{
                        alert(data.message);
                        $('#company_content').empty();
                        return false;
                    }
                },      
                error: function(xhr, type){
    
                    alert('Ajax error!');
                }
            });
        });

        $('#company').change(function(){

            var company     = $(this).val();
            var token       = $("input[name='_token']").val();
            var request_url = $("input[name='ajax_request_url']").val();

            $('#second_category').hide();
            $('#thrid_category').hide();
            $('#four_category').hide();
            $('#name').val('');
            // alert(top_brand);return false;
            // console.log($(this).val());
            //获得该顶级品牌子品牌
            $.ajax({
                type: 'POST',       
                url: request_url,       
                data: { pid : company},       
                dataType: 'json',       
                headers: {      
                    'X-CSRF-TOKEN': token       
                },      
                success: function(data){        
                    if(data.status == 1){
                        var content = '';
                        // console.log(data.data);
                        $.each(data.data, function(index, value){
                            content += '<li value="';
                            content += value.id;
                            content += '">';
                            content += value.name;
                            content += '</li>';
                        });
                        // $('#top_brand').append(content);
                        // console.log($('#second_category'));
                        $('#type_content').empty();
                        $('#type_name').text('车系');
                        $('#type_content').append(content);
                    }else{
                        alert(data.message);
                        $('#company_content').empty();
                        return false;
                    }
                },      
                error: function(xhr, type){
    
                    alert('Ajax error!');
                }
            });
        });

        $('#storeInfo').click(function(){

            var request_url = '{{route('home.sale.store')}}';

            var brand   = $("input[name='brand']").val();
            var company = $("input[name='company']").val();
            var type    = $("input[name='type']").val();
            var mobile  = $("input[name='mobile']").val();

            console.log(brand);
            console.log(company);
            console.log(type);
            console.log(mobile);

            if(brand == ''){

                alert('请选择品牌');
                return false;
            }

            if(company == ''){

                alert('请选择厂家');
                return false;
            }

            if(type == ''){

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
                data:$("#want_form").serialize(),
                dataType: 'json',
                headers: {      
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'        
                },
                success:function(data){

                    //设置图片对应车源ID
                    alert('我们已收录您的信息,销售顾问会及时跟您联系');
                    
                },
                error: function(xhr, type){
                    
                    /*if(xhr.status == 422){ //表单验证失败，返回的状态
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
                    }*/
                    alert('请正确选择车型并填写正确的手机号码');
                }
            });

            return false;
        });
    });
</script>
@endsection