@extends('layouts.main')

@section('head_content')

@endsection
	<link href="{{URL::asset('css/tcl/bootstrap-listTree.css')}}" rel="stylesheet">
	<style type="text/css">
		.listTree span{
			padding:0px;
		}
	</style>
@section('BreadcrumbTrail')
	<ul class="breadcrumb">
		<li>
			<i class="icon-home"></i>
			<a href="/admin">Home</a> 
			<i class="icon-angle-right"></i>
		</li>
		<li>
			<i class="icon-home"></i>
			<a href="{{route('admin.role.index')}}">角色管理</a> 
			<i class="icon-angle-right"></i>
		</li>
		<li><a href="#1f">角色权限设置:{{$role_info->name}}</a></li>
	</ul>
@endsection

@section('content')

@include('layouts.message')
	<form class="form-horizontal" action="{{route('admin.role.updatePermission')}}" method="post">
				{!! csrf_field() !!}
				{{ method_field('PUT') }}
	<div class="row-fluid sortable ui-sortable">
		
		<div class="box span6">
			<div class="box-content">
				<div class="listTree">
					<ul>
						@foreach ($permission_info[0] as $key=>$permissions)
						<li>
							<span class="permissions_effect">
								<!-- <input type="checkbox" name=""> -->
								{{$key}}
								<i class="icon-chevron-up icon-black"></i>
							</span>
							<ul style="display:none;">
							@foreach ($permissions as $perm)
								<li>
									<span>
										<input type="checkbox" value="{{$perm->id}}" name="chouse_permission[]">
										{{$perm->name}}
									</span>
								</li>
							@endforeach
							</ul>
						</li>
						@endforeach
					</ul>
				</div>         
			</div>
		</div>
		<div class="box span6">
			<div class="box-content">			
				<div class="listTree">
					<ul>
						@foreach ($permission_info[1] as $key=>$permissions)
						<li>
							<span class="permissions_effect">
								<!-- <input type="checkbox" name=""> -->
								{{$key}}
								<i class="icon-chevron-up icon-black"></i>
							</span>
							<ul style="display:none;">
							@foreach ($permissions as $perm)
								<li>
									<span>
										<input type="checkbox" value="{{$perm->id}}" name="chouse_permission[]">
										{{$perm->name}}
									</span>
								</li>
							@endforeach
							</ul>
						</li>
						@endforeach
					</ul>
				</div>          
			</div>
	    </div>
	    
		<ul style="background: none repeat scroll 0 0 #eee;border: 0 none;border-radius: 0;box-shadow: none;color: #aaa;line-height: 34px; margin: 0;">
			<li style="display: inline-block;line-height: 20px;">
				<input type="submit" value="保存">
				<input type="hidden" name="role_id" value="{{$role_info->id}}">
			</li>
			<li style="display: inline-block;line-height: 20px;">
				<a href="#" onclick="window.history.go(-1);return false;" class="btn ">返回</a>
			</li>
		</ul>         
		</form>
		<input type="hidden" name="role_permission" value="{{$role_permission}}">
@endsection

@section('script_content')
	<script src="{{URL::asset('js/tcl/bootstrap-listTree.js')}}"></script>
	<script>
		
		function permissions_show(){
			//显示权限
			$(this).next().show();
		}

		function permissions_hide(){
			//隐藏权限
			$(this).next().hide();
		}
	</script>
	<script>
		$(document).ready(function(){

			var role_permission = $("input[name='role_permission']").val(); //当前角色已拥有权限

			$('.permissions_effect').toggle(permissions_show, permissions_hide);

			//已经拥有的权限默认选中
			$("input[name='chouse_permission[]']").each(function(){

				// console.log($(this).val());
				var choused = $(this);
				$.each(eval(role_permission), function(){

					// console.log(this.id);
					if(choused.val() == this.id){

						choused.attr('checked', 'checked');
					}
				});
			});
			// console.log(eval(role_permission));
		});
	</script>
@endsection
