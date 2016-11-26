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
			<form class="form-horizontal" action="{{route('admin.brand.store')}}" method="post" enctype="multipart/form-data">
				{!! csrf_field() !!}
				<fieldset>
				<div class="control-group">
					<label class="control-label" for="selectError3">品牌类型</label>
					<div class="controls">
					  <select id="brand_type" name="brand_type">
					  	<option  value="0">顶级品牌</option>
						<option  value="1">一级品牌</option>						
						<option  value="2">二级品牌</option>						
						</select>
					</div>
				  </div>
				  <div id="pid_select" class="control-group" style="display:none;">
					<label class="control-label" for="selectError3">父品牌</label>
					<div class="controls">
					  	<select id="top_brand" name="pid[]">
					  		<option value="0">请选择品牌</option>
					  		@foreach ($all_top_brands as $brand)	
					  		<option value="{{$brand->id}}">{{$brand->name}}</option>
					  		@endforeach										
						</select>
						<span id="pid2_select" style="display:none;">
							<select id="second_brand" name="pid[]">
					  			<option  value="0">请选择品牌</option>											
							</select>
						</span>
					</div>
				  </div>
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
<!-- 引入确认框js -->
<!-- <script src="{{URL::asset('js/tcl/dynamic.js')}}"></script>  -->
<script>
	$(document).ready(function(){

		$('#brand_type').change(function(){

			var brand_type = $('#brand_type').val();

			//获得所有顶级品牌
        			/*$.ajax({

						type: 'POST',		
						url: '{{route('brand.getChildBrand')}}',		
						data: { pid : 0},		
						dataType: 'json',		
						headers: {		
							'X-CSRF-TOKEN': '{{ csrf_token() }}'		
						},		
						success: function(data){		

							if(data.status == 1){
								var content = '';

								$.each(data.data, function(index, value){

									content += '<option value="';
									content += value.id;
									content += '">';
									content += value.name;
									content += '</option>';
								})

								// $('#top_brand').append(content);
								console.log($('#top_brand'));
								$('#top_brand').append(content);
								// console.log(content);
							}else{

								alert(data.message);
								return false;
							}
						},		
						error: function(xhr, type){
		
							alert('Ajax error!');
						}
					});*/
			switch (brand_type) {
        		case '0':// 添加顶级品牌
        			$('#pid_select').hide();
        			$('#pid2_select').hide();
        		break;
        		case '1':// 添加一级品牌
        			$('#pid_select').show();
        			$('#pid2_select').hide();
        		break;        		    
        		case '2':// 添加二级品牌        		            		    
					$('#pid_select').show();
        		break;
        		default :
            		$('#pid_select').hide();
        			$('#pid_select').hide();
    		}
		});

		$('#top_brand').change(function(){

			var brand_id = $(this).val();

			//获得该顶级品牌下二级品牌
        	$.ajax({
				type: 'POST',		
				url: '{{route('brand.getChildBrand')}}',		
				data: { pid : brand_id},		
				dataType: 'json',		
				headers: {		
					'X-CSRF-TOKEN': '{{ csrf_token() }}'		
				},		
				success: function(data){		
					if(data.status == 1){
						var content = '';
						$.each(data.data, function(index, value){
							content += '<option value="';
							content += value.id;
							content += '">';
							content += value.name;
							content += '</option>';
						})
						// $('#top_brand').append(content);
						console.log($('#second_brand'));
						$('#second_brand').append(content);
						// console.log(content);
					}else{
						alert(data.message);
						return false;
					}
				},		
				error: function(xhr, type){

					alert('Ajax error!');
				}
			});
			$('#pid2_select').show();
		});
	});
</script>
@endsection