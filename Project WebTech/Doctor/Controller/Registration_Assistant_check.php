<?php
        session_start();
        require_once('../Model/assistant.php');
         $f=0;
// null checkinh and taking input and writting in json file 
    if(isset($_POST['submit']))
    {
     if(empty($_POST['name']))                        // Name null checking  . . . . . .
        {
            echo "<p> Please Enter Name	</p>";
         $f=1;

         }
         else
         {
            $name = $_POST['name'];
         }
         if(empty($_POST['uname']))                        // Name null checking  . . . . . .
         {
             echo "<p> Please Enter User Name	</p>";
          $f=1;
 
          }
          else
         {
            $username = $_POST['uname'];
            $split_user =str_split($username,1);        // spliting the variable of username into an array for further checking to validate . . .
            if (ctype_alnum($username) || in_array('_',$split_user) ||in_array('-',$split_user) || in_array('.',$split_user) )  // restrictions of user name . . .
            {
		        if(strlen($username)<2)
                {
			        echo "<p> User Name Error	</p>";
                 $f=1;
		        }
            }
	    
        else 
        {
            echo "User Name Error	!!! <br>";
            $f=1;

        }
        }
         //pass & cpass check . . . . 
          if(empty($_POST['upassword']) || empty($_POST['cpassword']))                     // Password null checking  . . . . . .
          {
              echo "<p> Please Enter Password  and Re-type </p>";
              $f=1;
  
          }
          else
         {
            $password = $_POST['upassword'];
            $cpassword = $_POST['cpassword'];
            
            if($password != $cpassword)                                                 // password and confirm password matching checking . . . .
            {
                echo "<p> Password and Confirm Password Doesn't Match	</p>";
                $f=1;
    
            }
            else
            {

            }
            $split =str_split($password,1);             // spliting the variable of password into an array for further checking to validate . . .
            if(in_array('#',$split) ||in_array('@',$split) || in_array('%',$split) ||in_array('$',$split) )   // password strength and size checking. . . .
            {
                if(strlen($password)<8)
                {
                    echo "<p> Password Error 	</p><br>";
                     $f=1;
                }
            
            }
            else
            {
            echo "Password Error (Not strength enough)	<br>";
    
            }
         }
        
        
        if(empty($_POST['email']))
        {
            echo "<p> Please Enter Email	</p>";
            $f=1;

        }
        else
         {
            $email = $_POST['email'];
           $split_email =str_split($email,1);          // spliting the variable of email into an array for further checking to validate . . .

	    if ( in_array('@',$split_email) && in_array('.',$split_email)  )        // restrictions of email . . .
        {
    
    
        }
        if ( !in_array('@',$split_email) || !in_array('.',$split_email)  )    // error tracing of email 
        {
         echo "<p> Please Enter a valid email	</p>";
        $f=1;

        }
        }
        if(empty($_POST['degree']))
        {
            
            
             echo "<p> Please Select Degree </p>";
             $f=1;
            
        }
        else
        {
            $degree=$_POST['degree'];
        }
        
        if(($_POST['desig']==""))
        {
            
            
             echo "<p> Please Select Designation </p>";
             $f=1;
            
        }
        else
        {
            $desig=$_POST['desig'];
        }
        
        
        if(empty($_POST['gender']))
        {
             echo "<p> Please Select Gender	</p>";
            $f=1;

        }
        else
        {
            $gender=$_POST['gender'];
        }

        if(empty($_POST['myday']))
        {
            echo "<p> Please Enter Date	</p>";
            $f=1;

        }
        else
         {
            $day = $_POST['myday'];
            if($day!="")                                              // Checking existance of date and then checking the proper form  . . . .
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
             echo "<p> Please Enter Year	</p>";
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

	
	

        if ($f==0)                                                      // making sure that is everything okay or not ...
        {

           
            

            
            $assistant = [
                'name' => $name ,
                'email'=>$email,
                'gender'=>$gender,
                'designation' => $desig 

                
                 ];
            
                
                
                $status = insertAssistant($assistant);
                $_SESSION['name']=$uname;
                $_SESSION['password']=$password;
                if($status)
                {
                   
                    header('location:../View/Assistant_list.php');
                }
                else
                {
                    echo "Sorry can't Register . . . . ";
                }

       
        }
}
?>