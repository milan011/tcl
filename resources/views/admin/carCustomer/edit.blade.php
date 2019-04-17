@extends('layouts.main')

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
		<a href="{{route('admin.carCustomer.index')}}">报名管理</a> 
		<i class="icon-angle-right"></i>
	</li>
	<li><a href="#1f">修改报名</a></li>
</ul>
@endsection

<!-- 主体 -->
@section('content')

@include('layouts.message')

<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-content">
			<form class="form-horizontal" action="{{route('admin.carCustomer.update', ['carCustomer'=>$carCustomer_info->id])}}" method="post">
				{!! csrf_field() !!}
				{{ method_field('PUT') }}
				<fieldset>
				  <div class="control-group">
					<label class="control-label" for="name">客户</label>
						<div class="controls">
					  		<input class="input-xlarge focused" id="name" name="name" required type="text" value="{{$carCustomer_info->name}}">
						</div>
				  	</div>
				  	<div class="control-group">
				  		<label class="control-label" for="mobile">联系电话</label>
				  		<div class="controls">
				  			<input class="input-xlarge focused" id="mobile" name="mobile" required type="text" value="{{$carCustomer_info->mobile}}">
				  		</div>
				  	</div>
					<div class="control-group">
					<label class="control-label" for="enroll_type">咨询类型</label>
						<div class="controls">
						  	<select id="enroll_type" name="enroll_type" data-rel="chosen">
							  	@foreach($enroll_type as $key => $enroll)
						  			<option @if($carCustomer_info->enroll_type == $enroll) selected @endif value="{{$key}}">{{$enroll}}</option>
						  		@endforeach
							</select>
						</div>
					</div>	
					<div class="control-group">
						<label class="control-label" for="source_type">渠道</label>
						<div class="controls">
						  	<select id="source_type" name="source_type">
						  		<option @if($carCustomer_info->source_type == '2') selected @endif value="2">微信</option>
						  		<option @if($carCustomer_info->source_type == '3') selected @endif value="3">400电话</option>
							</select>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="category_name">车型</label>
						<div class="controls">
						 	<input class="input-xlarge focused" id="category_name" name="category_name" type="text" value="{{$carCustomer_info->category_name}}">
						</div>
				  	</div> 
				  	<div class="control-group">
						<label class="control-label" for="city_name">地区</label>
						<div class="controls">
						 	<input class="input-xlarge focused" id="city_name" required name="city_name" type="text" value="{{$carCustomer_info->city_name}}">
						</div>
				  	</div> 
				<div class="control-group ">
						<label class="control-label" for="contents">报名详情</label>
						<div class="controls">
							<textarea id="contents" name="contents" style="width:400px;height:100px;">{{$carCustomer_info->contents}}</textarea>
						</div>
			  		</div>
			  		<div class="control-group ">
						<label class="control-label" for="remark">备注</label>
						<div class="controls">
							<textarea id="remark" name="remark" style="width:400px;">{{$carCustomer_info->remark}}</textarea>
						</div>
			  		</div>
			  		<div class="form-actions">
					<button type="submit"  onclick="check()" class="btn btn-primary">确定</button>
					<button class="btn" onclick="window.history.go(-1);return false;">返回</button>
				  </div>
				</fieldset>
			</form>				
		</div>
	</div>			
</div>   
@endsection