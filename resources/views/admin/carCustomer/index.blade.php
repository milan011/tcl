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
		<li><a href="javascript:void(0);">客户卖车信息</a></li>
	</ul>
@endsection

@section('content')

@include('layouts.message')
	<div class="row-fluid sortable">		
		<div class="box span12">
			<div class="box-content">
				<div class="page-tabs">
            		<ul class="nav nav-tabs">
            			@if(!Auth::user()->isMdLeader())
            		    <li style="display: inline-block;line-height: 20px;">
							<a class="btn btn-primary" href="{{route('admin.carCustomer.create')}}">添加报名</a>
						</li>
						@endif
            			<li style="display: inline-block;line-height:20px;">
							<a class="btn btn-search" href="#"><i class="halflings-icon search"></i>搜索信息</a>
						</li>
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
							<th>咨询类型</th>
							<th>车型</th>
							<th>城市</th>
							<th>分发</th>
							<th>时间</th>
							@if(!Auth::user()->isMdLeader())	
							<th>操作</th>
							@endif					
						</tr>
					</thead> 
					<tbody>
						@foreach ($all_customer_cars as $car)
    					<tr>
							<td>{{$car->name or ''}}</td>
							<td>{{$car->mobile}}</td>
							@if(!empty($car->enroll_type))
								<td>{{$enroll_type[$car->enroll_type]}}</td>
							@else
								<td>未知</td>
							@endif
							{{-- <td>{{$car->belongsToBrand->brand_name or ''}}</td> --}}
							{{-- <td>{{$car->belongsToCompnay->compnay_name  or ''}}</td> --}}
							<td>{{$car->belongsToCategory->category_name or $car->category_name}}</td>
							<td>{{$car->city_name  or ''}}</td>							
							@if(!empty($car->belongsToShop->shop_name))
								<td style="color:#67c23a;">{{$car->belongsToShop->shop_name}}</td>	
							@else
								<td style="color:#f56c6c;">未分发</td>	
							@endif
							<td>{{$car->created_at}}</td>
							<!-- <td class="center">
								<a class="btn btn-warning" href="{{route('admin.carCustomer.edit', ['carCustomer'=>$car->id])}}">
									<i class="icon-edit icon-white"></i> 编辑
								</a>
								@if($car->status == '0') 
								<button class="btn btn-info changStatus" data-status="0">
									<i class="icon-edit icon-white"></i> 激活
								</button>
								@else 
								<button class="btn btn-danger changStatus" data-status="1">
									<i class="icon-edit icon-white"></i> 废弃
								</button>
								@endif
								<input type="hidden" value="{{$car->id}}">
								<button class="btn btn-info fenfa" data-status="0">
									<i class="icon-edit icon-white"></i> 分发
								</button>
							</td> -->
							@if(!Auth::user()->isMdLeader())
							<td class="center">
								<div class="btn-group">
									<a class="btn btn-success" href="{{route('admin.carCustomer.edit', ['carCustomer'=>$car->id])}}">
										<i class="icon-edit icon-white"></i> 编辑
									</a>
									<div class="btn-group " role=”group”>
										<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
											更多
											<span class="caret"></span>
										</button>
										<ul class="dropdown-menu pull-right">
											<li>
												<a target="_blank" class="btn btn-warning" href="{{route('admin.carCustomer.show', ['carCustomer'=>$car->id])}}">查看
												</a>												
											</li>
											@if(empty($car->belongsToShop->shop_name))
											<li>
												<button class="btn btn-info fenfa" data-status="0">
													<i class="icon-edit icon-white"></i> 分发
												</button>
												<input type="hidden" value="{{$car->id}}">
											</li>
											@endif										
											<li>
												<button class="btn btn-info changStatus" data-status="{{$car->status}}" style="width:100%;">
														@if($car->status == 1)废弃@else激活@endif
												</button>
												<input type="hidden" value="{{$car->id}}">
											</li>
										</ul>
 							 		</div>
								</div>							
							</td>
							@endif
						</tr>
						@endforeach							
					</tbody>
				</table>
				<div class="pagination pagination-centered">
					 {!! $all_customer_cars->links() !!}
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
			<form class="form-horizontal" id="condition" action="{{route('admin.carCustomer.index')}}/index" method="post">
				{!! csrf_field() !!}
				<fieldset>
					<div class="control-group">
						<label class="control-label" for="name">客户</label>
						<div class="controls">
						  	<input class="input-xlarge focused" name="name" id="name" type="text" value="">
						</div>
					</div>	
					<div class="control-group">
						<label class="control-label" for="mobile">电话</label>
						<div class="controls">
						  	<input class="input-xlarge focused" name="mobile" id="mobile" type="text" value="">
						</div>
					</div>	
					<div class="control-group">
						<label class="control-label" for="enroll_type">咨询类型</label>
						<div class="controls">
						  	<select id="enroll_type" name="enroll_type">
						  		<option value="">不限</option>
						  		@foreach($enroll_type as $key => $enroll)
						  			<option @if(isset($select_conditions['enroll_type']) && $select_conditions['enroll_type'] == $key && $select_conditions['enroll_type'] != '') selected @endif value="{{$key}}">{{$enroll}}</option>
						  		@endforeach
							</select>
						</div>
					</div>	
					<div class="control-group">
						<label class="control-label" for="category_name">车型</label>
						<div class="controls">
						  	<input class="input-xlarge focused" name="category_name" id="category_name" type="text" value="">
						</div>
					</div>	
					<div class="control-group">
						<label class="control-label" for="fenfa_shop">分发门店</label>
						<div class="controls">
						  	<select id="fenfa_shop_list" name="fenfa_shop_id">
						  		<option  value="">不限</option>
						  		@foreach($shop_fenfa as $key => $shop)
						  			<option @if(isset($select_conditions['fenfa_shop_id']) && $select_conditions['fenfa_shop_id'] == $key && $select_conditions['fenfa_shop_id'] != '') selected @endif value="{{$shop->id}}">{{$shop->name}}</option>
						  		@endforeach
							</select>
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
	<div class="modal hide fade" id="fenFaModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>分发</h3>
		</div>
		<div class="modal-body"">
			<form class="form-horizontal" action="{{route('admin.carCustomer.fenfa')}}" method="post">
				{!! csrf_field() !!}
				<fieldset>
									
					<div class="control-group">
						<label class="control-label" for="begin_date">门店:</label>
						<div class="controls">
							<select id="fenfa_shop" name="fenfa_shop">
						  		@foreach($shop_fenfa as $key => $shop)
						  			<option  value="{{$shop->id}}">{{$shop->name}}</option>
						  		@endforeach
							</select>
						</div>
					</div>
				</fieldset>
				<div class="modal-footer">
				</div>
				<a href="javascript:void(0);" class="btn" data-dismiss="modal">关闭</a>
				<input type="hidden" name="fenfa_info_id" id="fenfa_info_id" value="">
				<button type="submit" class="btn btn-primary">分发</button>
			</form>	
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

        $('.fenfa').click(function(e){

        	// alert($(this).next().val());
        	var fenfa_info_id = $(this).next().val();
        	e.preventDefault();
        	$('#fenfa_info_id').val(fenfa_info_id);
			$('#fenFaModal').modal('show');
        });

        $('.changStatus').click(function(){

			var id     = $(this).next().val();
			// var status = $(this).attr('data-status');
			var token = $("input[name='_token']").val();

			/*alert(id);
			alert(status);*/
			// alert($("input[name='_token']").val());

			$.confirm({
    		    title: '注意!',
    		    content: '确定要废弃吗',
    		    cancelButton: '取消',
    		    confirmButtonClass: '',
    		    confirm: function () {
    		        $.ajax({

				type: 'POST',

				url: 'carCustomer/changeStatus',

				data: { id : id},

				dataType: 'json',

				headers: {

					'X-CSRF-TOKEN': '{{ csrf_token() }}'

				},

				success: function(data){

					alert(data.msg);
					location.reload();
					// console.log(data);
				},

				error: function(xhr, type){

					alert('Ajax error!');
				}
			});
    		    },
    		    cancel: function () {
    		        return false;
    		    }
    		});
		}); 

		$('.pagination').children('li').children('a').click(function(){

			// alert($(this).attr('href'));
			$('#condition').attr('action', $(this).attr('href'));
			// alert($('#condition').attr('action'));
			// return false;
			$('#condition').submit();
			return false;
		});
	});
</script>
@endsection
