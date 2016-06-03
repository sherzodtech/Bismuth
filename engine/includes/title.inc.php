<?php

/* Функции тега ptitle */


// Названия страницы

function ptitle() {

	if(!$_GET and !$_GET['page'] == '404') {
    
    	echo 'Главная страница';
		    
	} elseif($_GET['id']) {

	  $id = $_GET['id'];
	  $query = mysql_query("SELECT id,title,translate_title,full FROM news WHERE translate_title ='$id'");
	  $row = mysql_fetch_array($query);
	  
	  $translate_title = $row['translate_title'];

	  if($translate_title == $_GET['id']) {

	  echo $row['title'];

	  }

	} elseif($_GET['section'] == 'add') {

	  echo 'Добавить новость';

	} elseif($_GET['section'] == 'edit') {

	  echo 'Редактирование новостей';

	}

	if($_GET['id'] or $_GET['section']) {
		echo ' - ';
	}


	$modulename = 'engine/modules/' . $_GET['page'] . '/index.php';
	$pagename = 'engine/modules/pages/' . $_GET['page'] . '.php';
	$page = $_GET['page'];

	if(file_exists($modulename)) {

		if ($_GET['page']) {

		            $res = mysql_query ("SELECT * FROM section");

		            $name = array();
		            $desc = array();

		            while ($module = mysql_fetch_array ($res))
		            {

			             $name[] = $module['name'];
			             $desc[] = $module['description'];
			             
			              
						if($_GET['page'] == $module['translate']) {

							echo $module['name'];
							$description = $module['description'];

						} elseif($_GET['page'] == 'admin') {

							if($_GET['section'] == 'add') {
								echo 'Добавить новость';
							} elseif($_GET['page'] == 'admin') {
								echo 'Админ панель';
							}

						} else {

							echo '';

						}
		              
		            }
		}

	} elseif(file_exists($pagename)) {
			    
		if($_GET['page'] == 'main') {

			echo 'Главная страница';

		} elseif ($_GET['page'] == 'signin') {

			echo 'Войти в аккаунт';
			
		} elseif ($_GET['page'] == 'signup') {

			echo 'Создать аккаунт';
			
		} elseif ($_GET['page'] == 'about') {

			echo 'О сайте';
			
		} elseif ($_GET['page'] == 'admin') {

			echo 'Админ панель';
			
		} elseif ($_GET['page'] == '404') {

			echo 'Страница не найдена! Ошибка 404.';
			
		} else {

			echo 'Страница не найдена! Ошибка 404.';

		}


	} elseif($_GET) {

		echo 'Страница не найдена! Ошибка 404.';

	}

}


// Описания страницы

function pdescription() {

	$modulename = 'engine/modules/' . $_GET['page'] . '/index.php';
	$pagename = 'engine/modules/pages/' . $_GET['page'] . '.php';
	$page = $_GET['page'];

	if(file_exists($modulename)) {

		if ($_GET['page']) {

		            $res = mysql_query ("SELECT * FROM section");

		            $name = array();
		            $desc = array();

		            while ($module = mysql_fetch_array ($res))
		            {

			             
			             $desc[] = $module['description'];

			              
						if($_GET['page'] == $module['translate']) {

							echo $module['description'];
							

						} else {

							echo '';

						}
		              
		            }
		}

	} elseif(file_exists($pagename)) {
			    
		if($_GET['page'] == 'main') {

			echo 'Это главная страница и тут много интересного';

		} elseif ($_GET['page'] == 'signin') {

			echo 'Страница входа в свой аккаунт';
			
		} elseif ($_GET['page'] == 'signup') {

			echo 'Страница для создания аккаунта';
			
		} elseif ($_GET['page'] == 'about') {

			echo 'Страница о сайте';
			
		} elseif ($_GET['page'] == '404') {

			echo 'Данная страница не существует в базе данных сайта.';
			
		} else {

			echo '';

		}


	} else {

		echo '';

	}

}


// Ключевые теги страницы

function pkeywords() {

	$modulename = 'engine/modules/' . $_GET['page'] . '/index.php';
	$pagename = 'engine/modules/pages/' . $_GET['page'] . '.php';
	$page = $_GET['page'];

	if(file_exists($modulename)) {

		if ($_GET['page']) {

		            $res = mysql_query ("SELECT * FROM section");

		            $name = array();
		            $key = array();

		            while ($module = mysql_fetch_array ($res))
		            {

			             
			             $key[] = $module['keywords'];

			              
						if($_GET['page'] == $module['translate']) {

							echo $module['keywords'];
							

						} else {

							echo '';

						}
		              
		            }
		}

	} elseif(file_exists($pagename)) {
			    
		if($_GET['page'] == 'main') {

			echo 'Главная страница';

		} elseif ($_GET['page'] == 'signin') {

			echo 'Войти, вход, логин, авторизация,';
			
		} elseif ($_GET['page'] == 'signup') {

			echo 'Создать аккаунт';
			
		} elseif ($_GET['page'] == 'about') {

			echo 'О сайте';
			
		} elseif ($_GET['page'] == '404') {

			echo 'Страница не найдена! Ошибка 404.';
			
		} else {

			echo 'Страница не найдена! Ошибка 404.';

		}


	} else {

		echo 'Страница не найдена! Ошибка 404.';

	}

}

?>