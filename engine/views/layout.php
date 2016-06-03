<?php

/* Layout: Вывод движка и функции шаблона */

include('engine/includes/title.inc.php');         // Функции тега <title>

$themesurl = 'themes/' . $theme . '/main.php';    // Путь к выбранному в настройках шаблону
$headerurl = 'themes/' . $theme . '/header.php';  // Путь к верхному блоку шаблона
$footerurl = 'themes/' . $theme . '/footer.php';  // Путь к нижнему блоку шаблона

if(!file_exists($themesurl)) {

    include('themes/' . $theme . '/main.php');

} else {

    include('engine/views/main.php');
    
}


// Function header();

function head() {

	if(file_exists($headerurl)) {

	    include('themes/' . $theme . '/header.php');

	} else {

		include('engine/views/header.php');
	    
	}
}


// Function content();

function content() {

	include('engine/includes/functions.inc.php');
    
}


// Function footer();

function foot() {

	if(file_exists($headerurl)) {

	    include('themes/' . $theme . '/footer.php');

	} else {

	    include('engine/views/footer.php');
	    
	}

}

?>