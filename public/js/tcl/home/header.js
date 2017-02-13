-(function ($) {
    var sheet = createStyleSheet(),//新建的css样式表
        cityControlArea,//地区事件区域
        cityListArea//城市列表区域
        ;

    /**
     * 页面初始化
     * */
    function init() {
        cityListArea = $(".cityListArea");
        cityControlArea=$(".cityArea");
        changeAreaListStyleHeight();
        registEvent();
    }

    /**
     * 事件注册
     * */
    function registEvent() {
        cityControlArea.on("mouseenter",cityControlAreaEnter).on("mouseleave",cityControlAreaLeave);
    }

    /**
     * 地区高度设置
     * */
    function changeAreaListStyleHeight() {
        addCssRule(".top .cityArea.active .cityListArea", "height:" + (cityListArea[0].scrollHeight) + "px");
    }

    /**
     * 创建样式表
     * */
    function createStyleSheet() {
        var head = document.head || document.getElementsByTagName('head')[0];
        var style = document.createElement('style');
        style.type = 'text/css';
        head.appendChild(style);
        return style.sheet || style.styleSheet;
    }

    /**
     * 添加样式
     * */
    function addCssRule(selector, rules, index) {
        index = index || 0;
        if (sheet.insertRule) {
            sheet.insertRule(selector + "{" + rules + "}", index);
        } else if (sheet.addRule) {
            sheet.addRule(selector, rules, index);
        }
    }

    function cityControlAreaEnter(e){
        $(this).toggleClass("active");
    }

    function cityControlAreaLeave(){
        $(this).removeClass("active");
    }

    $(init);

})(jQuery);