<!DOCTYPE html>
<html>
<head>
<style>
table {
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
  border: 2px solid red;
  padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q1 = $_GET['name'];
$q2 = $_GET['job'];


$con = mysqli_connect('localhost','asish','asish','vitap_db');


if($q1!='' or $q2!='')
{

if($q1!='' and $q2=='')
{
$sql="SELECT * FROM user WHERE FirstName = '".$q1."'";
}

else if($q1=='' and $q2!='')
{
 $sql="SELECT * FROM user WHERE job ='".$q2."'";
}

else
{
$sql="SELECT * FROM user WHERE FirstName = '".$q1."'and job ='".$q2."'";
}


$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Hometown</th>
<th>Job</th>
</tr>";
while($row = mysqli_fetch_assoc($result)) {
  echo "<tr>";
  echo "<td>" . $row['FirstName'] . "</td>";
  echo "<td>" . $row['LastName'] . "</td>";
  echo "<td>" . $row['Hometown'] . "</td>";
  echo "<td>" . $row['Job'] . "</td>";
  echo "</tr>";
}
echo "</table>";
}
mysqli_close($con);
?>
</body>
</html>