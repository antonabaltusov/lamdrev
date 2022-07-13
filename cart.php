<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Корзина</title>
  <link rel="icon" href="./img/svg/list-style.svg" type="image/svg">
  <link rel="shortcut icon" href="./img/svg/list-style.svg" type="image/svg">
  <link rel="stylesheet" href="./css/style.css" />

</head>

<body>
  <?php
        include "include/header.php";
    ?>
  <main class="cart container">
    <div class="nuv">
      <p><a href="./">Главная</a> / Корзина </p>
    </div>
    <div class="block__top without-line">
      <h1>Корзина</h1>
      <a class="button_orange cart" href="./ordering.php">Оформить заказ</a>
    </div>
    <div class="cart__list">
      <div class="cart__item">
        <img width="286px" height="300px" src="./img/Group99.webp" data-originalres="png">
        <div class="cart__item_info">
          <div>
            <h2>Каркас под обивку тканью</h2>
            <h3>МОДЕЛЬ3.1-4.1</h3>
            <div class="counter">
              <p>Количество</p>
              <div class="counter__block">
                <button>
                  <svg width="8" height="3" viewBox="0 0 8 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.857969 2.24V0.752H7.14597V2.24H0.857969Z" fill="black" />
                  </svg>
                </button>
                <p>1 шт.</p>
                <button>
                  <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M5.24166 10.688V0.511999H6.75366V10.688H5.24166ZM0.777656 6.32V4.904H11.2177V6.32H0.777656Z"
                      fill="black" />
                  </svg>
                </button>
              </div>
            </div>
          </div>
          <button class="cart__item_delete">
            <p>Удалить товар</p>
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M19.7166 1.65204C20.0945 1.27411 20.0945 0.661372 19.7166 0.283445C19.3387 -0.0944817 18.7259 -0.0944817 18.348 0.283445L10 8.63142L1.65204 0.283449C1.27411 -0.0944778 0.661372 -0.0944778 0.283445 0.283449C-0.0944817 0.661376 -0.0944817 1.27412 0.283445 1.65204L8.63142 10L0.28348 18.348C-0.0944469 18.7259 -0.0944469 19.3386 0.28348 19.7166C0.661406 20.0945 1.27415 20.0945 1.65207 19.7166L10 11.3686L18.348 19.7166C18.7259 20.0945 19.3386 20.0945 19.7166 19.7166C20.0945 19.3386 20.0945 18.7259 19.7166 18.348L11.3686 10L19.7166 1.65204Z"
                fill="#ED6B40" />
            </svg>
          </button>
        </div>
      </div>
      <div class="cart__item">
        <img width="286px" height="300px" src="./img/Group99.webp" data-originalres="png">
        <div class="cart__item_info">
          <div>
            <h2>Каркас под обивку тканью</h2>
            <h3>МОДЕЛЬ3.1-4.1</h3>
            <div class="counter">
              <p>Количество</p>
              <div class="counter__block">
                <button>
                  <svg width="8" height="3" viewBox="0 0 8 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.857969 2.24V0.752H7.14597V2.24H0.857969Z" fill="black" />
                  </svg>
                </button>
                <p>1 шт.</p>
                <button>
                  <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M5.24166 10.688V0.511999H6.75366V10.688H5.24166ZM0.777656 6.32V4.904H11.2177V6.32H0.777656Z"
                      fill="black" />
                  </svg>
                </button>
              </div>
            </div>
          </div>
          <button class="cart__item_delete">
            <p>Удалить товар</p>
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M19.7166 1.65204C20.0945 1.27411 20.0945 0.661372 19.7166 0.283445C19.3387 -0.0944817 18.7259 -0.0944817 18.348 0.283445L10 8.63142L1.65204 0.283449C1.27411 -0.0944778 0.661372 -0.0944778 0.283445 0.283449C-0.0944817 0.661376 -0.0944817 1.27412 0.283445 1.65204L8.63142 10L0.28348 18.348C-0.0944469 18.7259 -0.0944469 19.3386 0.28348 19.7166C0.661406 20.0945 1.27415 20.0945 1.65207 19.7166L10 11.3686L18.348 19.7166C18.7259 20.0945 19.3386 20.0945 19.7166 19.7166C20.0945 19.3386 20.0945 18.7259 19.7166 18.348L11.3686 10L19.7166 1.65204Z"
                fill="#ED6B40" />
            </svg>
          </button>
        </div>
      </div>
    </div>
    <a class="button_orange cart" href="./ordering.php">Оформить заказ</a>
    <a href="#" class="button_up">
      <svg width="24" height="51" viewBox="0 0 24 51" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path
          d="M13.0607 0.939339C12.4749 0.353554 11.5251 0.353554 10.9393 0.939339L1.3934 10.4853C0.807611 11.0711 0.807611 12.0208 1.3934 12.6066C1.97919 13.1924 2.92893 13.1924 3.51472 12.6066L12 4.12132L20.4853 12.6066C21.0711 13.1924 22.0208 13.1924 22.6066 12.6066C23.1924 12.0208 23.1924 11.0711 22.6066 10.4853L13.0607 0.939339ZM13.5 51L13.5 2H10.5L10.5 51H13.5Z"
          fill="#ED6B40" />
      </svg>
    </a>


  </main>

  <?php
        include "include/footer.php";
    ?>
</body>

</html>