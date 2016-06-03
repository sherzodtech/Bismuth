<?php

/* Добавления новостей */

$title = $_POST['title'];
$translate_title = $_POST['translate_title'];
$short = $_POST['short'];
$full = $_POST['full'];
$category = $_POST['category'];
$date = $_POST['date'];

if(isset($_POST['ok']))
{
	$query = mysql_query("INSERT INTO news(title,translate_title,short,full,category,date) VALUES ('$title','$translate_title','$short','$full','$category','$date')");
	echo 'Новость успешно добавлена!';
}

?>
<form method="post" action="/news/add/">

Название новости<br>
<input type="text" id="text" name="title" onKeyUp="send()"><br>

Название в url (A-Z,a-z,0-9 и _, -,+)<br>

<script type='text/javascript'>
function send(){
var text=document.getElementById('text').value;
var transl=new Array();
    transl['А']='A';     transl['а']='a';
    transl['Б']='B';     transl['б']='b';
    transl['В']='V';     transl['в']='v';
    transl['Г']='G';     transl['г']='g';
    transl['Д']='D';     transl['д']='d';
    transl['Е']='E';     transl['е']='e';
    transl['Ё']='Yo';    transl['ё']='yo';
    transl['Ж']='Zh';    transl['ж']='zh';
    transl['З']='Z';     transl['з']='z';
    transl['И']='I';     transl['и']='i';
    transl['Й']='J';     transl['й']='j';
    transl['К']='K';     transl['к']='k';
    transl['Л']='L';     transl['л']='l';
    transl['М']='M';     transl['м']='m';
    transl['Н']='N';     transl['н']='n';
    transl['О']='O';     transl['о']='o';
    transl['П']='P';     transl['п']='p';
    transl['Р']='R';     transl['р']='r';
    transl['С']='S';     transl['с']='s';
    transl['Т']='T';     transl['т']='t';
    transl['У']='U';     transl['у']='u';
    transl['Ф']='F';     transl['ф']='f';
    transl['Х']='X';     transl['х']='x';
    transl['Ц']='C';     transl['ц']='c';
    transl['Ч']='Ch';    transl['ч']='ch';
    transl['Ш']='Sh';    transl['ш']='sh';
    transl['Щ']='Shh';    transl['щ']='shh';
    transl['Ъ']='';     transl['ъ']='';
    transl['Ы']='I';    transl['ы']='i';
    transl['Ь']='';    transl['ь']='';
    transl['Э']='E';    transl['э']='e';
    transl['Ю']='Yu';    transl['ю']='yu';
    transl['Я']='Ya';    transl['я']='ya';
    transl[' ']='_';

    var result='';
    for(i=0;i<text.length;i++) {
        if(transl[text[i]]!=undefined) { result+=transl[text[i]]; }
        else { result+=text[i]; }
    }
    document.getElementById('text_2').value=result;
}
</script>

<input type="text" id="text_2" name="translate_title"><br>

Категория:<br>
<select name="category">
<option disabled>Выберите категорию</option>
<option value="movies">Кино</option>
<option value="music">Музыка</option>
<option value="concert">Шоу-бизнес</option>
<option value="others" selected>Другие</option>
</select>
<br>
Краткое описания:<br>
<textarea name="short" cols="40" rows="3"></textarea><br>

Полное описания<br>
<textarea name="full" cols="40" rows="10"></textarea><br>

Дата:<br>
<input type="date" name="date"><br>

<input type="submit" name="ok" value="Добавить">
</form>