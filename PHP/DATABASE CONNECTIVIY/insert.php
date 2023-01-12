<html>
    <form method="POST">
        Regno:<input type="text" name = "n">
       
        <input type= submit value="DELETE">
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


if($_SERVER['REQUEST_METHOD'] == 'POST')
{

$reg = $_POST['n'];


$sql = "DELETE FROM student where regno ='$reg'";;
$res = mysqli_query($conn, $sql);

$aff = mysqli_affected_rows($conn);

if($aff>0)
    echo "Deleted successfully<hr>";
else
    echo "The regno does not exist";

}

?>
