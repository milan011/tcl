@extends('layouts.main')
@section('head_content')
<!-- 自定义css -->
<!-- 日历插件css -->
<link id="bootstrap-style" href="{{ URL::asset('css/tcl/bootstrap-datepicker.min.css') }}" rel="stylesheet">
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
		<a href="{{route('admin.transcation.index')}}">交易管理</a> 
		<i class="icon-angle-right"></i>
	</li>
	<li><a href="javascript:void(0);">编辑交易</a></li>
</ul>
@endsection
<!-- 主体 -->
@section('content')

@include('layouts.message')
	<div class="row-fluid sortable">		
		<div class="box span12">
			<div class="box-content">
				<div class="box-header" data-original-title>
				<h2>
					<i class="halflings-icon user"></i><span class="break"></span>销售机会详情
				</h2>								
				</div>
				<table  class="table table-striped table-bordered">
					<thead>
						<tr>
							<th></th>
							<th>编号</th>
							<th>名称</th>
							<th>客户</th>
							<th>客户电话</th>
							<th>负责人</th>
							<th>负责人电话</th>
							<th>备注</th>
						</tr>
					</thead> 
					<tbody>
    					<tr>
    						<td>车源信息</td>
							<td>{{$car_info->car_code}}</td>
							<td>{{$car_info->name}}</td>
							<td>{{$car_info->belongsToCustomer->customer_name}}</td>	
							<td>110</td>
							<td>{{$car_info->belongsToUser->nick_name}}</td>
							<td>{{$car_info->belongsToUser->creater_telephone}}</td>
							<td>{{$car_info->description}}</td>										
						</tr>
						<tr>
    						<td>求购信息</td>
    						<td>{{$want_info->want_code}}</td>														
							<td>{{$want_info->name}}</td>									
							<td>{{$want_info->belongsToCustomer->customer_name}}</td>
							<td>119</td>
							<td>{{$want_info->belongsToUser->nick_name}}</td>
							<td>{{$want_info->belongsToUser->creater_telephone}}</td>
							<td>{{$want_info->remark}}</td>							
						</tr>
												
					</tbody>
				</table>		
			</div>			
		</div>
	</div>
<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-content">
			<form class="form-horizontal" action="{{route('admin.transcation.store')}}" method="post">
				{!! csrf_field() !!}
				<fieldset>
					<div class="control-group">
						<label class="control-label" for="deal_price">成交价:</label>
						<div class="controls">
						  	<input class="input-xlarge focused"  name="deal_price" type="text" value="{{old('deal_price')}}"> 万
						</div>
				  	</div>
				  	<div class="control-group">
						<label class="control-label" for="earnest">买方定金:</label>
						<div class="controls">
						  	<input class="input-xlarge focused"  name="earnest" type="text" value="{{old('earnest')}}">元
						</div>
				  	</div>
				  	<!-- <div class="control-group">
						<label class="control-label" for="first_pay">首款:</label>
						<div class="controls">
						  	<input class="input-xlarge focused"  name="first_pay" type="text" value="{{old('first_pay')}}">
						</div>
				  	</div>
				  	<div class="control-group">
						<label class="control-label" for="last_pay">卖方尾款:</label>
						<div class="controls">
						  	<input class="input-xlarge focused"  name="last_pay" type="text" value="{{old('last_pay')}}">
						</div>
				  	</div> -->
				  	<div class="control-group">
						<label class="control-label" for="commission">应收佣金:</label>
						<div class="controls">
						  	<input class="input-xlarge focused" readonly="readonly" name="commission" type="text" value="{{old('commission')}}">元
						</div>
				  	</div>
				  	<!-- <div class="control-group">
						<label class="control-label" for="commission_infact">实收佣金:</label>
						<div class="controls">
						  	<input class="input-xlarge focused"  name="commission_infact" type="text" value="{{old('commission_infact')}}">
						</div>
				  	</div>
				  	<div class="control-group">
						<label class="control-label" for="commission_remark">佣金备注:</label>
						<div class="controls">
						 	<textarea id="address" name="commission_remark" class="autogrow">{{old('commission_remark')}}</textarea>
						</div>
				  	</div> -->
				  	<div class="control-group">
						<label class="control-label" for="violate">违章未处理:</label>
						<div class="controls">
						 	<textarea id="address" name="violate" class="autogrow">{{old('violate')}}</textarea>
						</div>
				  	</div>
				  	<!-- <div class="control-group">
						<label class="control-label" for="sale_card">压卖方手续:</label>
						<div class="controls">
						  	<input class="input-xlarge focused"  name="sale_card" type="text" value="{{old('sale_card')}}">
						</div>
				  	</div> -->

				  	<div class="control-group">
					<label class="control-label" for="done_time">预计成交时间:</label>
						<div class="controls">
							<input type="text" class="input-xlarge date-picker" name="done_time" id="done_time" value="{{old('done_time')}}">
						</div>
					</div>
					  			   			
				  <div class="form-actions">
				  	<input type="hidden" name="car_id" value="{{$car_info->id}}">
				  	<input type="hidden" name="want_id" value="{{$want_info->id}}">
				  	<input type="hidden" name="chance_id" value="{{$chance_info->id}}">
				  	<input type="hidden" name="plan_id" value="{{$plan_info->id}}">
					<button type="submit"  class="btn btn-primary">确定</button>
					<button class="btn" onclick="window.history.go(-1);return false;">返回</button>
				  </div>
				</fieldset>
			</form>				
		</div>
	</div>			
</div>   
@endsection
@section('script_content')
<!-- 引入日历插件 -->
<script src="{{URL::asset('js/tcl/bootstrap-datepicker.js')}}"></script> 
<script src="{{URL::asset('js/tcl/locales/bootstrap-datepicker.zh-CN.js')}}"></script> 
<script type="text/javascript">
	$(document).ready(function(){
		$('.date-picker').datepicker({
            language: 'zh-CN',
            autoclose: true,
            format: 'yyyy-mm-dd',
            todayHighlight: true
        });	

		// $("input[name='deal_price']").unbind('blur');
        $("input[name='deal_price']").blur(function(){

        	var price      = $(this).val();
        	var commission = 0;

        	if(price <= 5){
        		// alert('成交价小于5万');
        		commission = '1000';
        	}else{
        		// alert('成交价大于5万');
        		commission = price*200;
        	}

        	$("input[name='commission']").val(commission);

        	return false;
        });
	});
</script>
@endsection