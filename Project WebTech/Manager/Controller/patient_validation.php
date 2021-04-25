<?php
    require_once('../Model/patientModel.php');
    if(isset($_POST['reg_btn'])){
        $find = '@';
        $find2 = '.com';
        $pos1 = strpos($_POST['email'], $find);
        $pos2 = strpos($_POST['email'], $find2);
        


        if(empty($_POST['fName']) or empty($_POST['lName'])){
            echo "<p style='color:red'>Name field is required<p/>" ;
        }

        if(strlen($_POST['phone']) === 11){
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


        $split_password = str_split($password,1);             // spliting the variable of password into an array

        if(strlen($_POST['password']) < 4)
        {
            echo "<p style='color:red'>Password length cannot be less than 4</p>" ;
        }

        if(ctype_lower($password) && ctype_upper($password))
        {
            echo "<p style = 'color:red'>Password must contain upper and lower characters</p>";
        }

        if(!(in_array('#',$split_password) || in_array('@', $split_password) || in_array('_',$split_password) || in_array('$',$split_password)))   
	    {
		    echo "<p style = 'color:red'>Password must contain special characters</p>";
	    }

 

        else if(empty($_POST['email']))
        {
            echo "<p style = 'color:red'>Field must not be empty</p>";
        }

        
        

        else if($pos1 == false or $pos2 == false)
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
            $blood_group = $_POST['blood_group'];


            if(isset($_FILES['profile_pic']))
            {
                $profile_pic = uploadImage($_FILES['profile_pic']);
            }

            else
            {
                $profile_pic = null;
            }




            if(isset($_POST['med_history']))
            {
                $med_arr = $_POST['med_history'];
                $med_hisory = "";
                foreach($med_arr as $result)
                {
                    $med_hisory .= $result.", ";
                }
            }



            else
            {
                $med_hisory = null;
            }

           
	            
            
            $gender = $_POST['gender'];
            $complain = $_POST['complain'];
            $reference = $_POST['reference'];

            $patient = [	
                'fName'	=> $fName, 
                'lName'	=> $lName,
                'email' => $email,
                'phone' => $phone,
                'password' => $password,
                'dob'   => $dob,
                'blood_group' => $blood_group,
                'gender' => $gender,
                'med_history' => $med_hisory,
                'complain' => $complain,
                'reference' => $reference,
                'profile_picture' => $profile_pic
            ];
    
            
    
            $status = insertPatient($patient);	
            if($status)
            {
                echo "Patient added successfully!";
            }
    
            else
            {
                echo "Something is wrong";
            }
    

        }

        


    }

?>