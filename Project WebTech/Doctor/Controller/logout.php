<?php

	session_start();
	unset($_SESSION['flag']);
	header('location: ../../View/login.html');

?>