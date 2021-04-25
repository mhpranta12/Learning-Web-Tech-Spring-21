<?php 
        
        require_once('../Model/db.php');
        require_once('../Model/doctor.php');
        $conn = getConnection();
        $query="select * from doctor";
        $result= mysqli_query($conn,$query);
        
        echo "<h1> Doctor's List </h1>";
        echo "<hr>";

        echo "<table border=2 width=700> <tr> <td> ID</td> <td> Name </td> <td> Email </td> <td> Full Name </td>  <td> Designation  </td> </tr> ";
        while ($data = mysqli_fetch_assoc($result))
        {
           echo "<tr>
                    <td>{$data['id']} </td>
                    <td> {$data['uname']} </td>
                    <td> {$data['email']} </td>
                    <td> {$data['name']} </td>
                    <td> {$data['designation']} </td>
                    
                 
                  ";
                  $tempid=$data['id'];
                  $tempname=$data['name'];
                  $tempbprice=$data['designation'] ?>
                  
                 
                  <?php 
                 
                  echo "</tr> " ; 
                  ?>

                
        <?php
                echo "<br>";
           

        }
        echo "</table>";
?>
<br> <br>
<a href="../View/dashboard.html"> <input type="button" value="Dashboard">  </a>