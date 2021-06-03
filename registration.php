<?php require('model/registration.php'); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone=no">
  <title>Барбершоп «Бородинский»</title>
  <link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" href="../css/index.css">
  <link rel="stylesheet" href="../css/form.css">
  <link rel="icon" type="image/png" href="img/fav-icon.png" sizes="16x16">
  <script src="scripts/validateRegistration.js" type="text/javascript"></script>
</head>
<body>
  <?php require 'template/header.php'; ?>

  <main class="page__main page__main--registration">
    <section class="page__form">
      <h3 class="form__title">Регистрация</h3>
      <a href="index.php" class="form__link button">На главную</a>
      <form class="form__form" method="post" onsubmit="return validateRegistration(this);">
        <?php if ($serverPost && $errorText != ""): ?>
        <p class="error-msg--login"><?= $errorText?></p>
        <?php endif; ?>
        <div class="form__name">
            <label for="sur-name"></label>
            <input type="text" name="surName" placeholder="Фамилия" id="sur-name" class="surname" value="<?=$lNameText?>">
            <p class="error-msg">Заполните фамилию</p>

            <label for="first-name"></label>
            <input type="text" name="firstName" placeholder="Имя" id="first-name" class="first-name" value="<?=$fNameText?>">
            <p class="error-msg">Заполните имя</p>

        </div>

        <div class="form__contacts">
          <label for="nickname"></label>
          <input type="text" name="nickname" placeholder="Логин" id="nickname" class="nickname" value="<?=$loginText?>">
          <p class="error-msg">Длина логина должна быть от 2 до 30 символов</p>
          <label for="telephone"></label>
          <input type="text" name="telephone" placeholder="Контактный телефон" id="telephone" class="telephone" value="<?=$telText?>">
          <p class="error-msg">Длина номера телефона должна быть от 4 до 20 символов</p>

          <label for="pass"></label>
          <input type="password" name="pass" placeholder="Пароль" id="pass" class="pass">
          <p class="error-msg">Длина пароля должна быть от 4 до 20 символов</p>

          <label for="pass2"></label>
          <input type="password" name="pass2" placeholder="Повторите пароль" id="pass2" class="pass">
          <p class="error-msg">Пароли должны быть одинаковы</p>
          <button class="button button--filters" type="submit">Зарегистрироваться</button>
        </div>
      </form>
    </section>

  </main>

<?php require 'template/footer.php'; ?>
<?php require 'template/login-modal.php'; ?>
<script type="text/javascript">
 document.querySelectorAll('.site-list__item')[4].classList.add('site-list__item--active');
 document.querySelectorAll('.site-list__item')[4].querySelector('a').href = '#';
</script>
<script src="scripts/script.js" type="text/javascript"></script>
</body>
</html>
