<?php require('model/photo.php'); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone=no">
  <title>Барбершоп «Бородинский»</title>
  <link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" href="../css/index.css">
  <link rel="stylesheet" href="../css/photo.css">
  <link rel="icon" type="image/png" href="img/fav-icon.png" sizes="16x16">
</head>
<body>
  <?php require 'template/header.php'; ?>

  <main class="page-main">

      <section class="photo">
      <div class="photo__wrapper">
        <h3 class="photo__title">Наши работы</h3>
        <a href="index.php" class="photo__link button">На главную</a>
        <ul class="photo__list">
          <?php foreach ($items as $item): ?>
          <li class="photo__item">

            <div class="photo__picture">
                <img src="img/posts/<?= $item['img'];?>" alt="">
            </div>

            <div class="photo__block">

              <div class="block__text">
                <h3 class="text__name"><?= $item['name'];?></h3>
                <p class="text__info"><?= $item['description'];?></p>
              </div>

                <div class="category-block">
                  <span class="category-var category-var--haircut<?if (!$item['haircut']):?> d-none<?endif;?>">Стрижка</span>
                  <span class="category-var category-var--beard<?if (!$item['shaving']):?> d-none<?endif;?>">Бритье</span>
                  <span class="category-var category-var--mustache<?if (!$item['mustache']):?> d-none<?endif;?>">Усы</span>
                </div>

                <?php if ($_SESSION['status'] == 10): ?>
                  <a href="model/delete.php?id=<?=$item['id']?>" class="delete-button">X</a>
                <?php endif; ?>
            </div>

          </li>
          <?php endforeach; ?>
        </ul>
        </div>
      </section>

      <section class="price">

          <h3 class="price__title">ПРЕЙСКУРАНТ</h3>
          <div class="price__wrapper">
            <table class="price__list">
              <tbody class="price__tbody">

                <tr class="price__item">
                  <td class="price__number">1</td>
                  <td class="price__field">Подкрасить бороду</td>
                  <td class="price__field price__field--add"><span>(</span>с мытьём головы<span>)</span></td>
                  <td class="price__value">2 000 руб.</td>
                </tr>

                <tr class="price__item">
                  <td class="price__number">2</td>
                  <td class="price__field">Причесать бороду</td>
                  <td class="price__field price__field--add"><span>(</span>с мытьём головы<span>)</span></td>
                  <td class="price__value">1 000 руб.</td>
                </tr>

                <tr class="price__item">
                  <td class="price__number">3</td>
                  <td class="price__field">Убрать седину</td>
                  <td class="price__field price__field--add"><span>(</span>с мытьём головы<span>)</span></td>
                  <td class="price__value">2 500 руб.</td>
                </tr>

                <tr class="price__item">
                  <td class="price__number">4</td>
                  <td class="price__field">Накрутить усы</td>
                  <td class="price__field price__field--add"><span>(</span>без мытья<span>)</span></td>
                  <td class="price__value">500 руб.</td>
                </tr>

                <tr class="price__item">
                  <td class="price__number">5</td>
                  <td class="price__field">Подровнять виски</td>
                  <td class="price__field price__field--add"><span>(</span>с мытьём головы<span>)</span></td>
                  <td class="price__value">500 руб.</td>
                </tr>

                <tr class="price__item">
                  <td class="price__number">6</td>
                  <td class="price__field">Отполировать лысину</td>
                  <td class="price__field price__field--add"><span>(</span>с мытьём головы<span>)</span></td>
                  <td class="price__value">500 руб.</td>
                </tr>

              </tbody>
            </table>

            <div class="price__time">
              <p class="price__info">C 10:00 до 14:00 скидка 20%</p>
            </div>
          </div>
      </section>

  </main>
  <script type="text/javascript">
   document.querySelectorAll('.site-list__item')[1].classList.add('site-list__item--active');
   document.querySelectorAll('.site-list__item')[1].querySelector('a').href = '#';
  </script>
<?php require 'template/footer.php'; ?>
<?php require 'template/login-modal.php'; ?>
<script src="scripts/script.js" type="text/javascript"></script>
</body>
</html>
