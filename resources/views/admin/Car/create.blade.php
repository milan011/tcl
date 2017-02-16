@extends('layouts.main')

@section('head_content')
<!-- 自定义css -->
<link id="bootstrap-style" href="{{ URL::asset('css/tcl/bootstrap-datepicker.min.css') }}" rel="stylesheet">
<link id="bootstrap-style" href="{{ URL::asset('css/tcl/dropzone/dropzone.css') }}" rel="stylesheet">
<style type="text/css">
	.dropzone{
		padding: 30px 20px;
	}
	.dz-remove{
        margin-left:5%;
        float:left;
        display: inline !important;
    }
    .dz-frist{
    	margin-right:5%;
    	float:right;
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
		<a href="{{route('admin.car.self')}}">我的车源</a> 
		<i class="icon-angle-right"></i>
	</li>
	<li><a href="#1f">添加车源</a></li>
</ul>
@endsection
<!-- 主体 -->
@section('content')

@include('layouts.message')

<div class="row-fluid sortable" style="height:100%;">
	<!-- 客户信息添加 begin -->
	<div class="box span12" style="height:100%;">
		<div class="box-header">
			<h2><i class="halflings-icon  icon-truck"></i><span class="break"></span><span id="content_title">客户信息</span></h2>
			<div class="box-icon">
				<a href="#" class="btn-minimize"><i class="halflings-icon  chevron-up"></i></a>
			</div>
		</div>
		<!-- 客户信息添加 end -->
		<!-- 车源信息添加 begin-->
		<div class="box-content" id="customer_content">
			<form id="customer_form" class="form-horizontal" action="" method="post">
			{!! csrf_field() !!}
				<fieldset>
					<div class="control-group">
						<label class="control-label" for="customer_name">客户姓名</label>
						<div class="controls">
						  <input class="input-xlarge focused" id="customer_name" name="customer_name" type="text" value="{{old('customer_name')}}">
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
		<div class="box-content" id="car_content" style="overflow: auto;height:70%;display:none;">
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
						<input type="text" onchange="checkCarDate();" class="input-xlarge date-picker" name="plate_date" id="plate_date" value="">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="plate_end">到检日期</label>
					<div class="controls">
						<input type="text" readonly="readonly" class="input-xlarge" name="plate_end" id="plate_end" value="">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="safe_end">到保日期</label>
					<div class="controls">
						<input type="text" readonly="readonly" class="input-xlarge" name="safe_end" id="safe_end" value="">
					</div>
				</div>
				 <div class="control-group">
					<label class="control-label" for="provence_id">所属城市</label>
					<div class="controls">
					  	<select id="provence_id" name="plate_provence">
					  		<option value="0">请选择省份</option>
					  		@foreach($area as $provence)
					  		<option  value="{{$provence->id}}">{{$provence->name}}</option>
					  		@endforeach									
						</select>
						<select id="city_id" name="plate_city" style="display:none;">
					  		<option  value="0">请选择城市</option>											
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
					<label class="control-label" for="focusedInput">行驶里程</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="mileage" name="mileage" type="text" value="{{old('mileage')}}"><span style="margin-left:5px;">万公里</span>
					</div>
				</div>
			  <div class="control-group">
					<label class="control-label" for="top_price"><font style="color:red;">*&nbsp;</font>期望价格</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="top_price" name="top_price" type="text" value="{{old('top_price')}}" required><span style="margin-left:5px;">万元</span>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="bottom_price"><font style="color:red;">*&nbsp;</font>底价</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="bottom_price" name="bottom_price" type="text" value="{{old('bottom_price')}}" required><span style="margin-left:5px;">万元</span>
					</div>
				</div>
				<div class="control-group ">
					<label class="control-label" for="description">
						<font style="color:red;">*&nbsp;</font>客户描述
					</label>
					<div class="controls">
					<textarea id="description" name="description" required ></textarea>
					</div>
			  	</div>	
	  			<div class="control-group ">
					<label class="control-label" for="xs_description">
						<font style="color:red;">*&nbsp;</font>销售描述
					</label>
					<div class="controls">
					<textarea id="xs_description" name="xs_description" required ></textarea>
					</div>
			  	</div>
				  <div class="form-actions">
				  	<input type="hidden" name="ajax_request_url" value="{{route('admin.brand.getChildBrand')}}">
				  	<input type="hidden" name="cate_ajax_request_url" value="{{route('admin.category.getChildCategory')}}">
				  	<input type="hidden" name="shop_id" value="{{Auth::user()->shop_id}}">
				  	<input type="hidden" name="want_area" value="{{$city_id}}">					
				  	<input type="hidden" name="customer_id" value="">					
					<button class="btn" id="return_customer">返回</button>
					<button id="car_add" class="btn btn-primary">确定</button>
				  </div>
				</fieldset>
			</form>				
		</div>
		<!-- 车源信息添加 end-->
		<!-- 图片信息添加 begin -->
		<div class="box-content" id="img_content" style="overflow: auto;height:70%;display:none;">
			<!-- <div class="row"> -->
        	<div class="col-md-offset-1 col-md-10">
            	<div class="jumbotron how-to-create" >
					<!-- <h3>Images <span id="photoCounter"></span></h3><br /> -->
					<!-- 隐藏图片信息模板 -->
					
						<form id="real-dropzone" class="form-horizontal dropzone" action="{{route('admin.image.upload')}}" method="post" enctype="multipart/form-data">
							{!! csrf_field() !!}
							<div class="dz-message">
		
            				</div>

            				<div class="fallback">
                			    <input name="file" type="file" multiple />
                			</div>
                			<div class="dropzone-previews" id="dropzonePreview"></div>
                			<h4 style="text-align: center;color:#428bca;margin-top:20px;">
                				点击下方空白区域上传
                				<span class="glyphicon glyphicon-hand-down">
                					
                				</span>
                			</h4>
                			<input type="hidden" name="car_id" value="">
						</form>
					
    				<div id="preview-template" style="display: none;">	
        				<div class="dz-preview dz-file-preview">
            				<div class="dz-image"><img data-dz-thumbnail="">
            				</div>
            			</div>
            			<div class="dz-details">
            	    		<div class="dz-size"><span data-dz-size=""></span></div>
            	    		<div class="dz-filename"><span data-dz-name=""></span></div>
            			</div>
            			<div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress=""></span></div>
            			<div class="dz-error-message"><span data-dz-errormessage=""></span></div>	
            			<div class="dz-success-mark">
                			<svg width="54px" height="54px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                    			<title>Check</title>
                    			<desc>Created with Sketch.</desc>
                    			<defs></defs>
                    			<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                        			<path d="M23.5,31.8431458 L17.5852419,25.9283877 C16.0248253,24.3679711 13.4910294,24.366835 11.9289322,25.9289322 C10.3700136,27.4878508 10.3665912,30.0234455 11.9283877,31.5852419 L20.4147581,40.0716123 C20.5133999,40.1702541 20.6159315,40.2626649 20.7218615,40.3488435 C22.2835669,41.8725651 24.794234,41.8626202 26.3461564,40.3106978 L43.3106978,23.3461564 C44.8771021,21.7797521 44.8758057,19.2483887 43.3137085,17.6862915 C41.7547899,16.1273729 39.2176035,16.1255422 37.6538436,17.6893022 L23.5,31.8431458 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z" id="Oval-2" stroke-opacity="0.198794158" stroke="#747474" fill-opacity="0.816519475" fill="#FFFFFF" sketch:type="MSShapeGroup">
                        				
                        			</path>
                    			</g>
                			</svg>
            			</div>	
            			<div class="dz-error-mark">
                			<svg width="54px" height="54px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                    			<title>error</title>
                    			<desc>Created with Sketch.</desc>
                    			<defs></defs>
                    			<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                        			<g id="Check-+-Oval-2" sketch:type="MSLayerGroup" stroke="#747474" stroke-opacity="0.198794158" fill="#FFFFFF" fill-opacity="0.816519475">
                            			<path d="M32.6568542,29 L38.3106978,23.3461564 C39.8771021,21.7797521 39.8758057,19.2483887 38.3137085,17.6862915 C36.7547899,16.1273729 34.2176035,16.1255422 32.6538436,17.6893022 L27,23.3431458 L21.3461564,17.6893022 C19.7823965,16.1255422 17.2452101,16.1273729 15.6862915,17.6862915 C14.1241943,19.2483887 14.1228979,21.7797521 15.6893022,23.3461564 L21.3431458,29 L15.6893022,34.6538436 C14.1228979,36.2202479 14.1241943,38.7516113 15.6862915,40.3137085 C17.2452101,41.8726271 19.7823965,41.8744578 21.3461564,40.3106978 L27,34.6568542 L32.6538436,40.3106978 C34.2176035,41.8744578 36.7547899,41.8726271 38.3137085,40.3137085 C39.8758057,38.7516113 39.8771021,36.2202479 38.3106978,34.6538436 L32.6568542,29 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z" id="Oval-2" sketch:type="MSShapeGroup"></path>
                        			</g>
                    			</g>
                			</svg>
            			</div>
        			</div>
        		</div>
    		</div>
    		<!-- End 隐藏图片信息模板 -->			
			<div class="jumbotron how-to-create">
                <ul>
                    <li>当您选择图片并确认后，图片会自动上传</li>
                    <li>上传图片请勿大于2MB</li>
                </ul>
            </div>
            <div class="form-actions">									
				<!-- <button class="btn" id="return_car">返回</button> -->
				<button id="img_add" class="btn btn-primary">确定</button>
			</div>
		</div>
	</div>		
	<!-- 图片信息添加 end -->
</div>  
@endsection
@section('script_content')
<!-- 引入全局辅助commonjs -->
<script src="{{URL::asset('js/tcl/common.js')}}"></script>
<!-- 引入车型级联js -->
<script src="{{URL::asset('js/tcl/category.js')}}"></script> 
<!-- 引入对话框插件 -->
<script src="{{URL::asset('js/tcl/dialog.js')}}"></script> 
<!-- 引入日历插件 -->
<script src="{{URL::asset('js/tcl/bootstrap-datepicker.js')}}"></script> 
<script src="{{URL::asset('js/tcl/locales/bootstrap-datepicker.zh-CN.js')}}"></script> 
<!-- 引入图片上传插件 -->
<script src="{{URL::asset('js/tcl/dropzone/dropzone.js')}}"></script> 
<script src="{{URL::asset('js/tcl/dropzone/dropzone-config.js')}}"></script> 
<script>
	$(document).ready(function(){

		var request_url      = '{{route('admin.customer.ajaxStore')}}';
		/*var customer_name    = $('#customer_name').val();
		var telephone        = $('#telephone').val();
		var customer_res     = $('#customer_res').val();*/
		var customer_content = $('#customer_content');
		var car_content      = $('#car_content');
		var img_content      = $('#img_content');
		var customer_id      = $("input[name='customer_id']");	
		var car_id           = $("input[name='car_id']");		

		/*alert(customer_id.val());
		alert(car_id.val());*/

		if((customer_id.val() != '') && (car_id.val() != '')){
			// 客户、车源已经添加
			// alert('客户、车源已经添加');
			customer_content.hide();
			car_content.hide();
			img_content.show();
		}else{
			if(customer_id.val() != ''){
				// alert('客户已经添加');
				customer_content.hide();
				car_content.show();
			}
		}

		$('.date-picker').datepicker({
            language: 'zh-CN',
            changeMonth: true,
      		changeYear: true,
      		yearRange : '1990:2010',
            autoclose: true,
            format: 'yyyy-mm',
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

					//设置图片对应车源ID
					/*alert(data.scalar.id);
					console.log(data);*/
					car_id.val(data.scalar.id);
					$('#content_title').text('图片上传');
					car_content.hide();
					img_content.show();
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
					alert('添加车源失败，请重新添加或联系管理员');
				}
			});

			return false;
		});

		$('#return_customer').click(function(){

			customer_content.show();
			car_content.hide();
			img_content.hide();

			return false;
		});

		$('#return_car').click(function(){

			car_content.show();
			customer_content.hide();
			img_content.hide();

			return false;
		});

		$('#img_add').click(function(){

			var img_name    = '';
			var img_car_id  = car_id.val();
			var request_url = '{{route('admin.car.changeFristImg')}}';
			var img_frist_list = [];

			

			$('.dz-frist').each(function(index){

				console.log($(this).attr('data-dz-frist'));
				img_frist_list[index] = $(this).attr('data-dz-frist');
			});

			// $.inArray("js", arr); 

			if($.inArray("1", img_frist_list) < 0 ){

				alert('请选择首图');
				return false;
			}

			/*console.log($.inArray("1", img_frist_list));
			return false;*/
            $('.dz-frist').each(function(){
                if($(this).attr('data-dz-frist') == 1){

                    img_name = $(this).parents().children('.dz-image').children('img').attr('alt');
                    // console.log($(this).parents().children('.dz-image').children('img').attr('alt'));
                    console.log(img_name);
                    $.ajax({
						method: 'POST',
						url: request_url,
						data:{ img_name:img_name, img_car_id:img_car_id},
						dataType: 'json',
						headers: {		
							'X-CSRF-TOKEN': '{{ csrf_token() }}'		
						},
						success:function(data){

							window.location.href = '{{route("admin.car.self")}}';
						},
						error: function(xhr, type){
							/*console.log(JSON.parse(xhr.responseText));
							console.log(JSON.parse(xhr.responseText).customer_name[0]);
							console.log(JSON.parse(xhr.responseText).telephone[0]);
							console.log(xhr.responseText);*/
		
							/*if(xhr.status == 422){ //表单验证失败，返回的状态
		
								alert('请输入用户名和真实手机号码');
		
								return false;
							}*/
							alert('添加图片，请重新添加或联系管理员');
							return false;
						}
					});
                }
                // console.log($(this).attr('data-dz-frist'));
            });			
		});

		$('#provence_id').change(function(){

			var provence_id = $(this).val();
			var request_url = "{{route('admin.area.getAreaInfo')}}";
			
			$('#city_id').hide();

			$.ajax({

				method: 'POST',
				url: request_url,
				data: { provence_id : provence_id},
				dataType: 'json',
				headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}'},
				success: function(data){

					var content = '<option  value="0">请选择城市</option>';
					$.each(data.data, function(index, value){
						content += '<option value="';
						content += value.id;
						content += '">';
						content += value.name;
						content += '</option>';
					});
					// $('#top_brand').append(content);
					// console.log($('#city_id'));
					$('#city_id').empty();
					$('#city_id').append(content);
					// console.log(content);
					$('#city_id').show();
					return false;
				},
				error: function(xhr, type){

					alert('Ajax error!');
				}
			});
		});
	});
</script>
@endsection