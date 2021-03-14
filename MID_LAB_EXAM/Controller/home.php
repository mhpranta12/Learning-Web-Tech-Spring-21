<?php
        include("header.php");
        session_start();
?>
<h1> <?php $_SESSION['name'] ?>
<a href = "../View/login.html"> User List </a>
<a href = "../login.html"> Login </a>
<?php      include("footer.php");
?>