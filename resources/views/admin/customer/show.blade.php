@extends('layouts.main')

@section('head_content')
	<style type="text/css">
		.detial {
	font-size: 14px;
	line-height: 24px;
	color: #3A3A3A;
	font-style: normal;
	font-family: 'Microsoft YaHei', arial, tahoma, sans-serif;
}

.detial i {
	font-style: normal;
	color: #999;
	font-family: 'Microsoft YaHei', arial, tahoma, sans-serif;
}

.detial span {
	width: 30%;
	display: inline-block;
	font-family: 'Microsoft YaHei', arial, tahoma, sans-serif;
}

.detial em {
	color: #f84949;
	font-size: 28px;
	font-style: normal;
	font-weight: bold;
	line-height: 28px;
	font-family: 'Microsoft YaHei', arial, tahoma, sans-serif;
}

.title {
	color: #333;
	font-size: 20px;
	line-height: 30px;
	font-weight: normal;
	font: 'Microsoft YaHei', arial, tahoma, sans-serif;
}

.title em {
	color: #f84949;
	font-size: 28px;
	font-style: normal;
	font-weight: bold;
	line-height: 30px;
	font: 'Microsoft YaHei', arial, tahoma, sans-serif;
}
	</style>
@endsection

<!-- 面包屑 -->
@section('BreadcrumbTrail')
<ul class="breadcrumb">
	<li>
		<i class="icon-home"></i>
		<a href="{{route('admin.index')}}">Home</a> 
		<i class="icon-angle-right"></i>
	</li>
	<li>
		<i class="icon-home"></i>
		<a href="{{route('admin.customer.index')}}/index">客户列表</a> 
		<i class="icon-angle-right"></i>
	</li>
	<li><a href="javascript:void(0);">客户详情</a></li>
</ul>
@endsection
<!-- 主体 -->
@section('content')

@include('layouts.message')

<div class="row-fluid">
	<div class="box span12" style="padding:10px;">

		<p class="title">[客户]:{{$customer->name}}</p>
		<!-- <p class="detial">
			<i>客户:</i>
			<em>{{$customer->name}}</em>
		</p> -->

		<div class="col-xs-4">
			<p class="detial">
				
				<span>
					<i>电话:</i>
					{{$customer->telephone}}
				</span>
				<span>
					<i>地址:</i>
					{{$customer->address}}
				</span>
				<span>
					<i>QQ:</i>
					{{$customer->qq_number}}
				</span>
			</p>
		</div>
		<div class="col-xs-4">
			<p class="detial">
				<span>
					<i>身份证:</i>
					{{$customer->indentily_card}}
				</span>
				<span>
					<i>微信:</i>
					{{$customer->wx_number}}
				</span>
				<span>
					<i>备注:</i>
					{{$customer->remark}}
				</span>
			</p>
		</div>
		<div class="col-xs-4">
			<p class="detial">
				<span>
					<i>备注:</i>
					{{$customer->remark}}
				</span>
			</p>
		</div>
		
	</div>	

</div> 

<div class="row-fluid">
	<div class="box span12" style="padding:10px;">

		<p class="title">[车源信息]:{{$customer->name}}</p>
		<div class="box-content">
			<table  class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>编号</th>
						<th>名称</th>
						<th>价格</th>
						<th>上牌</th>
						<th>里程</th>							
						<th>变速箱</th>
						<th>颜色</th>
						<th>过户</th>
						<th>状态</th>
						<th>上传日期</th>
					</tr>
				</thead> 
				<tbody>
					@foreach ($customer_car_list as $car)
    				<tr>
						<td>{{$car->car_code}}</td>
						<td>{{$car->name}}</td>
						<td>{{$car->top_price}}万</td>							
						<td>{{substr($car->plate_date, 0 ,10)}}</td>
						<td>{{$car->mileage}}万公里</td>							
						<td>{{$gearbox[$car->gearbox]}}</td>							
						<td>{{$out_color[$car->out_color]}}</td>						
						<td>{{$car->sale_number}}</td>							
						<td>{{$car_stauts_config[$car->car_status]}}</td>							
						<td>{{substr($car->created_at, 0 ,10)}}</td>	
					</tr>
					@endforeach							
				</tbody>
			</table>
			<div class="pagination pagination-centered">
				 {!! $customer_car_list->links() !!}
			</div> 		
		</div>		
	</div>	
</div> 

<div class="row-fluid">
	<div class="box span12" style="padding:10px;">

		<p class="title">[求购信息]:{{$customer->name}}</p>
		<div class="box-content">
				<table  class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>编号</th>
							<th>车型</th>
							<th>价格</th>
							<th>里程</th>							
							<th>变速箱</th>
							<th>颜色</th>
							<th>排量</th>
							<th>状态</th>
							<th>上传日期</th>
						</tr>
					</thead> 
					<tbody>
						@foreach ($customer_want_list as $want)
    					<tr>
							<td>{{$want->want_code}}</td>
							<td>{{$want->name}}</td>
							<td>{{$want->bottom_price}}-{{$want->top_price}}万</td>							
							<!-- <td>1年</td> -->
							<td>{{$mileage_config[$want->mileage]}}</td>							
							<td>@if($want->gearbox == 0) 不限 @else {{$gearbox[$want->gearbox]}} @endif</td>			
							<td>{{$out_color[$want->out_color]}}</td>						
							<td>@if($want->capacity == 0) 不限 @else {{$capacity[$want->capacity]}} @endif</td>
							<td>{{$want_stauts_config[$want->want_status]}}</td>							
							<td>{{substr($want->created_at, 0 ,10)}}</td>	
						</tr>
						@endforeach							
					</tbody>
				</table>
				<div class="pagination pagination-centered">
					 {!! $customer_want_list->links() !!}
				</div> 		
			</div>		
	
</div>   
@endsection