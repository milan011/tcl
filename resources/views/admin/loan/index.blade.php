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
		<li><a href="javascript:void(0);">贷款列表</a></li>
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
						<a class="btn btn-search" href="#"><i class="halflings-icon search"></i>搜索贷款</a>
					</li>
            		<li style="display: inline-block;line-height:20px;float:right;">
						<a class="btn btn-primary" href="{{route('admin.loan.create')}}">添加贷款</a>
					</li>
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
							<th>账单日</th>
							<th>车价</th>																				
							<th>车贷</th>																			
							<th>放款</th>
							<th>期数</th>
							<th>月供</th>
							<!-- <th>状态</th> -->
							<th>上牌</th>						
							<th>上传</th>
							<th>负责人</th>
							<th>操作</th>
						</tr>
					</thead> 
					<tbody>
						@foreach ($loans as $loan)
    					<tr>
							<td>{{$loan->loan_code}}</td>
							<td>{{$loan->car_name}}</td>
							<td>{{$loan->name}}</td>							
							<td>{{$loan->telephone}}</td>
							<td>{{$loan->bill_day}}</td>							
							<td>{{$loan->appraiser_price}}</td>							
							<td>{{$loan->loan_price}}</td>						
							<td>{{substr($loan->loan_date, 0 ,10)}}</td>							
							<td>{{$loan->loan_phase}}</td>							
							<td>{{$loan->repayment_everymonth}}</td>
							<!-- <td>@if($loan->loan_status == 1)
									正常
								@else
									废弃
								@endif
							</td> -->						
							<td>{{substr($loan->plate_date, 0 ,10)}}</td>							
							<td>{{substr($loan->created_at, 0 ,10)}}</td>		
							<td>{{$loan->belongsToUser->nick_name}}</td>		
							<td class="center">
								
								<div class="btn-group">
									<a class="btn btn-success" href="{{route('admin.loan.edit', ['loan'=>$loan->id])}}">
										<i class="icon-edit icon-white"></i> 编辑
									</a>
									<div class="btn-group " role=”group”>
										<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
											更多
											<span class="caret"></span>
										</button>
										<ul class="dropdown-menu pull-right">
											<li>
												<a class="btn btn-warning" href="{{route('admin.loan.show', ['loan'=>$loan->id])}}">
													 查看
												</a>												
											</li>										
											<li>
												<button class="btn btn-info changStatus" data-status="{{$loan->loan_status}}" style="width:100%;">
													@if($loan->loan_status == 1)完成@else还原@endif
												</button>
												<input class="current_loan_id" type="hidden" value="{{$loan->id}}">												
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
					 {!! $loans->links() !!}
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
			<form class="form-horizontal" id="condition" action="{{route('admin.loan.index')}}/index" method="post">
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
            	    	<label class="control-label" for="loan_status">状态</label>
            	    	<div class="controls">
            	      		<select id="loan_status" name="loan_status" >
            	      			<option value=''>不限</option>                        
								@foreach($loan_stauts_config as $key=>$status)								
									<option @if($select_conditions['loan_status'] == $key && $select_conditions['loan_status'] != '') selected @endif value="{{$key}}">	{{$status}}
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
				<input type="hidden" name="ajax_request_url" value="{{route('admin.brand.getChildBrand')}}">
				<input type="hidden" name="changStatus_url" value="{{route('admin.loan.changeStatus')}}">
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
<script src="{{URL::asset('js/tcl/confirm.js')}}"></script> 
<script>
	$(document).ready(function(){

		var select_category_id = "{{$select_conditions['category_id'] or '0'}}";
		var select_factory_id  = "{{$select_conditions['car_factory'] or '0'}}";

		var changStatus_url    = $("input[name='changStatus_url']").val();

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

        //废弃激活贷款
        $('.changStatus').click(function(){

			var status = $(this).attr('data-status');
			var obj = $(this);
			var content = '';
			var confirmButton = '';
			var current_loan_id  = $(this).next().val();
			/*console.log(current_loan_id);
			return false;*/
			if(status == 1){
				//废弃
				content       = '贷款已完结?';
				confirmButton = 'btn-danger';
			}else{
				//激活
				content       = '确实要还原吗?'; 
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
						url: changStatus_url,
						data: { id : current_loan_id, status : status},
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
