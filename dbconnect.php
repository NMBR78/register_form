  <?php
      // Указываем кодировку
      header('Content-Type: text/html; charset=utf-8');

      $server = "localhost"; /* имя хоста */
      $username = "имя_пользователя_бд"; /* Имя пользователя БД */
      $password = "пароль_пользователя_бд"; /* Пароль пользователя */
      $database = "имя_базы_данных"; /* Имя базы данных */

      // Подключение к базе данный через MySQLi
      $mysqli = new mysqli($server, $username, $password, $database);

      // Проверяем, успешность соединения. 
      if ($mysqli->connect_errno) {
              die("<p><strong>Ошибка подключения к БД</strong></p><p><strong>Код ошибки: </strong> ". $mysqli->connect_errno ." </p><p><strong>Описание ошибки:</strong> ".$mysqli->connect_error."</p>");
      }

      // Устанавливаем кодировку подключения
      $mysqli->set_charset('utf8');

      //Для удобства, добавим здесь переменную, которая будет содержать название нашего сайта (у меня localhost)
      $address_site = "http://localhost";
  ?>