class catalog {
  constructor(renderItem) {
    this.items = this.fetchLegs();
    this.list = document.querySelector(".catalog__list");
    this.renderItem = renderItem;
    this.renderList(this.legs);
    this.bindButtonMoreItems();
  }
  startSwiper() {
    this.swiper = new Swiper(".swiper", optionSwiperForCatalog);
  }
  fetchLegs() {
    return [
      {
        img: [
          "./img/Rectangle107.webp",
          "./img/Rectangle107.webp",
          "./img/Rectangle107.webp",
        ],
        name: "Опора из гнутоклееной фанеры",
        description:
          "Каркасы для кресел и стульев под обивку тканью. Готовые изделия, облицованные шпоном /пластиком либо с тонировкой под лаком.",
        characteristics: ["Размер- 14 х 15", "Материал- дуб"],
        counter: 0,
      },
      {
        img: [
          "./img/Rectangle107.webp",
          "./img/Rectangle107.webp",
          "./img/Rectangle107.webp",
        ],
        name: "Опора из гнутоклееной фанеры",
        description:
          "Каркасы для кресел и стульев под обивку тканью. Готовые изделия, облицованные шпоном /пластиком либо с тонировкой под лаком.",
        characteristics: ["Размер- 14 х 15", "Материал- дуб"],
        counter: 2,
      },
      {
        img: [
          "./img/Rectangle107.webp",
          "./img/Rectangle107.webp",
          "./img/Rectangle107.webp",
        ],
        name: "Опора из гнутоклееной фанеры",
        description:
          "Каркасы для кресел и стульев под обивку тканью. Готовые изделия, облицованные шпоном /пластиком либо с тонировкой под лаком.",
        characteristics: ["Размер- 14 х 15", "Материал- дуб"],
        counter: 2,
      },
      {
        img: [
          "./img/Rectangle107.webp",
          "./img/Rectangle107.webp",
          "./img/Rectangle107.webp",
        ],
        name: "Опора из гнутоклееной фанеры",
        description:
          "Каркасы для кресел и стульев под обивку тканью. Готовые изделия, облицованные шпоном /пластиком либо с тонировкой под лаком.",
        characteristics: ["Размер- 14 х 15", "Материал- дуб"],
        counter: 0,
      },
      {
        img: [
          "./img/Rectangle107.webp",
          "./img/Rectangle107.webp",
          "./img/Rectangle107.webp",
        ],
        name: "Опора из гнутоклееной фанеры",
        description:
          "Каркасы для кресел и стульев под обивку тканью. Готовые изделия, облицованные шпоном /пластиком либо с тонировкой под лаком.",
        characteristics: ["Размер- 14 х 15", "Материал- дуб"],
        counter: 2,
      },
    ];
  }
  bindButtonMoreItems = () => {
    document.querySelector("#more-items")?.addEventListener("click", () => {
      let newItems = this.fetchLegs();
      this.items = [...this.items, ...newItems];
      this.renderList(newItems, true);
    });
  };
  renderList(legs, more = false) {
    if (!more) {
      while (this.list.firstChild) {
        this.list.removeChild(this.list.firstChild);
      }
    }
    this.items.forEach((item) =>
      this.list.insertAdjacentHTML("beforeend", this.renderItem(item))
    );
    this.startSwiper();
  }
}
const optionSwiperForCatalog = {
  loop: true,
  breakpoints: {
    320: {
      navigation: false,
      pagination: false,
    },
    768: {
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    },
  },
};
