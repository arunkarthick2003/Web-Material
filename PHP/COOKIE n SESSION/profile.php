<?php

session_start();
if(isset($_SESSION['status'])){
  
    echo "WELCOME TO PROFILE PAGE";
 
    }
 else{

    echo "You cant not access the prfile page without login";
 }

?>

<form action="logout.php">
<input type="submit" value="LOGOUT">

</form>