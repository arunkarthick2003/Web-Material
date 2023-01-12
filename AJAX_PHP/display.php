<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "vitap_db";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Get Query String
$q = $_GET['d'];

$sug = "";

if($q !== "")
{
$q = strtolower($q);
$s = "SELECT first_name FROM student where first_name LIKE '%$q%'";

$result = mysqli_query($conn, $s);


$num = mysqli_num_rows($result);


if($num> 0){
    
    while($r = mysqli_fetch_assoc($result))
	{
		$sug = $sug.", ".$r['first_name'];
       
    }
}
	
}
echo $sug === "" ? "No Suggestion" : $sug;
