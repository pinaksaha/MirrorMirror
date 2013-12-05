<?php

	session_start();

	print "<pre>";print_r($_SESSION);print "</pre>";

	print_r(json_encode($_SESSION));


?>