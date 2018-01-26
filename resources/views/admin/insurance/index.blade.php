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
			min-width:150%;
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
		<li><a href="javascript:void(0);">保险列表</a></li>
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
						<a class="btn btn-search" href="#"><i class="halflings-icon search"></i>搜索保险</a>
					</li>
            		<li style="display: inline-block;line-height:20px;float:right;">
						<a class="btn btn-primary" href="{{route('admin.insurance.create')}}">添加保险</a>
					</li>
					@ifUserCan('insurance.export')
					<li style="display: inline-block;line-height:20px;float:right;">
						<a class="btn btn-primary" id="insurance_export" href="javascript:void(0)">导出数据</a>
					</li>
					@endif
					<li style="display:inline-block;line-height:20px;">
						<a href="#" onclick="window.history.go(-1);return false;" class="btn ">返回</a>
					</li>
            		</ul>
        		</div>

				<table  class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>编号</th>
							<th>车型</th>
							<th>客户</th>
							<th>电话</th>
							<th>保险公司交强/商业</th>
							<th>总保费</th>	
							<th>交强到期</th>
							<th>商险到期</th>				
							<th>制单</th>
							<th>操作</th>
						</tr>
					</thead> 
					<tbody>
						@foreach ($insurances as $insurance)
    					<tr>
							<td>
								<a target="_blank" href="{{route('admin.insurance.show', ['insurance'=>$insurance->id])}}">
									{{$insurance->insurance_code}}
								</a>
							</td>
							<td>{{$insurance->belongsToBrand->brand_name or '未知'}}</td>
							<td>{{$insurance->name}}</td>							
							<td>{{$insurance->telephone}}</td>
							<td>{{$insurance_company_commercial[$insurance->company_commercial] or ''}}/{{$insurance_company_interest[$insurance->company_interest] or ''}}</td>
							<td>{{$insurance->total_price}}</td>							
							<td>{{substr($insurance->traffic_date, 0 ,10)}}</td>							
							<td>{{substr($insurance->vehicle_date, 0 ,10)}}</td>			
							<td>{{substr($insurance->created_at, 0 ,10)}}({{$insurance->belongsToUser->nick_name}})</td>				
							<td class="center">
								
								<div class="btn-group">
									<a class="btn btn-success" href="{{route('admin.insurance.edit', ['insurance'=>$insurance->id])}}">
										<i class="icon-edit icon-white"></i> 编辑
									</a>
									<div class="btn-group " role=”group”>
										<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
											更多
											<span class="caret"></span>
										</button>
										<ul class="dropdown-menu pull-right">
											<li>
												<a target="_blank" class="btn btn-warning" href="{{route('admin.insurance.show', ['insurance'=>$insurance->id])}}">
													 查看
												</a>												
											</li>
											<li>
												<a class="btn btn-warning" href="{{route('admin.insurance.editImg', ['insurance'=>$insurance->id])}}">
													<i class="icon-edit icon-white"></i> 图片编辑
												</a>												
											</li>										
											<li>
												<button class="btn btn-info changStatus" data-status="{{$insurance->insurance_status}}" style="width:100%;">
													@if($insurance->insurance_status == 1)废弃@else激活@endif
												</button>
												<input class="current_insurance_id" type="hidden" value="{{$insurance->id}}">												
											</li>
										</ul>
 							 		</div>
								</div>							
							</td>
						</tr>
						@endforeach							
					</tbody>
				</table>
				<div class="pagination pagination-centered">
					 {!! $insurances->links() !!}
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
			<form class="form-horizontal" id="condition" action="{{route('admin.insurance.index')}}/index" method="post">
				{!! csrf_field() !!}
				<fieldset>
					<div class="control-group">
						<label class="control-label" for="loan_code">保险编号</label>
						<div class="controls">
						  	<input class="input-xlarge focused" name="loan_code" id="loan_code" type="text" value="">
						</div>
					</div>
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
					<div class="control-group  ">
            	    	<label class="control-label" for="insurance_status">状态</label>
            	    	<div class="controls">
            	      		<select id="insurance_status" name="insurance_status" >
            	      			<option value=''>不限</option>                        
								@foreach($loan_stauts_config as $key=>$status)								
									<option @if($select_conditions['insurance_status'] == $key && $select_conditions['insurance_status'] != '') selected @endif value="{{$key}}">	{{$status}}
									</option>	
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
				<input type="hidden" id="export_url" value="{{route('admin.insurance.export')}}">
                <input type="hidden" id="select_url" value="{{route('admin.insurance.index')}}/index">
				<input type="hidden" name="ajax_request_url" value="{{route('admin.brand.getChildBrand')}}">
				<button type="submit" id="insurance_select" class="btn btn-primary">搜索</button>
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
<script src="{{URL::asset('js/tcl/confirm.js')}}"></script> 
<script>
	$(document).ready(function(){

		var select_category_id = "{{$select_conditions['category_id'] or '0'}}";
		var select_factory_id  = "{{$select_conditions['car_factory'] or '0'}}";

		$('#second_category').children().first().val(select_factory_id);
		$('#thrid_category').children().first().val(select_category_id);
		
		$('.pagination').children('li').children('a').click(function(){

			// alert($(this).attr('href'));
			$('#condition').attr('action', $(this).attr('href'));
			// alert($('#condition').attr('action'));
			$('#condition').submit();
			return false;
		});

		$('.date-picker').datepicker({
            language: 'zh-CN',
            autoclose: true,
            format: 'yyyy-mm-dd',
            todayHighlight: true
        });

		//导出保险
        $('#insurance_export').click(function(event) {
            var export_url = $('#export_url').val();
            var form_obj   = $('#condition');

            form_obj.attr('action', export_url);
            form_obj.submit();
            /*alert(export_url);
            alert(form_obj_action);*/
        });

        //搜索保险
        $('#insurance_select').click(function(event) {
            /* Act on the event */
            var select_url = $('#select_url').val();
            var form_obj   = $('#condition');

            form_obj.attr('action', select_url);
            form_obj.submit();
        });

        //废弃激活保险
        $('.changStatus').click(function(){

			var status = $(this).attr('data-status');
			var obj = $(this);
			var content = '';
			var confirmButton = '';
			var current_insurance_id  = $(this).next().val();
			/*console.log(current_insurance_id);
			return false;*/
			if(status != 0){
				//废弃
				content       = '确实要废弃吗?';
				confirmButton = 'btn-danger';
			}else{
				//激活
				content       = '确实要激活吗?'; 
				confirmButton = 'btn-success';
			}

			$.confirm({
    		    title: '注意!',
    		    content: content,
    		    cancelButton: '取消',
    		    confirmButtonClass: confirmButton,
    		    confirm: function () {
    		        $.ajax({
				
						type: 'POST',
						url: 'changeStatus',
						data: { id : current_insurance_id, status : status},
						dataType: 'json',
						headers: {
		
							'X-CSRF-TOKEN': '{{ csrf_token() }}'
						},
						success: function(data){
		
							alert(data.msg);
							// location.reload();
							$('#condition').submit();
							// console.log(data);
						},
						error: function(xhr, type){
		
							alert('操作失败，请重新操作或联系管理员');
						}
					});
    		    },
    		    cancel: function () {
    		        return false;
    		    }
    		});
		});   
	});
</script>
@endsection
