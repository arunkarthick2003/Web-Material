<?php






$fptr = fopen("asish.txt", "r");

// Reading a file line by line
$c= 0;
while($a=fgets($fptr)){
   $c=$c+1; 
}
echo $c;
// echo "<br>";
// echo "End of the file has been reached";


// fgetc reads a file character by character
// echo fgetc($fptr); 

// Reading a file character by character
while($a=fgetc($fptr)){
    echo $a;
    echo "<br>";
    }
// echo "End of the file has been reached";


// Write a program which counts number of .
$fptr = fopen("asish.txt", "r");
$s=0;

while($a=fgetc($fptr)){
     if($a=='.')
     {
        $s= $s+1;
     }
    

    }


echo $s;
fclose($fptr);

?>
