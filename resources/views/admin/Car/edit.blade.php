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
		<a href="{{route('admin.car.index')}}">车源列表</a> 
		<i class="icon-angle-right"></i>
	</li>
	<li><a href="#1f">修改车源</a></li>
</ul>
@endsection
<!-- 主体 -->
@section('content')

@include('layouts.message')

<div class="row-fluid sortable" style="height:100%;">
	<div class="box span12" style="height:100%;">
		<div class="box-content" style="overflow:auto;height:90%;">
			<form class="form-horizontal" action="{{route('admin.car.update', ['car'=>$cars->id])}}" method="post" enctype="multipart/form-data">
				{!! csrf_field() !!}
				{{ method_field('PUT') }}
				<fieldset>
				  
				  <div class="control-group">
					<label class="control-label" for="name">车源名称</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="name" readonly="readonly" name="name" type="text" value="{{$cars->name}}">
					</div>
				  </div>
				  <div class="control-group">
					<label class="control-label" for="car_code">车源编号</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="car_code" readonly="readonly" name="car_code" type="text" value="{{$cars->car_code}}">
					</div>
				  </div>
				  <div class="control-group">
					<label class="control-label" for="vin_code">车架号号</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="vin_code" name="vin_code" type="text" value="{{$cars->vin_code}}">
					</div>
				  </div>
				  <div class="control-group  ">
                	<label class="control-label" for="capacity">排量</label>
                	<div class="controls">
                  		<select id="capacity" name="capacity" >                        
					  		@foreach($capacity as $key=>$capa)											
					  		<option @if(($cars->capacity-1) == $key) selected @endif  value="{{$key}}">
					  			{{$capa}}
					  		</option>	
					  		@endforeach	                     
                  		</select>
                	</div>
              	</div>

				  <div class="control-group  ">
                	<label class="control-label" for="shiftType">变速箱</label>
                	<div class="controls">
                  		<select id="gearbox" name="gearbox" >                        
					  		@foreach($gearbox as $key=>$gear)											
					  		<option @if($cars->gearbox == $key) selected @endif value="{{$key}}">{{$gear}}</option>	
					  		@endforeach	                     
                  		</select>
                	</div>
              	</div>

              	<div class="control-group  ">
                	<label class="control-label" for="out_color">外观颜色</label>
                	<div class="controls">
                  		<select id="out_color" name="out_color" >                        
					  		@foreach($out_color as $key=>$color)											
					  		<option @if($cars->out_color == $key) selected @endif value="{{$key}}">{{$color}}</option>	
					  		@endforeach	                     
                  		</select>
                	</div>
              	</div>

              	<div class="control-group  ">
                	<label class="control-label" for="inside_color">内饰颜色</label>
                	<div class="controls">
                  		<select id="inside_color" name="inside_color" >                        
					  		@foreach($inside_color as $key=>$color)											
					  		<option @if($cars->inside_color == $key) selected @endif value="{{$key}}">{{$color}}</option>	
					  		@endforeach	                     
                  		</select>
                	</div>
              	</div>
              	<div class="control-group">
					<label class="control-label" for="plate_date">上牌日期</label>
						<div class="controls">
							<input type="text" onchange="checkCarDate();" class="input-xlarge date-picker" name="plate_date" id="plate_date" value="{{substr($cars->plate_date, 0 ,10)}}">
						</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="plate_end">到检日期</label>
						<div class="controls">
							<input type="text" class="input-xlarge" readonly="readonly" name="plate_end" id="plate_end" value="{{substr($cars->plate_end, 0 ,10)}}">
						</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="safe_end">到保日期</label>
						<div class="controls">
							<input type="text" class="input-xlarge" readonly="readonly" name="safe_end" id="safe_end" value="{{substr($cars->safe_end, 0 ,10)}}">
						</div>
				</div>
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
				  <div class="control-group">
					<label class="control-label" for="plate_provence">所属城市</label>
					<div class="controls">
					  	<select id="provence_id" name="plate_provence">
					  		<option value="{{$provence->id}}">{{$provence->name}}</option>
					  		@foreach($area as $provence)
					  		<option  value="{{$provence->id}}">{{$provence->name}}</option>
					  		@endforeach									
						</select>
						<select id="city_id" name="plate_city">
					  		<option  value="{{$city->id}}">{{$city->name}}</option>											
						</select>
					</div>
				</div>

				<div class="control-group  ">
                	<label class="control-label" for="shiftType">过户次数</label>
                	<div class="controls">
                  		<select id="sale_number" name="sale_number" >                        
					  		@foreach($sale_number as $key=>$sale)											
					  		<option @if($cars->sale_number == $key) selected @endif value="{{$key}}">{{$sale}}</option>	
					  		@endforeach	                     
                  		</select>
                	</div>
              	</div>
              	<div class="control-group  ">
                	<label class="control-label" for="safe_type">车险类别</label>
                	<div class="controls">
                  		<select id="safe_type" name="safe_type" >                        
					  		@foreach($safe_type as $key=>$safe)											
					  		<option @if($cars->safe_type == $key) selected @endif value="{{$key}}">{{$safe}}</option>	
					  		@endforeach	                     
                  		</select>
                	</div>
              	</div>
              	<div class="control-group">
					<label class="control-label" for="focusedInput">行驶里程</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="mileage" name="mileage" type="text" value="{{$cars->mileage}}"><span style="margin-left:5px;">万公里</span>
					</div>
				</div>

				

			  <div class="control-group">
					<label class="control-label" for="top_price">期望价格</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="top_price" name="top_price" type="text" value="{{$cars->top_price}}"><span style="margin-left:5px;">万元</span>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="bottom_price">底价</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="bottom_price" name="bottom_price" type="text" value="{{$cars->bottom_price}}"><span style="margin-left:5px;">万元</span>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="recommend">是否推荐</label>
					<div class="controls">
					  <select id="recommend" name="recommend" >
					  	<option @if($cars->recommend == '1') selected @endif value="1">推荐</option>
						<option @if($cars->recommend == '0') selected @endif value="0">不推荐</option>						
						</select>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="is_top">是否置顶</label>
					<div class="controls">
					  <select id="is_top" name="is_top" >
					  	<option @if($cars->is_top == '1') selected @endif value="1">置顶</option>
						<option @if($cars->is_top == '0') selected @endif value="0">不置顶</option>						
						</select>
					</div>
				</div>
				<div class="control-group  ">
                	<label class="control-label" for="car_type">车源类型</label>
                	<div class="controls">
                  		<select id="car_type" name="car_type" >                        
					  		@foreach($car_type as $key=>$type)											
					  		<option @if($cars->car_type == $key) selected @endif value="{{$key}}">{{$type}}</option>	
					  		@endforeach	                     
                  		</select>
                	</div>
              	</div>
              	<div class="control-group ">
					<label class="control-label" for="description">
						<font style="color:red;">*&nbsp;</font>客户描述
					</label>
				<div class="controls">
					<textarea id="description" name="description" required >{{$cars->description}}</textarea>
				</div>
			  </div>
			  <div class="control-group ">
					<label class="control-label" for="xs_description">
						<font style="color:red;">*&nbsp;</font>销售描述
					</label>
					<div class="controls">
					<textarea id="xs_description" name="xs_description" required >{{$cars->xs_description}}</textarea>
					</div>
			  	</div>

				<!-- <div class="control-group">
					<label class="control-label" for="selectError3">是否启用</label>
					<div class="controls">
					  <select id="car_status" name="car_status">
					  	<option @if($cars->car_status == '1') selected @endif value="1">启用</option>
						<option @if($cars->car_status == '0') selected @endif value="0">停用</option>						
						</select>
					</div>
				  </div> -->	  				
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
	});
</script>
@endsection