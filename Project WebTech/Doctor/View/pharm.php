<link rel="stylesheet" type="text/css" href="../View/style.css" />
<?php 
        
        require_once('../Model/db.php');
        
        $conn = getConnection();
        $query="select * from pharmacy";
        $result= mysqli_query($conn,$query);
        
        echo "<h1> Pharmacy Info </h1>";
        echo "<hr>";

        echo "<table border=2 width=700> <tr> <td> ID</td>  <td> Name </td>  <td> Total Drugs </td>  
         <td> Type </td>
          
         </tr> ";
        while ($data = mysqli_fetch_assoc($result))
        {
           echo "<tr>
                    <td>{$data['id']} </td>
                    <td> {$data['name']} </td>
                    <td> {$data['total drugs']} </td>
                    <td> {$data['type']} </td>
                  
                   
                 
                  ";
                 
                 
                 
                 
                  echo "</tr> " ; 
                  

                
       
                echo "<br>";
           

        }
        echo "</table>";
?>
<br> <br>
<a href="../View/dashboard.php"> <input type="button" class="btn" value="Dashboard">  </a>