<?php
    session_start();
    if(isset($_POST['submit']))
    {
        $username = $_POST['uname'];
        $password = $_POST['upassword'];
        if ($username=="" || $password=="")
        {
            echo "Sorry Null value inputted";
        }
        else
        {
            if($_SESSION['username']==$username && $_SESSION['password']==$password)
            {
                echo "Valid User";
                header('location: DASHBOARD.php');
            }
            else 
            {
                echo"Invalid Credentials";
            }
            
        }
        
       
        
       
}
?>




