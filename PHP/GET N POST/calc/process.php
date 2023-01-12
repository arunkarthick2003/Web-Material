<?php
$result='';
$err1=$err2='';

if($_SERVER['REQUEST_METHOD'] == 'POST')
{ 
    if(isset($_POST['clr']))
    {
     
        header("Location:calc.php");
        exit();
    }

    if(empty($_POST['inp1']))
    {
    $err1="1";
    }
    if(empty($_POST['inp2']))
    {
    $err2="2";
    }

    if(empty($_POST['inp1']) || empty($_POST['inp2']))
    {
        header("Location:calc.php?err1=$err1&err2=$err2");
        exit();
    }




    $num1 = $_POST['inp1'];
    $num2 = $_POST['inp2'];



    if(isset($_POST['add']))
    {
        $result= $num1+$num2;
        header("Location:calc.php?res= $result");
        exit();
    }
    if(isset($_POST['sub']))
    {
        $result= $num1-$num2;
        header("Location:calc.php?res= $result");
        exit();
    }
    if(isset($_POST['mul']))
    {
        $result= $num1*$num2;
        header("Location:calc.php?res= $result");
        exit();
    }
    if(isset($_POST['div']))
    {
        $result= $num1/$num2;
        header("Location:calc.php?res= $result");
        exit();
    }
    if(isset($_POST['mod']))
    {
        $result= $num1%$num2;
        header("Location:calc.php?res= $result");
        exit();
    }

 
}
else
{
    header("Location:calc.php");
    exit();
}


?>