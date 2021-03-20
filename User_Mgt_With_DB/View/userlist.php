<?php 
        include("header.php");
        $conn= mysqli_connect('localhost','root','','webtech');
        $query="select * from Users";
        $result= mysqli_query($conn,$query);
        
        echo "<table border=2 width=700> <tr> <td> ID</td> <td> name </td> <td> password </td> <td> type </td> </tr> ";
        while ($data = mysqli_fetch_assoc($result))
        {
           echo "<tr>
                    <td>{$data['id']} </td>
                    <td> {$data['name']} </td>
                    <td> {$data['password']} </td>
                    <td> {$data['type']} </td>
                </tr>";
                
           echo "<br>";
        }
        echo "</table>";
?>