<?php
        include("header.php");
        session_start();
?>
<h1> <?php $_SESSION['name'] ?></h1>
<a href = "../userlist.php"> User List    </a><br>
<a href = "../login.html"> Login </a><br>
<a href = "../signupjson.html"> Registration </a>

<?php      include("footer.php");
?>