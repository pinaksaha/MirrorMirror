<?php

	//print "<pre>";print_r($_REQUEST);print"</pre>";

	session_start();


	function femaleBMI($weight,$height,$age)
	{
		//BMI 655 + (4.3 x weight in pounds) + (4.7 x height in inches) - (4.7 x age in years)

		$BMI = 655 + (4.3 * $weight) + (4.7 * $height) - (4.7 * $age);

		return $BMI;
	}

	function maleBMI($weight,$height,$age)
	{
		//BMI 66 + (6.3 x weight in pounds) + (12.9 x height in inches) - (6.8 x age in years)

		$BMI = 66 + (6.3 * $weight) + (12.9 * $height) - (6.8 * $age);

		return $BMI;
	}

	$name = $_REQUEST['name'];
	$weight = $_REQUEST['weight'];
	$height = $_REQUEST['height'];
	$age = $_REQUEST['age'];
	$gender = $_REQUEST['gender'];

	$_SESSION['Name'] = $name;
	$_SESSION['Gender'] = $gender;
	$_SESSION['Weight'] = $weight;
	$_SESSION['calories'] = 0;
	if($gender == "m")
	{
		$_SESSION['BMI'] = maleBMI($weight,$height,$age);
	}
	else
	{
		$_SESSION['BMI'] = femaleBMI($weight,$height,$age);
	}

	header('Location: ./dashboard.php');
	
?>