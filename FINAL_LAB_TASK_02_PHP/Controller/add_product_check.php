<?php
        require_once('../Model/db.php');
        require_once('../Model/product.php');
        if(isset($_POST["submit"]))
        {
            $name=$_POST["name"];
            $buyingprice=$_POST["buyingprice"];
            $sellingprice=$_POST["sellingprice"]; 
            
            $product = [
                'name'=>$name ,
                'buyingprice'=>$buyingprice,
                'sellingprice'=>$sellingprice
                
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