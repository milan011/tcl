@extends('layouts.main')

<!-- 面包屑 -->
@section('BreadcrumbTrail')
<ul class="breadcrumb">
	<li>
		<i class="icon-home"></i>
		<a href="{{route('admin.index')}}">主页</a>  
		<i class="icon-angle-right"></i>
	</li>
	<li>
		<i class="icon-home"></i>
		<a href="{{route('admin.notice.index')}}">公告管理</a> 
		<i class="icon-angle-right"></i>
	</li>
	<li><a href="#1f">修改公告</a></li>
</ul>
@endsection
<!-- 主体 -->
@section('content')

@include('layouts.message')

<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-content">
			<form class="form-horizontal" action="{{route('admin.notice.update', ['notice'=>$notice_info->id])}}" method="post">
				{!! csrf_field() !!}
				{{ method_field('PUT') }}
				<fieldset>
				  <div class="control-group">
					<label class="control-label" for="focusedInput">公告标题</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="title" type="text" name="title" value="{{$notice_info->title}}">
					</div>
				  </div> 
				<div class="control-group">
					<label class="control-label" for="selectError3">是否置顶</label>
					<div class="controls">
					  <select id="is_top" name="is_top">
					  	<option  @if($notice_info->is_top == '0') selected @endif  value="0">不置顶</option>
					  	<option  @if($notice_info->is_top == '1') selected @endif  value="1">置顶</option>
						</select>
					</div>
				</div>	
				<div class="control-group">
					<label class="control-label" for="selectError3">公告类型</label>
					<div class="controls">
					  <select id="type" name="type">
					  	<option  @if($notice_info->type == '1') selected @endif  value="1">系统公告</option>
					  	<option  @if($notice_info->type == '2') selected @endif  value="2">临时公告</option>
						</select>
					</div>
				</div>				
				   <div class="control-group">
					<label class="control-label" for="focusedInput">排序</label>
					<div class="controls">
					  	<input class="input-xlarge focused" id="sort" name="sort" type="text" value="{{$notice_info->sort}}">
					</div>
				  </div>       
				<div class="control-group">
				  <label class="control-label" for="textarea2">公告内容</label>
				  <div class="controls">
					<textarea class="cleditor" id="textarea2" name="content" rows="5">
						{{$notice_info->content}}
					</textarea>

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