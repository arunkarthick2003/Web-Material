<?php
// What is a session?
// Used to manage information across difference pages

// Verify the user login info
session_start();

$_SESSION['username'] = "Asish";
$_SESSION['favmov'] = "Science fiction";


echo "We have saved your session";

?>
