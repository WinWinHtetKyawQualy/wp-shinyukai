let width = window.innerWidth;
const accor_ttl = $(".accor-ttl");
const accors = $(".accor");

if (width < 768) {
  accors.css("display", "none");
} else {
  accors.css("display", "block");
}

// window.addEventListener("resize", function () {
//   width = window.innerWidth;

//   if (width < 768) {
//     accors.css("display", "none");
//   } else {
//     accors.css("display", "block");
//   }
// });

accor_ttl.click(function () {
  if (width < 768) {
    const key = this.getAttribute("key");
    $(this).toggleClass("active");
    accors.each(function () {
      this.getAttribute("key") === key ? $(this).slideToggle() : undefined;
    });
  }
});
