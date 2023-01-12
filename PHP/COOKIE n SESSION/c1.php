<?php
echo "Welcome <br>";

// Cookies 
// Syntax to set a cookie

// setcookie(name, value, expire, where to store); 

setcookie("choice", "horror", time() + 60, "/"); 
setcookie("product", "books", time() + 60, "/"); 

echo "The cookie is set<br>";

?>
