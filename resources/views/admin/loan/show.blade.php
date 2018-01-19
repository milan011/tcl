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
		<a href="{{route('admin.index')}}">首页</a> 
		<i class="icon-angle-right"></i>
	</li>
	<li>
		<i class="icon-home"></i>
		<a href="{{route('admin.loan.index')}}/index">贷款列表</a> 
		<i class="icon-angle-right"></i>
	</li>
	<li><a href="javascript:void(0);">贷款详情</a></li>
</ul>
@endsection
<!-- 主体 -->
@section('content')

@include('layouts.message')

<div class="row-fluid">
	<div class="box span12" style="padding:10px;">

		<p class="title">[编号]:{{$loan->loan_code}}</p>
		<p class="detial">
			<i>客户:</i>
			<em>{{$loan->name}}</em>
		</p>

		<div class="col-xs-4">
			<p class="detial">
				<span>
					<i>电话:</i>
					{{$loan->telephone}}
				</span>
				<span>
					<i>身份证:</i>
					{{$loan->belongsToCustomer->customer_indentily_card}}
				</span>
				<span>
					<i>账单日:</i>
					{{$loan->bill_day}}
				</span>
			</p>
		</div>
		<div class="col-xs-4">
			<p class="detial">
				<span>
					<i>车辆名称:</i>
					{{$loan->car_name}}
				</span>
				<span>
					<i>评估价:</i>
					{{$loan->appraiser_price}}万
				</span>
				<span>
					<i>车贷金额:</i>
					{{$loan->loan_price}}万
				</span>
			</p>
		</div>
		<div class="col-xs-4">
			<p class="detial">
				<span>
					<i>保险贷款:</i>
					{{$loan->insurance_loan}}万
				</span>
				<span>
					<i>其他衍生贷款:</i>
					{{$loan->orther_loan}}万
				</span>
				<span>
					<i>总贷款:</i>
					{{$loan->total_loan}}万
				</span>
			</p>
		</div>

		<div class="col-xs-4">
			<p class="detial">
				<span>
					<i>贷款期数:</i>
					{{$loan->loan_phase}}
				</span>
				<span>
					<i>贷款放款日期(刷卡日期):</i>
					{{$loan->loan_date}}
				</span>
				<span>
					<i>首月还款:</i>
					{{$loan->repayment_frist}}元
				</span>
			</p>
		</div>

		<div class="col-xs-4">
			<p class="detial">
				<span>
					<i>每月还款:</i>
					{{$loan->repayment_everymonth}}元
				</span>
				<span>
					<i>保险起始日期:</i>
					{{$loan->loan_begin_date}}
				</span>
				<span>
					<i>车牌号(旧):</i>
					{{$loan->car_plate_old}}
				</span>
			</p>
		</div>

		

		<div class="col-xs-4">
			<p class="detial">
				<span>
					<i>车牌号(新):</i>
					{{$loan->car_plate_new}}
				</span>
				<span>
					<i>银行卡:</i>
					{{$loan->card}}
				</span>
				<span>
					<i>其他联系人1:</i>
					{{$loan->other_contact1}}
				</span>
			</p>
		</div>

		<div class="col-xs-4">
			<p class="detial">
				<span>
					<i>联系人1电话:</i>
					{{$loan->other_contact1_phone}}
				</span>
				<span>
					<i>其他联系人2:</i>
					{{$loan->other_contact2}}
				</span>
				<span>
					<i>其他联系人2电话:</i>
					{{$loan->other_contact2_phone}}
				</span>
			</p>
		</div>

		<div class="col-xs-4">
			<p class="detial">
				<span>
					<i>担保人:</i>
					{{$loan->recognizor}}
				</span>
				<span>
					<i>担保人电话:</i>
					{{$loan->recognizor_phone}}
				</span>
				<span>
					<i>担保人地址:</i>
					{{$loan->recognizor_adress}}
				</span>
			</p>
		</div>

		<div class="col-xs-4">
			<p class="detial">
				<span>
					<i>上牌日期:</i>
					{{$loan->plate_date}}
				</span>
				<span>
					<i>评估定位费用:</i>
					{{$loan->appraiser_cost}}元
				</span>
				<span>
					<i>手续费:</i>
					{{$loan->poundage}}元
				</span>
			</p>
		</div>

		<div class="col-xs-4">
			<p class="detial">
				<span>
					<i>汽贸利润:</i>
					{{$loan->qm_profits}}元
				</span>
				<span>
					<i>贷款部利润:</i>
					{{$loan->loan_profits}}元
				</span>
				<span>
					<i>家访费用:</i>
					{{$loan->visits_profits}}元
				</span>
			</p>
		</div>

		<div class="col-xs-4">
			<p class="detial">
				<span>
					<i>贷款渠道:</i>
					{{$loan_channels[$loan->loan_channels]}}
				</span>
				<span>
					<i>客户来源:</i>
					{{$loan->customer_sorcue}}
				</span>
				<span>
					<i>贷款状态:</i>
					{{$loan_stauts_config[$loan->loan_status]}}
				</span>
			</p>
		</div>

		<div class="col-xs-4">
			<p class="detial">
				<span>
					<i>保险状态:</i>
					{{$loan->insurance_status}}
				</span>
				<span>
					<i>贷款省份:</i>
					{{$loan->belongsToProvence->provence_name}}
				</span>
				<span>
					<i>贷款城市:</i>
					{{$loan->belongsToCity->city_name or ''}}
				</span>
			</p>
		</div>

		<div class="col-xs-4">
			<p class="detial">
				<span>
					<i>创建者:</i>
					{{$loan->belongsTouser->nick_name}}
				</span>
				<span>
					<i>创建时间:</i>
					{{$loan->created_at}}
				</span>
				<span>
					<i>备注:</i>
					{{$loan->remark}}
				</span>
			</p>
		</div>
		
	</div>	
</div>   
@endsection