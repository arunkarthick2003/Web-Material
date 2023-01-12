<?php
// Connecting to the Database
$servername = "127.0.0.1";
$username = "root";
$password = "";

// Create a connection
$conn = mysqli_connect($servername, $username, $password);

// Die if connection was not successful
if ($conn){
    echo "Connection is successful";
}
else{
    die("Sorry we failed to connect: ". mysqli_connect_error());
}

?>

