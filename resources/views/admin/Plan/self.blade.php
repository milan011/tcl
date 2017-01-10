@extends('layouts.main')

@section('head_content')
<link id="bootstrap-style" href="{{ URL::asset('css/tcl/bootstrap-datepicker.min.css') }}" rel="stylesheet">
	<style type="text/css">
		.one_line{
			width:40%;
			margin-bottom:5px;
		}
		.dropdown-menu::after, .dropdown-menu::before{
			top: -1px;
			left: 10px;
			border-right: 9px solid transparent;
			border-bottom: 9px solid #222 !important;
			border-left: 9px solid transparent;
			content: none;
		}
		.dropdown-menu{
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
		<li><a href="javascript:void(0);">约车管理</a></li>
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
            		  <li style="display:inline-block;line-height:20px">
						<a href="javascript:void(0);" onclick="window.history.go(-1);return false;" class="btn ">返回</a>
						</li>
            		  	<li style="display: inline-block;line-height:20px;">
						<a class="btn btn-search" href="javascript:void(0);"><i class="halflings-icon search"></i>搜索约车信息</a>
						</li>						
            		</ul>
        		</div>
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>编号</th>
							<th>车源</th>
							<th>客户</th>
							<th>看车时间</th>
							<th>看车地点</th>
							<th>登记时间</th>
							<th>状态</th>							
							<th>负责人</th>
							<th>门店</th>
							<th>操作</th>
						</tr>
					</thead>   
					<tbody>
						@foreach ($plans as $plan)
    					<tr>
							<td>{{$plan->belongsToChance->chance_code}}</td>
							<td>{{$plan->belongsToChance->belongsToCar->car_name}}</td>
							<td>{{$plan->belongsToChance->belongsToCustomerOnWant->want_customer_name}}</td>
							<td>{{$plan->plan_time}}</td>
							<td>{{$plan->plan_address}}</td>										
							<td>{{substr($plan->created_at, 0 ,10)}}</td>	
							@if($plan->status == '1')
							<td class="center"><span class="label label-success">正常</span></td>
							@else
							<td class="center"><span class="label label-warning">废弃</span></td>
							@endif
							<td>{{$plan->belongsToChance->belongsToUser->nick_name}}</td>						
							<td>{{$plan->belongsToChance->belongsToShop->shop_name}}</td>
													
							<td class="center">
								<a class="btn btn-success" href="{{route('admin.plan.edit', ['plan'=>$plan->id])}}">
									<i class="icon-edit icon-white"></i> 约车反馈
								</a>
								<!-- @if($plan->status == '1') 
								<button class="btn btn-info changStatus" data-status="0">
									<i class="icon-edit icon-white"></i> 废弃
								</button>
								@else 
								<button class="btn btn-info changStatus" data-status="1">
									<i class="icon-edit icon-white"></i> 激活
								</button>
								@endif
								<input type="hidden" value="{{$plan->id}}"> -->
								<!-- <span>
								<form action="{{route('admin.plan.destroy', ['plan'=>$plan->id])}}" method="post" style="display: inherit;margin:0px;">
									{{ csrf_field() }}
            						{{ method_field('DELETE') }}
									<button class="btn btn-danger delete-confrim" type="button">
										<i class="icon-trash icon-white"></i> 删除
									</button>
								</form>
								</span> -->
							</td>
						
						</tr>
						@endforeach							
					</tbody>
				</table>
				<div class="pagination pagination-centered">
					 {!! $plans->links() !!}
				</div>          
			</div>
		</div>
	</div>
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>约车搜索</h3>
		</div>
		<div class="modal-body" style="max-height:none;">
			<form class="form-horizontal" id="condition" action="{{route('admin.plan.self')}}" method="post">
				{!! csrf_field() !!}
				<fieldset>		
					<!-- <div class="control-group  ">
            	    	<label class="control-label" for="chance_launch">销售机会状态</label>
            	    	<div class="controls">
            	      		<select id="chance_launch" name="chance_launch" >
            	      			<option value='1'>我发起的销售机会</option>                                           
            	      			<option value='2'>我参与的销售机会</option>                                           
            	      		</select>
            	    	</div>
            	  	</div> -->
            	  	<div class="control-group  ">
            	    	<label class="control-label" for="status">状态</label>
            	    	<div class="controls">
            	      		<select id="status" name="status" >
            	      			@foreach($plan_stauts_config as $key=>$plan)
            	      			<option @if(isset($select_conditions['status']) && $select_conditions['status'] == $key && $select_conditions['status'] != '') selected @endif value='{{$key}}'>{{$plan}}</option>  
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
			<a href="javascript:void(0);" class="btn" data-dismiss="modal">关闭</a>
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

		$('.changStatus').click(function(){

			var id     = $(this).next().val();
			var status = $(this).attr('data-status');
			var token = $("input[name='_token']").val();

			/*alert(id);
			alert(status);*/
			// alert($("input[name='_token']").val());

			$.ajax({

				type: 'POST',

				url: 'plan/changeStatus',

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
            format: 'yyyy-mm-dd 00:00:00',
            todayHighlight: true
        });
	});
</script>
@endsection
