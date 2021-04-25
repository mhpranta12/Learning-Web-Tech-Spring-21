<?php

    require_once('../Model/db.php');

    session_start();
    require_once('../Model/loginModel.php');

    if(isset($_COOKIE['flag']))
    {
        header("Location: ../View/managerDashboard.php");
    }




	if(isset($_POST['submit'])){
       

/*		$user_email = $_POST['user_email'];
		$password = $_POST['password'];
*/
        $user_email = trim($_POST['user_email']);
        $password = trim($_POST['password']);

		if($user_email == "" || $password == "")
        {
			echo "null input...";
		}

        else{

            $status = validateUser($user_email, $password);
            if($status)
            {
              
                $_SESSION['user_email'] = $user_email;
                $_COOKIE['user_email'] = $user_email;
                setcookie('flag', true, time()+3600, '/');
                /*header("Location: ../View/managerDashboard.php");*/
            }
            else
            {
                echo "Invalid login credentials";
            }
			
		}
	}


?>