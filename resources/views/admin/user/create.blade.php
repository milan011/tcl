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
		<a href="{{route('admin.user.index')}}">用户管理</a> 
		<i class="icon-angle-right"></i>
	</li>
	<li><a href="#1f">添加用户</a></li>
</ul>
@endsection
<!-- 主体 -->
@section('content')

@include('layouts.message')

<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-content">
			<form class="form-horizontal" action="{{route('admin.user.store')}}" method="post">
				{!! csrf_field() !!}
				<fieldset>
				   <div class="control-group">
					<label class="control-label" for="name"><font style="color:red;">*</font>用户名</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="name" name="name"  type="text" value="{{old('name')}}" placeholder="请输入用户名"/>
					 
					</div>
				   </div>
				   <div class="control-group">
					<label class="control-label" for="name"><font style="color:red;">*</font>实际姓名</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="nick_name" name="nick_name"  type="text" value="{{old('nick_name')}}" placeholder="请输入实际姓名"/>
					 
					</div>
				   </div>
				   <div class="control-group">
						<label class="control-label" for="password"><font style="color:red;">*</font>登录密码</label>
						<div class="controls">
							<input type="password" style="display:none">
						  <input class="input-xlarge focused" id="password" name="password" type="password" value="" placeholder="请输入密码"/>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="password_confirmation"><font style="color:red;">*</font>确认密码</label>
						<div class="controls">
						  <input class="input-xlarge focused" id="password_confirmation" name="password_confirmation"   type="passWord" value="" placeholder="再次输入密码">
						</div>
					 </div>
					<div class="control-group">
				  		<label class="control-label" for="focusedInput">
				  			<font style="color:red;">*</font>联系电话
				  		</label>
				  		<div class="controls">
				  			<input class="input-xlarge focused" id="telephone" name="telephone" type="text" value="{{old('telephone')}}">
				  		</div>
				 	</div>	
				  	<div class="control-group">
						<label class="control-label" for="selectError3">
							<font style="color:red;">*</font>用户角色
						</label>
						<div class="controls">
					  		<select id="role_id" name="role_id">
					  			<option  value="0">---请选择角色---</option>
					  			@foreach($role_add_allow as $role)
					  			<option value="{{$role->id}}" >{{$role->name}}</option>
					  			@endforeach
							</select>
						</div>
					</div>
					<div class="control-group" id="shop_show" style="display:none;">
						<label class="control-label" for="selectError3">所属门店</label>
						<div class="controls">
						  <select id="shop_id" name="shop_id">
						  	<option  value="0">淘车乐总部</option>
						  	@foreach($shop_add_allow as $shop)
						  	<option  value="{{$shop->id}}">{{$shop->name}}</option>
						  	@endforeach
							</select>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="status">是否启用</label>
						<div class="controls">
					  		<select id="status" name="status">
					  			<option  value="1">启用</option>
								<option  value="0">停用</option>						
							</select>
						</div>
				 	</div>					
					
					  
				<div class="control-group">
					<label class="control-label" for="focusedInput">地址</label>
					<div class="controls">
						 <textarea id="address" name="address" class="autogrow"></textarea>
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
<script>
	$(document).ready(function(){

		$('#role_id').change(function(){

			var role_id = $(this).val();

			if(role_id == 6 || role_id == 7){

				$('#shop_show').show();
			}else{

				$('#shop_show').hide();
			}
		});
	});
</script>
@endsection