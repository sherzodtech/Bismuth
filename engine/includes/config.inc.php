<?php

/* Конфигурация */


/* Параметры подключения к базе данных */

define ("DBHOST", "localhost");   // Сервер
define ("DBNAME", "engine");      // Название базы
define ("DBUSER", "root");        // Логин пользователя
define ("DBPASS", "");            // Пароль от базы

$db = mysql_connect(DBHOST,DBUSER,DBPASS); mysql_select_db("engine",$db);
//mysql_select_db(DBNAME,$db) or die ('Выбор БД не произошел: ' .mysql_error()); echo "Подключение к БД прошло успешно";

?>