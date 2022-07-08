<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Корзина</title>
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
    <div class="block__top">
      <h1>Корзина</h1>
    </div>
    <div class="cart__after-ordering">
      <h2>Спасибо что оставили заявку, мы вам перезвоним</h2>
      <img width="413px" height="490px" src="./img/Rectangle125.webp" data-originalres="jpg">
      <a class="button_orange" href="./">На главную</a>
    </div>

  </main>

  <?php
        include "include/footer.php";
    ?>
</body>

</html>