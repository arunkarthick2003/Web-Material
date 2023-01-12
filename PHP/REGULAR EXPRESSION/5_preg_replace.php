<?php

// The preg_replace() function will replace all of the matches of the pattern in a string with another string.



$str = "Lets party harder!";
$pattern = "/party/i";
echo preg_replace($pattern, "work", $str); 
?>