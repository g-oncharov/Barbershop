<?php
session_start();
require('login.php');
$serverPost = $_SERVER['REQUEST_METHOD'] == 'POST';
if ($_SESSION['status'] == 10) {
if ($serverPost) {
  if (isset($_FILES['image'])) {
  // Получаем нужные элементы массива "image"
  $fileTmpName = $_FILES['image']['tmp_name'];
  $errorCode = $_FILES['image']['error'];
  // Проверим на ошибки
  if ($errorCode !== UPLOAD_ERR_OK || !is_uploaded_file($fileTmpName)) {
      // Массив с названиями ошибок
      $errorMessages = [
        UPLOAD_ERR_INI_SIZE   => 'Размер файла превысил значение upload_max_filesize в конфигурации PHP.',
        UPLOAD_ERR_FORM_SIZE  => 'Размер загружаемого файла превысил значение MAX_FILE_SIZE в HTML-форме.',
        UPLOAD_ERR_PARTIAL    => 'Загружаемый файл был получен только частично.',
        UPLOAD_ERR_NO_FILE    => 'Файл не был загружен.',
        UPLOAD_ERR_NO_TMP_DIR => 'Отсутствует временная папка.',
        UPLOAD_ERR_CANT_WRITE => 'Не удалось записать файл на диск.',
        UPLOAD_ERR_EXTENSION  => 'PHP-расширение остановило загрузку файла.',
      ];
      // Зададим неизвестную ошибку
      $unknownMessage = 'При загрузке файла произошла неизвестная ошибка.';
      // Если в массиве нет кода ошибки, скажем, что ошибка неизвестна
      $outputMessage = isset($errorMessages[$errorCode]) ? $errorMessages[$errorCode] : $unknownMessage;
  } else {
      // Создадим ресурс FileInfo
      $fi = finfo_open(FILEINFO_MIME_TYPE);
      // Получим MIME-тип
      $mime = (string) finfo_file($fi, $fileTmpName);
      // Проверим ключевое слово image (image/jpeg, image/png и т. д.)
      if (strpos($mime, 'image') === false) {
        $outputMessage = 'Можно загружать только изображения.';
      }

      // Результат функции запишем в переменную
      $image = getimagesize($fileTmpName);

      // Зададим ограничения для картинок
      $limitBytes  = 1024 * 1024 * 5;

      // Проверим нужные параметры
      if (filesize($fileTmpName) > $limitBytes) {
        $outputMessage = 'Размер изображения не должен превышать 5 Мбайт.';
      }

      // Сгенерируем новое имя файла через функцию getRandomFileName()
      $name = md5_file($fileTmpName);

      // Сгенерируем расширение файла на основе типа картинки
      $extension = image_type_to_extension($image[2]);

      // Сократим .jpeg до .jpg
      $format = str_replace('jpeg', 'jpg', $extension);
      if ($format != '.png' && $format != '.jpg') {
        $outputMessage = 'Можно загружать изображения только .jpg или .png формата.';
      }
      $path =  dirname(__DIR__, 1) . "\\" ."img/posts/";
      $file = $name . $format;
      // Переместим картинку с новым именем и расширением в папку /upload
      if (!move_uploaded_file($fileTmpName, $path . $file)) {
        $outputMessage = 'При записи изображения на диск произошла ошибка.';
      }
      if ($outputMessage == '') {
        require('db/init.php');
        $namePost = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
        $description = filter_var(trim($_POST['description']), FILTER_SANITIZE_STRING);
        $haircut = intval(filter_var(trim($_POST['haircut']), FILTER_SANITIZE_NUMBER_INT));
        $shaving = intval(filter_var(trim($_POST['shaving']), FILTER_SANITIZE_NUMBER_INT));
        $mustache = intval(filter_var(trim($_POST['mustache']), FILTER_SANITIZE_NUMBER_INT));

        $sql = "INSERT INTO `posts` (`name`, `description`, `img`, `haircut`, `shaving`, `mustache`) VALUES( '$namePost', '$description', '$file', '$haircut', '$shaving', '$mustache')";
        mysqli_query($mysql, $sql);
        header('Location: /photo.php');
      }
    }
  };
}
}else {
require('db/init.php');
$user = $_SESSION['user_id'];
$query = "SELECT * FROM `records` WHERE `user_id` = '$user' ORDER BY `id` DESC";
$result = mysqli_query($mysql, $query);
while ($item = mysqli_fetch_assoc($result))
    $items[] = $item;
}
