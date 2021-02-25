<?php
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
            }
            else 
            {
                "Invalid Credentials";
            }
            
        }
        
       
        
       
}
?>

<html>
    <a href= "LOGIN.html">"Go To Login Page" </a>
</html>



