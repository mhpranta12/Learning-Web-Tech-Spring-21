<?php
session_start();
	
	if (isset($_POST['submit'])) {
		$name=$_POST['name'];
		$email=$_POST['email'];
		
	
	if ($username == "" || $email == "")
	 {
		echo "Null Input";
	 }

		else{
			
		if ($_SESSION['name'] == $name && $_SESSION['email'] == $email) {
			$_SESSION['flag']= true;
			//setcookie('flag', true, time()+3600, '/');
			header('location: ../View/serial.html');
		}
		else{
			echo "Invalid Input..!";
		}
		}
	}

?>