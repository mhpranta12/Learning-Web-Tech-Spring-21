<?php
        include("header.php");
        session_start();
?>
<?php  if($_SESSION['flag']=true) { echo "<h1> Welcome   ".$_SESSION['name']."</h1>"; } else { echo "<h1> Welcome   Home</h1>"; }?>
<a href = "../View/userlist.php"> User List    </a><br>
<?php  if($_SESSION['flag']=true) { ?> <a href = "../View/login.html"> logout</a>  <?php }?> <br>
<?php  if($_SESSION['flag']=false) { ?> <a href = "../View/login.html"> login</a>  <?php }?><br>

<a href = "../View/signupjson.html"> Registration </a>


<?php      include("footer.php");
?>