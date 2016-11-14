@extends('layouts.main')

@section('head_content')
	
@endsection

@section('BreadcrumbTrail')
	<ul class="breadcrumb">
		<li>
			<i class="icon-home"></i>
			<a href="/admin">Home</a> 
			<i class="icon-angle-right"></i>
		</li>
		<li><a href="#1f">通知公告</a></li>
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
						<a class="btn btn-primary" href="{{route('admin.notice.create')}}">添加公告</a>
					</li>
					<li style="display: inline-block;line-height: 20px;">
						<a href="#" onclick="window.history.go(-1);return false;" class="btn ">返回</a>
					</li>
				</ul>
				@if($notices->count() != 0)
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>序号</th>
							<th>标题</th>
							<th>发布人</th>
							<th>时间</th>
							<th>操作</th>
						</tr>
					</thead>   
					<tbody>
						@foreach ($notices as $notice)
    					<tr>
							<td>{{$notice->id}}</td>						
							<td class="center">{{$notice->title}}</td>
							<td class="center">{{$notice->belongsToUser->name}}</td>			
							<td class="center">{{$notice->created_at}}</td>			
							<td class="center">
								<a class="btn btn-warning" href="{{route('admin.notice.edit', ['notice'=>$notice->id])}}">
									<i class="icon-edit icon-white"></i> 编辑
								</a>
								<a class="btn btn-info" href="{{route('admin.notice.show', ['notice'=>$notice->id])}}">
									<i class="icon-edit icon-white"></i> 查看
								</a>
								<input type="hidden" value="{{$notice->id}}">
								<span>
								<form action="{{route('admin.notice.destroy', ['notice'=>$notice->id])}}" method="post" style="display: inherit;margin:0px;">
									{{ csrf_field() }}
            						{{ method_field('DELETE') }}
									<button class="btn btn-danger delete-confrim" type="button">
										<i class="icon-trash icon-white"></i> 删除
									</button>
								</form>
								</span>
							</td>
						</tr>
						@endforeach							
					</tbody>
				</table>
				<div class="pagination pagination-centered">
					 {!! $notices->links() !!}
				</div>
				@else
				<h2 style="text-align:center;">暂无公告</h2>
				@endif          
			</div>
		</div>
	</div>
@endsection

@section('script_content')
<!-- 引入确认框js -->
<script src="{{URL::asset('js/tcl/confirm.js')}}"></script> 
@endsection
