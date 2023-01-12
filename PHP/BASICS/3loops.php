<?php
	# LOOPS - Execute code set number of times

	/*
		For
		While
		Do..While
		Foreach
	*/

	# For Loop
	# @params - init, condition, inc


	// for($i = 5;$i <= 10;$i++){
	// 	echo 'Number '.$i;
	// 	echo '<br>';
	// }
	

	# While Loop
	# @params - condition

	
	// $i = 0;

	// while($i < 10){
	// 	echo $i;
	// 	echo '<br>';
	// 	$i++;
	// }


	# Do...While
	# @params - condition

	// $i = 0;

	// do{
	// 	echo $i;
	// 	echo '<br>';
	// 	$i++;
	// }
	// while($i > 10);
	

	# Foreach Loop - For arrays
	
	
	$people = ['abc', 'xyz', 'ram',56,'asish'];

	foreach($people as $x){
		echo $x;
		echo '<br>';
	}
 

	// $people = ['dev' => 'dev@gmail.com', 'reddy' => 'arjun@gmail.com', 'kabir' => 'singh@gmail.com'];


	// foreach($people as $p => $x){
	// 	echo $p.': '.$x;
	// 	echo '<br>';
	// }
?>









