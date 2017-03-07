@extends('home.main')

@section('head_content')
    <!-- 详情页样式 -->
    <link type="text/css" rel="stylesheet" href="{{URL::asset('css/tcl/home/joinIn.css')}}">
@endsection

@section('title')
    <title>加盟我们</title>
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
