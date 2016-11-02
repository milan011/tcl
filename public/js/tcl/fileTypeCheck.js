String.prototype.trim = function() {
	return (this.replace(/^\s+|\s+$/g,""));
};

function xlsTypeCheck(filepath)
{
	//为了避免转义反斜杠出问题，这里将对其进行转换
	var re = /(\\+)/g;  
	var filename=filepath.replace(re,"#"); 
	//对路径字符串进行剪切截取
	var one=filename.split("#"); 
	//获取数组中最后一个，即文件名
	var two=one[one.length-1]; 
	//再对文件名进行截取，以取得后缀名
	var three=two.split("."); 
	 //获取截取的最后一个字符串，即为后缀名
	var last=three[three.length-1];
	//替换为统一小写
	var last_str = last.toLowerCase();
	//添加需要判断的后缀名类型
	var tp ="xls"; 
	//返回符合条件的后缀名在字符串中的位置
	var rs=tp.indexOf(last_str); 
	//如果返回的结果大于或等于0，说明包含允许上传的文件类型
	if(rs<0){
		 return false;
	  }
	return true;
}

function fileTypeCheck(filepath,fileSuffix)
{
	//为了避免转义反斜杠出问题，这里将对其进行转换
	var re = /(\\+)/g;  
	var filename=filepath.replace(re,"#"); 
	//对路径字符串进行剪切截取
	var one=filename.split("#"); 
	//获取数组中最后一个，即文件名
	var two=one[one.length-1]; 
	//再对文件名进行截取，以取得后缀名
	var three=two.split("."); 
	 //获取截取的最后一个字符串，即为后缀名
	var last=three[three.length-1];
	var last_str = last.toLowerCase();
	//添加需要判断的后缀名类型
	var tp = fileSuffix.toLowerCase();
	//返回符合条件的后缀名在字符串中的位置
	var rs = tp.indexOf(last_str); 
	//如果返回的结果大于或等于0，说明包含允许上传的文件类型
	if(rs<0){
		 return false;
	  }
	return true;
}

function imgTypeCheck(filepath)
{
	//为了避免转义反斜杠出问题，这里将对其进行转换
	var re = /(\\+)/g;  
	var filename=filepath.replace(re,"#"); 
	//对路径字符串进行剪切截取
	var one=filename.split("#"); 
	//获取数组中最后一个，即文件名
	var two=one[one.length-1]; 
	//再对文件名进行截取，以取得后缀名
	var three=two.split("."); 
	 //获取截取的最后一个字符串，即为后缀名
	var last=three[three.length-1];
	var last_str = last.toLowerCase();
	//添加需要判断的后缀名类型
	var tp ="png,jpg,jpeg"; 
	//返回符合条件的后缀名在字符串中的位置
	var rs=tp.indexOf(last_str); 
	//如果返回的结果大于或等于0，说明包含允许上传的文件类型
	if(rs<0){
		 return false;
	  }
	return true;
}
