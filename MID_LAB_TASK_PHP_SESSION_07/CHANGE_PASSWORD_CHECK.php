<?php
session_start();
	$cpassword = $_POST['cpassword'];
    $npassword = $_POST['npassword'];
    $rpassword = $_POST['rpassword'];

	if($cpassword==$_SESSION['password'])
    {
        if ($cpassword == $npassword ) 
        {
            echo "Please Enter A New Password ";
    
        }
        if($rpassword == $npassword)
        {
            $_SESSION['password']=$npassword;
            echo "Password Changed Successfully  ";
        }
        else
        {
        echo "Password Error. Re-Typed Password doesn't match with the new password ";

        }
    }
    else
    {
        echo "Please Enter Current Password to change ";
    }
  
   
?>