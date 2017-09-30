! function(t) {
    function e(o) { if (i[o]) return i[o].exports; var n = i[o] = { exports: {}, id: o, loaded: !1 }; return t[o].call(n.exports, n, n.exports, e), n.loaded = !0, n.exports }
    var i = {};
    return e.m = t, e.c = i, e.p = "//sta.guazistatic.com/c2c_wap/", e(0)
}([function(t, e, i) {
            function o(t, e) {
                if (t > 0 && window.localStorageSubstitute.setItem("tab1Top", $(window).scrollTop()), $(".head-tab a").eq(t).addClass("active").siblings().removeClass("active"), $(".main-layout .layout-item").eq(t).addClass("active").siblings().removeClass("active"), 2 == t ? ($(".second-tab").addClass("active"), $(".second-tab a").eq(e).addClass("active").siblings().removeClass("active"), $(".third-content .third-tab").eq(e).addClass("active").siblings().removeClass("active")) : $(".second-tab").removeClass("active"), 0 == t) {
                    var i = window.localStorageSubstitute.getItem("tab1Top");
                    $(window).scrollTop(i), 0 == i && ($(".topnav-embed").addClass("active"), $(".topnav-float").removeClass("active"))
                } else $(window).scrollTop(0), $(".topnav-float").addClass("active"), $(".topnav-embed").removeClass("active");
                if (1 == t) {
                    var o = $(".j-chekuang-car-thrD-show").closest(".report-img").find(".j-pic-index").text() - 1;
                    $(".j-chekuang-car-thrD-show").trigger("init3DShow", window.initPositionList[o])
                }
            }
            i(164), i(50), i(92);
            var n = i(98),
                r = i(10);
            r.backToTop.setEl(".backToTop"), i(13);
            var a = i(19);
            if (a.slideBanner.setEl(".imgBanner"), a.slideBanner.extend({}).init(".imgBanner1"), a.slideBanner.extend({}).init(".imgBanner2"), a.slideBanner.extend({}).init(".imgBanner3"), a.slideBanner.extend({}).init("#responsiveBanner"), a.slideBanner.extend({}).init("#carImages"), navigator.userAgent.match("Guazi")) {
                var s = i(49);
                s.register("back", function(t, e) {
                    var i = window.document.referrer,
                        o = /guaziapp[.-]m.guazi.com|sobot.com/;
                    o.test(i) ? (window.history.go(-1), e({ preventDefault: !0 })) : e({ preventDefault: !1 })
                })
            }
            $(function() {
                i(5).init(), i(7).init();
                var t = $("#recommendCarIds").val();
                window.tracker.send({ tracking_type: "show", eventid: "0330230000000152", carids: t }), $(".j-deal-downLoad").click(function() {
                    window.location.href = "guazi://";
                    var t = $(".j-deal-downLoad").attr("data-downLoad-url");
                    setTimeout(function() { window.location.href = t }, 2e3)
                }), $(document).on("click", ".head-tab a", function() {
                    var t = $(this).index();
                    t > 0 ? $(".topnav-embed").removeClass("active") : 0 == $(window).scrollTop() && $(".topnav-float").removeClass("active"), o(t)
                }), $(document).on("click", ".second-tab a", function() {
                    var t = $(this).index();
                    o(2, t)
                }), $(document).on("click", ".j-show-report", function() { o(1) }), $(document).on("click", ".j-show-second-conf", function() { o(2, 1) }), $(document).on("click", ".j-show-faq", function() {
                    o(2, 2);
                    var t = $(this).attr("data-scrollPosition");
                    1 == t ? window.scrollTo(0, 350) : 2 == t && window.scrollTo(0, 280)
                }), $(document).on("click", ".j-showPf-new", function() { $("#maskEl").trigger("click"), o(2, 2), window.scrollTo(0, 280) }), $(document).on("click", ".j-head-back", function() {
                    var t = $(".head-tab a").eq(0).hasClass("active");
                    t ? window.history.go(-1) : (o(0), window.localStorageSubstitute.setItem("slideFromTab1", 0), $(".head-tab").find(".j-slide-head").show(), $(".head-tab").find(".j-slide-head-1").hide())
                }), $(document).on("click", ".j-scroll-save-location", function() {
                    var t = $(".j-head-tab-chekuang").hasClass("active"),
                        e = $(".j-head-tab-xiangqing").hasClass("active");
                    if (t) window.localStorageSubstitute.setItem("selectTab", 1), window.localStorageSubstitute.setItem("tabTop", $(window).scrollTop());
                    else if (e) {
                        var i = $(".second-tab").find("a.active").index();
                        i && window.localStorageSubstitute.setItem("selectSecondTab", i), window.localStorageSubstitute.setItem("selectTab", 2), window.localStorageSubstitute.setItem("tabTop", $(window).scrollTop())
                    }
                }), $(".re-tab li").on("click", function() {
                    var t = $(this).index();
                    $(this).addClass("active").siblings().removeClass("active");
                    var e = $(this).closest(".report-img");
                    if (e.find(".j-container").eq(t).addClass("active").siblings().removeClass("active"), e.find(".j-outer .j-tab-item").eq(0).hasClass("active") && 0 == t) {
                        e.find(".d-tab").addClass("active");
                        var i = e.find(".j-pic-index").text() - 1;
                        e.find(".car-thrD-show").trigger("init3DShow", window.initPositionList[i])
                    } else e.find(".d-tab").removeClass("active")
                }), $(".tab-list .j-tab-item").on("click", function() {
                    var t = $(this).index();
                    $(this).addClass("active").siblings().removeClass("active");
                    var e = $(this).closest(".report-img");
                    if (0 == t) {
                        e.find(".j-outer .j-tab-item").eq(0).hasClass("active") ? e.find(".d-tab").addClass("active") : e.find(".d-tab").removeClass("active"), e.find(".d-tab-3d").hasClass("active") ? (e.find(".j-d-tab-2d").removeClass("active"), e.find(".j-d-tab-3d").addClass("active")) : (e.find(".j-d-tab-2d").addClass("active"), e.find(".j-d-tab-3d").removeClass("active")), e.find(".j-outer .report-thumb").addClass("active"), e.find(".j-outer .j-dotted").addClass("active");
                        var i = e.find(".j-pic-index").text() - 1;
                        e.find(".car-thrD-show").trigger("init3DShow", window.initPositionList[i])
                    } else e.find(".d-tab").removeClass("active"), e.find(".j-d-tab-2d").addClass("active"), e.find(".j-d-tab-3d").removeClass("active"), e.find(".j-outer .report-thumb").removeClass("active"), e.find(".j-outer .j-dotted").removeClass("active");
                    t -= 1, t >= 0 ? e.find(".j-areabox-item").eq(t).addClass("active").siblings().removeClass("active") : e.find(".j-areabox-item").removeClass("active")
                }), $(document).on("click", ".report-list li", function() {
                    var t = ($(this).index(), $(this).attr("data-position"));
                    o(1), window.scrollTo(0, $(t).offset().top - 44)
                }), $(document).on("click", ".j-re-list", function() { $(this).hasClass("active") ? $(this).removeClass("active") : $(this).addClass("active") }), $(document).on("click", ".j-showOfferPrice", function() { $(".j-showOfferPrice").hasClass("active") ? ($(".price-guide").removeClass("active"), $(".j-showOfferPrice").removeClass("active")) : ($(".price-guide").addClass("active"), $(".j-showOfferPrice").addClass("active")) }), "undefined" == typeof $("#initPositionList").val() ? window.initPositionList = [] : window.initPositionList = $.parseJSON($("#initPositionList").val())
            }), $(function() { $(".rang-part").each(function(t, e) { n.slider.setEl(e) }) }), $(function() {
                var t = $("#responsiveBanner"),
                    e = $(".imgBanner a "),
                    i = $(".imgBanner1 a "),
                    o = $(".imgBanner2 a"),
                    n = $(".imgBanner3 a"),
                    r = $("#carImages a "),
                    a = t.width(),
                    s = $(".imgBanner img").width(),
                    c = parseInt(a * (2 / 3)),
                    l = parseInt(s * (2 / 3));
                t.css("height", c + "px"), e.css("height", l + "px"), i.css("height", l + "px"), o.css("height", l + "px"), n.css("height", l + "px"), r.css("height", l + "px")
            }), $(function() {
                var t = window.localStorageSubstitute.getItem("selectTab");
                if (window.localStorageSubstitute.removeItem("selectTab"), t > 0) {
                    var e = window.localStorageSubstitute.getItem("selectSecondTab") ? window.localStorageSubstitute.getItem("selectSecondTab") : 0;
                    window.localStorageSubstitute.removeItem("selectSecondTab"), o(t, e);
                    var i = window.localStorageSubstitute.getItem("tabTop");
                    window.localStorageSubstitute.removeItem("tabTop"), $(window).scrollTop(i)
                }
            }), n.showToast.setEl(".pos-popup"), n.showNotice.setEl(".showNotice"), n.slideUPSkip.setEl(".drag-up-more"), n.slideDOWNSkip.setEl(".drag-down-more"), n.change2d3d.setEl(".d-tab"), n.trans3d.setEl(".j-detail-car-thrD-show"), n.trans3d.extend({}).init(".j-chekuang-car-thrD-show"), n.chooseCars.setEl(".by-the-way");
            var c = i(21);
            c.lazyload.setEl(".lazyload"), n.bargain.setEl(".bargain"), n.confimePop.setEl(".popup-wrap"), n.slideBanner.setEl("body"), r.cancelAppPub.setEl(".js-sub-app-pub"), n.headControl.setEl(".head-group"), n.initDetailPage_v2.setEl(".detail"), n.recommendShowSendClickPoint.setEl(".j-recommend-show"), n.openIm.setEl(".j-open-im");
            ! function() {
                var t = document.createElement("script");
                t.src = "https://hm.baidu.com/hm.js?ea1175f2626bf5b6345bfb823f822ade";
                var e = document.getElementsByTagName("script")[0];
                e.parentNode.insertBefore(t, e)
            }(), Widget.initWidgets([r.backToTop, n.showToast, a.slideBanner, n.showOfferPrice, n.showNotice, c.lazyload, n.confimePop, n.bargain, n.closePop, n.slider, r.cancelAppPub, n.headControl, n.initDetailPage_v2, n.slideUPSkip, n.slideDOWNSkip, n.recommendShowSendClickPoint, n.openIm, n.change2d3d, n.trans3d, n.chooseCars])
        }, function(t, e) {
            t.exports = function() {
                var t = [];
                return t.toString = function() {
                    for (var t = [], e = 0; e < this.length; e++) {
                        var i = this[e];
                        i[2] ? t.push("@media " + i[2] + "{" + i[1] + "}") : t.push(i[1])
                    }
                    return t.join("")
                }, t.i = function(e, i) {
                    "string" == typeof e && (e = [
                        [null, e, ""]
                    ]);
                    for (var o = {}, n = 0; n < this.length; n++) { var r = this[n][0]; "number" == typeof r && (o[r] = !0) }
                    for (n = 0; n < e.length; n++) { var a = e[n]; "number" == typeof a[0] && o[a[0]] || (i && !a[2] ? a[2] = i : i && (a[2] = "(" + a[2] + ") and (" + i + ")"), t.push(a)) }
                }, t
            }
        }, function(t, e, i) {
            function o(t, e) {
                for (var i = 0; i < t.length; i++) {
                    var o = t[i],
                        n = f[o.id];
                    if (n) { n.refs++; for (var r = 0; r < n.parts.length; r++) n.parts[r](o.parts[r]); for (; r < o.parts.length; r++) n.parts.push(l(o.parts[r], e)) } else {
                        for (var a = [], r = 0; r < o.parts.length; r++) a.push(l(o.parts[r], e));
                        f[o.id] = { id: o.id, refs: 1, parts: a }
                    }
                }
            }

            function n(t) {
                for (var e = [], i = {}, o = 0; o < t.length; o++) {
                    var n = t[o],
                        r = n[0],
                        a = n[1],
                        s = n[2],
                        c = n[3],
                        l = { css: a, media: s, sourceMap: c };
                    i[r] ? i[r].parts.push(l) : e.push(i[r] = { id: r, parts: [l] })
                }
                return e
            }

            function r(t, e) {
                var i = g(),
                    o = w[w.length - 1];
                if ("top" === t.insertAt) o ? o.nextSibling ? i.insertBefore(e, o.nextSibling) : i.appendChild(e) : i.insertBefore(e, i.firstChild), w.push(e);
                else {
                    if ("bottom" !== t.insertAt) throw new Error("Invalid value for parameter 'insertAt'. Must be 'top' or 'bottom'.");
                    i.appendChild(e)
                }
            }

            function a(t) {
                t.parentNode.removeChild(t);
                var e = w.indexOf(t);
                e >= 0 && w.splice(e, 1)
            }

            function s(t) { var e = document.createElement("style"); return e.type = "text/css", r(t, e), e }

            function c(t) { var e = document.createElement("link"); return e.rel = "stylesheet", r(t, e), e }

            function l(t, e) {
                var i, o, n;
                if (e.singleton) {
                    var r = v++;
                    i = b || (b = s(e)), o = d.bind(null, i, r, !1), n = d.bind(null, i, r, !0)
                } else t.sourceMap && "function" == typeof URL && "function" == typeof URL.createObjectURL && "function" == typeof URL.revokeObjectURL && "function" == typeof Blob && "function" == typeof btoa ? (i = c(e), o = h.bind(null, i), n = function() { a(i), i.href && URL.revokeObjectURL(i.href) }) : (i = s(e), o = p.bind(null, i), n = function() { a(i) });
                return o(t),
                    function(e) {
                        if (e) {
                            if (e.css === t.css && e.media === t.media && e.sourceMap === t.sourceMap) return;
                            o(t = e)
                        } else n()
                    }
            }

            function d(t, e, i, o) {
                var n = i ? "" : o.css;
                if (t.styleSheet) t.styleSheet.cssText = x(e, n);
                else {
                    var r = document.createTextNode(n),
                        a = t.childNodes;
                    a[e] && t.removeChild(a[e]), a.length ? t.insertBefore(r, a[e]) : t.appendChild(r)
                }
            }

            function p(t, e) {
                var i = e.css,
                    o = e.media;
                e.sourceMap;
                if (o && t.setAttribute("media", o), t.styleSheet) t.styleSheet.cssText = i;
                else {
                    for (; t.firstChild;) t.removeChild(t.firstChild);
                    t.appendChild(document.createTextNode(i))
                }
            }

            function h(t, e) {
                var i = e.css,
                    o = (e.media, e.sourceMap);
                o && (i += "\n/*# sourceMappingURL=data:application/json;base64," + btoa(unescape(encodeURIComponent(JSON.stringify(o)))) + " */");
                var n = new Blob([i], { type: "text/css" }),
                    r = t.href;
                t.href = URL.createObjectURL(n), r && URL.revokeObjectURL(r)
            }
            var f = {},
                u = function(t) { var e; return function() { return "undefined" == typeof e && (e = t.apply(this, arguments)), e } },
                m = u(function() { return /msie [6-9]\b/.test(window.navigator.userAgent.toLowerCase()) }),
                g = u(function() { return document.head || document.getElementsByTagName("head")[0] }),
                b = null,
                v = 0,
                w = [];
            t.exports = function(t, e) {
                e = e || {}, "undefined" == typeof e.singleton && (e.singleton = m()), "undefined" == typeof e.insertAt && (e.insertAt = "bottom");
                var i = n(t);
                return o(i, e),
                    function(t) {
                        for (var r = [], a = 0; a < i.length; a++) {
                            var s = i[a],
                                c = f[s.id];
                            c.refs--, r.push(c)
                        }
                        if (t) {
                            var l = n(t);
                            o(l, e)
                        }
                        for (var a = 0; a < r.length; a++) {
                            var c = r[a];
                            if (0 === c.refs) {
                                for (var d = 0; d < c.parts.length; d++) c.parts[d]();
                                delete f[c.id]
                            }
                        }
                    }
            };
            var x = function() { var t = []; return function(e, i) { return t[e] = i, t.filter(Boolean).join("\n") } }()
        }, function(t, e, i) {
            function o() { var t = d.generateUUIDV4(); return t && c.set("__utmganji_v20110909", t, { expires: 6307200, path: "/", domain: ".guazi.com" }), h.set("__utmganji_v20110909", t), t }

            function n() { return u.ifid }

            function r() {
                var t, e = u.ca_source,
                    i = u.ca_name;
                return e && i && (t = { ca_source: e, ca_name: i }, c.set("cainfo", JSON.stringify(t), { path: "/", domain: ".guazi.com" })), t
            }

            function a(t) { return t.replace(/^\?/, "").split("&").map(function(t) { return t.split("=") }).reduce(function(t, e) { return e[0].trim() && (t[e[0]] = e[1]), t }, {}) }

            function s() {
                var t, e, i = window.navigator.userAgent || "",
                    o = i.match(/Mozilla\/5.0 \((.*)\) AppleWebKit(.*?) .*like Gecko\)([\S]*) (.*) Safari.*/);
                if (!o || !o[1]) return "UNKNOW " + i;
                try { return e = /like Mac OS X/.test(o[1]) ? "iOS " + ((o[1].match(/([\d_]*)* like Mac OS X/) || [])[1] || "") : /Android/.test(o[1]) ? (o[1].match(/Android.*?;/) || [])[0] : "unknow", t = (o[1].match(/^(iPad[^;]*|iPhone[^;]*|iPod[^;]*)/) || o[1].match(".*;(.*)") || [])[1], t = t ? t.trim() : "", i = ["device:" + t, "os:" + e, "webkit:" + (o[2] || "").replace("/", ""), "browser:" + o[4], "lang:" + (window.navigator.language || window.navigator.browserLanguage)].join("|") } catch (n) { return "UNKNOW " + i }
            }
            var c = i(4),
                l = i(6),
                d = i(11),
                p = {},
                h = new l("tracker");
            try { p = JSON.parse(c.get("GanjiUserInfo") || "{}") } catch (f) { p = {} }
            var u = a(window.location.search),
                m = "analytics.guazi.com",
                g = $("head").data("gjch") || "-",
                b = $("head").data("gc") || "-",
                v = c.get("__utmganji_v20110909") || h.get("__utmganji_v20110909") || o() || "-",
                w = c.get("GANJISESSID") || "-",
                x = c.get("ifid") || n() || "-",
                k = $("head").data("cainfo") || r() || c.get("cainfo") || {},
                y = p.user_id,
                z = s(),
                C = document.referrer ? encodeURIComponent(document.referrer) : "-",
                j = encodeURIComponent(k.ca_name || "-"),
                S = encodeURIComponent(k.ca_source || "-"),
                T = encodeURIComponent(k.ca_kw || "-"),
                P = encodeURIComponent(k.ca_id || "-"),
                _ = encodeURIComponent(k.ca_n || "-"),
                E = encodeURIComponent(k.ca_s || "-"),
                I = encodeURIComponent(k.ca_i || "-");
            e.listen = function() {
                $("body").on("tap", "[data-gjalog]", function(t) {
                    var i, o = $(t.currentTarget).attr("data-gjalog") || "";
                    (i = /^(\d*)$/.exec(o.split("@")[0])) && "1" === i[1].substr(-2)[0] ? e.send(o.replace(/\d{8}($|@)/, "00000010$1")) : o.indexOf("atype=click") !== -1 && e.send(o)
                })
            };
            var D = {};
            e.sendShow = function() {
                $("[data-gjalog]").each(function() {
                    var t, i = $(this).data("gjalog");
                    if (!D[i])
                        if (D[i] = !0, (t = /^(\d*)$/.exec(i.split("@")[0])) && "1" === t[1].substr(-1)[0]) e.send(i.replace(/\d{8}($|@)/, "00000001$1"));
                        else if (i.indexOf("atype=") !== -1) {
                        var o = i.split("atype=");
                        o[1] && o[1].indexOf("show") !== -1 && e.send(i)
                    }
                })
            }, e.send = function(t, e) {
                function i(t) { n || (n = !0, e && e(t || null)) }
                var o = new Image,
                    n = !1,
                    r = "//" + m + "/wape.gif?";
                t = t && /^\d*$/.test(t.split("@")[0]) ? "ge=" + t : "gjalog=" + t, r += ["gjch=" + g, "gc=" + b, "uuid=" + v, "gjuser=" + y, "sid=" + w, "ca_name=" + j, "ca_source=" + S, "ca_kw=" + T, "ca_id=" + P, "ca_n=" + _, "ca_s=" + E, "ca_i=" + I, "refer=" + C, "ua=" + z, t, "ifid=" + x, "rnd=" + Math.random()].join("&"), o.onload = function() { i() }, o.onerror = function() { i(new Error("network error")) }, setTimeout(function() { i(new Error("timeout")) }, 1e4), o.src = r
            }
        }, function(t, e) {
            function i(t, e) {
                var i = {};
                if (o(t) && t.length > 0)
                    for (var n, r, s, l = e ? c : a, d = t.split(/;\s/g), p = 0, h = d.length; p < h; p++) {
                        if (s = d[p].match(/([^=]+)=/i), s instanceof Array) try { n = c(s[1]), r = l(d[p].substring(s[1].length + 1)) } catch (f) {} else n = c(d[p]), r = "";
                        n && (i[n] = r)
                    }
                return i
            }

            function o(t) { return "string" == typeof t }

            function n(t) { return o(t) && "" !== t }

            function r(t) { if (!n(t)) throw new TypeError("Cookie name must be a non-empty string") }

            function a(t) { return t }
            var s = e,
                c = decodeURIComponent,
                l = encodeURIComponent;
            s.get = function(t, e) { r(t), e = "function" == typeof e ? { converter: e } : e || {}; var o = i(document.cookie, !e.raw); return (e.converter || a)(o[t]) }, s.set = function(t, e, i) {
                r(t), i = i || {};
                var o = i.expires,
                    a = i.domain,
                    s = i.path;
                i.raw || (e = l(String(e)));
                var c = t + "=" + e,
                    d = o;
                return "number" == typeof d && (d = new Date(Date.now() + 1e3 * o)), d instanceof Date && (c += "; expires=" + d.toGMTString()), n(a) && (c += "; domain=" + a), n(s) && (c += "; path=" + s), i.secure && (c += "; secure"), document.cookie = c, c
            }, s.remove = function(t, e) { return e = e || {}, e.expires = new Date(0), this.set(t, "", e) }
        }, function(t, e) {
            e.init = function() {
                var t = $("[baidu_alog]");
                t.each(function() {
                    var t = $(this);
                    $.each(t.attr("baidu_alog").split("#"), function(e, i) {
                        var o = ["_trackEvent"].concat(i.split("&"));
                        t.unbind(o[2]).bind(o[2], function() { window._hmt.push(o) })
                    })
                })
            }
        }, function(t, e) {
            function i(t) { this.namespace = t }
            var o = window.GJLocalStorage || window.localStorage;
            i.prototype.set = function(t, e) {
                var i = this.dump();
                i[t] = { value: e }, i = JSON.stringify(i);
                try { o.setItem(this.namespace, i) } catch (n) { return !1 }
                return o.getItem(this.namespace) === i
            }, i.prototype.get = function(t) { var e = this.dump(); if (e[t]) return e[t].value }, i.prototype.remove = function(t) { this.set(t, void 0) }, i.prototype.clear = function() { o.removeItem(this.namespace) }, i.prototype.dump = function() { var t = o.getItem(this.namespace) || "{}"; try { t = JSON.parse(t) } catch (e) { t = {} } return t }, t.exports = i
        }, function(t, e, i) {
            var o = i(3);
            e.init = function() {
                o.listen();
                var t = function(t) { var e, i = new RegExp("(^| )" + t + "=([^;]*)(;|$)"); return (e = document.cookie.match(i)) ? unescape(e[2]) : null },
                    e = $("[guazi_alog]"),
                    n = i(3),
                    r = t("gzCityDomain");
                e.each(function() {
                    var t = $(this);
                    $.each(t.attr("guazi_alog").split("#"), function(e, i) {
                        var o = i.split("&"),
                            a = o[1] ? o[1] : "click";
                        t.unbind(a).bind(a, function() { n.send("&city=" + r + "&geid=" + o[0], "") })
                    })
                })
            }
        }, function(t, e) {
            function i() { var t = "widget" + ++s; return a[t] = { defer: $.Deferred() }, t }

            function o(t) {
                $(function() {
                    $.each(t.elements.slice(t.elength), function(e, o) {
                        var n = $(o);
                        if (n[0]) {
                            var r = n.data(),
                                s = {},
                                c = n.data("widget-id");
                            c || (c = i(), n.data("widget-id", c)), r.$el = n, n.find("[data-role]").each(function() {
                                var t = $(this).data("role");
                                s[t] || (s[t] = []), s[t].push(this)
                            }), $.each(s, function(t, e) { r["$" + t] = $(e) });
                            var l = new t(r);
                            n.data("widget", l), t.elength++, a[c].instance = l, a[c].defer.resolve(l)
                        }
                    })
                })
            }

            function n(t, e, i) {
                t = $(t), $.each(e, function(e, o) {
                    var n = e.indexOf(" "),
                        r = n === -1 ? e : e.substr(0, n),
                        a = n === -1 ? "" : e.substr(n, e.length - 1);
                    o && (o = "function" == typeof o ? $.proxy(o, i) : $.proxy(i[o], i), a ? t.on(r, a, o) : t.on(r, o))
                })
            }
            var r = e,
                a = {},
                s = 0;
            r.ready = function(t, e) {
                "string" == typeof t && (t = [t]);
                var o = [].reduce.call(t, function(t, e) {
                    var o = $(e),
                        n = null;
                    return 1 === o.size() ? (o.data("widget-id") || o.data("widget-id", i()), n = a[o.data("widget-id")].defer.promise()) : o.size() >= 1 ? (n = $.Deferred(), r.ready(o, function() { n.resolve([].slice.call(arguments)) })) : (n = $.Deferred(), n.reject(null)), t.push(n), t
                }, []);
                $.when.apply($, o).done(function() { e.apply(window, arguments) })
            }, r.initWidgets = function(t) { $.each(t, function(t, e) { r.initWidget(e) }) }, r.initWidget = function(t) { o(t) }, r.define = function(t) {
                function e(e) { var i = $.extend({}, t); return $(e.$el).length && i.events && n(e.$el, i.events, i), i.init(e), i }
                return t = t || {}, t.events = t.events || {}, t.init = t.init || function(t) { this.config = t }, e.elength = 0, e.elements = [], e.setEl = function(t) { if (!t) throw new Error("type Error"); return $.isArray(t) ? e.elements = e.elements.concat(t) : e.elements.push(t), e.elements }, e.extend = function(e) { return e = $.extend({}, t, e), e.super_ = $.extend({}, t), e.events = $.extend({}, t.events, e.events), r.define(e) }, e.init = function(t) { this.setEl(t), o(this) }, e.define = $.extend({}, t), e
            }
        }, function(t, e) {
            t.exports = Widget.define({
                events: { touchstart: "stop", touchend: "loop", 'click [data-role="prev"]': "prev", 'click [data-role="next"]': "next" },
                init: function(t) { t.interval = t.interval || 1e3, this.config = t, this.index = 0, this.total = $(t.$item).length, this.loop() },
                prev: function() { this.slideTo(this.index - 1, "prev") },
                next: function() { this.slideTo(this.index + 1, "next") },
                stop: function() { clearInterval(this.timer) },
                loop: function() {
                    if ("noloop" !== this.config.loop) {
                        var t = this;
                        clearInterval(this.timer), this.timer = setInterval(function() { t.loopFn() }, this.config.interval)
                    }
                },
                slideTo: function(t, e) {
                    var i = this;
                    if (!i.animating) {
                        t = t >= this.total ? 0 : t, t = t < 0 ? this.total - 1 : t;
                        var o = this.slideFn(t, e);
                        o ? (this.animating = !0, o.always(function() { i.index = t, i.animating = !1 })) : this.index = t
                    }
                },
                loopFn: function() { this.slideTo(this.index + 1, "next") }
            })
        }, function(t, e, i) {
            e.init = function() { e.responseTouchState(), Widget.initWidgets(), i(27).async("js/util/tracker.js", function(t) { t.listen(), window.cproStyleApi || t.send("/uniontgm/baidu/no_ad") }) }, e.header = Widget.define({
                    init: function(t) {
                        var e = $(t.$el);
                        this.originTop = e.offset().top, this.check = this.check.bind(this), this.listen()
                    },
                    fixed: function() { this.isFixed || $("body").addClass("header-fixed"), this.isFixed = !0 },
                    unfixed: function() { this.isFixed && $("body").removeClass("header-fixed"), this.isFixed = !1 },
                    listen: function(t) { t || this.check(), $(window).on("scroll", this.check) },
                    stopListening: function() { $(window).off("scroll", this.check) },
                    check: function() { $(window).scrollTop() > this.originTop ? this.fixed() : this.unfixed() }
                }), e.backToTop = Widget.define({
                    init: function(t) {
                        $(window).on("scroll", function() { $(window).scrollTop() > window.innerHeight ? (t.$el.show(), t.$el.addClass("active")) : (t.$el.hide(), t.$el.removeClass("active")) }), t.$el.on("click", function() {
                            var t = $(window).scrollTop(),
                                e = parseInt(t / 20, 10);
                            setTimeout(function() {
                                var i = 1,
                                    o = setInterval(function() {
                                        var o = t - i * e;
                                        o <= 0 ? $(window).scrollTop(0) : $(window).scrollTop(o), i++
                                    }, 5);
                                setTimeout(function() { clearInterval(o), $(window).scrollTop(0) }, 150)
                            }, 300)
                        })
                    }
                }), e.responseTouchState = function() { $("body").on("touchstart", "a, .js-touch-state", function() { $(this).addClass("touch") }).on("touchmove", "a, .js-touch-state", function() { $(this).removeClass("touch") }).on("touchend", "a, .js-touch-state", function() { $(this).removeClass("touch") }).on("touchcancel", "a, .js-touch-state", function() { $(this).removeClass("touch") }) }, e.showAppPub = function(t, e) {
                    var i = new Date,
                        o = "" + i.getFullYear() + i.getMonth() + i.getDate(),
                        n = 1,
                        r = new RegExp("[0-9]+$"),
                        a = localStorageSubstitute.getItem(t);
                    a && a.indexOf(o) > -1 ? (n = parseInt(r.exec(a)) + 1, localStorageSubstitute.setItem(t, o + "#" + n), e > 0 && n == e && 1 == $("#maskEl").length && $("#maskEl").is(":hidden") && 1 == $("#app-pub").length && setTimeout(function() { $("#maskEl").css("z-index", 100).addClass("active"), $("#app-pub").addClass("active") }, 1e3)) : localStorageSubstitute.setItem(t, o + "#" + n), $("#maskEl").click(function() { return $("#maskEl").css("z-index", 99).removeClass("active"), $("#app-pub").removeClass("active"), !1 }), $("#app-pub .close-btn").click(function() { $("#maskEl").css("z-index", 99).removeClass("active"), $("#app-pub").removeClass("active") }), $("#app-pub .btn-app").click(function() { $("#maskEl").css("z-index", 99).removeClass("active"), $("#app-pub").removeClass("active"), appurl = $(this).attr("data-url"), window.location.href = appurl })
                }, e.cancelAppPub = Widget.define({ init: function() { $("#maskEl").click(function() { return $("#maskEl").removeClass("active"), $(".js-sub-app-show").removeClass("active"), $(".js-sub-app-show-new").removeClass("active"), $("body").css("overflow", ""), !1 }), $(".js-sub-app-pub .close-btn").click(function() { $("#maskEl").removeClass("active"), $(".js-sub-app-show").removeClass("active"), $(".js-sub-app-show-new").removeClass("active"), $("body").css("overflow", "") }), $(".js-sub-app-pub .btn-app").click(function() { $("#maskEl").removeClass("active"), $(".js-sub-app-show").removeClass("active"), $(".js-sub-app-show-new").removeClass("active"), $("body").css("overflow", ""), appurl = $(this).attr("data-url"), window.location.href = appurl }) } }), e.showTopAppLayer = function(t) {
                    if ($("#top-app-layer").length < 1) return !1;
                    var e = new Date,
                        i = "" + e.getFullYear() + e.getMonth() + e.getDate(),
                        o = localStorageSubstitute.getItem(t);
                    o && o.indexOf(i) != -1 ? ($("#top-app-layer").remove(), $("#top-app-layer").removeClass("active"), $("body").removeClass("bottombox-active")) : ($("#top-app-layer").show(), $("#top-app-layer").addClass("active"), $("body").addClass("bottombox-active")), $("#top-app-layer .close-btn").click(function() { $("#top-app-layer").remove(), $("#top-app-layer").removeClass("active"), $("body").removeClass("bottombox-active"), localStorageSubstitute.setItem(t, i + "#1") }), $("#top-app-layer div").click(function() { window.tracker.send({ tracking_type: "click", eventid: 0x3f45e605ddfc1 }), window.location.href = "guazi://", setTimeout(function() { window.location.href = "http://m.guazi.com/misc/guaziapp/?from=guazi" }, 2e3) }), $("#top-app-layer .dowmload").click(function() { window.location.href = "guazi://", setTimeout(function() { window.location.href = "http://m.guazi.com/misc/guaziapp/?from=guazi" }, 2e3) })
                },
                function() {
                    var t, i = $('<div class="tip"></div>').hide().appendTo("body");
                    e.tip = function(e, o) { return e && i.html(e).show(), o && (clearTimeout(t), t = setTimeout(function() { i.hide() }, o)), $("body").append(i), { setMessage: function(e, o) { i.html(e), o && (clearTimeout(t), t = setTimeout(function() { i.remove() }, o)) }, remove: function() { i.remove() } } }
                }()
        }, function(t, e) {
            e.generateUUIDV4 = function() {
                var t = (new Date).getTime(),
                    e = "xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx".replace(/[xy]/g, function(e) { var i = (t + 16 * Math.random()) % 16 | 0; return t = Math.floor(t / 16), ("x" == e ? i : 7 & i | 8).toString(16) });
                return e
            }
        }, function(t, e) {
            t.exports = Widget.define({
                events: {
                    touchstart: function(t) {
                        var e = $(t.target);
                        if (e.hasClass("icon-range") ? this.$target = e : this.$target = e.parents(".icon-range"), this.config.$el.find(".icon-low").length >= 1) {
                            var i = this.config.$el.find(".icon-low").css("left").replace("%", "");
                            this.active.low = i
                        }
                        if (this.config.$el.find(".icon-high").length >= 1) {
                            var o = this.config.$el.find(".icon-high").css("left").replace("%", "");
                            this.active.high = o
                        }
                        if (this.config.$el.find(".icon-middle").length >= 1) {
                            var n = this.config.$el.find(".icon-middle").css("left").replace("%", "");
                            this.active.mid = n
                        }
                    },
                    touchmove: function(t) {
                        var e = this.config.$el.width(),
                            i = parseInt((t.changedTouches[0].clientX - 15) / e * 100);
                        if (!(i < 0 || i > 100)) {
                            this.config.$el.find(".load-outer").width();
                            this.$target && this.$target.hasClass("icon-low") ? (this.active.low >= this.active.high && i >= this.active.high ? this.active.low = this.active.high : this.active.low = i <= 0 ? 0 : i, parseFloat(this.active.high) - parseFloat(this.active.low) < 5 && (this.active.low = parseFloat(this.active.high) - 5 <= 0 ? 0 : parseFloat(this.active.high) - 5), this.$target.css("left", this.active.low + "%"), this.config.$el.find(".load-inner").css({ left: this.active.low + "%", width: this.active.high - this.active.low + "%" })) : this.$target && this.$target.hasClass("icon-high") ? (this.active.high <= this.active.low && i <= this.active.low ? this.active.high = this.active.low : this.active.high = i >= 100 ? 100 : i, parseFloat(this.active.high) - parseFloat(this.active.low) < 5 && (this.active.high = parseFloat(this.active.low) + 5 >= 100 ? 100 : parseFloat(this.active.low) + 5), this.$target.css("left", this.active.high + "%"), this.config.$el.find(".load-inner").css({ width: this.active.high - this.active.low + "%" })) : this.$target && this.$target.hasClass("icon-middle") && (this.active.mid = i >= 100 ? 100 : i, this.$target.css("left", this.active.mid + "%")), this.config.$el.trigger("moving", this.active)
                        }
                    },
                    touchend: function() {
                        (this.config.$el.find(".icon-low").length >= 1 || this.config.$el.find(".icon-high").length >= 1) && this.config.$el.find(".load-inner").css({ left: this.active.low + "%", width: this.active.high - this.active.low + "%" }), this.$target = null, this.config.$el.trigger("moveend", this.active)
                    }
                },
                active: { low: 0, high: 100, mid: 50 },
                init: function(t) { this.config = t }
            })
        }, function(t, e, i) {
            var o = i(4);
            $(function() { try { window.localStorage.setItem("isPrivateMode", "1"), window.localStorage.removeItem("isPrivateMode"), window.isPrivateMode = !1 } catch (t) { window.isPrivateMode = !0 } window.isPrivateMode ? (window.localStorageSubstitute = new Object, localStorageSubstitute.setItem = function(t, e) { o.set(t, e, { expires: 8640, path: "/", domain: ".guazi.com" }) }, localStorageSubstitute.getItem = function(t) { return o.get(t) }, localStorageSubstitute.removeItem = function(t) { return o.remove(t) }) : window.localStorageSubstitute = window.localStorage })
        }, function(t, e, i) {
            var o = function(t) {
                    var e = function(e, i) { this.el = t(e), this.zoomFactor = 1, this.lastScale = 1, this.offset = { x: 0, y: 0 }, this.options = t.extend({}, this.defaults, i), this.setupMarkup(), this.bindEvents(), this.update(), this.enable() },
                        i = function(t, e) { return t + e },
                        o = function(t, e) { return t > e - .01 && t < e + .09 };
                    e.prototype = {
                        defaults: { tapZoomFactor: 2, zoomOutFactor: 1.3, animationDuration: 300, animationInterval: 5, maxZoom: 5, minZoom: .5, lockDragAxis: !1, use2d: !0, zoomStartEventName: "pz_zoomstart", zoomEndEventName: "pz_zoomend", dragStartEventName: "pz_dragstart", dragEndEventName: "pz_dragend", doubleTapEventName: "pz_doubletap" },
                        handleDragStart: function(t) { this.el.trigger(this.options.dragStartEventName), this.stopAnimation(), this.lastDragPosition = !1, this.hasInteraction = !0, this.handleDrag(t) },
                        handleDrag: function(t) {
                            if (this.zoomFactor > 1) {
                                var e = this.getTouches(t)[0];
                                this.drag(e, this.lastDragPosition), this.offset = this.sanitizeOffset(this.offset), this.lastDragPosition = e
                            }
                        },
                        handleDragEnd: function() { this.el.trigger(this.options.dragEndEventName), this.end() },
                        handleZoomStart: function() { this.el.trigger(this.options.zoomStartEventName), this.stopAnimation(), this.lastScale = 1, this.nthZoom = 0, this.lastZoomCenter = !1, this.hasInteraction = !0 },
                        handleZoom: function(t, e) {
                            var i = this.getTouchCenter(this.getTouches(t)),
                                o = e / this.lastScale;
                            this.lastScale = e, this.nthZoom += 1, this.nthZoom > 3 && (this.scale(o, i), this.drag(i, this.lastZoomCenter)), this.lastZoomCenter = i
                        },
                        handleZoomEnd: function() { this.el.trigger(this.options.zoomEndEventName), this.end() },
                        handleDoubleTap: function(t) {
                            var e = this.getTouches(t)[0],
                                i = this.zoomFactor > 1 ? 1 : this.options.tapZoomFactor,
                                o = this.zoomFactor,
                                n = function(t) { this.scaleTo(o + t * (i - o), e) }.bind(this);
                            this.hasInteraction || (o > i && (e = this.getCurrentZoomCenter()), this.animate(this.options.animationDuration, this.options.animationInterval, n, this.swing), this.el.trigger(this.options.doubleTapEventName))
                        },
                        sanitizeOffset: function(t) {
                            var e = (this.zoomFactor - 1) * this.getContainerX(),
                                i = (this.zoomFactor - 1) * this.getContainerY(),
                                o = Math.max(e, 0),
                                n = Math.max(i, 0),
                                r = Math.min(e, 0),
                                a = Math.min(i, 0);
                            return { x: Math.min(Math.max(t.x, r), o), y: Math.min(Math.max(t.y, a), n) }
                        },
                        scaleTo: function(t, e) { this.scale(t / this.zoomFactor, e) },
                        scale: function(t, e) { t = this.scaleZoomFactor(t), this.addOffset({ x: (t - 1) * (e.x + this.offset.x), y: (t - 1) * (e.y + this.offset.y) }) },
                        scaleZoomFactor: function(t) { var e = this.zoomFactor; return this.zoomFactor *= t, this.zoomFactor = Math.min(this.options.maxZoom, Math.max(this.zoomFactor, this.options.minZoom)), this.zoomFactor / e },
                        drag: function(t, e) { e && (this.options.lockDragAxis ? Math.abs(t.x - e.x) > Math.abs(t.y - e.y) ? this.addOffset({ x: -(t.x - e.x), y: 0 }) : this.addOffset({ y: -(t.y - e.y), x: 0 }) : this.addOffset({ y: -(t.y - e.y), x: -(t.x - e.x) })) },
                        getTouchCenter: function(t) { return this.getVectorAvg(t) },
                        getVectorAvg: function(t) { return { x: t.map(function(t) { return t.x }).reduce(i) / t.length, y: t.map(function(t) { return t.y }).reduce(i) / t.length } },
                        addOffset: function(t) { this.offset = { x: this.offset.x + t.x, y: this.offset.y + t.y } },
                        sanitize: function() { this.zoomFactor < this.options.zoomOutFactor ? this.zoomOutAnimation() : this.isInsaneOffset(this.offset) && this.sanitizeOffsetAnimation() },
                        isInsaneOffset: function(t) { var e = this.sanitizeOffset(t); return e.x !== t.x || e.y !== t.y },
                        sanitizeOffsetAnimation: function() {
                            var t = this.sanitizeOffset(this.offset),
                                e = { x: this.offset.x, y: this.offset.y },
                                i = function(i) { this.offset.x = e.x + i * (t.x - e.x), this.offset.y = e.y + i * (t.y - e.y), this.update() }.bind(this);
                            this.animate(this.options.animationDuration, this.options.animationInterval, i, this.swing)
                        },
                        zoomOutAnimation: function() {
                            var t = this.zoomFactor,
                                e = 1,
                                i = this.getCurrentZoomCenter(),
                                o = function(o) { this.scaleTo(t + o * (e - t), i) }.bind(this);
                            this.animate(this.options.animationDuration, this.options.animationInterval, o, this.swing)
                        },
                        updateAspectRatio: function() { this.setContainerY(this.getContainerX() / this.getAspectRatio()) },
                        getInitialZoomFactor: function() { return this.container[0].offsetWidth / this.el[0].offsetWidth },
                        getAspectRatio: function() { return this.el[0].offsetWidth / this.el[0].offsetHeight },
                        getCurrentZoomCenter: function() {
                            var t = this.container[0].offsetWidth * this.zoomFactor,
                                e = this.offset.x,
                                i = t - e - this.container[0].offsetWidth,
                                o = e / i,
                                n = o * this.container[0].offsetWidth / (o + 1),
                                r = this.container[0].offsetHeight * this.zoomFactor,
                                a = this.offset.y,
                                s = r - a - this.container[0].offsetHeight,
                                c = a / s,
                                l = c * this.container[0].offsetHeight / (c + 1);
                            return 0 === i && (n = this.container[0].offsetWidth), 0 === s && (l = this.container[0].offsetHeight), { x: n, y: l }
                        },
                        canDrag: function() { return !o(this.zoomFactor, 1) },
                        getTouches: function(t) { var e = this.container.offset(); return Array.prototype.slice.call(t.touches).map(function(t) { return { x: t.pageX - e.left, y: t.pageY - e.top } }) },
                        animate: function(t, e, i, o, n) {
                            var r = (new Date).getTime(),
                                a = function() {
                                    if (this.inAnimation) {
                                        var s = (new Date).getTime() - r,
                                            c = s / t;
                                        s >= t ? (i(1), n && n(), this.update(), this.stopAnimation(), this.update()) : (o && (c = o(c)), i(c), this.update(), setTimeout(a, e))
                                    }
                                }.bind(this);
                            this.inAnimation = !0, a()
                        },
                        stopAnimation: function() { this.inAnimation = !1 },
                        swing: function(t) { return -Math.cos(t * Math.PI) / 2 + .5 },
                        getContainerX: function() { return this.container[0].offsetWidth },
                        getContainerY: function() { return this.container[0].offsetHeight },
                        setContainerY: function(t) {
                            return this.container.height(t);
                        },
                        setupMarkup: function() { this.options.container ? (this.container = t('<div class="pinch-zoom-container"></div>'), this.el.before(this.container), this.container.append(this.el), this.container.css({ position: "relative" })) : this.container = this.el.parent(), this.el.css({ "-webkit-transform-origin": "0% 0%", "-moz-transform-origin": "0% 0%", "-ms-transform-origin": "0% 0%", "-o-transform-origin": "0% 0%", "transform-origin": "0% 0%" }) },
                        end: function() { this.hasInteraction = !1, this.sanitize(), this.update() },
                        bindEvents: function() { n(this.container.get(0), this), t(window).on("resize", this.update.bind(this)), t(this.el).find("img").on("load", this.update.bind(this)) },
                        update: function() {
                            this.updatePlaned || (this.updatePlaned = !0, setTimeout(function() {
                                this.updatePlaned = !1, this.updateAspectRatio();
                                var t = this.getInitialZoomFactor() * this.zoomFactor,
                                    e = -this.offset.x / t,
                                    i = -this.offset.y / t,
                                    o = "scale3d(" + t + ", " + t + ",1) translate3d(" + e + "px," + i + "px,0px)",
                                    n = "scale(" + t + ", " + t + ") translate(" + e + "px," + i + "px)",
                                    r = function() { this.clone && (this.clone.remove(), delete this.clone) }.bind(this);
                                this.is3d = !0, r(), this.el.css({ "-webkit-transform": o, "-o-transform": n, "-ms-transform": n, "-moz-transform": n, transform: o })
                            }.bind(this), 0))
                        },
                        enable: function() { this.enabled = !0 },
                        disable: function() { this.enabled = !1 }
                    };
                    var n = function(t, e) {
                        var i = null,
                            o = 0,
                            n = null,
                            r = null,
                            a = function(t, o) {
                                if (i !== t) {
                                    if (i && !t) switch (i) {
                                        case "zoom":
                                            e.handleZoomEnd(o);
                                            break;
                                        case "drag":
                                            e.handleDragEnd(o)
                                    }
                                    switch (t) {
                                        case "zoom":
                                            e.handleZoomStart(o);
                                            break;
                                        case "drag":
                                            e.handleDragStart(o)
                                    }
                                }
                                i = t
                            },
                            s = function(t) { 2 === o ? a("zoom") : 1 === o && e.canDrag() ? a("drag", t) : a(null, t) },
                            c = function(t) { return Array.prototype.slice.call(t).map(function(t) { return { x: t.pageX, y: t.pageY } }) },
                            l = function(t, e) { var i, o; return i = t.x - e.x, o = t.y - e.y, Math.sqrt(i * i + o * o) },
                            d = function(t, e) {
                                var i = l(t[0], t[1]),
                                    o = l(e[0], e[1]);
                                return o / i
                            },
                            p = function(t) { t.stopPropagation(), t.preventDefault() },
                            h = function(t) {
                                var n = (new Date).getTime();
                                if (o > 1 && (r = null), n - r < 300) switch (r = null, p(t), e.handleDoubleTap(t), i) {
                                    case "zoom":
                                        e.handleZoomEnd(t);
                                        break;
                                    case "drag":
                                        e.handleDragEnd(t)
                                } else 1 === o && (r = n)
                            },
                            f = !0;
                        t.addEventListener("touchstart", function(t) { e.enabled && (f = !0, o = t.touches.length, h(t)) }), t.addEventListener("touchmove", function(t) {
                            if (e.enabled) {
                                if (f) s(t), i && p(t), n = c(t.touches);
                                else {
                                    switch (i) {
                                        case "zoom":
                                            e.handleZoom(t, d(n, c(t.touches)));
                                            break;
                                        case "drag":
                                            e.handleDrag(t)
                                    }
                                    i && (p(t), e.update())
                                }
                                f = !1
                            }
                        }), t.addEventListener("touchend", function(t) { e.enabled && (o = t.touches.length, s(t)) })
                    };
                    return e
                },
                n = o($);
            t.exports = n
        }, function(t, e) {
            t.exports = Widget.define({
                events: {
                    touchstart: function(t) { this.startTime = t.timeStamp, this.startY = t.changedTouches[0].screenY - this.curY, this.startScreenY = t.changedTouches[0].screenY },
                    touchmove: function(t) {
                        var e = t.timeStamp;
                        t.preventDefault(), this.curY = t.changedTouches[0].screenY - this.startY, this.animating = !1, this.curY > 0 ? this.curY = .4 * this.curY : this.curY < this.maxScrollY && (this.curY = this.maxScrollY + .4 * (this.curY - this.maxScrollY)), this.config.$el.css({ "-webkit-transform": "translate3d(0," + this.curY + "px, 0)", "-webkit-transition-duration": "0s", "transition-duration": "0s" }), e - this.startTime > 280 && (this.startTime = e, this.startScreenY = t.changedTouches[0].screenY)
                    },
                    touchend: function(t) {
                        var e = t.timeStamp - this.startTime,
                            i = t.changedTouches[0].screenY - this.startScreenY;
                        if (this.animating && t.preventDefault(), this.curY > 0 || this.curY < this.maxScrollY) return void this.tailScroll();
                        if (e < 280) {
                            var o = this.momentum(i, this.curY, e, this.maxScrollY, this.warpperHeight);
                            if (this.curY = o.destination, !o.destination || !o.duration) return;
                            this.config.$el.css({ "-webkit-transform": "translate3d(0, " + o.destination + "px, 0)", "transition-timing-function": "cubic-bezier(0.1, 0.3, 0.5, 1)", "-webkit-transition-duration": o.duration + "ms" }), this.animating = !0
                        }
                        return this.curY > 0 || this.curY < this.maxScrollY ? void this.tailScroll() : void 0
                    },
                    transitionend: function() { return !!this.animating && (this.animating = !1, void this.tailScroll()) }
                },
                momentum: function(t, e, i, o, n) {
                    var r, a, s = Math.abs(t) / i,
                        c = 8e-4;
                    return r = e + s * s / (2 * c) * (t < 0 ? -1 : 1), a = s / c, r < o ? (r = n ? o - n / 2.5 * (s / 8) : o, t = Math.abs(r - e), a = t / s) : r > 0 && (r = n ? n / 2.5 * (s / 8) : 0, t = Math.abs(e) + r, a = t / s), { destination: Math.round(r), duration: a }
                },
                init: function(t) { this.config = t, this.startY = 0, this.curY = 0, this.startTime = 0, this.startScreenY = 0, this.animating = !1, this.refresh() },
                refresh: function() { this.warpperHeight = this.config.$el.height(), this.maxScrollY = this.config.$el.height() - this.config.$scrollWrapper.height(), this.maxScrollY > 0 && (this.maxScrollY = 0), this.scrollTo(0) },
                tailScroll: function() { this.curY > 0 ? this.curY = 0 : this.curY < 0 && this.curY < this.maxScrollY && (this.curY = this.maxScrollY), this.animating = !1, this.config.$el.css({ "-webkit-transform": "translate3d(0, " + this.curY + "px, 0)", "transition-timing-function": "cubic-bezier(0.25, 0.46, 0.45, 0.94)", "-webkit-transition-duration": "400ms" }) },
                scrollTo: function(t) { this.curY = -1 * t, this.curY > 0 ? this.curY = 0 : this.curY < 0 && this.curY < this.maxScrollY && (this.curY = this.maxScrollY), this.config.$el.css({ "-webkit-transform": "translate3d(0," + this.curY + "px, 0)", "-webkit-transition-duration": "0" }) }
            })
        }, function(t, e) {
            function i(t, e) {
                "use strict";

                function i() {
                    m = w.children, v = m.length, m.length < 2 && (e.continuous = !1), u.transitions && e.continuous && m.length < 3 && (w.appendChild(m[0].cloneNode(!0)), w.appendChild(w.children[1].cloneNode(!0)), m = w.children), g = new Array(m.length), b = t.getBoundingClientRect().width || t.offsetWidth, w.style.width = m.length * b + "px";
                    for (var i = m.length; i--;) {
                        var o = m[i];
                        o.style.width = b + "px", o.setAttribute("data-index", i), u.transitions && (o.style.left = i * -b + "px", s(i, x > i ? -b : x < i ? b : 0, 0))
                    }
                    e.continuous && u.transitions && (s(r(x - 1), -b, 0), s(r(x + 1), b, 0)), u.transitions || (w.style.left = x * -b + "px"), t.style.visibility = "visible"
                }

                function o() { e.continuous ? a(x - 1) : x && a(x - 1) }

                function n() { e.continuous ? a(x + 1) : x < m.length - 1 && a(x + 1) }

                function r(t) { return (m.length + t % m.length) % m.length }

                function a(t, i) {
                    if (x !== t) {
                        if (u.transitions) {
                            var o = Math.abs(x - t) / (x - t);
                            if (e.continuous) {
                                var n = o;
                                o = -g[r(t)] / b, o !== n && (t = -o * m.length + t)
                            }
                            for (var a = Math.abs(x - t) - 1; a--;) s(r((t > x ? t : x) - a - 1), b * o, 0);
                            t = r(t), s(x, b * o, i || k), s(t, 0, i || k), e.continuous && s(r(t - o), -(b * o), 0)
                        } else t = r(t), l(x * -b, t * -b, i || k);
                        x = t, f(e.callback && e.callback(x, m[x]))
                    }
                }

                function s(t, e, i) { c(t, e, i), g[t] = e }

                function c(t, e, i) {
                    var o = m[t],
                        n = o && o.style;
                    n && (n.webkitTransitionDuration = n.MozTransitionDuration = n.msTransitionDuration = n.OTransitionDuration = n.transitionDuration = i + "ms", n.webkitTransform = "translate(" + e + "px,0)translateZ(0)", n.msTransform = n.MozTransform = n.OTransform = "translateX(" + e + "px)")
                }

                function l(t, i, o) {
                    if (!o) return void(w.style.left = i + "px");
                    var n = +new Date,
                        r = setInterval(function() { var a = +new Date - n; return a > o ? (w.style.left = i + "px", z && d(), e.transitionEnd && e.transitionEnd.call(event, x, m[x]), void clearInterval(r)) : void(w.style.left = (i - t) * (Math.floor(a / o * 100) / 100) + t + "px") }, 4)
                }

                function d() { y = setTimeout(n, z) }

                function p() { z = 0, clearTimeout(y) }
                var h = function() {},
                    f = function(t) { setTimeout(t || h, 0) },
                    u = {
                        addEventListener: !!window.addEventListener,
                        touch: "ontouchstart" in window || window.DocumentTouch && document instanceof window.DocumentTouch,
                        transitions: function(t) {
                            var e = ["transitionProperty", "WebkitTransition", "MozTransition", "OTransition", "msTransition"];
                            for (var i in e)
                                if (void 0 !== t.style[e[i]]) return !0;
                            return !1
                        }(document.createElement("swipe"))
                    };
                if (t) {
                    var m, g, b, v, w = t.children[0];
                    e = e || {};
                    var x = parseInt(e.startSlide, 10) || 0,
                        k = e.speed || 300;
                    e.continuous = void 0 === e.continuous || e.continuous;
                    var y, $, z = e.auto || 0,
                        C = {},
                        j = {},
                        S = {
                            handleEvent: function(t) {
                                switch (t.type) {
                                    case "touchstart":
                                        this.start(t);
                                        break;
                                    case "touchmove":
                                        this.move(t);
                                        break;
                                    case "touchend":
                                        f(this.end(t));
                                        break;
                                    case "webkitTransitionEnd":
                                    case "msTransitionEnd":
                                    case "oTransitionEnd":
                                    case "otransitionend":
                                    case "transitionend":
                                        f(this.transitionEnd(t));
                                        break;
                                    case "resize":
                                        f(i)
                                }
                                e.stopPropagation && t.stopPropagation()
                            },
                            start: function(t) {
                                var e = t.touches[0];
                                C = { x: e.pageX, y: e.pageY, time: +new Date }, $ = void 0, j = {}, w.addEventListener("touchmove", this, !1), w.addEventListener("touchend", this, !1)
                            },
                            move: function(t) {
                                if (!(t.touches.length > 1 || t.scale && 1 !== t.scale)) {
                                    e.disableScroll && t.preventDefault();
                                    var i = t.touches[0];
                                    j = { x: i.pageX - C.x, y: i.pageY - C.y }, "undefined" == typeof $ && ($ = !!($ || Math.abs(j.x) < Math.abs(j.y))), $ || (t.preventDefault(), p(), e.continuous ? (c(r(x - 1), j.x + g[r(x - 1)], 0), c(x, j.x + g[x], 0), c(r(x + 1), j.x + g[r(x + 1)], 0)) : (j.x = j.x / (!x && j.x > 0 || x === m.length - 1 && j.x < 0 ? Math.abs(j.x) / b + 1 : 1), c(x - 1, j.x + g[x - 1], 0), c(x, j.x + g[x], 0), c(x + 1, j.x + g[x + 1], 0)))
                                }
                            },
                            end: function() {
                                var t = +new Date - C.time,
                                    i = Number(t) < 250 && Math.abs(j.x) > 20 || Math.abs(j.x) > b / 2,
                                    o = !x && j.x > 0 || x === m.length - 1 && j.x < 0;
                                e.continuous && (o = !1);
                                var n = j.x < 0;
                                $ || (i && !o ? (n ? (e.continuous ? (s(r(x - 1), -b, 0), s(r(x + 2), b, 0)) : s(x - 1, -b, 0), s(x, g[x] - b, k), s(r(x + 1), g[r(x + 1)] - b, k), x = r(x + 1)) : (e.continuous ? (s(r(x + 1), b, 0), s(r(x - 2), -b, 0)) : s(x + 1, b, 0), s(x, g[x] + b, k), s(r(x - 1), g[r(x - 1)] + b, k), x = r(x - 1)), e.callback && e.callback(x, m[x])) : e.continuous ? (s(r(x - 1), -b, k), s(x, 0, k), s(r(x + 1), b, k)) : (s(x - 1, -b, k), s(x, 0, k), s(x + 1, b, k))), w.removeEventListener("touchmove", S, !1), w.removeEventListener("touchend", S, !1)
                            },
                            transitionEnd: function(t) { parseInt(t.target.getAttribute("data-index"), 10) === x && (z && d(), e.transitionEnd && e.transitionEnd.call(t, x, m[x])) }
                        };
                    return i(), z && d(), u.addEventListener ? (u.touch && w.addEventListener("touchstart", S, !1), u.transitions && (w.addEventListener("webkitTransitionEnd", S, !1), w.addEventListener("msTransitionEnd", S, !1), w.addEventListener("oTransitionEnd", S, !1), w.addEventListener("otransitionend", S, !1), w.addEventListener("transitionend", S, !1)), window.addEventListener("resize", S, !1)) : window.onresize = function() { i() }, {
                        setup: function() { i() },
                        slide: function(t, e) { p(), a(t, e) },
                        prev: function() { p(), o() },
                        next: function() { p(), n() },
                        stop: function() { p() },
                        getPos: function() { return x },
                        getNumSlides: function() { return v },
                        kill: function() {
                            p(), w.style.width = "", w.style.left = "";
                            for (var t = m.length; t--;) {
                                var e = m[t];
                                e.style.width = "", e.style.left = "", u.transitions && c(t, 0, 0)
                            }
                            u.addEventListener ? (w.removeEventListener("touchstart", S, !1), w.removeEventListener("webkitTransitionEnd", S, !1), w.removeEventListener("msTransitionEnd", S, !1), w.removeEventListener("oTransitionEnd", S, !1), w.removeEventListener("otransitionend", S, !1), w.removeEventListener("transitionend", S, !1), window.removeEventListener("resize", S, !1)) : window.onresize = null
                        }
                    }
                }
            }
            t.exports = i
        }, function(t, e, i) {
            var o = i(33).Events;
            e.getLocation = function(t, e) {
                var n = $.Deferred(),
                    r = $("#domain").val(),
                    a = encodeURIComponent($("#referer").val()),
                    s = "/ajax.php?dir=vehicle&module=latlng&format=eval&domain=" + r + "&referer=" + a,
                    c = "/ajax.php?dir=vehicle&module=latlng&ac=getCityInfoByIp&domain=" + r + "&referer=" + a + "&rnd=" + Math.random(),
                    l = new o;
                "function" == typeof t && (e = t, t = {});
                var d = function(t) { l.emit("getCityInfo"), $.ajax({ url: s, data: { latlng: t.coords.latitude + "," + t.coords.longitude }, dataType: "json" }).done(function(t) { return t && t.data && t.data.cityName && t.data.cityDomain ? void e(null, { cityName: t.data.cityName, cityDomain: t.data.cityDomain, url: t.data.url, currentLocation: t.data.currentLocation, latlng: t.data.latlng }) : e("geoToCity server error") }).fail(function(t) { e(t) }) },
                    p = function() {
                        t.thirdGeo ? i(27).async(t.thirdGeo, function(e) {
                            var i = e[t.geofn](t);
                            n = i.geo(n)
                        }) : navigator.geolocation ? navigator.geolocation.getCurrentPosition(function(t) { n.resolve(t) }, function(t) { n.reject(t) }, { timeout: t.timeout || 1e4, maximumAge: 6e4, enableHighAccuracy: !0 }) : n.reject(new Error("api not supported"))
                    },
                    h = function(i) {
                        var o = "IP position unavailable";
                        l.emit("getCityInfo"), $.ajax({ url: c, timeout: t.timeout, dataType: "json" }).done(function(n) { n && n.data && n.data.cityName && n.data.cityDomain ? e(null, { cityName: n.data.cityName, cityDomain: n.data.cityDomain, url: n.data.url, currentLocation: n.data.currentLocation, latlng: n.data.latlng }) : t.ipFirst ? p() : e(i || o) }).fail(function() { t.ipFirst ? p() : e(i || o) })
                    };
                return n.done(function(t) { d(t) }).fail(function(i) { t.ipFirst ? e(i) : i && i.code === i.PERMISSION_DENIED ? e(i) : h(i) }), t.ipFirst ? h() : p(), l
            }
        }, function(t, e, i) {
            var o = i(32),
                n = function(t) {
                    var e = new RegExp("(^|&)" + t + "=([^&]*)(&|$)"),
                        i = window.location.search.substr(1),
                        o = i.match(e);
                    return null != o && (i = i.replace(o[0], "")), "?" + i
                },
                r = function(t) {
                    var e = new RegExp("(^|&)" + t + "=([^&]*)(&|$)"),
                        i = window.location.search.substr(1).match(e);
                    return null != i ? unescape(i[2]) : null
                };
            $(function() {
                $("#user-mask").tap(function() { return $("#user-mask").hide(), $(".js-user-div").removeClass("active"), !1 }), $(".js-user-check .btn-cancel").tap(function() { return $("#user-mask").trigger("tap"), !1 }), $(".js-user-phone").on("input", function() { var t = $(".js-user-register"); "1" != t.attr("data-send") && t.addClass("active") }), $(".js-user-register").tap(function(t) {
                    var e = $(".js-user-phone").val(),
                        i = new RegExp(/^1[34578]\d{9}$/),
                        n = $(".js-waring-notice"),
                        r = $(t.target);
                    if (r.hasClass("active"))
                        if (e)
                            if (isNaN(e) || !i.test(e)) n.show().html("请输入正确的手机号");
                            else {
                                n.hide(), r.removeClass("active"), r.attr("data-send", "1");
                                var a = 60,
                                    s = setInterval(function() { a > 0 ? (r.html(a + "s"), a -= 1) : (clearInterval(s), r.addClass("active").html("获取验证码"), r.attr("data-send", "0")) }, 1e3),
                                    c = $(".js-check-post-code").attr("data-str"),
                                    l = $(".js-check-post-code").attr("data-time");
                                c = o(c + "guazi&js&token" + e), $.ajax({ url: "/misc/user/?act=register", type: "POST", data: { phone: e, time: l, token: c }, dataType: "json", success: function(t) { t.status ? n.show().html("验证码已发送，请查看短信") : n.show().html(t.msg) }, error: function() { n.show().html("验证码发送失败，请稍后再试") } })
                            }
                    else n.show().html("请输入手机号");
                    return !1
                }), $(".js-user-code").on("input", function() { $(".js-waring-notice").hide() }), $(".js-user-check .btn-sure").tap(function() {
                    var t = $(".js-user-phone").val(),
                        e = $(".js-user-code").val(),
                        i = new RegExp(/^1[34578]\d{9}$/),
                        a = new RegExp(/^\d{4,8}$/),
                        s = $(".js-waring-notice");
                    if (!t) return s.show().html("请输入手机号"), !1;
                    if (isNaN(t) || !i.test(t)) return s.show().html("请输入正确的手机号"), !1;
                    if (!e) return s.show().html("请输入手机号验证码"), !1;
                    if (isNaN(e) || !a.test(e)) return s.show().html("请输入正确验证码"), !1;
                    var c = $(".js-check-post-code").attr("data-str"),
                        l = $(".js-check-post-code").attr("data-time");
                    return c = o(c + "guazi&js&token" + t), $.ajax({
                        url: "/misc/user/?act=checkCode",
                        type: "POST",
                        data: { phone: t, code: e, time: l, token: c },
                        xhrFields: { withCredentials: !0 },
                        dataType: "json",
                        success: function(e) {
                            if (e.status) {
                                var i = window.localStorageSubstitute,
                                    o = (new Date).getTime();
                                i.setItem("currstamp", o), i.setItem("phone", t);
                                var a = $(".js-user-div").attr("data-reload"),
                                    c = r("uToken");
                                if ("1" == a || null != c) {
                                    var l = n("uToken");
                                    window.location.href = window.location.pathname + l
                                } else $(".js-user-div").attr("data-user", "1"), $("#user-mask").trigger("tap")
                            } else s.show().html(e.msg)
                        },
                        error: function() { s.show().html("验证码失败，请稍后再试") }
                    }), !1
                })
            })
        }, function(t, e, i) {
            var o = i(20),
                n = i(9);
            i(8);
            e.slideBanner = n.extend({
                events: {
                    "click [data-slide-to]": function(t) {
                        var e = o(t.currentTarget).data("slide-to");
                        e > this.index ? this.slideTo(e, "next") : this.slideTo(e, "prev")
                    },
                    'touchstart [data-role="item"]': function(t) { this.stop(), this.startX = t.touches[0].clientX, this.config.touch1move = !0, this.config.startPos.x = t.touches[0].pageX, this.config.startPos.y = t.touches[0].pageY },
                    'touchend [data-role="item"]': function() { this.maxMoveDist > 10 && (this.maxMoveDist = 0, this[this.direction]()), this.loop() },
                    'touchmove [data-role="item"]': function(t) {
                        var e = t.touches[0],
                            i = this.config.$list,
                            o = e.clientX - this.startX,
                            n = e.pageX - this.config.startPos.x,
                            r = e.pageY - this.config.startPos.y;
                        this.config.touch1move && (this.config.direction = Math.abs(r) > Math.abs(n) ? "vertical" : "horizontal", this.config.touch1move = !1), "vertical" != this.config.direction && (t.preventDefault(), t.stopPropagation(), this.animating || (this.maxMoveDist < Math.abs(o) && (this.maxMoveDist = Math.abs(o)), Math.abs(o) > this.width || this.maxMoveDist < 10 || (t.preventDefault(), i.css({ marginLeft: -1 * this.index * this.width + o + "px" }), this.direction = o < 0 ? "next" : "prev")))
                    }
                },
                init: function(t) {
                    var e = this,
                        i = t.$item;
                    t.interval = t.interval || 1e3, this.config = t, this.config.startPos = {}, this.config.touch1move = !0, this.config.direction = "vertical", this.index = 0, this.total = o(t.$item).length, this.loop(), this.width = this.config.$el.width(), this.config.$list.width(this.total + 2 + "00%"), this.translateX = 0, this.direction = "next", this.maxMoveDist = 0, i.css("width", 100 / (this.total + 2) + "%");
                    var n = i.eq(this.total - 1).clone(),
                        r = i.eq(0).clone();
                    n.css({ position: "relative", left: "-100%" }), o([i.eq(0).find("img[data-src]"), r.find("img[data-src]"), n.find("img[data-src]")]).each(function() {
                        var t = o(this);
                        t.attr("src", t.data("src"))
                    }), this.config.$list.append(r).append(n), o(window).on("resize", function() { e.width = e.config.$el.width(), e.slideTo(e.index, "next") })
                },
                slideFn: function(t, e) {
                    var i = this,
                        n = o.Deferred(),
                        r = t - this.index,
                        a = this.config.$list,
                        s = this.total,
                        c = this.config.$list.width();
                    o([this.config.$item.eq(t).find("img[data-src]"), this.config.$item.eq(t + 1).find("img[data-src]")]).each(function() {
                        var t = o(this);
                        t.data("src") && t.attr("src") !== t.data("src") && t.attr("src", t.data("src"))
                    }), "prev" === e && r > 0 && (r -= s), "next" === e && r < 0 && (r += s), this.animating = !0;
                    var l = (o.fx.cssPrefix + "transform", -1 / (this.total + 2) * (this.index + r) * c);
                    if (a.animate({ marginLeft: l }, this.config.animateTime || 200, function() {
                            var o;
                            0 === i.index && t === s - 1 && "prev" === e ? (o = -1 / (i.total + 2) * (i.total - 1) * c, a.css({ marginLeft: o + "px" })) : i.index === s - 1 && 0 === t && "next" === e && a.css({ marginLeft: 0 }), n.resolve(), i.animating = !1
                        }), this.config.$el.find("[data-slide-to]").removeClass("active").filter('[data-slide-to="' + t + '"]').addClass("active"), this.config.$el.closest(".report-img").find(".j-container").length > 0) {
                        var d = this.config.$el.closest(".j-container").find(".j-dotted span").eq(t);
                        d.find("i").addClass("on"), d.siblings().find("i").removeClass("on")
                    }
                    return this.config.$el.trigger("slidecb"), this.config.$el.find('[data-role="index"]').text(t + 1), window.initPositionList && this.config.$el.closest(".j-container").find(".car-thrD-show").trigger("init3DShow", window.initPositionList[t]), n.promise()
                }
            })
        }, function(t, e) {
            var i = function() {
                function t(t) { return null == t ? String(t) : U[X.call(t)] || "object" }

                function e(e) { return "function" == t(e) }

                function i(t) { return null != t && t == t.window }

                function o(t) { return null != t && t.nodeType == t.DOCUMENT_NODE }

                function n(e) { return "object" == t(e) }

                function r(t) { return n(t) && !i(t) && Object.getPrototypeOf(t) == Object.prototype }

                function a(t) { return "number" == typeof t.length }

                function s(t) { return P.call(t, function(t) { return null != t }) }

                function c(t) { return t.length > 0 ? $.fn.concat.apply([], t) : t }

                function l(t) { return t.replace(/::/g, "/").replace(/([A-Z]+)([A-Z][a-z])/g, "$1_$2").replace(/([a-z\d])([A-Z])/g, "$1_$2").replace(/_/g, "-").toLowerCase() }

                function d(t) { return t in I ? I[t] : I[t] = new RegExp("(^|\\s)" + t + "(\\s|$)") }

                function p(t, e) { return "number" != typeof e || D[l(t)] ? e : e + "px" }

                function h(t) { var e, i; return E[t] || (e = _.createElement(t), _.body.appendChild(e), i = getComputedStyle(e, "").getPropertyValue("display"), e.parentNode.removeChild(e), "none" == i && (i = "block"), E[t] = i), E[t] }

                function f(t) { return "children" in t ? T.call(t.children) : $.map(t.childNodes, function(t) { if (1 == t.nodeType) return t }) }

                function u(t, e, i) { for (y in e) i && (r(e[y]) || G(e[y])) ? (r(e[y]) && !r(t[y]) && (t[y] = {}), G(e[y]) && !G(t[y]) && (t[y] = []), u(t[y], e[y], i)) : e[y] !== k && (t[y] = e[y]) }

                function m(t, e) { return null == e ? $(t) : $(t).filter(e) }

                function g(t, i, o, n) { return e(i) ? i.call(t, o, n) : i }

                function b(t, e, i) { null == i ? t.removeAttribute(e) : t.setAttribute(e, i) }

                function v(t, e) {
                    var i = t.className,
                        o = i && i.baseVal !== k;
                    return e === k ? o ? i.baseVal : i : void(o ? i.baseVal = e : t.className = e)
                }

                function w(t) { try { return t ? "true" == t || "false" != t && ("null" == t ? null : +t + "" == t ? +t : /^[\[\{]/.test(t) ? $.parseJSON(t) : t) : t } catch (e) { return t } }

                function x(t, e) { e(t); for (var i in t.childNodes) x(t.childNodes[i], e) }
                var k, y, $, z, C, j, S = [],
                    T = S.slice,
                    P = S.filter,
                    _ = window.document,
                    E = {},
                    I = {},
                    D = { "column-count": 1, columns: 1, "font-weight": 1, "line-height": 1, opacity: 1, "z-index": 1, zoom: 1 },
                    W = /^\s*<(\w+|!)[^>]*>/,
                    O = /^<(\w+)\s*\/?>(?:<\/\1>|)$/,
                    N = /<(?!area|br|col|embed|hr|img|input|link|meta|param)(([\w:]+)[^>]*)\/>/gi,
                    A = /^(?:body|html)$/i,
                    M = /([A-Z])/g,
                    B = ["val", "css", "html", "text", "data", "width", "height", "offset"],
                    L = ["after", "prepend", "before", "append"],
                    Y = _.createElement("table"),
                    R = _.createElement("tr"),
                    F = { tr: _.createElement("tbody"), tbody: Y, thead: Y, tfoot: Y, td: R, th: R, "*": _.createElement("div") },
                    q = /complete|loaded|interactive/,
                    J = /^[\w-]*$/,
                    U = {},
                    X = U.toString,
                    H = {},
                    V = _.createElement("div"),
                    Z = { tabindex: "tabIndex", readonly: "readOnly", "for": "htmlFor", "class": "className", maxlength: "maxLength", cellspacing: "cellSpacing", cellpadding: "cellPadding", rowspan: "rowSpan", colspan: "colSpan", usemap: "useMap", frameborder: "frameBorder", contenteditable: "contentEditable" },
                    G = Array.isArray || function(t) { return t instanceof Array };
                return H.matches = function(t, e) {
                    if (!e || !t || 1 !== t.nodeType) return !1;
                    var i = t.webkitMatchesSelector || t.mozMatchesSelector || t.oMatchesSelector || t.matchesSelector;
                    if (i) return i.call(t, e);
                    var o, n = t.parentNode,
                        r = !n;
                    return r && (n = V).appendChild(t), o = ~H.qsa(n, e).indexOf(t), r && V.removeChild(t), o
                }, C = function(t) { return t.replace(/-+(.)?/g, function(t, e) { return e ? e.toUpperCase() : "" }) }, j = function(t) { return P.call(t, function(e, i) { return t.indexOf(e) == i }) }, H.fragment = function(t, e, i) { var o, n, a; return O.test(t) && (o = $(_.createElement(RegExp.$1))), o || (t.replace && (t = t.replace(N, "<$1></$2>")), e === k && (e = W.test(t) && RegExp.$1), e in F || (e = "*"), a = F[e], a.innerHTML = "" + t, o = $.each(T.call(a.childNodes), function() { a.removeChild(this) })), r(i) && (n = $(o), $.each(i, function(t, e) { B.indexOf(t) > -1 ? n[t](e) : n.attr(t, e) })), o }, H.Z = function(t, e) { return t = t || [], t.__proto__ = $.fn, t.selector = e || "", t }, H.isZ = function(t) { return t instanceof H.Z }, H.init = function(t, i) {
                    var o;
                    if (!t) return H.Z();
                    if ("string" == typeof t)
                        if (t = t.trim(), "<" == t[0] && W.test(t)) o = H.fragment(t, RegExp.$1, i), t = null;
                        else {
                            if (i !== k) return $(i).find(t);
                            o = H.qsa(_, t)
                        }
                    else {
                        if (e(t)) return $(_).ready(t);
                        if (H.isZ(t)) return t;
                        if (G(t)) o = s(t);
                        else if (n(t)) o = [t], t = null;
                        else if (W.test(t)) o = H.fragment(t.trim(), RegExp.$1, i), t = null;
                        else {
                            if (i !== k) return $(i).find(t);
                            o = H.qsa(_, t)
                        }
                    }
                    return H.Z(o, t)
                }, $ = function(t, e) { return H.init(t, e) }, $.extend = function(t) { var e, i = T.call(arguments, 1); return "boolean" == typeof t && (e = t, t = i.shift()), i.forEach(function(i) { u(t, i, e) }), t }, H.qsa = function(t, e) {
                    var i, n = "#" == e[0],
                        r = !n && "." == e[0],
                        a = n || r ? e.slice(1) : e,
                        s = J.test(a);
                    return o(t) && s && n ? (i = t.getElementById(a)) ? [i] : [] : 1 !== t.nodeType && 9 !== t.nodeType ? [] : T.call(s && !n ? r ? t.getElementsByClassName(a) : t.getElementsByTagName(e) : t.querySelectorAll(e))
                }, $.contains = function(t, e) { return t !== e && t.contains(e) }, $.type = t, $.isFunction = e, $.isWindow = i, $.isArray = G, $.isPlainObject = r, $.isEmptyObject = function(t) { var e; for (e in t) return !1; return !0 }, $.inArray = function(t, e, i) { return S.indexOf.call(e, t, i) }, $.camelCase = C, $.trim = function(t) { return null == t ? "" : String.prototype.trim.call(t) }, $.uuid = 0, $.support = {}, $.expr = {}, $.map = function(t, e) {
                    var i, o, n, r = [];
                    if (a(t))
                        for (o = 0; o < t.length; o++) i = e(t[o], o), null != i && r.push(i);
                    else
                        for (n in t) i = e(t[n], n), null != i && r.push(i);
                    return c(r)
                }, $.each = function(t, e) {
                    var i, o;
                    if (a(t)) {
                        for (i = 0; i < t.length; i++)
                            if (e.call(t[i], i, t[i]) === !1) return t
                    } else
                        for (o in t)
                            if (e.call(t[o], o, t[o]) === !1) return t;
                    return t
                }, $.grep = function(t, e) { return P.call(t, e) }, window.JSON && ($.parseJSON = JSON.parse), $.each("Boolean Number String Function Array Date RegExp Object Error".split(" "), function(t, e) { U["[object " + e + "]"] = e.toLowerCase() }), $.fn = {
                    forEach: S.forEach,
                    reduce: S.reduce,
                    push: S.push,
                    sort: S.sort,
                    indexOf: S.indexOf,
                    concat: S.concat,
                    map: function(t) { return $($.map(this, function(e, i) { return t.call(e, i, e) })) },
                    slice: function() { return $(T.apply(this, arguments)) },
                    ready: function(t) { return q.test(_.readyState) && _.body ? t($) : _.addEventListener("DOMContentLoaded", function() { t($) }, !1), this },
                    get: function(t) { return t === k ? T.call(this) : this[t >= 0 ? t : t + this.length] },
                    toArray: function() { return this.get() },
                    size: function() { return this.length },
                    remove: function() { return this.each(function() { null != this.parentNode && this.parentNode.removeChild(this) }) },
                    each: function(t) { return S.every.call(this, function(e, i) { return t.call(e, i, e) !== !1 }), this },
                    filter: function(t) { return e(t) ? this.not(this.not(t)) : $(P.call(this, function(e) { return H.matches(e, t) })) },
                    add: function(t, e) { return $(j(this.concat($(t, e)))) },
                    is: function(t) { return this.length > 0 && H.matches(this[0], t) },
                    not: function(t) {
                        var i = [];
                        if (e(t) && t.call !== k) this.each(function(e) { t.call(this, e) || i.push(this) });
                        else {
                            var o = "string" == typeof t ? this.filter(t) : a(t) && e(t.item) ? T.call(t) : $(t);
                            this.forEach(function(t) { o.indexOf(t) < 0 && i.push(t) })
                        }
                        return $(i)
                    },
                    has: function(t) { return this.filter(function() { return n(t) ? $.contains(this, t) : $(this).find(t).size() }) },
                    eq: function(t) { return t === -1 ? this.slice(t) : this.slice(t, +t + 1) },
                    first: function() { var t = this[0]; return t && !n(t) ? t : $(t) },
                    last: function() { var t = this[this.length - 1]; return t && !n(t) ? t : $(t) },
                    find: function(t) { var e, i = this; return e = "object" == typeof t ? $(t).filter(function() { var t = this; return S.some.call(i, function(e) { return $.contains(e, t) }) }) : 1 == this.length ? $(H.qsa(this[0], t)) : this.map(function() { return H.qsa(this, t) }) },
                    closest: function(t, e) {
                        var i = this[0],
                            n = !1;
                        for ("object" == typeof t && (n = $(t)); i && !(n ? n.indexOf(i) >= 0 : H.matches(i, t));) i = i !== e && !o(i) && i.parentNode;
                        return $(i)
                    },
                    parents: function(t) { for (var e = [], i = this; i.length > 0;) i = $.map(i, function(t) { if ((t = t.parentNode) && !o(t) && e.indexOf(t) < 0) return e.push(t), t }); return m(e, t) },
                    parent: function(t) { return m(j(this.pluck("parentNode")), t) },
                    children: function(t) { return m(this.map(function() { return f(this) }), t) },
                    contents: function() { return this.map(function() { return T.call(this.childNodes) }) },
                    siblings: function(t) { return m(this.map(function(t, e) { return P.call(f(e.parentNode), function(t) { return t !== e }) }), t) },
                    empty: function() { return this.each(function() { this.innerHTML = "" }) },
                    pluck: function(t) { return $.map(this, function(e) { return e[t] }) },
                    show: function() { return this.each(function() { "none" == this.style.display && (this.style.display = ""), "none" == getComputedStyle(this, "").getPropertyValue("display") && (this.style.display = h(this.nodeName)) }) },
                    replaceWith: function(t) { return this.before(t).remove() },
                    wrap: function(t) {
                        var i = e(t);
                        if (this[0] && !i) var o = $(t).get(0),
                            n = o.parentNode || this.length > 1;
                        return this.each(function(e) { $(this).wrapAll(i ? t.call(this, e) : n ? o.cloneNode(!0) : o) })
                    },
                    wrapAll: function(t) {
                        if (this[0]) {
                            $(this[0]).before(t = $(t));
                            for (var e;
                                (e = t.children()).length;) t = e.first();
                            $(t).append(this)
                        }
                        return this
                    },
                    wrapInner: function(t) {
                        var i = e(t);
                        return this.each(function(e) {
                            var o = $(this),
                                n = o.contents(),
                                r = i ? t.call(this, e) : t;
                            n.length ? n.wrapAll(r) : o.append(r)
                        })
                    },
                    unwrap: function() { return this.parent().each(function() { $(this).replaceWith($(this).children()) }), this },
                    clone: function() { return this.map(function() { return this.cloneNode(!0) }) },
                    hide: function() { return this.css("display", "none") },
                    toggle: function(t) {
                        return this.each(function() {
                            var e = $(this);
                            (t === k ? "none" == e.css("display") : t) ? e.show(): e.hide()
                        })
                    },
                    prev: function(t) { return $(this.pluck("previousElementSibling")).filter(t || "*") },
                    next: function(t) { return $(this.pluck("nextElementSibling")).filter(t || "*") },
                    html: function(t) {
                        return 0 === arguments.length ? this.length > 0 ? this[0].innerHTML : null : this.each(function(e) {
                            var i = this.innerHTML;
                            $(this).empty().append(g(this, t, e, i))
                        })
                    },
                    text: function(t) { return 0 === arguments.length ? this.length > 0 ? this[0].textContent : null : this.each(function() { this.textContent = t === k ? "" : "" + t }) },
                    attr: function(t, e) {
                        var i;
                        return "string" == typeof t && e === k ? 0 == this.length || 1 !== this[0].nodeType ? k : "value" == t && "INPUT" == this[0].nodeName ? this.val() : !(i = this[0].getAttribute(t)) && t in this[0] ? this[0][t] : i : this.each(function(i) {
                            if (1 === this.nodeType)
                                if (n(t))
                                    for (y in t) b(this, y, t[y]);
                                else b(this, t, g(this, e, i, this.getAttribute(t)))
                        })
                    },
                    removeAttr: function(t) { return this.each(function() { 1 === this.nodeType && b(this, t) }) },
                    prop: function(t, e) { return t = Z[t] || t, e === k ? this[0] && this[0][t] : this.each(function(i) { this[t] = g(this, e, i, this[t]) }) },
                    data: function(t, e) { var i = this.attr("data-" + t.replace(M, "-$1").toLowerCase(), e); return null !== i ? w(i) : k },
                    val: function(t) { return 0 === arguments.length ? this[0] && (this[0].multiple ? $(this[0]).find("option").filter(function() { return this.selected }).pluck("value") : this[0].value) : this.each(function(e) { this.value = g(this, t, e, this.value) }) },
                    offset: function(t) {
                        if (t) return this.each(function(e) {
                            var i = $(this),
                                o = g(this, t, e, i.offset()),
                                n = i.offsetParent().offset(),
                                r = { top: o.top - n.top, left: o.left - n.left };
                            "static" == i.css("position") && (r.position = "relative"), i.css(r)
                        });
                        if (0 == this.length) return null;
                        var e = this[0].getBoundingClientRect();
                        return { left: e.left + window.pageXOffset, top: e.top + window.pageYOffset, width: Math.round(e.width), height: Math.round(e.height) }
                    },
                    css: function(e, i) {
                        if (arguments.length < 2) {
                            var o = this[0],
                                n = getComputedStyle(o, "");
                            if (!o) return;
                            if ("string" == typeof e) return o.style[C(e)] || n.getPropertyValue(e);
                            if (G(e)) { var r = {}; return $.each(G(e) ? e : [e], function(t, e) { r[e] = o.style[C(e)] || n.getPropertyValue(e) }), r }
                        }
                        var a = "";
                        if ("string" == t(e)) i || 0 === i ? a = l(e) + ":" + p(e, i) : this.each(function() { this.style.removeProperty(l(e)) });
                        else
                            for (y in e) e[y] || 0 === e[y] ? a += l(y) + ":" + p(y, e[y]) + ";" : this.each(function() { this.style.removeProperty(l(y)) });
                        return this.each(function() { this.style.cssText += ";" + a })
                    },
                    index: function(t) { return t ? this.indexOf($(t)[0]) : this.parent().children().indexOf(this[0]) },
                    hasClass: function(t) { return !!t && S.some.call(this, function(t) { return this.test(v(t)) }, d(t)) },
                    addClass: function(t) {
                        return t ? this.each(function(e) {
                            z = [];
                            var i = v(this),
                                o = g(this, t, e, i);
                            o.split(/\s+/g).forEach(function(t) { $(this).hasClass(t) || z.push(t) }, this), z.length && v(this, i + (i ? " " : "") + z.join(" "))
                        }) : this
                    },
                    removeClass: function(t) { return this.each(function(e) { return t === k ? v(this, "") : (z = v(this), g(this, t, e, z).split(/\s+/g).forEach(function(t) { z = z.replace(d(t), " ") }), void v(this, z.trim())) }) },
                    toggleClass: function(t, e) {
                        return t ? this.each(function(i) {
                            var o = $(this),
                                n = g(this, t, i, v(this));
                            n.split(/\s+/g).forEach(function(t) {
                                (e === k ? !o.hasClass(t) : e) ? o.addClass(t): o.removeClass(t)
                            })
                        }) : this
                    },
                    scrollTop: function(t) { if (this.length) { var e = "scrollTop" in this[0]; return t === k ? e ? this[0].scrollTop : this[0].pageYOffset : this.each(e ? function() { this.scrollTop = t } : function() { this.scrollTo(this.scrollX, t) }) } },
                    scrollLeft: function(t) { if (this.length) { var e = "scrollLeft" in this[0]; return t === k ? e ? this[0].scrollLeft : this[0].pageXOffset : this.each(e ? function() { this.scrollLeft = t } : function() { this.scrollTo(t, this.scrollY) }) } },
                    position: function() {
                        if (this.length) {
                            var t = this[0],
                                e = this.offsetParent(),
                                i = this.offset(),
                                o = A.test(e[0].nodeName) ? { top: 0, left: 0 } : e.offset();
                            return i.top -= parseFloat($(t).css("margin-top")) || 0, i.left -= parseFloat($(t).css("margin-left")) || 0, o.top += parseFloat($(e[0]).css("border-top-width")) || 0, o.left += parseFloat($(e[0]).css("border-left-width")) || 0, { top: i.top - o.top, left: i.left - o.left }
                        }
                    },
                    offsetParent: function() { return this.map(function() { for (var t = this.offsetParent || _.body; t && !A.test(t.nodeName) && "static" == $(t).css("position");) t = t.offsetParent; return t }) }
                }, $.fn.detach = $.fn.remove, ["width", "height"].forEach(function(t) {
                    var e = t.replace(/./, function(t) { return t[0].toUpperCase() });
                    $.fn[t] = function(n) { var r, a = this[0]; return n === k ? i(a) ? a["inner" + e] : o(a) ? a.documentElement["scroll" + e] : (r = this.offset()) && r[t] : this.each(function(e) { a = $(this), a.css(t, g(this, n, e, a[t]())) }) }
                }), L.forEach(function(e, i) {
                    var o = i % 2;
                    $.fn[e] = function() {
                        var e, n, r = $.map(arguments, function(i) { return e = t(i), "object" == e || "array" == e || null == i ? i : H.fragment(i) }),
                            a = this.length > 1;
                        return r.length < 1 ? this : this.each(function(t, e) {
                            n = o ? e : e.parentNode, e = 0 == i ? e.nextSibling : 1 == i ? e.firstChild : 2 == i ? e : null, r.forEach(function(t) {
                                if (a) t = t.cloneNode(!0);
                                else if (!n) return $(t).remove();
                                x(n.insertBefore(t, e), function(t) { null == t.nodeName || "SCRIPT" !== t.nodeName.toUpperCase() || t.type && "text/javascript" !== t.type || t.src || window.eval.call(window, t.innerHTML) })
                            })
                        })
                    }, $.fn[o ? e + "To" : "insert" + (i ? "Before" : "After")] = function(t) { return $(t)[e](this), this }
                }), H.Z.prototype = $.fn, H.uniq = j, H.deserializeValue = w, $.zepto = H, $
            }();
            window.Zepto = i, void 0 === window.$ && (window.$ = i), t.exports = i,
                function(t) {
                    function e(t) { return t._zid || (t._zid = h++) }

                    function i(t, i, r, a) { if (i = o(i), i.ns) var s = n(i.ns); return (g[e(t)] || []).filter(function(t) { return t && (!i.e || t.e == i.e) && (!i.ns || s.test(t.ns)) && (!r || e(t.fn) === e(r)) && (!a || t.sel == a) }) }

                    function o(t) { var e = ("" + t).split("."); return { e: e[0], ns: e.slice(1).sort().join(" ") } }

                    function n(t) { return new RegExp("(?:^| )" + t.replace(" ", " .* ?") + "(?: |$)") }

                    function r(t, e) { return t.del && !v && t.e in w || !!e }

                    function a(t) { return x[t] || v && w[t] || t }

                    function s(i, n, s, c, d, h, f) {
                        var u = e(i),
                            m = g[u] || (g[u] = []);
                        n.split(/\s/).forEach(function(e) {
                            if ("ready" == e) return t(document).ready(s);
                            var n = o(e);
                            n.fn = s, n.sel = d, n.e in x && (s = function(e) { var i = e.relatedTarget; if (!i || i !== this && !t.contains(this, i)) return n.fn.apply(this, arguments) }), n.del = h;
                            var u = h || s;
                            n.proxy = function(t) { if (t = l(t), !t.isImmediatePropagationStopped()) { t.data = c; var e = u.apply(i, t._args == p ? [t] : [t].concat(t._args)); return e === !1 && (t.preventDefault(), t.stopPropagation()), e } }, n.i = m.length, m.push(n), "addEventListener" in i && i.addEventListener(a(n.e), n.proxy, r(n, f))
                        })
                    }

                    function c(t, o, n, s, c) {
                        var l = e(t);
                        (o || "").split(/\s/).forEach(function(e) { i(t, e, n, s).forEach(function(e) { delete g[l][e.i], "removeEventListener" in t && t.removeEventListener(a(e.e), e.proxy, r(e, c)) }) })
                    }

                    function l(e, i) {
                        return !i && e.isDefaultPrevented || (i || (i = e), t.each(z, function(t, o) {
                            var n = i[t];
                            e[t] = function() { return this[o] = k, n && n.apply(i, arguments) }, e[o] = y
                        }), (i.defaultPrevented !== p ? i.defaultPrevented : "returnValue" in i ? i.returnValue === !1 : i.getPreventDefault && i.getPreventDefault()) && (e.isDefaultPrevented = k)), e
                    }

                    function d(t) { var e, i = { originalEvent: t }; for (e in t) $.test(e) || t[e] === p || (i[e] = t[e]); return l(i, t) }
                    var p, h = 1,
                        f = Array.prototype.slice,
                        u = t.isFunction,
                        m = function(t) { return "string" == typeof t },
                        g = {},
                        b = {},
                        v = "onfocusin" in window,
                        w = { focus: "focusin", blur: "focusout" },
                        x = { mouseenter: "mouseover", mouseleave: "mouseout" };
                    b.click = b.mousedown = b.mouseup = b.mousemove = "MouseEvents", t.event = { add: s, remove: c }, t.proxy = function(i, o) { if (u(i)) { var n = function() { return i.apply(o, arguments) }; return n._zid = e(i), n } if (m(o)) return t.proxy(i[o], i); throw new TypeError("expected function") }, t.fn.bind = function(t, e, i) { return this.on(t, e, i) }, t.fn.unbind = function(t, e) { return this.off(t, e) }, t.fn.one = function(t, e, i, o) { return this.on(t, e, i, o, 1) };
                    var k = function() { return !0 },
                        y = function() { return !1 },
                        $ = /^([A-Z]|returnValue$|layer[XY]$)/,
                        z = { preventDefault: "isDefaultPrevented", stopImmediatePropagation: "isImmediatePropagationStopped", stopPropagation: "isPropagationStopped" };
                    t.fn.delegate = function(t, e, i) { return this.on(e, t, i) }, t.fn.undelegate = function(t, e, i) { return this.off(e, t, i) }, t.fn.live = function(e, i) { return t(document.body).delegate(this.selector, e, i), this }, t.fn.die = function(e, i) { return t(document.body).undelegate(this.selector, e, i), this }, t.fn.on = function(e, i, o, n, r) { var a, l, h = this; return e && !m(e) ? (t.each(e, function(t, e) { h.on(t, i, o, e, r) }), h) : (m(i) || u(n) || n === !1 || (n = o, o = i, i = p), (u(o) || o === !1) && (n = o, o = p), n === !1 && (n = y), h.each(function(p, h) { r && (a = function(t) { return c(h, t.type, n), n.apply(this, arguments) }), i && (l = function(e) { var o, r = t(e.target).closest(i, h).get(0); if (r && r !== h) return o = t.extend(d(e), { currentTarget: r, liveFired: h }), (a || n).apply(r, [o].concat(f.call(arguments, 1))) }), s(h, e, n, o, i, l || a) })) }, t.fn.off = function(e, i, o) { var n = this; return e && !m(e) ? (t.each(e, function(t, e) { n.off(t, i, e) }), n) : (m(i) || u(o) || o === !1 || (o = i, i = p), o === !1 && (o = y), n.each(function() { c(this, e, o, i) })) }, t.fn.trigger = function(e, i) { return e = m(e) || t.isPlainObject(e) ? t.Event(e) : l(e), e._args = i, this.each(function() { "dispatchEvent" in this ? this.dispatchEvent(e) : t(this).triggerHandler(e, i) }) }, t.fn.triggerHandler = function(e, o) { var n, r; return this.each(function(a, s) { n = d(m(e) ? t.Event(e) : e), n._args = o, n.target = s, t.each(i(s, e.type || e), function(t, e) { if (r = e.proxy(n), n.isImmediatePropagationStopped()) return !1 }) }), r }, "focusin focusout load resize scroll unload click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select keydown keypress keyup error".split(" ").forEach(function(e) { t.fn[e] = function(t) { return t ? this.bind(e, t) : this.trigger(e) } }), ["focus", "blur"].forEach(function(e) { t.fn[e] = function(t) { return t ? this.bind(e, t) : this.each(function() { try { this[e]() } catch (t) {} }), this } }), t.Event = function(t, e) {
                        m(t) || (e = t, t = e.type);
                        var i = document.createEvent(b[t] || "Events"),
                            o = !0;
                        if (e)
                            for (var n in e) "bubbles" == n ? o = !!e[n] : i[n] = e[n];
                        return i.initEvent(t, o, !0), l(i)
                    }
                }(i),
                function(t) {
                    function e(e, i, o) { var n = t.Event(i); return t(e).trigger(n, o), !n.isDefaultPrevented() }

                    function i(t, i, o, n) { if (t.global) return e(i || v, o, n) }

                    function o(e) { e.global && 0 === t.active++ && i(e, null, "ajaxStart") }

                    function n(e) { e.global && !--t.active && i(e, null, "ajaxStop") }

                    function r(t, e) { var o = e.context; return e.beforeSend.call(o, t, e) !== !1 && i(e, o, "ajaxBeforeSend", [t, e]) !== !1 && void i(e, o, "ajaxSend", [t, e]) }

                    function a(t, e, o, n) {
                        var r = o.context,
                            a = "success";
                        o.success.call(r, t, a, e), n && n.resolveWith(r, [t, a, e]), i(o, r, "ajaxSuccess", [e, o, t]), c(a, e, o)
                    }

                    function s(t, e, o, n, r) {
                        var a = n.context;
                        n.error.call(a, o, e, t), r && r.rejectWith(a, [o, e, t]), i(n, a, "ajaxError", [o, n, t || e]), c(e, o, n)
                    }

                    function c(t, e, o) {
                        var r = o.context;
                        o.complete.call(r, e, t), i(o, r, "ajaxComplete", [e, o]), n(o)
                    }

                    function l() {}

                    function d(t) { return t && (t = t.split(";", 2)[0]), t && (t == $ ? "html" : t == y ? "json" : x.test(t) ? "script" : k.test(t) && "xml") || "text" }

                    function p(t, e) { return "" == e ? t : (t + "&" + e).replace(/[&?]{1,2}/, "?") }

                    function h(e) { e.processData && e.data && "string" != t.type(e.data) && (e.data = t.param(e.data, e.traditional)), !e.data || e.type && "GET" != e.type.toUpperCase() || (e.url = p(e.url, e.data), e.data = void 0) }

                    function f(e, i, o, n) { return t.isFunction(i) && (n = o, o = i, i = void 0), t.isFunction(o) || (n = o, o = void 0), { url: e, data: i, success: o, dataType: n } }

                    function u(e, i, o, n) {
                        var r, a = t.isArray(i),
                            s = t.isPlainObject(i);
                        t.each(i, function(i, c) { r = t.type(c), n && (i = o ? n : n + "[" + (s || "object" == r || "array" == r ? i : "") + "]"), !n && a ? e.add(c.name, c.value) : "array" == r || !o && "object" == r ? u(e, c, o, i) : e.add(i, c) })
                    }
                    var m, g, b = 0,
                        v = window.document,
                        w = /<script\b[^<]*(?:(?!<\/script>)<[^<]*)*<\/script>/gi,
                        x = /^(?:text|application)\/javascript/i,
                        k = /^(?:text|application)\/xml/i,
                        y = "application/json",
                        $ = "text/html",
                        z = /^\s*$/;
                    t.active = 0, t.ajaxJSONP = function(e, i) {
                        if (!("type" in e)) return t.ajax(e);
                        var o, n, c = e.jsonpCallback,
                            l = (t.isFunction(c) ? c() : c) || "jsonp" + ++b,
                            d = v.createElement("script"),
                            p = window[l],
                            h = function(e) { t(d).triggerHandler("error", e || "abort") },
                            f = { abort: h };
                        return i && i.promise(f), t(d).on("load error", function(r, c) { clearTimeout(n), t(d).off().remove(), "error" != r.type && o ? a(o[0], f, e, i) : s(null, c || "error", f, e, i), window[l] = p, o && t.isFunction(p) && p(o[0]), p = o = void 0 }), r(f, e) === !1 ? (h("abort"), f) : (window[l] = function() { o = arguments }, d.src = e.url.replace(/\?(.+)=\?/, "?$1=" + l), v.head.appendChild(d), e.timeout > 0 && (n = setTimeout(function() { h("timeout") }, e.timeout)), f)
                    }, t.ajaxSettings = { type: "GET", beforeSend: l, success: l, error: l, complete: l, context: null, global: !0, xhr: function() { return new window.XMLHttpRequest }, accepts: { script: "text/javascript, application/javascript, application/x-javascript", json: y, xml: "application/xml, text/xml", html: $, text: "text/plain" }, crossDomain: !1, timeout: 0, processData: !0, cache: !0 }, t.ajax = function(e) {
                        var i = t.extend({}, e || {}),
                            n = t.Deferred && t.Deferred();
                        for (m in t.ajaxSettings) void 0 === i[m] && (i[m] = t.ajaxSettings[m]);
                        o(i), i.crossDomain || (i.crossDomain = /^([\w-]+:)?\/\/([^\/]+)/.test(i.url) && RegExp.$2 != window.location.host), i.url || (i.url = window.location.toString()), h(i), i.cache === !1 && (i.url = p(i.url, "_=" + Date.now()));
                        var c = i.dataType,
                            f = /\?.+=\?/.test(i.url);
                        if ("jsonp" == c || f) return f || (i.url = p(i.url, i.jsonp ? i.jsonp + "=?" : i.jsonp === !1 ? "" : "callback=?")), t.ajaxJSONP(i, n);
                        var u, b = i.accepts[c],
                            v = {},
                            w = function(t, e) { v[t.toLowerCase()] = [t, e] },
                            x = /^([\w-]+:)\/\//.test(i.url) ? RegExp.$1 : window.location.protocol,
                            k = i.xhr(),
                            y = k.setRequestHeader;
                        if (n && n.promise(k), i.crossDomain || w("X-Requested-With", "XMLHttpRequest"), w("Accept", b || "*/*"), (b = i.mimeType || b) && (b.indexOf(",") > -1 && (b = b.split(",", 2)[0]), k.overrideMimeType && k.overrideMimeType(b)), (i.contentType || i.contentType !== !1 && i.data && "GET" != i.type.toUpperCase()) && w("Content-Type", i.contentType || "application/x-www-form-urlencoded"), i.headers)
                            for (g in i.headers) w(g, i.headers[g]);
                        if (k.setRequestHeader = w, k.onreadystatechange = function() { if (4 == k.readyState) { k.onreadystatechange = l, clearTimeout(u); var e, o = !1; if (k.status >= 200 && k.status < 300 || 304 == k.status || 0 == k.status && "file:" == x) { c = c || d(i.mimeType || k.getResponseHeader("content-type")), e = k.responseText; try { "script" == c ? (0, eval)(e) : "xml" == c ? e = k.responseXML : "json" == c && (e = z.test(e) ? null : t.parseJSON(e)) } catch (r) { o = r } o ? s(o, "parsererror", k, i, n) : a(e, k, i, n) } else s(k.statusText || null, k.status ? "error" : "abort", k, i, n) } }, r(k, i) === !1) return k.abort(), s(null, "abort", k, i, n), k;
                        if (i.xhrFields)
                            for (g in i.xhrFields) k[g] = i.xhrFields[g];
                        var $ = !("async" in i) || i.async;
                        k.open(i.type, i.url, $, i.username, i.password);
                        for (g in v) y.apply(k, v[g]);
                        return i.timeout > 0 && (u = setTimeout(function() { k.onreadystatechange = l, k.abort(), s(null, "timeout", k, i, n) }, i.timeout)), k.send(i.data ? i.data : null), k
                    }, t.get = function() { return t.ajax(f.apply(null, arguments)) }, t.post = function() { var e = f.apply(null, arguments); return e.type = "POST", t.ajax(e) }, t.getJSON = function() { var e = f.apply(null, arguments); return e.dataType = "json", t.ajax(e) }, t.fn.load = function(e, i, o) {
                        if (!this.length) return this;
                        var n, r = this,
                            a = e.split(/\s/),
                            s = f(e, i, o),
                            c = s.success;
                        return a.length > 1 && (s.url = a[0], n = a[1]), s.success = function(e) { r.html(n ? t("<div>").html(e.replace(w, "")).find(n) : e), c && c.apply(r, arguments) }, t.ajax(s), this
                    };
                    var C = encodeURIComponent;
                    t.param = function(t, e) { var i = []; return i.add = function(t, e) { this.push(C(t) + "=" + C(e)) }, u(i, t, e), i.join("&").replace(/%20/g, "+") }
                }(i),
                function(t) {
                    t.fn.serializeArray = function() { var e, i = []; return t([].slice.call(this.get(0).elements)).each(function() { e = t(this); var o = e.attr("type"); "fieldset" != this.nodeName.toLowerCase() && !this.disabled && "submit" != o && "reset" != o && "button" != o && ("radio" != o && "checkbox" != o || this.checked) && i.push({ name: e.attr("name"), value: e.val() }) }), i }, t.fn.serializeObject = function() {
                        var e, i = {};
                        return t([].slice.call(this.get(0).elements)).each(function() {
                            e = t(this);
                            var o = e.attr("type"),
                                n = e.attr("name"),
                                r = e.val();
                            i[n] = i[n] || void 0, "fieldset" != this.nodeName.toLowerCase() && !this.disabled && "submit" != o && "reset" != o && "button" != o && ("radio" != o && "checkbox" != o || this.checked) && (i[n] ? i[n].push ? i[n].push(r) : i[n] = [i[n], r] : i[n] = r)
                        }), i
                    }, t.fn.serialize = function() { var t = []; return this.serializeArray().forEach(function(e) { t.push(encodeURIComponent(e.name) + "=" + encodeURIComponent(e.value)) }), t.join("&") }, t.fn.submit = function(e) {
                        if (e) this.bind("submit", e);
                        else if (this.length) {
                            var i = t.Event("submit");
                            this.eq(0).trigger(i), i.isDefaultPrevented() || this.get(0).submit()
                        }
                        return this
                    }
                }(i),
                function(t) {
                    "__proto__" in {} || t.extend(t.zepto, { Z: function(e, i) { return e = e || [], t.extend(e, t.fn), e.selector = i || "", e.__Z = !0, e }, isZ: function(e) { return "array" === t.type(e) && "__Z" in e } });
                    try { getComputedStyle(void 0) } catch (e) {
                        var i = getComputedStyle;
                        window.getComputedStyle = function(t) { try { return i(t) } catch (e) { return null } }
                    }
                }(i),
                function(t) {
                    function e(e, o) {
                        var c = e[s],
                            l = c && n[c];
                        if (void 0 === o) return l || i(e);
                        if (l) { if (o in l) return l[o]; var d = a(o); if (d in l) return l[d] }
                        return r.call(t(e), o)
                    }

                    function i(e, i, r) {
                        var c = e[s] || (e[s] = ++t.uuid),
                            l = n[c] || (n[c] = o(e));
                        return void 0 !== i && (l[a(i)] = r), l
                    }

                    function o(e) { var i = {}; return t.each(e.attributes || c, function(e, o) { 0 == o.name.indexOf("data-") && (i[a(o.name.replace("data-", ""))] = t.zepto.deserializeValue(o.value)) }), i }
                    var n = {},
                        r = t.fn.data,
                        a = t.camelCase,
                        s = t.expando = "Zepto" + +new Date,
                        c = [];
                    t.fn.data = function(o, n) { return void 0 === n ? t.isPlainObject(o) ? this.each(function(e, n) { t.each(o, function(t, e) { i(n, t, e) }) }) : 0 == this.length ? void 0 : e(this[0], o) : this.each(function() { i(this, o, n) }) }, t.fn.removeData = function(e) {
                        return "string" == typeof e && (e = e.split(/\s+/)), this.each(function() {
                            var i = this[s],
                                o = i && n[i];
                            o && t.each(e || o, function(t) { delete o[e ? a(this) : t] })
                        })
                    }, ["remove", "empty"].forEach(function(e) {
                        var i = t.fn[e];
                        t.fn[e] = function() { var t = this.find("*"); return "remove" === e && (t = t.add(this)), t.removeData(), i.call(this) }
                    })
                }(i),
                function(t) {
                    t.Callbacks = function(e) {
                        e = t.extend({}, e);
                        var i, o, n, r, a, s, c = [],
                            l = !e.once && [],
                            d = function(t) {
                                for (i = e.memory && t, o = !0, s = r || 0, r = 0, a = c.length, n = !0; c && s < a; ++s)
                                    if (c[s].apply(t[0], t[1]) === !1 && e.stopOnFalse) { i = !1; break }
                                n = !1, c && (l ? l.length && d(l.shift()) : i ? c.length = 0 : p.disable())
                            },
                            p = {
                                add: function() {
                                    if (c) {
                                        var o = c.length,
                                            s = function(i) { t.each(i, function(t, i) { "function" == typeof i ? e.unique && p.has(i) || c.push(i) : i && i.length && "string" != typeof i && s(i) }) };
                                        s(arguments), n ? a = c.length : i && (r = o, d(i))
                                    }
                                    return this
                                },
                                remove: function() {
                                    return c && t.each(arguments, function(e, i) {
                                        for (var o;
                                            (o = t.inArray(i, c, o)) > -1;) c.splice(o, 1), n && (o <= a && --a, o <= s && --s)
                                    }), this
                                },
                                has: function(e) { return !(!c || !(e ? t.inArray(e, c) > -1 : c.length)) },
                                empty: function() { return a = c.length = 0, this },
                                disable: function() { return c = l = i = void 0, this },
                                disabled: function() { return !c },
                                lock: function() { return l = void 0, i || p.disable(), this },
                                locked: function() { return !l },
                                fireWith: function(t, e) { return !c || o && !l || (e = e || [], e = [t, e.slice ? e.slice() : e], n ? l.push(e) : d(e)), this },
                                fire: function() { return p.fireWith(this, arguments) },
                                fired: function() { return !!o }
                            };
                        return p
                    }
                }(i),
                function(t) {
                    function e(i) {
                        var o = [
                                ["resolve", "done", t.Callbacks({ once: 1, memory: 1 }), "resolved"],
                                ["reject", "fail", t.Callbacks({ once: 1, memory: 1 }), "rejected"],
                                ["notify", "progress", t.Callbacks({ memory: 1 })]
                            ],
                            n = "pending",
                            r = {
                                state: function() { return n },
                                always: function() { return a.done(arguments).fail(arguments), this },
                                then: function() {
                                    var i = arguments;
                                    return e(function(e) {
                                        t.each(o, function(o, n) {
                                            var s = t.isFunction(i[o]) && i[o];
                                            a[n[1]](function() {
                                                var i = s && s.apply(this, arguments);
                                                if (i && t.isFunction(i.promise)) i.promise().done(e.resolve).fail(e.reject).progress(e.notify);
                                                else {
                                                    var o = this === r ? e.promise() : this,
                                                        a = s ? [i] : arguments;
                                                    e[n[0] + "With"](o, a)
                                                }
                                            })
                                        }), i = null
                                    }).promise()
                                },
                                promise: function(e) { return null != e ? t.extend(e, r) : r }
                            },
                            a = {};
                        return t.each(o, function(t, e) {
                            var i = e[2],
                                s = e[3];
                            r[e[1]] = i.add, s && i.add(function() { n = s }, o[1 ^ t][2].disable, o[2][2].lock), a[e[0]] = function() { return a[e[0] + "With"](this === a ? r : this, arguments), this }, a[e[0] + "With"] = i.fireWith
                        }), r.promise(a), i && i.call(a, a), a
                    }
                    var i = Array.prototype.slice;
                    t.when = function(o) {
                        var n, r, a, s = i.call(arguments),
                            c = s.length,
                            l = 0,
                            d = 1 !== c || o && t.isFunction(o.promise) ? c : 0,
                            p = 1 === d ? o : e(),
                            h = function(t, e, o) { return function(r) { e[t] = this, o[t] = arguments.length > 1 ? i.call(arguments) : r, o === n ? p.notifyWith(e, o) : --d || p.resolveWith(e, o) } };
                        if (c > 1)
                            for (n = new Array(c), r = new Array(c), a = new Array(c); l < c; ++l) s[l] && t.isFunction(s[l].promise) ? s[l].promise().done(h(l, a, s)).fail(p.reject).progress(h(l, r, n)) : --d;
                        return d || p.resolveWith(a, s), p.promise()
                    }, t.Deferred = e
                }(i),
                function(t) {
                    t.fn.end = function() { return this.prevObject || t() }, t.fn.andSelf = function() { return this.add(this.prevObject || t()) }, "filter,add,not,eq,first,last,find,closest,parents,parent,children,siblings".split(",").forEach(function(e) {
                        var i = t.fn[e];
                        t.fn[e] = function() { var t = i.apply(this, arguments); return t.prevObject = this, t }
                    })
                }(i),
                function(t) {
                    function e(t, e, i, o) { return Math.abs(t - e) >= Math.abs(i - o) ? t - e > 0 ? "Left" : "Right" : i - o > 0 ? "Up" : "Down" }

                    function i() { d = null, h.last && (h.el.trigger("longTap"), h = {}) }

                    function o() { d && clearTimeout(d), d = null }

                    function n() { s && clearTimeout(s), c && clearTimeout(c), l && clearTimeout(l), d && clearTimeout(d), s = c = l = d = null, h = {} }

                    function r(t) { return ("touch" == t.pointerType || t.pointerType == t.MSPOINTER_TYPE_TOUCH) && t.isPrimary }

                    function a(t, e) { return t.type == "pointer" + e || t.type.toLowerCase() == "mspointer" + e }
                    var s, c, l, d, p, h = {},
                        f = 750;
                    t(document).ready(function() {
                        var u, m, g, b, v = 0,
                            w = 0;
                        "MSGesture" in window && (p = new MSGesture, p.target = document.body), t(document).bind("MSGestureEnd", function(t) {
                            var e = t.velocityX > 1 ? "Right" : t.velocityX < -1 ? "Left" : t.velocityY > 1 ? "Down" : t.velocityY < -1 ? "Up" : null;
                            e && (h.el.trigger("swipe"), h.el.trigger("swipe" + e))
                        }).on("touchstart MSPointerDown pointerdown", function(e) {
                            (b = a(e, "down")) && !r(e) || (g = b ? e : e.touches[0], e.touches && 1 === e.touches.length && h.x2 && (h.x2 = void 0, h.y2 = void 0), u = Date.now(), m = u - (h.last || u), h.el = t("tagName" in g.target ? g.target : g.target.parentNode), s && clearTimeout(s), h.x1 = g.pageX, h.y1 = g.pageY, m > 0 && m <= 250 && (h.isDoubleTap = !0), h.last = u, d = setTimeout(i, f), p && b && p.addPointer(e.pointerId))
                        }).on("touchmove MSPointerMove pointermove", function(t) {
                            (b = a(t, "move")) && !r(t) || (g = b ? t : t.touches[0], o(), h.x2 = g.pageX, h.y2 = g.pageY, v += Math.abs(h.x1 - h.x2), w += Math.abs(h.y1 - h.y2))
                        }).on("touchend MSPointerUp pointerup", function(i) {
                            (b = a(i, "up")) && !r(i) || (o(), h.x2 && Math.abs(h.x1 - h.x2) > 30 || h.y2 && Math.abs(h.y1 - h.y2) > 30 ? l = setTimeout(function() { h.el && h.el.trigger("swipe"), h.el && h.el.trigger("swipe" + e(h.x1, h.x2, h.y1, h.y2)), h = {} }, 0) : "last" in h && (v < 30 && w < 30 ? c = setTimeout(function() {
                                var e = t.Event("tap");
                                e.cancelTouch = n, h.el && h.el.trigger(e), h.isDoubleTap ? (h.el && h.el.trigger("doubleTap"), h = {}) : s = setTimeout(function() { s = null, h.el && h.el.trigger("singleTap"), h = {} }, 250)
                            }, 0) : h = {}), v = w = 0)
                        }).on("touchcancel MSPointerCancel pointercancel", n), t(window).on("scroll", n)
                    }), ["swipe", "swipeLeft", "swipeRight", "swipeUp", "swipeDown", "doubleTap", "tap", "singleTap", "longTap"].forEach(function(e) { t.fn[e] = function(t) { return this.on(e, t) } })
                }(i),
                function(t, e) {
                    function i(t) { return t.replace(/([a-z])([A-Z])/, "$1-$2").toLowerCase() }

                    function o(t) { return n ? n + t : t.toLowerCase() }
                    var n, r, a, s, c, l, d, p, h, f, u = "",
                        m = { Webkit: "webkit", Moz: "", O: "o" },
                        g = window.document,
                        b = g.createElement("div"),
                        v = /^((translate|rotate|scale)(X|Y|Z|3d)?|matrix(3d)?|perspective|skew(X|Y)?)$/i,
                        w = {};
                    t.each(m, function(t, i) { if (b.style[t + "TransitionProperty"] !== e) return u = "-" + t.toLowerCase() + "-", n = i, !1 }), r = u + "transform", w[a = u + "transition-property"] = w[s = u + "transition-duration"] = w[l = u + "transition-delay"] = w[c = u + "transition-timing-function"] = w[d = u + "animation-name"] = w[p = u + "animation-duration"] = w[f = u + "animation-delay"] = w[h = u + "animation-timing-function"] = "", t.fx = { off: n === e && b.style.transitionProperty === e, speeds: { _default: 400, fast: 200, slow: 600 }, cssPrefix: u, transitionEnd: o("TransitionEnd"), animationEnd: o("AnimationEnd") }, t.fn.animate = function(i, o, n, r, a) { return t.isFunction(o) && (r = o, n = e, o = e), t.isFunction(n) && (r = n, n = e), t.isPlainObject(o) && (n = o.easing, r = o.complete, a = o.delay, o = o.duration), o && (o = ("number" == typeof o ? o : t.fx.speeds[o] || t.fx.speeds._default) / 1e3), a && (a = parseFloat(a) / 1e3), this.anim(i, o, n, r, a) }, t.fn.anim = function(o, n, u, m, g) {
                        var b, x, k, y = {},
                            $ = "",
                            z = this,
                            C = t.fx.transitionEnd,
                            j = !1;
                        if (n === e && (n = t.fx.speeds._default / 1e3), g === e && (g = 0), t.fx.off && (n = 0), "string" == typeof o) y[d] = o, y[p] = n + "s", y[f] = g + "s", y[h] = u || "linear", C = t.fx.animationEnd;
                        else {
                            x = [];
                            for (b in o) v.test(b) ? $ += b + "(" + o[b] + ") " : (y[b] = o[b], x.push(i(b)));
                            $ && (y[r] = $, x.push(r)), n > 0 && "object" == typeof o && (y[a] = x.join(", "), y[s] = n + "s", y[l] = g + "s", y[c] = u || "linear")
                        }
                        return k = function(e) {
                            if ("undefined" != typeof e) {
                                if (e.target !== e.currentTarget) return;
                                t(e.target).unbind(C, k)
                            } else t(this).unbind(C, k);
                            j = !0, t(this).css(w), m && m.call(this)
                        }, n > 0 && (this.bind(C, k), setTimeout(function() { j || k.call(z) }, 1e3 * n + 25)), this.size() && this.get(0).clientLeft, this.css(y), n <= 0 && setTimeout(function() { z.each(function() { k.call(this) }) }, 0), this
                    }, b = null
                }(i),
                function(t) {
                    function e(e) { return e = t(e), !(!e.width() && !e.height()) && "none" !== e.css("display") }

                    function i(t, e) {
                        t = t.replace(/=#\]/g, '="#"]');
                        var i, o, n = s.exec(t);
                        if (n && n[2] in a && (i = a[n[2]], o = n[3], t = n[1], o)) {
                            var r = Number(o);
                            o = isNaN(r) ? o.replace(/^["']|["']$/g, "") : r
                        }
                        return e(t, i, o)
                    }
                    var o = t.zepto,
                        n = o.qsa,
                        r = o.matches,
                        a = t.expr[":"] = { visible: function() { if (e(this)) return this }, hidden: function() { if (!e(this)) return this }, selected: function() { if (this.selected) return this }, checked: function() { if (this.checked) return this }, parent: function() { return this.parentNode }, first: function(t) { if (0 === t) return this }, last: function(t, e) { if (t === e.length - 1) return this }, eq: function(t, e, i) { if (t === i) return this }, contains: function(e, i, o) { if (t(this).text().indexOf(o) > -1) return this }, has: function(t, e, i) { if (o.qsa(this, i).length) return this } },
                        s = new RegExp("(.*):(\\w+)(?:\\(([^)]+)\\))?$\\s*"),
                        c = /^\s*>/,
                        l = "Zepto" + +new Date;
                    o.qsa = function(e, r) { return i(r, function(i, a, s) { try { var d;!i && a ? i = "*" : c.test(i) && (d = t(e).addClass(l), i = "." + l + " " + i); var p = n(e, i) } catch (h) { throw console.error("error performing selector: %o", r), h } finally { d && d.removeClass(l) } return a ? o.uniq(t.map(p, function(t, e) { return a.call(t, e, p, s) })) : p }) }, o.matches = function(t, e) { return i(e, function(e, i, o) { return (!e || r(t, e)) && (!i || i.call(t, null, o) === t) }) }
                }(i),
                function(t) {
                    function e(t) {
                        var e = this.os = {},
                            i = this.browser = {},
                            o = t.match(/Web[kK]it[\/]{0,1}([\d.]+)/),
                            n = t.match(/(Android);?[\s\/]+([\d.]+)?/),
                            r = t.match(/(iPad).*OS\s([\d_]+)/),
                            a = t.match(/(iPod)(.*OS\s([\d_]+))?/),
                            s = !r && t.match(/(iPhone\sOS)\s([\d_]+)/),
                            c = t.match(/(webOS|hpwOS)[\s\/]([\d.]+)/),
                            l = c && t.match(/TouchPad/),
                            d = t.match(/Kindle\/([\d.]+)/),
                            p = t.match(/Silk\/([\d._]+)/),
                            h = t.match(/(BlackBerry).*Version\/([\d.]+)/),
                            f = t.match(/(BB10).*Version\/([\d.]+)/),
                            u = t.match(/(RIM\sTablet\sOS)\s([\d.]+)/),
                            m = t.match(/PlayBook/),
                            g = t.match(/Chrome\/([\d.]+)/) || t.match(/CriOS\/([\d.]+)/),
                            b = t.match(/Firefox\/([\d.]+)/),
                            v = t.match(/MSIE\s([\d.]+)/),
                            w = o && t.match(/Mobile\//) && !g,
                            x = t.match(/(iPhone|iPod|iPad).*AppleWebKit(?!.*Safari)/) && !g;
                        (i.webkit = !!o) && (i.version = o[1]), n && (e.android = !0, e.version = n[2]), s && !a && (e.ios = e.iphone = !0, e.version = s[2].replace(/_/g, ".")), r && (e.ios = e.ipad = !0, e.version = r[2].replace(/_/g, ".")), a && (e.ios = e.ipod = !0, e.version = a[3] ? a[3].replace(/_/g, ".") : null), c && (e.webos = !0, e.version = c[2]), l && (e.touchpad = !0), h && (e.blackberry = !0, e.version = h[2]), f && (e.bb10 = !0, e.version = f[2]), u && (e.rimtabletos = !0, e.version = u[2]), m && (i.playbook = !0), d && (e.kindle = !0, e.version = d[1]), p && (i.silk = !0, i.version = p[1]), !p && e.android && t.match(/Kindle Fire/) && (i.silk = !0), g && (i.chrome = !0, i.version = g[1]), b && (i.firefox = !0, i.version = b[1]), v && (i.ie = !0, i.version = v[1]), w && (t.match(/Safari/) || e.ios) && (i.safari = !0), x && (i.webview = !0), e.tablet = !!(r || m || n && !t.match(/Mobile/) || b && t.match(/Tablet/) || v && !t.match(/Phone/) && t.match(/Touch/)), e.phone = !(e.tablet || e.ipod || !(n || s || c || h || f || g && t.match(/Android/) || g && t.match(/CriOS\/([\d.]+)/) || b && t.match(/Mobile/) || v && t.match(/Touch/)))
                    }
                    e.call(t, navigator.userAgent), t.__detect = e
                }(i), t.exports = i
        }, function(t, e, i) {
            var o = i(26);
            e.init = function(t) { this.config = t, $("body").removeClass("loading").append(o()), Widget.initWidgets() }, e.lazyload = Widget.define({
                init: function(t) { this.config = t, this.$img = this.config.$lazyloadImg, this.tempImgArr = [], this.createTempImg(this.$img), this.changeSrc() },
                createTempImg: function(t) {
                    var e = this;
                    t.each(function() {
                        var t = $(this).data("url"),
                            i = new Image;
                        i.src = t, e.tempImgArr.push(i)
                    })
                },
                changeSrc: function() {
                    var t = this;
                    $(this.tempImgArr).each(function() {
                        var e = this;
                        this.onload = function() {
                            var i = $(t.tempImgArr).index(e),
                                o = e.src;
                            $(t.$img[i]).attr("src", o)
                        }
                    })
                }
            }), e.scrollLazyLoad = Widget.define({
                init: function() {
                    var t = this;
                    this.loadImg(), this.resizeImg(), $("body").on("add", ".js-lazy-load", function() { t.loadImg(), t.resizeImg() })
                },
                loadImg: function() {
                    var t = $(".js-lazy-load");
                    if (t && t.length) {
                        t.each(function() {
                            var t = $(this).offset().top;
                            $(this).data("offsetTop", t)
                        });
                        var e = $(window).height(),
                            i = null,
                            o = function() {
                                clearTimeout(i), i = setTimeout(function() {
                                    var i = $(window).scrollTop();
                                    t.each(function() {
                                        var t = $(this).data("original");
                                        if (t) {
                                            var o = $(this).data("offsetTop");
                                            i + e + 300 > o && ($(this).attr("src", t), $(this).data("original", ""))
                                        }
                                    }, 20)
                                })
                            };
                        $(window).on("scroll", o), $(window).trigger("scroll")
                    }
                },
                resizeImg: function() {
                    var t = document.documentElement.clientWidth,
                        e = t / 2 - 15,
                        i = e / 1.526;
                    $(".list_post_image_size").css({ width: e, height: i })
                }
            })
        }, , function(t, e, i) {
            "use strict";

            function o(t) { var e = l.exec(t); return { protocol: e[1] ? e[1].toLowerCase() : "", slashes: !!e[2], rest: e[3] } }

            function n(t, e) { for (var i = (e || "/").split("/").slice(0, -1).concat(t.split("/")), o = i.length, n = i[o - 1], r = !1, a = 0; o--;) "." === i[o] ? i.splice(o, 1) : ".." === i[o] ? (i.splice(o, 1), a++) : a && (0 === o && (r = !0), i.splice(o, 1), a--); return r && i.unshift(""), "." !== n && ".." !== n || i.push(""), i.join("/") }

            function r(t, e, i) {
                if (!(this instanceof r)) return new r(t, e, i);
                var l, p, h, f, u, m, g = d.slice(),
                    b = typeof e,
                    v = this,
                    w = 0;
                for ("object" !== b && "string" !== b && (i = e, e = null), i && "function" != typeof i && (i = c.parse), e = s(e), p = o(t || ""), l = !p.protocol && !p.slashes, v.slashes = p.slashes || l && e.slashes, v.protocol = p.protocol || e.protocol || "", t = p.rest, p.slashes || (g[2] = [/(.*)/, "pathname"]); w < g.length; w++) f = g[w], h = f[0], m = f[1], h !== h ? v[m] = t : "string" == typeof h ? ~(u = t.indexOf(h)) && ("number" == typeof f[2] ? (v[m] = t.slice(0, u), t = t.slice(u + f[2])) : (v[m] = t.slice(u), t = t.slice(0, u))) : (u = h.exec(t)) && (v[m] = u[1], t = t.slice(0, u.index)), v[m] = v[m] || (l && f[3] ? e[m] || "" : ""), f[4] && (v[m] = v[m].toLowerCase());
                i && (v.query = i(v.query)), l && e.slashes && "/" !== v.pathname.charAt(0) && ("" !== v.pathname || "" !== e.pathname) && (v.pathname = n(v.pathname, e.pathname)), a(v.port, v.protocol) || (v.host = v.hostname, v.port = ""), v.username = v.password = "", v.auth && (f = v.auth.split(":"), v.username = f[0] || "", v.password = f[1] || ""), v.origin = v.protocol && v.host && "file:" !== v.protocol ? v.protocol + "//" + v.host : "null", v.href = v.toString()
            }
            var a = i(37),
                s = i(39),
                c = i(36),
                l = /^([a-z][a-z0-9.+-]*:)?(\/\/)?([\S\s]*)/i,
                d = [
                    ["#", "hash"],
                    ["?", "query"],
                    ["/", "pathname"],
                    ["@", "auth", 1],
                    [NaN, "host", void 0, 1, 1],
                    [/:(\d+)$/, "port", void 0, 1],
                    [NaN, "hostname", void 0, 1, 1]
                ];
            r.prototype.set = function(t, e, i) {
                var o = this;
                switch (t) {
                    case "query":
                        "string" == typeof e && e.length && (e = (i || c.parse)(e)), o[t] = e;
                        break;
                    case "port":
                        o[t] = e, a(e, o.protocol) ? e && (o.host = o.hostname + ":" + e) : (o.host = o.hostname, o[t] = "");
                        break;
                    case "hostname":
                        o[t] = e, o.port && (e += ":" + o.port), o.host = e;
                        break;
                    case "host":
                        o[t] = e, /:\d+$/.test(e) ? (e = e.split(":"), o.port = e.pop(), o.hostname = e.join(":")) : (o.hostname = e, o.port = "");
                        break;
                    case "protocol":
                        o.protocol = e.toLowerCase(), o.slashes = !i;
                        break;
                    case "pathname":
                        o.pathname = e.length && "/" !== e.charAt(0) ? "/" + e : e;
                        break;
                    default:
                        o[t] = e
                }
                for (var n = 0; n < d.length; n++) {
                    var r = d[n];
                    r[4] && (o[r[1]] = o[r[1]].toLowerCase())
                }
                return o.origin = o.protocol && o.host && "file:" !== o.protocol ? o.protocol + "//" + o.host : "null", o.href = o.toString(), o
            }, r.prototype.toString = function(t) {
                t && "function" == typeof t || (t = c.stringify);
                var e, i = this,
                    o = i.protocol;
                o && ":" !== o.charAt(o.length - 1) && (o += ":");
                var n = o + (i.slashes ? "//" : "");
                return i.username && (n += i.username, i.password && (n += ":" + i.password), n += "@"), n += i.host + i.pathname, e = "object" == typeof i.query ? t(i.query) : i.query, e && (n += "?" !== e.charAt(0) ? "?" + e : e), i.hash && (n += i.hash), n
            }, r.extractProtocol = o, r.location = s, r.qs = c, t.exports = r
        }, function(t, e, i) {
            var o = i(20),
                n = i(8);
            e.slideBanner = n.define({
                init: function(t) {
                    var e = this;
                    this.$list = o(t.$list), this.$item = o(t.$item);
                    var i = this.$item.length / this.$list.length;
                    this.$item.css({ width: 100 / i + "%" }), this.$list.css({ width: 100 * i + "%" }), this.startX = 0, this.startY = 0, this.listWidth = 0, this.itemIndex = 0, this.itemWidth = 0, this.dist = 1, o("body").on("touchstart", '[data-role="item"]', function(t) { e.startX = t.touches[0].pageX, e.startY = window.scrollY }), o("body").on("touchmove", '[data-role="item"]', function(t) {
                        var i = o(this).parents('[data-role="list"]');
                        e.$list = i, e.listWidth = i.width(), e.itemIndex = parseInt(o(this).attr("data-index")), e.itemWidth = o(this).width();
                        var n = t.touches[0].pageX - e.startX,
                            r = window.scrollY - e.startY,
                            a = e.$list.find("img").eq(e.itemIndex + 1);
                        if (a.length > 0 && a.attr("src", a.attr("data-src")), Math.abs(r) < 30 && Math.abs(n) > 20) { var s = e.itemIndex * e.itemWidth - n; return s <= 50 - e.itemWidth ? s = 50 - e.itemWidth : s >= e.listWidth - 50 && (s = e.listWidth - 50), i.css({ marginLeft: -1 * s + "px" }), e.dist = n, !1 } e.dist = 0
                    }), o("body").on("touchend", '[data-role="item"]', function(t) {
                        var i = Math.round(e.listWidth / e.itemWidth),
                            o = parseInt(e.itemIndex);
                        e.dist < 0 ? o += 1 : e.dist > 0 && (o -= 1);
                        var n = e.$list.attr("data-href");
                        if (n && n.length > 1 && o >= i) return window.location.href = n, !1;
                        o < 0 ? o = 0 : o >= i && (o = i - 1);
                        var r = o * e.itemWidth;
                        e.$list.animate({ marginLeft: -1 * r + "px" });
                        var a = e.$list.siblings('[data-role="icon"]');
                        a.children().removeClass("active").eq(o).addClass("active");
                        var s = e.$list.siblings('[data-role="notice"]');
                        s.length > 0 && (o == i - 1 ? s.show() : s.hide())
                    })
                }
            })
        }, function(t, e, i) {
            var o = i(35),
                n = new o({ platform: "wap", line: "c2c", tracking_type: "click" });
            e.listen = function() {
                document.addEventListener("readystatechange", function() {
                    "complete" === document.readyState && $("body").on("click", "[data-gzlog]", function(t) {
                        var e = {},
                            i = $(t.currentTarget);
                        $.each(i.data("gzlog").split("&"), function(t, i) {
                            var o = i.split("=");
                            e[o[0]] = o[1]
                        }), n.send(e)
                    })
                })
            }
        }, function(module, exports) {
            module.exports = function(obj) {
                obj || (obj = {});
                var __t, __p = "";
                with(obj) __p += '<style type="text/css">\n\timg{width: 40%;}\n</style>\n<div data-widget="app/che/common/widget/lazyload/lazyload.js#lazyload">\n\t<img data-role="lazyloadImg" data-url="http://imgsrc.baidu.com/forum/pic/item/9f510fb30f2442a72c033b31d143ad4bd1130211.jpg" src="http://sta.ganjistatic1.com/src/image/mobile/wap/milan/detail_default_v0.png"/>\n\n\t<img data-role="lazyloadImg" data-url="http://img.tom61.com/down/bizhi/074/19456567.jpg" src="http://sta.ganjistatic1.com/src/image/mobile/wap/milan/detail_default_v0.png"/>\n\n\t<img data-role="lazyloadImg" data-url="http://img2.imgtn.bdimg.com/it/u=229109023,1728252595&fm=21&gp=0.jpg" src="http://sta.ganjistatic1.com/src/image/mobile/wap/milan/detail_default_v0.png"/>\n\n\t<img data-role="lazyloadImg" data-url="http://img5.imgtn.bdimg.com/it/u=585336956,916737495&fm=21&gp=0.jpg" src="http://sta.ganjistatic1.com/src/image/mobile/wap/milan/detail_default_v0.png"/>\n</div>\n';
                return __p
            }
        }, function(t, e, i) {
            function o(t) { return i(n(t)) }

            function n(t) { return r[t] || function() { throw new Error("Cannot find module '" + t + "'.") }() }
            var r = { "./baidualog": 5, "./baidualog.js": 5, "./base_page": 10, "./base_page.js": 10, "./check_user": 18, "./check_user.js": 18, "./geo": 17, "./geo.js": 17, "./gz_analytics": 7, "./gz_analytics.js": 7, "./lazyload/lazyload": 21, "./lazyload/lazyload.js": 21, "./lazyload/lazyload.tpl": 26, "./listImgSlide": 24, "./listImgSlide.js": 24, "./local_storage": 13, "./local_storage.js": 13, "./pinch_zoom": 14, "./pinch_zoom.js": 14, "./responsiveBanner": 19, "./responsiveBanner.js": 19, "./scroll": 15, "./scroll.js": 15, "./slide": 9, "./slide.js": 9, "./slider": 12, "./slider.js": 12, "./swipe": 16, "./swipe.js": 16, "./tracker/tracker": 25, "./tracker/tracker.js": 25 };
            o.keys = function() { return Object.keys(r) }, o.resolve = n, t.exports = o, o.id = 27
        }, , , , , function(t, e) {
            "use strict";

            function i(t, e) {
                var i = (65535 & t) + (65535 & e),
                    o = (t >> 16) + (e >> 16) + (i >> 16);
                return o << 16 | 65535 & i
            }

            function o(t, e) { return t << e | t >>> 32 - e }

            function n(t, e, n, r, a, s) { return i(o(i(i(e, t), i(r, s)), a), n) }

            function r(t, e, i, o, r, a, s) { return n(e & i | ~e & o, t, e, r, a, s) }

            function a(t, e, i, o, r, a, s) { return n(e & o | i & ~o, t, e, r, a, s) }

            function s(t, e, i, o, r, a, s) { return n(e ^ i ^ o, t, e, r, a, s) }

            function c(t, e, i, o, r, a, s) { return n(i ^ (e | ~o), t, e, r, a, s) }

            function l(t, e) {
                t[e >> 5] |= 128 << e % 32, t[(e + 64 >>> 9 << 4) + 14] = e;
                var o, n, l, d, p, h = 1732584193,
                    f = -271733879,
                    u = -1732584194,
                    m = 271733878;
                for (o = 0; o < t.length; o += 16) n = h, l = f, d = u, p = m, h = r(h, f, u, m, t[o], 7, -680876936), m = r(m, h, f, u, t[o + 1], 12, -389564586), u = r(u, m, h, f, t[o + 2], 17, 606105819), f = r(f, u, m, h, t[o + 3], 22, -1044525330), h = r(h, f, u, m, t[o + 4], 7, -176418897), m = r(m, h, f, u, t[o + 5], 12, 1200080426), u = r(u, m, h, f, t[o + 6], 17, -1473231341), f = r(f, u, m, h, t[o + 7], 22, -45705983), h = r(h, f, u, m, t[o + 8], 7, 1770035416), m = r(m, h, f, u, t[o + 9], 12, -1958414417), u = r(u, m, h, f, t[o + 10], 17, -42063), f = r(f, u, m, h, t[o + 11], 22, -1990404162), h = r(h, f, u, m, t[o + 12], 7, 1804603682), m = r(m, h, f, u, t[o + 13], 12, -40341101), u = r(u, m, h, f, t[o + 14], 17, -1502002290), f = r(f, u, m, h, t[o + 15], 22, 1236535329), h = a(h, f, u, m, t[o + 1], 5, -165796510), m = a(m, h, f, u, t[o + 6], 9, -1069501632), u = a(u, m, h, f, t[o + 11], 14, 643717713), f = a(f, u, m, h, t[o], 20, -373897302), h = a(h, f, u, m, t[o + 5], 5, -701558691), m = a(m, h, f, u, t[o + 10], 9, 38016083), u = a(u, m, h, f, t[o + 15], 14, -660478335), f = a(f, u, m, h, t[o + 4], 20, -405537848), h = a(h, f, u, m, t[o + 9], 5, 568446438), m = a(m, h, f, u, t[o + 14], 9, -1019803690), u = a(u, m, h, f, t[o + 3], 14, -187363961), f = a(f, u, m, h, t[o + 8], 20, 1163531501), h = a(h, f, u, m, t[o + 13], 5, -1444681467), m = a(m, h, f, u, t[o + 2], 9, -51403784), u = a(u, m, h, f, t[o + 7], 14, 1735328473), f = a(f, u, m, h, t[o + 12], 20, -1926607734), h = s(h, f, u, m, t[o + 5], 4, -378558), m = s(m, h, f, u, t[o + 8], 11, -2022574463), u = s(u, m, h, f, t[o + 11], 16, 1839030562), f = s(f, u, m, h, t[o + 14], 23, -35309556), h = s(h, f, u, m, t[o + 1], 4, -1530992060), m = s(m, h, f, u, t[o + 4], 11, 1272893353), u = s(u, m, h, f, t[o + 7], 16, -155497632), f = s(f, u, m, h, t[o + 10], 23, -1094730640), h = s(h, f, u, m, t[o + 13], 4, 681279174), m = s(m, h, f, u, t[o], 11, -358537222), u = s(u, m, h, f, t[o + 3], 16, -722521979), f = s(f, u, m, h, t[o + 6], 23, 76029189), h = s(h, f, u, m, t[o + 9], 4, -640364487), m = s(m, h, f, u, t[o + 12], 11, -421815835), u = s(u, m, h, f, t[o + 15], 16, 530742520), f = s(f, u, m, h, t[o + 2], 23, -995338651), h = c(h, f, u, m, t[o], 6, -198630844), m = c(m, h, f, u, t[o + 7], 10, 1126891415), u = c(u, m, h, f, t[o + 14], 15, -1416354905), f = c(f, u, m, h, t[o + 5], 21, -57434055), h = c(h, f, u, m, t[o + 12], 6, 1700485571), m = c(m, h, f, u, t[o + 3], 10, -1894986606), u = c(u, m, h, f, t[o + 10], 15, -1051523), f = c(f, u, m, h, t[o + 1], 21, -2054922799), h = c(h, f, u, m, t[o + 8], 6, 1873313359), m = c(m, h, f, u, t[o + 15], 10, -30611744), u = c(u, m, h, f, t[o + 6], 15, -1560198380), f = c(f, u, m, h, t[o + 13], 21, 1309151649), h = c(h, f, u, m, t[o + 4], 6, -145523070), m = c(m, h, f, u, t[o + 11], 10, -1120210379), u = c(u, m, h, f, t[o + 2], 15, 718787259),
                    f = c(f, u, m, h, t[o + 9], 21, -343485551), h = i(h, n), f = i(f, l), u = i(u, d), m = i(m, p);
                return [h, f, u, m]
            }

            function d(t) { var e, i = ""; for (e = 0; e < 32 * t.length; e += 8) i += String.fromCharCode(t[e >> 5] >>> e % 32 & 255); return i }

            function p(t) { var e, i = []; for (i[(t.length >> 2) - 1] = void 0, e = 0; e < i.length; e += 1) i[e] = 0; for (e = 0; e < 8 * t.length; e += 8) i[e >> 5] |= (255 & t.charCodeAt(e / 8)) << e % 32; return i }

            function h(t) { return d(l(p(t), 8 * t.length)) }

            function f(t, e) {
                var i, o, n = p(t),
                    r = [],
                    a = [];
                for (r[15] = a[15] = void 0, n.length > 16 && (n = l(n, 8 * t.length)), i = 0; i < 16; i += 1) r[i] = 909522486 ^ n[i], a[i] = 1549556828 ^ n[i];
                return o = l(r.concat(p(e)), 512 + 8 * e.length), d(l(a.concat(o), 640))
            }

            function u(t) {
                var e, i, o = "0123456789abcdef",
                    n = "";
                for (i = 0; i < t.length; i += 1) e = t.charCodeAt(i), n += o.charAt(e >>> 4 & 15) + o.charAt(15 & e);
                return n
            }

            function m(t) { return unescape(encodeURIComponent(t)) }

            function g(t) { return h(m(t)) }

            function b(t) { return u(g(t)) }

            function v(t, e) { return f(m(t), m(e)) }

            function w(t, e) { return u(v(t, e)) }

            function x(t, e, i) { return e ? i ? v(e, t) : w(e, t) : i ? g(t) : b(t) } t.exports = x
        }, function(t, e) {
            function i() {}

            function o(t, e, i) {
                var o = !0;
                if (t) {
                    var n = 0,
                        r = t.length,
                        a = e[0],
                        s = e[1],
                        c = e[2];
                    switch (e.length) {
                        case 0:
                            for (; n < r; n += 2) o = t[n].call(t[n + 1] || i) !== !1 && o;
                            break;
                        case 1:
                            for (; n < r; n += 2) o = t[n].call(t[n + 1] || i, a) !== !1 && o;
                            break;
                        case 2:
                            for (; n < r; n += 2) o = t[n].call(t[n + 1] || i, a, s) !== !1 && o;
                            break;
                        case 3:
                            for (; n < r; n += 2) o = t[n].call(t[n + 1] || i, a, s, c) !== !1 && o;
                            break;
                        default:
                            for (; n < r; n += 2) o = t[n].apply(t[n + 1] || i, e) !== !1 && o
                    }
                }
                return o
            }

            function n(t) { return "[object Function]" === Object.prototype.toString.call(t) }
            var r = /\s+/;
            i.prototype.on = function(t, e, i) { var o, n, a; if (!e) return this; for (o = this.__events || (this.__events = {}), t = t.split(r); n = t.shift();) a = o[n] || (o[n] = []), a.push(e, i); return this }, i.prototype.once = function(t, e, i) {
                var o = this,
                    n = function() { o.off(t, n), e.apply(this, arguments) };
                return this.on(t, n, i)
            }, i.prototype.off = function(t, e, i) {
                var o, n, s, c;
                if (!(o = this.__events)) return this;
                if (!(t || e || i)) return delete this.__events, this;
                for (t = t ? t.split(r) : a(o); n = t.shift();)
                    if (s = o[n])
                        if (e || i)
                            for (c = s.length - 2; c >= 0; c -= 2) e && s[c] !== e || i && s[c + 1] !== i || s.splice(c, 2);
                        else delete o[n];
                return this
            }, i.prototype.trigger = function(t) {
                var e, i, n, a, s, c, l = [],
                    d = !0;
                if (!(e = this.__events)) return this;
                for (t = t.split(r), s = 1, c = arguments.length; s < c; s++) l[s - 1] = arguments[s];
                for (; i = t.shift();)(n = e.all) && (n = n.slice()), (a = e[i]) && (a = a.slice()), "all" !== i && (d = o(a, l, this) && d), d = o(n, [i].concat(l), this) && d;
                return d
            }, i.prototype.emit = i.prototype.trigger, i.mixTo = function(t) { t = n(t) ? t.prototype : t; var e = i.prototype; for (var o in e) e.hasOwnProperty(o) && (t[o] = e[o]) };
            var a = Object.keys;
            a || (a = function(t) { var e = []; for (var i in t) t.hasOwnProperty(i) && e.push(i); return e }), e.Events = i
        }, function(t, e) {
            "use strict";
            var i = Object.prototype.hasOwnProperty,
                o = Object.prototype.toString,
                n = function(t) { return "function" == typeof Array.isArray ? Array.isArray(t) : "[object Array]" === o.call(t) },
                r = function(t) {
                    if (!t || "[object Object]" !== o.call(t)) return !1;
                    var e = i.call(t, "constructor"),
                        n = t.constructor && t.constructor.prototype && i.call(t.constructor.prototype, "isPrototypeOf");
                    if (t.constructor && !e && !n) return !1;
                    var r;
                    for (r in t);
                    return "undefined" == typeof r || i.call(t, r)
                };
            t.exports = function a() {
                var t, e, i, o, s, c, l = arguments[0],
                    d = 1,
                    p = arguments.length,
                    h = !1;
                for ("boolean" == typeof l ? (h = l, l = arguments[1] || {}, d = 2) : ("object" != typeof l && "function" != typeof l || null == l) && (l = {}); d < p; ++d)
                    if (t = arguments[d], null != t)
                        for (e in t) i = l[e], o = t[e], l !== o && (h && o && (r(o) || (s = n(o))) ? (s ? (s = !1, c = i && n(i) ? i : []) : c = i && r(i) ? i : {}, l[e] = a(h, c, o)) : "undefined" != typeof o && (l[e] = o));
                return l
            }
        }, function(t, e, i) {
            ! function(t, e) { e(i(34), i(23)) }(this, function(e, o) {
                "use strict";

                function n() {
                    var t = (new Date).getTime(),
                        e = "xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx";
                    return e.replace(/[xy]/g, function(i, o) { if (o < e.length - 2) { var n = (t + 16 * Math.random()) % 16 | 0; return t = Math.floor(t / 16), ("x" === i ? n : 7 & n | 8).toString(16) } return Math.floor(10 * Math.random()) })
                }

                function r(t, e) { return e = { exports: {} }, t(e, e.exports), e.exports }

                function a(t) { this.namespace = t }

                function s(t) {
                    var e = {},
                        i = "-",
                        o = x.get("uuid"),
                        r = $.get("uuid"),
                        a = S.ca_s,
                        s = S.ca_n;
                    return o ? (i = o, $.set("uuid", o)) : r ? (i = r, x.set("uuid", r, { path: "/", domain: P })) : i = p(), e.guid = i, e.userid = x.get("userid") || "-", e.sessionid = x.get("sessionid") || n(), x.set("sessionid", e.sessionid, { path: "/", domain: P }), e.landing = S.landing || (document.referrer && j.hostname.indexOf("guazi.com") >= 0 ? 0 : 1) || a && s ? 1 : 0, e
                }

                function c(t) {
                    function i(t) {
                        o();
                        var e = d(j.query),
                            i = r.filter(function(t) { return !!new RegExp(t[0], "i").test(j.hostname) && e[t[1]] });
                        i.length ? t.ca_kw = C && e[i[0][1]] || "-" : t.ca_kw = "-", x.set("cainfo", JSON.stringify(t), { expires: 31536e3, path: "/", domain: P })
                    }

                    function o() { x.remove("cainfo", { path: "/", domain: "m.guazi.com" }), x.remove("cainfo", { path: "/", domain: ".m.guazi.com" }) }
                    var n = x.get("cainfo");
                    n = n ? JSON.parse(n) : null;
                    var r = f(),
                        a = S.ca_s,
                        s = S.ca_n,
                        c = n || { ca_s: "self", ca_n: s || "self", ca_medium: "-", ca_term: "-", ca_content: "-", ca_campaign: "-", ca_kw: "-", ca_i: "-", scode: "-" },
                        l = r.filter(function(t) { return new RegExp(t[0], "i").test(j.hostname) });
                    if (a && s) {
                        for (var p in S) p.indexOf("ca_") === -1 && "scode" !== p && delete S[p];
                        c = e(c, S), i(c)
                    } else l.length && (c.ca_s = "seo_" + l[0][0], i(c));
                    return c || {}
                }

                function l() { var t = encodeURIComponent(C); return u(t) > 512 && (t = m(t)), { page: T, pagetype: "-", line: "-", referer: t || "-", city: x.get("cityDomain") || "-" } }

                function d(t) { return t = t || window.location.search || window.location.hash, t.replace(/^.*\?/, "").split("&").map(function(t) { return t.split("=") }).reduce(function(t, e) { return e[0].trim() && (t[e[0]] = e[1]), t }, {}) }

                function p() { var t = n(); return h("uuid", t), t }

                function h(t, e) { x.set(t, e, { expires: 31536e3, path: "/", domain: P }), $.set(t, e) }

                function f() {
                    return [
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
                    ]
                }

                function u(t) { for (var e = 0, i = t.length; i--;) e += t.charCodeAt(i) > 255 ? 2 : 1; return e }

                function m(t, e) { for (var i = 0, o = 0; o < (e || 511);) o += t.charCodeAt(i) > 255 ? 2 : 1, i++; return t.slice(0, i) }

                function g(t, e) { if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function") }

                function b(t) { var e = []; for (var i in t) t.hasOwnProperty(i) && e.push(i + "=" + t[i]); return e.join("&") }

                function v(t, e) { var i = new Image; return i.onload = function() { e && e() }, i.onerror = function() { e && e(new Error("network error")) }, setTimeout(function() { e && e(new Error("timeout")) }, 1e4), i.src = this.server + t.toLowerCase(), i } e = "default" in e ? e["default"] : e, o = "default" in o ? o["default"] : o;
                var w = Object.freeze({ generateUUIDV4: n }),
                    x = r(function(t, e) {
                        function i(t, e) {
                            var i = {};
                            if (o(t) && t.length > 0)
                                for (var n = e ? c : a, r = t.split(/;\s/g), s = void 0, l = void 0, d = void 0, p = 0, h = r.length; p < h; p++) {
                                    if (d = r[p].match(/([^=]+)=/i), d instanceof Array) try { s = c(d[1]), l = n(r[p].substring(d[1].length + 1)) } catch (f) {} else s = c(r[p]), l = "";
                                    s && (i[s] = l)
                                }
                            return i
                        }

                        function o(t) { return "string" == typeof t }

                        function n(t) { return o(t) && "" !== t }

                        function r(t) { if (!n(t)) throw new TypeError("Cookie name must be a non-empty string") }

                        function a(t) { return t }
                        var s = e,
                            c = decodeURIComponent,
                            l = encodeURIComponent;
                        s.get = function(t, e) { r(t), e = "function" == typeof e ? { converter: e } : e || {}; var o = i(document.cookie, !e.raw); return (e.converter || a)(o[t]) }, s.set = function(t, e, i) {
                            r(t), i = i || {};
                            var o = i.expires,
                                a = i.domain,
                                s = i.path;
                            i.raw || (e = l(String(e)));
                            var c = t + "=" + e,
                                d = o;
                            return "number" == typeof d && (d = new Date(Date.now() + 1e3 * o)), d instanceof Date && (c += "; expires=" + d.toGMTString()), n(a) && (c += "; domain=" + a), n(s) && (c += "; path=" + s), i.secure && (c += "; secure"), document.cookie = c, c
                        }, s.remove = function(t, e) { return e = e || {}, e.expires = new Date(0), this.set(t, "", e) }
                    }),
                    k = window.GJLocalStorage || window.localStorage;
                a.prototype.set = function(t, e) {
                    var i = this.dump();
                    i[t] = { value: e }, i = JSON.stringify(i);
                    try { k.setItem(this.namespace, i) } catch (o) { return !1 }
                    return k.getItem(this.namespace) === i
                }, a.prototype.get = function(t) { var e = this.dump(); if (e[t]) return e[t].value }, a.prototype.remove = function(t) { this.set(t, void 0) }, a.prototype.clear = function() { k.removeItem(this.namespace) }, a.prototype.dump = function() { var t = k.getItem(this.namespace) || "{}"; try { t = JSON.parse(t) } catch (e) { t = {} } return t };
                var y = a,
                    $ = new y("GUAZI_TRACKER"),
                    z = document.getElementsByName("js-waf-seo-referer")[0],
                    C = z ? z.value : document.referrer,
                    j = new o(C.toLocaleLowerCase()),
                    S = d(),
                    T = encodeURIComponent(window.location.href),
                    P = ".guazi.com",
                    _ = Object.freeze({ getUserInfo: s, getCaInfo: c, getPageInfo: l }),
                    E = function() {
                        function t(t, e) {
                            for (var i = 0; i < e.length; i++) {
                                var o = e[i];
                                o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(t, o.key, o)
                            }
                        }
                        return function(e, i, o) { return i && t(e.prototype, i), o && t(e, o), e }
                    }(),
                    I = s,
                    D = c,
                    W = l,
                    O = window.sessionStorage,
                    N = document.getElementsByTagName("head")[0].getAttribute("_tracker") || x.get("_tracker") && JSON.parse(x.get("_tracker")),
                    A = N ? JSON.parse(N) : {},
                    M = ".guazi.com",
                    B = function() {
                        function t(i, o, r) { g(this, t), this.server = o || document.location.protocol + "//t.guazi.com/t.gif?", this.conf = e({ platform: "-", tracking_type: "pageload", pageid: n() }, i), this.options = e({ ca_from_url: !1 }, r) }
                        return E(t, [{
                            key: "send",
                            value: function(t, o) {
                                M = t && t.domain || M;
                                var n = e({}, I(), D({ ca_from_url: this.options.ca_from_url }), W(), A || {}, this.conf, t || {});
                                if ("pageload" === n.tracking_type && (!t || !t.pagetype, this.conf.pagetype = (t || {}).pagetype), O) {
                                    var r = JSON.parse(O.getItem("_tracker")) || {},
                                        a = new Date;
                                    if (r.clientTime && r.pagetype !== n.pagetype && "pageload" === n.tracking_type && (r.time_on_page = a - new Date(r.clientTime), r.tracking_type = "timeOnPage", v.call(this, b(r))), "pageload" === n.tracking_type) try { O.setItem("_tracker", JSON.stringify(e(!1, n, { clientTime: new Date }))) } catch (s) {}
                                }
                                if (/Guazi|guazi|ganji/i.test(window.navigator.userAgent)) { var c = i(38); return void c.invoke("getDeviceInfo", null, function(t) { t.code || t.error || (n.guid = t.deviceId), v.call(this, b(n), o) }.bind(this)) }
                                return v.call(this, b(n), o)
                            }
                        }, { key: "updateConfig", value: function(t) { e(this.conf, t) } }]), t
                    }();
                B.Cookie = x, B.Utils = _, B.UUID = w, t.exports = B
            })
        }, function(t, e) {
            "use strict";

            function i(t) { for (var e, i = /([^=?&]+)=?([^&]*)/g, o = {}; e = i.exec(t); o[decodeURIComponent(e[1])] = decodeURIComponent(e[2])); return o }

            function o(t, e) { e = e || ""; var i = []; "string" != typeof e && (e = "?"); for (var o in t) n.call(t, o) && i.push(encodeURIComponent(o) + "=" + encodeURIComponent(t[o])); return i.length ? e + i.join("&") : "" }
            var n = Object.prototype.hasOwnProperty;
            e.stringify = o, e.parse = i
        }, function(t, e) {
            "use strict";
            t.exports = function(t, e) {
                if (e = e.split(":")[0], t = +t, !t) return !1;
                switch (e) {
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
                        return !1
                }
                return 0 !== t
            }
        }, function(t, e) {
            function i(t) {
                if (window.WebViewJavascriptBridge) return t(window.WebViewJavascriptBridge);
                if (window.WVJBCallbacks) return window.WVJBCallbacks.push(t);
                window.WVJBCallbacks = [t];
                var e = document.createElement("iframe");
                e.style.display = "none", e.src = "wvjbscheme://__BRIDGE_LOADED__", document.documentElement.appendChild(e), setTimeout(function() { document.documentElement.removeChild(e) }, 0)
            }

            function o(t) { window.WebViewJavascriptBridge ? t(window.WebViewJavascriptBridge) : document.addEventListener("WebViewJavascriptBridgeReady", function(e, i) { t(window.WebViewJavascriptBridge) }, !1) }
            var n, r = [],
                a = [];
            Object.defineProperty(window, "WebViewJavascriptBridge", { configurable: !0, enumerable: !0, set: function(t) { t.callHandler && (n = t, r.forEach(function(t) { setTimeout(function() { window.WebViewJavascriptBridge.callHandler.apply(null, t) }, 0) }), a.forEach(function(t) { setTimeout(function() { window.WebViewJavascriptBridge.registerHandler.apply(null, t) }, 0) }), a = [], r = []) }, get: function() { return n } });
            var s = /Guazi|guazi|ganji/i.test(window.navigator.userAgent);
            ! function() {
                s && (window.navigator.userAgent.indexOf("Android") > -1 ? o(function(t) {
                    t._messageHandler || t.init(function(t, e) {
                        var i = { "Javascript Responds": "Wee!" };
                        e(i)
                    })
                }) : i(function(t) { window.WebViewJavascriptBridge = t }))
            }(), e.invoke = function() { window.WebViewJavascriptBridge ? window.WebViewJavascriptBridge.callHandler.apply(this, arguments) : r.push(arguments) }, e.register = function() { window.WebViewJavascriptBridge ? window.WebViewJavascriptBridge.registerHandler.apply(this, arguments) : a.push(arguments) }
        }, function(t, e, i) {
            (function(e) {
                "use strict";
                var o, n = /^[A-Za-z][A-Za-z0-9+-.]*:\/\//,
                    r = { hash: 1, query: 1 };
                t.exports = function(t) {
                    t = t || e.location || {}, o = o || i(23);
                    var a, s = {},
                        c = typeof t;
                    if ("blob:" === t.protocol) s = new o(unescape(t.pathname), {});
                    else if ("string" === c) { s = new o(t, {}); for (a in r) delete s[a] } else if ("object" === c) {
                        for (a in t) a in r || (s[a] = t[a]);
                        void 0 === s.slashes && (s.slashes = n.test(t.href))
                    }
                    return s
                }
            }).call(e, function() { return this }())
        }, function(t, e, i) { t.exports = i.p + "phone-collect.6a991da1dd9431dbb9c5f4b905b62372.jpg" }, function(t, e, i) { t.exports = i.p + "phone-histroy.e8fbef61fbce719de43066002c7df522.jpg" }, function(t, e, i) { t.exports = i.p + "phone-tip.a621df915f5f8295606f35985ed4df39.jpg" }, function(t, e, i) { t.exports = i.p + "phone-user.fb9b9001300d41a795d452de0468a1c6.jpg" }, function(t, e, i) { e = t.exports = i(1)(), e.push([t.id, ".popup-wrap{display:none}.popup,.popup-wrap.active{display:block}.popup{position:fixed;top:15px;right:14px;left:14px;z-index:101;width:auto;background-color:#fff;border-radius:0;margin:0}.popup-wrap .popup-body{background-color:transparent;padding:0}.btn-layer-download{display:inline-block;position:relative;text-align:center;text-decoration:none;outline:1px solid rgba(0,0,0,.02);padding:0;margin:0;cursor:pointer;-ms-box-sizing:border-box;box-sizing:border-box;-webkit-appearance:none;width:100%;background-color:#22ac38;border:1px solid #22ac38;color:#fff;height:42px;font-size:16px;line-height:42px}.mask.active{z-index:99;display:block}.download-exist{padding-top:50px}.btn-app .icon-download,.download-header .left-word:after,.title span{background:url(" + i(45) + ') no-repeat;background-size:150px auto}.download-header{width:100%;height:44px;background-color:#fff}.download-header .close-btn{position:relative;float:left;width:13px;height:13px;margin:15px 8px 0 10px;text-indent:-80px;background-color:#898989;border-radius:50%;overflow:hidden}.download-header .close-btn:after,.download-header .close-btn:before{content:"";position:absolute;top:3px;left:6px;width:1px;height:7px;background-color:#fff}.download-header .close-btn:after{-webkit-transform:rotate(45deg);transform:rotate(45deg)}.download-header .close-btn:before{-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}.download-header .left-word{float:left;position:relative;line-height:44px;font-size:15px;color:#22ac38;font-weight:500;padding-left:75px}.download-header .left-word:after{content:"";position:absolute;left:0;top:0;z-index:1;width:64px;height:44px;background-position:0 -42px}.download-header .right-button{float:right;margin:8px 10px 0 0}.download-header .right-button a{display:block;height:30px;line-height:30px;text-align:center;border-radius:6px;background-color:#22ac38;color:#fff;letter-spacing:.5px;padding:0 8px;font-size:15px}.app-guide{position:fixed;bottom:0;left:0;width:100%;min-width:320px;height:50px;background-color:rgba(0,0,0,.6);box-shadow:0 -1px 1px rgba(0,0,0,.1);z-index:20004;border-bottom:0;padding:0 10px 0 0;box-sizing:border-box}.app-guide .guide-logo{float:left;width:42px;height:42px;vertical-align:top;margin-right:10px}.app-guide .guide-cont{position:relative;display:block;-webkit-tap-highlight-color:rgba(0,0,0,0);padding:4px 0;margin:0 90px 0 30px}.app-guide .guide-cont.touch:before{content:"";width:100%;height:100%;background-color:rgba(0,0,0,.06);position:absolute;top:0;left:-20px;padding:0 90px 0 20px}.app-guide .guide-dc,.app-guide .guide-slogon{color:#fff;font-size:14px;line-height:25px;text-overflow:ellipsis;white-space:nowrap;overflow:hidden}.app-guide .guide-dc{color:#ccc;font-size:12px;line-height:13px;margin-top:0}.app-guide .guide-btn{position:absolute;top:10px;right:10px;width:80px;height:30px;background-color:#22ac38;border:0 none;border-radius:6px;color:#fff;font:14px/30px microsoft yahei,helvetica,arial,sans-serif;text-align:center;padding:0;margin:0}.app-guide .guide-btn.touch{background-color:#22ac38;opacity:.9}.app-guide .guide-close{position:absolute;top:0;left:0;width:30px;height:30px;text-indent:-999px;overflow:hidden;z-index:1}.app-guide .guide-close:after,.app-guide .guide-close:before{content:"";position:absolute;top:4px;left:13px;width:1px;height:20px;background:none;background-color:#bfbfbf;z-index:10}.app-guide .guide-close:before{-webkit-transform:rotate(45deg);transform:rotate(45deg)}.app-guide .guide-close:after{-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}.white-guide.app-guide{background-color:#fff;top:45px;bottom:auto}.white-guide.app-guide .guide-btn{background-color:#fff;border:1px solid #22ac38;height:28px;line-height:28px}.white-guide.app-guide .guide-btn,.white-guide.app-guide .guide-dc,.white-guide.app-guide .guide-slogon{color:#22ac38}.mask{background-color:rgba(0,0,0,.7)}.popup-wrap .popup-downapp{border-radius:5px;top:50%;margin-top:-165px}.popup-wrap .popup-downapp2{margin-top:-170px}.popup-downapp .btn-group{border-top:1px solid #bfbfbf}.guazi-logo{background:url(' + i(46) + ') no-repeat;background-size:100px auto;width:100px;height:100px;margin:0 auto}.popup-downapp .form-deliver .deliver-tips{font-size:16px;color:#000;line-height:22px}.popup-downapp .form-deliver{padding:14px}.popup-downapp .guazi-ok{text-align:center;font-weight:500;font-size:16px;color:#22ac38;padding:46px 0 8px;position:relative}.popup-downapp .guazi-ok:before{content:"";position:absolute;z-index:1;top:-4px;left:50%;width:46px;height:46px;border-radius:50%;background-color:#22ac38;margin-left:-25px}.popup-downapp .guazi-ok:after{content:"";position:absolute;top:3px;left:50%;z-index:2;margin-left:-9px;width:12px;height:24px;border-bottom:2px solid #fff;border-right:2px solid #fff;-webkit-transform:rotate(45deg);transform:rotate(45deg);border-radius:1px}.popup-wrap .popup{z-index:201}.popup-downapp .pop-tit{border-radius:5px 5px 0 0;background-clip:padding-box}.popup-downapp .close-btn{position:absolute;top:-45px;right:0;width:26px;height:26px;border-radius:50%;overflow:hidden;text-indent:-88px;border:1px solid #fff}.popup-downapp .close-btn:after,.popup-downapp .close-btn:before{content:"";position:absolute;top:4px;left:12px;width:1px;height:18px;background:none;background-color:#fff;z-index:10}.popup-downapp .close-btn:before{-webkit-transform:rotate(45deg);transform:rotate(45deg)}.popup-downapp .close-btn:after{-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}.pop-tit{position:relative;padding:36px 0 20px}.title{text-align:center;position:absolute;left:50%;top:-19px;margin-left:-100px}.title .icon-succ{display:inline-block;margin-top:-9px;position:relative;width:50px;height:50px;border-radius:50%;background-color:#22ac38;border:4px solid #eaffed}.title .icon-succ:after{content:"";position:absolute;top:6px;left:16px;width:15px;height:30px;border-bottom:2px solid #fff;border-right:2px solid #fff;-webkit-transform:rotate(45deg);transform:rotate(45deg)}.title span{display:inline-block;vertical-align:top;color:#000;font-size:26px;width:135px;height:38px;line-height:38px;font-weight:700;text-align:center;letter-spacing:2px;background-position:0 0}.pop-tit p{font-size:18px;text-align:center;color:#333;padding:0 18px}.form-deliver{overflow:hidden}.form-deliver p{font-size:18px;color:#000;letter-spacing:1px;text-align:right;margin-bottom:3px}.form-deliver .downapp{font-size:25px;font-weight:bolder;color:#22ac38;letter-spacing:0;margin-bottom:8px}.form-deliver .fl{width:42%}.form-deliver .fr{width:45%}.form-deliver li{color:#7d7d7d;font-size:15px;line-height:28px;position:relative;padding-left:22px}.form-deliver li:after,.form-deliver li:before{content:"";position:absolute}.form-deliver li:after{width:16px;height:16px;border-radius:50%;border:1px solid #22ac38;top:5px;left:0}.form-deliver li:before{top:8px;left:6px;width:5px;height:9px;border-bottom:1px solid #22ac38;border-right:1px solid #22ac38;-webkit-transform:rotate(45deg);transform:rotate(45deg);z-index:10}.btn-app{padding:15px;border-top:1px solid #bfbfbf}.btn-app .btn{display:block;margin:0 auto;height:44px;line-height:44px;border-radius:5px;background-color:#22ac38;color:#fff;font-size:22px;font-weight:400}.btn-app .icon-download{display:inline-block;width:21px;height:21px;background-position:-72px -42px;vertical-align:-2px;margin-left:8px}.form-deliver .phone-bg{background:url(' + i(47) + ') 0 top no-repeat;background-size:100%;height:210px;margin-bottom:-20px;width:55%}.form-deliver .down-list.fl{margin:57px 0 0 7%;width:33%}.form-deliver .down-list.fl li{font-size:18px;font-weight:500;line-height:35px}.app-tit h1,.app-tit h2{text-align:center}.app-tit h1{font-weight:700;color:#22ac38;padding-top:20px;font-size:30px}.app-tit h2{font-size:18px;font-weight:500;color:#000;padding-top:10px;letter-spacing:1px}.app-tit h2 span{padding:0 3px}.form-deliver .down-list.fl li:after{background-color:#22ac38;top:8px}.form-deliver .down-list.fl li:before{border-color:#fff;top:11px}.popup-downapp .textsucc{color:#22ac38;font-weight:700;font-size:24px;text-align:center;padding-bottom:10px}.introducecon{padding:0 18px}.introducecon .cl{float:left;padding-top:40px;width:135px}.introducecon .cl p{font-size:18px;color:#22ac38;text-align:center;padding:5px 0}.introducecon .cl li{position:relative;padding-left:18px;line-height:33px;color:#666;font-size:14px}.introducecon .cl li:before{top:10px;left:5px;width:5px;height:9px;border-bottom:1px solid #fff;border-right:1px solid #fff;-webkit-transform:rotate(45deg);transform:rotate(45deg);z-index:10;content:"";position:absolute}.introducecon .cl li:after{width:16px;height:16px;border-radius:50%;background-color:#22ac38;top:9px;left:0;content:"";position:absolute}.introducecon .cr{float:right;width:142px}.imgcollect,.imghistroy,.imgtip,.imguser{background-repeat:no-repeat;background-size:132px 215px;width:142px;height:215px;display:inline-block;vertical-align:bottom}.imgcollect{background-image:url(' + i(40) + ")}.imghistroy{background-image:url(" + i(41) + ")}.imgtip{background-image:url(" + i(42) + ")}.imguser{background-image:url(" + i(43) + ")}.tip-layer{border-radius:5px;text-align:center;display:none;position:fixed;top:50%;left:50%;z-index:99;width:140px;height:36px;background-color:rgba(0,0,0,.8);color:#fff;font-size:12px;line-height:36px;box-sizing:border-box;-webkit-transform:translate3d(-50%,-50%,0);transform:translate3d(-50%,-50%,0)}.tip-layer.active{display:block}@media screen and (max-width:320px){.form-deliver .down-list.fl{margin:50px 0 0 5%}.form-deliver .down-list.fl li{font-size:16px;line-height:32px}.pop-tit p{font-size:16px}.introducecon{padding:0 5px}.popup-wrap .popup-downapp{margin-top:-150px}.pop-tit{padding:20px 0 10px}.introducecon .cr{width:132px}.imgcollect,.imghistroy,.imgtip,.imguser{background-size:99px 150px;width:99px;height:150px}.introducecon .cl{padding-top:0;margin-left:15px}.introducecon .cl li{line-height:28px}.introducecon .cl li:before{top:8px}.introducecon .cl li:after{top:6px}}.tiplayer{text-align:center;color:#fff;font-size:12px;position:fixed;top:50%;margin-top:-15px;width:100%;display:none}.tiplayer.active{display:block}.twoline{margin-top:-25px}.threeline{margin-top:-35px}.tiplayer span.textcon{background-color:rgba(0,0,0,.8);line-height:20px;border-radius:3px;padding:5px 15px;display:inline-block;position:relative}@media screen and (min-width:360px){.form-deliver .phone-bg{height:240px}}@media screen and (min-width:374px){.popup-wrap .popup-downapp{width:347px;left:50%;margin-left:-175px}}@media screen and (max-height:430px){.popup-wrap .popup-downapp2{position:absolute;margin-top:0;top:70px}}", ""]) }, function(t, e, i) { t.exports = i.p + "guide_icon.b7d7a6e9858219137f0c6dd98380827d.png" }, function(t, e, i) { t.exports = i.p + "logo_app_guazi_2.3c569dc844c4ccd0b9cf94461c603c41.png" }, function(t, e, i) { t.exports = i.p + "phone.42eab7e24b5b1cdde34ce7f38832b568.jpg" }, , function(t, e, i) {
            ! function(t, i) { i(e) }(this, function(t) {
                "use strict";

                function e(t) {
                    if (window.WebViewJavascriptBridge) return t(window.WebViewJavascriptBridge);
                    if (window.WVJBCallbacks) return window.WVJBCallbacks.push(t);
                    window.WVJBCallbacks = [t];
                    var e = document.createElement("iframe");
                    e.style.display = "none", e.src = "wvjbscheme://__BRIDGE_LOADED__", document.documentElement.appendChild(e), setTimeout(function() { document.documentElement.removeChild(e) }, 0)
                }

                function i(t) { window.WebViewJavascriptBridge ? t(window.WebViewJavascriptBridge) : document.addEventListener("WebViewJavascriptBridgeReady", function(e, i) { t(window.WebViewJavascriptBridge) }, !1) }
                var o = [],
                    n = [],
                    r = void 0;
                Object.defineProperty(window, "WebViewJavascriptBridge", { configurable: !0, enumerable: !0, set: function(t) { t.callHandler && (r = t, o.forEach(function(t) { setTimeout(function() { window.WebViewJavascriptBridge.callHandler.apply(null, t) }, 0) }), n.forEach(function(t) { setTimeout(function() { window.WebViewJavascriptBridge.registerHandler.apply(null, t) }, 0) }), n = [], o = []) }, get: function() { return r } });
                var a = /guazi|ganji/i.test(window.navigator.userAgent);
                ! function() {
                    a && (window.navigator.userAgent.indexOf("Android") > -1 ? i(function(t) {
                        t._messageHandler || t.init(function(t, e) {
                            var i = { "Javascript Responds": "Wee!" };
                            e(i)
                        })
                    }) : e(function(t) { window.WebViewJavascriptBridge = t }))
                }();
                var s = function() { window.WebViewJavascriptBridge ? window.WebViewJavascriptBridge.callHandler.apply(this, arguments) : o.push(arguments) },
                    c = function() { window.WebViewJavascriptBridge ? window.WebViewJavascriptBridge.registerHandler.apply(this, arguments) : n.push(arguments) },
                    l = { invoke: s, register: c };
                t["default"] = l, t.invoke = s, t.register = c, Object.defineProperty(t, "__esModule", { value: !0 })
            })
        }, function(t, e, i) {
            var o = i(44);
            "string" == typeof o && (o = [
                [t.id, o, ""]
            ]);
            i(2)(o, {});
            o.locals && (t.exports = o.locals)
        }, , , , , function(t, e, i) { t.exports = i.p + "icon.d694470cf6db618b194f21e0c2bce398.png" }, function(t, e, i) { e = t.exports = i(1)(), e.push([t.id, 'html{-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;-webkit-tap-highlight-color:transparent}article,aside,blockquote,body,button,code,dd,details,div,dl,dt,fieldset,figcaption,figure,footer,form,h1,h2,h3,h4,h5,h6,header,hgroup,hr,input,legend,li,menu,nav,ol,p,pre,section,td,textarea,th,ul{margin:0;padding:0;border:0;outline:0;vertical-align:baseline}article,aside,details,figcaption,figure,footer,header,hgroup,main,menu,nav,section,summary{display:block}li,ol,ul{list-style:none}h1,h2,h3,h4,h5,h6{font-weight:400}address,b,cite,code,em,i,small,strong{font-style:normal}button,input[type=button],input[type=reset],input[type=submit]{-webkit-appearance:button;-webkit-user-select:none;cursor:pointer}button[disabled],input[disabled]{cursor:default}button::-moz-focus-inner,input::-moz-focus-inner{border:0 none;padding:0}input[type=checkbox],input[type=radio]{-webkik-box-sizing:border-box;box-sizing:border-box}input[type=search]{-webkit-appearance:textfield;box-sizing:content-box}input[type=search]::-webkit-search-cancel-button,input[type=search]::-webkit-search-decoration{-webkit-appearance:none}input:-webkit-autofill,select:-webkit-autofill,textarea:-webkit-autofill{box-shadow:inset 0 0 0 999px #fff}input::-webkit-inner-spin-button,input::-webkit-outer-spin-button{-webkit-appearance:none}textarea{overflow:auto;vertical-align:top;resize:vertical}table{border-collapse:collapse;border-spacing:0}caption,td,th{vertical-align:middle}blockquote,q{quotes:none}blockquote:after,blockquote:before,q:after,q:before{content:"";content:none}a img{border:none}img{display:block}a{color:#000;text-decoration:none;font-size:100%;vertical-align:baseline}a:active,button:focus,input:focus,textarea:focus{outline:0 none}abbr[title],dfn[title]{border-bottom:1px dotted;cursor:help}body{min-width:320px;max-width:768px;margin:0 auto;background-color:#fff;color:#000;font:.14rem/1.5 helvetica neue,tahoma,arial,hiragino sans gb,microsoft yahei,sans-serif;-webkit-tap-highlight-color:transparent;-webkit-font-smoothing:antialiased}button,input,select,textarea{-webkit-appearance:none;appearance:none}input,select{vertical-align:middle}button{outline:0;border:none;background-color:transparent}input::-webkit-input-placeholder,textarea::-webkit-input-placeholder{color:#bfbfbf}del{text-decoration:line-through}input::-webkit-inner-spin-button,input::-webkit-outer-spin-button{-webkit-appearance:none!important;margin:0}.fl{float:left}.fr{float:right}.clearfix:after{content:"";display:table;font:0/0 ;clear:both}.backtop{border-radius:50%;width:.42rem;height:.42rem;background-color:#fff;border:1px solid #dde4ea;position:fixed;right:.14rem;bottom:.62rem;z-index:89;box-shadow:0 0 2px #dde4ea;display:none}.backtop.active{display:block}.backtop i,.year-2017:before{background-image:url(' + i(59) + ");background-size:.18rem auto;display:inline-block}.backtop i{display:block;width:.18rem;height:.18rem;margin:.14rem auto 0}.mask{background-color:#495056;-webkit-opacity:.8;opacity:.8;position:fixed;top:0;left:0;right:0;z-index:99;width:100%;height:100%;display:none}.mask.active{display:block}html{font-size:625%}@media only screen and (min-width:376px) and (max-width:414px){html{font-size:690%}}@media only screen and (min-width:415px) and (max-width:480px){html{font-size:800%}}@media only screen and (min-width:481px){html{font-size:933.33%}}@media only screen and (min-width:561px){html{font-size:1066.67%}}@media only screen and (min-width:641px){html{font-size:1280%}}", ""]) }, , , function(t, e, i) { t.exports = i.p + "icon.9eaa74d2526e2fc9f1f77f6b66d6528e.png" }, , , , , , function(t, e, i) { e = t.exports = i(1)(), e.push([t.id, 'body,button,input,select,textarea{font:14px/1.5 helvetica neue,tahoma,arial,hiragino sans gb,microsoft yahei,sans-serif}.box-size{width:100%;-ms-box-sizing:border-box;box-sizing:border-box}.popup-mobile{position:fixed;top:50%;left:50%;z-index:199;display:none;width:90%;height:274px;margin-top:-137px;margin-left:-45%;background-color:#fff;border-radius:8px}.popup-mobile.active{display:block}.pop-error,.pop-ipt,.pop-tel,.pop-text,.popup-mobile .pop-tit{padding-left:20px;padding-right:20px}.popup-mobile .pop-tit{height:60px;line-height:60px;padding-top:0;padding-bottom:0;font-size:16px;text-align:center}.pop-text{padding-bottom:12px;font-size:16px;color:#707070}.pop-ipt{position:relative}.pop-ipt.mt10{margin-top:10px}.pop-ipt input{width:100%;padding-left:10px;border:1px solid #e0e0e0;border-radius:2px;-webkit-appearance:none}.btn-code,.pop-ipt input{height:40px;line-height:40px}.btn-code{position:absolute;top:0;right:20px;width:90px;font-size:13px;color:#fff;background-color:#d0d0d0;border:none;border-radius:0 2px 2px 0}.btn-code.active{background-color:#22ac38}.pop-tel{font-size:16px}.pop-tel a{font-size:13px;color:#ff7e00}.pop-error{height:20px;font-size:12px;line-height:20px;color:#ff7e00}.pop-error span:before{content:"";float:left;width:12px;height:12px;margin-top:4px;margin-right:5px;background:url(' + i(55) + ") no-repeat;background-size:12px auto}.pop-btn{display:-webkit-box;display:box;width:100%;height:44px;box-sizing:border-box}.pop-btn .btn{display:block;-webkit-box-flex:1;box-flex:1;height:44px;font-size:16px;color:#fff;line-height:44px;text-align:center;background-color:#22ac38;border:none;box-sizing:inherit}.pop-btn .btn-cancel{height:43px;line-height:43px;color:#252825;background-color:#fff;border-top:1px solid #e6e6e6;border-radius:0 0 0 5px}.pop-btn .btn-sure{border-radius:0 0 5px 0}", ""]) }, , , , , , , , , , , , , , , , , , , , , , , , , , , function(t, e, i) {
            var o = i(65);
            "string" == typeof o && (o = [
                [t.id, o, ""]
            ]);
            i(2)(o, {});
            o.locals && (t.exports = o.locals)
        }, , function(t, e, i) { t.exports = i.p + "icons.1391ee1eb545445c3ba980b307f4b172.png" }, function(t, e, i) {
            e = t.exports = i(1)(), e.push([t.id, ".footer{width:100%;background-color:#f1f3f6;padding:.21rem 0}.footer a{font-size:.12rem;color:#22ac38}.media-state{text-align:center;padding-bottom:.25rem}.media-state a{display:inline-block;padding:0 .07rem;height:.24rem;line-height:.24rem;margin:0 .05rem;font-size:.14rem;color:#757f89}.media-state a.active{background-color:#22ac38;color:#fff;border-radius:.02rem}.footer p{font-size:.14rem}.footer .phone,.footer p{text-align:center;color:#757f89}.footer .phone{font-size:.12rem;line-height:.22rem;padding-bottom:.05rem;opacity:.5;padding-top:.02rem}.footer-2{background:#313131;padding:.03rem 0;line-height:.2rem;font-size:.12rem;color:#686868;text-align:center}.company,.company-integrity,.company-integrity a{font-size:.1rem;color:#afb8c0;text-align:center;line-height:.22rem}.company-integrity{padding:.02rem 0}.company-integrity em{margin:0 .07rem}", ""]);
        }, , , function(t, e, i) {
            var o = i(12),
                n = i(14),
                r = i(16),
                a = i(32),
                s = i(4);
            e.showToast = Widget.define({
                init: function(t) {
                    this.config = t, this.showToastTime = 0, this.showToastTimer = null;
                    var e = new Date,
                        i = "" + e.getFullYear() + e.getMonth() + e.getDate(),
                        o = "#",
                        n = $(".pos-popup").data("puid"),
                        r = localStorageSubstitute.getItem("toast_puid_num");
                    r && r.indexOf(i) > -1 ? r.split(o) && r.split(o).length <= 20 && r.indexOf(n) === -1 && (r = r + "#" + n, this.showTosatFuc(r)) : (r = "T" + i + "#" + n, this.showTosatFuc(r))
                },
                showTosatFuc: function(t) {
                    var e = this,
                        i = $(".pos-popup").data("puid"),
                        o = $(".pos-popup").data("status");
                    return !(11 == o || 12 == o || 13 == o || !i) && void(e.showToastTimer = setInterval(function() { e.showToastTime++, 20 === e.showToastTime ? (localStorageSubstitute.setItem("toast_puid_num", t), $(".pos-popup").addClass("active")) : 23 === e.showToastTime && ($(".pos-popup").removeClass("active"), clearInterval(e.showToastTimer)) }, 1e3))
                }
            }), e.showHotAnalyze = Widget.define({ init: function(t) { this.config = t, $(".hot-analyze").click(function() { $(".js-show-hotana").hasClass("active-hot") ? ($(".js-show-hotana").removeClass("active-hot"), window.tracker.send({ tracking_type: "click", eventid: "0340000000000140" })) : ($(".js-show-hotana").addClass("active-hot"), window.tracker.send({ tracking_type: "click", eventid: "0340000000000139" })) }) } }), e.showOfferPrice = Widget.define({ init: function(t) { this.config = t, $(".offer-price").click(function() { $(".js-show-offerPirce").hasClass("active") ? ($(".js-show-offerPirce").removeClass("active"), $(".js-show-hotana").removeClass("active-hot"), window.tracker.send({ tracking_type: "click", eventid: "1212230001000047" })) : ($(".js-show-offerPirce").addClass("active"), $(".js-show-hotana").addClass("active-hot"), window.tracker.send({ tracking_type: "click", eventid: "1212230001000046" })) }) } }), e.sellShowAppoint = Widget.define({
                init: function(t) {
                    this.config = t, $(".popupAppoint-yy").click(function() {
                        var t = new Date,
                            e = t.getHours();
                        e >= 8 && e < 21 ? $(".phone-input").find(".popup-body").find(".desc").html("留下您的电话，我们会在30分钟内与您联系。") : $(".phone-input").find(".popup-head").find(".desc").html("请留下手机号，瓜子客服将在工作时段<br>（8：00-21：00）联系您看车。"), $("#maskEl").addClass("active"), $(".phone-input").addClass("active"), $(window).scrollTop(50), $(".phone-input").find(".popup-contact").offset({ top: 100 }), $(".phone-input-warning").removeClass("active"), $("body").css("overflow", "hidden")
                    })
                }
            }), e.showNotice = Widget.define({
                events: { "click .js-cancel-pop-btn": "cancelPup", "click .icon-unsuport": "showZBNotice", "click .pf-notice": "showPfNotice", "click .phone-input-submit": "submitPhoneAppoint", "click .buy-car-gifts": "buycarGifts", "click .label-notice": "showLabelPop", "click .car-price-notice": "showCarPriceInfo", "click .car-price-notice_1": "showCarPriceInfo_1", "click .guazi-service-notice": "showGuaziService", "click .js-close-guazi-service-notice": "closeGuaziService", "click .j-new-car-price-notice": "showNewCarPriceNotice", "click .j-insurance-notice": "showInsuranceNotice", "click .j-tools-notice": "showToolsNotice", "click .j-bao-mai-notice": "showBaoMaiNotice" },
                init: function(t) { this.config = t, this.scrollPostion = 0 },
                getCookie: function(t) { var e, i = new RegExp("(^| )" + t + "=([^;]*)(;|$)"); return (e = document.cookie.match(i)) ? unescape(e[2]) : null },
                cancelPup: function(t) {
                    var e = $(t.currentTarget),
                        i = e.parents(".popup-wrap");
                    i.removeClass("active"), i.find(".popup-head").css("display", ""), i.find(".deliver-title").css("display", "none"), $("#maskEl").removeClass("active"), $(".detail").css("display", ""), $(window).scrollTop(self.scrollPostion)
                },
                showZBNotice: function() { return $(".pf-notice-show").find("h2").html("提&ensp;&ensp;示"), $(".pf-notice-show").find(".show-text").html("该车型品牌或发动机技术较为特殊，暂不支持1年2万公里质保服务。"), $("#maskEl").addClass("active"), $(".pf-notice-show").addClass("active"), !1 },
                buycarGifts: function() { return $("#maskEl").addClass("active"), $(".popup-giftcon").addClass("active"), $(".popup-label").removeClass("active"), !1 },
                showPfNotice: function() {
                    var t = "",
                        e = $(".pf-notice").html(),
                        i = $(".pf-notice-show").find(".show-text").attr("data-url");
                    t = e.indexOf("国四") !== -1 || e.indexOf("国五") !== -1 || e.indexOf("国六") !== -1 ? "各地车管所对排放标准认定有差异，结果仅供参考，外迁请详细咨询迁入地车管所。" : "各地车管所对排放标准认定有差异，结果仅供参考，外迁请详细咨询迁入地车管所；国家最新政策，国三及以下车源无法外迁。", t += $("#isBianlianPro").val() ? '<a style="color: #F00;" href="javascript:;" class="j-showPf-new">外迁标准></a>' : '<a style="color: #F00;" href="' + i + '">外迁标准</a>', $(".pf-notice-show").find("h2").html("排放标准提示"), $(".pf-notice-show").find(".show-text").html(t), $("#maskEl").addClass("active"), $(".pf-notice-show").addClass("active")
                },
                submitPhoneAppoint: function() {
                    var t = this,
                        e = $(".phone-input-text").val(),
                        o = $(".phone-input").find(".popup-cityid").html(),
                        n = $(".phone-input").find(".popup-puid").html(),
                        r = $(".thumb-img-numcar i").html().replace("HC-", ""),
                        a = $(".phone-input-warning"),
                        s = new RegExp(/^(1[34578]\d{9})|^(0\d{2,3}-?\d{7,8})$/);
                    if ("" === e || void 0 === e) a.html("请输入手机号").addClass("active"), $(".phone-input-text").addClass("warning");
                    else if (s.test(e)) {
                        $(".phone-input").removeClass("active"), $(".phone-input-text").removeClass("warning");
                        var c = { title: "提交成功!", msg: "我们将尽快与您联系", l2: "最新车源", l3: "一手掌握" },
                            l = "",
                            d = "";
                        $.ajax({
                            url: "/misc/callback/?act=appoint",
                            data: { phone: e, puid: n, city_id: o },
                            type: "post",
                            dataType: "json",
                            success: function(o) {
                                if (o.status) {
                                    window._hmt.push(["_trackEvent", "wap_detail_zhuanhua", "submit", "wap_detail_zhuanhua_mianfeizixun_success"]), d = "提交成功!", l = "我们将尽快与您联系";
                                    var n = i(3),
                                        a = t.getCookie("gzCityDomain");
                                    n.send("&city=" + a + "&tel=" + e + "@buyer", ""), window.tracker.send({ tracking_type: "submit", eventid: "0270020000000006", telephone: e, carid: r, target: "预约看车", result: "提交成功" })
                                } else d = "提交失败!", l = o.msg, window.tracker.send({ tracking_type: "submit", eventid: "0270020000000006", telephone: e, carid: r, target: "预约看车", result: "提交失败" });
                                c.msg = l, c.title = d, m(c)
                            },
                            error: function() { d = "提交失败!", l = "网络错误.", c.msg = l, c.title = d, v(c) }
                        })
                    } else a.html("请输入正确的手机号").addClass("active"), $(".phone-input-text").addClass("warning")
                },
                showCallbackStatus: function(t) {
                    var e = $(".phone-callback-status");
                    t.msg && e.find(".calling").html(t.msg), t.title ? e.find(".deliver-title").html(t.title).css("display", "") : e.find(".deliver-title").html("").css("display", "none"), t.head ? e.find(".popup-head").html(t.head).css("display", "") : e.find(".popup-head").html("").css("display", "none"), e.addClass("active"), $("#maskEl").addClass("active")
                },
                showLabelPop: function() { $("#maskEl").addClass("active"), $(".popup-label").addClass("active") },
                showCarPriceInfo: function() { self.scrollPostion = $(window).scrollTop(), $(".popup-car-price").addClass("active"), $(".detail").css("display", "none"), $(window).scrollTop(0) },
                showCarPriceInfo_1: function() { self.scrollPostion = $(window).scrollTop(), $(".popup-car-price").addClass("active"), $(".detail").css("display", "none"), $(window).scrollTop(200) },
                showGuaziService: function() { self.scrollPostion = $(window).scrollTop(), $(".popup-guazi-service").addClass("active"), $(".detail").css("display", "none"), $(window).scrollTop(0) },
                closeGuaziService: function() { $(".popup-guazi-service").removeClass("active"), $(".detail").css("display", ""), $(window).scrollTop(self.scrollPostion) },
                showNewCarPriceNotice: function() { c("新车指导价提示", "新车含税价 = 厂商公布的指导价 + 购置税费，该价格仅供参考") },
                showInsuranceNotice: function() { c("商业保险提示", "保险是否随车赠送，需在交易过程中与车主确认") },
                showToolsNotice: function() { $(".j-tools-notice").closest("a").trigger("click"), c("随车工具提示", "随车工具是否随车赠送，需在交易过程中与车主确认") },
                showBaoMaiNotice: function() { $("#maskEl").addClass("active"), $(".popup-sell-insurance").addClass("active") }
            });
            var c = function(t, e) { return $(".pf-notice-show").find("h2").html(t), $(".pf-notice-show").find(".show-text").html(e), $("#maskEl").addClass("active"), $(".pf-notice-show").addClass("active"), !1 };
            e.slider = o.extend({ init: function(t) { this.config = t } }), e.bargain = Widget.define({
                events: { 'click [data-role="popupAppoint"]': "popupAppoint", 'click [data-role="popupBargain"]': "popupBargain", 'click [data-role="bargainCancel"]': "cancelBargain", 'click [data-role="bargainVerfSubmit"]': "submitBargain", 'click [data-role="popupReduceNotice"]': "popupReduceNotice", 'click [data-role="bargainGetCode"]': "getCode", 'click [data-role="bargainCodecancel"]': "bargainCodecancel", 'click [data-role="bargainCodeSubmit"]': "bargainCodeSubmit", 'click [data-role="popupBargainNew"]': "popupBargainNew", 'click [data-role="closeNewBargin"]': "closeNewBarginPage", 'click [data-role="submitBargainNew"]': "submitBargainNew", "click .auto-prize": "zidingBargain", "moving .js-option-continue": "barginContinue", "touchmove .js-option-continue .icon-range": "moveFalse", "moveend .js-option-continue": "chooseEnd" },
                init: function(t) {
                    this.config = t, this.inputPirce = 0, this.submitBargain_counter = 0, this.submitReduce_counter = 0;
                    var e = this;
                    this.countTimer = null, this.countStart = 60, $("#maskEl").on("click", function() { $(".popup-wrap").removeClass("active"), $(".phone-input-text").removeClass("warning"), $(".reduce-notice-phone").removeClass("warning"), $(".reduce-notice-warning").removeClass("active"), $(".popup-mobile").removeClass("active"), $("#maskEl").removeClass("active"), $("#KanJiaConfirmPhone").attr("disabled", "disabled"), $("body").css("overflow", ""), $(".detail").css("display", ""), e.cancelBargain() }), this.moveEnd = function() { return !1 }
                },
                getCookie: function(t) { var e, i = new RegExp("(^| )" + t + "=([^;]*)(;|$)"); return (e = document.cookie.match(i)) ? unescape(e[2]) : null },
                popupAppoint: function() {
                    var t = new Date,
                        e = t.getHours();
                    e >= 8 && e < 21 ? $(".phone-input").find(".popup-body").find(".desc").html("请输入手机号，我们会在30分钟内联系您。") : $(".phone-input").find(".popup-body").find(".desc").html("请留下手机号，瓜子客服将在工作时段<br>（8：00-21：00）联系您看车。"), $("#maskEl").addClass("active"), $(".phone-input").addClass("active"), $(window).scrollTop(50), $(".phone-input").find(".popup-contact").offset({ top: 130 }), $(".phone-input-warning").removeClass("active"), $("body").css("overflow", "hidden")
                },
                popupBargain: function() { this.closeNewBargin(), $("#maskEl").addClass("active"), this.config.$bargainWrap.addClass("active"), $(window).scrollTop(50), this.config.$bargainWrap.find(".popup-contact").offset({ top: 120 }), $("body").css("overflow", "hidden") },
                popupBargainNew: function() { $("#maskEl").addClass("active"), this.config.$bargainNewWrap.addClass("active"), this.config.$bargainWrap.find(".popup-contact").offset({ top: 120 }), $(".detail").css("display", "none"), $(".footer").css("display", "none"), $(".footer-2").css("display", "none"), $(".detail-footbar").css("display", "none") },
                bargainCodeSubmit: function() { b() },
                cancelBargain: function() { this.config.$bargainWrap.removeClass("active"), this.config.$priceWarring.removeClass("active"), this.config.$priceWarring.removeClass("active"), this.config.$heartPrice.removeClass("warning"), this.config.$bargainPhoneWarring.removeClass("active"), this.config.$bargainPhone.removeClass("warning"), $("#maskEl").removeClass("active"), $("body").css("overflow", "") },
                initShowBox: function(t, e, i) { this.config.$bargainWrap.addClass("active"), this.config.$bargainWrap.find(".popup-head").html(t), this.config.$originalPrice.before(e), this.config.$bargainWrap.attr("data-type", i) },
                popupReduceNotice: function() {
                    if (this.submitReduce_counter > 0) return !1;
                    var t = this,
                        e = $(".reduce-notice-cityid").html(),
                        i = $(".reduce-notice-puid").html();
                    this.submitReduce_counter = 1, $.ajax({
                        url: "/misc/callback/?act=reduce",
                        data: { puid: i, city_id: e },
                        type: "post",
                        dataType: "json",
                        success: function(e) {
                            if (t.submitReduce_counter = 0, window._hmt.push(["_trackEvent", "wap_detail_zhuanhua", "submit", "wap_detail_jiangjiatongzhi_success"]), e.status) {
                                errMsg = "若车主降价，我们会与您联系，快去下载app查看降价动态吧";
                                var i = $(".js-show-appoint-phone") ? $(".js-show-appoint-phone").html() : "";
                                "" != i && (errMsg = "若车主降价，我们会及时联系您，", errMsg += '瓜子号码<i style="color:#22ac38">' + i + "</i>，别漏接哦"), phoneNum = e.phone, window.tracker.send({ tracking_type: "submit", eventid: "0450020000000089", telephone: phoneNum, target: "降价通知我", result: "提交成功" });
                                var o = { title: "提交成功", msg: errMsg, pic: "imgtip", source: 1 };
                                m(o)
                            } else if (2002 == e.code) {
                                var n = { dis: "留下您的手机号，我们才能及时通知您车辆降价哦~", kind: 3 };
                                g(n), $("#KanJiaConfirmPhone").removeAttr("disabled")
                            } else {
                                var o = { title: e.msg };
                                v(o)
                            }
                        },
                        error: function() {
                            t.submitReduce_counter = 0;
                            var e = { title: "" };
                            errMsg = "网络错误", e.title = errMsg, v(e), e.msg = errMsg, window.tracker.send({ tracking_type: "submit", eventid: "0450020000000089", target: "降价通知我", result: "提交失败" })
                        }
                    })
                },
                submitBargain: function() {
                    if (this.submitBargain_counter > 0) return !1;
                    var t = this,
                        e = (this.config.$bargainSuc, this.config.$bargainPhoneWarring),
                        o = this.config.$priceWarring,
                        n = this.config.$bargainWrap.attr("data-type"),
                        r = this.config.$bargainWrap.attr("data-custom"),
                        a = this.config.$heartPrice,
                        s = this.config.$originalPrice.data("price"),
                        c = $(".thumb-img-numcar i").html().replace("HC-", ""),
                        l = $(".price_nub").html(),
                        d = this.config.$bargainPhone,
                        h = $("#KanJiaConfirmPhone").val(),
                        f = $(".bargain-puid").html(),
                        u = $(".bargain-cityid").html(),
                        b = /^1[34578]\d{9}$/;
                    o.html("").removeClass("active"), a.removeClass("warning"), e.html("").removeClass("active"), d.removeClass("warning");
                    var w = /^[0-9]+(.[0-9]{0,2})?$/;
                    if (!a.val()) return o.text("忘记填写心理价了哦～").addClass("active"), a.addClass("warning"), !1;
                    if (!w.test(a.val())) return o.text("最多输入两位小数～").addClass("active"), a.addClass("warning"), !1;
                    var x = parseFloat(w.exec(a.val())[0]);
                    if (realHeartPirce = 1e4 * x, s < realHeartPirce) return o.text("高于原价啦~").addClass("active"), a.addClass("warning"), !1;
                    if (0 == realHeartPirce) return o.text("不能输入0哦~").addClass("active"), a.addClass("warning"), !1;
                    var k = $(".bargain").attr("check");
                    if (2 == k) {
                        if (!h || !b.test(h)) return e.html("手机号码有误").addClass("active"), d.addClass("warning"), !1;
                        rightPhone = h
                    } else {
                        if (!d.val() || !b.test(d.val())) return e.html("手机号码有误").addClass("active"), d.addClass("warning"), !1;
                        rightPhone = d.val()
                    }
                    if (realHeartPirce / s < .94 && 1 == r) {
                        this.config.$bargainWrap.attr("data-custom", 2);
                        var y = $(".js-option-continue");
                        low = y.attr("data-low"), high = y.attr("data-high"), lowPrice = s * (1 - (100 - low) / 100 * .06) / 1e4, lowPrice = lowPrice.toFixed(2), highPrice = s * (1 - (100 - high) / 100 * .06) / 1e4, highPrice = highPrice.toFixed(2), num = 1 - realHeartPirce / s, pert = p(num, 2);
                        var z = "再提高一些出价吧";
                        if (0 == pert) var C = '<div class="car-ower car-avg">当前成交概率几乎为<em>0</em>，建议出价' + lowPrice + "-" + highPrice + "万</div>";
                        else var C = '<div class="car-ower car-avg">当前成交概率：<em>' + pert + "%</em>，建议出价" + lowPrice + "-" + highPrice + "万</div>";
                        return t.initShowBox(z, C, "1"), t.config.$heartPrice.addClass("warning"), !1
                    }
                    this.submitBargain_counter = 1;
                    var j = { title: "提交成功!", msg: "与车主商议后，我们将及时与您沟通，快去下载app查看砍价动态吧", l2: "砍价结果", l3: "及时告知", pic: "imghistroy", source: 2 },
                        S = $(".js-show-appoint-phone") ? $(".js-show-appoint-phone").html() : "";
                    "" != S && (j.msg = "与车主商议后，我们将及时与您沟通，", j.msg += '瓜子号码<i style="color:#22ac38">' + S + "</i>，别漏接哦"), $.ajax({
                        url: "/misc/callback/?act=checkPhoneCode",
                        type: "POST",
                        data: { phone: rightPhone, bidPrice: realHeartPirce, puid: f, cityId: u, originalPrice: s, type: n },
                        dataType: "json",
                        success: function(e) {
                            if (t.submitBargain_counter = 0, e.status) {
                                if (window._hmt.push(["_trackEvent", "wap_detail_zhuanhua", "submit", "wap_detail_zhuanhua_kanjia_success"]), 0 == e.avg_price) $(".car-avg").remove(), t.config.$bargainWrap.attr("data-type", 0), t.config.$bargainWrap.attr("data-custom", 0), t.config.$bargainWrap.find(".popup-head").text("我们帮您联系车主议价"), t.cancelBargain(), t.closeNewBarginPage(), m(j);
                                else {
                                    var o = "再提高一些出价吧",
                                        n = '<div class="car-ower car-avg">其他买家平均出价：<em>' + e.avg_price + "万</em></div>",
                                        r = e.type;
                                    t.initShowBox(o, n, r), t.config.$heartPrice.addClass("warning")
                                }
                                var a = i(3),
                                    s = t.getCookie("gzCityDomain");
                                a.send("&city=" + s + "&tel=" + d.val() + "@buyer", ""), window.tracker.send({ tracking_type: "submit", eventid: "0270020000000088", telephone: d.val(), carid: c, target: "砍价", result: "成功", original_price: l, heart_price: realHeartPirce })
                            } else if (2002 == e.code) {
                                t.cancelBargain();
                                var p = { dis: "留下正确手机号，我们才能及时告知您砍价结果~", kind: 1 };
                                g(p), $("#KanJiaConfirmPhone").val(d.val())
                            } else t.cancelBargain(), t.closeNewBarginPage(), j.title = e.msg, v(j)
                        },
                        error: function() {
                            t.submitBargain_counter = 0;
                            var e = { title: "网络失败!", msg: "请您稍后再试" };
                            t.cancelBargain(), t.closeNewBarginPage(), v(e), window.tracker.send({ tracking_type: "submit", eventid: "0270020000000088", telephone: d.val(), carid: f, target: "砍价", result: "失败", original_price: l, heart_price: realHeartPirce })
                        }
                    })
                },
                getCode: function() {
                    if ("disabled" === this.config.$bargainGetCode.attr("disabled")) return !1;
                    var t = this,
                        e = $("#KanJiaConfirmPhone").val(),
                        i = ($(".bargain-puid").html(), /^1[34578]\d{9}$/);
                    if (!e) return $(".pop-error-text").html("忘记填写手机号了哦~").show(), !1;
                    if (!i.test(e)) return $(".pop-error-text").html("请输入正确的手机号。").show(), !1;
                    t.countTimer = setInterval(function() { t.config.$bargainGetCode.attr("disabled", "disabled").html(t.countStart + "秒").removeClass("active"), t.countStart--, t.countStart < 0 && (clearInterval(t.countTimer), t.config.$bargainGetCode.removeAttr("disabled").html("获取验证码").addClass("active"), t.countStart = 60) }, 1e3);
                    var o = $(".js-check-post-code").attr("data-str"),
                        n = $(".js-check-post-code").attr("data-time");
                    o = a(o + "guazi&js&token" + e), $.ajax({ url: "/misc/user/?act=register", type: "POST", data: { phone: e, time: n, token: o }, dataType: "json", success: function(t) { $(".pop-error-text").html(t.msg).show() }, error: function() { $(".pop-error-text").html("网络失败~").show() } })
                },
                closeNewBargin: function() { $("body").addClass("opacity-body"), $(".detail").css("display", ""), $(".footer").css("display", ""), $(".footer-2").css("display", ""), $(".detail-footbar").css("display", ""), $("#maskEl").removeClass("active") },
                closeNewBarginPage: function() { $("body").removeClass("opacity-body"), $("#KanJiaConfirmPhone").val(""), this.config.$bargainNewWrap.removeClass("active"), $(".detail").css("display", ""), $(".footer").css("display", ""), $(".footer-2").css("display", ""), $(".detail-footbar").css("display", ""), $("#maskEl").removeClass("active") },
                barginContinue: function(t, e) {
                    var i = $(t.currentTarget),
                        o = e.mid,
                        n = p(o, 1),
                        r = d(o, i),
                        a = l(o, i);
                    $("#js-pert").html(n), $("#js-disprice").html(r), $("#suggest").html("我的出价"), $(".js-suggest").html(a)
                },
                moveFalse: function() {
                    var t = this;
                    clearTimeout(t.hidePage), t.beforeShow(), t.hidePage = setTimeout(function() { $("body").unbind("touchmove", t.moveEnd()) }, 100)
                },
                beforeShow: function() { $("body").on("touchmove", this.moveEnd()) },
                chooseEnd: function(t, e) {
                    setTimeout(function() {
                        var t = {};
                        t.tracking_type = "click", t.eventid = "111200000000003", window.tracker.send(t)
                    }, 200)
                },
                zidingBargain: function() {
                    $(".bargain").attr("check", 1);
                    var t = this.config.$bargainWrap.attr("data-custom");
                    0 == t && (this.config.$heartPrice.val(""), this.config.$bargainWrap.attr("data-custom", 1)), this.popupBargain()
                },
                submitBargainNew: function() {
                    $(".bargain").attr("check", 2);
                    var t = $("#js-disprice").html();
                    if (this.config.$heartPrice.val(t), this.closeNewBargin(), this.submitBargain_counter > 0) return !1;
                    var e = this,
                        o = (this.config.$bargainSuc, this.config.$bargainPhoneWarring),
                        n = this.config.$priceWarring,
                        r = this.config.$bargainWrap.attr("data-type"),
                        a = this.config.$heartPrice,
                        s = this.config.$originalPrice.data("price"),
                        c = $(".thumb-img-numcar i").html().replace("HC-", ""),
                        l = $(".price_nub").html(),
                        d = this.config.$bargainPhone,
                        p = ($("#KanJiaConfirmPhone").val(), $(".bargain-puid").html()),
                        h = $(".bargain-cityid").html();
                    n.html("").removeClass("active"), a.removeClass("warning"), o.html("").removeClass("active"), d.removeClass("warning");
                    var f = /^[0-9]+(.[0-9]{0,2})?$/;
                    if (!a.val()) return !1;
                    if (!f.test(a.val())) return !1;
                    var u = parseFloat(f.exec(a.val())[0]);
                    if (realHeartPirce = 1e4 * u, s < realHeartPirce) return !1;
                    this.submitBargain_counter = 1;
                    var b = { title: "提交成功!", msg: "与车主商议后，我们将及时与您沟通，快去下载app查看砍价动态吧", l2: "砍价结果", l3: "及时告知", pic: "imghistroy", source: 2 },
                        w = $(".js-show-appoint-phone") ? $(".js-show-appoint-phone").html() : "";
                    "" != w && (b.msg = "与车主商议后，我们将及时与您沟通，", b.msg += '瓜子号码<i style="color:#22ac38">' + w + "</i>，别漏接哦"), $.ajax({
                        url: "/misc/callback/?act=checkPhoneCode",
                        type: "POST",
                        data: { bidPrice: realHeartPirce, puid: p, cityId: h, originalPrice: s, type: r },
                        dataType: "json",
                        success: function(t) {
                            if (e.submitBargain_counter = 0, t.status) {
                                if (window._hmt.push(["_trackEvent", "wap_detail_zhuanhua", "submit", "wap_detail_zhuanhua_kanjia_success"]), 0 == t.avg_price) $(".car-avg").remove(), e.config.$bargainWrap.attr("data-type", 0), e.config.$bargainWrap.find(".popup-head").text("我们帮您联系车主议价"), e.cancelBargain(), e.closeNewBarginPage(), m(b);
                                else {
                                    var o = "再提高一些出价吧",
                                        n = '<div class="car-ower car-avg">其他买家平均出价：<em>' + t.avg_price + "万</em></div>",
                                        r = t.type;
                                    e.initShowBox(o, n, r), e.config.$heartPrice.addClass("warning")
                                }
                                var a = i(3),
                                    s = e.getCookie("gzCityDomain");
                                a.send("&city=" + s + "&tel=" + d.val() + "@buyer", ""), window.tracker.send({ tracking_type: "submit", eventid: "0270020000000088", telephone: d.val(), carid: c, target: "砍价", result: "成功", original_price: l, heart_price: realHeartPirce })
                            } else if (2002 == t.code) {
                                var p = { dis: "留下正确手机号，我们才能及时告知您砍价结果~", kind: 1 };
                                g(p), $("#KanJiaConfirmPhone").removeAttr("disabled")
                            } else e.cancelBargain(), e.closeNewBarginPage(), b.title = t.msg, v(b)
                        },
                        error: function() { e.submitBargain_counter = 0, b.title = "网络失败!", b.msg = "请您稍后再试", e.cancelBargain(), e.closeNewBarginPage(), v(b), window.tracker.send({ tracking_type: "submit", eventid: "0270020000000088", telephone: d.val(), carid: p, target: "砍价", result: "失败", original_price: l, heart_price: realHeartPirce }) }
                    })
                },
                bargainCodecancel: function() { $("#maskEl").trigger("click") }
            });
            var l = function(t, e) { return num = (100 - t) / 100 * 6, kind = e.attr("data-kind"), low = e.attr("data-low"), high = e.attr("data-high"), 2 == kind && t >= low && t <= high ? "报价偏高可适当砍价，成交得看车主降价意愿" : 3 == kind && t >= low && t <= high ? "报价合理，适当砍价更易成交" : num < .7 ? "成交概率极高，尽快出价，不要被人捷足先登哦" : num < 1.8 ? "成交概率非常高，建议尽快出价" : num < 2.7 ? "成交概率比较高，建议确认出价" : num < 4.3 ? "成交概率一般，真心喜欢这车可以稍稍提价哦" : num < 5.2 ? "成交概率有点低了，建议提高出价哦" : num < 7.9 ? "成交概率比较低，建议提高出价哦" : num < 19.9 ? "成交概率低，建议提高出价哦" : "当前出价成交概率基本为0了，建议提高出价哦" },
                d = function(t, e) { num = (100 - t) / 100 * .06; var i = e.attr("data-price"); return i = i * (1 - num) / 1e4, price = i.toFixed(2), price },
                p = function(t, e) {
                    if (2 == e) var i = 100 * t;
                    else var i = (100 - t) / 100 * 6;
                    return i < .1 ? 95 : i < .2 ? 94 : i < .3 ? 93 : i < .4 ? 92 : i < .5 ? 92 : i < .6 ? 91 : i < .7 ? 90 : i < .8 ? 89 : i < .9 ? 88 : i < 1 ? 87 : i < 1.1 ? 87 : i < 1.2 ? 87 : i < 1.3 ? 86 : i < 1.4 ? 85 : i < 1.5 ? 84 : i < 1.6 ? 83 : i < 1.7 ? 82 : i < 1.8 ? 81 : i < 1.9 ? 79 : i < 2 ? 78 : i < 2.1 ? 77 : i < 2.2 ? 76 : i < 2.3 ? 75 : i < 2.4 ? 73 : i < 2.5 ? 72 : i < 2.6 ? 71 : i < 2.7 ? 70 : i < 2.8 ? 68 : i < 2.9 ? 67 : i < 3 ? 66 : i < 3.1 ? 65 : i < 3.2 ? 63 : i < 3.3 ? 62 : i < 3.4 ? 61 : i < 3.5 ? 60 : i < 3.6 ? 58 : i < 3.7 ? 57 : i < 3.8 ? 56 : i < 3.9 ? 55 : i < 4 ? 53 : i < 4.1 ? 52 : i < 4.2 ? 51 : i < 4.3 ? 50 : i < 4.4 ? 49 : i < 4.5 ? 48 : i < 4.6 ? 47 : i < 4.7 ? 45 : i < 4.8 ? 44 : i < 4.9 ? 43 : i < 5 ? 42 : i < 5.1 ? 41 : i < 5.2 ? 40 : i < 5.3 ? 39 : i < 5.4 ? 38 : i < 5.5 ? 37 : i < 5.6 ? 36 : i < 5.7 ? 35 : i < 5.8 ? 34 : i < 5.9 ? 34 : i < 6 ? 33 : i < 6.1 ? 32 : i < 6.2 ? 31 : i < 6.3 ? 30 : i < 6.4 ? 30 : i < 6.5 ? 29 : i < 6.6 ? 28 : i < 6.7 ? 27 : i < 6.8 ? 27 : i < 6.9 ? 26 : i < 7 ? 25 : i < 7.1 ? 25 : i < 7.2 ? 24 : i < 7.3 ? 24 : i < 7.4 ? 23 : i < 7.5 ? 22 : i < 7.6 ? 22 : i < 7.7 ? 21 : i < 7.8 ? 21 : i < 7.9 ? 20 : i < 8 ? 20 : i < 8.1 ? 19 : i < 8.2 ? 19 : i < 8.3 ? 18 : i < 8.4 ? 18 : i < 8.5 ? 18 : i < 8.6 ? 17 : i < 8.7 ? 17 : i < 8.8 ? 16 : i < 8.9 ? 16 : i < 9 ? 15 : i < 9.1 ? 15 : i < 9.2 ? 15 : i < 9.3 ? 14 : i < 9.4 ? 14 : i < 9.5 ? 13 : i < 9.6 ? 13 : i < 9.7 ? 13 : i < 9.8 ? 12 : i < 9.9 ? 12 : i < 10 ? 12 : i < 10.1 ? 12 : i < 10.2 ? 11 : i < 10.3 ? 11 : i < 10.4 ? 11 : i < 10.5 ? 11 : i < 10.6 ? 10 : i < 10.7 ? 10 : i < 10.8 ? 10 : i < 10.9 ? 10 : i < 11 ? 9 : i < 11.1 ? 9 : i < 11.2 ? 9 : i < 11.3 ? 9 : i < 11.4 ? 8 : i < 11.5 ? 8 : i < 11.6 ? 8 : i < 11.7 ? 8 : i < 11.8 ? 8 : i < 11.9 ? 8 : i < 12 ? 7 : i < 12.1 ? 7 : i < 12.2 ? 7 : i < 12.3 ? 7 : i < 12.4 ? 7 : i < 12.5 ? 7 : i < 12.6 ? 7 : i < 12.7 ? 6 : i < 12.8 ? 6 : i < 12.9 ? 6 : i < 13 ? 6 : i < 13.1 ? 6 : i < 13.2 ? 6 : i < 13.3 ? 6 : i < 13.4 ? 6 : i < 13.5 ? 6 : i < 13.6 ? 5 : i < 13.7 ? 5 : i < 13.8 ? 5 : i < 13.9 ? 5 : i < 14 ? 5 : i < 14.1 ? 5 : i < 14.2 ? 5 : i < 14.3 ? 5 : i < 14.4 ? 5 : i < 14.5 ? 4 : i < 14.6 ? 4 : i < 14.7 ? 4 : i < 14.8 ? 4 : i < 14.9 ? 4 : i < 15 ? 4 : i < 15.1 ? 4 : i < 15.2 ? 4 : i < 15.3 ? 4 : i < 15.4 ? 4 : i < 15.5 ? 4 : i < 15.6 ? 4 : i < 15.7 ? 4 : i < 15.8 ? 4 : i < 15.9 ? 4 : i < 16 ? 3 : i < 16.1 ? 3 : i < 16.2 ? 3 : i < 16.3 ? 3 : i < 16.4 ? 3 : i < 16.5 ? 3 : i < 16.6 ? 3 : i < 16.7 ? 3 : i < 16.8 ? 3 : i < 16.9 ? 3 : i < 17 ? 3 : i < 17.1 ? 3 : i < 17.2 ? 3 : i < 17.3 ? 3 : i < 17.4 ? 3 : i < 17.5 ? 3 : i < 17.6 ? 3 : i < 17.7 ? 2 : i < 17.8 ? 2 : i < 17.9 ? 2 : i < 18 ? 2 : i < 18.1 ? 2 : i < 18.2 ? 2 : i < 18.3 ? 2 : i < 18.4 ? 2 : i < 18.5 ? 2 : i < 18.6 ? 2 : i < 18.7 ? 2 : i < 18.8 ? 2 : i < 18.9 ? 2 : i < 19 ? 2 : i < 19.1 ? 2 : i < 19.2 ? 2 : i < 19.3 ? 2 : i < 19.4 ? 2 : i < 19.5 ? 2 : i < 19.6 ? 2 : i < 19.7 ? 2 : i < 19.8 ? 2 : i < 19.9 ? 2 : i < 20 ? 2 : 0
                };
            e.configure = Widget.define({
                events: { 'click [data-role="tabConfigure"] a': "tabConfigure" },
                init: function(t) { this.config = t, t.$tabConfigure.children("a").first().addClass("active"), t.$el.children("div").eq(1).addClass("active") },
                tabConfigure: function(t) {
                    var e = this.config,
                        i = $(t.currentTarget),
                        o = i.data("index");
                    e.$el.find("a").removeClass("active"), e.$el.find(".js_tab").removeClass("active"), i.addClass("active"), e.$el.children("div").eq(o).addClass("active")
                }
            });
            var h = Widget.define({
                init: function(t) { this.config = t, this.$tabs = t.$el.find("li > a"), this.tabOrder = this.$tabs.map(function() { return $(this).data("imgOrder") }).concat(9999) },
                changeTabByImageIndex: function(t) {
                    for (var e = 0, i = 0; i < this.tabOrder.length && (e = i, !(t < this.tabOrder[i])); i++);
                    this.changeTab(e - 1, !0)
                },
                changeTab: function(t, e) { this.$tabs.eq(t).hasClass("active") || (this.$tabs.removeClass("active"), this.$tabs.eq(t).addClass("active"), e || this.config.$el.trigger("tab-changed", { tabIndex: t, imageIndex: this.tabOrder[t] })) },
                events: { "click li > a": function(t) { this.changeTab($(t.currentTarget).parent().index()) } }
            });
            e.photoTab = Widget.define({
                init: function(t) {
                    t.$photoList.filter(":visible").each(function() { f($(this)) }), t.$el.on("change-to", function(t, e) {
                        var i = $(e);
                        i.data("widget") || f(i)
                    }), this.$tabcon = t.$el.find(".img-tabcon"), this.$tabcon.on("tab-changed", function(e, i) { t.$photoList.data("widget").slideTo(i.imageIndex) }), h.init(this.$tabcon)
                },
                events: { "slide-to": function(t, e) { this.$tabcon.data("widget").changeTabByImageIndex(e) } }
            });
            var f = function(t) { u.setEl(t), Widget.initWidgets([u]) },
                u = Widget.define({
                    events: { touchmove: function(t) { t.preventDefault() } },
                    init: function(t) {
                        function e(e) {
                            $([t.$item.eq(e).find("img[data-src]"), t.$item.eq(e + 1).find("img[data-src]")]).each(function() {
                                var t = $(this);
                                t.data("src") && t.attr("src") !== t.data("src") && (t.on("load", function() {
                                    var t = new n($(this), { container: !0 });
                                    $(this).closest("[data-role=item]").data("pinchZoom", t)
                                }), t.attr("src", t.data("src")))
                            })
                        }
                        this.config = t, this.prevIndex = t.initIndex || 0, e(t.initIndex || 0), this.swipe = new r(t.$swipe.get(0), { startSlide: t.initIndex || 0, speed: 400, auto: +t.auto, continuous: !0, disableScroll: !1, stopPropagation: !1, callback: function(i) { t.$el.find('[data-role="index"]').text(i + 1), $(".photoTab").trigger("slide-to", i), e(i) }, transitionEnd: function() {} })
                    },
                    slideTo: function(t) { this.swipe.getPos() !== t && this.swipe.slide(t) }
                });
            e.saveBrowsePost = Widget.define({
                init: function(t) {
                    var e = t.puid;
                    $.ajax({ type: "GET", url: "/ajax/?a=json&module=vehicle_c2c_saveBrowsePost", data: { puid: e }, success: function() {} })
                }
            }), e.jumpList = Widget.define({ init: function(t) { t.$el.on("click", function() { NativeAPI.invoke("createNativeView", { name: "searchPost", data: t.params }) }) } }), e.confimePop = Widget.define({
                events: { 'click [data-role="openAppUrl"]': "openAppUrl", 'click [data-role="confimePop"]': "confimePop" },
                init: function(t) { this.config = t, this.config.$mask = $(".mask") },
                confimePop: function() {
                    var t = this.config.$el;
                    t.removeClass("active"), this.config.$mask.removeClass("active"), this.config.$mask.removeAttr("style")
                },
                openAppUrl: function() {
                    this.confimePop();
                    var t = this.config.$openAppUrl.attr("app_url");
                    window.location.href = t
                }
            }), e.closePop = Widget.define({
                events: { 'click [data-role="closeDownloadBar"]': "closeDownloadBar" },
                init: function(t) {
                    this.config = t, this.config.$ImageAppDownIsShow = $("#ImageAppDownIsShow");
                    var e = new Date;
                    if (this.bigImageShow = !0, this.currentMillionSecond = e.getTime(), this.localStorageSubstitute = Window.localStorageSubstitute, localStorageSubstitute.getItem("bigImageCurrentMillionSecond")) {
                        var i = localStorageSubstitute.getItem("bigImageCurrentMillionSecond");
                        ((this.currentMillionSecond - i) / 1e3).toFixed(0) < 259200 ? this.bigImageShow = !1 : localStorageSubstitute.removeItem("bigImageCurrentMillionSecond")
                    }
                    this.bigImageShow || this.config.$ImageAppDownIsShow.css("display", "none")
                },
                closeDownloadBar: function() { this.config.$ImageAppDownIsShow.css("display", "none"), self.localStorageSubstitute.setItem("bigImageCurrentMillionSecond", this.currentMillionSecond) }
            }), e.makePhoneAppPub = Widget.define({ init: function() { $(".head-collect").click(function(t) { $("#maskEl").css("z-index", 100).addClass("active"), $("#app-pub").addClass("active"), t.stopPropagation() }) } });
            e.headControl = Widget.define({
                events: { "click .usericon": "disAppDownload", "click .submitCollect": "collecticonInfo", "click .submitCollect2": "collecticonInfo" },
                init: function() {},
                disAppDownload: function() {
                    var t = { title: "", msg: "", source: 4 };
                    m(t)
                },
                collecticonInfo: function() {
                    var t = $(".pos-popup").data("puid");
                    $.ajax({
                        url: "/ajax.php?module=SubmitCollection",
                        type: "POST",
                        data: { puid: t },
                        dataType: "json",
                        success: function(t) {
                            if (0 == t.code) {
                                var e = { title: "收藏成功!", msg: "快去下载APP，查看收藏车辆吧", pic: "imgcollect", source: 3 };
                                $(".collecticon").addClass("active"), m(e)
                            } else if (2001 == t.code) {
                                var e = { title: "您已收藏过这辆车了", msg: "快去下载APP，查看收藏车辆吧", pic: "imgcollect", source: 3 };
                                $(".collecticon").addClass("active"), m(e)
                            } else if (2003 == t.code) {
                                var e = { title: "收藏失败" };
                                v(e)
                            } else if (2002 == t.code) {
                                var i = { dis: "输入您的手机号，我们才能将车辆放入您的收藏呦~", kind: 2 };
                                g(i), $("#KanJiaConfirmPhone").removeAttr("disabled")
                            }
                        },
                        error: function() {
                            var t = { title: "" };
                            errMsg = "网络错误", t.title = errMsg, v(t)
                        }
                    })
                }
            });
            var m = function(t) {
                    $appPub = $(".js-sub-app-show-new"), t.title ? title = t.title : title = "APP端才能查看哦!", t.msg ? subt = t.msg : subt = "快去下载APP，管理个人账号吧", t.pic ? disPic = t.pic : disPic = "imguser", t.source ? source = t.source : source = 4, $appPub.find(".textsucc").html(title), $appPub.find(".js-subtitle").html(subt);
                    var e = $("#tancengPic").attr("class");
                    if ($("#tancengPic").removeClass(e).addClass(disPic), 1 == source) var i = "tracking_type=click&eventid=1112432100000005";
                    else if (2 == source) var i = "tracking_type=click&eventid=1112432100000006";
                    else if (3 == source) var i = "tracking_type=click&eventid=1112432100000007";
                    else var i = "tracking_type=click&eventid=1112432100000004";
                    $("#downLoadUrl").attr("data-gzlog", i), $(".js-sub-app-show-new").addClass("active"), $("#maskEl").addClass("active")
                },
                g = function(t) {
                    $loginPub = $(".popup-mobile");
                    var e = t.dis,
                        i = t.kind;
                    $loginPub.find(".pop-text").html(e), $("#skipKind").val(i), $(".popup-mobile").addClass("active"), $(".popup-mobile").offset({ top: 140 }), $("#maskEl").addClass("active"), $("body").css("overflow", "hidden")
                },
                b = function() {
                    var t = $("#codeNumber").val(),
                        e = $("#KanJiaConfirmPhone").val(),
                        i = $("#skipKind").val();
                    if ($(".pop-error-text").html("").hide(), !t) return $(".pop-error-text").html("请输入验证码").show(), !1;
                    var o = $(".js-check-post-code").attr("data-str"),
                        n = $(".js-check-post-code").attr("data-time");
                    o = a(o + "guazi&js&token" + e), $.ajax({ url: "/misc/user/?act=checkCode", type: "POST", data: { code: t, phone: e, time: n, token: o }, dataType: "json", success: function(t) { t.status ? ($("#maskEl").trigger("click"), 1 == i ? $("a[data-role=bargainVerfSubmit]").trigger("click") : 2 == i ? $(".submitCollect").trigger("click") : 3 == i ? $("div[data-role=popupReduceNotice]").trigger("click") : 4 == i ? $(".j-open-im").trigger("click") : 5 == i && ($backUrl = $(".j-backUrl").val(), window.location = $backUrl)) : $(".pop-error-text").html(t.msg).show() } })
                },
                v = function(t) { t.title ? title = t.title : title = "提交失败", $("#errorCont").html(title), $("#errorDis").addClass("active"), setTimeout(function() { $("#errorDis").removeClass("active") }, 1500) };
            e.initDetailPage = Widget.define({
                init: function() {
                    $(window).scroll(function() {
                        var t = $(window).scrollTop();
                        t > 150 ? $(".topnav-float").addClass("active") : $(".topnav-float").removeClass("active")
                    })
                }
            }), e.initDetailPage_v2 = Widget.define({
                init: function() {
                    $(window).scroll(function() {
                        var t = $(window).scrollTop(),
                            e = $(".head-tab").find(".j-head-tab-detailInfo").hasClass("active");
                        t > 150 ? $(".topnav-float").addClass("active") : e && ($(".topnav-float").removeClass("active"), $(".topnav-embed").addClass("active"))
                    })
                }
            }), e.slideUPSkip = Widget.define({
                init: function(t) {
                    var e = this,
                        i = $(".drag-up-more"),
                        o = $("#detailInfo");
                    this.startY = 0, this.touchY = 0, this.skip = 0, $("body").on("touchstart", function(t) { e.startY = t.touches[0].pageY }), $("body").on("touchmove", function(t) {
                        e.skip = 0;
                        var n = $(window).scrollTop(),
                            r = e.startY - t.touches[0].pageY;
                        if (n >= $(document).height() - $(window).height() && r >= 0) {
                            t.preventDefault(), t.stopPropagation();
                            var a = "translate3d(0,-" + r / 5 + "px,0)",
                                s = r / 80;
                            s > 1 && (s = 1), i.find(".drag-up-more-content").html("上拉查看图文详情"), o.css({ transform: a, "-webkit-transform": a }), i.find(".drag-up-more-arrow").css({ transform: "rotateX(" + 180 * s + "deg)", "-webkit-transform": "rotateX(" + 180 * s + "deg)" }), r > 40 && (e.skip = 1, i.find(".drag-up-more-content").html("释放查看图文详情"))
                        }
                    }), $("body").on("touchend", function(t) {
                        var n = $(".j-head-tab-detailInfo").hasClass("active");
                        1 == e.skip && n && (window.localStorageSubstitute.setItem("tab1Top", $(window).scrollTop()), window.localStorageSubstitute.setItem("slideFromTab1", 1), $(".head-tab").find(".j-slide-head").hide(), $(".head-tab").find(".j-slide-head-1").show(), $(".j-head-tab-xiangqing").trigger("click"), $(".j-second-tab-pic").trigger("click"), e.skip = 0, window.tracker.send({ tracking_type: "slidePage", eventid: "0220050000099069", target: "上滑跳转" })), o.css({ transform: "translate3d(0,0,0)", "-webkit-transform": "translate3d(0,0,0)" }), i.find(".drag-up-more-arrow").css({ transform: "rotateX(0deg)", "-webkit-transform": "rotateX(0deg)" }), i.find(".drag-up-more-content").html("上拉查看图文详情");
                    })
                }
            }), e.slideDOWNSkip = Widget.define({
                init: function(t) {
                    var e = this,
                        i = $("#xiangqing"),
                        o = $(".drag-down-more"),
                        n = $(".second-tab"),
                        r = 44;
                    this.startY = 0, this.touchY = 0, this.skip = 0, $("body").on("touchstart", function(t) { e.startY = t.touches[0].pageY }), $("body").on("touchmove", function(t) {
                        e.skip = 0;
                        var a = t.touches[0].pageY,
                            s = a - e.startY,
                            c = $(window).scrollTop(),
                            l = window.localStorageSubstitute.getItem("slideFromTab1");
                        if ("1" === l && c <= 0 && s >= 0 && (t.preventDefault(), t.stopPropagation(), o.addClass("active"), o.find(".drag-down-more-content").html("下拉返回车源简介"), n.css({ top: s + r + "px" }), i.css({ transform: "translate3d(0," + s + "px,0)", "-webkit-transform": "translate3d(0," + s + "px,0)" }), s > 65)) {
                            var d = s - 65,
                                p = d / 80 > 1 ? 1 : d / 80;
                            n.css({ top: 65 + r + d / 5 + "px" }), i.css({ transform: "translate3d(0," + (65 + d / 5) + "px,0)", "-webkit-transform": "translate3d(0," + (65 + d / 5) + "px,0)" }), o.find(".drag-down-more-arrow").css({ transform: "rotateX(" + 180 * p + "deg)", "-webkit-transform": "rotateX(" + 180 * p + "deg)" }), s > 105 && (e.skip = 1, o.find(".drag-down-more-content").html("释放返回车源简介"))
                        }
                    }), $("body").on("touchend", function(t) {
                        var r = $(".j-head-tab-xiangqing").hasClass("active"),
                            a = window.localStorageSubstitute.getItem("slideFromTab1");
                        1 == e.skip && r && "1" === a && ($(".j-head-tab-detailInfo").trigger("click"), $(window).scrollTop($(document).height()), e.skip = 0, window.localStorageSubstitute.setItem("slideFromTab1", 0), $(".head-tab").find(".j-slide-head").show(), $(".head-tab").find(".j-slide-head-1").hide(), window.tracker.send({ tracking_type: "slidePage", eventid: "0220050000099068", target: "下滑跳转" })), $(".drag-more").hide(), o.removeClass("active"), i.css({ transform: "translate3d(0,0,0)", "-webkit-transform": "translate3d(0,0,0)" }), n.css({ top: ".44rem" }), o.find(".drag-down-more-arrow").css({ transform: "rotateX(0deg)", "-webkit-transform": "rotateX(0deg)" }), o.find(".drag-down-more-content").html("下拉返回车源简介")
                    })
                }
            }), e.change2d3d = Widget.define({
                init: function(t) {},
                events: { "click li": "changeTab" },
                changeTab: function(t) {
                    $(t.target).addClass("active").siblings().removeClass("active");
                    var e = $(t.target).closest(".report-img");
                    if ($(t.target).hasClass("d-tab-2d")) e.find(".j-d-tab-2d").addClass("active"), e.find(".j-d-tab-3d").removeClass("active");
                    else {
                        e.find(".j-d-tab-3d").addClass("active"), e.find(".j-d-tab-2d").removeClass("active");
                        var i = e.find(".j-pic-index").text() - 1;
                        e.find(".car-thrD-show").trigger("init3DShow", window.initPositionList[i])
                    }
                }
            }), e.trans3d = Widget.define({
                init: function(t) {
                    this.config = t, this.config.startPos = {}, this.config.touch1move = !0, this.config.direction = "vertical";
                    var e = window.initPositionList[0] ? window.initPositionList[0] : 12;
                    this.init3DShowFunc({}, e)
                },
                events: { "touchstart .thrD-ellipse-slider": "touchstartSlider", "touchmove .thrD-ellipse-slider": "touchmoveSlider", "touchend .thrD-ellipse-slider": "touchendSlider", "touchstart .thrD-cars": "touchstartCars", "touchmove .thrD-cars": "touchmoveCars", "touchend .thrD-cars": "touchendCars", init3DShow: "init3DShowFunc" },
                init3DShowFunc: function(t, e) { "undefined" == typeof e && (e = 12), this.config.deg = Math.PI - e * Math.PI / 24, this.config.container = this.config.$el.closest(".report-img"), this.config.ellipse = this.config.container.find(".thrD-ellipse"), this.config.ellipseLongR = this.config.ellipse.offset().width / 2, this.config.ellipseShortR = this.config.ellipse.offset().height / 2, this.config.ellipseCenter = { x: this.config.ellipse.offset().left + this.config.ellipseLongR, y: this.config.ellipse.offset().top + this.config.ellipseShortR }, this.config.canvas = this.config.container.find(".thrD-cars-canvas")[0], this.changeSlider(this.config.deg), this.changeImg(e) },
                touchstartSlider: function(t) { t.preventDefault(), t.stopPropagation() },
                touchmoveSlider: function(t) {
                    t.preventDefault(), t.stopPropagation();
                    var e = this.config,
                        i = t.touches[0],
                        o = {};
                    o.x = i.pageX - e.ellipseCenter.x, o.y = i.pageY - e.ellipseCenter.y, o.y < 0 || (this.config.deg = this.calcDeg(o), this.changeSlider(this.config.deg), this.changeImg(this.translateDeg(this.config.deg)))
                },
                touchendSlider: function(t) { t.preventDefault(), t.stopPropagation() },
                touchstartCars: function(t) { this.config.touch1move = !0, this.config.startPos.x = t.touches[0].pageX, this.config.startPos.y = t.touches[0].pageY },
                touchmoveCars: function(t) {
                    var e = t.touches[0],
                        i = e.pageX - this.config.startPos.x,
                        o = e.pageY - this.config.startPos.y;
                    this.config.touch1move && (this.config.direction = Math.abs(o) > Math.abs(i) ? "vertical" : "horizontal", this.config.touch1move = !1), "vertical" != this.config.direction && (t.preventDefault(), t.stopPropagation(), this.config.deg -= i / 150, this.config.deg > Math.PI ? this.config.deg = Math.PI : this.config.deg < 0 ? this.config.deg = 0 : (this.config.startPos.x = t.touches[0].pageX, this.config.startPos.y = t.touches[0].pageY), this.changeSlider(this.config.deg), this.changeImg(this.translateDeg(this.config.deg)))
                },
                touchendCars: function(t) { t.preventDefault(), t.stopPropagation() },
                translateDeg: function(t) { var e = 180 - t / Math.PI * 180; return Math.round(e / 7.5) },
                changeImg: function(t) {
                    var e = this;
                    if (!(t < 0 || t > 24)) {
                        24 === t && (t = 0), this.config.lastIndex = t, this.config.canvas = this.config.container.find(".thrD-cars-canvas")[0];
                        var i = this.config.canvas.getContext("2d"),
                            o = new Image;
                        o.src = "http://sta.guazi.com/static/c2c/wap/detail/car-" + t + ".png", o.onload = function() { i.clearRect(0, 0, 500, 313), i.drawImage(o, 0, 0), e.buildDot(t) }, this.config.container.find(".thrD-ellipse-node-text").removeClass("active"), 12 == t ? this.config.container.find(".thrD-ellipse-node-text.middle").addClass("active") : 15 == t ? this.config.container.find(".thrD-ellipse-node-text.right-one").addClass("active") : 21 == t ? this.config.container.find(".thrD-ellipse-node-text.right-two").addClass("active") : 9 == t ? this.config.container.find(".thrD-ellipse-node-text.left-one").addClass("active") : 3 == t && this.config.container.find(".thrD-ellipse-node-text.left-two").addClass("active")
                    }
                },
                buildDot: function(t) {
                    if ("undefined" != typeof $("#defectPosition").val()) {
                        var e = $.parseJSON($("#defectPosition").val()),
                            i = "";
                        if (this.config.container.find(".j-3d-car .j-3d-dot").remove(), "undefined" !== e.stereo[t]) {
                            var o = e.stereo[t];
                            for (var n in o) {
                                var r = "",
                                    a = this.config.container.find(".j-pic-index").text();
                                n == a - 1 && (r = "on"), i += '<span class="dot j-3d-dot" data-dot-num="' + n + '" style="position:absolute;left:' + o[n].left + "%; top:" + o[n].top + '%">\n<i class="j-dotted-item-i ' + r + '"></i>\n</span>'
                            }
                        }
                        this.config.container.find(".j-3d-car").append(i)
                    }
                },
                changeSlider: function(t) {
                    if (!(this.config.deg > Math.PI || this.config.deg < 0)) {
                        var e = this.config,
                            i = e.ellipseLongR * (1 + Math.cos(t)),
                            o = e.ellipseShortR * (1 + Math.sin(t));
                        this.config.container.find(".thrD-ellipse-slider").css({ transform: "translate3d(" + i + "px," + o + "px,0)", "-webkit-transform": "translate3d(" + i + "px," + o + "px,0)" })
                    }
                },
                calcDeg: function(t) {
                    var e = this.config,
                        i = e.ellipseLongR / e.ellipseShortR;
                    return Math.PI / 2 - Math.atan(t.x / t.y / i)
                }
            }), e.slideBanner = Widget.define({
                init: function(t) {
                    var e = this;
                    this.startX = 0, this.touchX = 0, this.isEnd = 0, $("#detailInfo").on("touchstart", function(t) { e.startX = t.touches[0].pageX }), $("#detailInfo").on("touchmove", function(t) {
                        var i = e.startX - t.touches[0].pageX;
                        e.isEnd = 0, i > 50 ? e.isEnd = 1 : i < -50 && (e.isEnd = 2), e.touchX = i
                    }), $("#detailInfo").on("touchend", function(t) { return 1 == e.isEnd && e.touchX >= 0 ? ($(".j-head-tab-detailInfo").hasClass("active") ? $(".j-head-tab-chekuang").trigger("click") : $(".j-head-tab-chekuang").hasClass("active") && $(".j-head-tab-xiangqing").trigger("click"), !1) : 2 == e.isEnd && e.touchX <= 0 ? ($(".j-head-tab-chekuang").hasClass("active") ? $(".j-head-tab-detailInfo").trigger("click") : $(".j-head-tab-xiangqing").hasClass("active") && $(".j-head-tab-chekuang").trigger("click"), !1) : void 0 })
                }
            }), e.chooseCars = Widget.define({
                init: function(t) {
                    this.config = t, this.config.checkedCars = [];
                    var e = $(".btn-2").find(".byWay"),
                        i = $(".btn-2").find(".order"),
                        o = $(".btn-2").find(".byWay").find("i");
                    0 === this.config.checkedCars.length ? (i.css({ display: "", opacity: 1 }), e.css({ display: "none" })) : (o.text(this.config.checkedCars.length), i.css("display", "none"), e.css({ display: "", opacity: 1 }));
                    var n = $(".js-shun-lu").offset().top,
                        r = !1;
                    $(document).on("scroll", function() {
                        var t = $(window).scrollTop() + $(window).height() - 100;
                        if (t > n && !r) {
                            var e = $("#shunLuCarIds").val();
                            window.tracker.send({ tracking_type: "scrollPage", eventid: "1112817000000004", carids: e }), r = !0
                        }
                    })
                },
                events: { click: "clickFunc" },
                clickFunc: function(t) {
                    function e(t, i) { return t.hasClass("look-more-ul") ? [] : t.hasClass(i) ? t : e(t.parent(), i) }
                    var i = $(t.target),
                        o = (this.config.checkedCars, $(".btn-2")),
                        n = $(".btn-2").find(".byWay"),
                        r = $(".btn-2").find(".order"),
                        a = $(".btn-2").find(".byWay").find("i"),
                        s = document.body.scrollTop;
                    if (0 === e(i, "look-more-car-link").length && (t.preventDefault(), t.stopPropagation(), i = e(i, "by-the-way"), 0 !== i.length)) {
                        var c = i.index(),
                            l = i.find("img"),
                            d = (i.find(".check-box"), l.offset()),
                            p = l.clone();
                        p.css({ position: "fixed", top: d.top - s + "px", left: d.left + "px", width: d.width, height: d.height, opacity: 1, transform: "scale(1)", "-webkit-transform": "scale(1)", transition: "all 0.6s", "-webkit-transition": "all 0.6s" });
                        var h = i.attr("cai-id"),
                            f = $("[data-callcs]").attr("data-extendCars");
                        if (this.config.checkedCars.indexOf(c) === -1) {
                            if (null == f) {
                                var u = [h];
                                $("[data-callcs]").attr("data-extendcars", JSON.stringify(u))
                            } else {
                                var u = JSON.parse(f);
                                u.push(h), $("[data-callcs]").attr("data-extendcars", JSON.stringify(u))
                            }
                            i.find("i.check-box").addClass("check-box-active"), window.tracker.send({ tracking_type: "click", eventid: "1112817000000001", carid: h, type: "add" }), this.config.checkedCars.push(c), $("body").append(p), setTimeout(function() { p.css({ opacity: .4, transform: "scale(0.5)", "-webkit-transform": "scale(0.5)", top: o.offset().top - s + "px", left: o.offset().left + "px" }), setTimeout(function() { document.body.removeChild(p[0]) }, 600) }, 0), 1 === this.config.checkedCars.length && (n.css("display", ""), r.removeClass("enter").addClass("leave"), n.removeClass("leave").addClass("enter"), setTimeout(function() { r.css({ display: "none" }) }, 500))
                        } else {
                            var u = JSON.parse(f);
                            u.splice($.inArray(h, u), 1), $("[data-callcs]").attr("data-extendcars", JSON.stringify(u)), window.tracker.send({ tracking_type: "click", eventid: "1112817000000001", carid: h, type: "del" }), i.find("i.check-box").removeClass("check-box-active"), this.config.checkedCars.splice(this.config.checkedCars.indexOf(c), 1), 0 === this.config.checkedCars.length && (r.css({ display: "" }), r.removeClass("leave").addClass("enter"), n.removeClass("enter").addClass("leave"), setTimeout(function() { n.css("display", "none") }, 500))
                        }
                        a.text(this.config.checkedCars.length + 1)
                    }
                }
            }), e.recommendShowSendClickPoint = Widget.define({
                init: function() {
                    var t = $(".j-recommend-show").offset().top,
                        e = !1;
                    $(document).on("scroll", function() {
                        var i = $(window).scrollTop() + $(window).height() - 100;
                        if (i > t && !e) {
                            var o = $("#recommendCarIds").val();
                            window.tracker.send({ tracking_type: "scrollPage", eventid: "0220050000099100", carids: o }), e = !0
                        }
                    })
                }
            }), e.openIm = Widget.define({
                init: function() {
                    $(document).on("click", ".j-open-im", function() {
                        var t = s.get("userid"),
                            e = s.get("guaZiUserInfo");
                        if ("undefined" == typeof e) {
                            var i = { dis: "登录之后就可以和客服妹妹直接聊天了哦!<br/><br/>", kind: 4 };
                            g(i), $("#KanJiaConfirmPhone").removeAttr("disabled")
                        } else {
                            var o = $(".thumb-img-numcar i").html().replace("HC-", "");
                            $.ajax({
                                url: "/ajax.php?module=imInfo",
                                type: "POST",
                                data: { userId: t, clueId: o },
                                dataType: "json",
                                success: function(t) {
                                    if (0 == t.code) window.location = t.url;
                                    else {
                                        var e = { dis: "登录之后就可以和客服妹妹直接聊天了哦~~<br/><br/>", kind: 4 };
                                        g(e), $("#KanJiaConfirmPhone").removeAttr("disabled")
                                    }
                                }
                            })
                        }
                    })
                }
            })
        }, , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , function(t, e, i) { e = t.exports = i(1)(), e.push([t.id, ".photoTab{width:100%;overflow:hidden}.topnav-float h1{font-size:.18rem;line-height:.44rem;text-align:center;text-overflow:ellipsis;white-space:nowrap;margin:0 .56rem;overflow:hidden;color:#34373a}.topnav-float .operate{position:absolute;top:0;right:0;height:100%;color:#848689;font-size:.15rem;line-height:.45rem;padding:0 .15rem;z-index:20}.img-box{width:100%;height:100%;background-color:#000;overflow:hidden}.img-box,.nums-tip{box-sizing:border-box}.nums-tip{color:#fff;font-size:.14rem;z-index:100;text-align:right;padding:.1rem .15rem 0 0}.nums-tip em{font-size:.2rem;color:#fff}.swipe-wrap img{width:100%}.swipe-wrap{display:table}.big-images-slider{top:50%;margin-top:-30%;left:0;position:absolute;z-index:30;width:100%;overflow:hidden}.big-images-slider .caption{height:.4rem;line-height:.4rem;text-align:center;color:#fff;background:-webkit-gradient(linear,left top,left bottom,from(#1a1a1a),to(#0d0d0d));border-bottom:1px solid #1a1a1a;position:relative}.big-images-slider .big-index{color:#fff}.big-images-slider .img-box-body{width:3.2rem;overflow:hidden;margin:0 auto}.big-images-slider .big-img-body{width:100%;overflow:hidden;margin:0}.big-images-slider li img{width:3.2rem}.big-images-slider li{float:left}.swipe{visibility:hidden}.swipe,.swipe-wrap{overflow:hidden;position:relative}.swipe-wrap>div{width:100%;display:table-cell;position:relative;vertical-align:middle}.swipe-index{width:100%;position:absolute;left:0;bottom:.05rem;text-align:center;z-index:50}.swipe-index i{margin-right:2%;width:.04rem;height:.04rem;border-radius:100%;background:#666}.swipe-index i.active{background:#aaa}.img-tabcon{position:absolute;left:0;top:.57rem;width:100%;z-index:50;padding:0 .15rem;overflow:hidden;box-sizing:border-box}.img-tabcon ul{overflow:auto;height:.37rem;display:-webkit-box}.img-tabcon ul li{line-height:.32rem;margin-right:.15rem}.img-tabcon ul li .active{border-bottom:2px solid #38b44c;color:#fff;font-size:.16rem}.img-tabcon a{font-size:.14rem;color:#acacac;display:block}.column-wrap{padding-top:.45rem;padding-bottom:.64rem;background-color:#f3f5f8}.all-pic{padding-top:.16rem}.all-pic .column-head{color:#495056;font-size:.16rem;padding:0 0 .08rem .15rem}.all-pic li a{display:block;line-height:0;padding:.03rem}.all-pic li img{width:100%}.all-pic .list{overflow:hidden;padding:0 .12rem}.all-pic .list .list-item{border-bottom:0}.all-pic .list:after{height:0;border-bottom:0}.all-pic .list.row-three .list-item{float:left;width:33.33%}.fixed-button{position:fixed;bottom:0;left:0;width:100%;height:.64rem;padding:.1rem .09rem;display:-webkit-box;box-sizing:border-box;z-index:100}.fixed-button .btn{-webkit-box-flex:1;box-flex:1;display:block;height:.44rem;line-height:.44rem;text-align:center;font-size:.18rem;font-weight:500;color:#fff;margin:0 .06rem}.fixed-button .btn-1{background-color:#4cc76f}.fixed-button .btn-2{background-color:#ff7844}.pic-body .fixed-button{background-color:hsla(0,0%,100%,.96)}", ""]) }, function(t, e, i) { e = t.exports = i(1)(), e.push([t.id, ".form-warning:after,.grade-notice:before,.mod-fuwu .list-item:after,.score-results .starbox,.score-results .starbox span,.vehicle-detection span:after{background-image:url(" + i(94) + ');background-size:3rem auto;background-repeat:no-repeat}.pop-server{display:none;position:absolute;left:0;top:0;z-index:106;width:100%;min-height:100%;background-color:#fff}.pop-server.active{display:block}.mod-fuwu{margin-left:.64rem;padding:0 0 .3rem}.mod-fuwu .list-item h3{font-size:.18rem;margin-bottom:.05rem;color:#252825;font-weight:400}.mod-fuwu .list-item p{color:#acacac;font-size:.15rem;line-height:.21rem}.mod-fuwu .list-item{padding:.17rem .15rem .18rem 0;border-bottom:1px solid #e6e6e6;position:relative}.mod-fuwu .list-item:last-child{border-bottom:0}.mod-fuwu .list-item:after{content:"";position:absolute;width:.35rem;height:.35rem;top:.16rem;left:-.49rem}.mod-fuwu .icon-support:after{background-position:0 -2.32rem}.mod-fuwu .icon-unsupport:after{background-position:-.39rem -2.32rem}.mod-fuwu .icon-guohu:after{background-position:-.78rem -2.32rem}.mod-fuwu .icon-check:after{background-position:-1.17rem -2.32rem}.mod-fuwu .icon-tuiche:after{background-position:-1.56rem -2.32rem}.mod-fuwu .icon-gift:after{background-position:-1.95rem -2.32rem}.guazi-grade{display:none;background-color:#fff;padding-bottom:.2rem;position:absolute;width:100%;min-height:100%;left:0;top:0;z-index:106;box-sizing:border-box}.guazi-grade.active,.guazi-grade .price-guide{display:block}.guazi-grade h2{font-size:.18rem;font-weight:400;text-align:center;padding-top:.22rem}.guazi-grade h2 em{padding-left:.1rem}.guazi-grade .column{margin:0 .15rem;padding-bottom:.15rem;border-bottom:1px solid #e6e6e6}.gray-head{z-index:100;position:fixed;top:0;left:0;width:100%;height:.44rem;background-color:#f6f6f6;overflow:hidden}.gray-head h1{font-size:.18rem;font-weight:500;line-height:.44rem;text-align:center;text-overflow:ellipsis;white-space:nowrap;margin:0 .56rem;overflow:hidden;color:#333}.gray-head .back{position:absolute;top:0;left:0;text-indent:-1rem;overflow:hidden;height:.45rem;width:.45rem}.gray-head .back:after,.gray-head .back:before{content:"";position:absolute;top:.11rem;width:1px;height:.22rem;left:.21rem;background-color:#9e9e9e}.gray-head .back:before{-webkit-transform:rotate(45deg);transform:rotate(45deg)}.gray-head .back:after{-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}.mt44{margin-top:.44rem}.rang-part{position:relative}.rang-part .pos-point{position:absolute;top:.18rem;z-index:89;width:.58rem;height:1rem;margin-left:-.3rem}.rang-part .icon-point{margin:.33rem 0 0 .15rem;position:relative;display:block;width:.28rem;height:.28rem;background-color:#fff;border:1px solid #ebebeb;border-radius:50%;box-shadow:0 .03rem .05rem 0 #f2f2f2}.rang-part .icon-point i{width:.01rem;height:.16rem;background-color:#ededed;position:absolute;left:.13rem;top:.06rem;z-index:89}.rang-part .icon-point i:after,.rang-part .icon-point i:before{content:"";position:absolute;height:.09rem;background-color:#ededed;width:.01rem;top:.04rem}.rang-part .icon-point i:before{left:-.04rem}.rang-part .icon-point i:after{left:.04rem}.rang-part .sug-price{position:absolute;text-align:center;height:.04rem;background-color:#22ac38;border-radius:.04rem;z-index:80}.rang-part .sug-price i{font-size:.12rem;color:#22ac38;white-space:nowrap;position:absolute;width:.5rem;left:50%;margin-left:-.24rem;top:-.3rem}.cut-carinfo,.rang-data{overflow:hidden}.rang-data{padding:.24rem 0 .3rem}.cut-carinfo{padding:.11rem .15rem .06rem;border-bottom:1px solid #e6e6e6}.cut-carinfo .fl{width:65%;overflow:hidden}.cut-carinfo .fl p{overflow:hidden;width:100%;text-overflow:ellipsis;white-space:nowrap}.cut-carinfo .car-name{font-size:.15rem;color:#333}.cut-carinfo .car-data,.cut-carinfo .car-data span{color:#999;font-size:.12rem}.cut-carinfo .car-data span{padding-right:.04rem}.cut-carinfo .fr{font-size:.2rem;color:#666;line-height:.41rem}.cut-carinfo .fr i{color:#666;font-size:.12rem}.rang-data .fl,.rang-data .fr{font-size:.3rem;color:#22ac38;width:50%;display:inline-block;text-align:center}.rang-data .fl i,.rang-data .fr i{font-size:.14rem}.rang-data .fl span,.rang-data .fr span{text-align:center;display:block;font-size:.12rem;color:#666;margin-top:-.02rem}.rang-data .fr{position:relative}.rang-data .fr:after{content:"";position:absolute;height:.25rem;width:.01rem;left:0;top:.19rem;background-color:#e6e6e6}.rang-result{text-align:center;font-size:.14rem;color:#666}.rang-part{padding:.64rem 0 0;height:.5rem;margin:0 .4rem}.rang-part .rang-mod{display:-webkit-box;height:.04rem;width:100%;border-radius:.04rem;box-sizing:border-box;margin-bottom:.4rem;background-color:#ddd}.rang-part .rang-mod li{float:left;position:relative;-webkit-box-flex:1;box-flex:1;height:.04rem}.rang-part .rang-mod li span{position:absolute;padding-top:.25rem;color:#a0a0a0;white-space:nowrap;width:100%;font-size:.12rem;text-align:right}.rang-part .rang-mod li:first-child{width:0;-webkit-box-flex:0;box-flex:0}.rang-part .rang-mod li:first-child span{margin-left:0;text-align:left;width:100%}.cut-prize{background-color:#fff;position:fixed;width:100%;height:100%;left:0;top:0;z-index:101;display:none}.cut-prize.active{display:block}.rang-content{width:100%;height:85%;overflow:auto;box-sizing:border-box}.cut-prize .auto-prize{display:block;margin:.33rem 0 .23rem;text-align:center;text-indent:-.1rem;position:relative;color:#999}.cut-prize .auto-prize:after{content:"";position:absolute;top:50%;width:.06rem;height:.06rem;left:50%;border-top:1px solid #999;border-right:1px solid #999;margin:-.05rem 0 0 .3rem;-webkit-transform:rotate(45deg);transform:rotate(45deg)}.cut-prize .contact{text-align:center;color:#a0a0a0;font-size:.12rem;padding-bottom:.14rem}.rang-btn{position:fixed;bottom:.15rem;width:100%;z-index:100;padding:0 .15rem;box-sizing:border-box}.rang-btn .btn{display:block;background-color:#22ac38;color:#fff;width:100%;height:.45rem;line-height:.45rem;font-size:.16rem;border-radius:.03rem;text-align:center}.opacity-body .mask{z-index:103!important}.opacity-body .popup-contact{z-index:105}.score-results{overflow:hidden;width:2.63rem;margin:.1rem auto 0}.score-results .starbox{width:1.4rem;height:.2rem;background-position:0 -2.73rem;margin:.08rem .25rem 0}.score-results .starbox span{background-position:-1.54rem -2.73rem;display:inline-block;height:.2rem;vertical-align:top}.score-results .fl{font-size:.16rem;color:#666}.score-results em.fl{color:#ff7e00}.score-results li{overflow:hidden;line-height:.35rem}.result-from{font-size:.12rem;padding-top:.15rem}.car-staus,.result-from{text-align:center;color:#acacac}.car-staus{font-size:.15rem;padding-top:.05rem}.vehicle-detection{padding:.1rem 0 0;width:2.63rem;margin:0 auto}.vehicle-detection li{line-height:.35rem;font-size:.16rem;color:#666;overflow:hidden}.vehicle-detection li span{display:inline-block;vertical-align:middle;float:right;position:relative;padding-right:.2rem}.vehicle-detection span:after{content:"";position:absolute;top:50%;right:0;width:.15rem;height:.2rem;background-clip:padding-box;margin-top:-.11rem;background-position:0 0}.vehicle-detection .icon-normal:after{background-position:-1.96rem .01rem}.vehicle-detection .icon-unnomal:after{background-position:-1.96rem -.18rem}.guazi-grade .column:last-of-type{border-bottom:0}.guazi-grade2{background-color:#f5f5f5;padding-bottom:0}.guazi-grade2 .column{margin:0;border-bottom:0;background-color:#fff}.grade-notice{background-color:#f5f5f5;font-size:.12rem;color:#acacac;padding:.1rem .15rem .15rem .3rem;position:relative}.grade-notice:before{content:"";position:absolute;width:.14rem;height:.13rem;left:.14rem;top:.13rem;background-position:-1.87rem -1.37rem}.pop-item{background-color:#fff;position:fixed;width:100%;height:50%;bottom:0;left:0;z-index:106;box-sizing:border-box}.pop-item,.popup-wrap{display:none}.pop-item.active,.popup-wrap.active{display:block}.pop-item .close-btn{position:absolute;top:0;right:0;width:.4rem;height:.4rem;text-indent:-.5rem;overflow:hidden}.pop-item .close-btn:after,.pop-item .close-btn:before{content:"";position:absolute;top:.15rem;width:.01rem;height:.14rem;left:.19rem;background-color:#9e9e9e}.pop-item .close-btn:before{-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}.pop-item .close-btn:after{-webkit-transform:rotate(45deg);transform:rotate(45deg)}.pop-item .item-tit{text-align:center;color:gray;font-size:.15rem;padding-top:.15rem}.pop-item .mod-list{margin:0 15px;padding-bottom:.2rem;height:75%;overflow:auto}.pop-item .list-item{position:relative;padding:.15rem 0 .13rem;border-bottom:1px solid #e6e6e6}.pop-item .list-item:last-child{border-bottom:0}.pop-item .list-item span{position:absolute;left:0;top:.15rem;color:#22ac38;height:.18rem;line-height:.18rem;border-radius:.01rem;width:.55rem;text-align:center;border:1px solid #22ac38;background-clip:padding-box;font-size:.12rem;box-sizing:border-box}.pop-item .list-item p{color:#252825;padding-left:.68rem;line-height:.19rem}.popup-wrap .popup-tip{position:fixed;bottom:0;left:0;width:100%;padding:.1rem 0 .16rem;top:auto}.popup-tip h2{font-size:.15rem;font-weight:400;text-align:center;color:gray;padding-bottom:.12rem;padding-top:.05rem}.popup-tip p{text-align:left;color:#252825;line-height:.2rem;padding:0 .15rem;font-size:.14rem;min-height:1rem}.popup-tip .show-text a{color:#22ac38!important;padding-right:.15rem;white-space:nowrap;display:inline-block}.popup-tip .close-btn{position:absolute;top:.07rem;right:.06rem;width:.3rem;height:.3rem;text-indent:-1rem;overflow:hidden}.popup-tip .close-btn:after,.popup-tip .close-btn:before{content:"";position:absolute;left:.15rem;top:.08rem;width:.01rem;height:.16rem;background-color:#c1c1c1}.popup-tip .close-btn:after{-webkit-transform:rotate(45deg);transform:rotate(45deg)}.popup-tip .close-btn:before{-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}.mask{display:none;position:fixed;top:0;left:0;z-index:99;width:100%;height:100%;background-color:rgba(0,0,0,.7)}.tipscon,a.tipscon,a.tipscon:hover{padding:0 0 .12rem .15rem;margin-top:-.04rem;display:block;color:#333}.icongift{background-position:-3.33rem -2.15rem;width:.17rem;height:.17rem;display:inline-block;vertical-align:middle;margin:-.05rem .05rem 0 0}.popup-giftcon{background-color:#fff;width:100%;position:fixed;left:0;right:0;bottom:0;z-index:201;max-height:50%}.gtit{color:gray;font-size:.15rem;text-align:center;line-height:.45rem}.gcon{color:#252825;padding:0 .2rem;line-height:.22rem;font-size:.13rem;max-height:1.4rem;overflow:hidden;overflow-y:scroll}.gcon .fcorg{color:#ff7e00}.gcon2{color:#666;padding:.1rem .2rem .15rem;font-size:.13rem}.closeicon{position:absolute;right:.15rem;top:.1rem;width:.2rem;height:.2rem}.closeicon:after,.closeicon:before{content:"";background-color:#c1c1c1;position:absolute}.closeicon:before{transform:rotate(45deg);-webkit-transform:rotate(45deg);-ms-transform:rotate(45deg);-moz-transform:rotate(45deg)}.closeicon:after,.closeicon:before{width:.18rem;height:.01rem;right:0;top:.1rem}.closeicon:after{transform:rotate(-45deg);-webkit-transform:rotate(-45deg);-ms-transform:rotate(-45deg);-moz-transform:rotate(-45deg)}.popup-v2 .btn{display:block;width:100%;height:.44rem;line-height:.44rem;border-radius:.04rem;border:0;background-color:#22ac38;color:#fff;font-size:.16rem}.popup-v2{display:block;position:fixed;top:50%;right:.14rem;left:.14rem;z-index:101;width:auto;background-color:#fff;border-radius:.06rem;margin:0}.popup-notice{padding:.15rem 0 .22rem;margin-top:-1.25rem}.popup-yijia{padding-top:.1rem;margin-top:-1.15rem;overflow:hidden}.popup-head{height:auto;background-color:transparent;border-radius:0;color:#252825;font-size:.16rem;line-height:.25rem;padding:.1rem .05rem;text-align:center}.popup-v2 .popup-head{font-size:.18rem;color:#252825;padding-bottom:.15rem}.popup-v2 .desc{color:#707070;font-size:.16rem;padding:0 .12rem}.popup-v2 .desc2{color:#252825;padding-bottom:.08rem}.popup-v2 .desc3{color:#707070;padding:0 .12rem .08rem}.popup-v2 .desc3 span{color:#ff7e00}.popup-v2 label span{position:absolute;right:.2rem;top:.1rem;display:block;height:.42rem;line-height:.42rem;color:#252825}.pop-btn2{display:-webkit-box;margin-top:.2rem;border-top:1px solid #e6e6e6}.pop-btn2 .btn{display:block;-webkit-box-flex:1;box-flex:1;border-radius:0}.pop-btn2 .btn.btn1{border-bottom-left-radius:6px;background-color:#fff;color:#252825}.pop-btn2 .btn.btn2,.pop-btn2 .btn:only-child{border-bottom-right-radius:6px}.pop-btn2 .btn:only-child{background-color:#f5f5f5;color:#22ac38}.car-ower{padding-left:.1rem;font-size:.16rem;color:#707070}.car-ower em{color:#ff7e00}.popup-body{background-color:#fff;font-size:.14rem;line-height:.24rem;padding:.14rem .12rem}.input-text{display:block;-webkit-box-flex:1;-ms-box-flex:1;box-flex:1;-ms-box-sizing:border-box;box-sizing:border-box;width:100%;border:0 none;color:#333;height:.48rem;font:.12rem/normal helvetica neue,tahoma,arial,hiragino sans gb,microsoft yahei,sans-serif;padding:.12rem 0 .12rem .12rem;-webkit-appearance:none}.input-text,.input-text:focus{background-color:#fff;outline:0}.form-warning{display:none;position:relative;background-color:#eee;border-top:1px solid #eee;color:#ff9600;font-size:.12rem;line-height:.2rem;white-space:nowrap;padding:.08rem 0 .08rem 1.08rem;overflow:hidden}.form-warning.active{display:block}.popup-v2 .form-warning{background-color:#fff;padding-left:.28rem;padding-top:.02rem;padding-bottom:0;border-top:0}.form-warning:after{content:"";float:left;width:.2rem;height:.2rem;margin-right:.03rem;margin-left:-.2rem;background-position:-2.05rem -1.35rem}.popup-v2 .form-warning:after{margin-right:0}.pop-btn{display:-webkit-box;display:box;width:100%;height:.44rem;box-sizing:border-box}.popup-v2 .pop-btn{padding:0 .12rem;margin-top:.2rem}.pop-btn .btn{display:block;-webkit-box-flex:1;box-flex:1;height:.44rem;font-size:.16rem;color:#fff;line-height:.44rem;border-radius:.04rem;text-align:center;background-color:#22ac38;border:none;box-sizing:inherit}.popup-v2 .input-text{border:1px solid #e0e0e0;font-size:.15rem;height:.42rem;line-height:.17rem;border-radius:.04rem}.popup-v2 label{display:block;position:relative;padding:.1rem .12rem 0}.tiplayer{text-align:center;color:#fff;font-size:.12rem;position:fixed;top:50%;margin-top:-.15rem;width:100%;display:none}.tiplayer.active{display:block}.tiplayer span.textcon{background-color:rgba(0,0,0,.8);line-height:.2rem;border-radius:.03rem;padding:.05rem .15rem;display:inline-block;position:relative}.popup-downapp .form-deliver .downapp,.popup-downapp .form-deliver p{line-height:24px}.popup-sell-insurance h2{padding-top:.1rem;font-size:.16rem;color:#495056}.popup-insurance-list{margin-top:-.08rem;padding-bottom:.09rem}.popup-insurance-list li{position:relative;margin-top:.16rem;padding:0 .16rem 0 .36rem}.popup-insurance-list li:before{content:"";position:absolute;left:.16rem;top:0;width:.1rem;height:.1rem;vertical-align:-.01rem;margin-right:.04rem;border:1px solid #22ac38;border-radius:50%}.popup-insurance-list li:after{content:"";position:absolute;top:.03rem;left:.19rem;width:.06rem;height:.03rem;border-top:1px solid #22ac38;border-right:1px solid #22ac38;-webkit-transform:rotate(135deg);transform:rotate(135deg)}.popup-insurance-list h3{padding-bottom:.07rem;font-size:.14rem;color:#495056;line-height:.14rem}.popup-insurance-list div{font-size:.12rem;color:#757f8a;line-height:.16rem}', ""]) }, function(t, e, i) {
            e = t.exports = i(1)(), e.push([t.id, '.report-info{position:relative;top:.45rem;padding:.13rem .15rem .12rem;background-color:#fff;margin-bottom:.51rem}.report-info p{position:relative;line-height:.22rem}.report-info .re-tit,.report-info .report-con{font-size:.14rem;color:#757f89}.re-car-name{color:#495056;font-size:.15rem}.report-detail{padding-top:.12rem;background-color:#fff;margin-bottom:.06rem}.re-desc{font-size:.15rem;color:#495056;padding:.04rem .15rem .15rem;line-height:.22rem}.re-list a{line-height:.43rem;display:block;position:relative;padding:0 .15rem}.re-list a p .tip-icon{display:inline-block;vertical-align:-3px;width:.26rem;height:.37rem;margin-left:.01rem;background-position:-1.69rem .11rem;vertical-align:middle;margin-top:-.03rem}.re-list a:before{height:1px;content:"";width:100%;border-top:1px solid #f3f5f8;position:absolute;top:-1px;right:0;transform:scaleY(.5);-webkit-transform:scaleY(.5)}.re-list a:after{content:"";position:absolute;right:.15rem;top:.15rem;width:.07rem;height:.07rem;border-left:1px solid #8e959d;border-top:1px solid #8e959d;-webkit-transform:rotate(-135deg);transform:rotate(-135deg)}.re-list.active a:after{top:.19rem;-webkit-transform:rotate(45deg);transform:rotate(45deg)}.re-list a>div{position:absolute;right:.35rem;top:0}.re-list a>div span,.re-list a>p{color:#757f89;font-size:.15rem}.re-list a>div i{margin-left:.04rem}.r-normal,.r-unormal{display:inline-table;vertical-align:.01rem;white-space:nowrap;border-radius:.01rem;height:.24rem;line-height:.24rem;padding:0 .07rem;color:#38b44c;font-size:.12rem;box-sizing:border-box;position:relative;text-align:center}.r-normal:after,.r-unormal:after{content:"";width:200%;height:200%;position:absolute;top:-50%;left:-50%;border:1px solid #38b44c;border-radius:.01rem;box-sizing:border-box;-webkit-transform:scale(.5);transform:scale(.5)}.r-unormal:after{border-color:#ffbb02}.r-unormal{color:#ffbb02}.re-depoly{display:none}.re-list.active .re-depoly{display:block}.re-depoly ul{width:100%;background-color:#f9fbfd}.re-depoly li{height:.43rem;line-height:.44rem;padding-left:.15rem;position:relative;color:#757f89;font-size:.14rem}.re-depoly li:after{height:1px;content:"";width:100%;border-top:1px solid #f3f5f8;position:absolute;top:-1px;right:0;transform:scaleY(.5);-webkit-transform:scaleY(.5)}.re-depoly li i{position:absolute;right:.15rem;top:.12rem;width:.18rem;height:.18rem;background:url(' + i(94) + ') no-repeat;background-size:3rem auto}.re-depoly .li-normal i{background-position:-1.95rem .01rem}.re-depoly .li-unormal{background-color:#fbf9ef}.re-depoly .li-unormal span{position:absolute;right:.4rem;top:0;color:#ffbb03;font-size:.12rem;line-height:.44rem}.re-depoly .li-unormal i{background-position:-1.95rem -.18rem}.re-depoly .li-notest i{background-position:-1.73rem -.18rem}.mod-re-lists .report-thumb{padding-bottom:.16rem}.mod-re-lists .report-img{border-top:1px solid #f3f5f8;margin-top:0;padding-top:.15rem}.thumb-des{position:absolute;left:0;width:100%;bottom:0;height:.34rem;background-color:rgba(0,0,0,.4)}.thumb-des p{line-height:.34rem;color:#fff;text-indent:.1rem}.mod-re-lists .thumb-des .thumb-img-num{right:.02rem;left:auto;top:auto;bottom:.04rem;font-size:.14rem;background-color:transparent}.second-tab{height:.48rem;display:-webkit-box;background-color:#fff;width:100%;position:fixed;top:.44rem;left:0;z-index:20}.second-tab a{display:block;line-height:.48rem;color:#757f8a;-webkit-box-flex:1;box-flex:1;text-align:center;position:relative}.second-tab a:after{height:.13rem;content:"";width:1px;border-right:1px solid #dde4ea;position:absolute;top:.18rem;right:0;transform:scaleX(.5);-webkit-transform:scaleX(.5)}.second-tab a:last-child:after{border-color:transparent}.second-tab a.active{color:#38b44c}.product-picture .thumb-houseimg-box{margin-bottom:.1rem}.product-picture .btn-check{padding:.08rem 0 .27rem;margin-bottom:0}.product-picture .product-img{padding:0 .15rem;background-color:#fff}.product-img img{width:100%;display:block;margin-bottom:.1rem}.product-img .slide-area img{margin-bottom:0}.img-textbox{color:#252825;font-size:.15rem;padding:0 0 .16rem;line-height:.2rem;display:table;overflow:hidden}.img-textbox span{display:table-cell;position:relative;float:none}.img-textbox span.fl{color:#8e959d;padding-right:.1rem;font-size:.14rem;white-space:nowrap}.img-textbox span.fr{color:#495056;font-size:.14rem;line-height:.2rem}.detail .product-picture.line-list{padding-top:.13rem}.column.product-picture,.comm-area{padding-top:.89rem}.car-config{margin-bottom:.06rem;background-color:#fff}.car-config .column-head{height:.46rem;position:relative}.car-config .column-head:after{content:"";width:100%;height:1px;border-top:1px solid #f3f5f8;position:absolute;bottom:-1px;right:0;-webkit-transform:scaleY(.5);transform:scaleY(.5)}.car-config .column-head .column-title{font-size:.16rem;font-weight:500;line-height:.47rem;color:#495056;position:relative}.car-config .column-title:before{content:"";position:absolute;background-color:#38b44c;left:0;top:.15rem;width:.03rem;height:.17rem}.car-config .list{padding:.07rem 0}.car-config .list li{overflow:hidden;width:100%;padding:0 .15rem;box-sizing:border-box}.car-config .list li:last-child{border-bottom-color:transparent}.car-config .list li p,.car-config .list li span{font-size:.14rem;width:50%}.car-config .list li span{color:#757f89;width:1.4rem;line-height:.31rem;display:block;float:left}.car-config .list li p{line-height:.31rem;float:right;color:#495056}.car-config .list:after{border-bottom:0}.car-config .green{color:#22ac38}.no-content{text-align:center;padding:.1rem 0;font-size:.14rem;color:#999}.no-content.active{display:block}.risk-tip{color:#abafb3;font-size:.12rem;padding:.03rem .15rem .15rem}.faq-main{position:relative;top:.85rem;padding:0 .15rem .65rem;background-color:#fff;box-sizing:border-box}.faq-box{padding:.11rem 0 .08rem}.faq-tith2{margin-bottom:.04rem;font-size:.16rem;font-weight:400;color:#495056}.faq-tith2:before{content:"Q\\FF1A";display:inline-block;font-size:.18rem;color:#38b44c}.faq-cont{color:#959ea7}.faq-cont a{color:#38b44c}.faq-cont-list{margin:.05rem 0;padding:.09rem .12rem;font-size:.12rem;background-color:#f5faf6}.faq-cont-list li{line-height:.2rem;color:#959ea7}', ""]);
}, function(t, e, i) {
    e = t.exports = i(1)(), e.i(i(56), ""), e.i(i(141), ""), e.i(i(143), ""), e.i(i(142), ""), e.i(i(95), ""), e.push([t.id, "body,html{min-height:100%;height:100%}body{background-color:#f3f5f8}button,input{-webkit-appearance:none;appearance:none;border:0}button:focus,input:focus{outline:0}.fixed-show .detail{padding-bottom:.56rem}.btn{text-align:center}.appicon,.collecticon,.detail-footbar-sell .icon-order a:before,.float-status i,.gj-go-tel,.gj-go-top i,.head-back:after,.icon-cutprize:after,.icon-order:after,.icon-rz,.money-icon,.pro-list li i,.report-list a>div span:after,.report-list li i,.s-tabtit .icon-1,.s-tabtit .icon-2,.s-tabtit .icon-3,.s-tabtit .icon-4,.s-tabtit .icon-5,.sell-limit-activity i:before,.thumb-img-num:before,.tip-icon,.usericon{background:url(" + i(94) + ") no-repeat;background-size:3rem auto}.line-list .tag-new,.loanbox .icon-man,.price-guide .price-sector,.price-sector .pos-2 .pointer{background:url(" + i(158) + ') no-repeat;background-size:3.2rem auto}.topnav-embed{position:absolute;top:0;left:0;right:0;height:.45rem;z-index:98;display:none;background-image:linear-gradient(top,rgba(0,0,0,.3),transparent)}.topnav-embed.active{display:block}@media only screen and (min-width:768px){.topnav-embed{width:768px;left:50%;margin-left:-384px}}.head-back{position:absolute;z-index:50;top:0;left:0;width:.4rem;height:.45rem}.head-back:after{content:"";position:absolute;width:.16rem;height:.24rem;left:.13rem;top:.1rem;background-position:-2.88rem -1rem}.head-group{position:absolute;right:.15rem;top:0;z-index:50;height:.37rem;padding-top:.08rem;font-size:0}.head-group>div{float:left;width:.3rem;height:.45rem;margin-left:.05rem;position:relative}.head-collect:after,.head-share:after{content:"";position:absolute;width:.2rem;height:.2rem;left:0;top:.08rem}.head-collect:after{left:.05rem;top:.08rem;background-position:-2.6rem -.18rem}.head-share:after{left:.05rem;top:.08rem;background-position:-2.87rem -.71rem}.main-layout .layout-item{display:none}.main-layout .layout-item.active,.third-content .third-tab.active{display:block}.second-tab,.third-content .third-tab{display:none}.second-tab.active{display:-webkit-box}.appicon,.collecticon,.usericon{display:inline-block;background-repeat:no-repeat;height:.26rem;margin-left:.14rem}.collecticon.active{background-position:-2.8rem -2.31rem}.usericon{background-position:-.69rem 0;width:.21rem}.collecticon{background-position:-.21rem .01rem;width:.22rem}.appicon{background-position:-1.25rem 0;width:.2rem}.topnav-float{position:fixed;top:0;left:0;right:0;height:.44rem;z-index:99;display:none;background-color:#fff}.topnav-float:after{height:1px;content:"";width:100%;border-top:1px solid #dde1e5;position:absolute;bottom:-1px;right:0;transform:scaleY(.5);-webkit-transform:scaleY(.5)}.topnav-float .head-group{padding-top:.13rem}.topnav-float.active{display:block}.topnav-float .head-back:after{background-position:-1.36rem -1.32rem}.topnav-float .usericon{background-position:-.96rem 0}.topnav-float .collecticon{background-position:-.45rem .01rem}.topnav-float .collecticon.active{background-position:-2.8rem -2.31rem}.topnav-float .appicon{background-position:-1.49rem 0}.head-tab{text-align:center}.head-tab a{display:inline-block;line-height:.44rem;margin:0 .09rem;color:#535658;font-size:.15rem}.head-tab a.active{line-height:.42rem;border-bottom:.02rem solid #38b44c;color:#34373a;font-size:.16rem}.head-tab .head-tab-image-text{line-height:.44rem;color:#34373a;font-size:.18rem;display:none}.float-status{display:none;position:absolute;left:0;top:0;width:100%;height:100%;background-color:rgba(0,0,0,.3);z-index:50}.float-status i{display:block;position:absolute;z-index:52;text-indent:-999rem;overflow:hidden;width:.7rem;height:.6rem;top:50%;left:50%;margin:-.3rem 0 0 -.35rem}.float-status.status1 i{background-position:0 -1.66rem}.float-status.status2 i{background-position:-1.59rem -1.66rem}.float-status.status3 i{background-position:-.79rem -1.66rem}.areabox .j-areabox-item,.report-thumb .j-dotted{display:none}.areabox .j-areabox-item.active,.float-status.active,.j-dotted.active,.report-thumb.active{display:block}.detail h1.product-title{color:#495056;line-height:.22rem;text-overflow:ellipsis;white-space:normal;overflow:hidden;padding:.13rem 0 0;font-size:.17rem;font-weight:500;display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;margin-bottom:.09rem}.detail .product-head{position:relative;background-color:#fff;padding:0 .15rem .11rem;overflow:hidden}.product-head .label-div{padding:0 0 .1rem;font-size:0}.label-box-car{display:inline-block;vertical-align:middle;background:#f5f6f9;color:#8e959d;margin-right:.05rem;padding:0 .05rem;height:.16rem;line-height:.16rem;font-size:.11rem;box-sizing:border-box;border-radius:2px}.carmaster-price{color:#495056;font-size:.13rem;padding-bottom:.08rem;position:relative}.carmaster-price .number-price{font-size:.2rem;color:#ff704a;padding:0 .1rem 0 .05rem}.carmaster-price .tax-car{text-decoration:line-through;color:#abafb3;font-size:.12rem}.carmaster-price .prize-analy{position:absolute;right:0;top:.09rem;font-size:.12rem;color:#757f8a;padding-right:.11rem}.carmaster-price .prize-analy:after{content:"";position:absolute;right:0;top:.03rem;width:.06rem;height:.06rem;border-left:1px solid #b4b9bd;border-top:1px solid #b4b9bd;transform:rotate(-135deg);-webkit-transform:rotate(-135deg)}.carmaster-price .prize-analy.active:after{top:.07rem;transform:rotate(45deg);-webkit-transform:rotate(45deg)}.loanbox{padding:0 .15rem .2rem;background:#fff;position:relative}.loanbox-b{padding:0 0 .2rem}.loanbox .loan-title{padding:0 .1rem 0 .55rem;background-color:#f9fffa;line-height:.38rem;border-radius:.01rem;color:#38b44c;font-size:.15rem;display:block;position:relative}.loanbox-b .loan-title{height:.44rem;line-height:.44rem;padding:0 0 0 .72rem}.loanbox .loan-title:before{content:"";position:absolute;right:.07rem;top:.16rem;width:.05rem;height:.05rem;border-left:1px solid #38b44c;border-top:1px solid #38b44c;transform:rotate(135deg);-webkit-transform:rotate(135deg)}.loanbox-b .loan-title:before{width:.07rem;height:.07rem;right:.15rem;top:.17rem}.loanbox .loan-title:after{content:"";width:200%;height:200%;position:absolute;top:-50%;left:-50%;border:1px solid #c3e8c9;border-radius:.01rem;box-sizing:border-box;-webkit-transform:scale(.5);transform:scale(.5)}.loanbox-b .loan-title:after{border-left:none;border-right:none}.loanbox .loan-title span.fr{font-size:.12rem;color:#38b44c;padding-right:.05rem}.loanbox-b .loan-title span.fr{padding-right:.25rem}.loanbox-b .loan-title span.loan-payment{font-size:.13rem}.loanbox-b .loan-title span.loan-payment em{font-size:.2rem}.loanbox .icon-man{width:.46rem;height:.64rem;display:inline-block;position:absolute;left:.21rem;top:-.15rem;z-index:11;background-position:-1.6rem -.14rem}.loanbox-b .icon-man{left:.15rem;top:-.1rem}.spacing{width:.07rem;display:inline-block}.loan-limit{height:.35rem;width:100%;box-sizing:border-box;padding:0 .15rem .11rem;background:#fff;position:relative}.loan-limit:after{content:"";position:absolute;top:.07rem;right:.15rem;width:.07rem;height:.07rem;border-left:1px solid #b4b9bd;border-top:1px solid #b4b9bd;transform:rotate(135deg);-webkit-transform:rotate(135deg)}.money-icon{float:left;width:.13rem;height:.13rem;margin-top:.05rem;background-position:-2.4rem -2.32rem}.limit-num{float:left;line-height:.24rem;font-size:.13rem;color:#495056;padding-left:.05rem}.limit-num em{color:#ff704a}.loan-limit-num{float:right;color:#757f8a;font-size:.12rem;line-height:.24rem;padding-right:.1rem}.thumb-houseimg-box{width:100%;height:auto;overflow:hidden;position:relative}.thumb-houseimg-box .slide-area{position:relative;background-color:#fff;display:-webkit-box;display:box;overflow:hidden}.thumb-houseimg-box .slide-area>li{display:block;box-sizing:1;width:100%;height:inherit}.thumb-houseimg-box li a,.thumb-houseimg-box li img{display:block;width:100%}.thumb-houseimg-box li a{overflow:hidden}.thumb-img-indexs{padding-left:.05rem;text-align:center;position:absolute;bottom:.04rem;left:0;z-index:50;right:0;margin:0}.thumb-img-indexs i{display:inline-block;margin-right:.03rem;width:.06rem;height:.06rem;border-radius:100%;background-color:#838383}.thumb-img-indexs i.active{background-color:#fff}.thumb-img-left,.thumb-img-right{width:.45rem;height:.45rem;position:absolute;top:50%;margin-top:-.22rem}.thumb-img-left{left:0}.thumb-img-left:after,.thumb-img-right:after{content:"";position:absolute;width:.17rem;height:.2rem;left:.13rem;top:.11rem}.thumb-img-left:after{background-position:-.22rem -1.29rem}.thumb-img-left.touch{background-color:rgba(0,0,0,.4);border-top-right-radius:.04rem;border-bottom-right-radius:.04rem}.thumb-img-right{right:0}.thumb-img-right:after{background-position:-.34rem -1.28rem}.thumb-img-right.touch{background-color:rgba(0,0,0,.4);border-top-left-radius:.04rem;border-bottom-left-radius:.04rem}.thumb-img-num{position:absolute;left:.15rem;bottom:.11rem;font-size:.13rem;height:.18rem;line-height:.18rem;padding:0 .05rem 0 .24rem;color:#fff;display:block;text-align:center;background-color:rgba(0,0,0,.4)}.thumb-img-num:before{position:absolute;content:"";left:.05rem;top:.03rem;width:.17rem;height:.14rem;background-position:0 0}.thumb-img-num i{font-size:.13rem;padding:0 .01rem}.thumb-img-numcar{background:rgba(0,0,0,.4);position:absolute;right:.15rem;bottom:.11rem;color:#fff;font-size:.13rem;display:block;height:.16rem;line-height:.16rem;vertical-align:-.05rem;text-align:center;padding:.01rem .05rem}.thumb-img-numcar i{vertical-align:bottom;font-size:.13rem}.column-head{display:block}.column-title{font-size:.16rem;color:#495056;font-weight:500;padding-left:.15rem}.column-title span{font-weight:400;font-size:.12rem;color:#abafb3;padding-left:.06rem}.label-time{background-color:rgba(0,0,0,.7);min-width:.74rem;line-height:.16rem;text-align:center;color:#fff;font-size:.1rem;position:absolute;right:0;bottom:0;padding:0 3px}.line-list .car-price{white-space:nowrap}.line-list .car-price .fz-type{color:#9ea2a6;font-size:.12rem;padding-right:.02rem}.line-list .car-price .deal-price{padding-right:.1rem}.app-btn{text-align:center;padding:.05rem 0 .2rem}.app-btn a{color:#38b44c;font-size:.14rem;border:1px solid #38b44c;width:2.1rem;display:inline-block;line-height:.36rem;border-radius:.02rem}.serverbox{background:#fff;margin:.06rem 0;padding-top:.13rem}.serverbox .column-title{position:relative}.serverbox .column-title:after{content:"";position:absolute;right:.15rem;top:.08rem;width:.07rem;height:.07rem;border-left:1px solid #b4b9bd;border-top:1px solid #b4b9bd;transform:rotate(135deg);-webkit-transform:rotate(135deg)}.serverbox .column-head{border-bottom:0}.s-tabtit{display:-webkit-box;display:flex;height:.59rem;text-align:center;padding:.13rem .15rem .02rem}.s-tabtit li{-webkit-box-flex:1;box-flex:1;flex:1;height:100%;width:100%;position:relative;display:block}.s-tabtit li p{white-space:nowrap;padding-top:.03rem;font-size:14px;color:#757f8a}.s-tabtit li.tab-center .icon-triangle{margin-left:-.11rem}.icon-triangle{display:inline-block;content:"";width:.1rem;height:.1rem;border-left:1px solid #eaeef2;border-top:1px solid #eaeef2;transform:rotate(45deg);-webkit-transform:rotate(45deg);position:absolute;left:50%;margin-left:-.04rem;bottom:-.08rem;background-color:#fff;display:none;z-index:11}.s-tabtit li.on p{font-size:14px;color:#495056}.s-tabtit .icon-1,.s-tabtit .icon-2,.s-tabtit .icon-3,.s-tabtit .icon-4,.s-tabtit .icon-5{display:block;width:.25rem;height:.25rem;margin:0 auto}.s-tabtit .icon-1{background-position:.02rem -.28rem}.s-tabtit .icon-2{background-position:-.26rem -.28rem}.s-tabtit .icon-3{background-position:-.55rem -.28rem}.s-tabtit .icon-4{background-position:-1.14rem -.28rem}.s-tabtit .icon-5{background-position:-.85rem -.28rem}.s-tabtit li.on .icon-triangle{display:block}.s-tabtit .on .icon-1{background-position:.02rem -.54rem}.s-tabtit .on .icon-2{background-position:-.26rem -.54rem}.s-tabtit .on .icon-3{background-position:-.55rem -.54rem}.s-tabtit .on .icon-4{background-position:-1.14rem -.54rem}.s-tabtit .on .icon-5{background-position:-.85rem -.54rem}.s-tabcon{text-align:center;position:relative}.s-tabcon:before{-webkit-transform:scaleY(.5);-webkit-transform-origin:0 0;border-top:1px solid #eaeef2;width:100%;position:absolute;top:0;left:0;right:0;content:"";z-index:1}.s-tabcon>div{display:none;height:.54rem;width:100%;padding-top:.15rem}.s-tabcon div.on{display:block}.saleafter{padding:0 .15rem;overflow:hidden}.saleafter li{color:#757f8a;width:37%;font-size:.15rem;float:left}.saleafter li p{color:#abafb3;font-size:.12rem}.saleafter li:first-child{color:#ff704a;width:26%}.saleafter li:first-child p{color:#ff704a}.s-tabcon .b-t{font-size:.15rem;color:#757f8a;font-weight:400}.s-tabcon .s-t{font-size:.12rem;color:#abafb3}.base-info{background-color:#fff;margin-bottom:.06rem;padding:.13rem 0 .1rem}.base-info .column-head:nth-of-type(2){color:red;margin-top:.19rem}.mod-base{width:100%;overflow:hidden;padding-top:.1rem;margin-bottom:.12rem}.mod-base li{width:33.33%;float:left;text-align:center;margin-bottom:.09rem}.mod-base li span{font-size:.12rem;color:#abafb3}.mod-base li p{font-size:.15rem;color:#757f89}.btn-check{display:block;width:1.8rem;margin:0 auto .15rem}.base-info .btn-check{margin-bottom:0;padding-bottom:.1rem}.btn-check a{display:block;color:#757f89;width:100%;border-radius:.02rem;text-align:center;font-size:.14rem;line-height:.34rem;position:relative}.btn-check a:after{content:"";width:200%;height:200%;position:absolute;top:-50%;left:-50%;border:1px solid #abafb3;border-radius:.02rem;box-sizing:border-box;-webkit-transform:scale(.5);transform:scale(.5)}.btn-check i{color:#38b44c}.tip-icon{display:inline-block;vertical-align:-3px;width:.18rem;height:.18rem;margin-left:.01rem;background-position:-1.72rem .02rem}.carmaster-price .tip-icon{background-position:-1.74rem .04rem}.mod-span{overflow:hidden;padding:.12rem .15rem 0}.mod-span span{display:block;float:left;height:.25rem;line-height:.25rem;padding:0 .04rem;background-color:#f2faf3;border:1px solid #f2faf3;color:#757f89;font-size:.13rem;margin:0 .06rem .06rem 0}.mod-span span.prominent{background-color:#f5faf6;color:#38b44c}.report{background-color:#fff;margin-bottom:.06rem;padding-bottom:.16rem}.icon-rz{display:block;margin:0 auto;width:.9rem;height:.9rem;background-position:-2.12rem 0}.rz-bg{padding:.26rem 0 .2rem;background:url(' + i(159) + ') no-repeat;background-size:100% 100%;margin:0 .15rem}.report .column-head,.report .column-title{height:.48rem;line-height:.48rem}.report .column-head{position:relative}.report .column-head:after{content:"";position:absolute;right:.15rem;top:.19rem;width:.07rem;height:.07rem;border-left:1px solid #b4b9bd;border-top:1px solid #b4b9bd;transform:rotate(135deg);-webkit-transform:rotate(135deg)}.report .prominent-title{font-size:.24rem;color:#38b44c;text-align:center;font-weight:500;margin-top:.02rem}.report .pro-cen{font-size:.14rem;color:#757f89;margin-top:.04rem}.pro-list,.report .pro-cen{text-align:center}.pro-list li{display:inline-block;margin:0 .1rem}.pro-list li i{width:.36rem;height:.36rem;display:block;margin:.21rem auto .05rem}.pro-list li p{text-align:center;color:#757f89;font-size:.12rem}.pro-list li i.icon-1{background-position:0 -1.26rem}.pro-list li i.icon-2{background-position:-.44rem -1.26rem}.pro-list li i.icon-3{background-position:-.89rem -1.26rem}.carsaytit{margin-top:.28rem;position:relative;min-height:.5rem}.carsaytit .pgs-photo{position:absolute;left:.2rem;top:-.03rem}.carsaytit .pgs-photo img{width:.5rem;height:.5rem;border-radius:50%}.diverman-say{background:#fff;padding:.13rem 0 .1rem;margin-bottom:.06rem}.diverman{margin:.14rem 0 .01rem}.diverman .pgs-con{padding:.03rem 0 0 .8rem}.diverman .pgs-photo img{width:.5rem;height:.5rem;border-radius:50%}.diverman .pgs-photo{position:absolute;left:.15rem;top:-.03rem}.diverman .pgs-con span{display:block;line-height:.21rem;color:#757f89;font-size:.16rem}.diverman .pgs-con p{font-size:.12rem;color:#abafb3;line-height:.21rem}.diverman a.ask-car{right:.15rem}.pgs-con{padding:.03rem 0 0 .84rem;min-height:.5rem;box-sizing:border-box;position:relative}.carsaytit span{display:block;line-height:.21rem;color:#757f89;font-size:.16rem}.carsaytit p{font-size:.12rem;color:#abafb3;line-height:.21rem}.carsaytit p.appraiser-tit{font-size:.15rem;color:#757f89;line-height:.44rem;margin-left:-.03rem}a.ask-car{width:.74rem;height:.26rem;text-align:center;color:#22ac38;line-height:.26rem;border:1px solid #38b44c;display:inline-block;border-radius:2px;-webkit-border-radius:2px;font-size:.14rem;position:absolute;right:.28rem;top:.12rem}.report-content{padding:.15rem .2rem .21rem;font-size:.13rem;color:#757f89}.rep-notice{font-size:.12rem;color:#bec6ce;text-align:center}.report-list{margin-top:.16rem;position:relative}.report-list:after{height:1px;content:"";width:100%;border-top:1px solid #f3f5f8;position:absolute;top:-1px;right:0;transform:scaleY(.5);-webkit-transform:scaleY(.5)}.report-list li{height:.6rem;line-height:.6rem;padding:0 .15rem;position:relative}.report-list li:after{height:1px;content:"";width:100%;border-top:1px solid #f3f5f8;position:absolute;bottom:-1px;right:0;transform:scaleY(.5);-webkit-transform:scaleY(.5)}.report-list li i{display:inline-block;width:.42rem;vertical-align:-.14rem;margin-right:.05rem;height:.4rem}.report-list li i.icon-1{background-position:-.02rem -.8rem}.report-list li i.icon-2{background-position:-.54rem -.8rem}.report-list li i.icon-3{background-position:-1.07rem -.82rem}.report-list li i.icon-4{background-position:-1.56rem -.82rem}.report-list li i.icon-5{background-position:-1.57rem -.34rem;height:.37rem}.report-list a>span{font-size:.16rem;color:#495056}.report-list a{position:relative;width:100%;display:block}.report-list a:after{content:"";position:absolute;right:.02rem;top:.26rem;width:.07rem;height:.07rem;border-left:1px solid #b4b9bd;border-top:1px solid #b4b9bd;transform:rotate(135deg);-webkit-transform:rotate(135deg)}.report-list a>div{position:absolute;right:.05rem;top:0;height:.6rem}.report-list a>div span{display:inline-block;line-height:.6rem;vertical-align:top;padding-right:.08rem;position:relative;font-size:.16rem;color:#495056}.report-list a>div span:after{content:"";width:.18rem;height:.18rem;display:inline-block;vertical-align:-.03rem;margin-left:.05rem}.report-list a>div span.normal:after{background-position:-1.95rem .01rem}.report-list a>div span.unnormal:after{background-position:-1.95rem -.18rem}.report-img{margin-top:.26rem}.re-tab{text-align:center}.re-tab li{color:#495056;font-size:.16rem;display:inline-block;padding:0 .02rem .05rem;margin:0 .12rem}.re-tab li.active{border-bottom:.02rem solid #38b44c}.re-con{display:none;position:relative}.re-con.active{display:block}.dotted{position:absolute;height:100%;width:100%;top:0;left:0}.dotted span i{position:absolute;z-index:3;left:-.05rem;top:-.05rem;display:block;width:.2rem;height:.2rem;border-radius:50%}.dotted span .on{-webkit-animation:dotShake 2s linear infinite;animation:dotShake 2s linear infinite;background-color:rgba(255,187,3,.5)}.dotted span{position:absolute;z-index:2;width:.1rem;height:.1rem;background-color:#ffbb03;border-radius:50%;z-index:4}.dotted .dot{display:none}.dotted.active .dot{display:block}@-webkit-keyframes dotShake{0%{-webkit-transform:scale(.7);transform:scale(.7)}50%{-webkit-transform:scale(1);transform:scale(1)}to{-webkit-transform:scale(.7);transform:scale(.7)}}.areabox{width:100%;height:100%;left:0;top:0}.areabox,.areabox li{position:absolute;z-index:2}.areabox li{background:url(' + i(156) + ") no-repeat;background-size:2.78rem auto;display:none}.areabox li.active{display:block}.areabox .hood{width:.59rem;height:.68rem;background-position:-1.9rem -.66rem;top:.69rem;left:1.87rem}.areabox .fender_fl{width:.65rem;height:.27rem;background-position:-1.78rem 0;top:.15rem;left:1.8rem}.areabox .fender_fr{width:.65rem;height:.27rem;background-position:-1.76rem -1.72rem;top:1.61rem;left:1.78rem}.areabox .door_fl{width:.45rem;height:.29rem;background-position:-1.24rem 0;left:1.39rem;top:.14rem}.areabox .door_rl{width:.51rem;height:.29rem;background-position:-.65rem 0;left:.92rem;top:.14rem}.areabox .door_fr{width:.45rem;height:.29rem;background-position:-1.24rem -1.7rem;left:1.38rem;top:1.59rem}.areabox .door_rr{width:.51rem;height:.29rem;background-position:-.66rem -1.7rem;left:.91rem;top:1.59rem}.areabox .fender_rl{width:.65rem;height:.29rem;background-position:0 .01rem;left:.47rem;top:.14rem}.areabox .fender_rr{width:.65rem;height:.29rem;background-position:.01rem -1.71rem;left:.46rem;top:1.6rem}.areabox .a_pillar_l2{width:.36rem;height:.18rem;top:.4rem;left:1.47rem;background-position:-1.36rem -.44rem}.areabox .b_pillar_l2{width:.08rem;height:.18rem;top:.41rem;left:1.32rem;background-position:-1.09rem -.44rem}.areabox .c_pillar_l2{width:.41rem;height:.18rem;top:.41rem;left:.71rem;background-position:-.46rem -.44rem}.areabox .a_pillar_r2{width:.36rem;height:.18rem;top:1.46rem;left:1.46rem;background-position:-1.36rem -1.38rem}.areabox .b_pillar_r2{width:.08rem;height:.18rem;top:1.44rem;left:1.32rem;background-position:-1.1rem -1.39rem}.areabox .c_pillar_r2{width:.41rem;height:.18rem;top:1.46rem;left:.7rem;background-position:-.46rem -1.38rem}.areabox .head_save{width:.26rem;height:.83rem;top:.62rem;left:2.47rem;background-position:-2.53rem -.59rem}.areabox .foot_save{width:.26rem;height:.83rem;top:.6rem;left:.06rem;background-position:0 -.59rem}.areabox .roof{width:.76rem;height:.56rem;top:.73rem;left:.89rem;background-position:-.76rem -.7rem}.areabox .trunk_lid{width:.3rem;height:.65rem;top:.7rem;left:.46rem;background-position:-.3rem -.68rem}.out-bg{background:url(" + i(154) + ") no-repeat;background-size:2.83rem auto;height:2.06rem;width:2.83rem}.carin-bg,.out-bg{margin:.19rem auto;position:relative}.carin-bg{background:url(" + i(155) + ') no-repeat;background-size:2rem auto;width:2rem;height:2.65rem}.carin-bg .dotted{width:100%;height:100%}.tab-list{padding:0 .15rem;font-size:0}.tab-list span{position:relative;height:.24rem;line-height:.24rem;display:inline-block;padding:0 .14rem;border-radius:.24rem;color:#757f89;font-size:.12rem;margin:0 .08rem .08rem 0;box-sizing:border-box}.tab-list span:before{content:"";width:200%;height:200%;position:absolute;top:-50%;left:-50%;border:1px solid #757f89;border-radius:.24rem;box-sizing:border-box;-webkit-transform:scale(.5);transform:scale(.5)}.tab-list span.active:before{border-color:#ffbb03}.tab-list span:last-child{margin-right:0}.tab-list span i{position:absolute;top:-.06rem;right:-.06rem;font-size:.1rem;border-radius:50%;min-width:.16rem;padding:0 .045rem;height:.16rem;line-height:.16rem;text-align:center;z-index:3;box-sizing:border-box}.tab-list span i:before{content:"";width:200%;height:200%;position:absolute;top:-50%;left:-50%;border:1px solid #757f89;background-color:#fff;z-index:-1;border-radius:.16rem;box-sizing:border-box;-webkit-transform:scale(.5);transform:scale(.5);overflow:visible;background-clip:padding-box}.tab-list span.active i:before{border-color:#ffbb03}.tab-list .all-yes.active:before,.tab-list .all-yes.active i:before{border-color:#38b44c}.tab-list span.active{background-color:#ffbb03;border-color:#ffbb03;color:#fff}@media screen and (max-width:360px){.tab-list{display:-webkit-box}.tab-list span{padding:0 .05rem;text-align:center;min-width:.65rem}}.tab-list .active.all-yes{background-color:#38b44c;border-color:#38b44c}.tab-list .all-yes i{display:none}.tab-list .all-yes.active i{border-color:#38b44c;color:#38b44c;font-size:.09rem;padding:0;width:.16rem;display:block}.tab-list span.active i{border-color:#ffbb03;color:#ffbb03}.report-thumb{padding:.12rem .15rem 0;box-sizing:border-box;display:none}.report-thumb.active{display:block}.report-thumb .thumb-img-num{padding:0 .08rem;left:0;top:0;background-color:rgba(0,0,0,.3);font-size:.14rem;height:.25rem;line-height:.25rem}.report-thumb .thumb-img-num:before{background-image:none;width:0;height:0}.report .btn-check{margin-top:.2rem;margin-bottom:0}.report .btn-check a{height:.35rem;width:1.83rem}.car-inside{width:2.15rem;background:url(' + i(157) + ') no-repeat;background-size:2.15rem auto;margin:0 auto;height:1.1rem;position:relative}.check-inside{position:relative;margin-top:.12rem;padding-top:.1rem}.check-inside:before{height:1px;content:"";width:100%;border-top:1px solid #f3f5f8;position:absolute;top:-1px;right:0;-webkit-transform:scaleY(.5);transform:scaleY(.5)}.problems{background-color:#fff;margin-bottom:.06rem;padding:.12rem 0 .1rem}.prob-list{width:100%;overflow:hidden;box-sizing:border-box;padding:.12rem .15rem 0}.prob-list li{padding:0 .06rem .06rem 0;display:block;float:left;width:33.33%;box-sizing:border-box}.prob-list li:nth-child(3n){padding-right:0}.prob-list a{display:block;width:100%;font-size:.13rem;color:#757f89;text-align:center;line-height:.24rem;height:.24rem;background-color:#f3f4f8;border:1px solid #f3f4f8;overflow:hidden}.line-list{padding-top:.13rem;background-color:#fff;margin-bottom:.06rem}.line-list .car-info{position:relative;min-height:.8rem;display:block;padding:.15rem}.line-list .list-item{position:relative}.line-list .list-item:after{height:1px;content:"";width:100%;border-top:1px solid #f3f5f8;position:absolute;bottom:-1px;right:0;transform:scaleY(.5);-webkit-transform:scaleY(.5)}.line-list .car-img{position:relative;float:left;width:1.2rem;height:.8rem;margin-right:.1rem}.line-list .car-name{line-height:.16rem;color:#495056;text-overflow:ellipsis;overflow:hidden;display:-webkit-box;-webkit-box-orient:vertical;-webkit-line-clamp:2;font-size:.15rem;font-weight:400}.line-list .list{position:relative}.line-list .tag-new{position:absolute;top:0;left:0;z-index:4;width:.38rem;height:.38rem;white-space:nowrap;text-indent:-1rem;overflow:hidden;background-position:-2.82rem -.01rem}.line-list .car-img img{display:block;width:100%;height:100%}.line-list .car-km{margin-top:.02rem}.line-list .car-km,.line-list .car-price{font-size:.12rem;color:#9ea2a6;overflow:hidden}.line-list .car-price{margin-top:.07rem;position:absolute;right:.15rem;bottom:.15rem;left:1.45rem}.line-list .car-price strong{margin-top:.03rem;font-size:.17rem;line-height:.18rem;color:#f6704a;font-weight:400}.tag-city{color:#fff;text-align:center;height:.2rem;font-size:.12rem;line-height:.2rem;background-color:rgba(0,0,0,.5);right:0;bottom:0;padding:0 .04rem;position:absolute;z-index:4}.icon-sta1,.icon-sta2,.icon-sta3{display:inline-block;height:.14rem;margin-top:.04rem;margin-left:.04rem;padding:0 .03rem;font-size:.12rem;line-height:.14rem;text-align:center;border-radius:.02rem}.icon-sta1{color:#33b868;border:1px solid #33b868}.icon-sta2{color:#ff5b35;border:1px solid #ff5b35}.icon-sta3{color:#3bc3b5;border:1px solid #3bc3b5}.mod-more{display:block;color:#757f89;font-size:.14rem;line-height:.43rem;height:.44rem;text-align:center}.product-picture .mod-more i{content:"";display:inline-block;vertical-align:.02rem;width:.06rem;height:.06rem;margin-left:.03rem;border-right:1px solid #b4b9bd;border-bottom:1px solid #b4b9bd;-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}.drag-more{height:.65rem;line-height:.54rem;text-align:center;color:#757f89;position:relative;font-size:14px;display:none}.drag-more:after{content:"";position:absolute;left:50%;margin-left:-.03rem;width:.06rem;height:.06rem;border-left:1px solid #b4b9bd;border-top:1px solid #b4b9bd;top:.45rem;transform:rotate(45deg);-webkit-transform:rotate(45deg)}.drag-more-down.active:after,.drag-more.active:after{top:.43rem;transform:rotate(-135deg);-webkit-transform:rotate(-135deg)}.drag-down-active .drag-more{margin-top:.44rem;display:block;line-height:.75rem}.drag-down-active .drag-more:after{top:.13rem;transform:rotate(-135deg);-webkit-transform:rotate(-135deg)}.drag-down-active .drag-more.active:after{top:.16rem;transform:rotate(45deg);-webkit-transform:rotate(45deg)}.drag-down-active .comm-area{padding-top:0}.drag-up-more{height:.65rem;line-height:.54rem;text-align:center;color:#757f89;position:relative;font-size:14px}.drag-up-more .drag-up-more-arrow{position:absolute;top:.45rem;left:50%}.drag-up-more .drag-up-more-arrowChild{position:absolute;left:50%;margin-left:-.03rem;width:.06rem;height:.06rem;border-left:1px solid #b4b9bd;border-top:1px solid #b4b9bd;transform:rotate(45deg);-webkit-transform:rotate(45deg)}.drag-down-active .column.product-picture,.drag-down-active .comm-area{padding-top:.44rem}.drag-down-more{position:fixed;width:100%;z-index:-1;height:.65rem;top:.44rem;left:0;right:0;line-height:.75rem;text-align:center;color:#757f89;font-size:14px;opacity:0}.drag-down-more.active{opacity:1}.drag-down-more .drag-down-more-arrow{position:absolute;top:.17rem;left:50%}.drag-down-more .drag-down-more-arrowChild{position:absolute;left:50%;margin-left:-.03rem;width:.06rem;height:.06rem;border-left:1px solid #b4b9bd;border-top:1px solid #b4b9bd;transform:rotate(225deg);-webkit-transform:rotate(225deg)}.footbar{position:fixed;right:0;bottom:0;left:0;background-color:#fff;height:.5rem;z-index:50}.btn-group{display:-webkit-box;display:-ms-box;display:box}.btn-group .btn{display:block;-webkit-box-flex:1;-ms-box-flex:1;box-flex:1;width:100%}.btn-group .btn:first-child{-webkit-box-flex:0;-ms-box-flex:0;box-flex:0;width:.8rem}.detail-footbar .pos-popup{display:none;background-color:rgba(65,69,72,.9);border-radius:.03rem;height:.39rem;width:2.9rem;padding:.06rem;position:absolute;top:-.61rem;right:.1rem;border-right:0;z-index:90}.pos-popup .pos-img,.pos-popup p{float:left}.detail-footbar .pos-popup.active{display:block}.pos-img{width:.45rem}.pos-img img{width:.45rem;height:.39rem}.pos-popup p{color:#fff;width:2.35rem;margin-left:.07rem;text-align:left;font-size:.13rem}.pos-popup:after{content:"";position:absolute;border-width:.05rem;border-style:solid;border-color:rgba(65,69,72,.9) transparent transparent;bottom:-.1rem;right:11%}.icon-cutprize:after,.icon-order:after{content:"";position:absolute;width:.25rem;height:.25rem;top:.04rem;left:50%;margin-left:-.12rem}.icon-order:after{background-position:-2.59rem -.99rem}.icon-cutprize:after{background-position:-2.34rem -1rem}.icon-order a{display:block;height:.2rem;position:absolute;top:0;width:100%}.btn-group>div,.icon-order a{color:#495056;font-size:.1rem;padding-top:.3rem}.btn-group>div{width:.6rem;text-align:center;position:relative}.btn-group .icon-cutprize,.btn-group .icon-order{box-sizing:border-box}.btn-group .icon-cutprize:before,.btn-group .icon-order:before{height:1px;content:"";width:100%;border-top:1px solid #eaeef2;position:absolute;top:-1px;right:0;transform:scaleY(.5);-webkit-transform:scaleY(.5)}.detail-footbar .btn-group .btn:first-child,.detail-footbar .btn-group .btn:nth-child(2){-webkit-box-flex:0;-ms-box-flex:0;box-flex:0;width:.75rem;font-size:.13rem}.detail-footbar .btn-large{font-size:.13rem}.detail-footbar .btn-group .btn{outline:0;border:0;font-size:.18rem;color:#fff;height:.5rem;line-height:.5rem;text-align:center;border-radius:0}.detail-footbar .btn-group .btn-1{background-color:#4cc76f}.detail-footbar .btn-group .btn-2{background-color:#ff7844;margin-left:-.01rem}.price-guide{display:none}.price-guide.active{display:block}.price-guide .price-sector{width:1.58rem;height:.78rem;margin:.22rem auto .12rem;position:relative}.price-sector>span{color:#9ea2a6;font-size:.1rem;position:absolute;white-space:nowrap}.price-sector .pos-1{right:1.39rem;top:.13rem}.price-sector .pos-2{position:absolute;top:0;left:0;width:100%;height:100%}.price-sector .pos-2 span{position:absolute;white-space:nowrap}.price-sector .pos-2 .pointer{bottom:.01rem;left:50%;margin-left:-.06rem;width:.12rem;height:.78rem;background-position:-2.08rem -.01rem;-webkit-transform-origin:center bottom;transform-origin:center bottom}.price-sector .pos-2 .fact{top:-.19rem;left:0;width:100%;text-align:center;color:#757f8a;font-size:.12rem}.price-sector .pos-2 .fact em,.price-sector .pos-2 .fact i{color:#ff704a}.price-sector .pos-2 .fact i{font-size:.1rem}.price-sector .pos-3{left:1.37rem;top:.12rem}.price-sector .pos-4{left:1.52rem;top:.38rem}.price-sector .pos-5{left:1.59rem;top:.66rem}.predict{text-align:center;color:#757f8a;margin-bottom:.11rem;font-size:.14rem}.predict em{color:#38b44c}.guide-btns{text-align:center;margin-bottom:.11rem;font-size:0}.guide-btns a{display:inline-block;color:#757f89;height:.24rem;width:.94rem;margin:0 .08rem;text-align:center;line-height:.24rem;border-radius:.01rem;font-size:.12rem;background-clip:padding-box;position:relative;box-sizing:border-box}.guide-btns a:after{content:"";width:200%;height:200%;position:absolute;top:-50%;left:-50%;border:1px solid #abafb3;border-radius:.01rem;box-sizing:border-box;-webkit-transform:scale(.5);transform:scale(.5)}.gj-go-tel,.gj-go-top{border-radius:50%;display:none;position:fixed;right:.15rem;z-index:49}.gj-go-top{bottom:.95rem;border:1px solid #f1f3f6;box-shadow:0 0 .02rem #f1f3f6;width:.42rem;height:.42rem;background-color:#fff}.gj-go-top.active{display:block}.gj-go-top i{display:inline-block;vertical-align:middle;margin:.1rem 0 0 .11rem;overflow:hidden;height:.25rem;width:.21rem;background-position:-2.1rem -.99rem}.gj-go-tel{background-position:-2.56rem -1.65rem;width:.44rem;height:.44rem;bottom:1.49rem}.click-area{position:absolute;left:0;top:0;height:.42rem;display:inline-block;padding:.01rem .2rem 0 .75rem}@media screen and (max-width:320px){.rep-notice{font-size:.11rem}.pgs-con{padding:.03rem 0 0 .85rem}a.ask-car{right:.2rem;width:70px;height:24px;line-height:24px}.line-list .car-price .deal-price{padding-right:0}}@media screen and (max-width:360px){.s-tabtit li:last-child{display:none;flex:0}}@media screen and (max-width:414px){.s-tabtit li.on p,.s-tabtit li p{font-size:12px}}.j-inner,.j-outer{display:none}.j-inner.active,.j-outer.active{display:block}.d-tab{display:none;text-align:center;margin-top:.2rem}.d-tab.active{display:block}.d-tab li{display:inline-block;padding:0 .1rem;font-size:.14rem;line-height:1;text-align:left;color:#757f8a}.d-tab li:first-child{border-right:.01rem solid #dde4ea}.d-tab li.active{color:#38b44c}.car-thrD-show.active{display:block}.car-thrD-show{position:relative;margin-top:.4rem;width:100%;height:1.905rem;display:none;overflow-x:hidden}.thrD-cars-canvas{z-index:1;top:0}.thrD-cars,.thrD-cars-canvas{position:absolute;left:50%;margin-left:-1.55rem;width:3.1rem;height:1.94rem}.thrD-cars{top:-.4rem}.thrD-cars-img{z-index:1;top:0;height:1.94rem}.thrD-cars-img,.thrD-ellipse{position:absolute;left:50%;margin-left:-1.55rem;width:3.1rem}.thrD-ellipse{top:.2rem;height:1.08rem;background-image:url("http://sta.guazi.com/static/c2c/wap/detail/ellipse-bg.png");background-size:cover;background-position:0 .02rem}.thrD-ellipse-node{width:.06rem;height:.06rem;background-color:#9edda8;position:absolute;margin-left:-.03rem;margin-top:-.03rem;border-radius:50%}.thrD-ellipse-node-text.left-two,.thrD-ellipse-node.left-two{top:.747rem;left:.118rem}.thrD-ellipse-node-text.left-one,.thrD-ellipse-node.left-one{top:1.039rem;left:.956rem}.thrD-ellipse-node-text.middle,.thrD-ellipse-node.middle{top:1.08rem;left:1.55rem}.thrD-ellipse-node-text.right-one,.thrD-ellipse-node.right-one{top:1.039rem;left:2.144rem}.thrD-ellipse-node-text.right-two,.thrD-ellipse-node.right-two{top:.747rem;left:2.982rem}.thrD-ellipse-slider{position:absolute;z-index:3;top:0;left:0;transform:translate3d(1.55rem,1.08rem,0);width:.4rem;height:.4rem;margin-left:-.2rem;margin-top:-.2rem;background-image:url("http://sta.guazi.com/static/c2c/wap/detail/btn.png");background-size:cover;background-position:0 .03rem;background-repeat:no-repeat}.thrD-ellipse-node-text{position:absolute;width:.56rem;margin-left:-.28rem;margin-top:.05rem;height:.12rem;font-size:.12rem;line-height:2.17;text-align:center;color:#abafb3;transition:all .1s}.thrD-ellipse-node-text.active{font-size:.14rem;color:#495056;margin-top:.2rem}.car-dot-box{position:absolute;z-index:1;left:50%;top:-.4rem;margin-left:-1.55rem;width:3.1rem;height:1.94rem}.j-3d-dot{margin-left:-.05rem;margin-top:-.05rem}.dot{z-index:2;width:.1rem;height:.1rem;background-color:#ffbb03;z-index:4}.dot,.dot .on{position:absolute;border-radius:50%}.dot .on{-webkit-animation:dotShake 1.5s linear infinite;animation:dotShake 1.5s linear infinite;background-color:rgba(255,187,3,.5);z-index:3;left:-.075rem;top:-.075rem;display:block;width:.25rem;height:.25rem}@keyframes dotShake{0%{-webkit-transform:scale(.7);transform:scale(.7)}50%{-webkit-transform:scale(1);transform:scale(1)}to{-webkit-transform:scale(.7);transform:scale(.7)}}.detail h1.product-title .icon-sta-sell{display:inline-block;height:.16rem;vertical-align:.02rem;margin-right:.06rem;padding:0 1px;font-size:.11rem;line-height:.16rem;color:#ffa600;text-align:center;border:1px solid #f3b503;border-radius:.02rem}.sell-limit-activity{margin-bottom:.19rem;font-size:.12rem;color:#666;line-height:.18rem}.sell-limit-activity i{float:left;height:.16rem;margin-right:.03rem;padding:0 .04rem;font-size:.1rem;line-height:.16rem;color:#f56539;text-align:center;background-color:#feefeb;border:1px solid #f6744d;border-radius:.02rem 0 0 .02rem}.sell-limit-activity i:before{content:"";display:inline-block;width:.09rem;height:.09rem;vertical-align:top;margin-top:.03rem;margin-right:.03rem;background-position:0 -3.03rem}.sell-limit-activity span{color:#f56539}.detail-sellbox{background:#fff;margin:.06rem 0}.detail-sellbox .column-title{padding-top:.18rem;line-height:.16rem}.detail-sellbox .column-title:after{display:none}.detail-sellbox .icon-sell-circle{float:right;padding-top:.02rem;padding-right:.16rem;font-size:0}.detail-sellbox .icon-sell-circle i{display:inline-block;width:.03rem;height:.03rem;margin-left:.05rem;background-color:#bec6ce;border-radius:50%}.detail-sellbox ul{width:100%;padding:.2rem 0 .24rem;overflow:hidden}.detail-sellbox li{float:left;width:25%;font-size:.12rem;color:#757f8a;line-height:.12rem;text-align:center}.detail-sellbox li i{position:relative;display:inline-block;width:.1rem;height:.1rem;vertical-align:-.01rem;margin-right:.04rem;border:1px solid #22ac38;border-radius:50%}.detail-sellbox li i:after{content:"";position:absolute;top:.02rem;left:.02rem;width:.06rem;height:.03rem;border-top:1px solid #22ac38;border-right:1px solid #22ac38;-webkit-transform:rotate(135deg);transform:rotate(135deg)}.detail-footbar-sell .btn-1.js-touch-state,.detail-footbar-sell .icon-cutprize{display:none}.detail-footbar-sell .icon-order{width:1.2rem}.detail-footbar-sell .icon-order a{height:.5rem;font-size:.16rem;line-height:.5rem;padding-top:0}.detail-footbar-sell .icon-order:after{display:none}.detail-footbar-sell .icon-order a:before{content:"";display:inline-block;width:.25rem;height:.25rem;vertical-align:middle;margin-right:.02rem;margin-top:-.01rem;background-position:-2.59rem -.99rem}.the-way-order{background-color:#fff;margin-bottom:.06rem;padding:.12rem 0 0}.check-box{background-image:url(' + i(94) + ");background-size:3rem auto;background-repeat:no-repeat}.look-more-ul{padding:0 .15rem}.look-more-ul li{padding:.2rem 0;height:.8rem}.look-more-car-link{display:block;height:.8rem;margin-left:.35rem}.look-more-car-link img{float:left;width:1.2rem;height:.8rem}.look-more-car-txt{margin-left:1.35rem}.look-more-car-name{font-size:.14rem;line-height:.16rem;color:#495056;display:-webkit-box;-webkit-box-orient:vertical;-webkit-line-clamp:2;text-overflow:ellipsis;overflow:hidden}.look-more-car-info{height:.18rem;line-height:.18rem;font-size:.12rem;color:#909090;padding-top:.02rem}.look-more-car-info span{float:right;height:.16rem;line-height:.16rem;font-size:.12rem;padding:0 2px;border:1px solid #22ac38;color:#22ac38}.look-more-car-price{height:.18rem;line-height:.18rem;color:#f75b5b;font-size:.18rem;padding-top:.08rem}.look-more-car-price span{font-size:.12rem;color:#bec6ce;text-decoration:line-through}@media screen and (max-width:321px){.look-more-car-info span,.look-more-car-price span{display:none}}.click-select{float:left;width:.35rem;height:.8rem}.check-box{float:left;width:.2rem;height:.2rem;margin-top:.3rem;background-position:-2.3rem -1.75rem}.check-box-active{background-position:-2.3rem -2rem}.detail-footbar .btn-group .btn-2{position:relative}.detail-footbar .btn-group .btn-2 i{display:inline-block;width:.18rem;height:.18rem;line-height:.18rem;text-align:center;font-size:.14rem;color:#ff7844;background:#fff;border-radius:50%;margin-left:.05rem;vertical-align:1px}.btn-2 .byWay,.btn-2 .order{position:absolute;width:100%;text-align:center;left:50%;-webkit-transform:translate3d(-50%,0,0);transform:translate3d(-50%,0,0)}.btn-2 .order{opacity:1}.btn-2 .byWay{opacity:0}.btn-2 .order.leave{-webkit-animation:orderLeave .2s .3s forwards;animation:orderLeave .2s .3s forwards}@keyframes orderLeave{0%{-webkit-transform:translate3d(-50%,0,0);transform:translate3d(-50%,0,0);opacity:1}to{-webkit-transform:translate3d(-70%,0,0);transform:translate3d(-70%,0,0);opacity:0}}@-webkit-keyframes orderLeave{0%{-webkit-transform:translate3d(-50%,0,0);transform:translate3d(-50%,0,0);opacity:1}to{-webkit-transform:translate3d(-70%,0,0);transform:translate3d(-70%,0,0);opacity:0}}.btn-2 .order.enter{-webkit-animation:orderEnter .2s forwards;animation:orderEnter .2s forwards}@keyframes orderEnter{0%{-webkit-transform:translate3d(-70%,0,0);transform:translate3d(-70%,0,0);opacity:0}to{-webkit-transform:translate3d(-50%,0,0);transform:translate3d(-50%,0,0);opacity:1}}@-webkit-keyframes orderEnter{0%{-webkit-transform:translate3d(-70%,0,0);transform:translate3d(-70%,0,0);opacity:0}to{-webkit-transform:translate3d(-50%,0,0);transform:translate3d(-50%,0,0);opacity:1}}.btn-2 .byWay.leave{-webkit-animation:byWayLeave .2s forwards;animation:byWayLeave .2s forwards}@keyframes byWayLeave{0%{-webkit-transform:translate3d(-50%,0,0);transform:translate3d(-50%,0,0);opacity:1}to{-webkit-transform:translate3d(-30%,0,0);transform:translate3d(-30%,0,0);opacity:0}}@-webkit-keyframes byWayLeave{0%{-webkit-transform:translate3d(-50%,0,0);transform:translate3d(-50%,0,0);opacity:1}to{-webkit-transform:translate3d(-30%,0,0);transform:translate3d(-30%,0,0);opacity:0}}.btn-2 .byWay.enter{-webkit-animation:byWayEnter .1s .4s forwards;animation:byWayEnter .1s .4s forwards}@keyframes byWayEnter{0%{-webkit-transform:translate3d(-30%,0,0);transform:translate3d(-30%,0,0);opacity:0}to{-webkit-transform:translate3d(-50%,0,0);transform:translate3d(-50%,0,0);opacity:1}}@-webkit-keyframes byWayEnter{0%{-webkit-transform:translate3d(-30%,0,0);transform:translate3d(-30%,0,0);opacity:0}to{-webkit-transform:translate3d(-50%,0,0);transform:translate3d(-50%,0,0);opacity:1}}", ""]);
}, , , , , , , , , , function(t, e, i) { t.exports = i.p + "car-gray.c083bbaf434eece226a42ae163c62c62.jpg" }, function(t, e, i) { t.exports = i.p + "car-in.728b7964374a178cb57ef89f11f4d984.jpg" }, function(t, e, i) { t.exports = i.p + "car-parts.1068833f08adf9be098aa53ff134e87c.png" }, function(t, e, i) { t.exports = i.p + "car_inside.675fc563611900e504ddd1345061a229.png" }, function(t, e, i) { t.exports = i.p + "icons-detail.72db9c0283654da8f71dd6f3a1a469cc.png" }, function(t, e, i) { t.exports = i.p + "re-bg.7254fc9a03a28ee5392e71a1c2c6362e.jpg" }, , , , , function(t, e, i) { var o = i(144); "string" == typeof o && (o = [
        [t.id, o, ""]
    ]);
    i(2)(o, {});
    o.locals && (t.exports = o.locals) }]);