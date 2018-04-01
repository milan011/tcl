@extends('layouts.main')

@section('head_content')
<link id="bootstrap-style" href="{{ URL::asset('css/tcl/bootstrap-datepicker.min.css') }}" rel="stylesheet">
	<style type="text/css">
		.one_line{
			width:40%;
			margin-bottom:5px;
		}
		
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

		/*.timeslot{
			min-height:64px !important;
			height:64px;
		}*/

		td.info{
			width:20%;
		}

		.pg_info{

			color:red;
		}
		
		.timeslot {

			height: 63px !important;
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
	<!-- <li>
		<i class="icon-home"></i>
		<a href="{{route('admin.chance.index')}}">销售机会列表</a> 
		<i class="icon-angle-right"></i>
	</li> -->
	<li><a href="javascript:void(0);">创建销售机会</a></li>
</ul>
@endsection

<!-- 主体 -->
@section('content')

@include('layouts.message')
<div class="row-fluid">
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
						<table  class="table table-striped table-bordered">
					<thead>
						<tr>
							<th></th>
							<th>车源信息</th>
							<th>求购信息</th>
							<th></th>
							<th>车源信息</th>
							<th>求购信息</th>
						</tr>
					</thead> 
					<tbody>
    					<tr>
    						<td>编号</td>
							<td class="info">{{$waited_info->car_code}}</td>							
							<td class="info" id="want_code"></td>
							<td>车架号</td>
							<td class="info">{{$waited_info->vin_code}}</td>							
							<td class="info"></td>
						</tr>
						<tr>
    						<td>名称</td>
							<td class="info">{{$waited_info->name or ''}}</td>							
							<td class="info" id="name"></td>
							<td>车型类别</td>
							<td class="info">{{$category_type[$waited_info->categorey_type]}}</td>						
							<td class="info" id="want_type"></td>
						</tr>
						<tr>
    						<td>期望价格</td>
							<td class="info">{{$waited_info->bottom_price}}-{{$waited_info->top_price}}万</td>
							<td class="info" id="want_price"></td>						
							<td>车龄</td>
							<td class="info">{{$waited_info->age}}</td>							
							<td class="info" id="car_age"></td>				
						</tr>
						<tr>
    						<td>指导价</td>
							<td class="info">
								@if((Auth::id() == $waited_info->creater_id) || (Auth::user()->isSuperAdmin())) 
									<span class="pg_info">{{$waited_info->guide_price}}</span>
								@endif
							</td>
							<td class="info"></td>	
							<td>内饰颜色</td>
							<td class="info">{{$inside_color[$waited_info->inside_color]}}</td>
							<td class="info" id="inside_color"></td>
						</tr>
						<tr>
    						<td>评估价</td>
							<td class="info">
								@if((Auth::id() == $waited_info->creater_id) || (Auth::user()->isSuperAdmin())) 
									<span class="pg_info">{{$waited_info->appraiser_price}}</span>
								@endif
							
							</td>							
							<td class="info"></td>	
							<td>过户次数</td>
							<td class="info">{{$waited_info->sale_number}}</td>							
							<td class="info" id="sale_number"></td>
						</tr>
						<tr>
    						<td>行驶里程</td>
							<td class="info">{{$waited_info->mileage}}</td>							
							<td class="info" id="mileage"></td>
							<td>上牌日期</td>
							<td class="info">{{substr($waited_info->plate_date, 0 ,10)}}</td>
							<td class="info"></td>
						</tr>
						<tr>
    						<td>变速箱</td>
							<td class="info">{{$gearbox[$waited_info->gearbox]}}</td>							
							<td class="info" id="gearbox"></td>
							<td>到检日期</td>
							<td class="info">{{substr($waited_info->plate_end, 0 ,10)}}</td>
							<td class="info"></td>
						</tr>
						<tr>
    						<td>排量</td>
							<td class="info">{{$capacity[$waited_info->capacity]}}</td>							
							<td class="info" id="capacity"></td>
							<td>上牌城市</td>
							<td class="info">{{$waited_info->belongsToCity->city_name}}</td>							
							<td class="info" id="plate_city"></td>
						</tr>
						<tr>
    						<td>上传日期</td>
							<td class="info">{{substr($waited_info->created_at, 0 ,10)}}</td>							
							<td class="info" id="created_at"></td>
							<td>保险类别</td>
							<td class="info">{{$safe_type[$waited_info->safe_type]}}</td>							
							<td class="info"></td>
						</tr>
						<tr>
    						<td>所属门店</td>
							<td class="info">{{$waited_info->belongsToShop->shop_name}}</td>							
							<td class="info" id="shop_name"></td>
							<td>保险到期</td>
							<td class="info">{{substr($waited_info->safe_end, 0 ,10)}}</td>							
							<td class="info"></td>
						</tr>
						<tr>
    						<td>负责人</td>
							<td class="info">{{$waited_info->belongsToUser->nick_name}}({{$waited_info->belongsToUser->creater_telephone}})</td>							
							<td class="info" id="creater"></td>
							<td>客户信息</td>
							<td class="info">
								{{$waited_info->belongsToCustomer->customer_name or ''}}
								@if(Auth::id() == $waited_info->creater_id)
								({{$waited_info->belongsToCustomer->customer_telephone or ''}})
								@endif
							</td>				
							<td class="info" id="customer_info"></td>
						</tr>
						<tr>
    						<td>评估师描述</td>
							<td class="info"><span class="pg_info">{{$waited_info->pg_description}}</span></td>							
							<td class="info"></td>
							<td>外观颜色</td>
							<td class="info">{{$out_color[$waited_info->out_color]}}</td>
							<td class="info" id="out_color"></td>
						</tr>
						<tr>
    						<td>客户描述</td>
							<td class="info">{{$waited_info->description}}</td>							
							<td class="info" id="remark"></td>
							<td>销售顾问备注</td>
							<td class="info">{{$waited_info->xs_description}}</td>							
							<td class="info" id="xs_remark"></td>
							
						</tr>	
						<!-- <tr>
    						<td>销售顾问备注</td>
							<td class="info">{{$waited_info->xs_description}}</td>							
							<td class="info" id="xs_remark"></td>
							<td></td>
							<td class="info" ></td>		
							<td class="info"></td>
						</tr> -->					
					</tbody>
				</table>
				<span>
					<form action="{{route('admin.chance.store')}}" method="post" style="display: inherit;margin:0px;">
						{{ csrf_field() }}
            			<input type="hidden" name="pipei_car_id" value="{{$waited_info->id}}">
            			<input type="hidden" name="pipei_want_id" value="">
						<button id="chance_create" class="btn btn-success" type="submit">
						<i class="icon-edit icon-white"></i> 创建销售机会
						</button>
					</form>
					<a href="javascript:void(0);" onclick="window.history.go(-1);return false;" class="btn ">返回</a>
				</span>
						
					</div>
				</div>
				<div id="images" class="tab-pane">
					<div class="box-content">
						@foreach($img_info as $img)
						<div class="masonry-thumb thumbnail" style="width:23%;height:20%">
							<a title="Sample Image 1" href="javascript:void:(0);">
								<img class="grayscale" src="{{URL::asset('uploads/car/'.$img->filename)}}" alt="Sample Image 1">
							</a>
						</div>	
						@endforeach											
					</div>
				</div>
				<div id="follow" class="tab-pane">
					<div class="box" style="width:90%;margin:5px auto;">
					<div class="box-content">
						<div class="timeline"> 
							@foreach ($follow_info as $key=>$info)
					 		<div class="timeslot @if($key%2 == 0) alt @endif" style="height:63px !important;">
								<div class="task">
				    				<span>
										<span class="type">{{$follow_type[$info->follow_type]}}</span>
										<span class="details">
											@foreach($info->description as $des)
												<li style="list-style:none;">{{$des}}</li>
											@endforeach
										</span>
									</span>
									<div class="arrow"></div>
								</div>	
								<!-- <div class="icon">
									<i class="icon-globe"></i>
								</div> -->
								<div class="time">
									<strong>{{$info->belongsToUsers->nick_name or ''}}</strong> 于 {{$info->created_at}}
								</div>	
			   				</div>
							<!-- <div class="clearfix"></div> -->
							@endforeach				
						</div>
						<div class="clearfix"></div>
						<div class="chat-form" style="text-align: right;margin:50px -10px -10px -10px;">
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
				  			<input type="hidden" name="user_name" value="{{Auth::User()->nick_name}}">
				 			<button id="interactive" class="btn btn-info">发布</button>
						</div>
						<div class="clearfix"></div>												
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
</div>
<div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-content">
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
						<!-- <th>客户备注</th> -->
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
						<td>{{$sale_number_config[$match->sale_number]}}</td>							
						<!-- <td>{{$match->remark}}</td>							 -->
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
										<i class="icon-edit icon-white"></i> 对比
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
	<div class="modal-body">
		<form class="form-horizontal" id="condition" action="{{route('admin.chance.create')}}" method="post">
			{!! csrf_field() !!}
			<fieldset>
					<div class="control-group">
						<label class="control-label" for="want_code">求购信息编号</label>
						<div class="controls">
						  	<input class="input-xlarge focused" name="want_code" id="want_code" type="text" value="">
						</div>
					</div>		
					<div class="control-group  ">
            	    	<label class="control-label" for="category_type">车辆类型</label>
            	    	<div class="controls">
            	      		<select id="category_type" name="category_type" >
            	      			@foreach($category_type as $key=>$category)
            	      			<option value='{{$key}}'>{{$category}}</option>  
            	      			@endforeach                                         
            	      		</select>
            	    	</div>
            	  	</div>
            	  	<div class="control-group">
					<label class="control-label" for="selectError3">车型品牌</label>
						<div class="controls">
						  	<select id="top_category" name="brand_id" style="width:25%">
						  		<option value="0">请选择品牌</option>
						  		@foreach ($all_top_brands as $brand)	
						  		<option value="{{$brand->id}}">{{$brand->name}}</option>
						  		@endforeach										
							</select>
							<select id="second_category" name="car_factory" style="display:none;width:25%;">
						  		<option value="0">请选择厂家</option>											
							</select>
							<select id="thrid_category" name="category_id" style="display:none;width:25%;">
						  		<option  value="0">请选择车系</option>											
							</select>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="bottom_price">价格范围</label>
						<div class="controls">
						  	<input class="input-xlarge one_line focused" name="bottom_price" id="bottom_price" type="text" value="{{$select_conditions['bottom_price'] or ''}}" placeholder="低价">
						  	<input class="input-xlarge one_line focused" name="top_price" id="top_price" type="text" value="{{$select_conditions['top_price'] or ''}}" placeholder="高价">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="begin_date">日期范围</label>
						<div class="controls">
							<input type="text" class="input-xlarge date-picker one_line" name="begin_date" id="begin_date" value="{{$select_conditions['begin_date'] or ''}}" placeholder="开始日期" >
							<input type="text" class="input-xlarge one_line date-picker" name="end_date" id="end_date" value="{{$select_conditions['end_date'] or ''}}" placeholder="结束日期">
						</div>
					</div>
					<div class="control-group  ">
            	    	<label class="control-label" for="age">车龄</label>
            	    	<div class="controls">
            	      		<select id="age" name="age" >
            	      			@foreach($age as $key=>$ag)
            	      			<option @if(isset($select_conditions['age']) && $select_conditions['age'] == $key && $select_conditions['age'] != '') selected @endif value='{{$key}}'>{{$ag}}</option>  
            	      			@endforeach                                         
            	      		</select>
            	    	</div>
            	  	</div>
            	  	<div class="control-group  ">
            	    	<label class="control-label" for="mileage">里程</label>
            	    	<div class="controls">
            	      		<select id="mileage" name="mileage" >
            	      			@foreach($mileage_config as $key=>$mile)
            	      			<option @if(isset($select_conditions['mileage']) && $select_conditions['mileage'] == $key && $select_conditions['mileage'] != '') selected @endif value='{{$key}}'>{{$mile}}</option>  
            	      			@endforeach                                         
            	      		</select>
            	    	</div>
            	  	</div>
					<!-- <div class="control-group  ">
            	    	<label class="control-label" for="gearbox">变速箱</label>
            	    	<div class="controls">
            	      		<select id="gearbox" name="gearbox" >
            	      			@foreach($gearbox as $key=>$box)
            	      			<option @if(isset($select_conditions['gearbox']) && $select_conditions['gearbox'] == $key && $select_conditions['gearbox'] != '') selected @endif value='{{$key}}'>{{$box}}</option>  
            	      			@endforeach                                         
            	      		</select>
            	    	</div>
            	  	</div> -->
            	  	<div class="control-group">
            	    	<label class="control-label" for="gearbox">变速箱</label>
            	    	<div class="controls">
            	    		
            	    		<label class="checkbox-inline">
            	    			@foreach($gearbox as $key=>$box)
            	    			@if($key > 0)
									<input type="checkbox" name="gearbox[]" value="{{$key}}" @if(isset($select_conditions['gearbox']) && in_array($key, $select_conditions['gearbox'])) checked @endif>{{$box}}
								@endif
								@endforeach
							</label>
							
            	    	</div>
            	  	</div>
            	  	<div class="control-group  ">
            	    	<label class="control-label" for="out_color">外观</label>
            	    	<div class="controls">
            	      		<select id="out_color" name="out_color" >
            	      			@foreach($out_color as $key=>$color)
            	      			<option @if(isset($select_conditions['out_color']) && $select_conditions['out_color'] == $key && $select_conditions['out_color'] != '') selected @endif value='{{$key}}'>{{$color}}</option>  
            	      			@endforeach                                         
            	      		</select>
            	    	</div>
            	  	</div>
            	  	<div class="control-group  ">
            	    	<label class="control-label" for="capacity">排量</label>
            	    	<div class="controls">
            	      		<select id="capacity" name="capacity" >
            	      			@foreach($capacity as $key=>$value)
            	      			<option @if(isset($select_conditions['capacity']) && $select_conditions['capacity'] == $key && $select_conditions['capacity'] != '') selected @endif value='{{$key}}'>{{$value}}</option>  
            	      			@endforeach                                         
            	      		</select>
            	    	</div>
            	  	</div>
            	  	<div class="control-group  ">
            	    	<label class="control-label" for="sale_number">过户次数</label>
            	    	<div class="controls">
            	      		<select id="sale_number" name="sale_number" >
            	      			@foreach($sale_number_config as $key=>$number)
            	      			<option @if(isset($select_conditions['sale_number']) && $select_conditions['sale_number'] == $key && $select_conditions['sale_number'] != '') selected @endif value='{{$key}}'>{{$number}}</option>  
            	      			@endforeach                                         
            	      		</select>
            	    	</div>
            	  	</div>				  
			</fieldset>
			<div class="modal-footer">
				<a href="javascript:void(0);" class="btn" data-dismiss="modal">关闭</a>
				<input type="hidden" name="car_id" value="{{$waited_info->id}}">
				<input type="hidden" name="is_self" value="1">
				<input type="hidden" name="ajax_request_url" value="{{route('admin.brand.getChildBrand')}}">
				<button type="submit" class="btn btn-primary">搜索</button>
			</div>
		</form>				         
	</div>		
</div>
@endsection
@section('script_content')
<!-- 引入车型级联js -->
<script src="{{URL::asset('js/tcl/category.js')}}"></script> 
<!-- 引入对话框插件 -->
<script src="{{URL::asset('js/tcl/dialog.js')}}"></script> 
<!-- 引入日历插件 -->
<script src="{{URL::asset('js/tcl/bootstrap-datepicker.js')}}"></script> 
<script src="{{URL::asset('js/tcl/locales/bootstrap-datepicker.zh-CN.js')}}"></script> 

<script>
	$(document).ready(function(){
		var select_category_id = "{{$select_conditions['category_id'] or '0'}}";
		var select_factory_id  = "{{$select_conditions['car_factory'] or '0'}}";

		$('#second_category').children().first().val(select_factory_id);
		$('#thrid_category').children().first().val(select_category_id);

		$('ul.pagination').children('li').children('a').click(function(){

			// alert($(this).attr('href'));
			$('#condition').attr('action', $(this).attr('href'));
			// alert($('#condition').attr('action'));
			$('#condition').submit();
			return false;
		});

		$('.date-picker').datepicker({
            language: 'zh-CN',
            autoclose: true,
            format: 'yyyy-mm-dd 00:00:00',
            todayHighlight: true
        });

		// 检查车源、求购是否为空
        $('#chance_create').click(function(){

        	var pipei_want_id = $("input[name='pipei_want_id']").val();
        	var pipei_car_id  = $("input[name='pipei_car_id']").val();

        	if((pipei_car_id == '') || (pipei_want_id == '')){

        		alert('没有车源或求购');
        		return false;
        	}
        });

        // 创建销售机会
		$('.create_chance').click(function(){
			var want_id          = $(this).prev("input[name='want_id']").val();
			var car_id           = $(this).next("input[name='car_id']").val();
			var request_url      = "{{route('admin.want.getWantInfo')}}";
			
			/*alert(want_id);
			alert(car_id);*/
			// return false;
			$.ajax({

				method: 'POST',
				url: request_url,
				data: { want_id : want_id},
				dataType: 'json',
				headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}'},
				success: function(data){

					var want = JSON.parse(data.data);

					$("input[name='pipei_want_id']").val(want.id);
					$('#want_code').text(want.want_code);
					$('#name').text(want.name);
					$('#created_at').text(want.created_at.substr(0, 10));
					$('#capacity').text(want.capacity);
					$('#want_price').text(want.bottom_price+'-'+want.top_price+'万');
					$('#gearbox').text(want.gearbox);
					$('#age').text(want.age);
					$('#mileage').text(want.mileage);
					$('#out_color').text(want.out_color);
					$('#inside_color').text(want.inside_color);
					$('#creater').text(want.creater+'('+want.creater_tel+')');
					$('#shop_name').text(want.shop_name);
					$('#remark').text(want.remark);
					$('#xs_remark').text(want.xs_remark);
					$('#want_type').text(want.want_type);
					$('#car_age').text(want.car_age);
					$('#customer_info').text(want.customer_info);
					$('#sale_number').text(want.sale_number);
					// alert('匹配成功');
					console.log(want);
					// window.location.href = '{{route('admin.chance.index')}}';
					return false;
				},
				error: function(xhr, type){

					alert('Ajax error!');
				}
			});
		});

		//互动信息添加
		$('#interactive').click(function(){

			var content = $('#textDesc').val();
			var car_id  = '{{$waited_info->id}}';
			var request_url  = "{{route('admin.car.interactiveAdd')}}";

			/*alert(content);
			alert(car_id);*/

			$.ajax({

				method: 'POST',
				url: request_url,
				data: { content : content, car_id : car_id},
				dataType: 'json',
				headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}'},
				success: function(data){
					var last_follow_left = $('.timeslot').last().hasClass('alt');
					var content_follow  = '<div class="timeslot ';
					var user_name  = $("input[name='user_name']").val();

					if(!last_follow_left){
						content_follow += 'alt';
					}

					content_follow += '">'
					content_follow += '<div calss="task">'
					content_follow += '<span>';
					content_follow += '<span class="type">';
					content_follow += '互动';
					content_follow += '</span>';
					content_follow += '<span class="deatails">';
					content_follow += '<li style="list-style:none;">';
					content_follow += data.content;
					content_follow += '</li>';
					content_follow += '</span>';
					content_follow += '</span>';
					content_follow += '<div class="arrow"></div>';
					content_follow += '</div>';
					content_follow += '<div class="icon">';
					content_follow += '<i class="icon-globe"></i>';
					content_follow += '</div>';
					content_follow += '<div class="time">';
					content_follow += '<strong>';
					content_follow += user_name;
					content_follow += '</strong>';
					content_follow += ' 于';
					content_follow += data.follow_time;
					content_follow += '</div>';
					content_follow += '</div>';
					content_follow += '<div class="clearfix"></div>';			   				
							
					// alert(last_follow_left);
					alert('信息添加成功');
					console.log(content_follow);

					$('.timeline').prepend(content_follow);
					// location.reload();
					// console.log(data);
					// window.location.href = '{{route('admin.chance.index')}}';
					// window.location.reload();
					return false;
				},
				error: function(xhr, type){

					alert('Ajax error!');
				}
			});
		});

		$('#top_category').children('option').each(function(){

        	var select_brand_id = "{{$select_conditions['brand_id'] or '0'}}";

        	if($(this).val() == select_brand_id){
        		$(this).attr('selected', 'selected');
        	}
        }); 
	});	
</script>
@endsection