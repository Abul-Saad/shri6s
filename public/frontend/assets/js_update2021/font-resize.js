$(document).ready(function () {
  textResizer = $(function () {
    // Set Cookie
    var docCookies = {
      getItem: function (sKey) {
        if (!sKey) {
          return null;
        }
        return (
          decodeURIComponent(
            document.cookie.replace(
              new RegExp(
                "(?:(?:^|.*;)\\s*" +
                  encodeURIComponent(sKey).replace(/[\-\.\+\*]/g, "\\$&") +
                  "\\s*\\=\\s*([^;]*).*$)|^.*$"
              ),
              "$1"
            )
          ) || null
        );
      },
      setItem: function (sKey, sValue, vEnd, sPath, sDomain, bSecure) {
        if (!sKey || /^(?:expires|max\-age|path|domain|secure)$/i.test(sKey)) {
          return false;
        }
        var sExpires = "";
        if (vEnd) {
          switch (vEnd.constructor) {
            case Number:
              sExpires =
                vEnd === Infinity
                  ? "; expires=Fri, 31 Dec 9999 23:59:59 GMT"
                  : "; max-age=" + vEnd;
              break;
            case String:
              sExpires = "; expires=" + vEnd;
              break;
            case Date:
              sExpires = "; expires=" + vEnd.toUTCString();
              break;
          }
        }
        document.cookie =
          encodeURIComponent(sKey) +
          "=" +
          encodeURIComponent(sValue) +
          sExpires +
          (sDomain ? "; domain=" + sDomain : "") +
          (sPath ? "; path=" + sPath : "") +
          (bSecure ? "; secure" : "");
        return true;
      },
      removeItem: function (sKey, sPath, sDomain) {
        if (!this.hasItem(sKey)) {
          return false;
        }
        document.cookie =
          encodeURIComponent(sKey) +
          "=; expires=Thu, 01 Jan 1970 00:00:00 GMT" +
          (sDomain ? "; domain=" + sDomain : "") +
          (sPath ? "; path=" + sPath : "");
        return true;
      },
      hasItem: function (sKey) {
        if (!sKey) {
          return false;
        }
        return new RegExp(
          "(?:^|;\\s*)" +
            encodeURIComponent(sKey).replace(/[\-\.\+\*]/g, "\\$&") +
            "\\s*\\="
        ).test(document.cookie);
      },
      keys: function () {
        var aKeys = document.cookie
          .replace(
            /((?:^|\s*;)[^\=]+)(?=;|$)|^\s*|\s*(?:\=[^;]*)?(?:\1|$)/g,
            ""
          )
          .split(/\s*(?:\=[^;]*)?;\s*/);
        for (var nLen = aKeys.length, nIdx = 0; nIdx < nLen; nIdx++) {
          aKeys[nIdx] = decodeURIComponent(aKeys[nIdx]);
        }
        return aKeys;
      },
    };

    function changeSize(element, size) {
      var current = parseInt(docCookies.getItem("FontSize"));
      var newSize;
      if (current !== "") {
        current = parseInt(element.css("font-size"));
      }
      if (size === "decrease") {
        if (current > 10) {
          newSize = current - 1;
        }
      } else if (size === "increase") {
        if (current < 20) {
          newSize = current + 1;
        }
      } else if (size === "resetf") {
        newSize = 14;
      }

      element.css("font-size", newSize + "px");
      docCookies.setItem("FontSize", newSize, Infinity);
    }

    $("#decreaseFont").click(function (e) {
      changeSize(text, "decrease");
      e.preventDefault();
    });

    $("#increaseFont").click(function (e) {
      changeSize(text, "increase");
      e.preventDefault();
    });
    $("#resetFont").click(function (e) {
      changeSize(text, "resetf");
      e.preventDefault();
    });

    var text = $("body"),
      fontSize = docCookies.getItem("FontSize");
    if (fontSize) {
      text.css("font-size", fontSize + "pt !important");
    }
  });
});
