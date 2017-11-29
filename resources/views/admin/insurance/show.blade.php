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
		<a href="{{route('admin.insurance.index')}}/index">保险列表</a> 
		<i class="icon-angle-right"></i>
	</li>
	<li><a href="javascript:void(0);">保险详情</a></li>
</ul>
@endsection
<!-- 主体 -->
@section('content')

@include('layouts.message')

<div class="row-fluid">
	<div class="box span12" style="padding:10px;">

		<p class="title">[编号]:{{$insurance->insurance_code}}</p>
		<p class="detial">
			<i>客户:</i>
			<em>{{$insurance->name}}[电话:{{$insurance->telephone}}]</em>
		</p>

		<div class="col-xs-4">
			<p class="detial">
				<span>
					<i>保险公司交强/商业:</i>
					{{$insurance_company_commercial[$insurance->company_commercial] or ''}}/{{$insurance_company_interest[$insurance->company_interest] or ''}}
				</span>
				<span>
					<i>车牌号:</i>
					{{$insurance->car_plate}}
				</span>
				<span>
					<i>保险来源:</i>
					{{$insurance_sor[$insurance->source]}}
				</span>
			</p>
		</div>
		<div class="col-xs-4">
			<p class="detial">
				
				<span>
					<i>交强金额:</i>
					{{$insurance->traffic_price}}
				</span>
				<span>
					<i>交强到期:</i>
					{{$insurance->traffic_date}}
				</span>
				
			</p>
		</div>
		<div class="col-xs-4">
			<p class="detial">
				
				<span>
					<i>商业金额:</i>
					{{$insurance->vehicle_price}}
				</span>
				<span>
					<i>商业到期:</i>
					{{$insurance->vehicle_date}}
				</span>
			</p>
		</div>
		<div class="col-xs-4">
			<p class="detial">
				
				<span>
					<i>车船税:</i>
					{{$insurance->vehicle_tax}}
				</span>
			</p>
		</div>
		<div class="col-xs-4">
			<p class="detial">
				<span>
					<i>总保费:</i>
					{{$insurance->total_price}}
				</span>
			</p>
		</div>
		<div class="col-xs-4">
			<p class="detial">
				
				<span>
					<i>交强利率:</i>
					<span style="color:red;">{{$insurance->interest_rate}}</span>
				</span>
				<span>
					<i>商险利率:</i>
					<span style="color:red;">{{$insurance->commercial_rate}}</span>
				</span>
				<span>
					<i>返点:</i>
					<span style="color:red;">{{$insurance->rebeat}}</span>
				</span>
			</p>
		</div>
		
		<div class="col-xs-4">
			<p class="detial">
				
				<span>
					<i>交强提成比例:</i>
					<span style="color:blue;">{{$insurance->royalty_ratio}}</span>
				</span>
				<span>
					<i>商险提成比例:</i>
					<span style="color:blue;">{{$insurance->commercial_ratio}}</span>
				</span>
				<span>
					<i>提成:</i>
					<span style="color:blue;">{{$insurance->royalty}}</span>
				</span>
			</p>
		</div>

		<div class="col-xs-4">
			<p class="detial">
				
				<span>
					<i>利润:</i>
					<span style="color:brown;">{{$insurance->profit}}</span>
				</span>
				<span>
					<i>业务员:</i>
					{{$insurance->salesman}}
				</span>
				<span>
					<i>业务员提成:</i>
					{{$insurance->need_pay}}
				</span>
			</p>
		</div>

		

		<div class="col-xs-4">
			<p class="detial">
				
				<span>
					<i>保险省份:</i>
					{{$insurance->belongsToProvence->provence_name}}
				</span>
				<span>
					<i>保险城市:</i>
					{{$insurance->belongsToCity->city_name or ''}}
				</span>
			</p>
		</div>

		<div class="col-xs-4">
			<p class="detial">
				
				<span>
					<i>创建者:</i>
					{{$insurance->belongsTouser->nick_name or ''}}
				</span>
				<span>
					<i>创建时间:</i>
					{{$insurance->created_at}}
				</span>
				
			</p>
		</div>

		<div class="col-xs-4">
			<p class="detial">
				<span>
					<i>备注:</i>
					{{$insurance->remark}}
				</span>
				<span>
					<i>保险明细:</i>
					{{$insurance->detail}}
				</span>
			</p>
		</div>
		
	</div>	
</div>   
@endsection