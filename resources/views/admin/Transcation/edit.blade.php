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
		<a href="{{route('admin.chance.index')}}">交易管理</a> 
		<i class="icon-angle-right"></i>
	</li>
	<li><a href="javascript:void(0);">交易跟进</a></li>
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
			<form class="form-horizontal" action="{{route('admin.transcation.update', ['transcation'=>$transcations->id])}}" method="post">
				{!! csrf_field() !!}
				{{ method_field('PUT') }}
				<fieldset>
					<div class="control-group">
						<label class="control-label" for="deal_price">成交价</label>
						<div class="controls">
						  	<input class="input-xlarge focused"  name="deal_price" type="text" value="{{$transcations->deal_price}}">万
						</div>
				  	</div>
				  	<div class="control-group">
						<label class="control-label" for="earnest">买方定金</label>
						<div class="controls">
						  	<input class="input-xlarge focused" name="earnest" type="text" value="{{$transcations->earnest}}">元
						</div>
				  	</div>
				  	<div class="control-group">
						<label class="control-label" for="commission">应收佣金</label>
						<div class="controls">
						  	<input class="input-xlarge focused"   name="commission" type="text" value="{{$transcations->commission}}">元
						</div>
				  	</div>
				  	<div class="control-group">
						<label class="control-label" for="first_pay">车款</label>
						<div class="controls">
						  	<input class="input-xlarge focused"  name="first_pay" type="text" value="{{$transcations->first_pay}}">万
						</div>
				  	</div>

				  	<div class="control-group">
						<label class="control-label" for="last_pay">压卖方尾款</label>
						<div class="controls">
						  	<input class="input-xlarge focused"  name="last_pay" type="text" value="{{$transcations->last_pay}}">元
						</div>
				  	</div>
				  	
				  	<div class="control-group">
						<label class="control-label" for="commission_infact">实收佣金</label>
						<div class="controls">
						  	<input class="input-xlarge focused"   name="commission_infact" type="text" value="{{$transcations->commission_infact}}">元
						</div>
				  	</div>
				  	<div class="control-group">
						<label class="control-label" for="sale_card">压卖方手续</label>
						<div class="controls">
						  	<input class="input-xlarge focused"  name="sale_card" type="text" value="{{$transcations->sale_card}}">
						</div>
				  	</div>
				  	<div class="control-group">
					<label class="control-label" for="done_time">预计成交时间</label>
						<div class="controls">
							<input type="text" class="input-xlarge date-picker"  name="done_time" id="done_time" value="{{$transcations->done_time}}">
						</div>
					</div>
              		<div class="control-group">
						<label class="control-label" for="commission_remark">佣金备注</label>
						<div class="controls">
						 	<textarea id="address" name="commission_remark" class="autogrow">{{$transcations->commission_remark}}</textarea>
						</div>
				  	</div>
				  	<div class="control-group">
						<label class="control-label" for="violate">违章未处理</label>
						<div class="controls">
						 	<textarea id="address" name="violate" class="autogrow">{{$transcations->violate}}</textarea>
						</div>
				  	</div>			   			
				  <div class="form-actions">
				  	<input type="hidden" name="car_id" value="{{$car_info->id}}">
				  	<input type="hidden" name="want_id" value="{{$want_info->id}}">
				  	<input type="hidden" name="chance_id" value="{{$transcations->chance_id}}">
				  	<input type="hidden" name="current_trade_status" value="{{$transcations->trade_status}}">
				  	<input type="hidden" name="trade_status" value="">
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

		var status            = $("input[name='current_trade_status']").val(); //交易状态
		var next_status       = $("input[name='trade_status']"); //交易状态
		var deal_price        = $("input[name='deal_price']");  //成交价
		var earnest           = $("input[name='earnest']");  //定金
		var first_pay         = $("input[name='first_pay']");  //车款
		var last_pay          = $("input[name='last_pay']");  //压卖方尾款
		var commission        = $("input[name='commission']");  //佣金
		var commission_infact = $("input[name='commission_infact']");  //实收佣金
		var sale_card         = $("input[name='sale_card']");  //过户手续
		var violate           = $("input[name='violate']");  //成交时间

		$('.date-picker').datepicker({
            language: 'zh-CN',
            autoclose: true,
            changeMonth: true,
      		changeYear: true,
            format: 'yyyy-mm-dd',
            todayHighlight: true
        });	

        switch (status) {
        	case '1':
        	    // alert('订车确认');
        	    deal_price.attr('readonly', 'readonly');
        	    earnest.attr('readonly', 'readonly');
        	    commission.attr('readonly', 'readonly');
        	    break;
        	case '2':
        	    // alert('已订车');
        	    deal_price.attr('readonly', 'readonly');
        	    earnest.attr('readonly', 'readonly');
        	    commission.attr('readonly', 'readonly');
        	    next_status.val('4');
        	    break;
        	case '3':
        	    // alert('车款确认');
        	    deal_price.attr('readonly', 'readonly');
        	    earnest.attr('readonly', 'readonly');
        	    commission.attr('readonly', 'readonly');
        	    first_pay.attr('readonly', 'readonly');
        	    sale_card.attr('readonly', 'readonly');
        	    break;
        	case '4':
        	    // alert('已付车款');
        	    deal_price.attr('readonly', 'readonly');
        	    earnest.attr('readonly', 'readonly');
        	    commission.attr('readonly', 'readonly');
        	    first_pay.attr('readonly', 'readonly');
        	    sale_card.attr('readonly', 'readonly');
        	    next_status.val('5');
        	    break;
        	default :
            // alert('未知');
    	}
	});
</script>
@endsection