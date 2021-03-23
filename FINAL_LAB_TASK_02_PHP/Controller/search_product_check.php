<?php
        require_once('../Model/db.php');
        require_once('../Model/product.php');
        if(isset($_POST["submit"]))
        {
            $name=$_POST["name"];
           
            $data = getProductbyName($name);
           
            echo $data['name'];
           
        }

?>