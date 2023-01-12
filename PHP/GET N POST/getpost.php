<!DOCTYPE html>
<html>
	<head>
		<title>My Website</title>
		<style>

		#err{
			color:red;
		}

		</style>

	</head>
<body>

<?php
$err = "";
$err1 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
if($_POST['xyz'] == '')
{
	$err ='This is a required field';
}
else if($_POST['efg'] == '')
{
	$err1 ='This is a required field';
}

else{
	header("Location:abc.php?n=".$_POST['xyz']); 
}


}

?>

	<form method="POST" action="" >
		<div>
			<label>Name</label><br>
			<input type="text" name="xyz" id='name' ><span id='err'> *<?php echo $err; ?> </span>

			<br><label>Password</label><br>
			
			<input type="text" name="efg" id='name'><span id='err'> *<?php echo $err1; ?> </span>

		</div>
		<input type="submit" value="Submit">
	</form>


<script>


</script>


</body>
</html>