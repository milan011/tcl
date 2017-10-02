<!DOCTYPE html>
<!--meta-->
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-title" content="淘车乐二手车">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <!-- <meta name="format-detection" content="telephone=no" /> -->
    <!-- TDK -->
    @yield('title')
    <!--css-->
    <link type="text/css" rel="stylesheet" href="{{URL::asset('mobel/css/base.css')}}">
    
    <script type="text/javascript" src="{{URL::asset('mobel/js/common/jQuery-1.12.0.min.js')}}"></script>
    <!-- <script type="text/javascript" src="{{URL::asset('mobel/js/base.js')}}"></script> -->
    
    @yield('head_content')
</head>

<body @yield('bodyClass')> 

@yield('content')
    
@yield('footer_content')

@yield('script_content')
</body>
</html>