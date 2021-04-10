<?php
	$cpassword = $_POST['cpassword'];
    $npassword = $_POST['npassword'];
    $rpassword = $_POST['rpassword'];

	
    if ($cpassword == $npassword ) 
    {
        echo "Password Error";

    }
    else 
    {

    }
	
		if($rpassword == $npassword)
        {

		}
    else
    {
        echo "Password Error";

    }
   
?>
