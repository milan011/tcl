@extends('layouts.main')

@section('head_content')
<link id="bootstrap-style" href="{{ URL::asset('css/tcl/bootstrap-datepicker.min.css') }}" rel="stylesheet">
	<style type="text/css">
		.one_line{
			width:40%;
			margin-bottom:5px;
		}
		ul.dropdown-menu::after, ul.dropdown-menu::before{
			top: -1px;
			left: 10px;
			border-right: 9px solid transparent;
			border-bottom: 9px solid #222 !important;
			border-left: 9px solid transparent;
			content: none;
		}
		ul.dropdown-menu{
			min-width:100%;
		}
	</style>
@endsection

@section('BreadcrumbTrail')
	<ul class="breadcrumb">
		<li>
			<i class="icon-home"></i>
			<a href="{{route('admin.index')}}">主页</a>  
			<i class="icon-angle-right"></i>
		</li>
		<li><a href="javascript:void(0);">交易管理</a></li>
	</ul>
@endsection

@section('content')

@include('layouts.message')
	<div class="row-fluid sortable">		
		<div class="box span12">
			<!-- <div class="box-header" data-original-title>
				<h2>
					<i class="halflings-icon user"></i><span class="break"></span>Members
				</h2>
				<div class="box-icon">
					<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
					<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
					<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
				</div>
			</div> -->
			<div class="box-content">
				<div class="page-tabs">
            		<ul class="nav nav-tabs">
            		  <li style="display: inline-block;line-height:20px;">
						<a class="btn btn-search" href="#"><i class="halflings-icon search"></i>搜索交易信息</a>
					</li>
					<li style="display:inline-block;line-height:20px;float:right;">
						<a href="#" onclick="window.history.go(-1);return false;" class="btn ">返回</a>
					</li>
            		</ul>
        		</div>
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>编号</th>
							<th>车源</th>
							<th>车价</th>						
							<th>车源客户</th>
							<th>订车客户</th>
							<th>交车时间</th>
							<th>登记时间</th>
							<th>状态</th>													
							<th>负责人</th>
							<th>门店</th>
							<th>操作</th>
						</tr>
					</thead>   
					<tbody>
						@foreach ($transcations as $transcation)
    					<tr>
							<td>{{$transcation->belongsToChance->chance_code}}</td>
							<td>{{$transcation->belongsToChance->belongsToCar->car_name}}</td>
							<td>{{$transcation->deal_price}}</td>
							<td>{{$transcation->belongsToChance->belongsToCustomerOnCar->car_customer_name}}</td>
							<td>{{$transcation->belongsToChance->belongsToCustomerOnWant->want_customer_name}}</td>
							<td>{{$transcation->done_time}}</td>													
							<td>{{substr($transcation->created_at, 0 ,10)}}</td>	
							<td>{{$transcation_stauts_config[$transcation->trade_status]}}</td>	
							<td>{{$transcation->belongsToChance->belongsToUser->nick_name}}</td>	
							<td>{{$transcation->belongsToChance->belongsToShop->shop_name}}</td>
							@if($transcation->user_id == Auth::id())		
							<td class="center">
								<a class="btn btn-success" href="{{route('admin.transcation.edit', ['transcation'=>$transcation->id])}}">
									<i class="icon-edit icon-white"></i> 编辑
								</a>
								<input type="hidden" value="{{$transcation->id}}">
								<div class="btn-group " role=”group”>
										<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
											更多
											<span class="caret"></span>
										</button>
										<ul class="dropdown-menu pull-right">
											<li>
												<a class="btn btn-warning" href="{{route('admin.transcation.show', ['transcation'=>$transcation->id])}}">
													<i class="icon-edit icon-white"></i> 查看
												</a>												
											</li>	
											<li>
												<button class="btn btn-info changStatus" data-status="0" style="width:100%;>
													<i class="icon-edit icon-white"></i> 废弃
												</button>	
												<input type="hidden" value="{{$transcation->id}}">		
											</li>
											<li>
												<span>
													<form action="{{route('admin.transcation.complete')}}" method="post" style="display: inherit;margin:0px;">
										    			{{ csrf_field() }}
            											<input type="hidden" name="transcation_id" value="{{$transcation->id}}">
														<button class="btn btn-success" type="submit">
														<i class="icon-edit icon-white"></i> 交易完成
														</button>
													</form>
												</span>
											</li>
										</ul>
 							 		</div>
							</td>
							@else
							<td class="center">
								<a class="btn btn-success" href="{{route('admin.transcation.show', ['transcation'=>$transcation->id])}}">
									<i class="icon-edit icon-white"></i> 查看
								</a>
							</td>
							@endif
						</tr>
						@endforeach							
					</tbody>
				</table>
				<div class="pagination pagination-centered">
					 {!! $transcations->links() !!}
				</div>          
			</div>
		</div>
	</div>
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>交易信息搜索</h3>
		</div>
		<div class="modal-body" style="max-height:none;">
			<form class="form-horizontal" id="condition" action="{{route('admin.transcation.index')}}/index" method="post">
				{!! csrf_field() !!}
				<fieldset>
					<!-- <div class="control-group">
						<label class="control-label" for="chance_code">交易信息编号</label>
						<div class="controls">
						  	<input class="input-xlarge focused" name="chance_code" id="chance_code" type="text" value="">
						</div>
					</div> -->		
					<div class="control-group  ">
            	    	<label class="control-label" for="trade_status">状态</label>
            	    	<div class="controls">
            	      		<select id="trade_status" name="trade_status" >
            	      		<option value=''>不限</option>
            	      			@foreach($transcation_stauts_config as $key=>$transcation)
            	      			<option @if(isset($select_conditions['trade_status']) && $select_conditions['trade_status'] == $key && $select_conditions['trade_status'] != '') selected @endif value='{{$key}}'>{{$transcation}}</option>  
            	      			@endforeach                                         
            	      		</select>
            	    	</div>
            	  	</div>
            	  	<div class="control-group">
						<label class="control-label" for="begin_date">日期范围</label>
						<div class="controls">
							<input type="text" class="input-xlarge date-picker one_line" name="begin_date" id="begin_date" value="{{$select_conditions['begin_date'] or ''}}" placeholder="开始日期" >
							<input type="text" class="input-xlarge one_line date-picker" name="end_date" id="end_date" value="{{$select_conditions['end_date'] or ''}}" placeholder="结束日期">
						</div>
					</div>				  
				</fieldset>
				<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">关闭</a>
			<button type="submit" class="btn btn-primary">搜索</button>
		</div>
			</form>				         
		</div>
		
	</div>
@endsection

@section('script_content')
<!-- 引入确认框js -->
<script src="{{URL::asset('js/tcl/confirm.js')}}"></script> 
<!-- 引入日历插件 -->
<script src="{{URL::asset('js/tcl/bootstrap-datepicker.js')}}"></script> 
<script src="{{URL::asset('js/tcl/locales/bootstrap-datepicker.zh-CN.js')}}"></script>
<script>

	$(document).ready(function(){

		$('.pagination').children('li').children('a').click(function(){

			// alert($(this).attr('href'));
			$('#condition').attr('action', $(this).attr('href'));
			// alert($('#condition').attr('action'));
			$('#condition').submit();
			return false;
		});

		$('.changStatus').click(function(){

			var id     = $(this).next().val();
			var status = $(this).attr('data-status');
			var token = $("input[name='_token']").val();

			/*alert(id);
			alert(status);*/
			// alert($("input[name='_token']").val());

			$.ajax({

				type: 'POST',

				url: 'transcation/changeStatus',

				data: { id : id, status : status},

				dataType: 'json',

				headers: {
					'X-CSRF-TOKEN': '{{ csrf_token() }}'
				},

				success: function(data){

					alert(data.msg);
					location.reload();
					// console.log(data);
				},

				error: function(xhr, type){

					alert('Ajax error!');
				}
			});
		});

		$('.date-picker').datepicker({
            language: 'zh-CN',
            autoclose: true,
            format: 'yyyy-mm-dd',
            todayHighlight: true
        });
	});
</script>
@endsection
