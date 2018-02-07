@extends('layouts.main')

@section('head_content')
<link id="bootstrap-style" href="{{ URL::asset('css/tcl/bootstrap-datepicker.min.css') }}" rel="stylesheet">
<style type="text/css">
	.one_line{
		width:40%;
		margin-bottom:5px;
	}

	ul.dropdown-menu::after, .dropdown-menu::before{
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
</style>
@endsection

@section('BreadcrumbTrail')
	<ul class="breadcrumb">
		<li>
			<i class="icon-home"></i>
			<a href="{{route('admin.index')}}">主页</a>  
			<i class="icon-angle-right"></i>
		</li>
		<li><a href="javascript:void(0);">车源列表</a></li>
	</ul>
@endsection

@section('content')

@include('layouts.message')
	<div class="row-fluid sortable">		
		<div class="box span12">
			<div class="box-content">
				<!-- <ul style="background: none repeat scroll 0 0 #eee;border: 0 none;border-radius: 0;box-shadow: none;color: #aaa;line-height: 34px; margin: 0;margin-bottom:5px;">
					<li style="display: inline-block;line-height: 20px;">
						<a class="btn btn-primary" href="{{route('admin.car.create')}}">添加车源</a>
					</li>
					<li style="display: inline-block;line-height: 20px;">
						<a href="#" onclick="window.history.go(-1);return false;" class="btn ">返回</a>
					</li>
				</ul> -->
				<div class="page-tabs">
            		<ul class="nav nav-tabs">
            		  <li style="display: inline-block;line-height:20px;">
						<a class="btn btn-search" href="#"><i class="halflings-icon search"></i>搜索车源</a>
					</li>
            		<li style="display: inline-block;line-height:20px;float:right;">
						<a class="btn btn-primary" href="{{route('admin.car.create')}}">添加车源</a>
					</li>
					<li style="display:inline-block;line-height:20px;float:right;">
						<a href="#" onclick="window.history.go(-1);return false;" class="btn ">返回</a>
					</li>
            		</ul>
        		</div>

				<table  class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>编号</th>
							<th>名称</th>
							<th>价格</th>
							<th>上牌</th>
							<th>里程</th>							
							<th>变速箱</th>
							<th>颜色</th>
							<th>过户</th>
							<th>状态</th>
							<th>上传日期</th>
							<th>门店</th>
							<th>负责人</th>
							<th>操作</th>
						</tr>
					</thead> 
					<tbody>
						@foreach ($cars as $car)
    					<tr>
							<td>{{$car->car_code}}</td>
							<td>
								<a target="_blank" href="{{route('show.car.index', ['car'=>$car->id])}}">
									{{$car->name}}
								</a>
							</td>
							<td>{{$car->top_price}}万</td>							
							<td>{{substr($car->plate_date, 0 ,10)}}</td>
							<td>{{$car->mileage}}万公里</td>							
							<td>{{$gearbox[$car->gearbox]}}</td>							
							<td>{{$out_color[$car->out_color]}}</td>						
							<td>{{$car->sale_number}}</td>							
							<td>{{$car_stauts_config[$car->car_status]}}</td>							
							<td>{{substr($car->created_at, 0 ,10)}}</td>							
							<td>{{$car->belongsToShop->shop_name}}</td>							
							<td>{{$car->belongsToUser->nick_name or ''}}</td>							
														
							<td class="center">
								@if($car->car_status == '0') 
								<!-- 废弃状态 -->
								<div class="btn-group">
									<button class="btn btn-info changStatus" data-status="{{$car->car_status}}">
										<i class="icon-edit icon-white"></i> 激活
									</button>
									<input class="current_car_id" type="hidden" value="{{$car->id}}">
									<a class="btn btn-warning" href="{{route('admin.car.show', ['car'=>$car->id])}}">
										<i class="icon-edit icon-white"></i> 查看
									</a>
								</div>
								<!-- <div class="btn-group">
									<a class="btn btn-warning" href="{{route('admin.car.show', ['car'=>$car->id])}}">
										<i class="icon-edit icon-white"></i> 查看
									</a>
								</div> -->								
								@elseif($car->car_status == '1' || $car->car_status == '2'|| $car->car_status == '6')
								<!-- 正常、待跟进、已匹配状态 -->
								<div class="btn-group">
									<span>
										<form action="{{route('admin.chance.create')}}" method="post" style="display: inherit;margin:0px;">
										    {{ csrf_field() }}
            								<input type="hidden" name="car_id" value="{{$car->id}}">
            								
											<button class="btn btn-success" type="submit">
											<i class="icon-edit icon-white"></i> 匹配
											</button>
										</form>
									</span>
									<div class="btn-group" role=”group”>
										<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
											更多
											<span class="caret"></span>
										</button>
										<ul class="dropdown-menu pull-right">
											<li>
												<a class="btn btn-warning" href="{{route('admin.car.edit', ['car'=>$car->id])}}">
													<i class="icon-edit icon-white"></i> 信息编辑
												</a>												
											</li>
											<li>
												<a class="btn btn-warning" href="{{route('admin.car.editImg', ['car'=>$car->id])}}">
													<i class="icon-edit icon-white"></i> 图片编辑
												</a>												
											</li>	
											<li>
												<a target="_blank" class="btn btn-success" href="{{route('show.car.index', ['car'=>$car->id])}}">
													<i class="icon-edit icon-white"></i> 网站查看
												</a>												
											</li>										
											<li>
												<button class="btn btn-info changStatus" data-status="{{$car->car_status}}" style="width:100%;>
													<i class="icon-edit icon-white"></i> 废弃
												</button>
												<input class="current_car_id" type="hidden" value="{{$car->id}}">												
											</li>
											<li>
												<button class="btn btn-success follow_quickly">
													<i class="icon-edit icon-white"></i> 快速跟进
												</button>
												<input class="current_car_id" type="hidden" value="{{$car->id}}">
											</li>
										</ul>
 							 		</div>
								</div>
								@elseif($car->car_status == '3' || $car->car_status == '4' || $car->car_status == '6')
								<div class="btn-group">
								<a class="btn btn-warning" href="{{route('admin.car.edit', ['car'=>$car->id])}}">
									<i class="icon-edit icon-white"></i> 编辑
								</a>
								<a class="btn btn-warning" href="{{route('admin.car.editImg', ['car'=>$car->id])}}">
									<i class="icon-edit icon-white"></i> 图片
								</a>
								</div>											
								@elseif($car->car_status == '5')
								<div class="btn-group">
								<a class="btn btn-warning" href="{{route('admin.car.show', ['car'=>$car->id])}}">
									<i class="icon-edit icon-white"></i> 查看
								</a>
								<a class="btn btn-warning" href="{{route('admin.car.editImg', ['car'=>$car->id])}}">
									<i class="icon-edit icon-white"></i> 图片
								</a>
								</div>											
								@else
								<!-- 其他 -->
								<div class="btn-group">
									<a class="btn btn-warning" href="{{route('admin.car.show', ['car'=>$car->id])}}">
										<i class="icon-edit icon-white"></i> 查看
									</a>
								</div>	
								@endif	
							</td>
						</tr>
						@endforeach							
					</tbody>
				</table>
				<div class="pagination pagination-centered">
					 {!! $cars->links() !!}
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
			<form class="form-horizontal" id="condition" action="{{route('admin.car.self')}}" method="post">
				{!! csrf_field() !!}
				<fieldset>
					<div class="control-group">
						<label class="control-label" for="car_code">车源编号</label>
						<div class="controls">
						  	<input class="input-xlarge focused" name="car_code" id="car_code" type="text" value="">
						</div>
					</div>		
					<div class="control-group  ">
            	    	<label class="control-label" for="category_type">车辆类型</label>
            	    	<div class="controls">
            	      		<select id="category_type" name="category_type" >
            	      			<option value=''>不限</option>
            	      			@foreach($category_type as $key=>$category)
            	      			<option @if(isset($select_conditions['category_type']) && $select_conditions['category_type'] == $key && $select_conditions['category_type'] != '') selected @endif value='{{$key}}'>{{$category}}</option>  
            	      			@endforeach                                         
            	      		</select>
            	    	</div>
            	  	</div>
            	  	<div class="control-group">
					<label class="control-label" for="selectError3">车型品牌</label>
						<div class="controls">
						  	<select id="top_category" name="brand_id" style="width:25%">
						  		<option value="0">请选择品牌</option>
						  		@foreach ($all_top_brands as $brand)	
						  		<option value="{{$brand->id}}">{{$brand->name}}</option>
						  		@endforeach										
							</select>
							<select id="second_category" name="car_factory" style="display:none;width:25%;">
						  		<option value="0">请选择厂家</option>											
							</select>
							<select id="thrid_category" name="category_id" style="display:none;width:25%;">
						  		<option value="0">请选择车系</option>											
							</select>
						</div>
					</div>
					<div class="control-group  ">
            	    	<label class="control-label" for="car_status">车源状态</label>
            	    	<div class="controls">
            	      		<select id="car_status" name="car_status" >                        
            	      			<option value=''>不限</option>                        
								@foreach($car_stauts_config as $key=>$status)								
									<option @if($select_conditions['car_status'] == $key && $select_conditions['car_status'] != '') selected @endif value="{{$key}}">	{{$status}}
									</option>	
								@endforeach	                     
            	      		</select>
            	    	</div>
            	  	</div>
					<div class="control-group">
						<label class="control-label" for="bottom_price">价格范围</label>
						<div class="controls">
						  	<input class="input-xlarge one_line focused" name="bottom_price" id="bottom_price" type="text" value="{{$select_conditions['bottom_price'] or ''}}" placeholder="低价">
						  	<input class="input-xlarge one_line focused" name="top_price" id="top_price" type="text" value="{{$select_conditions['top_price'] or ''}}" placeholder="高价">
						</div>
					</div>
					<!-- <div class="control-group">
						<label class="control-label" for="top_price">价格上限</label>
						<div class="controls">
						  	<input class="input-xlarge focused" name="top_price" id="top_price" type="text" value="{{$select_conditions['top_price'] or ''}}">
						</div>
					</div> -->
					<div class="control-group">
						<label class="control-label" for="begin_date">日期范围</label>
						<div class="controls">
							<input type="text" class="input-xlarge date-picker one_line" name="begin_date" id="begin_date" value="{{$select_conditions['begin_date'] or ''}}" placeholder="开始日期" >
							<input type="text" class="input-xlarge one_line date-picker" name="end_date" id="end_date" value="{{$select_conditions['end_date'] or ''}}" placeholder="结束日期">
						</div>
					</div>
					<!-- <div class="control-group">
						<label class="control-label" for="end_date">结束日期</label>
						<div class="controls">
							<input type="text" class="input-xlarge date-picker" name="end_date" id="end_date" value="{{$select_conditions['end_date'] or ''}}">
						</div>
					</div> -->
					<!-- <div class="control-group  ">
            	    	<label class="control-label" for="gearbox">变速箱</label>
            	    	<div class="controls">
            	      		<select id="gearbox" name="gearbox" >
            	      			@foreach($gearbox as $key=>$box)
            	      			<option @if(isset($select_conditions['gearbox']) && $select_conditions['gearbox'] == $key && $select_conditions['gearbox'] != '') selected @endif value='{{$key}}'>{{$box}}</option>  
            	      			@endforeach                                         
            	      		</select>
            	    	</div>
            	  	</div> -->
            	  	<div class="control-group">
            	    	<label class="control-label" for="gearbox">变速箱</label>
            	    	<div class="controls">
            	    		
            	    		<label class="checkbox-inline">
            	    			@foreach($gearbox as $key=>$box)
            	    			@if($key > 0)
									<input type="checkbox" name="gearbox[]" value="{{$key}}" @if(isset($select_conditions['gearbox']) && in_array($key, $select_conditions['gearbox'])) checked @endif>{{$box}}
								@endif
								@endforeach
							</label>
							
            	    	</div>
            	  	</div>
            	  	<div class="control-group  ">
            	    	<label class="control-label" for="mileage">里程范围</label>
            	    	<div class="controls">
            	      		<input class="input-xlarge one_line focused" name="begin_mileage" id="begin_mileage" type="text" value="{{$select_conditions['begin_mileage'] or ''}}" placeholder="里程上限">
            	      		<input class="input-xlarge one_line focused" name="end_mileage" id="end_mileage" type="text" value="{{$select_conditions['end_mileage'] or ''}}" placeholder="里程下限">
            	    	</div>
            	  	</div>
            	  	<div class="control-group  ">
            	    	<label class="control-label" for="out_color">外观</label>
            	    	<div class="controls">
            	      		<select id="out_color" name="out_color" >
            	      			@foreach($out_color as $key=>$color)
            	      			<option @if(isset($select_conditions['out_color']) && $select_conditions['out_color'] == $key && $select_conditions['out_color'] != '') selected @endif value='{{$key}}'>{{$color}}</option>  
            	      			@endforeach                                         
            	      		</select>
            	    	</div>
            	  	</div>
            	  	<div class="control-group  ">
            	    	<label class="control-label" for="capacity">排量</label>
            	    	<div class="controls">
            	      		<select id="capacity" name="capacity" >
            	      			@foreach($capacity as $key=>$value)
            	      			<option @if(isset($select_conditions['capacity']) && $select_conditions['capacity'] == $key && $select_conditions['capacity'] != '') selected @endif value='{{$key}}'>{{$value}}</option>  
            	      			@endforeach                                         
            	      		</select>
            	    	</div>
            	  	</div>
            	  	<div class="control-group  ">
            	    	<label class="control-label" for="sale_number">过户次数</label>
            	    	<div class="controls">
            	      		<select id="sale_number" name="sale_number" >
            	      			@foreach($sale_number as $key=>$number)
            	      			<option @if(isset($select_conditions['sale_number']) && $select_conditions['sale_number'] == $key && $select_conditions['sale_number'] != '') selected @endif value='{{$key}}'>{{$number}}</option>  
            	      			@endforeach                                         
            	      		</select>
            	    	</div>
            	  	</div>				  
				</fieldset>
				<div class="modal-footer">
				</div>
				<a href="javascript:void(0);" class="btn" data-dismiss="modal">关闭</a>
				<input type="hidden" name="ajax_request_url" value="{{route('admin.brand.getChildBrand')}}">
				<button type="submit" class="btn btn-primary">搜索</button>
			</form>	
		</div>						         
	</div>
@endsection

@section('script_content')
<!-- 引入车型级联js -->
<script src="{{URL::asset('js/tcl/category.js')}}"></script> 
<!-- 引入日历插件 -->
<script src="{{URL::asset('js/tcl/bootstrap-datepicker.js')}}"></script> 
<script src="{{URL::asset('js/tcl/locales/bootstrap-datepicker.zh-CN.js')}}"></script>
<!-- 引入确认框js -->
<script src="{{URL::asset('js/tcl/confirm.js')}}"></script> 
<script>
	$(document).ready(function(){

		var redirect_url       = '{{route('admin.car.self')}}';
		var select_category_id = "{{$select_conditions['category_id'] or '0'}}";
		var select_factory_id  = "{{$select_conditions['car_factory'] or '0'}}";

		$('#second_category').children().first().val(select_factory_id);
		$('#thrid_category').children().first().val(select_category_id);

		/*if(car_status_current == ''){

			$('.select_car_status').each(function(){

				$(this).removeClass('active');
			});
		}*/

		$('.changStatus').click(function(){

			var status = $(this).attr('data-status');
			var obj = $(this);
			var content = '';
			var confirmButton = '';
			var current_car_id  = $(this).next().val();
			/*console.log(current_car_id);
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
						url: 'car/changeStatus',
						data: { id : current_car_id, status : status},
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

		/*$('li.select_car_status').click(function(){

			var car_status = $(this).children('a').attr('data-status');

			if(!$(this).hasClass('active')){

				$(this).addClass('active').siblings().removeClass('active');
				$("select[name='car_status']").val(car_status);
				alert('{{route('admin.car.self')}}');
				return false;
				$('#condition').attr('action', '{{route('admin.car.self')}}');
				$('#condition').submit();
			}			
		});*/

		$('.pagination').children('li').children('a').click(function(){

			// alert($(this).attr('href'));
			$('#condition').attr('action', $(this).attr('href'));
			// alert($('#condition').attr('action'));
			$('#condition').submit();
			return false;
		});

		$('.follow_quickly').click(function(){

			var current_follow_car_id  = $(this).next().val();

			// alert(current_follow_car_id);

			$.ajax({
				
				type: 'POST',
				url: 'car/follwQuickly',
				data: { id : current_follow_car_id},
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

		$('.date-picker').datepicker({
            language: 'zh-CN',
            autoclose: true,
            format: 'yyyy-mm-dd',
            todayHighlight: true
        });

        $('#top_category').children('option').each(function(){

        	var select_brand_id = "{{$select_conditions['brand_id'] or '0'}}";

        	if($(this).val() == select_brand_id){
        		$(this).attr('selected', 'selected');
        	}
        }); 
	});
</script>
@endsection
