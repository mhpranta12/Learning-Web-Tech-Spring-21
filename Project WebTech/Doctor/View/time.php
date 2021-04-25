<?php 
        
        require_once('../Model/db.php');
        require_once('../Model/doctor.php');
        $conn = getConnection();
        $query="select * from time";
        $result= mysqli_query($conn,$query);
        
        echo "<h1> Time Schedule </h1>";
        echo "<hr>";

        echo "<table border=2 width=700> <tr> <td> Time Slots No.</td> <td> Duty Time </td> <td> Designated Doctor </td>  </tr> ";
        while ($data = mysqli_fetch_assoc($result))
        {
           echo "<tr>
                    <td>{$data['slot']} </td>
                    <td> {$data['time']} </td>
                    <td> {$data['doctor']} </td>
                   
                 
                  ";
                 
                  echo "</tr> " ; 
                 

                
      
                echo "<br>";
           
        }
      
        echo "</table>";
?>
<br> <br>
<a href="../View/dashboard.php"> <input type="button" value="Dashboard">  </a>