<?php
$file=fopen("file_modes.txt","r");
echo fread($file,filesize("file_modes.txt"));
fclose($file);

$file=fopen("file_modes.txt","w");
fwrite($file,"using w mode");
fclose($file);
echo "<br><br>";

$file=fopen("file_modes.txt","a");
fwrite($file,"  Appending content");
fclose($file);
/*
$file=fopen("file_modes2.txt","x");
fwrite($file,"new file created");
fclose($file);
*/

$file = fopen("file_modes.txt","r+");
fwrite($file, "PHP");
echo "file read and write"."<br>";

$file = fopen("file_modes.txt","w+");
fwrite($file, "java");
echo "erase old date"."<br>";

$file = fopen("file_modes.txt","a+");
fwrite($file, " is my favourite language");
echo "file read and write";









?>
