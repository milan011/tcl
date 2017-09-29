@extends('mobel.main')

@section('title')
    
@endsection

@section('head_content')
    <link type="text/css" rel="stylesheet" href="{{URL::asset('mobel/css/changeBrand/head.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('mobel/css/changeBrand/content.css')}}">   
    <link type="text/css" rel="stylesheet" href="{{URL::asset('mobel/css/changeBrand/list.css')}}">
    <!-- 
    <link type="text/css" rel="stylesheet" href="{{URL::asset('mobel/css/buy/serach.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('mobel/css/buy/brand.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('mobel/css/buy/city.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('mobel/css/buy/app.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('mobel/css/buy/content.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('mobel/css/buy/send.css')}}"> -->
@endsection

@section('content')

<!--顶部app导流-->
<!--品牌选择-->
<!-- 品牌页 start -->
<div class="brand-wrap rel">
    <header class="heading2" data-index="#">
        <a class="icon-close" href="javascript:history.go(-1);">关闭</a>
        <h1>选择品牌</h1>
    </header>
    <section class="brand-cbox">
        {!! csrf_field() !!}
        <h3 class="subtit" data-index="热">热门品牌</h3>
        <ul class="brand-list">
            <li class="js-change-brand" data-brandId="1207" data-brandUrl="dazhong">
                <a class="" href="javascript:void(0);"><i class="icon-brand icon-dazhong"></i>大众</a>
            </li>
            <li class="js-change-brand" data-brandId="1208" data-brandUrl="hyundai" >
                <a class="" href="javascript:void(0);"><i class="icon-brand icon-hyundai"></i>现代</a>
            </li>
            <li class="js-change-brand" data-brandId="1205" data-brandUrl="ford" >
                <a class="" href="javascript:void(0);"><i class="icon-brand icon-ford"></i>福特</a>
            </li>
            <li class="js-change-brand" data-brandId="1213" data-brandUrl="citroen" >
                <a class="" href="javascript:void(0);"><i class="icon-brand icon-citroen"></i>雪铁龙</a>
            </li>
            <li class="js-change-brand" data-brandId="1206" data-brandUrl="buick" >
                <a class="" href="javascript:void(0);"><i class="icon-brand icon-buick"></i>别克</a>
            </li>
            <li class="js-change-brand" data-brandId="2" data-brandUrl="bmw" >
                <a class="" href="javascript:void(0);"><i class="icon-brand icon-bmw"></i>宝马</a>
            </li>
            <li class="js-change-brand" data-brandId="1307" data-brandUrl="chevrolet" >
                <a class="" href="javascript:void(0);"><i class="icon-brand icon-chevrolet"></i>雪佛兰</a>
            </li>
            <li class="js-change-brand" data-brandId="1212" data-brandUrl="byd" >
                <a class="" href="javascript:void(0);"><i class="icon-brand icon-byd"></i>比亚迪</a>
            </li>
            <li class="js-change-brand" data-brandId="1209" data-brandUrl="suzuki" >
                <a class="" href="javascript:void(0);"><i class="icon-brand icon-suzuki"></i>铃木</a>
            </li>
            <li class="js-change-brand" data-brandId="103778" data-brandUrl="hafu" >
                <a class="" href="javascript:void(0);"><i class="icon-brand icon-hafu"></i>哈弗</a>
            </li>
        </ul>
    </section>
        <div class="brand-rbox rel" baidu_alog="wap_listB_brand&click&wap_listB_brand_all_c">
            <section class="aside-scroll">
                <h3 class="subtit dead-line" data-index="*">*</h3>
                <ul class="brand-list2">
                    <li class="limit-no js-change-brand" data-brandId="0" data-brandUrl="buy">
                        <a href="javascript:void(0);">不限品牌</a>
                    </li>
                </ul>
                <h3 class="subtit" data-index="A">A</h3>
                <ul class="brand-list2">
                    <li class="js-change-brand" data-brandId="3">
                        <i class="icon-brand icon-audi"></i>
                        <a href="javascript:void(0);">奥迪</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="1219" data-brandUrl="anchi" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=anchi">
                        <i class="icon-brand icon-anchi"></i>
                        <a href="javascript:void(0);">安驰</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="103803" data-brandUrl="ac-schnitzer" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=ac-schnitzer">
                        <i class="icon-brand icon-ac-schnitzer"></i>
                        <a href="javascript:void(0);">AC Schnitzer</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="1218" data-brandUrl="astonmartin" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=astonmartin">
                        <i class="icon-brand icon-astonmartin"></i>
                        <a href="javascript:void(0);">阿斯顿·马丁</a>
                    </li>
                    <li class="js-change-brand" data-brandId="103819" data-brandUrl="ankai" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=ankai">
                        <i class="icon-brand icon-ankai"></i>
                        <a href="javascript:void(0);">安凯客车</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="103764" data-brandUrl="alpina" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=alpina">
                        <i class="icon-brand icon-alpina"></i>
                        <a href="javascript:void(0);">Alpina</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="1217" data-brandUrl="alfaromeo" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=alfaromeo">
                        <i class="icon-brand icon-alfaromeo"></i>
                        <a href="javascript:void(0);">阿尔法·罗密欧</a>
                    </li>
                </ul>
                <h3 class="subtit" data-index="B">B</h3>
                <ul class="brand-list2">
                    <li class="active js-change-brand" data-brandId="1206" data-brandUrl="buick" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=buick">
                        <i class="icon-brand icon-buick"></i>
                        <a href="javascript:void(0);">别克</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="1198" data-brandUrl="bmw" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=bmw">
                        <i class="icon-brand icon-bmw"></i>
                        <a href="javascript:void(0);">宝马</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="1212" data-brandUrl="byd" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=byd">
                        <i class="icon-brand icon-byd"></i>
                        <a href="javascript:void(0);">比亚迪</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="1226" data-brandUrl="biaozhi" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=biaozhi">
                        <i class="icon-brand icon-biaozhi"></i>
                        <a href="javascript:void(0);">标致</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="1197" data-brandUrl="benz" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=benz">
                        <i class="icon-brand icon-benz"></i>
                        <a href="javascript:void(0);">奔驰</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="1196" data-brandUrl="honda" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=honda">
                        <i class="icon-brand icon-honda"></i>
                        <a href="javascript:void(0);">本田</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="1225" data-brandUrl="benteng" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=benteng">
                        <i class="icon-brand icon-benteng"></i>
                        <a href="javascript:void(0);">奔腾</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="103783" data-brandUrl="shenbao" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=shenbao">
                        <i class="icon-brand icon-shenbao"></i>
                        <a href="javascript:void(0);">北汽绅宝</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="2272" data-brandUrl="baojun" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=baojun">
                        <i class="icon-brand icon-baojun"></i>
                        <a href="javascript:void(0);">宝骏</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="2270" data-brandUrl="beijingqiche" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=beijingqiche">
                        <i class="icon-brand icon-beijingqiche"></i>
                        <a href="javascript:void(0);">北京</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="1223" data-brandUrl="beiqi" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=beiqi">
                        <i class="icon-brand icon-beiqi"></i>
                        <a href="javascript:void(0);">北汽</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="1224" data-brandUrl="porsche" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=porsche">
                        <i class="icon-brand icon-porsche"></i>
                        <a href="javascript:void(0);">保时捷</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="103779" data-brandUrl="weiwang" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=weiwang">
                        <i class="icon-brand icon-weiwang"></i>
                        <a href="javascript:void(0);">北汽威旺</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="103798" data-brandUrl="baowo" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=baowo">
                        <i class="icon-brand icon-baowo"></i>
                        <a href="javascript:void(0);">宝沃汽车</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="103780" data-brandUrl="huansu" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=huansu">
                        <i class="icon-brand icon-huansu"></i>
                        <a href="javascript:void(0);">北汽幻速</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="103774" data-brandUrl="baofeili" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=baofeili">
                        <i class="icon-brand icon-baofeili"></i>
                        <a href="javascript:void(0);">保斐利</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="103826" data-brandUrl="bqxny" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=bqxny">
                        <i class="icon-brand icon-bqxny"></i>
                        <a href="javascript:void(0);">北汽新能源</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="1222" data-brandUrl="bentley" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=bentley">
                        <i class="icon-brand icon-bentley"></i>
                        <a href="javascript:void(0);">宾利</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="102721" data-brandUrl="babosi" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=babosi">
                        <i class="icon-brand icon-babosi"></i>
                        <a href="javascript:void(0);">巴博斯</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="2259" data-brandUrl="bujiadi" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=bujiadi">
                        <i class="icon-brand icon-bujiadi"></i>
                        <a href="javascript:void(0);">布加迪</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="103807" data-brandUrl="bisu" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=bisu">
                        <i class="icon-brand icon-bisu"></i>
                        <a href="javascript:void(0);">比速汽车</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="1221" data-brandUrl="baolong" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=baolong">
                        <i class="icon-brand icon-baolong"></i>
                        <a href="javascript:void(0);">宝龙</a>
                    </li>
                </ul>
                <h3 class="subtit" data-index="C">C</h3>
                <ul class="brand-list2">
                    <li class=" js-change-brand" data-brandId="1227" data-brandUrl="changan" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=changan">
                        <i class="icon-brand icon-changan"></i>
                        <a href="javascript:void(0);">长安</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="1228" data-brandUrl="changcheng" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=changcheng">
                        <i class="icon-brand icon-changcheng"></i>
                        <a href="javascript:void(0);">长城</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="103787" data-brandUrl="changanshangyong" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=changanshangyong">
                        <i class="icon-brand icon-changanshangyong"></i>
                        <a href="javascript:void(0);">长安商用</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="103772" data-brandUrl="chuanqi1" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=chuanqi1">
                        <i class="icon-brand icon-chuanqi1"></i>
                        <a href="javascript:void(0);">传祺</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="1229" data-brandUrl="changhe" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=changhe">
                        <i class="icon-brand icon-changhe"></i>
                        <a href="javascript:void(0);">昌河</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="103799" data-brandUrl="chenggong" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=chenggong">
                        <i class="icon-brand icon-chenggong"></i>
                        <a href="javascript:void(0);">成功汽车</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="2266" data-brandUrl="chuanqiyema" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=chuanqiyema">
                        <i class="icon-brand icon-chuanqiyema"></i>
                        <a href="javascript:void(0);">川汽野马</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="103840" data-brandUrl="caos" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=caos">
                        <i class="icon-brand icon-caos"></i>
                        <a href="javascript:void(0);">长安欧尚</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="103812" data-brandUrl="kuayue" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=kuayue">
                        <i class="icon-brand icon-kuayue"></i>
                        <a href="javascript:void(0);">长安跨越</a>
                    </li>
                </ul>
                <h3 class="subtit" data-index="D">D</h3>
                <ul class="brand-list2">
                    <li class=" js-change-brand" data-brandId="1207" data-brandUrl="dazhong" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=dazhong">
                        <i class="icon-brand icon-dazhong"></i>
                        <a href="javascript:void(0);">大众</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="1239" data-brandUrl="fengxing" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=fengxing">
                        <i class="icon-brand icon-fengxing"></i>
                        <a href="javascript:void(0);">东风风行</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="1234" data-brandUrl="dongnan" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=dongnan">
                        <i class="icon-brand icon-dongnan"></i>
                        <a href="javascript:void(0);">东南</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="102712" data-brandUrl="dongfengxiaokang" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=dongfengxiaokang">
                        <i class="icon-brand icon-dongfengxiaokang"></i>
                        <a href="javascript:void(0);">东风小康</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="2262" data-brandUrl="dongfengfengshen" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=dongfengfengshen">
                        <i class="icon-brand icon-dongfengfengshen"></i>
                        <a href="javascript:void(0);">东风风神</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="1235" data-brandUrl="daoqi" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=daoqi">
                        <i class="icon-brand icon-daoqi"></i>
                        <a href="javascript:void(0);">道奇</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="1230" data-brandUrl="dongfeng" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=dongfeng">
                        <i class="icon-brand icon-dongfeng"></i>
                        <a href="javascript:void(0);">东风</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="103769" data-brandUrl="dongfengfengdu" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=dongfengfengdu">
                        <i class="icon-brand icon-dongfengfengdu"></i>
                        <a href="javascript:void(0);">东风风度</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="103765" data-brandUrl="ds" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=ds">
                        <i class="icon-brand icon-ds"></i>
                        <a href="javascript:void(0);">DS</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="1233" data-brandUrl="jilindafa" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=jilindafa">
                        <i class="icon-brand icon-jilindafa"></i>
                        <a href="javascript:void(0);">大发</a>
                    </li>
                </ul>
                <h3 class="subtit" data-index="F">F</h3>
                <ul class="brand-list2">
                    <li class=" js-change-brand" data-brandId="1205" data-brandUrl="ford" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=ford">
                        <i class="icon-brand icon-ford"></i>
                        <a href="javascript:void(0);">福特</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="1195" data-brandUrl="toyota" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=toyota">
                        <i class="icon-brand icon-toyota"></i>
                        <a href="javascript:void(0);">丰田</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="1215" data-brandUrl="futian" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=futian">
                        <i class="icon-brand icon-futian"></i>
                        <a href="javascript:void(0);">福田</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="1240" data-brandUrl="fiat" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=fiat">
                        <i class="icon-brand icon-fiat"></i>
                        <a href="javascript:void(0);">菲亚特</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="102709" data-brandUrl="fuqiqiteng" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=fuqiqiteng">
                        <i class="icon-brand icon-fuqiqiteng"></i>
                        <a href="javascript:void(0);">福汽启腾</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="1238" data-brandUrl="huaxiangfuqi" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=huaxiangfuqi">
                        <i class="icon-brand icon-huaxiangfuqi"></i>
                        <a href="javascript:void(0);">富奇</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="1237" data-brandUrl="ferrari" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=ferrari">
                        <i class="icon-brand icon-ferrari"></i>
                        <a href="javascript:void(0);">法拉利</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="1236" data-brandUrl="fudi" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=fudi">
                        <i class="icon-brand icon-fudi"></i>
                        <a href="javascript:void(0);">福迪</a>
                    </li>
                </ul>
                <h3 class="subtit" data-index="G">G</h3>
                <ul class="brand-list2">
                    <li class=" js-change-brand" data-brandId="102708" data-brandUrl="guanzhi" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=guanzhi">
                        <i class="icon-brand icon-guanzhi"></i>
                        <a href="javascript:void(0);">观致</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="1260" data-brandUrl="jiao" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=jiao">
                        <i class="icon-brand icon-jiao"></i>
                        <a href="javascript:void(0);">广汽吉奥</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="1242" data-brandUrl="gmc" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=gmc">
                        <i class="icon-brand icon-gmc"></i>
                        <a href="javascript:void(0);">GMC</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="1241" data-brandUrl="galue" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=galue">
                        <i class="icon-brand icon-galue"></i>
                        <a href="javascript:void(0);">光冈</a>
                    </li>
                </ul>
                <h3 class="subtit" data-index="H">H</h3>
                <ul class="brand-list2">
                    <li class=" js-change-brand" data-brandId="103778" data-brandUrl="hafu" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=hafu">
                        <i class="icon-brand icon-hafu"></i>
                        <a href="javascript:void(0);">哈弗</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="1252" data-brandUrl="haima" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=haima">
                        <i class="icon-brand icon-haima"></i>
                        <a href="javascript:void(0);">海马</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="1248" data-brandUrl="hafei" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=hafei">
                        <i class="icon-brand icon-hafei"></i>
                        <a href="javascript:void(0);">哈飞</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="102471" data-brandUrl="huanghai" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=huanghai">
                        <i class="icon-brand icon-huanghai"></i>
                        <a href="javascript:void(0);">黄海</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="1256" data-brandUrl="huatai" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=huatai">
                        <i class="icon-brand icon-huatai"></i>
                        <a href="javascript:void(0);">华泰</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="103782" data-brandUrl="haige" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=haige">
                        <i class="icon-brand icon-haige"></i>
                        <a href="javascript:void(0);">海格</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="1255" data-brandUrl="hongqi" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=hongqi">
                        <i class="icon-brand icon-hongqi"></i>
                        <a href="javascript:void(0);">红旗</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="103797" data-brandUrl="hanteng" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=hanteng">
                        <i class="icon-brand icon-hanteng"></i>
                        <a href="javascript:void(0);">汉腾</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="1247" data-brandUrl="fusangheibao" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=fusangheibao">
                        <i class="icon-brand icon-fusangheibao"></i>
                        <a href="javascript:void(0);">黑豹</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="1253" data-brandUrl="hanma" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=hanma">
                        <i class="icon-brand icon-hanma"></i>
                        <a href="javascript:void(0);">悍马</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="1316" data-brandUrl="zhongke-huabei" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=zhongke-huabei">
                        <i class="icon-brand icon-zhongke-huabei"></i>
                        <a href="javascript:void(0);">华北</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="1254" data-brandUrl="huapu" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=huapu">
                        <i class="icon-brand icon-huapu"></i>
                        <a href="javascript:void(0);">华普</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="102707" data-brandUrl="hengtian" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=hengtian">
                        <i class="icon-brand icon-hengtian"></i>
                        <a href="javascript:void(0);">恒天</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="103777" data-brandUrl="huayang" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=huayang">
                        <i class="icon-brand icon-huayang"></i>
                        <a href="javascript:void(0);">华阳</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="103795" data-brandUrl="huasong" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=huasong">
                        <i class="icon-brand icon-huasong"></i>
                        <a href="javascript:void(0);">华颂</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="1259" data-brandUrl="sh-huizhong" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=sh-huizhong">
                        <i class="icon-brand icon-sh-huizhong"></i>
                        <a href="javascript:void(0);">汇众</a>
                    </li>
                </ul>
                <h3 class="subtit" data-index="J">J</h3>
                <ul class="brand-list2">
                    <li class=" js-change-brand" data-brandId="1200" data-brandUrl="jili" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=jili">
                        <i class="icon-brand icon-jili"></i>
                        <a href="javascript:void(0);">吉利</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="1264" data-brandUrl="jianghuai" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=jianghuai">
                        <i class="icon-brand icon-jianghuai"></i>
                        <a href="javascript:void(0);">江淮</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="1216" data-brandUrl="jeep" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=jeep">
                        <i class="icon-brand icon-jeep"></i>
                        <a href="javascript:void(0);">Jeep</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="1265" data-brandUrl="jiangling" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=jiangling">
                        <i class="icon-brand icon-jiangling"></i>
                        <a href="javascript:void(0);">江铃</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="1261" data-brandUrl="huachen" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=huachen">
                        <i class="icon-brand icon-huachen"></i>
                        <a href="javascript:void(0);">金杯</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="1262" data-brandUrl="jiebao" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=jiebao">
                        <i class="icon-brand icon-jiebao"></i>
                        <a href="javascript:void(0);">捷豹</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="103805" data-brandUrl="jinlong" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=jinlong">
                        <i class="icon-brand icon-jinlong"></i>
                        <a href="javascript:void(0);">金龙</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="103824" data-brandUrl="jljtqq" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=jljtqq">
                        <i class="icon-brand icon-jljtqq"></i>
                        <a href="javascript:void(0);">江铃集团轻汽</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="103825" data-brandUrl="jljtxny" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=jljtxny">
                        <i class="icon-brand icon-jljtxny"></i>
                        <a href="javascript:void(0);">江铃集团新能源</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="1263" data-brandUrl="jincheng" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=jincheng">
                        <i class="icon-brand icon-jincheng"></i>
                        <a href="javascript:void(0);">金程</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="103781" data-brandUrl="jiangnan" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=jiangnan">
                        <i class="icon-brand icon-jiangnan"></i>
                        <a href="javascript:void(0);">江南</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="102711" data-brandUrl="yiqijiefang" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=yiqijiefang">
                        <i class="icon-brand icon-yiqijiefang"></i>
                        <a href="javascript:void(0);">解放</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="2265" data-brandUrl="jlshwuche" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=jlshwuche">
                        <i class="icon-brand icon-jlshwuche"></i>
                        <a href="javascript:void(0);">九龙</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="103804" data-brandUrl="jinlv" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=jinlv">
                        <i class="icon-brand icon-jinlv"></i>
                        <a href="javascript:void(0);">金旅</a>
                    </li>
                </ul>
                <h3 class="subtit" data-index="K">K</h3>
                <ul class="brand-list2">
                    <li class=" js-change-brand" data-brandId="1268" data-brandUrl="cadillac" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=cadillac">
                        <i class="icon-brand icon-cadillac"></i>
                        <a href="javascript:void(0);">凯迪拉克</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="2258" data-brandUrl="krui" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=krui">
                        <i class="icon-brand icon-krui"></i>
                        <a href="javascript:void(0);">开瑞</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="103827" data-brandUrl="kangdi" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=kangdi">
                        <i class="icon-brand icon-kangdi"></i>
                        <a href="javascript:void(0);">康迪</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="102705" data-brandUrl="kawei" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=kawei">
                        <i class="icon-brand icon-kawei"></i>
                        <a href="javascript:void(0);">卡威</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="103775" data-brandUrl="kaiyi" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=kaiyi">
                        <i class="icon-brand icon-kaiyi"></i>
                        <a href="javascript:void(0);">凯翼</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="103830" data-brandUrl="ks" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=ks">
                        <i class="icon-brand icon-ks"></i>
                        <a href="javascript:void(0);">卡升</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="102464" data-brandUrl="kenisaige" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=kenisaige">
                        <i class="icon-brand icon-kenisaige"></i>
                        <a href="javascript:void(0);">科尼赛克</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="102706" data-brandUrl="kaersen" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=kaersen">
                        <i class="icon-brand icon-kaersen"></i>
                        <a href="javascript:void(0);">卡尔森</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="1269" data-brandUrl="chrysler" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=chrysler">
                        <i class="icon-brand icon-chrysler"></i>
                        <a href="javascript:void(0);">克莱斯勒</a>
                    </li>
                </ul>
                <h3 class="subtit" data-index="L">L</h3>
                <ul class="brand-list2">
                    <li class=" js-change-brand" data-brandId="1209" data-brandUrl="suzuki" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=suzuki">
                        <i class="icon-brand icon-suzuki"></i>
                        <a href="javascript:void(0);">铃木</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="1276" data-brandUrl="landrover" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=landrover">
                        <i class="icon-brand icon-landrover"></i>
                        <a href="javascript:void(0);">路虎</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="1274" data-brandUrl="lifan" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=lifan">
                        <i class="icon-brand icon-lifan"></i>
                        <a href="javascript:void(0);">力帆</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="1273" data-brandUrl="lufeng" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=lufeng">
                        <i class="icon-brand icon-lufeng"></i>
                        <a href="javascript:void(0);">陆风</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="1270" data-brandUrl="liebao" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=liebao">
                        <i class="icon-brand icon-liebao"></i>
                        <a href="javascript:void(0);">猎豹</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="1279" data-brandUrl="renault" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=renault">
                        <i class="icon-brand icon-renault"></i>
                        <a href="javascript:void(0);">雷诺</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="1278" data-brandUrl="lexus" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=lexus">
                        <i class="icon-brand icon-lexus"></i>
                        <a href="javascript:void(0);">雷克萨斯</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="2269" data-brandUrl="linian" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=linian">
                        <i class="icon-brand icon-linian"></i>
                        <a href="javascript:void(0);">理念</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="1277" data-brandUrl="lincoln" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=lincoln">
                        <i class="icon-brand icon-lincoln"></i>
                        <a href="javascript:void(0);">林肯</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="1272" data-brandUrl="rover" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=rover">
                        <i class="icon-brand icon-rover"></i>
                        <a href="javascript:void(0);">罗孚</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="102469" data-brandUrl="lotuscars" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=lotuscars">
                        <i class="icon-brand icon-lotuscars"></i>
                        <a href="javascript:void(0);">路特斯</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="103776" data-brandUrl="laolunshi" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=laolunshi">
                        <i class="icon-brand icon-laolunshi"></i>
                        <a href="javascript:void(0);">劳伦士</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="1281" data-brandUrl="rolls-royce" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=rolls-royce">
                        <i class="icon-brand icon-rolls-royce"></i>
                        <a href="javascript:void(0);">劳斯莱斯</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="1271" data-brandUrl="lamborghini" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=lamborghini">
                        <i class="icon-brand icon-lamborghini"></i>
                        <a href="javascript:void(0);">兰博基尼</a>
                    </li>
                </ul>
                <h3 class="subtit" data-index="M">M</h3>
                <ul class="brand-list2">
                    <li class=" js-change-brand" data-brandId="1211" data-brandUrl="mazda" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=mazda">
                        <i class="icon-brand icon-mazda"></i>
                        <a href="javascript:void(0);">马自达</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="103788" data-brandUrl="mg1" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=mg1">
                        <i class="icon-brand icon-mg1"></i>
                        <a href="javascript:void(0);">MG</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="1284" data-brandUrl="mini" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=mini">
                        <i class="icon-brand icon-mini"></i>
                        <a href="javascript:void(0);">MINI</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="1285" data-brandUrl="maserati" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=maserati">
                        <i class="icon-brand icon-maserati"></i>
                        <a href="javascript:void(0);">玛莎拉蒂</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="102716" data-brandUrl="maikailun" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=maikailun">
                        <i class="icon-brand icon-maikailun"></i>
                        <a href="javascript:void(0);">迈凯伦</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="1286" data-brandUrl="meiya" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=meiya">
                        <i class="icon-brand icon-meiya"></i>
                        <a href="javascript:void(0);">美亚</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="1282" data-brandUrl="maybach" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=maybach">
                        <i class="icon-brand icon-maybach"></i>
                        <a href="javascript:void(0);">迈巴赫</a>
                    </li>
                </ul>
                <h3 class="subtit" data-index="N">N</h3>
                <ul class="brand-list2">
                    <li class=" js-change-brand" data-brandId="2271" data-brandUrl="dongfengyulongnazhijie" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=dongfengyulongnazhijie">
                        <i class="icon-brand icon-dongfengyulongnazhijie"></i>
                        <a href="javascript:void(0);">纳智捷</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="103806" data-brandUrl="njjinlong" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=njjinlong">
                        <i class="icon-brand icon-njjinlong"></i>
                        <a href="javascript:void(0);">南京金龙</a>
                    </li>
                </ul>
                <h3 class="subtit" data-index="O">O</h3>
                <ul class="brand-list2">
                    <li class=" js-change-brand" data-brandId="1289" data-brandUrl="acura" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=acura">
                        <i class="icon-brand icon-acura"></i>
                        <a href="javascript:void(0);">讴歌</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="102481" data-brandUrl="oulang" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=oulang">
                        <i class="icon-brand icon-oulang"></i>
                        <a href="javascript:void(0);">欧朗</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="1288" data-brandUrl="opel" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=opel">
                        <i class="icon-brand icon-opel"></i>
                        <a href="javascript:void(0);">欧宝</a>
                    </li>
                </ul>
                <h3 class="subtit" data-index="Q">Q</h3>
                <ul class="brand-list2">
                    <li class=" js-change-brand" data-brandId="1292" data-brandUrl="kia" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=kia">
                        <i class="icon-brand icon-kia"></i>
                        <a href="javascript:void(0);">起亚</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="1201" data-brandUrl="chery" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=chery">
                        <i class="icon-brand icon-chery"></i>
                        <a href="javascript:void(0);">奇瑞</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="102478" data-brandUrl="qichen" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=qichen">
                        <i class="icon-brand icon-qichen"></i>
                        <a href="javascript:void(0);">启辰</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="1275" data-brandUrl="lotus" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=lotus">
                        <i class="icon-brand icon-lotus"></i>
                        <a href="javascript:void(0);">青年莲花</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="1291" data-brandUrl="qingling" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=qingling">
                        <i class="icon-brand icon-qingling"></i>
                        <a href="javascript:void(0);">庆铃</a>
                    </li>
                </ul>
                <h3 class="subtit" data-index="R">R</h3>
                <ul class="brand-list2">
                    <li class=" js-change-brand" data-brandId="1202" data-brandUrl="richan" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=richan">
                        <i class="icon-brand icon-richan"></i>
                        <a href="javascript:void(0);">日产</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="1293" data-brandUrl="rongwei" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=rongwei">
                        <i class="icon-brand icon-rongwei"></i>
                        <a href="javascript:void(0);">荣威</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="2260" data-brandUrl="ruilin" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=ruilin">
                        <i class="icon-brand icon-ruilin"></i>
                        <a href="javascript:void(0);">瑞麒</a>
                    </li>
                </ul>
                <h3 class="subtit" data-index="S">S</h3>
                <ul class="brand-list2">
                    <li class=" js-change-brand" data-brandId="1297" data-brandUrl="skoda" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=skoda">
                        <i class="icon-brand icon-skoda"></i>
                        <a href="javascript:void(0);">斯柯达</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="1204" data-brandUrl="mitsubishi" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=mitsubishi">
                        <i class="icon-brand icon-mitsubishi"></i>
                        <a href="javascript:void(0);">三菱</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="1294" data-brandUrl="subaru" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=subaru">
                        <i class="icon-brand icon-subaru"></i>
                        <a href="javascript:void(0);">斯巴鲁</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="1299" data-brandUrl="shuanglong" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=shuanglong">
                        <i class="icon-brand icon-shuanglong"></i>
                        <a href="javascript:void(0);">双龙</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="102474" data-brandUrl="siming" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=siming">
                        <i class="icon-brand icon-siming"></i>
                        <a href="javascript:void(0);">思铭</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="102476" data-brandUrl="smart" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=smart">
                        <i class="icon-brand icon-smart"></i>
                        <a href="javascript:void(0);">Smart</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="1296" data-brandUrl="shuanghuan" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=shuanghuan">
                        <i class="icon-brand icon-shuanghuan"></i>
                        <a href="javascript:void(0);">双环</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="103801" data-brandUrl="sailin" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=sailin">
                        <i class="icon-brand icon-sailin"></i>
                        <a href="javascript:void(0);">赛麟</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="103802" data-brandUrl="siwei" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=siwei">
                        <i class="icon-brand icon-siwei"></i>
                        <a href="javascript:void(0);">斯威</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="102700" data-brandUrl="xiaqitongjia" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=xiaqitongjia">
                        <i class="icon-brand icon-xiaqitongjia"></i>
                        <a href="javascript:void(0);">陕汽通家</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="2253" data-brandUrl="shijue" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=shijue">
                        <i class="icon-brand icon-shijue"></i>
                        <a href="javascript:void(0);">世爵</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="103786" data-brandUrl="saibao1" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=saibao1">
                        <i class="icon-brand icon-saibao1"></i>
                        <a href="javascript:void(0);">赛宝</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="1214" data-brandUrl="saab" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=saab">
                        <i class="icon-brand icon-saab"></i>
                        <a href="javascript:void(0);">萨博</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="2273" data-brandUrl="datong" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=datong">
                        <i class="icon-brand icon-datong"></i>
                        <a href="javascript:void(0);">上汽大通</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="103766" data-brandUrl="scion" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=scion">
                        <i class="icon-brand icon-scion"></i>
                        <a href="javascript:void(0);">Scion</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="103767" data-brandUrl="springo" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=springo">
                        <i class="icon-brand icon-springo"></i>
                        <a href="javascript:void(0);">SPRINGO</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="103810" data-brandUrl="shidai" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=shidai">
                        <i class="icon-brand icon-shidai"></i>
                        <a href="javascript:void(0);">时代</a>
                    </li>
                </ul>
                <h3 class="subtit" data-index="T">T</h3>
                <ul class="brand-list2">
                    <li class=" js-change-brand" data-brandId="102715" data-brandUrl="tesila" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=tesila">
                        <i class="icon-brand icon-tesila"></i>
                        <a href="javascript:void(0);">特斯拉</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="102717" data-brandUrl="tengshi" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=tengshi">
                        <i class="icon-brand icon-tengshi"></i>
                        <a href="javascript:void(0);">腾势</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="2257" data-brandUrl="yiqitongyong" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=yiqitongyong">
                        <i class="icon-brand icon-yiqitongyong"></i>
                        <a href="javascript:void(0);">通用</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="103836" data-brandUrl="tkt" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=tkt">
                        <i class="icon-brand icon-tkt"></i>
                        <a href="javascript:void(0);">泰卡特</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="1300" data-brandUrl="tianma" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=tianma">
                        <i class="icon-brand icon-tianma"></i>
                        <a href="javascript:void(0);">天马</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="1301" data-brandUrl="tongtian" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=tongtian">
                        <i class="icon-brand icon-tongtian"></i>
                        <a href="javascript:void(0);">通田</a>
                    </li>
                </ul>
                <h3 class="subtit" data-index="W">W</h3>
                <ul class="brand-list2">
                    <li class=" js-change-brand" data-brandId="1305" data-brandUrl="wuling" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=wuling">
                        <i class="icon-brand icon-wuling"></i>
                        <a href="javascript:void(0);">五菱</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="1203" data-brandUrl="volvo" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=volvo">
                        <i class="icon-brand icon-volvo"></i>
                        <a href="javascript:void(0);">沃尔沃</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="102714" data-brandUrl="weiziman" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=weiziman">
                        <i class="icon-brand icon-weiziman"></i>
                        <a href="javascript:void(0);">威兹曼</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="103822" data-brandUrl="weilai" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=weilai">
                        <i class="icon-brand icon-weilai"></i>
                        <a href="javascript:void(0);">蔚来</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="1304" data-brandUrl="wushiling" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=wushiling">
                        <i class="icon-brand icon-wushiling"></i>
                        <a href="javascript:void(0);">五十铃</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="2264" data-brandUrl="weilin" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=weilin">
                        <i class="icon-brand icon-weilin"></i>
                        <a href="javascript:void(0);">威麟</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="103829" data-brandUrl="wey" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=wey">
                        <i class="icon-brand icon-wey"></i>
                        <a href="javascript:void(0);">WEY</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="103768" data-brandUrl="wanfeng" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=wanfeng">
                        <i class="icon-brand icon-wanfeng"></i>
                        <a href="javascript:void(0);">万丰</a>
                    </li>
                </ul>
                <h3 class="subtit" data-index="X">X</h3>
                <ul class="brand-list2">
                    <li class=" js-change-brand" data-brandId="1208" data-brandUrl="hyundai" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=hyundai">
                        <i class="icon-brand icon-hyundai"></i>
                        <a href="javascript:void(0);">现代</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="1213" data-brandUrl="citroen" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=citroen">
                        <i class="icon-brand icon-citroen"></i>
                        <a href="javascript:void(0);">雪铁龙</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="1307" data-brandUrl="chevrolet" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=chevrolet">
                        <i class="icon-brand icon-chevrolet"></i>
                        <a href="javascript:void(0);">雪佛兰</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="102465" data-brandUrl="brand-xiali" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=brand-xiali">
                        <i class="icon-brand icon-brand-xiali"></i>
                        <a href="javascript:void(0);">夏利</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="1308" data-brandUrl="xinkai" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=xinkai">
                        <i class="icon-brand icon-xinkai"></i>
                        <a href="javascript:void(0);">新凯</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="2255" data-brandUrl="xiyate" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=xiyate">
                        <i class="icon-brand icon-xiyate"></i>
                        <a href="javascript:void(0);">西雅特</a>
                    </li>
                </ul>
                <h3 class="subtit" data-index="Y">Y</h3>
                <ul class="brand-list2">
                    <li class=" js-change-brand" data-brandId="1210" data-brandUrl="tj-yiqi" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=tj-yiqi">
                        <i class="icon-brand icon-tj-yiqi"></i>
                        <a href="javascript:void(0);">一汽</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="1311" data-brandUrl="nj-iveco" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=nj-iveco">
                        <i class="icon-brand icon-nj-iveco"></i>
                        <a href="javascript:void(0);">依维柯</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="1310" data-brandUrl="infiniti" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=infiniti">
                        <i class="icon-brand icon-infiniti"></i>
                        <a href="javascript:void(0);">英菲尼迪</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="103784" data-brandUrl="yingzhi" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=yingzhi">
                        <i class="icon-brand icon-yingzhi"></i>
                        <a href="javascript:void(0);">英致</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="103831" data-brandUrl="yj" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=yj">
                        <i class="icon-brand icon-yj"></i>
                        <a href="javascript:void(0);">御捷</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="1313" data-brandUrl="cf-yangzi" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=cf-yangzi">
                        <i class="icon-brand icon-cf-yangzi"></i>
                        <a href="javascript:void(0);">扬子</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="2261" data-brandUrl="yongyuanqiche" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=yongyuanqiche">
                        <i class="icon-brand icon-yongyuanqiche"></i>
                        <a href="javascript:void(0);">永源</a>
                    </li>
                </ul>
                <h3 class="subtit" data-index="Z">Z</h3>
                <ul class="brand-list2">
                    <li class=" js-change-brand" data-brandId="1318" data-brandUrl="zhongtai" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=zhongtai">
                        <i class="icon-brand icon-zhongtai"></i>
                        <a href="javascript:void(0);">众泰</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="1315" data-brandUrl="huachen-zhonghua" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=huachen-zhonghua">
                        <i class="icon-brand icon-huachen-zhonghua"></i>
                        <a href="javascript:void(0);">中华</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="1319" data-brandUrl="zhongxing" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=zhongxing">
                        <i class="icon-brand icon-zhongxing"></i>
                        <a href="javascript:void(0);">中兴</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="103796" data-brandUrl="zhidou" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=zhidou">
                        <i class="icon-brand icon-zhidou"></i>
                        <a href="javascript:void(0);">知豆</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="103771" data-brandUrl="zhongshun" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=zhongshun">
                        <i class="icon-brand icon-zhongshun"></i>
                        <a href="javascript:void(0);">中顺</a>
                    </li>
                    <li class=" js-change-brand" data-brandId="103770" data-brandUrl="zhongou" data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=brand&brand=zhongou">
                        <i class="icon-brand icon-zhongou"></i>
                        <a href="javascript:void(0);">中欧</a>
                    </li>
                </ul>
            </section>
            <aside class="aside-letter">
                <ul class="letter-list">
                    <li>#</li>
                    <li>热</li>
                    <li>*</li>
                    <li>A</li>
                    <li>B</li>
                    <li>C</li>
                    <li>D</li>
                    <li>F</li>
                    <li>G</li>
                    <li>H</li>
                    <li>J</li>
                    <li>K</li>
                    <li>L</li>
                    <li>M</li>
                    <li>N</li>
                    <li>O</li>
                    <li>Q</li>
                    <li>R</li>
                    <li>S</li>
                    <li>T</li>
                    <li>W</li>
                    <li>X</li>
                    <li>Y</li>
                    <li>Z</li>
                </ul>
            </aside>
        </div>
        <aside class="brand-carbox">
            <section class="aside-scroll">
                <div class="js-tag-iscroll">
                    <div class="js-tag-head">
                        <ul class="brand-list2">
                            <li class="js-brand-icon">
                            <!-- <i class="icon-brand icon-audi"></i> -->
                            <a id="name_brand" href="javascript:void(0);">奥迪</a></li>
                        </ul>
                        <h3 class="subtit">选择车系</h3>
                        <ul class="brand-list2">
                            <li class="limit-no"><a href="javascript:void(0);">不限车系</a></li>
                        </ul>
                        <!-- <h3 class="subtit" style="display:none;">一汽·大众奥迪</h3> -->
                    </div>
                    <ul class="brand-list2 brand-list2-car">
                        <li><a href="javascript:void(0);">A3<span class="num">-</span></a></li>
                    </ul>
                </div>
            </section>
        </aside>
    </div>
@endsection

@section('script_content')
<script>
    $(document).ready(function(){

        $('.js-change-brand').click(function(){

            var top_brand   = $(this).attr('data-brandId');
            var token       = $("input[name='_token']").val();
            var request_url = "{{route('mobel.cate.getChildCategory')}}";
            // var current_url = window.location.href; //当前URL
            var brand_name  = $(this).children('a').text();
            var conditions  = '{{$condition_other}}';

            /*console.log($(this).attr('data-brandId'));
            console.log(token);
            console.log(request_url);*/

            //获得该顶级品牌子品牌
            $.ajax({
                type: 'POST',       
                url: request_url,       
                data: { pid : top_brand, conditions:conditions},       
                dataType: 'json',       
                headers: {      
                    'X-CSRF-TOKEN': token       
                },      
                success: function(data){        
                    if(data.status == 1){
                        var content = '';
                        /*console.log(data.data);
                        console.log(brand_name);*/
                        // <li><a href="javascript:void(0);">A3<span class="num">-</span></a></li>
                        $.each(data.data, function(index, value){
                            content += '<li>';
                            content += '<a href="';
                            content += value.url;
                            content += '">';
                            content += value.name;
                            content += '</li>';
                        });
                        // $('#top_brand').append(content);
                        // console.log($('#second_category'));
                        $('.brand-list2-car').empty();
                        $('.brand-list2-car').append(content);
                        $('#name_brand').text(brand_name);
                        $('.brand-carbox').show();
                    }else{
                        alert(data.message);
                        $('.brand-list2-car').empty();
                        return false;
                    }
                },      
                error: function(xhr, type){
    
                    alert('Ajax error!');
                }
            });
        });
    });
</script>
@endsection