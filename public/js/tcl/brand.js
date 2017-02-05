// 品牌级联菜单js
$(document).ready(function(){

	$("#brand_type").val("0");
	$("#top_brand").val("0");
	$("#second_brand").val("0");

		$('#brand_type').change(function(){

			var brand_type = $('#brand_type').val();

			switch (brand_type) {
        		case '0':// 添加顶级品牌
        			$('#pid_select').hide();
        			$('#pid2_select').hide();
        		break;
        		case '1':// 添加一级品牌
        			$('#pid_select').show();
        			$('#pid2_select').hide();
        		break;        		    
        		case '2':// 添加二级品牌        		            		    
					$('#pid_select').show();
        		break;
        		default :
            		$('#pid_select').hide();
        			$('#pid_select').hide();
    		}
		});

		$('#top_brand').change(function(){

			var brand_id    = $(this).val();
			var brand_type  = $('#brand_type').val();
			var token       = $("input[name='_token']").val();
			var request_url = $("input[name='ajax_request_url']").val();

			// alert(brand_type);

			if(brand_type == 2){
				//获得该顶级品牌下二级品牌
        		$.ajax({
					type: 'POST',		
					url: request_url,		
					data: { pid : brand_id},		
					dataType: 'json',		
					headers: {		
						'X-CSRF-TOKEN': token		
					},		
					success: function(data){		
						if(data.status == 1){
							var content = '<option  value="0">请选择一级品牌</option>';
							$.each(data.data, function(index, value){
								content += '<option value="';
								content += value.id;
								content += '">';
								content += value.name;
								content += '</option>';
							})
							// $('#top_brand').append(content);
							console.log($('#second_brand'));
							$('#second_brand').empty();
							$('#second_brand').append(content);
							// console.log(content);
							$('#pid2_select').show();
						}else{
							alert(data.message);
							$('#second_brand').empty();
							$('#pid2_select').hide();
							return false;
						}
					},		
					error: function(xhr, type){
	
						alert('Ajax error!');
					}
				});				
			}			
		});
	});