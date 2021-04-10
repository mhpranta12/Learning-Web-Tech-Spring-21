<?php 
        
        require_once('../Model/db.php');
        require_once('../Model/product.php');
        $conn = getConnection();
        $query="select * from products";
        $result= mysqli_query($conn,$query);
        
        echo "<h1> Product List </h1>";
        echo "<hr>";

        echo "<table border=2 width=700> <tr> <td> ID</td> <td> name </td> <td> buying price </td> <td> selling price </td>  <td> profit  </td> <td colspan='2'> Operations </td></tr> ";
        while ($data = mysqli_fetch_assoc($result))
        {
           echo "<tr>
                    <td>{$data['id']} </td>
                    <td> {$data['name']} </td>
                    <td> {$data['buying price']} </td>
                    <td> {$data['selling price']} </td>
                    <td> {$data['profit']} </td>
                    
                 
                  ";
                  $tempid=$data['id'];
                  $tempname=$data['name'];
                  $tempbprice=$data['buying price'] ?>
                  <?php 
                  echo "<td> " ; ?>
                  <a href = "../Controller/edit_product_check.php?id= <?php echo $tempid;?>&name=<?php echo $tempname;?>&bprice=<?php echo $tempbprice;?>"> Edit </a>
                  <?php 
                  echo "</td> " ; 

                  echo "<td> " ; ?>
                  <a href = "../Controller/delete_product.php?id= <?php echo $data['id']; ?> "> Delete </a>
                  <?php 
                  echo "</td> " ; 
                  echo "</tr> " ; 
                  ?>

                
        <?php
                echo "<br>";
           

        }
        echo "</table>";
?>
<a href="../View/dashboard.html">Dashboard</a>