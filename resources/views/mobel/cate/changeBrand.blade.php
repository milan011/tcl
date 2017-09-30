@extends('mobel.main')

@section('title')
    
@endsection

@section('head_content')
    <link type="text/css" rel="stylesheet" href="{{URL::asset('mobel/css/changeBrand/head.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('mobel/css/changeBrand/aside.css')}}">
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
            @foreach($recomment_brands as $key=>$brand)
            @if($key < 10)
            <li class="js-change-brand" data-brandId="{{$brand->id}}" data-brandUrl="{{substr($brand->logo_img, 0, -4)}}">
                <a class="" href="javascript:void(0);"><i class="icon-brand icon-{{substr($brand->logo_img, 0, -4)}}"></i>{{$brand->name}}</a>
            </li>
            @endif
            @endforeach
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
                @foreach($brand_letter_list as $key=>$brand_list)
                <h3 class="subtit" data-index="{{$key}}">{{$key}}</h3>
                <ul class="brand-list2">
                    @foreach($brand_list as $key=>$brand)
                    <li class="js-change-brand" data-brandId="{{$brand->id}}">
                        <i class="icon-brand icon-{{substr($brand->logo_img, 0, -4)}}"></i>
                        <a href="javascript:void(0);">{{$brand->name}}</a>
                    </li>
                    @endforeach
                </ul>
                @endforeach
            </section>
            <!-- <aside class="aside-letter">
                <ul class="letter-list">
                    <li>#</li>
                    <li>热</li>
                    <li>*</li>
                    @foreach($letter_list as $key=>$letter)
                    <li>{{$letter}}</li>
                    @endforeach
                </ul>
            </aside> -->
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
<script type="text/javascript" src="{{URL::asset('mobel/js/base.js')}}"></script>
<!-- <script type="text/javascript" src="{{URL::asset('mobel/js/list.js')}}"></script> -->
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
                        $('.brand-carbox').addClass('active');
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