@extends('show.mainnew')

@section('head_content')
    <!-- 详情页样式 -->
    <link type="text/css" rel="stylesheet" href="{{URL::asset('css/tcl/home/joinIn.css')}}">
@endsection

@section('title')
    @section('title')
    <title>{{$title}}</title>
    <meta name="keywords" content="二手车,二手车交易市场,二手车网上交易平台,石家庄二手车，石家庄淘车乐,石家庄二手车交易平台，石家庄二手车交易">
@endsection
@endsection

@section('current_city_name')
    @if(null !== Session('chosen_city_name'))
        {{Session('chosen_city_name')}}
    @else
        {{Session('current_city_name')}}
    @endif
@endsection

@section('content')
<section class="banner"></section>
<section class="trade"></section>
<section class="prospect"></section>
<section class="benefit"></section>
<section class="join"></section>
@endsection
