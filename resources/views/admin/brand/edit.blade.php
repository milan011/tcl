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
		<a href="{{route('admin.brand.index')}}">品牌列表</a> 
		<i class="icon-angle-right"></i>
	</li>
	<li><a href="#1f">修改品牌</a></li>
</ul>
@endsection
<!-- 主体 -->
@section('content')

@include('layouts.message')

<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-content">
			<form class="form-horizontal" action="{{route('admin.brand.update', ['brand'=>$brand_info->id])}}" method="post" enctype="multipart/form-data">
				{!! csrf_field() !!}
				{{ method_field('PUT') }}
				<fieldset>
				<div class="control-group">
					<label class="control-label" for="selectError3">品牌类型</label>
					<div class="controls">
					  	<input type="text" readonly="readonly" value="{{$pid_info['name']}}">
					</div>					
				</div>
				<div class="control-group">
					<label class="control-label" for="selectError3">品牌信息</label>
					<div class="controls">
					  	<input type="text" readonly="readonly" value="{{$pid_info['top_name']}} @if(isset($pid_info['perv_name'])) --- {{$pid_info['perv_name']}} @endif">
					</div>					
				</div>
				  
				  <div class="control-group">
					<label class="control-label" for="focusedInput">品牌名称</label>
					<div class="controls">
						<input type="hidden" name="pid" value="{{$pid_info['pid']}}">
					  <input class="input-xlarge focused" id="name" name="name" type="text" value="{{$brand_info->name}}">
					</div>
				  </div>
				  <div class="control-group">
					<label class="control-label" for="focusedInput">品牌Logo</label>
					<div class="controls">
					  	<input class="input-xlarge focused" id="logo_img" name="logo_img" type="file" value="{{$brand_info->logo_img}}">
					  	<!-- <a id="upload-img" href="#" class="btn btn-primary" style="margin-left:10px;">上传</a> -->
					</div>					
				  </div>
				  <!-- <div class="control-group">
					<a id="upload-button" href="#" onclick="saveImg()" class="btn btn-primary" style="margin-left:200px;">上传</a>
					<img id="loading" src="/metro/img/ajax-loader.gif" style="margin-left:200px;display:none;">
					</div> -->
				  <div class="control-group">
					<label class="control-label" for="focusedInput">品牌首字母</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="frist_letter" name="frist_letter" type="text" value="{{$brand_info->frist_letter}}">
					</div>
				  </div>
				  <div class="control-group">
					<label class="control-label" for="focusedInput">品牌排序</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="sort" name="sort" type="text" value="{{$brand_info->sort}}">
					</div>
				  </div>

				<div class="control-group">
					<label class="control-label" for="selectError3">是否启用</label>
					<div class="controls">
					  <select id="status" name="status">
					  	<option @if($brand_info->status == '1') selected @endif value="1">启用</option>
						<option @if($brand_info->status == '0') selected @endif value="0">停用</option>
						
						</select>
					</div>
				  </div>	

				  <div class="control-group">
					<label class="control-label" for="selectError3">是否推荐</label>
					<div class="controls">
					  <select id="recommend" name="recommend" >
					  	<option @if($brand_info->recommend == '1') selected @endif value="1">推荐</option>
						<option @if($brand_info->recommend == '0') selected @endif value="0">不推荐</option>						
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
@section('script_content')
<!-- 引入品牌级联js -->
<!-- <script src="{{URL::asset('js/tcl/brand.js')}}"></script>  -->
@endsection