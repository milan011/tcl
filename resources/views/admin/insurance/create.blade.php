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
		<a href="{{route('admin.car.self')}}">贷款列表</a> 
		<i class="icon-angle-right"></i>
	</li>
	<li><a href="#1f">添加贷款</a></li>
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
				 	<!-- <div class="control-group">
						<label class="control-label" for="indentily_card">身份证号</label>
						<div class="controls">
						  	<input class="input-xlarge focused" id="indentily_card" name="indentily_card" type="text" value="">
						</div>
				 	</div> -->
				 	<!-- <div class="control-group">
						<label class="control-label" for="address">家庭地址</label>
						<div class="controls">
						  	<input class="input-xlarge focused" id="address" name="address" type="text" value="">
						</div>
				 	</div> -->
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
		<div class="box-content" id="insurance_content" style="overflow: auto;height:70%;display:none;">
			<form class="form-horizontal" id="insurance_form" action="{{route('admin.insurance.store')}}" method="post" enctype="multipart/form-data">
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
					</div>
				  </div>
				  <div class="control-group">
                	<label class="control-label" for="company">保险公司</label>
                	<div class="controls">
                  		<select id="company" name="company" >                        
					  		@foreach($insurance_company as $key=>$company)											
					  		<option  value="{{$key}}">{{$company}}</option>	
					  		@endforeach	                     
                  		</select>
                	</div>
              	</div>

              	<div class="control-group  ">
                	<label class="control-label" for="car_plate">车牌号</label>
                	<div class="controls">
                  		<input class="input-xlarge focused" id="car_plate" name="car_plate" type="text" value="{{old('car_plate')}}">
                	</div>
              	</div>

              	<div class="control-group">
                	<label class="control-label" for="source">保险来源</label>
                	<div class="controls">
                  		<select id="source" name="source" >                        
					  		@foreach($insurance_sor as $key=>$sor)											
					  		<option  value="{{$key}}">{{$sor}}</option>	
					  		@endforeach	                     
                  		</select>
                	</div>
              	</div>

              	<div class="control-group">
					<label class="control-label" for="traffic_price">交强金额</label>
					<div class="controls">
					  <input class="input-xlarge focused tra_price_add" id="traffic_price" name="traffic_price" type="text" value="{{old('traffic_price')}}"><span style="margin-left:5px;">元</span>
					</div>
				</div>

              	<div class="control-group">
					<label class="control-label" for="traffic_date">交强到期</label>
					<div class="controls">
						<input type="text" onchange="checkCarDate();" class="input-xlarge date-picker" name="traffic_date" id="traffic_date" value="{{old('traffic_date')}}">
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="vehicle_price">商业金额</label>
					<div class="controls">
					  <input class="input-xlarge focused tra_price_add" id="vehicle_price" name="vehicle_price" type="text" value="{{old('vehicle_price')}}"><span style="margin-left:5px;">元</span>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="vehicle_date">商业到期</label>
					<div class="controls">
						<input type="text" onchange="checkCarDate();" class="input-xlarge date-picker" name="vehicle_date" id="vehicle_date" value="{{old('vehicle_date')}}">
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="vehicle_tax">车船税</label>
					<div class="controls">
					  <input class="input-xlarge focused tra_price_add" id="vehicle_tax" name="vehicle_tax" type="text" value="{{old('vehicle_tax')}}"><span style="margin-left:5px;">元</span>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="total_price">总保费</label>
					<div class="controls">
					  <input class="input-xlarge focused" readonly id="total_price" name="total_price" type="text" value="{{old('total_price')}}"><span style="margin-left:5px;">元</span>
					</div>
				</div>

				<div class="control-group ">
					<label class="control-label" for="detail">
						保险明细
					</label>
					<div class="controls">
					<textarea id="detail" name="detail" style="width:400px;">{{old('detail')}}</textarea>
					</div>
			  	</div>

			  	<div class="control-group">
					<label class="control-label" for="interest_rate">交强利率</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="interest_rate" name="interest_rate" type="text" value="{{old('interest_rate')}}" /><span style="margin-left:5px;">%</span>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="commercial_rate">商险利率</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="commercial_rate" name="commercial_rate" type="text" value="{{old('commercial_rate')}}" /><span style="margin-left:5px;">%</span>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="rebeat">返点</label>
					<div class="controls">
					  <input class="input-xlarge focused" readonly id="rebeat" name="rebeat" type="text" value="{{old('rebeat')}}"><span style="margin-left:5px;">元</span>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="royalty_ratio">交强提成比例</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="royalty_ratio" name="royalty_ratio" type="text" value="{{old('royalty_ratio')}}"><span style="margin-left:5px;">%</span>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="commercial_ratio">商险提成比例</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="commercial_ratio" name="commercial_ratio" type="text" value="{{old('commercial_ratio')}}"><span style="margin-left:5px;">%</span>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="royalty">提成</label>
					<div class="controls">
					  <input class="input-xlarge focused" readonly id="royalty" name="royalty" type="text" value="{{old('royalty')}}"><span style="margin-left:5px;">元</span>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="profit">利润</label>
					<div class="controls">
					  <input class="input-xlarge focused" readonly id="profit" name="profit" type="text" value="{{old('profit')}}"><span style="margin-left:5px;"></span>
					</div>
				</div>

				<div class="control-group  ">
                	<label class="control-label" for="salesman">业务员</label>
                	<div class="controls">
                  		<input class="input-xlarge focused" id="salesman" name="salesman" type="text" value="{{old('salesman')}}">
                	</div>
              	</div>

				<div class="control-group">
					<label class="control-label" for="need_pay">业务员提成</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="need_pay" name="need_pay" type="text" value="{{old('need_pay')}}"><span style="margin-left:5px;"></span>
					</div>
				</div>

              	<div class="control-group">
					<label class="control-label" for="provence_id">所属城市</label>
					<div class="controls">
					  	<select id="provence_id" name="insurance_provence">
					  		<option value="0">请选择省份</option>
					  		@foreach($area as $provence)
					  		<option  value="{{$provence->id}}">{{$provence->name}}</option>
					  		@endforeach									
						</select>
						<select id="city_id" name="insurance_city" style="display:none;">
					  		<option  value="0">请选择城市</option>											
						</select>
					</div>
				</div>
              	<div class="control-group ">
					<label class="control-label" for="remark">
						<font style="color:red;">*&nbsp;</font>备注
					</label>
					<div class="controls">
					<textarea id="remark" name="remark" required style="width:400px;">{{old('remark')}}</textarea>
					</div>
			  	</div>
	  			
				  <div class="form-actions">
				  	<input type="hidden" name="ajax_request_url" value="{{route('admin.brand.getChildBrand')}}">
				  	<input type="hidden" name="cate_ajax_request_url" value="{{route('admin.category.getChildCategory')}}">
				  	<input type="hidden" name="shop_id" value="{{Auth::user()->shop_id}}">				
				  	<input type="hidden" name="customer_id" value="">					
					<button class="btn" id="return_customer">返回</button>
					<button type="submit" id="insurance_add" class="btn btn-primary">确定</button>
				  </div>
				</fieldset>
			</form>				
		</div>
		<!-- 车源信息添加 end-->
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
<!-- <script src="{{URL::asset('js/tcl/dropzone/dropzone.js')}}"></script>  -->
<!-- <script src="{{URL::asset('js/tcl/dropzone/dropzone-config.js')}}"></script>  -->
<script>
	$(document).ready(function(){

		var request_url      = '{{route('admin.customer.ajaxStore')}}';
		/*var customer_name    = $('#customer_name').val();
		var telephone        = $('#telephone').val();
		var customer_res     = $('#customer_res').val();*/
		var customer_content = $('#customer_content');
		var insurance_content = $('#insurance_content');
		var img_content      = $('#img_content');
		var customer_id      = $("input[name='customer_id']");			
		var user_role        = $("input[name='user_role']");		

		// alert(customer_id.val());

		if(customer_id.val() != ''){
			// 客户、车源已经添加
			// alert('客户已经添加');
			$('#content_title').text('保险信息');
			customer_content.hide();
			insurance_content.show();
		}

		$('.date-picker').datepicker({
            language: 'zh-CN',
            changeMonth: true,
      		changeYear: true,
      		yearRange : '1990:2010',
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
					insurance_content.show();
					$('#content_title').text('保险信息');
					// alert($("input[name='customer_id']").val());
				},
				error: function(xhr, type){
					/*console.log(JSON.parse(xhr.responseText));
					console.log(JSON.parse(xhr.responseText).customer_name[0]);
					console.log(JSON.parse(xhr.responseText).telephone[0]);
					console.log(xhr.responseText);*/

					if(xhr.status == 422){ //表单验证失败，返回的状态

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
					alert('添加用户失败，请重新添加或联系管理员');
				}
			});
			return false;
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

		//总保费自动计算
		$('.tra_price_add').change(function(){

			var total_price      = 0; //总金额
			var veh_pric         = 0; //商业险
			var tra_pric         = 0; //交强险
			var veh_tax          = 0; //车船税
			var interest_rate    = 0; //交强返点比例
			var commercial_rate  = 0; //商险返点比例
			var royalty_ratio    = 0; //交强提成比例
			var commercial_ratio = 0; //商险提成比例
			var tc_price         = 0; //计算返点及提成费用和(商险+交强)
			var profit_price     = 0; //利润

			if (isNaN(this.value)) {
　　　　 			alert("请输入数字");
　　　　			return false;
　　　　		}
			
			if($('#vehicle_price').val() !== '') {
				
				veh_pric = parseFloat($('#vehicle_price').val()); //商业险
			}

			if($('#traffic_price').val() !== '') {

				tra_pric= parseFloat($('#traffic_price').val()); //交强险
			}

			if($('#vehicle_tax').val() !== '') {
				// console.log(parseFloat($('#vehicle_tax').val()));
				veh_tax = parseFloat($('#vehicle_tax').val()); //车船税
			}

			if($('#interest_rate').val() !== '') {
				// console.log(parseFloat($('#vehicle_tax').val()));
				interest_rate = parseFloat($('#interest_rate').val()); //交强返点比例
			}

			if($('#commercial_rate').val() !== '') {
				// console.log(parseFloat($('#vehicle_tax').val()));
				commercial_rate = parseFloat($('#interest_rate').val()); //商险返点比例
			}

			if($('#royalty_ratio').val() !== '') {
				// console.log(parseFloat($('#vehicle_tax').val()));
				royalty_ratio = parseFloat($('#royalty_ratio').val()); //交强提成比例
			}

			if($('#commercial_ratio').val() !== '') {
				// console.log(parseFloat($('#vehicle_tax').val()));
				commercial_ratio = parseFloat($('#royalty_ratio').val()); //商险提成比例
			}

			/*console.log((typeof($('#vehicle_tax').val())));
			console.log(isNaN($('#vehicle_tax').val()));*/

			/*console.log(veh_pric);
			console.log(tra_pric);
			console.log(veh_tax);*/

			total_price = veh_pric + tra_pric + veh_tax; //保险总额
			tc_price    = veh_pric + tra_pric;           //计算提成及返点金额

			interest_rate_price    = tra_pric/1.06*interest_rate*0.01;  //交强返点
			commercial_rate_price  = veh_pric/1.06*interest_rate*0.01; //商险返点

			royalty_ratio_price     = tra_pric/1.06*interest_rate*0.01;   //交强提成
			commercial_ratio_price  = veh_pric/1.06*interest_rate*0.01; //商险提成

			rate_price = interest_rate_price + commercial_rate_price; //返点
			ratio_price = royalty_ratio_price + commercial_ratio_price; //提成

			profit_price = rate_price + ratio_price;
			console.log(tc_price);

			$('#total_price').val(total_price.toFixed(2));
			$('#rebeat').val(rate_price.toFixed(2));
			$('#royalty').val(ratio_price.toFixed(2));
			$('#profit').val(profit_price.toFixed(2));
		});

		//返点自动计算
		$('#interest_rate,#commercial_rate').change(function(){
			var rate_price      = parseFloat(0);  //返点金额
			var tat_price       = parseFloat(0);  //总金额
			var veh_pric        = parseFloat(0); //商业险
			var tra_pric        = parseFloat(0); //交强险
			var interest_rate   = parseFloat(0); //交强返点比例
			var commercial_rate = parseFloat(0); //商险返点比例
			var profit_price    = 0; //利润
			var royalty_price   = parseFloat($('#royalty').val()); //提成金额

			if (isNaN(this.value)) {
　　　　 			alert("请输入数字");
　　　　			return false;
　　　　		}

			if($('#vehicle_price').val() !== '') {
				
				veh_pric = parseFloat($('#vehicle_price').val()); //商业险
			}

			if($('#traffic_price').val() !== '') {

				tra_pric= parseFloat($('#traffic_price').val()); //交强险
			}

			if($('#interest_rate').val() !== '') {
				// console.log(parseFloat($('#vehicle_tax').val()));
				interest_rate = parseFloat($('#interest_rate').val()); //交强返点比例
			}

			if($('#commercial_rate').val() !== '') {
				// console.log(parseFloat($('#vehicle_tax').val()));
				commercial_rate = parseFloat($('#commercial_rate').val()); //商险返点比例
			}

			tat_price = veh_pric + tra_pric;

			interest_rate_price   = tra_pric/1.06*interest_rate*0.01;//交强返点
			commercial_rate_price = veh_pric/1.06*commercial_rate*0.01;//商险返点
			
			rate_price = interest_rate_price + commercial_rate_price; //总返点

			profit_price = rate_price + royalty_price; //利润等于返点与提成之和

			$('#rebeat').val(rate_price.toFixed(2));
			$('#profit').val(profit_price.toFixed(2));
			console.log(rate_price);
			console.log(royalty_price);
			console.log(profit_price);


		});

		//提成自动计算
		$('#royalty_ratio,#commercial_ratio').change(function(){
			var ratio_price      = parseFloat(0);  //提成金额
			var tat_price        = parseFloat(0);  //总金额
			var veh_pric         = parseFloat(0); //商业险
			var tra_pric         = parseFloat(0); //交强险
			var royalty_ratio    = parseFloat(0); //交强提成比例
			var commercial_ratio = parseFloat(0); //商业提成比例
			var profit_price     = 0; //利润
			var rebeat_price     = parseFloat($('#rebeat').val()); //返点金额

			if (isNaN(this.value)) {
　　　　 			alert("请输入数字");
　　　　			return false;
　　　　		}

			if($('#vehicle_price').val() !== '') {
				
				veh_pric = parseFloat($('#vehicle_price').val()); //商业险
			}

			if($('#traffic_price').val() !== '') {

				tra_pric= parseFloat($('#traffic_price').val()); //交强险
			}

			if($('#royalty_ratio').val() !== '') {
				// console.log(parseFloat($('#vehicle_tax').val()));
				royalty_ratio = parseFloat($('#royalty_ratio').val()); //交强提成比例
			}

			if($('#commercial_ratio').val() !== '') {
				// console.log(parseFloat($('#vehicle_tax').val()));
				commercial_ratio = parseFloat($('#commercial_ratio').val()); //商险提成比例
			}

			interest_rate_price   = tra_pric/1.06*royalty_ratio*0.01;//交强提成
			commercial_rate_price = veh_pric/1.06*commercial_ratio*0.01;//商险提成
			
			ratio_price = interest_rate_price + commercial_rate_price; //总提成

			profit_price = ratio_price + rebeat_price; //利润等于返点与提成之和

			console.log(ratio_price);
			$('#royalty').val(ratio_price.toFixed(2));
			$('#profit').val(profit_price.toFixed(2));

		});
	});
</script>
@endsection