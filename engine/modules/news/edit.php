<table width=600 align=center cellspacing=0 cellpadding=2 border=0>
<td height="10" width="10%" align=left bgcolor="#fff" style='border-top: 1px solid #<?echo fff?>; border-left: 1px solid #<?echo fff?>; border-right: 1px solid #<?echo fff?>; border-bottom: 1px solid #<?echo fff?>'>
<font>
Удалить
</td>
<td height="10" width="10%" align=left bgcolor="#fff" style='border-top: 1px solid #<?echo fff?>; border-right: 1px solid #<?echo fff?>; border-bottom: 1px solid #<?echo fff?>'>
<font>
ID
</td>
<td height="10" width="50%" align=left bgcolor="#fff" style='border-top: 1px solid #<?echo fff?>; border-right: 1px solid #<?echo fff?>; border-bottom: 1px solid #<?echo fff?>'>
<font>
Название
</td>
<td height="10" width="50%" align=left bgcolor="#fff" style='border-top: 1px solid #<?echo fff?>; border-right: 1px solid #<?echo fff?>; border-bottom: 1px solid #<?echo fff?>'>
<font>
Дата
</td>
<tr>
</tr>
<?php
$sql = "SELECT * FROM news ORDER BY id DESC";
$sql_result = mysql_query($sql) or die ("<font face=verdana>Error: ".mysql_error());
while ($row = mysql_fetch_array($sql_result))
 {
  $title = $row["title"];
  $section = $row['category'];
  $translate_title = $row["translate_title"];
  $text = $row["full"];
  $id = $row["id"];
  $date = $row["date"];
  echo "<td height=10 width=10% align=left bgcolor=#fff style='border-top: 1px solid #fff; border-left: 1px solid #fff; border-right: 1px solid #fff; border-bottom: 1px solid #fff'>
<font>
<a href='?action=delete&id=$id' alt='You cannot undo this!'>Удалить</a>
</td>
<td height=10 width=10% align=left bgcolor=#fff style='border-top: 1px solid #fff; border-right: 1px solid #fff; border-bottom: 1px solid #fff'>
<font>
$id
</td>
<td height=10 width=50% align=left bgcolor=#fff style='border-top: 1px solid #fff; border-right: 1px solid #fff; border-bottom: 1px solid #fff'>
<font>";
echo '<a href="/news/' . $section . '/' . $translate_title . '/">' . $row['title'] . '</a>';
echo "</td>
<td height=10 width=50% align=left bgcolor=#fff style='border-top: 1px solid #fff; border-right: 1px solid #fff; border-bottom: 1px solid #fff'>
<font>
$date
</td>
<tr>
</tr>";
 }
echo "</td></table>";
echo "<table width=600 align=center cellspacing=0 cellpadding=2 border=0>";

?>