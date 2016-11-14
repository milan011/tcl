@extends('layouts.main')

@section('BreadcrumbTrail')
	<ul class="breadcrumb">
		<li>
			<i class="icon-home"></i>
			<a href="{{route('admin.index')}}">主页</a> 
			<i class="icon-angle-right"></i>
		</li>
		<li><a href="#1f">权限管理</a></li>
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
						<a class="btn btn-primary" href="{{route('admin.permission.create')}}">添加权限</a>
					</li>
					<li style="display: inline-block;line-height: 20px;">
						<a href="#" onclick="window.history.go(-1);return false;" class="btn ">返回</a>
					</li>
				</ul>
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>权限名称</th>
							<th>权限描述</th>
							<th>权限标识</th>						
							<th>操作</th>
						</tr>
					</thead>   
					<tbody>
						@foreach ($permissions as $permission)
    					<tr>
							<td>{{$permission->name}}</td>
							<td class="center">{{$permission->description}}</td>						
							<td class="center">{{$permission->slug}}</td>	
							<td class="center">
								<a class="btn btn-warning" href="{{route('admin.permission.edit', ['permission'=>$permission->id])}}">
									<i class="icon-edit icon-white"></i> 编辑
								</a>
								<input type="hidden" value="{{$permission->id}}">
								<span>
								<form action="{{route('admin.permission.destroy', ['permission'=>$permission->id])}}" method="post" style="display: inherit;margin:0px;">
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
					 {!! $permissions->links() !!}
				</div>           
			</div>
		</div>
	</div>
@endsection

@section('script_content')
<script src="{{URL::asset('js/tcl/confirm.js')}}"></script>
@endsection
