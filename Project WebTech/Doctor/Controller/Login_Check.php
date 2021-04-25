<?php
            require_once('../Model/doctor.php');

            session_start();

           if(isset($_POST['submit']))
           {
            $uname=$_POST["uname"];
            $password=$_POST["upassword"];
            $remember=$_POST["remember"];
           

            

            $status=validateDoctor($uname,$password);
            if($status)
            {   
                $_SESSION['name']=$uname;
                if(empty($_POST['remember']))
                {

                }
                else
                {
                    setcookie('flag', true, time()+3600, '/');

                }
                header('location: ../View/primary_dashboard.php');
                
            }
            else
            {
                echo "Credentials Error";
                
            }
            

        } 
        

?>