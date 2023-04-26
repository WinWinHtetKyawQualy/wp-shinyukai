// @ts-check

/** @type {NodeListOf<HTMLAnchorElement> }  */
const infoBtns = document.querySelectorAll(".info-block a");

/** @type {HTMLDivElement | null }  */
const modalBox = document.querySelector(".modal-container");

infoBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    modalBox && modalBox.classList.add("active");
  });
});
