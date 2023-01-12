<html>
    <form method="POST">
        Regno:<input type="text" name = "n">
        City:<input type="text" name = "c">
        <input type= submit>
    </form>
</html>
<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "vitap_db";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
// if (!$conn){
//     die("Sorry we failed to connect: ". mysqli_connect_error());
// }
// else{
//     echo "Connection was successful<br>";
// }


if($_SERVER['REQUEST_METHOD'] == 'POST')
{
$c = $_POST['c'];
$r = $_POST['n'];

$s = "SELECT * FROM student where city = '$c'";

$result = mysqli_query($conn, $s);

// Find the number of records returned
$num = mysqli_num_rows($result);

echo $num;
echo " records found in my table<br>";
// Display the rows returned by the sql query
if($num> 0){

    // We can fetch in a better way using the while loop
    while($r = mysqli_fetch_assoc($result)){
        // echo var_dump($row);
        echo "<hr><b>Name:</b>".$r['first_name'] .  ".<br><b>Registration number</b> ". $r['regno'] ."<br><b>City:</b> ". $r['city'];
        echo "<br><hr>";
       
    }


    }
    else
    echo " No Record.<br>";

}
?>


