<?php
           
            include("header.php");
?>
            <h1> Edit User </h1>
            <table border ="1" width="900px">
                <tr width=100px> <td> Name </td> <td> Email</td> <td> Actions</td> </tr>
<?php
                $get_data= file_get_contents('../Model/udata.json'); 
                $array_data =json_decode($get_data);
               
               
                   foreach($array_data as $check)
                   {
                   echo "<tr width=80>"; echo "<td>"; echo"$check->name <br>"; echo " </td>"; echo" <td>"; echo "$check->email<br>"; echo "</td>"; echo "</tr>";
                   echo "<tr>"; echo"<td>";?> <a href="../View/edit.php?id=1">Edit</a>  <?php echo"</td>"; echo"</tr>";?>

                   <?php  echo"<td>";?> <a href="edit.php">Delete</a>  <?php echo"</td>"; 
                   }
                   
                   include("footer.php");
?>
                       
                      
                       
                  

