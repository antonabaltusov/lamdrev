<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Оформление заказа</title>
  <link rel="stylesheet" href="./css/style.css" />

</head>

<body>
  <?php
        include "include/header.php";
    ?>
  <main class="ordering container">
    <h1>Оформление заказа</h1>
    <h2>Чтобы наш оператор мог с вами связаться,<br>
      для уточнения вашего заказа- заполните все поля</h2>
    <form class="ordering form" action="">
      <div class="inputs">
        <input type="text" placeholder="Ваше имя *">
        <input type="email" placeholder="Ваш e-mail *">
        <input type="tel" placeholder="+7 (---)--- -- --"
          pattern="\+7\s?[\(]{0,1}9[0-9]{2}[)]{0,1}\s?\d{3}\s?[\-]{0,1}\d{2}\s?[\-]{0,1}\d{2}">
        <input type="text" placeholder="Укажите ваш город">
      </div>
      <h6>*отмечены обязательные поля, для заполнения</h6>
      <label class="checkbox" for="agree">
        <input type="checkbox" name="agree" id="agree" class="checkbox__real">
        <span class="checkbox__custom"></span>
        <p>Нажимая кнопку “Отправить” Вы соглашаетесь на<br> обработку <a href="">персональных данных</a></p>
      </label>
      <button class="button_orange" type="submit">Отправить</button>
    </form>
  </main>

  <?php
        include "include/footer.php";
    ?>
</body>

</html>