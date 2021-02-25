<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$username = $_POST['uname'];
    $password = $_POST['upassword'];
    $split_email =str_split($email,1);

	$split_user =str_split($username,1);

	$split =str_split($password,1);

    if (ctype_alnum($username) || in_array('_',$split_user) ||in_array('-',$split_user) || in_array('.',$split_user) ) 
    {
		if(strlen($username)<2){
			echo "<p> User Name Error	</p>";

		}
		else
		{
		echo "<p> User  Name Okay </p>	";
		}
    }
    else 
    {
        echo "User Name Error	!!!";

    }

    if ( in_array('@',$split_email) && in_array('.',$split_email)  ) 
    {
		
            echo "<p> Email Okay </p>	";
    }
    if ( !in_array('@',$split_email) || !in_array('.',$split_email)  ) 
    {
        echo "<p> Please Enter a valid email	</p>";

    }
	
    
    
	
		
       
		
        if(in_array('#',$split) ||in_array('@',$split) || in_array('%',$split) ||in_array('$',$split) )
	{
		if(strlen($password)<8){
			echo "<p> Password Error	</p>";

		}
		else
		{
				echo "Password Okay	!!! ";
		}
	}
    else
    {
        echo "Password Error	";

    }
   

    /*else if(empty($_POST['name']))
    {
        echo "<p style = 'color:red'>Field must not be empty</p>";
    }*/

?>

<!DOCTYPE html>
<html>
<head>
	<title>User Registration Form</title>
</head>
<body>
	<form method="POST" action="#">
	<fieldset>
			<legend>Registration </legend>

                Name  :<input type ="text" name="name"> </input><br><hr>
                Email  :<input type ="email" name="email"> </input><br><hr>

                Username  :<input type ="text" name="uname"> </input><br><hr>
				Password  :<input type ="text"name="upassword"> </input><br><hr>
                Confirm Password  :<input type ="text"name="cpassword"> </input><br><hr>


        <fieldset>
			<legend>Gender</legend>
			<input type="radio"  name="gender" value="Male">Male
			<input type="radio" name="gender" value="Female">Female
			<input type="radio" name="gender" value="Others"> Others <br> <br>
						
		</fieldset><hr>

        <fieldset>
			<legend>Date Of Birth</legend>
			DD  <input type="textarea" width="80px" name="myday" value=""> 
			MM  <input type="textarea" name="mymonth" value="">
			YY  <input type="textarea" name="myyear" value=""> <br> <br>
						
		</fieldset>
	
			
			<br> <br>
						<input type="submit" name="submit" value="Submit">
                        <input type="Submit" name="reset" value="Reset" >
		</fieldset>
	</form>
</body>
</html>