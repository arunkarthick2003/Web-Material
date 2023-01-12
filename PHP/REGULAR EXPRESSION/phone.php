<?php
$no = "987546";

$rg = "/^9[\d]{9}$/";

if(preg_match($rg,$no)){
  echo "valid ph no";
}
else{
    echo "in-valid ph no";
}
?>