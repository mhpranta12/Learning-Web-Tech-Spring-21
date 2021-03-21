<?php
           
           if(isset($_POST['submit']))
           {
            $name=$_POST["uname"];
            $password=$_POST["upassword"];
          
        $conn= mysqli_connect('localhost','root','','webtech');
        $query="select * from users";
        $result= mysqli_query($conn,$query);
        
        
        while ($data = mysqli_fetch_assoc($result))
        {
           
                    if ($data['name']==$name && $data['password']==$password )
                    {
                        header('location: ../View/loggedin_home.php');
                        break;
                    }
                    else
                    echo "Invalid Credentials"; 
                    
                   
                 
                }

            } 
        

?>
