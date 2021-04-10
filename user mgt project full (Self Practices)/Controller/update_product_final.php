<?php
        require_once('../Model/db.php');
        require_once('../Model/product.php');

            $id=$_POST["idn"];
            $newname=$_POST["newname"];
            $bprice=$_POST["newbprice"];
            $name=$_POST['crname'];
            $product = [
                        'id' =>$id , 
                        'name' => $name,
                        'newname' => $newname , 
                        'bprice' => $bprice
            ];
            
            $status= updateProduct($product);
            if($status)
            {
                header('location: ../View/display.php');
            }
            else
            {
                echo "error..try again";
            }
            
            echo $product['id'];
            echo $id; 
            echo $newname;

?>