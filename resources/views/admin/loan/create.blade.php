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
		<a href="{{route('admin.loan.index')}}">贷款列表</a> 
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
				 	<div class="control-group">
						<label class="control-label" for="indentily_card">身份证号</label>
						<div class="controls">
						  	<input class="input-xlarge focused" id="indentily_card" name="indentily_card" type="text" value="">
						</div>
				 	</div>
				 	<div class="control-group">
						<label class="control-label" for="address">家庭地址</label>
						<div class="controls">
						  	<input class="input-xlarge focused" id="address" name="address" type="text" value="">
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
		<div class="box-content" id="loan_content" style="overflow: auto;height:70%;display:none;">
			<form class="form-horizontal" id="loan_form" action="{{route('admin.loan.store')}}" method="post" enctype="multipart/form-data">
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
					<label class="control-label" for="car_name">车辆名称</label>
					<div class="controls">
						<input type="hidden" name="auto_add_name" id="auto_add_name" value="1">
					  	<input class="input-xlarge focused" readonly="readonly" id="name" name="car_name" type="text" value="">
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="card">银行卡号</label>
					<div class="controls">
					  	<input class="input-xlarge focused" id="card" name="card" type="text" value="{{old('card')}}">
					</div>
				  </div>

				<div class="control-group  ">
                	<label class="control-label" for="bill_day"><font style="color:red;">*&nbsp;</font>账单日</label>
                	<div class="controls">
                  		<input class="input-xlarge focused" id="bill_day" name="bill_day" type="text" value="{{old('bill_day')}}" required>
                	</div>
              	</div>
              	<div class="control-group">
					<label class="control-label" for="appraiser_price"><font style="color:red;">*&nbsp;</font>评估价格</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="appraiser_price" name="appraiser_price" type="text" value="{{old('appraiser_price')}}" required><span style="margin-left:5px;">万元</span>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="loan_price"><font style="color:red;">*&nbsp;</font>车贷金额</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="loan_price" name="loan_price" type="text" value="{{old('loan_price')}}" required><span style="margin-left:5px;">万元</span>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="insurance_loan"><font style="color:red;">*&nbsp;</font>保险贷款</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="insurance_loan" name="insurance_loan" type="text" value="{{old('insurance_loan')}}" required><span style="margin-left:5px;">万元</span>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="orther_loan"><font style="color:red;">*&nbsp;</font>其他衍生贷款</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="orther_loan" name="orther_loan" type="text" value="{{old('orther_loan')}}" required><span style="margin-left:5px;">万元</span>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="total_loan"><font style="color:red;">*&nbsp;</font>总贷款</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="total_loan" name="total_loan" type="text" value="{{old('total_loan')}}" required><span style="margin-left:5px;">万元</span>
					</div>
				</div>
				<div class="control-group  ">
                	<label class="control-label" for="loan_phase"><font style="color:red;">*&nbsp;</font>期数</label>
                	<div class="controls">
                  		<input class="input-xlarge focused" id="loan_phase" name="loan_phase" type="text" value="{{old('loan_phase')}}" required>
                	</div>
              	</div>
              	<div class="control-group">
					<label class="control-label" for="loan_date"><font style="color:red;">*&nbsp;</font>放款日期</label>
					<div class="controls">
						<input type="text" onchange="checkCarDate();" class="input-xlarge date-picker" name="loan_date" id="loan_date" value="{{old('loan_date')}}" required>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="repayment_frist">首月还款</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="repayment_frist" name="repayment_frist" type="text" value="{{old('repayment_frist')}}"><span style="margin-left:5px;">万元</span>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="repayment_everymonth"><font style="color:red;">*&nbsp;</font>每月还款</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="repayment_everymonth" name="repayment_everymonth" type="text" value="{{old('repayment_everymonth')}}" required><span style="margin-left:5px;">万元</span>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="loan_begin_date"><font style="color:red;">*&nbsp;</font>保险起始日期</label>
					<div class="controls">
						<input type="text" onchange="checkCarDate();" class="input-xlarge date-picker" name="loan_begin_date" id="loan_begin_date" value="{{old('loan_begin_date')}}" required>
					</div>
				</div>

				<div class="control-group  ">
                	<label class="control-label" for="car_plate_old">车牌号(旧)</label>
                	<div class="controls">
                  		<input class="input-xlarge focused" id="car_plate_old" name="car_plate_old" type="text" value="{{old('car_plate_old')}}">
                	</div>
              	</div>
              	<div class="control-group  ">
                	<label class="control-label" for="car_plate_new">车牌号(新)</label>
                	<div class="controls">
                  		<input class="input-xlarge focused" id="car_plate_new" name="car_plate_new" type="text" value="{{old('car_plate_new')}}">
                	</div>
              	</div>

              	<div class="control-group">
						<label class="control-label" for="other_contact1">其他联系人1</label>
						<div class="controls">
						  <input class="input-xlarge focused" id="other_contact1" name="other_contact1" type="text" value="{{old('other_contact1')}}">
						</div>
				 	</div>
				 	<div class="control-group">
						<label class="control-label" for="other_contact1_phone">联系人1电话</label>
						<div class="controls">
						  	<input class="input-xlarge focused" id="other_contact1_phone" name="other_contact1_phone" type="text" value="{{old('other_contact1_phone')}}">
						</div>
				 	</div>

				 	<div class="control-group">
						<label class="control-label" for="other_contact2">其他联系人2</label>
						<div class="controls">
						  <input class="input-xlarge focused" id="other_contact2" name="other_contact2" type="text" value="{{old('other_contact2')}}">
						</div>
				 	</div>
				 	<div class="control-group">
						<label class="control-label" for="other_contact2_phone">联系人2电话</label>
						<div class="controls">
						  	<input class="input-xlarge focused" id="other_contact2_phone" name="other_contact2_phone" type="text" value="{{old('other_contact2')}}">
						</div>
				 	</div>

				 	<div class="control-group">
						<label class="control-label" for="recognizor">担保人</label>
						<div class="controls">
						  <input class="input-xlarge focused" id="recognizor" name="recognizor" type="text" value="{{old('recognizor')}}">
						</div>
				 	</div>
				 	<div class="control-group">
						<label class="control-label" for="recognizor_phone">担保人电话</label>
						<div class="controls">
						  	<input class="input-xlarge focused" id="recognizor_phone" name="recognizor_phone" type="text" value="{{old('recognizor_phone')}}">
						</div>
				 	</div>
				 	<div class="control-group">
						<label class="control-label" for="recognizor_adress">担保人地址</label>
						<div class="controls">
						  	<input class="input-xlarge focused" id="recognizor_adress" name="recognizor_adress" type="text" value="{{old('recognizor_adress')}}">
						</div>
				 	</div>
				 <div class="control-group">
					<label class="control-label" for="plate_date">上牌日期</label>
					<div class="controls">
						<input type="text" onchange="checkCarDate();" class="input-xlarge date-picker" name="plate_date" id="plate_date" value="{{old('plate_date')}}">
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="appraiser_cost"><font style="color:red;">*&nbsp;</font>评估定位费</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="appraiser_cost" name="appraiser_cost" type="text" value="{{old('appraiser_cost')}}" required><span style="margin-left:5px;">元</span>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="poundage"><font style="color:red;">*&nbsp;</font>手续费</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="poundage" name="poundage" type="text" value="{{old('poundage')}}" required><span style="margin-left:5px;">元</span>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="qm_profits"><font style="color:red;">*&nbsp;</font>汽贸利润</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="qm_profits" name="qm_profits" type="text" value="{{old('qm_profits')}}" required><span style="margin-left:5px;">元</span>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="loan_profits"><font style="color:red;">*&nbsp;</font>贷款部利润</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="loan_profits" name="loan_profits" type="text" value="{{old('loan_profits')}}" required><span style="margin-left:5px;">元</span>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="visits_profits"><font style="color:red;">*&nbsp;</font>家访费用</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="visits_profits" name="visits_profits" type="text" value="{{old('visits_profits')}}" required><span style="margin-left:5px;">元</span>
					</div>
				</div>

				  <div class="control-group  ">
                	<label class="control-label" for="shiftType">贷款渠道</label>
                	<div class="controls">
                  		<select id="loan_channels" name="loan_channels" >                        
					  		@foreach($loan_channels as $key=>$gear)											
					  		<option  value="{{$key}}">{{$gear}}</option>	
					  		@endforeach	                     
                  		</select>
                	</div>
              	</div>

              	<div class="control-group  ">
                	<label class="control-label" for="customer_sorcue">客户来源</label>
                	<div class="controls">
                  		<input class="input-xlarge focused" id="customer_sorcue" name="customer_sorcue" type="text" value="{{old('customer_sorcue')}}">
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
					<button type="submit" id="loan_add" class="btn btn-primary">确定</button>
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
<script src="{{URL::asset('js/tcl/dropzone/dropzone.js')}}"></script> 
<script src="{{URL::asset('js/tcl/dropzone/dropzone-config.js')}}"></script> 
<script>
	$(document).ready(function(){

		var request_url      = '{{route('admin.customer.ajaxStore')}}';
		/*var customer_name    = $('#customer_name').val();
		var telephone        = $('#telephone').val();
		var customer_res     = $('#customer_res').val();*/
		var customer_content = $('#customer_content');
		var loan_content     = $('#loan_content');
		var img_content      = $('#img_content');
		var customer_id      = $("input[name='customer_id']");			
		var user_role        = $("input[name='user_role']");		

		// alert(customer_id.val());

		if(customer_id.val() != ''){
			// 客户、车源已经添加
			// alert('客户已经添加');
			$('#content_title').text('贷款保险信息');
			customer_content.hide();
			loan_content.show();
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
					loan_content.show();
					$('#content_title').text('贷款信息');
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
	});
</script>
@endsection