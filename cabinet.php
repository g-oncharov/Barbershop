<?php require('model/cabinet.php'); ?>
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
</head>
<body>
  <?php require 'template/header.php'; ?>

<?php if ($_SESSION['status'] == 10): ?>
  <main class="page__main page__main--admin-cabinet">
    <section class="page__form">
      <h3 class="form__title">Добавление поста</h3>
      <a href="index.php" class="form__link button">На главную</a>
      <form class="form__form" method="post" enctype="multipart/form-data">

        <div class="form__contacts">
          <label for="name"></label>
          <input type="text" name="name" placeholder="Имя поста" id="name" class="name" required>

          <textarea name="description" placeholder="Описание поста" required></textarea>

          <label for="image"></label>
          <input type="file" name="image" id="image" class="input--file" required>

          <ul class="add__list">
              <li class="filters-add__option">
                <input class="visually-hidden filters__input filters__input--checkbox" type="checkbox" id="haircut" name="haircut" value="1">
                <label for="haircut">Стрижка</label>
              </li>

              <li class="filters-add__option">
                <input class="visually-hidden filters__input filters__input--checkbox" type="checkbox" id="shaving" name="shaving" value="1">
                <label for="shaving">Бритье</label>
              </li>

              <li class="filters-add__option">
                <input class="visually-hidden filters__input filters__input--checkbox" type="checkbox" id="mustache" name="mustache" value="1">
                <label for="mustache">Усы</label>
              </li>
          </ul>
          <button class="button button--filters" type="submit">Зарегистрироваться</button>
        </div>
      </form>
    </section>
  </main>
<?php else: ?>
  <main class="page__main page__main--user-cabinet">
    <section class="page__form">
      <h3 class="form__title">Ваши записи</h3>
      <a href="index.php" class="form__link button">На главную</a>
      <p class="page__form__text">С вами свяжуться в течении часа после создания заявки!</p>
    <?php if (isset($items)): ?>
        <ul class="list-records">
        <?php foreach ($items as $item): ?>
            <li>
              <p><span>Ваш тип бороды:</span> <?= $item['beard_type']?></p>
              <p><span>Стоимость:</span> <?= $item['cost']?></p>
              <p><span>Дата заявки:</span> <?= $item['date']?></p>
            </li>
        <?php endforeach; ?>
      </ul>
    <?php else: ?>
    <div class="no-records">
      <p class="no-records__text">У вас еще нет записей!</p>
    </div>
    <?php endif; ?>

    </section>
  </main>
<?php endif; ?>

<?php require 'template/footer.php'; ?>
<script type="text/javascript">
 document.querySelectorAll('.site-list__item')[4].classList.add('site-list__item--active');
 document.querySelectorAll('.site-list__item')[4].querySelector('a').href = '#';
</script>
<script src="scripts/script.js" type="text/javascript"></script>
</body>
</html>
