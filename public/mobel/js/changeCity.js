! function(t) {
    function e(i) { if (n[i]) return n[i].exports; var o = n[i] = { exports: {}, id: i, loaded: !1 }; return t[i].call(o.exports, o, o.exports, e), o.loaded = !0, o.exports } var n = {}; return e.m = t, e.c = n, e.p = "//sta.guazistatic.com/c2c_wap/", e(0) }({
    0: function(t, e, n) { n(462), n(210); var i = n(90);
        n(13), $(function() { n(5).init(), $(".list-item").on("touchstart", function() { $(this).addClass("touch") }), $(".list-item").on("touchend", function() { $(this).removeClass("touch") }), $(".letter-list li").on("click", function() { var t = $(this).attr("data-id"),
                    e = $(".aside-id-" + t).offset().top;
                e = e > 60 ? e - 60 : e, $(window).scrollTop(e) }) }), i.locatingCity.setEl(".locatingCity"), i.showStorageCityHistory.setEl(".j-city-history"), Widget.initWidgets([i.locatingCity, i.showStorageCityHistory]) },
    1: function(t, e) { t.exports = function() { var t = []; return t.toString = function() { for (var t = [], e = 0; e < this.length; e++) { var n = this[e];
                    n[2] ? t.push("@media " + n[2] + "{" + n[1] + "}") : t.push(n[1]) } return t.join("") }, t.i = function(e, n) { "string" == typeof e && (e = [
                    [null, e, ""]
                ]); for (var i = {}, o = 0; o < this.length; o++) { var r = this[o][0]; "number" == typeof r && (i[r] = !0) } for (o = 0; o < e.length; o++) { var a = e[o]; "number" == typeof a[0] && i[a[0]] || (n && !a[2] ? a[2] = n : n && (a[2] = "(" + a[2] + ") and (" + n + ")"), t.push(a)) } }, t } },
    2: function(t, e, n) {
        function i(t, e) { for (var n = 0; n < t.length; n++) { var i = t[n],
                    o = d[i.id]; if (o) { o.refs++; for (var r = 0; r < o.parts.length; r++) o.parts[r](i.parts[r]); for (; r < i.parts.length; r++) o.parts.push(l(i.parts[r], e)) } else { for (var a = [], r = 0; r < i.parts.length; r++) a.push(l(i.parts[r], e));
                    d[i.id] = { id: i.id, refs: 1, parts: a } } } }

        function o(t) { for (var e = [], n = {}, i = 0; i < t.length; i++) { var o = t[i],
                    r = o[0],
                    a = o[1],
                    s = o[2],
                    c = o[3],
                    l = { css: a, media: s, sourceMap: c };
                n[r] ? n[r].parts.push(l) : e.push(n[r] = { id: r, parts: [l] }) } return e }

        function r(t, e) { var n = g(),
                i = y[y.length - 1]; if ("top" === t.insertAt) i ? i.nextSibling ? n.insertBefore(e, i.nextSibling) : n.appendChild(e) : n.insertBefore(e, n.firstChild), y.push(e);
            else { if ("bottom" !== t.insertAt) throw new Error("Invalid value for parameter 'insertAt'. Must be 'top' or 'bottom'.");
                n.appendChild(e) } }

        function a(t) { t.parentNode.removeChild(t); var e = y.indexOf(t);
            e >= 0 && y.splice(e, 1) }

        function s(t) { var e = document.createElement("style"); return e.type = "text/css", r(t, e), e }

        function c(t) { var e = document.createElement("link"); return e.rel = "stylesheet", r(t, e), e }

        function l(t, e) { var n, i, o; if (e.singleton) { var r = w++;
                n = v || (v = s(e)), i = u.bind(null, n, r, !1), o = u.bind(null, n, r, !0) } else t.sourceMap && "function" == typeof URL && "function" == typeof URL.createObjectURL && "function" == typeof URL.revokeObjectURL && "function" == typeof Blob && "function" == typeof btoa ? (n = c(e), i = f.bind(null, n), o = function() { a(n), n.href && URL.revokeObjectURL(n.href) }) : (n = s(e), i = h.bind(null, n), o = function() { a(n) }); return i(t),
                function(e) { if (e) { if (e.css === t.css && e.media === t.media && e.sourceMap === t.sourceMap) return;
                        i(t = e) } else o() } }

        function u(t, e, n, i) { var o = n ? "" : i.css; if (t.styleSheet) t.styleSheet.cssText = b(e, o);
            else { var r = document.createTextNode(o),
                    a = t.childNodes;
                a[e] && t.removeChild(a[e]), a.length ? t.insertBefore(r, a[e]) : t.appendChild(r) } }

        function h(t, e) { var n = e.css,
                i = e.media;
            e.sourceMap; if (i && t.setAttribute("media", i), t.styleSheet) t.styleSheet.cssText = n;
            else { for (; t.firstChild;) t.removeChild(t.firstChild);
                t.appendChild(document.createTextNode(n)) } }

        function f(t, e) { var n = e.css,
                i = (e.media, e.sourceMap);
            i && (n += "\n/*# sourceMappingURL=data:application/json;base64," + btoa(unescape(encodeURIComponent(JSON.stringify(i)))) + " */"); var o = new Blob([n], { type: "text/css" }),
                r = t.href;
            t.href = URL.createObjectURL(o), r && URL.revokeObjectURL(r) } var d = {},
            p = function(t) { var e; return function() { return "undefined" == typeof e && (e = t.apply(this, arguments)), e } },
            m = p(function() { return /msie [6-9]\b/.test(window.navigator.userAgent.toLowerCase()) }),
            g = p(function() { return document.head || document.getElementsByTagName("head")[0] }),
            v = null,
            w = 0,
            y = [];
        t.exports = function(t, e) { e = e || {}, "undefined" == typeof e.singleton && (e.singleton = m()), "undefined" == typeof e.insertAt && (e.insertAt = "bottom"); var n = o(t); return i(n, e),
                function(t) { for (var r = [], a = 0; a < n.length; a++) { var s = n[a],
                            c = d[s.id];
                        c.refs--, r.push(c) } if (t) { var l = o(t);
                        i(l, e) } for (var a = 0; a < r.length; a++) { var c = r[a]; if (0 === c.refs) { for (var u = 0; u < c.parts.length; u++) c.parts[u]();
                            delete d[c.id] } } } }; var b = function() { var t = []; return function(e, n) { return t[e] = n, t.filter(Boolean).join("\n") } }() },
    3: function(t, e, n) {
        function i() { var t = u.generateUUIDV4(); return t && c.set("__utmganji_v20110909", t, { expires: 6307200, path: "/", domain: ".guazi.com" }), f.set("__utmganji_v20110909", t), t }

        function o() { return p.ifid }

        function r() { var t, e = p.ca_source,
                n = p.ca_name; return e && n && (t = { ca_source: e, ca_name: n }, c.set("cainfo", JSON.stringify(t), { path: "/", domain: ".guazi.com" })), t }

        function a(t) { return t.replace(/^\?/, "").split("&").map(function(t) { return t.split("=") }).reduce(function(t, e) { return e[0].trim() && (t[e[0]] = e[1]), t }, {}) }

        function s() { var t, e, n = window.navigator.userAgent || "",
                i = n.match(/Mozilla\/5.0 \((.*)\) AppleWebKit(.*?) .*like Gecko\)([\S]*) (.*) Safari.*/); if (!i || !i[1]) return "UNKNOW " + n; try { return e = /like Mac OS X/.test(i[1]) ? "iOS " + ((i[1].match(/([\d_]*)* like Mac OS X/) || [])[1] || "") : /Android/.test(i[1]) ? (i[1].match(/Android.*?;/) || [])[0] : "unknow", t = (i[1].match(/^(iPad[^;]*|iPhone[^;]*|iPod[^;]*)/) || i[1].match(".*;(.*)") || [])[1], t = t ? t.trim() : "", n = ["device:" + t, "os:" + e, "webkit:" + (i[2] || "").replace("/", ""), "browser:" + i[4], "lang:" + (window.navigator.language || window.navigator.browserLanguage)].join("|") } catch (o) { return "UNKNOW " + n } } var c = n(4),
            l = n(6),
            u = n(11),
            h = {},
            f = new l("tracker"); try { h = JSON.parse(c.get("GanjiUserInfo") || "{}") } catch (d) { h = {} } var p = a(window.location.search),
            m = "analytics.guazi.com",
            g = $("head").data("gjch") || "-",
            v = $("head").data("gc") || "-",
            w = c.get("__utmganji_v20110909") || f.get("__utmganji_v20110909") || i() || "-",
            y = c.get("GANJISESSID") || "-",
            b = c.get("ifid") || o() || "-",
            x = $("head").data("cainfo") || r() || c.get("cainfo") || {},
            k = h.user_id,
            C = s(),
            _ = document.referrer ? encodeURIComponent(document.referrer) : "-",
            T = encodeURIComponent(x.ca_name || "-"),
            S = encodeURIComponent(x.ca_source || "-"),
            j = encodeURIComponent(x.ca_kw || "-"),
            E = encodeURIComponent(x.ca_id || "-"),
            z = encodeURIComponent(x.ca_n || "-"),
            I = encodeURIComponent(x.ca_s || "-"),
            O = encodeURIComponent(x.ca_i || "-");
        e.listen = function() { $("body").on("tap", "[data-gjalog]", function(t) { var n, i = $(t.currentTarget).attr("data-gjalog") || "";
                (n = /^(\d*)$/.exec(i.split("@")[0])) && "1" === n[1].substr(-2)[0] ? e.send(i.replace(/\d{8}($|@)/, "00000010$1")) : i.indexOf("atype=click") !== -1 && e.send(i) }) }; var D = {};
        e.sendShow = function() { $("[data-gjalog]").each(function() { var t, n = $(this).data("gjalog"); if (!D[n])
                    if (D[n] = !0, (t = /^(\d*)$/.exec(n.split("@")[0])) && "1" === t[1].substr(-1)[0]) e.send(n.replace(/\d{8}($|@)/, "00000001$1"));
                    else if (n.indexOf("atype=") !== -1) { var i = n.split("atype=");
                    i[1] && i[1].indexOf("show") !== -1 && e.send(n) } }) }, e.send = function(t, e) {
            function n(t) { o || (o = !0, e && e(t || null)) } var i = new Image,
                o = !1,
                r = "//" + m + "/wape.gif?";
            t = t && /^\d*$/.test(t.split("@")[0]) ? "ge=" + t : "gjalog=" + t, r += ["gjch=" + g, "gc=" + v, "uuid=" + w, "gjuser=" + k, "sid=" + y, "ca_name=" + T, "ca_source=" + S, "ca_kw=" + j, "ca_id=" + E, "ca_n=" + z, "ca_s=" + I, "ca_i=" + O, "refer=" + _, "ua=" + C, t, "ifid=" + b, "rnd=" + Math.random()].join("&"), i.onload = function() { n() }, i.onerror = function() { n(new Error("network error")) }, setTimeout(function() { n(new Error("timeout")) }, 1e4), i.src = r } },
    4: function(t, e) {
        function n(t, e) { var n = {}; if (i(t) && t.length > 0)
                for (var o, r, s, l = e ? c : a, u = t.split(/;\s/g), h = 0, f = u.length; h < f; h++) { if (s = u[h].match(/([^=]+)=/i), s instanceof Array) try { o = c(s[1]), r = l(u[h].substring(s[1].length + 1)) } catch (d) {} else o = c(u[h]), r = "";
                    o && (n[o] = r) }
            return n }

        function i(t) { return "string" == typeof t }

        function o(t) { return i(t) && "" !== t }

        function r(t) { if (!o(t)) throw new TypeError("Cookie name must be a non-empty string") }

        function a(t) { return t } var s = e,
            c = decodeURIComponent,
            l = encodeURIComponent;
        s.get = function(t, e) { r(t), e = "function" == typeof e ? { converter: e } : e || {}; var i = n(document.cookie, !e.raw); return (e.converter || a)(i[t]) }, s.set = function(t, e, n) { r(t), n = n || {}; var i = n.expires,
                a = n.domain,
                s = n.path;
            n.raw || (e = l(String(e))); var c = t + "=" + e,
                u = i; return "number" == typeof u && (u = new Date(Date.now() + 1e3 * i)), u instanceof Date && (c += "; expires=" + u.toGMTString()), o(a) && (c += "; domain=" + a), o(s) && (c += "; path=" + s), n.secure && (c += "; secure"), document.cookie = c, c }, s.remove = function(t, e) { return e = e || {}, e.expires = new Date(0), this.set(t, "", e) } },
    5: function(t, e) { e.init = function() { var t = $("[baidu_alog]");
            t.each(function() { var t = $(this);
                $.each(t.attr("baidu_alog").split("#"), function(e, n) { var i = ["_trackEvent"].concat(n.split("&"));
                    t.unbind(i[2]).bind(i[2], function() { window._hmt.push(i) }) }) }) } },
    6: function(t, e) {
        function n(t) { this.namespace = t } var i = window.GJLocalStorage || window.localStorage;
        n.prototype.set = function(t, e) { var n = this.dump();
            n[t] = { value: e }, n = JSON.stringify(n); try { i.setItem(this.namespace, n) } catch (o) { return !1 } return i.getItem(this.namespace) === n }, n.prototype.get = function(t) { var e = this.dump(); if (e[t]) return e[t].value }, n.prototype.remove = function(t) { this.set(t, void 0) }, n.prototype.clear = function() { i.removeItem(this.namespace) }, n.prototype.dump = function() { var t = i.getItem(this.namespace) || "{}"; try { t = JSON.parse(t) } catch (e) { t = {} } return t }, t.exports = n },
    7: function(t, e, n) { var i = n(3);
        e.init = function() { i.listen(); var t = function(t) { var e, n = new RegExp("(^| )" + t + "=([^;]*)(;|$)"); return (e = document.cookie.match(n)) ? unescape(e[2]) : null },
                e = $("[guazi_alog]"),
                o = n(3),
                r = t("gzCityDomain");
            e.each(function() { var t = $(this);
                $.each(t.attr("guazi_alog").split("#"), function(e, n) { var i = n.split("&"),
                        a = i[1] ? i[1] : "click";
                    t.unbind(a).bind(a, function() { o.send("&city=" + r + "&geid=" + i[0], "") }) }) }) } },
    8: function(t, e) {
        function n() { var t = "widget" + ++s; return a[t] = { defer: $.Deferred() }, t }

        function i(t) { $(function() { $.each(t.elements.slice(t.elength), function(e, i) { var o = $(i); if (o[0]) { var r = o.data(),
                            s = {},
                            c = o.data("widget-id");
                        c || (c = n(), o.data("widget-id", c)), r.$el = o, o.find("[data-role]").each(function() { var t = $(this).data("role");
                            s[t] || (s[t] = []), s[t].push(this) }), $.each(s, function(t, e) { r["$" + t] = $(e) }); var l = new t(r);
                        o.data("widget", l), t.elength++, a[c].instance = l, a[c].defer.resolve(l) } }) }) }

        function o(t, e, n) { t = $(t), $.each(e, function(e, i) { var o = e.indexOf(" "),
                    r = o === -1 ? e : e.substr(0, o),
                    a = o === -1 ? "" : e.substr(o, e.length - 1);
                i && (i = "function" == typeof i ? $.proxy(i, n) : $.proxy(n[i], n), a ? t.on(r, a, i) : t.on(r, i)) }) } var r = e,
            a = {},
            s = 0;
        r.ready = function(t, e) { "string" == typeof t && (t = [t]); var i = [].reduce.call(t, function(t, e) { var i = $(e),
                    o = null; return 1 === i.size() ? (i.data("widget-id") || i.data("widget-id", n()), o = a[i.data("widget-id")].defer.promise()) : i.size() >= 1 ? (o = $.Deferred(), r.ready(i, function() { o.resolve([].slice.call(arguments)) })) : (o = $.Deferred(), o.reject(null)), t.push(o), t }, []);
            $.when.apply($, i).done(function() { e.apply(window, arguments) }) }, r.initWidgets = function(t) { $.each(t, function(t, e) { r.initWidget(e) }) }, r.initWidget = function(t) { i(t) }, r.define = function(t) {
            function e(e) { var n = $.extend({}, t); return $(e.$el).length && n.events && o(e.$el, n.events, n), n.init(e), n } return t = t || {}, t.events = t.events || {}, t.init = t.init || function(t) { this.config = t }, e.elength = 0, e.elements = [], e.setEl = function(t) { if (!t) throw new Error("type Error"); return $.isArray(t) ? e.elements = e.elements.concat(t) : e.elements.push(t), e.elements }, e.extend = function(e) { return e = $.extend({}, t, e), e.super_ = $.extend({}, t), e.events = $.extend({}, t.events, e.events), r.define(e) }, e.init = function(t) { this.setEl(t), i(this) }, e.define = $.extend({}, t), e } },
    9: function(t, e) { t.exports = Widget.define({ events: { touchstart: "stop", touchend: "loop", 'click [data-role="prev"]': "prev", 'click [data-role="next"]': "next" }, init: function(t) { t.interval = t.interval || 1e3, this.config = t, this.index = 0, this.total = $(t.$item).length, this.loop() }, prev: function() { this.slideTo(this.index - 1, "prev") }, next: function() { this.slideTo(this.index + 1, "next") }, stop: function() { clearInterval(this.timer) }, loop: function() { if ("noloop" !== this.config.loop) { var t = this;
                    clearInterval(this.timer), this.timer = setInterval(function() { t.loopFn() }, this.config.interval) } }, slideTo: function(t, e) { var n = this; if (!n.animating) { t = t >= this.total ? 0 : t, t = t < 0 ? this.total - 1 : t; var i = this.slideFn(t, e);
                    i ? (this.animating = !0, i.always(function() { n.index = t, n.animating = !1 })) : this.index = t } }, loopFn: function() { this.slideTo(this.index + 1, "next") } }) },
    10: function(t, e, n) { e.init = function() { e.responseTouchState(), Widget.initWidgets(), n(27).async("js/util/tracker.js", function(t) { t.listen(), window.cproStyleApi || t.send("/uniontgm/baidu/no_ad") }) }, e.header = Widget.define({ init: function(t) { var e = $(t.$el);
                    this.originTop = e.offset().top, this.check = this.check.bind(this), this.listen() }, fixed: function() { this.isFixed || $("body").addClass("header-fixed"), this.isFixed = !0 }, unfixed: function() { this.isFixed && $("body").removeClass("header-fixed"), this.isFixed = !1 }, listen: function(t) { t || this.check(), $(window).on("scroll", this.check) }, stopListening: function() { $(window).off("scroll", this.check) }, check: function() { $(window).scrollTop() > this.originTop ? this.fixed() : this.unfixed() } }), e.backToTop = Widget.define({ init: function(t) { $(window).on("scroll", function() { $(window).scrollTop() > window.innerHeight ? (t.$el.show(), t.$el.addClass("active")) : (t.$el.hide(), t.$el.removeClass("active")) }), t.$el.on("click", function() { var t = $(window).scrollTop(),
                            e = parseInt(t / 20, 10);
                        setTimeout(function() { var n = 1,
                                i = setInterval(function() { var i = t - n * e;
                                    i <= 0 ? $(window).scrollTop(0) : $(window).scrollTop(i), n++ }, 5);
                            setTimeout(function() { clearInterval(i), $(window).scrollTop(0) }, 150) }, 300) }) } }), e.responseTouchState = function() { $("body").on("touchstart", "a, .js-touch-state", function() { $(this).addClass("touch") }).on("touchmove", "a, .js-touch-state", function() { $(this).removeClass("touch") }).on("touchend", "a, .js-touch-state", function() { $(this).removeClass("touch") }).on("touchcancel", "a, .js-touch-state", function() { $(this).removeClass("touch") }) }, e.showAppPub = function(t, e) { var n = new Date,
                    i = "" + n.getFullYear() + n.getMonth() + n.getDate(),
                    o = 1,
                    r = new RegExp("[0-9]+$"),
                    a = localStorageSubstitute.getItem(t);
                a && a.indexOf(i) > -1 ? (o = parseInt(r.exec(a)) + 1, localStorageSubstitute.setItem(t, i + "#" + o), e > 0 && o == e && 1 == $("#maskEl").length && $("#maskEl").is(":hidden") && 1 == $("#app-pub").length && setTimeout(function() { $("#maskEl").css("z-index", 100).addClass("active"), $("#app-pub").addClass("active") }, 1e3)) : localStorageSubstitute.setItem(t, i + "#" + o), $("#maskEl").click(function() { return $("#maskEl").css("z-index", 99).removeClass("active"), $("#app-pub").removeClass("active"), !1 }), $("#app-pub .close-btn").click(function() { $("#maskEl").css("z-index", 99).removeClass("active"), $("#app-pub").removeClass("active") }), $("#app-pub .btn-app").click(function() { $("#maskEl").css("z-index", 99).removeClass("active"), $("#app-pub").removeClass("active"), appurl = $(this).attr("data-url"), window.location.href = appurl }) }, e.cancelAppPub = Widget.define({ init: function() { $("#maskEl").click(function() { return $("#maskEl").removeClass("active"), $(".js-sub-app-show").removeClass("active"), $(".js-sub-app-show-new").removeClass("active"), $("body").css("overflow", ""), !1 }), $(".js-sub-app-pub .close-btn").click(function() { $("#maskEl").removeClass("active"), $(".js-sub-app-show").removeClass("active"), $(".js-sub-app-show-new").removeClass("active"), $("body").css("overflow", "") }), $(".js-sub-app-pub .btn-app").click(function() { $("#maskEl").removeClass("active"), $(".js-sub-app-show").removeClass("active"), $(".js-sub-app-show-new").removeClass("active"), $("body").css("overflow", ""), appurl = $(this).attr("data-url"), window.location.href = appurl }) } }), e.showTopAppLayer = function(t) { if ($("#top-app-layer").length < 1) return !1; var e = new Date,
                    n = "" + e.getFullYear() + e.getMonth() + e.getDate(),
                    i = localStorageSubstitute.getItem(t);
                i && i.indexOf(n) != -1 ? ($("#top-app-layer").remove(), $("#top-app-layer").removeClass("active"), $("body").removeClass("bottombox-active")) : ($("#top-app-layer").show(), $("#top-app-layer").addClass("active"), $("body").addClass("bottombox-active")), $("#top-app-layer .close-btn").click(function() { $("#top-app-layer").remove(), $("#top-app-layer").removeClass("active"), $("body").removeClass("bottombox-active"), localStorageSubstitute.setItem(t, n + "#1") }), $("#top-app-layer div").click(function() { window.tracker.send({ tracking_type: "click", eventid: 0x3f45e605ddfc1 }), window.location.href = "guazi://", setTimeout(function() { window.location.href = "http://m.guazi.com/misc/guaziapp/?from=guazi" }, 2e3) }), $("#top-app-layer .dowmload").click(function() { window.location.href = "guazi://", setTimeout(function() { window.location.href = "http://m.guazi.com/misc/guaziapp/?from=guazi" }, 2e3) }) },
            function() { var t, n = $('<div class="tip"></div>').hide().appendTo("body");
                e.tip = function(e, i) { return e && n.html(e).show(), i && (clearTimeout(t), t = setTimeout(function() { n.hide() }, i)), $("body").append(n), { setMessage: function(e, i) { n.html(e), i && (clearTimeout(t), t = setTimeout(function() { n.remove() }, i)) }, remove: function() { n.remove() } } } }() },
    11: function(t, e) { e.generateUUIDV4 = function() { var t = (new Date).getTime(),
                e = "xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx".replace(/[xy]/g, function(e) { var n = (t + 16 * Math.random()) % 16 | 0; return t = Math.floor(t / 16), ("x" == e ? n : 7 & n | 8).toString(16) }); return e } },
    12: function(t, e) { t.exports = Widget.define({ events: { touchstart: function(t) { var e = $(t.target); if (e.hasClass("icon-range") ? this.$target = e : this.$target = e.parents(".icon-range"), this.config.$el.find(".icon-low").length >= 1) { var n = this.config.$el.find(".icon-low").css("left").replace("%", "");
                        this.active.low = n } if (this.config.$el.find(".icon-high").length >= 1) { var i = this.config.$el.find(".icon-high").css("left").replace("%", "");
                        this.active.high = i } if (this.config.$el.find(".icon-middle").length >= 1) { var o = this.config.$el.find(".icon-middle").css("left").replace("%", "");
                        this.active.mid = o } }, touchmove: function(t) { var e = this.config.$el.width(),
                        n = parseInt((t.changedTouches[0].clientX - 15) / e * 100); if (!(n < 0 || n > 100)) { this.config.$el.find(".load-outer").width();
                        this.$target && this.$target.hasClass("icon-low") ? (this.active.low >= this.active.high && n >= this.active.high ? this.active.low = this.active.high : this.active.low = n <= 0 ? 0 : n, parseFloat(this.active.high) - parseFloat(this.active.low) < 5 && (this.active.low = parseFloat(this.active.high) - 5 <= 0 ? 0 : parseFloat(this.active.high) - 5), this.$target.css("left", this.active.low + "%"), this.config.$el.find(".load-inner").css({ left: this.active.low + "%", width: this.active.high - this.active.low + "%" })) : this.$target && this.$target.hasClass("icon-high") ? (this.active.high <= this.active.low && n <= this.active.low ? this.active.high = this.active.low : this.active.high = n >= 100 ? 100 : n, parseFloat(this.active.high) - parseFloat(this.active.low) < 5 && (this.active.high = parseFloat(this.active.low) + 5 >= 100 ? 100 : parseFloat(this.active.low) + 5), this.$target.css("left", this.active.high + "%"), this.config.$el.find(".load-inner").css({ width: this.active.high - this.active.low + "%" })) : this.$target && this.$target.hasClass("icon-middle") && (this.active.mid = n >= 100 ? 100 : n, this.$target.css("left", this.active.mid + "%")), this.config.$el.trigger("moving", this.active) } }, touchend: function() {
                    (this.config.$el.find(".icon-low").length >= 1 || this.config.$el.find(".icon-high").length >= 1) && this.config.$el.find(".load-inner").css({ left: this.active.low + "%", width: this.active.high - this.active.low + "%" }), this.$target = null, this.config.$el.trigger("moveend", this.active) } }, active: { low: 0, high: 100, mid: 50 }, init: function(t) { this.config = t } }) },
    13: function(t, e, n) { var i = n(4);
        $(function() { try { window.localStorage.setItem("isPrivateMode", "1"), window.localStorage.removeItem("isPrivateMode"), window.isPrivateMode = !1 } catch (t) { window.isPrivateMode = !0 } window.isPrivateMode ? (window.localStorageSubstitute = new Object, localStorageSubstitute.setItem = function(t, e) { i.set(t, e, { expires: 8640, path: "/", domain: ".guazi.com" }) }, localStorageSubstitute.getItem = function(t) { return i.get(t) }, localStorageSubstitute.removeItem = function(t) { return i.remove(t) }) : window.localStorageSubstitute = window.localStorage }) },
    14: function(t, e, n) { var i = function(t) { var e = function(e, n) { this.el = t(e), this.zoomFactor = 1, this.lastScale = 1, this.offset = { x: 0, y: 0 }, this.options = t.extend({}, this.defaults, n), this.setupMarkup(), this.bindEvents(), this.update(), this.enable() },
                    n = function(t, e) { return t + e },
                    i = function(t, e) { return t > e - .01 && t < e + .09 };
                e.prototype = { defaults: { tapZoomFactor: 2, zoomOutFactor: 1.3, animationDuration: 300, animationInterval: 5, maxZoom: 5, minZoom: .5, lockDragAxis: !1, use2d: !0, zoomStartEventName: "pz_zoomstart", zoomEndEventName: "pz_zoomend", dragStartEventName: "pz_dragstart", dragEndEventName: "pz_dragend", doubleTapEventName: "pz_doubletap" }, handleDragStart: function(t) { this.el.trigger(this.options.dragStartEventName), this.stopAnimation(), this.lastDragPosition = !1, this.hasInteraction = !0, this.handleDrag(t) }, handleDrag: function(t) { if (this.zoomFactor > 1) { var e = this.getTouches(t)[0];
                            this.drag(e, this.lastDragPosition), this.offset = this.sanitizeOffset(this.offset), this.lastDragPosition = e } }, handleDragEnd: function() { this.el.trigger(this.options.dragEndEventName), this.end() }, handleZoomStart: function() { this.el.trigger(this.options.zoomStartEventName), this.stopAnimation(), this.lastScale = 1, this.nthZoom = 0, this.lastZoomCenter = !1, this.hasInteraction = !0 }, handleZoom: function(t, e) { var n = this.getTouchCenter(this.getTouches(t)),
                            i = e / this.lastScale;
                        this.lastScale = e, this.nthZoom += 1, this.nthZoom > 3 && (this.scale(i, n), this.drag(n, this.lastZoomCenter)), this.lastZoomCenter = n }, handleZoomEnd: function() { this.el.trigger(this.options.zoomEndEventName), this.end() }, handleDoubleTap: function(t) { var e = this.getTouches(t)[0],
                            n = this.zoomFactor > 1 ? 1 : this.options.tapZoomFactor,
                            i = this.zoomFactor,
                            o = function(t) { this.scaleTo(i + t * (n - i), e) }.bind(this);
                        this.hasInteraction || (i > n && (e = this.getCurrentZoomCenter()), this.animate(this.options.animationDuration, this.options.animationInterval, o, this.swing), this.el.trigger(this.options.doubleTapEventName)) }, sanitizeOffset: function(t) { var e = (this.zoomFactor - 1) * this.getContainerX(),
                            n = (this.zoomFactor - 1) * this.getContainerY(),
                            i = Math.max(e, 0),
                            o = Math.max(n, 0),
                            r = Math.min(e, 0),
                            a = Math.min(n, 0); return { x: Math.min(Math.max(t.x, r), i), y: Math.min(Math.max(t.y, a), o) } }, scaleTo: function(t, e) { this.scale(t / this.zoomFactor, e) }, scale: function(t, e) { t = this.scaleZoomFactor(t), this.addOffset({ x: (t - 1) * (e.x + this.offset.x), y: (t - 1) * (e.y + this.offset.y) }) }, scaleZoomFactor: function(t) { var e = this.zoomFactor; return this.zoomFactor *= t, this.zoomFactor = Math.min(this.options.maxZoom, Math.max(this.zoomFactor, this.options.minZoom)), this.zoomFactor / e }, drag: function(t, e) { e && (this.options.lockDragAxis ? Math.abs(t.x - e.x) > Math.abs(t.y - e.y) ? this.addOffset({ x: -(t.x - e.x), y: 0 }) : this.addOffset({ y: -(t.y - e.y), x: 0 }) : this.addOffset({ y: -(t.y - e.y), x: -(t.x - e.x) })) }, getTouchCenter: function(t) { return this.getVectorAvg(t) }, getVectorAvg: function(t) { return { x: t.map(function(t) { return t.x }).reduce(n) / t.length, y: t.map(function(t) { return t.y }).reduce(n) / t.length } }, addOffset: function(t) { this.offset = { x: this.offset.x + t.x, y: this.offset.y + t.y } }, sanitize: function() { this.zoomFactor < this.options.zoomOutFactor ? this.zoomOutAnimation() : this.isInsaneOffset(this.offset) && this.sanitizeOffsetAnimation() }, isInsaneOffset: function(t) { var e = this.sanitizeOffset(t); return e.x !== t.x || e.y !== t.y }, sanitizeOffsetAnimation: function() { var t = this.sanitizeOffset(this.offset),
                            e = { x: this.offset.x, y: this.offset.y },
                            n = function(n) { this.offset.x = e.x + n * (t.x - e.x), this.offset.y = e.y + n * (t.y - e.y), this.update() }.bind(this);
                        this.animate(this.options.animationDuration, this.options.animationInterval, n, this.swing) }, zoomOutAnimation: function() { var t = this.zoomFactor,
                            e = 1,
                            n = this.getCurrentZoomCenter(),
                            i = function(i) { this.scaleTo(t + i * (e - t), n) }.bind(this);
                        this.animate(this.options.animationDuration, this.options.animationInterval, i, this.swing) }, updateAspectRatio: function() { this.setContainerY(this.getContainerX() / this.getAspectRatio()) }, getInitialZoomFactor: function() { return this.container[0].offsetWidth / this.el[0].offsetWidth }, getAspectRatio: function() { return this.el[0].offsetWidth / this.el[0].offsetHeight }, getCurrentZoomCenter: function() { var t = this.container[0].offsetWidth * this.zoomFactor,
                            e = this.offset.x,
                            n = t - e - this.container[0].offsetWidth,
                            i = e / n,
                            o = i * this.container[0].offsetWidth / (i + 1),
                            r = this.container[0].offsetHeight * this.zoomFactor,
                            a = this.offset.y,
                            s = r - a - this.container[0].offsetHeight,
                            c = a / s,
                            l = c * this.container[0].offsetHeight / (c + 1); return 0 === n && (o = this.container[0].offsetWidth), 0 === s && (l = this.container[0].offsetHeight), { x: o, y: l } }, canDrag: function() { return !i(this.zoomFactor, 1) }, getTouches: function(t) { var e = this.container.offset(); return Array.prototype.slice.call(t.touches).map(function(t) { return { x: t.pageX - e.left, y: t.pageY - e.top } }) }, animate: function(t, e, n, i, o) { var r = (new Date).getTime(),
                            a = function() { if (this.inAnimation) { var s = (new Date).getTime() - r,
                                        c = s / t;
                                    s >= t ? (n(1), o && o(), this.update(), this.stopAnimation(), this.update()) : (i && (c = i(c)), n(c), this.update(), setTimeout(a, e)) } }.bind(this);
                        this.inAnimation = !0, a() }, stopAnimation: function() { this.inAnimation = !1 }, swing: function(t) { return -Math.cos(t * Math.PI) / 2 + .5 }, getContainerX: function() { return this.container[0].offsetWidth }, getContainerY: function() { return this.container[0].offsetHeight }, setContainerY: function(t) { return this.container.height(t) }, setupMarkup: function() { this.options.container ? (this.container = t('<div class="pinch-zoom-container"></div>'), this.el.before(this.container), this.container.append(this.el), this.container.css({ position: "relative" })) : this.container = this.el.parent(), this.el.css({ "-webkit-transform-origin": "0% 0%", "-moz-transform-origin": "0% 0%", "-ms-transform-origin": "0% 0%", "-o-transform-origin": "0% 0%", "transform-origin": "0% 0%" }) }, end: function() { this.hasInteraction = !1, this.sanitize(), this.update() }, bindEvents: function() { o(this.container.get(0), this), t(window).on("resize", this.update.bind(this)), t(this.el).find("img").on("load", this.update.bind(this)) }, update: function() { this.updatePlaned || (this.updatePlaned = !0, setTimeout(function() { this.updatePlaned = !1, this.updateAspectRatio(); var t = this.getInitialZoomFactor() * this.zoomFactor,
                                e = -this.offset.x / t,
                                n = -this.offset.y / t,
                                i = "scale3d(" + t + ", " + t + ",1) translate3d(" + e + "px," + n + "px,0px)",
                                o = "scale(" + t + ", " + t + ") translate(" + e + "px," + n + "px)",
                                r = function() { this.clone && (this.clone.remove(), delete this.clone) }.bind(this);
                            this.is3d = !0, r(), this.el.css({ "-webkit-transform": i, "-o-transform": o, "-ms-transform": o, "-moz-transform": o, transform: i }) }.bind(this), 0)) }, enable: function() { this.enabled = !0 }, disable: function() { this.enabled = !1 } }; var o = function(t, e) { var n = null,
                        i = 0,
                        o = null,
                        r = null,
                        a = function(t, i) { if (n !== t) { if (n && !t) switch (n) {
                                    case "zoom":
                                        e.handleZoomEnd(i); break;
                                    case "drag":
                                        e.handleDragEnd(i) }
                                switch (t) {
                                    case "zoom":
                                        e.handleZoomStart(i); break;
                                    case "drag":
                                        e.handleDragStart(i) } } n = t },
                        s = function(t) { 2 === i ? a("zoom") : 1 === i && e.canDrag() ? a("drag", t) : a(null, t) },
                        c = function(t) { return Array.prototype.slice.call(t).map(function(t) { return { x: t.pageX, y: t.pageY } }) },
                        l = function(t, e) { var n, i; return n = t.x - e.x, i = t.y - e.y, Math.sqrt(n * n + i * i) },
                        u = function(t, e) { var n = l(t[0], t[1]),
                                i = l(e[0], e[1]); return i / n },
                        h = function(t) { t.stopPropagation(), t.preventDefault() },
                        f = function(t) { var o = (new Date).getTime(); if (i > 1 && (r = null), o - r < 300) switch (r = null, h(t), e.handleDoubleTap(t), n) {
                                case "zoom":
                                    e.handleZoomEnd(t); break;
                                case "drag":
                                    e.handleDragEnd(t) } else 1 === i && (r = o) },
                        d = !0;
                    t.addEventListener("touchstart", function(t) { e.enabled && (d = !0, i = t.touches.length, f(t)) }), t.addEventListener("touchmove", function(t) { if (e.enabled) { if (d) s(t), n && h(t), o = c(t.touches);
                            else { switch (n) {
                                    case "zoom":
                                        e.handleZoom(t, u(o, c(t.touches))); break;
                                    case "drag":
                                        e.handleDrag(t) } n && (h(t), e.update()) } d = !1 } }), t.addEventListener("touchend", function(t) { e.enabled && (i = t.touches.length, s(t)) }) }; return e },
            o = i($);
        t.exports = o },
    15: function(t, e) { t.exports = Widget.define({ events: { touchstart: function(t) { this.startTime = t.timeStamp, this.startY = t.changedTouches[0].screenY - this.curY, this.startScreenY = t.changedTouches[0].screenY }, touchmove: function(t) { var e = t.timeStamp;
                    t.preventDefault(), this.curY = t.changedTouches[0].screenY - this.startY, this.animating = !1, this.curY > 0 ? this.curY = .4 * this.curY : this.curY < this.maxScrollY && (this.curY = this.maxScrollY + .4 * (this.curY - this.maxScrollY)), this.config.$el.css({ "-webkit-transform": "translate3d(0," + this.curY + "px, 0)", "-webkit-transition-duration": "0s", "transition-duration": "0s" }), e - this.startTime > 280 && (this.startTime = e, this.startScreenY = t.changedTouches[0].screenY) }, touchend: function(t) { var e = t.timeStamp - this.startTime,
                        n = t.changedTouches[0].screenY - this.startScreenY; if (this.animating && t.preventDefault(), this.curY > 0 || this.curY < this.maxScrollY) return void this.tailScroll(); if (e < 280) { var i = this.momentum(n, this.curY, e, this.maxScrollY, this.warpperHeight); if (this.curY = i.destination, !i.destination || !i.duration) return;
                        this.config.$el.css({ "-webkit-transform": "translate3d(0, " + i.destination + "px, 0)", "transition-timing-function": "cubic-bezier(0.1, 0.3, 0.5, 1)", "-webkit-transition-duration": i.duration + "ms" }), this.animating = !0 } return this.curY > 0 || this.curY < this.maxScrollY ? void this.tailScroll() : void 0 }, transitionend: function() { return !!this.animating && (this.animating = !1, void this.tailScroll()) } }, momentum: function(t, e, n, i, o) { var r, a, s = Math.abs(t) / n,
                    c = 8e-4; return r = e + s * s / (2 * c) * (t < 0 ? -1 : 1), a = s / c, r < i ? (r = o ? i - o / 2.5 * (s / 8) : i, t = Math.abs(r - e), a = t / s) : r > 0 && (r = o ? o / 2.5 * (s / 8) : 0, t = Math.abs(e) + r, a = t / s), { destination: Math.round(r), duration: a } }, init: function(t) { this.config = t, this.startY = 0, this.curY = 0, this.startTime = 0, this.startScreenY = 0, this.animating = !1, this.refresh() }, refresh: function() { this.warpperHeight = this.config.$el.height(), this.maxScrollY = this.config.$el.height() - this.config.$scrollWrapper.height(), this.maxScrollY > 0 && (this.maxScrollY = 0), this.scrollTo(0) }, tailScroll: function() { this.curY > 0 ? this.curY = 0 : this.curY < 0 && this.curY < this.maxScrollY && (this.curY = this.maxScrollY), this.animating = !1, this.config.$el.css({ "-webkit-transform": "translate3d(0, " + this.curY + "px, 0)", "transition-timing-function": "cubic-bezier(0.25, 0.46, 0.45, 0.94)", "-webkit-transition-duration": "400ms" }) }, scrollTo: function(t) { this.curY = -1 * t, this.curY > 0 ? this.curY = 0 : this.curY < 0 && this.curY < this.maxScrollY && (this.curY = this.maxScrollY), this.config.$el.css({ "-webkit-transform": "translate3d(0," + this.curY + "px, 0)", "-webkit-transition-duration": "0" }) } }) },
    16: function(t, e) {
        function n(t, e) {
            "use strict";

            function n() { m = y.children, w = m.length, m.length < 2 && (e.continuous = !1), p.transitions && e.continuous && m.length < 3 && (y.appendChild(m[0].cloneNode(!0)), y.appendChild(y.children[1].cloneNode(!0)), m = y.children), g = new Array(m.length), v = t.getBoundingClientRect().width || t.offsetWidth, y.style.width = m.length * v + "px"; for (var n = m.length; n--;) { var i = m[n];
                    i.style.width = v + "px", i.setAttribute("data-index", n), p.transitions && (i.style.left = n * -v + "px", s(n, b > n ? -v : b < n ? v : 0, 0)) } e.continuous && p.transitions && (s(r(b - 1), -v, 0), s(r(b + 1), v, 0)), p.transitions || (y.style.left = b * -v + "px"), t.style.visibility = "visible" }

            function i() { e.continuous ? a(b - 1) : b && a(b - 1) }

            function o() { e.continuous ? a(b + 1) : b < m.length - 1 && a(b + 1) }

            function r(t) { return (m.length + t % m.length) % m.length }

            function a(t, n) { if (b !== t) { if (p.transitions) { var i = Math.abs(b - t) / (b - t); if (e.continuous) { var o = i;
                            i = -g[r(t)] / v, i !== o && (t = -i * m.length + t) } for (var a = Math.abs(b - t) - 1; a--;) s(r((t > b ? t : b) - a - 1), v * i, 0);
                        t = r(t), s(b, v * i, n || x), s(t, 0, n || x), e.continuous && s(r(t - i), -(v * i), 0) } else t = r(t), l(b * -v, t * -v, n || x);
                    b = t, d(e.callback && e.callback(b, m[b])) } }

            function s(t, e, n) { c(t, e, n), g[t] = e }

            function c(t, e, n) { var i = m[t],
                    o = i && i.style;
                o && (o.webkitTransitionDuration = o.MozTransitionDuration = o.msTransitionDuration = o.OTransitionDuration = o.transitionDuration = n + "ms", o.webkitTransform = "translate(" + e + "px,0)translateZ(0)", o.msTransform = o.MozTransform = o.OTransform = "translateX(" + e + "px)") }

            function l(t, n, i) { if (!i) return void(y.style.left = n + "px"); var o = +new Date,
                    r = setInterval(function() { var a = +new Date - o; return a > i ? (y.style.left = n + "px", C && u(), e.transitionEnd && e.transitionEnd.call(event, b, m[b]), void clearInterval(r)) : void(y.style.left = (n - t) * (Math.floor(a / i * 100) / 100) + t + "px") }, 4) }

            function u() { $ = setTimeout(o, C) }

            function h() { C = 0, clearTimeout($) }
            var f = function() {},
                d = function(t) { setTimeout(t || f, 0) },
                p = {
                    addEventListener: !!window.addEventListener,
                    touch: "ontouchstart" in window || window.DocumentTouch && document instanceof window.DocumentTouch,
                    transitions: function(t) {
                        var e = ["transitionProperty", "WebkitTransition", "MozTransition", "OTransition", "msTransition"];
                        for (var n in e)
                            if (void 0 !== t.style[e[n]]) return !0;
                        return !1
                    }(document.createElement("swipe"))
                };
            if (t) { var m, g, v, w, y = t.children[0];
                e = e || {}; var b = parseInt(e.startSlide, 10) || 0,
                    x = e.speed || 300;
                e.continuous = void 0 === e.continuous || e.continuous; var $, k, C = e.auto || 0,
                    _ = {},
                    T = {},
                    S = { handleEvent: function(t) { switch (t.type) {
                                case "touchstart":
                                    this.start(t); break;
                                case "touchmove":
                                    this.move(t); break;
                                case "touchend":
                                    d(this.end(t)); break;
                                case "webkitTransitionEnd":
                                case "msTransitionEnd":
                                case "oTransitionEnd":
                                case "otransitionend":
                                case "transitionend":
                                    d(this.transitionEnd(t)); break;
                                case "resize":
                                    d(n) } e.stopPropagation && t.stopPropagation() }, start: function(t) { var e = t.touches[0];
                            _ = { x: e.pageX, y: e.pageY, time: +new Date }, k = void 0, T = {}, y.addEventListener("touchmove", this, !1), y.addEventListener("touchend", this, !1) }, move: function(t) { if (!(t.touches.length > 1 || t.scale && 1 !== t.scale)) { e.disableScroll && t.preventDefault(); var n = t.touches[0];
                                T = { x: n.pageX - _.x, y: n.pageY - _.y }, "undefined" == typeof k && (k = !!(k || Math.abs(T.x) < Math.abs(T.y))), k || (t.preventDefault(), h(), e.continuous ? (c(r(b - 1), T.x + g[r(b - 1)], 0), c(b, T.x + g[b], 0), c(r(b + 1), T.x + g[r(b + 1)], 0)) : (T.x = T.x / (!b && T.x > 0 || b === m.length - 1 && T.x < 0 ? Math.abs(T.x) / v + 1 : 1), c(b - 1, T.x + g[b - 1], 0), c(b, T.x + g[b], 0), c(b + 1, T.x + g[b + 1], 0))) } }, end: function() { var t = +new Date - _.time,
                                n = Number(t) < 250 && Math.abs(T.x) > 20 || Math.abs(T.x) > v / 2,
                                i = !b && T.x > 0 || b === m.length - 1 && T.x < 0;
                            e.continuous && (i = !1); var o = T.x < 0;
                            k || (n && !i ? (o ? (e.continuous ? (s(r(b - 1), -v, 0), s(r(b + 2), v, 0)) : s(b - 1, -v, 0), s(b, g[b] - v, x), s(r(b + 1), g[r(b + 1)] - v, x), b = r(b + 1)) : (e.continuous ? (s(r(b + 1), v, 0), s(r(b - 2), -v, 0)) : s(b + 1, v, 0), s(b, g[b] + v, x), s(r(b - 1), g[r(b - 1)] + v, x), b = r(b - 1)), e.callback && e.callback(b, m[b])) : e.continuous ? (s(r(b - 1), -v, x), s(b, 0, x), s(r(b + 1), v, x)) : (s(b - 1, -v, x), s(b, 0, x), s(b + 1, v, x))), y.removeEventListener("touchmove", S, !1), y.removeEventListener("touchend", S, !1) }, transitionEnd: function(t) { parseInt(t.target.getAttribute("data-index"), 10) === b && (C && u(), e.transitionEnd && e.transitionEnd.call(t, b, m[b])) } }; return n(), C && u(), p.addEventListener ? (p.touch && y.addEventListener("touchstart", S, !1), p.transitions && (y.addEventListener("webkitTransitionEnd", S, !1), y.addEventListener("msTransitionEnd", S, !1), y.addEventListener("oTransitionEnd", S, !1), y.addEventListener("otransitionend", S, !1), y.addEventListener("transitionend", S, !1)), window.addEventListener("resize", S, !1)) : window.onresize = function() { n() }, { setup: function() { n() }, slide: function(t, e) { h(), a(t, e) }, prev: function() { h(), i() }, next: function() { h(), o() }, stop: function() { h() }, getPos: function() { return b }, getNumSlides: function() { return w }, kill: function() { h(), y.style.width = "", y.style.left = ""; for (var t = m.length; t--;) { var e = m[t];
                            e.style.width = "", e.style.left = "", p.transitions && c(t, 0, 0) } p.addEventListener ? (y.removeEventListener("touchstart", S, !1), y.removeEventListener("webkitTransitionEnd", S, !1), y.removeEventListener("msTransitionEnd", S, !1), y.removeEventListener("oTransitionEnd", S, !1), y.removeEventListener("otransitionend", S, !1), y.removeEventListener("transitionend", S, !1), window.removeEventListener("resize", S, !1)) : window.onresize = null } } }
        }
        t.exports = n
    },
    /*17: function(t, e, n) { var i = n(33).Events;
        e.getLocation = function(t, e) { var o = $.Deferred(),
                r = $("#domain").val(),
                a = encodeURIComponent($("#referer").val()),
                s = "/ajax.php?dir=vehicle&module=latlng&format=eval&domain=" + r + "&referer=" + a,
                c = "/ajax.php?dir=vehicle&module=latlng&ac=getCityInfoByIp&domain=" + r + "&referer=" + a + "&rnd=" + Math.random(),
                l = new i; "function" == typeof t && (e = t, t = {}); var u = function(t) { l.emit("getCityInfo"), $.ajax({ url: s, data: { latlng: t.coords.latitude + "," + t.coords.longitude }, dataType: "json" }).done(function(t) { return t && t.data && t.data.cityName && t.data.cityDomain ? void e(null, { cityName: t.data.cityName, cityDomain: t.data.cityDomain, url: t.data.url, currentLocation: t.data.currentLocation, latlng: t.data.latlng }) : e("geoToCity server error") }).fail(function(t) { e(t) }) },
                h = function() { t.thirdGeo ? n(27).async(t.thirdGeo, function(e) { var n = e[t.geofn](t);
                        o = n.geo(o) }) : navigator.geolocation ? navigator.geolocation.getCurrentPosition(function(t) { o.resolve(t) }, function(t) { o.reject(t) }, { timeout: t.timeout || 1e4, maximumAge: 6e4, enableHighAccuracy: !0 }) : o.reject(new Error("api not supported")) },
                f = function(n) { var i = "IP position unavailable";
                    l.emit("getCityInfo"), $.ajax({ url: c, timeout: t.timeout, dataType: "json" }).done(function(o) { o && o.data && o.data.cityName && o.data.cityDomain ? e(null, { cityName: o.data.cityName, cityDomain: o.data.cityDomain, url: o.data.url, currentLocation: o.data.currentLocation, latlng: o.data.latlng }) : t.ipFirst ? h() : e(n || i) }).fail(function() { t.ipFirst ? h() : e(n || i) }) }; return o.done(function(t) { u(t) }).fail(function(n) { t.ipFirst ? e(n) : n && n.code === n.PERMISSION_DENIED ? e(n) : f(n) }), t.ipFirst ? f() : h(), l } },*/
    18: function(t, e, n) { var i = n(32),
            o = function(t) { var e = new RegExp("(^|&)" + t + "=([^&]*)(&|$)"),
                    n = window.location.search.substr(1),
                    i = n.match(e); return null != i && (n = n.replace(i[0], "")), "?" + n },
            r = function(t) { var e = new RegExp("(^|&)" + t + "=([^&]*)(&|$)"),
                    n = window.location.search.substr(1).match(e); return null != n ? unescape(n[2]) : null };
        $(function() { $("#user-mask").tap(function() { return $("#user-mask").hide(), $(".js-user-div").removeClass("active"), !1 }), $(".js-user-check .btn-cancel").tap(function() { return $("#user-mask").trigger("tap"), !1 }), $(".js-user-phone").on("input", function() { var t = $(".js-user-register"); "1" != t.attr("data-send") && t.addClass("active") }), $(".js-user-register").tap(function(t) { var e = $(".js-user-phone").val(),
                    n = new RegExp(/^1[34578]\d{9}$/),
                    o = $(".js-waring-notice"),
                    r = $(t.target); if (r.hasClass("active"))
                    if (e)
                        if (isNaN(e) || !n.test(e)) o.show().html("请输入正确的手机号");
                        else { o.hide(), r.removeClass("active"), r.attr("data-send", "1"); var a = 60,
                                s = setInterval(function() { a > 0 ? (r.html(a + "s"), a -= 1) : (clearInterval(s), r.addClass("active").html("获取验证码"), r.attr("data-send", "0")) }, 1e3),
                                c = $(".js-check-post-code").attr("data-str"),
                                l = $(".js-check-post-code").attr("data-time");
                            c = i(c + "guazi&js&token" + e), $.ajax({ url: "/misc/user/?act=register", type: "POST", data: { phone: e, time: l, token: c }, dataType: "json", success: function(t) { t.status ? o.show().html("验证码已发送，请查看短信") : o.show().html(t.msg) }, error: function() { o.show().html("验证码发送失败，请稍后再试") } }) } else o.show().html("请输入手机号"); return !1 }), $(".js-user-code").on("input", function() { $(".js-waring-notice").hide() }), $(".js-user-check .btn-sure").tap(function() { var t = $(".js-user-phone").val(),
                    e = $(".js-user-code").val(),
                    n = new RegExp(/^1[34578]\d{9}$/),
                    a = new RegExp(/^\d{4,8}$/),
                    s = $(".js-waring-notice"); if (!t) return s.show().html("请输入手机号"), !1; if (isNaN(t) || !n.test(t)) return s.show().html("请输入正确的手机号"), !1; if (!e) return s.show().html("请输入手机号验证码"), !1; if (isNaN(e) || !a.test(e)) return s.show().html("请输入正确验证码"), !1; var c = $(".js-check-post-code").attr("data-str"),
                    l = $(".js-check-post-code").attr("data-time"); return c = i(c + "guazi&js&token" + t), $.ajax({ url: "/misc/user/?act=checkCode", type: "POST", data: { phone: t, code: e, time: l, token: c }, xhrFields: { withCredentials: !0 }, dataType: "json", success: function(e) { if (e.status) { var n = window.localStorageSubstitute,
                                i = (new Date).getTime();
                            n.setItem("currstamp", i), n.setItem("phone", t); var a = $(".js-user-div").attr("data-reload"),
                                c = r("uToken"); if ("1" == a || null != c) { var l = o("uToken");
                                window.location.href = window.location.pathname + l } else $(".js-user-div").attr("data-user", "1"), $("#user-mask").trigger("tap") } else s.show().html(e.msg) }, error: function() { s.show().html("验证码失败，请稍后再试") } }), !1 }) }) },
    19: function(t, e, n) { var i = n(20),
            o = n(9);
        n(8);
        e.slideBanner = o.extend({ events: { "click [data-slide-to]": function(t) { var e = i(t.currentTarget).data("slide-to");
                    e > this.index ? this.slideTo(e, "next") : this.slideTo(e, "prev") }, 'touchstart [data-role="item"]': function(t) { this.stop(), this.startX = t.touches[0].clientX, this.config.touch1move = !0, this.config.startPos.x = t.touches[0].pageX, this.config.startPos.y = t.touches[0].pageY }, 'touchend [data-role="item"]': function() { this.maxMoveDist > 10 && (this.maxMoveDist = 0, this[this.direction]()), this.loop() }, 'touchmove [data-role="item"]': function(t) { var e = t.touches[0],
                        n = this.config.$list,
                        i = e.clientX - this.startX,
                        o = e.pageX - this.config.startPos.x,
                        r = e.pageY - this.config.startPos.y;
                    this.config.touch1move && (this.config.direction = Math.abs(r) > Math.abs(o) ? "vertical" : "horizontal", this.config.touch1move = !1), "vertical" != this.config.direction && (t.preventDefault(), t.stopPropagation(), this.animating || (this.maxMoveDist < Math.abs(i) && (this.maxMoveDist = Math.abs(i)), Math.abs(i) > this.width || this.maxMoveDist < 10 || (t.preventDefault(), n.css({ marginLeft: -1 * this.index * this.width + i + "px" }), this.direction = i < 0 ? "next" : "prev"))) } }, init: function(t) { var e = this,
                    n = t.$item;
                t.interval = t.interval || 1e3, this.config = t, this.config.startPos = {}, this.config.touch1move = !0, this.config.direction = "vertical", this.index = 0, this.total = i(t.$item).length, this.loop(), this.width = this.config.$el.width(), this.config.$list.width(this.total + 2 + "00%"), this.translateX = 0, this.direction = "next", this.maxMoveDist = 0, n.css("width", 100 / (this.total + 2) + "%"); var o = n.eq(this.total - 1).clone(),
                    r = n.eq(0).clone();
                o.css({ position: "relative", left: "-100%" }), i([n.eq(0).find("img[data-src]"), r.find("img[data-src]"), o.find("img[data-src]")]).each(function() { var t = i(this);
                    t.attr("src", t.data("src")) }), this.config.$list.append(r).append(o), i(window).on("resize", function() { e.width = e.config.$el.width(), e.slideTo(e.index, "next") }) }, slideFn: function(t, e) { var n = this,
                    o = i.Deferred(),
                    r = t - this.index,
                    a = this.config.$list,
                    s = this.total,
                    c = this.config.$list.width();
                i([this.config.$item.eq(t).find("img[data-src]"), this.config.$item.eq(t + 1).find("img[data-src]")]).each(function() { var t = i(this);
                    t.data("src") && t.attr("src") !== t.data("src") && t.attr("src", t.data("src")) }), "prev" === e && r > 0 && (r -= s), "next" === e && r < 0 && (r += s), this.animating = !0; var l = (i.fx.cssPrefix + "transform", -1 / (this.total + 2) * (this.index + r) * c); if (a.animate({ marginLeft: l }, this.config.animateTime || 200, function() { var i;
                        0 === n.index && t === s - 1 && "prev" === e ? (i = -1 / (n.total + 2) * (n.total - 1) * c, a.css({ marginLeft: i + "px" })) : n.index === s - 1 && 0 === t && "next" === e && a.css({ marginLeft: 0 }), o.resolve(), n.animating = !1 }), this.config.$el.find("[data-slide-to]").removeClass("active").filter('[data-slide-to="' + t + '"]').addClass("active"), this.config.$el.closest(".report-img").find(".j-container").length > 0) { var u = this.config.$el.closest(".j-container").find(".j-dotted span").eq(t);
                    u.find("i").addClass("on"), u.siblings().find("i").removeClass("on") } return this.config.$el.trigger("slidecb"), this.config.$el.find('[data-role="index"]').text(t + 1), window.initPositionList && this.config.$el.closest(".j-container").find(".car-thrD-show").trigger("init3DShow", window.initPositionList[t]), o.promise() } }) },
    20: function(t, e) {
        var n = function() {
            function t(t) { return null == t ? String(t) : Z[J.call(t)] || "object" }

            function e(e) { return "function" == t(e) }

            function n(t) { return null != t && t == t.window }

            function i(t) { return null != t && t.nodeType == t.DOCUMENT_NODE }

            function o(e) { return "object" == t(e) }

            function r(t) { return o(t) && !n(t) && Object.getPrototypeOf(t) == Object.prototype }

            function a(t) { return "number" == typeof t.length }

            function s(t) { return E.call(t, function(t) { return null != t }) }

            function c(t) { return t.length > 0 ? k.fn.concat.apply([], t) : t }

            function l(t) { return t.replace(/::/g, "/").replace(/([A-Z]+)([A-Z][a-z])/g, "$1_$2").replace(/([a-z\d])([A-Z])/g, "$1_$2").replace(/_/g, "-").toLowerCase() }

            function u(t) { return t in O ? O[t] : O[t] = new RegExp("(^|\\s)" + t + "(\\s|$)") }

            function h(t, e) { return "number" != typeof e || D[l(t)] ? e : e + "px" }

            function f(t) { var e, n; return I[t] || (e = z.createElement(t), z.body.appendChild(e), n = getComputedStyle(e, "").getPropertyValue("display"), e.parentNode.removeChild(e), "none" == n && (n = "block"), I[t] = n), I[t] }

            function d(t) { return "children" in t ? j.call(t.children) : k.map(t.childNodes, function(t) { if (1 == t.nodeType) return t }) }

            function p(t, e, n) { for ($ in e) n && (r(e[$]) || G(e[$])) ? (r(e[$]) && !r(t[$]) && (t[$] = {}), G(e[$]) && !G(t[$]) && (t[$] = []), p(t[$], e[$], n)) : e[$] !== x && (t[$] = e[$]) }

            function m(t, e) { return null == e ? k(t) : k(t).filter(e) }

            function g(t, n, i, o) { return e(n) ? n.call(t, i, o) : n }

            function v(t, e, n) { null == n ? t.removeAttribute(e) : t.setAttribute(e, n) }

            function w(t, e) { var n = t.className,
                    i = n && n.baseVal !== x; return e === x ? i ? n.baseVal : n : void(i ? n.baseVal = e : t.className = e) }

            function y(t) { try { return t ? "true" == t || "false" != t && ("null" == t ? null : +t + "" == t ? +t : /^[\[\{]/.test(t) ? k.parseJSON(t) : t) : t } catch (e) { return t } }

            function b(t, e) { e(t); for (var n in t.childNodes) b(t.childNodes[n], e) } var x, $, k, C, _, T, S = [],
                j = S.slice,
                E = S.filter,
                z = window.document,
                I = {},
                O = {},
                D = { "column-count": 1, columns: 1, "font-weight": 1, "line-height": 1, opacity: 1, "z-index": 1, zoom: 1 },
                N = /^\s*<(\w+|!)[^>]*>/,
                A = /^<(\w+)\s*\/?>(?:<\/\1>|)$/,
                M = /<(?!area|br|col|embed|hr|img|input|link|meta|param)(([\w:]+)[^>]*)\/>/gi,
                P = /^(?:body|html)$/i,
                L = /([A-Z])/g,
                W = ["val", "css", "html", "text", "data", "width", "height", "offset"],
                Y = ["after", "prepend", "before", "append"],
                F = z.createElement("table"),
                R = z.createElement("tr"),
                U = { tr: z.createElement("tbody"), tbody: F, thead: F, tfoot: F, td: R, th: R, "*": z.createElement("div") },
                q = /complete|loaded|interactive/,
                B = /^[\w-]*$/,
                Z = {},
                J = Z.toString,
                X = {},
                V = z.createElement("div"),
                H = { tabindex: "tabIndex", readonly: "readOnly", "for": "htmlFor", "class": "className", maxlength: "maxLength", cellspacing: "cellSpacing", cellpadding: "cellPadding", rowspan: "rowSpan", colspan: "colSpan", usemap: "useMap", frameborder: "frameBorder", contenteditable: "contentEditable" },
                G = Array.isArray || function(t) { return t instanceof Array }; return X.matches = function(t, e) { if (!e || !t || 1 !== t.nodeType) return !1; var n = t.webkitMatchesSelector || t.mozMatchesSelector || t.oMatchesSelector || t.matchesSelector; if (n) return n.call(t, e); var i, o = t.parentNode,
                    r = !o; return r && (o = V).appendChild(t), i = ~X.qsa(o, e).indexOf(t), r && V.removeChild(t), i }, _ = function(t) { return t.replace(/-+(.)?/g, function(t, e) { return e ? e.toUpperCase() : "" }) }, T = function(t) { return E.call(t, function(e, n) { return t.indexOf(e) == n }) }, X.fragment = function(t, e, n) { var i, o, a; return A.test(t) && (i = k(z.createElement(RegExp.$1))), i || (t.replace && (t = t.replace(M, "<$1></$2>")), e === x && (e = N.test(t) && RegExp.$1), e in U || (e = "*"), a = U[e], a.innerHTML = "" + t, i = k.each(j.call(a.childNodes), function() { a.removeChild(this) })), r(n) && (o = k(i), k.each(n, function(t, e) { W.indexOf(t) > -1 ? o[t](e) : o.attr(t, e) })), i }, X.Z = function(t, e) { return t = t || [], t.__proto__ = k.fn, t.selector = e || "", t }, X.isZ = function(t) { return t instanceof X.Z }, X.init = function(t, n) { var i; if (!t) return X.Z(); if ("string" == typeof t)
                    if (t = t.trim(), "<" == t[0] && N.test(t)) i = X.fragment(t, RegExp.$1, n), t = null;
                    else { if (n !== x) return k(n).find(t);
                        i = X.qsa(z, t) } else { if (e(t)) return k(z).ready(t); if (X.isZ(t)) return t; if (G(t)) i = s(t);
                    else if (o(t)) i = [t], t = null;
                    else if (N.test(t)) i = X.fragment(t.trim(), RegExp.$1, n), t = null;
                    else { if (n !== x) return k(n).find(t);
                        i = X.qsa(z, t) } } return X.Z(i, t) }, k = function(t, e) { return X.init(t, e) }, k.extend = function(t) { var e, n = j.call(arguments, 1); return "boolean" == typeof t && (e = t, t = n.shift()), n.forEach(function(n) { p(t, n, e) }), t }, X.qsa = function(t, e) { var n, o = "#" == e[0],
                    r = !o && "." == e[0],
                    a = o || r ? e.slice(1) : e,
                    s = B.test(a); return i(t) && s && o ? (n = t.getElementById(a)) ? [n] : [] : 1 !== t.nodeType && 9 !== t.nodeType ? [] : j.call(s && !o ? r ? t.getElementsByClassName(a) : t.getElementsByTagName(e) : t.querySelectorAll(e)) }, k.contains = function(t, e) { return t !== e && t.contains(e) }, k.type = t, k.isFunction = e, k.isWindow = n, k.isArray = G, k.isPlainObject = r, k.isEmptyObject = function(t) { var e; for (e in t) return !1; return !0 }, k.inArray = function(t, e, n) { return S.indexOf.call(e, t, n) }, k.camelCase = _, k.trim = function(t) { return null == t ? "" : String.prototype.trim.call(t) }, k.uuid = 0, k.support = {}, k.expr = {}, k.map = function(t, e) { var n, i, o, r = []; if (a(t))
                    for (i = 0; i < t.length; i++) n = e(t[i], i), null != n && r.push(n);
                else
                    for (o in t) n = e(t[o], o), null != n && r.push(n); return c(r) }, k.each = function(t, e) { var n, i; if (a(t)) { for (n = 0; n < t.length; n++)
                        if (e.call(t[n], n, t[n]) === !1) return t } else
                    for (i in t)
                        if (e.call(t[i], i, t[i]) === !1) return t; return t }, k.grep = function(t, e) { return E.call(t, e) }, window.JSON && (k.parseJSON = JSON.parse), k.each("Boolean Number String Function Array Date RegExp Object Error".split(" "), function(t, e) { Z["[object " + e + "]"] = e.toLowerCase() }), k.fn = { forEach: S.forEach, reduce: S.reduce, push: S.push, sort: S.sort, indexOf: S.indexOf, concat: S.concat, map: function(t) { return k(k.map(this, function(e, n) { return t.call(e, n, e) })) }, slice: function() { return k(j.apply(this, arguments)) }, ready: function(t) { return q.test(z.readyState) && z.body ? t(k) : z.addEventListener("DOMContentLoaded", function() { t(k) }, !1), this }, get: function(t) { return t === x ? j.call(this) : this[t >= 0 ? t : t + this.length] }, toArray: function() { return this.get() }, size: function() { return this.length }, remove: function() { return this.each(function() { null != this.parentNode && this.parentNode.removeChild(this) }) }, each: function(t) { return S.every.call(this, function(e, n) { return t.call(e, n, e) !== !1 }), this }, filter: function(t) { return e(t) ? this.not(this.not(t)) : k(E.call(this, function(e) { return X.matches(e, t) })) }, add: function(t, e) { return k(T(this.concat(k(t, e)))) }, is: function(t) { return this.length > 0 && X.matches(this[0], t) }, not: function(t) { var n = []; if (e(t) && t.call !== x) this.each(function(e) { t.call(this, e) || n.push(this) });
                    else { var i = "string" == typeof t ? this.filter(t) : a(t) && e(t.item) ? j.call(t) : k(t);
                        this.forEach(function(t) { i.indexOf(t) < 0 && n.push(t) }) } return k(n) }, has: function(t) { return this.filter(function() { return o(t) ? k.contains(this, t) : k(this).find(t).size() }) }, eq: function(t) { return t === -1 ? this.slice(t) : this.slice(t, +t + 1) }, first: function() { var t = this[0]; return t && !o(t) ? t : k(t) }, last: function() { var t = this[this.length - 1]; return t && !o(t) ? t : k(t) }, find: function(t) { var e, n = this; return e = "object" == typeof t ? k(t).filter(function() { var t = this; return S.some.call(n, function(e) { return k.contains(e, t) }) }) : 1 == this.length ? k(X.qsa(this[0], t)) : this.map(function() { return X.qsa(this, t) }) }, closest: function(t, e) { var n = this[0],
                        o = !1; for ("object" == typeof t && (o = k(t)); n && !(o ? o.indexOf(n) >= 0 : X.matches(n, t));) n = n !== e && !i(n) && n.parentNode; return k(n) }, parents: function(t) { for (var e = [], n = this; n.length > 0;) n = k.map(n, function(t) { if ((t = t.parentNode) && !i(t) && e.indexOf(t) < 0) return e.push(t), t }); return m(e, t) }, parent: function(t) { return m(T(this.pluck("parentNode")), t) }, children: function(t) { return m(this.map(function() { return d(this) }), t) }, contents: function() { return this.map(function() { return j.call(this.childNodes) }) }, siblings: function(t) { return m(this.map(function(t, e) { return E.call(d(e.parentNode), function(t) { return t !== e }) }), t) }, empty: function() { return this.each(function() { this.innerHTML = "" }) }, pluck: function(t) { return k.map(this, function(e) { return e[t] }) }, show: function() { return this.each(function() { "none" == this.style.display && (this.style.display = ""), "none" == getComputedStyle(this, "").getPropertyValue("display") && (this.style.display = f(this.nodeName)) }) }, replaceWith: function(t) { return this.before(t).remove() }, wrap: function(t) { var n = e(t); if (this[0] && !n) var i = k(t).get(0),
                        o = i.parentNode || this.length > 1; return this.each(function(e) { k(this).wrapAll(n ? t.call(this, e) : o ? i.cloneNode(!0) : i) }) }, wrapAll: function(t) { if (this[0]) { k(this[0]).before(t = k(t)); for (var e;
                            (e = t.children()).length;) t = e.first();
                        k(t).append(this) } return this }, wrapInner: function(t) { var n = e(t); return this.each(function(e) { var i = k(this),
                            o = i.contents(),
                            r = n ? t.call(this, e) : t;
                        o.length ? o.wrapAll(r) : i.append(r) }) }, unwrap: function() { return this.parent().each(function() { k(this).replaceWith(k(this).children()) }), this }, clone: function() { return this.map(function() { return this.cloneNode(!0) }) }, hide: function() { return this.css("display", "none") }, toggle: function(t) { return this.each(function() { var e = k(this);
                        (t === x ? "none" == e.css("display") : t) ? e.show(): e.hide() }) }, prev: function(t) { return k(this.pluck("previousElementSibling")).filter(t || "*") }, next: function(t) { return k(this.pluck("nextElementSibling")).filter(t || "*") }, html: function(t) { return 0 === arguments.length ? this.length > 0 ? this[0].innerHTML : null : this.each(function(e) { var n = this.innerHTML;
                        k(this).empty().append(g(this, t, e, n)) }) }, text: function(t) { return 0 === arguments.length ? this.length > 0 ? this[0].textContent : null : this.each(function() { this.textContent = t === x ? "" : "" + t }) }, attr: function(t, e) { var n; return "string" == typeof t && e === x ? 0 == this.length || 1 !== this[0].nodeType ? x : "value" == t && "INPUT" == this[0].nodeName ? this.val() : !(n = this[0].getAttribute(t)) && t in this[0] ? this[0][t] : n : this.each(function(n) { if (1 === this.nodeType)
                            if (o(t))
                                for ($ in t) v(this, $, t[$]);
                            else v(this, t, g(this, e, n, this.getAttribute(t))) }) }, removeAttr: function(t) { return this.each(function() { 1 === this.nodeType && v(this, t) }) }, prop: function(t, e) { return t = H[t] || t, e === x ? this[0] && this[0][t] : this.each(function(n) { this[t] = g(this, e, n, this[t]) }) }, data: function(t, e) { var n = this.attr("data-" + t.replace(L, "-$1").toLowerCase(), e); return null !== n ? y(n) : x }, val: function(t) { return 0 === arguments.length ? this[0] && (this[0].multiple ? k(this[0]).find("option").filter(function() { return this.selected }).pluck("value") : this[0].value) : this.each(function(e) { this.value = g(this, t, e, this.value) }) }, offset: function(t) { if (t) return this.each(function(e) { var n = k(this),
                            i = g(this, t, e, n.offset()),
                            o = n.offsetParent().offset(),
                            r = { top: i.top - o.top, left: i.left - o.left }; "static" == n.css("position") && (r.position = "relative"), n.css(r) }); if (0 == this.length) return null; var e = this[0].getBoundingClientRect(); return { left: e.left + window.pageXOffset, top: e.top + window.pageYOffset, width: Math.round(e.width), height: Math.round(e.height) } }, css: function(e, n) { if (arguments.length < 2) { var i = this[0],
                            o = getComputedStyle(i, ""); if (!i) return; if ("string" == typeof e) return i.style[_(e)] || o.getPropertyValue(e); if (G(e)) { var r = {}; return k.each(G(e) ? e : [e], function(t, e) { r[e] = i.style[_(e)] || o.getPropertyValue(e) }), r } } var a = ""; if ("string" == t(e)) n || 0 === n ? a = l(e) + ":" + h(e, n) : this.each(function() { this.style.removeProperty(l(e)) });
                    else
                        for ($ in e) e[$] || 0 === e[$] ? a += l($) + ":" + h($, e[$]) + ";" : this.each(function() { this.style.removeProperty(l($)) }); return this.each(function() { this.style.cssText += ";" + a }) }, index: function(t) { return t ? this.indexOf(k(t)[0]) : this.parent().children().indexOf(this[0]) }, hasClass: function(t) { return !!t && S.some.call(this, function(t) { return this.test(w(t)) }, u(t)) }, addClass: function(t) { return t ? this.each(function(e) { C = []; var n = w(this),
                            i = g(this, t, e, n);
                        i.split(/\s+/g).forEach(function(t) { k(this).hasClass(t) || C.push(t) }, this), C.length && w(this, n + (n ? " " : "") + C.join(" ")) }) : this }, removeClass: function(t) { return this.each(function(e) { return t === x ? w(this, "") : (C = w(this), g(this, t, e, C).split(/\s+/g).forEach(function(t) { C = C.replace(u(t), " ") }), void w(this, C.trim())) }) }, toggleClass: function(t, e) { return t ? this.each(function(n) { var i = k(this),
                            o = g(this, t, n, w(this));
                        o.split(/\s+/g).forEach(function(t) {
                            (e === x ? !i.hasClass(t) : e) ? i.addClass(t): i.removeClass(t) }) }) : this }, scrollTop: function(t) { if (this.length) { var e = "scrollTop" in this[0]; return t === x ? e ? this[0].scrollTop : this[0].pageYOffset : this.each(e ? function() { this.scrollTop = t } : function() { this.scrollTo(this.scrollX, t) }) } }, scrollLeft: function(t) { if (this.length) { var e = "scrollLeft" in this[0]; return t === x ? e ? this[0].scrollLeft : this[0].pageXOffset : this.each(e ? function() { this.scrollLeft = t } : function() { this.scrollTo(t, this.scrollY) }) } }, position: function() { if (this.length) { var t = this[0],
                            e = this.offsetParent(),
                            n = this.offset(),
                            i = P.test(e[0].nodeName) ? { top: 0, left: 0 } : e.offset(); return n.top -= parseFloat(k(t).css("margin-top")) || 0, n.left -= parseFloat(k(t).css("margin-left")) || 0, i.top += parseFloat(k(e[0]).css("border-top-width")) || 0, i.left += parseFloat(k(e[0]).css("border-left-width")) || 0, { top: n.top - i.top, left: n.left - i.left } } }, offsetParent: function() { return this.map(function() { for (var t = this.offsetParent || z.body; t && !P.test(t.nodeName) && "static" == k(t).css("position");) t = t.offsetParent; return t }) } }, k.fn.detach = k.fn.remove, ["width", "height"].forEach(function(t) { var e = t.replace(/./, function(t) { return t[0].toUpperCase() });
                k.fn[t] = function(o) { var r, a = this[0]; return o === x ? n(a) ? a["inner" + e] : i(a) ? a.documentElement["scroll" + e] : (r = this.offset()) && r[t] : this.each(function(e) { a = k(this), a.css(t, g(this, o, e, a[t]())) }) } }), Y.forEach(function(e, n) { var i = n % 2;
                k.fn[e] = function() { var e, o, r = k.map(arguments, function(n) { return e = t(n), "object" == e || "array" == e || null == n ? n : X.fragment(n) }),
                        a = this.length > 1; return r.length < 1 ? this : this.each(function(t, e) { o = i ? e : e.parentNode, e = 0 == n ? e.nextSibling : 1 == n ? e.firstChild : 2 == n ? e : null, r.forEach(function(t) { if (a) t = t.cloneNode(!0);
                            else if (!o) return k(t).remove();
                            b(o.insertBefore(t, e), function(t) { null == t.nodeName || "SCRIPT" !== t.nodeName.toUpperCase() || t.type && "text/javascript" !== t.type || t.src || window.eval.call(window, t.innerHTML) }) }) }) }, k.fn[i ? e + "To" : "insert" + (n ? "Before" : "After")] = function(t) { return k(t)[e](this), this } }), X.Z.prototype = k.fn, X.uniq = T, X.deserializeValue = y, k.zepto = X, k }();
        window.Zepto = n, void 0 === window.$ && (window.$ = n), t.exports = n,
            function(t) {
                function e(t) { return t._zid || (t._zid = f++) }

                function n(t, n, r, a) { if (n = i(n), n.ns) var s = o(n.ns); return (g[e(t)] || []).filter(function(t) { return t && (!n.e || t.e == n.e) && (!n.ns || s.test(t.ns)) && (!r || e(t.fn) === e(r)) && (!a || t.sel == a) }) }

                function i(t) { var e = ("" + t).split("."); return { e: e[0], ns: e.slice(1).sort().join(" ") } }

                function o(t) { return new RegExp("(?:^| )" + t.replace(" ", " .* ?") + "(?: |$)") }

                function r(t, e) { return t.del && !w && t.e in y || !!e }

                function a(t) { return b[t] || w && y[t] || t }

                function s(n, o, s, c, u, f, d) { var p = e(n),
                        m = g[p] || (g[p] = []);
                    o.split(/\s/).forEach(function(e) { if ("ready" == e) return t(document).ready(s); var o = i(e);
                        o.fn = s, o.sel = u, o.e in b && (s = function(e) { var n = e.relatedTarget; if (!n || n !== this && !t.contains(this, n)) return o.fn.apply(this, arguments) }), o.del = f; var p = f || s;
                        o.proxy = function(t) { if (t = l(t), !t.isImmediatePropagationStopped()) { t.data = c; var e = p.apply(n, t._args == h ? [t] : [t].concat(t._args)); return e === !1 && (t.preventDefault(), t.stopPropagation()), e } }, o.i = m.length, m.push(o), "addEventListener" in n && n.addEventListener(a(o.e), o.proxy, r(o, d)) }) }

                function c(t, i, o, s, c) { var l = e(t);
                    (i || "").split(/\s/).forEach(function(e) { n(t, e, o, s).forEach(function(e) { delete g[l][e.i], "removeEventListener" in t && t.removeEventListener(a(e.e), e.proxy, r(e, c)) }) }) }

                function l(e, n) { return !n && e.isDefaultPrevented || (n || (n = e), t.each(C, function(t, i) { var o = n[t];
                        e[t] = function() { return this[i] = x, o && o.apply(n, arguments) }, e[i] = $ }), (n.defaultPrevented !== h ? n.defaultPrevented : "returnValue" in n ? n.returnValue === !1 : n.getPreventDefault && n.getPreventDefault()) && (e.isDefaultPrevented = x)), e }

                function u(t) { var e, n = { originalEvent: t }; for (e in t) k.test(e) || t[e] === h || (n[e] = t[e]); return l(n, t) } var h, f = 1,
                    d = Array.prototype.slice,
                    p = t.isFunction,
                    m = function(t) { return "string" == typeof t },
                    g = {},
                    v = {},
                    w = "onfocusin" in window,
                    y = { focus: "focusin", blur: "focusout" },
                    b = { mouseenter: "mouseover", mouseleave: "mouseout" };
                v.click = v.mousedown = v.mouseup = v.mousemove = "MouseEvents", t.event = { add: s, remove: c }, t.proxy = function(n, i) { if (p(n)) { var o = function() { return n.apply(i, arguments) }; return o._zid = e(n), o } if (m(i)) return t.proxy(n[i], n); throw new TypeError("expected function") }, t.fn.bind = function(t, e, n) { return this.on(t, e, n) }, t.fn.unbind = function(t, e) { return this.off(t, e) }, t.fn.one = function(t, e, n, i) { return this.on(t, e, n, i, 1) }; var x = function() { return !0 },
                    $ = function() { return !1 },
                    k = /^([A-Z]|returnValue$|layer[XY]$)/,
                    C = { preventDefault: "isDefaultPrevented", stopImmediatePropagation: "isImmediatePropagationStopped", stopPropagation: "isPropagationStopped" };
                t.fn.delegate = function(t, e, n) { return this.on(e, t, n) }, t.fn.undelegate = function(t, e, n) { return this.off(e, t, n) }, t.fn.live = function(e, n) { return t(document.body).delegate(this.selector, e, n), this }, t.fn.die = function(e, n) { return t(document.body).undelegate(this.selector, e, n), this }, t.fn.on = function(e, n, i, o, r) { var a, l, f = this; return e && !m(e) ? (t.each(e, function(t, e) { f.on(t, n, i, e, r) }), f) : (m(n) || p(o) || o === !1 || (o = i, i = n, n = h), (p(i) || i === !1) && (o = i, i = h), o === !1 && (o = $), f.each(function(h, f) { r && (a = function(t) { return c(f, t.type, o), o.apply(this, arguments) }), n && (l = function(e) { var i, r = t(e.target).closest(n, f).get(0); if (r && r !== f) return i = t.extend(u(e), { currentTarget: r, liveFired: f }), (a || o).apply(r, [i].concat(d.call(arguments, 1))) }), s(f, e, o, i, n, l || a) })) }, t.fn.off = function(e, n, i) { var o = this; return e && !m(e) ? (t.each(e, function(t, e) { o.off(t, n, e) }), o) : (m(n) || p(i) || i === !1 || (i = n, n = h), i === !1 && (i = $), o.each(function() { c(this, e, i, n) })) }, t.fn.trigger = function(e, n) { return e = m(e) || t.isPlainObject(e) ? t.Event(e) : l(e), e._args = n, this.each(function() { "dispatchEvent" in this ? this.dispatchEvent(e) : t(this).triggerHandler(e, n) }) }, t.fn.triggerHandler = function(e, i) { var o, r; return this.each(function(a, s) { o = u(m(e) ? t.Event(e) : e), o._args = i, o.target = s, t.each(n(s, e.type || e), function(t, e) { if (r = e.proxy(o), o.isImmediatePropagationStopped()) return !1 }) }), r }, "focusin focusout load resize scroll unload click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select keydown keypress keyup error".split(" ").forEach(function(e) { t.fn[e] = function(t) { return t ? this.bind(e, t) : this.trigger(e) } }), ["focus", "blur"].forEach(function(e) { t.fn[e] = function(t) { return t ? this.bind(e, t) : this.each(function() { try { this[e]() } catch (t) {} }), this } }), t.Event = function(t, e) { m(t) || (e = t, t = e.type); var n = document.createEvent(v[t] || "Events"),
                        i = !0; if (e)
                        for (var o in e) "bubbles" == o ? i = !!e[o] : n[o] = e[o]; return n.initEvent(t, i, !0), l(n) } }(n),
            function(t) {
                function e(e, n, i) { var o = t.Event(n); return t(e).trigger(o, i), !o.isDefaultPrevented() }

                function n(t, n, i, o) { if (t.global) return e(n || w, i, o) }

                function i(e) { e.global && 0 === t.active++ && n(e, null, "ajaxStart") }

                function o(e) { e.global && !--t.active && n(e, null, "ajaxStop") }

                function r(t, e) { var i = e.context; return e.beforeSend.call(i, t, e) !== !1 && n(e, i, "ajaxBeforeSend", [t, e]) !== !1 && void n(e, i, "ajaxSend", [t, e]) }

                function a(t, e, i, o) { var r = i.context,
                        a = "success";
                    i.success.call(r, t, a, e), o && o.resolveWith(r, [t, a, e]), n(i, r, "ajaxSuccess", [e, i, t]), c(a, e, i) }

                function s(t, e, i, o, r) { var a = o.context;
                    o.error.call(a, i, e, t), r && r.rejectWith(a, [i, e, t]), n(o, a, "ajaxError", [i, o, t || e]), c(e, i, o) }

                function c(t, e, i) { var r = i.context;
                    i.complete.call(r, e, t), n(i, r, "ajaxComplete", [e, i]), o(i) }

                function l() {}

                function u(t) { return t && (t = t.split(";", 2)[0]), t && (t == k ? "html" : t == $ ? "json" : b.test(t) ? "script" : x.test(t) && "xml") || "text" }

                function h(t, e) { return "" == e ? t : (t + "&" + e).replace(/[&?]{1,2}/, "?") }

                function f(e) { e.processData && e.data && "string" != t.type(e.data) && (e.data = t.param(e.data, e.traditional)), !e.data || e.type && "GET" != e.type.toUpperCase() || (e.url = h(e.url, e.data), e.data = void 0) }

                function d(e, n, i, o) { return t.isFunction(n) && (o = i, i = n, n = void 0), t.isFunction(i) || (o = i, i = void 0), { url: e, data: n, success: i, dataType: o } }

                function p(e, n, i, o) { var r, a = t.isArray(n),
                        s = t.isPlainObject(n);
                    t.each(n, function(n, c) { r = t.type(c), o && (n = i ? o : o + "[" + (s || "object" == r || "array" == r ? n : "") + "]"), !o && a ? e.add(c.name, c.value) : "array" == r || !i && "object" == r ? p(e, c, i, n) : e.add(n, c) }) }
                var m, g, v = 0,
                    w = window.document,
                    y = /<script\b[^<]*(?:(?!<\/script>)<[^<]*)*<\/script>/gi,
                    b = /^(?:text|application)\/javascript/i,
                    x = /^(?:text|application)\/xml/i,
                    $ = "application/json",
                    k = "text/html",
                    C = /^\s*$/;
                t.active = 0, t.ajaxJSONP = function(e, n) { if (!("type" in e)) return t.ajax(e); var i, o, c = e.jsonpCallback,
                        l = (t.isFunction(c) ? c() : c) || "jsonp" + ++v,
                        u = w.createElement("script"),
                        h = window[l],
                        f = function(e) { t(u).triggerHandler("error", e || "abort") },
                        d = { abort: f }; return n && n.promise(d), t(u).on("load error", function(r, c) { clearTimeout(o), t(u).off().remove(), "error" != r.type && i ? a(i[0], d, e, n) : s(null, c || "error", d, e, n), window[l] = h, i && t.isFunction(h) && h(i[0]), h = i = void 0 }), r(d, e) === !1 ? (f("abort"), d) : (window[l] = function() { i = arguments }, u.src = e.url.replace(/\?(.+)=\?/, "?$1=" + l), w.head.appendChild(u), e.timeout > 0 && (o = setTimeout(function() { f("timeout") }, e.timeout)), d) }, t.ajaxSettings = { type: "GET", beforeSend: l, success: l, error: l, complete: l, context: null, global: !0, xhr: function() { return new window.XMLHttpRequest }, accepts: { script: "text/javascript, application/javascript, application/x-javascript", json: $, xml: "application/xml, text/xml", html: k, text: "text/plain" }, crossDomain: !1, timeout: 0, processData: !0, cache: !0 }, t.ajax = function(e) {
                    var n = t.extend({}, e || {}),
                        o = t.Deferred && t.Deferred();
                    for (m in t.ajaxSettings) void 0 === n[m] && (n[m] = t.ajaxSettings[m]);
                    i(n), n.crossDomain || (n.crossDomain = /^([\w-]+:)?\/\/([^\/]+)/.test(n.url) && RegExp.$2 != window.location.host), n.url || (n.url = window.location.toString()), f(n), n.cache === !1 && (n.url = h(n.url, "_=" + Date.now()));
                    var c = n.dataType,
                        d = /\?.+=\?/.test(n.url);
                    if ("jsonp" == c || d) return d || (n.url = h(n.url, n.jsonp ? n.jsonp + "=?" : n.jsonp === !1 ? "" : "callback=?")), t.ajaxJSONP(n, o);
                    var p, v = n.accepts[c],
                        w = {},
                        y = function(t, e) { w[t.toLowerCase()] = [t, e] },
                        b = /^([\w-]+:)\/\//.test(n.url) ? RegExp.$1 : window.location.protocol,
                        x = n.xhr(),
                        $ = x.setRequestHeader;
                    if (o && o.promise(x), n.crossDomain || y("X-Requested-With", "XMLHttpRequest"), y("Accept", v || "*/*"), (v = n.mimeType || v) && (v.indexOf(",") > -1 && (v = v.split(",", 2)[0]), x.overrideMimeType && x.overrideMimeType(v)), (n.contentType || n.contentType !== !1 && n.data && "GET" != n.type.toUpperCase()) && y("Content-Type", n.contentType || "application/x-www-form-urlencoded"), n.headers)
                        for (g in n.headers) y(g, n.headers[g]);
                    if (x.setRequestHeader = y, x.onreadystatechange = function() { if (4 == x.readyState) { x.onreadystatechange = l, clearTimeout(p); var e, i = !1; if (x.status >= 200 && x.status < 300 || 304 == x.status || 0 == x.status && "file:" == b) { c = c || u(n.mimeType || x.getResponseHeader("content-type")), e = x.responseText; try { "script" == c ? (0, eval)(e) : "xml" == c ? e = x.responseXML : "json" == c && (e = C.test(e) ? null : t.parseJSON(e)) } catch (r) { i = r } i ? s(i, "parsererror", x, n, o) : a(e, x, n, o) } else s(x.statusText || null, x.status ? "error" : "abort", x, n, o) } }, r(x, n) === !1) return x.abort(), s(null, "abort", x, n, o), x;
                    if (n.xhrFields)
                        for (g in n.xhrFields) x[g] = n.xhrFields[g];
                    var k = !("async" in n) || n.async;
                    x.open(n.type, n.url, k, n.username, n.password);
                    for (g in w) $.apply(x, w[g]);
                    return n.timeout > 0 && (p = setTimeout(function() { x.onreadystatechange = l, x.abort(), s(null, "timeout", x, n, o) }, n.timeout)), x.send(n.data ? n.data : null), x
                }, t.get = function() { return t.ajax(d.apply(null, arguments)) }, t.post = function() { var e = d.apply(null, arguments); return e.type = "POST", t.ajax(e) }, t.getJSON = function() { var e = d.apply(null, arguments); return e.dataType = "json", t.ajax(e) }, t.fn.load = function(e, n, i) { if (!this.length) return this; var o, r = this,
                        a = e.split(/\s/),
                        s = d(e, n, i),
                        c = s.success; return a.length > 1 && (s.url = a[0], o = a[1]), s.success = function(e) { r.html(o ? t("<div>").html(e.replace(y, "")).find(o) : e), c && c.apply(r, arguments) }, t.ajax(s), this };
                var _ = encodeURIComponent;
                t.param = function(t, e) { var n = []; return n.add = function(t, e) { this.push(_(t) + "=" + _(e)) }, p(n, t, e), n.join("&").replace(/%20/g, "+") }
            }(n),
            function(t) { t.fn.serializeArray = function() { var e, n = []; return t([].slice.call(this.get(0).elements)).each(function() { e = t(this); var i = e.attr("type"); "fieldset" != this.nodeName.toLowerCase() && !this.disabled && "submit" != i && "reset" != i && "button" != i && ("radio" != i && "checkbox" != i || this.checked) && n.push({ name: e.attr("name"), value: e.val() }) }), n }, t.fn.serializeObject = function() { var e, n = {}; return t([].slice.call(this.get(0).elements)).each(function() { e = t(this); var i = e.attr("type"),
                            o = e.attr("name"),
                            r = e.val();
                        n[o] = n[o] || void 0, "fieldset" != this.nodeName.toLowerCase() && !this.disabled && "submit" != i && "reset" != i && "button" != i && ("radio" != i && "checkbox" != i || this.checked) && (n[o] ? n[o].push ? n[o].push(r) : n[o] = [n[o], r] : n[o] = r) }), n }, t.fn.serialize = function() { var t = []; return this.serializeArray().forEach(function(e) { t.push(encodeURIComponent(e.name) + "=" + encodeURIComponent(e.value)) }), t.join("&") }, t.fn.submit = function(e) { if (e) this.bind("submit", e);
                    else if (this.length) { var n = t.Event("submit");
                        this.eq(0).trigger(n), n.isDefaultPrevented() || this.get(0).submit() } return this } }(n),
            function(t) { "__proto__" in {} || t.extend(t.zepto, { Z: function(e, n) { return e = e || [], t.extend(e, t.fn), e.selector = n || "", e.__Z = !0, e }, isZ: function(e) { return "array" === t.type(e) && "__Z" in e } }); try { getComputedStyle(void 0) } catch (e) { var n = getComputedStyle;
                    window.getComputedStyle = function(t) { try { return n(t) } catch (e) { return null } } } }(n),
            function(t) {
                function e(e, i) { var c = e[s],
                        l = c && o[c]; if (void 0 === i) return l || n(e); if (l) { if (i in l) return l[i]; var u = a(i); if (u in l) return l[u] } return r.call(t(e), i) }

                function n(e, n, r) { var c = e[s] || (e[s] = ++t.uuid),
                        l = o[c] || (o[c] = i(e)); return void 0 !== n && (l[a(n)] = r), l }

                function i(e) { var n = {}; return t.each(e.attributes || c, function(e, i) { 0 == i.name.indexOf("data-") && (n[a(i.name.replace("data-", ""))] = t.zepto.deserializeValue(i.value)) }), n } var o = {},
                    r = t.fn.data,
                    a = t.camelCase,
                    s = t.expando = "Zepto" + +new Date,
                    c = [];
                t.fn.data = function(i, o) { return void 0 === o ? t.isPlainObject(i) ? this.each(function(e, o) { t.each(i, function(t, e) { n(o, t, e) }) }) : 0 == this.length ? void 0 : e(this[0], i) : this.each(function() { n(this, i, o) }) }, t.fn.removeData = function(e) { return "string" == typeof e && (e = e.split(/\s+/)), this.each(function() { var n = this[s],
                            i = n && o[n];
                        i && t.each(e || i, function(t) { delete i[e ? a(this) : t] }) }) }, ["remove", "empty"].forEach(function(e) { var n = t.fn[e];
                    t.fn[e] = function() { var t = this.find("*"); return "remove" === e && (t = t.add(this)), t.removeData(), n.call(this) } }) }(n),
            function(t) { t.Callbacks = function(e) { e = t.extend({}, e); var n, i, o, r, a, s, c = [],
                        l = !e.once && [],
                        u = function(t) { for (n = e.memory && t, i = !0, s = r || 0, r = 0, a = c.length, o = !0; c && s < a; ++s)
                                if (c[s].apply(t[0], t[1]) === !1 && e.stopOnFalse) { n = !1; break }
                            o = !1, c && (l ? l.length && u(l.shift()) : n ? c.length = 0 : h.disable()) },
                        h = { add: function() { if (c) { var i = c.length,
                                        s = function(n) { t.each(n, function(t, n) { "function" == typeof n ? e.unique && h.has(n) || c.push(n) : n && n.length && "string" != typeof n && s(n) }) };
                                    s(arguments), o ? a = c.length : n && (r = i, u(n)) } return this }, remove: function() { return c && t.each(arguments, function(e, n) { for (var i;
                                        (i = t.inArray(n, c, i)) > -1;) c.splice(i, 1), o && (i <= a && --a, i <= s && --s) }), this }, has: function(e) { return !(!c || !(e ? t.inArray(e, c) > -1 : c.length)) }, empty: function() { return a = c.length = 0, this }, disable: function() { return c = l = n = void 0, this }, disabled: function() { return !c }, lock: function() { return l = void 0, n || h.disable(), this }, locked: function() { return !l }, fireWith: function(t, e) { return !c || i && !l || (e = e || [], e = [t, e.slice ? e.slice() : e], o ? l.push(e) : u(e)), this }, fire: function() { return h.fireWith(this, arguments) }, fired: function() { return !!i } }; return h } }(n),
            function(t) {
                function e(n) { var i = [
                            ["resolve", "done", t.Callbacks({ once: 1, memory: 1 }), "resolved"],
                            ["reject", "fail", t.Callbacks({ once: 1, memory: 1 }), "rejected"],
                            ["notify", "progress", t.Callbacks({ memory: 1 })]
                        ],
                        o = "pending",
                        r = { state: function() { return o }, always: function() { return a.done(arguments).fail(arguments), this }, then: function() { var n = arguments; return e(function(e) { t.each(i, function(i, o) { var s = t.isFunction(n[i]) && n[i];
                                        a[o[1]](function() { var n = s && s.apply(this, arguments); if (n && t.isFunction(n.promise)) n.promise().done(e.resolve).fail(e.reject).progress(e.notify);
                                            else { var i = this === r ? e.promise() : this,
                                                    a = s ? [n] : arguments;
                                                e[o[0] + "With"](i, a) } }) }), n = null }).promise() }, promise: function(e) { return null != e ? t.extend(e, r) : r } },
                        a = {}; return t.each(i, function(t, e) { var n = e[2],
                            s = e[3];
                        r[e[1]] = n.add, s && n.add(function() { o = s }, i[1 ^ t][2].disable, i[2][2].lock), a[e[0]] = function() { return a[e[0] + "With"](this === a ? r : this, arguments), this }, a[e[0] + "With"] = n.fireWith }), r.promise(a), n && n.call(a, a), a } var n = Array.prototype.slice;
                t.when = function(i) { var o, r, a, s = n.call(arguments),
                        c = s.length,
                        l = 0,
                        u = 1 !== c || i && t.isFunction(i.promise) ? c : 0,
                        h = 1 === u ? i : e(),
                        f = function(t, e, i) { return function(r) { e[t] = this, i[t] = arguments.length > 1 ? n.call(arguments) : r, i === o ? h.notifyWith(e, i) : --u || h.resolveWith(e, i) } }; if (c > 1)
                        for (o = new Array(c), r = new Array(c), a = new Array(c); l < c; ++l) s[l] && t.isFunction(s[l].promise) ? s[l].promise().done(f(l, a, s)).fail(h.reject).progress(f(l, r, o)) : --u; return u || h.resolveWith(a, s), h.promise() }, t.Deferred = e }(n),
            function(t) { t.fn.end = function() { return this.prevObject || t() }, t.fn.andSelf = function() { return this.add(this.prevObject || t()) }, "filter,add,not,eq,first,last,find,closest,parents,parent,children,siblings".split(",").forEach(function(e) { var n = t.fn[e];
                    t.fn[e] = function() { var t = n.apply(this, arguments); return t.prevObject = this, t } }) }(n),
            function(t) {
                function e(t, e, n, i) { return Math.abs(t - e) >= Math.abs(n - i) ? t - e > 0 ? "Left" : "Right" : n - i > 0 ? "Up" : "Down" }

                function n() { u = null, f.last && (f.el.trigger("longTap"), f = {}) }

                function i() { u && clearTimeout(u), u = null }

                function o() { s && clearTimeout(s), c && clearTimeout(c), l && clearTimeout(l), u && clearTimeout(u), s = c = l = u = null, f = {} }

                function r(t) { return ("touch" == t.pointerType || t.pointerType == t.MSPOINTER_TYPE_TOUCH) && t.isPrimary }

                function a(t, e) { return t.type == "pointer" + e || t.type.toLowerCase() == "mspointer" + e } var s, c, l, u, h, f = {},
                    d = 750;
                t(document).ready(function() { var p, m, g, v, w = 0,
                        y = 0; "MSGesture" in window && (h = new MSGesture, h.target = document.body), t(document).bind("MSGestureEnd", function(t) { var e = t.velocityX > 1 ? "Right" : t.velocityX < -1 ? "Left" : t.velocityY > 1 ? "Down" : t.velocityY < -1 ? "Up" : null;
                        e && (f.el.trigger("swipe"), f.el.trigger("swipe" + e)) }).on("touchstart MSPointerDown pointerdown", function(e) {
                        (v = a(e, "down")) && !r(e) || (g = v ? e : e.touches[0], e.touches && 1 === e.touches.length && f.x2 && (f.x2 = void 0, f.y2 = void 0), p = Date.now(), m = p - (f.last || p), f.el = t("tagName" in g.target ? g.target : g.target.parentNode), s && clearTimeout(s), f.x1 = g.pageX, f.y1 = g.pageY, m > 0 && m <= 250 && (f.isDoubleTap = !0), f.last = p, u = setTimeout(n, d), h && v && h.addPointer(e.pointerId)) }).on("touchmove MSPointerMove pointermove", function(t) {
                        (v = a(t, "move")) && !r(t) || (g = v ? t : t.touches[0], i(), f.x2 = g.pageX, f.y2 = g.pageY, w += Math.abs(f.x1 - f.x2), y += Math.abs(f.y1 - f.y2)) }).on("touchend MSPointerUp pointerup", function(n) {
                        (v = a(n, "up")) && !r(n) || (i(), f.x2 && Math.abs(f.x1 - f.x2) > 30 || f.y2 && Math.abs(f.y1 - f.y2) > 30 ? l = setTimeout(function() { f.el && f.el.trigger("swipe"), f.el && f.el.trigger("swipe" + e(f.x1, f.x2, f.y1, f.y2)), f = {} }, 0) : "last" in f && (w < 30 && y < 30 ? c = setTimeout(function() { var e = t.Event("tap");
                            e.cancelTouch = o, f.el && f.el.trigger(e), f.isDoubleTap ? (f.el && f.el.trigger("doubleTap"), f = {}) : s = setTimeout(function() { s = null, f.el && f.el.trigger("singleTap"), f = {} }, 250) }, 0) : f = {}), w = y = 0) }).on("touchcancel MSPointerCancel pointercancel", o), t(window).on("scroll", o) }), ["swipe", "swipeLeft", "swipeRight", "swipeUp", "swipeDown", "doubleTap", "tap", "singleTap", "longTap"].forEach(function(e) { t.fn[e] = function(t) { return this.on(e, t) } }) }(n),
            function(t, e) {
                function n(t) { return t.replace(/([a-z])([A-Z])/, "$1-$2").toLowerCase() }

                function i(t) { return o ? o + t : t.toLowerCase() } var o, r, a, s, c, l, u, h, f, d, p = "",
                    m = { Webkit: "webkit", Moz: "", O: "o" },
                    g = window.document,
                    v = g.createElement("div"),
                    w = /^((translate|rotate|scale)(X|Y|Z|3d)?|matrix(3d)?|perspective|skew(X|Y)?)$/i,
                    y = {};
                t.each(m, function(t, n) { if (v.style[t + "TransitionProperty"] !== e) return p = "-" + t.toLowerCase() + "-", o = n, !1 }), r = p + "transform", y[a = p + "transition-property"] = y[s = p + "transition-duration"] = y[l = p + "transition-delay"] = y[c = p + "transition-timing-function"] = y[u = p + "animation-name"] = y[h = p + "animation-duration"] = y[d = p + "animation-delay"] = y[f = p + "animation-timing-function"] = "", t.fx = { off: o === e && v.style.transitionProperty === e, speeds: { _default: 400, fast: 200, slow: 600 }, cssPrefix: p, transitionEnd: i("TransitionEnd"), animationEnd: i("AnimationEnd") }, t.fn.animate = function(n, i, o, r, a) { return t.isFunction(i) && (r = i, o = e, i = e), t.isFunction(o) && (r = o, o = e), t.isPlainObject(i) && (o = i.easing, r = i.complete, a = i.delay, i = i.duration), i && (i = ("number" == typeof i ? i : t.fx.speeds[i] || t.fx.speeds._default) / 1e3), a && (a = parseFloat(a) / 1e3), this.anim(n, i, o, r, a) }, t.fn.anim = function(i, o, p, m, g) { var v, b, x, $ = {},
                        k = "",
                        C = this,
                        _ = t.fx.transitionEnd,
                        T = !1; if (o === e && (o = t.fx.speeds._default / 1e3), g === e && (g = 0), t.fx.off && (o = 0), "string" == typeof i) $[u] = i, $[h] = o + "s", $[d] = g + "s", $[f] = p || "linear", _ = t.fx.animationEnd;
                    else { b = []; for (v in i) w.test(v) ? k += v + "(" + i[v] + ") " : ($[v] = i[v], b.push(n(v)));
                        k && ($[r] = k, b.push(r)), o > 0 && "object" == typeof i && ($[a] = b.join(", "), $[s] = o + "s", $[l] = g + "s", $[c] = p || "linear") } return x = function(e) { if ("undefined" != typeof e) { if (e.target !== e.currentTarget) return;
                            t(e.target).unbind(_, x) } else t(this).unbind(_, x);
                        T = !0, t(this).css(y), m && m.call(this) }, o > 0 && (this.bind(_, x), setTimeout(function() { T || x.call(C) }, 1e3 * o + 25)), this.size() && this.get(0).clientLeft, this.css($), o <= 0 && setTimeout(function() { C.each(function() { x.call(this) }) }, 0), this }, v = null }(n),
            function(t) {
                function e(e) { return e = t(e), !(!e.width() && !e.height()) && "none" !== e.css("display") }

                function n(t, e) { t = t.replace(/=#\]/g, '="#"]'); var n, i, o = s.exec(t); if (o && o[2] in a && (n = a[o[2]], i = o[3], t = o[1], i)) { var r = Number(i);
                        i = isNaN(r) ? i.replace(/^["']|["']$/g, "") : r } return e(t, n, i) } var i = t.zepto,
                    o = i.qsa,
                    r = i.matches,
                    a = t.expr[":"] = { visible: function() { if (e(this)) return this }, hidden: function() { if (!e(this)) return this }, selected: function() { if (this.selected) return this }, checked: function() { if (this.checked) return this }, parent: function() { return this.parentNode }, first: function(t) { if (0 === t) return this }, last: function(t, e) { if (t === e.length - 1) return this }, eq: function(t, e, n) { if (t === n) return this }, contains: function(e, n, i) { if (t(this).text().indexOf(i) > -1) return this }, has: function(t, e, n) { if (i.qsa(this, n).length) return this } },
                    s = new RegExp("(.*):(\\w+)(?:\\(([^)]+)\\))?$\\s*"),
                    c = /^\s*>/,
                    l = "Zepto" + +new Date;
                i.qsa = function(e, r) { return n(r, function(n, a, s) { try { var u;!n && a ? n = "*" : c.test(n) && (u = t(e).addClass(l), n = "." + l + " " + n); var h = o(e, n) } catch (f) { throw console.error("error performing selector: %o", r), f } finally { u && u.removeClass(l) } return a ? i.uniq(t.map(h, function(t, e) { return a.call(t, e, h, s) })) : h }) }, i.matches = function(t, e) { return n(e, function(e, n, i) { return (!e || r(t, e)) && (!n || n.call(t, null, i) === t) }) } }(n),
            function(t) {
                function e(t) { var e = this.os = {},
                        n = this.browser = {},
                        i = t.match(/Web[kK]it[\/]{0,1}([\d.]+)/),
                        o = t.match(/(Android);?[\s\/]+([\d.]+)?/),
                        r = t.match(/(iPad).*OS\s([\d_]+)/),
                        a = t.match(/(iPod)(.*OS\s([\d_]+))?/),
                        s = !r && t.match(/(iPhone\sOS)\s([\d_]+)/),
                        c = t.match(/(webOS|hpwOS)[\s\/]([\d.]+)/),
                        l = c && t.match(/TouchPad/),
                        u = t.match(/Kindle\/([\d.]+)/),
                        h = t.match(/Silk\/([\d._]+)/),
                        f = t.match(/(BlackBerry).*Version\/([\d.]+)/),
                        d = t.match(/(BB10).*Version\/([\d.]+)/),
                        p = t.match(/(RIM\sTablet\sOS)\s([\d.]+)/),
                        m = t.match(/PlayBook/),
                        g = t.match(/Chrome\/([\d.]+)/) || t.match(/CriOS\/([\d.]+)/),
                        v = t.match(/Firefox\/([\d.]+)/),
                        w = t.match(/MSIE\s([\d.]+)/),
                        y = i && t.match(/Mobile\//) && !g,
                        b = t.match(/(iPhone|iPod|iPad).*AppleWebKit(?!.*Safari)/) && !g;
                    (n.webkit = !!i) && (n.version = i[1]), o && (e.android = !0, e.version = o[2]), s && !a && (e.ios = e.iphone = !0, e.version = s[2].replace(/_/g, ".")), r && (e.ios = e.ipad = !0, e.version = r[2].replace(/_/g, ".")), a && (e.ios = e.ipod = !0, e.version = a[3] ? a[3].replace(/_/g, ".") : null), c && (e.webos = !0, e.version = c[2]), l && (e.touchpad = !0), f && (e.blackberry = !0, e.version = f[2]), d && (e.bb10 = !0, e.version = d[2]), p && (e.rimtabletos = !0, e.version = p[2]), m && (n.playbook = !0), u && (e.kindle = !0, e.version = u[1]), h && (n.silk = !0, n.version = h[1]), !h && e.android && t.match(/Kindle Fire/) && (n.silk = !0), g && (n.chrome = !0, n.version = g[1]), v && (n.firefox = !0, n.version = v[1]), w && (n.ie = !0, n.version = w[1]), y && (t.match(/Safari/) || e.ios) && (n.safari = !0), b && (n.webview = !0), e.tablet = !!(r || m || o && !t.match(/Mobile/) || v && t.match(/Tablet/) || w && !t.match(/Phone/) && t.match(/Touch/)), e.phone = !(e.tablet || e.ipod || !(o || s || c || f || d || g && t.match(/Android/) || g && t.match(/CriOS\/([\d.]+)/) || v && t.match(/Mobile/) || w && t.match(/Touch/))) } e.call(t, navigator.userAgent), t.__detect = e }(n), t.exports = n
    },
    21: function(t, e, n) { var i = n(26);
        e.init = function(t) { this.config = t, $("body").removeClass("loading").append(i()), Widget.initWidgets() }, e.lazyload = Widget.define({ init: function(t) { this.config = t, this.$img = this.config.$lazyloadImg, this.tempImgArr = [], this.createTempImg(this.$img), this.changeSrc() }, createTempImg: function(t) { var e = this;
                t.each(function() { var t = $(this).data("url"),
                        n = new Image;
                    n.src = t, e.tempImgArr.push(n) }) }, changeSrc: function() { var t = this;
                $(this.tempImgArr).each(function() { var e = this;
                    this.onload = function() { var n = $(t.tempImgArr).index(e),
                            i = e.src;
                        $(t.$img[n]).attr("src", i) } }) } }), e.scrollLazyLoad = Widget.define({ init: function() { var t = this;
                this.loadImg(), this.resizeImg(), $("body").on("add", ".js-lazy-load", function() { t.loadImg(), t.resizeImg() }) }, loadImg: function() { var t = $(".js-lazy-load"); if (t && t.length) { t.each(function() { var t = $(this).offset().top;
                        $(this).data("offsetTop", t) }); var e = $(window).height(),
                        n = null,
                        i = function() { clearTimeout(n), n = setTimeout(function() { var n = $(window).scrollTop();
                                t.each(function() { var t = $(this).data("original"); if (t) { var i = $(this).data("offsetTop");
                                        n + e + 300 > i && ($(this).attr("src", t), $(this).data("original", "")) } }, 20) }) };
                    $(window).on("scroll", i), $(window).trigger("scroll") } }, resizeImg: function() { var t = document.documentElement.clientWidth,
                    e = t / 2 - 15,
                    n = e / 1.526;
                $(".list_post_image_size").css({ width: e, height: n }) } }) },
    23: function(t, e, n) { "use strict";

        function i(t) { var e = l.exec(t); return { protocol: e[1] ? e[1].toLowerCase() : "", slashes: !!e[2], rest: e[3] } }

        function o(t, e) { for (var n = (e || "/").split("/").slice(0, -1).concat(t.split("/")), i = n.length, o = n[i - 1], r = !1, a = 0; i--;) "." === n[i] ? n.splice(i, 1) : ".." === n[i] ? (n.splice(i, 1), a++) : a && (0 === i && (r = !0), n.splice(i, 1), a--); return r && n.unshift(""), "." !== o && ".." !== o || n.push(""), n.join("/") }

        function r(t, e, n) { if (!(this instanceof r)) return new r(t, e, n); var l, h, f, d, p, m, g = u.slice(),
                v = typeof e,
                w = this,
                y = 0; for ("object" !== v && "string" !== v && (n = e, e = null), n && "function" != typeof n && (n = c.parse), e = s(e), h = i(t || ""), l = !h.protocol && !h.slashes, w.slashes = h.slashes || l && e.slashes, w.protocol = h.protocol || e.protocol || "", t = h.rest, h.slashes || (g[2] = [/(.*)/, "pathname"]); y < g.length; y++) d = g[y], f = d[0], m = d[1], f !== f ? w[m] = t : "string" == typeof f ? ~(p = t.indexOf(f)) && ("number" == typeof d[2] ? (w[m] = t.slice(0, p), t = t.slice(p + d[2])) : (w[m] = t.slice(p), t = t.slice(0, p))) : (p = f.exec(t)) && (w[m] = p[1], t = t.slice(0, p.index)), w[m] = w[m] || (l && d[3] ? e[m] || "" : ""), d[4] && (w[m] = w[m].toLowerCase());
            n && (w.query = n(w.query)), l && e.slashes && "/" !== w.pathname.charAt(0) && ("" !== w.pathname || "" !== e.pathname) && (w.pathname = o(w.pathname, e.pathname)), a(w.port, w.protocol) || (w.host = w.hostname, w.port = ""), w.username = w.password = "", w.auth && (d = w.auth.split(":"), w.username = d[0] || "", w.password = d[1] || ""), w.origin = w.protocol && w.host && "file:" !== w.protocol ? w.protocol + "//" + w.host : "null", w.href = w.toString() } var a = n(37),
            s = n(39),
            c = n(36),
            l = /^([a-z][a-z0-9.+-]*:)?(\/\/)?([\S\s]*)/i,
            u = [
                ["#", "hash"],
                ["?", "query"],
                ["/", "pathname"],
                ["@", "auth", 1],
                [NaN, "host", void 0, 1, 1],
                [/:(\d+)$/, "port", void 0, 1],
                [NaN, "hostname", void 0, 1, 1]
            ];
        r.prototype.set = function(t, e, n) { var i = this; switch (t) {
                case "query":
                    "string" == typeof e && e.length && (e = (n || c.parse)(e)), i[t] = e; break;
                case "port":
                    i[t] = e, a(e, i.protocol) ? e && (i.host = i.hostname + ":" + e) : (i.host = i.hostname, i[t] = ""); break;
                case "hostname":
                    i[t] = e, i.port && (e += ":" + i.port), i.host = e; break;
                case "host":
                    i[t] = e, /:\d+$/.test(e) ? (e = e.split(":"), i.port = e.pop(), i.hostname = e.join(":")) : (i.hostname = e, i.port = ""); break;
                case "protocol":
                    i.protocol = e.toLowerCase(), i.slashes = !n; break;
                case "pathname":
                    i.pathname = e.length && "/" !== e.charAt(0) ? "/" + e : e; break;
                default:
                    i[t] = e } for (var o = 0; o < u.length; o++) { var r = u[o];
                r[4] && (i[r[1]] = i[r[1]].toLowerCase()) } return i.origin = i.protocol && i.host && "file:" !== i.protocol ? i.protocol + "//" + i.host : "null", i.href = i.toString(), i }, r.prototype.toString = function(t) { t && "function" == typeof t || (t = c.stringify); var e, n = this,
                i = n.protocol;
            i && ":" !== i.charAt(i.length - 1) && (i += ":"); var o = i + (n.slashes ? "//" : ""); return n.username && (o += n.username, n.password && (o += ":" + n.password), o += "@"), o += n.host + n.pathname, e = "object" == typeof n.query ? t(n.query) : n.query, e && (o += "?" !== e.charAt(0) ? "?" + e : e), n.hash && (o += n.hash), o }, r.extractProtocol = i, r.location = s, r.qs = c, t.exports = r },
    24: function(t, e, n) { var i = n(20),
            o = n(8);
        e.slideBanner = o.define({ init: function(t) { var e = this;
                this.$list = i(t.$list), this.$item = i(t.$item); var n = this.$item.length / this.$list.length;
                this.$item.css({ width: 100 / n + "%" }), this.$list.css({ width: 100 * n + "%" }), this.startX = 0, this.startY = 0, this.listWidth = 0, this.itemIndex = 0, this.itemWidth = 0, this.dist = 1, i("body").on("touchstart", '[data-role="item"]', function(t) { e.startX = t.touches[0].pageX, e.startY = window.scrollY }), i("body").on("touchmove", '[data-role="item"]', function(t) { var n = i(this).parents('[data-role="list"]');
                    e.$list = n, e.listWidth = n.width(), e.itemIndex = parseInt(i(this).attr("data-index")), e.itemWidth = i(this).width(); var o = t.touches[0].pageX - e.startX,
                        r = window.scrollY - e.startY,
                        a = e.$list.find("img").eq(e.itemIndex + 1); if (a.length > 0 && a.attr("src", a.attr("data-src")), Math.abs(r) < 30 && Math.abs(o) > 20) { var s = e.itemIndex * e.itemWidth - o; return s <= 50 - e.itemWidth ? s = 50 - e.itemWidth : s >= e.listWidth - 50 && (s = e.listWidth - 50), n.css({ marginLeft: -1 * s + "px" }), e.dist = o, !1 } e.dist = 0 }), i("body").on("touchend", '[data-role="item"]', function(t) { var n = Math.round(e.listWidth / e.itemWidth),
                        i = parseInt(e.itemIndex);
                    e.dist < 0 ? i += 1 : e.dist > 0 && (i -= 1); var o = e.$list.attr("data-href"); if (o && o.length > 1 && i >= n) return window.location.href = o, !1;
                    i < 0 ? i = 0 : i >= n && (i = n - 1); var r = i * e.itemWidth;
                    e.$list.animate({ marginLeft: -1 * r + "px" }); var a = e.$list.siblings('[data-role="icon"]');
                    a.children().removeClass("active").eq(i).addClass("active"); var s = e.$list.siblings('[data-role="notice"]');
                    s.length > 0 && (i == n - 1 ? s.show() : s.hide()) }) } }) },
    25: function(t, e, n) { var i = n(35),
            o = new i({ platform: "wap", line: "c2c", tracking_type: "click" });
        e.listen = function() { document.addEventListener("readystatechange", function() { "complete" === document.readyState && $("body").on("click", "[data-gzlog]", function(t) { var e = {},
                        n = $(t.currentTarget);
                    $.each(n.data("gzlog").split("&"), function(t, n) { var i = n.split("=");
                        e[i[0]] = i[1] }), o.send(e) }) }) } },
    26: function(module, exports) { module.exports = function(obj) { obj || (obj = {}); var __t, __p = "";
            with(obj) __p += '<style type="text/css">\n\timg{width: 40%;}\n</style>\n<div data-widget="app/che/common/widget/lazyload/lazyload.js#lazyload">\n\t<img data-role="lazyloadImg" data-url="http://imgsrc.baidu.com/forum/pic/item/9f510fb30f2442a72c033b31d143ad4bd1130211.jpg" src="http://sta.ganjistatic1.com/src/image/mobile/wap/milan/detail_default_v0.png"/>\n\n\t<img data-role="lazyloadImg" data-url="http://img.tom61.com/down/bizhi/074/19456567.jpg" src="http://sta.ganjistatic1.com/src/image/mobile/wap/milan/detail_default_v0.png"/>\n\n\t<img data-role="lazyloadImg" data-url="http://img2.imgtn.bdimg.com/it/u=229109023,1728252595&fm=21&gp=0.jpg" src="http://sta.ganjistatic1.com/src/image/mobile/wap/milan/detail_default_v0.png"/>\n\n\t<img data-role="lazyloadImg" data-url="http://img5.imgtn.bdimg.com/it/u=585336956,916737495&fm=21&gp=0.jpg" src="http://sta.ganjistatic1.com/src/image/mobile/wap/milan/detail_default_v0.png"/>\n</div>\n'; return __p } },
    27: function(t, e, n) {
        function i(t) { return n(o(t)) }

        function o(t) { return r[t] || function() { throw new Error("Cannot find module '" + t + "'.") }() } var r = { "./baidualog": 5, "./baidualog.js": 5, "./base_page": 10, "./base_page.js": 10, "./check_user": 18, "./check_user.js": 18, "./geo": 17, "./geo.js": 17, "./gz_analytics": 7, "./gz_analytics.js": 7, "./lazyload/lazyload": 21, "./lazyload/lazyload.js": 21, "./lazyload/lazyload.tpl": 26, "./listImgSlide": 24, "./listImgSlide.js": 24, "./local_storage": 13, "./local_storage.js": 13, "./pinch_zoom": 14, "./pinch_zoom.js": 14, "./responsiveBanner": 19, "./responsiveBanner.js": 19, "./scroll": 15, "./scroll.js": 15, "./slide": 9, "./slide.js": 9, "./slider": 12, "./slider.js": 12, "./swipe": 16, "./swipe.js": 16, "./tracker/tracker": 25, "./tracker/tracker.js": 25 };
        i.keys = function() { return Object.keys(r) }, i.resolve = o, t.exports = i, i.id = 27 },
    32: function(t, e) { "use strict";

        function n(t, e) { var n = (65535 & t) + (65535 & e),
                i = (t >> 16) + (e >> 16) + (n >> 16); return i << 16 | 65535 & n }

        function i(t, e) { return t << e | t >>> 32 - e }

        function o(t, e, o, r, a, s) { return n(i(n(n(e, t), n(r, s)), a), o) }

        function r(t, e, n, i, r, a, s) { return o(e & n | ~e & i, t, e, r, a, s) }

        function a(t, e, n, i, r, a, s) { return o(e & i | n & ~i, t, e, r, a, s) }

        function s(t, e, n, i, r, a, s) { return o(e ^ n ^ i, t, e, r, a, s) }

        function c(t, e, n, i, r, a, s) { return o(n ^ (e | ~i), t, e, r, a, s) }

        function l(t, e) { t[e >> 5] |= 128 << e % 32, t[(e + 64 >>> 9 << 4) + 14] = e; var i, o, l, u, h, f = 1732584193,
                d = -271733879,
                p = -1732584194,
                m = 271733878; for (i = 0; i < t.length; i += 16) o = f, l = d, u = p, h = m, f = r(f, d, p, m, t[i], 7, -680876936), m = r(m, f, d, p, t[i + 1], 12, -389564586), p = r(p, m, f, d, t[i + 2], 17, 606105819), d = r(d, p, m, f, t[i + 3], 22, -1044525330), f = r(f, d, p, m, t[i + 4], 7, -176418897), m = r(m, f, d, p, t[i + 5], 12, 1200080426), p = r(p, m, f, d, t[i + 6], 17, -1473231341), d = r(d, p, m, f, t[i + 7], 22, -45705983), f = r(f, d, p, m, t[i + 8], 7, 1770035416), m = r(m, f, d, p, t[i + 9], 12, -1958414417), p = r(p, m, f, d, t[i + 10], 17, -42063), d = r(d, p, m, f, t[i + 11], 22, -1990404162), f = r(f, d, p, m, t[i + 12], 7, 1804603682), m = r(m, f, d, p, t[i + 13], 12, -40341101), p = r(p, m, f, d, t[i + 14], 17, -1502002290), d = r(d, p, m, f, t[i + 15], 22, 1236535329), f = a(f, d, p, m, t[i + 1], 5, -165796510), m = a(m, f, d, p, t[i + 6], 9, -1069501632), p = a(p, m, f, d, t[i + 11], 14, 643717713), d = a(d, p, m, f, t[i], 20, -373897302), f = a(f, d, p, m, t[i + 5], 5, -701558691), m = a(m, f, d, p, t[i + 10], 9, 38016083), p = a(p, m, f, d, t[i + 15], 14, -660478335), d = a(d, p, m, f, t[i + 4], 20, -405537848), f = a(f, d, p, m, t[i + 9], 5, 568446438), m = a(m, f, d, p, t[i + 14], 9, -1019803690), p = a(p, m, f, d, t[i + 3], 14, -187363961), d = a(d, p, m, f, t[i + 8], 20, 1163531501), f = a(f, d, p, m, t[i + 13], 5, -1444681467), m = a(m, f, d, p, t[i + 2], 9, -51403784), p = a(p, m, f, d, t[i + 7], 14, 1735328473), d = a(d, p, m, f, t[i + 12], 20, -1926607734), f = s(f, d, p, m, t[i + 5], 4, -378558), m = s(m, f, d, p, t[i + 8], 11, -2022574463), p = s(p, m, f, d, t[i + 11], 16, 1839030562), d = s(d, p, m, f, t[i + 14], 23, -35309556), f = s(f, d, p, m, t[i + 1], 4, -1530992060), m = s(m, f, d, p, t[i + 4], 11, 1272893353), p = s(p, m, f, d, t[i + 7], 16, -155497632), d = s(d, p, m, f, t[i + 10], 23, -1094730640), f = s(f, d, p, m, t[i + 13], 4, 681279174), m = s(m, f, d, p, t[i], 11, -358537222), p = s(p, m, f, d, t[i + 3], 16, -722521979), d = s(d, p, m, f, t[i + 6], 23, 76029189), f = s(f, d, p, m, t[i + 9], 4, -640364487), m = s(m, f, d, p, t[i + 12], 11, -421815835), p = s(p, m, f, d, t[i + 15], 16, 530742520), d = s(d, p, m, f, t[i + 2], 23, -995338651), f = c(f, d, p, m, t[i], 6, -198630844), m = c(m, f, d, p, t[i + 7], 10, 1126891415), p = c(p, m, f, d, t[i + 14], 15, -1416354905), d = c(d, p, m, f, t[i + 5], 21, -57434055), f = c(f, d, p, m, t[i + 12], 6, 1700485571), m = c(m, f, d, p, t[i + 3], 10, -1894986606), p = c(p, m, f, d, t[i + 10], 15, -1051523), d = c(d, p, m, f, t[i + 1], 21, -2054922799), f = c(f, d, p, m, t[i + 8], 6, 1873313359), m = c(m, f, d, p, t[i + 15], 10, -30611744), p = c(p, m, f, d, t[i + 6], 15, -1560198380), d = c(d, p, m, f, t[i + 13], 21, 1309151649), f = c(f, d, p, m, t[i + 4], 6, -145523070), m = c(m, f, d, p, t[i + 11], 10, -1120210379), p = c(p, m, f, d, t[i + 2], 15, 718787259), d = c(d, p, m, f, t[i + 9], 21, -343485551), f = n(f, o), d = n(d, l), p = n(p, u), m = n(m, h); return [f, d, p, m] }

        function u(t) { var e, n = ""; for (e = 0; e < 32 * t.length; e += 8) n += String.fromCharCode(t[e >> 5] >>> e % 32 & 255); return n }

        function h(t) { var e, n = []; for (n[(t.length >> 2) - 1] = void 0, e = 0; e < n.length; e += 1) n[e] = 0; for (e = 0; e < 8 * t.length; e += 8) n[e >> 5] |= (255 & t.charCodeAt(e / 8)) << e % 32; return n }

        function f(t) { return u(l(h(t), 8 * t.length)) }

        function d(t, e) { var n, i, o = h(t),
                r = [],
                a = []; for (r[15] = a[15] = void 0, o.length > 16 && (o = l(o, 8 * t.length)), n = 0; n < 16; n += 1) r[n] = 909522486 ^ o[n], a[n] = 1549556828 ^ o[n]; return i = l(r.concat(h(e)), 512 + 8 * e.length), u(l(a.concat(i), 640)) }

        function p(t) { var e, n, i = "0123456789abcdef",
                o = ""; for (n = 0; n < t.length; n += 1) e = t.charCodeAt(n), o += i.charAt(e >>> 4 & 15) + i.charAt(15 & e); return o }

        function m(t) { return unescape(encodeURIComponent(t)) }

        function g(t) { return f(m(t)) }

        function v(t) { return p(g(t)) }

        function w(t, e) { return d(m(t), m(e)) }

        function y(t, e) { return p(w(t, e)) }

        function b(t, e, n) { return e ? n ? w(e, t) : y(e, t) : n ? g(t) : v(t) } t.exports = b },
    33: function(t, e) {
        function n() {}

        function i(t, e, n) { var i = !0; if (t) { var o = 0,
                    r = t.length,
                    a = e[0],
                    s = e[1],
                    c = e[2]; switch (e.length) {
                    case 0:
                        for (; o < r; o += 2) i = t[o].call(t[o + 1] || n) !== !1 && i; break;
                    case 1:
                        for (; o < r; o += 2) i = t[o].call(t[o + 1] || n, a) !== !1 && i; break;
                    case 2:
                        for (; o < r; o += 2) i = t[o].call(t[o + 1] || n, a, s) !== !1 && i; break;
                    case 3:
                        for (; o < r; o += 2) i = t[o].call(t[o + 1] || n, a, s, c) !== !1 && i; break;
                    default:
                        for (; o < r; o += 2) i = t[o].apply(t[o + 1] || n, e) !== !1 && i } } return i }

        function o(t) { return "[object Function]" === Object.prototype.toString.call(t) } var r = /\s+/;
        n.prototype.on = function(t, e, n) { var i, o, a; if (!e) return this; for (i = this.__events || (this.__events = {}), t = t.split(r); o = t.shift();) a = i[o] || (i[o] = []), a.push(e, n); return this }, n.prototype.once = function(t, e, n) { var i = this,
                o = function() { i.off(t, o), e.apply(this, arguments) }; return this.on(t, o, n) }, n.prototype.off = function(t, e, n) { var i, o, s, c; if (!(i = this.__events)) return this; if (!(t || e || n)) return delete this.__events, this; for (t = t ? t.split(r) : a(i); o = t.shift();)
                if (s = i[o])
                    if (e || n)
                        for (c = s.length - 2; c >= 0; c -= 2) e && s[c] !== e || n && s[c + 1] !== n || s.splice(c, 2);
                    else delete i[o]; return this }, n.prototype.trigger = function(t) { var e, n, o, a, s, c, l = [],
                u = !0; if (!(e = this.__events)) return this; for (t = t.split(r), s = 1, c = arguments.length; s < c; s++) l[s - 1] = arguments[s]; for (; n = t.shift();)(o = e.all) && (o = o.slice()), (a = e[n]) && (a = a.slice()), "all" !== n && (u = i(a, l, this) && u), u = i(o, [n].concat(l), this) && u; return u }, n.prototype.emit = n.prototype.trigger, n.mixTo = function(t) { t = o(t) ? t.prototype : t; var e = n.prototype; for (var i in e) e.hasOwnProperty(i) && (t[i] = e[i]) }; var a = Object.keys;
        a || (a = function(t) { var e = []; for (var n in t) t.hasOwnProperty(n) && e.push(n); return e }), e.Events = n },
    34: function(t, e) { "use strict"; var n = Object.prototype.hasOwnProperty,
            i = Object.prototype.toString,
            o = function(t) { return "function" == typeof Array.isArray ? Array.isArray(t) : "[object Array]" === i.call(t) },
            r = function(t) { if (!t || "[object Object]" !== i.call(t)) return !1; var e = n.call(t, "constructor"),
                    o = t.constructor && t.constructor.prototype && n.call(t.constructor.prototype, "isPrototypeOf"); if (t.constructor && !e && !o) return !1; var r; for (r in t); return "undefined" == typeof r || n.call(t, r) };
        t.exports = function a() { var t, e, n, i, s, c, l = arguments[0],
                u = 1,
                h = arguments.length,
                f = !1; for ("boolean" == typeof l ? (f = l, l = arguments[1] || {}, u = 2) : ("object" != typeof l && "function" != typeof l || null == l) && (l = {}); u < h; ++u)
                if (t = arguments[u], null != t)
                    for (e in t) n = l[e], i = t[e], l !== i && (f && i && (r(i) || (s = o(i))) ? (s ? (s = !1, c = n && o(n) ? n : []) : c = n && r(n) ? n : {}, l[e] = a(f, c, i)) : "undefined" != typeof i && (l[e] = i)); return l } },
    35: function(t, e, n) {
        ! function(t, e) { e(n(34), n(23)) }(this, function(e, i) {
            "use strict";

            function o() { var t = (new Date).getTime(),
                    e = "xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx"; return e.replace(/[xy]/g, function(n, i) { if (i < e.length - 2) { var o = (t + 16 * Math.random()) % 16 | 0; return t = Math.floor(t / 16), ("x" === n ? o : 7 & o | 8).toString(16) } return Math.floor(10 * Math.random()) }) }

            function r(t, e) { return e = { exports: {} }, t(e, e.exports), e.exports }

            function a(t) { this.namespace = t }

            function s(t) { var e = {},
                    n = "-",
                    i = b.get("uuid"),
                    r = k.get("uuid"),
                    a = S.ca_s,
                    s = S.ca_n; return i ? (n = i, k.set("uuid", i)) : r ? (n = r, b.set("uuid", r, { path: "/", domain: E })) : n = h(), e.guid = n, e.userid = b.get("userid") || "-", e.sessionid = b.get("sessionid") || o(), b.set("sessionid", e.sessionid, { path: "/", domain: E }), e.landing = S.landing || (document.referrer && T.hostname.indexOf("guazi.com") >= 0 ? 0 : 1) || a && s ? 1 : 0, e }

            function c(t) {
                function n(t) { i(); var e = u(T.query),
                        n = r.filter(function(t) { return !!new RegExp(t[0], "i").test(T.hostname) && e[t[1]] });
                    n.length ? t.ca_kw = _ && e[n[0][1]] || "-" : t.ca_kw = "-", b.set("cainfo", JSON.stringify(t), { expires: 31536e3, path: "/", domain: E }) }

                function i() { b.remove("cainfo", { path: "/", domain: "m.guazi.com" }), b.remove("cainfo", { path: "/", domain: ".m.guazi.com" }) } var o = b.get("cainfo");
                o = o ? JSON.parse(o) : null; var r = d(),
                    a = S.ca_s,
                    s = S.ca_n,
                    c = o || { ca_s: "self", ca_n: s || "self", ca_medium: "-", ca_term: "-", ca_content: "-", ca_campaign: "-", ca_kw: "-", ca_i: "-", scode: "-" },
                    l = r.filter(function(t) { return new RegExp(t[0], "i").test(T.hostname) }); if (a && s) { for (var h in S) h.indexOf("ca_") === -1 && "scode" !== h && delete S[h];
                    c = e(c, S), n(c) } else l.length && (c.ca_s = "seo_" + l[0][0], n(c)); return c || {} }

            function l() { var t = encodeURIComponent(_); return p(t) > 512 && (t = m(t)), { page: j, pagetype: "-", line: "-", referer: t || "-", city: b.get("cityDomain") || "-" } }

            function u(t) { return t = t || window.location.search || window.location.hash, t.replace(/^.*\?/, "").split("&").map(function(t) { return t.split("=") }).reduce(function(t, e) { return e[0].trim() && (t[e[0]] = e[1]), t }, {}) }

            function h() { var t = o(); return f("uuid", t), t }

            function f(t, e) { b.set(t, e, { expires: 31536e3, path: "/", domain: E }), k.set(t, e) }

            function d() { return [
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

            function p(t) { for (var e = 0, n = t.length; n--;) e += t.charCodeAt(n) > 255 ? 2 : 1; return e }

            function m(t, e) { for (var n = 0, i = 0; i < (e || 511);) i += t.charCodeAt(n) > 255 ? 2 : 1, n++; return t.slice(0, n) }

            function g(t, e) { if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function") }

            function v(t) { var e = []; for (var n in t) t.hasOwnProperty(n) && e.push(n + "=" + t[n]); return e.join("&") }

            function w(t, e) { var n = new Image; return n.onload = function() { e && e() }, n.onerror = function() { e && e(new Error("network error")) }, setTimeout(function() { e && e(new Error("timeout")) }, 1e4), n.src = this.server + t.toLowerCase(), n } e = "default" in e ? e["default"] : e, i = "default" in i ? i["default"] : i;
            var y = Object.freeze({ generateUUIDV4: o }),
                b = r(function(t, e) {
                    function n(t, e) { var n = {}; if (i(t) && t.length > 0)
                            for (var o = e ? c : a, r = t.split(/;\s/g), s = void 0, l = void 0, u = void 0, h = 0, f = r.length; h < f; h++) { if (u = r[h].match(/([^=]+)=/i), u instanceof Array) try { s = c(u[1]), l = o(r[h].substring(u[1].length + 1)) } catch (d) {} else s = c(r[h]), l = "";
                                s && (n[s] = l) }
                        return n }

                    function i(t) { return "string" == typeof t }

                    function o(t) { return i(t) && "" !== t }

                    function r(t) { if (!o(t)) throw new TypeError("Cookie name must be a non-empty string") }

                    function a(t) { return t }
                    var s = e,
                        c = decodeURIComponent,
                        l = encodeURIComponent;
                    s.get = function(t, e) {
                        r(t), e = "function" == typeof e ? { converter: e } : e || {};
                        var i = n(document.cookie, !e.raw);
                        return (e.converter || a)(i[t]);
                    }, s.set = function(t, e, n) { r(t), n = n || {}; var i = n.expires,
                            a = n.domain,
                            s = n.path;
                        n.raw || (e = l(String(e))); var c = t + "=" + e,
                            u = i; return "number" == typeof u && (u = new Date(Date.now() + 1e3 * i)), u instanceof Date && (c += "; expires=" + u.toGMTString()), o(a) && (c += "; domain=" + a), o(s) && (c += "; path=" + s), n.secure && (c += "; secure"), document.cookie = c, c }, s.remove = function(t, e) { return e = e || {}, e.expires = new Date(0), this.set(t, "", e) }
                }),
                x = window.GJLocalStorage || window.localStorage;
            a.prototype.set = function(t, e) { var n = this.dump();
                n[t] = { value: e }, n = JSON.stringify(n); try { x.setItem(this.namespace, n) } catch (i) { return !1 } return x.getItem(this.namespace) === n }, a.prototype.get = function(t) { var e = this.dump(); if (e[t]) return e[t].value }, a.prototype.remove = function(t) { this.set(t, void 0) }, a.prototype.clear = function() { x.removeItem(this.namespace) }, a.prototype.dump = function() { var t = x.getItem(this.namespace) || "{}"; try { t = JSON.parse(t) } catch (e) { t = {} } return t };
            var $ = a,
                k = new $("GUAZI_TRACKER"),
                C = document.getElementsByName("js-waf-seo-referer")[0],
                _ = C ? C.value : document.referrer,
                T = new i(_.toLocaleLowerCase()),
                S = u(),
                j = encodeURIComponent(window.location.href),
                E = ".guazi.com",
                z = Object.freeze({ getUserInfo: s, getCaInfo: c, getPageInfo: l }),
                I = function() {
                    function t(t, e) { for (var n = 0; n < e.length; n++) { var i = e[n];
                            i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(t, i.key, i) } } return function(e, n, i) { return n && t(e.prototype, n), i && t(e, i), e } }(),
                O = s,
                D = c,
                N = l,
                A = window.sessionStorage,
                M = document.getElementsByTagName("head")[0].getAttribute("_tracker") || b.get("_tracker") && JSON.parse(b.get("_tracker")),
                P = M ? JSON.parse(M) : {},
                L = ".guazi.com",
                W = function() {
                    function t(n, i, r) { g(this, t), this.server = i || document.location.protocol + "//t.guazi.com/t.gif?", this.conf = e({ platform: "-", tracking_type: "pageload", pageid: o() }, n), this.options = e({ ca_from_url: !1 }, r) } return I(t, [{ key: "send", value: function(t, i) { L = t && t.domain || L; var o = e({}, O(), D({ ca_from_url: this.options.ca_from_url }), N(), P || {}, this.conf, t || {}); if ("pageload" === o.tracking_type && (!t || !t.pagetype, this.conf.pagetype = (t || {}).pagetype), A) { var r = JSON.parse(A.getItem("_tracker")) || {},
                                    a = new Date; if (r.clientTime && r.pagetype !== o.pagetype && "pageload" === o.tracking_type && (r.time_on_page = a - new Date(r.clientTime), r.tracking_type = "timeOnPage", w.call(this, v(r))), "pageload" === o.tracking_type) try { A.setItem("_tracker", JSON.stringify(e(!1, o, { clientTime: new Date }))) } catch (s) {} } if (/Guazi|guazi|ganji/i.test(window.navigator.userAgent)) { var c = n(38); return void c.invoke("getDeviceInfo", null, function(t) { t.code || t.error || (o.guid = t.deviceId), w.call(this, v(o), i) }.bind(this)) } return w.call(this, v(o), i) } }, { key: "updateConfig", value: function(t) { e(this.conf, t) } }]), t }();
            W.Cookie = b, W.Utils = z, W.UUID = y, t.exports = W
        })
    },
    36: function(t, e) { "use strict";

        function n(t) { for (var e, n = /([^=?&]+)=?([^&]*)/g, i = {}; e = n.exec(t); i[decodeURIComponent(e[1])] = decodeURIComponent(e[2])); return i }

        function i(t, e) { e = e || ""; var n = []; "string" != typeof e && (e = "?"); for (var i in t) o.call(t, i) && n.push(encodeURIComponent(i) + "=" + encodeURIComponent(t[i])); return n.length ? e + n.join("&") : "" } var o = Object.prototype.hasOwnProperty;
        e.stringify = i, e.parse = n },
    37: function(t, e) { "use strict";
        t.exports = function(t, e) { if (e = e.split(":")[0], t = +t, !t) return !1; switch (e) {
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
                    return !1 } return 0 !== t } },
    38: function(t, e) {
        function n(t) { if (window.WebViewJavascriptBridge) return t(window.WebViewJavascriptBridge); if (window.WVJBCallbacks) return window.WVJBCallbacks.push(t);
            window.WVJBCallbacks = [t]; var e = document.createElement("iframe");
            e.style.display = "none", e.src = "wvjbscheme://__BRIDGE_LOADED__", document.documentElement.appendChild(e), setTimeout(function() { document.documentElement.removeChild(e) }, 0) }

        function i(t) { window.WebViewJavascriptBridge ? t(window.WebViewJavascriptBridge) : document.addEventListener("WebViewJavascriptBridgeReady", function(e, n) { t(window.WebViewJavascriptBridge) }, !1) } var o, r = [],
            a = [];
        Object.defineProperty(window, "WebViewJavascriptBridge", { configurable: !0, enumerable: !0, set: function(t) { t.callHandler && (o = t, r.forEach(function(t) { setTimeout(function() { window.WebViewJavascriptBridge.callHandler.apply(null, t) }, 0) }), a.forEach(function(t) { setTimeout(function() { window.WebViewJavascriptBridge.registerHandler.apply(null, t) }, 0) }), a = [], r = []) }, get: function() { return o } }); var s = /Guazi|guazi|ganji/i.test(window.navigator.userAgent);! function() { s && (window.navigator.userAgent.indexOf("Android") > -1 ? i(function(t) { t._messageHandler || t.init(function(t, e) { var n = { "Javascript Responds": "Wee!" };
                    e(n) }) }) : n(function(t) { window.WebViewJavascriptBridge = t })) }(), e.invoke = function() { window.WebViewJavascriptBridge ? window.WebViewJavascriptBridge.callHandler.apply(this, arguments) : r.push(arguments) }, e.register = function() { window.WebViewJavascriptBridge ? window.WebViewJavascriptBridge.registerHandler.apply(this, arguments) : a.push(arguments) } },
    39: function(t, e, n) {
        (function(e) { "use strict"; var i, o = /^[A-Za-z][A-Za-z0-9+-.]*:\/\//,
                r = { hash: 1, query: 1 };
            t.exports = function(t) { t = t || e.location || {}, i = i || n(23); var a, s = {},
                    c = typeof t; if ("blob:" === t.protocol) s = new i(unescape(t.pathname), {});
                else if ("string" === c) { s = new i(t, {}); for (a in r) delete s[a] } else if ("object" === c) { for (a in t) a in r || (s[a] = t[a]);
                    void 0 === s.slashes && (s.slashes = o.test(t.href)) } return s } }).call(e, function() { return this }()) },
    53: function(t, e, n) {
        function i(t) { var e = this,
                n = $(t.$input);
            this.config = t, this.$input = n, this.cache = {}, n.is(":focus") && this.listenChange(), n.on("focus", function() { e.listenChange() }).on("blur", function() { e.stopListeningChange() }), this.on("change", function() { e.request(n.val().trim()) }) } var o = n(33);
        i.prototype = new o.Events, i.prototype.constructor = i, i.prototype.listenChange = function() { var t = null,
                e = this.$input,
                n = this;
            clearInterval(this.timer), this.timer = setInterval(function() { var i = e.val().trim();
                i !== t && n.emit("change"), t = i }, this.config.changeGap || 300) }, i.prototype.stopListeningChange = function() { clearInterval(this.timer) }, i.prototype.request = function(t) { var e = this,
                n = this.$input; return this.cache[t] ? void this.emit("data", this.cache[t], t) : void this.config.getData(t, function(i) { e.cache[t] = i, n.val().trim() === t && i ? e.emit("data", i, t) : e.trigger("empty", t) }) }, t.exports = i },
    56: function(t, e, n) { e = t.exports = n(1)(), e.push([t.id, 'html{-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;-webkit-tap-highlight-color:transparent}article,aside,blockquote,body,button,code,dd,details,div,dl,dt,fieldset,figcaption,figure,footer,form,h1,h2,h3,h4,h5,h6,header,hgroup,hr,input,legend,li,menu,nav,ol,p,pre,section,td,textarea,th,ul{margin:0;padding:0;border:0;outline:0;vertical-align:baseline}article,aside,details,figcaption,figure,footer,header,hgroup,main,menu,nav,section,summary{display:block}li,ol,ul{list-style:none}h1,h2,h3,h4,h5,h6{font-weight:400}address,b,cite,code,em,i,small,strong{font-style:normal}button,input[type=button],input[type=reset],input[type=submit]{-webkit-appearance:button;-webkit-user-select:none;cursor:pointer}button[disabled],input[disabled]{cursor:default}button::-moz-focus-inner,input::-moz-focus-inner{border:0 none;padding:0}input[type=checkbox],input[type=radio]{-webkik-box-sizing:border-box;box-sizing:border-box}input[type=search]{-webkit-appearance:textfield;box-sizing:content-box}input[type=search]::-webkit-search-cancel-button,input[type=search]::-webkit-search-decoration{-webkit-appearance:none}input:-webkit-autofill,select:-webkit-autofill,textarea:-webkit-autofill{box-shadow:inset 0 0 0 999px #fff}input::-webkit-inner-spin-button,input::-webkit-outer-spin-button{-webkit-appearance:none}textarea{overflow:auto;vertical-align:top;resize:vertical}table{border-collapse:collapse;border-spacing:0}caption,td,th{vertical-align:middle}blockquote,q{quotes:none}blockquote:after,blockquote:before,q:after,q:before{content:"";content:none}a img{border:none}img{display:block}a{color:#000;text-decoration:none;font-size:100%;vertical-align:baseline}a:active,button:focus,input:focus,textarea:focus{outline:0 none}abbr[title],dfn[title]{border-bottom:1px dotted;cursor:help}body{min-width:320px;max-width:768px;margin:0 auto;background-color:#fff;color:#000;font:.14rem/1.5 helvetica neue,tahoma,arial,hiragino sans gb,microsoft yahei,sans-serif;-webkit-tap-highlight-color:transparent;-webkit-font-smoothing:antialiased}button,input,select,textarea{-webkit-appearance:none;appearance:none}input,select{vertical-align:middle}button{outline:0;border:none;background-color:transparent}input::-webkit-input-placeholder,textarea::-webkit-input-placeholder{color:#bfbfbf}del{text-decoration:line-through}input::-webkit-inner-spin-button,input::-webkit-outer-spin-button{-webkit-appearance:none!important;margin:0}.fl{float:left}.fr{float:right}.clearfix:after{content:"";display:table;font:0/0 ;clear:both}.backtop{border-radius:50%;width:.42rem;height:.42rem;background-color:#fff;border:1px solid #dde4ea;position:fixed;right:.14rem;bottom:.62rem;z-index:89;box-shadow:0 0 2px #dde4ea;display:none}.backtop.active{display:block}.backtop i,.year-2017:before{background-image:url(' + n(59) + ");background-size:.18rem auto;display:inline-block}.backtop i{display:block;width:.18rem;height:.18rem;margin:.14rem auto 0}.mask{background-color:#495056;-webkit-opacity:.8;opacity:.8;position:fixed;top:0;left:0;right:0;z-index:99;width:100%;height:100%;display:none}.mask.active{display:block}html{font-size:625%}@media only screen and (min-width:376px) and (max-width:414px){html{font-size:690%}}@media only screen and (min-width:415px) and (max-width:480px){html{font-size:800%}}@media only screen and (min-width:481px){html{font-size:933.33%}}@media only screen and (min-width:561px){html{font-size:1066.67%}}@media only screen and (min-width:641px){html{font-size:1280%}}", ""]) },
    59: function(t, e, n) { t.exports = n.p + "icon.9eaa74d2526e2fc9f1f77f6b66d6528e.png" },
    60: function(t, e, n) { var i = n(53),
            o = n(6),
            r = new o("haoche_index"),
            a = function() { var t = "search_history"; return "KA" != $("#search_list").data("test") && (t += "_KB"), t };
        e.aboutHistory = Widget.define({ events: { 'tap [data-role="item-history"]': "aboutHistory", "tap .history-clear": "clearCache" }, init: function(t) { this.config = t }, aboutHistory: function(t) { var e = $(t.currentTarget),
                    n = { value: e.data("url"), text: e.text(), domain: $(".search-domian").val() };
                c(n) }, clearCache: function() { var t = a();
                r.remove(t), $(".history-clear").hide(), this.config.$hotList.html("") } }), e.search = Widget.define({ events: { 'click [data-role="cleanValue"]': "cleanValue", 'input [data-role="input"]': "isShowAutocomp", 'submit [data-role="searchForm"]': "searchForm", 'click [ data-role="search"]': "searchForm", 'blur [data-role="input"]': "blurTracker" }, init: function(t) { var e = this;
                this.config = t, this.autocomplete = new i({ $input: t.$input, getData: function(n, i) { n = n.toLowerCase(), 0 === n.length && s(t), e.filter(n, i) } }), this.autocomplete.on("data", function(n) { t.$hotList.html(e.renderItem(n)) }), s(t), $(".js-source-focus").focus(), this.config.$cleanValue.hide(), this.test = $("#search_list").data("test"); var n = $("#search_list").data("domain");
                this.pathUri = n ? "/" + n + "/buy" : "/www/buy" }, filter: function(t, e) { if (!t) return e(null); var n = $('[data-role="input"]').data("source");
                n && e(n.filter(function(e) { return e.pinyin.toLowerCase().indexOf(t) !== -1 || e.text.toLowerCase().indexOf(t) !== -1 }).slice(0, 10)) }, renderItem: function(t) { var e = this; return 0 === t.length ? ($(".search-result").show(), $(".history-clear").hide(), "KA" != e.test ? "" : '<li><a href="javascript:void(0);">未找到符合条件的二手车!</a></li>') : t.map(function(t) { if ($(".search-result").show(), $(".history-clear").hide(), $("#search_history .row-list").removeClass("history-list"), "KA" != e.test) var n = ['<li data-role="item-history" data-url="' + e.pathUri + "/_" + t.text + '/"><a href="javascript:void(0);">' + t.text + "</a></li>"];
                    else var n = ['<li data-role="item-history" data-url="' + t.url + '"><a href="javascript:void(0);">' + t.text + "</a></li>"]; return n.join("") }).join("\n") }, cleanValue: function() { this.config.$cleanValue.hide(), this.config.$input.val(""), $(".search-result").hide(), $(".js-source-focus").focus() }, isShowAutocomp: function() { 0 !== this.config.$input.val().length ? this.config.$cleanValue.show() : this.config.$cleanValue.hide() }, searchForm: function() { var t = this.config.$input.val(); if (t = t.replace(/"|'|<|>/g, ""), t = t.substr(0, 24))
                    if ("KA" != this.test) { var e = this.pathUri + "/_" + t + "/";
                        i = { value: e, text: t }, c(i) } else { var n = this.config.$hotList.find("li:eq(0)"),
                            i = {};
                        n.attr("data-role") && void 0 !== n.text() && (i = { value: n.data("url"), text: n.text() }, c(i)) }
                return !1 }, blurTracker: function() { window.tracker.send({ tracking_type: "input", eventid: $("#search_list").data("evid"), target: "搜索", value: $('input[data-role="input"]').val() }) } }); var s = function(t) { var e = a(),
                    n = r.get(e); if (n) { $(".search-result").show(), $(".history-clear").show(); for (var i = n.length, o = "", s = 0; s < i; s++) o += '<li data-role="item-history" data-url="' + n[s].value + '"><a>' + n[s].text + "</a></li>";
                    t.$hotList.html(o) } else t.$hotList.html(""), $(".history-clear").hide() },
            c = function(t) { var e = a(),
                    n = r.get(e); if (n ? (n = n.filter(function(e) { if (e.value !== t.value) return e }), n.unshift(t)) : (n = [], n.unshift(t)), n = n.slice(0, 3), r.set(e, n), window.tracker.send({ tracking_type: "submit", eventid: $("#search_list").data("evid"), value: $('input[data-role="input"]').val() }), t.domain) var i = t.value.replace(/\/[a-z]+(\/.*\/)/, "/" + t.domain + "$1");
                else var i = t.value; var o = $("#search_list").data("domain"),
                    s = i.split("/");
                s[1] = o ? o : "www", i = s.join("/"), "KA" != $("#search_list").data("test") && (i = i.indexOf("?") == -1 ? i + "?input=1" : i + "&input=1"), window.location.href = i };
        e.initData = function() { target = $("#search_input"); var t = new Date,
                e = "" + t.getFullYear() + t.getMonth() + t.getDate(),
                n = "search_support_data",
                i = JSON.parse(localStorage.getItem(n)),
                o = i && i.time ? i.time : "",
                r = i && i.data ? i.data : "";
            o == e && "" != r ? target.data("source", r) : $.ajax({ url: "/ajax/?a=json&module=GetSearchSuggestion", type: "GET", data: { city_id: $("#search_list").attr("data-id") }, success: function(t) { target.data("source", t); var i = {};
                    i.time = e, i.data = t, localStorage.setItem(n, JSON.stringify(i)) } }); var a = $("#search_list").attr("data-domain");
            a = a ? a : "www"; var s = "search_hotCar_data_" + a,
                c = JSON.parse(localStorage.getItem(s)),
                l = c && c.time ? c.time : "",
                u = c && c.data ? c.data : ""; if (l == e && "" != u) { if ("" != u.data) { var h = ""; for (var f in u.data) { var d = u.data[f];
                        h += '<li><a href="/' + a + "/" + d.url + '/">' + d.name + "</a></li>" } $(".search-hot").show(), $(".search-hot .lab-list").html(h) } } else $.ajax({ url: "/" + a + "/buy/?act=getHotTag", type: "GET", dataType: "json", data: { num: "6" }, success: function(t) { if ("" != t.data) { var n = ""; for (var i in t.data) { var o = t.data[i];
                            n += '<li><a href="/' + a + "/" + o.url + '/">' + o.name + "</a></li>" } $(".search-hot").show(), $(".search-hot .lab-list").html(n) } var c = {};
                    c.time = e, c.data = t, console.log(r), localStorage.setItem(s, JSON.stringify(c)) } }) } },
    90: function(t, e, n) { var i = n(17),
            o = n(6),
            r = (n(53), n(60).initData);
        new o("haoche_index");
        e.locatingCity = Widget.define({ events: {}, init: function(t) { this.config = t, i.getLocation({ ipFirst: !0, timeout: 1e4 }, function(e, n) { if (n && n.cityDomain && n.cityName) { var i = '<li class="list-item"><a href="' + n.url + '">' + n.cityName + "</a></li>";
                        t.$loading.html(i) } else t.$loading.html('<li class="list-item"><a href="https://m.guazi.com/bj/">北京</a></li>') }) } }), e.vehicleSearch = Widget.define({ init: function(t) { $(".search-ipt").click(function() { r(), $("#search_list").show(), $(".DoesNotContainCity").hide(), $(".head-index").hide(), $(".footer").hide(), $(".footer-2").hide(), $(".appDownIsShow").hide(), $("#top-app-layer").hide(), $("#search_input").focus() }), $(".js-close-search").click(function() { setTimeout(function() { $("#search_list").hide(), $(".DoesNotContainCity").show(), $(".head-index").show(), $(".footer").show(), $(".footer-2").show(), $(".appDownIsShow") && $(".appDownIsShow").show(), $("#top-app-layer") && $("#top-app-layer").show() }, 200) }) } }), e.springFestivalClosed = Widget.define({ events: {}, init: function() { $(".notice-mar").on("click", function() { config.$el.hide() }) } }), e.submitSellPhone = Widget.define({ events: { "click .btn-salecar": "subPhone", 'click [data-role="confimePop"]': "confimePop", "blur .sell-car-phone": "blurTracker" }, init: function() { $("#maskEl").click(function() { $('[data-role="confimePop"]').trigger("click") }) }, getCookie: function(t) { var e, n = new RegExp("(^| )" + t + "=([^;]*)(;|$)"); return (e = document.cookie.match(n)) ? unescape(e[2]) : null }, subPhone: function() { var t = this,
                    e = $(".sell-car-phone"),
                    i = new RegExp(/^1[34578]\d{9}$/); if (e.val())
                    if (isNaN(e.val()) || !i.test(e.val())) { var o = "请填写正确的手机号码哦~";
                        $(".form-warning").html(o).addClass("active") } else { var r = this.getCookie("clueSourceCode");
                        void 0 !== r && "" !== r || (r = "*"); var a = $(".btn-salecar").data("clue-entry");
                        void 0 !== a && "" !== a || (a = "00"); var s = $(".js-check-post-code").attr("data-str"),
                            c = $(".js-check-post-code").attr("data-time"),
                            l = $(".js-check-post-code").attr("data-ip");
                        $(".form-warning").html("").removeClass("active"), $.ajax({ url: "/ajax.php?dir=vehicle&module=SellSubmit", data: { phone: e.val(), source_type: $("input[name=source_type]").val(), source_type_code: r + "#" + a, time: c, token: s, this_ip: l, short_msg: "1" }, type: "post", dataType: "json", success: function(i) { $(".successPop").addClass("active"), $(".resultTips").html(i.msg), i.status ? ($(".resultTips2").html("<p>工作人员将尽快与您联系</p>"), window.tracker.send({ tracking_type: "submit", eventid: "0420030000000093", target: "收车", telephone: e.val(), pre_clue_id: i.clue_id, result: "提交成功" })) : $(".resultTips2").html(""), $("#maskEl").css("z-index", 100).addClass("active"); var o = n(3); if (void 0 != i.scode && "" != i.scode) { var r = t.getCookie("gzCityDomain");
                                    o.send("&city=" + r + "&tel=" + e.val() + "@seller&scode=" + i.scode) } var a = ["_trackEvent", "wap_index_maiche", "submit", "wap_index_maiche_tijiaochenggong"];
                                window._hmt.push(a) }, error: function() { window.alert("网络错误."), window.tracker.send({ tracking_type: "submit", eventid: "0420030000000093", target: "收车", telephone: e.val(), result: "提交失败" }) } }) } else { var o = "忘记填写手机号码了哦~";
                    $(".form-warning").html(o).addClass("active") } return !1 }, confimePop: function() { $(".successPop").removeClass("active"), $("#maskEl").removeClass("active") }, blurTracker: function() { window.tracker.send({ tracking_type: "input", eventid: "0420030000000093", target: "收车", telephone: $(".sell-car-phone").val() }) } }), e.cmsSlide = Widget.define({ init: function() {
                function t(t) { n.eq(t).show().siblings().hide() } var e = 0,
                    n = $(".cms_slide");
                setInterval(function() { e < n.length - 1 ? e++ : e = 0, t(e) }, 2500);
                window.tracker.send({ tracking_type: "show", eventid: "0280000000000116" }) } }), e.gotoCity = Widget.define({ init: function() { var t = $(".js-goto-city"),
                    e = function() { var t = new Date;
                        t.setTime(t.getTime() + 864e5), document.cookie = "index_notgo=1;path=/;domain=.guazi.com;expires=" + t.toGMTString() };
                t.length > 0 && (setTimeout(function() { t.addClass("active"), $("#maskEl").addClass("active"); var e = ["_trackEvent", "wap_index_gotocity", "show", "wap_index_gotocity_show"];
                    window._hmt.push(e) }, 1e3), t.find(".popup-city-btn1").tap(function() { setTimeout(function() { t.removeClass("active"), $("#maskEl").removeClass("active"), e() }, 100) }), $("#maskEl").tap(function() { t.find(".popup-city-btn1").trigger("tap") }), $(".popup-city-btn2").tap(function() { var t = ["_trackEvent", "wap_index_gotocity", "submit", "wap_index_gotocity_submit"];
                    window._hmt.push(t), e() })) } }), e.getOldListUrl = Widget.define({ init: function() { var t = localStorageSubstitute.getItem("listUrl"); if (t) { var e = window.location.pathname,
                        n = e.split("/"),
                        i = t.split("/"),
                        o = n[1],
                        r = i[1];
                    o == r && $("#buy_list").attr("href", t) } } }), e.disDownloadApp = Widget.define({ init: function() { $(".usericon").click(function() { $(".js-sub-app-show-new").addClass("active"), $("#maskEl").addClass("active"); var t = $("#tancengPic").attr("class");
                    $("#tancengPic").removeClass(t).addClass("imguser"), $("#downLoadUrl").attr("data-gzlog", "tracking_type=click&eventid=1110432200000002") }) } }), e.getSellCarNum = Widget.define({ init: function() { return $.ajax({ url: "/www/buy/www/?act=getNum", data: {}, type: "get", dataType: "json", success: function(t) { if (0 == t.code) { $el = $(".numberspan"); var e = t.num;
                            e = (e / 1e4).toFixed(2), $el.html(e) } }, error: function() { window.tracker.send({ tracking_type: "get", eventid: "xx", target: "newIndex", result: "首页获取车源总数失败" }) } }), !1 } }), e.slideBanner = Widget.define({ init: function(t) { var e = this;
                this.$scorll = $(t.$scorll), this.$list = $(t.$list), this.$item = $(t.$item), this.startX = 0, this.startY = 0, this.touchX = 0, this.isEnd = 0, $("body").on("touchstart", '[data-role="item"]', function(t) { e.startX = t.touches[0].pageX, e.startY = window.scrollY }), $("body").on("touchmove", '[data-role="item"]', function(t) { var n = e.startX - t.touches[0].pageX;
                    e.$scorll = $(this).parents('[data-role="scroll"]'); var i = e.$scorll.width() + e.$scorll.scrollLeft();
                    e.isEnd = 0, e.$list = $(this).parents('[data-role="list"]'), i - e.$list.width() >= 0 && (e.isEnd = 1, e.$list.find(".morecar").show()), e.touchX = n }), $("body").on("touchend", '[data-role="item"]', function(t) { var n = e.$list.attr("data-href"); if (e.isEnd && e.touchX >= 0) return e.$scorll.scrollLeft(0), setTimeout(function() { window.location.href = n }, 0), !1 }) } }), e.closeBottomBox = Widget.define({ init: function() { $(".bottombox .close").click(function() { $(".bottombox").removeClass("active") }) } }), e.saveStorageCityHistory = Widget.define({ init: function() { var t = window.localStorageSubstitute,
                    e = "",
                    n = t.getItem("city_history");
                n || (n = ""), e = n; var i = $('input[name="city_history"]').val(); if (i && "www" != i) { var o = i ? this.mergeStr(i, n, 3) : e;
                    e = o } t.setItem("city_history", e) }, mergeStr: function(t, e, n) { var i = e.split("_"),
                    o = [];
                o[0] = t; var r = n - 1; for (var a in i) { var s = i[a]; if (o.indexOf(s) == -1 && (o[o.length] = s, --r <= 0)) break } return o.join("_") } }), e.showStorageCityHistory = Widget.define({ init: function() { var t = window.localStorageSubstitute,
                    e = t.getItem("city_history"); if (e) { var n = e.split("_"),
                        i = ""; for (var o in n)
                        if ("" != n[o]) { var r = '[data-domain="' + n[o] + '"]'; if ($(r).length > 0) { var a = $(r).last().attr("href"),
                                    s = $(r).last().attr("data-domain"),
                                    c = $(r).last().html();
                                $(r).last().hasClass("active") ? "active" : "";
                                i += '<li class="list-item" >', i += '<a href="' + a + '" data-gzlog="tracking_type=click&amp;eventid=1110200000000023&amp;historycity=' + s + '" >', i += c, i += "</a></li>" } }
                    $(".j-city-history").show().html(i) } } }), e.changeTab = Widget.define({ init: function() {
                function t(t) { for (var i = 0; i < e.length; i++) e[i] == t ? (e[i].className = "on", n[i].className = "on") : (e[i].className = "", n[i].className = "") } for (var e = document.getElementById("tab").getElementsByTagName("li"), n = document.getElementById("tabcon").getElementsByTagName("ul"), i = 0; i < e.length; i++) e[i].onclick = function() { t(this) } } }), e.showAppGuid = Widget.define({ init: function() {
                function t() { var t = $(".j-plateForm").val(),
                        e = "";
                    e = "ios" === t ? "https://m.guazi.com/misc/guaziapp/?from=guazi" : "https://m.guazi.com/misc/guaziapp/?ca_s=app_self&ca_n=symcyl&scode=10105338431", window.location.href = "guazi://", setTimeout(function() { window.location.href = e }, 1e3) } var e = new Date,
                    n = "" + e.getFullYear() + e.getMonth() + e.getDate(),
                    i = localStorageSubstitute.getItem("wap_mask_index");
                i && i.indexOf(n) != -1 ? $(".app-guid").remove() : ($("#maskEl").addClass("active"), $(".app-guid").addClass("active")), $(".app-guid-close").click(function() { $("#maskEl").removeClass("active"), $(".app-guid").removeClass("active"), localStorageSubstitute.setItem("wap_mask_index", n + "#1") }), $(".app-guid").click(function() { $(".app-guid").hasClass("active") && t() }), $("#maskEl").click(function() { $("#maskEl").removeClass("active"), $(".app-guid").removeClass("active"), localStorageSubstitute.setItem("wap_mask_index", n + "#1") }), $(".j-app-guid-open").click(function() { t() }) } }), e.recommendShowSendLogPoint = Widget.define({ init: function() { var t = $(".j-recommend-show").offset().top,
                    e = !1;
                $(document).on("scroll", function() { var n = $(window).scrollTop() + $(window).height() - 100; if (n > t && !e) { var i = $("#recommendCarIds").val();
                        window.tracker.send({ tracking_type: "scrollPage", eventid: "1110200000000025", carids: i }), e = !0 } }) } }) },
    177: function(t, e, n) { e = t.exports = n(1)(), e.i(n(56), ""), e.push([t.id, '.heading{z-index:100;position:relative;width:100%;height:.45rem;background-color:#fff;overflow:hidden}.heading h1{font-size:.16rem;font-weight:500;line-height:.44rem;text-align:center;text-overflow:ellipsis;white-space:nowrap;margin:0 .56rem;overflow:hidden;color:#495056}.heading .back{position:absolute;top:0;left:0;text-indent:-1rem;overflow:hidden;height:.45rem;width:.45rem}.heading .back:before{left:0;-webkit-transform:rotate(-135deg);transform:rotate(-135deg);content:"";position:absolute;top:50%;width:.1rem;height:.1rem;border-top:1px solid #495056;border-right:1px solid #495056;margin:-.06rem 0 0 .16rem}.column,.other-search{background-color:#fff;overflow:hidden}.column-head{position:relative;line-height:.2rem;overflow:hidden;background-color:#f1f3f6;padding:0 .14rem}.column-title{float:left;color:#757f89;font-size:.1rem;overflow:hidden}.column-body{background-color:#fcfcfc}.list{position:relative;overflow:hidden}.list .list-item{-ms-box-sizing:border-box;box-sizing:border-box}.list:after{content:"";position:absolute;right:0;bottom:0;left:0;height:1px}.city .list .list-item a{display:block;line-height:.5rem;text-overflow:ellipsis;white-space:nowrap;padding:0 .04rem;overflow:hidden;color:#495056;font-size:.15rem;position:relative;margin:0 .1rem}.city .list .list-item a:after{content:"";border-bottom:1px solid #dbdee3;position:absolute;top:0;left:0;box-sizing:border-box;width:200%;height:200%;-webkit-transform:scale(.5);transform:scale(.5);-webkit-transform-origin:left top;transform-origin:left top;z-index:1}.city .list .list-item:last-child a:after{border-bottom:0}.locatingCity .list-item li{border-bottom:0;-ms-box-sizing:border-box;box-sizing:border-box}.subtitle{background-color:#f1f3f6;padding:0 .14rem;line-height:.2rem;color:#757f89;font-size:.1rem}.aside-letter{position:fixed;right:0;top:0;background-color:hsla(0,0%,100%,.5);height:100%;width:.2rem;z-index:66}.aside-letter .letter-list{position:absolute;top:50%;right:0;margin-top:-2rem}.letter-list li{width:.2rem;font-size:.11rem;line-height:.16rem;color:#757f89;text-align:center}', ""]) },
    210: function(t, e, n) { var i = n(177); "string" == typeof i && (i = [
            [t.id, i, ""]
        ]);
        n(2)(i, {});
        i.locals && (t.exports = i.locals) },
    462: function(t, e, n) { var i = n(56); "string" == typeof i && (i = [
            [t.id, i, ""]
        ]);
        n(2)(i, {});
        i.locals && (t.exports = i.locals) }
});