@extends('layouts.main')

@section('BreadcrumbTrail')
	<ul class="breadcrumb">
		<li>
			<i class="icon-home"></i>
			<a href="{{route('admin.index')}}">主页</a>  
			<i class="icon-angle-right"></i>
		</li>
	</ul>
@endsection

@section('content')
<div class="row-fluid">			
	<div class="span2 statbox yellow span3" ontablet="span6" ondesktop="span3">
		
		<div class="number">{{$cars_num}}&nbsp; <i class="icon-truck"></i></div>
		<div class="title">车&nbsp;源</div>
		<div class="footer" style="width:100%;">
			<a href="{{route('admin.car.self')}}">&nbsp; &nbsp; 我的车源 &nbsp; &nbsp;</a>
			<a href="{{route('admin.car.create')}}" style="float:right;"> 车源添加 &nbsp; &nbsp;</a>
		</div>	
	</div>
	<div class="span2 statbox blue span3" ontablet="span6" ondesktop="span3">
		
		<div class="number">{{$wants_num}}&nbsp; <i class="icon-pushpin"></i></div>
		<div class="title">客&nbsp;源</div>
		<div class="footer" style="width:100%;">
			<a href="{{route('admin.want.self')}}"> &nbsp; &nbsp;我的求购 &nbsp; &nbsp;</a>
			<a href="{{route('admin.want.create')}}" style="float:right;"> 求购添加 &nbsp; &nbsp;</a>
		</div>
	</div>
	<div class="span2 statbox green  noMargin span3" ontablet="span6" ondesktop="span3">
		
		<div class="number">{{$chances_num}}&nbsp; <i class="icon-eye-open"></i></div>
		<div class="title">销售机会</div>
		<div class="footer" >
			<a href="{{route('admin.chance.self')}}"> &nbsp; &nbsp;我的销售机会&nbsp; &nbsp;</a>
		</div>
	</div>
	<div class="span2 statbox green  noMargin span3" ontablet="span6" ondesktop="span3">
		
		<div class="number">{{$plans_num}}&nbsp; <i class="icon-legal"></i></div>
		<div class="title">约&nbsp;车</div>
		<div class="footer" >
			<a href="{{route('admin.plan.self')}}"> &nbsp; &nbsp;我的约车信息&nbsp; &nbsp;</a>
		</div>
	</div>
	<div class="span2 statbox pink span3" ontablet="span6" ondesktop="span3">
		
		<div class="number">{{$transcations_num}}&nbsp; <i class="icon-shopping-cart"></i></div>
		<div class="title">交&nbsp;易</div>
		<div class="footer">
			<a href="{{route('admin.transcation.self')}}" style="float:right;"> &nbsp; &nbsp;我的交易信息 &nbsp; &nbsp;</a>
		</div>
	</div>	
</div>
<div class="row-fluid">
	<div class="box span6" ontablet="span6" ondesktop="span6">
				<div class="box-header">
					<h2><i class="halflings-icon  list"></i><span class="break"></span>跟进提醒</h2>
					<!-- <div class="box-icon">
						<a href="#" class="btn-minimize"><i class="halflings-icon  chevron-up"></i></a>
						<a href="#"><i class="halflings-icon   share-alt"></i></a>
					</div> -->
				</div>
				<div class="box-content">
					<ul class="nav tab-menu nav-tabs" id="myTab">
						<li class="active"><a href="#car">车源</a></li>
						<li><a href="#want">求购</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div id="car" class="tab-pane active">
							<div class="box-content">
								<ul class="dashboard-list metro">
									@foreach($need_follow_cars as $car)					
									<li>
										<a href="/order/edit?id=D-484533472">
											<i class="icon-legal red  "></i> 
											{{substr($car->created_at, 0 ,10)}}
											<font style="color:#268bd2;">
												{{$car->name}}
											</font>                               
										</a>
										<a class="btn btn-warning" href="{{route('admin.car.edit', ['car'=>$car->id])}}" style="float:right;">
											 编辑
										</a>
										<a class="btn btn-success" href="javascript:void(0);" style="float:right;">
											 跟进
										</a>
										<!-- <button class="btn btn-success" id="follow_quickly">
											<i class="icon-edit icon-white"></i> 跟进
										</button> -->
									</li>	
									@endforeach			
								</ul>
							</div>
						</div>
						<div id="want" class="tab-pane">
							<div class="box-content">
								<ul class="dashboard-list metro">
								@foreach($need_follow_wants as $want)					
									<li>
										<a href="/order/edit?id=D-484533472">
											<i class="icon-legal red  "></i>           
											{{substr($want->created_at, 0 ,10)}}
											<font style="color:#268bd2;">
												{{$want->name}}
											</font>                               
										</a>
										<a class="btn btn-warning" href="{{route('admin.want.edit', ['want'=>$want->id])}}" style="float:right;">
											 编辑
										</a>
										<a class="btn btn-success" href="javascript:void(0);" style="float:right;">
											 跟进
										</a>
										<!-- <button class="btn btn-success" id="follow_quickly">
											<i class="icon-edit icon-white"></i> 跟进
										</button> -->
									</li>	
									@endforeach
								</ul>
							</div>
						</div>
					</div>
					
				</div>
			</div><!--/span-->	
	<div class="box span6">
		<div class="box-header" data-original-title="">
			<h2>
				<i class="icon-bell  align-justify"></i><span class="break"></span> 通知公告
			</h2>
			<div class="box-icon">
				<a href="缩小窗口" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon  remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			<h2 style="text-align: center;">各店面重视车源和客源登记共享！
			</h2>
			<h2 style="text-align: center;">
				<small>发布人：{{$notice->belongsToUser->nick_name}} 发布时间：{{substr($notice->created_at, 0 ,10)}}</small>
			</h2>
			<div>{!! $notice->content !!}</div>
			
			<p style="text-align:center">
				<a href="{{route('admin.notice.show', ['notice'=>$notice->id])}}" class="btn btn-large btn-primary"><i class="icon-chevron-left icon-white"></i> 全文</a>
					<!-- <a	href="/notice/main" class="btn btn-large"><i
					class="icon-download-alt"></i> 更多...</a> --> 
			</p>
			<div class="clearfix"></div>
		</div>
	</div>	
</div>
@endsection