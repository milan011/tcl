@extends('layouts.main')

@section('head_content')
	<!-- 弹出图片css -->
	<link type="text/css" rel="stylesheet" href="{{URL::asset('css/viewer.min.css')}}">
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
		<a href="{{route('admin.index')}}">首页</a> 
		<i class="icon-angle-right"></i>
	</li>
	<li>
		<i class="icon-home"></i>
		<a href="{{route('admin.carCustomer.index')}}/index">报名列表</a> 
		<i class="icon-angle-right"></i>
	</li>
	<li><a href="javascript:void(0);">报名详情</a></li>
</ul>
@endsection
<!-- 主体 -->
@section('content')

@include('layouts.message')

<div class="row-fluid">
	<div class="box span12" style="padding:10px;">
		<p class="detial">
			<i>客户:</i>
			<em>{{$carCustomer->name}}</em>
		</p>

		<div class="col-xs-4">
			<p class="detial">
				<span>
					<i>电话:</i>
					{{$carCustomer->mobile}}
				</span>
				<span>
					<i>咨询类型:</i>
					@if(!empty($carCustomer->enroll_type))
						<td>{{$enroll_type[$carCustomer->enroll_type]}}</td>
					@else
						<td>未知</td>
					@endif
				</span>
				<span>
					<i>车型:</i>
					{{$carCustomer->belongsToCategory->category_name or $carCustomer->category_name}}
				</span>
			</p>
		</div>
		<div class="col-xs-4">
			<p class="detial">
				<span>
					<i>城市:</i>
					{{$carCustomer->city_name  or ''}}
				</span>
				<span>
					<i>分发:</i>
					@if(!empty($carCustomer->belongsToShop->shop_name))
						<td style="color:#67c23a;">{{$carCustomer->belongsToShop->shop_name}}</td>	
					@else
						<td style="color:#f56c6c;">未分发</td>	
					@endif
				</span>
				<span>
					<i>渠道:</i>
					@if($carCustomer->source_type == '2') 
						微信
					@else
						400电话
					@endif
				</span>
			</p>
		</div>
		<div class="col-xs-4">
			<p class="detial">
				<span>
					<i>详情:</i>
					{{$carCustomer->contents}}万
				</span>
				<span>
					<i>备注:</i>
					{{$carCustomer->remark}}万
				</span>
			</p>
		</div>
	</div>
</div> 
@endsection
@section('script_content')
<!-- 引入全局辅助弹出图片 -->
<script src="{{URL::asset('js/viewer-jquery.min.js')}}"></script>
<script>
	$(document).ready(function(){

		$('#dowebok').viewer({
			url: 'data-original',
		});
	});
</script>
@endsection