<?php
        $conn= mysqli_connect('localhost','root','','webtech');
        if($_POST["submit"])
        {
            $name=$_POST["uname"];
            $password=$_POST["upassword"]; 
            $type=$_POST["utype"];
            $user = [
                'name'=>$name ,
                'password'=>$password,
                 ];
           
            $query = "insert  into users values('','$name','$password','$type')";
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
            }
            
        }

?>