<?php
// The preg_match() function will tell you whether a string contains matches of a pattern.






$str = "i am from Vit";
$pattern = "/vit/i";
 if(preg_match($pattern, $str))
 {
     echo " the pattern is present";
 } 
 else{
     echo "not present";
 }



?>