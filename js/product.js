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

const imgs = ["Rectangle14", "Rectangle15", "Rectangle16"];
const html = document.querySelector("body");
function createSwiper() {
  const swiper = new Swiper(".swiper", {
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      renderBullet: function (index, className) {
        return `<div class="${className}"><img width="152px" height="193px" src="./img/${imgs[index]}.webp" data-originalres="jpg" /></div>`;
      },
    },
    breakpoints: {
      320: {
        navigation: false,
      },
      768: {
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      },
    },
  });
}
createSwiper();
const buttonClosePopup = document.createElement("button");
buttonClosePopup.classList.add("popup-close");
buttonClosePopup.innerHTML = "Закрыть";
//buttonClosePopup.addEventListener("click", removePopup);

function removePopup(e) {
  if (
    !e.target.closest(".popup") ||
    e.target.classList.contains("popup-close")
  ) {
    document.getElementsByClassName("product__main_slider popup")[0]?.remove();
    document.removeEventListener("click", removePopup);
  }
}
function addPopup() {
  let sliderPopup = document
    .querySelector(".product__main_slider")
    .cloneNode(true);
  sliderPopup.classList.toggle("popup");
  html.insertAdjacentElement("afterbegin", sliderPopup);
  createSwiper();
  sliderPopup
    .querySelector(".swiper")
    .insertAdjacentElement("afterbegin", buttonClosePopup);
  setTimeout(() => {
    document.addEventListener("click", removePopup);
  }, 0);
}
if (document.documentElement.clientWidth > 1200) {
  document
    .querySelector(".swiper-slide-active img")
    .addEventListener("click", addPopup);
}
