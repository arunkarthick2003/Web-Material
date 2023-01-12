<?php
// Start the session and get the data
session_start();
if(isset($_SESSION['username'])){
  
    echo "Welcome ". $_SESSION['username'];
    echo "<br> Your favorite movie  category is ". $_SESSION['favmov'];
    echo "<br>";
    }
 else{

    echo "You are logged out due to inactivity for more than 15 minute";
 }
   



?>
