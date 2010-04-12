<?php
$myFile = "rsvplist.csv";
$fh = fopen($myFile, 'a') or die("can't open file");
$stringData = '"' . addslashes($_POST['name']). '","' . addslashes($_POST['email']) . '","'. addslashes($_POST['fri']) . '","' . addslashes($_POST['sat']) . '","' . addslashes($_POST['beer']) . '"' . "\n";
fwrite($fh, $stringData);
fclose($fh);

?>{"success":true}