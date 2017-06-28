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
		<a href="{{route('admin.insurance.index')}}">保险列表</a> 
		<i class="icon-angle-right"></i>
	</li>
	<li><a href="#1f">修改保险</a></li>
</ul>
@endsection
<!-- 主体 -->
@section('content')

@include('layouts.message')

<div class="row-fluid sortable" style="height:100%;">
	<div class="box span12" style="height:100%;">
		<div class="box-content" style="overflow:auto;height:90%;">
			<form class="form-horizontal" action="{{route('admin.insurance.update', ['insurance'=>$insurance->id])}}" method="post" enctype="multipart/form-data">
				{!! csrf_field() !!}
				{{ method_field('PUT') }}
				<fieldset>
				  
				  	<div class="control-group">
						<label class="control-label" for="insurance_code">保险编号</label>
						<div class="controls">
					  		<input class="input-xlarge focused" id="insurance_code" readonly="readonly" name="insurance_code" type="text" value="{{$insurance->insurance_code}}">
						</div>
				  	</div>

				  	<div class="control-group">
						<label class="control-label" for="name">客户</label>
						<div class="controls">
					  		<input class="input-xlarge focused" id="name" readonly="readonly" name="name" type="text" value="{{$insurance->name}}">
						</div>
				  	</div>

				  	<div class="control-group  ">
                		<label class="control-label" for="company">保险公司</label>
                		<div class="controls">
                  			<select id="company" name="company" >                          
						  		@foreach($insurance_company as $key=>$com)											
						  		<option @if(($insurance->company) == $key) selected @endif  value="{{$key}}">
						  			{{$com}}
						  		</option>	
						  		@endforeach	                   
                  			</select>
                		</div>
              		</div>
				 

					<div class="control-group">
						<label class="control-label" for="car_plate">车牌号</label>
						<div class="controls">
					  		<input class="input-xlarge focused" id="car_plate" readonly="readonly" name="car_plate" type="text" value="{{$insurance->car_plate}}">
						</div>
					</div>

					<div class="control-group  ">
                		<label class="control-label" for="source">保险来源</label>
                		<div class="controls">
                  			<select id="source" name="source" >                          
						  		@foreach($insurance_sor as $key=>$sor)											
						  		<option @if(($insurance->source) == $key) selected @endif  value="{{$key}}">
						  			{{$sor}}
						  		</option>	
						  		@endforeach	                   
                  			</select>
                		</div>
              		</div>


              		<div class="control-group">
					<label class="control-label" for="traffic_price">交强金额</label>
					<div class="controls">
					  <input class="input-xlarge focused tra_price_add" id="traffic_price" name="traffic_price" type="text" value="{{$insurance->traffic_price}}"><span style="margin-left:5px;">元</span>
					</div>
				</div>

              	<div class="control-group">
					<label class="control-label" for="traffic_date">交强到期</label>
					<div class="controls">
						<input type="text" onchange="checkCarDate();" class="input-xlarge date-picker" name="traffic_date" id="traffic_date" value="{{$insurance->traffic_date}}">
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="vehicle_price">商业金额</label>
					<div class="controls">
					  <input class="input-xlarge focused tra_price_add" id="vehicle_price" name="vehicle_price" type="text" value="{{$insurance->vehicle_price}}"><span style="margin-left:5px;">元</span>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="vehicle_date">商业到期</label>
					<div class="controls">
						<input type="text" onchange="checkCarDate();" class="input-xlarge date-picker" name="vehicle_date" id="vehicle_date" value="{{$insurance->vehicle_date}}">
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="vehicle_tax">车船税</label>
					<div class="controls">
					  <input class="input-xlarge focused tra_price_add" id="vehicle_tax" name="vehicle_tax" type="text" value="{{$insurance->vehicle_tax}}"><span style="margin-left:5px;">元</span>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="total_price">总保费</label>
					<div class="controls">
					  <input class="input-xlarge focused" readonly id="total_price" name="total_price" type="text" value="{{$insurance->total_price}}"><span style="margin-left:5px;">元</span>
					</div>
				</div>

				<div class="control-group ">
					<label class="control-label" for="detail">
						保险明细
					</label>
					<div class="controls">
					<textarea id="detail" name="detail" style="width:400px;">{{$insurance->detail}}</textarea>
					</div>
			  	</div>

			  	<div class="control-group">
					<label class="control-label" for="interest_rate">利率</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="interest_rate" name="interest_rate" type="text" value="{{$insurance->interest_rate}}" /><span style="margin-left:5px;">%</span>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="rebeat">返点</label>
					<div class="controls">
					  <input class="input-xlarge focused" readonly id="rebeat" name="rebeat" type="text" value="{{$insurance->rebeat}}"><span style="margin-left:5px;">元</span>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="royalty_ratio">提成比例</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="royalty_ratio" name="royalty_ratio" type="text" value="{{$insurance->royalty_ratio}}"><span style="margin-left:5px;">%</span>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="royalty">提成</label>
					<div class="controls">
					  <input class="input-xlarge focused" readonly id="royalty" name="royalty" type="text" value="{{$insurance->royalty}}"><span style="margin-left:5px;">元</span>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="profit">利润</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="profit" name="profit" type="text" value="{{$insurance->profit}}"><span style="margin-left:5px;"></span>
					</div>
				</div>

				<div class="control-group  ">
                	<label class="control-label" for="salesman">业务员</label>
                	<div class="controls">
                  		<input class="input-xlarge focused" id="salesman" name="salesman" type="text" value="{{$insurance->salesman}}">
                	</div>
              	</div>

				<div class="control-group">
					<label class="control-label" for="need_pay">业务员提成</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="need_pay" name="need_pay" type="text" value="{{$insurance->need_pay}}"><span style="margin-left:5px;"></span>
					</div>
				</div>


				<div class="control-group">
					<label class="control-label" for="insurance_provence">所属城市</label>
					<div class="controls">
					  	<select id="provence_id" name="insurance_provence">
					  		<option value="{{$provence->id}}">{{$provence->name}}</option>
					  		@foreach($area as $provence)
					  		<option  value="{{$provence->id}}">{{$provence->name}}</option>
					  		@endforeach									
						</select>
						<select id="city_id" name="insurance_city">
					  		<option  value="{{$city->id}}">{{$city->name}}</option>											
						</select>
					</div>
				</div>

				<div class="control-group ">
					<label class="control-label" for="remark">
						<font style="color:red;">*&nbsp;</font>备注
					</label>
					<div class="controls">
					<textarea id="remark" name="remark" required style="width:400px;">{{$insurance->remark}}</textarea>
					</div>
			  	</div>				
				  <div class="form-actions">
					<button type="submit" class="btn btn-primary">确定</button>
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
            format: 'yyyy-mm-dd',
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

		//总保费自动计算
		$('.tra_price_add').change(function(){

			var total_price   = 0; //总金额
			var veh_pric      = 0; //商业险
			var tra_pric      = 0; //交强险
			var veh_tax       = 0; //车船税
			var interest_rate = 0; //返点比例
			var royalty_ratio = 0; //提成比例
			var tc_price      = 0; //计算返点及提成费用和(商险+交强)

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
				interest_rate = parseFloat($('#interest_rate').val()); //返点比例
			}

			if($('#royalty_ratio').val() !== '') {
				// console.log(parseFloat($('#vehicle_tax').val()));
				royalty_ratio = parseFloat($('#royalty_ratio').val()); //提成比例
			}

			/*console.log((typeof($('#vehicle_tax').val())));
			console.log(isNaN($('#vehicle_tax').val()));*/

			/*console.log(veh_pric);
			console.log(tra_pric);
			console.log(veh_tax);*/

			total_price = veh_pric + tra_pric + veh_tax; //保险总额
			tc_price    = veh_pric + tra_pric;           //计算提成及返点金额

			rate_price = tc_price/1.06*interest_rate*0.01; //返点
			ratio_price = tc_price/1.06*royalty_ratio*0.01; //提成

			console.log(tc_price);

			$('#total_price').val(total_price.toFixed(2));
			$('#rebeat').val(rate_price.toFixed(2));
			$('#royalty').val(ratio_price.toFixed(2));
		});

		//返点自动计算
		$('#interest_rate').change(function(){
			var rate_price    = parseFloat(0);  //返点金额
			var tat_price     = parseFloat(0);  //总金额
			var veh_pric      = parseFloat(0); //商业险
			var tra_pric      = parseFloat(0); //交强险
			var interest_rate = parseFloat(0); //返点比例

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
				interest_rate = parseFloat($('#interest_rate').val()); //返点比例
			}

			tat_price = veh_pric + tra_pric;
			rate_price = tat_price/1.06*interest_rate*0.01;


			$('#rebeat').val(rate_price.toFixed(2));
			console.log(rate_price);


		});

		//提成自动计算
		$('#royalty_ratio').change(function(){
			var ratio_price   = parseFloat(0);  //提成金额
			var tat_price     = parseFloat(0);  //总金额
			var veh_pric      = parseFloat(0); //商业险
			var tra_pric      = parseFloat(0); //交强险
			var royalty_ratio = parseFloat(0); //提成比例

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
				royalty_ratio = parseFloat($('#royalty_ratio').val()); //提成比例
			}

			tat_price   = veh_pric + tra_pric;
			ratio_price = tat_price/1.06*royalty_ratio*0.01;

			console.log(ratio_price);
			$('#royalty').val(ratio_price.toFixed(2));

		});
		
	});
</script>
@endsection