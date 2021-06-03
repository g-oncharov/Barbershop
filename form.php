<?php require('model/form.php'); ?>
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

  <main class="page__main">
    <section class="page__form">
      <h3 class="form__title">Запись на стрижку</h3>
      <a href="index.php" class="form__link button">На главную</a>
      <form class="form__form" method="post">
        <fieldset class="form__bread">
          <legend>Выберите модель бороды:</legend>

              <ul class="bread__list">
                <li class="filters__option">
                <input class="visually-hidden filters__input filters__input--radio" type="radio" id="filter-beard--admiral" name="beard_type" value="Адмирал" checked>
                <label for="filter-beard--admiral" class="filter-beard filter-beard--admiral">Адмирал</label>
                </li>

                <li class="filters__option">
                <input class="visually-hidden filters__input filters__input--radio" type="radio" id="filter-beard--lumberjack" name="beard_type" value="Лесоруб">
                <label for="filter-beard--lumberjack" class="filter-beard filter-beard--lumberjack">Лесоруб</label>
                </li>

                <li class="filters__option">
                <input class="visually-hidden filters__input filters__input--radio" type="radio" id="filter-beard--polar-explorer" name="beard_type" value="Полярник">
                <label for="filter-beard--polar-explorer" class="filter-beard filter-beard--polar-explorer">Полярник</label>
                </li>

                <li class="filters__option">
                <input class="visually-hidden filters__input filters__input--radio" type="radio" id="filter-beard--boyar" name="beard_type" value="Боярин">
                <label for="filter-beard--boyar" class="filter-beard filter-beard--boyar">Боярин</label>
                </li>

                <li class="filters__option">
                <input class="visually-hidden filters__input filters__input--radio" type="radio" id="filter-beard--sage" name="beard_type" value="Мудрец">
                <label for="filter-beard--sage" class="filter-beard filter-beard--sage">Мудрец</label>
                </li>
              </ul>
        </fieldset>

        <fieldset class="form__add">

          <legend>Дополнительные услуги:</legend>

          <ul class="add__list">
              <li class="filters-add__option">
              <input class="visually-hidden filters__input filters__input--checkbox" type="checkbox" id="filter-beard--paint" name="beard_coloring" value="<?= getCost("beard_coloring", $mysql)?>">
              <label for="filter-beard--paint">Подкрасить бороду</label>
              </li>

              <li class="filters-add__option">
              <input class="visually-hidden filters__input filters__input--checkbox" type="checkbox" id="filter-mustache" name="comb_beard" value="<?= getCost("comb_beard", $mysql)?>">
              <label for="filter-mustache">Накрутить усы</label>
              </li>

              <li class="filters-add__option">
              <input class="visually-hidden filters__input filters__input--checkbox" type="checkbox" id="filter-beard--сomb" name="remove_gray" value="<?= getCost("remove_gray", $mysql)?>">
              <label for="filter-beard--сomb">Причесать бороду</label>
              </li>

              <li class="filters-add__option">
              <input class="visually-hidden filters__input filters__input--checkbox" type="checkbox" id="filter-haircut--min" name="twist_a_mustache" value="<?= getCost("twist_a_mustache", $mysql)?>">
              <label for="filter-haircut--min">Подровнять виски</label>
              </li>

              <li class="filters-add__option">
              <input class="visually-hidden filters__input filters__input--checkbox" type="checkbox" id="filter-haircut--remove-gray-hair" name="trim_whiskey" value="<?= getCost("trim_whiskey", $mysql)?>">
              <label for="filter-haircut--remove-gray-hair">Убрать седину</label>
              </li>

              <li class="filters-add__option">
              <input class="visually-hidden filters__input filters__input--checkbox" type="checkbox" id="filter-haircut--baldness" name="polish" value="<?= getCost("polish", $mysql)?>">
              <label for="filter-haircut--baldness">Отполировать лысину</label>
              </li>
          <button class="button button--filters" type="submit">Отправить заявку</button>
        </fieldset>

      </form>
    </section>


  </main>

  <?php require 'template/footer.php'; ?>
  <?php require 'template/login-modal.php'; ?>
  <script type="text/javascript">
   document.querySelectorAll('.site-list__item')[2].classList.add('site-list__item--active');
   document.querySelectorAll('.site-list__item')[2].querySelector('a').href = '#';
  </script>
  <script src="scripts/script.js" type="text/javascript"></script>
</body>
</html>
