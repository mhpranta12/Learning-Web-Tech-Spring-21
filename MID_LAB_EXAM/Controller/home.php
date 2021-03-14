<?php
        include("header.php");
        session_start();
?>
<h1> <?php $_SESSION['name'] ?> ! </h1> 
<a href = "../View/login.html"> User List </a>
<a href = "../View/change_password.html"> Change Password </a>

<a href = "../login.html"> Login </a>
<?php      include("footer.php");
?>