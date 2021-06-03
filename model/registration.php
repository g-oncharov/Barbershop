<?php
session_start();
if ($_SESSION['auth']) {
  header('Location: /index.php');
}
require_once('login.php');
$serverPost = $_SERVER['REQUEST_METHOD'] == 'POST';
if ($serverPost) {
    require('db/init.php');
    $login = filter_var(trim($_POST['nickname']), FILTER_SANITIZE_STRING);
    $fName = filter_var(trim($_POST['firstName']), FILTER_SANITIZE_STRING);
    $lName = filter_var(trim($_POST['surName']), FILTER_SANITIZE_STRING);
    $tel = filter_var(trim($_POST['telephone']), FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
    $errorClass = 'user-contacts__block--error';
    $errorText = '';

    $passH = password_hash($pass, PASSWORD_BCRYPT);

    $resultLogin = mysqli_fetch_array(mysqli_query($mysql, "SELECT `login` FROM `users` WHERE `login` = '$login'"))[0];
    if ($resultLogin == $login) {
        $errorText = "Этот логин уже занят";
    }else {
        mysqli_query($mysql, "INSERT INTO `users` (`login`, `first-name`, `last-name`, `tel`, `pass`) VALUES('$login', '$fName', '$lName', '$tel', '$passH')");
        $result = mysqli_query($mysql, "SELECT `id` FROM `users` WHERE `login` = '$login'");
        $user = mysqli_fetch_assoc($result);
        $_SESSION['auth'] = true;
        $_SESSION['login'] = $login;
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['status'] = 0;
        header('Location: /index.php');
    }
    mysqli_close($mysql);
}
$loginText = $login ?? '';
$fNameText  = $fName ?? '';
$lNameText  = $lName ?? '';
$telText   = $tel ?? '';
