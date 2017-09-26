+(function ($) {

    var comboEls,//下拉框
        activityCombo,//展开的下拉框
        modalControls,//弹窗控制按钮
        modalClose,//窗体关闭按钮
        overLay,//遮罩
        activeModal,//当前激活的窗体
        inputEls
        ;

    function init() {
        comboEls = $(".combo");
        modalControls = $(".modalControl");
        overLay = $(".overlay");
        inputEls = $("input");
        modalClose=$(".modalClose");
        regeditEvent();
    }

    function regeditEvent() {
        comboEls.on("click", comboClickHandle);
        comboEls.delegate("li", "click", comboItemClickHandle);
        if (modalControls.length > 0) {
            modalControls.on("click", modelControlClickHandle);
        }
        if (overLay.length > 0) {
            overLay.on("click", overlayClickHandle);
        }
        if(modalClose.length>0){
            modalClose.on("click",modalCloseClickHandle);
        }
        if (inputEls.length > 0 && document.createElement("input").placeholder == undefined) {
            inputEls.on("focus", inputFocusHandle).on("blur", inputBlurHandle);
            for (var i = 0; i < inputEls.length; i++) {
                var item = $(inputEls[i]);
                if(item.val()==""){
                    item.val(item.attr("placeholder"));
                }
            }
        }
        $(window).on("click", windowClickHandle);
    }

    /**
     * 下拉框单击监听
     * */
    function comboClickHandle(e) {
        var me = $(this);
        me.toggleClass("active");
        if (activityCombo && activityCombo[0] == this) {
            closeCombo();
        } else {
            closeCombo();
            activityCombo = me;
        }
        e.stopPropagation();
    }

    /**
     * 下拉列表元素单击监听
     * */
    function comboItemClickHandle(e) {
        e.stopPropagation();
        var me = $(this);
        var valueInput = activityCombo.find("input");
        var text = activityCombo.find(".text");
        valueInput.val(me.attr("value"));
        valueInput.change();
        text.html(me.html());
        closeCombo();
    }

    /**
     * 下拉框关闭
     * */
    function closeCombo() {
        if (activityCombo) {
            activityCombo.removeClass("active");
            activityCombo = null;
        }
    }

    /***
     * 窗体单击事件
     * */
    function windowClickHandle() {
        closeCombo();
    }

    /**
     * 窗体打开单击
     * */
    function modelControlClickHandle() {
        var me = $(this);
        var modal = $(me.attr("target"));
        if (modal.length > 0) {
            modal.fadeIn();
            overLay.fadeIn();
            activeModal = modal;
        }
    }

    /**
     * 窗体关闭按钮单击事件
     * */
    function modalCloseClickHandle(){
        var me=$(this);
        var modal = $(me.attr("target"));
        if (modal.length > 0) {
            modal.fadeOut();
            overLay.fadeOut();
            activeModal = null;
        }
    }

    /***
     * 遮罩单击事件
     * */
    function overlayClickHandle() {
        overLay.fadeOut();
        activeModal.fadeOut();
    }

    function inputFocusHandle() {
        var me=$(this);
        if(me.val()==me.attr("placeholder")) {
            me.val("");
        }
    }

    function inputBlurHandle() {
        var me=$(this);
        if(me.val()==""){
            me.val(me.attr("placeholder"));
        }
    }

    //收藏
    window.AddFavorite=function (title, url) {
        try {
            window.external.addFavorite(url, title);
        }
        catch (e) {
            try {
                window.sidebar.addPanel(title, url, "");
            }
            catch (e) {
                alert("抱歉，您所使用的浏览器无法完成此操作。\n\n加入收藏失败，请进入新网站后使用Ctrl+D进行添加");
            }
        }
    }

    $(init);

    $.fn.hoverDelay = function(options) {
            var defaults = {
                hoverDuring: 1000,
                outDuring: 1000,
                hoverEvent: function() {
                    $.noop();
                },
                outEvent: function() {
                    $.noop();
                }
            };
            var sets = $.extend(defaults, options || {});
            var hoverTimer, outTimer;
            return $(this).each(function() {
                $(this).hover(function() {
                    clearTimeout(outTimer);
                    hoverTimer = setTimeout(sets.hoverEvent, sets.hoverDuring);
                },
                function() {
                    clearTimeout(hoverTimer);
                    outTimer = setTimeout(sets.outEvent, sets.outDuring);
                });
            });
        }

})(jQuery);