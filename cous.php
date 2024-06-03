<?php

$phone = $_POST['phone'];
$name = $_POST['name'];
$req = $_POST['text'];
$myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
$txt = "==========================\n ".$name."\n".$phone."\n".$req."\n=================================\n";
fwrite($myfile, $txt);
fclose($myfile); 

?>