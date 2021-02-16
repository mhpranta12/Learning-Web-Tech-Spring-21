<?php
	if(isset($_POST['submit'])){

		$gender =  $_POST['gender'];
		if($gender == "" ){
			echo "Null submission...";
		}else{
			echo "Success  !!!   ";
            echo $gender."   is your Gender";
		}

	}else{
		echo 'invalid request...';
	}


?>