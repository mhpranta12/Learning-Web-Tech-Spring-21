<?php 
        
        require_once('../Model/db.php');
        require_once('../Model/doctor.php');
        $conn = getConnection();
        $query="select * from ot";
        $result= mysqli_query($conn,$query);
        
        echo "<h1> Operation Theatre's List </h1>";
        echo "<hr>";

        echo "<table border=2 width=700> <tr> <td> ID</td> <td> Room No. </td> <td> Availability </td>  </tr> ";
        while ($data = mysqli_fetch_assoc($result))
        {
           echo "<tr>
                    <td>{$data['id']} </td>
                    <td> {$data['room no']} </td>
                    <td> {$data['availability']} </td>
                  
                 
                  ";
                
                 
                  echo "</tr> " ; 
                 

                
      
                echo "<br>";
           
        }
       
        echo "</table>";
?>
<br> <br>
<a href="../View/dashboard.html"> <input type="button" value="Dashboard">  </a>