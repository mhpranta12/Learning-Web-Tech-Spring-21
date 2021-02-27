<?php
 session_start();
    $f=0;

    if(isset($_POST['submit']))
    {
     if(empty($_POST['uname']))                        // Name null checking  . . . . . .
        {
            echo "<p> Please Enter Name	</p>";
         $f=1;

         }
   
        
        if(empty($_POST['email']))
        {
            echo "<p> Please Enter Email	</p>";
            $f=1;

        }
        if(empty($_POST['gender']))
        {
             echo "<p> Please Select Gender	</p>";
            $f=1;

        }

        if(empty($_POST['myday']))
        {
            echo "<p> Please Enter Date	</p>";
            $f=1;

        }
        if(empty($_POST['mymonth']))
        {
            echo "<p> Please Enter Month</p>";
            $f=1;

        }
        if(empty($_POST['myyear']))
        {
             echo "<p> Please Enter Year	</p>";
         $f=1;
        }
	
	$email = $_POST['email'];
	$username = $_POST['uname'];
    $day = $_POST['myday'];
    $month = $_POST['mymonth'];
    $year = $_POST['myyear'];
    $gender=$_POST['gender'];
   
    $split_email =str_split($email,1);          // spliting the variable of email into an array for further checking to validate . . .

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

        if ( in_array('@',$split_email) && in_array('.',$split_email)  )        // restrictions of email . . .
        {
		
        
        }
        if ( !in_array('@',$split_email) || !in_array('.',$split_email)  )    // error tracing of email 
        {
             echo "<p> Please Enter a valid email	</p>";
            $f=1;

        }
        if($day!="")                                              // Checking existance of date and then checking the proper form  . . . .
        {
            if(strlen($day)<2 || $day>31)
            {
            echo "<p> Date Error    </p>";
            $f=1;
            }
   
        }

        if($month!="")
        {
            if(strlen($month)<2 || $month>12)
            {
                 echo "<p> Month Error    </p>";
                 $f=1;
            }
    
         }

        if($year!="")
        {
            if(strlen($year)<4 ||strlen($year)>4)
            {
            echo "<p> Year Error    </p>";
            $f=1;
            }
       
        }

	
       
        if ($f==0)                                                      // making sure that is everything okay or not ...
        {
        echo"<p> Sucessfully Updated ! ! ! </p>";
        $_SESSION['username']=$username;

        $_SESSION['email']=$email;
        $_SESSION['gender']=$gender;
        $_SESSION['day']=$day;
        $_SESSION['month']=$month;
        $_SESSION['year']=$year;


        header('location:LOGIN.php');
        }
    
}
?>





