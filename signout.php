<?php

	session_start();
	$_SESSION['calories'] = 0;
	session_destroy();
	header('Location: ./index.php');	

?>