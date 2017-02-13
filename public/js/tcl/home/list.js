+(function ($) {

    var tagMoreBtn,
        brandTags,
        brandPanels = {},
        brandActivePanel;

    function init() {
        tagMoreBtn = $(".tagRow .more");
        brandTags = $(".brandKinds .kindTag .item");
        brandActivePanel = $(".brands .brandPanel.active");
        var brandPanel = $(".brands .brandPanel");
        for (var i = 0; i < brandPanel.length; i++) {
            var item = $(brandPanel[i]);
            brandPanels[item.attr("id")] = item;
        }
        registEvent();
    }

    function registEvent() {
        tagMoreBtn.on("click", tagMoreClickHandle);
        brandTags.on("mouseenter", brandTagMouseEnterHandle);
    }

    /**
     * 检索标签更多按钮单击事件
     * */
    function tagMoreClickHandle() {
        var me = $(this);
        var row = me.parent();
        var tagArea = row.find(".tags");
        var height = row.hasClass("active") ? "22px" : tagArea[0].scrollHeight;
        var text = row.hasClass("active") ? "更多" : "收起";
        row.toggleClass("active");
        tagArea.animate({height: height}, 500, "swing", animateCallBack);
        me.html(text);
        function animateCallBack() {
            if (row.hasClass("active")) {
                tagArea.css({height: "auto"});
            }
        }
    }

    function brandTagMouseEnterHandle() {
        var me = $(this);
        if (brandActivePanel) {
            brandActivePanel.removeClass("active");
        }
        var tmpPanel = brandPanels["brandPanel" + me.attr("target")];
        if (tmpPanel) {
            tmpPanel.addClass("active");
            brandActivePanel = tmpPanel;
        }

    }

    $(init);

})(jQuery);