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
		<a href="{{route('admin.chance.index')}}">约车管理</a> 
		<i class="icon-angle-right"></i>
	</li>
	<li><a href="javascript:void(0);">约车反馈</a></li>
</ul>
@endsection
<!-- 主体 -->
@section('content')

@include('layouts.message')

<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-content">
			<form class="form-horizontal" action="{{route('admin.plan.update', ['plan'=>$plan_info->id])}}" method="post">
				{!! csrf_field() !!}
				{{ method_field('PUT') }}
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
							<input type="text" class="input-xlarge" readonly="readonly" name="plan_time" id="plan_time" value="{{$plan_info->plan_time}}">
						</div>
					</div>
					<div class="control-group">
					<label class="control-label" for="hafe_day">具体时间</label>
						<div class="controls">
							<input type="text" class="input-xlarge" style="width:10%" readonly="readonly" value="{{$plan_info->definite_time}}">
						</div>
					</div>  
					<div class="control-group">
						<label class="control-label" for="plan_address">看车地址</label>
						<div class="controls">
						 	<input id="address" name="plan_address" readonly="readonly" value="{{$plan_info->plan_address}}" />
						</div>
				  	</div>
				  	<div class="control-group  ">
                	<label class="control-label" for="plan_del">看车结果</label>
                	<div class="controls">
                  		<select id="plan_del" name="plan_del" >          				  							
					  		<option  value="0">未成功</option>	
					  		<option  value="1">成功</option>	                    
                  		</select>
                	</div>
              		</div>
              		<div class="control-group">
						<label class="control-label" for="plan_remark">情况反馈</label>
						<div class="controls">
						 	<textarea id="address" name="plan_remark" class="autogrow"></textarea>
						</div>
				  	</div>			   			
				  <div class="form-actions">
				  	<input type="hidden" name="car_id" value="{{$car_info->id}}">
				  	<input type="hidden" name="want_id" value="{{$want_info->id}}">
				  	<input type="hidden" name="chance_id" value="{{$chance_info->id}}">
				  	<input type="hidden" name="plan_id" value="{{$plan_info->id}}">
					<button type="submit"  class="btn btn-primary" id="del">保存并废弃</button>
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

		var plan_status = $('#plan_del').val();

		if(plan_status == 1){
			var create_transcation = '{{route('admin.transcation.create')}}';

			$('#del').text('转交易流程');
			$('form').attr('action', create_transcation);
		}

		$('.date-picker').datepicker({
            language: 'zh-CN',
            autoclose: true,
            format: 'yyyy-mm-dd',
            todayHighlight: true
        });	

        $('#plan_del').change(function(){
        	var plan_status        = $(this).val();
        	var create_transcation = '{{route('admin.transcation.create')}}';
        	var update_plan        = "{{route('admin.plan.update', ['plan'=>$plan_info->id])}}";

        	if(plan_status == 1){
        		$("input[name='_method']").val('POST');
        		$('form').attr('action', create_transcation);
        		$('#del').text('转交易流程');
        	}

        	if(plan_status == 0){
        		$("input[name='_method']").val('PUT');
        		$('form').attr('action', update_plan);
        		$('#del').text('保存并废弃');
        	}
        	// alert($('form').attr('action'));
        });
	});
</script>
@endsection