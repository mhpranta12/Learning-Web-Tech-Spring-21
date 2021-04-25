<?php
        require_once('../Model/db.php');
        require_once('../Model/appointments.php');

            $serial=$_POST["serial"];
            $name=$_POST["newname"];
           
            $nserial=$_POST['newserial'];
            $problem=$_POST['problem'];
            $phone=$_POST['phone'];
            $gender=$_POST['gender'];

            $appointment = [
                        'serial' =>$serial ,
                        'newserial' =>$nserial ,
                        'name' => $name , 
                        'gender' => $gender ,
                        'phone' => $phone ,
                        'problem' => $problem
                        
            ];
            
            $status= updateAppointment($appointment);
            if($status)
            {
                header('location: ../View/Appointment_list.php');
            }
            else
            {
                echo "error..try again";
            }
            
           

?>