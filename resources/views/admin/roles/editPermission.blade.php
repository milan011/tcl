@extends('layouts.main')

@section('head_content')

@endsection
	<link href="{{URL::asset('css/tcl/bootstrap-listTree.css')}}" rel="stylesheet">
	<style type="text/css">
		.listTree span{
			padding:0px;
		}
	</style>
@section('BreadcrumbTrail')
	<ul class="breadcrumb">
		<li>
			<i class="icon-home"></i>
			<a href="/admin">Home</a> 
			<i class="icon-angle-right"></i>
		</li>
		<li>
			<i class="icon-home"></i>
			<a href="{{route('admin.role.index')}}">角色管理</a> 
			<i class="icon-angle-right"></i>
		</li>
		<li><a href="#1f">角色权限设置:{{$role_info->name}}</a></li>
	</ul>
@endsection

@section('content')

@include('layouts.message')
	<div class="row-fluid sortable">

		<div class="box span6">
			<div class="box-content">
				<div class="listTree">
				<ul>
					<li>
						<span>
							<input type="checkbox" name="">
							门店设置
						</span>
						<ul>
							<li>
								<span>
									<input type="checkbox" name="">
									门店设置
								</span>
							</li>
							<li>
								<span>
									<input type="checkbox" name="">
									门店设置
								</span>
							</li>
						</ul>
					</li>
					<li>2</li>
					<li>3</li>
				</ul>
			</div>
				<ul style="background: none repeat scroll 0 0 #eee;border: 0 none;border-radius: 0;box-shadow: none;color: #aaa;line-height: 34px; margin: 0;">
					<li style="display: inline-block;line-height: 20px;">
						<a class="btn btn-primary" href="{{route('admin.role.create')}}">添加角色</a>
					</li>
					<li style="display: inline-block;line-height: 20px;">
						<a href="#" onclick="window.history.go(-1);return false;" class="btn ">返回</a>
					</li>
				</ul>         
			</div>
		</div>
		<div class="box span6">
			<div class="box-content">
			<div class="listTree">
				<ul>
					<li>
						<span>
							<input type="checkbox" name="">
							门店设置
						</span>
						<ul>
							<li>
								<span>
									<input type="checkbox" name="">
									门店设置
								</span>
							</li>
							<li>
								<span>
									<input type="checkbox" name="">
									门店设置
								</span>
							</li>
						</ul>
					</li>
					<li>2</li>
					<li>3</li>
				</ul>
			</div>
				<ul style="background: none repeat scroll 0 0 #eee;border: 0 none;border-radius: 0;box-shadow: none;color: #aaa;line-height: 34px; margin: 0;">
					<li style="display: inline-block;line-height: 20px;">
						<a class="btn btn-primary" href="{{route('admin.role.create')}}">添加角色</a>
					</li>
					<li style="display: inline-block;line-height: 20px;">
						<a href="#" onclick="window.history.go(-1);return false;" class="btn ">返回</a>
					</li>
				</ul>         
			</div>
	    </div>
@endsection

@section('script_content')
	<script src="{{URL::asset('js/tcl/bootstrap-listTree.js')}}"></script>
@endsection
