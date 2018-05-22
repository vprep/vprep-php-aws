<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]> ><! <![endif]-->
<html class='no-js'>
<!-- <![endif] -->

<head>
    <meta charset='utf-8'>
    <meta content='IE=edge' http-equiv='X-UA-Compatible'>
    <script type="text/javascript">
        window.NREUM || (NREUM = {});
        NREUM.info = {
            "beacon": "bam.nr-data.net",
            "errorBeacon": "bam.nr-data.net",
            "licenseKey": "6457cf2211",
            "applicationID": "4039557",
            "transactionName": "cl0MQxALXloGQExcV0NZB0MLClUZEEYCRV9SbRJWBQFBGQtdDlQ=",
            "queueTime": 0,
            "applicationTime": 8,
            "agent": ""
        }
    </script>
    <script type="text/javascript">
        (window.NREUM || (NREUM = {})).loader_config = {
            xpid: "UgEPVlZRGwcAV1hXAgY="
        };
        window.NREUM || (NREUM = {}), __nr_require = function(t, n, e) {
            function r(e) {
                if (!n[e]) {
                    var o = n[e] = {
                        exports: {}
                    };
                    t[e][0].call(o.exports, function(n) {
                        var o = t[e][1][n];
                        return r(o || n)
                    }, o, o.exports)
                }
                return n[e].exports
            }
            if ("function" == typeof __nr_require) return __nr_require;
            for (var o = 0; o < e.length; o++) r(e[o]);
            return r
        }({
            1: [function(t, n, e) {
                function r(t) {
                    try {
                        s.console && console.log(t)
                    } catch (n) {}
                }
                var o, i = t("ee"),
                    a = t(15),
                    s = {};
                try {
                    o = localStorage.getItem("__nr_flags").split(","), console && "function" == typeof console.log && (s.console = !0, o.indexOf("dev") !== -1 && (s.dev = !0), o.indexOf("nr_dev") !== -1 && (s.nrDev = !0))
                } catch (c) {}
                s.nrDev && i.on("internal-error", function(t) {
                    r(t.stack)
                }), s.dev && i.on("fn-err", function(t, n, e) {
                    r(e.stack)
                }), s.dev && (r("NR AGENT IN DEVELOPMENT MODE"), r("flags: " + a(s, function(t, n) {
                    return t
                }).join(", ")))
            }, {}],
            2: [function(t, n, e) {
                function r(t, n, e, r, s) {
                    try {
                        p ? p -= 1 : o(s || new UncaughtException(t, n, e), !0)
                    } catch (f) {
                        try {
                            i("ierr", [f, c.now(), !0])
                        } catch (d) {}
                    }
                    return "function" == typeof u && u.apply(this, a(arguments))
                }

                function UncaughtException(t, n, e) {
                    this.message = t || "Uncaught error with no additional information", this.sourceURL = n, this.line = e
                }

                function o(t, n) {
                    var e = n ? null : c.now();
                    i("err", [t, e])
                }
                var i = t("handle"),
                    a = t(16),
                    s = t("ee"),
                    c = t("loader"),
                    f = t("gos"),
                    u = window.onerror,
                    d = !1,
                    l = "nr@seenError",
                    p = 0;
                c.features.err = !0, t(1), window.onerror = r;
                try {
                    throw new Error
                } catch (h) {
                    "stack" in h && (t(8), t(7), "addEventListener" in window && t(5), c.xhrWrappable && t(9), d = !0)
                }
                s.on("fn-start", function(t, n, e) {
                    d && (p += 1)
                }), s.on("fn-err", function(t, n, e) {
                    d && !e[l] && (f(e, l, function() {
                        return !0
                    }), this.thrown = !0, o(e))
                }), s.on("fn-end", function() {
                    d && !this.thrown && p > 0 && (p -= 1)
                }), s.on("internal-error", function(t) {
                    i("ierr", [t, c.now(), !0])
                })
            }, {}],
            3: [function(t, n, e) {
                t("loader").features.ins = !0
            }, {}],
            4: [function(t, n, e) {
                function r(t) {}
                if (window.performance && window.performance.timing && window.performance.getEntriesByType) {
                    var o = t("ee"),
                        i = t("handle"),
                        a = t(8),
                        s = t(7),
                        c = "learResourceTimings",
                        f = "addEventListener",
                        u = "resourcetimingbufferfull",
                        d = "bstResource",
                        l = "resource",
                        p = "-start",
                        h = "-end",
                        m = "fn" + p,
                        w = "fn" + h,
                        v = "bstTimer",
                        y = "pushState",
                        g = t("loader");
                    g.features.stn = !0, t(6);
                    var b = NREUM.o.EV;
                    o.on(m, function(t, n) {
                        var e = t[0];
                        e instanceof b && (this.bstStart = g.now())
                    }), o.on(w, function(t, n) {
                        var e = t[0];
                        e instanceof b && i("bst", [e, n, this.bstStart, g.now()])
                    }), a.on(m, function(t, n, e) {
                        this.bstStart = g.now(), this.bstType = e
                    }), a.on(w, function(t, n) {
                        i(v, [n, this.bstStart, g.now(), this.bstType])
                    }), s.on(m, function() {
                        this.bstStart = g.now()
                    }), s.on(w, function(t, n) {
                        i(v, [n, this.bstStart, g.now(), "requestAnimationFrame"])
                    }), o.on(y + p, function(t) {
                        this.time = g.now(), this.startPath = location.pathname + location.hash
                    }), o.on(y + h, function(t) {
                        i("bstHist", [location.pathname + location.hash, this.startPath, this.time])
                    }), f in window.performance && (window.performance["c" + c] ? window.performance[f](u, function(t) {
                        i(d, [window.performance.getEntriesByType(l)]), window.performance["c" + c]()
                    }, !1) : window.performance[f]("webkit" + u, function(t) {
                        i(d, [window.performance.getEntriesByType(l)]), window.performance["webkitC" + c]()
                    }, !1)), document[f]("scroll", r, {
                        passive: !0
                    }), document[f]("keypress", r, !1), document[f]("click", r, !1)
                }
            }, {}],
            5: [function(t, n, e) {
                function r(t) {
                    for (var n = t; n && !n.hasOwnProperty(u);) n = Object.getPrototypeOf(n);
                    n && o(n)
                }

                function o(t) {
                    s.inPlace(t, [u, d], "-", i)
                }

                function i(t, n) {
                    return t[1]
                }
                var a = t("ee").get("events"),
                    s = t(18)(a, !0),
                    c = t("gos"),
                    f = XMLHttpRequest,
                    u = "addEventListener",
                    d = "removeEventListener";
                n.exports = a, "getPrototypeOf" in Object ? (r(document), r(window), r(f.prototype)) : f.prototype.hasOwnProperty(u) && (o(window), o(f.prototype)), a.on(u + "-start", function(t, n) {
                    var e = t[1],
                        r = c(e, "nr@wrapped", function() {
                            function t() {
                                if ("function" == typeof e.handleEvent) return e.handleEvent.apply(e, arguments)
                            }
                            var n = {
                                object: t,
                                "function": e
                            }[typeof e];
                            return n ? s(n, "fn-", null, n.name || "anonymous") : e
                        });
                    this.wrapped = t[1] = r
                }), a.on(d + "-start", function(t) {
                    t[1] = this.wrapped || t[1]
                })
            }, {}],
            6: [function(t, n, e) {
                var r = t("ee").get("history"),
                    o = t(18)(r);
                n.exports = r, o.inPlace(window.history, ["pushState", "replaceState"], "-")
            }, {}],
            7: [function(t, n, e) {
                var r = t("ee").get("raf"),
                    o = t(18)(r),
                    i = "equestAnimationFrame";
                n.exports = r, o.inPlace(window, ["r" + i, "mozR" + i, "webkitR" + i, "msR" + i], "raf-"), r.on("raf-start", function(t) {
                    t[0] = o(t[0], "fn-")
                })
            }, {}],
            8: [function(t, n, e) {
                function r(t, n, e) {
                    t[0] = a(t[0], "fn-", null, e)
                }

                function o(t, n, e) {
                    this.method = e, this.timerDuration = isNaN(t[1]) ? 0 : +t[1], t[0] = a(t[0], "fn-", this, e)
                }
                var i = t("ee").get("timer"),
                    a = t(18)(i),
                    s = "setTimeout",
                    c = "setInterval",
                    f = "clearTimeout",
                    u = "-start",
                    d = "-";
                n.exports = i, a.inPlace(window, [s, "setImmediate"], s + d), a.inPlace(window, [c], c + d), a.inPlace(window, [f, "clearImmediate"], f + d), i.on(c + u, r), i.on(s + u, o)
            }, {}],
            9: [function(t, n, e) {
                function r(t, n) {
                    d.inPlace(n, ["onreadystatechange"], "fn-", s)
                }

                function o() {
                    var t = this,
                        n = u.context(t);
                    t.readyState > 3 && !n.resolved && (n.resolved = !0, u.emit("xhr-resolved", [], t)), d.inPlace(t, y, "fn-", s)
                }

                function i(t) {
                    g.push(t), h && (x ? x.then(a) : w ? w(a) : (E = -E, O.data = E))
                }

                function a() {
                    for (var t = 0; t < g.length; t++) r([], g[t]);
                    g.length && (g = [])
                }

                function s(t, n) {
                    return n
                }

                function c(t, n) {
                    for (var e in t) n[e] = t[e];
                    return n
                }
                t(5);
                var f = t("ee"),
                    u = f.get("xhr"),
                    d = t(18)(u),
                    l = NREUM.o,
                    p = l.XHR,
                    h = l.MO,
                    m = l.PR,
                    w = l.SI,
                    v = "readystatechange",
                    y = ["onload", "onerror", "onabort", "onloadstart", "onloadend", "onprogress", "ontimeout"],
                    g = [];
                n.exports = u;
                var b = window.XMLHttpRequest = function(t) {
                    var n = new p(t);
                    try {
                        u.emit("new-xhr", [n], n), n.addEventListener(v, o, !1)
                    } catch (e) {
                        try {
                            u.emit("internal-error", [e])
                        } catch (r) {}
                    }
                    return n
                };
                if (c(p, b), b.prototype = p.prototype, d.inPlace(b.prototype, ["open", "send"], "-xhr-", s), u.on("send-xhr-start", function(t, n) {
                        r(t, n), i(n)
                    }), u.on("open-xhr-start", r), h) {
                    var x = m && m.resolve();
                    if (!w && !m) {
                        var E = 1,
                            O = document.createTextNode(E);
                        new h(a).observe(O, {
                            characterData: !0
                        })
                    }
                } else f.on("fn-end", function(t) {
                    t[0] && t[0].type === v || a()
                })
            }, {}],
            10: [function(t, n, e) {
                function r(t) {
                    var n = this.params,
                        e = this.metrics;
                    if (!this.ended) {
                        this.ended = !0;
                        for (var r = 0; r < d; r++) t.removeEventListener(u[r], this.listener, !1);
                        if (!n.aborted) {
                            if (e.duration = a.now() - this.startTime, 4 === t.readyState) {
                                n.status = t.status;
                                var i = o(t, this.lastSize);
                                if (i && (e.rxSize = i), this.sameOrigin) {
                                    var c = t.getResponseHeader("X-NewRelic-App-Data");
                                    c && (n.cat = c.split(", ").pop())
                                }
                            } else n.status = 0;
                            e.cbTime = this.cbTime, f.emit("xhr-done", [t], t), s("xhr", [n, e, this.startTime])
                        }
                    }
                }

                function o(t, n) {
                    var e = t.responseType;
                    if ("json" === e && null !== n) return n;
                    var r = "arraybuffer" === e || "blob" === e || "json" === e ? t.response : t.responseText;
                    return h(r)
                }

                function i(t, n) {
                    var e = c(n),
                        r = t.params;
                    r.host = e.hostname + ":" + e.port, r.pathname = e.pathname, t.sameOrigin = e.sameOrigin
                }
                var a = t("loader");
                if (a.xhrWrappable) {
                    var s = t("handle"),
                        c = t(11),
                        f = t("ee"),
                        u = ["load", "error", "abort", "timeout"],
                        d = u.length,
                        l = t("id"),
                        p = t(14),
                        h = t(13),
                        m = window.XMLHttpRequest;
                    a.features.xhr = !0, t(9), f.on("new-xhr", function(t) {
                        var n = this;
                        n.totalCbs = 0, n.called = 0, n.cbTime = 0, n.end = r, n.ended = !1, n.xhrGuids = {}, n.lastSize = null, p && (p > 34 || p < 10) || window.opera || t.addEventListener("progress", function(t) {
                            n.lastSize = t.loaded
                        }, !1)
                    }), f.on("open-xhr-start", function(t) {
                        this.params = {
                            method: t[0]
                        }, i(this, t[1]), this.metrics = {}
                    }), f.on("open-xhr-end", function(t, n) {
                        "loader_config" in NREUM && "xpid" in NREUM.loader_config && this.sameOrigin && n.setRequestHeader("X-NewRelic-ID", NREUM.loader_config.xpid)
                    }), f.on("send-xhr-start", function(t, n) {
                        var e = this.metrics,
                            r = t[0],
                            o = this;
                        if (e && r) {
                            var i = h(r);
                            i && (e.txSize = i)
                        }
                        this.startTime = a.now(), this.listener = function(t) {
                            try {
                                "abort" === t.type && (o.params.aborted = !0), ("load" !== t.type || o.called === o.totalCbs && (o.onloadCalled || "function" != typeof n.onload)) && o.end(n)
                            } catch (e) {
                                try {
                                    f.emit("internal-error", [e])
                                } catch (r) {}
                            }
                        };
                        for (var s = 0; s < d; s++) n.addEventListener(u[s], this.listener, !1)
                    }), f.on("xhr-cb-time", function(t, n, e) {
                        this.cbTime += t, n ? this.onloadCalled = !0 : this.called += 1, this.called !== this.totalCbs || !this.onloadCalled && "function" == typeof e.onload || this.end(e)
                    }), f.on("xhr-load-added", function(t, n) {
                        var e = "" + l(t) + !!n;
                        this.xhrGuids && !this.xhrGuids[e] && (this.xhrGuids[e] = !0, this.totalCbs += 1)
                    }), f.on("xhr-load-removed", function(t, n) {
                        var e = "" + l(t) + !!n;
                        this.xhrGuids && this.xhrGuids[e] && (delete this.xhrGuids[e], this.totalCbs -= 1)
                    }), f.on("addEventListener-end", function(t, n) {
                        n instanceof m && "load" === t[0] && f.emit("xhr-load-added", [t[1], t[2]], n)
                    }), f.on("removeEventListener-end", function(t, n) {
                        n instanceof m && "load" === t[0] && f.emit("xhr-load-removed", [t[1], t[2]], n)
                    }), f.on("fn-start", function(t, n, e) {
                        n instanceof m && ("onload" === e && (this.onload = !0), ("load" === (t[0] && t[0].type) || this.onload) && (this.xhrCbStart = a.now()))
                    }), f.on("fn-end", function(t, n) {
                        this.xhrCbStart && f.emit("xhr-cb-time", [a.now() - this.xhrCbStart, this.onload, n], n)
                    })
                }
            }, {}],
            11: [function(t, n, e) {
                n.exports = function(t) {
                    var n = document.createElement("a"),
                        e = window.location,
                        r = {};
                    n.href = t, r.port = n.port;
                    var o = n.href.split("://");
                    !r.port && o[1] && (r.port = o[1].split("/")[0].split("@").pop().split(":")[1]), r.port && "0" !== r.port || (r.port = "https" === o[0] ? "443" : "80"), r.hostname = n.hostname || e.hostname, r.pathname = n.pathname, r.protocol =
                        o[0], "/" !== r.pathname.charAt(0) && (r.pathname = "/" + r.pathname);
                    var i = !n.protocol || ":" === n.protocol || n.protocol === e.protocol,
                        a = n.hostname === document.domain && n.port === e.port;
                    return r.sameOrigin = i && (!n.hostname || a), r
                }
            }, {}],
            12: [function(t, n, e) {
                function r() {}

                function o(t, n, e) {
                    return function() {
                        return i(t, [f.now()].concat(s(arguments)), n ? null : this, e), n ? void 0 : this
                    }
                }
                var i = t("handle"),
                    a = t(15),
                    s = t(16),
                    c = t("ee").get("tracer"),
                    f = t("loader"),
                    u = NREUM;
                "undefined" == typeof window.newrelic && (newrelic = u);
                var d = ["setPageViewName", "setCustomAttribute", "setErrorHandler", "finished", "addToTrace", "inlineHit", "addRelease"],
                    l = "api-",
                    p = l + "ixn-";
                a(d, function(t, n) {
                    u[n] = o(l + n, !0, "api")
                }), u.addPageAction = o(l + "addPageAction", !0), u.setCurrentRouteName = o(l + "routeName", !0), n.exports = newrelic, u.interaction = function() {
                    return (new r).get()
                };
                var h = r.prototype = {
                    createTracer: function(t, n) {
                        var e = {},
                            r = this,
                            o = "function" == typeof n;
                        return i(p + "tracer", [f.now(), t, e], r),
                            function() {
                                if (c.emit((o ? "" : "no-") + "fn-start", [f.now(), r, o], e), o) try {
                                    return n.apply(this, arguments)
                                } catch (t) {
                                    throw c.emit("fn-err", [arguments, this, t], e), t
                                } finally {
                                    c.emit("fn-end", [f.now()], e)
                                }
                            }
                    }
                };
                a("setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","), function(t, n) {
                    h[n] = o(p + n)
                }), newrelic.noticeError = function(t) {
                    "string" == typeof t && (t = new Error(t)), i("err", [t, f.now()])
                }
            }, {}],
            13: [function(t, n, e) {
                n.exports = function(t) {
                    if ("string" == typeof t && t.length) return t.length;
                    if ("object" == typeof t) {
                        if ("undefined" != typeof ArrayBuffer && t instanceof ArrayBuffer && t.byteLength) return t.byteLength;
                        if ("undefined" != typeof Blob && t instanceof Blob && t.size) return t.size;
                        if (!("undefined" != typeof FormData && t instanceof FormData)) try {
                            return JSON.stringify(t).length
                        } catch (n) {
                            return
                        }
                    }
                }
            }, {}],
            14: [function(t, n, e) {
                var r = 0,
                    o = navigator.userAgent.match(/Firefox[\/\s](\d+\.\d+)/);
                o && (r = +o[1]), n.exports = r
            }, {}],
            15: [function(t, n, e) {
                function r(t, n) {
                    var e = [],
                        r = "",
                        i = 0;
                    for (r in t) o.call(t, r) && (e[i] = n(r, t[r]), i += 1);
                    return e
                }
                var o = Object.prototype.hasOwnProperty;
                n.exports = r
            }, {}],
            16: [function(t, n, e) {
                function r(t, n, e) {
                    n || (n = 0), "undefined" == typeof e && (e = t ? t.length : 0);
                    for (var r = -1, o = e - n || 0, i = Array(o < 0 ? 0 : o); ++r < o;) i[r] = t[n + r];
                    return i
                }
                n.exports = r
            }, {}],
            17: [function(t, n, e) {
                n.exports = {
                    exists: "undefined" != typeof window.performance && window.performance.timing && "undefined" != typeof window.performance.timing.navigationStart
                }
            }, {}],
            18: [function(t, n, e) {
                function r(t) {
                    return !(t && t instanceof Function && t.apply && !t[a])
                }
                var o = t("ee"),
                    i = t(16),
                    a = "nr@original",
                    s = Object.prototype.hasOwnProperty,
                    c = !1;
                n.exports = function(t, n) {
                    function e(t, n, e, o) {
                        function nrWrapper() {
                            var r, a, s, c;
                            try {
                                a = this, r = i(arguments), s = "function" == typeof e ? e(r, a) : e || {}
                            } catch (f) {
                                l([f, "", [r, a, o], s])
                            }
                            u(n + "start", [r, a, o], s);
                            try {
                                return c = t.apply(a, r)
                            } catch (d) {
                                throw u(n + "err", [r, a, d], s), d
                            } finally {
                                u(n + "end", [r, a, c], s)
                            }
                        }
                        return r(t) ? t : (n || (n = ""), nrWrapper[a] = t, d(t, nrWrapper), nrWrapper)
                    }

                    function f(t, n, o, i) {
                        o || (o = "");
                        var a, s, c, f = "-" === o.charAt(0);
                        for (c = 0; c < n.length; c++) s = n[c], a = t[s], r(a) || (t[s] = e(a, f ? s + o : o, i, s))
                    }

                    function u(e, r, o) {
                        if (!c || n) {
                            var i = c;
                            c = !0;
                            try {
                                t.emit(e, r, o, n)
                            } catch (a) {
                                l([a, e, r, o])
                            }
                            c = i
                        }
                    }

                    function d(t, n) {
                        if (Object.defineProperty && Object.keys) try {
                            var e = Object.keys(t);
                            return e.forEach(function(e) {
                                Object.defineProperty(n, e, {
                                    get: function() {
                                        return t[e]
                                    },
                                    set: function(n) {
                                        return t[e] = n, n
                                    }
                                })
                            }), n
                        } catch (r) {
                            l([r])
                        }
                        for (var o in t) s.call(t, o) && (n[o] = t[o]);
                        return n
                    }

                    function l(n) {
                        try {
                            t.emit("internal-error", n)
                        } catch (e) {}
                    }
                    return t || (t = o), e.inPlace = f, e.flag = a, e
                }
            }, {}],
            ee: [function(t, n, e) {
                function r() {}

                function o(t) {
                    function n(t) {
                        return t && t instanceof r ? t : t ? c(t, s, i) : i()
                    }

                    function e(e, r, o, i) {
                        if (!l.aborted || i) {
                            t && t(e, r, o);
                            for (var a = n(o), s = h(e), c = s.length, f = 0; f < c; f++) s[f].apply(a, r);
                            var d = u[y[e]];
                            return d && d.push([g, e, r, a]), a
                        }
                    }

                    function p(t, n) {
                        v[t] = h(t).concat(n)
                    }

                    function h(t) {
                        return v[t] || []
                    }

                    function m(t) {
                        return d[t] = d[t] || o(e)
                    }

                    function w(t, n) {
                        f(t, function(t, e) {
                            n = n || "feature", y[e] = n, n in u || (u[n] = [])
                        })
                    }
                    var v = {},
                        y = {},
                        g = {
                            on: p,
                            emit: e,
                            get: m,
                            listeners: h,
                            context: n,
                            buffer: w,
                            abort: a,
                            aborted: !1
                        };
                    return g
                }

                function i() {
                    return new r
                }

                function a() {
                    (u.api || u.feature) && (l.aborted = !0, u = l.backlog = {})
                }
                var s = "nr@context",
                    c = t("gos"),
                    f = t(15),
                    u = {},
                    d = {},
                    l = n.exports = o();
                l.backlog = u
            }, {}],
            gos: [function(t, n, e) {
                function r(t, n, e) {
                    if (o.call(t, n)) return t[n];
                    var r = e();
                    if (Object.defineProperty && Object.keys) try {
                        return Object.defineProperty(t, n, {
                            value: r,
                            writable: !0,
                            enumerable: !1
                        }), r
                    } catch (i) {}
                    return t[n] = r, r
                }
                var o = Object.prototype.hasOwnProperty;
                n.exports = r
            }, {}],
            handle: [function(t, n, e) {
                function r(t, n, e, r) {
                    o.buffer([t], r), o.emit(t, n, e)
                }
                var o = t("ee").get("handle");
                n.exports = r, r.ee = o
            }, {}],
            id: [function(t, n, e) {
                function r(t) {
                    var n = typeof t;
                    return !t || "object" !== n && "function" !== n ? -1 : t === window ? 0 : a(t, i, function() {
                        return o++
                    })
                }
                var o = 1,
                    i = "nr@id",
                    a = t("gos");
                n.exports = r
            }, {}],
            loader: [function(t, n, e) {
                function r() {
                    if (!x++) {
                        var t = b.info = NREUM.info,
                            n = l.getElementsByTagName("script")[0];
                        if (setTimeout(u.abort, 3e4), !(t && t.licenseKey && t.applicationID && n)) return u.abort();
                        f(y, function(n, e) {
                            t[n] || (t[n] = e)
                        }), c("mark", ["onload", a() + b.offset], null, "api");
                        var e = l.createElement("script");
                        e.src = "https://" + t.agent, n.parentNode.insertBefore(e, n)
                    }
                }

                function o() {
                    "complete" === l.readyState && i()
                }

                function i() {
                    c("mark", ["domContent", a() + b.offset], null, "api")
                }

                function a() {
                    return E.exists && performance.now ? Math.round(performance.now()) : (s = Math.max((new Date).getTime(), s)) - b.offset
                }
                var s = (new Date).getTime(),
                    c = t("handle"),
                    f = t(15),
                    u = t("ee"),
                    d = window,
                    l = d.document,
                    p = "addEventListener",
                    h = "attachEvent",
                    m = d.XMLHttpRequest,
                    w = m && m.prototype;
                NREUM.o = {
                    ST: setTimeout,
                    SI: d.setImmediate,
                    CT: clearTimeout,
                    XHR: m,
                    REQ: d.Request,
                    EV: d.Event,
                    PR: d.Promise,
                    MO: d.MutationObserver
                };
                var v = "" + location,
                    y = {
                        beacon: "bam.nr-data.net",
                        errorBeacon: "bam.nr-data.net",
                        agent: "js-agent.newrelic.com/nr-1071.min.js"
                    },
                    g = m && w && w[p] && !/CriOS/.test(navigator.userAgent),
                    b = n.exports = {
                        offset: s,
                        now: a,
                        origin: v,
                        features: {},
                        xhrWrappable: g
                    };
                t(12), l[p] ? (l[p]("DOMContentLoaded", i, !1), d[p]("load", r, !1)) : (l[h]("onreadystatechange", o), d[h]("onload", r)), c("mark", ["firstbyte", s], null, "api");
                var x = 0,
                    E = t(17)
            }, {}]
        }, {}, ["loader", 2, 10, 4, 3]);
    </script>
    <meta content='app-id=502791949' name='apple-itunes-app'>
    <title>Vprep</title>
    <meta content='' name='description'>
    <meta content='width=device-width, initial-scale=1' name='viewport'>

    <link href='//fast.fonts.net/cssapi/b9eaba6c-4710-4005-8ce7-ab53bba4f423.css' rel='stylesheet' type='text/css'>
    <link href='css/style.css' rel='stylesheet'>
    <link href='css/animate.css' rel='stylesheet'>
    <!-- = stylesheet_link_tag "marketing/marketing_new" -->
    <meta content='p0UYCigDjAU3Wspw_TZjmsLp21JpXteI-qUNVqpjNGM' name='google-site-verification'>
    <link href='img/favicon.png' rel='icon' type='image/x-icon'>
    <script src='js/picturefill.js'></script>
    <style>
        @media (max-width: 768px) {
            .dropdown-lr h3 {
                color: #eee;
            }
            .dropdown-lr label {
                color: #eee;
            }

        }
    </style>
</head>

<body class='marketing is-home' >
<div class='wrapper' >
    <div class='sticky-wrapper'>
        <!-- header -->
        <header class='cap'>
            <div class='container' >

                <a href='#contactForm'>Request a Demo</a>
            </div>
        </header>
        <header class='header' role='banner'>
            <div class='container'>
                <p class='logo'>
                    <a href='#'>
                        <img alt='Involvio logo' src='img/logo1.png' height="50px">
                    </a>
                </p>

                <nav class='nav-left '>

                    <ul style="margin-top: 18px !important">
                        <li class='has-submenu '>
                            <a href='#'>Campus Solutions</a>
                            <ul>
                                <li class="">
                                    <a href='#' >Orientation App</a>
                                </li>
                                <li>
                                    <a href='#'>School Year App</a>
                                </li>
                                <li>
                                    <a href='#'>Attendance Tracking</a>
                                </li>
                                <li>
                                    <a href='#'>Admin Tools</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href='#'>Blog</a>
                        </li>
                        <li>
                            <a data-modal='contactUs' href='#'>Contact Us</a>
                        </li>
                    </ul>
                </nav>
                <nav>

                    <ul style="margin-top: 18px !important">
                        <li class='has-icon'>
                            <a class='admin-login' data-modal='dualLogin' href='#'>
                                Login
                                <i class='login-user-icon'></i>
                            </a>
                        </li>
                        <li class='last'>
                            <a class='btn ac' data-section="contact"  href='#contactForm'>Request a Demo</a>
                        </li>
                    </ul>
                </nav>
                <button class='btn toggle toggleNav'>
                    <i class='icon-menu'></i>
                </button>
            </div>
        </header>
        <script src='//platform.twitter.com/oct.js' type='text/javascript'></script>
        <script>
            twttr.conversion.trackPid('nv005', {
                tw_sale_amount: 0,
                tw_order_quantity: 0
            })
        </script>
        <noscript>
            <img alt='' height='1' src='https://analytics.twitter.com/i/adsct?txn_id=nv005&amp;p_id=Twitter&amp;tw_sale_amount=0&amp;tw_order_quantity=0' style='display:none;' width='1' >
            <img alt='' height='1' src='//t.co/i/adsct?txn_id=nv005&amp;p_id=Twitter&amp;tw_sale_amount=0&amp;tw_order_quantity=0' style='display:none;' width='1'>
        </noscript>

        <div class='hero' >
            <video autoplay='autoplay' loop='' poster='img/home-video-poster.jpg'>
                <source src='video/home-video.mp4' type='video/mp4' >
            </video>
            <!-- ctas -->
            <section class='header-ctas container' >
                <h1>
                    Engagement starts with involvement
                    <p>Involvio helps your college or university drive student engagement from orientation to graduation using the power of mobile.</p>
                </h1>
            </section>
            <button class='learn' id='learnMore'>Learn More</button>
        </div>
        <section class='engagement bg-grey' id='learn-more' >
            <header class='intro' >
                <div class='container' >
                    <h1>Everything you need to drive student engagement</h1>
                    <p>Involvio helps you centralize your programming and resources on mobile and gather critical data</p>
                    <ul class='steps'>
                        <li class='first'>
                            <img alt='' class='no-inline-svg icon wow fadeInDown' data-wow-delay='0.2s' data-wow-duration='0.4s' src='img/com.png' width="250px" height="180px">
                            <h2>Communication-Engagement platform</h2>
                            <p>Give your students a strong start</p>
                            <a class='btn mint lg' href='#'>Learn More</a>
                        </li>
                        <li class='middle'>
                            <img alt='' class='no-inline-svg icon wow fadeInDown' data-wow-delay='0.3s' data-wow-duration='0.4s' src='img/sc.png' width="250px" height="190px">
                            <h2>Assessments and Analysis</h2>

                            <p>Build an engaged community on mobile
                            </p>

                            <a class='btn mint lg' href='#'>Learn More</a>
                        </li>
                        <li class='last'>
                            <img alt='' class='no-inline-svg icon wow fadeInDown' data-wow-delay='0.4s' data-wow-duration='0.4s' src='img/adm.png' width="250px" height="180px">
                            <h2>Admin Tools</h2>
                            <p>Gather insight and increase your efficiency</p>

                            <a class='btn mint lg' href='#'>Learn More</a>
                        </li>
                    </ul>
                </div>
            </header>
        </section>
        <section class='platform'>
            <h1>Way more than just an "app"</h1>
            <ol>
                <li class='side side1'>
                    <div class='content'>
                        <h2>­Admin Panel</h2>
                        <ul>
                            <li>Powerful and easy to use workflows</li>
                            <li>Integration with your existing systems</li>
                            <li>­Driven by our suite of in-depth analytics</li>
                            <a class='btn gray lg' href='#'>Learn More</a>
                        </ul>
                    </div>
                    <span class='screen' data-alt='' data-picture=''>
<span data-src='img/screen-side1.png'></span>
            <span data-media='(-webkit-min-device-pixel-ratio: 2), (min-resolution: 175dpi)&#x000A;(-webkit-min-device-pixel-ratio: 2), (min-resolution: 175dpi), (min-width: 93.75em)' data-src='img/screen-side1@2x.png'></span>
            </span>
                    <noscript>
                        <img alt='' src='img/screen-side1.png'>
                    </noscript>
                </li>
                <li class='side side2'>
                    <div class='content'>
                        <h2>­Student Panel</h2>
                        <ul>
                            <li>Orientation App welcomes students to campus</li>
                            <li>School Year App keeps students engaged all year long</li>
                            <li>Comprehensive calendaring and communication tools</li>
                            <a class='btn gray lg' href='#'>Learn More</a>
                        </ul>
                    </div>
                    <span class='screen' data-alt='' data-picture=''>
<span data-src='img/screen-side2.png'></span>
            <span data-media='(-webkit-min-device-pixel-ratio: 2), (min-resolution: 175dpi)&#x000A;(-webkit-min-device-pixel-ratio: 2), (min-resolution: 175dpi), (min-width: 93.75em)' data-src='img/screen-side2@2x.png'></span>
            </span>
                    <noscript>
                        <img alt='' src='img/screen-side2.png'>
                    </noscript>
                </li>
            </ol>
        </section>
        <section class='illustrated-features bg-grey'>
            <div class='container'>
                <h1>Reach your students from orientation to graduation</h1>
                <p class='desc'>
                    Involvio meets your students when they arrive on campus for orientation and grows with them all the way through graduation. Using
                    <a class='b' href='./tour.html#fomo'>FOMO Fighter™</a>, it automatically makes personalized recommendations by analyzing their changing interests.
                </p>
                <ul class='fading-steps'>
                    <li>
                        <div class='home1 step1'>
                            <img alt='' class='ill' src='img/comm.png' width="200px" height="280px">
                        </div>
                        <h2>Communication</h2>
                        <p>During the craziness of Communication, Involvio quickly connects your students to campus and to each other.</p>
                    </li>
                    <li>
                        <div class='home2 step2'>
                            <img alt='' class='ill' src='img/col.png' width="200px" height="280px">
                        </div>
                        <h2>Collaboration</h2>
                        <p>The platform encourages continued involvement by putting every single event at your students' fingertips.</p>
                    </li>
                    <li>
                        <div class='step3'>
                            <img alt='' class='ill' src='img/g.png' width="200px" height="280px">
                        </div>
                        <h2>Graduation</h2>
                        <p>Involvio adapts to changing interests all the way through graduation and even allows you to engage alumni.</p>
                    </li>
                </ul>
            </div>
        </section>
        <section class='trusted-by dark'>
            <h1>Trusted By</h1>
            <div class='owl-carousel owl-theme'>
                <div class='item'>
                    <img alt='Drexel' src='img/school-drexel.svg'>
                </div>
                <div class='item'>
                    <img alt='RISD' src='img/school-risd.svg'>
                </div>
                <div class='item'>
                    <img alt='Johnson &amp;amp; Whales' src='img/school-johnson-whales.svg'>
                </div>
                <div class='item'>
                    <img alt='RIT' src='img/school-rit.svg'>
                </div>
                <div class='item'>
                    <img alt='Rowan' src='img/school-rowan.svg'>
                </div>
                <div class='item'>
                    <img alt='Texas A &amp;amp; M' src='img/school-taam.svg'>
                </div>
                <div class='item'>
                    <img alt='UMass' src='img/school-umass.svg'>
                </div>
                <div class='item'>
                    <img alt='Vanderbilt' src='img/school-vanderbilt.svg'>
                </div>
                <div class='item'>
                    <img alt='Washu' src='img/school-washu.svg'>
                </div>
                <div class='item'>
                    <img alt='Whittier' src='img/school-whittier.svg'>
                </div>
                <div class='item'>
                    <img alt='Yale' src='img/school-yale.svg'>
                </div>
                <div class='item'>
                    <img alt='Laurentian' src='img/school-laurentian.svg'>
                </div>
                <div class='item'>
                    <img alt='Drew' src='img/school-drew.svg'>
                </div>
                <div class='item'>
                    <img alt='Gordon' src='img/school-gordon.svg'>
                </div>
                <div class='item'>
                    <img alt='HPU' src='img/school-hpu.svg'>
                </div>
                <div class='item'>
                    <img alt='Lehigh' src='img/school-lehigh.svg'>
                </div>
                <div class='item'>
                    <img alt='Tiffin' src='img/school-tiffin.svg'>
                </div>
            </div>
        </section>
    </div>
    <!-- footer -->
    <footer class='footer'>
        <div class='top'>
            <img class='flag' src=''>
            <h1>Get Started</h1>
            <ul>
                <li>
                    <a class='btn scheduleDemoLink' href='#'>Request a Demo</a>
                </li>
                <li>
                    <a class='btn' href='#' id='intercom-activator' onclick='Smooch.open(); return false;'>Chat With Us</a>
                </li>
                <li>
                    <a class='btn' data-modal='contactUs' href='#'>Call Us</a>
                </li>
            </ul>
            <br><br>
            <div class="container">

                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <div class="form-area " data-section="contact">
                            <form role="form" id="contactForm" style="padding-top: 70px;">
                                <br style="clear:both">
                                <h1 style="margin-bottom: 25px; ">Contact Us</h1>
                                <div class="form-group ">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                                </div>
                                <br> <br>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
                                </div>
                                <br> <br>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="College Name" required>
                                </div>
                                <br><br>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Your Designation" required>
                                </div>
                                <br><br>
                                <div class="form-group">
                                    <textarea class="form-control" type="textarea" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>

                                </div>

                                <br><br>
                                <button type="button" id="submit" name="submit" class="btn btn-lg btn-info btn-fill">Submit</button>
                                <button type="button" id="submit" name="submit" class="btn btn-lg btn-info btn-fill text-right">Reset</button>
                            </form>
                        </div>
                    </div></div>
            </div>

        </div>

        <div class='bottom'>
            <div class='container'>
                <nav>

                    <ul>
                        <li class='m-only'>
                            <a href='#'>Home</a>
                        </li>
                        <li class='m-only'>
                            <a href='#'>School Year App</a>
                        </li>
                        <li class='m-only'>
                            <a href='#'>Admin Tools</a>
                        </li>
                        <li class='m-only'>
                            <a href='#'>Orientation App</a>
                        </li>
                        <li class='m-only'>
                            <a href='#'>Attendance</a>
                        </li>
                        <li class='m-only'>
                            <a href='#'>Blog</a>
                        </li>
                        <li>
                            <a href='#'>About</a>
                        </li>
                        <li>
                            <a href='#'>Terms</a>
                        </li>
                        <li>
                            <a href='#'>Privacy</a>
                        </li>
                        <li>
                            <a data-modal='contactUs' href='#'>Contact Us</a>
                        </li>
                        <li class='m-only'>
                            <a data-modal='dualLogin' href='#'>Login</a>
                        </li>
                    </ul>
                </nav>
                <ul class='social'>
                    <li>
                        <a class='btn' href='#' rel='noopener noreferrer' target='_blank'>
                            <i class='icon-facebook'></i>
                            <span>Facebook</span>
                        </a>
                    </li>
                    <li>
                        <a class='btn' href='#' rel='noopener noreferrer' target='_blank'>
                            <i class='icon-twitter'></i>
                            <span>Twitter</span>
                        </a>
                    </li>
                    <li class='instagram'>
                        <a class='btn' href='#' rel='noopener noreferrer' target='_blank'>
                            <svg id='insta' space='preserve' style='enable-background:new 0 0 48 48;' version='1.1' viewbox='0 0 48 48' x='0px' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns='http://www.w3.org/2000/svg' y='0px'>
                                <g>
                                    <path class='st0' d='M24,10.9c4.3,0,4.8,0,6.5,0.1c1.8,0.1,3.5,0.4,4.8,1.7s1.7,3,1.7,4.8c0.1,1.7,0.1,2.2,0.1,6.5s0,4.8-0.1,6.5&#x000A;		c-0.1,1.8-0.4,3.5-1.7,4.8s-3,1.7-4.8,1.7c-1.7,0.1-2.2,0.1-6.5,0.1s-4.8,0-6.5-0.1c-1.8-0.1-3.5-0.4-4.8-1.7s-1.7-3-1.7-4.8&#x000A;		c-0.1-1.7-0.1-2.2-0.1-6.5s0-4.8,0.1-6.5c0.1-1.8,0.4-3.5,1.7-4.8s3-1.7,4.8-1.7C19.2,10.9,19.7,10.9,24,10.9 M24,8&#x000A;		c-4.3,0-4.9,0-6.6,0.1c-2.6,0.1-4.9,0.8-6.7,2.6c-1.8,1.8-2.5,4.1-2.6,6.7C8,19.1,8,19.7,8,24s0,4.9,0.1,6.6&#x000A;		c0.1,2.6,0.8,4.9,2.6,6.7c1.8,1.8,4.1,2.5,6.7,2.6C19.1,40,19.7,40,24,40s4.9,0,6.6-0.1c2.6-0.1,4.9-0.8,6.7-2.6&#x000A;		c1.8-1.8,2.5-4.1,2.6-6.7C40,28.9,40,28.3,40,24s0-4.9-0.1-6.6c-0.1-2.6-0.8-4.9-2.6-6.7c-1.8-1.8-4.1-2.5-6.7-2.6&#x000A;		C28.9,8,28.3,8,24,8L24,8z'></path>
                                    <path class='st0' d='M24,15.8c-4.5,0-8.2,3.7-8.2,8.2s3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2S28.5,15.8,24,15.8z M24,29.3&#x000A;		c-2.9,0-5.3-2.4-5.3-5.3c0-2.9,2.4-5.3,5.3-5.3c2.9,0,5.3,2.4,5.3,5.3C29.3,26.9,26.9,29.3,24,29.3z'></path>
                                    <circle class='st0' cx='32.5' cy='15.5' r='1.9'></circle>
                                </g>
                            </svg>
                            <span>Instagram</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class='container legal'>
                <hr>
                <p>&copy; 2016 Involvio, LLC. Involvio and the Clockpin Logo are registered trademarks of Involvio LLC.</p>
                <p>Google, the Google logo, Android, the Android logo, Google Play, and the Google Play logo are trademarks of Google Inc.</p>
                <p>Apple, the Apple logo, iPhone, and iPod touch are trademarks of Apple Inc., registered in the U.S. and other countries. Apple Watch is a trademark of Apple Inc. App Store is a service mark of Apple Inc.</p>
            </div>
        </div>

    </footer>
    <div class='modal-container'>
        <div class='container'>
            <section class='modal contact-us' id='contactUs'>
                <h1>Contact us</h1>
                <ul>
                    <li>
                        <i class='icon-email'></i>
                        <p>
                            <a href='#'>hello@involvio.com</a>
                        </p>
                    </li>
                    <li>
                        <i class='icon-phone'></i>
                        <p>(212) 729-6670</p>
                    </li>
                    <li>
                        <i class='icon-location'></i>
                        <p>
                            261 Madison Ave
                            <br> 9th Floor
                            <br> New York, NY 10016
                        </p>
                    </li>
                    <li>
                        <i class='icon-facebook'></i>
                        <p>
                            <a href='#' rel='noopener noreferrer' target='_blank'>Involvio on Facebook</a>
                        </p>
                    </li>
                    <li>
                        <i class='icon-twitter'></i>
                        <p>
                            <a href='#' rel='noopener noreferrer' target='_blank'>Involvio on Twitter</a>
                        </p>
                    </li>
                </ul>
                <div class='right'>
                    <p>Like what you see?</p>
                    <a class='btn lg solid-green scheduleDemoLink' href='#'>Request a Demo</a>
                </div>
            </section>
            <section class='modal schedule' id='scheduleDemo'>
                <h1>Schedule a Demo</h1>
                <form accept-charset='UTF-8' action='#' autocomplete='off' class='wufoo topLabel page' enctype='multipart/form-data' id='form122' method='post' name='form122' novalidate=''>
                    <div class='row'>
                        <div class='input half'>
                            <input class='field text fn' id='Field1' name='Field1' required='' size='8' tabindex='1' type='text' value=''>
                            <label for='Field1'>First Name</label>
                        </div>
                        <div class='input half'>
                            <input class='field text ln' id='Field2' name='Field2' required='' size='14' tabindex='2' type='text' value=''>
                            <label for='Field2'>Last Name</label>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='input half'>
                            <label class='desc' for='Field3' id='title3'>
                                Email
                                <span class='req' id='req_3'>*</span>
                            </label>
                            <input class='field text medium' data-validation='email' id='Field3' maxlength='255' name='Field3' spellcheck='false' tabindex='3' type='email' value=''>
                        </div>
                        <div class='input half'>
                            <input class='three' id='Field4' maxlength='3' name='Field4' size='3' tabindex='4' type='tel' value=''>
                            <input class='three' id='Field4' maxlength='3' name='Field4-1' size='3' tabindex='5' type='tel' value=''>
                            <input class='four' data-validation='number' id='Field4' maxlength='4' name='Field4-2' size='4' tabindex='6' type='tel' value=''>
                            <label for=''>Phone Number</label>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='input half has-search'>
                            <input class='field text medium searchSchools' data-validation='required' id='Field5' maxlength='255' name='Field5' onkeyup='' tabindex='7' type='text' value=''>
                            <label class='desc' for='Field5' id='title5'>
                                School/Organization
                                <span class='req' id='req_5'>*</span>
                            </label>
                            <i class='icon-search'></i>
                        </div>
                        <div class='input half'>
                            <label class='desc' for='Field6' id='title6'>
                                Role on Campus
                                <span class='req' id='req_6'>*</span>
                            </label>
                            <div>
                                <input class='field text medium' data-validation='required' id='Field6' maxlength='255' name='Field6' onkeyup='' tabindex='8' type='text' value=''>
                            </div>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='input'>
                            <textarea class='field textarea medium' cols='50' data-validation='required' id='Field8' name='Field8' onkeyup='' rows='10' spellcheck='true' tabindex='10'></textarea>
                            <label class='desc' for='Field8' id='title8'>
                                What are you interested in accomplishing with Involvio?
                                <span class='req' id='req_8'>*</span>
                            </label>
                        </div>
                    </div>
                    <div class='buttons'>
                        <div>
                            <input class='btTxt submit btn lg solid-green' id='saveForm' name='saveForm' type='submit' value='Submit'>
                            <button class='closeModal btn lg dull'>Cancel</button>
                        </div>
                    </div>
                    <li class='wufoo-idstamp'>
                        <label for='comment'>Do Not Fill This Out</label>
                        <textarea cols='1' id='comment' name='comment' rows='1'></textarea>
                        <input id='idstamp' name='idstamp' type='hidden' value='VkpWZ9xsUiTFhq5QblWkD0WS8vbSW7CfY0+O3+H6qVI='>
                    </li>
                </form>
            </section>
            <section class='modal sm schedule' id='scheduleDemoSuccess'>
                <h1>Awesome!</h1>
                <p>
                    We're thrilled that you're excited to learn more about Involvio. Our team will be reaching out to you shortly!
                </p>
            </section>

            <section class='modal schedule' id='campusFounder'>
                <h1>Campus founder</h1>
                <form accept-charset='UTF-8' action='#' autocomplete='off' class='form' data-validate='' enctype='multipart/form-data' id='form120' method='post' name='form120'>
                    <div class='row'>
                        <div class='input half'>
                            <input data-validation='required' id='Field1' name='Field1' type='text' value=''>
                            <label for=''>First Name</label>
                        </div>
                        <div class='input half'>
                            <input data-validation='required' id='Field2' name='Field2' type='text' value=''>
                            <label for=''>Last Name</label>
                        </div>
                    </div>
                    <div class='input'>
                        <input data-validation='email' id='Field3' name='Field3' spellcheck='false' type='email' value=''>
                        <label for=''>Email</label>
                    </div>
                    <div class='row'>
                        <div class='input half'>
                            <input class='three' id='Field4' maxlength='3' name='Field4' size='3' type='tel' value=''>
                            <input class='three' id='Field4' maxlength='3' name='Field4-1' size='3' type='tel' value=''>
                            <input class='four' data-validation='number' id='Field4' maxlength='4' name='Field4-2' size='4' type='tel' value=''>
                            <label for=''>Phone Number</label>
                        </div>
                        <div class='input half'>
                            <select class='is-dropdown' data-validation='required' id='Field5' name='Field5'>
                                <option></option>
                                <option value='Freshman'>Freshman</option>
                                <option value='Sophomore'>Sophomore</option>
                                <option value='Junior'>Junior</option>
                                <option value='Senior'>Senior</option>
                                <option value='Grad Student'>Grad Student</option>
                            </select>
                            <label for=''>Year in School</label>
                        </div>
                    </div>
                    <div class='input'>
                        <input data-validation='required' id='Field6' maxlength='255' name='Field6' type='text' value=''>
                        <label for=''>Activities you're involved in</label>
                    </div>
                    <div class='input'>
                        <input data-validation='required' id='Field7' maxlength='255' name='Field7' type='text' value=''>
                        <label for=''>Describe yourself</label>
                    </div>
                    <div class='input'>
                        <input data-validation='required' id='Field8' maxlength='255' name='Field8' type='text' value=''>
                        <label for=''>How did you hear about Involvio?</label>
                    </div>
                    <div class='input'>
                        <textarea data-validation='required' id='Field10' name='Field10' rows='4' spellcheck='true'></textarea>
                        <label for=''>Tell us why you would be a great campus founder</label>
                    </div>
                    <div class='input'>
                        <input class='field file' data-validation-max-size='1M' data-validation='size' id='Field11' name='Field11' size='12' type='file'>
                        <label for=''>Upload Your Resume</label>
                    </div>
                    <div style='display: none;'>
                        <textarea cols='1' id='comment' name='comment' rows='1'></textarea>
                        <input id='idstamp' name='idstamp' type='hidden' value='/SsEv5KWtbBpG1M7Z5EqDpVa7iEckTT1SQWDM8t1JXE='>
                    </div>
                    <div class='row'>
                        <button class='btn lg solid-green' id='saveWufooForm' name='saveForm' type='submit'>Submit</button>
                        <button class='closeModal btn lg dull'>Cancel</button>
                    </div>
                </form>
            </section>
            <section class='modal sm' id='forgotPassword'>
                <h1>Forgot password</h1>
                <div class='msg hide'></div>
                <form accept-charset="UTF-8" action="/users/password" class="simple_form user" method="post" novalidate="novalidate">
                    <div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="ShknBUUlJ6hnatOyozCNgYwuYk0Q0NUgExtingL2kJM=" /></div>
                    <div class='input'>
                        <input autofocus="autofocus" class="string email required" id="user_email" name="user[email]" required="required" size="50" type="text" />
                        <label for=''>Email</label>
                    </div>
                    <div class='row btn-half'>
                        <button class='btn lg solid-green' type='submit'>Reset Password</button>
                        <button class='closeModal btn lg dull'>Cancel</button>
                    </div>
                </form>

            </section>
            <section class='modal sm sign-up' id='signUpSuccess'>
                <h1>Success!</h1>
                <p>You've successfully signed up for admin access. Please ask your school's Involvio administrator to approve your account.</p>
            </section>
            <section class='modal sm' id='downloadApp'>
                <h1>Download the app</h1>
                <p>
                    <a class='badge apple' href='#'>
                        <img alt='' class='wow fadeInDown' data-wow-delay='0.4s' data-wow-duration='0.4s' src='img/app-store-badge.svg'>
                    </a>
                    <a class='badge' href='/webapp'>
                        <img alt='' class='wow fadeInDown' data-wow-delay='0.4s' data-wow-duration='0.4s' src='img/download-online-badge.svg'>
                    </a>
                    <a class='badge google' href='#'>
                        <img alt='' class='wow fadeInDown' data-wow-delay='0.4s' data-wow-duration='0.4s' src='img/google-play-badge.png'>
                    </a>
                </p>
            </section>
            <link href="css/marketing_home.css" media="screen" rel="stylesheet" type="text/css" />
            <section class='modal schedule' id='campusFounder'>
                <h1>Campus founder</h1>
                <form accept-charset='UTF-8' action='#' autocomplete='off' class='form' data-validate='' enctype='multipart/form-data' id='form120' method='post' name='form120'>
                    <div class='row'>
                        <div class='input half'>
                            <input data-validation='required' id='Field1' name='Field1' type='text' value=''>
                            <label for=''>First Name</label>
                        </div>
                        <div class='input half'>
                            <input data-validation='required' id='Field2' name='Field2' type='text' value=''>
                            <label for=''>Last Name</label>
                        </div>
                    </div>
                    <div class='input'>
                        <input data-validation='email' id='Field3' name='Field3' spellcheck='false' type='email' value=''>
                        <label for=''>Email</label>
                    </div>
                    <div class='row'>
                        <div class='input half'>
                            <input class='three' id='Field4' maxlength='3' name='Field4' size='3' type='tel' value=''>
                            <input class='three' id='Field4' maxlength='3' name='Field4-1' size='3' type='tel' value=''>
                            <input class='four' data-validation='number' id='Field4' maxlength='4' name='Field4-2' size='4' type='tel' value=''>
                            <label for=''>Phone Number</label>
                        </div>
                        <div class='input half'>
                            <select class='is-dropdown' data-validation='required' id='Field5' name='Field5'>
                                <option></option>
                                <option value='Freshman'>Freshman</option>
                                <option value='Sophomore'>Sophomore</option>
                                <option value='Junior'>Junior</option>
                                <option value='Senior'>Senior</option>
                                <option value='Grad Student'>Grad Student</option>
                            </select>
                            <label for=''>Year in School</label>
                        </div>
                    </div>
                    <div class='input'>
                        <input data-validation='required' id='Field6' maxlength='255' name='Field6' type='text' value=''>
                        <label for=''>Activities you're involved in</label>
                    </div>
                    <div class='input'>
                        <input data-validation='required' id='Field7' maxlength='255' name='Field7' type='text' value=''>
                        <label for=''>Describe yourself</label>
                    </div>
                    <div class='input'>
                        <input data-validation='required' id='Field8' maxlength='255' name='Field8' type='text' value=''>
                        <label for=''>How did you hear about Involvio?</label>
                    </div>
                    <div class='input'>
                        <textarea data-validation='required' id='Field10' name='Field10' rows='4' spellcheck='true'></textarea>
                        <label for=''>Tell us why you would be a great campus founder</label>
                    </div>
                    <div class='input'>
                        <input class='field file' data-validation-max-size='1M' data-validation='size' id='Field11' name='Field11' size='12' type='file'>
                        <label for=''>Upload Your Resume</label>
                    </div>
                    <div style='display: none;'>
                        <textarea cols='1' id='comment' name='comment' rows='1'></textarea>
                        <input id='idstamp' name='idstamp' type='hidden' value='/SsEv5KWtbBpG1M7Z5EqDpVa7iEckTT1SQWDM8t1JXE='>
                    </div>
                    <div class='row'>
                        <button class='btn lg solid-green' id='saveWufooForm' name='saveForm' type='submit'>Submit</button>
                        <button class='closeModal btn lg dull'>Cancel</button>
                    </div>
                </form>
            </section>
            <section class='modal sm' id='changePassword'>
                <h1>Password Reset</h1>
                <form accept-charset="UTF-8" action="/users/password" class="simple_form user" id="password_reset_form" method="post" novalidate="novalidate">
                    <div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="_method" type="hidden" value="put" /><input name="authenticity_token" type="hidden" value="ShknBUUlJ6hnatOyozCNgYwuYk0Q0NUgExtingL2kJM=" /></div>
                    <div class='msg hide'></div>
                    <div class='input'>
                        <div class="control-group hidden">
                            <div class="controls"><input class="hidden" id="user_reset_password_token" name="user[reset_password_token]" type="hidden" /></div>
                        </div>
                    </div>
                    <div class='input'>
                        <input autofocus="autofocus" class="password required" id="user_password" label="New password" name="user[password]" required="required" size="50" type="password" />
                        <label for=''>New Password</label>
                    </div>
                    <div class='input'>
                        <input class="password required" id="user_password_confirmation" name="user[password_confirmation]" required="required" size="50" type="password" />
                        <label for=''>Re-enter Password</label>
                    </div>
                    <div class='row btn-half'>
                        <button class='btn lg solid-green' type='submit'>Reset Password</button>
                        <button class='closeModal btn lg dull'>Cancel</button>
                    </div>
                </form>

            </section>
            <section class='modal sm unsubscribe' id='unsubscribeSuccess'>
                <h1>Unsubscribed</h1>
                <p>You're unsubscribed from all emails.</p>
            </section>
            <section class='modal sm schedule' id='emailConfirmSuccess'>
                <h1>Success!</h1>
                <p>
                    You've verified your email address!
                </p>
            </section>
            <section class='modal sm schedule' id='passwordChanged'>
                <h1>Success!</h1>
                <p>
                    Your password has been changed, you can now log in.
                </p>
            </section>
            <section class='modal sm schedule' id='passwordInstructions'>
                <h1>Check your email</h1>
                <p>
                    We're sending you an email with information about your password reset.
                </p>
            </section>
            <section class='modal sm schedule' id='noVerified'>
                <h1>Your account hasn't been verified yet</h1>
                <p>
                    Please verify your email address. Click
                    <a href="/resend_confirm">here</a> to resend verification.
                </p>
            </section>
            <section class='modal sm schedule' id='inactive'>
                <h1>Your account has been suspended</h1>
                <p>
                    Please contact your school administrators for further information.
                </p>
            </section>
            <section class='modal sm schedule' id='claimAdminAccountSuccess'>
                <h1>Success!</h1>
                <p>
                    You've claimed your admin account! You are able to
                    <a class='adminLoginLink' href='#'>sign in</a> now
                </p>
            </section>
            <section class='modal sm' id='adminLogin'>
                <h1>Admin login</h1>
                <div class='msg hide'>
                    This password is incorrect
                </div>
                <div class='login-container'></div>
                <div class='rule'></div>
                <p>
                    Forgot your password?
                    <a data-modal='forgotPassword' href='#'>Reset password</a>
                </p>
                <p style='margin-top:19px;'>
                    Sign in with school's authentication?
                    <a data-modal='schoolAuthentication' href='#'>Choose your school</a>
                </p>
                <p style='margin-top:19px;'>
                    Don't have an account?
                    <a data-modal='signUp' href='#'>Sign up</a>
                </p>
                <p style='margin-top:19px;'>
                    Had an account last year?
                    <a data-placement='bottom' data-toggle='tooltip' href='tel://2127296670' title='(212) 729-6670'>
                        Call us at (212) 729-6670
                    </a>
                </p>
            </section>
            <section class='modal' id='claimAdminAccount'>
                <h1>Claim Admin Account</h1>
                <div class='claim-container'></div>
            </section>
            <button class='closeModal close-btn'>
                <i class='icon-x'></i>
            </button>
            <section class='modal header-ctas lg' id='dualLogin'>
                <h1>Choose Your Login</h1>
                <!-- admins -->
                <a class='adminLoginLink cta' href='#'>
                    <h1>Admin Tools</h1>
                    <img alt='' class='ill' src='img/ill-cta-admin.svg'>
                </a>
                <!-- students -->
                <a class='cta' data-modal='downloadApp' href=''>
                    <h1>App</h1>
                    <img alt='' class='ill' src='img/ill-cta-student.svg'>
                </a>
            </section>
            <button class='closeModal close-btn'>
                <i class='icon-x'></i>
            </button>

            <section class='modal sm sign-up' id='signUp'>
                <h1>Sign up</h1>
                <div class='msg hide'>
                    ok
                </div>
                <form accept-charset="UTF-8" action="#" class="simple_form user" enctype="multipart/form-data" method="post" novalidate="novalidate">
                    <div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="ShknBUUlJ6hnatOyozCNgYwuYk0Q0NUgExtingL2kJM=" /></div>
                    <div class='row'>
                        <div class='input half'>
                            <input id="user_name_first" name="user[name][first]" required="required" type="text" />
                            <label for='user_name_first'>First Name</label>
                        </div>
                        <div class='input half'>
                            <input id="user_name_last" name="user[name][last]" required="required" type="text" />
                            <label for='user_name_last'>Last Name</label>
                        </div>
                    </div>
                    <div class='input'>
                        <input class='searchSchoolsForSignup' name='school_name' required type='text'>
                        <label for=''>School Name</label>
                    </div>
                    <div class='input'>
                        <input class="string email required" id="user_email" name="user[email]" required="required" size="50" type="text" />
                        <label for='user_email'>Email</label>
                    </div>
                    <div class='input'>
                        <div class='field-wrap date'>
                            <div class='pickdate-container'>
                                <input class='date' name='user[birthday]' required type='text' value='01/01/1981'>
                                <label for='user_birthday'>Birthday</label>
                            </div>
                        </div>
                    </div>
                    <div class='input'>
                        <input id="user_profile_image" name="user[profile_image]" required="required" type="file" />
                        <label for=''>Profile Image</label>
                    </div>
                    <div class='input'>
                        <input class="password required" id="user_password" name="user[password]" required="required" size="50" type="password" />
                        <label for=''>Password</label>
                    </div>
                    <div class='input'>
                        <input class="password required" id="user_password_confirmation" name="user[password_confirmation]" required="required" size="50" type="password" />
                        <label for=''>Re-enter Password</label>
                    </div>
                    <div class='row btn-half'>
                        <button class='btn lg solid-green'>Sign Up</button>
                        <button class='closeModal btn lg dull'>Cancel</button>
                    </div>
                    <p>
                        Already have an account?
                        <a class='adminLoginLink' href='#'>Sign in</a>
                    </p>
                </form>

            </section>
            <script src="js/jquery.js" type="text/javascript"></script>
            <script src="js/typeahead.min.js" type="text/javascript"></script>
            <script>
                function validateAdminSignup() {
                    if ($("#facebook_sign_up_form #school_name").val() == '') {
                        $(".msg").html("You must choose a school before you sign up");
                        $(".msg").addClass("is-error");
                        $(".msg").show();
                        return false;
                    }
                };

                $(function() {
                    if (document.signupSchools == undefined) {
                        $.ajax({
                            url: '/all_schools',
                            type: 'GET',
                            success: function(data) {
                                document.signupSchools = data;

                                $(".searchSchoolsForSignup").typeahead({
                                    minLength: 1
                                }, {
                                    name: "schools",
                                    displayKey: "value",
                                    source: involvio.substringMatcher(document.signupSchools)
                                });
                            }
                        })
                    }

                    $('body').find('.pickdate-container input').each(function() {
                        var $this = $(this);
                        var data = {};
                        $.each($this.data(), function(key, value) {
                            key = key.replace(/-([a-z])/g, function(g) {
                                return g[1].toUpperCase();
                            });
                            data[key] = value;
                        });
                        var options = $.extend({}, {
                            formatSubmit: 'mm/dd/yyyy',
                            format: 'mm/dd/yyyy',
                            hiddenName: true,
                            selectMonths: true,
                            selectYears: 70
                        }, data);
                        $(this).pickadate(options);
                    });
                })
            </script>

            <section class='modal sm sign-up' id='schoolAuthentication'>
                <h1>Choose school</h1>
                <div class='msg hide'>
                    This school does not support authentication
                </div>
                <div class='form'>
                    <div class='input'>
                        <input class='searchSchoolsForSignup' name='school_name' required type='text'>
                        <label for=''>School Name</label>
                    </div>
                    <div class='row btn-half'>
                        <button class='btn lg solid-green' id='loadAuthMethods'>Find Authentication</button>
                        <button class='closeModal btn lg dull'>Cancel</button>
                    </div>
                    <div class='input' id='schoolAuthenticationMethods'></div>
                    <p>
                        Already have an account?
                        <a class='adminLoginLink' href='#'>Sign in</a>
                    </p>
                </div>
            </section>
            <script>
                $(function() {
                    $(document).on('click', '#loadAuthMethods', function() {
                        school_name = $(this).closest('.form').find('input[name=school_name]').val()
                        $.ajax({
                            url: '/school_authentication_sessions',
                            type: 'GET',
                            data: {
                                school_name: school_name
                            },
                            success: function(data) {
                                $('#schoolAuthenticationMethods').html(data)
                            }
                        })
                        return false;
                    })
                })
            </script>


            <button class='closeModal close-btn'>
                <i class='icon-x'></i>
            </button>
        </div>
    </div>
    <script src="js/marketing.js" type="text/javascript"></script>
    <div class="modal fade" id="signInModal" tabindex="-1" role="dialog" aria-labelledby="signInModalTitle" aria-hidden="true" style="height=80%;margin-top: 2%;">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="margin-top:12%;
    height: 100%;">
                <div class="modal-header">
                    <h5 class="modal-title" id="signInModalTitle">Sign In</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-lg-12">
                        <form name="loginForm"id="mob-ajax-login-form" action="http://test.vprep.in/login/checkLogin" accept-charset="utf-8" method="post"  role="form" autocomplete="off">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" name="username" id="mobUsername" tabindex="1" class="form-control" placeholder="Username" value="" autocomplete="off">
                                <span type="hidden" style="color:red" id="mobUserBlank">username should not be blank</span>
                            </div>

                            <div class="form-group">
                                <label for="mobRegpassword">Password</label>

                                <input id="mobRegpassword" type="password" name="password"  tabindex="2" class="form-control form-input" placeholder="Password" style="width: 100%;">
                                <span id="mobInCredId" style="color:red;">invalid username/password entered</span>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <input type="hidden" name="signin" id="mobLoginId" tabindex="4" class="form-control btn btn-success" value="Sign In form">
                                        <input type=button name="signin2" id="mobShowLoginId" tabindex="4" class="form-control btn btn-success" value="Sign In">
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- build:js -->
<script src="js/marketing_home.js" type="text/javascript"></script>
<!-- endbuild -->
<script>
    $(document).ready(function(e) {
        if ($("#scheduleDemo form").length > 0) {
            $("#scheduleDemo form input").on("change", function(e) {
                localStorage[$(this).attr("name")] = $(this).val();
            });

            $("#scheduleDemo form input").on("keyup", function(e) {
                localStorage[$(this).attr("name")] = $(this).val();
            });

            $("#schedule_link").attr("href", "#" + localStorage.Field1 + "&LAST=" + localStorage.Field2 + "&EMAIL=" + localStorage.Field3 + "&SCHOOL=" + localStorage.Field5 + "&PHONE=" + localStorage.Field4 + localStorage["Field4-1"] + localStorage[
                "Field4-2"]);
        }
    });
</script>
</body>

</html>