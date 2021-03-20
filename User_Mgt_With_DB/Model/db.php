<?php 
        $conn= mysqli_connect('localhost','root','','webtech');
        if ($conn)
        {
            echo "Success <br>";
        }
        else
        echo "Connection Err";
        $query="select * from Users";
        $result= mysqli_query($conn,$query);
        
        echo "<table border=2 width=100> <tr> <td> ID</td> <td> name </td> <td> password </td> <td> type </td> </tr> ";
        while ($row = mysqli_fetch_assoc($result))
        {
           echo "<tr>
                    <td>{$row['id']} </td>
                    <td> {$row['name']} </td>
                </tr>";
                
           echo "<br>";
        }
        echo "</table>";
?>