<?php 
        
        require_once('../Model/db.php');
        
        $conn = getConnection();
        $query="select * from patients";
        $result= mysqli_query($conn,$query);
        
        echo "<h1> Patient's List </h1>";
        echo "<hr>";

        echo "<table border=2 width=700> <tr> <td> ID</td>  <td> FName </td>  <td> LName </td>  
        <td> Email </td> <td> Phone </td>
        <td> BG </td>  <td> Medical History </td>  <td> Complain </td>  <td> Reference </td>
         </tr> ";
        while ($data = mysqli_fetch_assoc($result))
        {
           echo "<tr>
                    <td>{$data['id']} </td>
                    <td> {$data['fName']} </td>
                    <td> {$data['lName']} </td>
                    <td> {$data['email']} </td>
                    <td> {$data['phone']} </td>


                   
                    <td> {$data['blood_group']} </td>
                    <td> {$data['med_history']} </td>
                    <td> {$data['complain']} </td>

                    <td> {$data['reference']} </td>
                    
                 
                  ";
                 
                 
                 
                 
                  echo "</tr> " ; 
                  

                
       
                echo "<br>";
           

        }
        echo "</table>";
?>
<br> <br>
<a href="../View/dashboard.html"> <input type="button" value="Dashboard">  </a>