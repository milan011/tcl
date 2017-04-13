@extends('layouts.main')

@section('head_content')
<!-- 自定义css -->
<link id="bootstrap-style" href="{{ URL::asset('css/tcl/bootstrap-datepicker.min.css') }}" rel="stylesheet">
<link id="bootstrap-style" href="{{ URL::asset('css/tcl/dropzone/dropzone.css') }}" rel="stylesheet">
<style type="text/css">

	td.info{
		width:20%;
	}
</style>
@endsection
<!-- 面包屑 -->
@section('BreadcrumbTrail')
<ul class="breadcrumb">
	<li>
		<i class="icon-home"></i>
		<a href="{{route('admin.index')}}">主页</a>  
		<i class="icon-angle-right"></i>
	</li>
	<li>
		<i class="icon-home"></i>
		<a href="{{route('admin.car.index')}}">车源列表</a> 
		<i class="icon-angle-right"></i>
	</li>
	<li><a href="#1f">修改车源</a></li>
</ul>
@endsection
<!-- 主体 -->
@section('content')

@include('layouts.message')

<div class="row-fluid sortable" style="height:100%;">
	<div class="box span12" style="height:100%;">
		<div class="box-content">
			<div id="myTabContent" class="tab-content">
				<div id="info" class="tab-pane active">
					<div class="box-content">
						<table  class="table table-striped table-bordered"> 
					<tbody>
    					<tr>
    						<td>编号</td>
							<td class="info">{{$cars->car_code}}</td>							
							<td>车架号</td>
							<td class="info">{{$cars->vin_code}}</td>	
						</tr>
						<tr>
    						<td>名称</td>
							<td class="info">{{$cars->name}}</td>							
							<td>车型类别</td>
							<td class="info">{{$category_type[$cars->categorey_type]}}</td>
						</tr>
						<tr>
    						<td>期望价格</td>
							<td class="info">{{$cars->bottom_price}}-{{$cars->top_price}}万</td>
							<td>过户次数</td>
							<td class="info">{{$cars->sale_number}}</td>				
						</tr>
						<tr>
    						<td>车龄</td>
							<td class="info">{{$cars->age}}</td>							
							<td>内饰颜色</td>
							<td class="info">{{$inside_color[$cars->inside_color]}}</td>
						</tr>
						<tr>
    						<td>行驶里程</td>
							<td class="info">{{$cars->mileage}}</td>							
							<td>上牌日期</td>
							<td class="info">{{substr($cars->plate_date, 0 ,10)}}</td>
						</tr>
						<tr>
    						<td>变速箱</td>
							<td class="info">{{$gearbox[$cars->gearbox]}}</td>							
							<td>到检日期</td>
							<td class="info">{{substr($cars->plate_end, 0 ,10)}}</td>
						</tr>
						<tr>
    						<td>排量</td>
							<td class="info">{{$capacity[$cars->capacity]}}</td>							
							<td>上牌城市</td>
							<td class="info">{{$cars->belongsToCity->city_name}}</td>
						</tr>
						<tr>
    						<td>登记日期</td>
							<td class="info">{{substr($cars->created_at, 0 ,10)}}</td>							
							<td>保险类别</td>
							<td class="info">{{$safe_type[$cars->safe_type]}}</td>							
						</tr>
						<tr>
    						<td>所属门店</td>
							<td class="info">{{$cars->belongsToShop->shop_name}}</td>							
							<td>保险到期</td>
							<td class="info">{{substr($cars->safe_end, 0 ,10)}}</td>	
						</tr>
						<tr>
    						<td>负责人</td>
							<td class="info">{{$cars->belongsToUser->nick_name}}({{$cars->belongsToUser->creater_telephone}})</td>							
							<td>客户信息</td>
							<td class="info">
								{{$cars->belongsToCustomer->customer_name}}
								@if(Auth::id() == $cars->creater_id)
								({{$cars->belongsToCustomer->customer_telephone}})
								@endif
							</td>				
						</tr>
						<tr>							
							<td>外观颜色</td>
							<td class="info">{{$out_color[$cars->out_color]}}</td>
							<td>销售顾问备注</td>
							<td class="info">{{$cars->xs_description}}</td>
						</tr>
						<tr>
    						<td>客户描述</td>
							<td class="info">{{$cars->description}}</td>							
							
						</tr>					
					</tbody>
				</table>
				
						
				</div>
				</div>
			</div>
			<form class="form-horizontal" id="car_form" action="{{route('admin.appraiser.update', ['appraiser'=>$cars->id])}}" method="post" enctype="multipart/form-data">
				{!! csrf_field() !!}
				{{ method_field('PUT') }}
				<fieldset>
			  	<div class="control-group">
					<label class="control-label" for="guide_price"><font style="color:red;">*&nbsp;</font>指导价</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="guide_price" name="guide_price" type="text" value="{{$cars->guide_price}}" required><span style="margin-left:5px;">万元</span>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="appraiser_price"><font style="color:red;">*&nbsp;</font>评估价</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="appraiser_price" name="appraiser_price" type="text" value="{{$cars->appraiser_price}}" required><span style="margin-left:5px;">万元</span>
					</div>
				</div>
	  			<div class="control-group ">
					<label class="control-label" for="pg_description">
						<font style="color:red;">*&nbsp;</font>评估师描述
					</label>
					<div class="controls">
					<textarea id="pg_description" name="pg_description" required >{{$cars->pg_description}}</textarea>
					</div>
			  	</div>
				  <div class="form-actions">					
					<button class="btn" id="return_customer">返回</button>
					<button id="car_add" class="btn btn-primary">确定</button>
				  </div>
				</fieldset>
			</form>	
		</div>
	</div>			
</div>   
@endsection
@section('script_content')
<!-- 引入全局辅助commonjs -->
<script src="{{URL::asset('js/tcl/common.js')}}"></script>
<!-- 引入日历插件 -->
<script src="{{URL::asset('js/tcl/bootstrap-datepicker.js')}}"></script> 
<script src="{{URL::asset('js/tcl/locales/bootstrap-datepicker.zh-CN.js')}}"></script> 
<script type="text/javascript">
	$(document).ready(function(){
		$('.date-picker').datepicker({
            language: 'zh-CN',
            autoclose: true,
            format: 'yyyy-mm',
            todayHighlight: true
        });

        $('#provence_id').change(function(){

			var provence_id = $(this).val();
			var request_url = "{{route('admin.area.getAreaInfo')}}";
			
			$('#city_id').hide();

			$.ajax({

				method: 'POST',
				url: request_url,
				data: { provence_id : provence_id},
				dataType: 'json',
				headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}'},
				success: function(data){

					var content = '<option  value="0">请选择城市</option>';
					$.each(data.data, function(index, value){
						content += '<option value="';
						content += value.id;
						content += '">';
						content += value.name;
						content += '</option>';
					});
					// $('#top_brand').append(content);
					// console.log($('#city_id'));
					$('#city_id').empty();
					$('#city_id').append(content);
					// console.log(content);
					$('#city_id').show();
					return false;
				},
				error: function(xhr, type){

					alert('Ajax error!');
				}
			});
		});
	});
</script>
@endsection