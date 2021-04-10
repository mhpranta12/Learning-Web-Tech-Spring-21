<?php
        require_once('../Model/db.php');
        require_once('../Model/product.php');
        
            $id=$_GET["id"];
           
            $status= deleteProduct($id);
            if($status)
            {
                header('location: ../View/display.php');
            }
            else
            {
                echo "error..try again";
            }
        

?>