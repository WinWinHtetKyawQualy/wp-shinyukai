jQuery(function ($) {

  $(".nav-list li a img").matchHeight();
  $(".recruit-info-gp .recruit-info-li li a").matchHeight();

  $(function () {
    var scroll_func = function () {
      $("html,body").animate({ scrollTop: $($(this).attr("href")).offset().top }, "slow", "swing");
      return false;
    };
    $(function () {
      $(".anchor").click(scroll_func);
    });
  });

  $(function () {
    $(document).on("click", ".menu-sp", function () {
      $(".gmenu-sp").addClass("is-active");
      $(".nav-sp").addClass("open");
      $(".wrapper").addClass("open");
    });

    $(document).on("click", ".is-active", function () {
      $(".gmenu-sp").removeClass("is-active");
      $(".nav-sp").removeClass("open");
      $(".wrapper").removeClass("open");
    });

    $(".sub-anchor").click(function () {
      $(".gmenu-sp").removeClass("is-active");
      $(".nav-sp").removeClass("open");
      $(".wrapper").removeClass("open");
    });
  });
  // $(function () {
  //   $(document).on("click", ".sp-menu-toggle", function () {
  //     $(".arr-icon").addClass("arr-active");
  //     $(this).toggleClass("menu-on");
  //     $(this).find(".menu-sub-list").slideToggle();
  //   });
  // });
  $(function () {
    $(document).on("click", ".sp-menu-toggle", function () {
      $(this).toggleClass("menu-on");
      $(this).find(".arr-icon").toggleClass("arr-active");
      $(this).find(".menu-sub-list").slideToggle();
    });
  });

  //各サイズのボタンをクリックするとベースとなるfont-sizeが変わる
  $(function () {
    $(".regular").click(function () {
      $("html").css("font-size", "62.5%");
    });
    $(".large").click(function () {
      $("html").css("font-size", "72.5%");
    });
    $(".extra-large").click(function () {
      $("html").css("font-size", "82.5%");
    });
  });
  $(function () {
    $(".size-btn").click(function () {
      $(".size-btn").removeClass("btn-active");
      $(this).addClass("btn-active");
    });
  });

  $(function () {
    const wrapper = $(".wrapper");

    $(".regular").on("click", function () {
      wrapper.removeClass("font-large font-extra-large");
    });

    $(".large").on("click", function () {
      wrapper.removeClass("font-extra-large").addClass("font-large");
    });

    $(".extra-large").on("click", function () {
      wrapper.removeClass("font-large").addClass("font-extra-large");
    });
  });

  $(function () {
    window.innerWidth > 768 ? stickyPC() : stickySP();

    // window.addEventListener("resize", function () {
    //   const windowInnerWidth = window.innerWidth;
    //   windowInnerWidth > 768 ? stickyPC() : stickySP();
    // });
  });

  $(function () {
    $("#time").click(function (e) {
      e.stopPropagation();
      $("#time,#time div").toggleClass("anime");
    });
  });

  $(function () {
    $(".body_hide").click(function (e) {
      $("#time,#time div").removeClass("anime");
    });
  });

  /*Timetable SP*/
  $(function () {
    const timetable = $(".timetable");
    const timepopup = $(".timepopup");
    const overlay = $(".overlay");

    $(document).on("click", ".timeclick", function () {
      timetable.addClass("on");
      timepopup.addClass("is-show");
      overlay.addClass("view");
    });

    $(".timepopup").on("click", function () {
      timetable.removeClass("on");
      timepopup.removeClass("is-show");
      overlay.removeClass("view");
    });

    $(".time-close").on("click", function () {
      timetable.removeClass("on");
      timepopup.removeClass("is-show");
      overlay.removeClass("view");
    });

    $(".overlay").on("click", function () {
      timetable.removeClass("on");
      timepopup.removeClass("is-show");
      overlay.removeClass("view");
    });
  });
});

// sticky effect for pc
function stickyPC() {
  const toTheTopBtn = $("#to-the-top");
  const footer = document.getElementById("footer");

  if (isVisableFromTop(footer)) {
    toTheTopBtn.css("position", "static");
  } else {
    toTheTopBtn.css("bottom", 10);
    toTheTopBtn.css("position", "fixed");
  }

  window.addEventListener("scroll", function () {
    const windowScroll = this.scrollY;

    if (windowScroll > 150) {
      toTheTopBtn.css("bottom", 10);
    } else if (windowScroll === 0) {
      toTheTopBtn.css("bottom", "-50px");
    }
    if (isVisableFromTop(footer)) {
      toTheTopBtn.css("position", "static");
    } else {
      toTheTopBtn.css("position", "fixed");
    }
  });
}

// sticky effect for sp
function stickySP() {
  const toTheTopBtn = $("#to-the-top");
  const infoBtn = $("#info-btn");
  const footer = document.getElementById("footer");

  if (isVisableFromTop(footer)) {
    toTheTopBtn.css("position", "static");
    infoBtn.css("position", "static");
  } else {
    toTheTopBtn.css("position", "fixed").css("bottom", 40);
    infoBtn.css("position", "fixed").css("bottom", 0);
  }

  window.addEventListener("scroll", function () {
    const windowScroll = this.scrollY;
    if (windowScroll > 150) {
      toTheTopBtn.css("bottom", "40px");
      infoBtn.css("bottom", 0);
    } else if (windowScroll === 0) {
      toTheTopBtn.css("bottom", "-50px");
      infoBtn.css("bottom", "-80px");
    }
    if (isVisableFromTop(footer)) {
      toTheTopBtn.css("position", "static");
      infoBtn.css("position", "static");
    } else {
      toTheTopBtn.css("position", "fixed");
      infoBtn.css("position", "fixed");
    }
  });
}

function isVisableFromTop(elem) {
  const elemPos = $(elem).offset().top;
  const scroll = $(window).scrollTop();
  const windowHeight = $(window).height();
  return scroll >= elemPos - windowHeight;
}

$(".q").click(function () {
  $(this).siblings(".a").stop().slideToggle();
  $(".q").not($(this)).siblings(".a").slideUp();
  $(this).toggleClass("active");
  $(".q").not($(this)).removeClass("active");
});

// code for modal box of gairai
const modal_container = document.querySelector(".modal-container");
const html = document.querySelector("html");

const open_btn = document.getElementById("open-btn");
if (open_btn) {
  open_btn.addEventListener("click", function () {
    modal_container.classList.add("active");
    html.style.overflow = "hidden";
  });
}

const close_btn = document.getElementById("close-btn");
if (close_btn) {
  close_btn.addEventListener("click", function () {
    modal_container.classList.remove("active");
    html.style.overflow = "auto";
  });
}

// window.addEventListener("resize", function () {
//   this.innerWidth > 768 ? (html.style.overflow = "auto") : undefined;
// });

/// Service Tab ///
$(function () {
  $(".dpt-tabs a").on("click", function (e) {
    e.preventDefault();
    var target = $(this).attr("href");
    if (!$(target).length) return false;
    $(".dpt-tab", $(this).closest(".dpt-tabs")).removeClass("active");
    $(this).closest(".dpt-tab").addClass("active");
    $(".panel", $(target).closest(".panels")).removeClass("active");
    $(target).addClass("active");
  });
});

// @ts-nocheck

// scroll to hash
/** @type {scrollTo(hash: string | ""): undefined} */
function scrollTo(hash) {
  location.hash = "#" + hash;
}

const currentURL = new URL(window.location.href);
const { hash } = currentURL;
const elemId = hash.slice(1);

// handle for the condition loading page with the second tag open
if (elemId === "medical-tech-department") {
  document.getElementById("nursing-department").classList.remove("active");
  document.getElementById("left-dept").classList.remove("active");

  document.getElementById(elemId).classList.add("active");
  document.getElementById("right-dept").classList.add("active");
} else if (elemId && !elemId.includes("itemr")) {
  document.getElementById("nursing-department").classList.remove("active");
  document.getElementById("left-dept").classList.remove("active");

  document.getElementById("medical-tech-department").classList.add("active");
  document.getElementById("right-dept").classList.add("active");
}

$(document).ready(function () {
  const tableAccor = $("#table-accor");

  $(window).on("load scroll", function () {
    toggleScrollSign();
  });

  function toggleScrollSign() {
    const fixWrapper = $(".scroll-wd");
    const fix = $(".js-fix01");
    const fixArea = $(".scroll-bl");

    if (fixWrapper.length && fix.length && fixArea.length) {
      const fixTop = fixWrapper.offset().top - 750;
      const fixEnd = fixArea.offset().top - 450 + fixArea.height();
      const fixHeight = fix.height();
      const winScroll = $(window).scrollTop();

      if (winScroll < fixTop) {
        fix.removeClass("is-fixed");
      } else if (winScroll > fixEnd - fixHeight) {
        fix.removeClass("is-fixed");
      } else if (tableAccor.hasClass("active")) {
        fix.addClass("is-fixed");
      }
    }
  }
});
