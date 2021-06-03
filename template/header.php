<header class="page-header">

    <a href="" class="page-heder__logo">
      <picture>
        <source srcset="img/logo.svg" media="(min-width: 1200px)">
        <source srcset="img/logo-tabled.svg" media="(min-width: 768px)">
        <source srcset="img/logo-mob.svg" media="(max-width: 767px)">
        <img src="img/logo.svg" alt="Барбершоп Бородинский">
      </picture>
    </a>

      <nav class="main-nav">
        <button class="main-nav__toggle" type="button">Открыть меню</button>
        <button class="main-nav__toggle2" type="button">Закрыть меню</button>

          <div class="main-nav__wrapper">

            <ul class="main-nav__list site-list">
              <li class="main-nav__item site-list__item">
                <a href="index.php">Главная</a>
              </li>
              <li class="main-nav__item site-list__item">
                <a href="photo.php">Наши работы</a>
              </li>
              <?php if ($_SESSION['auth']): ?>
              <li class="main-nav__item site-list__item">
                <a href="form.php">Записаться</a>
              </li>
              <?php else: ?>
              <li class="main-nav__item site-list__item">
                <a href="#" id="button--login2">Записаться</a>
              </li>
              <?php endif; ?>
              <li class="main-nav__item site-list__item">
                <a href="#page-footer">Контакты</a>
              </li>
              <?php if ($_SESSION['auth']): ?>
              <li class="main-nav__item site-list__item">
                <a href="cabinet.php"><?= $_SESSION['login']?></a>
              </li>
              <?php else: ?>
              <li class="main-nav__item site-list__item">
                <a href="registration.php">Регистрация</a>
              </li>
              <?php endif; ?>
            </ul>

            <ul class="main-nav__list user-list">
              <?php if ($_SESSION['auth']): ?>
              <li class="main-nav__item user-list__item">
                <a href="model/logout.php" class="user-list__login">Выйти</a>
              </li>
              <?php else: ?>
              <li class="main-nav__item user-list__item">
                <a href="#" class="user-list__login" id="button--login">Войти</a>
              </li>
              <?php endif; ?>
            </ul>

          </div>
      </nav>
  </header>
