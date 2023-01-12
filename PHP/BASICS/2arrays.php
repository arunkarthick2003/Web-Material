<?php
	#Array - Variable that holds multiple values
	/*
		- Indexed
		- Associative
		- Multi-dimensional
	*/

	// Indexed
	// $people = array('iwt', 'java', 'Dbms',123.5.5);

	// $ids = [23, 55, 12,'abcd'];
	
	$cars = ['Honda', 'Toyota', 'Ford', 123 , 456];

	
	// echo $cars[4];

//  echo count($cars);
	// print_r($cars);

	// var_dump($ids);

	//echo $people[3];
	//echo $ids[2];
	//echo $cars[4];

	// Associative arrays


	$people = array('amish' => 35, 'asish' => 25, 'dev' => 37);
	
	$ranks = [22 => 'vit', 44 => 'nit', 63 => 'iit'];

	// echo $people['dev'];


	// echo $ranks[63];



	// $people['rahul'] = 42;
	// echo $people['asish'];
	// print_r($people);
	//var_dump($people);

	// Multi-Dimensional

	$cars = [
		['Honda', 20, 10,78,'asish'],
		['Toyota', 30, 20],
		['Ford', 23]
	];

	 echo $cars[0][3];


?>