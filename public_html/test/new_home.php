<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]> ><! <![endif]-->
<html class='no-js' xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
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
    <link href='library/css/style.css' rel='stylesheet'>
    <link href='library/css/animate.css' rel='stylesheet'>
    <script type='text/javascript' src='http://vprep.in/wp-content/themes/Divi/includes/builder/scripts/jquery.mobile.custom.min.js?ver=3.0.40'></script>
    <!-- = stylesheet_link_tag "marketing/marketing_new" -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <meta content='p0UYCigDjAU3Wspw_TZjmsLp21JpXteI-qUNVqpjNGM' name='google-site-verification'>
    <link href='library/img/favicon.png' rel='icon' type='image/x-icon'>
    <script src='library/js/picturefill.js'></script>
    <style type="text/css" id="wp-custom-css">
        #mobLiSignUp {display: none}
        #mobLiSignIn {display: none}
        #main-footer {
            position: fixed;
            width: 100%;
            bottom: 0;
            z-index: 9999;
        }
        #main-content {
            margin-bottom: 45px;
        }
        .current-menu-item
        {
            background-color: #57ad22;
        }
        #common-nav li.current-menu-item > a
        {
            color:white;
        }
        #common-nav li.menu-item
        {
            padding-top: 10px;
            padding-left: 20px;
            padding-right: 20px;
        }
        #common-nav li.menu-item:hover
        {
            background-color: #57ad22;
            color:white;
        }
        #common-nav li.menu-item:hover > a
        {
            color:white;
        }
        .fa {
            font-size: 50px;
        }
        #sign-up-menu li.menu-item:hover
        {
            background-color: #57ad22;
            color:white;
        }
        #sign-up-menu li.menu-item:hover > a
        {
            color:white;
        }
        .navbar-inverse .navbar-nav>.open>a, .navbar-inverse .navbar-nav>.open>a:focus, .navbar-inverse .navbar-nav>.open>a:hover{
            background-color: #57ad22;
        }

        .fa {
            font-size: 50px;
        }
        .nav>li>a:focus, .nav>li>a:hover {
            background-color: transparent;
        }
    </style>
    <script type="text/javascript">
        document.documentElement.className = 'js';


        $(document).ready(function() {
            $('#wrapper').hide();
            jQuery(document).on('click', '#freeId', function (e) {
                $('#wrapper').show();
            });
            $("#tryId").click(function(e){
                $("#sign-up-menu").css("opacity", "1");
                setTimeout(function() {  $("#clickSignUp").addClass("et-show-dropdown et-hover open"); }, 100);

            });
            $("#mobSignUp").click(function(e){

                $(".navbar-collapse, .collapse").removeClass('in');

            });
            showSlides();
            getCollegeList();
            $("#collegeError").hide();
            $('#otpId').hide();
            $('#register-submit').hide();
            $('#buttonOTP').hide();
            $('#credId').hide();
            $('#emailError').hide();
            $('#phoneError').hide();
            $('#userBlank').hide();
            $('#otpError').hide();
            $('#userNameError').hide();
            $('#emailError2').hide();
            $('#phoneError2').hide();
            $('#forgotMobileError').hide();
            $('#secondForgot').hide();
            $('#thirdForgot').hide();
            $('#forgotOTPError').hide();
            $('#forgotPasswordError').hide();
            $("#mobCollegeError").hide();
            $('#mobOtpId').hide();
            $('#mobRegister-submit').hide();
            $('#mobButtonOTP').hide();
            $('#mobCredId').hide();
            $('#mobEmailError').hide();
            $('#mobPhoneError').hide();
            $('#mobUserBlank').hide();
            $('#mobOtpError').hide();
            $('#mobUserNameError').hide();
            $('#mobEmailError2').hide();
            $('#mobPhoneError2').hide();
            $('#mobForgotMobileError').hide();
            $('#mobSecondForgot').hide();
            $('#mobThirdForgot').hide();
            $('#mobForgotOTPError').hide();
            $('#mobForgotPasswordError').hide();
            $(".button-sign").click(function(e) {
                $("body").append('<div class="overlay"></div>');
                $(".popup").show();

                $(".close").click(function(e) {
                    $(".popup, .overlay").hide();
                });
            });


        });
    </script>
    <script src="library/js/jquery.noty.packaged.min.js"></script>
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
    <script>
        jQuery(document).on('click', '#sign-in-id', function (e) {
            $('#showSignUp').hide();
            if($('#showLogId').is(':visible')){
                $('#showLogId').hide();
            } else {
                $('#showLogId').show();
            }

        });

        jQuery(document).on('click','#sign-up-id',function (e) {
            $('#showLogId').hide();
            if($('#showSignUp').is(':visible')){
                $('#showSignUp').hide();
            } else {
                $('#showSignUp').show();
            }
        });

    </script>
    <script type="text/javascript">
        function loadColleges(list) {
            var substringMatcher = function(strs) {
                return function findMatches(q, cb) {
                    var matches, substringRegex;

                    // an array that will be populated with substring matches
                    matches = [];

                    // regex used to determine if a string contains the substring `q`
                    substrRegex = new RegExp(q, 'i');

                    // iterate through the pool of strings and for any string that
                    // contains the substring `q`, add it to the `matches` array
                    $.each(strs, function(i, str) {
                        if (substrRegex.test(str.college_name)) {
                            matches.push(str);
                        }
                    });

                    cb(matches);
                };
            };

            $('#the-basics .typeahead').typeahead({
                    hint: true,
                    highlight: true,
                    minLength: 1
                },
                {
                    name: 'result',
                    displayKey:'college_name',
                    limit: 10000,
                    source: substringMatcher(list)

                }).bind("typeahead:selected", function(obj, datum, name) {
                console.log("setting id: "+datum.id)
                $("#collegeRefId").val(datum.id);
                $("#mobCollegeRefId").val(datum.id);
            });;

        };
        function getCollegeList() {
            $.ajax({
                url: "http://test.vprep.in/educational/get_engineering_college",
                method: "GET",
                success: function(data) {
                    var collegeList= JSON.parse(data);
                    loadColleges(collegeList);

                }});
        };




    </script>
    <script type="text/javascript">
        var otp;
        var emailStatus;
        var userNameStatus;
        jQuery(document).on('click', '#testId', function (e) {
            userNameCheck();
            emailCheck();
            var emailId = $('#email').val();
            var collegeId = $('#collegeRefId').val();
            if(!(collegeId != null && collegeId.length >0)){
                showMessage("Please select college from dropdown","error");
            }
            if((!isNaN($('#phone').val())) && ($('#phone').val().length === 10) && validateEmail(emailId)){
                $('#phoneError').hide();
                $('#emailError').hide();
                validateSignMobile($('#phone').val());
            } else {
                if(!validateEmail(emailId)){
                    showMessage("Please enter valid email Id","error");
                } else {
                    $('#emailError').hide();
                    showMessage("Please enter valid phone number","error");
                }
            }

        });
        var sendOTP = function () {
            $('#testId').hide();
            var filterVO = {};
            filterVO.name = $('#fullName').val();
            filterVO.phone = '91'+$('#phone').val();
            $('#otpId').show();
            $('#buttonOTP').show();
            $.ajax({
                url: "http://test.vprep.in/otp/sendotp.php?phone="+filterVO.phone,
                method: "GET",
                success: function(data) {
                    n=data.search("Your Vprep OTP is:");
                    var otp = data.substring(n+19,n+23);
                    $("#otp_input").val(otp);
                    if(emailStatus=='false'){
                        showMessage("Email id already exists. please try with other email id","error");
                    }
                    if(userNameStatus == 'false'){
                        showMessage("username already exists. please try with other username","error");
                    }

                }});
        };

        var userNameCheck = function () {

            var username = $('#upusername').val();
            var link = 'http://test.vprep.in/frontend/validate_username2/' + username;
            jQuery.ajax({
                type: "GET",
                url: link,
                success: function (data) {
                    userNameStatus = data;
                }
            });
        }

        var emailCheck = function () {
            var email = $('#email').val();
            var link = 'http://test.vprep.in/frontend/email_check/?email=' + email;
            jQuery.ajax({
                type: "GET",
                url: encodeURI(link),
                success: function (data) {
                    emailStatus = data;
                }
            });

        }

        jQuery(document).on('click', '#buttonOTP', function (e) {
            var inputOtp = $('#otpId').val();
            var emailId = $('#email').val();
            var phoneNum = $('#phone').val();
            var collegeId = $('#collegeRefId').val();
            var otp_received= $("#otp_input").val();
            if (inputOtp == otp_received) {
                $('retryOTP').hide();
                if (!validateEmail(emailId)) {

                    showMessage("Please enter valid email Id","error");
                }

                if (validateEmail(emailId)) {


                    $('#buttonOTP').show();
                    $('#otpError').hide();
                    $('#emailError').hide();

                    if ((emailStatus == 'true') && (userNameStatus == 'true') && (collegeId != null && collegeId.length >0)) {
                        $("#collegeError").hide();
                        $('#ajax-register-form').submit();
                    }

                }
            } else {
                $('#retryOTP').show();
                showMessage("OTP did not match. Try Again","error");
            }
        });

        jQuery(document).on('click','#retryOTP', function(e){
            sendOTP();
        });

        jQuery(document).on('click', '#showLoginId', function (e) {
            var cred = {};
            cred.username = $('#username').val();
            cred.password = $("#regpassword", $("#ajax-login-form")).val();
            var link = 'http://test.vprep.in/frontend/login_validate?username=' + cred.username + '&userpass=' + cred.password ;
            if(cred.username==""){

                showMessage("username should not be blank","error");
            } else {

                jQuery.ajax({
                    type: "GET",
                    url: link,
                    success: function (data) {
                        if(data==='success'){
                            $( "#ajax-login-form" ).submit();
                        } else {
                            showMessage("invalid username/password entered","error");
                        }
                    }
                });
            }
        });


        function validateEmail(sEmail) {
            var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
            if (filter.test(sEmail)) {
                return true;
            }
            else {
                return false;
            }
        }


        jQuery(document).on('click', '#nextId', function (e) {
            var phone = $('#forgotMobile').val();
            validateRegisteredMobile(phone);

        });

        jQuery(document).on('click',"#nextId2", function(e){
            var enterOTP = $('#forgotOTP').val();
            var receiveOTP = $("#otp_input").val();
            if(enterOTP == receiveOTP){
                $("#secondForgot").hide();
                $('#thirdForgot').show();
            } else {
                $('#forgotOTPError').show();
            }
        });

        jQuery(document).on('click',"#nextId3", function(e){
            var passwordInput = $("#forgotPassword").val();
            var phone = $('#forgotMobile').val();
            $("#forgotPhoneId").val(phone);
            if(passwordInput != null && passwordInput.length >0){
                $('#forgot-password-form').submit();
            } else {
                $('#forgotPasswordError').show();
            }
        });

        $(".slide-right").click(function(){
            $(".box").animate({
                width: boxWidth
            });
        });
        $("#modalClose").click(function () {
            $("#firstForgot").show();
            $("#secondForgot").hide();
            $("#thirdForgot").hide();
        });

        function validateRegisteredMobile(mobile) {
            var result = false;
            jQuery.ajax({
                type: "GET",
                url: 'http://test.vprep.in/frontend/validate_phone?phone=' + mobile,
                success: function (data) {
                    if(data=='true'){
                        $("#firstForgot").hide();
                        $('#secondForgot').show();
                        sendForgotOTP(mobile);

                    }else {
                        $("#forgotMobileError").show();
                    }
                }
            });

            return result;

        }

        function validateSignMobile(mobile) {
            var result = false;
            jQuery.ajax({
                type: "GET",
                url: 'http://test.vprep.in/frontend/validate_phone?phone=' + mobile,
                success: function (data) {
                    if(data=='false'){
                        $("#phoneError2").hide();
                        sendOTP();

                    }else {
                        showMessage("This number is already registered.","error");
                    }
                }
            });

            return result;

        }

        function sendForgotOTP(mobile){
            $.ajax({
                url: "http://test.vprep.in/test/otp/sendotp.php?phone="+mobile,
                method: "GET",
                success: function(data) {
                    n=data.search("Your Vprep OTP is:");
                    var otp = data.substring(n+19,n+23);
                    $("#otp_input").val(otp);
                },
                complete: function(data){
                    n=data.search("Your Vprep OTP is:");
                    var otp = data.substring(n+19,n+23);
                    $("#otp_input").val(otp);
                }

            });
        }

    </script>
    <script>
        function showMessage(msg, type) {
            noty({
                text: msg,
                type: type,
                dismissQueue: true,
                layout: 'topCenter',
                theme: 'defaultTheme',
                timeout: 2000
            });
        }
    </script>
    <style>
        * {box-sizing: border-box;}
        body {font-family: Verdana, sans-serif;}
        .mySlides {display: none;}
        img {vertical-align: middle;}

        /* Slideshow container */
        .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
        }

        /* Caption text */
        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active {
            background-color: #717171;
        }

        /* Fading animation */
        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @-webkit-keyframes fade {
            from {opacity: .4}
            to {opacity: 1}
        }

        @keyframes fade {
            from {opacity: .4}
            to {opacity: 1}
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
            .text {font-size: 11px}
        }
    </style>
    <script>
        var slideIndex = 0;
        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " active";
            setTimeout(showSlides, 2000); // Change image every 2 seconds
        }

        jQuery(document).on('click', '.dot', function (e) {
            var dotValue = $(this).attr("data-value");
            slideIndex = dotValue;
        });

    </script>
    <script src="http://cdn.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
    <script src="http://cdn.jotfor.ms/static/jotform.forms.js?3.3.2455" type="text/javascript"></script>
    <script type="text/javascript"> JotForm.init(function(){ JotForm.highlightInputs = false; JotForm.alterTexts({"alphabetic":"This field can only contain letters","alphanumeric":"This field can only contain letters and numbers.","confirmClearForm":"Are you sure you want to clear the form","confirmEmail":"E-mail does not match","email":"Enter a valid e-mail address","generalError":"Please fill the required fields.","generalPageError":"Please fill the required fields.","gradingScoreError":"Score total should only be less than or equal to","incompleteFields":"Please complete required (*) fields.","inputCarretErrorA":"Input should not be less than the minimum value:","inputCarretErrorB":"Input should not be greater than the maximum value:","lessThan":"Your score should be less than","maxDigitsError":"The maximum digits allowed is","maxSelectionsError":"The maximum number of selections allowed is","minSelectionsError":"The minimum required number of selections is","multipleFileUploads_emptyError":"{file} is empty, please select files again without it.","multipleFileUploads_minSizeError":"{file} is too small, minimum file size is {minSizeLimit}.","multipleFileUploads_onLeave":"The files are being uploaded, if you leave now the upload will be cancelled.","multipleFileUploads_sizeError":"{file} is too large, maximum file size is {sizeLimit}.","multipleFileUploads_typeError":"{file} has invalid extension. Only {extensions} are allowed.","numeric":"This field can only contain numeric values","pastDatesDisallowed":"Date must not be in the past.","pleaseWait":"Please wait...","required":"This field is required.","requireEveryRow":"Every row is required.","requireOne":"At least one field required.","submissionLimit":"Sorry! Only one entry is allowed. Multiple submissions are disabled for this form.","uploadExtensions":"You can only upload following files:","uploadFilesize":"File size cannot be bigger than:"}); JotForm.clearFieldOnHide="disable"; /*INIT-END*/
        }); JotForm.prepareCalculationsOnTheFly([null,null,{"name":"submit","qid":"2","text":"Submit","type":"control_button"},{"name":"name","qid":"3","text":"Name","type":"control_textbox"},{"name":"email","qid":"4","text":"E-mail","type":"control_textbox"},{"name":"contactNumber","qid":"5","text":"Contact Number","type":"control_textbox"},{"name":"website","qid":"6","text":"Website","type":"control_textbox"},{"name":"message","qid":"7","text":"Message","type":"control_textarea"},null,null,{"name":"contactUs","qid":"10","text":"Contact Us","type":"control_head"}]); setTimeout(function() {
            JotForm.paymentExtrasOnTheFly([null,null,{"name":"submit","qid":"2","text":"Submit","type":"control_button"},{"name":"name","qid":"3","text":"Name","type":"control_textbox"},{"name":"email","qid":"4","text":"E-mail","type":"control_textbox"},{"name":"contactNumber","qid":"5","text":"Contact Number","type":"control_textbox"},{"name":"website","qid":"6","text":"Website","type":"control_textbox"},{"name":"message","qid":"7","text":"Message","type":"control_textarea"},null,null,{"name":"contactUs","qid":"10","text":"Contact Us","type":"control_head"}]);}, 20); </script>
    <link href="http://cdn.jotfor.ms/static/formCss.css?3.3.2455" rel="stylesheet" type="text/css">
    <link type="text/css" media="print" rel="stylesheet" href="http://cdn.jotfor.ms/css/printForm.css?3.3.2455">
    <link type="text/css" rel="stylesheet" href="http://cdn.jotfor.ms/css/styles/nova.css?3.3.2455">
    <link type="text/css" rel="stylesheet" href="http://cdn.jotfor.ms/themes/CSS/566a91c2977cdfcd478b4567.css?themeRevisionID=58c6459d9a11c7136a8b4567">
    <style type="text/css"> .form-label-{ width:150px; } .form-line{ padding-top:12px; padding-bottom:12px; } .form-label-right{ width:150px; } .form-all{ width:472px; color:#555 !important; font-family:'Copse'; font-size:16px; } .form-radio-item label, .form-checkbox-item label, .form-grading-label, .form-header{ color: #57ad22; } </style> <style type="text/css" id="form-designer-style"> /* Injected CSS Code */
        @import "http://fonts.googleapis.com/css?family=Copse:light,lightitalic,normal,italic,bold,bolditalic";
        .form-all { font-family: "Copse", sans-serif;
        }
        .form-all { width: 35%;margin-left: 30%;float:left;margin-top: 40px;
        }
        @media only screen and (max-width: 800px)  {

            .form-all {
                width: 55%;
                margin-left: 16%;
                float: left;
                margin-top: 40px;
            }
        }
        .form-label-left,
        .form-label-right { width: 150px;
        }
        .form-label { white-space: normal;
        }
        .form-label.form-label-auto { display: inline-block; float: left; text-align: left; width: 150px;
        }
        .form-label-left { display: inline-block; white-space: normal; float: left; text-align: left;
        }
        .form-label-right { display: inline-block; white-space: normal; float: left; text-align: right;
        }
        .form-label-top { white-space: normal; display: block; float: none; text-align: left;
        }
        .form-radio-item label:before { top: 0;
        }
        .form-all { font-size: 16px;
        }
        .form-label { font-weight: normal; font-size: 0.95em;
        }
        .supernova { background-color: #ffffff; background-color: #f5f5f5;
        }
        .supernova body { background-color: transparent;
        }
        /*
        @width30: (unit(@formWidth, px) + 60px);
        @width60: (unit(@formWidth, px)+ 120px);
        @width90: (unit(@formWidth, px)+ 180px);
        */
        /* | */
        @media screen and (min-width: 480px) { .supernova .form-all { border: 1px solid #dcdcdc; -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.1); -moz-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.1); box-shadow: 0 3px 9px rgba(0, 0, 0, 0.1); }
        }
        /* | */
        /* | */
        @media screen and (max-width: 480px) { .jotform-form { padding: 10px 0; }
        }
        /* | */
        /* | */
        @media screen and (min-width: 480px) and (max-width: 768px) { .jotform-form { padding: 30px 0; }
        }
        /* | */
        /* | */
        @media screen and (min-width: 480px) and (max-width: 471px) { .jotform-form { padding: 30px 0; }
        }
        /* | */
        /* | */
        @media screen and (min-width: 768px) { .jotform-form { padding: 60px 0; }
        }
        /* | */
        /* | */
        @media screen and (max-width: 471px) { .jotform-form { padding: 12px; }
        }
        /* | */
        .supernova .form-all,
        .form-all { background-color: #ffffff; border: 1px solid transparent;
        }
        .form-header-group { border-color: #57ad22;
        }
        .form-matrix-table tr { border-color: #e6e6e6;
        }
        .form-matrix-table tr:nth-child(2n) { background-color: #f2f2f2;
        }
        .form-all { color: #555555;
        }
        .form-header-group .form-header { color: #555555;
        }
        .form-header-group .form-subHeader { color: #6f6f6f;
        }
        .form-sub-label { color: #6f6f6f;
        }
        .form-label-top,
        .form-label-left,
        .form-label-right,
        .form-html { color: #6f6f6f;
        }
        .form-checkbox-item label,
        .form-radio-item label { color: #555555;
        }
        .form-line.form-line-active { -webkit-transition-property: all; -moz-transition-property: all; -ms-transition-property: all; -o-transition-property: all; transition-property: all; -webkit-transition-duration: 0.3s; -moz-transition-duration: 0.3s; -ms-transition-duration: 0.3s; -o-transition-duration: 0.3s; transition-duration: 0.3s; -webkit-transition-timing-function: ease; -moz-transition-timing-function: ease; -ms-transition-timing-function: ease; -o-transition-timing-function: ease; transition-timing-function: ease; background-color: rgba(255, 255, 224, 0);
        }
        /* omer */
        .form-radio-item,
        .form-checkbox-item { padding-bottom: 0px !important;
        }
        .form-radio-item:last-child,
        .form-checkbox-item:last-child { padding-bottom: 0;
        }
        /* omer */
        .form-single-column .form-checkbox-item,
        .form-single-column .form-radio-item { width: 100%;
        }
        .supernova { height: 100%; background-repeat: no-repeat; background-attachment: scroll; background-position: center top; background-repeat: repeat;
        }
        .supernova { background-image: none;
        }
        #stage { background-image: none;
        }
        /* | */
        .form-all { background-repeat: no-repeat; background-attachment: scroll; background-position: center top; background-repeat: repeat;
        }
        .form-header-group { background-repeat: no-repeat; background-attachment: scroll; background-position: center top; background-repeat: repeat; background-attachment: fixed; background-size: auto;
        }
        .form-line { margin-top: 0px; margin-bottom: 0px;
        }
        .form-line { padding: 12px 36px;
        }
        .form-all .form-submit-button,
        .form-all .form-submit-reset,
        .form-all .form-submit-print { -webkit-border-radius: 100px; -moz-border-radius: 100px; border-radius: 100px;
        }
        .form-all .form-sub-label { margin-left: 3px;
        }
        .form-all .qq-upload-button,
        .form-all .form-submit-button,
        .form-all .form-submit-reset,
        .form-all .form-submit-print { font-size: 1em; padding: 9px 15px; font-family: "Copse", sans-serif; font-size: 16px; font-weight: normal;
        }
        .form-all .form-pagebreak-back,
        .form-all .form-pagebreak-next { font-size: 1em; padding: 9px 15px; font-family: "Copse", sans-serif; font-size: 16px; font-weight: normal;
        }
        /*
        & when ( @buttonFontType = google ) { @import (css) "@{buttonFontLink}";
        }
        */
        h2.form-header { line-height: 1.618em; font-size: 1.714em;
        }
        h2 ~ .form-subHeader { line-height: 1.5em; font-size: 1.071em;
        }
        .form-header-group { text-align: center;
        }
        /*.form-dropdown,
        .form-radio-item,
        .form-checkbox-item,
        .form-radio-other-input,
        .form-checkbox-other-input,*/
        .form-captcha input,
        .form-spinner input,
        .form-error-message { padding: 4px 3px 2px 3px;
        }
        .form-header-group { font-family: "Copse", sans-serif;
        }
        .form-section { padding: 0px 0px 0px 0px;
        }
        .form-header-group { margin: 0px 0px 0px 0px;
        }
        .form-header-group { padding: 36px 36px 36px 36px;
        }
        .form-header-group .form-header,
        .form-header-group .form-subHeader { color: #ffffff;
        }
        .form-header-group { background-color: #57ad22;
        }
        .form-textbox,
        .form-textarea { padding: 4px 3px 2px 3px;
        }
        .form-textbox,
        .form-textarea,
        .form-radio-other-input,
        .form-checkbox-other-input,
        .form-captcha input,
        .form-spinner input { background-color: #ffffff;
        }
        [data-type="control_dropdown"] .form-input,
        [data-type="control_dropdown"] .form-input-wide { width: 150px;
        }
        .form-label { font-family: "Copse", sans-serif;
        }
        li[data-type="control_image"] div { text-align: left;
        }
        li[data-type="control_image"] img { border: none; border-width: 0px !important; border-style: solid !important; border-color: false !important;
        }
        .form-line-column { width: auto;
        }
        .form-line-error { background-color: #ffffff; -webkit-box-shadow: inset 0px 3px 11px -7px #ff3200; -moz-box-shadow: inset 0px 3px 11px -7px #ff3200; box-shadow: inset 0px 3px 11px -7px #ff3200;
        }
        .form-line-error input:not(#coupon-input),
        .form-line-error textarea,
        .form-line-error .form-validation-error { -webkit-transition-property: none; -moz-transition-property: none; -ms-transition-property: none; -o-transition-property: none; transition-property: none; -webkit-transition-duration: 0.3s; -moz-transition-duration: 0.3s; -ms-transition-duration: 0.3s; -o-transition-duration: 0.3s; transition-duration: 0.3s; -webkit-transition-timing-function: ease; -moz-transition-timing-function: ease; -ms-transition-timing-function: ease; -o-transition-timing-function: ease; transition-timing-function: ease; border: 1px solid #fff4f4; -moz-box-shadow: 0 0 3px #fff4f4; -webkit-box-shadow: 0 0 3px #fff4f4; box-shadow: 0 0 3px #fff4f4;
        }
        .form-line-error .form-error-message { margin: 0; position: absolute; color: #fff; display: inline-block; right: 0; font-size: 10px; position: absolute!important; box-shadow: none; top: 0px; line-height: 20px; color: #FFF; background: #ff3200; padding: 0px 5px; bottom: auto; min-width: 105px; -webkit-border-radius: 0; -moz-border-radius: 0; border-radius: 0;
        }
        .form-line-error .form-error-message img,
        .form-line-error .form-error-message .form-error-arrow { display: none;
        }
        .ie-8 .form-all { margin-top: auto; margin-top: initial;
        }
        .ie-8 .form-all:before { display: none;
        }
        /* | */
        @media screen and (max-width: 480px), screen and (max-device-width: 768px) and (orientation: portrait), screen and (max-device-width: 415px) and (orientation: landscape) { .testOne { letter-spacing: 0; } .jotform-form { padding: 12px 0 0 0; } .form-all { border: 0; width: 94%!important; max-width: initial; } .form-sub-label-container { width: 100%; margin: 0; margin-right: 0; float: left; -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box; } span.form-sub-label-container + span.form-sub-label-container { margin-right: 0; } .form-sub-label { white-space: normal; } .form-address-table td, .form-address-table th { padding: 0 1px 10px; } .form-submit-button, .form-submit-print, .form-submit-reset { width: 100%; margin-left: 0!important; } div[id*=at_] { font-size: 14px; font-weight: 700; height: 8px; margin-top: 6px; } .showAutoCalendar { width: 20px; } img.form-image { max-width: 100%; height: auto; } .form-matrix-row-headers { width: 100%; word-break: break-all; min-width: 40px; } .form-collapse-table, .form-header-group { margin: 0; } .form-collapse-table { height: 100%; display: inline-block; width: 100%; } .form-collapse-hidden { display: none !important; } .form-input { width: 100%; } .form-label { width: 100% !important; } .form-label-left, .form-label-right { display: block; float: none; text-align: left; width: auto!important; } .form-line, .form-line.form-line-column { padding: 2% 5%; -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box; } input[type=text], input[type=email], input[type=tel], textarea { width: 100%; -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box; max-width: initial !important; } .form-dropdown, .form-textarea, .form-textbox { width: 100%!important; -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box; } .form-input, .form-input-wide, .form-textarea, .form-textbox, .form-dropdown { max-width: initial!important; } .form-address-city, .form-address-line, .form-address-postal, .form-address-state, .form-address-table, .form-address-table .form-sub-label-container, .form-address-table select, .form-input { width: 100%; } div.form-header-group { padding: 36px 36px !important; padding-left: 5%!important; padding-right: 5%!important; margin: 0 0px 2% !important; -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box; } div.form-header-group.hasImage img { max-width: 100%; } [data-type="control_button"] { margin-bottom: 0 !important; } [data-type=control_fullname] .form-sub-label-container { width: 48%; } [data-type=control_fullname] .form-sub-label-container:first-child { margin-right: 4%; } [data-type=control_phone] .form-sub-label-container { width: 65%; } [data-type=control_phone] .form-sub-label-container:first-child { width: 31%; margin-right: 4%; } [data-type=control_datetime] .form-sub-label-container + .form-sub-label-container, [data-type=control_datetime] .form-sub-label-container:first-child { width: 27.3%; margin-right: 6%; } [data-type=control_datetime] .form-sub-label-container + .form-sub-label-container + .form-sub-label-container { width: 33.3%; margin-right: 0; } [data-type=control_datetime] span + span + span > span:first-child { display: block; width: 100% !important; } [data-type=control_birthdate] .form-sub-label-container, [data-type=control_datetime] span + span + span > span:first-child + span + span, [data-type=control_time] .form-sub-label-container { width: 27.3%!important; margin-right: 6% !important; } [data-type=control_birthdate] .form-sub-label-container:last-child, [data-type=control_time] .form-sub-label-container:last-child { width: 33.3%!important; margin-right: 0 !important; } .form-pagebreak-back-container, .form-pagebreak-next-container { width: 50% !important; } .form-pagebreak-back, .form-pagebreak-next, .form-product-item.hover-product-item { width: 100%; } .form-pagebreak-back-container { padding: 0; text-align: right; } .form-pagebreak-next-container { padding: 0; text-align: left; } .form-pagebreak { margin: 0 auto; } .form-buttons-wrapper { margin: 0!important; margin-left: 0!important; } .form-buttons-wrapper button { width: 100%; } .form-buttons-wrapper .form-submit-print { margin: 0 !important; } table { width: 100%!important; max-width: initial!important; } table td + td { padding-left: 3%; } .form-checkbox-item, .form-radio-item { white-space: normal!important; } .form-checkbox-item input, .form-radio-item input { width: auto; } .form-collapse-table { margin: 0 5%; display: block; zoom: 1; width: auto; } .form-collapse-table:before, .form-collapse-table:after { display: table; content: ''; line-height: 0; } .form-collapse-table:after { clear: both; } .fb-like-box { width: 98% !important; } .form-error-message { clear: both; bottom: -10px; } .date-separate, .phone-separate { display: none; } .custom-field-frame, .direct-embed-widgets, .signature-pad-wrapper { width: 100% !important; }
        }
        /* | */ /*__INSPECT_SEPERATOR__*/
        /*---------------------
        Theme: Contact Form wHeader and Footer
        Author: Elton Cris - idarktech@jotform.com
        www.jotform.com
        ----------------------*/
        .form-all { -moz-box-sizing : border-box; -webkit-box-sizing : border-box; box-sizing : border-box; border : none !important;
        } [data-type="control_head"] { padding-bottom : 20px;
          } .form-header-group { border-bottom : 4px solid #4063ae; box-shadow : inset 0 0px 1px #fff; border-top : 1px solid #3e3e3e !important;
            } /*responsive fields*/
        [data-type="control_textbox"] .form-textbox, [data-type="control_fullname"] .form-textbox,
        [data-type="control_email"] .form-textbox,
        [data-type="control_textarea"] .form-textarea, [data-type="control_dropdown"] .form-dropdown { width : 100% !important; max-width : none !important;
        } .form-textbox, .form-textarea, .form-dropdown { max-width : none !important; box-shadow : none; outline : none; box-sizing : border-box; -webkit-box-sizing : border-box; -moz-box-sizing : border-box; font-family : inherit; padding : 4px;
          } .form-textarea-limit>span { display : block;
            } [data-type="control_dropdown"] .form-input, [data-type="control_dropdown"] .form-input-wide { width : 100%;
              } /*input focus*/
        .form-line-active input:focus, .form-line-active textarea:focus, .form-line-active select:focus { box-shadow : none;
        } /*reset error*/
        .form-line-error { box-shadow : none;
        } /*input error*/
        .form-line-error input:not(#coupon-input), .form-line-error textarea, .form-line-error select, .form-line-error .form-validation-error { border : 1px solid #e15353 !important; box-shadow : none !important;
        } .form-line-active { color : inherit !important;
          } /*responsive content -wide or shrink*/
        .form-label { width : 35% !important; box-sizing : border-box; -webkit-box-sizing : border-box; -moz-box-sizing : border-box;
        } .form-label-top { width : 100% !important;
          } .form-line { box-sizing : border-box; -webkit-box-sizing : border-box; -moz-box-sizing : border-box; width : 100%;
            } .form-checkbox-other-input { width : 80% !important;
              } .form-input { width : 65% !important; max-width : none !important;
                } .form-input-wide { max-width : none !important; display : inline-block; width : 100%;
                  } /*single fields with sublabels*/
        [data-type="control_textbox"] .form-input-wide .form-sub-label-container, [data-type="control_fullname"] .form-input-wide .form-sub-label-container,
        [data-type="control_email"] .form-input-wide .form-sub-label-container,
        [data-type="control_textarea"] .form-input-wide .form-sub-label-container, [data-type="control_dropdown"] .form-input-wide .form-sub-label-container,
        [data-type="control_textbox"] .form-input .form-sub-label-container, [data-type="control_fullname"] .form-input .form-sub-label-container,
        [data-type="control_email"] .form-input .form-sub-label-container,
        [data-type="control_textarea"] .form-input .form-sub-label-container, [data-type="control_dropdown"] .form-input .form-sub-label-container { width : 100%; max-width : none !important;
        } [data-type="control_dropdown"] .form-input-wide { width : 100%;
          } /*responsive full name*/
        [data-type="control_fullname"] .form-sub-label-container { width : 50% !important; margin : 0; float : left; box-sizing : border-box;
        } [data-type="control_fullname"] .form-label + div .form-sub-label-container { display : inline-block; padding-right : 5px;
          } [data-type="control_fullname"] .form-label + div .form-sub-label-container + .form-sub-label-container { margin-right : 0; padding-right : 0; padding-left : 5px;
            } [data-type="control_fullname"] .form-label + div .form-sub-label-container + .form-sub-label-container { margin-right : 0; padding-right : 0; padding-left : 5px;
              } [data-type="control_fullname"] .form-label + div .form-sub-label-container + .form-sub-label-container + .form-sub-label-container { padding-left : 0; padding-right : 5px;
                } [data-type="control_fullname"] .form-label + div .form-sub-label-container + .form-sub-label-container + .form-sub-label-container + .form-sub-label-container { padding-left : 5px; padding-right : 0;
                  } [data-type="control_fullname"] .form-label + div .form-sub-label-container + .form-sub-label-container + .form-sub-label-container + .form-sub-label-container + .form-sub-label-container { padding-right : 5px; padding-left : 0;
                    } #sublabel_prefix, #sublabel_first, #sublabel_middle { /*margin-bottom : 10px; */;
                      } /*remove sepatators on date and phone*/
        .phone-separate, .date-separate { display : none;
        } /*responsive phone fields*/
        [data-type="control_phone"] input[name$="[area]"] { width : 100%;
        } [data-type="control_phone"] input[name$="[phone]"] { width : 100%;
          } [data-type="control_phone"] input[name$="[full]"] { width : 100%;
            } [data-type="control_phone"] .form-sub-label-container { width : 40%; float : left; box-sizing : border-box; margin-right : 0; padding-right : 12px;
              } /* responsive date time field */
        [data-type="control_datetime"] .form-textbox,
        [data-type="control_datetime"] .form-dropdown { width : 100%;
        } [data-type="control_datetime"] .form-sub-label-container { width : 28%; padding-left : 4px; box-sizing : border-box; margin-right : 0;
          } [data-type="control_datetime"] .form-sub-label-container:first-child { padding-left : 0;
            } [data-type="control_datetime"] .form-sub-label-container:first-child + .form-sub-label-container + .form-sub-label-container { padding-right : 0;
              } [data-type="control_datetime"] .form-sub-label-container:last-child { width : auto !important;
                } .allowTime-container .form-sub-label-container:last-child { width : 20% !important;
                  } span.allowTime-container { width : 80%; padding-top : 14px;
                    } .allowTime-container span.form-sub-label-container { width : 35%;
                      } span.allowTime-container .form-dropdown { width : 100%;
                        } span.allowTime-container > span:first-child { display : none;
                          } span.allowTime-container > span:first-child + span { padding-left : 0;
                            } .showAutoCalendar + label { display : none;
                              } span.allowTime-container + span { padding-top : 14px;
                                } /*calendar lite mode*/
        [data-type="control_datetime"] div[style*="none"] + .form-sub-label-container { width : 84%; padding-left : 0;
        } /*responsive phone field*/
        [data-type="control_phone"] .form-sub-label-container + .form-sub-label-container { width : 60%; margin-right : 0; padding-right : 0; padding-left : 12px;
        } /*responsive full address fields*/
        .form-address-city, .form-address-line, .form-address-postal, .form-address-state, .form-address-table, .form-address-table .form-sub-label-container, .form-address-table select { width : 100%; max-width : 100%;
        } [data-type="control_address"] input[name$="[city]"],
          [data-type="control_address"] input[name$="[postal]"] { width : 90% !important;
          } [data-type="control_address"] input[name$="[area]"] { width : 60%;
            } /*reset submit button*/
        [data-type="control_button"] { margin-top : 20px; background : url('http://shots.jotform.com/elton/6937_footer.png') repeat-x !important; margin-bottom : 0; padding-top : 30px; padding-bottom : 30px;
        } .form-submit-button,
          .form-submit-reset,
          .form-submit-print { outline : none;
          } /*remove other checkbox*/
        .form-checkbox-other, .form-radio-other { visibility : hidden !important;
        } /*shruken fields*/
        .form-line-column { width : 50%;
        } .form-line-column .form-label-top { width : 100% !important;
          } /*fix form builder display*/
        div#stage.form-all { max-width : none !important; margin-right : 0;
        } div#stage .form-input { width : 64% !important;
          } /*remove first pagebreak back button*/
        .form-all .page-section:first-child .form-pagebreak .form-pagebreak-back-container { display : none !important;
        } /* responsive pagebreak */
        .form-pagebreak-back-container { width : 50% !important; text-align : left; box-sizing : border-box; -webkit-box-sizing : border-box; float : left;
        } .form-pagebreak-next-container { width : 50% !important; text-align : right; box-sizing : border-box; -webkit-box-sizing : border-box; float : left;
          } /* radio-checkbox button make border 1px */
        .form-radio-item:not(#foo) label:after,
        .form-radio-item:not(#foo) label:before { border-radius : 50%;
        } .form-checkbox-item:not(#foo) label:after,
          .form-checkbox-item:not(#foo) label:before { border-radius : 0;
          } .form-radio-item:not(#foo) label:before,
            .form-checkbox-item:not(#foo) label:before { border-width : 1px;
            } /*responsive credit card on payment fields*/
        table td + td { padding-left : 0;
        } .form-address-table { width : 100%;
          } [data-type="control_stripe"] .form-address-table,
            [data-type="control_stripe"] .form-address-table .form-textbox,
            [data-type="control_authnet"] .form-address-table,
            [data-type="control_authnet"] .form-address-table .form-textbox,
            #creditCardTable.form-address-table,
            #creditCardTable.form-address-table .form-textbox { max-width : none;
            } [data-type="control_stripe"] .form-address-table td:last-child .form-sub-label-container,
              [data-type="control_authnet"] .form-address-table td:last-child .form-sub-label-container,
              #creditCardTable.form-address-table td:last-child .form-sub-label-container { margin-left : 0; white-space : normal;
              } [data-type="control_stripe"] .form-address-table td .form-sub-label-container,
                [data-type="control_authnet"] .form-address-table td .form-sub-label-container,
                #creditCardTable.form-address-table td .form-sub-label-container { width : 100%;
                } [data-type="control_stripe"] .form-address-table .form-textbox,
                  [data-type="control_stripe"] .form-address-table .form-dropdown,
                  [data-type="control_authnet"] .form-address-table .form-textbox,
                  [data-type="control_authnet"] .form-address-table .form-dropdown,
                  #creditCardTable.form-address-table .form-textbox,
                  #creditCardTable.form-address-table .form-dropdown { width : 100%; visibility : visible;
                  } [data-type="control_stripe"] .form-address-table tbody > tr:first-child + tr td:first-child span,
                    [data-type="control_authnet"] .form-address-table tbody > tr:first-child + tr td:first-child span,
                    #creditCardTable.form-address-table tbody > tr:first-child + tr td:first-child span { margin : 0; padding-right : 6px; box-sizing : border-box; -webkit-box-sizing : border-box;
                    } [data-type="control_stripe"] .form-address-table tbody > tr:first-child + tr td:first-child + td span,
                      [data-type="control_authnet"] .form-address-table tbody > tr:first-child + tr td:first-child + td span,
                      #creditCardTable.form-address-table tbody > tr:first-child + tr td:first-child + td span { margin : 0; padding-left : 6px; box-sizing : border-box; -webkit-box-sizing : border-box;
                      } [data-type="control_stripe"] .form-address-table tbody > tr:first-child + tr +tr td:first-child span,
                        [data-type="control_stripe"] .form-address-table tbody > tr:first-child + tr +tr+tr td:first-child span,
                        [data-type="control_authnet"] .form-address-table tbody > tr:first-child + tr +tr td:first-child span,
                        [data-type="control_authnet"] .form-address-table tbody > tr:first-child + tr +tr+tr td:first-child span,
                        #creditCardTable.form-address-table tbody > tr:first-child + tr +tr td:first-child span,
                        #creditCardTable.form-address-table tbody > tr:first-child + tr +tr+tr td:first-child span { margin : 0; padding-right : 6px; width : 50% !important; visibility : hidden; float : left; box-sizing : border-box; -webkit-box-sizing : border-box;
                        } [data-type="control_stripe"] .form-address-table tbody > tr:first-child + tr +tr td:first-child span + span,
                          [data-type="control_stripe"] .form-address-table tbody > tr:first-child + tr +tr+tr td:first-child span + span,
                          [data-type="control_authnet"] .form-address-table tbody > tr:first-child + tr +tr td:first-child span + span,
                          [data-type="control_authnet"] .form-address-table tbody > tr:first-child + tr +tr+tr td:first-child span + span,
                          #creditCardTable.form-address-table tbody > tr:first-child + tr +tr td:first-child span + span,
                          #creditCardTable.form-address-table tbody > tr:first-child + tr +tr+tr td:first-child span + span { margin : 0; padding-top : 0 !important; padding-right : 0; padding-left : 6px; width : 50% !important; box-sizing : border-box; -webkit-box-sizing : border-box;
                          } .cc_ccv { width : 100% !important;
                            } [data-type="control_stripe"] .form-address-table .form-sub-label,
                              [data-type="control_authnet"] .form-address-table .form-sub-label,
                              #creditCardTable.form-address-table .form-sub-label { visibility : visible;
                              } /*cc fix city state, country */
        [data-type="control_stripe"] .form-address-table td[width="50%"]>span:first-child,
        [data-type="control_authnet"] .form-address-table td[width="50%"]>span:first-child,
        #creditCardTable.form-address-table td[width="50%"]>span:first-child { box-sizing : border-box; padding-right : 7px;
        } [data-type="control_stripe"] .form-address-table td[width="50%"] + td >span:first-child,
          [data-type="control_authnet"] .form-address-table td[width="50%"] + td >span:first-child,
          #creditCardTable.form-address-table td[width="50%"] + td >span:first-child { box-sizing : border-box; padding-left : 7px;
          } [data-type="control_stripe"] .form-address-table td[width="50%"] + td[width="50%"] >span:first-child,
            [data-type="control_authnet"] .form-address-table td[width="50%"] + td[width="50%"] >span:first-child,
            #creditCardTable.form-address-table td[width="50%"] + td[width="50%"] >span:first-child { box-sizing : border-box; padding-right : 0;
            } .hover-product-item:hover { color : inherit;
              } /*fix for braintree cc styling*/
        [data-type="control_braintree"] .form-sub-label-container { width : 100% !important; padding : 4px; box-sizing : border-box;
        } [data-type="control_braintree"] .form-textbox { width : 100%;
          } .braintree-hosted-fields { width : 100% !important; box-sizing : border-box; min-height : 28px;
            } /*remove bottom spacing on CC section*/
        #creditCardTable.form-address-table tbody tr + tr + tr td,
        [data-type="control_stripe"] .form-address-table tbody tr + tr + tr td,
        [data-type="control_authnet"] .form-address-table tbody tr + tr + tr td { padding-bottom : 0;
        } @media screen and (max-width:768px){ .form-all { margin : 0 auto !important; } [data-type=control_fullname] .form-sub-label-container:first-child { margin-right : 0; } } @media screen and (max-width:480px){ .jotform-form { padding : 0; } .form-input { width : 100% !important; } .form-label { width : 100% !important; float : none !important; } .form-line-column { width : 100% !important; } div.form-header-group { margin : 0 !important; padding : 24px 20px !important; } [data-type="control_datetime"] .form-sub-label-container { float : left; } [data-type=control_fullname] .form-sub-label-container:first-child { margin-right : 0; } } /* Injected CSS Code */
    </style> <link type="text/css" rel="stylesheet" href="http://cdn.jotfor.ms/css/styles/buttons/form-submit-button-book_blue2.css?3.3.2455">
</head>

<body class='marketing is-home' >
<div class='wrapper' >
    <div class='sticky-wrapper'>
        <!-- header -->
      <!--  <header class='cap'>
            <div class='container' >

                <a href='#contactForm'>Request a Demo</a>
            </div>
        </header>-->
        <header class='header' role='banner'>
            <div>
                <p class='logo'>
                    <a href='#'>
                        <img alt='Involvio logo' src='library/img/logo1.png' height="50px">
                    </a>
                </p>

                <nav class='nav-left '>

                    <ul style="margin-top: 18px !important">
                        <li class='has-submenu '>
                            <a href='#'>Campus Solutions</a>
                            <ul>
                                <li class="">
                                    <a data-section="college_engage"  href='#collEngage' style="font-size: 12px!important;">College Engagement</a>
                                </li>
                                <li>
                                    <a data-section="student_engage"  href='#stuEngage' style="font-size: 12px!important;">Student Engagement</a>
                                </li>
                            </ul>
                        </li>
                        <!--<li>
                            <a  data-section="outlook"  href='#outlookForm'>Vprep Inside</a>
                        </li>-->
                        <li>
                            <a  data-section="contact"  href='#contactForm'>Contact Us</a>
                        </li>
                    </ul>
                </nav>
                <nav>

                    <ul style="margin-top: 18px !important">
                        <li class='has-icon'>
                            <a href="#" id="sign-up-id"class="dropdown-toggle" data-toggle="dropdown">Sign Up<span class="caret"></span></a>
                        </li>
                        <li class='has-icon'>
                            <a href="#" id="sign-in-id"class="dropdown-toggle" data-toggle="dropdown">Sign In<span class="caret"></span></a>
                        </li>
                        <li class='last' style="margin-right: 8px;">
                            <a class='btn ac' data-section="contact"  href='#contactForm'>Request a Demo</a>
                        </li>
                    </ul>
                        <ul id="showSignUp"class="dropdown-menu dropdown-lr animated flipInX green-back" role="menu" style="display: none;background: darkslategrey;">
                            <div class="col-lg-12">
                                <form id="ajax-register-form" action="http://test.vprep.in/add_student" method="post" role="form" autocomplete="off" style="width: 100%">
                                    <div class="form-group">
                                        <input type="text" style="border-color:white;width: 100%;" name="first_name"  required="required" id="fullName" tabindex="1" class="form-control" placeholder="Full Name" value="">
                                    </div>
                                    <div id="the-basics" class="form-group" style="padding: 0px;">
                                        <input id="collegeId" class="typeahead form-control" type="text" style="boder-color:white !important;width:100%!important;" placeholder="college name">
                                        <input id="collegeRefId" name="engineering_college_id" class="typeahead form-control" type="hidden" style="boder-color:black !important; font-size:10px;">
                                    </div>
                                    <div class="form-group" style="margin-top: -19px;">
                                        <input type="text" style="border-color:white;width: 100%;" name="username"  required="required" id="upusername" tabindex="1" class="form-control" placeholder="Username" value="">
                                        <span id="userNameError" style="color:red;display: none;">username already exists. please try with other username</span>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" style="border-color:white;width: 100%;" name="email"  required="required" id="email" tabindex="2" class="form-control" placeholder="Email">
                                        <span id="emailError" style="color:red;display: none;">please enter valid email Id</span>
                                        <span id="emailError2" style="color:red;display: none;">email id already exists. please try with other email id</span>
                                    </div>
                                    <div class="form-group">

                                        <input id="regpassword" style="border-color:white;width: 100%;" type="password" name="password" required="required"  tabindex="1" class="form-control" placeholder="password" value="">


                                    </div>
                                    <div class="form-group">
                                        <input type="text" style="border-color:white;width: 100%;" name="phone"  id="phone" required="required" tabindex="1" class="form-control" placeholder="phone" value="">
                                        <span type="hidden" id="phoneError" style="color:red;display: none;">please enter valid phone number</span>
                                        <span id="phoneError2" style="color:red;font-size: 90%;display: none;">This number is already registered.</span>
                                    </div>

                                    <div class="form-group">
                                        <input type="text" style="border-color:white;width: 100%;"  name="city"  id="city" required="required" tabindex="1" class="form-control" placeholder="city" value="">
                                    </div>
                                    <div class="form-group">
                                        <div class="btn btn-primary" style="width: 49%;">
                                            <input type="radio" name="gender" id="inlineRadio1" value="male" style="-webkit-appearance: radio;" checked="checked"> Male
                                        </div>
                                        <label class="btn btn-primary" style="width: 49%;">
                                            <input type="radio" name="gender" id="inlineRadio2" style="-webkit-appearance: radio;" value="female"> Female
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <button class="form-control btn btn-success" id="testId" type=button style="width: 100%;" >Generate OTP</button>
                                        <input type="text" style="border-color:white;width: 100%;display: none;" name="otp" id="otpId" placeholder="Enter OTP"></input>
                                        <span id="otpError" style="color:red;display: none;">OTP did not match. Try Again</span>
                                        <button class="form-control btn btn-success" id="retryOTP" type=button style="display:none;width: 100%;">Retry OTP</button>
                                        <button class="form-control btn btn-success" id="buttonOTP" type=button style="display: none;width: 100%;">Validate & Sign Up</button>


                                    </div>

                                </form>
                            </div>
                        </ul>
                    <ul id="showLogId" class="dropdown-menu dropdown-lr animated flipInX" role="menu" style="display: none;background: darkslategrey;">
                        <div class="col-lg-12">
                            <div class="text-center" style="color: #0c0c0c">
                                <form name="loginForm" id="ajax-login-form" action="http://test.vprep.in/login/checkLogin" accept-charset="utf-8" method="post"  role="form" autocomplete="off">
                                    <div class="form-group" style="margin: 2px;">
                                        <input type="text" style="padding: 7px;width: 100%;" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="" autocomplete="off">
                                        <span type="hidden" style="color:red;display: none;width: 100%;" id="userBlank">username should not be blank</span>
                                    </div>

                                    <div class="form-group" style="margin: 2px;">
                                        <input id="regpassword" style="padding: 7px;width: 100%;" type="password" name="password"  tabindex="1" class="form-control" placeholder="Password">
                                        <span id="credId" style="color:red;display: none;width: 100%;">invalid username/password entered</span>
                                    </div>

                                    <div class="form-group" style="margin: 2px;">
                                        <input type="hidden" name="signin" id="loginId" tabindex="4" class="form-control btn btn-success" value="Sign In form">
                                        <input type=button name="signin2" style="width: 100%;" id="showLoginId" tabindex="4" class="form-control btn btn-success" value="Sign In">
                                    </div>
                                    <!--<div class="form-group" style="margin: 2px;">
                                        <button class="btn btn-success"
                                                data-toggle="modal"
                                                data-target="#fsModal" style="margin-top: -2%;width: 100%;">
                                            Forgot Password?
                                        </button>
                                    </div>-->
                                </form>

                            </div>
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
            <input type="hidden" id="otp_input" value="">
            <video autoplay='autoplay' loop='' poster='library/img/home-video-poster.jpg'>
                <source src='library/video/home-video.mp4' type='video/mp4' >
            </video>
            <!-- ctas -->
            <section class='header-ctas container' >
                <h1>
                    Bring your Assessments and Engagements online
                    <p>Technology-enabled Assessments helps you identify actionable areas for students. Digital engagements fills the communication gap and brings every stakeholder in institute to same platform.</p>
                    <!--Are you engineering student /campus ?
                    <p>Vprep helps your college or university drive student engagement from orientation to graduation using the power of web.</p>-->
                </h1>
            </section>
            <!--<button class='learn' id='learnMore'>Learn More</button>-->
        </div>
        <div class="form-area " data-section="outlook" >
        <section class='platform' id="outlookForm" style="background: #565a5f;padding-top: 5%;">
            <div class="slideshow-container"  style="display: block;margin-left: auto;margin-right: auto;">

                <div class="mySlides fade">
                    <div class="row">
                        <div class="col-sm-12" style="color: #FFFFff;">
                            <h2>Analysis</h2>
                        </div>
                        <div style="display: inline-block;width: 65%;float: left;">
                            <img style="width: 100%;" src='library/img/Analysis.png' >

                        </div>
                        <div  style="color: white;display: inline-block;float: right;width: 30%;margin-left: 2%;">
                            <ul style="list-style-type: circle;font-weight: bold;padding-top: 30%;">
                                <li style="color: #FFFFff!important;">Get detailed analysis of students.</li>
                                <li style="color: #FFFFff!important;">Know their strong and weak areas.</li>
                            </ul>

                        </div>
                    </div>
                </div>


                <div class="mySlides fade">
                    <div class="row">
                        <div class="col-sm-12" style="color: #FFFFff;">
                            <h2>Assignments</h2>
                        </div>
                        <div style="display: inline-block;width: 65%;float: left;">
                            <img style="width: 100%;" src='library/img/Assignments.png' >

                        </div>
                        <div  style="color: white;display: inline-block;float: right;width: 30%;">
                            <ul style="list-style-type: circle;font-weight: bold;padding-top: 30%;">
                                <li style="color: #FFFFff!important;">Complete assignment management.</li>
                                <li style="color: #FFFFff!important;">Create and receive assignments directly within the platform.</li>
                                <li style="color: #FFFFff!important;">Review and download assignments.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="mySlides fade">
                    <div class="row">
                        <div class="col-sm-12" style="color: #FFFFff;">
                            <h2>Engagement Feed</h2>
                        </div>
                        <div style="display: inline-block;width: 65%;float: left;">
                            <img style="width: 100%;" src='library/img/EngagementFeed.png' >

                        </div>
                        <div  style="color: white;display: inline-block;float: right;width: 30%;">
                            <ul style="list-style-type: circle;font-weight: bold;padding-top: 30%;">
                                <li style="color: #FFFFff!important;">Engagement platform with a difference.</li>
                                <li style="color: #FFFFff!important;">Wiki and Facebook like interface Q&A platform.</li>
                                <li style="color: #FFFFff!important;">Drive better engagement between students and professors.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="mySlides fade">
                    <div class="row">
                        <div class="col-sm-12" style="color: #FFFFff;">
                            <h2>Manage Exams</h2>
                        </div>
                        <div style="display: inline-block;width: 65%;float: left;">
                            <img style="width: 100%;" src='library/img/ManageExams.png' >

                        </div>
                        <div  style="color: white;display: inline-block;float: right;width:30%;">
                            <ul style="list-style-type: circle;font-weight: bold;padding-top: 30%;">
                                <li style="color: #FFFFff!important;">Exam management built-in.</li>
                                <li style="color: #FFFFff!important;">Set active and de-active time for every exam.</li>
                                <li style="color: #FFFFff!important;">Share exam to relevant students.</li>
                                <li style="color: #FFFFff!important;">Check complete reports for every exams.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="mySlides fade">
                    <div class="row">
                        <div class="col-sm-12" style="color: #FFFFff;">
                            <h2>Question Bank</h2>
                        </div>
                        <div style="display: inline-block;width: 65%;float: left;">
                            <img style="width: 100%;" src='library/img/QuestionBank.png' >

                        </div>
                        <div  style="color: white;display: inline-block;float: right;width:30%;">
                            <ul style="list-style-type: circle;font-weight: bold;padding-top: 30%;">
                                <li style="color: #FFFFff!important;">Your question bank hosted on cloud.</li>
                                <li style="color: #FFFFff!important;">Access our question directly within the platform.</li>
                                <li style="color: #FFFFff!important;">Create online tests in minutes.</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <br>

            <div style="text-align:center;">
                <span class="dot" data-value="0"></span>
                <span class="dot" data-value="1"></span>
                <span class="dot" data-value="2"></span>
                <span class="dot" data-value="3"></span>
                <span class="dot" data-value="4"></span>
            </div>
        </section>
        </div>
        <div class="form-area " data-section="college_engage">
            <div id="collEngage" >
        <section class='engagement bg-grey' id='learn-more' >
            <header class='intro' >

                <div class='container' >
                    <h1>Everything you need to drive student engagement</h1>
                    <p>Vprep helps you centralize your programming and resources on web and gather critical data</p>
                    <ul class='steps'>
                        <li class='first'>
                            <img alt='' class='no-inline-svg icon wow fadeInDown' data-wow-delay='0.2s' data-wow-duration='0.4s' src='library/img/com.png' width="250px" height="180px">
                            <h2>Engagement platform</h2>
                            <p>Give your students a strong start</p>
                        </li>
                        <li class='middle'>
                            <img alt='' class='no-inline-svg icon wow fadeInDown' data-wow-delay='0.3s' data-wow-duration='0.4s' src='library/img/sc.png' width="250px" height="190px">
                            <h2>Assessments and Analysis</h2>

                            <p>Build an engaged community on web
                            </p>

                        </li>
                        <li class='last'>
                            <img alt='' class='no-inline-svg icon wow fadeInDown' data-wow-delay='0.4s' data-wow-duration='0.4s' src='library/img/adm.png' width="250px" height="180px">
                            <h2>Admin Tools</h2>
                            <p>Gather insight and increase your efficiency</p>

                        </li>
                    </ul>
                </div>

            </header>
        </section>
            </div>
        </div>
        <div class="form-area " data-section="student_engage">
            <div id="stuEngage" >
        <section class='illustrated-features bg-grey'>
            <div class='container'>
                <h1>Reach your students from orientation to graduation</h1>
                <p class='desc'>
                    Vprep meets your students when they arrive on campus for orientation and grows with them all the way through graduation.
                <ul class='fading-steps'>
                    <li>
                        <div class='home1 step1'>
                            <img alt='' class='ill' src='library/img/comm.png' width="200px" height="280px">
                        </div>
                        <h2>Communication</h2>
                        <p>During the craziness of Communication, Vprep quickly connects your students to campus and to each other.</p>
                    </li>
                    <li>
                        <div class='home2 step2'>
                            <img alt='' class='ill' src='library/img/col.png' width="200px" height="280px">
                        </div>
                        <h2>Collaboration</h2>
                        <p>The platform encourages continued involvement by putting every single event at your students' fingertips.</p>
                    </li>
                    <li>
                        <div class='step3'>
                            <img alt='' class='ill' src='library/img/g.png' width="200px" height="280px">
                        </div>
                        <h2>Graduation</h2>
                        <p>Vprep adapts to changing interests all the way through graduation and even allows you to engage alumni.</p>
                    </li>
                </ul>
            </div>
        </section>
            </div>
        </div>
        <section class='trusted-by dark' style="display: none;">
            <h1>Trusted By</h1>
            <div class='owl-carousel owl-theme'>
                <div class='item'>
                    <img alt='Drexel' src='library/img/school-drexel.svg'>
                </div>
                <div class='item'>
                    <img alt='RISD' src='library/img/school-risd.svg'>
                </div>
                <div class='item'>
                    <img alt='Johnson &amp;amp; Whales' src='library/img/school-johnson-whales.svg'>
                </div>
                <div class='item'>
                    <img alt='RIT' src='library/img/school-rit.svg'>
                </div>
                <div class='item'>
                    <img alt='Rowan' src='library/img/school-rowan.svg'>
                </div>
                <div class='item'>
                    <img alt='Texas A &amp;amp; M' src='library/img/school-taam.svg'>
                </div>
                <div class='item'>
                    <img alt='UMass' src='library/img/school-umass.svg'>
                </div>
                <div class='item'>
                    <img alt='Vanderbilt' src='library/img/school-vanderbilt.svg'>
                </div>
                <div class='item'>
                    <img alt='Washu' src='library/img/school-washu.svg'>
                </div>
                <div class='item'>
                    <img alt='Whittier' src='library/img/school-whittier.svg'>
                </div>
                <div class='item'>
                    <img alt='Yale' src='library/img/school-yale.svg'>
                </div>
                <div class='item'>
                    <img alt='Laurentian' src='library/img/school-laurentian.svg'>
                </div>
                <div class='item'>
                    <img alt='Drew' src='library/img/school-drew.svg'>
                </div>
                <div class='item'>
                    <img alt='Gordon' src='library/img/school-gordon.svg'>
                </div>
                <div class='item'>
                    <img alt='HPU' src='library/img/school-hpu.svg'>
                </div>
                <div class='item'>
                    <img alt='Lehigh' src='library/img/school-lehigh.svg'>
                </div>
                <div class='item'>
                    <img alt='Tiffin' src='library/img/school-tiffin.svg'>
                </div>
            </div>
        </section>
    </div>
    <!-- footer -->
    <head>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type='text/javascript' src='http://vprep.in/wp-includes/js/typeahead/typeahead.js'></script>
    </head>
    <footer class='footer' style="background: #565a5f;">
        <div class='top'>
            <div class="container">
                <div class="form-area " data-section="contact" >
                <div class="row" >
                    <form class="jotform-form" action="/mail_contact_us.php" method="post" name="form_73070252224445" id="73070252224445" accept-charset="utf-8">
                    <div class="col-md-4"></div>
                    <div class="col-md-4" id="contactForm" style="padding-top: 100px;">

                        <input type="hidden" name="formID" value="73070252224445">
                        <div class="form-all" style="width: 47%;margin-left: 24%;">
                            <ul class="form-section page-section" style="background: #565a5f;">
                                <li id="cid_10" class="form-input-wide" data-type="control_head" style="margin-top: 1%">
                                    <div class="form-header-group ">
                                        <div class="header-text httac htvam" style="background-color: #5277c8;">
                                            <h1 id="header_10" class="form-header" data-component="header" > Contact Us </h1>
                                        </div>
                                    </div>
                                </li>
                                <li class="form-line jf-required" data-type="control_textbox" id="id_3">
                                    <label class="form-label  form-label-left form-label-auto" id="label_3" for="input_3" style="color: #FFFFff;"> Name <span class="form-required"> * </span> </label>
                                    <div id="cid_3" class="form-input jf-required"> <input type="text" id="input_3" name="q3_name" data-type="input-textbox" class="form-textbox validate[required]" size="35" value="" placeholder=" " data-component="textbox" required=""> </div>
                                </li>
                                <li class="form-line jf-required" data-type="control_textbox" id="id_4" style="padding-top: 4px;">
                                    <label class="form-label form-label-left form-label-auto" id="label_4" for="input_4" style="color: #FFFFff;"> E-mail <span class="form-required"> * </span> </label>
                                    <div id="cid_4" class="form-input jf-required"> <input type="text" id="input_4" name="q4_email" data-type="input-textbox" class="form-textbox validate[required]" size="35" value="" placeholder=" " data-component="textbox" required=""> </div>
                                </li>
                                <li class="form-line jf-required" data-type="control_textbox" id="id_5" style="padding-top: 4px;">
                                    <label class="form-label form-label-left form-label-auto" id="label_5" for="input_5" style="color: #FFFFff;padding-top: 4px;"> Contact Number <span class="form-required"> * </span> </label>
                                    <div id="cid_5" class="form-input jf-required"> <input type="text" id="input_5" name="q5_contactNumber" data-type="input-textbox" class="form-textbox validate[required]" size="35" value="" placeholder=" " data-component="textbox" required=""> </div>
                                </li>

                                <li class="form-line jf-required" data-type="control_textarea" id="id_7" style="padding-top: 4px;">
                                    <label class="form-label form-label-left form-label-auto" id="label_7" for="input_7" style="color: #FFFFff;padding-top: 4px;"> Message <span class="form-required"> * </span> </label>
                                    <div id="cid_7" class="form-input jf-required"> <textarea id="input_7" class="form-textarea validate[required]" name="q7_message" cols="38" rows="7" data-component="textarea" required=""></textarea> </div>
                                </li>
                                <li class="form-line" id="id_2" style="margin: 4%;">
                                    <div id="cid_2" class="form-input-wide">
                                        <div style="text-align:center;" class="form-buttons-wrapper"> <button id="input_2" type="submit" style="background-color: #5277c8;" class="form-submit-button form-submit-button-book_blue2" data-component="button"> Submit </button> </div>
                                    </div>
                                </li>
                                <li style="display:none"> Should be Empty: <input type="text" name="website" value=""> </li>
                            </ul>
                        </div>
                        <script> JotForm.showJotFormPowered = "new_footer"; </script> <input type="hidden" id="simple_spc" name="simple_spc" value="73070252224445"> <script type="text/javascript"> document.getElementById("si" + "mple" + "_spc").value = "73070252224445-73070252224445"; </script>
                        <div class="formFooter-heightMask"> </div>
                    </form>
                    </div>
                    </div></div>
            </div>

        </div>
        <script type="text/javascript">JotForm.ownerView=true;</script></body></html>

        <div class='bottom'>
            <div class='container'>
                <!--<nav>

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
                </nav>-->
                <ul class='social' style="display: none;">
                    <li>
                        <a class='btn' href='http://www.facebook.com/vprep.in1' rel='noopener noreferrer' target='_blank'>
                            <i class='et-social-icon et-social-facebook'></i>
                            <span>Facebook</span>
                        </a>
                    </li>
                    <li>
                        <a class='btn' href='#' rel='noopener noreferrer' target='_blank' style="display: none;">
                            <i class='icon-twitter'></i>
                            <span>Twitter</span>
                        </a>
                    </li>
                    <li class='instagram' style="display: none;">
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
                <p style="font-size: 16px;">Contact Us: info@vprep.in</p>
                <p>Vprep &copy; 2018 </p>
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
                            <a href='#' rel='noopener noreferrer' target='_blank'>Vprep on Facebook</a>
                        </p>
                    </li>
                    <li>
                        <i class='icon-twitter'></i>
                        <p>
                            <a href='#' rel='noopener noreferrer' target='_blank'>Vprep on Twitter</a>
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
                                What are you interested in accomplishing with Vprep?
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
                    We're thrilled that you're excited to learn more about Vprep. Our team will be reaching out to you shortly!
                </p>
            </section>

            <link href="library/css/marketing_home.css" media="screen" rel="stylesheet" type="text/css" />

        </div>
    </div>
    <div id="fsModal"
         class="modal animated bounceIn"
         tabindex="-1"
         role="dialog"
         aria-labelledby="myModalLabel"
         aria-hidden="true">

        <!-- dialog -->
        <div class="modal-dialog">

            <!-- content -->
            <div class="modal-content">

                <!-- header -->
                <div class="modal-header">
                    <h1 id="myModalLabel"
                        class="modal-title">
                        Modal title
                    </h1>
                </div>
                <!-- header -->

                <!-- body -->
                <div class="modal-body">
                    <div class="container" style="padding-top: 60px">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-4">
                                <div class="panel panel-default">
                                    <div class="panel-body" id="firstForgot">
                                        <div class="text-center">
                                            <h3><i class="fa fa-lock fa-4x"></i></h3>
                                            <h2 class="text-center">Forgot Password?</h2>
                                            <p>Please enter your registered mobile number here.</p>
                                            <div class="panel-body">

                                                <form  role="form" autocomplete="off" class="form" method="post">

                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-mobile" style="font-size:20px;"></i></span>
                                                            <input id="forgotMobile" name="email" placeholder="mobile number" class="form-control"  type="number">
                                                            <span id="forgotMobileError" style="color:red">Entered mobile is not registered. Please enter registered mobile.</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <input name="recover-submit" class="btn btn-lg btn-primary btn-block" id="nextId" value="Next" type="button">
                                                    </div>

                                                    <input type="hidden" class="hide" name="token" id="token" value="">
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-body" id="secondForgot">
                                        <div class="text-center">
                                            <h3><i class="fa fa-lock fa-4x"></i></h3>
                                            <h2 class="text-center">Forgot Password?</h2>
                                            <p>Enter your generated OTP</p>
                                            <div class="panel-body">

                                                <form role="form" autocomplete="off" class="form" method="post">

                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-mobile" style="font-size:20px;"></i></span>
                                                            <input id="forgotOTP" name="email" placeholder="Enter OTP" class="form-control"  type="number">
                                                            <span id="forgotOTPError" style="color:red">Entered OTP is not matched</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <input name="recover-submit" class="btn btn-lg btn-primary btn-block" id="nextId2" value="Next" type="button">
                                                    </div>

                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-body" id="thirdForgot">
                                        <div class="text-center">
                                            <h3><i class="fa fa-lock fa-4x"></i></h3>
                                            <h2 class="text-center">Forgot Password?</h2>
                                            <p>Enter New Password</p>
                                            <div class="panel-body">

                                                <form id="forgot-password-form"  action="frontend/update_password" role="form" autocomplete="off" class="form" method="post">

                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-mobile" style="font-size:20px;"></i></span>
                                                            <input id="forgotPhoneId" name="phone" type="hidden">
                                                            <input id="forgotPassword" name="password" placeholder="Enter New Password" class="form-control"  type="password">
                                                            <span id="forgotPasswordError" style="color:red">password should not be blank.</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <input name="recover-submit" class="btn btn-lg btn-primary btn-block" id="nextId3" value="Finish" type="submit">
                                                    </div>

                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- body -->

                <!-- footer -->
                <div class="modal-footer">
                    <button class="btn btn-secondary"
                            data-dismiss="modal" id="modalClose">
                        close
                    </button>
                    <button class="btn btn-default">
                        Default
                    </button>
                    <button class="btn btn-primary">
                        Primary
                    </button>
                </div>
                <!-- footer -->

            </div>
            <!-- content -->

        </div>
        <!-- dialog -->

    </div>
    <script src="library/js/marketing.js" type="text/javascript"></script>

</div>
<!-- build:js -->
<script src="library/js/marketing_home.js" type="text/javascript"></script>
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