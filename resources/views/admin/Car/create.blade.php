@extends('layouts.main')

@section('head_content')
<!-- 自定义css -->
<link id="bootstrap-style" href="{{ URL::asset('css/tcl/bootstrap-datepicker.min.css') }}" rel="stylesheet">
@endsection

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
		<a href="{{route('car.self')}}">我的车源</a> 
		<i class="icon-angle-right"></i>
	</li>
	<li><a href="#1f">添加车源</a></li>
</ul>
@endsection
<!-- 主体 -->
@section('content')

@include('layouts.message')

<div class="row-fluid sortable" style="height:100%;">

	<div class="box span12" style="height:100%;">
		<div class="box-header">
			<h2><i class="halflings-icon  icon-truck"></i><span class="break"></span><span id="content_title">客户信息</span></h2>
		<div class="box-icon">
			<a href="#" class="btn-minimize"><i class="halflings-icon  chevron-up"></i></a>
		</div>
	</div>
	<div class="box-content" id="customer_content">
		<form id="customer_form" class="form-horizontal" action="" method="post">
			{!! csrf_field() !!}
			<fieldset>
				<div class="control-group">
					<label class="control-label" for="customer_name">客户姓名</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="customer_name" name="customer_name" type="text" value="">
					</div>
				 </div>
				 <div class="control-group">
					<label class="control-label" for="telephone">手机号</label>
					<div class="controls">
					  	<input class="input-xlarge focused" id="telephone" name="telephone" type="text" value="">
					</div>
				 </div>
				<div class="control-group  ">
                	<label class="control-label" for="customer_res">客户来源</label>
                	<div class="controls">
                  		<select id="customer_res" name="customer_res" >                        
					  		@foreach($customer_res as $key=>$res)											
					  			<option  value="{{$key}}">{{$res}}</option>	
					  		@endforeach	                     
                  		</select>
                	</div>
              	</div> 
				<div class="form-actions">
					<button class="btn" onclick="window.history.go(-1);return false;">返回</button>
					<button id="customer_add" class="btn btn-primary">下一步</button>					
				 </div>
			</fieldset>
		</form>
	</div>
		<div class="box-content" id="car_content" style="overflow: auto;height: 70%;display:none;">
			<form class="form-horizontal" id="car_form" action="" method="post" enctype="multipart/form-data">
				{!! csrf_field() !!}
				<fieldset>
					<div class="control-group">
						<label class="control-label" for="focusedInput">车型类别</label>
						<div class="controls">
						   <select id="category_type" name="category_type">
						  		@foreach($category_type as $key=>$category)											
						  		<option  value="{{$key}}">{{$category}}</option>	
						  		@endforeach											
							</select>
						</div>
				  	</div>
				  <div class="control-group">
					<label class="control-label" for="selectError3">车型品牌</label>
					<div class="controls">
					  	<select id="top_category" name="brand_id" style="width:15%">
					  		<option value="0">请选择品牌</option>
					  		@foreach ($all_top_brands as $brand)	
					  		<option value="{{$brand->id}}">{{$brand->name}}</option>
					  		@endforeach										
						</select>
						<select id="second_category" name="car_factory" style="display:none;width:15%;">
					  		<option  value="0">请选择厂家</option>											
						</select>
						<select id="thrid_category" name="category_id" style="display:none;width:15%;">
					  		<option  value="0">请选择车系</option>											
						</select>
						<select id="four_category" name="cate_id" style="display:none;">
					  		<option  value="0">请选择车型</option>											
						</select>

					</div>
				  </div>
				  <div class="control-group">
					<label class="control-label" for="name">车源名称</label>
					<div class="controls">
						<input type="hidden" name="auto_add_name" id="auto_add_name" value="1">
					  	<input class="input-xlarge focused" readonly="readonly" id="name" name="name" type="text" value="">
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="vin_code">车架号</label>
					<div class="controls">
					  	<input class="input-xlarge focused" id="vin_code" name="vin_code" type="text" value="">
					</div>
				  </div>

				  <div class="control-group  ">
                	<label class="control-label" for="capacity">排量</label>
                	<div class="controls">
                  		<select id="capacity" name="capacity" >                        
					  		@foreach($capacity as $key=>$capa)											
					  		<option  value="{{$key}}">{{$capa}}</option>	
					  		@endforeach	                     
                  		</select>
                	</div>
              	</div>

				  <div class="control-group  ">
                	<label class="control-label" for="shiftType">变速箱</label>
                	<div class="controls">
                  		<select id="gearbox" name="gearbox" >                        
					  		@foreach($gearbox as $key=>$gear)											
					  		<option  value="{{$key}}">{{$gear}}</option>	
					  		@endforeach	                     
                  		</select>
                	</div>
              	</div>

              	<div class="control-group  ">
                	<label class="control-label" for="out_color">外观颜色</label>
                	<div class="controls">
                  		<select id="out_color" name="out_color" >                        
					  		@foreach($out_color as $key=>$color)											
					  		<option  value="{{$key}}">{{$color}}</option>	
					  		@endforeach	                     
                  		</select>
                	</div>
              	</div>

              	<div class="control-group  ">
                	<label class="control-label" for="inside_color">内饰颜色</label>
                	<div class="controls">
                  		<select id="inside_color" name="inside_color" >                        
					  		@foreach($inside_color as $key=>$color)											
					  		<option  value="{{$key}}">{{$color}}</option>	
					  		@endforeach	                     
                  		</select>
                	</div>
              	</div>
              	<div class="control-group">
					<label class="control-label" for="plate_date">上牌日期</label>
						<div class="controls">
							<input type="text" class="input-xlarge date-picker" name="plate_date" id="plate_date" value="">
						</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="plate_end">到检日期</label>
						<div class="controls">
							<input type="text" class="input-xlarge date-picker" name="plate_end" id="plate_end" value="">
						</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="plate_provence">上牌城市</label>
					<div class="controls">
					  	<select id="plate_provence" name="plate_provence" style="width:15%">
					  		<option value="0">请选择省份</option>
					  		<option value="1">河北</option>
					  		<option value="2">河南</option>
									
						</select>
						<select id="plate_city" name="plate_city" style="width:15%;">
					  		<option  value="0">请选择城市</option>											
					  		<option  value="1">石家庄</option>											
					  		<option  value="2">唐山</option>											
						</select>
					</div>
				  </div>

				<div class="control-group  ">
                	<label class="control-label" for="shiftType">过户次数</label>
                	<div class="controls">
                  		<select id="sale_number" name="sale_number" >                        
					  		@foreach($sale_number as $key=>$sale)											
					  		<option  value="{{$key}}">{{$sale}}</option>	
					  		@endforeach	                     
                  		</select>
                	</div>
              	</div>
              	<div class="control-group  ">
                	<label class="control-label" for="safe_type">车险类别</label>
                	<div class="controls">
                  		<select id="safe_type" name="safe_type" >                        
					  		@foreach($safe_type as $key=>$safe)											
					  		<option  value="{{$key}}">{{$safe}}</option>	
					  		@endforeach	                     
                  		</select>
                	</div>
              	</div>
              	<div class="control-group">
					<label class="control-label" for="safe_end">到保日期</label>
						<div class="controls">
							<input type="text" class="input-xlarge date-picker" name="safe_end" id="safe_end" value="">
						</div>
				</div>
              	<div class="control-group">
					<label class="control-label" for="focusedInput">行驶里程</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="mileage" name="mileage" type="text" value="{{old('mileage')}}"><span style="margin-left:5px;">万公里</span>
					</div>
				</div>

				<div class="control-group ">
					<label class="control-label" for="description">
						<font style="color:red;">*&nbsp;</font>车况
					</label>
				<div class="controls">
					<textarea id="description" name="description" required ></textarea>
				</div>
			  </div>

			  <div class="control-group">
					<label class="control-label" for="top_price">期望价格</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="top_price" name="top_price" type="text" value="{{old('top_price')}}"><span style="margin-left:5px;">万元</span>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="bottom_price">底价</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="bottom_price" name="bottom_price" type="text" value="{{old('bottom_price')}}"><span style="margin-left:5px;">万元</span>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="selectError3">是否推荐</label>
					<div class="controls">
					  <select id="recommend" name="recommend" >
					  	<option  value="1">推荐</option>
						<option  value="0">不推荐</option>						
						</select>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="is_top">是否置顶</label>
					<div class="controls">
					  <select id="is_top" name="is_top" >
					  	<option  value="1">置顶</option>
						<option  value="0">不置顶</option>						
						</select>
					</div>
				</div>
				<div class="control-group  ">
                	<label class="control-label" for="car_type">车源类型</label>
                	<div class="controls">
                  		<select id="car_type" name="car_type" >                        
					  		@foreach($car_type as $key=>$type)											
					  		<option  value="{{$key}}">{{$type}}</option>	
					  		@endforeach	                     
                  		</select>
                	</div>
              	</div>

				<div class="control-group">
					<label class="control-label" for="selectError3">是否启用</label>
					<div class="controls">
					  <select id="status" name="status">
					  	<option  value="1">启用</option>
						<option  value="0">停用</option>						
						</select>
					</div>
				  </div>	
	  				
				  <div class="form-actions">
				  	<input type="hidden" name="ajax_request_url" value="{{route('brand.getChildBrand')}}">
				  	<input type="hidden" name="shop_id" value="{{Auth::user()->shop_id}}">
				  	<input type="hidden" name="want_area" value="{{$city_id}}">					
				  	<input type="hidden" name="customer_id" value="">					
					<button class="btn" id="return_customer">返回</button>
					<button id="car_add" class="btn btn-primary">确定</button>
				  </div>
				</fieldset>
			</form>				
		</div>
	</div>			
</div>   
@endsection
@section('script_content')
<!-- 引入车型级联js -->
<script src="{{URL::asset('js/tcl/category.js')}}"></script> 
<!-- 引入对话框插件 -->
<script src="{{URL::asset('js/tcl/dialog.js')}}"></script> 
<!-- 引入日历插件 -->
<script src="{{URL::asset('js/tcl/bootstrap-datepicker.js')}}"></script> 
<script src="{{URL::asset('js/tcl/locales/bootstrap-datepicker.zh-CN.js')}}"></script> 
<script>
	$(document).ready(function(){

		var request_url      = '{{route('admin.customer.ajaxStore')}}';
		/*var customer_name    = $('#customer_name').val();
		var telephone        = $('#telephone').val();
		var customer_res     = $('#customer_res').val();*/
		var customer_content = $('#customer_content');
		var car_content      = $('#car_content');
		var customer_id      = $("input[name='customer_id']");	

		$('.date-picker').datepicker({
            language: 'zh-CN',
            autoclose: true,
            format: 'yyyy-mm-dd',
            todayHighlight: true
        });	

		$('#customer_add').click(function(){

			$.ajax({
				method: 'POST',
				url: request_url,
				data:$("#customer_form").serialize(),
				dataType: 'json',
				headers: {		
					'X-CSRF-TOKEN': '{{ csrf_token() }}'		
				},
				success:function(data){

					//设置新加车源对应的客户ID
					customer_id.val(data.id);
					customer_content.hide();
					car_content.show();
					$('#content_title').text('车源信息');
					// alert($("input[name='customer_id']").val());
				},
				error: function(xhr, type){
					/*console.log(JSON.parse(xhr.responseText));
					console.log(JSON.parse(xhr.responseText).customer_name[0]);
					console.log(JSON.parse(xhr.responseText).telephone[0]);
					console.log(xhr.responseText);*/

					if(xhr.status == 422){ //表单验证失败，返回的状态

						alert('请输入用户名和真实手机号码');

						return false;
					}
					alert('添加用户失败，请重新添加或联系管理员');
				}
			});
			return false;
		});

		$('#car_add').click(function(){

			var request_url = '{{route('admin.car.ajaxAdd')}}';

			$.ajax({
				method: 'POST',
				url: request_url,
				data:$("#car_form").serialize(),
				dataType: 'json',
				headers: {		
					'X-CSRF-TOKEN': '{{ csrf_token() }}'		
				},
				success:function(data){

					console.log(data);
					alert('车源添加成功！');
				},
				error: function(xhr, type){
					
					if(xhr.status == 422){ //表单验证失败，返回的状态
						// console.log(JSON.parse(xhr.responseText));
						var content_error = '';
						
						content_error += '<div>';
						content_error += "<div class='alert alert-warning' style='text-align:center;'>";
						$.each(JSON.parse(xhr.responseText),function(name,value) {
							// console.log(name);
							// console.log(value);							
							content_error += value[0];
							content_error += '<div>';							
						});
						content_error += '</div>';
						content_error += '</div>';

						var modal = new Modal({
    						title: '',
    						content: content_error,
    						width: 560,
    						
    						onModalShow: function () {
    						    var $form = this.$modal.find('div');
    						}
						});

						modal.open();

						return false;
					}
					alert('添加车源败，请重新添加或联系管理员');
				}
			});

			return false;
		});

		$('#return_customer').click(function(){

			customer_content.show();
			car_content.hide();

			return false;
		});
	});
</script>
@endsection