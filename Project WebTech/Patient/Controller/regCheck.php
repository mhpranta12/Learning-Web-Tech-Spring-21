<?php
     require_once('../Model/db.php');
    session_start();
    $f=0;

    if(isset($_POST['submit']))
    {
     if(empty($_POST['name']))                        
        {
            echo "<p> Please Enter Name </p>";
         $f=1;

         }
         else
         {
            $name = $_POST['name'];
         }

         
         if(empty($_POST['username']))                       
         {
             echo "<p> Please Enter User Name   </p>";
          $f=1;
 
          }
          else
         {
            $username = $_POST['username'];
            $split_user =str_split($username,1);     
            if (ctype_alnum($username) || in_array('_',$split_user) ||in_array('-',$split_user) || in_array('.',$split_user) )  
            {
                if(strlen($username)<2)
                {
                    echo "<p> User Name Error   </p>";
                 $f=1;
                }
            }
        
        else 
        {
            echo "User Name Error   !!! <br>";
            $f=1;

        }
        } 
          if(empty($_POST['password']) || empty($_POST['repassword']))                  
          {
              echo "<p> Please Enter Password  and Re-type </p>";
              $f=1;
  
          }
          else
         {
            $password = $_POST['password'];
            $repassword = $_POST['repassword'];
            
            if($password != $repassword) 
            {
                echo "<p> Password and Confirm Password Doesn't Match   </p>";
                $f=1;
    
            }
            $split =str_split($password,1);             
            if(in_array('#',$split) ||in_array('@',$split) || in_array('%',$split) ||in_array('$',$split) )   
            {
                if(strlen($password)<8)
                {
                    echo "<p> Password Error (Not strength enough)  </p><br>";
                     $f=1;
                }
            
            }
            else
            {
            echo "Password Error    <br>";
    
            }
         }
        
        
        if(empty($_POST['email']))
        {
            echo "<p> Please Enter Email    </p>";
            $f=1;

        }
        else
         {
            $email = $_POST['email'];
           $split_email =str_split($email,1);          

        if ( in_array('@',$split_email) && in_array('.',$split_email)  )       
        {
    
    
        }
        if ( !in_array('@',$split_email) || !in_array('.',$split_email)  )    
        {
         echo "<p> Please Enter a valid email   </p>";
        $f=1;

        }
        }
        
        
        if(empty($_POST['gender']))
        {
             echo "<p> Please Select Gender </p>";
            $f=1;

        }
        else
        {
            $gender=$_POST['gender'];
        }

        if(empty($_POST['myday']))
        {
            echo "<p> Please Enter Date </p>";
            $f=1;

        }
        else
         {
            $day = $_POST['myday'];
            if($day!="")
            {
                if(strlen($day)<2 || $day>31)
                {
                echo "<p> Date Error    </p>";
                $f=1;
                }
       
            }
           
         }
        if(empty($_POST['mymonth']))
        {
            echo "<p> Please Enter Month</p>";
            $f=1;

        }
        else
         {
            $month = $_POST['mymonth'];
            if($month!="")
        {
            if(strlen($month)<2 || $month>12)
            {
                 echo "<p> Month Error    </p>";
                 $f=1;
            }
    
         }

         }
        if(empty($_POST['myyear']))
        {
             echo "<p> Please Enter Year    </p>";
         $f=1;

        }
        else
         {
            $year = $_POST['myyear'];
            if($year!="")
        {
            if(strlen($year)<4 ||strlen($year)>4)
            {
            echo "<p> Year Error    </p>";
            $f=1;
            }
       
        }
         }

    
    
    

        if ($f==0)                                                                       
        {
            $patients = [
                'name' => $name ,
                'email'=>$email,
                'username'=>$username ,
                'password'=>$passwor ,
                'repassword'=>$repassword ,
                'age'   =>$age ,
                'gender'=>$gender
                

                
                 ];

                 $conn= mysqli_connect('localhost','root','','patients');

                $sql="insert into Registration values('','{$name}','{$email}','{$username}','{$password}','{$repassword}','{$age}','{$gender}',NOW())";

                
                if(mysqli_query($conn,$sql)){
                     header('location:../View/Login.html');

                }
                else{
                     echo "Sorry You can't register . . . . ";

                 }



            
                 //$status = insertPatients($patients);
                $_SESSION['username']=$username;
                $_SESSION['password']=$password;
                if($patients)
                {
                   
                    header('location:../View/login.html');
                }
                else
                {
                    echo "Sorry You can't register . . . . ";
                }
            }

       
        }

?>