<?php

/* Функции движка */


$modulename = 'engine/modules/' . $_GET['page'] . '/index.php';
$pagename = 'engine/modules/pages/' . $_GET['page'] . '.php';

if(file_exists($modulename)) {
    
    include ('engine/modules/' . $_GET['page'] . '/index.php');
    
} elseif(file_exists($pagename)) {
    
    include ('engine/modules/pages/' . $_GET['page'] . '.php');
    
} elseif(!$_GET) {
    
    include ('engine/modules/pages/main.php');
    
} else {

    include ('engine/modules/pages/404.php');
}

?>

