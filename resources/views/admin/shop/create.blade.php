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
		<a href="{{route('admin.carCustomer.index')}}">报名管理</a> 
		<i class="icon-angle-right"></i>
	</li>
	<li><a href="#1f">添加报名</a></li>
</ul>
@endsection
<!-- 主体 -->
@section('content')

@include('layouts.message')

<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-content">
			<form class="form-horizontal" action="{{route('admin.carCustomer.store')}}" method="post">
				{!! csrf_field() !!}
				<fieldset>
				  <div class="control-group">
					<label class="control-label" for="focusedInput">报名名称</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="name" name="name" type="text" value="{{old('name')}}">
					</div>
				  </div>
				  <!-- <div class="control-group">
				  					<label class="control-label">上级报名</label>
				  					<div class="controls">
				  					  <span class="input-xlarge uneditable-input">淘车乐总公司</span>
				  					  <input type="hidden" id="PID" name="PID" value="1"/>
				  					</div>
				  </div> -->
				    <!-- <div id="dept_view"  class="alert alert-error" style="display:none">
				    						<button class="close" data-dismiss="alert" type="button">×</button>
				    						<strong>上级报名不能为空!</strong> 请返回选择.
				    					</div> -->
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
					<label class="control-label" for="type">报名类别</label>
					<div class="controls">
					  <select id="type" name="type">
					  	<option  value="1">报名</option>
					  	<option  value="2">加盟店</option>
						</select>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="provence_id">所属城市</label>
					<div class="controls">
					  	<select id="provence_id" name="provence_id">
					  		<option value="0">请选择省份</option>
					  		@foreach($area as $provence)
					  		<option  value="{{$provence->id}}">{{$provence->name}}</option>
					  		@endforeach									
						</select>
						<select id="city_id" name="city_id" style="display:none;">
					  		<option  value="0">请选择城市</option>											
						</select>
					</div>
				</div>	
				<!-- <div class="control-group">
					<label class="control-label" for="provence_id">所属省份</label>
					<div class="controls">
					  <select id="provence_id" name="provence_id">
					  	<option  value="1">河北</option>
					  	<option  value="2">河南</option>
						</select>
					</div>					
				</div>	
				<div class="control-group">
					<label class="control-label" for="city_id">所属城市</label>
					<div class="controls">
					  <select id="city_id" name="city_id">
					  	<option  value="1">石家庄</option>
					  	<option  value="2">郑州</option>
						</select>
					</div>					
				</div>	 -->	  
				<div class="control-group">
					<label class="control-label" for="focusedInput">地址</label>
					<div class="controls">
						 <textarea id="address" name="address" class="autogrow"></textarea>
					</div>
				  </div>

				   <!-- <div class="control-group">
				   					<label class="control-label" for="focusedInput">手机号</label>
				   					<div class="controls">
				   					  <input class="input-xlarge focused" id="mobile" name="mobile" type="text" value="">
				   					</div>
				   				  </div> -->

				  <div class="control-group">
				  					<label class="control-label" for="focusedInput">联系电话</label>
				  					<div class="controls">
				  					  <input class="input-xlarge focused" id="telephone" name="telephone" type="text" value="{{old('telephone')}}">
				  					</div>
				  </div>

				   <div class="control-group">
					<label class="control-label" for="focusedInput">QQ号</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="qq_number" name="qq_number" type="text" value="{{old('qq_number')}}">
					</div>
				  </div>

				   <div class="control-group">
					<label class="control-label" for="focusedInput">微信公共号</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="wx_number" name="wx_number" type="text" value="{{old('wx_number')}}">
					</div>
				  </div>

				   <div class="control-group">
					<label class="control-label" for="focusedInput">常用邮箱</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="email" name="email" type="text" value="{{old('email')}}">
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
<!-- <script src="{{URL::asset('js/tcl/city.js')}}"></script> -->
<script>
	$(document).ready(function(){

		$('#provence_id').change(function(){

			var provence_id = $(this).val();
			var request_url = "{{route('admin.area.getAreaInfo')}}";
			
			$('#city_id').hide();

			$.ajax({

				method: 'POST',
				url: request_url,
				data: { provence_id : provence_id},
				dataType: 'json',
				headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}'},
				success: function(data){

					var content = '<option  value="0">请选择城市</option>';
					$.each(data.data, function(index, value){
						content += '<option value="';
						content += value.id;
						content += '">';
						content += value.name;
						content += '</option>';
					});
					// $('#top_brand').append(content);
					// console.log($('#city_id'));
					$('#city_id').empty();
					$('#city_id').append(content);
					// console.log(content);
					$('#city_id').show();
					return false;
				},
				error: function(xhr, type){

					alert('Ajax error!');
				}
			});
		});
	});
</script>
@endsection