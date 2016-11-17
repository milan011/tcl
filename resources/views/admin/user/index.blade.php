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
		<li><a href="#1f">用户管理</a></li>
	</ul>
@endsection

@section('content')

@include('layouts.message')
	<div class="row-fluid sortable">		
		<div class="box span12">
			<div class="box-content">
				<ul style="background: none repeat scroll 0 0 #eee;border: 0 none;border-radius: 0;box-shadow: none;color: #aaa;line-height: 34px; margin: 0;">
					<li style="display: inline-block;line-height: 20px;">
						<a class="btn btn-primary" href="{{route('admin.user.create')}}">添加用户</a>
					</li>
					<li style="display: inline-block;line-height: 20px;">
						<a href="#" onclick="window.history.go(-1);return false;" class="btn ">返回</a>
					</li>
				</ul>
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>用户名</th>
							<th>真实姓名</th>
							<th>所属门店</th>
							<th>用户角色</th>
							<!-- <th>是否启用</th> -->
							<th>操作</th>
						</tr>
					</thead>   
					<tbody>
						@foreach ($users as $user)
    					<tr>
							<td>{{$user->name}}</td>
							<td class="center">{{$user->nick_name}}</td>
							<td class="center">{{$user->hasOneShop->name}}</td>
							<td class="center">{{$user->hasManyRoles[0]->name}}</td>							
							<td class="center">
								<a class="btn btn-warning" href="{{route('admin.user.edit', ['user'=>$user->id])}}">
									<i class="icon-edit icon-white"></i> 编辑
								</a>
								<input type="hidden" value="{{$user->id}}">
								<span>
								<form action="{{route('admin.user.destroy', ['user'=>$user->id])}}" method="post" style="display: inherit;margin:0px;">
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
					 {!! $users->links() !!}
				</div>          
			</div>
		</div>
	</div>
@endsection

@section('script_content')
<!-- 引入确认框js -->
<script src="{{URL::asset('js/tcl/confirm.js')}}"></script> 
@endsection
