<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    @yield('title')
    <!-- 公共样式 -->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
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
            <a href="http://www.sjztcl.com/admin" target="_blank"><div class="item dib">商户登录</div></a>
        </div>
        <div class="siteName">河北淘车乐</div>
    </div>
</section>
<header class="container">
    <div class="top dib-con">
        <!-- <div class="right dib">
            <div class="search">
                <input class="searchInput" type="text" name="keyword" placeholder="请输入车辆名称">
                <input class="searchButton" type="button" value="搜索">
            </div>
        </div> -->
        <div class="left dib">
            <!-- <img class="logo" src="../img/common/logo.png" alt="淘车乐"> -->
            <img class="logo" src="{{URL::asset('home/img/common/logo.png')}}" alt="淘车乐">
            <div class="cityArea">
                <div class="city">@yield('current_city_name')</div>
                <div class="cityListArea">
                    <div class="cityList dib-con">
                    	@foreach($citysHasTcl as $city)
                            <a href="{{route('home.index')}}/city/{{$city->id}}"><div class="dib cityItem">{{$city->name}}</div></a>
                        @endforeach
                        <a href="{{route('home.index')}}/city/75"><div class="dib cityItem">张掖</div></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="main dib">
            <nav class="mainNav dib-con">
                
                @if (!empty($chosen_city_selection))
                    <div class="item dib  @if($current_page == 'home') active @endif"><a href="{{route('home.index')}}/city/{{$chosen_city_selection}}"><span>首页</span></a></div>
                @else
                    <div class="item dib  @if($current_page == 'home') active @endif"><a href="{{route('home.index')}}"><span>首页</span></a></div>
                @endif
                <div class="item dib @if($current_page == 'cate') active @endif"><a href="{{route('home.cate.index')}}"><span>我要买车</span></a></div>
                <div class="item dib @if($current_page == 'sale') active @endif"><a href="{{route('home.sale.index')}}"><span>我要卖车</span></a></div>
                <div class="item dib @if($current_page == 'join') active @endif"><a href="{{route('home.join.index')}}"><span>我要加盟</span></a></div>
                <div class="item dib @if($current_page == 'about') active @endif"><a href="{{route('home.about.index')}}"><span>关于我们</span></a></div>
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
                <span class="bold">一年/两万公里质保</span>
            </div>
            <div class="item dib unAccident">
                <div class="icon" style="background: url('{{URL::asset('home/img/common/bottomIcons.png')}}') no-repeat;"></div>
                <span class="bold">确保无事故车</span>
            </div>
            <div class="item dib check">
                <div class="icon" style="background: url('{{URL::asset('home/img/common/bottomIcons.png')}}') no-repeat;"></div>
                <span class="bold">专业检测</span>
            </div>
            <div class="item dib resource">
                <div class="icon" style="background: url('{{URL::asset('home/img/common/bottomIcons.png')}}') no-repeat;"></div>
                <span class="bold">100%个人车源</span>
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
                    <a href="http://dealers.che168.com/shop/index_161051.html"><div class="link dib">二手车之家</div></a>
                    <a href="http://www.che168.com/dealer/146535.html#pvareaid=102118"><div class="link dib">衡水淘车乐</div></a>
                    <a href="http://www.che168.com/dealer/256572.html#pvareaid=102118"><div class="link dib">张家口淘车乐</div></a>
                    <a href="http://www.che168.com/dealer/283212.html#pvareaid=102118"><div class="link dib">保定淘车乐</div></a>
                    <a href="http://www.che168.com/dealer/283215.html#pvareaid=102118"><div class="link dib">沧州淘车乐</div></a>
                    
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
        <p>电话0311-87785683 传真：0311-87220080 冀ICP备16003677号-1</p>
    </div>
    @yield('script_content')
</footer>
</body>
</html>