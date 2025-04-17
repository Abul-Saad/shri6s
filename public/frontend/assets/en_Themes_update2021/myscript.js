$(document).ready(function () {
  $(".innermenu ul li a").each(function () {
    if (location.href === this.href) {
      $(this).addClass("selected");
      $("a").not(this).addClass("none");
      return false;
    }
  });

  $(document).ready(function () {
    $(".top-nav ul.topleft_menu li.udrcc").click(function () {
      $(".top-nav ul.topleft_menu li.udrcc ul.dropdown-menu").toggleClass(
        "show"
      );
      $(".top-nav ul.topleft_menu li.quickdown ul.dropdown-menu").removeClass(
        "show"
      );
      e.preventDefault();
    });
  });

  $(document).ready(function () {
    $(".top-nav ul.topleft_menu li.quickdown").click(function () {
      $(".top-nav ul.topleft_menu li.quickdown ul.dropdown-menu").toggleClass(
        "show"
      );
      $(".top-nav ul.topleft_menu li.udrcc ul.dropdown-menu").removeClass(
        "show"
      );
      e.preventDefault();
    });
  });

  $(document).ready(function () {
    $("button.impnav").click(function () {
      //$(".left_menu").css("display", "block");
      $(".left_menu").toggleClass("show");
    });
  });

  $(document).ready(function () {
    $(".navbar-toggle").click(function () {
      $(".collapse").toggleClass("show");
    });
  });

  var sp = document.querySelector(".search-open");
  var searchbar = document.querySelector(".search-inline");
  var shclose = document.querySelector(".search-close");
  function changeClass() {
    searchbar.classList.add("search-visible");
  }
  function closesearch() {
    searchbar.classList.remove("search-visible");
  }
  sp.addEventListener("click", changeClass);
  shclose.addEventListener("click", closesearch);

  $(".title-caption em").each(function () {
    var e = $(this).html(),
      n = e.indexOf("/"),
      o = e.substr(0, n);
    $(this).html(o);
  }),
    $(".search1, .sopen").click(function () {
      $(".searchdiv").fadeToggle("slow");
    });
  $(".sidebarbutton,.sidebarhide").click(function () {
    $(".sidebarmenu").toggleClass("sidebaropen");
  });

  $(".news-announcement .toggle").click(function () {
    $("#vticker ul").toggleClass("scroll");
  });

  $(".news-announcement .toggle2").click(function () {
    $("#tender ul").toggleClass("scroll");
  });

  //$('.eventthumb .owl-item li.news-thumb').wrap('<div class="lu-newswrap">');

  $(".inner table").wrap('<div class="table-responsive">'),
    $(".inner table").addClass("table table-bordered table-striped"),
    $(".archive-btn").addClass("arc-btn"),
    $(".afetrlogo").addClass("uni-m-logo"),
    $(".effect-oscar").addClass("article"),
    $("figure.effect-oscar").wrap('<div class="col-md-4 col-sm-6 col-xs-12">'),
    $(".removetblclass table").removeClass(
      "table table-bordered table-striped"
    ),
    $(".sitemap ul").removeClass(
      "nav navbar-nav, secondmenu mega-dropdown-menu colum-3"
    ),
    $(".left-other-links-menu ul > li").removeClass("sidebarhide"),
    $(".sitemap li").removeClass("dropdown"),
    $(".sitemap li").removeClass("dropdown-submenu"),
    $(".sitemap li a").removeClass("dropdown-toggle"),
    $(".sitemap ul ul").removeClass("dropdown-menu"),
    $(".sitemap ul").removeClass("navbar-nav"),
    $(".sitemap ul").removeClass("colum-4"),
    $(".sitemap ul").removeAttr("id", "menu"),
    $(".innermenu ul li a.studentservice + ul").removeClass("colum-3"),
    $(".innermenu ul li a.faculty + ul").removeClass("colum-3"),
    $(".innermenu ul li a.college-service + ul").removeClass("colum-3"),
    $(".innermenu ul li a.resourses + ul").removeClass("colum-3"),
    $(".innermenu ul").removeClass("nav navbar-nav servicelink secondmenu"),
    $(".innermenu ul li").removeClass("dropdown mega-dropdown"),
    $(".innermenu ul li a").removeClass("dropdown-toggle"),
    $(".innermenu ul ul").removeClass(
      "dropdown-menu mega-dropdown-menu colum-2"
    ),
    $(".innermenu ul").removeAttr("id", "nav"),
    $(".innermenu li a").removeAttr("role", "button"),
    $(".innermenu li a").removeAttr("aria-haspopup", "true"),
    $(".innermenu li a").removeAttr("aria-expanded", "false"),
    $(".innermenu li a").removeAttr("data-toggle", "dropdown"),
    $(".secondmenu .mega-dropdown-menu ul").remove("ul"),
    $(".secondmenu .mega-dropdown-menu li a").removeClass("has-submenu"),
    $.cookie("css") && $("#MSS").attr("href", $.cookie("css")),
    $(".defTheme").click(function () {
      return (
        $("#MSS").attr("href", $(this).attr("href")),
        $.cookie("css", $(this).attr("href")),
        !1
      );
    }),
    $(".hi-btn").click(function () {
      var e = confirm("Maharishi Dayanand Education Group Hindi");
      return 1 == e
        ? (window.location(this.window.url + "/hi"), !0)
        : 0 != e && void 0;
    });
}),
  $(window).scroll(function () {
    var e = $(window).scrollTop();
    e > 132 && $("header").addClass("menuFxd"),
      e < 132 && $("header").removeClass("menuFxd");
  }),
  $(window).scroll(function () {
    var e = $(window).scrollTop();
    e > 550 && $(".afetrlogo").addClass("uni-m-logo"),
      e < 550 && $(".afetrlogo").removeClass("uni-m-logo");
  }),
  $(window).scroll(function () {
    var e = $(window).scrollTop();
    e > 550 && $(".navbar-inverse").addClass("mob-view"),
      e < 550 && $(".navbar-inverse").removeClass("mob-view");
  });
