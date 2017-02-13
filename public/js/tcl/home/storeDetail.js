+(function ($) {
    var moreBrand,
        brandList,
        translationalSlider,
        translationalSliderContainer,
        translationalSliderControl,
        translationalSliderCurrentIndex;

    function init() {
        moreBrand = $(".moreBrands");
        brandList = $(".brandList");
        translationalSlider = $(".translationalSlider");
        translationalSliderContainer = $(".translationalSlider .sliderContainer");
        translationalSliderControl = $(".translationalSlider .sliderControl .item");
        initSlideContainer(translationalSliderContainer);
        regeditEvent();
    }

    function regeditEvent() {
        moreBrand.on("click", moreBrandClickHandle);
        translationalSliderControl.on("click", scrollControlClickHandle);
        $(window).on("click", windowClickHandle);
    }

    function moreBrandClickHandle() {
        var check = moreBrand.hasClass("active");
        moreBrand.toggleClass("active");
        brandList.toggleClass("active");
    }

    function windowClickHandle(e) {
        if (e.target != moreBrand[0] && $(e.target).parents(".brandList").length == 0) {
            moreBrand.removeClass("active");
            brandList.removeClass("active");
        }
    }

    function initSlideContainer(containers) {
        for (var i = 0; i < containers.length; i++) {
            var item = $(containers[i]);
            item.append(item.find(":eq(0)").clone(true, true));
            setInterval(intervalSliderScroll(item), 5000);
        }
    }

    function scrollControlClickHandle() {
        var me = $(this);
        var container = me.parents(".translationalSlider").find(".sliderContainer");
        var dir = me.hasClass("left") ? "left" : me.hasClass("right") ? "right" : "";
        translationalSliderScroll(container, dir);
    }

    function translationalSliderScroll(container, dir) {
        var scrollWidth = container[0].scrollWidth;
        var containerWidth = container.width();
        var maxScroll = scrollWidth - containerWidth;
        var scroll = containerWidth * (dir == "left" ? -1 : 1);

        if (container.scrollLeft() == 0 && scroll < 0) {
            container.scrollLeft(maxScroll);
        }
        container.animate({
            scrollLeft: container.scrollLeft() + scroll
        }, 500, "swing", scrollCallBack);
    }

    function intervalSliderScroll(container) {
        return function () {
            translationalSliderScroll(container, "right");
        }
    }

    function scrollCallBack() {
        var me = $(this);
        var maxScroll = this.scrollWidth - me.width();
        if (this.scrollLeft == maxScroll) {
            this.scrollLeft = 0;
        }
    }

    $(init);
})(jQuery);