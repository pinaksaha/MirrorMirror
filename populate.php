<?php
/*

Pinak Saha
piaksaha@nyu.edu

*/


	ini_set('auto_detect_line_endings', TRUE);

	//file Decoration

	$file = "calorie.csv";


	//file conversion
	$rows = array_map('str_getcsv', file($file));
	$header = array_shift($rows);
	$csv = array();
	foreach ($rows as $row) 
	{
		$csv[] = array_combine($header, $row);
	}


	//print "<pre>"; print_r($csv); print "</pre>";


	//Database Conection

	$_db = array(
	
		"host" => "127.0.0.1",
		"username" => "pinak",
		"password" => "admin",
		"name" => "VFS",
	
	);
	
	 $connection = mysql_connect($_db['host'],$_db['username'],$_db['password']);
	 $databse = mysql_select_db($_db['name']);

	 // Populate the database


	 //sanitize input

	 function clean($string) 
	 {
   		$string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
   		return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
	}

	 for($i=0; $i < sizeof($csv);$i++)
	 {
	 	$name = $csv[$i]['Name'];
	 	$name = clean($name); 
	 	$calories = $csv[$i]['Calories'];
	 	$brand = $csv[$i]['Brand'];
	 	$q = "INSERT INTO  `VFS`.`FOODS` (`id` ,`name` ,`calories` ,`brand` ,`created_at` ,`updated_at`) 
	 			VALUES (NULL ,  '$name',  '$calories',  '$brand', CURRENT_TIMESTAMP ,  CURRENT_TIMESTAMP)";
	 	mysql_query($q);
	 	print mysql_error();
	 }


?>