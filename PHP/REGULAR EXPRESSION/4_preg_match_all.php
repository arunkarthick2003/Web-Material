<?php
// The preg_match_all() function will tell you how many matches were found for a pattern in a string.

$str = "When the going gets tough,THE tough get going.";
$pattern = "/the/";
echo preg_match_all($pattern, $str); // Outputs 
?>