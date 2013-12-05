<?php 

	session_start();

	if(!empty($_REQUEST['calories']))
	{
		$curren_calories = $_SESSION['calories'];
		$new_calories = $_REQUEST['calories'];
		$_SESSION['calories'] = $curren_calories + $new_calories;

		header('Location: ./dashboard.php');

	}

?>