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

<div class="row-fluid sortable" style="height:100%;">
	<div class="box span12" style="height:100%;">
		<div class="box-content" style="overflow: auto;height: 80%;">
			<form class="form-horizontal" action="{{route('admin.category.store')}}" method="post" enctype="multipart/form-data">
				{!! csrf_field() !!}
				<fieldset>
					<div class="control-group">
					<label class="control-label" for="focusedInput">车型类别</label>
					<div class="controls">
					   <select id="category_type" name="category_type">
					  		@foreach($category_type as $key=>$category)											
					  		<option  value="{{$key}}">{{$category}}</option>	
					  		@endforeach											
						</select>
					</div>
				  </div>
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
						<input type="hidden" name="auto_add_name" value="">
					  <input class="input-xlarge focused" id="name" name="name" type="text" value="{{old('name')}}">
					</div>
				  </div>
				  
				  <div class="control-group">
					<label class="control-label" for="focusedInput">排量</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="capacity" name="capacity" type="text" value="{{old('capacity')}}">
					</div>
				  </div>

				  <div class="control-group  ">
                	<label class="control-label" for="shiftType">变速箱</label>
                	<div class="controls">
                  		<select id="gearbox" name="gearbox" >                        
					  		@foreach($gearbox as $key=>$gear)											
					  		<option  value="{{$key}}">{{$gear}}</option>	
					  		@endforeach	                     
                  		</select>
                	</div>
              	</div>

              	<div class="control-group  ">
                	<label class="control-label" for="shiftType">外观颜色</label>
                	<div class="controls">
                  		<select id="out_color" name="out_color" >                        
					  		@foreach($out_color as $key=>$color)											
					  		<option  value="{{$key}}">{{$color}}</option>	
					  		@endforeach	                     
                  		</select>
                	</div>
              	</div>

              	<div class="control-group  ">
                	<label class="control-label" for="shiftType">内饰颜色</label>
                	<div class="controls">
                  		<select id="out_color" name="out_color" >                        
					  		@foreach($inside_color as $key=>$color)											
					  		<option  value="{{$key}}">{{$color}}</option>	
					  		@endforeach	                     
                  		</select>
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
				  	<input type="hidden" name="ajax_request_url" value="{{route('brand.getChildBrand')}}">
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
<script src="{{URL::asset('js/tcl/category.js')}}"></script> 
@endsection