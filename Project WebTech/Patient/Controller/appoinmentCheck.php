<?php
     require_once('../Model/db.php');
    session_start();
    $f=0;

    if(isset($_POST['submit']))
    {
     
         if(empty($_POST['name']))                       
         {
             echo "<p> Please Enter Name   </p>";
          $f=1;
 
          }
          else
         {
            $name = $_POST['name'];
            $split_user =str_split($name,1);     
            if (ctype_alnum($name) || in_array('_',$split_user) ||in_array('-',$split_user) || in_array('.',$split_user) )  
            {
                if(strlen($name)<2)
                {
                    echo "<p> Name Error   </p>";
                 $f=1;
                }
            }
        
        else 
        {
            echo " Name Error   !!! <br>";
            $f=1;

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
        
        if(empty($_POST['prob']))                        
        {
            echo "<p> Please Enter Problem </p>";
         $f=1;

         }
         else
         {
            $prob = $_POST['prob'];
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

        
    

        if ($f==0)                                                                       
        {
            $patients = [
                'name'=>$name ,
                'email'=>$email,
                'prob' =>$prob,
                'gender'=>$gender
                

                
                 ];

                 $conn= mysqli_connect('localhost','root','','patients');

                $sql="insert into Appoinment values('','{$name}','{$email}','{$prob}','{$gender}'";

                
                if(mysqli_query($conn,$sql)){
                     header('location:../View/appoinmentLog.html');

                }
                else{
                     echo "Sorry You can't register . . . . ";

                 }



            
                 //$status = insertPatients($patients);
                $_SESSION['name']=$name;
                $_SESSION['email']=$email;
                if($patients)
                {
                   
                    header('location:../View/appoinmentLog.html');
                }
                else
                {
                    echo "Sorry You can't register . . . . ";
                }
            }

       
        }

?>