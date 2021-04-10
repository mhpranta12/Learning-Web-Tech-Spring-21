
            <h1> Assistant List </h1>
            <table border ="1" width="900px">
                <tr width=100px> <td>No.</td> <td> Name </td> <td> Email</td> <td> Designation</td>   </tr>
<?php
                $get_data= file_get_contents('../Model/assistant_info.json'); 
                $array_data =json_decode($get_data);
               
                $n=1;
                   foreach($array_data as $check)
                   {
                   echo "<tr width=100>"; echo"<td>"; echo $n; echo"</td>"; echo "<td>"; 
                   echo"$check->name <br>"; echo " </td>"; echo" <td>"; 
                   echo "$check->email<br>"; echo "</td>"; 
                   echo" <td>"; echo "$check->desig<br>"; echo "</td>";
                  
                    $n++;
                   }?>
                       
                      
                       
                  

