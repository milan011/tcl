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
		<a href="{{route('admin.category.index')}}">车型列表</a> 
		<i class="icon-angle-right"></i>
	</li>
	<li><a href="#1f">修改车型</a></li>
</ul>
@endsection
<!-- 主体 -->
@section('content')

@include('layouts.message')

<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-content">
			<form class="form-horizontal" action="{{route('admin.category.update', ['category'=>$category_info->id])}}" method="post" enctype="multipart/form-data">
				{!! csrf_field() !!}
				{{ method_field('PUT') }}
				<fieldset>
				
				<div class="control-group">
					<label class="control-label" for="selectError3">品牌信息</label>
					<div class="controls">
					  	<input type="text" readonly="readonly" value="{{$pid_info['top_name']}} @if(isset($pid_info['perv_name'])) --- {{$pid_info['perv_name']}} @endif --- {{$category_info->belongsToBrand->brand_name}}">
					</div>					
				</div>
				  
				  <div class="control-group">
					<label class="control-label" for="focusedInput">车型名称</label>
					<div class="controls">
					  <input type="hidden" name="brand_id" value="{{$category_info->brand_id}}">
					  <input class="input-xlarge focused" id="name" name="name" type="text" value="{{$category_info->name}}">
					</div>
				  </div>
				  <!-- <div class="control-group">
					<label class="control-label" for="focusedInput">车型Logo</label>
					<div class="controls">
					  	<input class="input-xlarge focused" id="car_img" name="car_img" type="file" value="{{$category_info->car_img}}">
					  	<a id="upload-img" href="#" class="btn btn-primary" style="margin-left:10px;">上传</a>
					</div>					
				  </div> -->
				  <div class="control-group">
					<label class="control-label" for="focusedInput">车款</label>
					<div class="controls">
					   <select id="year_type" name="year_type">
					  		<option  value="">请选择年份</option>											
					  		@foreach($year_type as $year)											
					  		<option @if($category_info->year_type == $year) selected @endif  value="{{$year}}">{{$year}}</option>											
					  		@endforeach											
						</select>
					</div>
				  </div>
				  <div class="control-group">
					<label class="control-label" for="focusedInput">车型排序</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="sort" name="sort" type="text" value="{{$category_info->sort}}">
					</div>
				  </div>

				<div class="control-group">
					<label class="control-label" for="selectError3">是否启用</label>
					<div class="controls">
					  <select id="status" name="status">
					  	<option @if($category_info->status == '1') selected @endif value="1">启用</option>
						<option @if($category_info->status == '0') selected @endif value="0">停用</option>
						
						</select>
					</div>
				  </div>	

				  <div class="control-group">
					<label class="control-label" for="selectError3">是否推荐</label>
					<div class="controls">
					  <select id="recommend" name="recommend" >
					  	<option @if($category_info->recommend == '1') selected @endif value="1">推荐</option>
						<option @if($category_info->recommend == '0') selected @endif value="0">不推荐</option>						
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
<!-- 引入车型级联js -->
<!-- <script src="{{URL::asset('js/tcl/category.js')}}"></script>  -->
<script>
	$(document).ready(function(){

		// $('#year_type').
	});
</script>
@endsection