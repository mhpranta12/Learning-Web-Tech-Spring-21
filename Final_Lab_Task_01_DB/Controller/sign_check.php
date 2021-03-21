<?php
        require_once("../Model/userModel.php");
        $conn= mysqli_connect('localhost','root','','webtech');
        if(isset($_POST["submit"]))
        {
            $name=$_POST["uname"];
            $email=$_POST["uemail"];
            $password=$_POST["upassword"]; 
            $type=$_POST["utype"];
            $user = [
                'name'=>$name ,
                'password'=>$password,
                'email'=>$email,
                'type'=>$type
                 ];
            $status= insertUser($user);
            if($status)
            {
                header('location: ../View/login.html');
            }
            else{
                echo "error..try again";
            }
            /*$query = "insert  into users values('','$name','$password','$type')";
            $result = mysqli_query($conn,$query);
            //echo $result;
            if ($result==1)
            {
                
                //echo "Registration Sucessful ! ! !";
                header('location: ../View/login.html');
                         
            }
            else
            {
                echo "Registration Failed . . . ";
            }*/
            
        }

?>