<?php

/* Модуль: Новости */

if($_GET['id']) {

  $id = $_GET['id'];
  $query = mysql_query("SELECT id,title,translate_title,full FROM news WHERE translate_title ='$id'");
  $row = mysql_fetch_array($query);
  
  $idnews = $row['translate_title'];

  if($idnews == $_GET['id']) {

  echo '<h1>' . $row['title'] . '</h1>';
  echo $row['full'] . '<br><br><br>';
  echo '<b>Комментарии:</b><br>...<br>';

 }

} elseif($_GET['section'] == 'add') {

  include('engine/modules/news/add.php');

} elseif($_GET['section'] == 'edit') {

  include('engine/modules/news/edit.php');

} elseif($_GET['page'] == 'news' or $_GET['num'] and !$_GET['section'] and !$_GET['id']) {

  include('engine/modules/news/main.php');

} else {

  include ('engine/modules/pages/404.php');

}


?>