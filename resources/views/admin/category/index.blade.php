@extends('layouts.main')

@section('head_content')
	
@endsection

@section('BreadcrumbTrail')
	<ul class="breadcrumb">
		<li>
			<i class="icon-home"></i>
			<a href="{{route('admin.index')}}">主页</a>  
			<i class="icon-angle-right"></i>
		</li>
		<li><a href="#1f">车型列表</a></li>
	</ul>
@endsection

@section('content')

@include('layouts.message')
	<div class="row-fluid sortable">		
		<div class="box span12">
			<div class="box-content">
				<ul style="background: none repeat scroll 0 0 #eee;border: 0 none;border-radius: 0;box-shadow: none;color: #aaa;line-height: 34px; margin: 0;">
					<li style="display: inline-block;line-height: 20px;">
						<a class="btn btn-primary" href="{{route('admin.category.create')}}">添加车型</a>
					</li>
					<li style="display: inline-block;line-height: 20px;">
						<a href="#" onclick="window.history.go(-1);return false;" class="btn ">返回</a>
					</li>
				</ul>
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>车型名称</th>
							<th>车型Logo</th>
							<th>车型状态</th>
							<th>操作</th>
						</tr>
					</thead>   
					<tbody>
						@foreach ($categorys as $category)
    					<tr>
							<td>{{$category->name}}</td>
							<td>
								<img style="width:32px;height:32px;" src="{{ URL::asset('uploads/category/') }}/{{$category->logo_img}}">
							</td>							
							@if($category->status == '1')
							<td class="center"><span class="label label-success">已启用</span></td>
							@else
							<td class="center"><span class="label label-warning">已停用</span></td>
							@endif							
							<td class="center">
								<a class="btn btn-warning" href="{{route('admin.category.edit', ['category'=>$category->id])}}">
									<i class="icon-edit icon-white"></i> 编辑
								</a>
								@if($category->status == '1') 
								<button class="btn btn-info changStatus" data-status="0">
									<i class="icon-edit icon-white"></i> 停用
								</button>
								@else 
								<button class="btn btn-info changStatus" data-status="1">
									<i class="icon-edit icon-white"></i> 启用
								</button>
								@endif
								<input type="hidden" value="{{$category->id}}">
								<span>
								<form action="{{route('admin.category.destroy', ['category'=>$category->id])}}" method="post" style="display: inherit;margin:0px;">
									{{ csrf_field() }}
            						{{ method_field('DELETE') }}
									<button class="btn btn-danger delete-confrim" type="button">
										<i class="icon-trash icon-white"></i> 删除
									</button>
								</form>
								</span>
							</td>
						</tr>
						@endforeach							
					</tbody>
				</table>
				<div class="pagination pagination-centered">
					 {!! $categorys->links() !!}
				</div>          
			</div>
		</div>
	</div>
@endsection

@section('script_content')
<!-- 引入确认框js -->
<script src="{{URL::asset('js/tcl/confirm.js')}}"></script> 
<script>
	$(document).ready(function(){

		$('.changStatus').click(function(){

			var id     = $(this).next().val();
			var status = $(this).attr('data-status');
			var token  = $("input[name='_token']").val();

			/*alert(id);
			alert(status);*/
			// alert($("input[name='_token']").val());

			$.ajax({
				
				type: 'POST',
				url: 'category/changeStatus',
				data: { id : id, status : status},
				dataType: 'json',
				headers: {

					'X-CSRF-TOKEN': '{{ csrf_token() }}'
				},
				success: function(data){

					alert(data.msg);
					location.reload();
					// console.log(data);
				},
				error: function(xhr, type){

					alert('Ajax error!');
				}
			});
		});
	});
</script>
@endsection
