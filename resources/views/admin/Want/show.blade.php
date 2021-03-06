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
		<a href="{{route('admin.want.index')}}/index">所有求购信息</a> 
		<i class="icon-angle-right"></i>
	</li>
	<li><a href="javascript:void(0);">求购信息详情</a></li>
</ul>
@endsection
<!-- 主体 -->
@section('content')

@include('layouts.message')

<div class="row-fluid sortable">
	<div class="box span12" style="padding:10px;">

		<p class="title">【求购】{{$wants->name}}</p>
		<p class="detial">
			<i>底价:</i>
			<em>{{$wants->top_price}}</em>
			<i>万元</i>
		</p>

		<div class="col-xs-4">
			<p class="detial">
				<span>
					<i>排量:</i>
					{{$capacity[$wants->capacity]}}
				</span>
				<span>
					<i>变速箱：</i>
					{{$gearbox[$wants->gearbox]}}
				</span>
				<span>
					<i>里程：</i>
					{{$wants->mileage}}万公里
				</span>
			</p>
		</div>
		<div class="col-xs-4">
			<p class="detial">
				<span>
					<i>过户次数：</i>
					{{$wants->sale_number}}
				<i>次</i>
				</span>
				<span>
					<i>车身颜色：</i>
					{{$out_color[$wants->out_color]}}
				</span>
				<span>
					<i>车辆类别：</i>
					{{$category_type[$wants->want_type]}}
				</span>
			</p>
		</div>
		<div class="col-xs-4">
			<p class="detial">
				<span>
					<i>上牌日期：</i>
					{{$wants->plate_date}}
				</span>
				<span>
					<i>检车日期：</i>
					{{$wants->plate_end}}
				</span>
				<span>
					<i>登记日期：</i>
					{{$wants->created_at}}
				</span>
			</p>
		</div>
		<div class="col-xs-4">
			<p class="detial">
				<span>
					<i>编号：</i>
					{{$wants->want_code}}
				</span>
				<span>
					<i>车况：</i>
					{{$wants->description}}
				</span>
			</p>
		</div>

		<div class="detial">
			<span>
				<i>销售顾问：</i>{{$wants->belongsTouser->nick_name}}{{$wants->belongsTouser->creater_telephone}}
			<em></em>
			</span>
			<span>
				<i>车主：</i>{{$wants->belongsToCustomer->customer_name}}{{$wants->belongsToCustomer->customer_telephone}}
			<em></em>
			</span>
		</div>
		<span>
			<!-- <form action="{{route('admin.chance.create')}}" method="post" style="display: inherit;margin:0px;">
				{{ csrf_field() }}
            		<input type="hidden" name="car_id" value="{{$wants->id}}">
					<button class="btn btn-success" type="submit">
					<i class="icon-edit icon-white"></i> 匹配
					</button>
			</form> -->
			<a href="javascript:void(0);" onclick="window.history.go(-1);return false;" class="btn ">返回</a>
		</span>
	</div>		
</div>   
@endsection