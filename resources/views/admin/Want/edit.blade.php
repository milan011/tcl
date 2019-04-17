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
		<a href="{{route('admin.want.index')}}">求购信息列表</a> 
		<i class="icon-angle-right"></i>
	</li>
	<li><a href="#1f">修改求购信息</a></li>
</ul>
@endsection
<!-- 主体 -->
@section('content')

@include('layouts.message')

<div class="row-fluid sortable" style="height:100%;">
	<div class="box span12" style="height:100%;">
		<div class="box-content" style="overflow:auto;height:90%;">
			<form class="form-horizontal" action="{{route('admin.want.update', ['want'=>$wants->id])}}" method="post" enctype="multipart/form-data">
				{!! csrf_field() !!}
				{{ method_field('PUT') }}
				<fieldset>
				  
				  <div class="control-group">
					<label class="control-label" for="name">求购名称</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="name" readonly="readonly" name="name" type="text" value="{{$wants->name}}">
					</div>
				  </div>
				  <!-- <div class="control-group">
				  					<label class="control-label" for="want_code">求购编号</label>
				  					<div class="controls">
				  					  <input class="input-xlarge focused" id="want_code" readonly="readonly" name="want_code" type="text" value="{{$wants->want_code}}">
				  					</div>
				  </div> -->
				<div class="control-group">
					<label class="control-label" for="alternate_car">备选车型</label>
					<div class="controls">
						<input class="input-xlarge one_line focused" name="alternate_car" id="alternate_car" type="text" value="{{$wants->alternate_car}}" placeholder="备选车型">
						<input class="input-xlarge one_line focused" name="alternate_car_another" id="alternate_car_another" type="text" value="{{$wants->alternate_car_another}}" placeholder="备选车型">
					</div>
				</div>
				<!-- <div class="control-group">
				                	<label class="control-label" for="capacity">排量</label>
				                	<div class="controls">
				                  		<select id="capacity" name="capacity" >                        
					  		@foreach($capacity as $key=>$capa)											
					  		<option @if($wants->capacity == $key) selected @endif  value="{{$key}}">
					  			{{$capa}}
					  		</option>	
					  		@endforeach
				                  		</select>
				                	</div>
				              	</div> -->

				<div class="control-group  ">
                	<label class="control-label" for="shiftType">变速箱</label>
                	<div class="controls">
                  		<select id="gearbox" name="gearbox" >                        
					  		@foreach($gearbox as $key=>$gear)											
					  		<option @if($wants->gearbox == $key) selected @endif value="{{$key}}">{{$gear}}</option>	
					  		@endforeach	                     
                  		</select>
                	</div>
              	</div>

              	<!-- <div class="control-group  ">
                	<label class="control-label" for="out_color">外观颜色</label>
                	<div class="controls">
                  		<select id="out_color" name="out_color" >                        
					  		@foreach($out_color as $key=>$color)											
					  		<option @if($wants->out_color == $key) selected @endif value="{{$key}}">{{$color}}</option>	
					  		@endforeach	                     
                  		</select>
                	</div>
              	</div>

              	<div class="control-group  ">
                	<label class="control-label" for="inside_color">内饰颜色</label>
                	<div class="controls">
                  		<select id="inside_color" name="inside_color" >                        
					  		@foreach($inside_color as $key=>$color)											
					  		<option @if($wants->inside_color == $key) selected @endif value="{{$key}}">{{$color}}</option>	
					  		@endforeach	                     
                  		</select>
                	</div>
              	</div> -->
              	

				

				<!-- <div class="control-group  ">
                	<label class="control-label" for="shiftType">过户次数</label>
                	<div class="controls">
                  		<select id="sale_number" name="sale_number" >                        
					  		@foreach($sale_number as $key=>$sale)											
					  		<option @if($wants->sale_number == $key) selected @endif value="{{$key}}">{{$sale}}</option>	
					  		@endforeach	                     
                  		</select>
                	</div>
              	</div> -->
              	<!-- <div class="control-group">
					<label class="control-label" for="safe_end">到保日期</label>
						<div class="controls">
							<input type="text" class="input-xlarge date-picker" name="safe_end" id="safe_end" value="{{substr($wants->safe_end, 0 ,10)}}">
						</div>
				</div> -->
              	<!-- <div class="control-group">
					<label class="control-label" for="focusedInput">行驶里程</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="mileage" name="mileage" type="text" value="{{$wants->mileage}}"><span style="margin-left:5px;">万公里</span>
					</div>
				</div> -->

			  <div class="control-group">
					<label class="control-label" for="top_price">可接受价格</label>
					<div class="controls">
					  <input class="input-xlarge one_line focused" id="top_price" name="top_price" type="text" value="{{$wants->top_price}}"><span style="margin-left:5px;">万元</span>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="bottom_price">期望价</label>
					<div class="controls">
					  <input class="input-xlarge one_line focused" id="bottom_price" name="bottom_price" type="text" value="{{$wants->bottom_price}}"><span style="margin-left:5px;">万元</span>
					</div>
				</div>
				<!-- <div class="control-group">
					<label class="control-label" for="recommend">是否推荐</label>
					<div class="controls">
					  <select id="recommend" name="recommend" >
					  	<option @if($wants->recommend == '1') selected @endif value="1">推荐</option>
						<option @if($wants->recommend == '0') selected @endif value="0">不推荐</option>
						</select>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="is_top">是否置顶</label>
					<div class="controls">
					  <select id="is_top" name="is_top" >
					  	<option @if($wants->is_top == '1') selected @endif value="1">置顶</option>
						<option @if($wants->is_top == '0') selected @endif value="0">不置顶</option>						
						</select>
					</div>
				</div> -->

				<div class="control-group ">
					<label class="control-label" for="">
						<font style="color:red;">*&nbsp;</font>客户描述
					</label>
					<div class="controls">
					<textarea id="remark" name="remark" required >{{$wants->remark}}</textarea>
					</div>
			  	</div>	

			  	<!-- <div class="control-group ">
			  	  									<label class="control-label" for="xs_remark">
			  	  										<font style="color:red;">*&nbsp;</font>销售描述
			  	  									</label>
			  	  									<div class="controls">
			  	  									<textarea id="xs_remark" name="xs_remark" required >{{$wants->xs_remark}}</textarea>
			  	  									</div>
			  	  				</div>	 -->  				
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
	});
</script>
@endsection