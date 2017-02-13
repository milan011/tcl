-(function ($) {
    var bannerSlider,//banner轮播图
        sliderItems = [],//banner轮播图项
        currentIndex = 0,//当前轮播图下标
        sliderInterval,//轮播图循环对象
        sliderControls//轮播图控制器
        ;

    /**
     * 页面初始化
     * */
    function init() {
        bannerSlider = $("#bannerSlider");
        sliderControls = bannerSlider.find(".sliderControl").find(".item");
        initSlider(bannerSlider);
        registEvent();
    }

    /**
     * 事件注册
     * */
    function registEvent() {
        sliderControls.on("click", sliderControlClickHandle);
    }

    /***
     * 初始化轮播图
     * */
    function initSlider(el) {
        var sliderItemEl = $(el).find(".sliderItem");
        for (var i = 0; i < sliderItemEl.length; i++) {
            var slidItem = {};
            slidItem.el = $(sliderItemEl[i]);
            slidItem.bgColor = slidItem.el.attr("bgColor");
            sliderItems.push(slidItem);
        }
        sliderInterval = setInterval(sliderChangeEvent, 5000);
    }

    /**
     * 轮播图变更定时事件
     * */
    function sliderChangeEvent(index) {
        sliderItems[currentIndex].el.removeClass("active");
        sliderControls.eq(currentIndex).removeClass("active");
        if (0 != index) {
            index = index || ++currentIndex;
        }
        currentIndex = index < sliderItems.length ? index : 0;
        sliderItems[currentIndex].el.addClass("active");
        sliderControls.eq(currentIndex).addClass("active");
        bannerSlider.css({"background": sliderItems[currentIndex].bgColor || "#fff"});
    }

    /**
     * 轮播图控制器单击监听
     * */
    function sliderControlClickHandle() {
        clearInterval(sliderInterval);
        var me = $(this);
        sliderChangeEvent(me.index());
        sliderInterval = setInterval(sliderChangeEvent, 5000);
    }

    $(init);

})(jQuery);