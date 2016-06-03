<?php

/* Модуль: Новости. Главная страница и вывод материалов */

$result = mysql_query("SELECT id FROM news");
$myrow = mysql_fetch_array($result);
$num = 5;
// Извлекаем из URL текущую страницу
@$page = $_GET['num'];
// Определяем общее число сообщений в базе данных
$result_nav = mysql_query("SELECT COUNT(*) FROM news");
$temp = mysql_fetch_array($result_nav);
$posts = $temp[0];
// Находим общее число страниц
$total = (($posts - 1) / $num) + 1;
$total =  intval($total);
// Определяем начало сообщений для текущей страницы
$page = intval($page);
// Если переменная $page меньше единицы или отрицательно
// переходим на первую страницу
// А если слишком большое, то переходим на последнюю
if(empty($page) or $page < 0) $page = 1;
if($page > $total) $page = $total;
// Вычисляем начиная с какого номера
// следует выводить сообщения
$start = $page * $num - $num;
// Выбираем $num сообщений начиная с номера $start


$query = mysql_query("SELECT id,category,title,translate_title,short FROM news ORDER BY id DESC LIMIT $start,$num");
$row = mysql_fetch_array($query);

do
{
	$section = $row['category'];
	$translate_title = $row['translate_title'];

	$id = $row['id'];
	echo '<a href="/news/' . $section . '/' . $translate_title . '/"><b>' . $row['title'] . '</b></a><br>';
	echo $row['short'] . '<br><br>';  
}
while ($row = mysql_fetch_array($query));

echo '<div class="pageselect">';

// Проверяем нужны ли стрелки назад
if ($page != 1) $pervpage = '<a href=/news/1/> << </a>
<a href=/news/'. ($page - 1) .'/> < </a> ';

// Проверяем нужны ли стрелки вперед
if ($page != $total) $nextpage = ' <a href=/news/
'. ($page + 1) .'/> > </a> <a href=/news/' .$total. '/> >> </a>';

// Находим две ближайшие станицы с обоих краев, если они есть
if($page - 5 > 0) $page5left = ' <a href=/news/'.
($page - 5) .'/>'. ($page - 5) .'</a> ';
if($page - 4 > 0) $page4left = ' <a href=/news/'.
($page - 4) .'/>'. ($page - 4) .'</a> ';
if($page - 3 > 0) $page3left = ' <a href=/news/'.
($page - 3) .'/>'. ($page - 3) .'</a> ';
if($page - 2 > 0) $page2left = ' <a href=/news/'.
($page - 2) .'/>'. ($page - 2) .'</a> ';
if($page - 1 > 0) $page1left = ' <a href=/news/'.
($page - 1) .'/>'. ($page - 1) .'</a> ';

if($page + 5 <= $total) $page5right = ' <a href=/news/'.
($page + 5) .'/>'. ($page + 5) .'</a>';
if($page + 4 <= $total) $page4right = ' <a href=/news/'.
($page + 4) .'/>'. ($page + 4) .'</a>';
if($page + 3 <= $total) $page3right = ' <a href=/news/'.
($page + 3) .'/>'. ($page + 3) .'</a>';
if($page + 2 <= $total) $page2right = ' <a href=/news/'.
($page + 2) .'/>'. ($page + 2) .'</a>';
if($page + 1 <= $total) $page1right = ' <a href=/news/'.
($page + 1) .'/>'. ($page + 1) .'</a>';

// Выводим страницу на которой мы находимся
if ($total > 1)
{
echo $pervpage.$page5left.$page4left.$page3left.$page2left.$page1left.'
<span class="inpage">'.$page.'</span>
'.$page1right.$page2right.$page3right.$page4right.$page5right.$nextpage;
}

echo '</div>';

?>