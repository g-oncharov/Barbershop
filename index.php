<?php require('model/index.php'); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone=no">
  <title>Барбершоп «Бородинский»</title>
  <link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" href="../css/index.css">
  <link rel="icon" type="image/png" href="img/fav-icon.png" sizes="16x16">
</head>
<body>
  <?php require 'template/header.php'; ?>
  <main class="page-main">
    <h1 class="visually-hidden">Барбершоп «Бородинский» - истинно мужская классика</h1>

      <section class="stats">
      <div class="stats__wrapper">

        <header class="stats__header">

          <div class="container">
            <div class="stats__header--wrapper">
              <h3 class="stats__slogan">Стрижка у нас <br>
                это выгодно!</h3>
              <p class="stats__intro">Мужская стрижка требует <br>точного
                подхода. Обратимся к статистике:</p>
              <small class="stats__legend stats__legend--top">
                <sup>*</sup> — приведенные данные ложь
              </small>
            </div>
            <div id="time-node"></div>
          </div>
          </header>

          <table class="stats__list">
            <tbody class="stats__tbody">

              <tr class="stats__item">
                <td class="stats__value">
                  1 500<sup>*</sup>
                </td>
                <td class="stats__field">
                  рублей <br> вложений
                </td>
              </tr>

              <tr class="stats__item">
                <td class="stats__value">
                  7 200
                </td>
                <td class="stats__field">
                  секунд <br> времени мастера
                </td>
              </tr>

              <tr class="stats__item">
                <td class="stats__value">
                90 000
                </td>
                <td class="stats__field">
                постриженных <br> волос
                </td>
              </tr>

              <tr class="stats__item">
                <td class="stats__value">
                500 000<sup>*</sup>
                </td>
                <td class="stats__field">
                лайков и <br> комплиментов
                </td>
              </tr>

            </tbody>
          </table>
      </div>

        <small class="stats__legend stats__legend--bottom">
          <sup>*</sup> — приведённые данные ложь
        </small>
      </section>

      <section class="advantages">
      <div class="container">
          <h2 class="visually-hidden">Наши преимущества</h2>

              <div class="slider">
                <input type="radio" id="btn-1" name="toggle" checked>
                <input type="radio" id="btn-2" name="toggle">
                <input type="radio" id="btn-3" name="toggle">

                <div class="slider-controls">
                  <label for="btn-1">1</label>
                  <label for="btn-2">2</label>
                  <label for="btn-3">3</label>
                </div>


          <ul class="advantages__list slider__list">

            <li class="advantages__item slider__item">
              <div class="advantages__text-block">
                <h3 class="advantages__title">Быстро</h3>
                <p class="advantages__description">
                  Мы делаем свою работу быстро!
                   Два часа пролетят незаметно
                   и вы — счастливый обладатель
                   стильной стрижки-минутки</p>
              </div>
            </li>

            <li class="advantages__item slider__item">
              <div class="advantages__text-block">
                <h3 class="advantages__title">Круто</h3>
                <p class="advantages__description">Забудьте, как вы стриглись раньше. Мы сделаем из Вас звезду футбола или
                  кино. Во всяком случае внешне.</p>
            </div>
            </li>

            <li class="advantages__item slider__item">
              <div class="advantages__text-block">
                <h3 class="advantages__title">Дорого</h3>
                <p class="advantages__description">Наши мастера — профессионалы своего дела и не могут стоить дёшево. К тому
                  же, разве цена не даёт определённый статус?</p>
              </div>
            </li>

          </ul>
        </div>
      </div>
      </section>

      <section class="news">
        <div class="news__wrapper container">
          <h3 class="news__title">Новости и акции</h3>

              <ul class="news__list">

                <li class="news__item">
                  <time class="news__date" datetime="2017-09-29">
                    <b class="news__day">29</b> сент
                  </time>

                  <p class="news__text"><a href="#">Нам наконец завезли Ягермейстер! Теперь вы можете пропустить стаканчик во время стрижки.</a></p>
                </li>

                <li class="news__item">
                  <time class="news__date" datetime="2017-09-19">
                    <b class="news__day">19</b> сент
                  </time>

                  <p class="news__text"><a href="#">В нашей команде пополнение, Борис «Бритва» Стригунец, <span>обладатель множества титулов и наград</span> пополнил наши стройные ряды. Спешите записаться!</a></p>
                </li>

                <li class="news__item news__close">
                  <time class="news__date" datetime="2017-09-09">
                    <b class="news__day">9</b> сент
                  </time>

                  <p class="news__text"><a href="#">Всё дорожает, а наши стрижки нет! Как так? Приходите, постригитесь и узнаете, в чём здесь подвох!</a></p>
                </li>
              </ul>
              <a class="news__to-all button" href="#">Показать все</a>
        </div>
      </section>

  </main>

<?php require 'template/footer.php'; ?>
<?php
  if (!$_SESSION['auth'])
    require 'template/login-modal.php';
 ?>
 <script type="text/javascript">
  document.querySelectorAll('.site-list__item')[0].classList.add('site-list__item--active');
  document.querySelectorAll('.site-list__item')[0].querySelector('a').href = '#';
 </script>
 <script src="scripts/script.js" type="text/javascript"></script>
 <script src="scripts/timer.js" type="text/javascript"></script>
</body>
</html>
