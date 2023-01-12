<!DOCTYPE html>
<html lang="en">
<head>
     <title>Document</title>
</head>
<body>
    <?php 
    $r=''; 

     if(isset($_GET['do']))
     {
        $v1= $_GET['n1'];
        $v2= $_GET['n2'];
        $r= $v1+ $v2;
     }
    ?>
    <form action="" method="get">
        <input type="text" name="n1"> <br>
        <input type="text" name="n2"> <br>
        <input type="radio" name="favorite_pet" value="Cats" checked>Cats<br>
        <input type="radio" name="favorite_pet" value="Dogs">Dogs<br>
        <input type="radio" name="favorite_pet" value="Birds">Birds<br>
        <label> Result: <?php echo $r; ?> </label><br>
        <input type="submit" value="ADD" name="do">
        

    </form>

   
</body>
</html>