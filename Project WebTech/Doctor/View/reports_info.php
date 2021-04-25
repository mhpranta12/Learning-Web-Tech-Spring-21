<?php 
        
        require_once('../Model/db.php');
        require_once('../Model/appointments.php');
        $conn = getConnection();
        $query="select * from reports_info";
        $result= mysqli_query($conn,$query);
        
        echo "<h1> Report's Info of Patient (Managment Perspective) </h1>";
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
        echo "<table border=2 width=700> <tr> <td> ID</td> <td> Patient's Name </td> <td> Phone</td> 
        <td> Email</td> <td> Test Name</td> <td> Report Status</td> <td> Payment Status </td> 
        </tr> ";
        while ($data = mysqli_fetch_assoc($result))
        {
           echo "<tr>
                    <td>{$data['id']} </td>
                    
                    <td> {$data['PatientName']} </td>
                    <td> {$data['phone']} </td>
                    <td> {$data['email']} </td>
                    <td> {$data['TestName']} </td>
                     <td> {$data['ReportStatus']} </td>
                     <td> {$data['PaymentStatus']} </td>
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
<a href="../View/dashboard.php" ><input type="button" value="Dashboard" align='center'> </a>