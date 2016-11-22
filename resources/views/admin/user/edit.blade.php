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
	<li><a href="#1f">修改用户</a></li>
</ul>
@endsection

<!-- 主体 -->
@section('content')

@include('layouts.message')

<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-content">
			<form class="form-horizontal" action="{{route('admin.user.update', ['user'=>$user->id])}}" method="post">
				{!! csrf_field() !!}
				{{ method_field('PUT') }}
				<fieldset>
				   <div class="control-group">
					<label class="control-label" for="name"><font style="color:red;">*</font>用户名</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="name" name="name"  type="text" value="{{$user->name}}" placeholder="请输入用户名"/>
					 
					</div>
				   </div>
				   <div class="control-group">
					<label class="control-label" for="name"><font style="color:red;">*</font>实际姓名</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="nick_name" name="nick_name"  type="text" value="{{$user->nick_name}}" placeholder="请输入实际姓名"/>
					 
					</div>
				   </div>
					<div class="control-group">
				  		<label class="control-label" for="focusedInput">
				  			<font style="color:red;">*</font>联系电话
				  		</label>
				  		<div class="controls">
				  			<input class="input-xlarge focused" id="telephone" name="telephone" type="text" value="{{$user->telephone}}">
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
					  			<option @if($user->hasManyRoles[0]->id == $role->id) selected @endif value="{{$role->id}}" >{{$role->name}}</option>
					  			@endforeach
							</select>
						</div>
					</div>
					<div class="control-group" id="shop_show" style="display:none;">
						<label class="control-label" for="selectError3">所属门店</label>
						<div class="controls">
						  <select id="shop_id" name="shop_id">
						  	<option  value="21">--请选择门店--</option>
						  	@foreach($shop_add_allow as $shop)
						  	<option @if($user->shop_id == $shop->id) selected="selected" @endif  value="{{$shop->id}}">{{$shop->name}}</option>
						  	@endforeach
							</select>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="status">是否启用</label>
						<div class="controls">
					  		<select id="status" name="status">
					  			<option value="1">启用</option>
								<option value="0">停用</option>						
							</select>
						</div>
				 	</div>										  
				<div class="control-group">
					<label class="control-label" for="focusedInput">地址</label>
					<div class="controls">
						 <textarea id="address" name="address" class="autogrow">{{$user->address}}</textarea>
					</div>
				  </div>
				   <div class="control-group">
					<label class="control-label" for="focusedInput">QQ号</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="qq_number" name="qq_number" type="text" value="{{$user->qq_number}}">
					</div>
				  </div>

				   <div class="control-group">
					<label class="control-label" for="focusedInput">微信公共号</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="wx_number" name="wx_number" type="text" value="{{$user->wx_number}}">
					</div>
				  </div>

				   <div class="control-group">
					<label class="control-label" for="focusedInput">常用邮箱</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="email" name="email" type="text" value="{{$user->email}}">
					</div>
				  </div>				
				  <div class="form-actions">
				  	<!-- <input type="hidden" name="user_id" value="{{$user->id}}" /> -->
					<button type="submit" class="btn btn-primary">确定</button>
					<button class="btn" onclick="window.history.go(-1);return false;">返回</button>
				  </div>
				</fieldset>
			</form>				
		</div>
	</div>			
</div>   
@endsection