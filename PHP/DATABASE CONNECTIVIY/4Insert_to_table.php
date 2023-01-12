<?php

// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "vitap_db";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection is successful<br>";
}

// Variables to be inserted into the table

$r = "20bce1236";
$fn = "Ram";
$c = "GNT";

// Sql query to be executed
$s = "INSERT INTO student(regno,first_name,City) VALUES ('$r', '$fn','$c')";

$result = mysqli_query($conn, $s);


if($result){
    echo "The record has been inserted successfully!<br>";
}
else{
    echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
}
?>
