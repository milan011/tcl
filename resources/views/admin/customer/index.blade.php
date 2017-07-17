@extends('layouts.main')

@section('head_content')
<link id="bootstrap-style" href="{{ URL::asset('css/tcl/bootstrap-datepicker.min.css') }}" rel="stylesheet">
<!-- <link id="bootstrap-style" href="{{ URL::asset('css/tcl/dropzone/dropzone.css') }}" rel="stylesheet"> -->
	<style type="text/css">
		.one_line{
			width:40%;
			margin-bottom:5px;
		}
		ul.dropdown-menu::after, ul.dropdown-menu::before{
			top: -1px;
			left: 10px;
			border-right: 9px solid transparent;
			border-bottom: 9px solid #222 !important;
			border-left: 9px solid transparent;
			content: none;
		}

		ul.dropdown-menu{
			min-width:100%;
		}

		/*.dropzone{
			padding: 30px 20px;
		}*/
	</style>
@endsection

@section('BreadcrumbTrail')
	<ul class="breadcrumb">
		<li>
			<i class="icon-home"></i>
			<a href="{{route('admin.index')}}">主页</a>  
			<i class="icon-angle-right"></i>
		</li>
		<li><a href="javascript:void(0);">客户列表</a></li>
	</ul>
@endsection

@section('content')

@include('layouts.message')
	<div class="row-fluid sortable">		
		<div class="box span12">
			<div class="box-content">
				<div class="page-tabs">
            		<ul class="nav nav-tabs">
            		  <li style="display: inline-block;line-height:20px;">
						<a class="btn btn-search" href="#"><i class="halflings-icon search"></i>搜索客户</a>
					</li>
            		<!-- <li style="display: inline-block;line-height:20px;float:right;">
						<a class="btn btn-primary" href="{{route('admin.customer.create')}}">添加客户</a>
					</li> -->
					<li style="display:inline-block;line-height:20px;">
						<a href="#" onclick="window.history.go(-1);return false;" class="btn ">返回</a>
					</li>
            		</ul>
        		</div>

				<table  class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>客户</th>
							<th>电话</th>
							<!-- <th>性别</th> -->
							<th>来源</th>						
							<th>创建</th>
							<th>负责人</th>
							<th>门店</th>
							<th>操作</th>
						</tr>
					</thead> 
					<tbody>
						@foreach ($customers as $customer)
    					<tr>
							<td>{{$customer->name}}</td>							
							<td>{{$customer->telephone}}</td>
							<!-- <td>@if($customer->sex == '1') 男 @else 女 @endif</td>							 -->
							<td>{{$customer_res[$customer->customer_res]}}</td>								
							<td>{{substr($customer->created_at, 0 ,10)}}</td>		
							<td>{{$customer->belongsToUser->nick_name or ''}}</td>
							<td>{{$customer->belongsToShop->shop_name}}</td>		
							<td class="center">
								
								<div class="btn-group">
									<a class="btn btn-success" href="{{route('admin.customer.edit', ['customer'=>$customer->id])}}">
										<i class="icon-edit icon-white"></i> 编辑
									</a>
									<a class="btn btn-warning" href="{{route('admin.customer.show', ['customer'=>$customer->id])}}">
										查看
									</a>
								</div>							
							</td>
						</tr>
						@endforeach							
					</tbody>
				</table>
				<div class="pagination pagination-centered">
					 {!! $customers->links() !!}
				</div> 		
			</div>			
		</div>
	</div>
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>车源搜索</h3>
		</div>
		<div class="modal-body"">
			<form class="form-horizontal" id="condition" action="{{route('admin.customer.index')}}/index" method="post">
				{!! csrf_field() !!}
				<fieldset>
					<div class="control-group">
						<label class="control-label" for="name">客户</label>
						<div class="controls">
						  	<input class="input-xlarge focused" name="name" id="name" type="text" value="">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="telephone">电话</label>
						<div class="controls">
						  	<input class="input-xlarge focused" name="telephone" id="telephone" type="text" value="">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="begin_date">日期范围</label>
						<div class="controls">
							<input type="text" class="input-xlarge date-picker one_line" name="begin_date" id="begin_date" value="{{$select_conditions['begin_date'] or ''}}" placeholder="开始日期" >
							<input type="text" class="input-xlarge one_line date-picker" name="end_date" id="end_date" value="{{$select_conditions['end_date'] or ''}}" placeholder="结束日期">
						</div>
					</div>
								  
				</fieldset>
				<div class="modal-footer">
				</div>
				<a href="javascript:void(0);" class="btn" data-dismiss="modal">关闭</a>
				<button type="submit" class="btn btn-primary">搜索</button>
			</form>	
		</div>						         
	</div>		
</div>
@endsection

@section('script_content')
<!-- 引入车型级联js -->
<!-- <script src="{{URL::asset('js/tcl/category.js')}}"></script>  -->
<!-- 引入日历插件 -->
<script src="{{URL::asset('js/tcl/bootstrap-datepicker.js')}}"></script> 
<script src="{{URL::asset('js/tcl/locales/bootstrap-datepicker.zh-CN.js')}}"></script> 
<!-- 引入确认框js -->
<!-- <script src="{{URL::asset('js/tcl/confirm.js')}}"></script>  -->
<script>
	$(document).ready(function(){
		
		$('.date-picker').datepicker({
            language: 'zh-CN',
            autoclose: true,
            format: 'yyyy-mm-dd',
            todayHighlight: true
        });

		$('.pagination').children('li').children('a').click(function(){

			// alert($(this).attr('href'));
			$('#condition').attr('action', $(this).attr('href'));
			// alert($('#condition').attr('action'));
			$('#condition').submit();
			return false;
		});  
	});
</script>
@endsection
