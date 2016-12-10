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
	</style>
@endsection

@section('BreadcrumbTrail')
	<ul class="breadcrumb">
		<li>
			<i class="icon-home"></i>
			<a href="{{route('admin.index')}}">主页</a>  
			<i class="icon-angle-right"></i>
		</li>
		<li><a href="#1f">车源列表</a></li>
	</ul>
@endsection

@section('content')

@include('layouts.message')
	<div class="row-fluid sortable">		
		<div class="box span12">

			<div class="box-content">
				<!-- <ul style="background: none repeat scroll 0 0 #eee;border: 0 none;border-radius: 0;box-shadow: none;color: #aaa;line-height: 34px; margin: 0;margin-bottom:5px;">
					<li style="display: inline-block;line-height: 20px;">
						<a class="btn btn-primary" href="{{route('admin.car.create')}}">添加车源</a>
					</li>
					<li style="display: inline-block;line-height: 20px;">
						<a href="#" onclick="window.history.go(-1);return false;" class="btn ">返回</a>
					</li>
				</ul> -->
				<div class="page-tabs">
            		<ul class="nav nav-tabs">
            		  <li class="active" id="#nomal_car">
            		    <a href="javascript:void(0);">正常车源</a>
            		  </li>
            		  <li id="#need_mod_car">
            		    <a href="javascript:void(0);">待跟进车源</a>
            		  </li>
            		  <li id="#discarded_car">
            		    <a href="javascript:void(0);">已废弃车源</a>
            		  </li>
            		  <li style="display: inline-block;line-height:20px;float:right;">
						<a class="btn btn-primary" href="{{route('admin.car.create')}}">添加车源</a>
					</li>
					<li style="display:inline-block;line-height:20px;float:right;">
						<a href="#" onclick="window.history.go(-1);return false;" class="btn ">返回</a>
					</li>
            		</ul>
        		</div>

				<table  class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>车源编号</th>
							<th>车源名称</th>
							<th>预售价</th>
							<th>上牌时间</th>
							<th>里程</th>							
							<th>变速箱</th>
							<th>车身颜色</th>
							<th>过户</th>
							<th>登记日期</th>
							<th>门店</th>
							<th>负责人</th>
							<th>操作</th>
						</tr>
					</thead> 
					<tbody>
						@foreach ($cars as $car)
    					<tr>
							<td>{{$car->car_code}}</td>
							<td>{{$car->name}}</td>
							<td>{{$car->top_price}}万</td>							
							<td>{{substr($car->plate_date, 0 ,10)}}</td>
							<td>{{$car->mileage}}万公里</td>							
							<td>{{$gearbox[$car->gearbox]}}</td>							
							<td>{{$out_color[$car->out_color]}}</td>						
							<td>{{$car->sale_number}}</td>							
							<td>{{substr($car->created_at, 0 ,10)}}</td>							
							<td>{{$car->belongsToShop->shop_name}}</td>							
							<td>{{$car->belongsToUser->nick_name}}</td>							
														
							<td class="center">
								<!-- <a class="btn btn-warning" href="{{route('admin.car.edit', ['car'=>$car->id])}}">
									<i class="icon-edit icon-white"></i> 编辑
								</a>
								<input type="hidden" value="{{$car->id}}">
								<span>
								<form action="{{route('admin.car.destroy', ['car'=>$car->id])}}" method="post" style="display: inherit;margin:0px;">
									{{ csrf_field() }}
            						{{ method_field('DELETE') }}
									<button class="btn btn-danger delete-confrim" type="button">
										<i class="icon-trash icon-white"></i> 删除
									</button>
								</form>
								</span> -->
								<div class="btn-group">
									<a class="btn btn-warning" href="{{route('admin.car.edit', ['car'=>$car->id])}}">
										<i class="icon-edit icon-white"></i> 编辑
									</a>
									<input type="hidden" value="{{$car->id}}">
									<span>
										<form action="{{route('admin.car.destroy', ['car'=>$car->id])}}" method="post" style="display: inherit;margin:0px;">
										{{ csrf_field() }}
            							{{ method_field('DELETE') }}
										<button class="btn btn-danger delete-confrim" type="button">
											<i class="icon-trash icon-white"></i> 删除
										</button>
									</form>
									</span>
									<div class="btn-group " role=”group”>
										<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
											更多
											<span class="caret"></span>
										</button>
										<ul class="dropdown-menu pull-right">
											<li>
												<a class="btn btn-warning" href="{{route('admin.car.edit', ['car'=>$car->id])}}">
													<i class="icon-edit icon-white"></i> 编辑
												</a>
											</li>
											<li><a class="btn btn-warning" href="{{route('admin.car.edit', ['car'=>$car->id])}}">
													<i class="icon-edit icon-white"></i> 编辑
												</a>	
											</li>
										</ul>
 							 		</div>
								</div>	
							</td>
						</tr>
						@endforeach							
					</tbody>
				</table>
				<div class="pagination pagination-centered">
					 {!! $cars->appends(['sort' => '1'])->links() !!}
				</div> 
				<form id="condition" action="" method="post">
					{!! csrf_field() !!}
					<input type="hidden" name="status" value="222">
				</form>
				         
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
			var token  = $("input[name='_token']").val();

			/*alert(id);
			alert(status);*/
			// alert($("input[name='_token']").val());

			$.ajax({
				
				type: 'POST',
				url: 'car/changeStatus',
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

		$('.pagination').children('li').children('a').click(function(){

			alert($(this).attr('href'));
			$('#condition').attr('action', $(this).attr('href'));
			alert($('#condition').attr('action'));
			$('#condition').submit();
			return false;
		});
	});
</script>
@endsection
