<?php
session_start();
	
	if (isset($_POST['submit'])) {
		$username=$_POST['username'];
		$password=$_POST['password'];
		
	
	if ($username == "" || $password == "")
	 {
		echo "Null Input";
	 }

		else{
			
		if ($_SESSION['username'] == $username && $_SESSION['password'] == $password) {
			$_SESSION['flag']= true;
			//setcookie('flag', true, time()+3600, '/');
			header('location: ../View/home.php');
		}
		else{
			echo "Invalid Input..!";
		}
		}
	}

?>