<?php

	session_start();

	$_SESSION['calories'] = 0;
	header('Location: ./dashboard.php');

?>