@extends('layouts.main')

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
		<a href="{{route('admin.notice.index')}}">公告管理</a> 
		<i class="icon-angle-right"></i>
	</li>
	<li><a href="#1f">公告详情</a></li>
</ul>
@endsection
<!-- 主体 -->
@section('content')

@include('layouts.message')

<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2>
				<i class="icon-trophy  align-justify"></i><span class="break"></span> 通知公告
			</h2>
			<!-- <div class="box-icon">  
				<a href="缩小窗口" class="btn-minimize"><i
					class="halflings-icon chevron-up"></i></a>
			</div> -->
		</div>
		<div class="box-content">
			<h2 align="center">{{$notice_info->title}}</h2>
			<h4 align="center">发布人：{{$notice_info->belongsToUser->name}}</h4>
			<h4 align="center">发布时间：{{$notice_info->created_at}}</h4>
			<p>{!! $notice_info->content !!}</p>	
			<a href="#" onclick="window.history.go(-1);return false;" class="btn ">返&nbsp;&nbsp;回</a>		
		</div>
	</div>			
</div>   
@endsection