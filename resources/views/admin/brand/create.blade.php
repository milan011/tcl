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
	<li><a href="#1f">添加品牌</a></li>
</ul>
@endsection
<!-- 主体 -->
@section('content')

@include('layouts.message')

<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-content">
			<form class="form-horizontal" action="{{route('admin.brand.store')}}" method="post" enctype="multipart/form-data">
				{!! csrf_field() !!}
				<fieldset>
				<div class="control-group">
					<label class="control-label" for="selectError3">品牌类型</label>
					<div class="controls">
					  <select id="brand_type" name="brand_type">
					  	<option  value="0">顶级品牌</option>
						<option  value="1">一级品牌</option>						
						<option  value="2">车系</option>						
						</select>
					</div>
				  </div>
				  <div id="pid_select" class="control-group" style="display:none;">
					<label class="control-label" for="selectError3">父品牌</label>
					<div class="controls">
					  	<select id="top_brand" name="pid[]">
					  		<option value="0">请选择顶级品牌</option>
					  		@foreach ($all_top_brands as $brand)	
					  		<option value="{{$brand->id}}">{{$brand->name}}</option>
					  		@endforeach										
						</select>
						<span id="pid2_select" style="display:none;">
							<select id="second_brand" name="pid[]">
					  			<option  value="0">请选择一级品牌</option>											
							</select>
						</span>
					</div>
				  </div>
				  <div class="control-group">
					<label class="control-label" for="focusedInput">品牌名称</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="name" name="name" type="text" value="">
					</div>
				  </div>
				  <div class="control-group">
					<label class="control-label" for="focusedInput">品牌Logo</label>
					<div class="controls">
					  	<input class="input-xlarge focused" id="logo_img" name="logo_img" type="file" value="{{old('logo_img')}}">
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
					  <input class="input-xlarge focused" id="frist_letter" name="frist_letter" type="text" value="{{old('frist_letter')}}">
					</div>
				  </div>
				  <div class="control-group">
					<label class="control-label" for="focusedInput">品牌排序</label>
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
					<button type="submit" id="brand_add" class="btn btn-primary">确定</button>
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
<script src="{{URL::asset('js/tcl/brand.js')}}"></script> 
<script>
	$(document).ready(function(){

		$('#brand_add').click(function(){

			var brand_type   = $('#brand_type').val();  //品牌级别
			var top_brand    = $('#top_brand').val();   //顶级品牌
			var second_brand = $('#second_brand').val(); //一级品牌

			/*alert(brand_type);
			alert(top_brand);
			alert(second_brand);*/

			if(brand_type < 0 ){
				//没有选择品牌级别
				alert('请选择品牌级别');
				return false;
			}else{

				if(brand_type == 0){
					//顶级品牌添加
					/*alert('可以添加');
					return false;*/
				}else if(brand_type == 1){
					//一级级品牌添加
					if(top_brand == 0){

						alert('请选择顶级品牌');
						return false;
					}

				}else if(brand_type == 2){
					//车系添加
					if(second_brand == 0 || top_brand == 0){
						
						alert('请选择一级品牌');
						return false;
					}
				}
			}
		});
	});
</script>
@endsection