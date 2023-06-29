const menuWrapper = document.querySelector(".menu-list");
const searchOpenBtn = document.querySelector(".search-open-btn");
const searchCloseBtn = document.querySelector(".search-close");

function handleSearch() {
  menuWrapper.classList.toggle("search-box-active");
}

searchOpenBtn.addEventListener("click", handleSearch);
searchCloseBtn.addEventListener("click", handleSearch);

// gmenu
$(document).on("click", ".menu-sp", function () {
  $(".gmenu-sp").addClass("is-active");
  $(".nav-sp").addClass("open");
  $(".wrapper").addClass("open");
  $("body").css("overflow", "hidden");
});

$(document).on("click", ".is-active", function () {
  $(".gmenu-sp").removeClass("is-active");
  $(".nav-sp").removeClass("open");
  $(".wrapper").removeClass("open");
  $("body").css("overflow", "auto");
});
// --------------------------------------------------//

// to-the-top
$(function () {
  window.innerWidth > 768 ? stickyPC() : stickySP();
});

// sticky effect for pc
function stickyPC() {
  const toTheTopBtn = $("#to-the-top");
  const footer = document.getElementById("footer");

  if (isVisableFromTop(footer)) {
    toTheTopBtn.css("position", "absolute");
    toTheTopBtn.css("bottom", "100%");
  } else {
    // toTheTopBtn.css("top", "unset");
    toTheTopBtn.css("bottom", 10);
    toTheTopBtn.css("position", "fixed");
  }

  window.addEventListener("scroll", function () {
    const windowScroll = this.scrollY;

    if (windowScroll > 150) {
      toTheTopBtn.css("bottom", 10);
      toTheTopBtn.css("display", "flex");
    } else if (windowScroll === 0) {
      toTheTopBtn.css("bottom", "-50px");
    }
    if (isVisableFromTop(footer)) {
      toTheTopBtn.css("bottom", "100%");
      toTheTopBtn.css("position", "absolute");
    } else {
      toTheTopBtn.css("position", "fixed");
    }
  });
}

// sticky effect for sp
function stickySP() {
  const toTheTopBtn = $("#to-the-top");
  const footer = document.getElementById("footer");

  if (isVisableFromTop(footer)) {
    toTheTopBtn.css("position", "static");
  } else {
    toTheTopBtn.css("position", "fixed").css("bottom", 0);
  }

  window.addEventListener("scroll", function () {
    const windowScroll = this.scrollY;
    if (windowScroll > 150) {
      toTheTopBtn.css("bottom", "0px");
      toTheTopBtn.css("display", "flex");
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

function isVisableFromTop(elem) {
  const elemPos = $(elem).offset().top;
  const scroll = $(window).scrollTop();
  const windowHeight = $(window).height();
  return scroll >= elemPos - windowHeight;
}

// -------------------------------------------------//
const fzBtns = Array.from(document.querySelectorAll(".fz-control-btn"));
const rootElement = document.querySelector("html");

function handleBtnBg() {
  fzBtns.forEach((el) => {
    el.classList.remove("fz-btn-active");
  });
  this.classList.add("fz-btn-active");
}

fzBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    const fontSize = btn.dataset.fontSize;
    rootElement.style.fontSize = fontSize;
    handleBtnBg.call(btn);
  });
});
