@extends('layouts.main')

<!-- 面包屑 -->
@section('BreadcrumbTrail')
<ul class="breadcrumb">
	<li>
		<i class="icon-home"></i>
		<a href="/admin">Home</a> 
		<i class="icon-angle-right"></i>
	</li>
	<li>
		<i class="icon-home"></i>
		<a href="{{route('admin.permission.index')}}">权限管理</a> 
		<i class="icon-angle-right"></i>
	</li>
	<li><a href="#1f">添加权限</a></li>
</ul>
@endsection
<!-- 主体 -->
@section('content')

@include('layouts.message')

<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-content">
			<form class="form-horizontal" action="{{route('admin.permission.store')}}" method="post">
				{!! csrf_field() !!}
				<fieldset>
				  <div class="control-group">
					<label class="control-label" for="focusedInput">权限名称</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="name" name="name" type="text" value="{{old('name')}}">
					</div>
				  </div>		  
				<div class="control-group">
					<label class="control-label" for="focusedInput">权限标识</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="slug" name="slug" type="text" value="{{old('slug')}}">
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="focusedInput">权限描述</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="description" name="description" type="text" value="{{old('description')}}">
					</div>
				  </div>				
				  <div class="form-actions">
					<button type="submit" class="btn btn-primary">确定</button>
					<button class="btn">返回</button>
				  </div>
				</fieldset>
			</form>				
		</div>
	</div>			
</div>   
@endsection