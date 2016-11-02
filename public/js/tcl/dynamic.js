$(function(){
	//gallery colorbox
	$('.thumbnail a').colorbox({rel:'thumbnail a', transition:"elastic", maxWidth:"95%", maxHeight:"95%"});
	
	$("[name='checkFollow']").click(function(){
		$("[name='checkFollow']").each(function(){
			$.uniform.update($(this).attr("checked", false));
	});
		$.uniform.update($(this).attr("checked", true));
	});
	
	$('.action').click(function(){
		var id=$(this).attr("id");
		var status=$(this).attr("status");
		var ctx=$('#ctx-id').val();
		$.ajax({
			url : ctx+"/tasks/status",
			type : 'POST',
			data : "id="+id+"&status="+status,
			dataType : 'json',
			success : function(data) {
				if ('1' == data) {
					
				} else {
					alert("联网失败，请重试！");
				}
			}
		});
	});
	
	$("#brandCompany").blur(function(){
		$("#carName").val($("#brandCompany").find("option:selected").text());
	});
	$("#brandType").blur(function(){
		$("#carName").val($("#brandType").find("option:selected").text()+"  "+$("#brandType").find("option:selected").text());
	});
	$("#brandCode").blur(function(){
		$("#carName").val($("#brandCompany").find("option:selected").text()+"  "+$("#brandType").find("option:selected").text()+"  "+$("#brandCode").find("option:selected").text());
	});
	
	$("#cardDate").blur(function(){
		$("#inspectDate").val(getCheckDate($("#cardDate").val()));
		$("#age").val(getYear($("#cardDate").val()));
		
	});
	
	$("#brandCompany").change(
			function() {
				var ctx=$('#ctx-id').val();
				var brandId = $(this).val();
				if (null != brandId && '' != brandId) {
					$("#brandType").empty();
					$("#brandType").append(
							"<option value=''>请选择</option");
					$.ajax({
						url : ctx+'/chance/brand-type',
						type : 'POST',
						data : {
							dicId : '1',
							pid : brandId
						},
						dataType : 'json',
						success : function(data) {
							if (null != data && data.data.length > 0) {
								$.each(data.data, function(i, item) {
									$("#brandType").append(
											"<option value='"+item.code+"'>"
													+ item.name
													+ "</option>");
								});
							}
						}
					});
				}
			});
	$("#brandType").change(
			function() {
				var brandId = $(this).val();
				var ctx=$('#ctx-id').val();
				if (null != brandId && '' != brandId) {
					$("#brandCode").empty();
					$("#brandCode").append(
							"<option value=''>请选择</option");
					$.ajax({
						url : ctx+'/chance/brand-type',
						type : 'POST',
						data : {
							dicId : '1',
							pid : brandId
						},
						dataType : 'json',
						success : function(data) {
							if (null != data && data.data.length > 0) {
								$.each(data.data, function(i, item) {
									$("#brandCode").append(
											"<option value='"+item.code+"'>"
													+ item.name
													+ "</option>");
								});
							}
						}
					});
				}
			});
	
	
	
});

function getCheckDate(date1){
	
	if(date1.indexOf('-')>-1){
		 var arr1=date1.split('-');
		 if(arr1.length==3){
			 var d1=new Date(arr1[0],arr1[1],arr1[2]);
			 var d2=new Date();
			 var da=(d2.getTime()-d1.getTime())/(1000*3600*24*365);
			 if(da<=2){
				arr1[0]=Number(arr1[0])+2;	
			 }else if(da<=4){
				arr1[0]=Number(arr1[0])+4;
			 }else if(da<=6){
				arr1[0]=Number(arr1[0])+6;
			 }else {
				var m=d2.getMonth()-Number(arr1[1])+1;
				if(m>0){
					arr1[0]=d2.getFullYear()+1;		
				}else{
					arr1[0]=d2.getFullYear();
				}
			 }
			return arr1[0]+"-"+arr1[1]+"-"+arr1[2];
		 }else{
			 return "";
		 }
	}else{
		return "";
	}
	 
}

function getYear(date1){
	
	if(date1.indexOf('-')>-1){
		 var arr1=date1.split('-');
		 if(arr1.length==3){
			 var d1=new Date(arr1[0],arr1[1],arr1[2]);
			 var d2=new Date();
			 var da=(d2.getTime()-d1.getTime())/(1000*3600*24*365);
			 if(da<0){
				return "0";
			 }else{
				 return Math.round(da*10)/10;
			}
		}
	}else{
		return "0";
	}
	 
}

/**
 * 发布动态
 */
function publish(){
	var ftype=1;
	$("[name='checkFollow']").each(function(){
		if($(this).attr("checked")){
			ftype=$(this).val();
		}
	});
	var textdesc=$("#textDesc").val();
	var ctx=$('#ctx-id').val();
	var bpk=$("#follow-bpk").val();
	var usrID=$("#follow-usr-id").val();
	var deptID=$("#follow-dept-id").val();
	$.ajax({
	     type: "post",
	     url: ctx+"/log/save",
	     data: "busiId="+bpk+"&followType="+ftype+"&followInfo="+textdesc+"&deptID="+deptID+"&usrId="+usrID+"",
	     success: function(data){
	    	 if(data=="1"){
	    		 window.location.reload();
	    	 }else{
	    		 alert("发布失败，请重试！");
	    	 }
	     }
	});
	// location.reload();
}


//通过客户编码得到客户信息
var pickCustom=function(){
	var ctx=$('#ctx-id').val();
	var code=$('[clinetCode]').val();
	if (null != code && '' != code) {
		$.ajax({
			url : ctx+'/custom/get-by-code',
			type : 'POST',
			data : {
				code : code
			},
			dataType : 'json',
			success : function(data) {
				if (null != data && data.responseCode=='1') {
					$('[clientName-chance]').val(data.data.name);
					$('[clientPhone-chance]').val(data.data.linkway);
					$('[clientId-chance]').val(data.data.id);
				}
			}
		});
	}
	
};

//通过客户编码得到客户信息
var pickCustomTrade=function(){
	var ctx=$('#ctx-id').val();
	var code=$('[clinetCode1]').val();
	if (null != code && '' != code) {
		$.ajax({
			url : ctx+'/custom/get-by-code',
			type : 'POST',
			data : {
				code : code
			},
			dataType : 'json',
			success : function(data) {
				if (null != data && data.responseCode=='1') {
					$('[clientName]').val(data.data.name);
					$('[clientPhone]').val(data.data.linkway);
					$('[clientId]').val(data.data.id);
				}
			}
		});
	}
	
};

//通过机会编码得到客户信息
var pickChance=function(id){
	
	var ctx=$('#ctx-id').val();
	var code="";
	if(id=='1'){
		code=$('[carCode]').val();
	}else{
		code=$('[wantCode]').val();
	}
	
	if (null != code && '' != code) {
		$.ajax({
			url : ctx+'/chance/get-by-code',
			type : 'POST',
			data : {
				code : code
			},
			dataType : 'json',
			success : function(data) {
				if (null != data && data.responseCode=='1') {
					if(id=='1'){
						$("[saleName1]").val(data.data.client_name);
						$("[salePhone1]").val(data.data.linkway);
						$("[carId1]").val(data.data.id);
						$("[carName1]").val(data.data.car_name);
					}else{
						$("[clientName]").val(data.data.client_name);
						$("[clientPhone]").val(data.data.linkway);
						$("[clientId]").val(data.data.client_id);
						$("[wantId]").val(data.data.car_id);
						$("[clinetCode]").val(data.data.client_code);
					}
					
				}
			}
		});
	}
	
};

var carinfoHref=function(){
	var ctx=$('#ctx-id').val();
	var bpks=$('#ID').val();
	var chanceType=$('#chanceType').val();
	if(chanceType=='2'){
		window.location.href=ctx+"/flow/fix?bPK="+bpks;
	}else{
		window.location.href=ctx+"/flow/add?bPK="+bpks;
	}
};

String.prototype.trim=function(){
    return this.replace(/(^\s*)|(\s*$)/g, "");
}
//保存车辆基本信息
var carBaseSave=function(obj){
	var b=false;
	var ctx=$('#ctx-id').val();
	$("#base-form [required]").each(function(){
		if($(this).val()==""){
			b=true;
		}
	});
	if(b){
		alert("请检查必填项，必填项不能为空。");
		return;
	}
	
	var carDetails=$('#carDetails').val();
	if(carDetails.trim().length<10){
		alert("车况描述请填写大于10个汉字。");
		return;
	}
	obj.attr('disabled',true);
	obj.removeAttr('onclick');
	var p=$('#provence option:selected').text(); 
	var c=$('#city option:selected').text();
	$('#provenceName').val(p);
	$('#cityName').val(c);
	var bpks=$('#ID').val();
	$.ajax({
		url : ctx+"/cars/save-car-base",
		type : 'POST',
		data : $("#base-form").serialize(),
		dataType : 'json',
		success : function(data) {
			if ('1' == data.responseCode) {
				window.location.href=ctx+"/flow/img?bPK="+bpks;
			} else {
				alert("更新失败，请重试");
			}
		}
	});
};

//保存求购车辆信息
var carWantSave=function(obj){
	var b=false;
	var ctx=$('#ctx-id').val();
	$("#want-form [required]").each(function(){
		if($(this).val()==""){
			b=true;
		}
	});
	if(b){
		alert("请检查必填项，必填项不能为空。");
		return;
	}
	obj.attr('disabled',true);
	obj.removeAttr('onclick');
	var p=$('#provence option:selected').text(); 
	var c=$('#city option:selected').text();
	$('#provenceName').val(p);
	$('#cityName').val(c);
	$.ajax({
		url : ctx+"/cars/save-car-want",
		type : 'POST',
		data : $("#want-form").serialize(),
		dataType : 'json',
		success : function(data) {
			if ('1' == data.responseCode) {
				window.location.href=ctx+"/chance/my";
			} else {
				alert("保存求购信息失败，请重试");
			}
		}
	});
};


//保存车辆评估信息
var saveEstimate=function(obj){
	var b=false;
	var ctx=$('#ctx-id').val();
	$("#estimate-form [required]").each(function(){
		if($(this).val()==""){
			b=true;
		}
		
	});
	if(b){
		alert("请检查必填项，必填项不能为空。");
		return;
	}
	obj.attr('disabled',true);
	obj.removeAttr('onclick');
	$.ajax({
		url : ctx+"/cars/save-car-estimate",
		type : 'POST',
		data : $("#estimate-form").serialize(),
		dataType : 'json',
		success : function(data) {
			if ('1' == data.responseCode) {
				window.location.href=ctx+"/chance/my";
			} else {
				alert("保存车辆评估失败，请重试");
			}
		}
	});
};


//保存收购信息
var saveInstore=function(obj){
	var b=false;
	var ctx=$('#ctx-id').val();
	$("#instore-form [required]").each(function(){
		if($(this).val()==""){
			b=true;
		}
		
	});
	if(b){
		alert("请检查必填项，必填项不能为空。");
		return;
	}
	obj.attr('disabled',true);
	obj.removeAttr('onclick');
	var bpk=$("#carID").val();
	$.ajax({
		url : ctx+"/cars/save-car-instore",
		type : 'POST',
		data : $("#instore-form").serialize(),
		dataType : 'json',
		success : function(data) {
			if ('1' == data.responseCode) {
				window.location.href=ctx+"/flow/fix?bPK="+bpk;
			} else {
				alert("保存收购失败，请重试");
			}
		}
	});
};



//保存车辆整备信息
var saveFix=function(obj){
	var b=false;
	var ctx=$('#ctx-id').val();
	$("#instore-form [required]").each(function(){
		if($(this).val()==""){
			b=true;
		}
		
	});
	if(b){
		alert("请检查必填项，必填项不能为空。");
		return;
	}
	obj.attr('disabled',true);
	obj.removeAttr('onclick');
	var bpk=$("#carID").val();
	$.ajax({
		url : ctx+"/cars/save-car-fix",
		type : 'POST',
		data : $("#instore-form").serialize(),
		dataType : 'json',
		success : function(data) {
			if ('1' == data.responseCode) {
				window.location.href=ctx+"/flow/sale?bPK="+bpk;
			} else {
				alert("保存收购失败，请重试");
			}
		}
	});
};


//保存约车信息
var saveDate=function(obj){
	var b=false;
	var ctx=$('#ctx-id').val();
	$("#date-form [required]").each(function(){
		if($(this).val()==""){
			b=true;
		}
		
	});
	if(b){
		alert("请检查必填项，必填项不能为空。");
		return;
	}
	obj.attr('disabled',true);
	obj.removeAttr('onclick');
	$.ajax({
		url : ctx+"/date/save",
		type : 'POST',
		data : $("#date-form").serialize(),
		dataType : 'json',
		success : function(data) {
			if ('1' == data.responseCode) {
				window.location.href=ctx+"/date";
			} else {
				alert("约车失败，请重试");
			}
		}
	});
};


//保存约车并展示订车界面
var saveDateAndOrder=function(obj){
	var b=false;
	var ctx=$('#ctx-id').val();
	var dateCode=$('#dateCode').val();
	$("#date-form [required]").each(function(){
		if($(this).val()==""){
			b=true;
		}
		
	});
	if(b){
		alert("请检查必填项，必填项不能为空。");
		return;
	}
	obj.attr('disabled',true);
	obj.removeAttr('onclick');
	$.ajax({
		url : ctx+"/date/save",
		type : 'POST',
		data : $("#date-form").serialize(),
		dataType : 'json',
		success : function(data) {
			if ('1' == data.responseCode) {
				window.location.href=ctx+"/order/add?id="+dateCode;
			} else {
				alert("约车失败，请重试！");
			}
		}
	});
};


//保存订车信息
var saveOrder=function(obj,id){
	var b=false;
	var ctx=$('#ctx-id').val();
	$("#order-form [required]").each(function(){
		if($(this).val()==""){
			b=true;
		}
		
	});
	if(b){
		alert("请检查必填项，必填项不能为空。");
		return;
	}
	if(id=='1'){
		$('#order-form [order]').val('');
	}
	obj.attr('disabled',true);
	obj.removeAttr('onclick');
	$.ajax({
		url : ctx+"/order/save",
		type : 'POST',
		data : $("#order-form").serialize(),
		dataType : 'json',
		success : function(data) {
			if ('1' == data.responseCode) {
				window.location.href=ctx+"/order";
			} else {
				alert("订车失败，请重试");
			}
		}
	});
};

//保存交易信息
var saveTrade=function(obj,id){
	var b=false;
	var ctx=$('#ctx-id').val();
	$("#trade-form [required]").each(function(){
		if($(this).val()==""){
			b=true;
		}
	});
	if(b){
		alert("请检查必填项，必填项不能为空。");
		return;
	}
	if(id=='1'){
		$('#trade-form [trade]').val('');
	}
	obj.attr('disabled',true);
	obj.removeAttr('onclick');
	$.ajax({
		url : ctx+"/trade/save",
		type : 'POST',
		data : $("#trade-form").serialize(),
		dataType : 'json',
		success : function(data) {
			if ('1' == data.responseCode) {
				window.location.href=ctx+"/trade";
			} else {
				alert("交易失败，请重试");
			}
		}
	});
};

//保存车辆过户信息
var saveGuohu=function(obj){
	var b=false;
	var ctx=$('#ctx-id').val();
	$("#guohu-form [required]").each(function(){
		if($(this).val()==""){
			b=true;
		}
	});
	if(b){
		alert("请检查必填项，必填项不能为空。");
		return;
	}
	obj.attr('disabled',true);
	obj.removeAttr('onclick');
	$.ajax({
		url : ctx+"/guohu/save",
		type : 'POST',
		data : $("#guohu-form").serialize(),
		dataType : 'json',
		success : function(data) {
			if ('1' == data.responseCode) {
				window.location.href=ctx+"/guohu";
			} else {
				alert("过户失败，请重试");
			}
		}
	});
};


//保存财务审核信息
var saveFinance=function(obj){
	var b=false;
	var ctx=$('#ctx-id').val();
	$("#finance-form [required]").each(function(){
		if($(this).val()==""){
			b=true;
		}
	});
	if(b){
		alert("请检查必填项，必填项不能为空。");
		return;
	}
	obj.attr('disabled',true);
	obj.removeAttr('onclick');
	$.ajax({
		url : ctx+"/finance/finance",
		type : 'POST',
		data : $("#finance-form").serialize(),
		dataType : 'json',
		success : function(data) {
			if ('1' == data.responseCode) {
				window.location.href=ctx+"/finance";
			} else {
				alert("失败，请重试");
			}
		}
	});
};

//保存领导审核信息
var saveLeader=function(obj){
	var b=false;
	var ctx=$('#ctx-id').val();
	$("#leader-form [required]").each(function(){
		if($(this).val()==""){
			b=true;
		}
	});
	if(b){
		alert("请检查必填项，必填项不能为空。");
		return;
	}
	obj.attr('disabled',true);
	obj.removeAttr('onclick');
	$.ajax({
		url : ctx+"/finance/leader",
		type : 'POST',
		data : $("#leader-form").serialize(),
		dataType : 'json',
		success : function(data) {
			if ('1' == data.responseCode) {
				window.location.href=ctx+"/finance";
			} else {
				alert("失败，请重试");
			}
		}
	});
};
var saveImg=function(){
	var ctx=$('#ctx-id').val();
	var busiType=$('#imgBusiType').val();
	var bpk=$("#follow-bpk").val();
	//开始上传文件时显示一个图片  
	 $("#loading").ajaxStart(function() {  
	        $(this).show();  
	        $("#upload-button").hide();
	        
	    }).ajaxComplete(function() {  
	        $(this).hide();  
	        $("#upload-button").show();
	    });//文件上传完成将图片隐藏起来  
	
	  $.ajaxFileUpload( {  
	        url : ctx+"/cars/img-upload?busiType="+busiType+"&bPK="+bpk,//用于文件上传的服务器端请求地址  
	        secureuri : false,//一般设置为false  
	        fileElementId : 'car_img',//文件上传控件的id属性  
	        dataType : 'json',//返回值类型 一般设置为json  
	        success : function(data) //服务器成功响应处理函数  
	        {  
	        	if(data.responseCode=='1'){
	        		$.each(data.data, function(i, item) {
						$("#img-curr-upload").prepend(
								"<li id='"+item.id+"' class='thumbnail'>"+
								"<span class='div-img-back'>"+
								"<span onclick='imgDel(\""+item.id+"\")' class='div-img-del'>删&nbsp;除</span>"+
								"</span>"+
								"<a style='background:url("+ctx+item.thumbUrl+")' title='"+item.old_name+"'"+ 
								"href='"+ ctx+item.url+"'><img style='width:100px;height:100px;' class='grayscale' src='"+ ctx+item.thumbUrl+"' alt='"+item.old_name+"'></a></li>"
						);
					});
	        		 $("#img-curr-upload").html();
	        	}else{
	        		alert(data.responseMessage);//从服务器返回的json中取出message中的数据,其中message为在struts2中定义的成员变量
	        	}
	        }
	    });  
};
//删除图片
var imgDel=function(id){
	var ctx=$('#ctx-id').val();
	$.ajax({
		url : ctx+"/cars/img-del",
		type : 'POST',
		data : 'img_id='+id,
		dataType : 'json',
		success : function(data) {
			if ('1' == data.responseCode) {
				 $("#"+id).hide();
			} else {
				alert("删除图片失败，请重试");
			}
		}
	});
};

