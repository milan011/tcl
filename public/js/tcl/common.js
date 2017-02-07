/*淘车乐后台管理系统通用辅助js*/

/* 根据上牌日期自动生成到检日期及保险到期日期
/* 小型、微型非营运载客汽车6年以内每2年检验1次;超过6年的，每年检验1次
**/

function checkCarDate(){
	var input_date   = $('#plate_date').val();//输入的日期
	var plate_end    = $('#plate_end');//检车日期
	var safe_end     = $('#safe_end');//保险日期
	var input_date   = $('#plate_date').val();//输入的日期
	var date_ifno    = []; //输入日期信息初始赋值
	var now_date     = new Date(); //当前日期
	var now_year     = now_date.getFullYear(); //当前年
	var now_month    = now_date.getMonth() + 1; //当前月
	var difference   = ''; //输入日期与当前日期差
	var next_check   = ''; //下次检查日期
	var next_baoxian = ''; //保险到期

	date_info = input_date.split('-');
	date_year  = date_info[0]; //输入的年份
	date_month = date_info[1]; //输入的月份

	// 输入日期是否在6年内
	if((now_month - date_month) >= 0 ){
		//输入的月份小于当前月
		difference = now_year - date_year;
	}else{
		//输入的月份大于当前月
		difference = (now_year -1) - date_year;
	}

	if(difference <= 6 ){
		//上牌日期在六年之内,每两年检车一次
		if(difference < 0 ){
			alert('上牌日期不能在当前日期之前');
			plate_end.val('');
			safe_end.val('');
			return false;
		}

		//当年是否该检车
		// alert((now_year - date_year)%2);
		if((now_year - date_year)%2 == 1){
			//下一年检车
			next_check = (now_year+1) + '-' + date_month;
		}else{
			// 今年检车
			if((now_month - date_month) >= 0){
			    //输入的月份小于当前月
				next_check = (now_year+2) + '-' + date_month;
			}else{
			    //输入的月份大于当前月
				next_check = now_year + '-' + date_month;
			}
		}

		// alert('上牌日期在六年之内');
	}else{
		// 上牌日期早于六年,每年检车,若输入的月份大于当前月,下次检车则为当前年的输入月份,否则为下一年的输入月份
		if((now_month - date_month) >= 0){
			//输入的月份小于当前月
			next_check = (now_year+1) + '-' + date_month;
		}else{
			//输入的月份大于当前月
			next_check = now_year + '-' + date_month;
		}
		// alert('上牌日期早于六年');
	}

	//保险到期日期
	if((now_month - date_month) >= 0){
		//输入的月份小于当前月
		next_baoxian = (now_year+1) + '-' + date_month;
	}else{
		//输入的月份大于当前月
		next_baoxian = now_year + '-' + date_month;
	}

	/*alert(next_check);
	alert(next_baoxian);*/

	plate_end.val(next_check);
	safe_end.val(next_baoxian);
}