<?php
	if(isset($_POST['submit'])){

		$email 		=  $_POST['myemail'];
		if($email == ""){
			echo "Null submission...";
		}else{
			echo "Success  !!!   ";
            echo $email."   is your email";
		}

	}else{
		echo 'invalid request...';
	}


?>