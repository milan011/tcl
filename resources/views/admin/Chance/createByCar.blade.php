@extends('layouts.main')

@section('head_content')
	<style type="text/css">
		.detial {
			font-size: 14px;
			line-height: 24px;
			color: #3A3A3A;
			font-style: normal;
			font-family: 'Microsoft YaHei', arial, tahoma, sans-serif;
		}

		.detial i {
			font-style: normal;
			color: #999;
			font-family: 'Microsoft YaHei', arial, tahoma, sans-serif;
		}

		.detial span {
			width: 30%;
			display: inline-block;
			font-family: 'Microsoft YaHei', arial, tahoma, sans-serif;
		}
		
		.detial em {
			color: #f84949;
			font-size: 28px;
			font-style: normal;
			font-weight: bold;
			line-height: 28px;
			font-family: 'Microsoft YaHei', arial, tahoma, sans-serif;
		}
		
		.title {
			color: #333;
			font-size: 20px;
			line-height: 30px;
			font-weight: normal;
			font: 'Microsoft YaHei', arial, tahoma, sans-serif;
		}
		
		.title em {
			color: #f84949;
			font-size: 28px;
			font-style: normal;
			font-weight: bold;
			line-height: 30px;
			font: 'Microsoft YaHei', arial, tahoma, sans-serif;
		}

		.tab-menu.nav-tabs > li{
			float:left;
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
		<a href="{{route('admin.chance.index')}}">销售机会列表</a> 
		<i class="icon-angle-right"></i>
	</li>
	<li><a href="javascript:void(0);">创建销售机会</a></li>
</ul>
@endsection

<!-- 主体 -->
@section('content')

@include('layouts.message')
<div class="row-fluid sortable">
	<div class="box span12" style="padding:10px;">
		<div class="box-header">
			<h2>
				<!-- <i class="halflings-icon th"></i><span class="break"></span> -->
			</h2>
		</div>
		<div class="box-content">
			<ul class="nav tab-menu nav-tabs" id="myTab">
				<li class="active"><a href="#info">详情</a></li>
				<li><a href="#images">图片</a></li>
				<li><a href="#follow">跟踪</a></li>
			</ul>
			<div id="myTabContent" class="tab-content">
				<div id="info" class="tab-pane active">
					<div class="box-content">
						<p class="title">【出售】{{$waited_info->name}}</p>
						<p class="detial">
							<i>底价:</i>
							<em>{{$waited_info->top_price}}</em>
							<i>万元</i>
						</p>

						<div class="col-xs-4">
							<p class="detial">
								<span>
									<i>排量:</i>
									{{$capacity[$waited_info->capacity]}}
								</span>
								<span>
									<i>变速箱：</i>
									{{$gearbox[$waited_info->gearbox]}}
								</span>
								<span>
									<i>里程：</i>
									{{$waited_info->mileage}}万公里
								</span>
							</p>
						</div>
						<div class="col-xs-4">
							<p class="detial">
								<span>
									<i>过户次数：</i>
									{{$waited_info->sale_number}}
								<i>次</i>
								</span>
								<span>
									<i>车身颜色：</i>
									{{$out_color[$waited_info->out_color]}}
								</span>
								<span>
									<i>车辆类别：</i>
									{{$category_type[$waited_info->categorey_type]}}
								</span>
							</p>
						</div>
						<div class="col-xs-4">
							<p class="detial">
								<span>
									<i>上牌日期：</i>
									{{$waited_info->plate_date}}
								</span>
								<span>
									<i>检车日期：</i>
									{{$waited_info->plate_end}}
								</span>
								<span>
									<i>登记日期：</i>
									{{$waited_info->created_at}}
								</span>
							</p>
						</div>
						<div class="col-xs-4">
							<p class="detial">
								<span>
									<i>编号：</i>
									{{$waited_info->car_code}}
								</span>
								<span>
									<i>车况：</i>
									{{$waited_info->description}}
								</span>
							</p>
						</div>
				
						<div class="detial">
							<span>
								<i>销售顾问：</i>{{$waited_info->belongsTouser->nick_name}}{{$waited_info->belongsTouser->creater_telephone}}
							<em></em>
							</span>
							<span>
								<i>车主：</i>{{$waited_info->belongsToCustomer->customer_name}}{{$waited_info->belongsToCustomer->customer_telephone}}
							<em></em>
							</span>
						</div>
					</div>
				</div>
				<div id="images" class="tab-pane">
					<div>图片</div>
				</div>
				<div id="follow" class="tab-pane">
					<div class="box-content span4">
						<div class="chat-form" style="text-align: right;margin:-10px -10px -10px -10px;">
							<textarea id="textDesc"></textarea>
				 			<label class="checkbox inline" style="padding-left:0px;margin-top: 0px;">
								<input type="checkbox" name="checkFollow" id="inlineCheckbox1" value="1"> 记录
				  			</label>
				  			<label class="checkbox inline" style="padding-left:0px;">
								<input type="checkbox" name="checkFollow" id="inlineCheckbox2" value="2"> 电话
				  			</label>
				  			<label class="checkbox inline" style="padding-left:0px;">
								<input type="checkbox" name="checkFollow" id="inlineCheckbox3" value="3"> 拜访
				  			</label>
				 			<button onclick="publish()" class="btn btn-info">发布</button>
						</div>
						<div class="clearfix"></div>						
					</div>
					<div class="box-content span6">
						<div class="timeline "> <!-- <div class="timeslot alt"> -->
					 	<div class="timeslot  "  >
							<div class="task">
				    			<span>
									<span class="type">系统</span>
									<span class="details">
										添加求购信息
									</span>
									<span>
										
									</span> 
								</span>
								<div class="arrow"></div>
							</div>	
							<div class="icon">
								<i class="icon-globe"></i>
							</div>
							<div class="time">
								<strong>林涵</strong> 于 2016-12-30 11:26
							</div>	
			   			</div>
							<div class="clearfix"></div>				
					 		<div class="timeslot alt "  >
								<div class="task">
				    				<span>
										<span class="type">系统</span>
										<span class="details">
											添加销售机会
										</span>
										<span>
											
										</span> 
									</span>
									<div class="arrow"></div>
								</div>	
								<div class="icon">
									<i class="icon-globe"></i>
								</div>
								<div class="time">
									<strong>林涵</strong> 于 2016-12-30 11:25
								</div>	
			   				</div>
							<div class="clearfix"></div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
	</div>	
</div>
<div class="row-fluid sortable">		
		<div class="box span12">
			<div class="box-content">
				<!-- <ul style="background: none repeat scroll 0 0 #eee;border: 0 none;border-radius: 0;box-shadow: none;color: #aaa;line-height: 34px; margin: 0;margin-bottom:5px;">
					<li style="display: inline-block;line-height: 20px;">
						<a class="btn btn-primary" href="{{route('admin.car.create')}}">添加车源</a>
					</li>
					<li style="display: inline-block;line-height: 20px;">
						<a href="#" onclick="window.history.go(-1);return false;" class="btn ">返回</a>
					</li>
				</ul> -->
				<div class="page-tabs">
            		<ul class="nav nav-tabs">
            			<li>
            				<button class="btn">系统推荐</button>
            			</li>
            		  	<li style="display: inline-block;line-height:20px;float:right;">
							<a class="btn btn-search" href="javascript:void(0);"><i class="halflings-icon search"></i>搜索求购信息</a>
						</li>
            		</ul>
        		</div>
        		@if(!($match_info->isEmpty()))
				<table  class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>求购信息编号</th>
							<th>求购信息名称</th>
							<th>预期价格</th>
							<th>里程</th>							
							<th>变速箱</th>
							<th>车身颜色</th>
							<th>过户次数</th>
							<th>客户备注</th>
							<th>登记日期</th>
							<th>门店</th>
							<th>负责人</th>
							<th>操作</th>
						</tr>
					</thead> 
					<tbody>
						@foreach ($match_info as $match)
    					<tr>
							<td>{{$match->want_code}}</td>
							<td>{{$match->name}}</td>
							<td>{{$match->bottom_price}}-{{$match->top_price}}万</td>							
							<td>{{$mileage_config[$match->mileage]}}</td>							
							<td>{{$gearbox[$match->gearbox]}}</td>							
							<td>{{$out_color[$match->out_color]}}</td>						
							<td>{{$match->sale_number}}</td>							
							<td>{{$match->remark}}</td>							
							<td>{{substr($match->created_at, 0 ,10)}}</td>							
							<td>{{$match->belongsToShop->shop_name}}</td>							
							<td>{{$match->belongsToUser->nick_name}}</td>		
							<td class="center">
								<div class="btn-group">
									<span>
										<form action="{{route('admin.chance.store')}}" method="post" style="display: inherit;margin:0px;">
										    {{ csrf_field() }}
            								           								
            								<input type="hidden" name="want_id" value="{{$match->id}}">
											<button class="btn btn-success create_chance" type="button">
											<i class="icon-edit icon-white"></i> 确认匹配
											</button>
											<input type="hidden" name="car_id" value="{{$waited_info->id}}">
										</form>
									</span>									
								</div>
							</td>
						</tr>
						@endforeach							
					</tbody>
				</table>
				<div class="pagination pagination-centered">
					 {!! $match_info->links() !!}
				</div>
				@endif 		
			</div>			
		</div>
	</div>
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>精确搜索</h3>
		</div>
		<div class="modal-body" style="max-height:none;">
			<form class="form-horizontal" id="condition" action="/admin/chance/create" method="post">
				{!! csrf_field() !!}
				<fieldset>
					<div class="control-group">
						<label class="control-label" for="want_code">车源编号</label>
						<div class="controls">
						  	<input class="input-xlarge focused" name="cwant_code" id="want_code" type="text" value="">
						</div>
					</div>		
					<div class="control-group  ">
            	    	<label class="control-label" for="want_status">车源状态</label>
            	    	<div class="controls">
            	      		<select id="want_status" name="want_status" >
            	      			<option value='1'>正常</option>                                           
            	      		</select>
            	    	</div>
            	  	</div>				  
				</fieldset>
				<div class="modal-footer">
			<a href="javascript:void(0);" class="btn" data-dismiss="modal">关闭</a>
			<input type="hidden" name="car_id" value="{{$waited_info->id}}">
			<button type="submit" class="btn btn-primary">搜索</button>
		</div>
			</form>				         
		</div>
		
	</div>
@endsection
@section('script_content')
<!-- 引入车型级联js -->
<!-- <script src="{{URL::asset('js/tcl/category.js')}}"></script>  -->
<!-- 引入对话框插件 -->
<script src="{{URL::asset('js/tcl/dialog.js')}}"></script> 
<!-- 引入日历插件 -->
<script src="{{URL::asset('js/tcl/bootstrap-datepicker.js')}}"></script> 
<script src="{{URL::asset('js/tcl/locales/bootstrap-datepicker.zh-CN.js')}}"></script> 

<script>
	$(document).ready(function(){
	
		$('ul.pagination').children('li').children('a').click(function(){

			// alert($(this).attr('href'));
			$('#condition').attr('action', $(this).attr('href'));
			alert($('#condition').attr('action'));
			$('#condition').submit();
			return false;
		});

		$('.create_chance').click(function(){
			var want_id      = $(this).prev("input[name='want_id']").val();
			var car_id       = $(this).next("input[name='car_id']").val();
			var request_url  = "{{route('admin.chance.store')}}";
			/*alert(want_id);
			alert(car_id);*/
			// return false;
			$.ajax({

				method: 'POST',
				url: request_url,
				data: { want_id : want_id, car_id : car_id},
				dataType: 'json',
				headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}'},
				success: function(data){

					alert('匹配成功');
					// location.reload();
					// console.log(data);
					window.location.href = '{{route('admin.chance.index')}}';
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