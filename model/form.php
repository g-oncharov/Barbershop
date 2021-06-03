<?php
session_start();
require_once('db/init.php');
if (!$_SESSION['auth']) {
  header('Location: /index.php');
}

function getCost($str, $mysql) {
  $query = "SELECT `cost` FROM `prices` WHERE `service` = '$str'";
  $result = mysqli_fetch_array(mysqli_query($mysql, $query))[0];
  echo $result;
}
$serverPost = $_SERVER['REQUEST_METHOD'] == 'POST';
if ($serverPost) {
    $user = intval($_SESSION['user_id']);
    $beardType = filter_var(trim($_POST['beard_type']), FILTER_SANITIZE_STRING);
    $costArr['beard_coloring'] = filter_var(trim($_POST['beard_coloring']), FILTER_SANITIZE_NUMBER_INT);
    $costArr['comb_beard'] = filter_var(trim($_POST['comb_beard']), FILTER_SANITIZE_NUMBER_INT);
    $costArr['remove_gray'] = filter_var(trim($_POST['remove_gray']), FILTER_SANITIZE_NUMBER_INT);
    $costArr['twist_a_mustache'] = filter_var(trim($_POST['twist_a_mustache']), FILTER_SANITIZE_NUMBER_INT);
    $costArr['trim_whiskey'] = filter_var(trim($_POST['trim_whiskey']), FILTER_SANITIZE_NUMBER_INT);
    $costArr['polish'] = filter_var(trim($_POST['polish']), FILTER_SANITIZE_NUMBER_INT);
    $cost = array_sum(array_diff($costArr, array('')));
    mysqli_query($mysql, "INSERT INTO `records`(`user_id`, `beard_type`, `cost`)
      VALUES ('$user', '$beardType','$cost')");
    header('Location: /cabinet.php');
}

require_once('login.php');
