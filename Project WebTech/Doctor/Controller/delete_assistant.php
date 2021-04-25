<?php
        require_once('../Model/db.php');
        require_once('../Model/assistant.php');
        
            $id=$_GET["id"];
           
            $status= deleteAssistant($id);
            if($status)
            {
                header('location: ../View/Assistant_list.php');
            }
            else
            {
                echo "error..try again";
            }
        

?>