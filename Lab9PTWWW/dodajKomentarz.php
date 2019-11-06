<?php
$comments = fopen("komentarze.txt", "a");

fwrite($comments, "\n");

$txt =  $_POST["author"];
fwrite($comments, $txt."\n");
$txt = date("Y/m/d H:i");
fwrite($comments, $txt."\n");
$txt =  $_POST["comment"];
fwrite($comments, $txt);

fclose($comments);

header('Location: index.php');
?>
