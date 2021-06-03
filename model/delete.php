<?php
session_start();
if ($_SESSION['status'] == 10) {
  require('../db/init.php');
  $id = $_GET['id'];
  mysqli_query($mysql, "DELETE FROM `posts` WHERE `posts`.`id` = '$id'");
  header('Location: /photo.php');
}else {
  header('Location: /photo.php');
}
