@extends('home.main')

@section('head_content')
    <!-- 详情页样式 -->
    <link type="text/css" rel="stylesheet" href="{{URL::asset('css/tcl/home/sell.css')}}">
@endsection

@section('title')
    <title>{{$title}}</title>
    <meta name="keywords" content="二手车,二手车交易市场,二手车网上交易平台,石家庄二手车，石家庄淘车乐,石家庄二手车交易平台，石家庄二手车交易">
@endsection

@section('current_city_name')
    @if(null !== Session('chosen_city_name'))
        {{Session('chosen_city_name')}}
    @else
        {{Session('current_city_name')}}
    @endif
@endsection

@section('content')
<main>
    <section class="banner" style="background-color: #000;">
        <!-- banner 图片尺寸 1190 x450  图片左右有渐变色  -->
        <!-- <img src="../img/sell/dbfile/bannerBg.jpg" /> -->
        <img src="{{URL::asset('home/img/sell/dbfile/bannerBg.jpg')}}" />
        <div class="container">
            <div class="dateSell">
                <div class="logo"></div>
                <form class="form-horizontal" id="want_form" action="" method="post">
                    {!! csrf_field() !!}
                <div id="brand" class="dib combo dib-con brand">
                    <input type="hidden" name="brand" id="brands1"  value="-1"/>
                    <div class="dib text">品牌</div>
                    <div class="dib icon"></div>
                    <div class="optionList">
                        <ul>
                            @foreach($all_top_brands as $brand)
                            <li value="{{$brand->id}}">{{$brand->name}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div id="kind" class="dib combo dib-con brand">
                    <input type="hidden" name="company" id="company" value="" />
                    <div class="dib text" id="company_name">厂家</div>
                    <div class="dib icon"></div>
                    <div class="optionList">
                        <ul id="company_content">
                            
                        </ul>
                    </div>
                </div>
                <div id="kind" class="dib combo dib-con brand">
                     <input type="hidden" name="type" id="type" value="" />
                    <div class="dib text" id="type_name">车系</div>
                    <div class="dib icon"></div>
                    <div class="optionList">
                        <ul id="type_content">
                            
                        </ul>
                    </div>
                </div>
                <div id="mobile" class="mobile">
                    <input name="mobile" type="text" placeholder="手机号码"/>
                </div>
                <div class="buttonArea">
                    <div class="consult fr">咨询：400-670-6969</div>
                    <input type="hidden" name="ajax_request_url" value="{{route('home.sale.getChildBrand')}}">
                    <button type="button" id="storeInfo">我要预约</button>
                </div>
                </form>
            </div>
        </div>
    </section>
    <section class="bannerAdd container dib-con">
        <div class="item dib order">
            <p class="title">预约代理</p>
            <p class="desc">填写信息或拨打电话预约代理</p>
        </div>
        <div class="item dib assess">
            <p class="title">专业评估</p>
            <p class="desc">顾问跟踪，车辆鉴定评估</p>
        </div>
        <div class="item dib extension">
            <p class="title">免费推广</p>
            <p class="desc">销售顾问为您免费推广出售信息</p>
        </div>
        <div class="item dib trade">
            <p class="title">交易过户</p>
            <p class="desc">一站式服务，代办所有过户手续</p>
        </div>
    </section>
</main> 
@endsection

@section('script_content')
<script>
    $(document).ready(function(){
        
        $("input[name='brand']").val('');
        $("input[name='company']").val('');
        $("input[name='type']").val('');
        $("input[name='mobile']").val('');

        $('#brands1').change(function(){

            var top_brand   = $(this).val();
            var token       = $("input[name='_token']").val();
            var request_url = $("input[name='ajax_request_url']").val();

            $('#second_category').hide();
            $('#thrid_category').hide();
            $('#four_category').hide();
            $('#name').val('');
            // alert(top_brand);return false;

            //获得该顶级品牌子品牌
            $.ajax({
                type: 'POST',       
                url: request_url,       
                data: { pid : top_brand},       
                dataType: 'json',       
                headers: {      
                    'X-CSRF-TOKEN': token       
                },      
                success: function(data){        
                    if(data.status == 1){
                        var content = '';
                        // console.log(data.data);
                        $.each(data.data, function(index, value){
                            content += '<li value="';
                            content += value.id;
                            content += '">';
                            content += value.name;
                            content += '</li>';
                        });
                        // $('#top_brand').append(content);
                        // console.log($('#second_category'));
                        $('#company_content').empty();
                        $('#company_name').text('厂家');
                        $('#type_name').text('车系');
                        $('#company_content').append(content);
                    }else{
                        alert(data.message);
                        $('#company_content').empty();
                        return false;
                    }
                },      
                error: function(xhr, type){
    
                    alert('Ajax error!');
                }
            });
        });

        $('#company').change(function(){

            var company     = $(this).val();
            var token       = $("input[name='_token']").val();
            var request_url = $("input[name='ajax_request_url']").val();

            $('#second_category').hide();
            $('#thrid_category').hide();
            $('#four_category').hide();
            $('#name').val('');
            // alert(top_brand);return false;
            // console.log($(this).val());
            //获得该顶级品牌子品牌
            $.ajax({
                type: 'POST',       
                url: request_url,       
                data: { pid : company},       
                dataType: 'json',       
                headers: {      
                    'X-CSRF-TOKEN': token       
                },      
                success: function(data){        
                    if(data.status == 1){
                        var content = '';
                        // console.log(data.data);
                        $.each(data.data, function(index, value){
                            content += '<li value="';
                            content += value.id;
                            content += '">';
                            content += value.name;
                            content += '</li>';
                        });
                        // $('#top_brand').append(content);
                        // console.log($('#second_category'));
                        $('#type_content').empty();
                        $('#type_name').text('车系');
                        $('#type_content').append(content);
                    }else{
                        alert(data.message);
                        $('#company_content').empty();
                        return false;
                    }
                },      
                error: function(xhr, type){
    
                    alert('Ajax error!');
                }
            });
        });

        $('#storeInfo').click(function(){

            var request_url = '{{route('home.sale.store')}}';

            var brand   = $("input[name='brand']").val();
            var company = $("input[name='company']").val();
            var type    = $("input[name='type']").val();
            var mobile  = $("input[name='mobile']").val();

            console.log(brand);
            console.log(company);
            console.log(type);
            console.log(mobile);

            if(brand == ''){

                alert('请选择品牌');
                return false;
            }

            if(company == ''){

                alert('请选择厂家');
                return false;
            }

            if(type == ''){

                alert('请选择车系');
                return false;
            }

            if(!(/^1(3|4|5|7|8)\d{9}$/.test(mobile))){ 
                alert("请填写正确的手机号码");  
                return false; 
            }

            $.ajax({
                method: 'POST',
                url: request_url,
                data:$("#want_form").serialize(),
                dataType: 'json',
                headers: {      
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'        
                },
                success:function(data){

                    //设置图片对应车源ID
                    alert(data.msg);
                    
                },
                error: function(xhr, type){
                    
                    /*if(xhr.status == 422){ //表单验证失败，返回的状态
                        console.log(JSON.parse(xhr.responseText));
                        var content_error = '';
                        
                        content_error += '<div>';
                        content_error += "<div class='alert alert-warning' style='text-align:center;'>";
                        $.each(JSON.parse(xhr.responseText),function(name,value) {
                            // console.log(name);
                            // console.log(value);                          
                            content_error += value[0];
                            content_error += '<div>';                           
                        });
                        content_error += '</div>';
                        content_error += '</div>';
                        console.log(content_error);

                        return false;
                    }*/
                    alert('请正确选择车型并填写正确的手机号码');
                }
            });

            return false;
        });
    });
</script>
@endsection
