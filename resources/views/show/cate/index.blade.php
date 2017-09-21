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
    <link type="text/css" rel="stylesheet" href="{{URL::asset('newShow/css/buy.css')}}">
    <!-- 首页脚本  -->
    <!-- <script type="text/javascript" src="../js/index.js"></script> -->
    <!-- <script type="text/javascript" src="{{URL::asset('js/tcl/home/index.js')}}"></script> -->


@endsection


@section('current_city_name')
    {{$show_city_name}}
@endsection

@section('content')
<div class="w">
        <!--筛选-->
        <div class="comfilter-bd">
            <div class="filterBox">
                <dl class="fliter-bd clearfix">
                    <dt>品牌：</dt>
                    <dd class="clickBrandWidget">
                        <a class="on" href="/sjz/buy/" rel="nofollow">不限</a>
                        <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=dazhong' class="" href="/sjz/dazhong/" title="大众二手车">
                            大众                        </a>
                        <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=ford' class="" href="/sjz/ford/" title="福特二手车">
                            福特                        </a>
                        <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=hyundai' class="" href="/sjz/hyundai/" title="现代二手车">
                            现代                        </a>
                        <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=audi' class="" href="/sjz/audi/" title="奥迪二手车">
                            奥迪                        </a>
                        <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=buick' class="" href="/sjz/buick/" title="别克二手车">
                            别克                        </a>
                        <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=chevrolet' class="" href="/sjz/chevrolet/" title="雪佛兰二手车">
                            雪佛兰                        </a>
                        <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=suzuki' class="" href="/sjz/suzuki/" title="铃木二手车">
                            铃木                        </a>
                        <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=bmw' class="" href="/sjz/bmw/" title="宝马二手车">
                            宝马                        </a>
                        <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=citroen' class="" href="/sjz/citroen/" title="雪铁龙二手车">
                            雪铁龙                        </a>
                        <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=toyota' class="" href="/sjz/toyota/" title="丰田二手车">
                            丰田                        </a>
                        <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=benz' class="" href="/sjz/benz/" title="奔驰二手车">
                            奔驰                        </a>
                        <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=honda' class="" href="/sjz/honda/" title="本田二手车">
                            本田                        </a>
                        <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=byd' class="" href="/sjz/byd/" title="比亚迪二手车">
                            比亚迪                        </a>
                        <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=hafu' class="" href="/sjz/hafu/" title="哈弗二手车">
                            哈弗                        </a>
                        <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=zhongtai' class="" href="/sjz/zhongtai/" title="众泰二手车">
                            众泰                        </a>
                        <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=kia' class="" href="/sjz/kia/" title="起亚二手车">
                            起亚                        </a>
                        <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=changanshangyong' class="" href="/sjz/changanshangyong/" title="长安商用二手车">
                            长安商用                        </a>
                        <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=biaozhi' class="" href="/sjz/biaozhi/" title="标致二手车">
                            标致                        </a>
                        <!--品牌全部-->
                        <span class="brand-all z30">
                    <em data-role="show">全部<i></i></em>
                    <div data-role="otherBrand" class="otherbrand" style="display: none;">
                        <div class="o-b-box"><span class="arrow"><s></s></span>
                        <ul data-role="letterNav" class="o-b-list">
                            <li class="clearfix">
                                <span>A</span>
                                <div>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=audi' href="/sjz/audi/" title="奥迪二手车">
                                                奥迪                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=astonmartin' href="/sjz/astonmartin/" title="阿斯顿·马丁二手车">
                                                阿斯顿·马丁                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=anchi' href="/sjz/anchi/" title="安驰二手车">
                                                安驰                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=alpina' href="/sjz/alpina/" title="Alpina二手车">
                                                Alpina                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=alfaromeo' href="/sjz/alfaromeo/" title="阿尔法·罗密欧二手车">
                                                阿尔法·罗密欧                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=ac-schnitzer' href="/sjz/ac-schnitzer/" title="AC Schnitzer二手车">
                                                AC Schnitzer                                            </a>
                                </div>
                            </li>
                            <li class="clearfix">
                                <span>B</span>
                                <div>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=buick' href="/sjz/buick/" title="别克二手车">
                                                别克                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=bmw' href="/sjz/bmw/" title="宝马二手车">
                                                宝马                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=honda' href="/sjz/honda/" title="本田二手车">
                                                本田                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=byd' href="/sjz/byd/" title="比亚迪二手车">
                                                比亚迪                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=benz' href="/sjz/benz/" title="奔驰二手车">
                                                奔驰                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=biaozhi' href="/sjz/biaozhi/" title="标致二手车">
                                                标致                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=benteng' href="/sjz/benteng/" title="奔腾二手车">
                                                奔腾                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=baojun' href="/sjz/baojun/" title="宝骏二手车">
                                                宝骏                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=porsche' href="/sjz/porsche/" title="保时捷二手车">
                                                保时捷                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=shenbao' href="/sjz/shenbao/" title="北汽绅宝二手车">
                                                北汽绅宝                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=beijingqiche' href="/sjz/beijingqiche/" title="北京二手车">
                                                北京                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=huansu' href="/sjz/huansu/" title="北汽幻速二手车">
                                                北汽幻速                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=beiqi' href="/sjz/beiqi/" title="北汽二手车">
                                                北汽                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=bentley' href="/sjz/bentley/" title="宾利二手车">
                                                宾利                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=baowo' href="/sjz/baowo/" title="宝沃汽车二手车">
                                                宝沃汽车                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=babosi' href="/sjz/babosi/" title="巴博斯二手车">
                                                巴博斯                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=bisu' href="/sjz/bisu/" title="比速汽车二手车">
                                                比速汽车                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=baolong' href="/sjz/baolong/" title="宝龙二手车">
                                                宝龙                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=baofeili' href="/sjz/baofeili/" title="保斐利二手车">
                                                保斐利                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=bujiadi' href="/sjz/bujiadi/" title="布加迪二手车">
                                                布加迪                                            </a>
                                </div>
                            </li>
                            <li class="clearfix">
                                <span>C</span>
                                <div>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=changanshangyong' href="/sjz/changanshangyong/" title="长安商用二手车">
                                                长安商用                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=changan' href="/sjz/changan/" title="长安二手车">
                                                长安                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=changcheng' href="/sjz/changcheng/" title="长城二手车">
                                                长城                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=chuanqi1' href="/sjz/chuanqi1/" title="传祺二手车">
                                                传祺                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=changhe' href="/sjz/changhe/" title="昌河二手车">
                                                昌河                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=chuanqiyema' href="/sjz/chuanqiyema/" title="川汽野马二手车">
                                                川汽野马                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=chenggong' href="/sjz/chenggong/" title="成功汽车二手车">
                                                成功汽车                                            </a>
                                </div>
                            </li>
                            <li class="clearfix">
                                <span>D</span>
                                <div>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=dazhong' href="/sjz/dazhong/" title="大众二手车">
                                                大众                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=fengxing' href="/sjz/fengxing/" title="东风风行二手车">
                                                东风风行                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=dongfengxiaokang' href="/sjz/dongfengxiaokang/" title="东风小康二手车">
                                                东风小康                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=dongnan' href="/sjz/dongnan/" title="东南二手车">
                                                东南                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=dongfengfengshen' href="/sjz/dongfengfengshen/" title="东风风神二手车">
                                                东风风神                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=dongfengfengdu' href="/sjz/dongfengfengdu/" title="东风风度二手车">
                                                东风风度                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=daoqi' href="/sjz/daoqi/" title="道奇二手车">
                                                道奇                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=ds' href="/sjz/ds/" title="DS二手车">
                                                DS                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=dongfeng' href="/sjz/dongfeng/" title="东风二手车">
                                                东风                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=jilindafa' href="/sjz/jilindafa/" title="大发二手车">
                                                大发                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=dayu' href="/sjz/dayu/" title="大宇二手车">
                                                大宇                                            </a>
                                </div>
                            </li>
                            <li class="clearfix">
                                <span>F</span>
                                <div>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=ford' href="/sjz/ford/" title="福特二手车">
                                                福特                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=toyota' href="/sjz/toyota/" title="丰田二手车">
                                                丰田                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=fiat' href="/sjz/fiat/" title="菲亚特二手车">
                                                菲亚特                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=futian' href="/sjz/futian/" title="福田二手车">
                                                福田                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=fudi' href="/sjz/fudi/" title="福迪二手车">
                                                福迪                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=fuqiqiteng' href="/sjz/fuqiqiteng/" title="福汽启腾二手车">
                                                福汽启腾                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=ferrari' href="/sjz/ferrari/" title="法拉利二手车">
                                                法拉利                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=huaxiangfuqi' href="/sjz/huaxiangfuqi/" title="富奇二手车">
                                                富奇                                            </a>
                                </div>
                            </li>
                            <li class="clearfix">
                                <span>G</span>
                                <div>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=jiao' href="/sjz/jiao/" title="广汽吉奥二手车">
                                                广汽吉奥                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=gmc' href="/sjz/gmc/" title="GMC二手车">
                                                GMC                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=guanzhi' href="/sjz/guanzhi/" title="观致二手车">
                                                观致                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=galue' href="/sjz/galue/" title="光冈二手车">
                                                光冈                                            </a>
                                </div>
                            </li>
                            <li class="clearfix">
                                <span>H</span>
                                <div>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=hafu' href="/sjz/hafu/" title="哈弗二手车">
                                                哈弗                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=haima' href="/sjz/haima/" title="海马二手车">
                                                海马                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=huatai' href="/sjz/huatai/" title="华泰二手车">
                                                华泰                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=hafei' href="/sjz/hafei/" title="哈飞二手车">
                                                哈飞                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=huanghai' href="/sjz/huanghai/" title="黄海二手车">
                                                黄海                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=hongqi' href="/sjz/hongqi/" title="红旗二手车">
                                                红旗                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=huapu' href="/sjz/huapu/" title="华普二手车">
                                                华普                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=haige' href="/sjz/haige/" title="海格二手车">
                                                海格                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=sh-huizhong' href="/sjz/sh-huizhong/" title="汇众二手车">
                                                汇众                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=hanma' href="/sjz/hanma/" title="悍马二手车">
                                                悍马                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=huasong' href="/sjz/huasong/" title="华颂二手车">
                                                华颂                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=hanteng' href="/sjz/hanteng/" title="汉腾二手车">
                                                汉腾                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=hengtian' href="/sjz/hengtian/" title="恒天二手车">
                                                恒天                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=fusangheibao' href="/sjz/fusangheibao/" title="黑豹二手车">
                                                黑豹                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=zhongke-huabei' href="/sjz/zhongke-huabei/" title="华北二手车">
                                                华北                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=huayang' href="/sjz/huayang/" title="华阳二手车">
                                                华阳                                            </a>
                                </div>
                            </li>
                            <li class="clearfix">
                                <span>J</span>
                                <div>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=jili' href="/sjz/jili/" title="吉利二手车">
                                                吉利                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=jianghuai' href="/sjz/jianghuai/" title="江淮二手车">
                                                江淮                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=jeep' href="/sjz/jeep/" title="Jeep二手车">
                                                Jeep                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=huachen' href="/sjz/huachen/" title="金杯二手车">
                                                金杯                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=jiebao' href="/sjz/jiebao/" title="捷豹二手车">
                                                捷豹                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=jiangling' href="/sjz/jiangling/" title="江铃二手车">
                                                江铃                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=jlshwuche' href="/sjz/jlshwuche/" title="九龙二手车">
                                                九龙                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=jinlv' href="/sjz/jinlv/" title="金旅二手车">
                                                金旅                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=jinlong' href="/sjz/jinlong/" title="金龙二手车">
                                                金龙                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=jiangnan' href="/sjz/jiangnan/" title="江南二手车">
                                                江南                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=jincheng' href="/sjz/jincheng/" title="金程二手车">
                                                金程                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=yiqijiefang' href="/sjz/yiqijiefang/" title="解放二手车">
                                                解放                                            </a>
                                </div>
                            </li>
                            <li class="clearfix">
                                <span>K</span>
                                <div>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=cadillac' href="/sjz/cadillac/" title="凯迪拉克二手车">
                                                凯迪拉克                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=krui' href="/sjz/krui/" title="开瑞二手车">
                                                开瑞                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=chrysler' href="/sjz/chrysler/" title="克莱斯勒二手车">
                                                克莱斯勒                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=kaiyi' href="/sjz/kaiyi/" title="凯翼二手车">
                                                凯翼                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=kawei' href="/sjz/kawei/" title="卡威二手车">
                                                卡威                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=kenisaige' href="/sjz/kenisaige/" title="科尼赛克二手车">
                                                科尼赛克                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=kaersen' href="/sjz/kaersen/" title="卡尔森二手车">
                                                卡尔森                                            </a>
                                </div>
                            </li>
                            <li class="clearfix">
                                <span>L</span>
                                <div>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=suzuki' href="/sjz/suzuki/" title="铃木二手车">
                                                铃木                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=landrover' href="/sjz/landrover/" title="路虎二手车">
                                                路虎                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=lifan' href="/sjz/lifan/" title="力帆二手车">
                                                力帆                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=lexus' href="/sjz/lexus/" title="雷克萨斯二手车">
                                                雷克萨斯                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=lufeng' href="/sjz/lufeng/" title="陆风二手车">
                                                陆风                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=renault' href="/sjz/renault/" title="雷诺二手车">
                                                雷诺                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=liebao' href="/sjz/liebao/" title="猎豹二手车">
                                                猎豹                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=linian' href="/sjz/linian/" title="理念二手车">
                                                理念                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=lincoln' href="/sjz/lincoln/" title="林肯二手车">
                                                林肯                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=lotuscars' href="/sjz/lotuscars/" title="路特斯二手车">
                                                路特斯                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=lamborghini' href="/sjz/lamborghini/" title="兰博基尼二手车">
                                                兰博基尼                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=rolls-royce' href="/sjz/rolls-royce/" title="劳斯莱斯二手车">
                                                劳斯莱斯                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=laolunshi' href="/sjz/laolunshi/" title="劳伦士二手车">
                                                劳伦士                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=rover' href="/sjz/rover/" title="罗孚二手车">
                                                罗孚                                            </a>
                                </div>
                            </li>
                            <li class="clearfix">
                                <span>M</span>
                                <div>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=mazda' href="/sjz/mazda/" title="马自达二手车">
                                                马自达                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=mg1' href="/sjz/mg1/" title="MG二手车">
                                                MG                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=mini' href="/sjz/mini/" title="MINI二手车">
                                                MINI                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=maserati' href="/sjz/maserati/" title="玛莎拉蒂二手车">
                                                玛莎拉蒂                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=meiya' href="/sjz/meiya/" title="美亚二手车">
                                                美亚                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=maikailun' href="/sjz/maikailun/" title="迈凯伦二手车">
                                                迈凯伦                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=maybach' href="/sjz/maybach/" title="迈巴赫二手车">
                                                迈巴赫                                            </a>
                                </div>
                            </li>
                            <li class="clearfix">
                                <span>N</span>
                                <div>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=dongfengyulongnazhijie' href="/sjz/dongfengyulongnazhijie/" title="纳智捷二手车">
                                                纳智捷                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=njjinlong' href="/sjz/njjinlong/" title="南京金龙二手车">
                                                南京金龙                                            </a>
                                </div>
                            </li>
                            <li class="clearfix">
                                <span>O</span>
                                <div>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=opel' href="/sjz/opel/" title="欧宝二手车">
                                                欧宝                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=acura' href="/sjz/acura/" title="讴歌二手车">
                                                讴歌                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=oulang' href="/sjz/oulang/" title="欧朗二手车">
                                                欧朗                                            </a>
                                </div>
                            </li>
                            <li class="clearfix">
                                <span>Q</span>
                                <div>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=kia' href="/sjz/kia/" title="起亚二手车">
                                                起亚                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=chery' href="/sjz/chery/" title="奇瑞二手车">
                                                奇瑞                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=qichen' href="/sjz/qichen/" title="启辰二手车">
                                                启辰                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=lotus' href="/sjz/lotus/" title="青年莲花二手车">
                                                青年莲花                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=qingling' href="/sjz/qingling/" title="庆铃二手车">
                                                庆铃                                            </a>
                                </div>
                            </li>
                            <li class="clearfix">
                                <span>R</span>
                                <div>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=richan' href="/sjz/richan/" title="日产二手车">
                                                日产                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=rongwei' href="/sjz/rongwei/" title="荣威二手车">
                                                荣威                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=ruilin' href="/sjz/ruilin/" title="瑞麒二手车">
                                                瑞麒                                            </a>
                                </div>
                            </li>
                            <li class="clearfix">
                                <span>S</span>
                                <div>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=skoda' href="/sjz/skoda/" title="斯柯达二手车">
                                                斯柯达                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=mitsubishi' href="/sjz/mitsubishi/" title="三菱二手车">
                                                三菱                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=smart' href="/sjz/smart/" title="Smart二手车">
                                                Smart                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=subaru' href="/sjz/subaru/" title="斯巴鲁二手车">
                                                斯巴鲁                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=datong' href="/sjz/datong/" title="上汽大通二手车">
                                                上汽大通                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=shuanglong' href="/sjz/shuanglong/" title="双龙二手车">
                                                双龙                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=siming' href="/sjz/siming/" title="思铭二手车">
                                                思铭                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=shuanghuan' href="/sjz/shuanghuan/" title="双环二手车">
                                                双环                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=xiaqitongjia' href="/sjz/xiaqitongjia/" title="陕汽通家二手车">
                                                陕汽通家                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=siwei' href="/sjz/siwei/" title="斯威二手车">
                                                斯威                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=saab' href="/sjz/saab/" title="萨博二手车">
                                                萨博                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=springo' href="/sjz/springo/" title="SPRINGO二手车">
                                                SPRINGO                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=sailin' href="/sjz/sailin/" title="赛麟二手车">
                                                赛麟                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=shijue' href="/sjz/shijue/" title="世爵二手车">
                                                世爵                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=scion' href="/sjz/scion/" title="Scion二手车">
                                                Scion                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=saibao1' href="/sjz/saibao1/" title="赛宝二手车">
                                                赛宝                                            </a>
                                </div>
                            </li>
                            <li class="clearfix">
                                <span>T</span>
                                <div>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=tesila' href="/sjz/tesila/" title="特斯拉二手车">
                                                特斯拉                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=tengshi' href="/sjz/tengshi/" title="腾势二手车">
                                                腾势                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=yiqitongyong' href="/sjz/yiqitongyong/" title="通用二手车">
                                                通用                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=tianma' href="/sjz/tianma/" title="天马二手车">
                                                天马                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=tongtian' href="/sjz/tongtian/" title="通田二手车">
                                                通田                                            </a>
                                </div>
                            </li>
                            <li class="clearfix">
                                <span>W</span>
                                <div>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=wuling' href="/sjz/wuling/" title="五菱二手车">
                                                五菱                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=volvo' href="/sjz/volvo/" title="沃尔沃二手车">
                                                沃尔沃                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=weiwang' href="/sjz/weiwang/" title="威旺二手车">
                                                威旺                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=weilin' href="/sjz/weilin/" title="威麟二手车">
                                                威麟                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=wushiling' href="/sjz/wushiling/" title="五十铃二手车">
                                                五十铃                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=wanfeng' href="/sjz/wanfeng/" title="万丰二手车">
                                                万丰                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=weiziman' href="/sjz/weiziman/" title="威兹曼二手车">
                                                威兹曼                                            </a>
                                </div>
                            </li>
                            <li class="clearfix">
                                <span>X</span>
                                <div>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=hyundai' href="/sjz/hyundai/" title="现代二手车">
                                                现代                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=chevrolet' href="/sjz/chevrolet/" title="雪佛兰二手车">
                                                雪佛兰                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=citroen' href="/sjz/citroen/" title="雪铁龙二手车">
                                                雪铁龙                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=brand-xiali' href="/sjz/brand-xiali/" title="夏利二手车">
                                                夏利                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=xiyate' href="/sjz/xiyate/" title="西雅特二手车">
                                                西雅特                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=xinkai' href="/sjz/xinkai/" title="新凯二手车">
                                                新凯                                            </a>
                                </div>
                            </li>
                            <li class="clearfix">
                                <span>Y</span>
                                <div>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=tj-yiqi' href="/sjz/tj-yiqi/" title="一汽二手车">
                                                一汽                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=infiniti' href="/sjz/infiniti/" title="英菲尼迪二手车">
                                                英菲尼迪                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=nj-iveco' href="/sjz/nj-iveco/" title="依维柯二手车">
                                                依维柯                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=yongyuanqiche' href="/sjz/yongyuanqiche/" title="永源二手车">
                                                永源                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=yingzhi' href="/sjz/yingzhi/" title="英致二手车">
                                                英致                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=cf-yangzi' href="/sjz/cf-yangzi/" title="扬子二手车">
                                                扬子                                            </a>
                                </div>
                            </li>
                            <li class="clearfix">
                                <span>Z</span>
                                <div>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=huachen-zhonghua' href="/sjz/huachen-zhonghua/" title="中华二手车">
                                                中华                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=zhongtai' href="/sjz/zhongtai/" title="众泰二手车">
                                                众泰                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=zhidou' href="/sjz/zhidou/" title="知豆二手车">
                                                知豆                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=zhongxing' href="/sjz/zhongxing/" title="中兴二手车">
                                                中兴                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=zhongou' href="/sjz/zhongou/" title="中欧二手车">
                                                中欧                                            </a>
                                    <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=brand&brand=zhongshun' href="/sjz/zhongshun/" title="中顺二手车">
                                                中顺                                            </a>
                                </div>
                            </li>
                        </ul>
            </div>
        </div>
        </span>
        <!--品牌全部-->
        </dd>
        </dl>
        <dl class="fliter-bd clearfix">
            <dt>车系：</dt>
            <dd class="clickTagWidget">
                <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=tag&tag=0' class="on" href="/sjz/buy/" rel="nofollow">不限</a>
                <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=tag&tag=fute-fukesi' class="" href="/sjz/fute-fukesi/" title="二手福克斯">
                            福克斯                        </a>
                <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=tag&tag=passat' class="" href="/sjz/passat/" title="二手帕萨特">
                            帕萨特                        </a>
                <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=tag&tag=jetta' class="" href="/sjz/jetta/" title="二手捷达">
                            捷达                        </a>
                <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=tag&tag=baolai' class="" href="/sjz/baolai/" title="二手宝来">
                            宝来                        </a>
                <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=tag&tag=tuguan' class="" href="/sjz/tuguan/" title="二手途观">
                            途观                        </a>
                <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=tag&tag=dazhong-polo' class="" href="/sjz/dazhong-polo/" title="二手大众POLO">
                            大众POLO                        </a>
                <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=tag&tag=suteng' class="" href="/sjz/suteng/" title="二手速腾">
                            速腾                        </a>
                <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=tag&tag=e20' class="" href="/sjz/e20/" title="二手众泰E20">
                            众泰E20                        </a>
                <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=tag&tag=h6' class="" href="/sjz/h6/" title="二手哈弗H6">
                            哈弗H6                        </a>
                <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=tag&tag=chevrolet-keluzi' class="" href="/sjz/chevrolet-keluzi/" title="二手科鲁兹">
                            科鲁兹                        </a>
                <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=tag&tag=bmw-5' class="" href="/sjz/bmw-5/" title="二手宝马5系">
                            宝马5系                        </a>
                <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=tag&tag=audi-a6l' class="" href="/sjz/audi-a6l/" title="二手奥迪A6L">
                            奥迪A6L                        </a>
                <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=tag&tag=beidouxing' class="" href="/sjz/beidouxing/" title="二手北斗星">
                            北斗星                        </a>
                <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=tag&tag=sunata' class="" href="/sjz/sunata/" title="二手索纳塔">
                            索纳塔                        </a>
                <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=tag&tag=ailishejingdian' class="" href="/sjz/ailishejingdian/" title="二手爱丽舍">
                            爱丽舍                        </a>
            </dd>
        </dl>
        <dl class="fliter-bd clearfix">
            <dt>价格：</dt>
            <dd>
                <a data-gzlog="tracking_type=click&eventid=0070000000000045&filter=price_index&price_index=0" class="on" href="/sjz/buy/" rel="nofollow">不限</a>
                <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=price_index&price_index=11' class="" href="/sjz/buy/p11/" title='3万以下二手车'>
                        3万以下                    </a>
                <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=price_index&price_index=12' class="" href="/sjz/buy/p12/" title='5万以下二手车'>
                        3-5万                    </a>
                <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=price_index&price_index=13' class="" href="/sjz/buy/p13/" title='7万以下二手车'>
                        5-7万                    </a>
                <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=price_index&price_index=14' class="" href="/sjz/buy/p14/" title='9万以下二手车'>
                        7-9万                    </a>
                <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=price_index&price_index=15' class="" href="/sjz/buy/p15/" title='12万以下二手车'>
                        9-12万                    </a>
                <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=price_index&price_index=16' class="" href="/sjz/buy/p16/" title='16万以下二手车'>
                        12-16万                    </a>
                <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=price_index&price_index=17' class="" href="/sjz/buy/p17/" title='20万以下二手车'>
                        16-20万                    </a>
                <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=price_index&price_index=18' class="" href="/sjz/buy/p18/" title='20万以上二手车'>
                        20万以上                    </a>
                <span data-url-template="/sjz/buy/bbegineend/" class="input-box clearfix rangeFilter">
                <label>
                    <input type="text" value="" data-default-value="0" size="4" class="js-begin" maxlength="3" id="my_price_b" name="b">
                </label>
                <label><i class="input-line">-</i></label>
                <label>
                    <input type="text" value="" data-default-value="999" size="4" class="js-end" maxlength="3" id="my_price_e" name="e">
                </label>
                <label class="input-unit">万</label>
                <label><a gjalog="" href="#" class="input-btn js-btn">确定</a></label>
                </span>
            </dd>
        </dl>
        <dl class="fliter-bd clearfix">
            <dt>车龄：</dt>
            <dd>
                <a data-role="filterItemAge" data-value="" class="on" href="/sjz/buy/" rel="nofollow">不限</a>
                <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=cheling&cheling=1' data-role="filterItemAge" data-value="1" class="" href="/sjz/buy/l1/" rel="nofollow" title="1年以内二手车">
                            1年以内                        </a>
                <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=cheling&cheling=2' data-role="filterItemAge" data-value="2" class="" href="/sjz/buy/l2/" rel="nofollow" title="3年内二手车">
                            3年内                        </a>
                <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=cheling&cheling=3' data-role="filterItemAge" data-value="3" class="" href="/sjz/buy/l3/" rel="nofollow" title="5年内二手车">
                            5年内                        </a>
                <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=cheling&cheling=4' data-role="filterItemAge" data-value="4" class="" href="/sjz/buy/l4/" rel="nofollow" title="5年以上二手车">
                            5年以上                        </a>
            </dd>
        </dl>
        <dl class="moreitem clearfix">
            <dt>更多：</dt>
            <dd class="hoverWidget" gjalog="100000000641000100000010">
                <div class="moreitem-btn">
                    <a href="#">车型</a>
                </div>
                <div class="moreitem-box">
                    <div class="m-i-w1">
                        <div class="moreitem-opts">
                            <a class="one" href="/sjz/buy/">不限</a>
                            <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=chexing&chexing=5' class="" href="/sjz/buy/h5/" title="二手两厢轿车">
                                    两厢轿车                                </a>
                            <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=chexing&chexing=6' class="" href="/sjz/buy/h6/" title="二手三厢轿车">
                                    三厢轿车                                </a>
                            <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=chexing&chexing=4' class="" href="/sjz/buy/h4/" title="二手跑车">
                                    跑车                                </a>
                            <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=chexing&chexing=2' class="" href="/sjz/buy/h2/" title="二手SUV">
                                    SUV                                </a>
                            <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=chexing&chexing=3' class="" href="/sjz/buy/h3/" title="二手MPV">
                                    MPV                                </a>
                        </div>
                    </div>
            </dd>
            <dd class="hoverWidget" gjalog="100000000643000100000010">
                <div class="moreitem-btn">
                    <a href="#">座位</a>
                </div>
                <div class="moreitem-box">
                    <div class="m-i-w1">
                        <div class="moreitem-opts ">
                            <a rel="nofollow" data-value="" class="one" href="/sjz/buy/">不限</a>
                            <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=seat&seat=2' "
                                   class=" "
                                   href="/sjz/buy/s2/ "
                                                                       title="2座二手车 "
                                >
                                    2座                                </a>
                                                            <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=seat&seat=4'" class="" href="/sjz/buy/s4/" title="4座二手车"> 4座 </a>
                            <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=seat&seat=5' "
                                   class=" "
                                   href="/sjz/buy/s5/ "
                                                                       title="5座二手车 "
                                >
                                    5座                                </a>
                                                            <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=seat&seat=6'" class="" href="/sjz/buy/s6/" title="6座二手车"> 6座 </a>
                            <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=seat&seat=7' "
                                   class=" "
                                   href="/sjz/buy/s7/ "
                                                                       title="7座及以上二手车 "
                                >
                                    7座及以上                                </a>
                                                    </div>
                    </div>
                </div>
            </dd>
            <dd class="hoverWidget " gjalog="100000000643000100000010 ">
                <div class="moreitem-btn ">
                                        <a rel="nofollow " href="# " >行驶里程</a>
                </div>
                <div class="moreitem-box ">
                    <div class="m-i-w1 ">
                        <div class="moreitem-opts " >
                            <a rel="nofollow " data-role="filterItemRoadHaul " data-value=" "
                               class="one "
                               href="/sjz/buy/ "
                               rel="nofollow "
                            >不限</a>
                                                            <a rel="nofollow " data-gzlog='tracking_type=click&eventid=0070000000000045&filter=road_haul&road_haul=1' data-role="filterItemRoadHaul " data-value="1 "
                                   class=" "
                                   href="/sjz/buy/g1/ "
                                                                       title="1万公里内二手车 "
                                >
                                    1万公里内                                </a>
                                                            <a rel="nofollow " data-gzlog='tracking_type=click&eventid=0070000000000045&filter=road_haul&road_haul=2' data-role="filterItemRoadHaul " data-value="2 "
                                   class=" "
                                   href="/sjz/buy/g2/ "
                                                                       title="3万公里内二手车 "
                                >
                                    3万公里内                                </a>
                                                            <a rel="nofollow " data-gzlog='tracking_type=click&eventid=0070000000000045&filter=road_haul&road_haul=3' data-role="filterItemRoadHaul " data-value="3 "
                                   class=" "
                                   href="/sjz/buy/g3/ "
                                                                       title="5万公里内二手车 "
                                >
                                    5万公里内                                </a>
                                                            <a rel="nofollow " data-gzlog='tracking_type=click&eventid=0070000000000045&filter=road_haul&road_haul=4' data-role="filterItemRoadHaul " data-value="4 "
                                   class=" "
                                   href="/sjz/buy/g4/ "
                                                                       title="5万公里以上二手车 "
                                >
                                    5万公里以上                                </a>
                                                    </div>
                    </div>
                </div>
            </dd>
            <dd class="hoverWidget "  gjalog="100000000644000100000010 ">
                <div class="moreitem-btn ">
                                        <a rel="nofollow " href="# " >变速箱</a>
                </div>
                <div class="moreitem-box ">
                    <div class="m-i-w1 ">
                        <div class="moreitem-opts ">
                            <a rel="nofollow " class="one "
                               href="/sjz/buy/ "
                               rel="nofollow "
                            >不限</a>
                                                            <a rel="nofollow " data-gzlog='tracking_type=click&eventid=0070000000000045&filter=gearbox&gearbox=1' class=" "
                                   href="/sjz/buy/n1/ "
                                                                       title="手动档二手车 "
                                >
                                    手动                                </a>
                                                            <a rel="nofollow " data-gzlog='tracking_type=click&eventid=0070000000000045&filter=gearbox&gearbox=2' class=" "
                                   href="/sjz/buy/n2/ "
                                                                       title="自动档二手车 "
                                >
                                    自动                                </a>
                                                    </div>
                    </div>
                </div>
            </dd>
            <dd class="hoverWidget " gjalog="100000000645000100000010 ">
                <div class="moreitem-btn ">
                                        <a rel="nofollow " href="# " >排量</a>
                </div>
                <div class="moreitem-box ">
                    <div class="m-i-w1 ">
                        <div class="moreitem-opts ">
                            <a rel="nofollow " class="one "
                               href="/sjz/buy/ "
                               rel="nofollow "
                            >不限</a>
                                                            <a rel="nofollow " data-gzlog='tracking_type=click&eventid=0070000000000045&filter=air_displacement&air_displacement=1' class=" "
                                   href="/sjz/buy/j1/ "
                                                                       title="1.0L以下二手车 "
                                >
                                    1.0L以下                                </a>
                                                            <a rel="nofollow " data-gzlog='tracking_type=click&eventid=0070000000000045&filter=air_displacement&air_displacement=2' class=" "
                                   href="/sjz/buy/j2/ "
                                                                       title="1.0-1.6L二手车 "
                                >
                                    1.0-1.6L                                </a>
                                                            <a rel="nofollow " data-gzlog='tracking_type=click&eventid=0070000000000045&filter=air_displacement&air_displacement=3' class=" "
                                   href="/sjz/buy/j3/ "
                                                                       title="1.6-2.0L二手车 "
                                >
                                    1.6-2.0L                                </a>
                                                            <a rel="nofollow " data-gzlog='tracking_type=click&eventid=0070000000000045&filter=air_displacement&air_displacement=4' class=" "
                                   href="/sjz/buy/j4/ "
                                                                       title="2.0-3.0L二手车 "
                                >
                                    2.0-3.0L                                </a>
                                                            <a rel="nofollow " data-gzlog='tracking_type=click&eventid=0070000000000045&filter=air_displacement&air_displacement=5' class=" "
                                   href="/sjz/buy/j5/ "
                                                                       title="3.0L以上二手车 "
                                >
                                    3.0L以上                                </a>
                                                    </div>
                    </div>
                </div>
            </dd>
            <dd class="hoverWidget "  gjalog="100000000646000100000010 ">
                <div class="moreitem-btn ">
                                        <a rel="nofollow " href="# " >排放标准</a>
                </div>
                <div class="moreitem-box ">
                    <div class="m-i-w1 ">
                        <div class="moreitem-opts ">
                            <a  rel="nofollow " data-role="filterItemConfig " data-value=" "
                                class="one "
                                href="/sjz/buy/ "
                                rel="nofollow "
                            >不限</a>
                                                            <a rel="nofollow " data-gzlog='tracking_type=click&eventid=0070000000000045&filter=vehicle_config&vehicle_config=1' data-role="filterItemConfig " data-value="1 "
                                   class=" "
                                   href="/sjz/buy/v1/ "
                                                                       title="国二及以上二手车 "
                                >
                                    国二及以上                                </a>
                                                            <a rel="nofollow " data-gzlog='tracking_type=click&eventid=0070000000000045&filter=vehicle_config&vehicle_config=2' data-role="filterItemConfig " data-value="2 "
                                   class=" "
                                   href="/sjz/buy/v2/ "
                                                                       title="国三及以上二手车 "
                                >
                                    国三及以上                                </a>
                                                            <a rel="nofollow " data-gzlog='tracking_type=click&eventid=0070000000000045&filter=vehicle_config&vehicle_config=3' data-role="filterItemConfig " data-value="3 "
                                   class=" "
                                   href="/sjz/buy/v3/ "
                                                                       title="国四及以上二手车 "
                                >
                                    国四及以上                                </a>
                                                            <a rel="nofollow " data-gzlog='tracking_type=click&eventid=0070000000000045&filter=vehicle_config&vehicle_config=4' data-role="filterItemConfig " data-value="4 "
                                   class=" "
                                   href="/sjz/buy/v4/ "
                                                                       title="国五二手车 "
                                >
                                    国五                                </a>
                                                    </div>
                    </div>
                </div>
            </dd>
            <dd class="hoverWidget ">
                <div class="moreitem-btn ">
                                        <a href="# " >燃油类型</a>
                </div>
                <div class="moreitem-box ">
                    <div class="m-i-w1 ">
                        <div class="moreitem-opts ">
                            <a class="one "
                               href="/sjz/buy/ "
                               rel="nofollow "
                            >不限</a>
                                                            <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=fuel_type&fuel_type=1'
                                   class=" "
                                   href="/sjz/buy/f1/ "
                                                                       title="汽油二手车 "
                                >
                                    汽油                                </a>
                                                            <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=fuel_type&fuel_type=2'
                                   class=" "
                                   href="/sjz/buy/f2/ "
                                                                       title="柴油二手车 "
                                >
                                    柴油                                </a>
                                                            <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=fuel_type&fuel_type=3'
                                   class=" "
                                   href="/sjz/buy/f3/ "
                                                                       title="电动二手车 "
                                >
                                    电动                                </a>
                                                            <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=fuel_type&fuel_type=4'
                                   class=" "
                                   href="/sjz/buy/f4/ "
                                                                       title="油电混合二手车 "
                                >
                                    油电混合                                </a>
                                                            <a data-gzlog='tracking_type=click&eventid=0070000000000045&filter=fuel_type&fuel_type=5'
                                   class=" "
                                   href="/sjz/buy/f5/ "
                                                                       title="其他二手车 "
                                >
                                    其他                                </a>
                                                    </div>
                    </div>
                </div>
            </dd>
            <dd class="hoverWidget " gjalog="100000000647000100000010 ">
                <div class="moreitem-btn ">
                                        <a rel="nofollow " href="# " >颜色</a>
                </div>
                <div class="moreitem-box ">
                    <div class="m-i-w1 moreitem-color ">
                        <div class="moreitem-opts ">
                            <a rel="nofollow " class="cur "
                               href="/sjz/buy/ "
                               rel="nofollow "
                            >不限</a>
                                                            <a rel="nofollow " data-gzlog='tracking_type=click&eventid=0070000000000045&filter=car_color&car_color=1' class=" "
                                   href="/sjz/buy/m1/ "
                                                                       title="黑色二手车 "
                                >
                                    <i class="c-lump03 "></i>黑色                                </a>
                                                            <a rel="nofollow " data-gzlog='tracking_type=click&eventid=0070000000000045&filter=car_color&car_color=2' class=" "
                                   href="/sjz/buy/m2/ "
                                                                       title="白色二手车 "
                                >
                                    <i class="c-lump04 "></i>白色                                </a>
                                                            <a rel="nofollow " data-gzlog='tracking_type=click&eventid=0070000000000045&filter=car_color&car_color=3' class=" "
                                   href="/sjz/buy/m3/ "
                                                                       title="银灰色二手车 "
                                >
                                    <i class="c-lump10 "></i>银灰色                                </a>
                                                            <a rel="nofollow " data-gzlog='tracking_type=click&eventid=0070000000000045&filter=car_color&car_color=4' class=" "
                                   href="/sjz/buy/m4/ "
                                                                       title="深灰色二手车 "
                                >
                                    <i class="c-lump15 "></i>深灰色                                </a>
                                                            <a rel="nofollow " data-gzlog='tracking_type=click&eventid=0070000000000045&filter=car_color&car_color=6' class=" "
                                   href="/sjz/buy/m6/ "
                                                                       title="红色二手车 "
                                >
                                    <i class="c-lump09 "></i>红色                                </a>
                                                            <a rel="nofollow " data-gzlog='tracking_type=click&eventid=0070000000000045&filter=car_color&car_color=10' class=" "
                                   href="/sjz/buy/m10/ "
                                                                       title="橙色二手车 "
                                >
                                    <i class="c-lump11 "></i>橙色                                </a>
                                                            <a rel="nofollow " data-gzlog='tracking_type=click&eventid=0070000000000045&filter=car_color&car_color=8' class=" "
                                   href="/sjz/buy/m8/ "
                                                                       title="绿色二手车 "
                                >
                                    <i class="c-lump02 "></i>绿色                                </a>
                                                            <a rel="nofollow " data-gzlog='tracking_type=click&eventid=0070000000000045&filter=car_color&car_color=7' class=" "
                                   href="/sjz/buy/m7/ "
                                                                       title="蓝色二手车 "
                                >
                                    <i class="c-lump05 "></i>蓝色                                </a>
                                                            <a rel="nofollow " data-gzlog='tracking_type=click&eventid=0070000000000045&filter=car_color&car_color=5' class=" "
                                   href="/sjz/buy/m5/ "
                                                                       title="咖啡色二手车 "
                                >
                                    <i class="c-lump06 "></i>咖啡色                                </a>
                                                            <a rel="nofollow " data-gzlog='tracking_type=click&eventid=0070000000000045&filter=car_color&car_color=12' class=" "
                                   href="/sjz/buy/m12/ "
                                                                       title="紫色二手车 "
                                >
                                    <i class="c-lump07 "></i>紫色                                </a>
                                                            <a rel="nofollow " data-gzlog='tracking_type=click&eventid=0070000000000045&filter=car_color&car_color=11' class=" "
                                   href="/sjz/buy/m11/ "
                                                                       title="香槟色二手车 "
                                >
                                    <i class="c-lump08 "></i>香槟色                                </a>
                                                            <a rel="nofollow " data-gzlog='tracking_type=click&eventid=0070000000000045&filter=car_color&car_color=13' class=" "
                                   href="/sjz/buy/m13/ "
                                                                       title="多彩色二手车 "
                                >
                                    <i class="c-lump12 "></i>多彩色                                </a>
                                                            <a rel="nofollow " data-gzlog='tracking_type=click&eventid=0070000000000045&filter=car_color&car_color=9' class=" "
                                   href="/sjz/buy/m9/ "
                                                                       title="黄色二手车 "
                                >
                                    <i class="c-lump13 "></i>黄色                                </a>
                                                            <a rel="nofollow " data-gzlog='tracking_type=click&eventid=0070000000000045&filter=car_color&car_color=14' class=" "
                                   href="/sjz/buy/m14/ "
                                                                       title="其它二手车 "
                                >
                                    <i class="c-lump14 "></i>其它                                </a>
                                                    </div>
                    </div>
                </div>
            </dd>
            <dd class="hoverWidget " gjalog="100000000648000100000010 ">
                <div class="moreitem-btn ">
                                        <a rel="nofollow " href="# " >国别</a>
                </div>
                <div class="moreitem-box ">
                    <div class="m-i-w1 ">
                        <div class="moreitem-opts ">
                            <a rel="nofollow " class="one "
                               href="/sjz/buy/ "
                               rel="nofollow "
                            >不限</a>
                                                            <a rel="nofollow " data-gzlog='tracking_type=click&eventid=0070000000000045&filter=guobie&guobie=4' class=" "
                                   href="/sjz/buy/u4/ "
                                                                       title="德系二手车 "
                                >
                                    德系                                </a>
                                                            <a rel="nofollow " data-gzlog='tracking_type=click&eventid=0070000000000045&filter=guobie&guobie=5' class=" "
                                   href="/sjz/buy/u5/ "
                                                                       title="日系二手车 "
                                >
                                    日系                                </a>
                                                            <a rel="nofollow " data-gzlog='tracking_type=click&eventid=0070000000000045&filter=guobie&guobie=2' class=" "
                                   href="/sjz/buy/u2/ "
                                                                       title="美系二手车 "
                                >
                                    美系                                </a>
                                                            <a rel="nofollow " data-gzlog='tracking_type=click&eventid=0070000000000045&filter=guobie&guobie=1' class=" "
                                   href="/sjz/buy/u1/ "
                                                                       title="法系二手车 "
                                >
                                    法系                                </a>
                                                            <a rel="nofollow " data-gzlog='tracking_type=click&eventid=0070000000000045&filter=guobie&guobie=6' class=" "
                                   href="/sjz/buy/u6/ "
                                                                       title="韩系二手车 "
                                >
                                    韩系                                </a>
                                                            <a rel="nofollow " data-gzlog='tracking_type=click&eventid=0070000000000045&filter=guobie&guobie=3' class=" "
                                   href="/sjz/buy/u3/ "
                                                                       title="国产二手车 "
                                >
                                    国产                                </a>
                                                            <a rel="nofollow " data-gzlog='tracking_type=click&eventid=0070000000000045&filter=guobie&guobie=7' class=" "
                                   href="/sjz/buy/u7/ "
                                                                       title="其他二手车 "
                                >
                                    其他                                </a>
                                                    </div>
                    </div>
                </div>
            </dd>
                                        <dd class="hoverWidget ">
                <div class="moreitem-btn ">
                    <a rel="nofollow "  href="# ">
                        车牌所在地                    </a>
                </div>
                <div class="moreitem-box ">
                    <div class="m-i-w1 ">
                        <div class="moreitem-opts ">
                            <a rel="nofollow " class="one " href="/sjz/buy/ ">不限</a>
                            <a rel="nofollow "
                               data-gzlog="tracking_type=click&eventid=0070000000000045&filter=diff_city&diff_city=0 "
                               class="one "
                               href="/sjz/buy/d1/ "
                               title="本地 ">本地
                            </a>
                            <a rel="nofollow "
                               data-gzlog="tracking_type=click&eventid=0070000000000045&filter=diff_city&diff_city=1 "
                               class=" "
                               href="/sjz/buy/d1-/ "
                               title="外地 ">外地
                            </a>
                        </div>
                    </div>
                </div>
            </dd>
                                </dl>
    </div>
    
</div>

    <!--排序-->
    <div class="seqBox clearfix ">
    <p class="fr seqtype ">共找到<b>6760</b>辆
        </p>
    <ul class="sequen ">
        <li  class="first "><a rel="nofollow " href="/sjz/buy/ " data-gzlog="tracking_type=click&eventid=0070000000000056&sort=default " >默认排序</a></li>
        <li  >
            <a  href="/sjz/buy/i7/ " title=" "
               data-gzlog="tracking_type=click&eventid=0070000000000056&sort=new " >最新发布
            </a>
        </li>
        <li  >
            <a href="/sjz/buy/i1/ " title=" "
               data-gzlog="tracking_type=click&eventid=0070000000000056&sort=price " >价格<i class="up "></i>
            </a>
        </li>
        <li >
            <a href="/sjz/buy/i3/ " title=" "
               data-gzlog="tracking_type=click&eventid=0070000000000056&sort=cheling " >车龄<i class="up "></i>
            </a>
        </li>
        <li >
            <a  href="/sjz/buy/i5/ " title=" "
               data-gzlog="tracking_type=click&eventid=0070000000000056&sort=licheng " >里程<i class="up "></i>
            </a>
        </li>
    </ul>
</div>
            <!--列表-->
        <div class="list ">
    <ul class="list-bigimg clearfix lazyLoadV2 ">
        <li>
            <!-- 车源售卖状态显示 -->                          
            <div class="list-infoBox ">
                <a baidu_alog='pc_list_xiangqingye&click&pc_list_xiangqingye_c'                        data-gzlog="tracking_type=click&eventid=0120000000000057&carid=8132808@0 "
                        title="福特福克斯 2015款 两厢 1.6L 自动风尚型 " target="_blank " class="imgtype " href="/sjz/5c3efaf456009940x.htm " >
                        <img width="290 " height="194 " src="http://www.sjztcl.com/uploads/car/201709/images/572418563913612577.jpg" alt="福特福克斯 2015款 两厢 1.6L 自动风尚型 ">
                                            
                </a>
                <p class="infoBox ">
                        <a baidu_alog='pc_list_xiangqingye&click&pc_list_xiangqingye_c' title="福特福克斯 2015款 两厢 1.6L 自动风尚型 " href="/sjz/5c3efaf456009940x.htm " target="_blank " class="info-title " >福特福克斯 2015款 两厢 1.6L 自动风尚型</a>
                </p>
                <p class="fc-gray ">
                    <span class=" ">2015年4月上牌</span>                        
                    <em class="shuxian ">|</em>行驶3.5万公里   
                    <span>
                       &nbsp&nbsp <i class="fc-org priType ">9.50万</i>
                    </span>                 
                </p>
                <!-- <p class="priType-s ">
                    <span>
                        <i class="fc-org priType ">
                            9.50万
                        </i>
                    </span>
                </p> -->
            </div>
        </li>
    </ul>
</div>
        
    <!--page-->
    <div class="pageBox " data-widget="app/ms_v2/common/list_page.js#pagination "><ul class="pageLink clearfix "><li><a class="c linkOn "><span>1</span></a></li><li><a href="/sjz/buy/o2/ " data-gzlog='tracking_type=click&eventid=0060000000000060&pageno=2'><span>2</span></a></li><li><a href="/sjz/buy/o3/ " data-gzlog='tracking_type=click&eventid=0060000000000060&pageno=3'><span>3</span></a></li><li><a href="/sjz/buy/o4/ " data-gzlog='tracking_type=click&eventid=0060000000000060&pageno=4'><span>4</span></a></li><li><a href="/sjz/buy/o5/ " data-gzlog='tracking_type=click&eventid=0060000000000060&pageno=5'><span>5</span></a></li><li><a href="/sjz/buy/o6/ " data-gzlog='tracking_type=click&eventid=0060000000000060&pageno=6'><span>6</span></a></li><li><a href="/sjz/buy/o7/ " data-gzlog='tracking_type=click&eventid=0060000000000060&pageno=7'><span>7</span></a></li><li>...</li><li><a href="/sjz/buy/o50/ " data-gzlog='tracking_type=click&eventid=0060000000000060&pageno=50'><span>50</span></a></li><li><a href="/sjz/buy/o2/ "  data-gzlog='tracking_type=click&eventid=0060000000000059' class="next "><span>下一页</span></a></li></ul></div></div>
@endsection

@section('script_content')
<!-- 引入轮播js -->
<script src="{{URL::asset('newShow/js/common/swipeslider.js')}}"></script>
<script>
    $(document).ready(function(){

        // alert('hehe');
        $('#full_feature').swipeslider();
    });
</script>
@endsection