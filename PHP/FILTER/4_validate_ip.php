<?php
$ip = "255.205.15.256";

if (filter_var($ip, FILTER_VALIDATE_IP) == true) {
  echo("$ip is a valid IP address");
} else {
  echo("$ip is not a valid IP address");
}
?>