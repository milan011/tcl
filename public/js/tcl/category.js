// 添加车型级联菜单js
$(document).ready(function(){

		$('#second_category').empty();
		$('#second_category').append('<option  value="0">请选择一级品牌</option>');
		$('#second_category').hide();
		$('#thrid_category').empty();
		$('#thrid_category').append('<option  value="0">请选择二级品牌</option>');
		$('#thrid_category').hide();

		$('#top_category').change(function(){

			var top_brand   = $(this).val();
			var token       = $("input[name='_token']").val();
			var request_url = $("input[name='ajax_request_url']").val();

			$('#second_category').hide();
			$('#thrid_category').hide();
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
						var content = '<option  value="0">请选择一级品牌</option>';
						$.each(data.data, function(index, value){
							content += '<option value="';
							content += value.id;
							content += '">';
							content += value.name;
							content += '</option>';
						})
						// $('#top_brand').append(content);
						console.log($('#second_category'));
						$('#second_category').empty();
						$('#second_category').append(content);
						// console.log(content);
						$('#second_category').show();
					}else{
						alert(data.message);
						$('#second_category').empty();
						$('#second_category').append('<option  value="0">请选择一级品牌</option>');
						$('#second_category').hide();
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
						var content = '<option  value="0">请选择二级品牌</option>';
						$.each(data.data, function(index, value){
							content += '<option value="';
							content += value.id;
							content += '">';
							content += value.name;
							content += '</option>';
						})
						// $('#top_brand').append(content);
						// console.log($('#second_category'));
						$('#thrid_category').empty();
						$('#thrid_category').append(content);
						// console.log(content);
						$('#thrid_category').show();
					}else{
						alert(data.message);
						$('#thrid_category').empty();
						$('#thrid_category').append('<option  value="0">请选择二级品牌</option>');
						$('#thrid_category').hide();
						return false;
					}
				},		
				error: function(xhr, type){
	
					alert('Ajax error!');
				}
			});
		});
	});