<?php
$comment = $_POST['comment'];
$name = $_POST['username'];
$dt=getdate(date("U"));
//Append it to the comments file.
$f = fopen('comments.txt', 'a');
fwrite($f, "<tr><td>$name </td><td>$dt[weekday] $dt[month] $dt[year] $dt[hours]:$dt[minutes]:$dt[seconds]</td><td>$comment</td></p>");
fclose($f);
header('location:Forum.php');
?>