(function (ELEMENT) {
  ELEMENT.matches =
    ELEMENT.matches ||
    ELEMENT.mozMatchesSelector ||
    ELEMENT.msMatchesSelector ||
    ELEMENT.oMatchesSelector ||
    ELEMENT.webkitMatchesSelector;
  ELEMENT.closest =
    ELEMENT.closest ||
    function closest(selector) {
      if (!this) return null;
      if (this.matches(selector)) return this;
      if (!this.parentElement) {
        return null;
      } else return this.parentElement.closest(selector);
    };
})(Element.prototype);
function createSwiper() {
  swiper = new Swiper(".swiper", {
    loop: true,
    speed: 800,
    touchRatio: 2,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
}
createSwiper();
document.addEventListener("click", removePopup);
const sliderPopup = document.querySelector(".popup");

function removePopup(e) {
  if (
    (!e.target.closest("img") && !e.target.closest(".swiper-button")) ||
    e.target.classList.contains("popup-close")
  ) {
    let popup = document.querySelector(".popup");
    if (popup) {
      popup.classList.remove("show");
    }
  }
}
function openPopup() {
  sliderPopup.classList.add("show");
}
function bindListenerOpenPopup() {
  document.querySelectorAll(".about-us__certificate img").forEach((img) => {
    img.addEventListener("click", openPopup);
  });
}
bindListenerOpenPopup();
