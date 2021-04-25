<?php
        require_once('../Model/db.php');
        require_once('../Model/assistant.php');

            $id=$_POST["idn"];
            $newname=$_POST["newname"];
           
            
            $email=$_POST['email'];
            $desig=$_POST['desig'];
            $gender=$_POST['gender'];

            $assistant = [
                        'id' =>$id ,
                        'newname' => $newname , 
                        'gender' => $gender ,
                        'desig' => $desig ,
                        'email' => $email
            ];
            
            $status= updateAssistant($assistant);
            if($status)
            {
                header('location: ../View/Assistant_list.php');
            }
            else
            {
                echo "error..try again";
            }
            
           

?>