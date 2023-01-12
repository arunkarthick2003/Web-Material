<!DOCTYPE html>
<html lang="en">
<head>

</head>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
if($_POST['un'] == 'abc' && $_POST['pw'] == 'def')
{
    session_start();

    $_SESSION['status'] = "success";
	header("Location:profile.php");
}

}
?>
<body>
    <form action="" method="POST">
        USERNAME:<input type="text" name="un">
        PASSWORD:<input type="text" name="pw">
        <input type="submit">
</form>

<
</body>
</html>