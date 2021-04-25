<?php
            require_once('../Model/doctor.php');

            session_start();
    echo "Welcome ".$_SESSION['name'];
           
        

?>
 <link rel="stylesheet" type="text/css" href="../View/style.css" />
<a href="../View/dashboard.php"> <input type="button" class="btn" value="Dashboard">  </a>