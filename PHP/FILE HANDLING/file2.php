<?php

// $fptr = fopen("asish.txt", "r");

// echo var_dump($fptr);
// if(!$fptr){
//     die("Unable to open this file.Please enter a valid filename");
// }
$fptr = fopen("asish.txt", "r");
$content = fread($fptr, 5);
// $content = fread($fptr, filesize("asish.txt"));
fclose($fptr);

echo $content;

?>
