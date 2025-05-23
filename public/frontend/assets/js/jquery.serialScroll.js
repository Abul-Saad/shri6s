/*
 * jQuery.SerialScroll - Animated scrolling of series
 * Copyright (c) 2007-2009 Ariel Flesler - aflesler(at)gmail(dot)com | http://flesler.blogspot.com
 * Dual licensed under MIT and GPL.
 * Date: 06/14/2009
 * @author Ariel Flesler
 * @version 1.2.2
 * http://flesler.blogspot.com/2008/02/jqueryserialscroll.html
 */
(function (a) {
  var b = (a.serialScroll = function (c) {
    return a(window).serialScroll(c);
  });
  b.defaults = {
    duration: 1e3,
    axis: "x",
    event: "click",
    start: 0,
    step: 1,
    lock: !0,
    cycle: !0,
    constant: !0,
  };
  a.fn.serialScroll = function (c) {
    return this.each(function () {
      var t = a.extend({}, b.defaults, c),
        s = t.event,
        i = t.step,
        r = t.lazy,
        e = t.target ? this : document,
        u = a(t.target || this, e),
        p = u[0],
        m = t.items,
        h = t.start,
        g = t.interval,
        k = t.navigation,
        l;
      if (!r) {
        m = d();
      }
      if (t.force) {
        f({}, h);
      }
      a(t.prev || [], e).bind(s, -i, q);
      a(t.next || [], e).bind(s, i, q);
      if (!p.ssbound) {
        u.bind("prev.serialScroll", -i, q)
          .bind("next.serialScroll", i, q)
          .bind("goto.serialScroll", f);
      }
      if (g) {
        u.bind("start.serialScroll", function (v) {
          if (!g) {
            o();
            g = !0;
            n();
          }
        }).bind("stop.serialScroll", function () {
          o();
          g = !1;
        });
      }
      u.bind("notify.serialScroll", function (x, w) {
        var v = j(w);
        if (v > -1) {
          h = v;
        }
      });
      p.ssbound = !0;
      if (t.jump) {
        (r ? u : d()).bind(s, function (v) {
          f(v, j(v.target));
        });
      }
      if (k) {
        k = a(k, e).bind(s, function (v) {
          v.data = Math.round(d().length / k.length) * k.index(this);
          f(v, this);
        });
      }
      function q(v) {
        v.data += h;
        f(v, this);
      }
      function f(B, z) {
        if (!isNaN(z)) {
          B.data = z;
          z = p;
        }
        var C = B.data,
          v,
          D = B.type,
          A = t.exclude ? d().slice(0, -t.exclude) : d(),
          y = A.length,
          w = A[C],
          x = t.duration;
        if (D) {
          B.preventDefault();
        }
        if (g) {
          o();
          l = setTimeout(n, t.interval);
        }
        if (!w) {
          v = C < 0 ? 0 : y - 1;
          if (h != v) {
            C = v;
          } else {
            if (!t.cycle) {
              return;
            } else {
              C = y - v - 1;
            }
          }
          w = A[C];
        }
        if (
          !w ||
          (t.lock && u.is(":animated")) ||
          (D && t.onBefore && t.onBefore(B, w, u, d(), C) === !1)
        ) {
          return;
        }
        if (t.stop) {
          u.queue("fx", []).stop();
        }
        if (t.constant) {
          x = Math.abs((x / i) * (h - C));
        }
        u.scrollTo(w, x, t).trigger("notify.serialScroll", [C]);
      }
      function n() {
        u.trigger("next.serialScroll");
      }
      function o() {
        clearTimeout(l);
      }
      function d() {
        return a(m, p);
      }
      function j(w) {
        if (!isNaN(w)) {
          return w;
        }
        var x = d(),
          v;
        while ((v = x.index(w)) == -1 && w != p) {
          w = w.parentNode;
        }
        return v;
      }
    });
  };
})(jQuery);
