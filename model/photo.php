<?php
session_start();
require_once('login.php');
$query = "SELECT * FROM `posts` ORDER BY `id` DESC";
$result = mysqli_query($mysql, $query);
while ($item = mysqli_fetch_assoc($result))
    $items[] = $item;
