<?php

/* Страница входа */

$patitle = 'Войти в аккаунт'; // Название страницы
$description = '';               // Описания страницы
$keywords = '';                  // Ключевые слова черз запятую

?>
<form class="sign" action="/index.php" method = "post">
<input type="text" name="username" placeholder="логин" class="box"><br>
<input type="password" name="password" placeholder="пароль" class="box"><br>
<input type = "submit" value = "Войти"><br>
</form>