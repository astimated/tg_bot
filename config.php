<?php
# Отображение всех ошибок
error_reporting (E_ALL);
ini_set('display_errors', 1);
ini_set('error_prepend_string',"<div class='error'>");
ini_set('error_append_string',"</div>");
ini_set('display_startup_errors', 1);



define ('DS', DIRECTORY_SEPARATOR); // разделитель для путей к файлам

//define ('SITE_PATH', 'http://192.168.1.22/books');
//define ('SITE_PATH', 'http://192.168.207.47/monitor'); // путь к корневой папке сайта
define ('SITE_PATH', 'http://localhost/bot');
//define ('SITE_PATH', 'http://192.168.205.41/books');
define ('debug_mode', false); # выводить сообщения дебага

# Настройки для подключения к бд
define('DB_USER', 'root');
define('DB_PASS', ''); // Forweak1988.
define('DB_HOST', 'localhost');
define('DB_NAME', 'books');

# временные настройки acl, язык, почты и т.д.

$default_language = "ru";
$acl_check = true; # проверка аутентификации и т.д
$date_format = "d.m.Y H:i:s";
$current_version = "0.0.1";
//$current_timezone = "Europe/Moscow";


$default_theme = "default";
date_default_timezone_set('Europe/Moscow');



?>

