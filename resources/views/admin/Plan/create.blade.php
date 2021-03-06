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
		<a href="{{route('admin.plan.index')}}">约车管理</a> 
		<i class="icon-angle-right"></i>
	</li>
	<li><a href="javascript:void(0);">添加约车</a></li>
</ul>
@endsection
<!-- 主体 -->
@section('content')

@include('layouts.message')

<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-content">
			<form class="form-horizontal" action="{{route('admin.plan.store')}}" method="post">
				{!! csrf_field() !!}
				<fieldset>
					<div class="control-group">
						<label class="control-label" for="car_code">车源编号</label>
						<div class="controls">
						  	<input class="input-xlarge focused" readonly="readonly"  name="car_code" type="text" value="{{$car_info->car_code}}">
						</div>
				  	</div>
				  	<div class="control-group">
						<label class="control-label" for="car_name">车源名称</label>
						<div class="controls">
						  	<input class="input-xlarge focused" readonly="readonly"  name="car_name" type="text" value="{{$car_info->name}}">
						</div>
				  	</div>
				  	<div class="control-group">
						<label class="control-label" for="car_customer">车源客户</label>
						<div class="controls">
						  	<input class="input-xlarge focused" readonly="readonly"  name="car_customer" type="text" value="{{$car_info->belongsToCustomer->customer_name}}">
						</div>
				  	</div>
				  	<div class="control-group">
						<label class="control-label" for="car_creater">车源负责人</label>
						<div class="controls">
						  	<input class="input-xlarge focused" readonly="readonly"  name="car_creater" type="text" value="{{$car_info->belongsToUser->nick_name}}">
						</div>
				  	</div>
				  	<div class="control-group">
						<label class="control-label" for="want_code">求购编号</label>
						<div class="controls">
						  	<input class="input-xlarge focused" readonly="readonly"  name="want_code" type="text" value="{{$want_info->want_code}}">
						</div>
				  	</div>
				  	<div class="control-group">
						<label class="control-label" for="want_code">求购名称</label>
						<div class="controls">
						  	<input class="input-xlarge focused" readonly="readonly"  name="want_code" type="text" value="{{$want_info->name}}">
						</div>
				  	</div>
				  	<div class="control-group">
						<label class="control-label" for="want_customer">求购客户</label>
						<div class="controls">
						  	<input class="input-xlarge focused" readonly="readonly"  name="want_customer" type="text" value="{{$want_info->belongsToCustomer->customer_name}}">
						</div>
				  	</div>
				  	<div class="control-group">
						<label class="control-label" for="want_creater">求购负责人</label>
						<div class="controls">
						  	<input class="input-xlarge focused" readonly="readonly"  name="want_creater" type="text" value="{{$want_info->belongsToUser->nick_name}}">
						</div>
				  	</div>

				  	<div class="control-group">
					<label class="control-label" for="plan_time">看车日期</label>
						<div class="controls">
							<input type="text" class="input-xlarge date-picker" name="plan_time" id="plan_time" value="{{old('plan_time')}}">
						</div>
					</div>
					<div class="control-group">
					<label class="control-label" for="selectError3">具体时间</label>
						<div class="controls">
						  	<select id="top_category" name="hafe_day" style="width:10%">
						  		<option  @if(old('hafe_day') == '上午') selected @endif value="上午">上午</option>
						  		<option  @if(old('hafe_day') == '下午') selected @endif value="下午">下午</option>									
							</select>
							<input type="text" class="input-xlarge" style="width:10%" name="hours" id="hours" value="{{old('hours')}}">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="plan_address">看车地址</label>
						<select id="plan_address" name="plan_address" >
							<option  value="">请选择门店</option>                        
					  		@foreach($shops as $key=>$shop)											
					  			<option @if(old('plan_address') == ($shop->name)) selected @endif value="{{$shop->name}}">{{$shop->name}}</option>	
					  		@endforeach	                     
                  		</select>
				  	</div>

				   			
				  <div class="form-actions">
				  	<input type="hidden" name="car_id" value="{{$car_info->id}}">
				  	<input type="hidden" name="want_id" value="{{$want_info->id}}">
				  	<input type="hidden" name="chance_id" value="{{$chance_info->id}}">
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
	});
</script>
@endsection