<?php
// People Array @TODO - Get from DB
$student = ['asish','venkat','charan','prem','priyanka','bhavani','tejaswi','praneetha','nissi'];

// Get Query String
$q = $_GET['m'];

$suggestion = "";

// Get Suggestions
if($q !== ""){
	$q = strtolower($q);
	// $len = strlen($q);
	foreach($student as $p){
		if(stristr($p,$q)){ 
			$suggestion = $suggestion.", $p";
		}
	}
}

echo $suggestion === "" ? "No Suggestion" : $suggestion;












// if(stristr($person, $q)){ 

// if(stristr($q, substr($person,0,len))){ 