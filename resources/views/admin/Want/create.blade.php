@extends('layouts.main')

@section('head_content')
<!-- 自定义css -->
<link id="bootstrap-style" href="{{ URL::asset('css/tcl/bootstrap-datepicker.min.css') }}" rel="stylesheet">
<link id="bootstrap-style" href="{{ URL::asset('css/tcl/dropzone/dropzone.css') }}" rel="stylesheet">
<style type="text/css">
	.dropzone{
		padding: 30px 20px;
	}
	.one_line{
		width:20%;
		margin-bottom:5px;
	}
</style>
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
		<a href="{{route('admin.want.self')}}">我的求购信息</a> 
		<i class="icon-angle-right"></i>
	</li>
	<li><a href="#1f">添加求购信息</a></li>
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
	<!-- 客户信息添加 begin -->
	<div class="box-content" id="customer_content">
		<form id="customer_form" class="form-horizontal" action="" method="post">
			{!! csrf_field() !!}
			<fieldset>
				<div class="control-group">
					<label class="control-label" for="customer_name"><font style="color:red;">*&nbsp;</font>客户姓名</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="customer_name" name="customer_name" type="text" value="" required>
					</div>
				 </div>
				 <div class="control-group">
					<label class="control-label" for="telephone"><font style="color:red;">*&nbsp;</font>手机号</label>
					<div class="controls">
					  	<input class="input-xlarge focused" id="telephone" name="telephone" type="text" value="" required>
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
	<!-- 客户信息添加 end -->
	<!-- 求购信息添加 begin-->
	<div class="box-content" id="want_content" style="overflow: auto;height:70%;display:none;">
			<form class="form-horizontal" id="want_form" action="{{route('admin.want.store')}}" method="post">
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
						<select id="thrid_category" name="categorey_id" style="display:none;width:15%;">
					  		<option  value="0">请选择车系</option>											
						</select>
						<select id="four_category" name="cate_id" style="display:none;">
					  		<option  value="0">请选择车型</option>											
						</select>

					</div>
				  </div>
				  <div class="control-group">
					<label class="control-label" for="name"><font style="color:red;">*&nbsp;</font>求购信息名称</label>
					<div class="controls">
						<input type="hidden" name="auto_add_name" id="auto_add_name" value="1">
						<input type="hidden" name="is_want" id="is_want" value="1">
					  	<input class="input-xlarge focused" readonly="readonly" id="name" name="name" type="text" value="">
					</div>
				  </div>
				 <div class="control-group">
					<label class="control-label" for="alternate_car">备选车型</label>
					<div class="controls">
						<input class="input-xlarge one_line focused" name="alternate_car" id="alternate_car" type="text" value="{{old('alternate_car')}}" placeholder="备选车型">
						<input class="input-xlarge one_line focused" name="alternate_car_another" id="alternate_car_another" type="text" value="{{old('alternate_car_another')}}" placeholder="备选车型">
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

              	<!-- <div class="control-group  ">
                	<label class="control-label" for="out_color">外观颜色</label>
                	<div class="controls">
                  		<select id="out_color" name="out_color" >                        
					  		@foreach($out_color as $key=>$color)											
					  		<option  value="{{$key}}">{{$color}}</option>	
					  		@endforeach	                     
                  		</select>
                	</div>
              	</div> -->

              	<!-- <div class="control-group  ">
                	<label class="control-label" for="inside_color">内饰颜色</label>
                	<div class="controls">
                  		<select id="inside_color" name="inside_color" >                        
					  		@foreach($inside_color as $key=>$color)											
					  		<option  value="{{$key}}">{{$color}}</option>	
					  		@endforeach	                     
                  		</select>
                	</div>
              	</div> -->
              	<!-- <div class="control-group  ">
                	<label class="control-label" for="shiftType">过户次数</label>
                	<div class="controls">
                  		<select id="sale_number" name="sale_number" >                        
					  		@foreach($sale_number_config as $key=>$sale)											
					  		<option  value="{{$key}}">{{$sale}}</option>	
					  		@endforeach	                     
                  		</select>
                	</div>
              	</div> -->
				<!-- <div class="control-group">
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
				  </div> -->

				
              	<!-- <div class="control-group  ">
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
				</div> -->
              	<!-- <div class="control-group  ">
                	<label class="control-label" for="age">车龄</label>
                	<div class="controls">
                  		<select id="age" name="age" >                       
					  		@foreach($age as $key=>$ag)											
					  		<option  value="{{$key}}">{{$ag}}</option>	
					  		@endforeach	                     
                  		</select>
                	</div>
              	</div> -->
              	<!-- <div class="control-group  ">
                	<label class="control-label" for="mileage">里程</label>
                	<div class="controls">
                  		<select id="mileage" name="mileage" >                       
					  		@foreach($mileage_config as $key=>$mileage)											
					  		<option  value="{{$key}}">{{$mileage}}</option>	
					  		@endforeach	                     
                  		</select>
                	</div>
              	</div> -->
			  <div class="control-group">
					<label class="control-label" for="top_price"><font style="color:red;">*&nbsp;</font>可接受价格</label>
					<div class="controls">
					  <input class="input-xlarge one_line focused" id="top_price" name="top_price" type="text" value="{{old('top_price')}}" required><span style="margin-left:5px;">万元</span>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="bottom_price"><font style="color:red;">*&nbsp;</font>期望格价</label>
					<div class="controls">
					  <input class="input-xlarge one_line focused" id="bottom_price" name="bottom_price" type="text" value="{{old('bottom_price')}}" required><span style="margin-left:5px;">万元</span>
					</div>
				</div>
				<!-- <div class="control-group">
					<label class="control-label" for="selectError3">是否推荐</label>
					<div class="controls">
					  <select id="recommend" name="recommend" >
					  	<option  value="0">不推荐</option>
						<option  value="1">推荐</option>						
						</select>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="is_top">是否置顶</label>
					<div class="controls">
					  <select id="is_top" name="is_top" >
					  	<option  value="0">不置顶</option>
						<option  value="1">置顶</option>						
						</select>
					</div>
				</div>
				<div class="control-group  ">
                	<label class="control-label" for="want_type">求购信息类型</label>
                	<div class="controls">
                  		<select id="category_type" name="category_type" >                        
					  		@foreach($category_type as $key=>$type)											
					  		<option  value="{{$key}}">{{$type}}</option>	
					  		@endforeach	                     
                  		</select>
                	</div>
              	</div> -->

				<div class="control-group ">
					<label class="control-label" for="remark">
						<font style="color:red;">*&nbsp;</font>客户描述
					</label>
					<div class="controls">
					<textarea id="remark" name="remark" required ></textarea>
					</div>
			  	</div>	

			  	<div class="control-group ">
					<label class="control-label" for="xs_remark">
						<font style="color:red;">*&nbsp;</font>销售描述
					</label>
					<div class="controls">
					<textarea id="xs_remark" name="xs_remark" required ></textarea>
					</div>
			  	</div>
	  				
				  <div class="form-actions">
				  	<input type="hidden" name="ajax_request_url" value="{{route('admin.brand.getChildBrand')}}">
				  	<input type="hidden" name="cate_ajax_request_url" value="{{route('admin.category.getChildCategory')}}">
				  	<input type="hidden" name="shop_id" value="{{Auth::user()->shop_id}}">
				  	<input type="hidden" name="want_area" value="{{$city_id}}">					
				  	<input type="hidden" name="customer_id" value="">					
					<button class="btn" id="return_customer">返回</button>
					<button id="want_add" type="submit" class="btn btn-primary">确定</button>
				  </div>
				</fieldset>
			</form>				
	</div>
		<!-- 求购信息添加 end-->		
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
<!-- 引入图片上传插件 -->
<!-- <script src="{{URL::asset('js/tcl/dropzone/dropzone.js')}}"></script>  -->
<!-- <script src="{{URL::asset('js/tcl/dropzone-config.js')}}"></script>  -->
<script>
	$(document).ready(function(){

		var request_url      = '{{route('admin.customer.ajaxStore')}}';
		/*var customer_name    = $('#customer_name').val();
		var telephone        = $('#telephone').val();
		var customer_res     = $('#customer_res').val();*/
		var customer_content = $('#customer_content');
		var want_content      = $('#want_content');
		// var img_content      = $('#img_content');
		var customer_id      = $("input[name='customer_id']");	
		// var want_id           = $("input[name='want_id']");	
		// alert(customer_id.val());
		if(customer_id.val() != ''){
			// alert('客户已经添加');
			customer_content.hide();
			want_content.show();
		}

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

					//设置新加求购信息对应的客户ID
					customer_id.val(data.id);
					customer_content.hide();
					want_content.show();
					$('#content_title').text('求购信息信息');
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

		$('#return_customer').click(function(){

			customer_content.show();
			want_content.hide();
			img_content.hide();

			return false;
		});
	});
</script>
@endsection