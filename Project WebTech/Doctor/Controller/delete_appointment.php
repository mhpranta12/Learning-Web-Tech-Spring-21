<?php
        require_once('../Model/db.php');
        require_once('../Model/appointments.php');
        
            $serial=$_GET["serial"];
           
            $status= deleteAppointment($serial);
            if($status)
            {
                header('location: ../View/Appointment_list.php');
            }
            else
            {
                echo "error..try again";
            }
        

?>