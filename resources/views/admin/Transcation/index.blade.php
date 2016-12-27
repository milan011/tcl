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
		<li><a href="javascript:void(0);">订车管理</a></li>
	</ul>
@endsection

@section('content')

@include('layouts.message')
	<div class="row-fluid sortable">		
		<div class="box span12">
			<!-- <div class="box-header" data-original-title>
				<h2>
					<i class="halflings-icon user"></i><span class="break"></span>Members
				</h2>
				<div class="box-icon">
					<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
					<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
					<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
				</div>
			</div> -->
			<div class="box-content">
				<ul style="background: none repeat scroll 0 0 #eee;border: 0 none;border-radius: 0;box-shadow: none;color: #aaa;line-height: 34px; margin: 0;">
					<!-- <li style="display: inline-block;line-height: 20px;">
						<a class="btn btn-primary" href="{{route('admin.book.create')}}">添加门店</a>
					</li> -->
					<li style="display: inline-block;line-height: 20px;">
						<a href="#" onclick="window.history.go(-1);return false;" class="btn ">返回</a>
					</li>
				</ul>
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>编号</th>
							<th>车源</th>
							<th>客户</th>
							<th>交车时间</th>
							<th>交易价格</th>
							<th>登记时间</th>							
							<th>负责人</th>
							<th>门店</th>
							<th>操作</th>
						</tr>
					</thead>   
					<tbody>
						@foreach ($books as $book)
    					<tr>
							<td>{{$book->belongsToChance->chance_code}}</td>
							<td>{{$book->belongsToChance->belongsToCar->car_name}}</td>
							<td>{{$book->belongsToChance->belongsToCustomerOnWant->want_customer_name}}</td>
							<td>{{$book->deal_time}}</td>
							<td>{{$book->deal_price}}</td>													
							<td>{{substr($book->created_at, 0 ,10)}}</td>	
							<td>{{$book->belongsToChance->belongsToUser->nick_name}}</td>						
							<td>{{$book->belongsToChance->belongsToShop->shop_name}}</td>							
							<td class="center">
								<a class="btn btn-success" href="{{route('admin.book.edit', ['book'=>$book->id])}}">
									<i class="icon-edit icon-white"></i> 编辑
								</a>
								<input type="hidden" value="{{$book->id}}">
								<div class="btn-group " role=”group”>
										<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
											更多
											<span class="caret"></span>
										</button>
										<ul class="dropdown-menu pull-right">
											<li>
												<a class="btn btn-warning" href="{{route('admin.want.edit', ['want'=>$want->id])}}">
													<i class="icon-edit icon-white"></i> 查看
												</a>												
											</li>											
											<li>
												<button class="btn btn-info changStatus" data-status="0" style="width:100%;>
													<i class="icon-edit icon-white"></i> 废弃
												</button>												
											</li>
											<li>
												<button class="btn btn-success" id="follow_quickly">
													<i class="icon-edit icon-white"></i> 交易
												</button>
											</li>
										</ul>
 							 		</div>
							</td>
						</tr>
						@endforeach							
					</tbody>
				</table>
				<div class="pagination pagination-centered">
					 {!! $books->links() !!}
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
			var token = $("input[name='_token']").val();

			/*alert(id);
			alert(status);*/
			// alert($("input[name='_token']").val());

			$.ajax({

				type: 'POST',

				url: 'book/changeStatus',

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
