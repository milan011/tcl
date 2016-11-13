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
		<a href="{{route('admin.notice.index')}}">公告管理</a> 
		<i class="icon-angle-right"></i>
	</li>
	<li><a href="#1f">添加公告</a></li>
</ul>
@endsection
<!-- 主体 -->
@section('content')

@include('layouts.message')

<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-content">
			<form class="form-horizontal" action="{{route('admin.notice.store')}}" method="post">
				{!! csrf_field() !!}
				<fieldset>
				  <div class="control-group">
					<label class="control-label" for="focusedInput">公告标题</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="focusedInput" type="text" name="title">
					</div>
				  </div> 
				  <div class="control-group">
					<label class="control-label" for="selectError3">是否置顶</label>
					<div class="controls">
					  <select id="type" name="type">
					  	<option  value="0">不置顶</option>
					  	<option  value="1">置顶</option>
						</select>
					</div>
				</div>					
				   <div class="control-group">
					<label class="control-label" for="focusedInput">排序</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="email" name="email" type="text" value="{{old('email')}}">
					</div>
				  </div>       
				<div class="control-group">
				  <label class="control-label" for="textarea2">公告内容</label>
				  <div class="controls">
					<textarea class="cleditor" id="textarea2" name="content" rows="5"></textarea>
				  </div>
				</div>
				<div class="control-group">
					<label class="control-label" for="selectError3">是否启用</label>
					<div class="controls">
					  <select id="status" name="status" data-rel="chosen">
					  	<option  value="1">启用</option>
						<option  value="0">停用</option>
						
						</select>
					</div>
				</div>				
				  <div class="form-actions">
					<button type="submit" class="btn btn-primary">确定</button>
					<button class="btn" onclick="window.history.go(-1);return false;">返回</button>
				  </div>
				</fieldset>
			</form>				
		</div>
	</div>			
</div>   
@endsection