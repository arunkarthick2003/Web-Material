<?php


$str = " 123abc&*^^(908hiix hello Vit";

$rg = "/[xyz]/i";

if(preg_match($rg,$str))
{
  echo "present";
}
else{
    echo "abssent";
}
?>