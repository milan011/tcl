<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    @yield('title')
    <!-- 公共样式 -->
    <!-- <link type="text/css" rel="stylesheet" href="../css/common/common.css"> -->
    <link type="text/css" rel="stylesheet" href="{{URL::asset('css/tcl/home/common/common.css')}}">

    <!-- 公共脚本 -->
    <!-- <script type="text/javascript" src="../js/common/jQuery-1.12.0.min.js"></script> -->
    <script type="text/javascript" src="{{URL::asset('js/tcl/home/common/jQuery-1.12.0.min.js')}}"></script>
    <!-- <script type="text/javascript" src="../js/common/common.js"></script> -->
    <script type="text/javascript" src="{{URL::asset('js/tcl/home/common/common.js')}}"></script>
    <!-- <script type="text/javascript" src="../js/header.js"></script> -->
    <script type="text/javascript" src="{{URL::asset('js/tcl/home/header.js')}}"></script>
    <!--[if lt IE 9]>
    <script type="text/javascript" src="../js/common/html5shiv.min.js"></script>
    <![endif]-->
    @yield('head_content')
</head>
<body>
<section class="topNav">
    <div class="container">
        <div class="fr quickLink dib-con">
            <a href="#" onclick="AddFavorite('河北淘车乐',location.href)"><div class="item dib">收藏本站</div></a>
            <div class="item dib">商户登录</div>
        </div>
        <div class="siteName">河北淘车乐</div>
    </div>
</section>
<header class="container">
    <div class="top dib-con">
        <div class="right dib">
            <div class="search">
                <input class="searchInput" type="text" name="keyword" placeholder="请输入车辆名称">
                <input class="searchButton" type="button" value="搜索">
            </div>
        </div>
        <div class="left dib">
            <!-- <img class="logo" src="../img/common/logo.png" alt="淘车乐"> -->
            <img class="logo" src="{{URL::asset('home/img/common/logo.png')}}" alt="淘车乐">
            <div class="cityArea">
                <div class="city">@yield('current_city_name')</div>
                <div class="cityListArea">
                    <div class="cityList dib-con">
                    	@foreach($citysHasTcl as $city)
                            <a href="{{route('home.index')}}/d{{$city->id}}"><div class="dib cityItem">{{$city->name}}</div></a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="main dib">
            <nav class="mainNav dib-con">
                <div class="item dib active"><a href="{{route('home.index')}}"><span>首页</span></a></div>
                <div class="item dib"><a href="{{route('home.cate.index')}}"><span>我要买车</span></a></div>
                <div class="item dib"><a href="javascript:void(0);"><span>我要卖车</span></a></div>
                <div class="item dib"><a href="{{route('home.join.index')}}"><span>我要加盟</span></a></div>
            </nav>
        </div>
        <div class="dib mobileAdd">
            <!-- <img src="../img/common/mobile.png" alt="4006706969"> -->
            <img src="{{URL::asset('home/img/common/mobile.png')}}" alt="4006706969">
        </div>
    </div>
</header>
<!-- 主体内容 -->
@yield('content')
<footer>
    <div class="container">
        <div class="adds dib-con">
            <div class="item dib warranty">
                <div class="icon" style="background: url('{{URL::asset('home/img/common/bottomIcons.png')}}') no-repeat;"></div>
                <span>一年/两万公里质保</span>
            </div>
            <div class="item dib unAccident">
                <div class="icon" style="background: url('{{URL::asset('home/img/common/bottomIcons.png')}}') no-repeat;"></div>
                <span class="bold">确保无事故车</span>
            </div>
            <div class="item dib check">
                <div class="icon" style="background: url('{{URL::asset('home/img/common/bottomIcons.png')}}') no-repeat;"></div>
                <span>专业检测</span>
            </div>
            <div class="item dib resource">
                <div class="icon" style="background: url('{{URL::asset('home/img/common/bottomIcons.png')}}') no-repeat;"></div>
                <span>100%个人车源</span>
            </div>
            <div class="item dib monitor">
                <div class="icon" style="background: url('{{URL::asset('home/img/common/bottomIcons.png')}}') no-repeat;"></div>
                <span class="bold">资金安全监管</span>
            </div>
        </div>
        <div class="friendLinks dib-con">
            <div class="dib col-10">
                <div class="title">友情链接</div>
                <div class="dib-con links">
                    <a href="#"><div class="link dib">二手车之家</div></a>
                    <a href="#"><div class="link dib">衡水淘车乐</div></a>
                    <a href="#"><div class="link dib">唐山淘车乐</div></a>
                    <a href="#"><div class="link dib">邯郸磁县淘车乐</div></a>
                    <a href="#"><div class="link dib">邢台宁晋店</div></a>
                    
                </div>
            </div>
            <div class="dib qrCode dib-con col-9">
                <div class="img dib">
                    <!-- <img src="../img/common/qrCode.png" alt="淘车乐微信 优质个人二手车"/> -->
                    <img src="{{URL::asset('home/img/common/qrCode.png')}}" alt="淘车乐微信 优质个人二手车"/>
                </div>
                <div class="dib textDesc">
                    <div class="title">淘车乐微信</div>
                    <p>关注微信，随时随地，抢购好车</p>
                    <p>优质个人二手车，有保障，更放心</p>
                </div>
            </div>
            <div class="dib connect dib-con col-5">
                <div class="dib phoneIcon"></div>
                <div class="dib text">
                    <div class="phone">400-670-6969</div>
                    <p>免费咨询(咨询、建议、投诉)</p>
                    <p>周一至周六9:00-19:00</p>
                </div>
            </div>
        </div>
    </div>
    <div class="copyRight">
        <p>CopyRight &copy; 2012 All right reserved 淘车乐二手车交易网 版权所有</p>
        <p>电话0311-87785683 传真：0311-87220080 冀ICP备案12011064</p>
    </div>
    @yield('script_content')
</footer>
</body>
</html>