@extends('layouts.main')

@section('head_content')
<!-- 自定义css -->
<link id="bootstrap-style" href="{{ URL::asset('css/tcl/bootstrap-datepicker.min.css') }}" rel="stylesheet">
<link id="bootstrap-style" href="{{ URL::asset('css/tcl/dropzone/dropzone.css') }}" rel="stylesheet">
<style type="text/css">
	.dropzone{
		padding: 30px 20px;
	}
	.dz-remove{
        margin-left:5%;
        float:left;
        display: inline !important;
    }
    .dz-frist{
    	margin-right:5%;
    	float:right;
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
		<a href="{{route('admin.car.self')}}">我的车源</a> 
		<i class="icon-angle-right"></i>
	</li>
	<li><a href="javascript:void(0);">车源图片编辑</a></li>
</ul>
@endsection
<!-- 主体 -->
@section('content')

@include('layouts.message')

<div class="row-fluid sortable" style="height:100%;">
	<!-- 客户信息添加 begin -->
	<div class="box span12" style="height:100%;">
		<div class="box-header">
			<h2><i class="halflings-icon  icon-truck"></i><span class="break"></span><span id="content_title">图片信息</span></h2>
			<div class="box-icon">
				<a href="javascript:void(0);" class="btn-minimize"><i class="halflings-icon  chevron-up"></i></a>
			</div>
		</div>
		<!-- 图片信息 begin -->
		<div class="box-content" id="img_content" style="overflow: auto;height:70%;">
			<!-- <div class="row"> -->
        	<div class="col-md-offset-1 col-md-10">
            	<div class="jumbotron how-to-create" >
					<!-- <h3>Images <span id="photoCounter"></span></h3><br /> -->
					<!-- 隐藏图片信息模板 -->
					
						<form id="real-dropzone" class="form-horizontal dropzone" action="{{route('admin.image.upload')}}" method="post" enctype="multipart/form-data">
							{!! csrf_field() !!}

            				<div class="fallback">
                			    <input name="file" type="file" multiple />
                			</div>
                			<div class="dropzone-previews" id="dropzonePreview">
                				@foreach($imgs as $img)
								<div class="dz-preview dz-processing dz-image-preview dz-error dz-complete">
									<div class="dz-image">
										<img data-dz-thumbnail="" alt="{{$img->filename}}" src="{{URL::asset('uploads/car/'.$img->filename)}}" style="height:100%;">
									</div>
									<a class="dz-remove" href="javascript:undefined;" data-dz-remove="">删除</a>
									<a class="dz-frist" href="javascript:void(0);" data-dz-frist="{{$img->is_top}}">
										@if($img->is_top == '1') 首图 @else 设为首图 @endif
									</a>
            					</div>
            					@endforeach
                			</div>
                			<h4 style="text-align: center;color:#428bca;margin-top:20px;">
                				点击上传
                				<span class="glyphicon glyphicon-hand-down">
                					
                				</span>
                			</h4>
                			<input type="hidden" name="car_id" value="{{$car->id}}">
						</form>
					
    				<div id="preview-template" style="display: none;">	
        				<div class="dz-preview dz-file-preview">
            				<div class="dz-image"><img data-dz-thumbnail="">
            				</div>
            			</div>
            			<div class="dz-details">
            	    		<div class="dz-size"><span data-dz-size=""></span></div>
            	    		<div class="dz-filename"><span data-dz-name=""></span></div>
            			</div>
            			<div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress=""></span></div>
            			<div class="dz-error-message"><span data-dz-errormessage=""></span></div>	
            			<div class="dz-success-mark">
                			<svg width="54px" height="54px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                    			<title>Check</title>
                    			<desc>Created with Sketch.</desc>
                    			<defs></defs>
                    			<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                        			<path d="M23.5,31.8431458 L17.5852419,25.9283877 C16.0248253,24.3679711 13.4910294,24.366835 11.9289322,25.9289322 C10.3700136,27.4878508 10.3665912,30.0234455 11.9283877,31.5852419 L20.4147581,40.0716123 C20.5133999,40.1702541 20.6159315,40.2626649 20.7218615,40.3488435 C22.2835669,41.8725651 24.794234,41.8626202 26.3461564,40.3106978 L43.3106978,23.3461564 C44.8771021,21.7797521 44.8758057,19.2483887 43.3137085,17.6862915 C41.7547899,16.1273729 39.2176035,16.1255422 37.6538436,17.6893022 L23.5,31.8431458 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z" id="Oval-2" stroke-opacity="0.198794158" stroke="#747474" fill-opacity="0.816519475" fill="#FFFFFF" sketch:type="MSShapeGroup">
                        				
                        			</path>
                    			</g>
                			</svg>
            			</div>	
            			<div class="dz-error-mark">
                			<svg width="54px" height="54px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                    			<title>error</title>
                    			<desc>Created with Sketch.</desc>
                    			<defs></defs>
                    			<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                        			<g id="Check-+-Oval-2" sketch:type="MSLayerGroup" stroke="#747474" stroke-opacity="0.198794158" fill="#FFFFFF" fill-opacity="0.816519475">
                            			<path d="M32.6568542,29 L38.3106978,23.3461564 C39.8771021,21.7797521 39.8758057,19.2483887 38.3137085,17.6862915 C36.7547899,16.1273729 34.2176035,16.1255422 32.6538436,17.6893022 L27,23.3431458 L21.3461564,17.6893022 C19.7823965,16.1255422 17.2452101,16.1273729 15.6862915,17.6862915 C14.1241943,19.2483887 14.1228979,21.7797521 15.6893022,23.3461564 L21.3431458,29 L15.6893022,34.6538436 C14.1228979,36.2202479 14.1241943,38.7516113 15.6862915,40.3137085 C17.2452101,41.8726271 19.7823965,41.8744578 21.3461564,40.3106978 L27,34.6568542 L32.6538436,40.3106978 C34.2176035,41.8744578 36.7547899,41.8726271 38.3137085,40.3137085 C39.8758057,38.7516113 39.8771021,36.2202479 38.3106978,34.6538436 L32.6568542,29 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z" id="Oval-2" sketch:type="MSShapeGroup"></path>
                        			</g>
                    			</g>
                			</svg>
            			</div>
        			</div>
        		</div>
    		</div>
    		<!-- End 隐藏图片信息模板 -->			
			<div class="jumbotron how-to-create">
                <ul>
                    <li>当您选择图片并确认后，图片会自动上传</li>
                    <li>上传图片请勿大于2MB</li>
                </ul>
            </div>
            <div class="form-actions">									
				<a href="javascript:void(0);" onclick="window.history.go(-1);return false;" class="btn ">返回</a>
				<button id="img_edit" class="btn btn-primary">确定</button>
			</div>
		</div>
	</div>		
	<!-- 图片信息添加 end -->
</div>  
@endsection
@section('script_content')
<!-- 引入车型级联js -->
<!-- <script src="{{URL::asset('js/tcl/category.js')}}"></script>  -->
<!-- 引入对话框插件 -->
<!-- <script src="{{URL::asset('js/tcl/dialog.js')}}"></script>  -->
<!-- 引入日历插件 -->
<!-- <script src="{{URL::asset('js/tcl/bootstrap-datepicker.js')}}"></script>  -->
<!-- <script src="{{URL::asset('js/tcl/locales/bootstrap-datepicker.zh-CN.js')}}"></script>  -->
<!-- 引入图片上传插件 -->
<script src="{{URL::asset('js/tcl/dropzone/dropzone.js')}}"></script> 
<script src="{{URL::asset('js/tcl/dropzone/dropzone-config.js')}}"></script> 
<script>
	$(document).ready(function(){

		var car_id = $("input[name='car_id']");		

		/*alert(customer_id.val());
		alert(car_id.val());*/

		$('.dz-frist').click(function(){
			var is_top = $(this).attr('data-dz-frist');
            $(this).attr('data-dz-frist', '1');
            $(this).parents().children('a.dz-frist').text('首图');
            $(this).parents().siblings().children('a.dz-frist').attr('data-dz-frist', '0');
            $(this).parents().siblings().children('a.dz-frist').text('设为首图');
		});

		$('.dz-remove').click(function(){

			var img_name    = $(this).parents().children('.dz-image').children('img').attr('alt');
			var img_car_id  = car_id.val();
			var request_url = '{{route('admin.image.delete')}}';
			var img_obj     = $(this).parent();
			// alert(img_name);
			$.ajax({
				method: 'POST',
				url: request_url,
				data:{ img_name:img_name, img_car_id:img_car_id},
				dataType: 'json',
				headers: {		
					'X-CSRF-TOKEN': '{{ csrf_token() }}'		
				},
				success:function(data){
					console.log(img_obj);
					img_obj.remove();
					alert(data.msg);
					return false;
					// window.location.href = '{{route("admin.car.self")}}';
				},
				error: function(xhr, type){
					/*console.log(JSON.parse(xhr.responseText));
					console.log(JSON.parse(xhr.responseText).customer_name[0]);
					console.log(JSON.parse(xhr.responseText).telephone[0]);
					console.log(xhr.responseText);*/

					/*if(xhr.status == 422){ //表单验证失败，返回的状态

						alert('请输入用户名和真实手机号码');

						return false;
					}*/
					alert('添加图片失败，请重新添加或联系管理员');
					return false;
				}
			});
		});

		$('#img_edit').click(function(){

			var img_name    = '';
			var img_car_id  = car_id.val();
			var request_url = '{{route('admin.car.changeFristImg')}}';
            $('.dz-frist').each(function(){

                if($(this).attr('data-dz-frist') == 1){

                    img_name = $(this).parents().children('.dz-image').children('img').attr('alt');
                    // console.log($(this).parents().children('.dz-image').children('img').attr('alt'));
                    console.log(img_name);
                    $.ajax({
						method: 'POST',
						url: request_url,
						data:{ img_name:img_name, img_car_id:img_car_id},
						dataType: 'json',
						headers: {		
							'X-CSRF-TOKEN': '{{ csrf_token() }}'		
						},
						success:function(data){
							alert(data.msg);
							window.location.href = '{{route("admin.car.self")}}';
						},
						error: function(xhr, type){
							/*console.log(JSON.parse(xhr.responseText));
							console.log(JSON.parse(xhr.responseText).customer_name[0]);
							console.log(JSON.parse(xhr.responseText).telephone[0]);
							console.log(xhr.responseText);*/
		
							/*if(xhr.status == 422){ //表单验证失败，返回的状态
		
								alert('请输入用户名和真实手机号码');
		
								return false;
							}*/
							alert('添加图片失败，请重新添加或联系管理员');
							return false;
						}
					});
                }
                // console.log($(this).attr('data-dz-frist'));
            });			
		});
	});
</script>
@endsection