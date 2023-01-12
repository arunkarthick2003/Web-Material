<?php
$url = "https://www.vitap.ac.in";

// Remove all illegal characters from a url
$url = filter_var($url, FILTER_SANITIZE_URL);

// Validate url
if (filter_var($url, FILTER_VALIDATE_URL) == true) {
  echo("$url is a valid URL");
} else {
  echo("$url is not a valid URL");
}
?>