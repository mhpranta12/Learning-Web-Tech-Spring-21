<?php 
        
        require_once('../Model/db.php');
        require_once('../Model/appointments.php');
        $conn = getConnection();
        $query="select * from appointments";
        $result= mysqli_query($conn,$query);
        
        echo "<h1> Appointments's List </h1>";
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

        <a href = "../View/add_appointment.html "> <p align='center'><input type="button"class="c1" value="Add Appointments" ></a> </p>
<?php
        echo "<table border=2 width=700> <tr> <td> Serial</td> <td> Patient's Name </td> <td> Gender </td>  <td>  Problem </td> <td>  Phone </td><td colspan='2'> Operations </td></tr> ";
        while ($data = mysqli_fetch_assoc($result))
        {
           echo "<tr>
                    <td>{$data['serial']} </td>
                    
                    <td> {$data['patient name']} </td>
                    <td> {$data['gender']} </td>
                    <td> {$data['problem']} </td>
                    <td> {$data['phone']} </td>
                 ";
                  $tempid=$data['serial'];
                  $tempname=$data['patient name'];
                   ?>
                  <?php 
                  echo "<td> " ; ?>
                  <a href = "../Controller/edit_appointment_check.php?serial= <?php echo $tempid;?>&name=<?php echo $tempname;?>"><input type="button" class="c1" value="Edit" align='center'>  </a>
                  <?php 
                  echo "</td> " ; 

                  echo "<td> " ; ?>
                  <a href = "../Controller/delete_appointment.php?serial= <?php echo $data['serial']; ?> "> <input type="button" class="c1" value="Delete" align='center'>   </a>
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
<a href="../View/dashboard.html"><input type="button" value="Dashboard" align='center'> </a>