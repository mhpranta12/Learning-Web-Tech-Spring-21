<?php
           
           if(isset($_POST['submit']))
           {
            $name=$_POST["uname"];
            $password=$_POST["upassword"];
          
        $conn= mysqli_connect('localhost','root','','webtech');
        $query="select * from users";
        $result= mysqli_query($conn,$query);
        
        
        while ($row = mysqli_fetch_assoc($result))
        {
           
                    if ($row['name']==$name && $row['password']==$password )
                    {
                        header('location: ../View/loggedin_home.php');
                        break;
                    }
                    else
                    echo "Invalid Credentials"; 
                    
                   
                 
                }

            } 
        

?>
