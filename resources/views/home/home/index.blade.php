@extends('home.main')

@section('title')
    <title>首页</title>
@endsection

@section('head_content')
    <!-- 首页样式 -->
    <link type="text/css" rel="stylesheet" href="{{URL::asset('css/tcl/home/index.css')}}">
    <!-- 首页脚本  -->
    <!-- <script type="text/javascript" src="../js/index.js"></script> -->
    <script type="text/javascript" src="{{URL::asset('js/tcl/home/index.js')}}"></script>
@endsection




@section('current_city_name')
    @if(null !== Session('chosen_city_name'))
        {{Session('chosen_city_name')}}
    @else
        {{Session('current_city_name')}}
    @endif
@endsection

@section('content')
<main>
    <div class="banner">
        <div id="bannerSlider" class="slider" style="background-color: #000;">
            <div class="sliderItem active transition" bgColor="#000">
                <img src="{{URL::asset('home/img/index/dbfile/slider.png')}}" alt="真车源 真放心">
            </div>
            <div class="sliderItem transition" bgColor="#fff">
                <img src="{{URL::asset('home/img/index/dbfile/slider1.png')}}" alt="一站式卖车">
            </div>
            <div class="sliderItem transition" bgColor="#fff">
                <img src="{{URL::asset('home/img/sell/dbfile/bannerBg.jpg')}}" alt="一站式卖车">
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
        <div class="dib img">
            <img src="{{URL::asset('home/img/index/sell.png')}}">
        </div>
        <!-- combo 节点结构 表单提交时提交  隐藏文本框的值  ul 中的列表 为下拉框的列表  选中的li的value值 会填充在 隐藏文本域中  -->
        <div id="brand" class="dib combo dib-con brand">
            <input type="hidden" name="brand" />
            <div class="dib text"></div>
            <div class="dib icon"></div>
            <div class="optionList">
                <ul>
                    <li value="benz">梅赛德斯</li>
                    <li value="benz">梅赛德斯</li>
                    <li value="benz">梅赛德斯</li>
                    <li value="benz">梅赛德斯</li>
                    <li value="benz">梅赛德斯</li>
                    <li value="benz">梅赛德斯</li>
                    <li value="benz">梅赛德斯</li>
                    <li value="benz">梅赛德斯</li>
                </ul>
            </div>
        </div>
        <div id="car" class="dib combo dib-con car">
            <input type="hidden" name="car" />
            <div class="dib text"></div>
            <div class="dib icon"></div>
            <div class="optionList">
                <ul>
                    <li value="benz">梅赛德斯</li>
                </ul>
            </div>
        </div>
        <div class="dib textInput mobile">
            <input name="mobile" type="text" class="text" placeholder="手机号">
        </div>
        <div class="dib button submit">预约卖车</div>
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
                    <a href="{{route('home.car.index', ['car'=>$car->id])}}">
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
                        <span class="fr">{{$car->belongsToUser->nick_name}}({{$car->belongsToShop->shop_name}})</span>
                        <div class="mobile">{{$car->belongsToUser->creater_telephone}}</div>
                    </div>
                </div>
                @endforeach
            </div>
            <div style="width:100%;margin-top:24px;">
               <div class="title" style="width:20%;margin:1px auto;">
                    <span>查看更多车源</span>
                    <a href="#" style="font-size:18px;">更多>></a>
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

        /*$("input[name='brand_id']").val('');
        $("input[name='categorey_type']").val('');
        $("input[name='top_price']").val('');
        $("input[name='age']").val('');

        $('a.cate').click(function(){

            var s_type = $(this).attr('data-stype'); //搜索类型
            var s_info = $(this).attr('data-info');  //搜索条件

            switch(s_type){
                case 'brand_id':
                    $("input[name='brand_id']").val(s_info);
                    $("input[name='brand_id']").siblings().val('');
                break;

                case 'categorey_type':
                    $("input[name='categorey_type']").val(s_info);
                    $("input[name='categorey_type']").siblings().val('');
                break;

                case 'top_price':
                    $("input[name='top_price']").val(s_info);
                    $("input[name='top_price']").siblings().val('');
                break;

                case 'age':
                    $("input[name='age']").val(s_info);
                    $("input[name='age']").siblings().val('');
                break;

                default:
                    
                break;
            }

            $('#cate_form').submit();
        });*/
    });
</script>
@endsection