<?php
           
            include("header.php");
?>
            <h1> User List </h1>
            <table border ="1" width="900px">
                <tr width=100px> <td> Name </td> <td> Email</td> <td> Actions</td> </tr>
<?php
                $get_data= file_get_contents('../Model/udata.json'); 
                $array_data =json_decode($get_data);
               
               
                   foreach($array_data as $check)
                   {
                   echo "<tr width=100>"; echo "<td>"; echo"$check->name <br>"; echo " </td>"; echo" <td>"; echo "$check->email<br>"; echo "</td>"; 
                   echo"<td>";?> <a href="../View/edit.php?id=1">Edit</a>  |

                    <a href="../View/delete.php?id=1">Delete</a>  <?php echo"</td>";  echo"</tr>";
                   }?>
                       
                      
                       
                  

<?php
         include("footer.php"); 
             
?>
