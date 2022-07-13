<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Оформление заказа</title>
  <link rel="icon" href="./img/svg/list-style.svg" type="image/svg">
  <link rel="shortcut icon" href="./img/svg/list-style.svg" type="image/svg">
  <link rel="stylesheet" href="./css/style.css" />
  <script src="./js/valid.js" defer></script>

</head>

<body>
  <?php
        include "include/header.php";
    ?>
  <main class="ordering container">
    <div class="nuv">
      <p><a href="./">Главная</a> / Корзина </p>
    </div>
    <h1>Оформление заказа</h1>
    <h2>Чтобы наш оператор мог с вами связаться,<br>
      для уточнения вашего заказа- заполните все поля</h2>
    <form novalidate class="ordering form" action="">
      <div class="inputs">
        <div class='input-wrapper'>
          <input class='input' required type="text" id="name" placeholder="Ваше имя *">
          <span class="error" aria-live="polite"></span>
        </div>
        <div class='input-wrapper'>
          <input class='input' required id="email" type="email" placeholder="Ваш e-mail *">
          <span class="error" aria-live="polite"></span>
        </div>
        <div class='input-wrapper'>
          <input class='input' required id="tel" type="tel" placeholder="+7 (---)--- -- --"
            pattern="\+7\s?[\(]{0,1}9[0-9]{2}[)]{0,1}\s?\d{3}\s?[\-]{0,1}\d{2}\s?[\-]{0,1}\d{2}">
          <span class="error" aria-live="polite"></span>
        </div>
        <div class='input-wrapper'>
          <input required class='input' id="city" type="text" placeholder="Укажите ваш город *">
          <span class="error" aria-live="polite"></span>
        </div>
      </div>
      <h6>*отмечены обязательные поля, для заполнения</h6>
      <label class="checkbox" for="agree">
        <input required type="checkbox" name="agree" id="agree" class="checkbox__real input">
        <span class="error" aria-live="polite"></span>
        <span class="checkbox__custom"></span>
        <p>Нажимая кнопку &laquo;Отправить&raquo; Вы соглашаетесь на<br> обработку <a href="">персональных данных</a>
        </p>
      </label>
      <button class="button_orange submit" type="submit">Отправить</button>
      <div class="requared-form">
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M8.74419 10.9767C8.74419 11.3877 8.411 11.7209 8 11.7209C7.589 11.7209 7.25581 11.3877 7.25581 10.9767C7.25581 10.5657 7.589 10.2326 8 10.2326C8.411 10.2326 8.74419 10.5657 8.74419 10.9767Z"
            fill="#FF2E2E" />
          <path
            d="M8.55814 4.27907C8.55814 3.97082 8.30825 3.72093 8 3.72093C7.69175 3.72093 7.44186 3.97082 7.44186 4.27907V8.74419C7.44186 9.05244 7.69175 9.30233 8 9.30233C8.30825 9.30233 8.55814 9.05244 8.55814 8.74419V4.27907Z"
            fill="#FF2E2E" />
          <path fill-rule="evenodd" clip-rule="evenodd"
            d="M8 0C3.58172 0 0 3.58172 0 8C0 12.4183 3.58172 16 8 16C12.4183 16 16 12.4183 16 8C16 3.58172 12.4183 0 8 0ZM1.11628 8C1.11628 4.19823 4.19823 1.11628 8 1.11628C11.8018 1.11628 14.8837 4.19823 14.8837 8C14.8837 11.8018 11.8018 14.8837 8 14.8837C4.19823 14.8837 1.11628 11.8018 1.11628 8Z"
            fill="#FF2E2E" />
        </svg>
        Заполните все данные
      </div>
    </form>
  </main>

  <?php
        include "include/footer.php";
    ?>
</body>

</html>