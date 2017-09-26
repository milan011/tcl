! function(t) {
    function i(n) { if (e[n]) return e[n].exports; var o = e[n] = { exports: {}, id: n, loaded: !1 }; return t[n].call(o.exports, o, o.exports, i), o.loaded = !0, o.exports } var e = {}; return i.m = t, i.c = e, i.p = "//sta.guazistatic.com/c2c_wap/", i(0) }([function(t, i, e) { e(211), e(95); var n = e(10),
        o = e(237),
        a = e(24),
        r = e(63),
        c = e(172);
    e(13), $(function() { e(5).init(), e(7).init(), n.showTopAppLayer("detail_app_top_layer"), n.cancelAppPub.setEl(".js-sub-app-pub"); var t = $("#listCarIds").val(),
            i = $("#listFilter").val(),
            o = { tracking_type: "show", eventid: "1111000000000002", carids: t };
        i && "" != i && (o = $.extend(o, JSON.parse(i))), window.tracker.send(o), $("body").on("touchmove", function(t) { t.stopPropagation() }); var a = window.location.pathname; if ("/" == a.charAt(a.length - 1) ? (a = a.substring(0, a.length - 1), localStorageSubstitute.setItem("listUrl", a + "?ifid=from_wap_shouyebuy")) : localStorageSubstitute.setItem("listUrl", a + "?ifid=from_wap_shouyebuy"), e(18), $(".subscribe-form").length) { var r = ["_trackEvent", "wap_list_sub", "show", "wap_list_sub_noresult_s"];
            window._hmt.push(r) } }), $(function() { $(".range-box").each(function(t, i) { o.slider.setEl(i) }) }), $(function() { var t = function() { return !1 };
        $(".line-list").on("click", ".savetodesk", function() { $("body").scrollTop($("body").scrollTop() - 1), $("#maskList1").addClass("active"), $(".poptips01").addClass("active"), $("body").on("touchmove", t) }), $("#maskList1").click(function() { $("#maskList1").removeClass("active"), $(".poptips01").removeClass("active"), $("body").unbind("touchmove", t) }), $(".poptips01").click(function() { $("#maskList1").removeClass("active"), $(".poptips01").removeClass("active"), $("body").unbind("touchmove", t) }) }), n.backToTop.setEl(".icon-totop"), o.lazyLoad.setEl(".js-list-page"), $(function() { $(".slider").each(function(t, i) { $(i).attr("data-slider", "1"), a.slideBanner.setEl(i) }) }), o.storageHistory.setEl(".js-list-page"), o.initListPage.setEl(".js-list-page"), o.sildeShowHead.setEl(".js-list-page"), o.slideAdd.setEl(".js-list-page"), o.singleItem.setEl(".filter"), o.multiOption.setEl(".js-choose-option"), o.selectCity.setEl(".city-wrap"), o.selectBrand.setEl(".brand-wrap"), o.showSearch.setEl(".tsearch"), r.search.setEl("#search_list"), r.aboutHistory.setEl("#search_history"), o.oneKeySub.setEl(".subscribe"), c.subInit.setEl(".subscribe-form"), o.disDownloadApp.setEl(".usericon"), o.bangWoZhaoChe.setEl(".option"), o.addJrPic.setEl(".j-jrAdUrl"), o.checkBaoMai.setEl(".j-check-bao-mai"), Widget.initWidgets([n.backToTop, o.lazyLoad, o.storageHistory, o.initListPage, o.slideAdd, a.slideBanner, o.slider, o.singleItem, o.multiOption, o.selectCity, o.selectBrand, o.sildeShowHead, o.showSearch, r.search, r.aboutHistory, o.oneKeySub, o.disDownloadApp, n.cancelAppPub, c.subInit, o.bangWoZhaoChe, o.addJrPic, o.checkBaoMai]) }, function(t, i) { t.exports = function() { var t = []; return t.toString = function() { for (var t = [], i = 0; i < this.length; i++) { var e = this[i];
                e[2] ? t.push("@media " + e[2] + "{" + e[1] + "}") : t.push(e[1]) } return t.join("") }, t.i = function(i, e) { "string" == typeof i && (i = [
                [null, i, ""]
            ]); for (var n = {}, o = 0; o < this.length; o++) { var a = this[o][0]; "number" == typeof a && (n[a] = !0) } for (o = 0; o < i.length; o++) { var r = i[o]; "number" == typeof r[0] && n[r[0]] || (e && !r[2] ? r[2] = e : e && (r[2] = "(" + r[2] + ") and (" + e + ")"), t.push(r)) } }, t } }, function(t, i, e) {
    function n(t, i) { for (var e = 0; e < t.length; e++) { var n = t[e],
                o = h[n.id]; if (o) { o.refs++; for (var a = 0; a < o.parts.length; a++) o.parts[a](n.parts[a]); for (; a < n.parts.length; a++) o.parts.push(l(n.parts[a], i)) } else { for (var r = [], a = 0; a < n.parts.length; a++) r.push(l(n.parts[a], i));
                h[n.id] = { id: n.id, refs: 1, parts: r } } } }

    function o(t) { for (var i = [], e = {}, n = 0; n < t.length; n++) { var o = t[n],
                a = o[0],
                r = o[1],
                c = o[2],
                s = o[3],
                l = { css: r, media: c, sourceMap: s };
            e[a] ? e[a].parts.push(l) : i.push(e[a] = { id: a, parts: [l] }) } return i }

    function a(t, i) { var e = m(),
            n = v[v.length - 1]; if ("top" === t.insertAt) n ? n.nextSibling ? e.insertBefore(i, n.nextSibling) : e.appendChild(i) : e.insertBefore(i, e.firstChild), v.push(i);
        else { if ("bottom" !== t.insertAt) throw new Error("Invalid value for parameter 'insertAt'. Must be 'top' or 'bottom'.");
            e.appendChild(i) } }

    function r(t) { t.parentNode.removeChild(t); var i = v.indexOf(t);
        i >= 0 && v.splice(i, 1) }

    function c(t) { var i = document.createElement("style"); return i.type = "text/css", a(t, i), i }

    function s(t) { var i = document.createElement("link"); return i.rel = "stylesheet", a(t, i), i }

    function l(t, i) { var e, n, o; if (i.singleton) { var a = x++;
            e = b || (b = c(i)), n = p.bind(null, e, a, !1), o = p.bind(null, e, a, !0) } else t.sourceMap && "function" == typeof URL && "function" == typeof URL.createObjectURL && "function" == typeof URL.revokeObjectURL && "function" == typeof Blob && "function" == typeof btoa ? (e = s(i), n = u.bind(null, e), o = function() { r(e), e.href && URL.revokeObjectURL(e.href) }) : (e = c(i), n = d.bind(null, e), o = function() { r(e) }); return n(t),
            function(i) { if (i) { if (i.css === t.css && i.media === t.media && i.sourceMap === t.sourceMap) return;
                    n(t = i) } else o() } }

    function p(t, i, e, n) { var o = e ? "" : n.css; if (t.styleSheet) t.styleSheet.cssText = w(i, o);
        else { var a = document.createTextNode(o),
                r = t.childNodes;
            r[i] && t.removeChild(r[i]), r.length ? t.insertBefore(a, r[i]) : t.appendChild(a) } }

    function d(t, i) { var e = i.css,
            n = i.media;
        i.sourceMap; if (n && t.setAttribute("media", n), t.styleSheet) t.styleSheet.cssText = e;
        else { for (; t.firstChild;) t.removeChild(t.firstChild);
            t.appendChild(document.createTextNode(e)) } }

    function u(t, i) { var e = i.css,
            n = (i.media, i.sourceMap);
        n && (e += "\n/*# sourceMappingURL=data:application/json;base64," + btoa(unescape(encodeURIComponent(JSON.stringify(n)))) + " */"); var o = new Blob([e], { type: "text/css" }),
            a = t.href;
        t.href = URL.createObjectURL(o), a && URL.revokeObjectURL(a) } var h = {},
        g = function(t) { var i; return function() { return "undefined" == typeof i && (i = t.apply(this, arguments)), i } },
        f = g(function() { return /msie [6-9]\b/.test(window.navigator.userAgent.toLowerCase()) }),
        m = g(function() { return document.head || document.getElementsByTagName("head")[0] }),
        b = null,
        x = 0,
        v = [];
    t.exports = function(t, i) { i = i || {}, "undefined" == typeof i.singleton && (i.singleton = f()), "undefined" == typeof i.insertAt && (i.insertAt = "bottom"); var e = o(t); return n(e, i),
            function(t) { for (var a = [], r = 0; r < e.length; r++) { var c = e[r],
                        s = h[c.id];
                    s.refs--, a.push(s) } if (t) { var l = o(t);
                    n(l, i) } for (var r = 0; r < a.length; r++) { var s = a[r]; if (0 === s.refs) { for (var p = 0; p < s.parts.length; p++) s.parts[p]();
                        delete h[s.id] } } } }; var w = function() { var t = []; return function(i, e) { return t[i] = e, t.filter(Boolean).join("\n") } }() }, function(t, i, e) {
    function n() { var t = p.generateUUIDV4(); return t && s.set("__utmganji_v20110909", t, { expires: 6307200, path: "/", domain: ".guazi.com" }), u.set("__utmganji_v20110909", t), t }

    function o() { return g.ifid }

    function a() { var t, i = g.ca_source,
            e = g.ca_name; return i && e && (t = { ca_source: i, ca_name: e }, s.set("cainfo", JSON.stringify(t), { path: "/", domain: ".guazi.com" })), t }

    function r(t) { return t.replace(/^\?/, "").split("&").map(function(t) { return t.split("=") }).reduce(function(t, i) { return i[0].trim() && (t[i[0]] = i[1]), t }, {}) }

    function c() { var t, i, e = window.navigator.userAgent || "",
            n = e.match(/Mozilla\/5.0 \((.*)\) AppleWebKit(.*?) .*like Gecko\)([\S]*) (.*) Safari.*/); if (!n || !n[1]) return "UNKNOW " + e; try { return i = /like Mac OS X/.test(n[1]) ? "iOS " + ((n[1].match(/([\d_]*)* like Mac OS X/) || [])[1] || "") : /Android/.test(n[1]) ? (n[1].match(/Android.*?;/) || [])[0] : "unknow", t = (n[1].match(/^(iPad[^;]*|iPhone[^;]*|iPod[^;]*)/) || n[1].match(".*;(.*)") || [])[1], t = t ? t.trim() : "", e = ["device:" + t, "os:" + i, "webkit:" + (n[2] || "").replace("/", ""), "browser:" + n[4], "lang:" + (window.navigator.language || window.navigator.browserLanguage)].join("|") } catch (o) { return "UNKNOW " + e } } var s = e(4),
        l = e(6),
        p = e(11),
        d = {},
        u = new l("tracker"); try { d = JSON.parse(s.get("GanjiUserInfo") || "{}") } catch (h) { d = {} } var g = r(window.location.search),
        f = "analytics.guazi.com",
        m = $("head").data("gjch") || "-",
        b = $("head").data("gc") || "-",
        x = s.get("__utmganji_v20110909") || u.get("__utmganji_v20110909") || n() || "-",
        v = s.get("GANJISESSID") || "-",
        w = s.get("ifid") || o() || "-",
        k = $("head").data("cainfo") || a() || s.get("cainfo") || {},
        y = d.user_id,
        z = c(),
        j = document.referrer ? encodeURIComponent(document.referrer) : "-",
        C = encodeURIComponent(k.ca_name || "-"),
        T = encodeURIComponent(k.ca_source || "-"),
        S = encodeURIComponent(k.ca_kw || "-"),
        _ = encodeURIComponent(k.ca_id || "-"),
        E = encodeURIComponent(k.ca_n || "-"),
        I = encodeURIComponent(k.ca_s || "-"),
        A = encodeURIComponent(k.ca_i || "-");
    i.listen = function() { $("body").on("tap", "[data-gjalog]", function(t) { var e, n = $(t.currentTarget).attr("data-gjalog") || "";
            (e = /^(\d*)$/.exec(n.split("@")[0])) && "1" === e[1].substr(-2)[0] ? i.send(n.replace(/\d{8}($|@)/, "00000010$1")) : n.indexOf("atype=click") !== -1 && i.send(n) }) }; var O = {};
    i.sendShow = function() { $("[data-gjalog]").each(function() { var t, e = $(this).data("gjalog"); if (!O[e])
                if (O[e] = !0, (t = /^(\d*)$/.exec(e.split("@")[0])) && "1" === t[1].substr(-1)[0]) i.send(e.replace(/\d{8}($|@)/, "00000001$1"));
                else if (e.indexOf("atype=") !== -1) { var n = e.split("atype=");
                n[1] && n[1].indexOf("show") !== -1 && i.send(e) } }) }, i.send = function(t, i) {
        function e(t) { o || (o = !0, i && i(t || null)) } var n = new Image,
            o = !1,
            a = "//" + f + "/wape.gif?";
        t = t && /^\d*$/.test(t.split("@")[0]) ? "ge=" + t : "gjalog=" + t, a += ["gjch=" + m, "gc=" + b, "uuid=" + x, "gjuser=" + y, "sid=" + v, "ca_name=" + C, "ca_source=" + T, "ca_kw=" + S, "ca_id=" + _, "ca_n=" + E, "ca_s=" + I, "ca_i=" + A, "refer=" + j, "ua=" + z, t, "ifid=" + w, "rnd=" + Math.random()].join("&"), n.onload = function() { e() }, n.onerror = function() { e(new Error("network error")) }, setTimeout(function() { e(new Error("timeout")) }, 1e4), n.src = a } }, function(t, i) {
    function e(t, i) { var e = {}; if (n(t) && t.length > 0)
            for (var o, a, c, l = i ? s : r, p = t.split(/;\s/g), d = 0, u = p.length; d < u; d++) { if (c = p[d].match(/([^=]+)=/i), c instanceof Array) try { o = s(c[1]), a = l(p[d].substring(c[1].length + 1)) } catch (h) {} else o = s(p[d]), a = "";
                o && (e[o] = a) }
        return e }

    function n(t) { return "string" == typeof t }

    function o(t) { return n(t) && "" !== t }

    function a(t) { if (!o(t)) throw new TypeError("Cookie name must be a non-empty string") }

    function r(t) { return t } var c = i,
        s = decodeURIComponent,
        l = encodeURIComponent;
    c.get = function(t, i) { a(t), i = "function" == typeof i ? { converter: i } : i || {}; var n = e(document.cookie, !i.raw); return (i.converter || r)(n[t]) }, c.set = function(t, i, e) { a(t), e = e || {}; var n = e.expires,
            r = e.domain,
            c = e.path;
        e.raw || (i = l(String(i))); var s = t + "=" + i,
            p = n; return "number" == typeof p && (p = new Date(Date.now() + 1e3 * n)), p instanceof Date && (s += "; expires=" + p.toGMTString()), o(r) && (s += "; domain=" + r), o(c) && (s += "; path=" + c), e.secure && (s += "; secure"), document.cookie = s, s }, c.remove = function(t, i) { return i = i || {}, i.expires = new Date(0), this.set(t, "", i) } }, function(t, i) { i.init = function() { var t = $("[baidu_alog]");
        t.each(function() { var t = $(this);
            $.each(t.attr("baidu_alog").split("#"), function(i, e) { var n = ["_trackEvent"].concat(e.split("&"));
                t.unbind(n[2]).bind(n[2], function() { window._hmt.push(n) }) }) }) } }, function(t, i) {
    function e(t) { this.namespace = t } var n = window.GJLocalStorage || window.localStorage;
    e.prototype.set = function(t, i) { var e = this.dump();
        e[t] = { value: i }, e = JSON.stringify(e); try { n.setItem(this.namespace, e) } catch (o) { return !1 } return n.getItem(this.namespace) === e }, e.prototype.get = function(t) { var i = this.dump(); if (i[t]) return i[t].value }, e.prototype.remove = function(t) { this.set(t, void 0) }, e.prototype.clear = function() { n.removeItem(this.namespace) }, e.prototype.dump = function() { var t = n.getItem(this.namespace) || "{}"; try { t = JSON.parse(t) } catch (i) { t = {} } return t }, t.exports = e }, function(t, i, e) { var n = e(3);
    i.init = function() { n.listen(); var t = function(t) { var i, e = new RegExp("(^| )" + t + "=([^;]*)(;|$)"); return (i = document.cookie.match(e)) ? unescape(i[2]) : null },
            i = $("[guazi_alog]"),
            o = e(3),
            a = t("gzCityDomain");
        i.each(function() { var t = $(this);
            $.each(t.attr("guazi_alog").split("#"), function(i, e) { var n = e.split("&"),
                    r = n[1] ? n[1] : "click";
                t.unbind(r).bind(r, function() { o.send("&city=" + a + "&geid=" + n[0], "") }) }) }) } }, function(t, i) {
    function e() { var t = "widget" + ++c; return r[t] = { defer: $.Deferred() }, t }

    function n(t) { $(function() { $.each(t.elements.slice(t.elength), function(i, n) { var o = $(n); if (o[0]) { var a = o.data(),
                        c = {},
                        s = o.data("widget-id");
                    s || (s = e(), o.data("widget-id", s)), a.$el = o, o.find("[data-role]").each(function() { var t = $(this).data("role");
                        c[t] || (c[t] = []), c[t].push(this) }), $.each(c, function(t, i) { a["$" + t] = $(i) }); var l = new t(a);
                    o.data("widget", l), t.elength++, r[s].instance = l, r[s].defer.resolve(l) } }) }) }

    function o(t, i, e) { t = $(t), $.each(i, function(i, n) { var o = i.indexOf(" "),
                a = o === -1 ? i : i.substr(0, o),
                r = o === -1 ? "" : i.substr(o, i.length - 1);
            n && (n = "function" == typeof n ? $.proxy(n, e) : $.proxy(e[n], e), r ? t.on(a, r, n) : t.on(a, n)) }) } var a = i,
        r = {},
        c = 0;
    a.ready = function(t, i) { "string" == typeof t && (t = [t]); var n = [].reduce.call(t, function(t, i) { var n = $(i),
                o = null; return 1 === n.size() ? (n.data("widget-id") || n.data("widget-id", e()), o = r[n.data("widget-id")].defer.promise()) : n.size() >= 1 ? (o = $.Deferred(), a.ready(n, function() { o.resolve([].slice.call(arguments)) })) : (o = $.Deferred(), o.reject(null)), t.push(o), t }, []);
        $.when.apply($, n).done(function() { i.apply(window, arguments) }) }, a.initWidgets = function(t) { $.each(t, function(t, i) { a.initWidget(i) }) }, a.initWidget = function(t) { n(t) }, a.define = function(t) {
        function i(i) { var e = $.extend({}, t); return $(i.$el).length && e.events && o(i.$el, e.events, e), e.init(i), e } return t = t || {}, t.events = t.events || {}, t.init = t.init || function(t) { this.config = t }, i.elength = 0, i.elements = [], i.setEl = function(t) { if (!t) throw new Error("type Error"); return $.isArray(t) ? i.elements = i.elements.concat(t) : i.elements.push(t), i.elements }, i.extend = function(i) { return i = $.extend({}, t, i), i.super_ = $.extend({}, t), i.events = $.extend({}, t.events, i.events), a.define(i) }, i.init = function(t) { this.setEl(t), n(this) }, i.define = $.extend({}, t), i } }, function(t, i) { t.exports = Widget.define({ events: { touchstart: "stop", touchend: "loop", 'click [data-role="prev"]': "prev", 'click [data-role="next"]': "next" }, init: function(t) { t.interval = t.interval || 1e3, this.config = t, this.index = 0, this.total = $(t.$item).length, this.loop() }, prev: function() { this.slideTo(this.index - 1, "prev") }, next: function() { this.slideTo(this.index + 1, "next") }, stop: function() { clearInterval(this.timer) }, loop: function() { if ("noloop" !== this.config.loop) { var t = this;
                clearInterval(this.timer), this.timer = setInterval(function() { t.loopFn() }, this.config.interval) } }, slideTo: function(t, i) { var e = this; if (!e.animating) { t = t >= this.total ? 0 : t, t = t < 0 ? this.total - 1 : t; var n = this.slideFn(t, i);
                n ? (this.animating = !0, n.always(function() { e.index = t, e.animating = !1 })) : this.index = t } }, loopFn: function() { this.slideTo(this.index + 1, "next") } }) }, function(t, i, e) { i.init = function() { i.responseTouchState(), Widget.initWidgets(), e(27).async("js/util/tracker.js", function(t) { t.listen(), window.cproStyleApi || t.send("/uniontgm/baidu/no_ad") }) }, i.header = Widget.define({ init: function(t) { var i = $(t.$el);
                this.originTop = i.offset().top, this.check = this.check.bind(this), this.listen() }, fixed: function() { this.isFixed || $("body").addClass("header-fixed"), this.isFixed = !0 }, unfixed: function() { this.isFixed && $("body").removeClass("header-fixed"), this.isFixed = !1 }, listen: function(t) { t || this.check(), $(window).on("scroll", this.check) }, stopListening: function() { $(window).off("scroll", this.check) }, check: function() { $(window).scrollTop() > this.originTop ? this.fixed() : this.unfixed() } }), i.backToTop = Widget.define({ init: function(t) { $(window).on("scroll", function() { $(window).scrollTop() > window.innerHeight ? (t.$el.show(), t.$el.addClass("active")) : (t.$el.hide(), t.$el.removeClass("active")) }), t.$el.on("click", function() { var t = $(window).scrollTop(),
                        i = parseInt(t / 20, 10);
                    setTimeout(function() { var e = 1,
                            n = setInterval(function() { var n = t - e * i;
                                n <= 0 ? $(window).scrollTop(0) : $(window).scrollTop(n), e++ }, 5);
                        setTimeout(function() { clearInterval(n), $(window).scrollTop(0) }, 150) }, 300) }) } }), i.responseTouchState = function() { $("body").on("touchstart", "a, .js-touch-state", function() { $(this).addClass("touch") }).on("touchmove", "a, .js-touch-state", function() { $(this).removeClass("touch") }).on("touchend", "a, .js-touch-state", function() { $(this).removeClass("touch") }).on("touchcancel", "a, .js-touch-state", function() { $(this).removeClass("touch") }) }, i.showAppPub = function(t, i) { var e = new Date,
                n = "" + e.getFullYear() + e.getMonth() + e.getDate(),
                o = 1,
                a = new RegExp("[0-9]+$"),
                r = localStorageSubstitute.getItem(t);
            r && r.indexOf(n) > -1 ? (o = parseInt(a.exec(r)) + 1, localStorageSubstitute.setItem(t, n + "#" + o), i > 0 && o == i && 1 == $("#maskEl").length && $("#maskEl").is(":hidden") && 1 == $("#app-pub").length && setTimeout(function() { $("#maskEl").css("z-index", 100).addClass("active"), $("#app-pub").addClass("active") }, 1e3)) : localStorageSubstitute.setItem(t, n + "#" + o), $("#maskEl").click(function() { return $("#maskEl").css("z-index", 99).removeClass("active"), $("#app-pub").removeClass("active"), !1 }), $("#app-pub .close-btn").click(function() { $("#maskEl").css("z-index", 99).removeClass("active"), $("#app-pub").removeClass("active") }), $("#app-pub .btn-app").click(function() { $("#maskEl").css("z-index", 99).removeClass("active"), $("#app-pub").removeClass("active"), appurl = $(this).attr("data-url"), window.location.href = appurl }) }, i.cancelAppPub = Widget.define({ init: function() { $("#maskEl").click(function() { return $("#maskEl").removeClass("active"), $(".js-sub-app-show").removeClass("active"), $(".js-sub-app-show-new").removeClass("active"), $("body").css("overflow", ""), !1 }), $(".js-sub-app-pub .close-btn").click(function() { $("#maskEl").removeClass("active"), $(".js-sub-app-show").removeClass("active"), $(".js-sub-app-show-new").removeClass("active"), $("body").css("overflow", "") }), $(".js-sub-app-pub .btn-app").click(function() { $("#maskEl").removeClass("active"), $(".js-sub-app-show").removeClass("active"), $(".js-sub-app-show-new").removeClass("active"), $("body").css("overflow", ""), appurl = $(this).attr("data-url"), window.location.href = appurl }) } }), i.showTopAppLayer = function(t) { if ($("#top-app-layer").length < 1) return !1; var i = new Date,
                e = "" + i.getFullYear() + i.getMonth() + i.getDate(),
                n = localStorageSubstitute.getItem(t);
            n && n.indexOf(e) != -1 ? ($("#top-app-layer").remove(), $("#top-app-layer").removeClass("active"), $("body").removeClass("bottombox-active")) : ($("#top-app-layer").show(), $("#top-app-layer").addClass("active"), $("body").addClass("bottombox-active")), $("#top-app-layer .close-btn").click(function() { $("#top-app-layer").remove(), $("#top-app-layer").removeClass("active"), $("body").removeClass("bottombox-active"), localStorageSubstitute.setItem(t, e + "#1") }), $("#top-app-layer div").click(function() { window.tracker.send({ tracking_type: "click", eventid: 0x3f45e605ddfc1 }), window.location.href = "guazi://", setTimeout(function() { window.location.href = "http://m.guazi.com/misc/guaziapp/?from=guazi" }, 2e3) }), $("#top-app-layer .dowmload").click(function() { window.location.href = "guazi://", setTimeout(function() { window.location.href = "http://m.guazi.com/misc/guaziapp/?from=guazi" }, 2e3) }) },
        function() { var t, e = $('<div class="tip"></div>').hide().appendTo("body");
            i.tip = function(i, n) { return i && e.html(i).show(), n && (clearTimeout(t), t = setTimeout(function() { e.hide() }, n)), $("body").append(e), { setMessage: function(i, n) { e.html(i), n && (clearTimeout(t), t = setTimeout(function() { e.remove() }, n)) }, remove: function() { e.remove() } } } }() }, function(t, i) { i.generateUUIDV4 = function() { var t = (new Date).getTime(),
            i = "xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx".replace(/[xy]/g, function(i) { var e = (t + 16 * Math.random()) % 16 | 0; return t = Math.floor(t / 16), ("x" == i ? e : 7 & e | 8).toString(16) }); return i } }, function(t, i) { t.exports = Widget.define({ events: { touchstart: function(t) { var i = $(t.target); if (i.hasClass("icon-range") ? this.$target = i : this.$target = i.parents(".icon-range"), this.config.$el.find(".icon-low").length >= 1) { var e = this.config.$el.find(".icon-low").css("left").replace("%", "");
                    this.active.low = e } if (this.config.$el.find(".icon-high").length >= 1) { var n = this.config.$el.find(".icon-high").css("left").replace("%", "");
                    this.active.high = n } if (this.config.$el.find(".icon-middle").length >= 1) { var o = this.config.$el.find(".icon-middle").css("left").replace("%", "");
                    this.active.mid = o } }, touchmove: function(t) { var i = this.config.$el.width(),
                    e = parseInt((t.changedTouches[0].clientX - 15) / i * 100); if (!(e < 0 || e > 100)) { this.config.$el.find(".load-outer").width();
                    this.$target && this.$target.hasClass("icon-low") ? (this.active.low >= this.active.high && e >= this.active.high ? this.active.low = this.active.high : this.active.low = e <= 0 ? 0 : e, parseFloat(this.active.high) - parseFloat(this.active.low) < 5 && (this.active.low = parseFloat(this.active.high) - 5 <= 0 ? 0 : parseFloat(this.active.high) - 5), this.$target.css("left", this.active.low + "%"), this.config.$el.find(".load-inner").css({ left: this.active.low + "%", width: this.active.high - this.active.low + "%" })) : this.$target && this.$target.hasClass("icon-high") ? (this.active.high <= this.active.low && e <= this.active.low ? this.active.high = this.active.low : this.active.high = e >= 100 ? 100 : e, parseFloat(this.active.high) - parseFloat(this.active.low) < 5 && (this.active.high = parseFloat(this.active.low) + 5 >= 100 ? 100 : parseFloat(this.active.low) + 5), this.$target.css("left", this.active.high + "%"), this.config.$el.find(".load-inner").css({ width: this.active.high - this.active.low + "%" })) : this.$target && this.$target.hasClass("icon-middle") && (this.active.mid = e >= 100 ? 100 : e, this.$target.css("left", this.active.mid + "%")), this.config.$el.trigger("moving", this.active) } }, touchend: function() {
                (this.config.$el.find(".icon-low").length >= 1 || this.config.$el.find(".icon-high").length >= 1) && this.config.$el.find(".load-inner").css({ left: this.active.low + "%", width: this.active.high - this.active.low + "%" }), this.$target = null, this.config.$el.trigger("moveend", this.active) } }, active: { low: 0, high: 100, mid: 50 }, init: function(t) { this.config = t } }) }, function(t, i, e) { var n = e(4);
    $(function() { try { window.localStorage.setItem("isPrivateMode", "1"), window.localStorage.removeItem("isPrivateMode"), window.isPrivateMode = !1 } catch (t) { window.isPrivateMode = !0 } window.isPrivateMode ? (window.localStorageSubstitute = new Object, localStorageSubstitute.setItem = function(t, i) { n.set(t, i, { expires: 8640, path: "/", domain: ".guazi.com" }) }, localStorageSubstitute.getItem = function(t) { return n.get(t) }, localStorageSubstitute.removeItem = function(t) { return n.remove(t) }) : window.localStorageSubstitute = window.localStorage }) }, function(t, i, e) { var n = function(t) { var i = function(i, e) { this.el = t(i), this.zoomFactor = 1, this.lastScale = 1, this.offset = { x: 0, y: 0 }, this.options = t.extend({}, this.defaults, e), this.setupMarkup(), this.bindEvents(), this.update(), this.enable() },
                e = function(t, i) { return t + i },
                n = function(t, i) { return t > i - .01 && t < i + .09 };
            i.prototype = { defaults: { tapZoomFactor: 2, zoomOutFactor: 1.3, animationDuration: 300, animationInterval: 5, maxZoom: 5, minZoom: .5, lockDragAxis: !1, use2d: !0, zoomStartEventName: "pz_zoomstart", zoomEndEventName: "pz_zoomend", dragStartEventName: "pz_dragstart", dragEndEventName: "pz_dragend", doubleTapEventName: "pz_doubletap" }, handleDragStart: function(t) { this.el.trigger(this.options.dragStartEventName), this.stopAnimation(), this.lastDragPosition = !1, this.hasInteraction = !0, this.handleDrag(t) }, handleDrag: function(t) { if (this.zoomFactor > 1) { var i = this.getTouches(t)[0];
                        this.drag(i, this.lastDragPosition), this.offset = this.sanitizeOffset(this.offset), this.lastDragPosition = i } }, handleDragEnd: function() { this.el.trigger(this.options.dragEndEventName), this.end() }, handleZoomStart: function() { this.el.trigger(this.options.zoomStartEventName), this.stopAnimation(), this.lastScale = 1, this.nthZoom = 0, this.lastZoomCenter = !1, this.hasInteraction = !0 }, handleZoom: function(t, i) { var e = this.getTouchCenter(this.getTouches(t)),
                        n = i / this.lastScale;
                    this.lastScale = i, this.nthZoom += 1, this.nthZoom > 3 && (this.scale(n, e), this.drag(e, this.lastZoomCenter)), this.lastZoomCenter = e }, handleZoomEnd: function() { this.el.trigger(this.options.zoomEndEventName), this.end() }, handleDoubleTap: function(t) { var i = this.getTouches(t)[0],
                        e = this.zoomFactor > 1 ? 1 : this.options.tapZoomFactor,
                        n = this.zoomFactor,
                        o = function(t) { this.scaleTo(n + t * (e - n), i) }.bind(this);
                    this.hasInteraction || (n > e && (i = this.getCurrentZoomCenter()), this.animate(this.options.animationDuration, this.options.animationInterval, o, this.swing), this.el.trigger(this.options.doubleTapEventName)) }, sanitizeOffset: function(t) { var i = (this.zoomFactor - 1) * this.getContainerX(),
                        e = (this.zoomFactor - 1) * this.getContainerY(),
                        n = Math.max(i, 0),
                        o = Math.max(e, 0),
                        a = Math.min(i, 0),
                        r = Math.min(e, 0); return { x: Math.min(Math.max(t.x, a), n), y: Math.min(Math.max(t.y, r), o) } }, scaleTo: function(t, i) { this.scale(t / this.zoomFactor, i) }, scale: function(t, i) { t = this.scaleZoomFactor(t), this.addOffset({ x: (t - 1) * (i.x + this.offset.x), y: (t - 1) * (i.y + this.offset.y) }) }, scaleZoomFactor: function(t) { var i = this.zoomFactor; return this.zoomFactor *= t, this.zoomFactor = Math.min(this.options.maxZoom, Math.max(this.zoomFactor, this.options.minZoom)), this.zoomFactor / i }, drag: function(t, i) { i && (this.options.lockDragAxis ? Math.abs(t.x - i.x) > Math.abs(t.y - i.y) ? this.addOffset({ x: -(t.x - i.x), y: 0 }) : this.addOffset({ y: -(t.y - i.y), x: 0 }) : this.addOffset({ y: -(t.y - i.y), x: -(t.x - i.x) })) }, getTouchCenter: function(t) { return this.getVectorAvg(t) }, getVectorAvg: function(t) { return { x: t.map(function(t) { return t.x }).reduce(e) / t.length, y: t.map(function(t) { return t.y }).reduce(e) / t.length } }, addOffset: function(t) { this.offset = { x: this.offset.x + t.x, y: this.offset.y + t.y } }, sanitize: function() { this.zoomFactor < this.options.zoomOutFactor ? this.zoomOutAnimation() : this.isInsaneOffset(this.offset) && this.sanitizeOffsetAnimation() }, isInsaneOffset: function(t) { var i = this.sanitizeOffset(t); return i.x !== t.x || i.y !== t.y }, sanitizeOffsetAnimation: function() { var t = this.sanitizeOffset(this.offset),
                        i = { x: this.offset.x, y: this.offset.y },
                        e = function(e) { this.offset.x = i.x + e * (t.x - i.x), this.offset.y = i.y + e * (t.y - i.y), this.update() }.bind(this);
                    this.animate(this.options.animationDuration, this.options.animationInterval, e, this.swing) }, zoomOutAnimation: function() { var t = this.zoomFactor,
                        i = 1,
                        e = this.getCurrentZoomCenter(),
                        n = function(n) { this.scaleTo(t + n * (i - t), e) }.bind(this);
                    this.animate(this.options.animationDuration, this.options.animationInterval, n, this.swing) }, updateAspectRatio: function() { this.setContainerY(this.getContainerX() / this.getAspectRatio()) }, getInitialZoomFactor: function() { return this.container[0].offsetWidth / this.el[0].offsetWidth }, getAspectRatio: function() { return this.el[0].offsetWidth / this.el[0].offsetHeight }, getCurrentZoomCenter: function() { var t = this.container[0].offsetWidth * this.zoomFactor,
                        i = this.offset.x,
                        e = t - i - this.container[0].offsetWidth,
                        n = i / e,
                        o = n * this.container[0].offsetWidth / (n + 1),
                        a = this.container[0].offsetHeight * this.zoomFactor,
                        r = this.offset.y,
                        c = a - r - this.container[0].offsetHeight,
                        s = r / c,
                        l = s * this.container[0].offsetHeight / (s + 1); return 0 === e && (o = this.container[0].offsetWidth), 0 === c && (l = this.container[0].offsetHeight), { x: o, y: l } }, canDrag: function() { return !n(this.zoomFactor, 1) }, getTouches: function(t) { var i = this.container.offset(); return Array.prototype.slice.call(t.touches).map(function(t) { return { x: t.pageX - i.left, y: t.pageY - i.top } }) }, animate: function(t, i, e, n, o) { var a = (new Date).getTime(),
                        r = function() { if (this.inAnimation) { var c = (new Date).getTime() - a,
                                    s = c / t;
                                c >= t ? (e(1), o && o(), this.update(), this.stopAnimation(), this.update()) : (n && (s = n(s)), e(s), this.update(), setTimeout(r, i)) } }.bind(this);
                    this.inAnimation = !0, r() }, stopAnimation: function() { this.inAnimation = !1 }, swing: function(t) { return -Math.cos(t * Math.PI) / 2 + .5 }, getContainerX: function() { return this.container[0].offsetWidth }, getContainerY: function() { return this.container[0].offsetHeight }, setContainerY: function(t) { return this.container.height(t) }, setupMarkup: function() { this.options.container ? (this.container = t('<div class="pinch-zoom-container"></div>'), this.el.before(this.container), this.container.append(this.el), this.container.css({ position: "relative" })) : this.container = this.el.parent(), this.el.css({ "-webkit-transform-origin": "0% 0%", "-moz-transform-origin": "0% 0%", "-ms-transform-origin": "0% 0%", "-o-transform-origin": "0% 0%", "transform-origin": "0% 0%" }) }, end: function() { this.hasInteraction = !1, this.sanitize(), this.update() }, bindEvents: function() { o(this.container.get(0), this), t(window).on("resize", this.update.bind(this)), t(this.el).find("img").on("load", this.update.bind(this)) }, update: function() { this.updatePlaned || (this.updatePlaned = !0, setTimeout(function() { this.updatePlaned = !1, this.updateAspectRatio(); var t = this.getInitialZoomFactor() * this.zoomFactor,
                            i = -this.offset.x / t,
                            e = -this.offset.y / t,
                            n = "scale3d(" + t + ", " + t + ",1) translate3d(" + i + "px," + e + "px,0px)",
                            o = "scale(" + t + ", " + t + ") translate(" + i + "px," + e + "px)",
                            a = function() { this.clone && (this.clone.remove(), delete this.clone) }.bind(this);
                        this.is3d = !0, a(), this.el.css({ "-webkit-transform": n, "-o-transform": o, "-ms-transform": o, "-moz-transform": o, transform: n }) }.bind(this), 0)) }, enable: function() { this.enabled = !0 }, disable: function() { this.enabled = !1 } }; var o = function(t, i) { var e = null,
                    n = 0,
                    o = null,
                    a = null,
                    r = function(t, n) { if (e !== t) { if (e && !t) switch (e) {
                                case "zoom":
                                    i.handleZoomEnd(n); break;
                                case "drag":
                                    i.handleDragEnd(n) }
                            switch (t) {
                                case "zoom":
                                    i.handleZoomStart(n); break;
                                case "drag":
                                    i.handleDragStart(n) } } e = t },
                    c = function(t) { 2 === n ? r("zoom") : 1 === n && i.canDrag() ? r("drag", t) : r(null, t) },
                    s = function(t) { return Array.prototype.slice.call(t).map(function(t) { return { x: t.pageX, y: t.pageY } }) },
                    l = function(t, i) { var e, n; return e = t.x - i.x, n = t.y - i.y, Math.sqrt(e * e + n * n) },
                    p = function(t, i) { var e = l(t[0], t[1]),
                            n = l(i[0], i[1]); return n / e },
                    d = function(t) { t.stopPropagation(), t.preventDefault() },
                    u = function(t) { var o = (new Date).getTime(); if (n > 1 && (a = null), o - a < 300) switch (a = null, d(t), i.handleDoubleTap(t), e) {
                            case "zoom":
                                i.handleZoomEnd(t); break;
                            case "drag":
                                i.handleDragEnd(t) } else 1 === n && (a = o) },
                    h = !0;
                t.addEventListener("touchstart", function(t) { i.enabled && (h = !0, n = t.touches.length, u(t)) }), t.addEventListener("touchmove", function(t) { if (i.enabled) { if (h) c(t), e && d(t), o = s(t.touches);
                        else { switch (e) {
                                case "zoom":
                                    i.handleZoom(t, p(o, s(t.touches))); break;
                                case "drag":
                                    i.handleDrag(t) } e && (d(t), i.update()) } h = !1 } }), t.addEventListener("touchend", function(t) { i.enabled && (n = t.touches.length, c(t)) }) }; return i },
        o = n($);
    t.exports = o }, function(t, i) { t.exports = Widget.define({ events: { touchstart: function(t) { this.startTime = t.timeStamp, this.startY = t.changedTouches[0].screenY - this.curY, this.startScreenY = t.changedTouches[0].screenY }, touchmove: function(t) { var i = t.timeStamp;
                t.preventDefault(), this.curY = t.changedTouches[0].screenY - this.startY, this.animating = !1, this.curY > 0 ? this.curY = .4 * this.curY : this.curY < this.maxScrollY && (this.curY = this.maxScrollY + .4 * (this.curY - this.maxScrollY)), this.config.$el.css({ "-webkit-transform": "translate3d(0," + this.curY + "px, 0)", "-webkit-transition-duration": "0s", "transition-duration": "0s" }), i - this.startTime > 280 && (this.startTime = i, this.startScreenY = t.changedTouches[0].screenY) }, touchend: function(t) { var i = t.timeStamp - this.startTime,
                    e = t.changedTouches[0].screenY - this.startScreenY; if (this.animating && t.preventDefault(), this.curY > 0 || this.curY < this.maxScrollY) return void this.tailScroll(); if (i < 280) { var n = this.momentum(e, this.curY, i, this.maxScrollY, this.warpperHeight); if (this.curY = n.destination, !n.destination || !n.duration) return;
                    this.config.$el.css({ "-webkit-transform": "translate3d(0, " + n.destination + "px, 0)", "transition-timing-function": "cubic-bezier(0.1, 0.3, 0.5, 1)", "-webkit-transition-duration": n.duration + "ms" }), this.animating = !0 } return this.curY > 0 || this.curY < this.maxScrollY ? void this.tailScroll() : void 0 }, transitionend: function() { return !!this.animating && (this.animating = !1, void this.tailScroll()) } }, momentum: function(t, i, e, n, o) { var a, r, c = Math.abs(t) / e,
                s = 8e-4; return a = i + c * c / (2 * s) * (t < 0 ? -1 : 1), r = c / s, a < n ? (a = o ? n - o / 2.5 * (c / 8) : n, t = Math.abs(a - i), r = t / c) : a > 0 && (a = o ? o / 2.5 * (c / 8) : 0, t = Math.abs(i) + a, r = t / c), { destination: Math.round(a), duration: r } }, init: function(t) { this.config = t, this.startY = 0, this.curY = 0, this.startTime = 0, this.startScreenY = 0, this.animating = !1, this.refresh() }, refresh: function() { this.warpperHeight = this.config.$el.height(), this.maxScrollY = this.config.$el.height() - this.config.$scrollWrapper.height(), this.maxScrollY > 0 && (this.maxScrollY = 0), this.scrollTo(0) }, tailScroll: function() { this.curY > 0 ? this.curY = 0 : this.curY < 0 && this.curY < this.maxScrollY && (this.curY = this.maxScrollY), this.animating = !1, this.config.$el.css({ "-webkit-transform": "translate3d(0, " + this.curY + "px, 0)", "transition-timing-function": "cubic-bezier(0.25, 0.46, 0.45, 0.94)", "-webkit-transition-duration": "400ms" }) }, scrollTo: function(t) { this.curY = -1 * t, this.curY > 0 ? this.curY = 0 : this.curY < 0 && this.curY < this.maxScrollY && (this.curY = this.maxScrollY), this.config.$el.css({ "-webkit-transform": "translate3d(0," + this.curY + "px, 0)", "-webkit-transition-duration": "0" }) } }) }, function(t, i) {
    function e(t, i) {
        "use strict";

        function e() {
            f = v.children, x = f.length, f.length < 2 && (i.continuous = !1), g.transitions && i.continuous && f.length < 3 && (v.appendChild(f[0].cloneNode(!0)), v.appendChild(v.children[1].cloneNode(!0)),
                f = v.children), m = new Array(f.length), b = t.getBoundingClientRect().width || t.offsetWidth, v.style.width = f.length * b + "px";
            for (var e = f.length; e--;) { var n = f[e];
                n.style.width = b + "px", n.setAttribute("data-index", e), g.transitions && (n.style.left = e * -b + "px", c(e, w > e ? -b : w < e ? b : 0, 0)) } i.continuous && g.transitions && (c(a(w - 1), -b, 0), c(a(w + 1), b, 0)), g.transitions || (v.style.left = w * -b + "px"), t.style.visibility = "visible"
        }

        function n() { i.continuous ? r(w - 1) : w && r(w - 1) }

        function o() { i.continuous ? r(w + 1) : w < f.length - 1 && r(w + 1) }

        function a(t) { return (f.length + t % f.length) % f.length }

        function r(t, e) { if (w !== t) { if (g.transitions) { var n = Math.abs(w - t) / (w - t); if (i.continuous) { var o = n;
                        n = -m[a(t)] / b, n !== o && (t = -n * f.length + t) } for (var r = Math.abs(w - t) - 1; r--;) c(a((t > w ? t : w) - r - 1), b * n, 0);
                    t = a(t), c(w, b * n, e || k), c(t, 0, e || k), i.continuous && c(a(t - n), -(b * n), 0) } else t = a(t), l(w * -b, t * -b, e || k);
                w = t, h(i.callback && i.callback(w, f[w])) } }

        function c(t, i, e) { s(t, i, e), m[t] = i }

        function s(t, i, e) { var n = f[t],
                o = n && n.style;
            o && (o.webkitTransitionDuration = o.MozTransitionDuration = o.msTransitionDuration = o.OTransitionDuration = o.transitionDuration = e + "ms", o.webkitTransform = "translate(" + i + "px,0)translateZ(0)", o.msTransform = o.MozTransform = o.OTransform = "translateX(" + i + "px)") }

        function l(t, e, n) { if (!n) return void(v.style.left = e + "px"); var o = +new Date,
                a = setInterval(function() { var r = +new Date - o; return r > n ? (v.style.left = e + "px", z && p(), i.transitionEnd && i.transitionEnd.call(event, w, f[w]), void clearInterval(a)) : void(v.style.left = (e - t) * (Math.floor(r / n * 100) / 100) + t + "px") }, 4) }

        function p() { y = setTimeout(o, z) }

        function d() { z = 0, clearTimeout(y) }
        var u = function() {},
            h = function(t) { setTimeout(t || u, 0) },
            g = { addEventListener: !!window.addEventListener, touch: "ontouchstart" in window || window.DocumentTouch && document instanceof window.DocumentTouch, transitions: function(t) { var i = ["transitionProperty", "WebkitTransition", "MozTransition", "OTransition", "msTransition"]; for (var e in i)
                        if (void 0 !== t.style[i[e]]) return !0; return !1 }(document.createElement("swipe")) };
        if (t) { var f, m, b, x, v = t.children[0];
            i = i || {}; var w = parseInt(i.startSlide, 10) || 0,
                k = i.speed || 300;
            i.continuous = void 0 === i.continuous || i.continuous; var y, $, z = i.auto || 0,
                j = {},
                C = {},
                T = { handleEvent: function(t) { switch (t.type) {
                            case "touchstart":
                                this.start(t); break;
                            case "touchmove":
                                this.move(t); break;
                            case "touchend":
                                h(this.end(t)); break;
                            case "webkitTransitionEnd":
                            case "msTransitionEnd":
                            case "oTransitionEnd":
                            case "otransitionend":
                            case "transitionend":
                                h(this.transitionEnd(t)); break;
                            case "resize":
                                h(e) } i.stopPropagation && t.stopPropagation() }, start: function(t) { var i = t.touches[0];
                        j = { x: i.pageX, y: i.pageY, time: +new Date }, $ = void 0, C = {}, v.addEventListener("touchmove", this, !1), v.addEventListener("touchend", this, !1) }, move: function(t) { if (!(t.touches.length > 1 || t.scale && 1 !== t.scale)) { i.disableScroll && t.preventDefault(); var e = t.touches[0];
                            C = { x: e.pageX - j.x, y: e.pageY - j.y }, "undefined" == typeof $ && ($ = !!($ || Math.abs(C.x) < Math.abs(C.y))), $ || (t.preventDefault(), d(), i.continuous ? (s(a(w - 1), C.x + m[a(w - 1)], 0), s(w, C.x + m[w], 0), s(a(w + 1), C.x + m[a(w + 1)], 0)) : (C.x = C.x / (!w && C.x > 0 || w === f.length - 1 && C.x < 0 ? Math.abs(C.x) / b + 1 : 1), s(w - 1, C.x + m[w - 1], 0), s(w, C.x + m[w], 0), s(w + 1, C.x + m[w + 1], 0))) } }, end: function() { var t = +new Date - j.time,
                            e = Number(t) < 250 && Math.abs(C.x) > 20 || Math.abs(C.x) > b / 2,
                            n = !w && C.x > 0 || w === f.length - 1 && C.x < 0;
                        i.continuous && (n = !1); var o = C.x < 0;
                        $ || (e && !n ? (o ? (i.continuous ? (c(a(w - 1), -b, 0), c(a(w + 2), b, 0)) : c(w - 1, -b, 0), c(w, m[w] - b, k), c(a(w + 1), m[a(w + 1)] - b, k), w = a(w + 1)) : (i.continuous ? (c(a(w + 1), b, 0), c(a(w - 2), -b, 0)) : c(w + 1, b, 0), c(w, m[w] + b, k), c(a(w - 1), m[a(w - 1)] + b, k), w = a(w - 1)), i.callback && i.callback(w, f[w])) : i.continuous ? (c(a(w - 1), -b, k), c(w, 0, k), c(a(w + 1), b, k)) : (c(w - 1, -b, k), c(w, 0, k), c(w + 1, b, k))), v.removeEventListener("touchmove", T, !1), v.removeEventListener("touchend", T, !1) }, transitionEnd: function(t) { parseInt(t.target.getAttribute("data-index"), 10) === w && (z && p(), i.transitionEnd && i.transitionEnd.call(t, w, f[w])) } }; return e(), z && p(), g.addEventListener ? (g.touch && v.addEventListener("touchstart", T, !1), g.transitions && (v.addEventListener("webkitTransitionEnd", T, !1), v.addEventListener("msTransitionEnd", T, !1), v.addEventListener("oTransitionEnd", T, !1), v.addEventListener("otransitionend", T, !1), v.addEventListener("transitionend", T, !1)), window.addEventListener("resize", T, !1)) : window.onresize = function() { e() }, { setup: function() { e() }, slide: function(t, i) { d(), r(t, i) }, prev: function() { d(), n() }, next: function() { d(), o() }, stop: function() { d() }, getPos: function() { return w }, getNumSlides: function() { return x }, kill: function() { d(), v.style.width = "", v.style.left = ""; for (var t = f.length; t--;) { var i = f[t];
                        i.style.width = "", i.style.left = "", g.transitions && s(t, 0, 0) } g.addEventListener ? (v.removeEventListener("touchstart", T, !1), v.removeEventListener("webkitTransitionEnd", T, !1), v.removeEventListener("msTransitionEnd", T, !1), v.removeEventListener("oTransitionEnd", T, !1), v.removeEventListener("otransitionend", T, !1), v.removeEventListener("transitionend", T, !1), window.removeEventListener("resize", T, !1)) : window.onresize = null } } }
    }
    t.exports = e
}, function(t, i, e) { var n = e(33).Events;
    i.getLocation = function(t, i) { var o = $.Deferred(),
            a = $("#domain").val(),
            r = encodeURIComponent($("#referer").val()),
            c = "/ajax.php?dir=vehicle&module=latlng&format=eval&domain=" + a + "&referer=" + r,
            s = "/ajax.php?dir=vehicle&module=latlng&ac=getCityInfoByIp&domain=" + a + "&referer=" + r + "&rnd=" + Math.random(),
            l = new n; "function" == typeof t && (i = t, t = {}); var p = function(t) { l.emit("getCityInfo"), $.ajax({ url: c, data: { latlng: t.coords.latitude + "," + t.coords.longitude }, dataType: "json" }).done(function(t) { return t && t.data && t.data.cityName && t.data.cityDomain ? void i(null, { cityName: t.data.cityName, cityDomain: t.data.cityDomain, url: t.data.url, currentLocation: t.data.currentLocation, latlng: t.data.latlng }) : i("geoToCity server error") }).fail(function(t) { i(t) }) },
            d = function() { t.thirdGeo ? e(27).async(t.thirdGeo, function(i) { var e = i[t.geofn](t);
                    o = e.geo(o) }) : navigator.geolocation ? navigator.geolocation.getCurrentPosition(function(t) { o.resolve(t) }, function(t) { o.reject(t) }, { timeout: t.timeout || 1e4, maximumAge: 6e4, enableHighAccuracy: !0 }) : o.reject(new Error("api not supported")) },
            u = function(e) { var n = "IP position unavailable";
                l.emit("getCityInfo"), $.ajax({ url: s, timeout: t.timeout, dataType: "json" }).done(function(o) { o && o.data && o.data.cityName && o.data.cityDomain ? i(null, { cityName: o.data.cityName, cityDomain: o.data.cityDomain, url: o.data.url, currentLocation: o.data.currentLocation, latlng: o.data.latlng }) : t.ipFirst ? d() : i(e || n) }).fail(function() { t.ipFirst ? d() : i(e || n) }) }; return o.done(function(t) { p(t) }).fail(function(e) { t.ipFirst ? i(e) : e && e.code === e.PERMISSION_DENIED ? i(e) : u(e) }), t.ipFirst ? u() : d(), l } }, function(t, i, e) { var n = e(32),
        o = function(t) { var i = new RegExp("(^|&)" + t + "=([^&]*)(&|$)"),
                e = window.location.search.substr(1),
                n = e.match(i); return null != n && (e = e.replace(n[0], "")), "?" + e },
        a = function(t) { var i = new RegExp("(^|&)" + t + "=([^&]*)(&|$)"),
                e = window.location.search.substr(1).match(i); return null != e ? unescape(e[2]) : null };
    $(function() { $("#user-mask").tap(function() { return $("#user-mask").hide(), $(".js-user-div").removeClass("active"), !1 }), $(".js-user-check .btn-cancel").tap(function() { return $("#user-mask").trigger("tap"), !1 }), $(".js-user-phone").on("input", function() { var t = $(".js-user-register"); "1" != t.attr("data-send") && t.addClass("active") }), $(".js-user-register").tap(function(t) { var i = $(".js-user-phone").val(),
                e = new RegExp(/^1[34578]\d{9}$/),
                o = $(".js-waring-notice"),
                a = $(t.target); if (a.hasClass("active"))
                if (i)
                    if (isNaN(i) || !e.test(i)) o.show().html("请输入正确的手机号");
                    else { o.hide(), a.removeClass("active"), a.attr("data-send", "1"); var r = 60,
                            c = setInterval(function() { r > 0 ? (a.html(r + "s"), r -= 1) : (clearInterval(c), a.addClass("active").html("获取验证码"), a.attr("data-send", "0")) }, 1e3),
                            s = $(".js-check-post-code").attr("data-str"),
                            l = $(".js-check-post-code").attr("data-time");
                        s = n(s + "guazi&js&token" + i), $.ajax({ url: "/misc/user/?act=register", type: "POST", data: { phone: i, time: l, token: s }, dataType: "json", success: function(t) { t.status ? o.show().html("验证码已发送，请查看短信") : o.show().html(t.msg) }, error: function() { o.show().html("验证码发送失败，请稍后再试") } }) } else o.show().html("请输入手机号"); return !1 }), $(".js-user-code").on("input", function() { $(".js-waring-notice").hide() }), $(".js-user-check .btn-sure").tap(function() { var t = $(".js-user-phone").val(),
                i = $(".js-user-code").val(),
                e = new RegExp(/^1[34578]\d{9}$/),
                r = new RegExp(/^\d{4,8}$/),
                c = $(".js-waring-notice"); if (!t) return c.show().html("请输入手机号"), !1; if (isNaN(t) || !e.test(t)) return c.show().html("请输入正确的手机号"), !1; if (!i) return c.show().html("请输入手机号验证码"), !1; if (isNaN(i) || !r.test(i)) return c.show().html("请输入正确验证码"), !1; var s = $(".js-check-post-code").attr("data-str"),
                l = $(".js-check-post-code").attr("data-time"); return s = n(s + "guazi&js&token" + t), $.ajax({ url: "/misc/user/?act=checkCode", type: "POST", data: { phone: t, code: i, time: l, token: s }, xhrFields: { withCredentials: !0 }, dataType: "json", success: function(i) { if (i.status) { var e = window.localStorageSubstitute,
                            n = (new Date).getTime();
                        e.setItem("currstamp", n), e.setItem("phone", t); var r = $(".js-user-div").attr("data-reload"),
                            s = a("uToken"); if ("1" == r || null != s) { var l = o("uToken");
                            window.location.href = window.location.pathname + l } else $(".js-user-div").attr("data-user", "1"), $("#user-mask").trigger("tap") } else c.show().html(i.msg) }, error: function() { c.show().html("验证码失败，请稍后再试") } }), !1 }) }) }, function(t, i, e) { var n = e(20),
        o = e(9);
    e(8);
    i.slideBanner = o.extend({ events: { "click [data-slide-to]": function(t) { var i = n(t.currentTarget).data("slide-to");
                i > this.index ? this.slideTo(i, "next") : this.slideTo(i, "prev") }, 'touchstart [data-role="item"]': function(t) { this.stop(), this.startX = t.touches[0].clientX, this.config.touch1move = !0, this.config.startPos.x = t.touches[0].pageX, this.config.startPos.y = t.touches[0].pageY }, 'touchend [data-role="item"]': function() { this.maxMoveDist > 10 && (this.maxMoveDist = 0, this[this.direction]()), this.loop() }, 'touchmove [data-role="item"]': function(t) { var i = t.touches[0],
                    e = this.config.$list,
                    n = i.clientX - this.startX,
                    o = i.pageX - this.config.startPos.x,
                    a = i.pageY - this.config.startPos.y;
                this.config.touch1move && (this.config.direction = Math.abs(a) > Math.abs(o) ? "vertical" : "horizontal", this.config.touch1move = !1), "vertical" != this.config.direction && (t.preventDefault(), t.stopPropagation(), this.animating || (this.maxMoveDist < Math.abs(n) && (this.maxMoveDist = Math.abs(n)), Math.abs(n) > this.width || this.maxMoveDist < 10 || (t.preventDefault(), e.css({ marginLeft: -1 * this.index * this.width + n + "px" }), this.direction = n < 0 ? "next" : "prev"))) } }, init: function(t) { var i = this,
                e = t.$item;
            t.interval = t.interval || 1e3, this.config = t, this.config.startPos = {}, this.config.touch1move = !0, this.config.direction = "vertical", this.index = 0, this.total = n(t.$item).length, this.loop(), this.width = this.config.$el.width(), this.config.$list.width(this.total + 2 + "00%"), this.translateX = 0, this.direction = "next", this.maxMoveDist = 0, e.css("width", 100 / (this.total + 2) + "%"); var o = e.eq(this.total - 1).clone(),
                a = e.eq(0).clone();
            o.css({ position: "relative", left: "-100%" }), n([e.eq(0).find("img[data-src]"), a.find("img[data-src]"), o.find("img[data-src]")]).each(function() { var t = n(this);
                t.attr("src", t.data("src")) }), this.config.$list.append(a).append(o), n(window).on("resize", function() { i.width = i.config.$el.width(), i.slideTo(i.index, "next") }) }, slideFn: function(t, i) { var e = this,
                o = n.Deferred(),
                a = t - this.index,
                r = this.config.$list,
                c = this.total,
                s = this.config.$list.width();
            n([this.config.$item.eq(t).find("img[data-src]"), this.config.$item.eq(t + 1).find("img[data-src]")]).each(function() { var t = n(this);
                t.data("src") && t.attr("src") !== t.data("src") && t.attr("src", t.data("src")) }), "prev" === i && a > 0 && (a -= c), "next" === i && a < 0 && (a += c), this.animating = !0; var l = (n.fx.cssPrefix + "transform", -1 / (this.total + 2) * (this.index + a) * s); if (r.animate({ marginLeft: l }, this.config.animateTime || 200, function() { var n;
                    0 === e.index && t === c - 1 && "prev" === i ? (n = -1 / (e.total + 2) * (e.total - 1) * s, r.css({ marginLeft: n + "px" })) : e.index === c - 1 && 0 === t && "next" === i && r.css({ marginLeft: 0 }), o.resolve(), e.animating = !1 }), this.config.$el.find("[data-slide-to]").removeClass("active").filter('[data-slide-to="' + t + '"]').addClass("active"), this.config.$el.closest(".report-img").find(".j-container").length > 0) { var p = this.config.$el.closest(".j-container").find(".j-dotted span").eq(t);
                p.find("i").addClass("on"), p.siblings().find("i").removeClass("on") } return this.config.$el.trigger("slidecb"), this.config.$el.find('[data-role="index"]').text(t + 1), window.initPositionList && this.config.$el.closest(".j-container").find(".car-thrD-show").trigger("init3DShow", window.initPositionList[t]), o.promise() } }) }, function(t, i) {
    var e = function() {
        function t(t) { return null == t ? String(t) : J[V.call(t)] || "object" }

        function i(i) { return "function" == t(i) }

        function e(t) { return null != t && t == t.window }

        function n(t) { return null != t && t.nodeType == t.DOCUMENT_NODE }

        function o(i) { return "object" == t(i) }

        function a(t) { return o(t) && !e(t) && Object.getPrototypeOf(t) == Object.prototype }

        function r(t) { return "number" == typeof t.length }

        function c(t) { return _.call(t, function(t) { return null != t }) }

        function s(t) { return t.length > 0 ? $.fn.concat.apply([], t) : t }

        function l(t) { return t.replace(/::/g, "/").replace(/([A-Z]+)([A-Z][a-z])/g, "$1_$2").replace(/([a-z\d])([A-Z])/g, "$1_$2").replace(/_/g, "-").toLowerCase() }

        function p(t) { return t in A ? A[t] : A[t] = new RegExp("(^|\\s)" + t + "(\\s|$)") }

        function d(t, i) { return "number" != typeof i || O[l(t)] ? i : i + "px" }

        function u(t) { var i, e; return I[t] || (i = E.createElement(t), E.body.appendChild(i), e = getComputedStyle(i, "").getPropertyValue("display"), i.parentNode.removeChild(i), "none" == e && (e = "block"), I[t] = e), I[t] }

        function h(t) { return "children" in t ? S.call(t.children) : $.map(t.childNodes, function(t) { if (1 == t.nodeType) return t }) }

        function g(t, i, e) { for (y in i) e && (a(i[y]) || G(i[y])) ? (a(i[y]) && !a(t[y]) && (t[y] = {}), G(i[y]) && !G(t[y]) && (t[y] = []), g(t[y], i[y], e)) : i[y] !== k && (t[y] = i[y]) }

        function f(t, i) { return null == i ? $(t) : $(t).filter(i) }

        function m(t, e, n, o) { return i(e) ? e.call(t, n, o) : e }

        function b(t, i, e) { null == e ? t.removeAttribute(i) : t.setAttribute(i, e) }

        function x(t, i) { var e = t.className,
                n = e && e.baseVal !== k; return i === k ? n ? e.baseVal : e : void(n ? e.baseVal = i : t.className = i) }

        function v(t) { try { return t ? "true" == t || "false" != t && ("null" == t ? null : +t + "" == t ? +t : /^[\[\{]/.test(t) ? $.parseJSON(t) : t) : t } catch (i) { return t } }

        function w(t, i) { i(t); for (var e in t.childNodes) w(t.childNodes[e], i) } var k, y, $, z, j, C, T = [],
            S = T.slice,
            _ = T.filter,
            E = window.document,
            I = {},
            A = {},
            O = { "column-count": 1, columns: 1, "font-weight": 1, "line-height": 1, opacity: 1, "z-index": 1, zoom: 1 },
            M = /^\s*<(\w+|!)[^>]*>/,
            N = /^<(\w+)\s*\/?>(?:<\/\1>|)$/,
            D = /<(?!area|br|col|embed|hr|img|input|link|meta|param)(([\w:]+)[^>]*)\/>/gi,
            L = /^(?:body|html)$/i,
            P = /([A-Z])/g,
            R = ["val", "css", "html", "text", "data", "width", "height", "offset"],
            W = ["after", "prepend", "before", "append"],
            Y = E.createElement("table"),
            F = E.createElement("tr"),
            q = { tr: E.createElement("tbody"), tbody: Y, thead: Y, tfoot: Y, td: F, th: F, "*": E.createElement("div") },
            U = /complete|loaded|interactive/,
            B = /^[\w-]*$/,
            J = {},
            V = J.toString,
            Z = {},
            H = E.createElement("div"),
            X = { tabindex: "tabIndex", readonly: "readOnly", "for": "htmlFor", "class": "className", maxlength: "maxLength", cellspacing: "cellSpacing", cellpadding: "cellPadding", rowspan: "rowSpan", colspan: "colSpan", usemap: "useMap", frameborder: "frameBorder", contenteditable: "contentEditable" },
            G = Array.isArray || function(t) { return t instanceof Array }; return Z.matches = function(t, i) { if (!i || !t || 1 !== t.nodeType) return !1; var e = t.webkitMatchesSelector || t.mozMatchesSelector || t.oMatchesSelector || t.matchesSelector; if (e) return e.call(t, i); var n, o = t.parentNode,
                a = !o; return a && (o = H).appendChild(t), n = ~Z.qsa(o, i).indexOf(t), a && H.removeChild(t), n }, j = function(t) { return t.replace(/-+(.)?/g, function(t, i) { return i ? i.toUpperCase() : "" }) }, C = function(t) { return _.call(t, function(i, e) { return t.indexOf(i) == e }) }, Z.fragment = function(t, i, e) { var n, o, r; return N.test(t) && (n = $(E.createElement(RegExp.$1))), n || (t.replace && (t = t.replace(D, "<$1></$2>")), i === k && (i = M.test(t) && RegExp.$1), i in q || (i = "*"), r = q[i], r.innerHTML = "" + t, n = $.each(S.call(r.childNodes), function() { r.removeChild(this) })), a(e) && (o = $(n), $.each(e, function(t, i) { R.indexOf(t) > -1 ? o[t](i) : o.attr(t, i) })), n }, Z.Z = function(t, i) { return t = t || [], t.__proto__ = $.fn, t.selector = i || "", t }, Z.isZ = function(t) { return t instanceof Z.Z }, Z.init = function(t, e) { var n; if (!t) return Z.Z(); if ("string" == typeof t)
                if (t = t.trim(), "<" == t[0] && M.test(t)) n = Z.fragment(t, RegExp.$1, e), t = null;
                else { if (e !== k) return $(e).find(t);
                    n = Z.qsa(E, t) } else { if (i(t)) return $(E).ready(t); if (Z.isZ(t)) return t; if (G(t)) n = c(t);
                else if (o(t)) n = [t], t = null;
                else if (M.test(t)) n = Z.fragment(t.trim(), RegExp.$1, e), t = null;
                else { if (e !== k) return $(e).find(t);
                    n = Z.qsa(E, t) } } return Z.Z(n, t) }, $ = function(t, i) { return Z.init(t, i) }, $.extend = function(t) { var i, e = S.call(arguments, 1); return "boolean" == typeof t && (i = t, t = e.shift()), e.forEach(function(e) { g(t, e, i) }), t }, Z.qsa = function(t, i) { var e, o = "#" == i[0],
                a = !o && "." == i[0],
                r = o || a ? i.slice(1) : i,
                c = B.test(r); return n(t) && c && o ? (e = t.getElementById(r)) ? [e] : [] : 1 !== t.nodeType && 9 !== t.nodeType ? [] : S.call(c && !o ? a ? t.getElementsByClassName(r) : t.getElementsByTagName(i) : t.querySelectorAll(i)) }, $.contains = function(t, i) { return t !== i && t.contains(i) }, $.type = t, $.isFunction = i, $.isWindow = e, $.isArray = G, $.isPlainObject = a, $.isEmptyObject = function(t) { var i; for (i in t) return !1; return !0 }, $.inArray = function(t, i, e) { return T.indexOf.call(i, t, e) }, $.camelCase = j, $.trim = function(t) { return null == t ? "" : String.prototype.trim.call(t) }, $.uuid = 0, $.support = {}, $.expr = {}, $.map = function(t, i) { var e, n, o, a = []; if (r(t))
                for (n = 0; n < t.length; n++) e = i(t[n], n), null != e && a.push(e);
            else
                for (o in t) e = i(t[o], o), null != e && a.push(e); return s(a) }, $.each = function(t, i) { var e, n; if (r(t)) { for (e = 0; e < t.length; e++)
                    if (i.call(t[e], e, t[e]) === !1) return t } else
                for (n in t)
                    if (i.call(t[n], n, t[n]) === !1) return t; return t }, $.grep = function(t, i) { return _.call(t, i) }, window.JSON && ($.parseJSON = JSON.parse), $.each("Boolean Number String Function Array Date RegExp Object Error".split(" "), function(t, i) { J["[object " + i + "]"] = i.toLowerCase() }), $.fn = { forEach: T.forEach, reduce: T.reduce, push: T.push, sort: T.sort, indexOf: T.indexOf, concat: T.concat, map: function(t) { return $($.map(this, function(i, e) { return t.call(i, e, i) })) }, slice: function() { return $(S.apply(this, arguments)) }, ready: function(t) { return U.test(E.readyState) && E.body ? t($) : E.addEventListener("DOMContentLoaded", function() { t($) }, !1), this }, get: function(t) { return t === k ? S.call(this) : this[t >= 0 ? t : t + this.length] }, toArray: function() { return this.get() }, size: function() { return this.length }, remove: function() { return this.each(function() { null != this.parentNode && this.parentNode.removeChild(this) }) }, each: function(t) { return T.every.call(this, function(i, e) { return t.call(i, e, i) !== !1 }), this }, filter: function(t) { return i(t) ? this.not(this.not(t)) : $(_.call(this, function(i) { return Z.matches(i, t) })) }, add: function(t, i) { return $(C(this.concat($(t, i)))) }, is: function(t) { return this.length > 0 && Z.matches(this[0], t) }, not: function(t) { var e = []; if (i(t) && t.call !== k) this.each(function(i) { t.call(this, i) || e.push(this) });
                else { var n = "string" == typeof t ? this.filter(t) : r(t) && i(t.item) ? S.call(t) : $(t);
                    this.forEach(function(t) { n.indexOf(t) < 0 && e.push(t) }) } return $(e) }, has: function(t) { return this.filter(function() { return o(t) ? $.contains(this, t) : $(this).find(t).size() }) }, eq: function(t) { return t === -1 ? this.slice(t) : this.slice(t, +t + 1) }, first: function() { var t = this[0]; return t && !o(t) ? t : $(t) }, last: function() { var t = this[this.length - 1]; return t && !o(t) ? t : $(t) }, find: function(t) { var i, e = this; return i = "object" == typeof t ? $(t).filter(function() { var t = this; return T.some.call(e, function(i) { return $.contains(i, t) }) }) : 1 == this.length ? $(Z.qsa(this[0], t)) : this.map(function() { return Z.qsa(this, t) }) }, closest: function(t, i) { var e = this[0],
                    o = !1; for ("object" == typeof t && (o = $(t)); e && !(o ? o.indexOf(e) >= 0 : Z.matches(e, t));) e = e !== i && !n(e) && e.parentNode; return $(e) }, parents: function(t) { for (var i = [], e = this; e.length > 0;) e = $.map(e, function(t) { if ((t = t.parentNode) && !n(t) && i.indexOf(t) < 0) return i.push(t), t }); return f(i, t) }, parent: function(t) { return f(C(this.pluck("parentNode")), t) }, children: function(t) { return f(this.map(function() { return h(this) }), t) }, contents: function() { return this.map(function() { return S.call(this.childNodes) }) }, siblings: function(t) { return f(this.map(function(t, i) { return _.call(h(i.parentNode), function(t) { return t !== i }) }), t) }, empty: function() { return this.each(function() { this.innerHTML = "" }) }, pluck: function(t) { return $.map(this, function(i) { return i[t] }) }, show: function() { return this.each(function() { "none" == this.style.display && (this.style.display = ""), "none" == getComputedStyle(this, "").getPropertyValue("display") && (this.style.display = u(this.nodeName)) }) }, replaceWith: function(t) { return this.before(t).remove() }, wrap: function(t) { var e = i(t); if (this[0] && !e) var n = $(t).get(0),
                    o = n.parentNode || this.length > 1; return this.each(function(i) { $(this).wrapAll(e ? t.call(this, i) : o ? n.cloneNode(!0) : n) }) }, wrapAll: function(t) { if (this[0]) { $(this[0]).before(t = $(t)); for (var i;
                        (i = t.children()).length;) t = i.first();
                    $(t).append(this) } return this }, wrapInner: function(t) { var e = i(t); return this.each(function(i) { var n = $(this),
                        o = n.contents(),
                        a = e ? t.call(this, i) : t;
                    o.length ? o.wrapAll(a) : n.append(a) }) }, unwrap: function() { return this.parent().each(function() { $(this).replaceWith($(this).children()) }), this }, clone: function() { return this.map(function() { return this.cloneNode(!0) }) }, hide: function() { return this.css("display", "none") }, toggle: function(t) { return this.each(function() { var i = $(this);
                    (t === k ? "none" == i.css("display") : t) ? i.show(): i.hide() }) }, prev: function(t) { return $(this.pluck("previousElementSibling")).filter(t || "*") }, next: function(t) { return $(this.pluck("nextElementSibling")).filter(t || "*") }, html: function(t) { return 0 === arguments.length ? this.length > 0 ? this[0].innerHTML : null : this.each(function(i) { var e = this.innerHTML;
                    $(this).empty().append(m(this, t, i, e)) }) }, text: function(t) { return 0 === arguments.length ? this.length > 0 ? this[0].textContent : null : this.each(function() { this.textContent = t === k ? "" : "" + t }) }, attr: function(t, i) { var e; return "string" == typeof t && i === k ? 0 == this.length || 1 !== this[0].nodeType ? k : "value" == t && "INPUT" == this[0].nodeName ? this.val() : !(e = this[0].getAttribute(t)) && t in this[0] ? this[0][t] : e : this.each(function(e) { if (1 === this.nodeType)
                        if (o(t))
                            for (y in t) b(this, y, t[y]);
                        else b(this, t, m(this, i, e, this.getAttribute(t))) }) }, removeAttr: function(t) { return this.each(function() { 1 === this.nodeType && b(this, t) }) }, prop: function(t, i) { return t = X[t] || t, i === k ? this[0] && this[0][t] : this.each(function(e) { this[t] = m(this, i, e, this[t]) }) }, data: function(t, i) { var e = this.attr("data-" + t.replace(P, "-$1").toLowerCase(), i); return null !== e ? v(e) : k }, val: function(t) { return 0 === arguments.length ? this[0] && (this[0].multiple ? $(this[0]).find("option").filter(function() { return this.selected }).pluck("value") : this[0].value) : this.each(function(i) { this.value = m(this, t, i, this.value) }) }, offset: function(t) { if (t) return this.each(function(i) { var e = $(this),
                        n = m(this, t, i, e.offset()),
                        o = e.offsetParent().offset(),
                        a = { top: n.top - o.top, left: n.left - o.left }; "static" == e.css("position") && (a.position = "relative"), e.css(a) }); if (0 == this.length) return null; var i = this[0].getBoundingClientRect(); return { left: i.left + window.pageXOffset, top: i.top + window.pageYOffset, width: Math.round(i.width), height: Math.round(i.height) } }, css: function(i, e) { if (arguments.length < 2) { var n = this[0],
                        o = getComputedStyle(n, ""); if (!n) return; if ("string" == typeof i) return n.style[j(i)] || o.getPropertyValue(i); if (G(i)) { var a = {}; return $.each(G(i) ? i : [i], function(t, i) { a[i] = n.style[j(i)] || o.getPropertyValue(i) }), a } } var r = ""; if ("string" == t(i)) e || 0 === e ? r = l(i) + ":" + d(i, e) : this.each(function() { this.style.removeProperty(l(i)) });
                else
                    for (y in i) i[y] || 0 === i[y] ? r += l(y) + ":" + d(y, i[y]) + ";" : this.each(function() { this.style.removeProperty(l(y)) }); return this.each(function() { this.style.cssText += ";" + r }) }, index: function(t) { return t ? this.indexOf($(t)[0]) : this.parent().children().indexOf(this[0]) }, hasClass: function(t) { return !!t && T.some.call(this, function(t) { return this.test(x(t)) }, p(t)) }, addClass: function(t) { return t ? this.each(function(i) { z = []; var e = x(this),
                        n = m(this, t, i, e);
                    n.split(/\s+/g).forEach(function(t) { $(this).hasClass(t) || z.push(t) }, this), z.length && x(this, e + (e ? " " : "") + z.join(" ")) }) : this }, removeClass: function(t) { return this.each(function(i) { return t === k ? x(this, "") : (z = x(this), m(this, t, i, z).split(/\s+/g).forEach(function(t) { z = z.replace(p(t), " ") }), void x(this, z.trim())) }) }, toggleClass: function(t, i) { return t ? this.each(function(e) { var n = $(this),
                        o = m(this, t, e, x(this));
                    o.split(/\s+/g).forEach(function(t) {
                        (i === k ? !n.hasClass(t) : i) ? n.addClass(t): n.removeClass(t) }) }) : this }, scrollTop: function(t) { if (this.length) { var i = "scrollTop" in this[0]; return t === k ? i ? this[0].scrollTop : this[0].pageYOffset : this.each(i ? function() { this.scrollTop = t } : function() { this.scrollTo(this.scrollX, t) }) } }, scrollLeft: function(t) { if (this.length) { var i = "scrollLeft" in this[0]; return t === k ? i ? this[0].scrollLeft : this[0].pageXOffset : this.each(i ? function() { this.scrollLeft = t } : function() { this.scrollTo(t, this.scrollY) }) } }, position: function() { if (this.length) { var t = this[0],
                        i = this.offsetParent(),
                        e = this.offset(),
                        n = L.test(i[0].nodeName) ? { top: 0, left: 0 } : i.offset(); return e.top -= parseFloat($(t).css("margin-top")) || 0, e.left -= parseFloat($(t).css("margin-left")) || 0, n.top += parseFloat($(i[0]).css("border-top-width")) || 0, n.left += parseFloat($(i[0]).css("border-left-width")) || 0, { top: e.top - n.top, left: e.left - n.left } } }, offsetParent: function() { return this.map(function() { for (var t = this.offsetParent || E.body; t && !L.test(t.nodeName) && "static" == $(t).css("position");) t = t.offsetParent; return t }) } }, $.fn.detach = $.fn.remove, ["width", "height"].forEach(function(t) { var i = t.replace(/./, function(t) { return t[0].toUpperCase() });
            $.fn[t] = function(o) { var a, r = this[0]; return o === k ? e(r) ? r["inner" + i] : n(r) ? r.documentElement["scroll" + i] : (a = this.offset()) && a[t] : this.each(function(i) { r = $(this), r.css(t, m(this, o, i, r[t]())) }) } }), W.forEach(function(i, e) { var n = e % 2;
            $.fn[i] = function() { var i, o, a = $.map(arguments, function(e) { return i = t(e), "object" == i || "array" == i || null == e ? e : Z.fragment(e) }),
                    r = this.length > 1; return a.length < 1 ? this : this.each(function(t, i) { o = n ? i : i.parentNode, i = 0 == e ? i.nextSibling : 1 == e ? i.firstChild : 2 == e ? i : null, a.forEach(function(t) { if (r) t = t.cloneNode(!0);
                        else if (!o) return $(t).remove();
                        w(o.insertBefore(t, i), function(t) { null == t.nodeName || "SCRIPT" !== t.nodeName.toUpperCase() || t.type && "text/javascript" !== t.type || t.src || window.eval.call(window, t.innerHTML) }) }) }) }, $.fn[n ? i + "To" : "insert" + (e ? "Before" : "After")] = function(t) { return $(t)[i](this), this } }), Z.Z.prototype = $.fn, Z.uniq = C, Z.deserializeValue = v, $.zepto = Z, $ }();
    window.Zepto = e, void 0 === window.$ && (window.$ = e), t.exports = e,
        function(t) {
            function i(t) { return t._zid || (t._zid = u++) }

            function e(t, e, a, r) { if (e = n(e), e.ns) var c = o(e.ns); return (m[i(t)] || []).filter(function(t) { return t && (!e.e || t.e == e.e) && (!e.ns || c.test(t.ns)) && (!a || i(t.fn) === i(a)) && (!r || t.sel == r) }) }

            function n(t) { var i = ("" + t).split("."); return { e: i[0], ns: i.slice(1).sort().join(" ") } }

            function o(t) { return new RegExp("(?:^| )" + t.replace(" ", " .* ?") + "(?: |$)") }

            function a(t, i) { return t.del && !x && t.e in v || !!i }

            function r(t) { return w[t] || x && v[t] || t }

            function c(e, o, c, s, p, u, h) { var g = i(e),
                    f = m[g] || (m[g] = []);
                o.split(/\s/).forEach(function(i) { if ("ready" == i) return t(document).ready(c); var o = n(i);
                    o.fn = c, o.sel = p, o.e in w && (c = function(i) { var e = i.relatedTarget; if (!e || e !== this && !t.contains(this, e)) return o.fn.apply(this, arguments) }), o.del = u; var g = u || c;
                    o.proxy = function(t) { if (t = l(t), !t.isImmediatePropagationStopped()) { t.data = s; var i = g.apply(e, t._args == d ? [t] : [t].concat(t._args)); return i === !1 && (t.preventDefault(), t.stopPropagation()), i } }, o.i = f.length, f.push(o), "addEventListener" in e && e.addEventListener(r(o.e), o.proxy, a(o, h)) }) }

            function s(t, n, o, c, s) { var l = i(t);
                (n || "").split(/\s/).forEach(function(i) { e(t, i, o, c).forEach(function(i) { delete m[l][i.i], "removeEventListener" in t && t.removeEventListener(r(i.e), i.proxy, a(i, s)) }) }) }

            function l(i, e) { return !e && i.isDefaultPrevented || (e || (e = i), t.each(z, function(t, n) { var o = e[t];
                    i[t] = function() { return this[n] = k, o && o.apply(e, arguments) }, i[n] = y }), (e.defaultPrevented !== d ? e.defaultPrevented : "returnValue" in e ? e.returnValue === !1 : e.getPreventDefault && e.getPreventDefault()) && (i.isDefaultPrevented = k)), i }

            function p(t) { var i, e = { originalEvent: t }; for (i in t) $.test(i) || t[i] === d || (e[i] = t[i]); return l(e, t) } var d, u = 1,
                h = Array.prototype.slice,
                g = t.isFunction,
                f = function(t) { return "string" == typeof t },
                m = {},
                b = {},
                x = "onfocusin" in window,
                v = { focus: "focusin", blur: "focusout" },
                w = { mouseenter: "mouseover", mouseleave: "mouseout" };
            b.click = b.mousedown = b.mouseup = b.mousemove = "MouseEvents", t.event = { add: c, remove: s }, t.proxy = function(e, n) { if (g(e)) { var o = function() { return e.apply(n, arguments) }; return o._zid = i(e), o } if (f(n)) return t.proxy(e[n], e); throw new TypeError("expected function") }, t.fn.bind = function(t, i, e) { return this.on(t, i, e) }, t.fn.unbind = function(t, i) { return this.off(t, i) }, t.fn.one = function(t, i, e, n) { return this.on(t, i, e, n, 1) }; var k = function() { return !0 },
                y = function() { return !1 },
                $ = /^([A-Z]|returnValue$|layer[XY]$)/,
                z = { preventDefault: "isDefaultPrevented", stopImmediatePropagation: "isImmediatePropagationStopped", stopPropagation: "isPropagationStopped" };
            t.fn.delegate = function(t, i, e) { return this.on(i, t, e) }, t.fn.undelegate = function(t, i, e) { return this.off(i, t, e) }, t.fn.live = function(i, e) { return t(document.body).delegate(this.selector, i, e), this }, t.fn.die = function(i, e) { return t(document.body).undelegate(this.selector, i, e), this }, t.fn.on = function(i, e, n, o, a) { var r, l, u = this; return i && !f(i) ? (t.each(i, function(t, i) { u.on(t, e, n, i, a) }), u) : (f(e) || g(o) || o === !1 || (o = n, n = e, e = d), (g(n) || n === !1) && (o = n, n = d), o === !1 && (o = y), u.each(function(d, u) { a && (r = function(t) { return s(u, t.type, o), o.apply(this, arguments) }), e && (l = function(i) { var n, a = t(i.target).closest(e, u).get(0); if (a && a !== u) return n = t.extend(p(i), { currentTarget: a, liveFired: u }), (r || o).apply(a, [n].concat(h.call(arguments, 1))) }), c(u, i, o, n, e, l || r) })) }, t.fn.off = function(i, e, n) { var o = this; return i && !f(i) ? (t.each(i, function(t, i) { o.off(t, e, i) }), o) : (f(e) || g(n) || n === !1 || (n = e, e = d), n === !1 && (n = y), o.each(function() { s(this, i, n, e) })) }, t.fn.trigger = function(i, e) { return i = f(i) || t.isPlainObject(i) ? t.Event(i) : l(i), i._args = e, this.each(function() { "dispatchEvent" in this ? this.dispatchEvent(i) : t(this).triggerHandler(i, e) }) }, t.fn.triggerHandler = function(i, n) { var o, a; return this.each(function(r, c) { o = p(f(i) ? t.Event(i) : i), o._args = n, o.target = c, t.each(e(c, i.type || i), function(t, i) { if (a = i.proxy(o), o.isImmediatePropagationStopped()) return !1 }) }), a }, "focusin focusout load resize scroll unload click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select keydown keypress keyup error".split(" ").forEach(function(i) { t.fn[i] = function(t) { return t ? this.bind(i, t) : this.trigger(i) } }), ["focus", "blur"].forEach(function(i) { t.fn[i] = function(t) { return t ? this.bind(i, t) : this.each(function() { try { this[i]() } catch (t) {} }), this } }), t.Event = function(t, i) { f(t) || (i = t, t = i.type); var e = document.createEvent(b[t] || "Events"),
                    n = !0; if (i)
                    for (var o in i) "bubbles" == o ? n = !!i[o] : e[o] = i[o]; return e.initEvent(t, n, !0), l(e) } }(e),
        function(t) {
            function i(i, e, n) { var o = t.Event(e); return t(i).trigger(o, n), !o.isDefaultPrevented() }

            function e(t, e, n, o) { if (t.global) return i(e || x, n, o) }

            function n(i) { i.global && 0 === t.active++ && e(i, null, "ajaxStart") }

            function o(i) { i.global && !--t.active && e(i, null, "ajaxStop") }

            function a(t, i) { var n = i.context; return i.beforeSend.call(n, t, i) !== !1 && e(i, n, "ajaxBeforeSend", [t, i]) !== !1 && void e(i, n, "ajaxSend", [t, i]) }

            function r(t, i, n, o) { var a = n.context,
                    r = "success";
                n.success.call(a, t, r, i), o && o.resolveWith(a, [t, r, i]), e(n, a, "ajaxSuccess", [i, n, t]), s(r, i, n) }

            function c(t, i, n, o, a) { var r = o.context;
                o.error.call(r, n, i, t), a && a.rejectWith(r, [n, i, t]), e(o, r, "ajaxError", [n, o, t || i]), s(i, n, o) }

            function s(t, i, n) { var a = n.context;
                n.complete.call(a, i, t), e(n, a, "ajaxComplete", [i, n]), o(n) }

            function l() {}

            function p(t) { return t && (t = t.split(";", 2)[0]), t && (t == $ ? "html" : t == y ? "json" : w.test(t) ? "script" : k.test(t) && "xml") || "text" }

            function d(t, i) { return "" == i ? t : (t + "&" + i).replace(/[&?]{1,2}/, "?") }

            function u(i) { i.processData && i.data && "string" != t.type(i.data) && (i.data = t.param(i.data, i.traditional)), !i.data || i.type && "GET" != i.type.toUpperCase() || (i.url = d(i.url, i.data), i.data = void 0) }

            function h(i, e, n, o) { return t.isFunction(e) && (o = n, n = e, e = void 0), t.isFunction(n) || (o = n, n = void 0), { url: i, data: e, success: n, dataType: o } }

            function g(i, e, n, o) {
                var a, r = t.isArray(e),
                    c = t.isPlainObject(e);
                t.each(e, function(e, s) {
                    a = t.type(s), o && (e = n ? o : o + "[" + (c || "object" == a || "array" == a ? e : "") + "]"), !o && r ? i.add(s.name, s.value) : "array" == a || !n && "object" == a ? g(i, s, n, e) : i.add(e, s)
                })
            }
            var f, m, b = 0,
                x = window.document,
                v = /<script\b[^<]*(?:(?!<\/script>)<[^<]*)*<\/script>/gi,
                w = /^(?:text|application)\/javascript/i,
                k = /^(?:text|application)\/xml/i,
                y = "application/json",
                $ = "text/html",
                z = /^\s*$/;
            t.active = 0, t.ajaxJSONP = function(i, e) { if (!("type" in i)) return t.ajax(i); var n, o, s = i.jsonpCallback,
                    l = (t.isFunction(s) ? s() : s) || "jsonp" + ++b,
                    p = x.createElement("script"),
                    d = window[l],
                    u = function(i) { t(p).triggerHandler("error", i || "abort") },
                    h = { abort: u }; return e && e.promise(h), t(p).on("load error", function(a, s) { clearTimeout(o), t(p).off().remove(), "error" != a.type && n ? r(n[0], h, i, e) : c(null, s || "error", h, i, e), window[l] = d, n && t.isFunction(d) && d(n[0]), d = n = void 0 }), a(h, i) === !1 ? (u("abort"), h) : (window[l] = function() { n = arguments }, p.src = i.url.replace(/\?(.+)=\?/, "?$1=" + l), x.head.appendChild(p), i.timeout > 0 && (o = setTimeout(function() { u("timeout") }, i.timeout)), h) }, t.ajaxSettings = { type: "GET", beforeSend: l, success: l, error: l, complete: l, context: null, global: !0, xhr: function() { return new window.XMLHttpRequest }, accepts: { script: "text/javascript, application/javascript, application/x-javascript", json: y, xml: "application/xml, text/xml", html: $, text: "text/plain" }, crossDomain: !1, timeout: 0, processData: !0, cache: !0 }, t.ajax = function(i) { var e = t.extend({}, i || {}),
                    o = t.Deferred && t.Deferred(); for (f in t.ajaxSettings) void 0 === e[f] && (e[f] = t.ajaxSettings[f]);
                n(e), e.crossDomain || (e.crossDomain = /^([\w-]+:)?\/\/([^\/]+)/.test(e.url) && RegExp.$2 != window.location.host), e.url || (e.url = window.location.toString()), u(e), e.cache === !1 && (e.url = d(e.url, "_=" + Date.now())); var s = e.dataType,
                    h = /\?.+=\?/.test(e.url); if ("jsonp" == s || h) return h || (e.url = d(e.url, e.jsonp ? e.jsonp + "=?" : e.jsonp === !1 ? "" : "callback=?")), t.ajaxJSONP(e, o); var g, b = e.accepts[s],
                    x = {},
                    v = function(t, i) { x[t.toLowerCase()] = [t, i] },
                    w = /^([\w-]+:)\/\//.test(e.url) ? RegExp.$1 : window.location.protocol,
                    k = e.xhr(),
                    y = k.setRequestHeader; if (o && o.promise(k), e.crossDomain || v("X-Requested-With", "XMLHttpRequest"), v("Accept", b || "*/*"), (b = e.mimeType || b) && (b.indexOf(",") > -1 && (b = b.split(",", 2)[0]), k.overrideMimeType && k.overrideMimeType(b)), (e.contentType || e.contentType !== !1 && e.data && "GET" != e.type.toUpperCase()) && v("Content-Type", e.contentType || "application/x-www-form-urlencoded"), e.headers)
                    for (m in e.headers) v(m, e.headers[m]); if (k.setRequestHeader = v, k.onreadystatechange = function() { if (4 == k.readyState) { k.onreadystatechange = l, clearTimeout(g); var i, n = !1; if (k.status >= 200 && k.status < 300 || 304 == k.status || 0 == k.status && "file:" == w) { s = s || p(e.mimeType || k.getResponseHeader("content-type")), i = k.responseText; try { "script" == s ? (0, eval)(i) : "xml" == s ? i = k.responseXML : "json" == s && (i = z.test(i) ? null : t.parseJSON(i)) } catch (a) { n = a } n ? c(n, "parsererror", k, e, o) : r(i, k, e, o) } else c(k.statusText || null, k.status ? "error" : "abort", k, e, o) } }, a(k, e) === !1) return k.abort(), c(null, "abort", k, e, o), k; if (e.xhrFields)
                    for (m in e.xhrFields) k[m] = e.xhrFields[m]; var $ = !("async" in e) || e.async;
                k.open(e.type, e.url, $, e.username, e.password); for (m in x) y.apply(k, x[m]); return e.timeout > 0 && (g = setTimeout(function() { k.onreadystatechange = l, k.abort(), c(null, "timeout", k, e, o) }, e.timeout)), k.send(e.data ? e.data : null), k }, t.get = function() { return t.ajax(h.apply(null, arguments)) }, t.post = function() { var i = h.apply(null, arguments); return i.type = "POST", t.ajax(i) }, t.getJSON = function() { var i = h.apply(null, arguments); return i.dataType = "json", t.ajax(i) }, t.fn.load = function(i, e, n) { if (!this.length) return this; var o, a = this,
                    r = i.split(/\s/),
                    c = h(i, e, n),
                    s = c.success; return r.length > 1 && (c.url = r[0], o = r[1]), c.success = function(i) { a.html(o ? t("<div>").html(i.replace(v, "")).find(o) : i), s && s.apply(a, arguments) }, t.ajax(c), this };
            var j = encodeURIComponent;
            t.param = function(t, i) { var e = []; return e.add = function(t, i) { this.push(j(t) + "=" + j(i)) }, g(e, t, i), e.join("&").replace(/%20/g, "+") }
        }(e),
        function(t) { t.fn.serializeArray = function() { var i, e = []; return t([].slice.call(this.get(0).elements)).each(function() { i = t(this); var n = i.attr("type"); "fieldset" != this.nodeName.toLowerCase() && !this.disabled && "submit" != n && "reset" != n && "button" != n && ("radio" != n && "checkbox" != n || this.checked) && e.push({ name: i.attr("name"), value: i.val() }) }), e }, t.fn.serializeObject = function() { var i, e = {}; return t([].slice.call(this.get(0).elements)).each(function() { i = t(this); var n = i.attr("type"),
                        o = i.attr("name"),
                        a = i.val();
                    e[o] = e[o] || void 0, "fieldset" != this.nodeName.toLowerCase() && !this.disabled && "submit" != n && "reset" != n && "button" != n && ("radio" != n && "checkbox" != n || this.checked) && (e[o] ? e[o].push ? e[o].push(a) : e[o] = [e[o], a] : e[o] = a) }), e }, t.fn.serialize = function() { var t = []; return this.serializeArray().forEach(function(i) { t.push(encodeURIComponent(i.name) + "=" + encodeURIComponent(i.value)) }), t.join("&") }, t.fn.submit = function(i) { if (i) this.bind("submit", i);
                else if (this.length) { var e = t.Event("submit");
                    this.eq(0).trigger(e), e.isDefaultPrevented() || this.get(0).submit() } return this } }(e),
        function(t) { "__proto__" in {} || t.extend(t.zepto, { Z: function(i, e) { return i = i || [], t.extend(i, t.fn), i.selector = e || "", i.__Z = !0, i }, isZ: function(i) { return "array" === t.type(i) && "__Z" in i } }); try { getComputedStyle(void 0) } catch (i) { var e = getComputedStyle;
                window.getComputedStyle = function(t) { try { return e(t) } catch (i) { return null } } } }(e),
        function(t) {
            function i(i, n) { var s = i[c],
                    l = s && o[s]; if (void 0 === n) return l || e(i); if (l) { if (n in l) return l[n]; var p = r(n); if (p in l) return l[p] } return a.call(t(i), n) }

            function e(i, e, a) { var s = i[c] || (i[c] = ++t.uuid),
                    l = o[s] || (o[s] = n(i)); return void 0 !== e && (l[r(e)] = a), l }

            function n(i) { var e = {}; return t.each(i.attributes || s, function(i, n) { 0 == n.name.indexOf("data-") && (e[r(n.name.replace("data-", ""))] = t.zepto.deserializeValue(n.value)) }), e } var o = {},
                a = t.fn.data,
                r = t.camelCase,
                c = t.expando = "Zepto" + +new Date,
                s = [];
            t.fn.data = function(n, o) { return void 0 === o ? t.isPlainObject(n) ? this.each(function(i, o) { t.each(n, function(t, i) { e(o, t, i) }) }) : 0 == this.length ? void 0 : i(this[0], n) : this.each(function() { e(this, n, o) }) }, t.fn.removeData = function(i) { return "string" == typeof i && (i = i.split(/\s+/)), this.each(function() { var e = this[c],
                        n = e && o[e];
                    n && t.each(i || n, function(t) { delete n[i ? r(this) : t] }) }) }, ["remove", "empty"].forEach(function(i) { var e = t.fn[i];
                t.fn[i] = function() { var t = this.find("*"); return "remove" === i && (t = t.add(this)), t.removeData(), e.call(this) } }) }(e),
        function(t) { t.Callbacks = function(i) { i = t.extend({}, i); var e, n, o, a, r, c, s = [],
                    l = !i.once && [],
                    p = function(t) { for (e = i.memory && t, n = !0, c = a || 0, a = 0, r = s.length, o = !0; s && c < r; ++c)
                            if (s[c].apply(t[0], t[1]) === !1 && i.stopOnFalse) { e = !1; break }
                        o = !1, s && (l ? l.length && p(l.shift()) : e ? s.length = 0 : d.disable()) },
                    d = { add: function() { if (s) { var n = s.length,
                                    c = function(e) { t.each(e, function(t, e) { "function" == typeof e ? i.unique && d.has(e) || s.push(e) : e && e.length && "string" != typeof e && c(e) }) };
                                c(arguments), o ? r = s.length : e && (a = n, p(e)) } return this }, remove: function() { return s && t.each(arguments, function(i, e) { for (var n;
                                    (n = t.inArray(e, s, n)) > -1;) s.splice(n, 1), o && (n <= r && --r, n <= c && --c) }), this }, has: function(i) { return !(!s || !(i ? t.inArray(i, s) > -1 : s.length)) }, empty: function() { return r = s.length = 0, this }, disable: function() { return s = l = e = void 0, this }, disabled: function() { return !s }, lock: function() { return l = void 0, e || d.disable(), this }, locked: function() { return !l }, fireWith: function(t, i) { return !s || n && !l || (i = i || [], i = [t, i.slice ? i.slice() : i], o ? l.push(i) : p(i)), this }, fire: function() { return d.fireWith(this, arguments) }, fired: function() { return !!n } }; return d } }(e),
        function(t) {
            function i(e) { var n = [
                        ["resolve", "done", t.Callbacks({ once: 1, memory: 1 }), "resolved"],
                        ["reject", "fail", t.Callbacks({ once: 1, memory: 1 }), "rejected"],
                        ["notify", "progress", t.Callbacks({ memory: 1 })]
                    ],
                    o = "pending",
                    a = { state: function() { return o }, always: function() { return r.done(arguments).fail(arguments), this }, then: function() { var e = arguments; return i(function(i) { t.each(n, function(n, o) { var c = t.isFunction(e[n]) && e[n];
                                    r[o[1]](function() { var e = c && c.apply(this, arguments); if (e && t.isFunction(e.promise)) e.promise().done(i.resolve).fail(i.reject).progress(i.notify);
                                        else { var n = this === a ? i.promise() : this,
                                                r = c ? [e] : arguments;
                                            i[o[0] + "With"](n, r) } }) }), e = null }).promise() }, promise: function(i) { return null != i ? t.extend(i, a) : a } },
                    r = {}; return t.each(n, function(t, i) { var e = i[2],
                        c = i[3];
                    a[i[1]] = e.add, c && e.add(function() { o = c }, n[1 ^ t][2].disable, n[2][2].lock), r[i[0]] = function() { return r[i[0] + "With"](this === r ? a : this, arguments), this }, r[i[0] + "With"] = e.fireWith }), a.promise(r), e && e.call(r, r), r } var e = Array.prototype.slice;
            t.when = function(n) { var o, a, r, c = e.call(arguments),
                    s = c.length,
                    l = 0,
                    p = 1 !== s || n && t.isFunction(n.promise) ? s : 0,
                    d = 1 === p ? n : i(),
                    u = function(t, i, n) { return function(a) { i[t] = this, n[t] = arguments.length > 1 ? e.call(arguments) : a, n === o ? d.notifyWith(i, n) : --p || d.resolveWith(i, n) } }; if (s > 1)
                    for (o = new Array(s), a = new Array(s), r = new Array(s); l < s; ++l) c[l] && t.isFunction(c[l].promise) ? c[l].promise().done(u(l, r, c)).fail(d.reject).progress(u(l, a, o)) : --p; return p || d.resolveWith(r, c), d.promise() }, t.Deferred = i }(e),
        function(t) { t.fn.end = function() { return this.prevObject || t() }, t.fn.andSelf = function() { return this.add(this.prevObject || t()) }, "filter,add,not,eq,first,last,find,closest,parents,parent,children,siblings".split(",").forEach(function(i) { var e = t.fn[i];
                t.fn[i] = function() { var t = e.apply(this, arguments); return t.prevObject = this, t } }) }(e),
        function(t) {
            function i(t, i, e, n) { return Math.abs(t - i) >= Math.abs(e - n) ? t - i > 0 ? "Left" : "Right" : e - n > 0 ? "Up" : "Down" }

            function e() { p = null, u.last && (u.el.trigger("longTap"), u = {}) }

            function n() { p && clearTimeout(p), p = null }

            function o() { c && clearTimeout(c), s && clearTimeout(s), l && clearTimeout(l), p && clearTimeout(p), c = s = l = p = null, u = {} }

            function a(t) { return ("touch" == t.pointerType || t.pointerType == t.MSPOINTER_TYPE_TOUCH) && t.isPrimary }

            function r(t, i) { return t.type == "pointer" + i || t.type.toLowerCase() == "mspointer" + i } var c, s, l, p, d, u = {},
                h = 750;
            t(document).ready(function() { var g, f, m, b, x = 0,
                    v = 0; "MSGesture" in window && (d = new MSGesture, d.target = document.body), t(document).bind("MSGestureEnd", function(t) { var i = t.velocityX > 1 ? "Right" : t.velocityX < -1 ? "Left" : t.velocityY > 1 ? "Down" : t.velocityY < -1 ? "Up" : null;
                    i && (u.el.trigger("swipe"), u.el.trigger("swipe" + i)) }).on("touchstart MSPointerDown pointerdown", function(i) {
                    (b = r(i, "down")) && !a(i) || (m = b ? i : i.touches[0], i.touches && 1 === i.touches.length && u.x2 && (u.x2 = void 0, u.y2 = void 0), g = Date.now(), f = g - (u.last || g), u.el = t("tagName" in m.target ? m.target : m.target.parentNode), c && clearTimeout(c), u.x1 = m.pageX, u.y1 = m.pageY, f > 0 && f <= 250 && (u.isDoubleTap = !0), u.last = g, p = setTimeout(e, h), d && b && d.addPointer(i.pointerId)) }).on("touchmove MSPointerMove pointermove", function(t) {
                    (b = r(t, "move")) && !a(t) || (m = b ? t : t.touches[0], n(), u.x2 = m.pageX, u.y2 = m.pageY, x += Math.abs(u.x1 - u.x2), v += Math.abs(u.y1 - u.y2)) }).on("touchend MSPointerUp pointerup", function(e) {
                    (b = r(e, "up")) && !a(e) || (n(), u.x2 && Math.abs(u.x1 - u.x2) > 30 || u.y2 && Math.abs(u.y1 - u.y2) > 30 ? l = setTimeout(function() { u.el && u.el.trigger("swipe"), u.el && u.el.trigger("swipe" + i(u.x1, u.x2, u.y1, u.y2)), u = {} }, 0) : "last" in u && (x < 30 && v < 30 ? s = setTimeout(function() { var i = t.Event("tap");
                        i.cancelTouch = o, u.el && u.el.trigger(i), u.isDoubleTap ? (u.el && u.el.trigger("doubleTap"), u = {}) : c = setTimeout(function() { c = null, u.el && u.el.trigger("singleTap"), u = {} }, 250) }, 0) : u = {}), x = v = 0) }).on("touchcancel MSPointerCancel pointercancel", o), t(window).on("scroll", o) }), ["swipe", "swipeLeft", "swipeRight", "swipeUp", "swipeDown", "doubleTap", "tap", "singleTap", "longTap"].forEach(function(i) { t.fn[i] = function(t) { return this.on(i, t) } }) }(e),
        function(t, i) {
            function e(t) { return t.replace(/([a-z])([A-Z])/, "$1-$2").toLowerCase() }

            function n(t) { return o ? o + t : t.toLowerCase() } var o, a, r, c, s, l, p, d, u, h, g = "",
                f = { Webkit: "webkit", Moz: "", O: "o" },
                m = window.document,
                b = m.createElement("div"),
                x = /^((translate|rotate|scale)(X|Y|Z|3d)?|matrix(3d)?|perspective|skew(X|Y)?)$/i,
                v = {};
            t.each(f, function(t, e) { if (b.style[t + "TransitionProperty"] !== i) return g = "-" + t.toLowerCase() + "-", o = e, !1 }), a = g + "transform", v[r = g + "transition-property"] = v[c = g + "transition-duration"] = v[l = g + "transition-delay"] = v[s = g + "transition-timing-function"] = v[p = g + "animation-name"] = v[d = g + "animation-duration"] = v[h = g + "animation-delay"] = v[u = g + "animation-timing-function"] = "", t.fx = { off: o === i && b.style.transitionProperty === i, speeds: { _default: 400, fast: 200, slow: 600 }, cssPrefix: g, transitionEnd: n("TransitionEnd"), animationEnd: n("AnimationEnd") }, t.fn.animate = function(e, n, o, a, r) { return t.isFunction(n) && (a = n, o = i, n = i), t.isFunction(o) && (a = o, o = i), t.isPlainObject(n) && (o = n.easing, a = n.complete, r = n.delay, n = n.duration), n && (n = ("number" == typeof n ? n : t.fx.speeds[n] || t.fx.speeds._default) / 1e3), r && (r = parseFloat(r) / 1e3), this.anim(e, n, o, a, r) }, t.fn.anim = function(n, o, g, f, m) { var b, w, k, y = {},
                    $ = "",
                    z = this,
                    j = t.fx.transitionEnd,
                    C = !1; if (o === i && (o = t.fx.speeds._default / 1e3), m === i && (m = 0), t.fx.off && (o = 0), "string" == typeof n) y[p] = n, y[d] = o + "s", y[h] = m + "s", y[u] = g || "linear", j = t.fx.animationEnd;
                else { w = []; for (b in n) x.test(b) ? $ += b + "(" + n[b] + ") " : (y[b] = n[b], w.push(e(b)));
                    $ && (y[a] = $, w.push(a)), o > 0 && "object" == typeof n && (y[r] = w.join(", "), y[c] = o + "s", y[l] = m + "s", y[s] = g || "linear") } return k = function(i) { if ("undefined" != typeof i) { if (i.target !== i.currentTarget) return;
                        t(i.target).unbind(j, k) } else t(this).unbind(j, k);
                    C = !0, t(this).css(v), f && f.call(this) }, o > 0 && (this.bind(j, k), setTimeout(function() { C || k.call(z) }, 1e3 * o + 25)), this.size() && this.get(0).clientLeft, this.css(y), o <= 0 && setTimeout(function() { z.each(function() { k.call(this) }) }, 0), this }, b = null }(e),
        function(t) {
            function i(i) { return i = t(i), !(!i.width() && !i.height()) && "none" !== i.css("display") }

            function e(t, i) { t = t.replace(/=#\]/g, '="#"]'); var e, n, o = c.exec(t); if (o && o[2] in r && (e = r[o[2]], n = o[3], t = o[1], n)) { var a = Number(n);
                    n = isNaN(a) ? n.replace(/^["']|["']$/g, "") : a } return i(t, e, n) } var n = t.zepto,
                o = n.qsa,
                a = n.matches,
                r = t.expr[":"] = { visible: function() { if (i(this)) return this }, hidden: function() { if (!i(this)) return this }, selected: function() { if (this.selected) return this }, checked: function() { if (this.checked) return this }, parent: function() { return this.parentNode }, first: function(t) { if (0 === t) return this }, last: function(t, i) { if (t === i.length - 1) return this }, eq: function(t, i, e) { if (t === e) return this }, contains: function(i, e, n) { if (t(this).text().indexOf(n) > -1) return this }, has: function(t, i, e) { if (n.qsa(this, e).length) return this } },
                c = new RegExp("(.*):(\\w+)(?:\\(([^)]+)\\))?$\\s*"),
                s = /^\s*>/,
                l = "Zepto" + +new Date;
            n.qsa = function(i, a) { return e(a, function(e, r, c) { try { var p;!e && r ? e = "*" : s.test(e) && (p = t(i).addClass(l), e = "." + l + " " + e); var d = o(i, e) } catch (u) { throw console.error("error performing selector: %o", a), u } finally { p && p.removeClass(l) } return r ? n.uniq(t.map(d, function(t, i) { return r.call(t, i, d, c) })) : d }) }, n.matches = function(t, i) { return e(i, function(i, e, n) { return (!i || a(t, i)) && (!e || e.call(t, null, n) === t) }) } }(e),
        function(t) {
            function i(t) { var i = this.os = {},
                    e = this.browser = {},
                    n = t.match(/Web[kK]it[\/]{0,1}([\d.]+)/),
                    o = t.match(/(Android);?[\s\/]+([\d.]+)?/),
                    a = t.match(/(iPad).*OS\s([\d_]+)/),
                    r = t.match(/(iPod)(.*OS\s([\d_]+))?/),
                    c = !a && t.match(/(iPhone\sOS)\s([\d_]+)/),
                    s = t.match(/(webOS|hpwOS)[\s\/]([\d.]+)/),
                    l = s && t.match(/TouchPad/),
                    p = t.match(/Kindle\/([\d.]+)/),
                    d = t.match(/Silk\/([\d._]+)/),
                    u = t.match(/(BlackBerry).*Version\/([\d.]+)/),
                    h = t.match(/(BB10).*Version\/([\d.]+)/),
                    g = t.match(/(RIM\sTablet\sOS)\s([\d.]+)/),
                    f = t.match(/PlayBook/),
                    m = t.match(/Chrome\/([\d.]+)/) || t.match(/CriOS\/([\d.]+)/),
                    b = t.match(/Firefox\/([\d.]+)/),
                    x = t.match(/MSIE\s([\d.]+)/),
                    v = n && t.match(/Mobile\//) && !m,
                    w = t.match(/(iPhone|iPod|iPad).*AppleWebKit(?!.*Safari)/) && !m;
                (e.webkit = !!n) && (e.version = n[1]), o && (i.android = !0, i.version = o[2]), c && !r && (i.ios = i.iphone = !0, i.version = c[2].replace(/_/g, ".")), a && (i.ios = i.ipad = !0, i.version = a[2].replace(/_/g, ".")), r && (i.ios = i.ipod = !0, i.version = r[3] ? r[3].replace(/_/g, ".") : null), s && (i.webos = !0, i.version = s[2]), l && (i.touchpad = !0), u && (i.blackberry = !0, i.version = u[2]), h && (i.bb10 = !0, i.version = h[2]), g && (i.rimtabletos = !0, i.version = g[2]), f && (e.playbook = !0), p && (i.kindle = !0, i.version = p[1]), d && (e.silk = !0, e.version = d[1]), !d && i.android && t.match(/Kindle Fire/) && (e.silk = !0), m && (e.chrome = !0, e.version = m[1]), b && (e.firefox = !0, e.version = b[1]), x && (e.ie = !0, e.version = x[1]), v && (t.match(/Safari/) || i.ios) && (e.safari = !0), w && (e.webview = !0), i.tablet = !!(a || f || o && !t.match(/Mobile/) || b && t.match(/Tablet/) || x && !t.match(/Phone/) && t.match(/Touch/)), i.phone = !(i.tablet || i.ipod || !(o || c || s || u || h || m && t.match(/Android/) || m && t.match(/CriOS\/([\d.]+)/) || b && t.match(/Mobile/) || x && t.match(/Touch/))) } i.call(t, navigator.userAgent), t.__detect = i }(e), t.exports = e
}, function(t, i, e) { var n = e(26);
    i.init = function(t) { this.config = t, $("body").removeClass("loading").append(n()), Widget.initWidgets() }, i.lazyload = Widget.define({ init: function(t) { this.config = t, this.$img = this.config.$lazyloadImg, this.tempImgArr = [], this.createTempImg(this.$img), this.changeSrc() }, createTempImg: function(t) { var i = this;
            t.each(function() { var t = $(this).data("url"),
                    e = new Image;
                e.src = t, i.tempImgArr.push(e) }) }, changeSrc: function() { var t = this;
            $(this.tempImgArr).each(function() { var i = this;
                this.onload = function() { var e = $(t.tempImgArr).index(i),
                        n = i.src;
                    $(t.$img[e]).attr("src", n) } }) } }), i.scrollLazyLoad = Widget.define({ init: function() { var t = this;
            this.loadImg(), this.resizeImg(), $("body").on("add", ".js-lazy-load", function() { t.loadImg(), t.resizeImg() }) }, loadImg: function() { var t = $(".js-lazy-load"); if (t && t.length) { t.each(function() { var t = $(this).offset().top;
                    $(this).data("offsetTop", t) }); var i = $(window).height(),
                    e = null,
                    n = function() { clearTimeout(e), e = setTimeout(function() { var e = $(window).scrollTop();
                            t.each(function() { var t = $(this).data("original"); if (t) { var n = $(this).data("offsetTop");
                                    e + i + 300 > n && ($(this).attr("src", t), $(this).data("original", "")) } }, 20) }) };
                $(window).on("scroll", n), $(window).trigger("scroll") } }, resizeImg: function() { var t = document.documentElement.clientWidth,
                i = t / 2 - 15,
                e = i / 1.526;
            $(".list_post_image_size").css({ width: i, height: e }) } }) }, function(t, i, e) { t.exports = e.p + "icon_new_v2.20257d35f41d3b314b0504ca5b878f29.png" }, function(t, i, e) { "use strict";

    function n(t) { var i = l.exec(t); return { protocol: i[1] ? i[1].toLowerCase() : "", slashes: !!i[2], rest: i[3] } }

    function o(t, i) { for (var e = (i || "/").split("/").slice(0, -1).concat(t.split("/")), n = e.length, o = e[n - 1], a = !1, r = 0; n--;) "." === e[n] ? e.splice(n, 1) : ".." === e[n] ? (e.splice(n, 1), r++) : r && (0 === n && (a = !0), e.splice(n, 1), r--); return a && e.unshift(""), "." !== o && ".." !== o || e.push(""), e.join("/") }

    function a(t, i, e) { if (!(this instanceof a)) return new a(t, i, e); var l, d, u, h, g, f, m = p.slice(),
            b = typeof i,
            x = this,
            v = 0; for ("object" !== b && "string" !== b && (e = i, i = null), e && "function" != typeof e && (e = s.parse), i = c(i), d = n(t || ""), l = !d.protocol && !d.slashes, x.slashes = d.slashes || l && i.slashes, x.protocol = d.protocol || i.protocol || "", t = d.rest, d.slashes || (m[2] = [/(.*)/, "pathname"]); v < m.length; v++) h = m[v], u = h[0], f = h[1], u !== u ? x[f] = t : "string" == typeof u ? ~(g = t.indexOf(u)) && ("number" == typeof h[2] ? (x[f] = t.slice(0, g), t = t.slice(g + h[2])) : (x[f] = t.slice(g), t = t.slice(0, g))) : (g = u.exec(t)) && (x[f] = g[1], t = t.slice(0, g.index)), x[f] = x[f] || (l && h[3] ? i[f] || "" : ""), h[4] && (x[f] = x[f].toLowerCase());
        e && (x.query = e(x.query)), l && i.slashes && "/" !== x.pathname.charAt(0) && ("" !== x.pathname || "" !== i.pathname) && (x.pathname = o(x.pathname, i.pathname)), r(x.port, x.protocol) || (x.host = x.hostname, x.port = ""), x.username = x.password = "", x.auth && (h = x.auth.split(":"), x.username = h[0] || "", x.password = h[1] || ""), x.origin = x.protocol && x.host && "file:" !== x.protocol ? x.protocol + "//" + x.host : "null", x.href = x.toString() } var r = e(41),
        c = e(42),
        s = e(40),
        l = /^([a-z][a-z0-9.+-]*:)?(\/\/)?([\S\s]*)/i,
        p = [
            ["#", "hash"],
            ["?", "query"],
            ["/", "pathname"],
            ["@", "auth", 1],
            [NaN, "host", void 0, 1, 1],
            [/:(\d+)$/, "port", void 0, 1],
            [NaN, "hostname", void 0, 1, 1]
        ];
    a.prototype.set = function(t, i, e) { var n = this; switch (t) {
            case "query":
                "string" == typeof i && i.length && (i = (e || s.parse)(i)), n[t] = i; break;
            case "port":
                n[t] = i, r(i, n.protocol) ? i && (n.host = n.hostname + ":" + i) : (n.host = n.hostname, n[t] = ""); break;
            case "hostname":
                n[t] = i, n.port && (i += ":" + n.port), n.host = i; break;
            case "host":
                n[t] = i, /:\d+$/.test(i) ? (i = i.split(":"), n.port = i.pop(), n.hostname = i.join(":")) : (n.hostname = i, n.port = ""); break;
            case "protocol":
                n.protocol = i.toLowerCase(), n.slashes = !e; break;
            case "pathname":
                n.pathname = i.length && "/" !== i.charAt(0) ? "/" + i : i; break;
            default:
                n[t] = i } for (var o = 0; o < p.length; o++) { var a = p[o];
            a[4] && (n[a[1]] = n[a[1]].toLowerCase()) } return n.origin = n.protocol && n.host && "file:" !== n.protocol ? n.protocol + "//" + n.host : "null", n.href = n.toString(), n }, a.prototype.toString = function(t) { t && "function" == typeof t || (t = s.stringify); var i, e = this,
            n = e.protocol;
        n && ":" !== n.charAt(n.length - 1) && (n += ":"); var o = n + (e.slashes ? "//" : ""); return e.username && (o += e.username, e.password && (o += ":" + e.password), o += "@"), o += e.host + e.pathname, i = "object" == typeof e.query ? t(e.query) : e.query, i && (o += "?" !== i.charAt(0) ? "?" + i : i), e.hash && (o += e.hash), o }, a.extractProtocol = n, a.location = c, a.qs = s, t.exports = a }, function(t, i, e) { var n = e(20),
        o = e(8);
    i.slideBanner = o.define({ init: function(t) { var i = this;
            this.$list = n(t.$list), this.$item = n(t.$item); var e = this.$item.length / this.$list.length;
            this.$item.css({ width: 100 / e + "%" }), this.$list.css({ width: 100 * e + "%" }), this.startX = 0, this.startY = 0, this.listWidth = 0, this.itemIndex = 0, this.itemWidth = 0, this.dist = 1, n("body").on("touchstart", '[data-role="item"]', function(t) { i.startX = t.touches[0].pageX, i.startY = window.scrollY }), n("body").on("touchmove", '[data-role="item"]', function(t) { var e = n(this).parents('[data-role="list"]');
                i.$list = e, i.listWidth = e.width(), i.itemIndex = parseInt(n(this).attr("data-index")), i.itemWidth = n(this).width(); var o = t.touches[0].pageX - i.startX,
                    a = window.scrollY - i.startY,
                    r = i.$list.find("img").eq(i.itemIndex + 1); if (r.length > 0 && r.attr("src", r.attr("data-src")), Math.abs(a) < 30 && Math.abs(o) > 20) { var c = i.itemIndex * i.itemWidth - o; return c <= 50 - i.itemWidth ? c = 50 - i.itemWidth : c >= i.listWidth - 50 && (c = i.listWidth - 50), e.css({ marginLeft: -1 * c + "px" }), i.dist = o, !1 } i.dist = 0 }), n("body").on("touchend", '[data-role="item"]', function(t) { var e = Math.round(i.listWidth / i.itemWidth),
                    n = parseInt(i.itemIndex);
                i.dist < 0 ? n += 1 : i.dist > 0 && (n -= 1); var o = i.$list.attr("data-href"); if (o && o.length > 1 && n >= e) return window.location.href = o, !1;
                n < 0 ? n = 0 : n >= e && (n = e - 1); var a = n * i.itemWidth;
                i.$list.animate({ marginLeft: -1 * a + "px" }); var r = i.$list.siblings('[data-role="icon"]');
                r.children().removeClass("active").eq(n).addClass("active"); var c = i.$list.siblings('[data-role="notice"]');
                c.length > 0 && (n == e - 1 ? c.show() : c.hide()) }) } }) }, function(t, i, e) { var n = e(34),
        o = new n({ platform: "wap", line: "c2c", tracking_type: "click" });
    i.listen = function() { document.addEventListener("readystatechange", function() { "complete" === document.readyState && $("body").on("click", "[data-gzlog]", function(t) { var i = {},
                    e = $(t.currentTarget);
                $.each(e.data("gzlog").split("&"), function(t, e) { var n = e.split("=");
                    i[n[0]] = n[1] }), o.send(i) }) }) } }, function(module, exports) { module.exports = function(obj) { obj || (obj = {}); var __t, __p = "";
        with(obj) __p += '<style type="text/css">\n\timg{width: 40%;}\n</style>\n<div data-widget="app/che/common/widget/lazyload/lazyload.js#lazyload">\n\t<img data-role="lazyloadImg" data-url="http://imgsrc.baidu.com/forum/pic/item/9f510fb30f2442a72c033b31d143ad4bd1130211.jpg" src="http://sta.ganjistatic1.com/src/image/mobile/wap/milan/detail_default_v0.png"/>\n\n\t<img data-role="lazyloadImg" data-url="http://img.tom61.com/down/bizhi/074/19456567.jpg" src="http://sta.ganjistatic1.com/src/image/mobile/wap/milan/detail_default_v0.png"/>\n\n\t<img data-role="lazyloadImg" data-url="http://img2.imgtn.bdimg.com/it/u=229109023,1728252595&fm=21&gp=0.jpg" src="http://sta.ganjistatic1.com/src/image/mobile/wap/milan/detail_default_v0.png"/>\n\n\t<img data-role="lazyloadImg" data-url="http://img5.imgtn.bdimg.com/it/u=585336956,916737495&fm=21&gp=0.jpg" src="http://sta.ganjistatic1.com/src/image/mobile/wap/milan/detail_default_v0.png"/>\n</div>\n'; return __p } }, function(t, i, e) {
    function n(t) { return e(o(t)) }

    function o(t) { return a[t] || function() { throw new Error("Cannot find module '" + t + "'.") }() } var a = { "./baidualog": 5, "./baidualog.js": 5, "./base_page": 10, "./base_page.js": 10, "./check_user": 18, "./check_user.js": 18, "./geo": 17, "./geo.js": 17, "./gz_analytics": 7, "./gz_analytics.js": 7, "./lazyload/lazyload": 21, "./lazyload/lazyload.js": 21, "./lazyload/lazyload.tpl": 26, "./listImgSlide": 24, "./listImgSlide.js": 24, "./local_storage": 13, "./local_storage.js": 13, "./pinch_zoom": 14, "./pinch_zoom.js": 14, "./responsiveBanner": 19, "./responsiveBanner.js": 19, "./scroll": 15, "./scroll.js": 15, "./slide": 9, "./slide.js": 9, "./slider": 12, "./slider.js": 12, "./swipe": 16, "./swipe.js": 16, "./tracker/tracker": 25, "./tracker/tracker.js": 25 };
    n.keys = function() { return Object.keys(a) }, n.resolve = o, t.exports = n, n.id = 27 }, function(t, i, e) {
    i = t.exports = e(1)(), i.push([t.id, 'html{-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;-webkit-tap-highlight-color:rgba(0,0,0,0)}article,aside,blockquote,body,button,code,dd,details,dl,dt,fieldset,figcaption,figure,footer,form,h1,h2,h3,h4,h5,h6,header,hgroup,hr,input,legend,li,menu,nav,ol,p,pre,section,td,textarea,th,ul{margin:0;padding:0}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}audio,canvas,video{display:inline-block}body,button,input,select,textarea{font:16px/1.5 tahoma,arial,sans-serif}h1,h2,h3,h4,h5,h6{font-size:1em}b,cite,code,em,i,small,th{font-size:1em;font-style:normal;font-weight:500}em,i{font-weight:400}button,input,select,textarea{font-size:1em}button,input[type=button],input[type=reset],input[type=submit]{-webkit-appearance:button;-webkit-user-select:none;cursor:pointer}button[disabled],input[disabled]{cursor:default}button::-moz-focus-inner,input::-moz-focus-inner{border:0 none;padding:0}input[type=checkbox],input[type=radio]{box-sizing:border-box}input[type=search]{-webkit-appearance:textfield;box-sizing:content-box}input[type=search]::-webkit-search-cancel-button,input[type=search]::-webkit-search-decoration{-webkit-appearance:none}input:-webkit-autofill{background-color:transparent}::-webkit-inner-spin-button{-webkit-appearance:none}textarea{overflow:auto;vertical-align:top;resize:vertical}table{border-collapse:collapse;border-spacing:0}fieldset,iframe,img{border:0 none}img{display:inline-block;-ms-interpolation-mode:bicubic}li,ol,ul{list-style:none}q:after,q:before{content:""}a{text-decoration:none;-webkit-touch-callout:none}a:active{outline:0 none}html{height:100%}body{min-height:100%}a{color:#404040}::-webkit-input-placeholder{color:#bfbfbf;font-family:helvetica neue,tahoma,arial,hiragino sans gb,microsoft yahei,sans-serif}.fl{float:left}.fr{float:right}.clear{clear:both}.clearfix{zoom:1}.clearfix:after{content:".";clear:both;display:block;height:0;visibility:hidden}.none{display:none}.inline{display:inline}.block{display:block}.inline-block{display:inline-block}.disabled{color:#999;cursor:default;-webkit-tap-highlight-color:rgba(0,0,0,0)}.touch{background-color:#e6e6e6;border-radius:2px}.no-select{-webkit-user-select:none;-ms-user-select:none;user-select:none}.icon{position:relative;display:inline-block;vertical-align:middle;text-indent:-999em;overflow:hidden}.icon,.icon:after{width:20px;height:20px}.icon:after{content:"";position:absolute;top:50%;left:50%;background:url(' + e(30) + ") no-repeat;background-size:80px auto;-webkit-background-size:80px auto;-ms-background-size:80px auto;margin:-10px 0 0 -10px}.icon-close:after{background-position:-20px 0}.icon-push,.icon-renz{width:12px;height:12px}.icon-push:after,.icon-renz:after{width:12px;height:12px;background-position:-45px -40px;margin:-6px 0 0 -6px}.icon-push:after{background-position:-58px -40px}.icon-phone:after{background-position:-40px -20px}.icon-status,.icon-status:after{width:8px;height:8px}.icon-status:after{background:none;background-color:#f50;border-radius:4px;margin:-4px 0 0 -4px}.btn{display:inline-block;-ms-box-sizing:border-box;box-sizing:border-box;background-clip:padding-box;border:0 none;border-radius:3px;font-family:helvetica neue,tahoma,arial,hiragino sans gb,microsoft yahei,sans-serif;text-align:center;text-decoration:none;cursor:pointer}.btn:active,.btn:focus{outline:0 none}.btn.touch{border-radius:3px}.btn[disabled]{cursor:default}.btn[disabled] .icon{opacity:.5}.btn-pub{position:fixed;bottom:24px;left:50%;width:64px;height:64px;background-color:#56ba22;border-radius:32px;color:#fff;font-size:14px;line-height:18px;padding:14px;margin-left:-32px;z-index:89}.btn-pub.touch{background-color:#4da71f;border-radius:32px}.btn-pub.disabled,.btn-pub[disabled]{color:hsla(0,0%,100%,.5);cursor:default}.btn-pub.disabled.touch,.btn-pub[disabled].touch{background-color:#56ba22;color:hsla(0,0%,100%,.5)}.btn-default{height:34px;background-color:#e6f5de;color:#5b2;font-size:14px;line-height:34px;padding:0 12px}.btn-default.touch{background-color:#cfdcc7}.btn-default[disabled]{color:#a7d994}.btn-default[disabled].touch{background-color:#e6f5de;color:#a7d994}.btn-primary{height:34px;background-color:#55ba21;color:#fff;font-size:14px;line-height:34px;padding:0 12px}.btn-primary.touch{background-color:#4da71f}.btn-primary[disabled]{color:#b7dea9}.btn-primary[disabled].touch{background-color:#55ba21;color:#b7dea9}.btn-common{height:34px;background-color:#fff;border:1px solid #c8c6c4;color:#333;font-size:14px;line-height:32px;padding:0 12px}.btn-common.touch{background-color:#f2f2f2}.btn-common[disabled]{color:#858585}.btn-common[disabled].touch{background-color:#fff;color:#858585}.btn-info{height:34px;background-color:#daeace;color:#5b2;font-size:14px;line-height:34px;padding:0 12px}.btn-info.touch{background-color:#c9deb9}.btn-info[disabled]{color:#8cb578}.btn-info[disabled].touch{background-color:#daeace;color:#8cb578}.btn-danger{height:34px;background-color:#f1dbcb;color:#ff7505;font-size:14px;line-height:34px;padding:0 12px}.btn-danger.touch{background-color:#e7cdba}.btn-danger[disabled]{color:#faaa69}.btn-danger[disabled].touch{background-color:#f1dbcb;color:#faaa69}.btn-large{width:100%;height:40px;font-size:16px;line-height:40px}.btn-common.btn-large{line-height:38px}.popup{position:fixed;top:50%;left:50%;width:276px;border-radius:2px;margin:-100px 0 0 -138px;z-index:100;display:none}.popup.active{display:block}.popup-head{height:40px;background-color:#56ba22;border-radius:2px 2px 0 0}.popup-head h2{color:#fff;font-size:14px;font-weight:500;line-height:40px;text-align:center}.popup-body{background-color:#fff;font-size:14px;line-height:24px;padding:14px 12px}.popup-body p:only-child{text-align:center}.popup-bar{height:40px;border-top:1px solid #d9d9d9;background-color:#f2f2f2;border-radius:0 0 2px 2px;display:-webkit-box;display:box}.popup-bar a{-webkit-box-flex:1;display:block;width:1px;height:40px;border-left:1px solid #d9d9d9;color:#5b2;font-size:14px;line-height:40px;text-align:center}.popup-bar a:first-child{border:0 none}.popup-bar a.touch{background-color:#e6e6e6;border-radius:0}.popup-bar a:first-child.touch{border-bottom-left-radius:2px}.popup-bar a:last-child.touch{border-bottom-right-radius:2px}.mask{position:fixed;top:0;left:0;z-index:99;width:100%;height:100%;background-color:rgba(0,0,0,.4)}.mask.active{display:block}.form-status .status-tips:before{background:url(" + e(29) + ') no-repeat;-ms-background-size:120px auto;background-size:120px auto}.form-status{min-height:126px;background-color:#fff;border-bottom:1px solid #d9d9d9;padding:0 0 30px}.form-status .status-tips{position:relative;color:#ffa200;font-size:16px;font-weight:500;text-align:center;padding:103px 0 0}.form-status.status-loading .status-tips{padding:115px 0 0}.form-status.status-failed .status-tips:after,.form-status.status-succeed .status-tips:after{content:"";position:absolute;top:33px;left:50%;width:58px;height:58px;background-color:#f2fbf6;border:1px solid #e9f7e1;border-radius:58px;margin-left:-30px}.form-status .status-tips:before{content:"";position:absolute;left:50%}.form-status.status-loading .status-tips:before{top:33px;width:90px;height:72px;background-position:0 -20px;margin-left:-45px}.form-status.status-succeed .status-tips:before{top:53px;width:28px;height:20px;background-position:0 0;margin-left:-14px;z-index:2}.form-status.status-failed .status-tips:before{top:53px;width:20px;height:20px;background-position:-28px 0;margin-left:-10px;z-index:2}.form-status .status-cont{font-size:12px;text-align:center;padding:35px 0 0}.form-status .status-cont strong{color:#5b2;font-weight:500}.form-status .status-opt{text-align:center;padding:17px 0 12px}.form-status .btn{width:144px;margin:0 3px}.loading-section,.nothing-section,.offline-section{display:none}.loading .loading-section,.nothing .nothing-section,.offline .offline-section,.toast{display:block}.toast{z-index:101;position:fixed;top:55%;left:50%;width:320px;margin-left:-160px;color:#fff;border-radius:5px;text-align:center}.toast span{border-radius:5px;background:rgba(0,0,0,.7);display:inline-block;max-width:228px;padding:5px 10px;word-break:break-all}.app-guide{position:relative;background-color:#fff;border-bottom:1px solid #cdcdcd;padding:0 90px 0 10px}.app-guide .guide-cont{position:relative;display:block;-webkit-tap-highlight-color:rgba(0,0,0,0);font-weight:500;padding:8px 0}.app-guide .guide-logo{float:left;width:42px;height:42px;vertical-align:top;margin-right:10px}.app-guide .guide-dc,.app-guide .guide-slogon{color:#505050;font-size:14px;font-weight:500;line-height:20px;text-overflow:ellipsis;white-space:nowrap;overflow:hidden}.app-guide .guide-dc{color:#878787;font-size:12px;margin-top:2px}.app-guide .guide-btn{position:absolute;top:50%;right:10px;width:80px;height:30px;background-color:#62af01;border:1px solid #559801;border-radius:3px;color:#fff;font:14px/28px helvetica neue,arial,hiragino sans gb,microsoft yahei,sans-serif;text-align:center;padding:0;margin-top:-15px}.app-guide .guide-btn.disabled,.app-guide .guide-btn[disabled]{background-color:#fff;border-color:#c8c6c4;color:#333}.app-guide .guide-cont.touch{background-color:transparent}.app-guide .guide-cont.touch:before{content:"";position:absolute;top:0;left:-10px;width:100%;height:100%;background-color:#f0f0f0;padding:0 90px 0 10px;z-index:-1}.app-guide .guide-cont.disabled.touch:before{display:none}.app-guide .guide-btn.touch{background-color:#529301}.app-guide .guide-btn.disabled.touch,.app-guide .guide-btn[disabled].touch{background-color:#fff}.popup .icon-close:after,.popup .list-guide i{background:url(' + e(31) + ') no-repeat;-ms-background-size:80px auto;background-size:80px auto}.popup-android,.popup-ios{width:250px;background-color:#f0f0f0;border-radius:0}.popup-ios{margin:-149px 0 0 -125px}.popup-android{margin:-142px 0 0 -125px}.popup .list-guide{padding:26px 0 26px 25px}.popup .list-guide li{color:#3d3d3d;font-size:12px;line-height:2;padding:16px 0}.popup .list-guide .num{display:inline-block;width:20px;height:20px;background-color:#56ba22;border-radius:10px;color:#fff;font-size:14px;font-weight:500;font-style:normal;line-height:20px;text-align:center;margin-right:6px}.popup .list-guide strong{color:#56ba22;font-weight:500}.popup .list-guide i{display:inline-block;vertical-align:middle;margin-left:10px;line-height:999em;overflow:hidden}.popup .list-guide strong i{margin:-5px 5px 0}.popup-ios .list-guide .icon-menu{width:16px;height:16px;background-position:-8px 0}.popup-android .list-guide .icon-menu{width:23px;height:23px;background-position:-25px 0;margin:0 5px}.popup-ios .list-guide .icon-browser{width:79px;height:79px;background-position:0 -23px}.popup-android .list-guide .icon-browser{width:63px;height:63px;background-position:0 -102px}.popup-android .list-guide .icon-ganji,.popup-ios .list-guide .icon-ganji{width:47px;height:47px;background-position:0 -165px}.popup .icon-close-container{position:absolute;top:-11px;right:-11px;width:50px;height:50px}.popup .icon-close{position:absolute;top:5px;right:5px;width:22px;height:22px;background-color:#000;border-radius:11px;line-height:999em;overflow:hidden}.popup .icon-close:after{content:"";position:absolute;top:50%;left:50%;width:8px;height:8px;margin:-4px 0 0 -4px}.mask{display:none}@media only screen and (max-height:320px){.popup-ios{margin:-115px 0 0 -125px}.popup-android{margin:-108px 0 0 -125px}.popup .list-guide{padding:10px 0 10px 25px}.popup .list-guide li{color:#3d3d3d;font-size:12px;line-height:2;padding:10px 0}}.slide-in-left,.slide-in-right{position:fixed;top:0;left:0;z-index:101;width:100%;height:100%}.slide-in-left{-webkit-animation:slideInLeft .3s ease-in both}.slide-in-right{-webkit-animation:slideInRight .3s ease-in both}@-webkit-keyframes slideInLeft{0%{-webkit-transform:translate3d(-100%,0,0)}to{-webkit-transform:none}}@-webkit-keyframes slideInRight{0%{-webkit-transform:translate3d(100%,0,0)}to{-webkit-transform:none}}.icon-tomess,.icon-totel{position:fixed;bottom:118px;right:14px;z-index:89;display:none;width:44px;height:44px;font-size:12px;line-height:16px;color:#fff;text-align:center;background-color:#ff7e00;border-radius:50%}.icon-tomess.active,.icon-totel.active{display:block}.icon-tomess:before,.icon-totel:before{content:"";display:block;width:20px;height:20px;margin:4px auto 0;background:url(' + e(22) + ") no-repeat;background-size:200px auto}.icon-totel:before{background-position:-141px -78px}.icon-tomess:before{background-position:-116px -78px}", ""]);
}, function(t, i, e) { t.exports = e.p + "icon-status.3cac80466e11ce8f07496dc996c885c7.png" }, function(t, i, e) { t.exports = e.p + "icon.4c4d7d4156e54e692029a08438a31d7b.png" }, function(t, i, e) { t.exports = e.p + "icon_guide.9ee3a7bd10a5c4d0c6ce01a926383708.png" }, function(t, i) { "use strict";

    function e(t, i) { var e = (65535 & t) + (65535 & i),
            n = (t >> 16) + (i >> 16) + (e >> 16); return n << 16 | 65535 & e }

    function n(t, i) { return t << i | t >>> 32 - i }

    function o(t, i, o, a, r, c) { return e(n(e(e(i, t), e(a, c)), r), o) }

    function a(t, i, e, n, a, r, c) { return o(i & e | ~i & n, t, i, a, r, c) }

    function r(t, i, e, n, a, r, c) { return o(i & n | e & ~n, t, i, a, r, c) }

    function c(t, i, e, n, a, r, c) { return o(i ^ e ^ n, t, i, a, r, c) }

    function s(t, i, e, n, a, r, c) { return o(e ^ (i | ~n), t, i, a, r, c) }

    function l(t, i) { t[i >> 5] |= 128 << i % 32, t[(i + 64 >>> 9 << 4) + 14] = i; var n, o, l, p, d, u = 1732584193,
            h = -271733879,
            g = -1732584194,
            f = 271733878; for (n = 0; n < t.length; n += 16) o = u, l = h, p = g, d = f, u = a(u, h, g, f, t[n], 7, -680876936), f = a(f, u, h, g, t[n + 1], 12, -389564586), g = a(g, f, u, h, t[n + 2], 17, 606105819), h = a(h, g, f, u, t[n + 3], 22, -1044525330), u = a(u, h, g, f, t[n + 4], 7, -176418897), f = a(f, u, h, g, t[n + 5], 12, 1200080426), g = a(g, f, u, h, t[n + 6], 17, -1473231341), h = a(h, g, f, u, t[n + 7], 22, -45705983), u = a(u, h, g, f, t[n + 8], 7, 1770035416), f = a(f, u, h, g, t[n + 9], 12, -1958414417), g = a(g, f, u, h, t[n + 10], 17, -42063), h = a(h, g, f, u, t[n + 11], 22, -1990404162), u = a(u, h, g, f, t[n + 12], 7, 1804603682), f = a(f, u, h, g, t[n + 13], 12, -40341101), g = a(g, f, u, h, t[n + 14], 17, -1502002290), h = a(h, g, f, u, t[n + 15], 22, 1236535329), u = r(u, h, g, f, t[n + 1], 5, -165796510), f = r(f, u, h, g, t[n + 6], 9, -1069501632), g = r(g, f, u, h, t[n + 11], 14, 643717713), h = r(h, g, f, u, t[n], 20, -373897302), u = r(u, h, g, f, t[n + 5], 5, -701558691), f = r(f, u, h, g, t[n + 10], 9, 38016083), g = r(g, f, u, h, t[n + 15], 14, -660478335), h = r(h, g, f, u, t[n + 4], 20, -405537848), u = r(u, h, g, f, t[n + 9], 5, 568446438), f = r(f, u, h, g, t[n + 14], 9, -1019803690), g = r(g, f, u, h, t[n + 3], 14, -187363961), h = r(h, g, f, u, t[n + 8], 20, 1163531501), u = r(u, h, g, f, t[n + 13], 5, -1444681467), f = r(f, u, h, g, t[n + 2], 9, -51403784), g = r(g, f, u, h, t[n + 7], 14, 1735328473), h = r(h, g, f, u, t[n + 12], 20, -1926607734), u = c(u, h, g, f, t[n + 5], 4, -378558), f = c(f, u, h, g, t[n + 8], 11, -2022574463), g = c(g, f, u, h, t[n + 11], 16, 1839030562), h = c(h, g, f, u, t[n + 14], 23, -35309556), u = c(u, h, g, f, t[n + 1], 4, -1530992060), f = c(f, u, h, g, t[n + 4], 11, 1272893353), g = c(g, f, u, h, t[n + 7], 16, -155497632), h = c(h, g, f, u, t[n + 10], 23, -1094730640), u = c(u, h, g, f, t[n + 13], 4, 681279174), f = c(f, u, h, g, t[n], 11, -358537222), g = c(g, f, u, h, t[n + 3], 16, -722521979), h = c(h, g, f, u, t[n + 6], 23, 76029189), u = c(u, h, g, f, t[n + 9], 4, -640364487), f = c(f, u, h, g, t[n + 12], 11, -421815835), g = c(g, f, u, h, t[n + 15], 16, 530742520), h = c(h, g, f, u, t[n + 2], 23, -995338651), u = s(u, h, g, f, t[n], 6, -198630844), f = s(f, u, h, g, t[n + 7], 10, 1126891415), g = s(g, f, u, h, t[n + 14], 15, -1416354905), h = s(h, g, f, u, t[n + 5], 21, -57434055), u = s(u, h, g, f, t[n + 12], 6, 1700485571), f = s(f, u, h, g, t[n + 3], 10, -1894986606), g = s(g, f, u, h, t[n + 10], 15, -1051523), h = s(h, g, f, u, t[n + 1], 21, -2054922799), u = s(u, h, g, f, t[n + 8], 6, 1873313359), f = s(f, u, h, g, t[n + 15], 10, -30611744), g = s(g, f, u, h, t[n + 6], 15, -1560198380), h = s(h, g, f, u, t[n + 13], 21, 1309151649), u = s(u, h, g, f, t[n + 4], 6, -145523070), f = s(f, u, h, g, t[n + 11], 10, -1120210379), g = s(g, f, u, h, t[n + 2], 15, 718787259), h = s(h, g, f, u, t[n + 9], 21, -343485551), u = e(u, o), h = e(h, l), g = e(g, p), f = e(f, d); return [u, h, g, f] }

    function p(t) { var i, e = ""; for (i = 0; i < 32 * t.length; i += 8) e += String.fromCharCode(t[i >> 5] >>> i % 32 & 255); return e }

    function d(t) { var i, e = []; for (e[(t.length >> 2) - 1] = void 0, i = 0; i < e.length; i += 1) e[i] = 0; for (i = 0; i < 8 * t.length; i += 8) e[i >> 5] |= (255 & t.charCodeAt(i / 8)) << i % 32; return e }

    function u(t) { return p(l(d(t), 8 * t.length)) }

    function h(t, i) { var e, n, o = d(t),
            a = [],
            r = []; for (a[15] = r[15] = void 0, o.length > 16 && (o = l(o, 8 * t.length)), e = 0; e < 16; e += 1) a[e] = 909522486 ^ o[e], r[e] = 1549556828 ^ o[e]; return n = l(a.concat(d(i)), 512 + 8 * i.length), p(l(r.concat(n), 640)) }

    function g(t) { var i, e, n = "0123456789abcdef",
            o = ""; for (e = 0; e < t.length; e += 1) i = t.charCodeAt(e), o += n.charAt(i >>> 4 & 15) + n.charAt(15 & i); return o }

    function f(t) { return unescape(encodeURIComponent(t)) }

    function m(t) { return u(f(t)) }

    function b(t) { return g(m(t)) }

    function x(t, i) { return h(f(t), f(i)) }

    function v(t, i) { return g(x(t, i)) }

    function w(t, i, e) { return i ? e ? x(i, t) : v(i, t) : e ? m(t) : b(t) } t.exports = w }, function(t, i) {
    function e() {}

    function n(t, i, e) { var n = !0; if (t) { var o = 0,
                a = t.length,
                r = i[0],
                c = i[1],
                s = i[2]; switch (i.length) {
                case 0:
                    for (; o < a; o += 2) n = t[o].call(t[o + 1] || e) !== !1 && n; break;
                case 1:
                    for (; o < a; o += 2) n = t[o].call(t[o + 1] || e, r) !== !1 && n; break;
                case 2:
                    for (; o < a; o += 2) n = t[o].call(t[o + 1] || e, r, c) !== !1 && n; break;
                case 3:
                    for (; o < a; o += 2) n = t[o].call(t[o + 1] || e, r, c, s) !== !1 && n; break;
                default:
                    for (; o < a; o += 2) n = t[o].apply(t[o + 1] || e, i) !== !1 && n } } return n }

    function o(t) { return "[object Function]" === Object.prototype.toString.call(t) } var a = /\s+/;
    e.prototype.on = function(t, i, e) { var n, o, r; if (!i) return this; for (n = this.__events || (this.__events = {}), t = t.split(a); o = t.shift();) r = n[o] || (n[o] = []), r.push(i, e); return this }, e.prototype.once = function(t, i, e) { var n = this,
            o = function() { n.off(t, o), i.apply(this, arguments) }; return this.on(t, o, e) }, e.prototype.off = function(t, i, e) { var n, o, c, s; if (!(n = this.__events)) return this; if (!(t || i || e)) return delete this.__events, this; for (t = t ? t.split(a) : r(n); o = t.shift();)
            if (c = n[o])
                if (i || e)
                    for (s = c.length - 2; s >= 0; s -= 2) i && c[s] !== i || e && c[s + 1] !== e || c.splice(s, 2);
                else delete n[o]; return this }, e.prototype.trigger = function(t) { var i, e, o, r, c, s, l = [],
            p = !0; if (!(i = this.__events)) return this; for (t = t.split(a), c = 1, s = arguments.length; c < s; c++) l[c - 1] = arguments[c]; for (; e = t.shift();)(o = i.all) && (o = o.slice()), (r = i[e]) && (r = r.slice()), "all" !== e && (p = n(r, l, this) && p), p = n(o, [e].concat(l), this) && p; return p }, e.prototype.emit = e.prototype.trigger, e.mixTo = function(t) { t = o(t) ? t.prototype : t; var i = e.prototype; for (var n in i) i.hasOwnProperty(n) && (t[n] = i[n]) }; var r = Object.keys;
    r || (r = function(t) { var i = []; for (var e in t) t.hasOwnProperty(e) && i.push(e); return i }), i.Events = e }, function(t, i, e) {
    function n(t, i) { this.server = i || document.location.protocol + "//t.guazi.com/t.gif?", this.conf = $({ platform: "-", tracking_type: "pageload", pageid: x.generateUUIDV4() }, t) }

    function o(t) { var i = []; for (var e in t) i.push(e + "=" + t[e]); var n = ""; return n = i.join("&") }

    function a(t) { var i = {},
            e = v.get("uuid") || w.get("uuid") || p();
        v.get("sessionid"); return i.guid = e, i.userid = v.get("userid") || "-", i.sessionid = v.get("sessionid") || x.generateUUIDV4(), v.set("sessionid", i.sessionid, { path: "/", domain: _ }), i.landing = k.landing || (document.referrer && z.hostname.indexOf("guazi.com") >= 0 ? 0 : 1), i }

    function r(t) {
        function i(t) { e(); var i = l(z.query),
                n = o.filter(function(t) { return !!new RegExp(t[0], "i").test(z.hostname) && i[t[1]] });
            n.length ? t.ca_kw = document.referrer && i[n[0][1]] || "-" : t.ca_kw = "-", v.set("cainfo", JSON.stringify(t), { expires: 31536e3, path: "/", domain: _ }) }

        function e() { v.remove("cainfo", JSON.stringify(c), { path: "/", domain: "m.guazi.com" }), v.remove("cainfo", JSON.stringify(c), { path: "/", domain: ".m.guazi.com" }) } var n = v.get("cainfo"); if (n) return JSON.parse(n); var o = g(),
            a = k.ca_s,
            r = k.ca_n,
            c = { ca_s: "self", ca_n: r || "self", ca_medium: "-", ca_term: "-", ca_content: "-", ca_campaign: "-", ca_kw: "-", ca_i: "-", s_code: "-" },
            s = o.filter(function(t) { return new RegExp(t[0], "i").test(z.hostname) }); return a && r ? (c = $(c, k), i(c)) : s.length ? (c.ca_s = "seo_" + s[0][0], i(c)) : c = v.get("cainfo") ? JSON.parse(v.get("cainfo")) : c, c || {} }

    function c() { var t = encodeURIComponent(document.referrer); return f(t) > 512 && (t = m(t)), { page: C, pagetype: "-", line: "-", referer: t || "-", city: v.get("cityDomain") || v.get("gzCityDomain") || "-" } }

    function s(t, i) { var e = new Image;
        e.onload = function() { i && i() }, e.onerror = function() { i && i(new Error("network error")) }, setTimeout(function() { i && i(new Error("timeout")) }, 1e4), e.src = this.server + t.toLowerCase() }

    function l(t) { return t = t || window.location.search || window.location.hash, t.replace(/^\?/, "").split("&").map(function(t) { return t.split("=") }).reduce(function(t, i) { return i[0].trim() && (t[i[0]] = i[1]), t }, {}) }

    function p() { var t = x.generateUUIDV4(); return u("uuid", t), t }

    function d(t) { var i = v.get(t) || w.get(t) || null; return i && JSON.parse(i) }

    function u(t, i) { v.set(t, i, { expires: 31536e3, path: "/", domain: _ }), w.set(t, i) }

    function h(t) { var i = parseInt(d(t.guid + "_views"), 10) || 0,
            e = parseInt(d(t.sessionid + "_views"), 10) || 0; return t.guid_views = "pageload" === t.tracking_type ? i + 1 : i, t.session_views = "pageload" === t.tracking_type ? e + 1 : e, u(t.guid + "_views", t.guid_views), u(t.sessionid + "_views", t.session_views), t }

    function g() { return [
            ["baidu", "wd"],
            ["baidu", "word"],
            ["images.google", "q"],
            ["google", "q"],
            ["yahoo", "p"],
            ["msn", "q"],
            ["live", "q"],
            ["soso", "w"],
            ["sogou", "query"],
            ["bing", "q"],
            ["so.360.cn", "q"],
            ["so.com", "q"],
            ["haosou.com", "q"],
            ["haoso.com", "q"],
            ["easou", "q"],
            ["sm.cn", "q"],
            ["youdao", "q"]
        ] }

    function f(t) { for (var i = 0, e = t.length; e--;) i += t.charCodeAt(e) > 255 ? 2 : 1; return i }

    function m(t, i) { for (var e = 0, n = 0; n < (i || 511);) n += t.charCodeAt(e) > 255 ? 2 : 1, e++; return t.slice(0, e) } var b = e(38),
        x = e(39),
        v = e(36),
        w = new b("GUAZI_TRACKER"),
        k = l(),
        y = e(23),
        $ = e(35),
        z = new y(document.referrer.toLocaleLowerCase()),
        j = window.sessionStorage,
        C = encodeURIComponent(window.location.href),
        T = document.getElementsByTagName("head")[0].getAttribute("_tracker") || v.get("_tracker") && JSON.parse(v.get("_tracker")),
        S = T ? JSON.parse(T) : {},
        _ = ".guazi.com",
        E = e(37);
    n.prototype.send = function(t, i) { _ = t && t.domain || _; var e = $({}, a(), r(), c(), S || {}, this.conf, t || {}); if (h(e), j) { var n = JSON.parse(j.getItem("_tracker")) || {},
                l = new Date;
            n.clientTime && n.pagetype !== e.pagetype && "pageload" === e.tracking_type && (n.time_on_page = l - new Date(n.clientTime), n.tracking_type = "timeOnPage", s.call(this, o(n))); try { j.setItem("_tracker", JSON.stringify($(!1, e, { clientTime: new Date }))) } catch (p) {} } return /Guazi|guazi|ganji/i.test(window.navigator.userAgent) ? void E.invoke("getDeviceInfo", null, function(t) { t.code || t.error || (e.guid = t.deviceId), s.call(this, o(e), i) }.bind(this)) : void s.call(this, o(e), i) }, t.exports = n }, function(t, i) { "use strict"; var e = Object.prototype.hasOwnProperty,
        n = Object.prototype.toString,
        o = function(t) { return "function" == typeof Array.isArray ? Array.isArray(t) : "[object Array]" === n.call(t) },
        a = function(t) { if (!t || "[object Object]" !== n.call(t)) return !1; var i = e.call(t, "constructor"),
                o = t.constructor && t.constructor.prototype && e.call(t.constructor.prototype, "isPrototypeOf"); if (t.constructor && !i && !o) return !1; var a; for (a in t); return "undefined" == typeof a || e.call(t, a) };
    t.exports = function r() { var t, i, e, n, c, s, l = arguments[0],
            p = 1,
            d = arguments.length,
            u = !1; for ("boolean" == typeof l ? (u = l, l = arguments[1] || {}, p = 2) : ("object" != typeof l && "function" != typeof l || null == l) && (l = {}); p < d; ++p)
            if (t = arguments[p], null != t)
                for (i in t) e = l[i], n = t[i], l !== n && (u && n && (a(n) || (c = o(n))) ? (c ? (c = !1, s = e && o(e) ? e : []) : s = e && a(e) ? e : {}, l[i] = r(u, s, n)) : "undefined" != typeof n && (l[i] = n)); return l } }, function(t, i) {
    function e(t, i) { var e = {}; if (n(t) && t.length > 0)
            for (var o, a, c, l = i ? s : r, p = t.split(/;\s/g), d = 0, u = p.length; d < u; d++) { if (c = p[d].match(/([^=]+)=/i), c instanceof Array) try { o = s(c[1]), a = l(p[d].substring(c[1].length + 1)) } catch (h) {} else o = s(p[d]), a = "";
                o && (e[o] = a) }
        return e }

    function n(t) { return "string" == typeof t }

    function o(t) { return n(t) && "" !== t }

    function a(t) { if (!o(t)) throw new TypeError("Cookie name must be a non-empty string") }

    function r(t) { return t } var c = i,
        s = decodeURIComponent,
        l = encodeURIComponent;
    c.get = function(t, i) { a(t), i = "function" == typeof i ? { converter: i } : i || {}; var n = e(document.cookie, !i.raw); return (i.converter || r)(n[t]) }, c.set = function(t, i, e) { a(t), e = e || {}; var n = e.expires,
            r = e.domain,
            c = e.path;
        e.raw || (i = l(String(i))); var s = t + "=" + i,
            p = n; return "number" == typeof p && (p = new Date(Date.now() + 1e3 * n)), p instanceof Date && (s += "; expires=" + p.toGMTString()), o(r) && (s += "; domain=" + r), o(c) && (s += "; path=" + c), e.secure && (s += "; secure"), document.cookie = s, s }, c.remove = function(t, i) { return i = i || {}, i.expires = new Date(0), this.set(t, "", i) } }, function(t, i) {
    function e(t) { if (window.WebViewJavascriptBridge) return t(window.WebViewJavascriptBridge); if (window.WVJBCallbacks) return window.WVJBCallbacks.push(t);
        window.WVJBCallbacks = [t]; var i = document.createElement("iframe");
        i.style.display = "none", i.src = "wvjbscheme://__BRIDGE_LOADED__", document.documentElement.appendChild(i), setTimeout(function() { document.documentElement.removeChild(i) }, 0) }

    function n(t) { window.WebViewJavascriptBridge ? t(window.WebViewJavascriptBridge) : document.addEventListener("WebViewJavascriptBridgeReady", function(i, e) { t(window.WebViewJavascriptBridge) }, !1) } var o, a = [],
        r = [];
    Object.defineProperty(window, "WebViewJavascriptBridge", { configurable: !0, enumerable: !0, set: function(t) { t.callHandler && (o = t, a.forEach(function(t) { setTimeout(function() { window.WebViewJavascriptBridge.callHandler.apply(null, t) }, 0) }), r.forEach(function(t) { setTimeout(function() { window.WebViewJavascriptBridge.registerHandler.apply(null, t) }, 0) }), r = [], a = []) }, get: function() { return o } }); var c = /Guazi|guazi|ganji/i.test(window.navigator.userAgent);! function() { c && (window.navigator.userAgent.indexOf("Android") > -1 ? n(function(t) { t._messageHandler || t.init(function(t, i) { var e = { "Javascript Responds": "Wee!" };
                i(e) }) }) : e(function(t) { window.WebViewJavascriptBridge = t })) }(), i.invoke = function() { window.WebViewJavascriptBridge ? window.WebViewJavascriptBridge.callHandler.apply(this, arguments) : a.push(arguments) }, i.register = function() { window.WebViewJavascriptBridge ? window.WebViewJavascriptBridge.registerHandler.apply(this, arguments) : r.push(arguments) } }, function(t, i) {
    function e(t) { this.namespace = t } var n = window.GJLocalStorage || window.localStorage;
    e.prototype.set = function(t, i) { var e = this.dump();
        e[t] = { value: i }, e = JSON.stringify(e); try { n.setItem(this.namespace, e) } catch (o) { return !1 } return n.getItem(this.namespace) === e }, e.prototype.get = function(t) { var i = this.dump(); if (i[t]) return i[t].value }, e.prototype.remove = function(t) { this.set(t, void 0) }, e.prototype.clear = function() { n.removeItem(this.namespace) }, e.prototype.dump = function() { var t = n.getItem(this.namespace) || "{}"; try { t = JSON.parse(t) } catch (i) { t = {} } return t }, t.exports = e }, function(t, i) { i.generateUUIDV4 = function() { var t = (new Date).getTime(),
            i = "xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx",
            e = (i.length, i.replace(/[xy]/g, function(e, n) { if (n < i.length - 2) { var o = (t + 16 * Math.random()) % 16 | 0; return t = Math.floor(t / 16), ("x" == e ? o : 7 & o | 8).toString(16) } return Math.floor(10 * Math.random()) })); return e } }, function(t, i) { "use strict";

    function e(t) { for (var i, e = /([^=?&]+)=?([^&]*)/g, n = {}; i = e.exec(t); n[decodeURIComponent(i[1])] = decodeURIComponent(i[2])); return n }

    function n(t, i) { i = i || ""; var e = []; "string" != typeof i && (i = "?"); for (var n in t) o.call(t, n) && e.push(encodeURIComponent(n) + "=" + encodeURIComponent(t[n])); return e.length ? i + e.join("&") : "" } var o = Object.prototype.hasOwnProperty;
    i.stringify = n, i.parse = e }, function(t, i) { "use strict";
    t.exports = function(t, i) { if (i = i.split(":")[0], t = +t, !t) return !1; switch (i) {
            case "http":
            case "ws":
                return 80 !== t;
            case "https":
            case "wss":
                return 443 !== t;
            case "ftp":
                return 21 !== t;
            case "gopher":
                return 70 !== t;
            case "file":
                return !1 } return 0 !== t } }, function(t, i, e) {
    (function(i) { "use strict"; var n, o = /^[A-Za-z][A-Za-z0-9+-.]*:\/\//,
            a = { hash: 1, query: 1 };
        t.exports = function(t) { t = t || i.location || {}, n = n || e(23); var r, c = {},
                s = typeof t; if ("blob:" === t.protocol) c = new n(unescape(t.pathname), {});
            else if ("string" === s) { c = new n(t, {}); for (r in a) delete c[r] } else if ("object" === s) { for (r in t) r in a || (c[r] = t[r]);
                void 0 === c.slashes && (c.slashes = o.test(t.href)) } return c } }).call(i, function() { return this }()) }, function(t, i, e) { t.exports = e.p + "phone-collect.6a991da1dd9431dbb9c5f4b905b62372.jpg" }, function(t, i, e) { t.exports = e.p + "phone-histroy.e8fbef61fbce719de43066002c7df522.jpg" }, function(t, i, e) { t.exports = e.p + "phone-tip.a621df915f5f8295606f35985ed4df39.jpg" }, function(t, i, e) { t.exports = e.p + "phone-user.fb9b9001300d41a795d452de0468a1c6.jpg" }, function(t, i, e) { i = t.exports = e(1)(), i.push([t.id, ".popup-wrap{display:none}.popup,.popup-wrap.active{display:block}.popup{position:fixed;top:15px;right:14px;left:14px;z-index:101;width:auto;background-color:#fff;border-radius:0;margin:0}.popup-wrap .popup-body{background-color:transparent;padding:0}.btn-layer-download{display:inline-block;position:relative;text-align:center;text-decoration:none;outline:1px solid rgba(0,0,0,.02);padding:0;margin:0;cursor:pointer;-ms-box-sizing:border-box;box-sizing:border-box;-webkit-appearance:none;width:100%;background-color:#22ac38;border:1px solid #22ac38;color:#fff;height:42px;font-size:16px;line-height:42px}.mask.active{z-index:99;display:block}.download-exist{padding-top:50px}.btn-app .icon-download,.download-header .left-word:after,.title span{background:url(" + e(48) + ') no-repeat;background-size:150px auto}.download-header{width:100%;height:44px;background-color:#fff}.download-header .close-btn{position:relative;float:left;width:13px;height:13px;margin:15px 8px 0 10px;text-indent:-80px;background-color:#898989;border-radius:50%;overflow:hidden}.download-header .close-btn:after,.download-header .close-btn:before{content:"";position:absolute;top:3px;left:6px;width:1px;height:7px;background-color:#fff}.download-header .close-btn:after{-webkit-transform:rotate(45deg);transform:rotate(45deg)}.download-header .close-btn:before{-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}.download-header .left-word{float:left;position:relative;line-height:44px;font-size:15px;color:#22ac38;font-weight:500;padding-left:75px}.download-header .left-word:after{content:"";position:absolute;left:0;top:0;z-index:1;width:64px;height:44px;background-position:0 -42px}.download-header .right-button{float:right;margin:8px 10px 0 0}.download-header .right-button a{display:block;height:30px;line-height:30px;text-align:center;border-radius:6px;background-color:#22ac38;color:#fff;letter-spacing:.5px;padding:0 8px;font-size:15px}.app-guide{position:fixed;bottom:0;left:0;width:100%;min-width:320px;height:50px;background-color:rgba(0,0,0,.6);box-shadow:0 -1px 1px rgba(0,0,0,.1);z-index:20004;border-bottom:0;padding:0 10px 0 0;box-sizing:border-box}.app-guide .guide-logo{float:left;width:42px;height:42px;vertical-align:top;margin-right:10px}.app-guide .guide-cont{position:relative;display:block;-webkit-tap-highlight-color:rgba(0,0,0,0);padding:4px 0;margin:0 90px 0 30px}.app-guide .guide-cont.touch:before{content:"";width:100%;height:100%;background-color:rgba(0,0,0,.06);position:absolute;top:0;left:-20px;padding:0 90px 0 20px}.app-guide .guide-dc,.app-guide .guide-slogon{color:#fff;font-size:14px;line-height:25px;text-overflow:ellipsis;white-space:nowrap;overflow:hidden}.app-guide .guide-dc{color:#ccc;font-size:12px;line-height:13px;margin-top:0}.app-guide .guide-btn{position:absolute;top:10px;right:10px;width:80px;height:30px;background-color:#22ac38;border:0 none;border-radius:6px;color:#fff;font:14px/30px microsoft yahei,helvetica,arial,sans-serif;text-align:center;padding:0;margin:0}.app-guide .guide-btn.touch{background-color:#22ac38;opacity:.9}.app-guide .guide-close{position:absolute;top:0;left:0;width:30px;height:30px;text-indent:-999px;overflow:hidden;z-index:1}.app-guide .guide-close:after,.app-guide .guide-close:before{content:"";position:absolute;top:4px;left:13px;width:1px;height:20px;background:none;background-color:#bfbfbf;z-index:10}.app-guide .guide-close:before{-webkit-transform:rotate(45deg);transform:rotate(45deg)}.app-guide .guide-close:after{-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}.white-guide.app-guide{background-color:#fff;top:45px;bottom:auto}.white-guide.app-guide .guide-btn{background-color:#fff;border:1px solid #22ac38;height:28px;line-height:28px}.white-guide.app-guide .guide-btn,.white-guide.app-guide .guide-dc,.white-guide.app-guide .guide-slogon{color:#22ac38}.mask{background-color:rgba(0,0,0,.7)}.popup-wrap .popup-downapp{border-radius:5px;top:50%;margin-top:-165px}.popup-wrap .popup-downapp2{margin-top:-170px}.popup-downapp .btn-group{border-top:1px solid #bfbfbf}.guazi-logo{background:url(' + e(49) + ') no-repeat;background-size:100px auto;width:100px;height:100px;margin:0 auto}.popup-downapp .form-deliver .deliver-tips{font-size:16px;color:#000;line-height:22px}.popup-downapp .form-deliver{padding:14px}.popup-downapp .guazi-ok{text-align:center;font-weight:500;font-size:16px;color:#22ac38;padding:46px 0 8px;position:relative}.popup-downapp .guazi-ok:before{content:"";position:absolute;z-index:1;top:-4px;left:50%;width:46px;height:46px;border-radius:50%;background-color:#22ac38;margin-left:-25px}.popup-downapp .guazi-ok:after{content:"";position:absolute;top:3px;left:50%;z-index:2;margin-left:-9px;width:12px;height:24px;border-bottom:2px solid #fff;border-right:2px solid #fff;-webkit-transform:rotate(45deg);transform:rotate(45deg);border-radius:1px}.popup-wrap .popup{z-index:201}.popup-downapp .pop-tit{border-radius:5px 5px 0 0;background-clip:padding-box}.popup-downapp .close-btn{position:absolute;top:-45px;right:0;width:26px;height:26px;border-radius:50%;overflow:hidden;text-indent:-88px;border:1px solid #fff}.popup-downapp .close-btn:after,.popup-downapp .close-btn:before{content:"";position:absolute;top:4px;left:12px;width:1px;height:18px;background:none;background-color:#fff;z-index:10}.popup-downapp .close-btn:before{-webkit-transform:rotate(45deg);transform:rotate(45deg)}.popup-downapp .close-btn:after{-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}.pop-tit{position:relative;padding:36px 0 20px}.title{text-align:center;position:absolute;left:50%;top:-19px;margin-left:-100px}.title .icon-succ{display:inline-block;margin-top:-9px;position:relative;width:50px;height:50px;border-radius:50%;background-color:#22ac38;border:4px solid #eaffed}.title .icon-succ:after{content:"";position:absolute;top:6px;left:16px;width:15px;height:30px;border-bottom:2px solid #fff;border-right:2px solid #fff;-webkit-transform:rotate(45deg);transform:rotate(45deg)}.title span{display:inline-block;vertical-align:top;color:#000;font-size:26px;width:135px;height:38px;line-height:38px;font-weight:700;text-align:center;letter-spacing:2px;background-position:0 0}.pop-tit p{font-size:18px;text-align:center;color:#333;padding:0 18px}.form-deliver{overflow:hidden}.form-deliver p{font-size:18px;color:#000;letter-spacing:1px;text-align:right;margin-bottom:3px}.form-deliver .downapp{font-size:25px;font-weight:bolder;color:#22ac38;letter-spacing:0;margin-bottom:8px}.form-deliver .fl{width:42%}.form-deliver .fr{width:45%}.form-deliver li{color:#7d7d7d;font-size:15px;line-height:28px;position:relative;padding-left:22px}.form-deliver li:after,.form-deliver li:before{content:"";position:absolute}.form-deliver li:after{width:16px;height:16px;border-radius:50%;border:1px solid #22ac38;top:5px;left:0}.form-deliver li:before{top:8px;left:6px;width:5px;height:9px;border-bottom:1px solid #22ac38;border-right:1px solid #22ac38;-webkit-transform:rotate(45deg);transform:rotate(45deg);z-index:10}.btn-app{padding:15px;border-top:1px solid #bfbfbf}.btn-app .btn{display:block;margin:0 auto;height:44px;line-height:44px;border-radius:5px;background-color:#22ac38;color:#fff;font-size:22px;font-weight:400}.btn-app .icon-download{display:inline-block;width:21px;height:21px;background-position:-72px -42px;vertical-align:-2px;margin-left:8px}.form-deliver .phone-bg{background:url(' + e(50) + ') 0 top no-repeat;background-size:100%;height:210px;margin-bottom:-20px;width:55%}.form-deliver .down-list.fl{margin:57px 0 0 7%;width:33%}.form-deliver .down-list.fl li{font-size:18px;font-weight:500;line-height:35px}.app-tit h1,.app-tit h2{text-align:center}.app-tit h1{font-weight:700;color:#22ac38;padding-top:20px;font-size:30px}.app-tit h2{font-size:18px;font-weight:500;color:#000;padding-top:10px;letter-spacing:1px}.app-tit h2 span{padding:0 3px}.form-deliver .down-list.fl li:after{background-color:#22ac38;top:8px}.form-deliver .down-list.fl li:before{border-color:#fff;top:11px}.popup-downapp .textsucc{color:#22ac38;font-weight:700;font-size:24px;text-align:center;padding-bottom:10px}.introducecon{padding:0 18px}.introducecon .cl{float:left;padding-top:40px;width:135px}.introducecon .cl p{font-size:18px;color:#22ac38;text-align:center;padding:5px 0}.introducecon .cl li{position:relative;padding-left:18px;line-height:33px;color:#666;font-size:14px}.introducecon .cl li:before{top:10px;left:5px;width:5px;height:9px;border-bottom:1px solid #fff;border-right:1px solid #fff;-webkit-transform:rotate(45deg);transform:rotate(45deg);z-index:10;content:"";position:absolute}.introducecon .cl li:after{width:16px;height:16px;border-radius:50%;background-color:#22ac38;top:9px;left:0;content:"";position:absolute}.introducecon .cr{float:right;width:142px}.imgcollect,.imghistroy,.imgtip,.imguser{background-repeat:no-repeat;background-size:132px 215px;width:142px;height:215px;display:inline-block;vertical-align:bottom}.imgcollect{background-image:url(' + e(43) + ")}.imghistroy{background-image:url(" + e(44) + ")}.imgtip{background-image:url(" + e(45) + ")}.imguser{background-image:url(" + e(46) + ")}.tip-layer{border-radius:5px;text-align:center;display:none;position:fixed;top:50%;left:50%;z-index:99;width:140px;height:36px;background-color:rgba(0,0,0,.8);color:#fff;font-size:12px;line-height:36px;box-sizing:border-box;-webkit-transform:translate3d(-50%,-50%,0);transform:translate3d(-50%,-50%,0)}.tip-layer.active{display:block}@media screen and (max-width:320px){.form-deliver .down-list.fl{margin:50px 0 0 5%}.form-deliver .down-list.fl li{font-size:16px;line-height:32px}.pop-tit p{font-size:16px}.introducecon{padding:0 5px}.popup-wrap .popup-downapp{margin-top:-150px}.pop-tit{padding:20px 0 10px}.introducecon .cr{width:132px}.imgcollect,.imghistroy,.imgtip,.imguser{background-size:99px 150px;width:99px;height:150px}.introducecon .cl{padding-top:0;margin-left:15px}.introducecon .cl li{line-height:28px}.introducecon .cl li:before{top:8px}.introducecon .cl li:after{top:6px}}.tiplayer{text-align:center;color:#fff;font-size:12px;position:fixed;top:50%;margin-top:-15px;width:100%;display:none}.tiplayer.active{display:block}.twoline{margin-top:-25px}.threeline{margin-top:-35px}.tiplayer span.textcon{background-color:rgba(0,0,0,.8);line-height:20px;border-radius:3px;padding:5px 15px;display:inline-block;position:relative}@media screen and (min-width:360px){.form-deliver .phone-bg{height:240px}}@media screen and (min-width:374px){.popup-wrap .popup-downapp{width:347px;left:50%;margin-left:-175px}}@media screen and (max-height:430px){.popup-wrap .popup-downapp2{position:absolute;margin-top:0;top:70px}}", ""]) }, function(t, i, e) { t.exports = e.p + "guide_icon.b7d7a6e9858219137f0c6dd98380827d.png" }, function(t, i, e) { t.exports = e.p + "logo_app_guazi_2.3c569dc844c4ccd0b9cf94461c603c41.png" }, function(t, i, e) { t.exports = e.p + "phone.42eab7e24b5b1cdde34ce7f38832b568.jpg" }, function(t, i, e) { t.exports = e.p + "icon-sprite.ed2b1e9dee161eee37f5efe38e83a04b.png" }, , , , , function(t, i, e) {
    function n(t) { var i = this,
            e = $(t.$input);
        this.config = t, this.$input = e, this.cache = {}, e.is(":focus") && this.listenChange(), e.on("focus", function() { i.listenChange() }).on("blur", function() { i.stopListeningChange() }), this.on("change", function() { i.request(e.val().trim()) }) } var o = e(33);
    n.prototype = new o.Events, n.prototype.constructor = n, n.prototype.listenChange = function() { var t = null,
            i = this.$input,
            e = this;
        clearInterval(this.timer), this.timer = setInterval(function() { var n = i.val().trim();
            n !== t && e.emit("change"), t = n }, this.config.changeGap || 300) }, n.prototype.stopListeningChange = function() { clearInterval(this.timer) }, n.prototype.request = function(t) { var i = this,
            e = this.$input; return this.cache[t] ? void this.emit("data", this.cache[t], t) : void this.config.getData(t, function(n) { i.cache[t] = n, e.val().trim() === t && n ? i.emit("data", n, t) : i.trigger("empty", t) }) }, t.exports = n }, , function(t, i, e) { t.exports = e.p + "icon.d694470cf6db618b194f21e0c2bce398.png" }, , , , , function(t, i, e) { var n = e(56),
        o = e(6),
        a = new o("haoche_index"),
        r = function() { var t = "search_history"; return "KA" != $("#search_list").data("test") && (t += "_KB"), t };
    i.aboutHistory = Widget.define({ events: { 'tap [data-role="item-history"]': "aboutHistory", "tap .history-clear": "clearCache" }, init: function(t) { this.config = t }, aboutHistory: function(t) { var i = $(t.currentTarget),
                e = { value: i.data("url"), text: i.text(), domain: $(".search-domian").val() };
            s(e) }, clearCache: function() { var t = r();
            a.remove(t), $(".history-clear").hide(), this.config.$hotList.html("") } }), i.search = Widget.define({ events: { 'click [data-role="cleanValue"]': "cleanValue", 'input [data-role="input"]': "isShowAutocomp", 'submit [data-role="searchForm"]': "searchForm", 'click [ data-role="search"]': "searchForm", 'blur [data-role="input"]': "blurTracker" }, init: function(t) { var i = this;
            this.config = t, this.autocomplete = new n({ $input: t.$input, getData: function(e, n) { e = e.toLowerCase(), 0 === e.length && c(t), i.filter(e, n) } }), this.autocomplete.on("data", function(e) { t.$hotList.html(i.renderItem(e)) }), c(t), $(".js-source-focus").focus(), this.config.$cleanValue.hide(), this.test = $("#search_list").data("test"); var e = $("#search_list").data("domain");
            this.pathUri = e ? "/" + e + "/buy" : "/www/buy" }, filter: function(t, i) { if (!t) return i(null); var e = $('[data-role="input"]').data("source");
            e && i(e.filter(function(i) { return i.pinyin.toLowerCase().indexOf(t) !== -1 || i.text.toLowerCase().indexOf(t) !== -1 }).slice(0, 10)) }, renderItem: function(t) { var i = this; return 0 === t.length ? ($(".search-result").show(), $(".history-clear").hide(), "KA" != i.test ? "" : '<li><a href="javascript:void(0);">未找到符合条件的二手车!</a></li>') : t.map(function(t) { if ($(".search-result").show(), $(".history-clear").hide(), $("#search_history .row-list").removeClass("history-list"), "KA" != i.test) var e = ['<li data-role="item-history" data-url="' + i.pathUri + "/_" + t.text + '/"><a href="javascript:void(0);">' + t.text + "</a></li>"];
                else var e = ['<li data-role="item-history" data-url="' + t.url + '"><a href="javascript:void(0);">' + t.text + "</a></li>"]; return e.join("") }).join("\n") }, cleanValue: function() { this.config.$cleanValue.hide(), this.config.$input.val(""), $(".search-result").hide(), $(".js-source-focus").focus() }, isShowAutocomp: function() { 0 !== this.config.$input.val().length ? this.config.$cleanValue.show() : this.config.$cleanValue.hide() }, searchForm: function() { var t = this.config.$input.val(); if (t = t.replace(/"|'|<|>/g, ""), t = t.substr(0, 24))
                if ("KA" != this.test) { var i = this.pathUri + "/_" + t + "/";
                    n = { value: i, text: t }, s(n) } else { var e = this.config.$hotList.find("li:eq(0)"),
                        n = {};
                    e.attr("data-role") && void 0 !== e.text() && (n = { value: e.data("url"), text: e.text() }, s(n)) }
            return !1 }, blurTracker: function() { window.tracker.send({ tracking_type: "input", eventid: $("#search_list").data("evid"), target: "搜索", value: $('input[data-role="input"]').val() }) } }); var c = function(t) { var i = r(),
                e = a.get(i); if (e) { $(".search-result").show(), $(".history-clear").show(); for (var n = e.length, o = "", c = 0; c < n; c++) o += '<li data-role="item-history" data-url="' + e[c].value + '"><a>' + e[c].text + "</a></li>";
                t.$hotList.html(o) } else t.$hotList.html(""), $(".history-clear").hide() },
        s = function(t) { var i = r(),
                e = a.get(i); if (e ? (e = e.filter(function(i) { if (i.value !== t.value) return i }), e.unshift(t)) : (e = [], e.unshift(t)), e = e.slice(0, 3), a.set(i, e), window.tracker.send({ tracking_type: "submit", eventid: $("#search_list").data("evid"), value: $('input[data-role="input"]').val() }), t.domain) var n = t.value.replace(/\/[a-z]+(\/.*\/)/, "/" + t.domain + "$1");
            else var n = t.value; var o = $("#search_list").data("domain"),
                c = n.split("/");
            c[1] = o ? o : "www", n = c.join("/"), "KA" != $("#search_list").data("test") && (n = n.indexOf("?") == -1 ? n + "?input=1" : n + "&input=1"), window.location.href = n };
    i.initData = function() { target = $("#search_input"); var t = new Date,
            i = "" + t.getFullYear() + t.getMonth() + t.getDate(),
            e = "search_support_data",
            n = JSON.parse(localStorage.getItem(e)),
            o = n && n.time ? n.time : "",
            a = n && n.data ? n.data : "";
        o == i && "" != a ? target.data("source", a) : $.ajax({ url: "/ajax/?a=json&module=GetSearchSuggestion", type: "GET", data: { city_id: $("#search_list").attr("data-id") }, success: function(t) { target.data("source", t); var n = {};
                n.time = i, n.data = t, localStorage.setItem(e, JSON.stringify(n)) } }); var r = $("#search_list").attr("data-domain");
        r = r ? r : "www"; var c = "search_hotCar_data_" + r,
            s = JSON.parse(localStorage.getItem(c)),
            l = s && s.time ? s.time : "",
            p = s && s.data ? s.data : ""; if (l == i && "" != p) { if ("" != p.data) { var d = ""; for (var u in p.data) { var h = p.data[u];
                    d += '<li><a href="/' + r + "/" + h.url + '/">' + h.name + "</a></li>" } $(".search-hot").show(), $(".search-hot .lab-list").html(d) } } else $.ajax({ url: "/" + r + "/buy/?act=getHotTag", type: "GET", dataType: "json", data: { num: "6" }, success: function(t) { if ("" != t.data) { var e = ""; for (var n in t.data) { var o = t.data[n];
                        e += '<li><a href="/' + r + "/" + o.url + '/">' + o.name + "</a></li>" } $(".search-hot").show(), $(".search-hot .lab-list").html(e) } var s = {};
                s.time = i, s.data = t, console.log(a), localStorage.setItem(c, JSON.stringify(s)) } }) } }, , function(t, i, e) {
    i = t.exports = e(1)(),
        i.push([t.id, ".history-list li a:before,.icon-search:before,.tsearch:before,.usericon{background:url(" + e(51) + ') no-repeat;background-size:209px auto}.icon-close{position:absolute;text-indent:-100px;overflow:hidden}.icon-close:after,.icon-close:before{content:"";position:absolute;-webkit-transform:rotate(45deg);transform:rotate(45deg)}.icon-close:after{-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}.arrow-down{display:inline-block;width:5px;height:5px;margin-left:5px;vertical-align:3px;border-top:1px solid #666;border-right:1px solid #666;-webkit-transform:rotate(135deg);transform:rotate(135deg)}.heading,.heading2{position:relative;z-index:100;width:100%;background-color:#f5f5f5;overflow:hidden}.heading2>.icon-close{top:0;left:0;width:44px;height:44px}.heading2>.icon-close:after,.heading2>.icon-close:before{top:15px;left:21px;width:1px;height:14px;background-color:#9e9e9e}.heading2 h1,.heading h1{margin:0 44px;font-size:18px;line-height:44px;color:#333;text-align:center;white-space:nowrap;text-overflow:ellipsis;overflow:hidden}.icon-reset2{right:0;font-size:15px;line-height:44px;color:#22ac38}.icon-back,.icon-reset2{position:absolute;top:0;width:44px}.icon-back{left:0;height:44px;text-indent:-100px;overflow:hidden}.icon-back:before{content:"";position:absolute;top:16px;left:16px;width:12px;height:12px;border-bottom:1px solid #888;border-left:1px solid #888;-webkit-transform:rotate(45deg);transform:rotate(45deg)}.heading .box-size{padding:7px 87px 7px 52px}.top-nav{position:relative;width:100%;height:28px;line-height:28px;background-color:#fff;border:1px solid #eee;border-radius:3px}.tcity{float:left;padding-left:8px}.tcity:after{content:"";float:right;width:1px;height:15px;margin-top:7px;margin-left:10px;background-color:#e6e6e6}.tsearch{height:28px;font-size:13px;color:#999}@media screen and (max-width:374px){.tsearch{font-size:12px}}.tsearch:before{content:"";display:inline-block;vertical-align:-1px;width:12px;height:12px;margin-right:5px;margin-left:10px;background-position:-109px -56px}.search-box .box-size{padding:7px 47px 7px 44px}.search-box>.icon-close{top:0;left:0;width:44px;height:44px}.search-box>.icon-close:after,.search-box>.icon-close:before{top:15px;left:21px;width:1px;height:14px;background-color:#9e9e9e}.search-box .top-nav .icon-close{top:8px;right:9px;width:12px;height:12px;border-radius:50%;background-color:#9e9e9e}.search-box .top-nav .icon-close:after,.search-box .top-nav .icon-close:before{top:3px;left:6px;width:1px;height:6px;background-color:#fff}.search-box .ipt{width:100%;height:28px;font-size:12px;line-height:normal;color:#252825;text-indent:10px;background-color:transparent;border:none;box-sizing:border-box;-webkit-appearance:textfield}.search-box .icon-search{position:absolute;top:0;right:0;width:47px;height:44px;background:none;border:none}.search-box .icon-search:before{content:"";display:block;width:18px;height:18px;margin:13px auto;background-position:-127px -56px}.search-result{padding-left:15px;background-color:#fff;display:none}.search-result.active{display:block}.history-list li a:before{content:"";display:inline-block;width:16px;height:16px;margin-right:6px;vertical-align:-3px;background-position:-148px -56px}.history-clear{display:block;height:40px;border-top:1px solid #e6e6e6;line-height:40px;text-align:center}.search-hot h3{height:30px;padding-left:15px;font-weight:400;line-height:30px;color:#252825}.search-hot .lab-list{padding:0 15px 10px;background-color:#fff}.search-hot .lab-list li a{height:30px;line-height:30px}.usericon{width:22px;height:22px;display:inline-block;position:absolute;right:50px;top:11px}', ""])
}, function(t, i, e) { i = t.exports = e(1)(), i.push([t.id, '.lab-list{width:100%;overflow:hidden}.lab-list,.lab-list li{padding:0 5px;box-sizing:border-box}.lab-list li{float:left;width:33.3%;margin-top:10px}.lab-list li a{display:block;height:34px;font-size:13px;line-height:34px;color:#404040;text-align:center;white-space:nowrap;text-overflow:ellipsis;overflow:hidden;background-color:#fff;border:1px solid #e1e1e1;border-radius:2px}.lab-list .active a,.lab-list li a.touch{color:#22ac38;background-color:#f1fff3;border:1px solid #22ac38}.lab-list .active a:after{content:"";display:inline-block;width:12px;height:7px;margin-left:8px;vertical-align:4px;border-bottom:1px solid #22ac38;border-left:1px solid #22ac38;-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}.row-list li a{display:block;height:43px;line-height:43px;color:#8a8a8a;border-bottom:1px solid #e6e6e6}.row-list li:last-child a{border-bottom:none}.mod-tags li{float:left;height:24px;margin:0 8px 8px 0;padding:0 10px;font-size:12px;color:#666;line-height:24px;text-align:center;background-color:#fff;border:1px solid #e0e0e0;border-radius:2px}.mod-tags .icon-close{position:relative;display:inline-block;width:8px;height:8px;margin-left:10px}.mod-tags .icon-close:after,.mod-tags .icon-close:before{top:0;left:4px;width:1px;height:8px;background-color:#ccc}', ""]) }, , function(t, i, e) { i = t.exports = e(1)(), i.push([t.id, 'body,button,input,select,textarea{font:14px/1.5 helvetica neue,tahoma,arial,hiragino sans gb,microsoft yahei,sans-serif}.box-size{width:100%;-ms-box-sizing:border-box;box-sizing:border-box}.popup-mobile{position:fixed;top:50%;left:50%;z-index:199;display:none;width:90%;height:274px;margin-top:-137px;margin-left:-45%;background-color:#fff;border-radius:8px}.popup-mobile.active{display:block}.pop-error,.pop-ipt,.pop-tel,.pop-text,.popup-mobile .pop-tit{padding-left:20px;padding-right:20px}.popup-mobile .pop-tit{height:60px;line-height:60px;padding-top:0;padding-bottom:0;font-size:16px;text-align:center}.pop-text{padding-bottom:12px;font-size:16px;color:#707070}.pop-ipt{position:relative}.pop-ipt.mt10{margin-top:10px}.pop-ipt input{width:100%;padding-left:10px;border:1px solid #e0e0e0;border-radius:2px;-webkit-appearance:none}.btn-code,.pop-ipt input{height:40px;line-height:40px}.btn-code{position:absolute;top:0;right:20px;width:90px;font-size:13px;color:#fff;background-color:#d0d0d0;border:none;border-radius:0 2px 2px 0}.btn-code.active{background-color:#22ac38}.pop-tel{font-size:16px}.pop-tel a{font-size:13px;color:#ff7e00}.pop-error{height:20px;font-size:12px;line-height:20px;color:#ff7e00}.pop-error span:before{content:"";float:left;width:12px;height:12px;margin-top:4px;margin-right:5px;background:url(' + e(58) + ") no-repeat;background-size:12px auto}.pop-btn{display:-webkit-box;display:box;width:100%;height:44px;box-sizing:border-box}.pop-btn .btn{display:block;-webkit-box-flex:1;box-flex:1;height:44px;font-size:16px;color:#fff;line-height:44px;text-align:center;background-color:#22ac38;border:none;box-sizing:inherit}.pop-btn .btn-cancel{height:43px;line-height:43px;color:#252825;background-color:#fff;border-top:1px solid #e6e6e6;border-radius:0 0 0 5px}.pop-btn .btn-sure{border-radius:0 0 5px 0}", ""]) }, , , , , , , , , , , , , , , , , , , , , function(t, i, e) { i = t.exports = e(1)(), i.push([t.id, ".subtit{padding:15px 0 2px 10px}.brand-wrap{overflow:hidden}.icon-brand{display:block;width:34px;height:34px;margin:0 auto 2px;background:url(" + e(91) + ") no-repeat;background-size:34px auto}.brand-cbox{padding-bottom:12px;background-color:#fff}.brand-cbox .subtit:first-of-type{padding:15px 0 9px 10px}.brand-cbox .subtit:nth-of-type(2){padding:20px 0 9px 10px}.brand-list{width:100%;box-sizing:border-box;overflow:hidden}.brand-list li{float:left;width:20%;box-sizing:border-box}.brand-list li a{display:block;padding:7px 0 5px;font-size:12px;color:gray;text-align:center;white-space:nowrap;text-overflow:ellipsis;overflow:hidden}.brand-list li .active{background-color:#f2f2f2}.brand-carbox .subtit,.brand-rbox .subtit{height:25px;padding:0 0 0 15px;font-size:12px;line-height:25px;color:#666;background-color:#f5f5f5}.brand-rbox .aside-letter{top:32px}.brand-rbox .aside-letter-fixed{top:15px}.brand-list2 li{height:44px;padding-left:64px;background-color:#fff;overflow:hidden}.brand-list2 .limit-no{padding-left:15px}.brand-carbox .brand-list2 .limit-no a,.brand-list2 li a{display:block;height:43px;line-height:43px;color:#252825;border-bottom:1px solid #e6e6e6}.brand-list2 .limit-no a,.brand-list2 li:last-child a{height:44px;line-height:44px;border-bottom:none}.brand-list2 li .icon-brand{float:left;margin:5px 0 0 -49px}.brand-list2 .limit-no .icon-brand{margin-left:0}.brand-carbox{position:absolute;top:44px;right:0;z-index:99;display:none;width:80%;height:100%;background-color:#fff;box-shadow:-8px 0 6px -5px #ebebeb}.brand-carbox.active{display:block}.brand-list2-car li{padding-left:15px}.brand-list2-car li img{float:left;width:50px;height:33px;margin-top:5px;margin-right:10px}.brand-list2-car li .num{float:right;margin-right:15px;font-size:12px;color:#acacac}.icon-kaiyi{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/kaiyi.png)}.icon-siming{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/siming.png)}.icon-subaru{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/subaru.png)}.icon-maikailun{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/maikailun.png)}.icon-yingzhi{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/yingzhi.png)}.icon-xianaotuo{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/xianaotuo.png)}.icon-xiyate{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/xiyate.png)}.icon-ferrari{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/ferrari.png)}.icon-lufeng{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/lufeng.png)}.icon-volvo{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/volvo.png)}.icon-chevrolet{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/chevrolet.png)}.icon-audi{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/audi.png)}.icon-lexus{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/lexus.png)}.icon-haige{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/haige.png)}.icon-rolls-royce{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/rolls-royce.png)}.icon-toyota{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/toyota.png)}.icon-beijingqiche{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/beijingqiche.png)}.icon-porsche{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/porsche.png)}.icon-jiangnan{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/jiangnan.png)}.icon-lincoln{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/lincoln.png)}.icon-liebao{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/liebao.png)}.icon-saibao1{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/saibao1.png)}.icon-infiniti{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/infiniti.png)}.icon-buick{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/buick.png)}.icon-lotus{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/lotus.png)}.icon-tj-yiqi{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/tj-yiqi.png)}.icon-jiebao{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/jiebao.png)}.icon-baojun{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/baojun.png)}.icon-nj-iveco{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/nj-iveco.png)}.icon-jlshwuche{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/jlshwuche.png)}.icon-yiqijiefang{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/yiqijiefang.png)}.icon-huayang{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/huayang.png)}.icon-mini{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/mini.png)}.icon-acura{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/acura.png)}.icon-lifan{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/lifan.png)}.icon-baolong{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/baolong.png)}.icon-beiqi{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/beiqi.png)}.icon-landrover{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/landrover.png)}.icon-hafei{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/hafei.png)}.icon-ds{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/ds.png)}.icon-benteng{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/benteng.png)}.icon-huachen{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/huachen.png)}.icon-huaxiangfuqi{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/huaxiangfuqi.png)}.icon-dazhong{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/dazhong.png)}.icon-fiat{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/fiat.png)}.icon-huapu{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/huapu.png)}.icon-shuanghuan{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/shuanghuan.png)}.icon-jili{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/jili.png)}.icon-jiao{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/jiao.png)}.icon-rongwei{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/rongwei.png)}.icon-smart{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/smart.png)}.icon-hongqi{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/hongqi.png)}.icon-dongfengyulongnazhijie{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/dongfengyulongnazhijie.png)}.icon-hyundai{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/hyundai.png)}.icon-renault{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/renault.png)}.icon-cf-yangzi{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/cf-yangzi.png)}.icon-biaozhi{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/biaozhi.png)}.icon-dongfengfengdu{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/dongfengfengdu.png)}.icon-krui{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/krui.png)}.icon-brand-xiali{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/brand-xiali.png)}.icon-lamborghini{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/lamborghini.png)}.icon-fuqiqiteng{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/fuqiqiteng.png)}.icon-benz{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/benz.png)}.icon-alpina{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/alpina.png)}.icon-changanshangyong{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/changanshangyong.png)}.icon-galue{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/galue.png)}.icon-astonmartin{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/astonmartin.png)}.icon-zhongke-huabei{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/zhongke-huabei.png)}.icon-jeep{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/jeep.png)}.icon-dongfeng{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/dongfeng.png)}.icon-shijue{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/shijue.png)}.icon-guanzhi{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/guanzhi.png)}.icon-huachen-zhonghua{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/huachen-zhonghua.png)}.icon-qichen{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/qichen.png)}.icon-saab{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/saab.png)}.icon-dongnan{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/dongnan.png)}.icon-richan{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/richan.png)}.icon-mg1{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/mg1.png)}.icon-maserati{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/maserati.png)}.icon-dongfengxiaokang{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/dongfengxiaokang.png)}.icon-laolunshi{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/laolunshi.png)}.icon-gmc{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/gmc.png)}.icon-weiziman{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/weiziman.png)}.icon-kawei{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/kawei.png)}.icon-fengxing{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/fengxing.png)}.icon-dayu{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/dayu.png)}.icon-oulang{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/oulang.png)}.icon-ruilin{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/ruilin.png)}.icon-changan{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/changan.png)}.icon-zhidou{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/zhidou.png)}.icon-mitsubishi{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/mitsubishi.png)}.icon-chuanqiyema{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/chuanqiyema.png)}.icon-jianghuai{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/jianghuai.png)}.icon-alfaromeo{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/alfaromeo.png)}.icon-bmw{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/bmw.png)}.icon-shuanglong{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/shuanglong.png)}.icon-jincheng{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/jincheng.png)}.icon-fusangheibao{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/fusangheibao.png)}.icon-dongfengfengshen{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/dongfengfengshen.png)}.icon-huatai{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/huatai.png)}.icon-skoda{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/skoda.png)}.icon-shenbao{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/shenbao.png)}.icon-hengtian{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/hengtian.png)}.icon-baofeili{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/baofeili.png)}.icon-chery{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/chery.png)}.icon-zhongxing{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/zhongxing.png)}.icon-weiwang,.icon-zhongshun{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/weiwang.png)}.icon-changcheng{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/changcheng.png)}.icon-jilindafa{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/jilindafa.png)}.icon-cadillac{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/cadillac.png)}.icon-lotuscars{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/lotuscars.png)}.icon-xiaqitongjia{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/xiaqitongjia.png)}.icon-hanma{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/hanma.png)}.icon-sh-huizhong{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/sh-huizhong.png)}.icon-weilin{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/weilin.png)}.icon-linian{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/linian.png)}.icon-zhongou{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/zhongou.png)}.icon-maybach{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/maybach.png)}.icon-springo{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/springo.png)}.icon-futian{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/futian.png)}.icon-meiya{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/meiya.png)}.icon-anchi{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/anchi.png)}.icon-chrysler{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/chrysler.png)}.icon-opel{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/opel.png)}.icon-huansu{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/huansu.png)}.icon-kaersen{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/kaersen.png)}.icon-wanfeng{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/wanfeng.png)}.icon-hafu{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/hafu.png)}.icon-bentley{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/bentley.png)}.icon-jiangling{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/jiangling.png)}.icon-daoqi{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/daoqi.png)}.icon-wushiling{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/wushiling.png)}.icon-zhongtai{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/zhongtai.png)}.icon-fudi{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/fudi.png)}.icon-suzuki{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/suzuki.png)}.icon-yongyuanqiche{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/yongyuanqiche.png)}.icon-wuling{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/wuling.png)}.icon-chuanqi1{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/chuanqi1.png)}.icon-tesila{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/tesila.png)}.icon-ford{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/ford.png)}.icon-honda{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/honda.png)}.icon-changhe{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/changhe.png)}.icon-tianma{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/tianma.png)}.icon-qingling{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/qingling.png)}.icon-huanghai{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/huanghai.png)}.icon-tengshi{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/tengshi.png)}.icon-kenisaige{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/kenisaige.png)}.icon-mazda{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/mazda.png)}.icon-byd{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/byd.png)}.icon-kia{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/kia.png)}.icon-haima{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/haima.png)}.icon-citroen{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/citroen.png)}.icon-datong{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/datong.png)}.icon-xinkai{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/xinkai.png)}.icon-huasong{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/huasong.png)}.icon-babosi{background-image:url(//sta.guazistatic.com/static/c2c/app/chebiaoicon/babosi.png)}", ""]) }, function(t, i, e) { i = t.exports = e(1)(), i.push([t.id, '.range-title{height:50px;padding-right:15px;font-size:16px;line-height:50px}.range-title span{font-size:13px;color:#a0a0a0}.range-title .ramout{float:right;font-size:14px;color:#606060}.range-title .ramout.active{color:#22ac38}.range-title .btn{width:48px;height:23px;margin-top:14px;font-size:13px;line-height:23px;background-color:#ccc}.range-title .btn.active{background-color:#22ac38}.range-box{position:relative;margin:0 40px 0 26px;padding:9px 0 15px}.load-outer{position:relative;width:100%;background-color:#e6e6e6}.load-inner,.load-outer{height:4px;border-radius:2px}.load-inner{position:absolute;background-color:#22ac38}.icon-range{position:absolute;top:0;width:28px;height:28px;margin-left:-15px;margin-top:-14px;background-color:#fff;border:1px solid #ebebeb;border-radius:50%;box-shadow:0 3px 5px 0 #f2f2f2}.icon-range:before{content:"";display:block;width:10px;height:16px;margin:6px auto;background:url(' + e(51) + ') no-repeat -192px -56px;background-size:209px auto}.curr-price{position:absolute;top:-30px;left:50%;width:62px;height:18px;margin-left:-32px;font-size:13px;color:#22ac38;text-align:center;border:1px solid #22ac38;border-radius:2px}.curr-price:after{content:"";position:absolute;bottom:-4px;left:50%;width:6px;height:6px;margin-left:-4px;background-color:#fff;border-top:1px solid #22ac38;border-right:1px solid #22ac38;-webkit-transform:rotate(135deg);transform:rotate(135deg)}.load-zero{position:absolute;left:0;bottom:15px;font-size:13px;color:#a0a0a0}.load-num{display:-webkit-box;display:box;width:100%;padding-top:21px}.load-num li{-webkit-box-flex:1;box-flex:1;font-size:13px;color:#a0a0a0;text-align:right}', ""]) }, function(t, i, e) { t.exports = e.p + "brand-default.2e686b3b7f87a1054971aba64edb5d7e.png" }, , , , function(t, i, e) { var n = e(68); "string" == typeof n && (n = [
        [t.id, n, ""]
    ]);
    e(2)(n, {});
    n.locals && (t.exports = n.locals) }, , , , , , , , , , , function(t, i, e) { i = t.exports = e(1)(), i.push([t.id, ".mod-list{position:relative}.car-info{display:block;min-height:80px;padding:15px 15px 15px 0;border-bottom:1px solid #e6e6e6}.car-img{position:relative;float:left;width:120px;height:80px;margin-right:10px}.car-img img{display:block;width:100%;height:100%}.tag-mod{position:absolute;top:-2px;left:-22px;z-index:4;width:40px;height:0;font-size:9px;color:#fff;border:16px solid transparent;border-bottom:16px solid #38b44c;-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}.text-rotate{width:100%;line-height:16px;text-align:center}.tag-new,.text-rotate{position:absolute;top:0;left:0;white-space:nowrap}.tag-new{z-index:4;width:38px;height:38px;text-indent:-100px;overflow:hidden;background:url(" + e(51) + ") no-repeat -169px 0;background-size:209px auto}.tag-city{position:absolute;right:0;bottom:0;z-index:4;height:20px;padding:0 4px;font-size:12px;line-height:20px;color:#fff;text-align:center;background:rgba(0,0,0,.4)}.car-name{font-size:15px;font-weight:400;line-height:16px;color:#252825;display:-webkit-box;-webkit-box-orient:vertical;-webkit-line-clamp:2;text-overflow:ellipsis;overflow:hidden}.car-km{margin-top:2px;font-size:12px;color:#999;overflow:hidden}.car-price{margin-top:7px;font-size:0;overflow:hidden}.car-price strong{margin-top:3px;font-size:14px;line-height:18px;color:#ff7e00}.icon-sta1,.icon-sta2,.icon-sta3,.icon-sta-blue,.icon-sta-sell{display:inline-block;height:14px;margin-top:4px;margin-left:4px;padding:0 3px;font-size:11px;line-height:14px;text-align:center;border-radius:2px}.icon-sta1{color:#33b868;border:1px solid #33b868}.icon-sta2{color:#ff5b35;border:1px solid #ff5b35}.icon-sta3{color:#3bc3b5;border:1px solid #3bc3b5}.icon-sta-blue{color:#4084ea;border:1px solid #4084ea}.icon-sta-sell{color:#ffa600;border:1px solid #f3b503}", ""]) }, , , , , , function(t, i, e) { i = t.exports = e(1)(), i.push([t.id, ".city-wrap{padding-bottom:59px}.city-main{padding:0 21px 15px 5px;background-color:#fff}.subtit{padding:15px 0 2px 10px}", ""]) }, function(t, i, e) { i = t.exports = e(1)(), i.push([t.id, ".result-fixed{position:fixed;bottom:0;left:0;z-index:88;width:100%;height:48px;background-color:#fff;border-top:1px solid #e6e6e6}.result-fixed p{float:left;width:70%;font-size:16px;line-height:48px;text-align:center}.result-fixed p strong{color:#22ac38}.result-fixed .btn{float:right;width:30%;height:48px;line-height:48px;border-radius:0}.aside-scroll{min-height:100%;overflow:auto}.aside-letter{position:absolute;top:15px;right:0;width:30px;z-index:66}.aside-letter-fixed{position:fixed}.letter-list li{width:30px;font-size:12px;line-height:20px;color:#22ac38;text-align:center}", ""]) }, , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , function(t, i, e) {
    var n = e(12),
        o = e(15),
        a = function(t) { var i = new RegExp("(^|&)" + t + "=([^&]*)(&|$)"),
                e = window.location.search.substr(1).match(i); return null != e ? unescape(e[2]) : null },
        r = function(t) { if ("" == t || null == t) var i = a("condition");
            else var i = t;
            i = $.trim(i); var e = new RegExp("(^/)|(/$)", "g");
            i = i.replace(e, ""); var n = i.split("/"); return n[0] = n[0] ? n[0] : "www", n[1] = n[1] ? n[1] : "buy", n },
        c = function(t) { if ("" == t || void 0 == t) return t; var i = new RegExp("(_)+", "g");
            t = t.replace(i, "_"); var e = new RegExp("(_)+$", "g"); return t = t.replace(e, "") },
        s = "([0-9]|_|\\-|\\.)*",
        l = function(t, i, e) { if (uriArr = r(e), uriArr[2]) { var n = new RegExp("^_", "g");
                n.test(uriArr[2]) && (uriArr[2] = ""); var o = new RegExp(t + s, "g");
                uriArr[2] = uriArr[2].replace(o, "") + t + i } else uriArr[2] = t + i; return uriArr[2] = c(uriArr[2]), uriStr = "/" + uriArr.join("/") + "/", uriStr },
        p = function(t, i, e) { if (uriArr = r(e), uriArr[2]) { var n = new RegExp("^_", "g"); if (!n.test(uriArr[2])) { var o = new RegExp(t + s, "g"),
                        a = o.exec(uriArr[2]); if (a) { var l = a[0]; if ("" == i) l = "";
                        else { var p = l.replace(t, ""),
                                d = p.split("_"),
                                u = d.indexOf(i);
                            u != -1 && d.splice(u, 1), l = d.length > 0 ? t + d.join("_") : "" } uriArr[2] = uriArr[2].replace(a[0], l), uriArr[2] = c(uriArr[2]) } } } return uriArr[2] || uriArr.splice(2, 1), uriStr = "/" + uriArr.join("/") + "/", uriStr },
        d = function(t, i, e) { if (uriArr = r(e), uriArr[2]) { var n = new RegExp("^_", "g");
                n.test(uriArr[2]) && (uriArr[2] = ""); var o = new RegExp(t + s, "g"),
                    a = o.exec(uriArr[2]); if (a) { var l = a[0].replace(t, ""),
                        p = l.split("_");
                    p.indexOf(i) == -1 && (p[p.length] = i), l = t + p.join("_"), uriArr[2] = uriArr[2].replace(o, l) } else uriArr[2] = uriArr[2] + t + i } else uriArr[2] = t + i; return uriArr[2] = c(uriArr[2]), uriStr = "/" + uriArr.join("/") + "/", uriStr },
        u = function(t, i, e) { return uriArr = r(e), uriArr[t] = $.trim(i), uriStr = "/" + uriArr.join("/") + "/", uriStr },
        h = function(t, i) { uriArr = r(i); var e = ""; if (uriArr[2]) { var n = new RegExp("^_", "g"); if (n.test(uriArr[2])) e = "";
                else { var o = new RegExp(t + s, "g"),
                        a = o.exec(uriArr[2]); if (a) { var c = a[0].replace(t, ""),
                            l = c.split("_");
                        l.length > 0 && (e = l[0]) } } } return e };
    i.slider = n.extend({ init: function(t) { this.config = t } });
    var g = function(t, i, e) { var n = { low: "", high: "", isMax: !1, text: "" };
        t < 2 && (t = 0); var o = (e.attr("data-unit"), e.attr("data-text")),
            a = e.attr("data-scale"),
            r = e.attr("data-min"),
            c = e.attr("data-max"),
            s = e.attr("data-more"),
            l = e.children(".load-num").children("li").length,
            p = !1,
            d = 100; return s ? (d = 1 - 1 / l, d = 100 * d, t *= (c - r) / d, i > d ? (i = s, p = !0) : i *= (c - r) / d) : (t *= (c - r) / d, i *= (c - r) / d), "0.5" == a ? (t = Math.round(2 * t) / 2, i = Math.round(2 * i) / 2) : (t = Math.round(t), i = Math.round(i)), s || i >= c && (p = !0), t = t >= c ? c : t, i = i <= r ? r : i, n.low = t, n.high = i, n.isMax = p, n.text = o, n };
    i.subInit = Widget.define({
        events: { "click .js-reset-option": "resetOption", "click .js-submit-option": "submitOption", "click .js-choose-city": "chooseCity", "click .js-choose-minor": "chooseMinor", "click .js-choose-tag": "chooseTag", "click .js-single-item": "chooseItem", "click .js-all-item": "chooseItems", "click .js-option-suv": "clickSUV", "click .js-option-suv-item": "clickSUVItem", "click #optionMask": "clickMask", "moving .js-option-continue": "chooseContinue", "touchmove .js-option-continue .icon-range": "moveFalse" },
        init: function() { this.condition = a("condition") ? a("condition") : ""; var t = window.location.pathname,
                i = "/misc/subscription/";
            this.condition ? this.condition = this.condition : t === i ? this.condition = "" : this.condition = t, this.subId = a("subId"), this.refer = a("refer"), this.canSend = !0, this.hidePage = "", this.moveEnd = function() { return !1 } },
        resetOption: function() {
            this.condition = "", $(".ramout.active").each(function(t, i) {
                var e = $(i).attr("data-cancle");
                $(i).removeClass("active").html(e);
            }), $(".js-single-item.active").removeClass("active"), $(".icon-range.icon-low").css("left", "0%"), $(".icon-range.icon-high").css("left", "100%"), $(".load-inner").css({ left: "0%", width: "100%" })
        },
        submitOption: function(t) { var i = this,
                e = "";
            i.canSend && "" != i.condition ? (i.canSend = !1, $.ajax({ url: "/misc/subscription/?act=submitSub", type: "post", data: { condition: i.condition, subId: Number(i.subId) }, dataType: "json", success: function(n) { var o = $(t.currentTarget); if (i.canSend = !0, "110" == n.code) $("#user-mask").addClass("active"), $(".js-user-div").addClass("active"), e = setInterval(function() { $(".js-user-div").attr("data-user") && (clearInterval(e), o.trigger("click")) }, 100);
                    else { var a = n.msg; if (a = i.subId ? "0" == n.code ? "修改成功" : a : "0" == n.code ? "订阅成功" : a, n.log_str && "" != n.log_str) { var r = { tracking_type: "submit", eventid: "1111000000000031" };
                            r = $.extend(r, JSON.parse(n.log_str)), window.tracker.send(r) } $(".js-sub-notice").html(a).addClass("active"), setTimeout(function() { $(".js-sub-notice").removeClass("active") }, 600), "0" == n.code && setTimeout(function() { $(".js-sub-back").trigger("click") }, 700) } }, error: function() { i.canSend = !0, $(".js-sub-notice").html("网络异常请稍后").addClass("active"), setTimeout(function() { $(".js-sub-notice").removeClass("active") }, 1100) } })) : "" == i.condition && ($(".js-sub-notice").html("请选择订阅条件").addClass("active"), setTimeout(function() { $(".js-sub-notice").removeClass("active") }, 1100)) },
        chooseCity: function() { var t = window.location.pathname,
                i = this.condition ? this.condition : "/www/buy/",
                e = this.subId ? "&subId=" + this.subId : "",
                n = this.refer ? "&refer=" + this.refer : "",
                o = t + "?condition=" + i + "&act=getCity" + e + n;
            window.location.href = o },
        chooseMinor: function() { var t = window.location.pathname,
                i = "/misc/subscription/",
                e = this.condition ? this.condition : "/www/buy/";
            e = this.condition ? this.condition : t === i ? "/www/buy/" : t; var n = this.subId ? "&subId=" + this.subId : "",
                o = this.refer ? "&refer=" + this.refer : "",
                t = "&back=" + t,
                a = i + "?condition=" + e + "&act=getBrand" + n + o + t;
            window.location.href = a },
        chooseTag: function() { var t = "/misc/subscription/",
                i = this.condition ? this.condition : "/www/buy/",
                e = this.subId ? "&subId=" + this.subId : "",
                n = this.refer ? "&refer=" + this.refer : "",
                o = t + "?condition=" + i + "&act=getBrand&showTag=1" + e + n;
            window.location.href = o },
        chooseItem: function(t) { var i = $(t.currentTarget),
                e = i.parent("ul"),
                n = e.attr("data-urlkey"),
                o = i.attr("data-urlval"); if (i.hasClass("active")) { i.removeClass("active"); var a = e.siblings(".range-title").find(".ramout").attr("data-cancle");
                e.siblings(".range-title").find(".ramout").removeClass("active").html(a), n && void 0 != o && "" != o && (this.condition = p(n, o, this.condition)) } else { i.addClass("active").siblings().removeClass("active"); var a = i.find("a").text();
                e.siblings(".range-title").find(".ramout").addClass("active").html(a), n && void 0 != o && "" != o && (this.condition = l(n, o, this.condition)) } },
        chooseItems: function(t) { var i = $(t.currentTarget); return i.parent().hasClass("active") ? i.parent().removeClass("active") : i.parent().addClass("active"), !1 },
        clickSUV: function(t) { var i = $(t.currentTarget);
            i.addClass("active").siblings().removeClass("active"), $(".csuv-box").addClass("active"), $("#optionMask").show() },
        clickSUVItem: function(t) { var i = $(t.currentTarget),
                e = i.attr("data-urlval"),
                n = i.attr("data-merge"),
                o = i.parents(".js-option-suv"),
                a = o.parents("ul").attr("data-urlkey"),
                r = o.attr("data-urlval"),
                c = new RegExp(a + "^[0-9]+", "g"),
                s = c.exec(r);
            r = s ? s[0] : "2", i.hasClass("active") ? i.removeClass("active") : (i.addClass("active").siblings().removeClass("active"), e > 0 && (r = r + "-" + e)), o.attr("data-urlval", r), o.find(".js-show-text").text(n), a && void 0 != r && "" != r && (this.condition = l(a, r, this.condition)), o.parents("ul").siblings(".range-title").find(".ramout").addClass("active").html(n), $("#optionMask").trigger("click") },
        clickMask: function() { $("#optionMask").hide(), $(".csuv-box").removeClass("active") },
        chooseContinue: function(t, i) { var e = $(t.currentTarget),
                n = e.parents(".filter-section").first(),
                o = i.low,
                a = i.high; if (0 != o || 100 != a) { var r = g(o, a, e),
                    c = "",
                    s = !1;
                r.isMax ? 0 != parseFloat(r.low) ? (c = r.low + r.text + "以上", s = !0) : (c = n.find("[data-cancle]").attr("data-cancle"), s = !1) : (c = 0 == parseFloat(r.low) ? r.high + r.text + "以下" : r.low + "-" + r.high + r.text, s = !0); var d = n.attr("data-urlkey"),
                    u = r.low + "-" + r.high;
                s ? (n.find(".ramout").addClass("active").html(c), this.condition = l(d, u, this.condition)) : (n.find(".ramout").removeClass("active").html(c), this.condition = p(d, "", this.condition)) } },
        moveFalse: function() { var t = this;
            clearTimeout(t.hidePage), t.beforeShow(), t.hidePage = setTimeout(function() { $("body").unbind("touchmove", t.moveEnd()) }, 100) },
        beforeShow: function() { $("body").on("touchmove", this.moveEnd()) }
    }), i.selectCity = Widget.define({ events: { "click .js-reset-option": "resetOption", "click .js-change-city": "chooseOne", "click .js-submit-option": "submitOption", "click .aside-letter li": "letterItem" }, init: function(t) { this.subId = a("subId"), this.refer = a("refer"); var i = r(""),
                e = '[data-citydomain="' + i[0] + '"]',
                n = $(e).attr("data-cityid");
            this.urlKey = t.urlkey, this.uri = d(this.urlKey, n, ""), this.showHistory(), $(window).scroll(function() { var t = $(".dead-line").offset().top,
                    i = $(window).scrollTop();
                i >= t ? $(".aside-letter").addClass("aside-letter-fixed") : $(".aside-letter").removeClass("aside-letter-fixed") }) }, resetOption: function() { var t = a("condition");
            $(".city-wrap").find(".active").removeClass("active"); var i = this.urlKey;
            t = p(i, "", t), t = u(0, "www", t), this.uri = t }, chooseOne: function(t) { var i = $(t.currentTarget),
                e = this.urlKey,
                n = i.attr("data-cityid"),
                o = this.uri,
                a = '[data-cityid="' + n + '"]'; if (i.hasClass("active")) $(a).removeClass("active"), o = p(e, n, o);
            else if ("-1" == n) $(".city-wrap").find(".active").removeClass("active"), $(a).addClass("active"), o = p(e, "", o), o = d(e, n, o);
            else { var r = $('[data-cityid="-1"]');
                r.hasClass("active") && (r.removeClass("active"), o = p(e, "-1", o)), $(a).addClass("active"), o = d(e, n, o) } var c = h(e, o);
            c && "" != c || (c = "-1"); var s = '[data-cityid="' + c + '"]',
                l = $(s).attr("data-citydomain");
            o = l && "" != l ? u(0, l, o) : u(0, "www", o), this.uri = o }, submitOption: function() { var t = window.location.pathname,
                i = this.uri,
                e = this.subId ? "&subId=" + this.subId : "",
                n = this.refer ? "&refer=" + this.refer : "",
                o = t + "?condition=" + i + e + n;
            window.location.href = o }, letterItem: function(t) { var i = $(t.currentTarget).html(),
                e = '[data-index="' + i + '"]',
                n = $(e).offset().top;
            window.scrollTo(0, n) }, showHistory: function() { var t = window.localStorage,
                i = JSON.parse(t.getItem("list_history")); if (i && "" != i.city) { var e = i.city.split("_"),
                    n = ""; for (var o in e) { var a = '[data-cityid="' + e[o] + '"]'; if ($(a).length > 0) { var r = $(a).last().attr("data-citydomain"),
                            c = $(a).last().children("a").text(),
                            s = $(a).last().hasClass("active") ? "active" : "";
                        n += '<li class=" ' + s + ' js-change-city" data-cityId="' + e[o] + '" data-cityDomain="' + r + '" >', n += '<a href="javascript:void(0);">', n += c, n += "</a></li>" } } $(".js-city-history").show().html(n) } } }), i.selectBrand = Widget.define({ events: { "click .js-change-brand": "showItem", "click .aside-letter li": "letterItem" }, init: function() { this.subId = a("subId"), this.refer = a("refer"), this.back = a("back"), this.uri = a("condition"), this.canSend = !0, this.showHistory(); var t = $(".js-change-brand.active").last(); if (t.length > 0) { var i = t.offset().top;
                window.scrollTo(0, i), $(".aside-letter").addClass("aside-letter-fixed"); var e = a("showTag");
                null != e && setTimeout(function() { t.trigger("click") }, 50) } $(window).scroll(function() { var t = $(".dead-line").offset().top,
                    i = $(window).scrollTop();
                i >= t ? $(".aside-letter").addClass("aside-letter-fixed") : $(".aside-letter").removeClass("aside-letter-fixed") }), $(".brand-carbox").on("touchmove", function(t) { t.stopPropagation() }), $(".brand-wrap").on("touchmove", function(t) { var i = t.touches[0].pageX,
                    e = $("body").width();
                i < .2 * e && ($(".brand-carbox").removeClass("active"), $("body").css({ overflow: "" })) }) }, showItem: function(t) { var i = this,
                e = $(t.currentTarget),
                n = e.attr("data-brandid"),
                a = (e.attr("data-brandurl"), e.find(".icon-brand").attr("class")),
                r = $(".brand-carbox"); if (e.hasClass("limit-no")) { i.uri = u(1, "buy", i.uri); var c = i.subId ? "&subId=" + i.subId : "",
                    s = i.refer ? "&refer=" + i.refer : "",
                    l = i.back ? i.back : window.location.pathname;
                window.location.href = l + "?condition=" + i.uri + c + s } else $(".brand-wrap").find("active").removeClass("active"), e.addClass("active"), i.canSend && (i.canSend = !1, $.ajax({ url: i.uri + "?act=getTagByMinor", type: "POST", data: { minorId: n }, dataType: "json", success: function(t) { var e = t.data.no_tag,
                        n = t.data.option,
                        c = ""; if (n || e) { var s = i.subId ? "&subId=" + i.subId : "",
                            l = i.refer ? "&refer=" + i.refer : "",
                            p = i.back ? i.back : window.location.pathname,
                            d = p + "?condition=" + e.url + s + l;
                        r.find(".js-brand-icon i").attr("class", a), r.find(".js-brand-icon a").html(e.name), r.find(".limit-no a").attr("href", d).html(e.text); for (var u in n) d = p + "?condition=" + n[u].url + s + l, c = c + '<li><a href="' + d + '">', c = c + '<img src="' + n[u].img + '">', c += n[u].text, "-" != n[u].num && (n[u].num = "约" + n[u].num + "辆"), c = c + '<span class="num">' + n[u].num + "</span>", c += "</a></li>";
                        r.find(".brand-list2-car").html(c), r.addClass("active") } if (r.hasClass("active")) { if (window.scrollY < $(".heading2").height()) { var h = $("body").height() - window.scrollY - 44;
                            r.css({ position: "absolute", top: "" }) } else { var h = $("body").height();
                            r.css({ position: "fixed", top: "0" }) } $(".js-tag-iscroll").css({ height: h }); var g = $(".brand-list2-car"),
                            f = g.children("li").height(); if (g.height() - h < 0) var m = h - g.height(),
                            b = Math.ceil(m / f);
                        else var m = $(".js-tag-head").height(),
                            b = Math.ceil(m / f); var x = "",
                            v = 0; for (v = 0; v < b; v++) x += "<li></li>";
                        g.append(x);
                        new o({ $el: $(".js-tag-iscroll"), $scrollWrapper: $(".brand-list2-car") });
                        i.canSend = !0 } }, error: function() { i.canSend = !1 } })) }, letterItem: function(t) { var i = $(t.currentTarget).html(),
                e = '[data-index="' + i + '"]',
                n = $(e).offset().top;
            window.scrollTo(0, n) }, showHistory: function() { var t = window.localStorage,
                i = JSON.parse(t.getItem("list_history")); if (i && "" != i.brand) { var e = i.brand.split("_"),
                    n = ""; for (var o in e) { var a = '[data-brandid="' + e[o] + '"]'; if ($(a).length > 0) { var r = $(a).last().attr("data-brandurl"),
                            c = $(a).last().children("a").text(),
                            s = $(a).last().children(".icon-brand").attr("Class");
                        n += '<li class="js-change-brand" data-brandid="' + e[o] + '" data-brandurl="' + r + '">', n += '<a href="javascript:void(0);">', n += '<i class="' + s + '"></i>', n += c, n += "</a></li>" } } $(".js-brand-history").show().html(n) } else $(".js-history-title").hide() } })
}, , , , , , function(t, i, e) { i = t.exports = e(1)(), i.i(e(28), ""), i.i(e(65), ""), i.i(e(66), ""), i.i(e(113), ""), i.i(e(106), ""), i.i(e(90), ""), i.i(e(89), ""), i.i(e(112), ""), i.i(e(47), ""), i.push([t.id, "body,html{min-height:100%;height:100%}body{color:#252825;background-color:#f5f5f5}body,button,input,select,textarea{font:14px/1.5 helvetica neue,tahoma,arial,hiragino sans gb,microsoft yahei,sans-serif}h1,h3,strong{font-weight:400}.mask{background-color:rgba(0,0,0,.7)}.mask4{background-color:rgba(0,0,0,.4)}.mask7{background-color:rgba(0,0,0,.7)}.mask8{background-color:rgba(0,0,0,.8)}a{color:#666}input:-webkit-autofill,textarea:-webkit-autofill{background-color:transparent;box-shadow:inset 0 0 0 50px #fff;-webkit-text-fill-color:#505050}button:focus,input:focus,textarea:focus{outline:0 none}::-webkit-input-placeholder{color:#999}.box-size{width:100%;-ms-box-sizing:border-box;box-sizing:border-box}.rel{position:relative}.filter-main,.line-list .mod-list,.subscribe-form,.subscribe-wrap .mod-list{padding-left:15px;background-color:#fff}.line-list .mod-list{padding-right:15px}.around-remote:after,.around-tit:before,.car-price-sell:before,.collection li:first-of-type span i,.collection li:last-child span i,.icon-car,.icon-column:before,.icon-home:before,.icon-line:before,.icon-multicolor,.icon-other,.icon-reset:before,.icon-totel:before,.icon-totop:before,.iconbg,.iconcollect,.lines,.nav-item:after,.nav-subscribe:before,.subs-notip:before,.swich-three i{background:url(" + e(199) + ') no-repeat;background-size:210px auto}.bg-shadow{height:20px;font-size:12px;line-height:20px;background:rgba(0,0,0,.5)}.bg-shadow,.btn{color:#fff;text-align:center}.btn{display:inline-block;height:37px;font-size:16px;line-height:37px;background-color:#22ac38;border:none;border-radius:2px;box-sizing:inherit}.icon-column,.icon-home,.icon-line{position:absolute;top:0;left:0;height:44px;text-indent:-100px;overflow:hidden}.icon-home{width:52px}.icon-home:before{content:"";position:absolute;top:11px;left:15px;width:23px;height:22px;background-position:0 0}.icon-column,.icon-line{left:inherit;right:32px;width:50px}.usericon{right:10px}.icon-column:before,.icon-line:before{content:"";position:absolute;top:12px;left:15px;width:20px;height:20px;background-position:-28px 0}.icon-column:before{background-position:-53px 0}.filter-wrap{padding-bottom:59px}.banbox-ps{display:block;position:relative}.list>.banbox-ps{margin-left:-15px}.banbox-ps img{display:block;width:100%}.closed-btn{border-radius:0 0 0 25px;background:rgba(0,0,0,.3);width:25px;height:25px}.closed-btn,.closed-btn .guide-close{position:absolute;right:0;top:0;z-index:1}.closed-btn .guide-close{width:30px;height:30px;text-indent:-999px;overflow:hidden}.closed-btn .guide-close:before{-webkit-transform:rotate(45deg);transform:rotate(45deg)}.closed-btn .guide-close:after,.closed-btn .guide-close:before{content:"";position:absolute;top:1px;left:20px;width:1px;height:18px;background:none;background-color:#fff;z-index:10}.closed-btn .guide-close:after{-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}.filter,.filter-nav{position:relative}.filter-nav{z-index:100;width:100%;display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-pack:distribute;justify-content:space-around;height:41px;background-color:#fff;border-bottom:1px solid #e6e6e6;box-sizing:border-box}.nav-fixed{position:fixed;top:0;left:0}.filter-nav a{position:relative;display:block;font-size:12px;line-height:41px;color:#333;text-align:center}.nav-item:after{content:"";display:inline-block;width:6px;height:3px;vertical-align:middle;margin-left:4px;background-position:-145px -48px}.nav-item.active{color:#22ac38}.nav-item.active:after{background-position:-151px -48px}.filter-nav .nav-item-sell{display:inline-block;width:67px;height:23px;margin-top:8px;line-height:23px;border:1px solid #e5e5e5;border-radius:15px}.filter-nav .nav-item-sell i{position:relative;display:inline-block;width:12px;height:12px;vertical-align:-1px;margin-right:4px;background-color:#e5e5e5;border-radius:50%}.filter-nav .nav-item-sell i:after{content:"";position:absolute;top:3px;left:3px;width:5px;height:3px;border-top:1px solid #fff;border-right:1px solid #fff;-webkit-transform:rotate(135deg);transform:rotate(135deg)}.filter-nav .nav-item-sell.active{border-color:#ccc;color:#22ac38}.filter-nav .nav-item-sell.active i{background-color:#22ac38}.filter-box{display:none;background-color:#fff}.filter-box.active{display:block}#filter-price,#filter-rank{position:relative;width:100%;z-index:100}#filter-rank{box-sizing:border-box}.icon-rank1,.icon-rank2,.icon-rank3,.icon-rank4,.icon-rank5,.icon-rank6{display:inline-block;width:15px;height:15px;margin-right:5px;vertical-align:-2px}.icon-rank1{background-position:0 -28px}.icon-rank2{background-position:-30px -28px}.icon-rank3{background-position:-60px -28px}.icon-rank4{background-position:-90px -28px}.icon-rank5{background-position:-120px -28px}.icon-rank6{background-position:-150px -28px}#filter-rank{padding-left:15px}#filter-rank a{color:#252825}#filter-rank .active a{color:#22ac38}#filter-rank .active a:after{content:"";float:right;width:14px;height:6px;margin-top:16px;margin-right:15px;border-bottom:1px solid #22ac38;border-left:1px solid #22ac38;-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}#filter-rank .active .icon-rank1{background-position:-15px -28px}#filter-rank .active .icon-rank2{background-position:-45px -28px}#filter-rank .active .icon-rank3{background-position:-75px -28px}#filter-rank .active .icon-rank4{background-position:-105px -28px}#filter-rank .active .icon-rank5{background-position:-135px -28px}#filter-rank .active .icon-rank6{background-position:-165px -28px}#filter-price .range-title{padding:0 15px}#filter-price .range-box{margin:0 40px;padding:32px 0 12px}#filter-price .range-box .load-zero{bottom:12px}#filter-price .lab-list{padding:0 9px}#filter-price .lab-list li{margin-top:12px;padding:0 6px}.filter-result{padding:10px 75px 2px 15px;overflow:hidden}.column-list .filter-result{padding-top:2px;padding-bottom:10px}.column-list .filter-result li{margin:8px 8px 0 0}.orient-list{overflow-x:auto;overflow-y:hidden}.orient-list .mod-tags{display:-webkit-box;display:box}.orient-list .mod-tags li{display:block;float:none;margin-bottom:0}.mod-tags .btn-reset{width:40px;height:24px;margin:0 8px 8px 0;padding:0;background-color:#f5f5f5;border:1px solid #f5f5f5}.nav-subscribe{float:right;width:58px;margin-right:-60px;font-size:12px;line-height:24px;color:#495056;border:1px solid #e0e0e0;background-color:#fff;border-radius:2px;text-align:center}.nav-subscribe:before{content:"";display:inline-block;width:11px;height:15px;margin-right:5px;vertical-align:-3px;background-position:-15px -48px}.nav-subscribe:after{content:"";position:absolute;top:10px;left:0;width:1px;height:20px;background-color:#e6e6e6}.icon-reset{display:block;font-size:12px;color:#888;background:none;border:none}.icon-reset:before{content:"";display:inline-block;width:12px;height:12px;margin-right:4px;vertical-align:-2px;background-position:0 -48px}.column-list .filter-result .nav-subscribe{margin-top:9px}.loading{display:none;height:50px;font-size:12px;line-height:50px;color:#999;text-align:center}.loading.active{display:block}.icon-load01{width:59px;height:19px;vertical-align:-4px;background:url(' + e(197) + ') no-repeat;background-size:59px auto}.icon-load01,.icon-load02{display:inline-block;margin-right:5px}.icon-load02{width:23px;height:23px;vertical-align:-7px;background-position:-100px 0;-webkit-animation:loadrotate 2s infinite linear;animation:loadrotate 2s infinite linear}@-webkit-keyframes loadrotate{0%{-webkit-transform:rotate(0)}to{-webkit-transform:rotate(1turn)}}@keyframes loadrotate{0%{transform:rotate(0)}to{transform:rotate(1turn)}}.column-list,.line-list{padding-bottom:70px}.column-list-fixed{padding-top:86px}.column-list-fixed .heading{position:fixed;top:0}.column-list-fixed .filter-nav{position:fixed;top:44px}.column-list-fixed #filter-price,.column-list-fixed #filter-rank{position:fixed;top:85px}.find-num{position:absolute;top:0;left:0;z-index:20;display:none;width:100%;height:35px;line-height:35px;font-size:14px;background:rgba(0,0,0,.7)}.page-fixed{position:fixed;left:50%;bottom:60px;z-index:18;width:50px;margin-left:-25px;border-radius:10px}.find-num.active,.page-fixed.active{display:block}.column-list .mod-list .list{margin:0 10px}.column-list .list-item{position:relative;background-color:#fff;box-shadow:0 0 2px 0 rgba(0,0,0,.1)}.column-list .list-item:first-child{margin-top:10px}.line-list .car-info{position:relative;min-height:80px;overflow:hidden;padding-right:0}.column-list .car-info{margin-bottom:15px;padding:0 0 15px;border-bottom:none}.column-list .car-img{float:none;width:100%;height:auto}.column-list .tag-new{top:-3px;left:-3px;width:55px;height:56px;background-position:-109px 0}.line-list .car-name{display:-webkit-box;-webkit-box-orient:vertical;-webkit-line-clamp:2;font-size:15px;min-height:32px}.car-price strong{color:#f56539;padding-right:5px}.car-price .fr{font-size:12px;line-height:14px;color:#757f89;position:absolute;right:0;bottom:0}.line-list .car-price{margin-top:6px;position:relative}.line-list .car-price strong{margin-top:2px}.car-price-sell{margin-top:12px;margin-bottom:-5px;padding-top:10px;font-size:10px;line-height:11px;color:#757f8a;border-top:1px solid #f5f5f5}.column-list .car-price-sell{margin:12px 15px -5px}.car-price-sell:before{content:"";float:left;width:10px;height:10px;margin-right:4px;background-position:-133px -48px}.car-price-sell span{color:#f56539}.column-list .car-name{padding:16px 15px 2px;font-size:18px;white-space:nowrap;display:inherit}.column-list .car-km{padding:2px 15px 0;font-size:14px}.column-list .car-km .label-pbox{margin-top:3px}.column-list .car-price .fr{font-size:14px;right:15px;top:2px}.line-list .car-km{margin-top:4px}.column-list .car-price{padding:0 15px;margin-left:0;position:relative;height:20px}.car-km{color:#757f89}.column-list .car-price .finance-price{font-size:20px;line-height:18px;margin-right:0}.column-list .car-price strong{font-size:21px;margin:0}.column-list .car-price .index-price{font-size:14px;margin:4px 0 0 3px;line-height:16px;vertical-align:bottom}.car-info{padding-left:130px}.line-list .car-img{margin-left:-130px}.car-price .fc-ac{margin-top:3px;color:#bec6ce;font-size:11px;display:inline-block;line-height:18px;vertical-align:bottom}.car-price .fc-ac .text-line,.finance-price2 span{text-decoration:line-through}.car-price .finance-price{float:left;font-size:16px;line-height:16px;color:#f56539;margin-top:3px;margin-right:8px}.car-price .index-price{color:#f56539;font-size:12px;line-height:14px;vertical-align:middle;margin-top:5px;display:inline-block}.label-pbox{height:16px}.label-pbox span{margin:0 4px 0 0}.car-price .label-pbox span{margin-top:4px}.label-pbox{padding-top:5px}.label-pbox span{float:left}.column-list .label-pbox{padding-left:15px}.line-list .label-pbox{margin-bottom:-1px}.car-km .label-pbox{padding-top:0}.car-km .label-pbox span{margin:0 0 0 4px}.slider{position:relative;width:100%;overflow:hidden}.slider-pics{display:-webkit-box;display:-ms-box;display:box}.slider-pics li{-webkit-box-flex:1;-ms-box-flex:1;box-flex:1;overflow:hidden}.slider-pics li img{display:block;width:100%;max-width:100%;height:100%}.slider-icon{position:absolute;bottom:15px;width:100%;height:6px;font-size:0;text-align:center}.slider-icon i{display:inline-block;width:6px;height:6px;margin:0 3px;border-radius:50%;background:hsla(0,0%,100%,.5)}.slider-icon .active{background:#fff}.slider-more{position:absolute;right:8px;top:50%;z-index:4;width:14px;height:160px;margin-top:-80px;font-size:12px;color:#fff}.slider-more i{display:block;width:10px;height:10px;margin-bottom:3px;border:1px solid #fff;border-radius:50%}.slider-more i:before{content:"";display:block;width:4px;height:4px;margin-top:2px;margin-left:4px;border-bottom:1px solid #fff;border-left:1px solid #fff;-webkit-transform:rotate(45deg);transform:rotate(45deg)}.subscribe{position:relative;padding:0 103px 8px 15px;background-color:#fff}.column-list .subscribe{margin:0 10px;box-shadow:0 0 2px 0 rgba(0,0,0,.1)}.subscribe .orient-list{height:42px}.subscribe .orient-list .mod-tags{margin-top:6px}.subs-tit{height:40px;margin-right:-103px;line-height:40px;color:#606060}.subs-btn{position:absolute;top:40px;right:15px}.subs-btn .btn{width:87px}.relate .orient-list{height:96px;margin-left:15px}.column-list .relate{margin:0 10px}.column-list .relate .orient-list{margin-left:0}.relate .orient-list .mod-tags li{width:100px;height:88px;margin-right:10px;padding:0;border:none}.rela-info{display:block;height:78px;padding:5px 5px 0;font-size:12px;text-align:center;white-space:nowrap;text-overflow:ellipsis;overflow:hidden}.rela-info img{display:block;width:75px;height:50px;margin:5px auto 0}.relate-tit{height:39px;font-size:15px;line-height:39px;text-align:center}.relate-tit span{display:inline-block;width:56px;height:1px;vertical-align:4px}.relate-tit span:first-of-type{margin-right:12px;background-image:linear-gradient(270deg,#e6e6e6,hsla(0,0%,90%,0))}.relate-tit span:last-of-type{margin-left:12px;background-image:linear-gradient(90deg,#e6e6e6,hsla(0,0%,90%,0))}.around{margin-top:7px;background-color:#fff}.column-list .around{margin:7px 10px 10px;box-shadow:0 0 2px 0 rgba(0,0,0,.1)}.around .orient-list{clear:both;height:41px;margin-left:15px}.around-tit{height:47px;padding-left:15px;font-size:15px;line-height:47px}.around-tit:before{content:"";display:inline-block;width:14px;height:17px;margin-right:7px;vertical-align:-2px;background-position:-174px 0}.around-remote{margin-top:14px;margin-right:15px;font-size:12px;color:gray}.around-remote:after{content:"";display:inline-block;width:11px;height:11px;margin-left:5px;vertical-align:-2px;background-position:-45px -48px}.around-tit2{padding-top:5px;padding-bottom:8px;font-size:12px;color:gray;border-bottom:1px solid #e6e6e6}.fixed-icon{position:fixed;right:15px;bottom:62px;z-index:9}.icon-tosell,.icon-totel,.icon-totop{display:block;width:44px;margin-top:25px;color:#fff;text-align:center;border-radius:50%}.icon-totel{height:40px;padding-top:4px;font-size:12px;background-color:#ff7e00}.icon-totel:before{content:"";display:block;width:17px;height:18px;margin:0 auto;background-position:-128px 0}.icon-tosell{height:44px;font-size:13px;line-height:44px;background-color:#ffae13}.icon-tosell:after{content:"";display:inline-block;width:7px;height:7px;border-bottom:1px solid #fff;border-left:1px solid #fff;-webkit-transform:rotate(-135deg);transform:rotate(-135deg)}.icon-totop{width:42px;height:42px;background-color:#fff;border:1px solid #9a9a9a}.icon-totop:before{content:"";display:block;width:19px;height:23px;margin:11px auto 0;background-position:-150px 0}.filter-main .filter-section:nth-child(4),.filter-main .filter-section:nth-child(5),.filter-main .filter-section:nth-child(6){border-bottom:1px solid #e6e6e6}.filter-section>.subtit{padding:15px 0 0;font-size:16px}.filter-section>.lab-list{padding:0 5px 20px 0;border-bottom:1px solid #e6e6e6}.filter-section:last-child>.lab-list{border-bottom:none}.filter-section>.lab-list>li{padding:0 10px 0 0}.type-car{width:100%;padding-bottom:10px;padding-right:10px;border-bottom:1px solid #e6e6e6;box-sizing:border-box}.type-car>li{float:left;width:33.3%;margin-top:10px;padding:0 5px;text-align:center;box-sizing:border-box}.type-car>li:first-child,.type-car>li:nth-child(4){padding-left:0}.type-car>li>.downbox>a,.type-car>li>a{display:block;height:57px;padding-top:5px;color:#404040;border:1px solid #fff;border-radius:2px}.type-car>li.active>.downbox>a,.type-car>li.active>a{color:#22ac38;background-color:#f1fff3;border:1px solid #22ac38}.downbox{position:relative;width:100%}.csuv-box{position:absolute;top:65px;left:0;z-index:99;display:none;width:345px;height:106px;background-color:#fff;border-radius:2px}@media screen and (max-width:374px){.csuv-box{width:290px}}.csuv-box.active{display:block}.csuv-box:before{content:"";position:absolute;top:-14px;left:36px;width:0;height:0;border-width:7px;border-style:solid;border-color:transparent transparent #fff}.csuv-box .lab-list{padding:2px 7px 0}.icon-car{display:block;width:70px;height:27px;margin:0 auto 5px}.icon-ctwo{background-position:0 -65px}.icon-cthree{background-position:-70px -65px}.icon-crun{background-position:-140px -65px}.icon-csuv{background-position:0 -94px}.icon-cmpv{background-position:-70px -94px}.icon-cmbc{background-position:-140px -94px}.icon-cpk{background-position:0 -124px}.icon-color{display:inline-block;width:14px;height:14px;margin-right:6px;vertical-align:-2px;border-radius:50%}.icon-black{background-color:#232323}.icon-grey{background-color:#dfe1de}.icon-grey2{background-color:#707070}.icon-red{background-color:#ff5350}.icon-orange{background-color:#ffa13f}.icon-green{background-color:#87e869}.icon-blue{background-color:#4ec1ff}.icon-brown{background-color:#99691f}.icon-purple{background-color:#d584e9}.icon-champagne{background-color:#ead795}.icon-yellow{background-color:#ffd943}.icon-multicolor{background-position:-60px -48px}.icon-white{background-color:#fff}.icon-other,.icon-white{width:12px;height:12px;border:1px solid #e1e1e1}.icon-other{background-position:-78px -48px}.subscribe-box{height:278px;margin-top:6px;background-color:#fff}.sube-no{padding-top:50px;font-size:12px;text-align:center}.sube-no:before{content:"";display:block;width:95px;height:95px;margin:0 auto 4px;background:url(' + e(198) + ') no-repeat;background-size:95px auto}.sube-btn{padding-top:25px;font-size:0;text-align:center}.sube-btn .btn{width:96px;height:30px;margin:0 5px;line-height:30px;font-size:12px;border:1px solid #22ac38}.sube-btn .btn-more{color:#22ac38;background-color:#fff}.subscribe-form .filter-section .range-box,.subscribe-form .filter-section .type-car{display:none}.subscribe-form .filter-section.active .range-box,.subscribe-form .filter-section.active .type-car{display:block}.subscribe-form .filter-section.active{border-bottom:1px solid #e6e6e6}.subscribe-form .filter-section.active .type-car{border-bottom:none}.subscribe-form .filter-section .range-title{position:relative;display:block;padding-right:30px;color:#252825;border-bottom:1px solid #e6e6e6;overflow:hidden}.subscribe-form .filter-section .range-title:after{content:"";position:absolute;top:19px;right:15px;width:7px;height:7px;border-bottom:1px solid #acacac;border-left:1px solid #acacac;-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}.subscribe-form .filter-section.active .range-title{border-bottom:1px solid #fff}.subscribe-form .filter-section.active .range-title:after{top:24px;-webkit-transform:rotate(135deg);transform:rotate(135deg)}.subscribe-form .filter-subslist .range-title{padding-right:25px}.subscribe-form .filter-subslist .range-title:after{top:22px;-webkit-transform:rotate(-135deg);transform:rotate(-135deg)}.subscribe-form .filter-section .type-car{padding-bottom:0}.subscribe-form .filter-section .type-car>li{margin-top:0;margin-bottom:10px}.form-btn{padding:15px;background-color:#fff}.form-btn .btn{display:block}.subs-notip{padding:12px 0;font-size:12px;color:#a0a0a0;text-align:center}.subs-notip:before{content:"";display:inline-block;width:12px;height:12px;margin-right:5px;vertical-align:-1px;background-position:-116px -48px}.toast{display:none;position:fixed;top:50%;left:50%;z-index:99;width:64%;height:34px;margin-left:-32%;margin-top:-17px;background-color:rgba(0,0,0,.7);color:#fff;line-height:34px;text-align:center;border-radius:5px}.toast.active{display:block}.collection{background-image:url(' + e(196) + ");background-repeat:no-repeat;background-size:100% 70px;width:100%;height:55px;padding-top:15px}.collection ul{background-color:transparent}.collection li{width:50%;float:left;height:40px;text-align:center;color:#000}.collection li a{padding:0 30px 0 15px;display:block}.collection li:first-child a{padding:0 15px 0 30px}.collection li a span{height:40px;line-height:40px;background-color:#fff;display:block;border-radius:3px;-webkit-border-radius:3px;-ms-border-radius:3px;-moz-border-radius:3px}.collection li:first-of-type span i,.collection li:last-child span i{width:22px;height:22px;display:inline-block;vertical-align:middle;margin-right:5px}.collection li:first-of-type span i{background-position:0 -155px}.collection li:last-child span i{background-position:0 -207px;margin-right:2px}@media screen and (max-width:320px){.collection li a{padding:0 20px 0 10px}.collection li:first-child a{padding:0 10px 0 20px}}.poptips01{display:none;position:fixed;z-index:300;bottom:0;left:5%;width:90%;height:230px;overflow:hidden;color:#fff;text-align:center;line-height:30px}.poptips01.active{display:block}.iconcollect{width:20px;height:27px;background-position:-22px -155px;display:inline-block;margin:0 3px;vertical-align:middle}.lines{background-position:-177px -125px;width:32px;height:103px;display:block;margin:0 auto}.btnknow{background-color:#fff;display:inline-block;color:#000;padding:0 15px;line-height:25px;border-radius:3px;-webkit-border-radius:3px;-ms-border-radius:3px;-moz-border-radius:3px}.mask-list.active{z-index:100}.list-finance-adver{margin-left:-15px}.list-finance-adver a,.list-finance-adver img{display:block;width:100%}.column-list .list-finance-adver{margin-right:-15px;margin-bottom:15px}.advertising{display:none}.advertising.active{display:block;margin:10px 0}.advertising.advertising-filter{display:block;margin:0 0 10px}.advertising img{display:block;width:100%}@media only screen and (max-width:320px){.label-pbox span{display:none}.label-pbox span:first-child{display:block}}@media only screen and (max-width:375px){.label-pbox span:nth-child(3){display:none}}", ""]) }, , , , , , , , , , , , , , , , , , function(t, i, e) { t.exports = e.p + "bg01.dab77ea4c610c305cbfa0f921f7c03b9.jpg" }, function(t, i, e) { t.exports = e.p + "icon-load.8f57a20d0f1d9ffc95ec51cd219cb41e.gif" }, function(t, i, e) { t.exports = e.p + "icon_status_nothing.59c661ec2ea74f3925ca5b236ed1678b.gif" }, function(t, i, e) {
    t.exports = e.p + "iconbg.9d33836f16ef2d7dea89c4c4da98e509.png";
}, , , , , , , , , , , , function(t, i, e) { var n = e(178); "string" == typeof n && (n = [
        [t.id, n, ""]
    ]);
    e(2)(n, {});
    n.locals && (t.exports = n.locals) }, , , , , , , , , , , , , , , , , , , , , , , , , , function(t, i, e) { var n = e(12),
        o = e(24),
        a = e(15),
        r = e(63).initData,
        c = function(t, i, e) { var n = new Date;
            n.setTime(n.getTime() + 24 * e * 60 * 60 * 1e3), document.cookie = t + "=" + escape(i) + ";path=/;domain=.guazi.com;expires=" + n.toGMTString() },
        s = function(t) { var i = document.cookie.match(new RegExp("(^| )" + t + "=([^;]*)(;|$)")); return null != i ? unescape(i[2]) : null },
        l = function(t) { if ("" == t) var i = window.location.pathname;
            else var i = t;
            i = $.trim(i); var e = new RegExp("(^/)|(/$)", "g");
            i = i.replace(e, ""); var n = i.split("/"); return n },
        p = function(t) { if ("" == t || void 0 == t) return t; var i = new RegExp("(_)+", "g");
            t = t.replace(i, "_"); var e = new RegExp("(_)+$", "g"); return t = t.replace(e, "") },
        d = "([0-9]|_|\\-|\\.)*",
        u = function(t, i, e) { if (uriArr = l(e), uriArr[2]) { var n = new RegExp("^_", "g");
                n.test(uriArr[2]) && (uriArr[3] = uriArr[2], uriArr[2] = ""); var o = new RegExp(t + d, "g");
                uriArr[2] = uriArr[2].replace(o, "") + t + i } else uriArr[2] = t + i; return uriArr[2] = p(uriArr[2]), uriStr = "/" + uriArr.join("/") + "/", uriStr },
        h = function(t, i, e) { if (uriArr = l(e), uriArr[2]) { var n = new RegExp("^_", "g");
                n.test(uriArr[2]) && (uriArr[3] = uriArr[2], uriArr[2] = ""); var o = new RegExp(t + d, "g"),
                    a = o.exec(uriArr[2]); if (a) { var r = a[0].replace(t, ""),
                        c = r.split("_");
                    c.indexOf(i) == -1 && (c[c.length] = i), r = t + c.join("_"), uriArr[2] = uriArr[2].replace(o, r) } else uriArr[2] = uriArr[2] + t + i } else uriArr[2] = t + i; return uriArr[2] = p(uriArr[2]), uriStr = "/" + uriArr.join("/") + "/", uriStr },
        g = function(t, i, e) { if (uriArr = l(e), uriArr[2]) { var n = new RegExp("^_", "g"); if (!n.test(uriArr[2])) { var o = new RegExp(t + d, "g"),
                        a = o.exec(uriArr[2]); if (a) { var r = a[0]; if ("" == i) r = "";
                        else { var c = r.replace(t, ""),
                                s = c.split("_"),
                                u = s.indexOf(i);
                            u != -1 && s.splice(u, 1), r = s.length > 0 ? t + s.join("_") : "" } uriArr[2] = uriArr[2].replace(a[0], r), uriArr[2] = p(uriArr[2]) } } } return uriArr[2] || uriArr.splice(2, 1), uriStr = "/" + uriArr.join("/") + "/", uriStr },
        f = function(t, i) { uriArr = l(i); var e = ""; if (uriArr[2]) { var n = new RegExp("^_", "g"); if (n.test(uriArr[2])) e = "";
                else { var o = new RegExp(t + d, "g"),
                        a = o.exec(uriArr[2]); if (a) { var r = a[0].replace(t, ""),
                            c = r.split("_");
                        c.length > 0 && (e = c[0]) } } } return e },
        m = function(t, i, e) { return uriArr = l(e), uriArr[t] = $.trim(i), uriStr = "/" + uriArr.join("/") + "/", uriStr };
    i.lazyLoad = Widget.define({ init: function() { var t = this;
            this.loadImg(), this.resizeImg(), $("body").on("add", ".js-lazy-load", function() { t.loadImg(), t.resizeImg() }) }, loadImg: function() { var t = $(".js-lazy-load"); if (t && t.length) { t.each(function() { var t = $(this).offset().top;
                    $(this).data("offsetTop", t) }); var i = $(window).height(),
                    e = null,
                    n = function() { clearTimeout(e), e = setTimeout(function() { var e = $(window).scrollTop();
                            t.each(function() { var t = $(this).data("original"); if (t) { var n = $(this).data("offsetTop");
                                    e + i + 300 > n && ($(this).attr("src", t), $(this).data("original", "")) } }, 20) }) };
                $(window).on("scroll", n), $(window).trigger("scroll") } }, resizeImg: function() { var t = document.documentElement.clientWidth,
                i = t / 2 - 15,
                e = i / 1.526;
            $(".list_post_image_size").css({ width: i, height: e }) }, setCookie: function() { var t = "appdown_isshow_list_3_show",
                i = "hide",
                e = new Date;
            e.setHours(23), e.setMinutes(59), e.setSeconds(59), document.cookie = t + "=" + escape(i) + ";expires=" + e.toGMTString() + ";path=/" } }), i.storageHistory = Widget.define({ init: function() { var t = window.localStorageSubstitute,
                i = "",
                e = t.getItem("list_history");
            e = e ? JSON.parse(e) : { city: "", brand: "" }, i = e; var n = JSON.parse($('input[name="history"]').val()); if (n) { var o = n.city ? this.mergeStr(n.city, e.city, 9) : i.city,
                    a = n.brand ? this.mergeStr(n.brand, e.brand, 5) : i.brand;
                i = { city: o, brand: a } } t.setItem("list_history", JSON.stringify(i)) }, mergeStr: function(t, i, e) { var n = t.split("_"),
                o = i.split("_"),
                a = []; if (n.length >= e)
                for (var r = 0; r < e; r++) a[r] = n[r];
            else { a = n; var c = e - n.length; for (var s in o) { var l = o[s]; if (a.indexOf(l) == -1 && (a[a.length] = l, --c <= 0)) break } } return a.join("_") } }); var b = function() { var t = $(".mod-list .list-item"),
            i = { tracking_type: "click", eventid: "1111000000000002" },
            e = $("#listFilter").val();
        e && "" != e && (i = $.extend(i, JSON.parse(e))); for (var n = t.length, o = 0, a = 0; a < n; a++) { var r = $(t[a]); if (!r.attr("data-gzlog")) { var c = r.attr("data-clue"),
                    s = r.attr("data-type"),
                    l = r.find(".page-size").html();
                l = parseInt(l), i.carid = c + "@" + l + "@" + o + "@" + s; var p = ""; for (var d in i) i[d] && (p += d + "=" + i[d] + "&");
                r.attr("data-gzlog", p), o += 1 } } var u = $(".js-empty-sub"); if (u && void 0 != u && !u.attr("data-gzlog")) { i = { tracking_type: "submit", eventid: "1111000000000016" }, e && "" != e && (i = $.extend(i, JSON.parse(e))), p = ""; for (d in i) i[d] && (p += d + "=" + i[d] + "&");
            u.attr("data-gzlog", p) } };
    i.initListPage = Widget.define({ events: { "click .js-change-style": "changeStyle", "click #maskList": "cancelFilter", "click .tcity": "changeCity", "click .nav-item.order": "changeOrder", "click .nav-item.brand": "changeBrand", "click .nav-item.price": "changePrice", "click .nav-item.option": "changeOption", "click .js-close-top": "closeBanner", "click .guide-close-brand": "closeAppBanner" }, init: function() { setTimeout(function() { $(".find-num.bg-shadow").removeClass("active") }, 2e3), this.hidePage = "", this.scrollPostion = 0; var t = this;
            $(window).scroll(function() { clearTimeout(t.hidePage); var i = $(window).scrollTop() + $("body").height(),
                    e = $(".list-item").length;
                $(".list-item").each(function(n, o) { var a = $(o).height(); if (i - $(o).offset().top < a || n + 1 == e) { var r = $(o).find(".page-size").html(); return $(".page-fixed").html(r), $(".page-fixed").css("display", "block"), t.hidePage = setTimeout(function() { $(".page-fixed").css("display", "none") }, 800), !1 } }) }), this.moveEnd = function() { return !1 }, b() }, changeStyle: function() { var t = "styleType",
                i = s(t); "large" == i ? c(t, "small", 1) : c(t, "large", 1), window.location.reload() }, cancelFilter: function() { $("#maskList").hide(), $(".nav-item").removeClass("active"), $(".filter-box").removeClass("active"), $("body").unbind("touchmove", this.moveEnd()) }, changeCity: function() { var t = window.location.pathname + "?act=changeCity";
            window.location.href = t }, changeOrder: function(t) { this.beforeShow(), $(t.currentTarget).hasClass("active") ? $("#maskList").trigger("click") : ($(t.currentTarget).addClass("active").siblings(".nav-item").removeClass("active"), $("#filter-rank").addClass("active").siblings().removeClass("active"), $("#maskList").show()) }, changeBrand: function() { var t = window.location.pathname + "?act=changeBrand";
            window.location.href = t }, changePrice: function(t) { this.beforeShow(), $(t.currentTarget).hasClass("active") ? $("#maskList").trigger("click") : ($(t.currentTarget).addClass("active").siblings(".nav-item").removeClass("active"), $("#filter-price").addClass("active").siblings().removeClass("active"), $("#maskList").show()) }, changeOption: function() { self.scrollPostion = $(window).scrollTop(), $("#maskList").trigger("click"), $(".filter-wrap").css("display", "block").siblings().hide(), window.scrollTo(0, 0) }, closeBanner: function(t) { $(t.currentTarget).parents(".banbox-ps").remove(), c("list_banner", "hide", 3) }, closeAppBanner: function() { $(".js-app-banner").remove(), c("list_app_banner", "hide", 1) }, closeAppLayer: function() { $(".js-app-layer").remove(), c("list_app_layer", "hide", 1) }, beforeShow: function() { var t = $(".filter-nav").offset().top;
            window.scrollTo(0, t), $("body").on("touchmove", this.moveEnd()) } }), i.pullRefresh = Widget.define({ init: function() { this.startY = 0, this.needShow = !1; var t = this;
            $(".js-list-page").on("touchstart", function(i) { t.startY = i.touches[0].pageY }), $(".js-list-page").on("touchmove", function(i) { var e = i.touches[0].pageY;
                $(window).scrollTop() < 10 && !t.needShow && e - t.startY > 50 && ($(".loading").has(".icon-load01").addClass("active"), t.needShow = !0) }), $(".js-list-page").on("touchend", function(i) { t.needShow && (i.preventDefault(), c("refresh", "true", 1), window.location.reload()) }) } }), i.sildeShowHead = Widget.define({ init: function() { this.startY = 0, this.needShow = !1; var t = this;
            $(".js-list-page").on("touchstart", function(i) { t.startY = i.touches[0].pageY }), $(".js-list-page").on("touchmove", function(i) { var e = i.touches[0].pageY;
                e > t.startY ? $(".js-list-page").addClass("column-list-fixed") : $(".js-list-page").removeClass("column-list-fixed"), $(window).scrollTop() <= 160 && $(".js-list-page").removeClass("column-list-fixed") }), $(document).on("scroll", function() { $(window).scrollTop() <= 160 && $(".js-list-page").removeClass("column-list-fixed") }) } }), i.slideAdd = Widget.define({ init: function() { var t = 2,
                i = !1,
                n = !0;
            $(window).scroll(function() { if ($("#maskList").is(":hidden") && !$(".js-list-page").is(":hidden") && $(window).scrollTop() == $(document).height() - $(window).height()) { var a = window.location.pathname;
                    a = $.trim(a); var r = new RegExp("(^/)|(/$)", "g");
                    a = a.replace(r, ""); var c = a.split("/"),
                        s = new RegExp("^_", "g"); if (s.test(c[2]) && (c[3] = c[2], c[2] = ""), c[2]) { var s = new RegExp("o[0-9]+", "g");
                        c[2] = c[2].replace(s, "") + "o" + t } else c[2] = "o" + t;
                    a = "/" + c.join("/") + "/?act=getNext", !i && n && (n = !1, $.ajax({ url: a, type: "GET", dataType: "json", success: function(a) { if ("0" == a.code) { n = !0, t += 1; var r = a.data.thisCity,
                                    c = a.data.aroundCity; if (r.length <= 0 && c.length <= 0) i = !0, $(".loading").has(".icon-load02").html("更多车源期待中~"), $(".js-relate-div").remove();
                                else { r.length > 0 && $(".js-car-list").children("ul").append(r), c.length > 0 && ($(".js-around-list").length > 0 ? $(".js-around-list").children("ul").append(c) : $(".js-pre-around").after(c)); var s = $(".js-app-banner").first().clone();
                                    c.length > 0 ? ($(".js-relate-div").remove(), $(".js-around-list").children("ul").append(s)) : r.length > 0 && $(".js-car-list").children("ul").append(s) } $(".js-lazy-load").trigger("add"), $(".slider").trigger("resize"), $(".slider").each(function(t, i) { "1" != $(i).attr("data-slider") && ($(i).attr("data-slider", "1"), o.slideBanner.setEl(i)) }), Widget.initWidgets([o.slideBanner]), e(5).init(); var l = ["_trackEvent", "wap_list_fanYe", "scroll", "wap_list_bottom_fanYe_c"];
                                window._hmt.push(l); var p = a.data.carids ? a.data.carids : "-",
                                    d = $("#listFilter").val(),
                                    u = { tracking_type: "show", eventid: "0380000000000138", carids: p };
                                d && "" != d && (u = $.extend(u, JSON.parse(d))), window.tracker.send(u), b() } else i = !0, $(".loading").has(".icon-load02").html("更多车源期待中~"), $(".js-relate-div").remove() }, error: function() { i = !0, $(".loading").has(".icon-load02").html("更多车源期待中~"), $(".js-relate-div").remove() } })) } }) } }); var x = function(t, i, e) { var n = { low: "", high: "", isMax: !1, text: "" };
        t < 2 && (t = 0); var o = (e.attr("data-unit"), e.attr("data-text")),
            a = e.attr("data-scale"),
            r = e.attr("data-min"),
            c = e.attr("data-max"),
            s = e.attr("data-more"),
            l = e.children(".load-num").children("li").length,
            p = !1,
            d = 100; return s ? (d = 1 - 1 / l, d = 100 * d, t *= (c - r) / d, i > d ? (i = s, p = !0) : i *= (c - r) / d) : (t *= (c - r) / d, i *= (c - r) / d), "0.5" == a ? (t = Math.round(2 * t) / 2, i = Math.round(2 * i) / 2) : (t = Math.round(t), i = Math.round(i)), s || i >= c && (p = !0), t = t >= c ? c : t, i = i <= r ? r : i, n.low = t, n.high = i, n.isMax = p, n.text = o, n };
    i.slider = n.extend({ init: function(t) { this.config = t } }), i.singleItem = Widget.define({ events: { "click .js-single-option": "chooseItem", "moving #filter-price .js-option-continue": "priceContinue", "click .js-submit-price.active": "submit" }, init: function() { this.val = "" }, chooseItem: function(t) { var i = $(t.currentTarget),
                e = "",
                n = i.parent("ul").attr("data-urlkey"),
                o = i.attr("data-urlval");
            i.hasClass("active") ? (i.removeClass("active"), e = g(n, "", ""), window.location.href = e) : n && void 0 != o && "" != o ? (e = u(n, o, ""), window.location.href = e) : $("#maskList").trigger("click") }, priceContinue: function(t, i) { var e = $(t.currentTarget),
                n = (e.parents(".filter-section").first(), i.low),
                o = i.high; if (0 != n || 100 != o) { var a = x(n, o, e);
                $("#filter-price .active").removeClass("active"), $(".js-submit-price").addClass("active"); var r = "",
                    c = !1;
                a.isMax ? 0 != parseFloat(a.low) ? (r = a.low + a.text + "以上", c = !0) : (r = "不限", c = !1) : (r = 0 == parseFloat(a.low) ? a.high + a.text + "以下" : a.low + "-" + a.high + a.text, c = !0), e.find(".curr-price").html(r), c && (this.val = a.low + "-" + a.high) } }, submit: function() { if (!this.val || "" == this.val) return window.location.reload(), !0; var t = {};
            t.tracking_type = "click", t.eventid = "1111000000000005", t.evmsg = "filter", t.filter = "price_index", t.price_index = this.val, window.tracker.send(t); var i = "p",
                e = u(i, this.val, "");
            setTimeout(function() { window.location.href = e }, 50) } }), i.multiOption = Widget.define({ events: { "click .js-close-option": "closeOption", "click .js-reset-option": "resetOption", "click .js-multi-option": "chooseOne", "click .js-submit-option": "submitOption", "click .js-option-suv": "clickSUV", "click .js-option-suv-item": "clickSUVItem", "click .js-optionMask": "clickMask", "moving .js-option-continue": "chooseContinue", "touchmove .js-option-continue .icon-range": "moveFalse", "moveend .js-option-continue": "chooseEnd" }, init: function() { this.uri = window.location.pathname, this.getNumTimeOut = "", this.hidePage = "", this.moveEnd = function() { return !1 } }, getNum: function() { var t = this;
            clearTimeout(this.getNumTimeOut), this.getNumTimeOut = setTimeout(function() { var i = t.uri;
                $.ajax({ url: i + "?act=getNum", type: "GET", dataType: "json", success: function(t) { $(".result-fixed p strong").html(t.num) } }) }, 1e3) }, closeOption: function() { $(".js-list-page").css("display", "block"), $(".filter-wrap").css("display", "none"), $(".download-header").show(), $(window).scrollTop(self.scrollPostion) }, resetOption: function() { var t = window.location.pathname,
                i = $(".js-choose-option");
            i.find(".filter-section").each(function(i, e) { var n = $(e).attr("data-urlkey");
                t = g(n, "", t) }), i.find(".active").removeClass("active"), i.find(".load-inner").css({ width: "100%", left: "0%" }), i.find(".icon-range.icon-low").css({ left: "0%" }), i.find(".icon-range.icon-high").css({ left: "100%" }), i.find(".ramout").each(function(t, i) { var e = $(i).attr("data-cancle");
                $(i).removeClass("active").html(e) }), this.uri = t, this.getNum() }, chooseOne: function(t) { var i = $(t.currentTarget),
                e = i.parents(".filter-section").attr("data-urlkey"),
                n = i.attr("data-urlval"),
                o = this.uri;
            i.hasClass("active") ? (i.removeClass("active"), o = g(e, n, o)) : i.parent().hasClass("js-single-item") ? (i.addClass("active").siblings().removeClass("active"), o = u(e, n, o)) : (i.addClass("active"), o = h(e, n, o)), this.uri = o, this.getNum() }, submitOption: function() { window.location.href = this.uri }, clickSUV: function(t) { var i = $(t.currentTarget);
            i.addClass("active").siblings().removeClass("active"), $(".js-suv-box").addClass("active"), $(".js-optionMask").addClass("active") }, clickSUVItem: function(t) { var i = $(t.currentTarget),
                e = i.attr("data-urlval"),
                n = i.attr("data-merge"),
                o = i.parents(".js-option-suv"),
                a = o.parents(".filter-section").attr("data-urlkey"),
                r = o.attr("data-urlval"),
                c = new RegExp(a + "^[0-9]+", "g"),
                s = c.exec(r);
            r = s ? s[0] : "2"; var l = this.uri;
            i.hasClass("active") ? i.removeClass("active") : (i.addClass("active").siblings().removeClass("active"), e > 0 && (r = r + "-" + e)), l = g(a, "", l), l = u(a, r, l), o.attr("data-urlval", r), o.find(".js-show-text").text(n), this.uri = l, this.getNum(), $(".js-optionMask").trigger("click") }, clickMask: function() { $(".js-optionMask").removeClass("active"), $(".js-suv-box").removeClass("active") }, chooseContinue: function(t, i) { var e = this.uri,
                n = $(t.currentTarget),
                o = n.parents(".filter-section").first(),
                a = i.low,
                r = i.high; if (0 != a || 100 != r) { var c = x(a, r, n),
                    s = "",
                    l = !1;
                c.isMax ? 0 != parseFloat(c.low) ? (s = c.low + c.text + "以上", l = !0) : (s = o.find("[data-cancle]").attr("data-cancle"), l = !1) : (s = 0 == parseFloat(c.low) ? c.high + c.text + "以下" : c.low + "-" + c.high + c.text, l = !0); var p = o.attr("data-urlkey"),
                    d = c.low + "-" + c.high;
                l ? (o.find(".ramout").addClass("active").html(s), e = g(p, "", e), e = h(p, d, e)) : (o.find(".ramout").removeClass("active").html(s), e = g(p, "", e)), this.uri = e, this.getNum() } }, moveFalse: function() { var t = this;
            clearTimeout(t.hidePage), t.beforeShow(), t.hidePage = setTimeout(function() { $("body").unbind("touchmove", t.moveEnd()) }, 100) }, beforeShow: function() { $("body").on("touchmove", this.moveEnd()) }, chooseEnd: function(t, i) { var e = (this.uri, $(t.currentTarget)),
                n = e.parents(".filter-section").first(),
                o = n.attr("data-logkey"); if (!o || void 0 == o) return !0; var a = i.low,
                r = i.high; if (0 != a || 100 != r) { var c = x(a, r, e),
                    s = c.low + "-" + c.high;
                setTimeout(function() { var t = {};
                    t.tracking_type = "moveend", t.eventid = "1111000000000003", t.evmsg = "filter", t.filter = o, t[o] = s, window.tracker.send(t) }, 200) } } }), i.selectBrand = Widget.define({ events: { "click .js-change-brand": "showItem", "click .aside-letter li": "letterItem" }, init: function() { this.uri = l(""), this.canSend = !0, this.showHistory(); var t = $(".js-change-brand.active").last(); if (t.length > 0) { var i = t.offset().top;
                window.scrollTo(0, i), $(".aside-letter").addClass("aside-letter-fixed") } $(window).scroll(function() { var t = $(".dead-line").offset().top,
                    i = $(window).scrollTop();
                i >= t ? $(".aside-letter").addClass("aside-letter-fixed") : $(".aside-letter").removeClass("aside-letter-fixed") }), $(".brand-carbox").on("touchmove", function(t) { t.stopPropagation() }), $(".brand-wrap").on("touchmove", function(t) { var i = t.touches[0].pageX,
                    e = $("body").width();
                i < .2 * e && ($(".brand-carbox").removeClass("active"), $("body").css({ overflow: "" })) }) }, showItem: function(t) { var i = this,
                e = $(t.currentTarget),
                n = e.attr("data-brandid"),
                o = e.attr("data-brandurl"),
                r = e.find(".icon-brand").attr("class"),
                c = $(".brand-carbox");
            e.hasClass("limit-no") ? (this.uri[1] = o, window.location.href = "/" + this.uri.join("/") + "/") : ($(".brand-wrap").find("active").removeClass("active"), e.addClass("active"), i.canSend && (i.canSend = !1, $.ajax({ url: window.location.pathname + "?act=getTagByMinor", type: "POST", data: { minorId: n }, dataType: "json", success: function(t) { var e = t.data.no_tag,
                        n = t.data.option,
                        o = ""; if (n || e) { c.find(".js-brand-icon i").attr("class", r), c.find(".js-brand-icon a").html(e.name), c.find(".limit-no a").attr("href", e.url).html(e.text); for (var s in n) o = o + '<li data-gzlog="tracking_type=click&eventid=1111000000000003&evmsg=filter&filter=tag&tag=' + n[s].tag_url + '">', o = o + '<a href="' + n[s].url + '">', o = o + '<img class="js-tag-img" src="' + n[s].img + '">', o += n[s].text, "-" != n[s].num && (n[s].num = "约" + n[s].num + "辆"), o = o + '<span class="num">' + n[s].num + "</span>", o += "</a></li>";
                        c.find(".brand-list2-car").html(o), c.addClass("active"), $(".js-tag-img").one("error", function() { $(this).attr("src", "//image.guazistatic.com/files/tag_img/default.jpg") }) } if (c.hasClass("active")) { if (window.scrollY < $(".heading2").height()) { var l = $("body").height() - window.scrollY - 44;
                            c.css({ position: "absolute", top: "" }) } else { var l = $("body").height();
                            c.css({ position: "fixed", top: "0" }) } $(".js-tag-iscroll").css({ height: l }); var p = $(".brand-list2-car"),
                            d = p.children("li").height(); if (p.height() - l < 0) var u = l - p.height(),
                            h = Math.ceil(u / d);
                        else var u = $(".js-tag-head").height(),
                            h = Math.ceil(u / d); var g = "",
                            f = 0; for (f = 0; f < h; f++) g += "<li></li>";
                        p.append(g);
                        new a({ $el: $(".js-tag-iscroll"), $scrollWrapper: $(".brand-list2-car") });
                        i.canSend = !0 } }, error: function() { i.canSend = !1 } }))) }, letterItem: function(t) { var i = $(t.currentTarget).html(),
                e = '[data-index="' + i + '"]',
                n = $(e).offset().top;
            window.scrollTo(0, n) }, showHistory: function() { var t = window.localStorageSubstitute,
                i = t.getItem("list_history"); if (!i) return void $(".js-history-title").hide(); if (i = JSON.parse(i), i && "" != i.brand) { var e = i.brand.split("_"),
                    n = ""; for (var o in e) { var a = '[data-brandid="' + e[o] + '"]'; if ($(a).length > 0) { var r = $(a).last().attr("data-brandurl"),
                            c = $(a).last().children("a").text(),
                            s = $(a).last().children(".icon-brand").attr("Class");
                        n += '<li class="js-change-brand" data-brandid="' + e[o] + '" data-brandurl="' + r + '" ', n += 'data-gzlog="tracking_type=click&eventid=1111000000000018&evmsg=filter&filter=brand&brand=' + r + '" >', n += '<a href="javascript:void(0);">', n += '<i class="' + s + '"></i>', n += c, n += "</a></li>" } } $(".js-brand-history").show().html(n) } } }), i.selectCity = Widget.define({ events: { "click .js-reset-option": "resetOption", "click .js-change-city": "chooseOne", "click .js-submit-option": "submitOption", "click .aside-letter li": "letterItem" }, init: function(t) { var i = l(""),
                e = '[data-citydomain="' + i[0] + '"]',
                n = $(e).attr("data-cityid");
            this.urlKey = t.urlkey, this.uri = h(this.urlKey, n, ""), $.ajax({ url: this.uri + "?act=getNum", type: "GET", dataType: "json", success: function(t) { $(".result-fixed p strong").html(t.num) } }), this.showHistory(), $(window).scroll(function() { var t = $(".dead-line").offset().top,
                    i = $(window).scrollTop();
                i >= t ? $(".aside-letter").addClass("aside-letter-fixed") : $(".aside-letter").removeClass("aside-letter-fixed") }), this.getNumTimeOut = "" }, getNum: function() { var t = this;
            clearTimeout(this.getNumTimeOut), this.getNumTimeOut = setTimeout(function() { var i = t.uri;
                $.ajax({ url: i + "?act=getNum", type: "GET", dataType: "json", success: function(t) { $(".result-fixed p strong").html(t.num) } }) }, 1e3) }, resetOption: function() { var t = window.location.pathname;
            $(".city-wrap").find(".active").removeClass("active"); var i = this.urlKey;
            t = g(i, "", t), t = m(0, "www", t), this.uri = t, this.getNum() }, chooseOne: function(t) { var i = $(t.currentTarget),
                e = this.urlKey,
                n = i.attr("data-cityid"),
                o = this.uri,
                a = '[data-cityid="' + n + '"]'; if (i.hasClass("active")) $(a).removeClass("active"), o = g(e, n, o);
            else if ("-1" == n) $(".city-wrap").find(".active").removeClass("active"), $(a).addClass("active"), o = g(e, "", o), o = h(e, n, o);
            else { var r = $('[data-cityid="-1"]');
                r.hasClass("active") && (r.removeClass("active"), o = g(e, "-1", o)), $(a).addClass("active"), o = h(e, n, o) } var c = f(e, o);
            c && "" != c || (c = "-1"); var s = '[data-cityid="' + c + '"]',
                l = $(s).attr("data-citydomain");
            o = l && "" != l ? m(0, l, o) : m(0, "www", o), this.uri = o, this.getNum() }, submitOption: function() { window.location.href = this.uri }, letterItem: function(t) { var i = $(t.currentTarget).html(),
                e = '[data-index="' + i + '"]',
                n = $(e).offset().top;
            window.scrollTo(0, n) }, showHistory: function() { var t = window.localStorageSubstitute,
                i = t.getItem("list_history"); if (i && (i = JSON.parse(i), i && "" != i.city)) { var e = i.city.split("_"),
                    n = ""; for (var o in e) { var a = '[data-cityid="' + e[o] + '"]'; if ($(a).length > 0) { var r = $(a).last().attr("data-citydomain"),
                            c = $(a).last().children("a").text(),
                            s = $(a).last().hasClass("active") ? "active" : "";
                        n += '<li class=" ' + s + ' js-change-city" data-cityId="' + e[o] + '" data-cityDomain="' + r + '" ', n += 'data-gzlog="tracking_type=click&eventid=1111000000000020&evmsg=filter&filter=city_filter&city_filter=' + e[o] + '" >', n += '<a href="javascript:void(0);">', n += c, n += "</a></li>" } } $(".js-city-history").show().html(n) } } }), i.showSearch = Widget.define({ init: function() { $(".tsearch").tap(function() { r(), $("#search_list").show().siblings().hide(), setTimeout(function() { $("#search_input").focus() }, 400) }), $(".js-close-search").click(function() { setTimeout(function() { $(".js-list-page").show().siblings().hide(), $("#top-app-layer").is(":hidden") || $("#top-app-layer").show() }, 200) }) } }), i.oneKeySub = Widget.define({ events: { "click .js-fast-cancel": "cancelOne", "click .js-fast-sub": "submitSub" }, init: function() { this.canSend = !0, this.cond = $(".js-fast-sub").attr("data-cond") }, cancelOne: function(t) { var i = $(t.currentTarget),
                e = i.attr("data-urlkey"),
                n = i.attr("data-urlVal"); "c" == e ? (this.cond = m(0, "www", this.cond), this.cond = g(e, n, this.cond)) : i.hasClass("minor") ? (this.cond = m(1, "buy", this.cond), $(".js-fast-cancel.tag").remove()) : i.hasClass("tag") ? this.cond = m(1, e, this.cond) : this.cond = g(e, n, this.cond), i.remove() }, submitSub: function() { var t = this,
                i = t.cond; "" != i && t.canSend && (t.canSend = !1, $.ajax({ url: "/misc/subscription/?act=submitSub", type: "post", data: { condition: i }, dataType: "json", success: function(i) { if (t.canSend = !0, "110" == i.code) { $("#user-mask").addClass("active"), $(".js-user-div").addClass("active"); var e = "";
                        e = setInterval(function() { $(".js-user-div").attr("data-user") && (clearInterval(e), $(".js-fast-sub").trigger("click")) }, 100) } else { var n = i.msg; if (n = "0" == i.code ? "订阅成功" : n, $(".js-sub-notice").html(n).addClass("active"), setTimeout(function() { $(".js-sub-notice").removeClass("active") }, 600), i.log_str && "" != i.log_str) { var o = { tracking_type: "submit", eventid: "1111000000000012" };
                            o = $.extend(o, JSON.parse(i.log_str)), window.tracker.send(o) } } }, error: function() { $(".js-sub-notice").html("网络异常请稍后").addClass("active"), setTimeout(function() { $(".js-sub-notice").removeClass("active") }, 1e3) } })) } }), i.disDownloadApp = Widget.define({ init: function() { $(".usericon").click(function() { $(".js-sub-app-show-new").addClass("active"), $("#maskEl").addClass("active"); var t = $("#tancengPic").attr("class");
                $("#tancengPic").removeClass(t).addClass("imguser"), $("#downLoadUrl").attr("data-gzlog", "tracking_type=click&eventid=1111432100000002") }) } }), i.bangWoZhaoChe = Widget.define({ init: function() { "?ifid=fromNewIndexToBangWoZhaoChe" == window.location.search && $(".option").trigger("click") } }), i.addJrPic = Widget.define({ init: function() { var t = $(".swich-all").hasClass("active") ? 0x3f272d8587022 : 0x3f272d8587023,
                i = $(".j-jrAdUrl").val(),
                e = $(".j-jrAdImgUrl").val(),
                n = '<li class="list-finance-adver" data-gzlog="tracking_type=click&eventid=' + t + '" ><a href="' + i + '"><img src="' + e + '" alt=""></a></li>',
                o = $(".js-car-list .list"),
                a = o.find(".list-item").length;
            a >= 6 ? o.find(".list-item").eq(5).after(n) : o.find(".list-item").last().after(n) } }), i.controlJrButton = Widget.define({ init: function() { this.needShow = !1; var t = this;
            this.startY = 0, $(".js-list-page").on("touchstart", function(i) { t.startY = i.touches[0].pageY }), $(".js-list-page").on("touchmove", function(i) { var e = i.touches[0].pageY;
                e > t.startY ? ($(".finace-swich").show(), t.needShow = !0) : ($(".finace-swich").hide(), t.needShow = !1) }), $(".js-list-page").on("touchend", function(i) { t.needShow && $(".finace-swich").show() }), $(document).on("scroll", function() { var i = $(window).scrollTop();
                i <= 0 || t.needShow ? $(".finace-swich").show() : $(".finace-swich").hide() }) } }), i.checkBaoMai = Widget.define({ init: function() { $(document).on("click", ".j-check-bao-mai", function() { var t = "r",
                    i = "18",
                    e = window.location.pathname,
                    n = e;
                $(this).hasClass("active") ? (n = g(t, i, e), $(".j-check-bao-mai").removeClass("active")) : (n = h(t, i, e), $(".j-check-bao-mai").addClass("active")), window.location.href = n }) } }) }]);