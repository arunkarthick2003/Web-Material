<?php


// Get the text
$q = htmlentities($_GET['m']);

$small='0';
$cap='0';
$len='0';
$spe ='0';



// check the password
if($q !== ""){

    if(preg_match('/[A-Z]+/',$q )){
        $cap=1;
       }
    if(preg_match('/[a-z]+/',$q )){
        $small=1;
       }   
	if(strlen($q)>= 8)
        {
            $len=1;
        }
    if(preg_match('/[!@$%^&*()]+/',$q )){
            $spe=1;
           }  
   

	
	
}
$status=$small.$cap.$len.$spe;
echo $status;











