<script src="scripts/validateLogin.js" type="text/javascript"></script>
<section class="modal modal__login">
  <h3>Личный кабинет</h3>
  <p>Введите свой логин и пароль, чтобы войти</p>
  <form method="post" onsubmit="return validateLogin(this);">
    <label for="login" class="label__login"></label>
    <input id="login" name="login" type="text" placeholder="Логин">
    <p class="error-msg">Длина логина должна быть от 2 до 30 символов</p>

    <label for="password" class="label__password"></label>
    <input id="password" name="password" type="password" placeholder="Пароль">
    <p class="error-msg">Длина пароля должна быть от 4 до 20 символов</p>
    <div class="block-button">
      <input type="checkbox" id="input__checkbox" class="input__checkbox visually-hidden">
      <label for="input__checkbox" class="label__checkbox">Запомните меня</label>

      <a href="registration.php" class="block-button__remove-password">Зарегистрироваться!</a>
      <button type="submit" name="button" class="button button--login">Войти <span>в личный кабинет</span></button>
      <a href="#" class="button button--close">Закрыть</a>
    </div>
  </form>
</section>

<script>
  var buttonLog = document.querySelector("#button--login");
  var buttonLog2 = document.querySelector("#button--login2");
  var buttonLogClose = document.querySelector(".button--close");

  var modal = document.querySelector(".modal__login");

   buttonLog.addEventListener("click", function (evt) {
      evt.preventDefault();
      modal.classList.add("modal-open");
  });

   buttonLog2.addEventListener("click", function (evt) {
      evt.preventDefault();
      modal.classList.add("modal-open");
  });

  buttonLogClose.addEventListener("click", function (evt) {
      evt.preventDefault();
      modal.classList.remove("modal-open");
  });


</script>
