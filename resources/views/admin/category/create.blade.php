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
	<li><a href="#1f">添加车型</a></li>
</ul>
@endsection
<!-- 主体 -->
@section('content')

@include('layouts.message')

<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-content">
			<form class="form-horizontal" id="category_form" action="{{route('admin.category.store')}}" method="post" enctype="multipart/form-data">
				{!! csrf_field() !!}
				<fieldset>
				  <div class="control-group">
					<label class="control-label" for="selectError3">车型品牌</label>
					<div class="controls">
					  	<select id="top_category" name="">
					  		<option value="0">请选择品牌</option>
					  		@foreach ($all_top_brands as $brand)	
					  		<option value="{{$brand->id}}">{{$brand->name}}</option>
					  		@endforeach										
						</select>
						<select id="second_category" name="" style="display:none;">
					  		<option  value="0">请选择一级品牌</option>											
						</select>
						<select id="thrid_category" name="brand_id" style="display:none;">
					  		<option  value="0">请选择二级品牌</option>											
						</select>

					</div>
				  </div>
				  <div class="control-group">
					<label class="control-label" for="focusedInput">车型名称</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="name" name="name" type="text" value="{{old('name')}}">
					</div>
				  </div>
				  <!-- <div class="control-group">
					<label class="control-label" for="focusedInput">车型Logo</label>
					<div class="controls">
					  	<input class="input-xlarge focused" id="logo_img" name="logo_img" type="file" value="{{old('logo_img')}}">
					  	<a id="upload-img" href="#" class="btn btn-primary" style="margin-left:10px;">上传</a>
					</div>					
				  </div> -->
				  <div class="control-group">
					<label class="control-label" for="focusedInput">车款</label>
					<div class="controls">
					   <select id="year_type" name="year_type">
					  		<option  value="">请选择年份</option>
					  		@foreach($year_type as $year)											
					  		<option  value="{{$year}}">{{$year}}</option>											
					  		@endforeach											
						</select>
					</div>
				  </div>
				  <div class="control-group">
					<label class="control-label" for="focusedInput">车型排序</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="sort" name="sort" type="text" value="{{ (null !== old('sort')) ? old('sort') : '10'}}">
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
				  	<input type="hidden" name="ajax_request_url" value="{{route('admin.brand.getChildBrand')}}">
					<button type="button" id="category_add" class="btn btn-primary">确定</button>
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
<script src="{{URL::asset('js/tcl/category.js')}}"></script> 
<script>
	$(document).ready(function(){

		$('#category_add').click(function(){

			var request_url = '{{route('admin.category.checkRepeat')}}';

			$.ajax({
				method: 'POST',
				url: request_url,
				data:$("#category_form").serialize(),
				dataType: 'json',
				headers: {		
					'X-CSRF-TOKEN': '{{ csrf_token() }}'		
				},
				success:function(data){

					if(data.status == '1'){
						//车型重复
						alert(data.message);
						return false;
					}else{
						//车型不重复
						$('#category_form').submit();
					}
				},
				error: function(xhr, type){
	
					alert('添加车型失败，请重新添加或联系管理员');
				}
			});
		});
	});
</script>
@endsection