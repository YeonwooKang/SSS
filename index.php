<?php

	require_once 'controller.php';

	$controller = new UserController($_GET['action']);

	$controller->run();
	
	exit;

?>