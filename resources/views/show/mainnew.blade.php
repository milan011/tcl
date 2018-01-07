<!doctype html>
<html>
    <head _tracker='{"pagetype":"index"}'>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="renderer" content="webkit">
    <!-- <title>【石家庄二手车交易市场_石家庄个人二手车报价出售转让】-淘车乐</title> -->
    @yield('title')
    <meta name="description" content="石家庄淘车乐是河北省最大的二手车交易平台,二手车源信息最真实,最值得信赖的网上二手车交易市场,提供二手车评估,二手车报价,二手车交易等相关服务,买卖二手车就上淘车乐" />
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- 公共样式 -->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('newShow/css/content.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('newShow/css/common.css')}}">
    <!-- <link type="text/css" rel="stylesheet" href="{{URL::asset('css/tcl/common.css')}}"> -->
    <link type="text/css" rel="stylesheet" href="{{URL::asset('newShow/css/base.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('newShow/css/footer.css')}}">
    <!--  -->
    <!-- <link type="text/css" rel="stylesheet" href="{{URL::asset('css/tcl/show/content.css')}}"> -->

    <!-- 公共脚本 -->
    <!-- <script type="text/javascript" src="../js/common/jQuery-1.12.0.min.js"></script> -->
    <script type="text/javascript" src="{{URL::asset('newShow/js/common/jQuery-1.12.0.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('newShow/js/common/common.js')}}"></script>

    <!--[if lt IE 9]>
    <script type="text/javascript" src="{{URL::asset('js/tcl/show/common/common/html5shiv.min.js')}}"></script>
    <![endif]-->

    @yield('head_content')
</head>
<body>

<!-- 头部  s -->

    <div class="header">
        <div class="hd-top clearfix">
            <div style="display: inline-block;position: relative;z-index: 20;float: left;">
                <img class="logo" src="{{URL::asset('home/img/common/logo.png')}}" alt="淘车乐">
            </div>
            <div class="c2city">
                <a href="javascript:;" class="choose-city">
                    <span>@yield('current_city_name')
                        <i style="background:url('{{URL::asset('home/img/common/tupian.png')}}') no-repeat;">
                            &nbsp;
                        </i>
                    </span>
                </a>

                <i class="maskline"></i>

                <div class="city-box">
                    <div class="all-city">
                        <dl>
                            <!-- <dt>周边</dt> -->
                            
                            <dd>
                                @foreach($citysHasTcl as $city)
                                <a  href="{{route('show.index')}}/city/{{$city->id}}">{{$city->name}}</a>
                                @endforeach
                                <a  href="{{route('show.index')}}/city/75">张掖</a>
                            </dd>
                        </dl>
                        <!-- <dl>
                            <dt>热门</dt>
                            <dd>
                                <a  href="/www/" title="全国二手车">全国</a>
                            </dd>
                        </dl> -->
                            <!-- <div class="city-line"></div> -->
                    </div>
                        <p class="more-city">更多城市正在加紧筹备，敬请期待。</p>
                </div>
            </div>

            <div class="uc">
                <a class="" target="_blank" href="http://www.sjztcl.com/admin">
                    商户登录
                    <!-- <div class="app-guide">
                        <div class="guide-ewm">
                            <img src="picture/ewm-app-2.png" alt="淘车乐二手车app下载">
                        </div>
                        <div class="guide-txt">
                            <p class="guide-txt-1">下载APP使用更多功能</p>
                            <p class="guide-txt-2">收藏查看-更方便</p>
                            <p class="guide-txt-2">降价提醒-更及时</p>
                            <p class="guide-txt-2">账户管理-更智能</p>
                            <p class="guide-txt-2">新车上架-更实时</p>
                        </div>
                    </div> -->
                </a>
            </div>

            <div class="hot-phone">
                <i style="background:url('{{URL::asset('home/img/common/tupian.png')}}') no-repeat; background-position:10% 0%;"></i>
                <span>400-670-6969</span>
            </div>

            <!--头部搜索框 -->
            <!-- <div class="search-box">
                <div class="suggestion_widget" data-default-count="0">
                    <input type="text" class="search-input js_search_input_index" placeholder="搜索您想要的车" baidu_alog='pc_index_search&&input&&index_fastpick_input_search' data-role="keywordInput" name="keyword" autocomplete="off" data-domain="sjz">
                    <button class="search-btn" data-gzlog="tracking_type=click&eventid=0020070000000022" baidu_alog='pc_index_search&click&pc_index_search_rementuijian_c'>搜索</button>
                    <input type="hidden" value="sjz" name="hiddenCity">
                </div>
            </div> -->
        </div>

        <!-- menu s-->
                        <div class="nav">
            <div class="w">

                <!-- <a class="fr app-web" baidu_alog="pc_index_top_tab&click&pc_index_top_tab_appdownload_c"
                   target="_blank" href="/zq_app/" data-gzlog="tracking_type=click&eventid=0010190000000012" title="淘车乐二手车直卖网APP">APP下载
                    <div class="app-guide">
                        <div class="guide-ewm">
                            <img src="picture/ewm-app-2.png" alt="淘车乐二手车app下载">
                        </div>
                        <div class="guide-txt">
                            <p class="guide-txt-1">下载APP使用更多功能</p>
                            <p class="guide-txt-2">收藏查看-更方便</p>
                            <p class="guide-txt-2">降价提醒-更及时</p>
                            <p class="guide-txt-2">账户管理-更智能</p>
                            <p class="guide-txt-2">新车上架-更实时</p>
                        </div>
                    </div>
                </a> -->
                                    <!-- <a class="fr " baidu_alog="pc_index_top_tab&click&pc_index_top_tab_carfina_c"
                       href="https://jr.guazi.com/sjz/"  data-gzlog="tracking_type=click&eventid=0010000000000011" title="二手车分期付款">分期购车</a> -->
                @if (!empty($chosen_city_selection))
                    <a class="fl @if($current_page == 'home') active @endif"  href="{{route('show.index')}}/city/{{$chosen_city_selection}}"  title="淘车乐二手车">首页
                </a>
                @else
                    <a class="fl @if($current_page == 'home') active @endif" href="{{route('show.index')}}"  title="淘车乐二手车">首页
                </a>
                @endif
                <a class="fl @if($current_page == 'cate') active @endif" href="{{route('show.cate.index')}}" title="石家庄个人二手车">我要买车</a>
                <a class="fl @if($current_page == 'sale') active @endif" href="{{route('show.sale.index')}}" title="石家庄二手车出售">我要卖车</a>
                <a class="fl @if($current_page == 'join') active @endif" href="{{route('show.join.index')}}" title="淘车乐二手车服务保障">我要加盟</a>
                <a class="fl @if($current_page == 'about') active @endif" href="{{route('show.about.index')}}" title="淘车乐二手车加盟">关于我们</a>

                <!-- <a class="fl " href="/ask/"  title="淘车乐二手车问答系统">二手车问答</a> -->
            </div>
        </div>
        <!-- menu e-->
    </div>
<!-- 头部  e -->
<!-- 主体内容 -->
@yield('content')
<!-- 底部内容 Begain-->
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
<!-- 底部内容  End-->


<script type="text/javascript">

    /*(function($) {
        $.fn.hoverDelay = function(options) {
            var defaults = {
                hoverDuring: 1000,
                outDuring: 1000,
                hoverEvent: function() {
                    $.noop();
                },
                outEvent: function() {
                    $.noop();
                }
            };
            var sets = $.extend(defaults, options || {});
            var hoverTimer, outTimer;
            return $(this).each(function() {
                $(this).hover(function() {
                    clearTimeout(outTimer);
                    hoverTimer = setTimeout(sets.hoverEvent, sets.hoverDuring);
                },
                function() {
                    clearTimeout(hoverTimer);
                    outTimer = setTimeout(sets.outEvent, sets.outDuring);
                });
            });
        }
    })(jQuery);*/

    $(document).ready(function(){

        $(".c2city").hoverDelay({
            hoverEvent: function() {
                console.log('lai le');
                $('.c2city').addClass('active');
            }
        });

        $(".c2city").hoverDelay({
            outEvent: function() {
                console.log('zou le');
                $('.c2city').removeClass('active');
            }
        });

        /*$('.c2city').mouseenter(this,function(){

            setTimeout(function(){
                console.log('lai le');
                $('.c2city').addClass('active');
            }, 1000);
        });*/

        /*$('.c2city').mouseleave(function(){

            setTimeout(function(){
                console.log('zou le');
                $('.c2city').removeClass('active');
            }, 1000);
        });*/

        // console.log($('.c2city').hoverDelay());
    });
</script>
</body>
</html>
