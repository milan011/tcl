// JavaScript Document
$(function(){
		//banner
		$(function(){
			
		function focusSlide(obj){
			var Index=0;
			var timer = null;
			var oImg = obj + " img";
			silde();
			function silde(){
				$(oImg).eq(Index).fadeOut("slow");
				Index++;
				if(Index>2){
					Index=0;				
				}
				
				$(oImg).eq(Index).fadeIn("slow");
			};
			
			timer = setInterval(silde , 3000);
			
			$(obj).hover(function(){
				clearInterval(timer);
			},function(){
				timer = setInterval(silde , 3000);
			})
		}
		
		focusSlide(".LindexBanner_Roll");
		focusSlide(".Service_Banner");		
	});
		
		$(function(){
			//var url=window.location.href;
			//var host=window.location.host;
			//var port=window.location.port;
			//var protocol=window.location.protocol;
			var pathname=window.location.pathname;
			$(".clearfix li").removeClass();
			$(".clearfix li").each(function(){
				var href=$(this).children("a").attr("href");
				if($(this).attr("id")=="li-first"){
					if(pathname==href){
						$(this).addClass("TOP_NavAct");
					}
				}else{
					if(pathname.indexOf(href)>-1){
						$(this).addClass("TOP_NavAct");
					}else{
						if(pathname.indexOf('car/')>-1&&href.indexOf('buy')>-1){
							$(this).addClass("TOP_NavAct");
						}
					}
				}
			});
		});
	
		//切换城市
		$(".TOPadress_Main").hide();
        $(".TOP_AdressText").click(function () {
            $(".TOPadress_Main").toggle();
        });
        $(".TOPadress_Main a").click(function () {
            var nav = $(this).attr("title");
            $(".TOP_AdressText span").text(nav);
            $(".TOPadress_Main").hide();
        });
		//买车界面
		//清除条件
		$(".BuyChoice_Clear").click(function(){
			$(this).parents(".BuyChoice_title").children("span").hide();
		});
		$(".BuyChoice_title span a").click(function(){
			$(this).parent().hide();
		});
		$(".Buymore_Main").hide();
		$(".Buymore_List em span").click(function(){
			$(this).siblings(".Buymore_Main").toggle();
		});
		$(".Buymore_List em a").click(function(){
			var buyNav = $(this).attr("title");
            $(this).parent(".Buymore_Main").siblings("span").text(buyNav);
            $(this).parent(".Buymore_Main").hide();
			});
		//条件list更多
		$(".BuyChoice_More a").click(function(){
			$(this).parents("li").toggleClass("BuyChoice_Height");			
		});
		
		
		$("#keywords").blur(function(){
			var v=$(this).val();
			if(v==''){
				$(this).val("请输入车辆名称");
				$(this).css("color","#7d7d7d");
			}
			
		});
		$("#keywords").focus(function(){
			var v=$(this).val();
			if(v=='请输入车辆名称'){
				$(this).val("");
				$(this).css("color","#333");
			}
			
		});
		
		
		
	
});
