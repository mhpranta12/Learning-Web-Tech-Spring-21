<?php
        require_once('../Model/db.php');

        if(isset($_POST["submit"]))
        {
            $name=$_POST["name"];
            $buyingprice=$_POST["buyingprice"];
            $sellingprice=$_POST["sellingprice"]; 
            $dispaly=$_POST["dispaly"];
            $product = [
                'name'=>$name ,
                'buyingprice'=>$buyingprice,
                'sellingprice'=>$sellingprice,
                'dispaly'=>$dispaly
                 ];
            $status= insertProduct($product);
            if($status)
            {
                header('location: ../View/display.php');
            }
            else{
                echo "error..try again";
            }
            
            
        }

?>