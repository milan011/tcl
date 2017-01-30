// 添加车型级联菜单js
$(document).ready(function(){

		$('#second_category').empty();
		$('#second_category').append('<option  value="0">请选择厂家</option>');
		$('#second_category').hide();
		$('#thrid_category').empty();
		$('#thrid_category').append('<option  value="0">请选择车系</option>');
		$('#thrid_category').hide();
		$('#four_category').append('<option  value="0">请选择车型</option>');
		$('#four_category').hide();
		$('#name').val('');

		$('#top_category')[0].selectedIndex = 0; 

		$('#top_category').change(function(){

			var top_brand   = $(this).val();
			var token       = $("input[name='_token']").val();
			var request_url = $("input[name='ajax_request_url']").val();

			$('#second_category').hide();
			$('#thrid_category').hide();
			$('#four_category').hide();
			$('#name').val('');
			// alert(top_brand);return false;

			//获得该顶级品牌子品牌
        	$.ajax({
				type: 'POST',		
				url: request_url,		
				data: { pid : top_brand},		
				dataType: 'json',		
				headers: {		
					'X-CSRF-TOKEN': token		
				},		
				success: function(data){		
					if(data.status == 1){
						var content = '<option  value="0">请选择厂家</option>';
						$.each(data.data, function(index, value){
							content += '<option value="';
							content += value.id;
							content += '">';
							content += value.name;
							content += '</option>';
						});
						// $('#top_brand').append(content);
						// console.log($('#second_category'));
						$('#second_category').empty();
						$('#second_category').append(content);
						// console.log(content);
						$('#second_category').show();
					}else{
						alert(data.message);
						$('#name').val('');
						$('#second_category').empty();
						$('#second_category').append('<option  value="0">请选择厂家</option>');
						$('#second_category').hide();
						$('#thrid_category').hide();
						$('#four_category').hide();
						return false;
					}
				},		
				error: function(xhr, type){
	
					alert('Ajax error!');
				}
			});
		});

		$('#second_category').change(function(){

			var top_brand   = $(this).val();
			var token       = $("input[name='_token']").val();
			var request_url = $("input[name='ajax_request_url']").val();

			$('#thrid_category').hide();
			$('#four_category').hide();
			$('#name').val('');
			// alert(top_brand);return false;

			//获得该顶级品牌子品牌
        	$.ajax({
				type: 'POST',		
				url: request_url,		
				data: { pid : top_brand},		
				dataType: 'json',		
				headers: {		
					'X-CSRF-TOKEN': token		
				},		
				success: function(data){		
					if(data.status == 1){
						var content = '<option  value="0">请选择车系</option>';
						$.each(data.data, function(index, value){
							content += '<option value="';
							content += value.id;
							content += '">';
							content += value.name;
							content += '</option>';
						});
						// $('#top_brand').append(content);
						// console.log($('#second_category'));
						$('#thrid_category').empty();
						$('#thrid_category').append(content);
						// console.log(content);
						$('#thrid_category').show();
					}else{
						alert(data.message);
						$('#name').val('');
						$('#thrid_category').empty();
						$('#thrid_category').append('<option  value="0">请选择车系</option>');
						$('#thrid_category').hide();
						$('#four_category').hide();
						return false;
					}
				},		
				error: function(xhr, type){
	
					alert('Ajax error!');
				}
			});
		});

		$('#thrid_category').change(function(){

			var top_brand   = $(this).val();
			var token       = $("input[name='_token']").val();
			var is_car_add  = $('#auto_add_name').val(); //添加车源则请求
			var cat_request_url = $("input[name='cate_ajax_request_url']").val();


			$('#four_category').hide();
			$('#name').val('');

			if(is_car_add == 1){

				//获得该顶级品牌子品牌
        		$.ajax({
					type: 'POST',		
					url: cat_request_url,		
					data: { pid : top_brand},		
					dataType: 'json',		
					headers: {		
						'X-CSRF-TOKEN': token		
					},		
					success: function(data){		
						if(data.status == 1){
							var content = '<option  value="0">请选择车型</option>';
							$.each(data.data, function(index, value){
								content += '<option value="';
								content += value.id;
								content += '">';
								content += value.name + ' ';
								content += value.year_type;
								content += '款';
								content += '</option>';
							});
							// $('#top_brand').append(content);
							// console.log($('#second_category'));
							$('#four_category').empty();
							$('#four_category').append(content);
							// console.log(content);
							$('#four_category').show();
						}else{
							alert(data.message);
							$('#name').val('');
							$('#four_category').empty();
							$('#four_category').append('<option value="0">请选择车型</option>');
							$('#four_category').hide();
							return false;
						}
					},		
					error: function(xhr, type){
	
						alert('Ajax error!');
					}
				});

				$('#four_category').change(function(){

					//自动生成车源车型名称
					var car_brand     = $('#top_category').find("option:selected").text();
					var car_factory   = $('#second_category').find("option:selected").text();
					var car_category  = $('#thrid_category').find("option:selected").text();
					var car_base_name = $('#four_category').find("option:selected").text();
					var auto_name     = '';

					/*console.log(car_brand);
					console.log(car_factory);
					console.log(car_category);
					console.log(car_base_name);*/

					auto_name = car_category + car_base_name;
					// console.log($('#name'));
					$('#name').val(auto_name);
				});
			}
		});
	});