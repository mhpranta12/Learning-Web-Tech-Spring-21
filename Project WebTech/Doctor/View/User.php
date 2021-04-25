<?php 
        
        require_once('../Model/db.php');
        require_once('../Model/appointments.php');
        $conn = getConnection();
        $query="select * from users";
        $result= mysqli_query($conn,$query);
        
        echo "<h1> Employee's List </h1>";
        echo "<hr>";
        ?>
         <style>
            .c1
            {
                    background-color: rgb(125, 146, 238);
                    width: 120px;
            }
            .c2
            {
                    background-color:ghostwhite;
                    height: 18px;
                    width: 300px;
            }
        </style>
        	<link rel="stylesheet" type="text/css" href="../View/style.css" />

        
<?php
        echo "<table border=2 width=700> <tr> <td> ID</td> <td> First Name </td> <td> Last Name </td> <td>  Role </td> <td>  Gender </td>
        
        <td>  Phone </td> <td>  Email </td> <td>  Salary </td> </tr> ";
        while ($data = mysqli_fetch_assoc($result))
        {
           echo "<tr>
                    <td>{$data['id']} </td>
                    
                    
                    <td> {$data['fName']} </td>
                    <td> {$data['lName']} </td>
                    <td> {$data['role']} </td>
                    <td> {$data['gender']} </td>
                    <td> {$data['phone']} </td>
                    <td> {$data['email']} </td>
                    <td> {$data['salary']} </td>
                 ";
                
                   ?>
                 
                  
                  <?php 
                  echo "</td> " ; 
                  echo "</tr> " ; 
                  ?>

                
        <?php
                echo "<br>";
           

        }
        echo "</table>";
?>
<br> <br>
<a href="../View/dashboard.php"><input type="button" class="c1"value="Dashboard" align='center'> </a>
    