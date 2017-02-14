@extends('home.main')

@section('title')
    <title>首页</title>
@endsection

@section('head_content')
    <!-- 首页样式 -->
    <link type="text/css" rel="stylesheet" href="{{URL::asset('css/tcl/home/index.css')}}">
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
                            <div class="dib item"><a href="#">大众</a></div>
                            <div class="dib item"><a href="#">宝马</a></div>
                            <div class="dib item"><a href="#">丰田</a></div>
                            <div class="dib item"><a href="#">现代</a></div>
                            <div class="dib item"><a href="#">福特</a></div>
                            <div class="dib item"><a href="#">奥迪</a></div>
                            <div class="dib item"><a href="#">雪佛兰</a></div>
                            <div class="dib item"><a href="#">别克</a></div>
                            <div class="dib item"><a href="#">奔驰</a></div>
                            <div class="dib item"><a href="#">本田</a></div>
                            <div class="dib item"><a href="#">更多&gt;</a></div>
                        </div>
                    </div>
                    <div class="group row4">
                        <div class="title">级别</div>
                        <div class="dib-con">
                            <div class="dib item"><a href="#">轿车</a></div>
                            <div class="dib item"><a href="#">SUV</a></div>
                            <div class="dib item"><a href="#">MPV</a></div>
                            <div class="dib item"><a href="#">跑车</a></div>
                            <div class="dib item"><a href="#">皮卡</a></div>
                            <div class="dib item"><a href="#">面包车</a></div>
                            <div class="dib item"><a href="#">客车</a></div>
                            <div class="dib item"><a href="#">货车</a></div>
                        </div>
                    </div>
                    <div class="group row3">
                        <div class="title">价格</div>
                        <div class="dib-con">
                            <div class="dib item"><a href="#">3万以下</a></div>
                            <div class="dib item"><a href="#">3-5万</a></div>
                            <div class="dib item"><a href="#">5-10万</a></div>
                            <div class="dib item"><a href="#">10-20万</a></div>
                            <div class="dib item"><a href="#">20-30万</a></div>
                            <div class="dib item"><a href="#">30-40万</a></div>
                            <div class="dib item"><a href="#">40万以上</a></div>
                        </div>
                    </div>
                    <div class="group row4 noborder">
                        <div class="title">车龄</div>
                        <div class="dib-con">
                            <div class="dib item"><a href="#">1年以内</a></div>
                            <div class="dib item"><a href="#">1-3年</a></div>
                            <div class="dib item"><a href="#">3-5年</a></div>
                            <div class="dib item"><a href="#">5年以上</a></div>
                        </div>
                    </div>
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
                            <img src="{{URL::asset('uploads/car/'.$car->hasOneImagesOnFirst->filename)}}" alt="{{$car->name}}" />
                            @endif
                            <p class="carName">{{$car->name}}</p>
                            <p class="carPrice">￥{{$car->top_price}}万</p>
                            <div class="carDesc">
                                <span>上牌：{{$car->plate_date}}</span>
                                <span class="fr">里程：{{$car->milage}}万公里</span>
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
