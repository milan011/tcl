@extends('layouts.main')

@section('head_content')
	<style type="text/css">
		
		.dropdown-menu::after, .dropdown-menu::before{
			top: -1px;
			left: 10px;
			border-right: 9px solid transparent;
			border-bottom: 9px solid #222 !important;
			border-left: 9px solid transparent;
			content: none;
		}

		.dropdown-menu{
			min-width:100%;
		}
	</style>
@endsection

@section('BreadcrumbTrail')
	<ul class="breadcrumb">
		<li>
			<i class="icon-home"></i>
			<a href="{{route('admin.index')}}">主页</a>  
			<i class="icon-angle-right"></i>
		</li>
		<li><a href="javascript:void(0);">求购信息列表</a></li>
	</ul>
@endsection

@section('content')

@include('layouts.message')
	<div class="row-fluid sortable">		
		<div class="box span12">
			<div class="box-content">
				<!-- <ul style="background: none repeat scroll 0 0 #eee;border: 0 none;border-radius: 0;box-shadow: none;color: #aaa;line-height: 34px; margin: 0;margin-bottom:5px;">
					<li style="display: inline-block;line-height: 20px;">
						<a class="btn btn-primary" href="{{route('admin.want.create')}}">添加求购信息</a>
					</li>
					<li style="display: inline-block;line-height: 20px;">
						<a href="#" onclick="window.history.go(-1);return false;" class="btn ">返回</a>
					</li>
				</ul> -->
				<div class="page-tabs">
            		<ul class="nav nav-tabs">
            		  <!-- <li class="select_want_status @if($want_status_current == 1) active @endif" >
            		    <a href="javascript:void(0);" data-status="1">正常求购信息</a>
            		  </li>
            		  <li class="select_want_status @if($want_status_current == 2) active @endif">
            		    <a href="javascript:void(0);" data-status="2">待跟进求购信息</a>
            		  </li>
            		  <li class="select_want_status @if($want_status_current == 0) active @endif" >
            		    <a href="javascript:void(0);" data-status="0">已废弃求购信息</a>
            		  </li> -->
            		  <li style="display: inline-block;line-height:20px;">
						<a class="btn btn-search" href="#"><i class="halflings-icon search"></i>搜索求购信息</a>
					</li>
            		  <li style="display: inline-block;line-height:20px;float:right;">
						<a class="btn btn-primary" href="{{route('admin.want.create')}}">添加求购信息</a>
					</li>
					<li style="display:inline-block;line-height:20px;float:right;">
						<a href="#" onclick="window.history.go(-1);return false;" class="btn ">返回</a>
					</li>
            		</ul>
        		</div>

				<table  class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>求购信息编号</th>
							<th>意向车型</th>
							<th>意向价格</th>
							<th>年限</th>
							<th>里程</th>							
							<th>变速箱</th>
							<th>车身颜色</th>
							<th>排量</th>
							<th>状态</th>
							<th>登记日期</th>
							<th>门店</th>
							<th>负责人</th>
							<th>操作</th>
						</tr>
					</thead> 
					<tbody>
						@foreach ($wants as $want)
    					<tr>
							<td>{{$want->want_code}}</td>
							<td>{{$want->name}}</td>
							<td>{{$want->bottom_price}}-{{$want->top_price}}万</td>							
							<td>1年</td>
							<td>{{$want->mileage}}万公里</td>							
							<td>@if($want->gearbox == 0) 不限 @else {{$gearbox[$want->gearbox]}} @endif</td>			
							<td>{{$out_color[$want->out_color]}}</td>						
							<td>@if($want->capacity == 0) 不限 @else {{$capacity[$want->capacity]}} @endif</td>
							<td>{{$want_stauts_config[$want->want_status]}}</td>							
							<td>{{substr($want->created_at, 0 ,10)}}</td>							
							<td>{{$want->belongsToShop->shop_name}}</td>							
							<td>{{$want->belongsToUser->nick_name}}</td>							
														
							<td class="center">
								<div class="btn-group">
									<span>
										<form action="{{route('admin.chance.create')}}" method="post" style="display: inherit;margin:0px;">
										    {{ csrf_field() }}
            								<input type="hidden" name="want_id" value="{{$want->id}}">
											<button class="btn btn-success" type="submit">
											<i class="icon-edit icon-white"></i> 匹配
											</button>
										</form>
									</span>
									<a class="btn btn-warning" href="{{route('admin.want.show', ['want'=>$want->id])}}">
										<i class="icon-edit icon-white"></i> 详细信息
									</a>
								</div>
								<input id="current_want_id" type="hidden" value="{{$want->id}}">
							</td>
						</tr>
						@endforeach							
					</tbody>
				</table>
				<div class="pagination pagination-centered">
					 {!! $wants->links() !!}
				</div> 		
			</div>			
		</div>
	</div>
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>求购信息搜索</h3>
		</div>
		<div class="modal-body" style="max-height:none;">
			<form class="form-horizontal" id="condition" action="" method="post">
				{!! csrf_field() !!}
				<fieldset>
					<div class="control-group">
						<label class="control-label" for="want_code">求购信息编号</label>
						<div class="controls">
						  	<input class="input-xlarge focused" name="want_code" id="want_code" type="text" value="">
						</div>
					</div>		
					<div class="control-group  ">
            	    	<label class="control-label" for="want_status">求购信息状态</label>
            	    	<div class="controls">
            	      		<select id="want_status" name="want_status" >
            	      			<option value='1'>正常</option>                        
								                    
            	      		</select>
            	    	</div>
            	  	</div>				  
				</fieldset>
				<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">关闭</a>
			<button type="submit" class="btn btn-primary">搜索</button>
		</div>
			</form>				         
		</div>
		
	</div>
@endsection

@section('script_content')
<!-- 引入确认框js -->
<script src="{{URL::asset('js/tcl/confirm.js')}}"></script> 
<script>
	$(document).ready(function(){

		var want_status_current = '{{$want_status_current}}';
		var current_want_id     = $('#current_want_id').val();

		if(want_status_current == ''){

			$('.select_want_status').each(function(){

				$(this).removeClass('active');
			});
		}

		// 废弃-激活
		$('.changStatus').click(function(){

			var status = $(this).attr('data-status');
			/*alert(id);
			alert(status);*/
			// alert($("input[name='_token']").val());

			$.ajax({
				
				type: 'POST',
				url: 'want/changeStatus',
				data: { id : current_want_id, status : status},
				dataType: 'json',
				headers: {

					'X-CSRF-TOKEN': '{{ csrf_token() }}'
				},
				success: function(data){

					alert(data.msg);
					$('#condition').attr('action', '{{route('admin.want.self')}}');
					$('#condition').submit();
					// location.reload();
					// console.log(data);
				},
				error: function(xhr, type){

					alert('操作失败，请重新操作或联系管理员');
				}
			});
		});

		$('li.select_want_status').click(function(){

			var want_status = $(this).children('a').attr('data-status');

			if(!$(this).hasClass('active')){

				$(this).addClass('active').siblings().removeClass('active');
				$("select[name='want_status']").val(want_status);

				$('#condition').submit();
			}
			
		});

		$('.pagination').children('li').children('a').click(function(){

			// alert($(this).attr('href'));
			$('#condition').attr('action', $(this).attr('href'));
			// alert($('#condition').attr('action'));
			$('#condition').submit();
			return false;
		});

		// 快速跟进
		$('#follow_quickly').click(function(){

			$.ajax({
				
				type: 'POST',
				url: 'want/follwQuickly',
				data: { id : current_want_id},
				dataType: 'json',
				headers: {

					'X-CSRF-TOKEN': '{{ csrf_token() }}'
				},
				success: function(data){

					alert(data.msg);
					// location.reload();
					// console.log(data);
				},
				error: function(xhr, type){

					alert('操作失败，请重新操作或联系管理员');
				}
			});
		});
	});
</script>
@endsection
