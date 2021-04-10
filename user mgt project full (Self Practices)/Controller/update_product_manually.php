<?php
        require_once('../Model/db.php');
        require_once('../Model/product.php');

            $id=$_POST["id"];
            $newname=$_POST["name"];
            $bprice=$_POST["buyingprice"];
            $sprice=$_POST['sellingprice'];
            $product = [
                        'id' =>$id , 
                        'newname' => $newname , 
                        'bprice' => $bprice,
                        'sprice' => $sprice
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
            
           

?>