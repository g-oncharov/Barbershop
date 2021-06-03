<?php
$mysql = mysqli_connect('localhost', 'root', 'root', 'barbershop');
if ($mysql == false) {
  echo "База данных не подключенна";
  exit();
}
