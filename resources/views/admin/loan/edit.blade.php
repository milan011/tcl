@extends('layouts.main')

@section('head_content')
<!-- 自定义css -->
<link id="bootstrap-style" href="{{ URL::asset('css/tcl/bootstrap-datepicker.min.css') }}" rel="stylesheet">
<link id="bootstrap-style" href="{{ URL::asset('css/tcl/dropzone/dropzone.css') }}" rel="stylesheet">

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
	<li><a href="#1f">修改贷款</a></li>
</ul>
@endsection
<!-- 主体 -->
@section('content')

@include('layouts.message')

<div class="row-fluid sortable" style="height:100%;">
	<div class="box span12" style="height:100%;">
		<div class="box-content" style="overflow:auto;height:90%;">
			<form class="form-horizontal" action="{{route('admin.loan.update', ['loan'=>$loan->id])}}" method="post" enctype="multipart/form-data">
				{!! csrf_field() !!}
				{{ method_field('PUT') }}
				<fieldset>
				  
				  <div class="control-group">
					<label class="control-label" for="name">贷款名称</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="name" readonly="readonly" name="name" type="text" value="{{$loan->name}}">
					</div>
				  </div>
				  <div class="control-group">
					<label class="control-label" for="car_code">贷款编号</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="car_code" readonly="readonly" name="car_code" type="text" value="{{$loan->loan_code}}">
					</div>
				  </div>
				  <div class="control-group">
					<label class="control-label" for="card">银行卡号</label>
					<div class="controls">
					  	<input class="input-xlarge focused" id="card" name="card" type="text" value="{{$loan->card}}">
					</div>
				  </div>

				<div class="control-group  ">
                	<label class="control-label" for="bill_day">账单日</label>
                	<div class="controls">
                  		<input class="input-xlarge focused" id="bill_day" name="bill_day" type="text" value="{{$loan->bill_day}}">
                	</div>
              	</div>
              	<div class="control-group">
					<label class="control-label" for="appraiser_price"><font style="color:red;">*&nbsp;</font>评估价格</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="appraiser_price" name="appraiser_price" type="text" value="{{$loan->appraiser_price}}" required><span style="margin-left:5px;">万元</span>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="loan_price"><font style="color:red;">*&nbsp;</font>车贷金额</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="loan_price" name="loan_price" type="text" value="{{$loan->loan_price}}" required><span style="margin-left:5px;">万元</span>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="insurance_loan"><font style="color:red;">*&nbsp;</font>保险贷款</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="insurance_loan" name="insurance_loan" type="text" value="{{$loan->insurance_loan}}" required><span style="margin-left:5px;">万元</span>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="orther_loan"><font style="color:red;">*&nbsp;</font>其他衍生贷款</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="orther_loan" name="orther_loan" type="text" value="{{$loan->orther_loan}}" required><span style="margin-left:5px;">万元</span>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="total_loan"><font style="color:red;">*&nbsp;</font>总贷款</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="total_loan" name="total_loan" type="text" value="{{$loan->total_loan}}" required><span style="margin-left:5px;">万元</span>
					</div>
				</div>
				<div class="control-group  ">
                	<label class="control-label" for="loan_phase">期数</label>
                	<div class="controls">
                  		<input class="input-xlarge focused" id="loan_phase" name="loan_phase" type="text" value="{{$loan->loan_phase}}">
                	</div>
              	</div>
              	<div class="control-group">
					<label class="control-label" for="loan_date">放款日期</label>
					<div class="controls">
						<input type="text" onchange="checkCarDate();" class="input-xlarge date-picker" name="loan_date" id="loan_date" value="{{$loan->loan_date}}">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="repayment_frist"><font style="color:red;">*&nbsp;</font>首月还款</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="repayment_frist" name="repayment_frist" type="text" value="{{$loan->repayment_frist}}" required><span style="margin-left:5px;">万元</span>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="repayment_everymonth"><font style="color:red;">*&nbsp;</font>每月还款</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="repayment_everymonth" name="repayment_everymonth" type="text" value="{{$loan->repayment_everymonth}}" required><span style="margin-left:5px;">万元</span>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="loan_begin_date">保险起始日期</label>
					<div class="controls">
						<input type="text" onchange="checkCarDate();" class="input-xlarge date-picker" name="loan_begin_date" id="loan_begin_date" value="{{$loan->loan_begin_date}}">
					</div>
				</div>

				<div class="control-group  ">
                	<label class="control-label" for="car_plate_old">车牌号(旧)</label>
                	<div class="controls">
                  		<input class="input-xlarge focused" id="car_plate_old" name="car_plate_old" type="text" value="{{$loan->car_plate_old}}">
                	</div>
              	</div>
              	<div class="control-group  ">
                	<label class="control-label" for="car_plate_new">车牌号(新)</label>
                	<div class="controls">
                  		<input class="input-xlarge focused" id="car_plate_new" name="car_plate_new" type="text" value="{{$loan->car_plate_new}}">
                	</div>
              	</div>

              	<div class="control-group">
						<label class="control-label" for="other_contact1">其他联系人1</label>
						<div class="controls">
						  <input class="input-xlarge focused" id="other_contact1" name="other_contact1" type="text" value="{{$loan->other_contact1}}">
						</div>
				 	</div>
				 	<div class="control-group">
						<label class="control-label" for="other_contact1_phone">联系人1电话</label>
						<div class="controls">
						  	<input class="input-xlarge focused" id="other_contact1_phone" name="other_contact1_phone" type="text" value="{{$loan->other_contact1_phone}}">
						</div>
				 	</div>

				 	<div class="control-group">
						<label class="control-label" for="other_contact2">其他联系人2</label>
						<div class="controls">
						  <input class="input-xlarge focused" id="other_contact2" name="other_contact2" type="text" value="{{$loan->other_contact2}}">
						</div>
				 	</div>
				 	<div class="control-group">
						<label class="control-label" for="other_contact2_phone">联系人2电话</label>
						<div class="controls">
						  	<input class="input-xlarge focused" id="other_contact2_phone" name="other_contact2_phone" type="text" value="{{$loan->other_contact2_phone}}">
						</div>
				 	</div>

				 	<div class="control-group">
						<label class="control-label" for="recognizor">担保人</label>
						<div class="controls">
						  <input class="input-xlarge focused" id="recognizor" name="recognizor" type="text" value="{{$loan->recognizor}}">
						</div>
				 	</div>
				 	<div class="control-group">
						<label class="control-label" for="recognizor_phone">担保人电话</label>
						<div class="controls">
						  	<input class="input-xlarge focused" id="recognizor_phone" name="recognizor_phone" type="text" value="{{$loan->recognizor_phone}}">
						</div>
				 	</div>
				 	<div class="control-group">
						<label class="control-label" for="recognizor_adress">担保人地址</label>
						<div class="controls">
						  	<input class="input-xlarge focused" id="recognizor_adress" name="recognizor_adress" type="text" value="{{$loan->recognizor_adress}}">
						</div>
				 	</div>
				 <div class="control-group">
					<label class="control-label" for="plate_date">上牌日期</label>
					<div class="controls">
						<input type="text" onchange="checkCarDate();" class="input-xlarge date-picker" name="plate_date" id="plate_date" value="{{$loan->plate_date}}">
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="appraiser_cost"><font style="color:red;">*&nbsp;</font>评估定位费</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="appraiser_cost" name="appraiser_cost" type="text" value="{{$loan->appraiser_cost}}" required><span style="margin-left:5px;">元</span>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="poundage"><font style="color:red;">*&nbsp;</font>手续费</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="poundage" name="poundage" type="text" value="{{$loan->poundage}}" required><span style="margin-left:5px;">元</span>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="qm_profits"><font style="color:red;">*&nbsp;</font>汽贸利润</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="qm_profits" name="qm_profits" type="text" value="{{$loan->qm_profits}}" required><span style="margin-left:5px;">元</span>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="loan_profits"><font style="color:red;">*&nbsp;</font>贷款部利润</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="loan_profits" name="loan_profits" type="text" value="{{$loan->loan_profits}}" required><span style="margin-left:5px;">元</span>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="visits_profits"><font style="color:red;">*&nbsp;</font>家访费用</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="visits_profits" name="visits_profits" type="text" value="{{$loan->visits_profits}}" required><span style="margin-left:5px;">元</span>
					</div>
				</div>

				  <div class="control-group  ">
                	<label class="control-label" for="loan_channels">贷款渠道</label>
                	<div class="controls">
                  		<select id="loan_channels" name="loan_channels" >                          
					  		@foreach($loan_channels as $key=>$channel)											
					  		<option @if(($loan->loan_channels) == $key) selected @endif  value="{{$key}}">
					  			{{$channel}}
					  		</option>	
					  		@endforeach	                   
                  		</select>
                	</div>
              	</div>

              	<div class="control-group  ">
                	<label class="control-label" for="customer_sorcue">客户来源</label>
                	<div class="controls">
                  		<input class="input-xlarge focused" id="customer_sorcue" name="customer_sorcue" type="text" value="{{$loan->customer_sorcue}}">
                	</div>
              	</div>
              	<div class="control-group">
					<label class="control-label" for="insurance_provence"><font style="color:red;">*&nbsp;</font>所属城市</label>
					<div class="controls">
					  	<select id="provence_id" name="insurance_provence">
					  		<option value="{{$provence->id or 10}}">{{$provence->name or '河北'}}</option>
					  		@foreach($area as $provence)
					  		<option  value="{{$provence->id}}">{{$provence->name}}</option>
					  		@endforeach									
						</select>
						<select id="city_id" name="insurance_city">
					  		<option  value="{{$city->id or 138}}">{{$city->name or '石家庄'}}</option>		
						</select>
					</div>
				</div>
              	<div class="control-group ">
					<label class="control-label" for="remark">
						<font style="color:red;">*&nbsp;</font>备注
					</label>
					<div class="controls">
					<textarea id="remark" name="remark" required style="width:400px;">{{$loan->remark}}</textarea>
					</div>
			  	</div>  				
				  <div class="form-actions">
					<button type="button" id="loan_edit" class="btn btn-primary">确定</button>
					<button type="submit" id="loan_send" style="display: none;" class="btn btn-primary">确定</button>
					<button class="btn" onclick="window.history.go(-1);return false;">返回</button>
				  </div>
				</fieldset>
			</form>				
		</div>
	</div>			
</div>   
@endsection
@section('script_content')
<!-- 引入全局辅助commonjs -->
<script src="{{URL::asset('js/tcl/common.js')}}"></script>
<!-- 引入日历插件 -->
<script src="{{URL::asset('js/tcl/bootstrap-datepicker.js')}}"></script> 
<script src="{{URL::asset('js/tcl/locales/bootstrap-datepicker.zh-CN.js')}}"></script> 
<script type="text/javascript">
	$(document).ready(function(){
		$('.date-picker').datepicker({
            language: 'zh-CN',
            autoclose: true,
            format: 'yyyy-mm',
            todayHighlight: true
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

		$('#loan_edit').click(function(event) {

			var provence_id =  $('#provence_id').val(); //省份
			var city_id     =  $('#city_id').val(); //城市

			if((provence_id == 0) || (city_id == 0)){
				//未选择省份或城市
				alert('请选择省份和城市');
				return false;
			}else{
				// $('#loan_form').submit();
				$('#loan_send').trigger("click");
			}
		});
	});
</script>
@endsection