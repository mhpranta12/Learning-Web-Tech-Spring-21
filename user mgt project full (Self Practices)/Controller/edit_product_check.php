<?php
        require_once('../Model/db.php');
        require_once('../Model/product.php');

            $id=$_GET["id"];
            $name=$_GET["name"];
            $bprice=$_GET["bprice"];
            $product = [
                        'id' =>$id , 
                        'name' => $name
                        
            ];?>
            <form method ="POST" action="../Controller/update_product_final.php">
            Product ID <br><input type ="text" name="idn" value=<?php  echo $product['id']; ?>> </input> <br>
            Product Current Name <br> <input type ="text" name="crname"value=<?php echo $name; ?>> </input> <br>
            Product Current Buying Price <br> <input type ="text" value=<?php echo $bprice; ?>> </input> <br>
            Product New Name <br> <input type ="text" name="newname" > </input> <br>
            Product New Buying Price <br> <input type ="text" name="newbprice"> </input> <br>
            Product New Buying Price <br> <input type ="submit" value="Submit"> </input> <br>
            </form>
            <?php
            
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
            echo $product['name'];

?>