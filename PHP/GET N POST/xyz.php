 <html>
<head>
<style>
#error{
	color:red;
}
#bl{
	color:blue;
}
</style>
</head>
 </html>
 
 <?php


 $u = $_GET['uid'];

 $p = $_GET['pwd'];


 $cp =  $_GET['cpwd'];

 if($p == $cp)
 {
	echo "<div id='bl'>Welcome ".$u."</div>"; 
 }
 else
 {
	echo "<div id='error'>Password and confirm password are not equal </div>";
 }


// if($n == '')
// {
// 	echo "The name field is blank";
// }
// else
// echo "Welcome " .$n;


// if(isset($_GET['uid'])){
// 	$name = $_GET['uid'];

// 	if($name =='')
// 	echo 'USER ID IS BLANK';
// 	else
// 	echo "WELCOME " .$name;
// }

?>














 <!-- // if(isset($_POST['name'])){
// 	// print_r($_POST);
// 	$name = htmlentities($_POST['name']);
// 	echo $name;
// }



// echo $_SERVER['QUERY_STRING'];  -->

 