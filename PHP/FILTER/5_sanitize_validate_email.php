<?php
$email = "asi())))sh.d@vitap.ac.in";

// Remove all illegal characters from email
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

// echo $email;

// echo "<br>";
// Validate e-mail
if (filter_var($email, FILTER_VALIDATE_EMAIL) == true) {
  echo("$email is a valid email address");
} else {
  echo("$email is not a valid email address");
}
?>