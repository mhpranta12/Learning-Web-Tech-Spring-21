<?php
	if(isset($_POST['submit'])){

		$date =  $_POST['myday'];
		$month= $_POST['mymonth'];
		$year= $_POST['myyear'];
		if($date == "" || $month=="" || $year==""){
			echo "Null submission...";
		}else{
			echo "Success  !!!   ";
            echo $date." ".$month." ".$year."   is your DOB";
		}

	}else{
		echo 'invalid request...';
	}


?>