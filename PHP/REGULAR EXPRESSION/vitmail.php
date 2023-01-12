<?php
// The preg_match() function will tell you whether a string contains matches of a pattern.


$str = "asish.d@gmail.com";
$pattern = "/^[a-zA-Z0-9\.]+@vitap.ac.in$/";
if(preg_match($pattern, $str))
 {
     echo "valid email";
 }
 else
 {
     echo "invalid mail id";
 }



?>