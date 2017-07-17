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
		<a href="{{route('admin.customer.index')}}">客户列表</a> 
		<i class="icon-angle-right"></i>
	</li>
	<li><a href="#1f">修改客户</a></li>
</ul>
@endsection
<!-- 主体 -->
@section('content')

@include('layouts.message')

<div class="row-fluid sortable" style="height:100%;">
	<div class="box span12" style="height:100%;">
		<div class="box-content" style="overflow:auto;height:90%;">
			<form class="form-horizontal" action="{{route('admin.customer.update', ['customer'=>$customer->id])}}" method="post" enctype="multipart/form-data">
				{!! csrf_field() !!}
				{{ method_field('PUT') }}
				<fieldset>
				  
				  <div class="control-group">
					<label class="control-label" for="name">客户名称</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="name"  name="name" type="text" value="{{$customer->name}}" required>
					</div>
				  </div>
				  <div class="control-group">
					<label class="control-label" for="telephone">客户电话</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="telephone" name="telephone" type="text" value="{{$customer->telephone}}" required>
					</div>
				  </div>
				  <div class="control-group">
					<label class="control-label" for="qq_number">QQ</label>
					<div class="controls">
					  	<input class="input-xlarge focused" id="qq_number" name="qq_number" type="text" value="{{$customer->qq_number}}">
					</div>
				  </div>

				<div class="control-group  ">
                	<label class="control-label" for="indentily_card">身份证</label>
                	<div class="controls">
                  		<input class="input-xlarge focused" id="indentily_card" name="indentily_card" type="text" value="{{$customer->indentily_card}}">
                	</div>
              	</div>
              	<div class="control-group">
					<label class="control-label" for="wx_number">微信</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="wx_number" name="wx_number" type="text" value="{{$customer->wx_number}}">
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="address">地址</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="address" name="address" type="text" value="{{$customer->address}}">
					</div>
				</div>			
              	<div class="control-group ">
					<label class="control-label" for="remark">
						<font style="color:red;">*&nbsp;</font>备注
					</label>
					<div class="controls">
					<textarea id="remark" name="remark" required style="width:400px;">{{$customer->remark}}</textarea>
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
            format: 'yyyy-mm',
            todayHighlight: true
        });
	});
</script>
@endsection