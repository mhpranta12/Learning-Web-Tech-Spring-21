<?php
    require_once('../Model/loginModel.php');
    if(isset($_POST['reg_btn'])){
        $find = '@';
        $pos = strpos($_POST['email'], $find);

        if(empty($_POST['fName']) or empty($_POST['lName'])){
            echo "<p style='color:red'>Name field is required<p/>" ;
        }

        if(strlen($_POST['phone']) == 11){
            echo "<p style='color:red'>Please enter a valid phone number</p>";
        }

        if(empty($_POST['day'] or $_POST['month'] or $_POST['year'])){
            echo "<p style='color:red'>Birthday field is required</p>" ;
        }

        if(($_POST['day'] > 31 or $_POST['day'] < 1) or ($_POST['month'] > 12 or $_POST['day'] < 1) or (strlen($_POST['year']) > 4 or $_POST['day'] < 4))
        {
            echo "<p style='color:red'>Please enter a valid birthdate</p>" ;
        }

        if(empty($_POST['password']))
        {
            echo "<p style='color:red'>Password field is required</p>" ;
        }

        $password = $_POST['password'];




        $split_password = str_split($password, 1);             // spliting the variable of password into an array for further checking to validate . . .

        if(strlen($_POST['password']) < 4)
        {
            echo "<p style='color:red'>Password length cannot be less than 4</p>" ;
        }

        if(!(in_array('#',$split_password) || in_array('@', $split_password) || in_array('_',$split_password) || in_array('$',$split_password)))   // password strength and size checking. . . .
	    {
		    echo "Password must contain  special characters";
	    }

        else if(is_numeric($password))
        {
            echo "Password must contain numbers";
        }

     
       
        

        else if(empty($_POST['email']))
        {
            echo "<p style = 'color:red'>Field must not be empty</p>";
        }

        
        

        else if($pos == false)
        {
                echo "<p style = color:red>Please enter a valid email address</p>";
        }


        else
        {
            $fName = $_POST['fName'];
            $lName = $_POST['lName'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $password = $_POST['password'];
            $dob_day = $_POST['day'];
            $dob_month = $_POST['month'];
            $dob_year = $_POST['year'];
            $dob = $dob_day."-".$dob_month."-".$dob_year;
            $role = $_POST['role'];
            $salary = $_POST['salary'];


            if(isset($_FILES['profile_picture']))
            {
                $profile_picture = uploadImage($_FILES['profile_picture']);
            }

            else
            {
                $profile_picture = "No Photo";
            }

           
	            
            
            $gender = $_POST['gender'];
            

            $employee = [	
                'fName'	=> $fName, 
                'lName'	=> $lName,
                'email' => $email,
                'phone' => $phone,
                'password' => $password,
                'dob'   => $dob,
                'role' => $role,
                'gender' => $gender,
                'profile_picture' => $profile_picture,
                'salary' => $salary
            ];
    
            
    
            $status = insertEmployee($employee);	
            if($status)
            {
                echo "Employee added successfully!";
            }
    
            else
            {
                echo "Something is wrong";
            }
    

        }

        


    }

?>