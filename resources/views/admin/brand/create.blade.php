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
		<a href="{{route('admin.brand.index')}}">品牌管理</a> 
		<i class="icon-angle-right"></i>
	</li>
	<li><a href="#1f">添加品牌</a></li>
</ul>
@endsection
<!-- 主体 -->
@section('content')

@include('layouts.message')

<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-content">
			<form class="form-horizontal" action="{{route('admin.brand.store')}}" method="post">
				{!! csrf_field() !!}
				<fieldset>
				  <div class="control-group">
					<label class="control-label" for="focusedInput">品牌名称</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="name" name="name" type="text" value="{{old('name')}}">
					</div>
				  </div>
				  <div class="control-group">
					<label class="control-label" for="focusedInput">品牌Logo</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="logo_img" name="logo_img" type="file" value="{{old('logo_img')}}">
					  <a  id="upload-button" href="#" onclick="saveImg()" class="btn btn-primary" style="margin-left:10px;">上传</a>
					</div>					
				  </div>
				  <!-- <div class="control-group">
					<a id="upload-button" href="#" onclick="saveImg()" class="btn btn-primary" style="margin-left:200px;">上传</a>
					<img id="loading" src="/metro/img/ajax-loader.gif" style="margin-left:200px;display:none;">
					</div> -->
				  <div class="control-group">
					<label class="control-label" for="focusedInput">品牌首字母</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="frist_letter" name="frist_letter" type="text" value="{{old('frist_letter')}}">
					</div>
				  </div>
				  <div class="control-group">
					<label class="control-label" for="focusedInput">品牌排序</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="sort" name="sort" type="text" value="{{old('sort')}}">
					</div>
				  </div>

				<div class="control-group">
					<label class="control-label" for="selectError3">是否启用</label>
					<div class="controls">
					  <select id="status" name="status">
					  	<option  value="1">启用</option>
						<option  value="0">停用</option>
						
						</select>
					</div>
				  </div>	

				  <div class="control-group">
					<label class="control-label" for="selectError3">是否推荐</label>
					<div class="controls">
					  <select id="recommend" name="recommend" >
					  	<option  value="1">推荐</option>
						<option  value="0">不推荐</option>						
						</select>
					</div>
				  </div>	  				
				  <div class="form-actions">
					<button type="submit"  onclick="check()" class="btn btn-primary">确定</button>
					<button class="btn" onclick="window.history.go(-1);return false;">返回</button>
				  </div>
				</fieldset>
			</form>				
		</div>
	</div>			
</div>   
@endsection
@section('script_content')
<!-- 引入确认框js -->
<script src="{{URL::asset('js/tcl/dynamic.js')}}"></script> 
<script>

</script>
@endsection