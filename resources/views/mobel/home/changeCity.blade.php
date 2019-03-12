@extends('mobel.main')

@section('title')
    
@endsection

@section('head_content')
    <link type="text/css" rel="stylesheet" href="{{URL::asset('mobel/css/city/info.css')}}">  
    <link type="text/css" rel="stylesheet" href="{{URL::asset('mobel/css/city/list.css')}}">
@endsection

@section('bodyClass')
    class="bottombox_acitve"
@endsection

@section('content')
<header class="heading">
        <h1>城市选择</h1>
        <a href="javascript:history.go(-1);" class="back">返回</a>
        <!--显示页面头部电话icon标志 及 设置数据统计代码(服务保障页715，买卖车页707) -->
        <!--修改买车页头部-->
        <!--修改买车页头部 end-->
        <!--详情页专属-->
    </header>
    <!-- section start -->
    <section class="city">
        <div class="column aside-id-all">
            <div class="column-head">
                <div class="column-title">当前定位城市</div>
            </div>
            <div class="column-body locatingCity">
                <ul class="list" data-role="loading">
                    <li class="list-item">
                        <a href="javascript:;">
                        <b>{{$show_city_name}}</b>
                    </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="blank"></div>
        <div class="column">
            <div class="column-head">
                <div class="column-title aside-id-all">全部城市</div>
            </div>
            <div class="column-body">
                <ul class="list">
                    <li class="list-item">
                        @foreach($citysHasTcl as $city)
                            <a href="{{route('mobel.index')}}/city/{{$city->id}}{{$wxShouQuanUrl}}" data-gzlog="select_city=quanguo">      {{$city->name}}
                            </a>
                        @endforeach
                        <a href="{{route('mobel.index')}}/city/75" data-gzlog="select_city=quanguo">张掖</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- <aside class="aside-letter">
            <ul class="letter-list">
                <li data-id="all">全</li>
                <li data-id="history">历</li>
                <li data-id="near">周</li>
                <li data-id="A">A</li>
                <li data-id="B">B</li>
                <li data-id="C">C</li>
                <li data-id="D">D</li>
                <li data-id="E">E</li>
                <li data-id="F">F</li>
                <li data-id="G">G</li>
                <li data-id="H">H</li>
                <li data-id="J">J</li>
                <li data-id="K">K</li>
                <li data-id="L">L</li>
                <li data-id="M">M</li>
                <li data-id="N">N</li>
                <li data-id="P">P</li>
                <li data-id="Q">Q</li>
                <li data-id="R">R</li>
                <li data-id="S">S</li>
                <li data-id="T">T</li>
                <li data-id="W">W</li>
                <li data-id="X">X</li>
                <li data-id="Y">Y</li>
                <li data-id="Z">Z</li>
            </ul>
        </aside> -->
    </section>
    <!-- <input type="hidden" name="domain" id="domain" value="sjz" />
    <input type="hidden" name="referer" id="referer" value="" /> -->
    <!-- section end -->
    <!-- footer -->
@endsection

@section('footer_content')
    <!-- @include('mobel.footer') -->
@endsection

@section('script_content')
    <!-- <script type="text/javascript" src="{{URL::asset('mobel/js/changeCity.js')}}"></script> -->
    <script>
        $(document).ready(function(){

            // alert('阿拉曼');
        });
    </script>
@endsection