@extends('mobel.main')

@section('title')
    
@endsection

@section('head_content')
    <link type="text/css" rel="stylesheet" href="{{URL::asset('mobel/css/carInfo/common.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('mobel/css/carInfo/swipe.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('mobel/css/carInfo/report.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('mobel/css/carInfo/server.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('mobel/css/carInfo/footer.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('mobel/css/carInfo/content.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('mobel/css/carInfo/serv.css')}}">
    
@endsection

@section('content')
<section class="detail">
        <!-- header -->
        <div class="topnav-embed active">
            <a class="head-back" href="javascript:history.go(-1);">
                <!--返回-->
            </a>
            <div class="head-group">
                <a class="appicon" href="/misc/guaziapp/?from=guazi" data-gzlog="tracking_type=click&eventid=1112432100000003"></a>
                <a class="collecticon submitCollect " href="javascript:;"></a>
            </div>
        </div>
        <!-- 悬浮head -->
        <div class="topnav-float">
            <a class="head-back j-head-back" href="javascript:;">
                <!--返回-->
            </a>
            <div class="head-tab">
                <a href="javascript:;" class="active j-head-tab-detailInfo j-slide-head" data-gzlog="tracking_type=click&eventid=1112123400999914">车源</a>
                <a href="javascript:;" class="j-head-tab-chekuang j-slide-head" data-gzlog="tracking_type=click&eventid=1112123400999915">车况</a>
                <a href="javascript:;" class="j-head-tab-xiangqing j-slide-head" data-gzlog="tracking_type=click&eventid=1112123400999916">图文</a>
                <span class="j-slide-head-1 head-tab-image-text">图文详情</span>
            </div>
            <div class="head-group">
                <a class="appicon" href="/misc/guaziapp/?from=guazi" data-gzlog="tracking_type=click&eventid=1112432100000003"></a>
                <a class="collecticon submitCollect2 " href="javascript:;"></a>
            </div>
        </div>
        <div class="drag-down-more">
            <div class="drag-down-more-content">
                下拉返回车源简介
            </div>
            <div class="drag-down-more-arrow">
                <div class="drag-down-more-arrowChild"></div>
            </div>
        </div>
        <div class="second-tab">
            <a href="javaScript:;" class="active j-second-tab-pic" data-gzlog="tracking_type=click&eventid=1112123400999917">图片介绍</a>
            <a href="javascript:;" class="j-second-tab-conf" data-gzlog="tracking_type=click&eventid=1112123400999918">基本参数</a>
            <a href="javascript:;" class="j-second-tab-faq" data-gzlog="tracking_type=click&eventid=1112123400999919">常见问题</a>
        </div>
        <div class="main-layout">
            <div id="detailInfo" class="layout-item active  posout">
                <!-- 轮播 -->
                <div class="thumb-houseimg-box thumb-auto" data-loop="noloop" data-interval="3000" id="responsiveBanner">
                    <!--图片列表（针对ios设备适配retina屏幕） -->
                    <ul class="slide-area" data-role="list">
                        <li data-role="item" class="wap_detail_image_size">
                            <a href="/sjz/picture/?pic=largePicture&n=0&postid=16023691" data-gzlog="tracking_type=click&eventid=0310300000000148">
                    <img src="http://www.sjztcl.com/uploads/car/201709/images/mmexport1504749705099副本爱奇艺.jpg" data-src="https://image1.guazistatic.com/qn1708181619282aa52763702fa3422b779ae14a88ff48.jpg?imageView2/1/w/750/h/500/q/88"
                    data-big-image="https://image1.guazistatic.com/qn1708181619282aa52763702fa3422b779ae14a88ff48.jpg?imageView2/2/w/750/q/88"
                    >
                </a>
                        </li>
                        <li data-role="item" class="wap_detail_image_size">
                            <a href="/sjz/picture/?pic=largePicture&n=1&postid=16023691" data-gzlog="tracking_type=click&eventid=0310300000000148">
                    <img                     src="http://www.sjztcl.com/uploads/car/201709/images/mmexport1504749705099副本爱奇艺.jpg" data-src="https://image1.guazistatic.com/qn1708181619272a197799b2fd13a5f0abd2d2a473a6eb.jpg?imageView2/1/w/750/h/500/q/88"
                    data-big-image="https://image1.guazistatic.com/qn1708181619272a197799b2fd13a5f0abd2d2a473a6eb.jpg?imageView2/2/w/750/q/88"
                    >
                </a>
                        </li>
                        <li data-role="item" class="wap_detail_image_size">
                            <a href="/sjz/picture/?pic=largePicture&n=2&postid=16023691" data-gzlog="tracking_type=click&eventid=0310300000000148">
                    <img                     src="http://www.sjztcl.com/uploads/car/201709/images/mmexport1504749705099副本爱奇艺.jpg" data-src="https://image1.guazistatic.com/qn170818161906acbbe35ef279583420ca6ec64e021e43.jpg?imageView2/1/w/750/h/500/q/88"
                    data-big-image="https://image1.guazistatic.com/qn170818161906acbbe35ef279583420ca6ec64e021e43.jpg?imageView2/2/w/750/q/88"
                    >
                </a>
                        </li>
                        <li data-role="item" class="wap_detail_image_size">
                            <a href="/sjz/picture/?pic=largePicture&n=3&postid=16023691" data-gzlog="tracking_type=click&eventid=0310300000000148">
                    <img                     src="http://www.sjztcl.com/uploads/car/201709/images/mmexport1504749705099副本爱奇艺.jpg" data-src="https://image1.guazistatic.com/qn17081816190560394a4c74ad9052d7109fcf91be672d.jpg?imageView2/1/w/750/h/500/q/88"
                    data-big-image="https://image1.guazistatic.com/qn17081816190560394a4c74ad9052d7109fcf91be672d.jpg?imageView2/2/w/750/q/88"
                    >
                </a>
                        </li>
                        <li data-role="item" class="wap_detail_image_size">
                            <a href="/sjz/picture/?pic=largePicture&n=4&postid=16023691" data-gzlog="tracking_type=click&eventid=0310300000000148">
                    <img                     src="http://www.sjztcl.com/uploads/car/201709/images/mmexport1504749705099副本爱奇艺.jpg" data-src="https://image1.guazistatic.com/qn170818161902f31bc22c57765d3b296cfdd03683e4ec.jpg?imageView2/1/w/750/h/500/q/88"
                    data-big-image="https://image1.guazistatic.com/qn170818161902f31bc22c57765d3b296cfdd03683e4ec.jpg?imageView2/2/w/750/q/88"
                    >
                </a>
                        </li>
                        <li data-role="item" class="wap_detail_image_size">
                            <a href="/sjz/picture/?pic=largePicture&n=5&postid=16023691" data-gzlog="tracking_type=click&eventid=0310300000000148">
                    <img                     src="http://www.sjztcl.com/uploads/car/201709/images/mmexport1504749705099副本爱奇艺.jpg" data-src="https://image1.guazistatic.com/qn170818161903e860dc84a7411529ab28e5c49dade460.jpg?imageView2/1/w/750/h/500/q/88"
                    data-big-image="https://image1.guazistatic.com/qn170818161903e860dc84a7411529ab28e5c49dade460.jpg?imageView2/2/w/750/q/88"
                    >
                </a>
                        </li>
                        <li data-role="item" class="wap_detail_image_size">
                            <a href="/sjz/picture/?pic=largePicture&n=6&postid=16023691" data-gzlog="tracking_type=click&eventid=0310300000000148">
                    <img                     src="http://www.sjztcl.com/uploads/car/201709/images/mmexport1504749705099副本爱奇艺.jpg" data-src="https://image1.guazistatic.com/qn1708181619040c072d9fb6c21c5577b6a2d5d83a65bb.jpg?imageView2/1/w/750/h/500/q/88"
                    data-big-image="https://image1.guazistatic.com/qn1708181619040c072d9fb6c21c5577b6a2d5d83a65bb.jpg?imageView2/2/w/750/q/88"
                    >
                </a>
                        </li>
                        <li data-role="item" class="wap_detail_image_size">
                            <a href="/sjz/picture/?pic=largePicture&n=7&postid=16023691" data-gzlog="tracking_type=click&eventid=0310300000000148">
                    <img                     src="http://www.sjztcl.com/uploads/car/201709/images/mmexport1504749705099副本爱奇艺.jpg" data-src="https://image1.guazistatic.com/qn170818161428842cb3422b26df51a673056e103a236f.jpg?imageView2/1/w/750/h/500/q/88"
                    data-big-image="https://image1.guazistatic.com/qn170818161428842cb3422b26df51a673056e103a236f.jpg?imageView2/2/w/750/q/88"
                    >
                </a>
                        </li>
                        <li data-role="item" class="wap_detail_image_size">
                            <a href="/sjz/picture/?pic=largePicture&n=8&postid=16023691" data-gzlog="tracking_type=click&eventid=0310300000000148">
                    <img                     src="http://www.sjztcl.com/uploads/car/201709/images/mmexport1504749705099副本爱奇艺.jpg" data-src="https://image1.guazistatic.com/qn17081816142861c708c6be0c82d82b58611f23e22c78.jpg?imageView2/1/w/750/h/500/q/88"
                    data-big-image="https://image1.guazistatic.com/qn17081816142861c708c6be0c82d82b58611f23e22c78.jpg?imageView2/2/w/750/q/88"
                    >
                </a>
                        </li>
                        <li data-role="item" class="wap_detail_image_size">
                            <a href="/sjz/picture/?pic=largePicture&n=9&postid=16023691" data-gzlog="tracking_type=click&eventid=0310300000000148">
                    <img                     src="http://www.sjztcl.com/uploads/car/201709/images/mmexport1504749705099副本爱奇艺.jpg" data-src="https://image1.guazistatic.com/qn170818161428238c86fa3ff2d237c4f5e26cd622dcec.jpg?imageView2/1/w/750/h/500/q/88"
                    data-big-image="https://image1.guazistatic.com/qn170818161428238c86fa3ff2d237c4f5e26cd622dcec.jpg?imageView2/2/w/750/q/88"
                    >
                </a>
                        </li>
                        <li data-role="item" class="wap_detail_image_size">
                            <a href="/sjz/picture/?pic=largePicture&n=10&postid=16023691" data-gzlog="tracking_type=click&eventid=0310300000000148">
                    <img                     src="http://www.sjztcl.com/uploads/car/201709/images/mmexport1504749705099副本爱奇艺.jpg" data-src="https://image1.guazistatic.com/qn170818161429351cb65b490a4ede47bb924b3a0dca43.jpg?imageView2/1/w/750/h/500/q/88"
                    data-big-image="https://image1.guazistatic.com/qn170818161429351cb65b490a4ede47bb924b3a0dca43.jpg?imageView2/2/w/750/q/88"
                    >
                </a>
                        </li>
                        <li data-role="item" class="wap_detail_image_size">
                            <a href="/sjz/picture/?pic=largePicture&n=11&postid=16023691" data-gzlog="tracking_type=click&eventid=0310300000000148">
                    <img                     src="http://www.sjztcl.com/uploads/car/201709/images/mmexport1504749705099副本爱奇艺.jpg" data-src="https://image1.guazistatic.com/qn1708181614284f1f9a6bada7e1d10b1b116e07537286.jpg?imageView2/1/w/750/h/500/q/88"
                    data-big-image="https://image1.guazistatic.com/qn1708181614284f1f9a6bada7e1d10b1b116e07537286.jpg?imageView2/2/w/750/q/88"
                    >
                </a>
                        </li>
                        <li data-role="item" class="wap_detail_image_size">
                            <a href="/sjz/picture/?pic=largePicture&n=12&postid=16023691" data-gzlog="tracking_type=click&eventid=0310300000000148">
                    <img                     src="http://www.sjztcl.com/uploads/car/201709/images/mmexport1504749705099副本爱奇艺.jpg" data-src="https://image1.guazistatic.com/qn170818161428b0fa01cdd9d5779de03d790c94f10ca0.jpg?imageView2/1/w/750/h/500/q/88"
                    data-big-image="https://image1.guazistatic.com/qn170818161428b0fa01cdd9d5779de03d790c94f10ca0.jpg?imageView2/2/w/750/q/88"
                    >
                </a>
                        </li>
                        <li data-role="item" class="wap_detail_image_size">
                            <a href="/sjz/picture/?pic=largePicture&n=13&postid=16023691" data-gzlog="tracking_type=click&eventid=0310300000000148">
                    <img                     src="http://www.sjztcl.com/uploads/car/201709/images/mmexport1504749705099副本爱奇艺.jpg" data-src="https://image1.guazistatic.com/qn17081816142940e4d6215036c6a08c67776d526826e8.jpg?imageView2/1/w/750/h/500/q/88"
                    data-big-image="https://image1.guazistatic.com/qn17081816142940e4d6215036c6a08c67776d526826e8.jpg?imageView2/2/w/750/q/88"
                    >
                </a>
                        </li>
                        <li data-role="item" class="wap_detail_image_size">
                            <a href="/sjz/picture/?pic=largePicture&n=14&postid=16023691" data-gzlog="tracking_type=click&eventid=0310300000000148">
                    <img                     src="http://www.sjztcl.com/uploads/car/201709/images/mmexport1504749705099副本爱奇艺.jpg" data-src="https://image1.guazistatic.com/qn170818161429180fa46043e1c3076a69dd930fe925fc.jpg?imageView2/1/w/750/h/500/q/88"
                    data-big-image="https://image1.guazistatic.com/qn170818161429180fa46043e1c3076a69dd930fe925fc.jpg?imageView2/2/w/750/q/88"
                    >
                </a>
                        </li>
                        <li data-role="item" class="wap_detail_image_size">
                            <a href="/sjz/picture/?pic=largePicture&n=15&postid=16023691" data-gzlog="tracking_type=click&eventid=0310300000000148">
                    <img                     src="http://www.sjztcl.com/uploads/car/201709/images/mmexport1504749705099副本爱奇艺.jpg" data-src="https://image1.guazistatic.com/qn1708181614294334d56e8b988ecb8ca707e6cbbb1bf9.jpg?imageView2/1/w/750/h/500/q/88"
                    data-big-image="https://image1.guazistatic.com/qn1708181614294334d56e8b988ecb8ca707e6cbbb1bf9.jpg?imageView2/2/w/750/q/88"
                    >
                </a>
                        </li>
                        <li data-role="item" class="wap_detail_image_size">
                            <a href="/sjz/picture/?pic=largePicture&n=16&postid=16023691" data-gzlog="tracking_type=click&eventid=0310300000000148">
                    <img                     src="http://www.sjztcl.com/uploads/car/201709/images/mmexport1504749705099副本爱奇艺.jpg" data-src="https://image1.guazistatic.com/qn1708181614299c5ae54202f05932144bc6c2d073a1f3.jpg?imageView2/1/w/750/h/500/q/88"
                    data-big-image="https://image1.guazistatic.com/qn1708181614299c5ae54202f05932144bc6c2d073a1f3.jpg?imageView2/2/w/750/q/88"
                    >
                </a>
                        </li>
                        <li data-role="item" class="wap_detail_image_size">
                            <a href="/sjz/picture/?pic=largePicture&n=17&postid=16023691" data-gzlog="tracking_type=click&eventid=0310300000000148">
                    <img                     src="http://www.sjztcl.com/uploads/car/201709/images/mmexport1504749705099副本爱奇艺.jpg" data-src="https://image1.guazistatic.com/qn17081816142940949ec67d895af1d7f4b1a50b365ec3.jpg?imageView2/1/w/750/h/500/q/88"
                    data-big-image="https://image1.guazistatic.com/qn17081816142940949ec67d895af1d7f4b1a50b365ec3.jpg?imageView2/2/w/750/q/88"
                    >
                </a>
                        </li>
                        <li data-role="item" class="wap_detail_image_size">
                            <a href="/sjz/picture/?pic=largePicture&n=18&postid=16023691" data-gzlog="tracking_type=click&eventid=0310300000000148">
                    <img                     src="http://www.sjztcl.com/uploads/car/201709/images/mmexport1504749705099副本爱奇艺.jpg" data-src="https://image1.guazistatic.com/qn1708181614291b3c887fa268be2147b744902b2a3fba.jpg?imageView2/1/w/750/h/500/q/88"
                    data-big-image="https://image1.guazistatic.com/qn1708181614291b3c887fa268be2147b744902b2a3fba.jpg?imageView2/2/w/750/q/88"
                    >
                </a>
                        </li>
                        <li data-role="item" class="wap_detail_image_size">
                            <a href="/sjz/picture/?pic=largePicture&n=19&postid=16023691" data-gzlog="tracking_type=click&eventid=0310300000000148">
                    <img                     src="http://www.sjztcl.com/uploads/car/201709/images/mmexport1504749705099副本爱奇艺.jpg" data-src="https://image1.guazistatic.com/qn1708181614288a029018bd7746c477a35312a0fb1ada.jpg?imageView2/1/w/750/h/500/q/88"
                    data-big-image="https://image1.guazistatic.com/qn1708181614288a029018bd7746c477a35312a0fb1ada.jpg?imageView2/2/w/750/q/88"
                    >
                </a>
                        </li>
                        <li data-role="item" class="wap_detail_image_size">
                            <a href="/sjz/picture/?pic=largePicture&n=20&postid=16023691" data-gzlog="tracking_type=click&eventid=0310300000000148">
                    <img                     src="http://www.sjztcl.com/uploads/car/201709/images/mmexport1504749705099副本爱奇艺.jpg" data-src="https://image1.guazistatic.com/qn1708181614284e1c2f2112e22a6a37705cc7aa32d8dd.jpg?imageView2/1/w/750/h/500/q/88"
                    data-big-image="https://image1.guazistatic.com/qn1708181614284e1c2f2112e22a6a37705cc7aa32d8dd.jpg?imageView2/2/w/750/q/88"
                    >
                </a>
                        </li>
                        <li data-role="item" class="wap_detail_image_size">
                            <a href="/sjz/picture/?pic=largePicture&n=21&postid=16023691" data-gzlog="tracking_type=click&eventid=0310300000000148">
                    <img                     src="http://www.sjztcl.com/uploads/car/201709/images/mmexport1504749705099副本爱奇艺.jpg" data-src="https://image1.guazistatic.com/qn170818161428b23800e8568c6994d43c8f1de736be47.jpg?imageView2/1/w/750/h/500/q/88"
                    data-big-image="https://image1.guazistatic.com/qn170818161428b23800e8568c6994d43c8f1de736be47.jpg?imageView2/2/w/750/q/88"
                    >
                </a>
                        </li>
                        <li data-role="item" class="wap_detail_image_size">
                            <a href="/sjz/picture/?pic=largePicture&n=22&postid=16023691" data-gzlog="tracking_type=click&eventid=0310300000000148">
                    <img                     src="http://www.sjztcl.com/uploads/car/201709/images/mmexport1504749705099副本爱奇艺.jpg" data-src="https://image1.guazistatic.com/qn170818161428c723a917748daea144752bbda63b859c.jpg?imageView2/1/w/750/h/500/q/88"
                    data-big-image="https://image1.guazistatic.com/qn170818161428c723a917748daea144752bbda63b859c.jpg?imageView2/2/w/750/q/88"
                    >
                </a>
                        </li>
                        <li data-role="item" class="wap_detail_image_size">
                            <a href="/sjz/picture/?pic=largePicture&n=23&postid=16023691" data-gzlog="tracking_type=click&eventid=0310300000000148">
                    <img                     src="http://www.sjztcl.com/uploads/car/201709/images/mmexport1504749705099副本爱奇艺.jpg" data-src="https://image1.guazistatic.com/qn1708181614289542ba79ff973efade3b0e3673b28567.jpg?imageView2/1/w/750/h/500/q/88"
                    data-big-image="https://image1.guazistatic.com/qn1708181614289542ba79ff973efade3b0e3673b28567.jpg?imageView2/2/w/750/q/88"
                    >
                </a>
                        </li>
                        <li data-role="item" class="wap_detail_image_size">
                            <a href="/sjz/picture/?pic=largePicture&n=24&postid=16023691" data-gzlog="tracking_type=click&eventid=0310300000000148">
                    <img                     src="http://www.sjztcl.com/uploads/car/201709/images/mmexport1504749705099副本爱奇艺.jpg" data-src="https://image1.guazistatic.com/qn1708181614287faea28dcf32e52656adda4af866da93.jpg?imageView2/1/w/750/h/500/q/88"
                    data-big-image="https://image1.guazistatic.com/qn1708181614287faea28dcf32e52656adda4af866da93.jpg?imageView2/2/w/750/q/88"
                    >
                </a>
                        </li>
                        <li data-role="item" class="wap_detail_image_size">
                            <a href="/sjz/picture/?pic=largePicture&n=25&postid=16023691" data-gzlog="tracking_type=click&eventid=0310300000000148">
                    <img                     src="http://www.sjztcl.com/uploads/car/201709/images/mmexport1504749705099副本爱奇艺.jpg" data-src="https://image1.guazistatic.com/qn17081816142864fd7e9c8a1a289aab3cadea12313877.jpg?imageView2/1/w/750/h/500/q/88"
                    data-big-image="https://image1.guazistatic.com/qn17081816142864fd7e9c8a1a289aab3cadea12313877.jpg?imageView2/2/w/750/q/88"
                    >
                </a>
                        </li>
                        <li data-role="item" class="wap_detail_image_size">
                            <a href="/sjz/picture/?pic=largePicture&n=26&postid=16023691" data-gzlog="tracking_type=click&eventid=0310300000000148">
                    <img                     src="http://www.sjztcl.com/uploads/car/201709/images/mmexport1504749705099副本爱奇艺.jpg" data-src="https://image1.guazistatic.com/qn1708181614287be8716ba90e018c410fdd265c93777a.jpg?imageView2/1/w/750/h/500/q/88"
                    data-big-image="https://image1.guazistatic.com/qn1708181614287be8716ba90e018c410fdd265c93777a.jpg?imageView2/2/w/750/q/88"
                    >
                </a>
                        </li>
                        <li data-role="item" class="wap_detail_image_size">
                            <a href="/sjz/picture/?pic=largePicture&n=27&postid=16023691" data-gzlog="tracking_type=click&eventid=0310300000000148">
                    <img                     src="http://www.sjztcl.com/uploads/car/201709/images/mmexport1504749705099副本爱奇艺.jpg" data-src="https://image1.guazistatic.com/qn1708181614282b75e0f6821a0d1d47077651b1a57c7d.jpg?imageView2/1/w/750/h/500/q/88"
                    data-big-image="https://image1.guazistatic.com/qn1708181614282b75e0f6821a0d1d47077651b1a57c7d.jpg?imageView2/2/w/750/q/88"
                    >
                </a>
                        </li>
                        <li data-role="item" class="wap_detail_image_size">
                            <a href="/sjz/picture/?pic=largePicture&n=28&postid=16023691" data-gzlog="tracking_type=click&eventid=0310300000000148">
                    <img                     src="http://www.sjztcl.com/uploads/car/201709/images/mmexport1504749705099副本爱奇艺.jpg" data-src="https://image1.guazistatic.com/qn170818161428653ca7618e1c46d07e020c43df741895.jpg?imageView2/1/w/750/h/500/q/88"
                    data-big-image="https://image1.guazistatic.com/qn170818161428653ca7618e1c46d07e020c43df741895.jpg?imageView2/2/w/750/q/88"
                    >
                </a>
                        </li>
                        <li data-role="item" class="wap_detail_image_size">
                            <a href="/sjz/picture/?pic=largePicture&n=29&postid=16023691" data-gzlog="tracking_type=click&eventid=0310300000000148">
                    <img                     src="http://www.sjztcl.com/uploads/car/201709/images/mmexport1504749705099副本爱奇艺.jpg" data-src="https://image1.guazistatic.com/qn170818161428e2b0b4219fe5db50d8b2d1a6cc1ef523.jpg?imageView2/1/w/750/h/500/q/88"
                    data-big-image="https://image1.guazistatic.com/qn170818161428e2b0b4219fe5db50d8b2d1a6cc1ef523.jpg?imageView2/2/w/750/q/88"
                    >
                </a>
                        </li>
                        <li data-role="item" class="wap_detail_image_size">
                            <a href="/sjz/picture/?pic=largePicture&n=30&postid=16023691" data-gzlog="tracking_type=click&eventid=0310300000000148">
                    <img                     src="http://www.sjztcl.com/uploads/car/201709/images/mmexport1504749705099副本爱奇艺.jpg" data-src="https://image1.guazistatic.com/qn1708181614294626dd62db42bd311ae7a72a76c8cb3a.jpg?imageView2/1/w/750/h/500/q/88"
                    data-big-image="https://image1.guazistatic.com/qn1708181614294626dd62db42bd311ae7a72a76c8cb3a.jpg?imageView2/2/w/750/q/88"
                    >
                </a>
                        </li>
                        <li data-role="item" class="wap_detail_image_size">
                            <a href="/sjz/picture/?pic=largePicture&n=31&postid=16023691" data-gzlog="tracking_type=click&eventid=0310300000000148">
                    <img                     src="http://www.sjztcl.com/uploads/car/201709/images/mmexport1504749705099副本爱奇艺.jpg" data-src="https://image1.guazistatic.com/qn170818161429a47bf804f9ac28239c1c20dd40ae9a04.jpg?imageView2/1/w/750/h/500/q/88"
                    data-big-image="https://image1.guazistatic.com/qn170818161429a47bf804f9ac28239c1c20dd40ae9a04.jpg?imageView2/2/w/750/q/88"
                    >
                </a>
                        </li>
                    </ul>
                    <!--图片序号-->
                    <span class="thumb-img-num">
            <i data-role="index">1</i>/<i>32</i>
        </span>
                    <span class="thumb-img-numcar">车源号 <i>HC-16023691</i></span>
                </div>
                <div class="product-head showNotice">
                    <h1 class="product-title">
                        大众宝来 2011款 1.6L 手动舒适型</h1>
                    <div class="label-div label-notice" data-gzlog="tracking_type=click&eventid=1112123400000001">
                        <span class="label-box-car">0过户</span>
                    </div>
                    <div class="carmaster-price">车主报价<span class="number-price">4.99万</span>
                        <span class="tax-car">新车含税12.90万</span>
                        <i class="tip-icon j-new-car-price-notice" data-gzlog="tracking_type=click&eventid=0220050000099070"></i>
                    </div>
                </div>
                <div class="loanbox loanbox-b">
                    <span class="icon-man"></span>
                    <a class="loan-title" href="http://m.jr.guazi.com/sjz/loan/2478908?jr_from=detailpage&platform=wap" data-gzlog="tracking_type=click&eventid=1112123400000003">
                    <span class="loan-payment"><em>1.5万</em>开回家</span>
                <span class="fr">详情</span>
            </a>
                </div>
                <div class="loan-limit">
                    <i class="money-icon"></i>
                    <p class="limit-num">最高<em>50万</em>贷款额度</p>
                    <a href="http://m.jr.guazi.com/loan_v2/webank_pre_apply?platform=wap&from=wap_v4_index" data-gzlog="tracking_type=click&eventid=0220050000099074" class="loan-limit-num">测测额度</a>
                </div>
                <div class="blank" style="margin: .06rem 0;"></div>
                <div class="serverbox">
                    <a href="/sjz/detailFaq?act=serviceInfo&clue_id=16023691" class="column-head" data-gzlog="tracking_type=click&eventid=1112123456000011">
                        <div class="column-title">服务保障<span class="small-time">（服务费3500元，最低服务费）</span></div>
                    </a>
                    <div class="server-tab">
                        <ul class="s-tabtit" id="tabTit">
                            <li class="on" data-gzlog="tracking_type=click&eventid=1112123456000001"><span class="icon-triangle"></span><span class="icon-1"></span>
                                <p>售后保障</p>
                            </li>
                            <li class="" data-gzlog="tracking_type=click&eventid=1112123456000003"><span class="icon-triangle"></span><span class="icon-2"></span>
                                <p>14天可退</p>
                            </li>
                            <li class="" data-gzlog="tracking_type=click&eventid=1112123456000005"><span class="icon-triangle"></span><span class="icon-3"></span>
                                <p>259项检测</p>
                            </li>
                            <li class="" data-gzlog="tracking_type=click&eventid=1112123456000009"><span class="icon-triangle"></span><span class="icon-5"></span>
                                <p>优质个人车</p>
                            </li>
                        </ul>
                        <div class="s-tabcon" id="tabCon">
                            <div class="on">
                                <a href="/sjz/detailFaq?act=serviceInfo&clue_id=16023691" data-gzlog="tracking_type=click&eventid=1112123456000002">
                                    <ul class="saleafter">
                                        <li>3.71万
                                            <p>最高赔付额</p>
                                        </li>
                                        <li>12大系统
                                            <p>保障范围</p>
                                        </li>
                                        <li>1年2万公里
                                            <p>保障期限里程</p>
                                        </li>
                                    </ul>
                                </a>
                            </div>
                            <div class="">
                                <a href="/sjz/detailFaq?act=serviceInfo&clue_id=16023691#tui" data-gzlog="tracking_type=click&eventid=1112123456000004">
                        <strong class="b-t">重大事故车14天可退</strong><p class="s-t">买到问题车也不怕</p>
                    </a>
                            </div>
                            <div class="">
                                <a href="/sjz/detailFaq?act=serviceInfo&clue_id=16023691#test" data-gzlog="tracking_type=click&eventid=1112123456000006">
                        <strong class="b-t">上架前259项检测，过户前深度复检</strong><p class="s-t">精选安全放心车</p>
                    </a>
                            </div>
                            <div class="">
                                <a href="/sjz/detailFaq?act=serviceInfo&clue_id=16023691#percent" data-gzlog="tracking_type=click&eventid=1112123456000010">
                        <strong class="b-t">个人卖给个人，无中间商赚差价</strong><p class="s-t">买家少花钱</p>
                    </a>
                            </div>
                        </div>
                        <script type="text/javascript">
                        $(document).ready(function() {
                            $("#tabTit li").click(function() {
                                var index = $(this).index();
                                $(this).addClass("on").siblings().removeClass();
                                $("#tabCon>div").eq(index).addClass('on').siblings().removeClass();
                            })
                        })
                        </script>
                    </div>
                </div>
                <div class="column base-info" data-widget="app/che/c2c/detail_page_v2.js#showNotice">
                    <a href="javascript:;" class="column-head">
                        <div class="column-title">基本信息</div>
                    </a>
                    <ul class="mod-base showNotice">
                        <li>
                            <span>表显里程</span>
                            <p>10.3万公里</p>
                        </li>
                        <li>
                            <span>上牌地</span>
                            <p>石家庄</p>
                        </li>
                        <li>
                            <span>变速箱</span>
                            <p>手动</p>
                        </li>
                        <li>
                            <span>过户次数</span>
                            <p>0</p>
                        </li>
                        <li>
                            <span>排放标准</span>
                            <p> 国四<i class="tip-icon pf-notice" data-gzlog="tracking_type=click&eventid=1112123400000004"></i>
                            </p>
                        </li>
                        <li>
                            <span>排量</span>
                            <p>1.6</p>
                        </li>
                        <li>
                            <span>看车地址</span>
                            <p>正定</p>
                        </li>
                        <li>
                            <span>上牌时间</span>
                            <p>2010-12</p>
                        </li>
                    </ul>
                    <div class="btn-check">
                        <a href="javaScript:;" data-gzlog="tracking_type=click&eventid=1112123400000005" class="j-show-second-conf">查看车辆详细信息</a>
                    </div>
                </div>
                <div class="diverman-say">
                    <a href="javascript:;" class="column-head">
                        <div class="column-title">车主介绍</div>
                    </a>
                    <div class="diverman">
                        <div class="pgs-con">
                            <div class="pgs-photo">
                                <img src="picture/girl.png" alt="">
                            </div>
                            <a class="ask-car" href="javascript:void(0);" data-gzlog="tracking_type=click&eventid=0220050000099057&carid=16023691&tel_400=4000594055" data-callcs="call_phone=4006306353&car_id=16023691">咨询看车</a>
                            <span>车主王女士</span>
                            <p>职业-个体</p>
                        </div>
                    </div>
                    <div class="prob-list">
                        <li><a href="javascript:;">城市道路行驶</a></li>
                        <li><a href="javascript:;">日常家用</a></li>
                        <li><a href="javascript:;">修理厂保养</a></li>
                        <li><a href="javascript:;">换二手车</a></li>
                        <li><a href="javascript:;">电动天窗</a></li>
                        <li><a href="javascript:;">皮质座椅</a></li>
                        <li><a href="javascript:;">倒车雷达</a></li>
                    </div>
                </div>
                <!-- 检测报告 -->
                <div class="column report">
                    <div class="report-page">
                        <a href="javaScript:;" class="column-head j-show-report">
                            <div class="column-title">检测报告</div>
                        </a>
                        <div class="rz-bg">
                            <i class="icon-rz"></i>
                            <p class="prominent-title">259项专业检测</p>
                            <p class="pro-cen">瓜子要求认证二手车源必须达到以下标准</p>
                            <ul class="pro-list">
                                <li>
                                    <i class="icon-1"></i>
                                    <p>无重大事故</p>
                                </li>
                                <li>
                                    <i class="icon-2"></i>
                                    <p>无火烧事故</p>
                                </li>
                                <li>
                                    <i class="icon-3"></i>
                                    <p>无泡水事故</p>
                                </li>
                            </ul>
                            <div class="carsaytit">
                                <div class="pgs-photo">
                                    <img src="picture/v2_gz_head.png" alt="">
                                </div>
                                <div class="pgs-con">
                                    <a class="ask-car" href="javascript:void(0);" data-gzlog="tracking_type=click&eventid=0000010000000001&carid=16023691&tel_400=4000594055" data-callcs="call_phone=4006306353&car_id=16023691" id="wap_detail_report_free_call">咨询车况</a>
                                    <p class="appraiser-tit">高级车辆评估师</p>
                                </div>
                            </div>
                            <p class="report-content">经检测，此车正常保养，上下班代步，车无事故，火烧，泡水，打算换个车，喜欢的抓紧预约吧</p>
                            <p class="rep-notice">※以上为评估师验车时车况，交易前会深度复检</p>
                        </div>
                    </div>
                    <ul class="report-list">
                        <li data-position="#detail_accident">
                            <a href="javascript:;" data-gzlog="tracking_type=click&eventid=1112123400999903&filter=detail_accident">
                    <i class="icon-1"></i>
                    <span>事故排查</span>
                    <div>
                        <span class="normal">37项</span>
                                                <span class="unnormal">1项</span>
                                            </div>
                </a>
                        </li>
                        <li data-position="#detail_core">
                            <a href="javascript:;" data-gzlog="tracking_type=click&eventid=1112123400999904&filter=detail_core">
                    <i class="icon-2"></i>
                    <span>核心功能</span>
                    <div>
                        <span class="normal">18项</span>
                                            </div>
                </a>
                        </li>
                        <li data-position="#detail_function">
                            <a href="javascript:;" data-gzlog="tracking_type=click&eventid=1112123400999905&filter=detail_function">
                    <i class="icon-3"></i>
                    <span>常用功能</span>
                    <div>
                        <span class="normal">67项</span>
                                                <span class="unnormal">1项</span>
                                            </div>
                </a>
                        </li>
                        <li data-position="#detail_start">
                            <a href="javascript:;" data-gzlog="tracking_type=click&eventid=1112123400999906&filter=detail_start">
                    <i class="icon-4"></i>
                    <span>启动检测</span>
                    <div>
                        <span class="normal">10项</span>
                                            </div>
                </a>
                        </li>
                        <li data-position="#detail_surface">
                            <a href="javascript:;" data-gzlog="tracking_type=click&eventid=1112123400999907&filter=detail_surface">
                    <i class="icon-5"></i>
                    <span>外观内饰</span>
                    <div>
                        <span class="normal">127项</span>
                                                <span class="unnormal">11项</span>
                                            </div>
                </a>
                        </li>
                    </ul>
                    <div class="report-img">
                        <!--图片列表（针对ios设备适配retina屏幕）-->
                        <ul class="re-tab">
                            <li class="active" data-gzlog="tracking_type=click&eventid=1112123400999908">外观</li>
                            <li class="" data-gzlog="tracking_type=click&eventid=1112123400999908">内饰</li>
                        </ul>
                        <ul class="d-tab active">
                            <li class="d-tab-3d active" data-gzlog="tracking_type=click&eventid=0220050000099076">3D预览</li>
                            <li class="d-tab-2d " data-gzlog="tracking_type=click&eventid=0220050000099077">2D预览</li>
                        </ul>
                        <div class="j-outer j-container active">
                            <!-- 外观 -->
                            <div class="car-thrD-show j-d-tab-3d j-detail-car-thrD-show active">
                                <div class="thrD-cars j-3d-car">
                                    <canvas class="thrD-cars-canvas" width="500" height="313"></canvas>
                                </div>
                                <div class="thrD-ellipse">
                                    <div class="thrD-ellipse-node left-two"></div>
                                    <div class="thrD-ellipse-node-text left-two">背面</div>
                                    <div class="thrD-ellipse-node left-one"></div>
                                    <div class="thrD-ellipse-node-text left-one">左侧</div>
                                    <div class="thrD-ellipse-node middle"></div>
                                    <div class="thrD-ellipse-node-text middle">左前45°</div>
                                    <div class="thrD-ellipse-node right-one"></div>
                                    <div class="thrD-ellipse-node-text right-one">正面</div>
                                    <div class="thrD-ellipse-node right-two"></div>
                                    <div class="thrD-ellipse-node-text right-two">右侧</div>
                                    <div class="thrD-ellipse-slider" data-gzlog="tracking_type=roll&eventid=0220050000099078"></div>
                                </div>
                            </div>
                            <div class="re-con j-d-tab-2d ">
                                <div class="out-bg">
                                    <div class="dotted active j-dotted">
                                        <span class="dot" style="left:89.8%; top:54.4%"><i class="j-dotted-item-i on"></i></span>
                                        <span class="dot" style="left:62.2%; top:40.0%"><i class="j-dotted-item-i "></i></span>
                                    </div>
                                    <ul class="areabox">
                                        <!-- +active 显示问题模块 -->
                                        <div class="j-paint j-areabox-item ">
                                            <li class="hood active"></li>
                                            <li class="door_rr active"></li>
                                            <li class="door_rl active"></li>
                                            <li class="door_fl active"></li>
                                        </div>
                                        <div class="j-sheetMetal j-areabox-item ">
                                            <li class="fender_fr active"></li>
                                            <li class="fender_fl active"></li>
                                        </div>
                                        <div class="j-replacement j-areabox-item ">
                                            <li class="head_save active"></li>
                                            <li class="door_fr active"></li>
                                            <li class="foot_save active"></li>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-list">
                                <span data-gzlog="tracking_type=click&eventid=1112123400999909" class="active j-tab-item ">缺陷部件<i>2</i></span>
                                <span data-gzlog="tracking_type=click&eventid=1112123400999910" class="  j-tab-item">漆面修复<i>4</i></span>
                                <span data-gzlog="tracking_type=click&eventid=1112123400999911" class="  j-tab-item">钣金修复<i>2</i></span>
                                <span data-gzlog="tracking_type=click&eventid=1112123400999912" class="  j-tab-item">外观件更换<i>3</i></span>
                            </div>
                            <div class="report-thumb active">
                                <div class="thumb-houseimg-box imgBanner carImages" data-loop="noloop" data-interval="3000">
                                    <ul class="slide-area thumbImgScroll" data-role="list" style="-webkit-transition: 0ms; transition: 0ms; -webkit-transform: translate3d(0px, 0, 0);">
                                        <li data-role="item" data-type="划痕">
                                            <a data-gzlog="tracking_type=click&eventid=0320300000000149" href="/sjz/picture/?pic=largePicture&n=30&postid=16023691">
                                    <img src="picture/qn1708181614294626dd62db42bd311ae7a72a76c8cb3a.jpg"
                                         data-big-image="https://image1.guazistatic.com/qn1708181614294626dd62db42bd311ae7a72a76c8cb3a.jpg?imageView2/2/w/750/q/88">
                                </a>
                                        </li>
                                        <li data-role="item" data-type="破损">
                                            <a data-gzlog="tracking_type=click&eventid=0320300000000149" href="/sjz/picture/?pic=largePicture&n=31&postid=16023691">
                                    <img src="picture/qn170818161429a47bf804f9ac28239c1c20dd40ae9a04.jpg"
                                         data-big-image="https://image1.guazistatic.com/qn170818161429a47bf804f9ac28239c1c20dd40ae9a04.jpg?imageView2/2/w/750/q/88">
                                </a>
                                        </li>
                                    </ul>
                                    <!--图片序号-->
                                    <span class="thumb-img-num"><i data-role="index" class="j-pic-index">1</i>/<i class="thumb-count">2</i></span>
                                </div>
                            </div>
                            <!-- /外观 -->
                        </div>
                        <div class="j-inner j-container  ">
                            <!-- 内饰 -->
                            <div class="re-con active">
                                <div class="carin-bg">
                                    <div class="dotted j-dotted active">
                                    </div>
                                </div>
                                <div class="tab-list active">
                                    <span data-gzlog="tracking_type=click&eventid=1112123400999909" class="all-yes j-tab-item active">缺陷部件<i>无</i></span>
                                </div>
                            </div>
                            <!-- /内饰 -->
                        </div>
                    </div>
                    <div class="btn-check j-show-report" data-gzlog="tracking_type=click&eventid=1112123400999913"><a href="javaScript:;">查看详细检测报告</a></div>
                </div>
                <!-- 常见问题 start -->
                <div class="column problems" id="faq-column-head">
                    <div class="column-head faq-column-head">
                        <div class="column-title">常见问题</div>
                    </div>
                    <ul class="prob-list clearfix">
                        <li><a href="javaScript:;" data-gzlog="tracking_type=click&eventid=1112123400000006" class="j-show-faq">服务费怎么算</a></li>
                        <li><a href="javaScript:;" data-gzlog="tracking_type=click&eventid=1112123400000007" class="j-show-faq">可否贷款</a></li>
                        <li><a href="javaScript:;" data-gzlog="tracking_type=click&eventid=1112123400000008" class="j-show-faq">牌照能过户吗</a></li>
                        <li><a href="javaScript:;" data-gzlog="tracking_type=click&eventid=1112123400000009" class="j-show-faq" data-scrollPosition="2">车辆怎么过户</a></li>
                        <li><a href="javaScript:;" data-gzlog="tracking_type=click&eventid=1112123400000010" class="j-show-faq" data-scrollPosition="1">保险怎么办</a></li>
                        <li><a href="javaScript:;" data-gzlog="tracking_type=click&eventid=1112123400000011" class="j-show-faq" data-scrollPosition="1">车况真实吗</a></li>
                    </ul>
                </div>
                <!-- 常见问题 end -->
                <!-- 同车系成交记录 -->
                <div class="column product-picture line-list">
                    <div class="column-head">
                        <div class="column-title">同车系成交记录</div>
                    </div>
                    <div class="column-body">
                        <ul class="list">
                            <li class="list-item">
                                <a class="car-info" href="javascript:;">
                                    <div class="car-img">
                                        <img class="js-lazy-load" src="picture/qn17041210355105d5fb78082433f5944582b6d8d4a842.jpg" alt="#">
                                        <div class="label-time">2017.05.29售出</div>
                                    </div>
                                    <h3 class="car-name">大众宝来 2011款 1.6L 手动舒适型</h3>
                                    <div class="car-km">
                                        <span class="fl">2011年/3.2万公里</span>
                                    </div>
                                    <div class="car-price">
                                        <span class="deal-price"><span class="fz-type">成交价</span><strong>?万</strong></span>
                                    </div>
                                </a>
                            </li>
                            <li class="list-item">
                                <a class="car-info" href="javascript:;">
                                    <div class="car-img">
                                        <img class="js-lazy-load" src="picture/4c7cf08962d3be100f833236a9e0067f.jpg@base@tag=imgscale&w=280&h=180&c=1&m=2&q=88" alt="#">
                                        <div class="label-time">2016.12.09售出</div>
                                    </div>
                                    <h3 class="car-name">大众宝来 2011款 宝来 1.6 手动 舒适版</h3>
                                    <div class="car-km">
                                        <span class="fl">2011年/4.8万公里</span>
                                    </div>
                                    <div class="car-price">
                                        <span class="deal-price"><span class="fz-type">成交价</span><strong>?万</strong></span>
                                    </div>
                                </a>
                            </li>
                            <li class="list-item">
                                <a class="car-info" href="javascript:;">
                                    <div class="car-img">
                                        <img class="js-lazy-load" src="picture/30968330e51166c8c9ba456688bfc99c.jpg@base@tag=imgscale&w=280&h=180&c=1&m=2&q=88" alt="#">
                                        <div class="label-time">2016.10.18售出</div>
                                    </div>
                                    <h3 class="car-name">大众宝来 2011款 宝来 1.6 手动 舒适版</h3>
                                    <div class="car-km">
                                        <span class="fl">2011年/4.7万公里</span>
                                    </div>
                                    <div class="car-price">
                                        <span class="deal-price"><span class="fz-type">成交价</span><strong>?万</strong></span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <div class="app-btn j-deal-downLoad" data-downLoad-url="https://m.guazi.com/misc/guaziapp/?ca_s=self&ca_n=cjjlyl&scode=10101342121&from=guazi" data-gzlog="tracking_type=click&eventid=1112111222333001">
                            <a href="javascript:;">打开APP查看完整成交记录</a>
                        </div>
                    </div>
                </div>
                <!-- 同车系成交记录 end -->
                <!-- 猜你喜欢 -->
                <div class="column product-picture line-list j-recommend-show">
                    <div class="column-head">
                        <div class="column-title">猜你喜欢</div>
                    </div>
                    <div class="column-body">
                        <ul class="list">
                            <li class="list-item">
                                <a href="/sjz/3001703088x/?fr_page=detail&fr_pos=rec&fr_no=0" class="car-info" data-gzlog="tracking_type=click&eventid=0330230000000152&caridsc=12788642@0">
                                    <div class="car-img">
                                        <img class="js-lazy-load" src="picture/qn1705301820035c9b003c3fe2a6c2e3171291504e4570.jpg" />
                                    </div>
                                    <h3 class="car-name">雪佛兰科鲁兹 2010款 1.6L SL天地版 MT</h3>
                                    <div class="car-km">
                                        <span class="fl">2011年/10.1万公里/手动</span>
                                        <!-- <em>2011年</em>
                            <em>10.1万公里</em>
                            <em>手动</em> -->
                                    </div>
                                    <div class="car-price"><strong class="fl">4.6<span>万元</span></strong></div>
                                </a>
                            </li>
                            <li class="list-item">
                                <a href="/sjz/3002182234x/?fr_page=detail&fr_pos=rec&fr_no=1" class="car-info" data-gzlog="tracking_type=click&eventid=0330230000000152&caridsc=15968791@1">
                                    <div class="car-img">
                                        <img class="js-lazy-load" src="picture/qn170817161841a6a85eb6fd60112df936445a68d903cd.jpg" />
                                    </div>
                                    <h3 class="car-name">斯柯达明锐 2010款 1.6L 手动逸致版</h3>
                                    <div class="car-km">
                                        <span class="fl">2011年/10.1万公里/手动</span>
                                        <!-- <em>2011年</em>
                            <em>10.1万公里</em>
                            <em>手动</em> -->
                                    </div>
                                    <div class="car-price"><strong class="fl">5.1<span>万元</span></strong></div>
                                </a>
                            </li>
                            <li class="list-item">
                                <a href="/sjz/3002188890x/?fr_page=detail&fr_pos=rec&fr_no=2" class="car-info" data-gzlog="tracking_type=click&eventid=0330230000000152&caridsc=16022614@2">
                                    <div class="car-img">
                                        <img class="js-lazy-load" src="picture/qn17081817110202ff754dd73f4ee26c6f6656879d2340.jpg" />
                                    </div>
                                    <h3 class="car-name">马自达3 2012款 1.6L 手动经典标准型</h3>
                                    <div class="car-km">
                                        <span class="fl">2012年/6.7万公里/手动</span>
                                        <!-- <em>2012年</em>
                            <em>6.7万公里</em>
                            <em>手动</em> -->
                                    </div>
                                    <div class="car-price"><strong class="fl">5.1<span>万元</span></strong></div>
                                </a>
                            </li>
                            <li class="list-item">
                                <a href="/sjz/3002193656x/?fr_page=detail&fr_pos=rec&fr_no=3" class="car-info" data-gzlog="tracking_type=click&eventid=0330230000000152&caridsc=16046024@3">
                                    <div class="car-img">
                                        <img class="js-lazy-load" src="picture/qn170819145127a21947a0724850e7a3f65ad4f8bf225b.jpg" />
                                    </div>
                                    <h3 class="car-name">大众桑塔纳志俊 2008款 1.8L手动 实用型</h3>
                                    <div class="car-km">
                                        <span class="fl">2011年/6.3万公里/手动</span>
                                        <!-- <em>2011年</em>
                            <em>6.3万公里</em>
                            <em>手动</em> -->
                                    </div>
                                    <div class="car-price"><strong class="fl">4.5<span>万元</span></strong></div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <input type="hidden" value="12788642@0_15968791@1_16022614@2_16046024@3" id="recommendCarIds" />
                </div>
                <div class="drag-up-more">
                    <div class="drag-up-more-content">
                        上拉查看图文详情
                    </div>
                    <div class="drag-up-more-arrow">
                        <div class="drag-up-more-arrowChild"></div>
                    </div>
                </div>
                <!--<div class="drag-more">-->
                <!--继续拖动，查看图文详情-->
                <!--</div>-->
            </div>
            <input type="hidden" value="1" id="isBianlianPro" />
            <div id="chekuang" class="layout-item">
                <section class="column report-info">
                    <p>
                        <span class="re-car-name">大众宝来 2011款 1.6L 手动舒适型</span>
                    </p>
                    <p>
                        <span class="re-tit">评估结论：</span>
                        <span class="report-con">经检测，此车正常保养，上下班代步，车无事故，火烧，泡水，打算换个车，喜欢的抓紧预约吧</span>
                    </p>
                </section>
                <section class="column report-detail" id="detail_accident">
                    <div class="column-head">
                        <div class="column-title">事故排查</div>
                    </div>
                    <div class="re-desc">
                    </div>
                    <div class="mod-re-lists showNotice">
                        <div class="re-list active j-re-list">
                            <a href="javaScript:;">
                                <p>事故排查</p>
                                <div>
                                    <span>31项目</span>
                                    <i class="r-unormal">
                            1项异常</i>
                                </div>
                            </a>
                            <!-- 隐藏的弹层 -->
                            <div class="re-depoly">
                                <ul>
                                    <li class="li-normal">左前大灯框架
                                        <i></i></li>
                                    <li class="li-normal">右前大灯框架
                                        <i></i></li>
                                    <li class="li-normal">左前翼子板内衬
                                        <i></i></li>
                                    <li class="li-normal">右前翼子板内衬
                                        <i></i></li>
                                    <li class="li-normal">左前减震器座
                                        <i></i></li>
                                    <li class="li-normal">右前减震器座
                                        <i></i></li>
                                    <li class="li-normal">左前纵梁
                                        <i></i></li>
                                    <li class="li-normal">右前纵梁
                                        <i></i></li>
                                    <li class="li-normal">防火墙
                                        <i></i></li>
                                    <li class="li-normal">右A柱
                                        <i></i></li>
                                    <li class="li-normal">右B柱
                                        <i></i></li>
                                    <li class="li-normal">右侧顶边梁
                                        <i></i></li>
                                    <li class="li-normal">右C柱
                                        <i></i></li>
                                    <li class="li-normal">右D柱
                                        <i></i></li>
                                    <li class="li-unormal">右侧底边梁
                                        <span>钣金(15-50cm²)</span><i></i></li>
                                    <li class="li-normal">右侧驾驶舱底板
                                        <i></i></li>
                                    <li class="li-normal">右侧尾灯框架
                                        <i></i></li>
                                    <li class="li-normal">右后翼子板内衬
                                        <i></i></li>
                                    <li class="li-normal">左侧尾灯框架
                                        <i></i></li>
                                    <li class="li-normal">左后翼子板内衬
                                        <i></i></li>
                                    <li class="li-normal">后围板
                                        <i></i></li>
                                    <li class="li-normal">后备箱底板
                                        <i></i></li>
                                    <li class="li-normal">右后纵梁
                                        <i></i></li>
                                    <li class="li-normal">左后纵梁
                                        <i></i></li>
                                    <li class="li-normal">左D柱
                                        <i></i></li>
                                    <li class="li-normal">左C柱
                                        <i></i></li>
                                    <li class="li-normal">左侧顶边梁
                                        <i></i></li>
                                    <li class="li-normal">左B柱
                                        <i></i></li>
                                    <li class="li-normal">左A柱
                                        <i></i></li>
                                    <li class="li-normal">左侧底边梁
                                        <i></i></li>
                                    <li class="li-normal">左侧驾驶舱底板
                                        <i></i></li>
                                </ul>
                            </div>
                            <!-- 隐藏的弹层 end-->
                        </div>
                        <div class="re-list  j-re-list">
                            <a href="javaScript:;">
                                <p>泡水排查</p>
                                <div>
                                    <span>7项目</span>
                                    <i class="r-normal">
                            全部正常</i>
                                </div>
                            </a>
                            <!-- 隐藏的弹层 -->
                            <div class="re-depoly">
                                <ul>
                                    <li class="li-normal">机舱保险盒
                                        <i></i></li>
                                    <li class="li-normal">座椅滑轨及固定螺丝
                                        <i></i></li>
                                    <li class="li-normal">车内线束
                                        <i></i></li>
                                    <li class="li-normal">安全带底部
                                        <i></i></li>
                                    <li class="li-normal">全车座椅座垫
                                        <i></i></li>
                                    <li class="li-normal">全车地毯地胶
                                        <i></i></li>
                                    <li class="li-normal">烟灰缸底座
                                        <i></i></li>
                                </ul>
                            </div>
                            <!-- 隐藏的弹层 end-->
                        </div>
                        <div class="re-list  j-re-list">
                            <a href="javaScript:;">
                                <p>火烧排查</p>
                                <div>
                                    <span>2项目</span>
                                    <i class="r-normal">
                            全部正常</i>
                                </div>
                            </a>
                            <!-- 隐藏的弹层 -->
                            <div class="re-depoly">
                                <ul>
                                    <li class="li-normal">防火墙隔音棉
                                        <i></i></li>
                                    <li class="li-normal">发动机主线束
                                        <i></i></li>
                                </ul>
                            </div>
                            <!-- 隐藏的弹层 end-->
                        </div>
                    </div>
                </section>
                <section class="column report-detail" id="detail_core">
                    <div class="column-head">
                        <div class="column-title">核心功能</div>
                    </div>
                    <div class="re-desc">
                    </div>
                    <div class="mod-re-lists showNotice">
                        <div class="re-list  j-re-list">
                            <a href="javaScript:;">
                                <p>机舱项</p>
                                <div>
                                    <span>15项目</span>
                                    <i class="r-normal">
                            全部正常</i>
                                </div>
                            </a>
                            <!-- 隐藏的弹层 -->
                            <div class="re-depoly">
                                <ul>
                                    <li class="li-normal">发动机油底壳
                                        <i></i></li>
                                    <li class="li-normal">防冻液液面
                                        <i></i></li>
                                    <li class="li-normal">机油液面
                                        <i></i></li>
                                    <li class="li-normal">变速箱总成
                                        <i></i></li>
                                    <li class="li-normal">发动机总成
                                        <i></i></li>
                                    <li class="li-normal">电瓶（极柱）
                                        <i></i></li>
                                    <li class="li-normal">制动油壶
                                        <i></i></li>
                                    <li class="li-normal">助力油壶
                                        <i></i></li>
                                    <li class="li-normal">转向助力泵
                                        <i></i></li>
                                    <li class="li-normal">水箱水管
                                        <i></i></li>
                                    <li class="li-normal">水箱
                                        <i></i></li>
                                    <li class="li-normal">冷凝器
                                        <i></i></li>
                                    <li class="li-normal">发动机外围皮带
                                        <i></i></li>
                                    <li class="li-normal">发动机缸垫
                                        <i></i></li>
                                    <li class="li-normal">变速箱油底壳
                                        <i></i></li>
                                </ul>
                            </div>
                            <!-- 隐藏的弹层 end-->
                        </div>
                        <div class="re-list  j-re-list">
                            <a href="javaScript:;">
                                <p>底盘悬架项</p>
                                <div>
                                    <span>4项目</span>
                                    <i class="r-normal">
                            全部正常</i>
                                </div>
                            </a>
                            <!-- 隐藏的弹层 -->
                            <div class="re-depoly">
                                <ul>
                                    <li class="li-normal">左前减震器
                                        <i></i></li>
                                    <li class="li-normal">右前减震器
                                        <i></i></li>
                                    <li class="li-normal">右后减震器
                                        <i></i></li>
                                    <li class="li-normal">左后减震器
                                        <i></i></li>
                                </ul>
                            </div>
                            <!-- 隐藏的弹层 end-->
                        </div>
                    </div>
                </section>
                <section class="column report-detail" id="detail_function">
                    <div class="column-head">
                        <div class="column-title">常用功能</div>
                    </div>
                    <div class="re-desc">
                    </div>
                    <div class="mod-re-lists showNotice">
                        <div class="re-list  j-re-list">
                            <a href="javaScript:;">
                                <p>安全系统</p>
                                <div>
                                    <span>24项目</span>
                                    <i class="r-normal">
                            全部正常</i>
                                </div>
                            </a>
                            <!-- 隐藏的弹层 -->
                            <div class="re-depoly">
                                <ul>
                                    <li class="li-normal">车身稳定系统故障灯
                                        <i></i></li>
                                    <li class="li-normal">驾驶座安全气囊
                                        <i></i></li>
                                    <li class="li-normal">副驾驶安全气囊
                                        <i></i></li>
                                    <li class="li-notest">前排侧气囊
                                        <i></i></li>
                                    <li class="li-notest">后排侧气囊
                                        <i></i></li>
                                    <li class="li-notest">前排头部气囊
                                        <i></i></li>
                                    <li class="li-notest">后排头部气囊
                                        <i></i></li>
                                    <li class="li-notest">胎压监测
                                        <i></i></li>
                                    <li class="li-normal">中控锁
                                        <i></i></li>
                                    <li class="li-notest">儿童座椅接口
                                        <i></i></li>
                                    <li class="li-notest">无钥匙启动
                                        <i></i></li>
                                    <li class="li-notest">无钥匙进入系统
                                        <i></i></li>
                                    <li class="li-normal">遥控钥匙
                                        <i></i></li>
                                    <li class="li-normal">防抱死系统(ABS)
                                        <i></i></li>
                                    <li class="li-notest">车身稳定控制(ESP)
                                        <i></i></li>
                                    <li class="li-notest">电子驻车制动
                                        <i></i></li>
                                    <li class="li-normal">左前轮毂
                                        <i></i></li>
                                    <li class="li-normal">左前轮胎
                                        <i></i></li>
                                    <li class="li-normal">右前轮毂
                                        <i></i></li>
                                    <li class="li-normal">右前轮胎
                                        <i></i></li>
                                    <li class="li-normal">右后轮毂
                                        <i></i></li>
                                    <li class="li-normal">右后轮胎
                                        <i></i></li>
                                    <li class="li-normal">左后轮毂
                                        <i></i></li>
                                    <li class="li-normal">左后轮胎
                                        <i></i></li>
                                </ul>
                            </div>
                            <!-- 隐藏的弹层 end-->
                        </div>
                        <div class="re-list active j-re-list">
                            <a href="javaScript:;">
                                <p>外部配置</p>
                                <div>
                                    <span>14项目</span>
                                    <i class="r-unormal">
                            1项异常</i>
                                </div>
                            </a>
                            <!-- 隐藏的弹层 -->
                            <div class="re-depoly">
                                <ul>
                                    <li class="li-unormal">前挡风玻璃
                                        <span>破损</span><i></i></li>
                                    <li class="li-normal">后挡风玻璃
                                        <i></i></li>
                                    <li class="li-notest">全景天窗
                                        <i></i></li>
                                    <li class="li-notest">感应雨刷
                                        <i></i></li>
                                    <li class="li-notest">后雨刷
                                        <i></i></li>
                                    <li class="li-normal">前电动车窗
                                        <i></i></li>
                                    <li class="li-normal">后电动车窗
                                        <i></i></li>
                                    <li class="li-normal">后视镜电动调节
                                        <i></i></li>
                                    <li class="li-notest">后视镜电动折叠
                                        <i></i></li>
                                    <li class="li-notest">后视镜加热
                                        <i></i></li>
                                    <li class="li-notest">电动吸合门
                                        <i></i></li>
                                    <li class="li-notest">后排侧遮阳帘
                                        <i></i></li>
                                    <li class="li-notest">感应后备箱
                                        <i></i></li>
                                    <li class="li-normal">电动天窗
                                        <i></i></li>
                                </ul>
                            </div>
                            <!-- 隐藏的弹层 end-->
                        </div>
                        <div class="re-list  j-re-list">
                            <a href="javaScript:;">
                                <p>内部配置</p>
                                <div>
                                    <span>14项目</span>
                                    <i class="r-normal">
                            全部正常</i>
                                </div>
                            </a>
                            <!-- 隐藏的弹层 -->
                            <div class="re-depoly">
                                <ul>
                                    <li class="li-normal">皮质座椅
                                        <i></i></li>
                                    <li class="li-notest">前排座椅加热
                                        <i></i></li>
                                    <li class="li-notest">座椅通风
                                        <i></i></li>
                                    <li class="li-notest">驾驶座座椅电动调节
                                        <i></i></li>
                                    <li class="li-notest">多功能方向盘
                                        <i></i></li>
                                    <li class="li-normal">定速巡航
                                        <i></i></li>
                                    <li class="li-notest">GPS导航
                                        <i></i></li>
                                    <li class="li-normal">倒车雷达
                                        <i></i></li>
                                    <li class="li-notest">倒车影像系统
                                        <i></i></li>
                                    <li class="li-normal">手动空调
                                        <i></i></li>
                                    <li class="li-notest">自动空调
                                        <i></i></li>
                                    <li class="li-notest">HUD抬头显示
                                        <i></i></li>
                                    <li class="li-notest">后排座椅加热
                                        <i></i></li>
                                    <li class="li-normal">空调系统
                                        <i></i></li>
                                </ul>
                            </div>
                            <!-- 隐藏的弹层 end-->
                        </div>
                        <div class="re-list  j-re-list">
                            <a href="javaScript:;">
                                <p>灯光系统</p>
                                <div>
                                    <span>15项目</span>
                                    <i class="r-normal">
                            全部正常</i>
                                </div>
                            </a>
                            <!-- 隐藏的弹层 -->
                            <div class="re-depoly">
                                <ul>
                                    <li class="li-normal">近光灯
                                        <i></i></li>
                                    <li class="li-normal">远光灯
                                        <i></i></li>
                                    <li class="li-normal">前转向灯
                                        <i></i></li>
                                    <li class="li-normal">前雾灯
                                        <i></i></li>
                                    <li class="li-normal">后转向灯
                                        <i></i></li>
                                    <li class="li-normal">刹车灯
                                        <i></i></li>
                                    <li class="li-normal">倒车灯
                                        <i></i></li>
                                    <li class="li-normal">后雾灯
                                        <i></i></li>
                                    <li class="li-normal">室内顶灯
                                        <i></i></li>
                                    <li class="li-notest">氙气大灯
                                        <i></i></li>
                                    <li class="li-notest">LED大灯
                                        <i></i></li>
                                    <li class="li-notest">自动头灯
                                        <i></i></li>
                                    <li class="li-normal">前雾灯
                                        <i></i></li>
                                    <li class="li-notest">大灯高度可调
                                        <i></i></li>
                                    <li class="li-notest">大灯清洗
                                        <i></i></li>
                                </ul>
                            </div>
                            <!-- 隐藏的弹层 end-->
                        </div>
                        <div class="re-list  j-re-list">
                            <a href="javaScript:;">
                                <p>高科技配置</p>
                                <div>
                                    <span>5项目</span>
                                    <i class="r-normal">
                            全部正常</i>
                                </div>
                            </a>
                            <!-- 隐藏的弹层 -->
                            <div class="re-depoly">
                                <ul>
                                    <li class="li-notest">车道偏离预警系统
                                        <i></i></li>
                                    <li class="li-notest">自动泊车
                                        <i></i></li>
                                    <li class="li-notest">盲点辅助系统
                                        <i></i></li>
                                    <li class="li-notest">全景摄像头
                                        <i></i></li>
                                    <li class="li-notest">发动机自动启停
                                        <i></i></li>
                                </ul>
                            </div>
                            <!-- 隐藏的弹层 end-->
                        </div>
                        <div class="re-list  j-re-list">
                            <a href="javaScript:;">
                                <p>随车工具<i class="tip-icon j-tools-notice" data-gzlog="tracking_type=click&eventid=0220050000099072"></i></p>
                                <div>
                                    <span>5项目</span>
                                    <i class="r-normal">
                            全部正常</i>
                                </div>
                            </a>
                            <!-- 隐藏的弹层 -->
                            <div class="re-depoly">
                                <ul>
                                    <li class="li-normal">千斤顶
                                        <i></i></li>
                                    <li class="li-normal">灭火器
                                        <i></i></li>
                                    <li class="li-normal">三角警示牌
                                        <i></i></li>
                                    <li class="li-normal">随车工具包
                                        <i></i></li>
                                    <li class="li-normal">备胎
                                        <i></i></li>
                                </ul>
                            </div>
                            <!-- 隐藏的弹层 end-->
                        </div>
                    </div>
                </section>
                <section class="column report-detail" id="detail_start">
                    <div class="column-head">
                        <div class="column-title">启动检测</div>
                    </div>
                    <div class="re-desc">
                    </div>
                    <div class="mod-re-lists showNotice">
                        <div class="re-list  j-re-list">
                            <a href="javaScript:;">
                                <p>仪表台指示灯</p>
                                <div>
                                    <span>5项目</span>
                                    <i class="r-normal">
                            全部正常</i>
                                </div>
                            </a>
                            <!-- 隐藏的弹层 -->
                            <div class="re-depoly">
                                <ul>
                                    <li class="li-normal">调表
                                        <i></i></li>
                                    <li class="li-normal">制动系统指示灯
                                        <i></i></li>
                                    <li class="li-normal">安全气囊故障灯
                                        <i></i></li>
                                    <li class="li-normal">发动机故障灯
                                        <i></i></li>
                                    <li class="li-normal">变速箱故障灯
                                        <i></i></li>
                                </ul>
                            </div>
                            <!-- 隐藏的弹层 end-->
                        </div>
                        <div class="re-list  j-re-list">
                            <a href="javaScript:;">
                                <p>发动机状态</p>
                                <div>
                                    <span>4项目</span>
                                    <i class="r-normal">
                            全部正常</i>
                                </div>
                            </a>
                            <!-- 隐藏的弹层 -->
                            <div class="re-depoly">
                                <ul>
                                    <li class="li-normal">启动
                                        <i></i></li>
                                    <li class="li-normal">怠速
                                        <i></i></li>
                                    <li class="li-normal">发动机抖动
                                        <i></i></li>
                                    <li class="li-normal">尾气
                                        <i></i></li>
                                </ul>
                            </div>
                            <!-- 隐藏的弹层 end-->
                        </div>
                        <div class="re-list  j-re-list">
                            <a href="javaScript:;">
                                <p>变速箱及转向</p>
                                <div>
                                    <span>2项目</span>
                                    <i class="r-normal">
                            全部正常</i>
                                </div>
                            </a>
                            <!-- 隐藏的弹层 -->
                            <div class="re-depoly">
                                <ul>
                                    <li class="li-normal">变速箱挂挡
                                        <i></i></li>
                                    <li class="li-normal">转向
                                        <i></i></li>
                                </ul>
                            </div>
                            <!-- 隐藏的弹层 end-->
                        </div>
                    </div>
                </section>
                <!--图片列表（针对ios设备适配retina屏幕）-->
                <section class="column report-detail" id="detail_surface">
                    <div class="column-head">
                        <div class="column-title">外观内饰</div>
                    </div>
                    <div class="re-desc">
                    </div>
                    <div class="mod-re-lists">
                        <div class="report-img">
                            <ul class="re-tab">
                                <li class="active" data-gzlog="tracking_type=click&eventid=1112123400999908">外观</li>
                                <li class="" data-gzlog="tracking_type=click&eventid=1112123400999908">内饰</li>
                            </ul>
                            <ul class="d-tab active">
                                <li class="d-tab-3d active">3D预览</li>
                                <li class="d-tab-2d ">2D预览</li>
                            </ul>
                            <div class="j-outer j-container active">
                                <!-- 外观 -->
                                <div class="car-thrD-show j-d-tab-3d j-chekuang-car-thrD-show active">
                                    <div class="thrD-cars j-3d-car">
                                        <canvas class="thrD-cars-canvas" width="500" height="313"></canvas>
                                    </div>
                                    <div class="thrD-ellipse">
                                        <div class="thrD-ellipse-node left-two"></div>
                                        <div class="thrD-ellipse-node-text left-two">背面</div>
                                        <div class="thrD-ellipse-node left-one"></div>
                                        <div class="thrD-ellipse-node-text left-one">左侧</div>
                                        <div class="thrD-ellipse-node middle"></div>
                                        <div class="thrD-ellipse-node-text middle">左前45°</div>
                                        <div class="thrD-ellipse-node right-one"></div>
                                        <div class="thrD-ellipse-node-text right-one">正面</div>
                                        <div class="thrD-ellipse-node right-two"></div>
                                        <div class="thrD-ellipse-node-text right-two">右侧</div>
                                        <div class="thrD-ellipse-slider"></div>
                                    </div>
                                </div>
                                <div class="re-con j-d-tab-2d ">
                                    <div class="out-bg">
                                        <div class="dotted active j-dotted">
                                            <span class="dot" style="left:89.8%; top:54.4%"><i class="j-dotted-item-i on"></i></span>
                                            <span class="dot" style="left:62.2%; top:40.0%"><i class="j-dotted-item-i "></i></span>
                                        </div>
                                        <ul class="areabox">
                                            <!-- +active 显示问题模块 -->
                                            <div class="j-paint j-areabox-item ">
                                                <li class="hood active"></li>
                                                <li class="door_rr active"></li>
                                                <li class="door_rl active"></li>
                                                <li class="door_fl active"></li>
                                            </div>
                                            <div class="j-sheetMetal j-areabox-item ">
                                                <li class="fender_fr active"></li>
                                                <li class="fender_fl active"></li>
                                            </div>
                                            <div class="j-replacement j-areabox-item ">
                                                <li class="head_save active"></li>
                                                <li class="door_fr active"></li>
                                                <li class="foot_save active"></li>
                                            </div>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-list">
                                    <span data-gzlog="tracking_type=click&eventid=1112123400999909" class="active j-tab-item ">缺陷部件<i>2</i></span>
                                    <span data-gzlog="tracking_type=click&eventid=1112123400999910" class="  j-tab-item">漆面修复<i>4</i></span>
                                    <span data-gzlog="tracking_type=click&eventid=1112123400999911" class="  j-tab-item">钣金修复<i>2</i></span>
                                    <span data-gzlog="tracking_type=click&eventid=1112123400999912" class="  j-tab-item">外观件更换<i>3</i></span>
                                </div>
                                <div class="report-thumb active">
                                    <div class="thumb-houseimg-box imgBanner2 carImages" data-loop="noloop" data-interval="3000">
                                        <ul class="slide-area thumbImgScroll" data-role="list" style="-webkit-transition: 0ms; transition: 0ms; -webkit-transform: translate3d(0px, 0, 0);">
                                            <li data-role="item" data-type="划痕">
                                                <a data-gzlog="tracking_type=click&eventid=0320300000000149" href="/sjz/picture/?pic=largePicture&n=30&postid=16023691">
                                        <img src="picture/qn1708181614294626dd62db42bd311ae7a72a76c8cb3a.jpg"
                                             data-big-image="https://image1.guazistatic.com/qn1708181614294626dd62db42bd311ae7a72a76c8cb3a.jpg?imageView2/2/w/750/q/88">
                                    </a>
                                            </li>
                                            <li data-role="item" data-type="破损">
                                                <a data-gzlog="tracking_type=click&eventid=0320300000000149" href="/sjz/picture/?pic=largePicture&n=31&postid=16023691">
                                        <img src="picture/qn170818161429a47bf804f9ac28239c1c20dd40ae9a04.jpg"
                                             data-big-image="https://image1.guazistatic.com/qn170818161429a47bf804f9ac28239c1c20dd40ae9a04.jpg?imageView2/2/w/750/q/88">
                                    </a>
                                            </li>
                                        </ul>
                                        <!--图片序号-->
                                        <span class="thumb-img-num"><i data-role="index" class="j-pic-index">1</i>/<i class="thumb-count">2</i></span>
                                    </div>
                                </div>
                                <!-- /外观 -->
                            </div>
                            <div class="j-inner j-container  ">
                                <!-- 内饰 -->
                                <div class="re-con active">
                                    <div class="carin-bg">
                                        <div class="dotted j-dotted active">
                                        </div>
                                    </div>
                                    <div class="tab-list active">
                                        <span data-gzlog="tracking_type=click&eventid=1112123400999909" class="all-yes j-tab-item active">缺陷部件<i>无</i></span>
                                    </div>
                                </div>
                                <!-- /内饰 -->
                            </div>
                        </div>
                </section>
                </div>
                <div id="xiangqing" class="third-content layout-item">
                    <div class="column product-picture third-tab active">
                        <div class="column-body product-img lazyload">
                            <a href="/sjz/picture/?pic=largePicture&n=3&postid=16023691" data-gzlog="tracking_type=click&eventid=0320300000000149" class="j-scroll-save-location">
                <img class="wap_detail_image_size" data-role="lazyloadImg"
                     data-url="https://image1.guazistatic.com/qn17081816190560394a4c74ad9052d7109fcf91be672d.jpg?imageView2/1/w/750/h/500/q/88"
                     src="http://www.sjztcl.com/uploads/car/201709/images/mmexport1504749705099副本爱奇艺.jpg"/>
            </a>
                            <div class="img-textbox">
                                <span class="fl">正侧</span>
                                <span class="fr">漆面保持较好，车身结构无修复，无重大事故</span>
                            </div>
                            <a href="/sjz/picture/?pic=largePicture&n=1&postid=16023691" data-gzlog="tracking_type=click&eventid=0320300000000149" class="j-scroll-save-location">
                <img class="wap_detail_image_size" data-role="lazyloadImg"
                     data-url="https://image1.guazistatic.com/qn1708181619272a197799b2fd13a5f0abd2d2a473a6eb.jpg?imageView2/1/w/750/h/500/q/88"
                     src="http://www.sjztcl.com/uploads/car/201709/images/mmexport1504749705099副本爱奇艺.jpg"/>
            </a>
                            <div class="img-textbox">
                                <span class="fl">正前</span>
                                <span class="fr">前脸完好</span>
                            </div>
                            <a href="/sjz/picture/?pic=largePicture&n=19&postid=16023691" data-gzlog="tracking_type=click&eventid=0320300000000149" class="j-scroll-save-location">
                <img class="wap_detail_image_size" data-role="lazyloadImg"
                     data-url="https://image1.guazistatic.com/qn1708181614288a029018bd7746c477a35312a0fb1ada.jpg?imageView2/1/w/750/h/500/q/88"
                     src="picture/detail-default-img-new.png"/>
            </a>
                            <div class="img-textbox">
                                <span class="fl">前排</span>
                                <span class="fr">车身内饰干净整洁</span>
                            </div>
                            <a href="/sjz/picture/?pic=largePicture&n=20&postid=16023691" data-gzlog="tracking_type=click&eventid=0320300000000149" class="j-scroll-save-location">
                <img class="wap_detail_image_size" data-role="lazyloadImg"
                     data-url="https://image1.guazistatic.com/qn1708181614284e1c2f2112e22a6a37705cc7aa32d8dd.jpg?imageView2/1/w/750/h/500/q/88"
                     src="picture/detail-default-img-new.png"/>
            </a>
                            <div class="img-textbox">
                                <span class="fl">后排</span>
                                <span class="fr">座椅几乎无损耗</span>
                            </div>
                            <a href="/sjz/picture/?pic=largePicture&n=11&postid=16023691" data-gzlog="tracking_type=click&eventid=0320300000000149" class="j-scroll-save-location">
                <img class="wap_detail_image_size" data-role="lazyloadImg"
                     data-url="https://image1.guazistatic.com/qn1708181614284f1f9a6bada7e1d10b1b116e07537286.jpg?imageView2/1/w/750/h/500/q/88"
                     src="picture/detail-default-img-new.png"/>
            </a>
                            <div class="img-textbox">
                                <span class="fl">中控</span>
                                <span class="fr">安全指示灯正常，气囊灯被动安全项正常</span>
                            </div>
                            <a href="/sjz/picture/?pic=largePicture&n=23&postid=16023691" data-gzlog="tracking_type=click&eventid=0320300000000149" class="j-scroll-save-location">
                <img class="wap_detail_image_size" data-role="lazyloadImg"
                     data-url="https://image1.guazistatic.com/qn1708181614289542ba79ff973efade3b0e3673b28567.jpg?imageView2/1/w/750/h/500/q/88"
                     src="picture/detail-default-img-new.png"/>
            </a>
                            <div class="img-textbox">
                                <span class="fl">发动机舱</span>
                                <span class="fr">油液位及品质正常，油封不泄露，线路管无剥落</span>
                            </div>
                            <!-- 图片轮播 -->
                            <div class="thumb-houseimg-box thumb-auto" data-loop="noloop" data-interval="3000" id="carImages">
                                <!--图片列表（针对ios设备适配retina屏幕） -->
                                <ul class="slide-area" data-role="list">
                                    <li data-role="item" class="j-scroll-save-location">
                                        <a data-gzlog="tracking_type=click&eventid=0320300000000149" href="/sjz/picture/?pic=largePicture&n=30&postid=16023691">
                        <img src="picture/qn1708181614294626dd62db42bd311ae7a72a76c8cb3a.jpg">
                        </a>
                                    </li>
                                    <li data-role="item" class="j-scroll-save-location">
                                        <a data-gzlog="tracking_type=click&eventid=0320300000000149" href="/sjz/picture/?pic=largePicture&n=31&postid=16023691">
                        <img src="picture/qn170818161429a47bf804f9ac28239c1c20dd40ae9a04.jpg">
                        </a>
                                    </li>
                                </ul>
                                <!--页码-->
                                <span class="thumb-img-num"><i data-role="index">1</i>/<i id="thumb-count">2</i></span>
                            </div>
                            <!-- /图片轮播 -->
                            <div class="img-textbox">
                                <span class="fl">瑕疵</span>
                                <span class="fr">共2处</span>
                            </div>
                            <div class="btn-check">
                                <a href="/sjz/picture/?pic=largePicture&postid=16023691" data-gzlog="tracking_type=click&eventid=0310300000000148">
                查看全部<i>32</i>张图片</a>
                            </div>
                        </div>
                    </div>
                    <div class="third-tab showNotice">
                        <section class="comm-area">
                            <!-- 车辆档案 start -->
                            <div class="column car-config">
                                <div class="column-head">
                                    <div class="column-title">车辆档案</div>
                                </div>
                                <div class="column-body">
                                    <ul class="list">
                                        <li>
                                            <span>上牌时间</span>
                                            <p>2010-12</p>
                                        </li>
                                        <li>
                                            <span>表显里程</span>
                                            <p>10.3万公里</p>
                                        </li>
                                        <!--<li>-->
                                        <!--<span>上牌地</span>-->
                                        <!--<p>石家庄</p>-->
                                        <!--</li>-->
                                        <li>
                                            <span>排放标准</span>
                                            <p> 国四<i class="tip-icon pf-notice" data-gzlog="tracking_type=click&eventid=1112123400000004"></i>
                                            </p>
                                        </li>
                                        <li>
                                            <span>变速箱</span>
                                            <p>手动</p>
                                        </li>
                                        <li>
                                            <span>排量</span>
                                            <p>1.6</p>
                                        </li>
                                        <!--<li>-->
                                        <!--<span>过户次数</span>-->
                                        <!--<p>0</p>-->
                                        <!--</li>-->
                                        <li>
                                            <span>看车地址</span>
                                            <p>正定</p>
                                        </li>
                                        <li class="list-item">
                                            <span>车身颜色 </span>
                                            <p>白色</p>
                                        </li>
                                        <li class="list-item">
                                            <span>归属地 </span>
                                            <p>石家庄</p>
                                        </li>
                                        <li class="list-item">
                                            <span>过户次数 </span>
                                            <p>0次</p>
                                        </li>
                                        <li class="list-item">
                                            <span>年检到期时间 </span>
                                            <p>2017-12</p>
                                        </li>
                                        <li class="list-item">
                                            <span>交强险到期时间 </span>
                                            <p>2017-12</p>
                                        </li>
                                        <li class="list-item">
                                            <span>商业险到期时间 <i class="tip-icon j-insurance-notice" data-gzlog="tracking_type=click&eventid=0220050000099071"></i></span>
                                            <p>2017-12</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- 基本参数 -->
                            <div class="column car-config">
                                <div class="column-head">
                                    <div class="column-title">基本参数</div>
                                </div>
                                <div class="column-body">
                                    <ul class="list">
                                        <li class="list-item">
                                            <span>厂商</span>
                                            <p>一汽-大众</p>
                                        </li>
                                        <li class="list-item">
                                            <span>级别</span>
                                            <p>紧凑型车</p>
                                        </li>
                                        <li class="list-item">
                                            <span>发动机</span>
                                            <p>1.6L 105马力 L4</p>
                                        </li>
                                        <li class="list-item">
                                            <span>变速箱</span>
                                            <p>5档手动变速箱(MT)</p>
                                        </li>
                                        <li class="list-item">
                                            <span>车身结构</span>
                                            <p>4门5座三厢车</p>
                                        </li>
                                        <li class="list-item">
                                            <span>长*宽*高(mm)</span>
                                            <p>4540/1775/1467</p>
                                        </li>
                                        <li class="list-item">
                                            <span>轴距(mm)</span>
                                            <p>2610</p>
                                        </li>
                                        <li class="list-item">
                                            <span>行李箱容积(L)</span>
                                            <p>450</p>
                                        </li>
                                        <li class="list-item">
                                            <span>整备质量(kg)</span>
                                            <p>1265</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="column car-config">
                                <div class="column-head">
                                    <div class="column-title">发动机参数</div>
                                </div>
                                <div class="column-body">
                                    <ul class="list">
                                        <li class="list-item">
                                            <span>排量(L)</span>
                                            <p>1.6</p>
                                        </li>
                                        <li class="list-item">
                                            <span>进气形式</span>
                                            <p>自然吸气</p>
                                        </li>
                                        <li class="list-item">
                                            <span>气缸</span>
                                            <p>L4</p>
                                        </li>
                                        <li class="list-item">
                                            <span>最大马力(Ps)</span>
                                            <p>105</p>
                                        </li>
                                        <li class="list-item">
                                            <span>最大扭矩(N*m)</span>
                                            <p>155</p>
                                        </li>
                                        <li class="list-item">
                                            <span>燃料类型</span>
                                            <p>汽油</p>
                                        </li>
                                        <li class="list-item">
                                            <span>燃油标号</span>
                                            <p>92号</p>
                                        </li>
                                        <li class="list-item">
                                            <span>供油方式</span>
                                            <p>多点电喷</p>
                                        </li>
                                        <li class="list-item">
                                            <span>排放标准</span>
                                            <p>国四</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="column car-config">
                                <div class="column-head">
                                    <div class="column-title">底盘及制动</div>
                                </div>
                                <div class="column-body">
                                    <ul class="list">
                                        <li class="list-item">
                                            <span>驱动方式</span>
                                            <p></p>
                                        </li>
                                        <li class="list-item">
                                            <span>助力类型</span>
                                            <p>机械液压助力</p>
                                        </li>
                                        <li class="list-item">
                                            <span>前悬挂类型</span>
                                            <p>麦弗逊式独立悬架</p>
                                        </li>
                                        <li class="list-item">
                                            <span>后悬挂类型</span>
                                            <p>扭力梁式非独立悬架</p>
                                        </li>
                                        <li class="list-item">
                                            <span>前制动类型</span>
                                            <p>通风盘式</p>
                                        </li>
                                        <li class="list-item">
                                            <span>后制动类型</span>
                                            <p>盘式</p>
                                        </li>
                                        <li class="list-item">
                                            <span>驻车制动类型</span>
                                            <p>-</p>
                                        </li>
                                        <li class="list-item">
                                            <span>前轮胎规格</span>
                                            <p>195/65 R15</p>
                                        </li>
                                        <li class="list-item">
                                            <span>后轮胎规格</span>
                                            <p>195/65 R15</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="column car-config">
                                <div class="column-head">
                                    <div class="column-title">安全配置</div>
                                </div>
                                <div class="column-body">
                                    <ul class="list">
                                        <li class="list-item">
                                            <span>主副驾驶安全气囊</span>
                                            <p>标配/标配</p>
                                        </li>
                                        <li class="list-item">
                                            <span>前后排侧气囊</span>
                                            <p>无/无</p>
                                        </li>
                                        <li class="list-item">
                                            <span>前后排头部气囊</span>
                                            <p>无/无</p>
                                        </li>
                                        <li class="list-item">
                                            <span>胎压检测</span>
                                            <p>无</p>
                                        </li>
                                        <li class="list-item">
                                            <span>车内中控锁</span>
                                            <p>标配</p>
                                        </li>
                                        <li class="list-item">
                                            <span>儿童座椅接口</span>
                                            <p>无</p>
                                        </li>
                                        <li class="list-item">
                                            <span>无钥匙启动</span>
                                            <p>无</p>
                                        </li>
                                        <li class="list-item">
                                            <span>防抱死系统(ABS)</span>
                                            <p>标配</p>
                                        </li>
                                        <li class="list-item">
                                            <span>车身稳定控制(ESP)</span>
                                            <p>无</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="column car-config">
                                <div class="column-head">
                                    <div class="column-title">外部配置</div>
                                </div>
                                <div class="column-body">
                                    <ul class="list">
                                        <li class="list-item">
                                            <span>电动天窗</span>
                                            <p>标配</p>
                                        </li>
                                        <li class="list-item">
                                            <span>全景天窗</span>
                                            <p>无</p>
                                        </li>
                                        <li class="list-item">
                                            <span>电动吸合门</span>
                                            <p>无</p>
                                        </li>
                                        <li class="list-item">
                                            <span>感应后备箱</span>
                                            <p>无</p>
                                        </li>
                                        <li class="list-item">
                                            <span>感应雨刷</span>
                                            <p>无</p>
                                        </li>
                                        <li class="list-item">
                                            <span>后雨刷</span>
                                            <p>无</p>
                                        </li>
                                        <li class="list-item">
                                            <span>前后电动车窗</span>
                                            <p>标配/标配</p>
                                        </li>
                                        <li class="list-item">
                                            <span>后视镜电动调节</span>
                                            <p>标配</p>
                                        </li>
                                        <li class="list-item">
                                            <span>后视镜加热</span>
                                            <p>无</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="column car-config">
                                <div class="column-head">
                                    <div class="column-title">内部配置</div>
                                </div>
                                <div class="column-body">
                                    <ul class="list">
                                        <li class="list-item">
                                            <span>多功能方向盘</span>
                                            <p>无</p>
                                        </li>
                                        <li class="list-item">
                                            <span>定速巡航</span>
                                            <p>标配</p>
                                        </li>
                                        <li class="list-item">
                                            <span>空调</span>
                                            <p>标配</p>
                                        </li>
                                        <li class="list-item">
                                            <span>自动空调</span>
                                            <p>无</p>
                                        </li>
                                        <li class="list-item">
                                            <span>GPS导航</span>
                                            <p>无</p>
                                        </li>
                                        <li class="list-item">
                                            <span>倒车雷达</span>
                                            <p>标配</p>
                                        </li>
                                        <li class="list-item">
                                            <span>倒车影像系统</span>
                                            <p>无</p>
                                        </li>
                                        <li class="list-item">
                                            <span>真皮座椅</span>
                                            <p>标配</p>
                                        </li>
                                        <li class="list-item">
                                            <span>前后排座椅加热</span>
                                            <p>无/无</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </section>
                        <section class="risk-tip">基本信息为车辆初评时录入，实际情况以看车时为准
                        </section>
                    </div>
                    <div class="third-tab faq-main">
                        <article class="faq-box">
                            <h2 class="faq-tith2">瓜子服务费是谁出呢？</h2>
                            <p class="faq-cont">交易成功后，瓜子会向买方收取最低3500元的服务费。买方支付服务费后，可享车辆维修保障、14天可退等多项售后服务。</p>
                        </article>
                        <article class="faq-box">
                            <h2 class="faq-tith2">可否贷款？</h2>
                            <p class="faq-cont">本车符合瓜子金融贷款要求，推荐首期款1.5万元，月付1324元，<a href="http://m.jr.guazi.com/sjz/loan/2478908" class="j-scroll-save-location">查看贷款详情></a>
                            </p>
                        </article>
                        <article class="faq-box">
                            <h2 class="faq-tith2">牌照能过户吗？</h2>
                            <p class="faq-cont">根据《机动车登记规定》法规，二手车牌照是不能过户的。</p>
                        </article>
                        <article class="faq-box" id="cheliangguohu">
                            <h2 class="faq-tith2">车辆怎么过户？</h2>
                            <p class="faq-cont">车辆过户需关注车辆是否符合上牌地的迁入标准（因政策经常变化，以下标准仅供参考，详情咨询当地车管所）</p>
                            <ul class="faq-cont faq-cont-list">
                                <li>选择上牌城市：<a class="j-scroll-save-location" href="/sjz/?act=changeCity&origDomain=sjz&selectDomainId=1" data-gzlog="tracking_type=click&eventid=1112123400000012&cityid=1">石家庄></a></li>
                                <li>石家庄排放标准：国五</li>
                                <li>车辆年限要求：3年内</li>
                            </ul>
                            <p class="faq-cont">具体的过户流程在买车过程中瓜子工作人员会进行全程指导。</p>
                        </article>
                        <article class="faq-box" id="baoxian">
                            <h2 class="faq-tith2">保险怎么办？</h2>
                            <p class="faq-cont">二手车保险有两种处理方式。（1）保险过户：车辆在车管所完成过户后，新车主带着本人证件和原车主身份证，到原保险公司办理过户；（2） 申请退保（交强险无法退保）：原车主只缴纳从投保开始到退保期间的保费，其他的保费保险公司会相应退还。之后，新车主就可到任何一家保险公司重新办理车险。</p>
                        </article>
                        <article class="faq-box" id="chekuang">
                            <h2 class="faq-tith2">车况真实吗？</h2>
                            <p class="faq-cont">瓜子上架车辆均是经过259项专业检测，在交易签署合同前会再次陪同买家进行深度复检，确保车况信息完全披露给买家。</p>
                        </article>
                    </div>
                </div>
            </div>
    </section>
@endsection