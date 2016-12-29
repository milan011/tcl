@extends('layouts.main')

@section('head_content')
	<style type="text/css">
		
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
				<ul style="background: none repeat scroll 0 0 #eee;border: 0 none;border-radius: 0;box-shadow: none;color: #aaa;line-height: 34px; margin: 0;">
					<li style="display: inline-block;line-height: 20px;">
						<a href="#" onclick="window.history.go(-1);return false;" class="btn ">返回</a>
					</li>
				</ul>
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
							<td>{{$transcation->belongsToChance->belongsToUser->nick_name}}</td>	
							<td>{{$transcation->belongsToChance->belongsToShop->shop_name}}</td>							
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
@endsection

@section('script_content')
<!-- 引入确认框js -->
<script src="{{URL::asset('js/tcl/confirm.js')}}"></script> 
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
	});
</script>
@endsection
