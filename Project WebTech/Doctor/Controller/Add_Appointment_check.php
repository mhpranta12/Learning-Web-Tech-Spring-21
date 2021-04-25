<?php
        session_start();
        require_once('../Model/appointments.php');
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
            $split_user =str_split($name,1);        // spliting the variable of username into an array for further checking to validate . . .
            if (ctype_alnum($name) || in_array('_',$split_user) ||in_array('-',$split_user) || in_array('.',$split_user) )  // restrictions of user name . . .
            {
		        if(strlen($name)<2)
                {
			        echo "<p> Patient's Name Error	</p>";
                 $f=1;
		        }
            }
         }
        
        
        
        if(empty($_POST['phone']))
        {
            echo "<p> Please Enter Phone No.	</p>";
            $f=1;

        }
        else
         {
            $phone = $_POST['phone'];
          
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
        if(empty($_POST['serial']))
        {
             echo "<p> Please Select Gender	</p>";
            $f=1;

        }
        else
        {
            $serial=$_POST['serial'];
        }
         


        if(empty($_POST['problem']))
        {
             echo "<p> Please Select Problem	</p>";
            $f=1;

        }
        else
        {
            $problem=$_POST['problem'];
        }
         }

	
	

        if ($f==0)                                                      // making sure that is everything okay or not ...
        {

            $appointment = [
                'name' => $name ,
                'phone'=>$phone,
                'gender'=>$gender,
                'problem' => $problem,
                'serial' => $serial  
                ];
            
                
                
                $status = insertAppointment($appointment);
                
                if($status)
                {
                   
                    header('location:../View/Appointment_list.php');
                }
                else
                {
                    echo "Sorry can't Register . . . . ";
                }

       
        }
    
?>