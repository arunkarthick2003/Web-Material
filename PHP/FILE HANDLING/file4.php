<?php


// echo "Welcome to write files in php in write mode and append mode";

// Writing to a file in php

 // create a file for u if not there, delete the file and create a blank file if already present if opened in w mode.
// $fptr = fopen("vit.txt", "w"); 

// fwrite($fptr, "Correct your mind and the rest of your life will fall into place....\n"); 

// fwrite($fptr, "This is another line\n"); 
// fwrite($fptr, "This is one more line"); 

// fclose($fptr);


// Appending to a file in php
$fptr = fopen("vit.txt", "a");
fwrite($fptr, "hi i m from VIT."); 
fclose($fptr);

?>
