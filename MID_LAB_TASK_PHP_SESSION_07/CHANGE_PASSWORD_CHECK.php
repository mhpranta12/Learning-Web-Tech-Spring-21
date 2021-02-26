<?php
session_start();
if(($_POST['submit']))                        
        {
            
         
	$cpassword = $_POST['cpassword'];
    $npassword = $_POST['npassword'];
    $rpassword = $_POST['rpassword'];


    $split_npassword =str_split($npassword,1); 
	if($cpassword==$_SESSION['password'])
    {
       
        
        if ($cpassword == $npassword ) 
        {
            echo "Please Enter A New Password <br>";
    
        }
        if($rpassword == $npassword && $cpassword != $npassword)            // must have to be different then previous one and retyped password must be matched . . . . . 
        {
            if(in_array('#',$split_npassword) ||in_array('@',$split_npassword) || in_array('%',$split_npassword) ||in_array('$',$split_npassword) )   // password strength and size checking. . . .
            {
                if(strlen($npassword)>=8)
                {
                    
                    $_SESSION['password']=$npassword;
                    echo "Password Changed Successfully <br> ";
                    
                    
                }
                else
                {
                    echo "<p> Password Error.	</p><br>";
                }
            
            }
            else
            {
                echo "<p> Password Error.	</p><br>";
            }
            
        }
        else if($rpassword != $npassword )                                  // if by chance these to doesn't match . Actually to alert the user . . . . . 
        {
        echo "Password Error. Re-Typed Password doesn't match with the new password <br> ";

        }
        else
        {

        }
    }
    else
    {
        echo "Please Enter Current Password to change <br>";
    }
}
   
?>