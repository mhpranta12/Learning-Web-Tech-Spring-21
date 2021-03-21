<?php
        if(isset($_POST['submit']))
        {
        $name= $_POST['uname'];
        $crpassword=$_POST['crpassword'];
        $npassword=$_POST['npassword'];
        $cpassword=$_POST['cpassword'];

        if ($npassword!=$cpassword)
        {
            echo "Sorry .Re-Typed Password didn't match with new password";
            
        }
        else
        {
        $conn= mysqli_connect('localhost','root','','webtech');
        $query="select * from users where name=$name";
        $result= mysqli_query($conn,$query);
        $row = mysqli_fetch_assoc($result);
        if($row=null)
        {
            echo "User not found";
        }
        else if ($crpassword==$row['password'])
        {
            
            $query2="update users set password=$npassword  where name=$name";
            $effected_rows= mysqli_query($conn,$query2);
            if ($effected_rows==1)
            {
                echo "password changed successfully ! ! !";
            }
            else
            {
                echo "password changed error . . . ";

            }
        }
        else
        {
        echo "Sorry .Current Password is incorrect ";
        }
        }
    }
?>