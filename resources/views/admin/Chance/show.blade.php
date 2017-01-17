@extends('layouts.main')

@section('head_content')

@endsection

@section('BreadcrumbTrail')
	<ul class="breadcrumb">
		<li>
			<i class="icon-home"></i>
			<a href="{{route('admin.index')}}">主页</a>  
			<i class="icon-angle-right"></i>
		</li>
		<li><a href="javascript:void(0);">销售机会详情</a></li>
	</ul>
@endsection

@section('content')

@include('layouts.message')
	<div class="row-fluid sortable">		
		<div class="box span12">
			<div class="box-content">
				<div class="box-header" data-original-title>
				<h2>
					<i class="halflings-icon user"></i><span class="break"></span>销售机会详情
				</h2>	
				<h2 style="float:right;">
					<a  href="javascript:void(0);" onclick="window.history.go(-1);return false;" class="">返回</a>
				</h2>							
				</div>
				<table  class="table table-striped table-bordered">
					<thead>
						<tr>
							<th></th>
							<th>车源信息</th>
							<th>求购信息</th>
						</tr>
					</thead> 
					<tbody>
    					<tr>
    						<td>编号</td>
							<td>{{$car_info->car_code}}</td>							
							<td>{{$want_info->want_code}}</td>							
						</tr>
						<tr>
    						<td>名称</td>
							<td>{{$car_info->name}}</td>							
							<td>{{$want_info->name}}</td>							
						</tr>
						<tr>
    						<td>期望价格</td>
							<td>{{$car_info->bottom_price}}-{{$car_info->top_price}}万</td>							
							<td>{{$want_info->bottom_price}}-{{$want_info->top_price}}</td>							
						</tr>
						<tr>
    						<td>车龄</td>
							<td>{{$car_info->age}}</td>							
							<td>{{$age[$want_info->age]}}</td>							
						</tr>
						<tr>
    						<td>行驶里程</td>
							<td>{{$car_info->mileage}}</td>							
							<td>{{$mileage_config[$want_info->mileage]}}</td>							
						</tr>
						<tr>
    						<td>变速箱</td>
							<td>{{$gearbox[$car_info->gearbox]}}</td>							
							<td>{{$gearbox[$want_info->gearbox]}}</td>							
						</tr>
						<tr>
    						<td>排量</td>
							<td>{{$capacity[$car_info->capacity]}}</td>							
							<td>{{$capacity[$want_info->capacity]}}</td>							
						</tr>
						<tr>
    						<td>登记日期</td>
							<td>{{substr($car_info->created_at, 0 ,10)}}</td>							
							<td>{{substr($want_info->created_at, 0 ,10)}}</td>							
						</tr>
						<tr>
    						<td>所属门店</td>
							<td>{{$car_info->belongsToShop->shop_name}}</td>							
							<td>{{$want_info->belongsToShop->shop_name}}</td>							
						</tr>
						<tr>
    						<td>负责人</td>
							<td>{{$car_info->belongsToUser->nick_name}}</td>							
							<td>{{$want_info->belongsToUser->nick_name}}</td>							
						</tr>
						<tr>
    						<td>备注</td>
							<td>{{$car_info->description}}</td>							
							<td>{{$want_info->remark}}</td>							
						</tr>						
					</tbody>
				</table>
				<span>
					@if(($chances->creater == Auth::id()) && ($chances->status == '1' || $chances->status == '3'))
					<!-- <form action="{{route('admin.plan.create')}}" method="post" style="display: inherit;margin:0px;">
						{{ csrf_field() }}
            			<input type="hidden" name="chance_id" value="{{$chances->id}}">
            			<input type="hidden" name="want_id" value="{{$want_info->id}}">
            			<input type="hidden" name="car_id" value="{{$car_info->id}}">
						<button class="btn btn-success" type="submit">
						<i class="icon-edit icon-white"></i> 约车
						</button>
					</form> -->
					@endif
					<a href="javascript:void(0);" onclick="window.history.go(-1);return false;" class="btn ">返回</a>
				</span> 		
			</div>			
		</div>
	</div>
@endsection

@section('script_content')
<!-- 引入确认框js -->
<!-- <script src="{{URL::asset('js/tcl/confirm.js')}}"></script>  -->
<script>
	
</script>
@endsection
