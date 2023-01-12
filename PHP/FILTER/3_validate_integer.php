<?php
$i = 100.555;

if (filter_var($i, FILTER_VALIDATE_INT) == true) {
  echo("Integer is valid");
} else {
  echo("Integer is not valid");
}
?>