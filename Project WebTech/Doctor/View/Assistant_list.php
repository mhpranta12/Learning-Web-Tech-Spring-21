<?php 
        
        require_once('../Model/db.php');
        require_once('../Model/doctor.php');
        $conn = getConnection();
        $query="select * from assistant";
        $result= mysqli_query($conn,$query);
        
        echo "<h1> Assistant's List </h1>";
        echo "<hr>";
        ?>
         <style>
            .c1
            {
                    background-color: rgb(125, 146, 238);
                    width: 100px;
            }
            .c2
            {
                    background-color:ghostwhite;
                    height: 18px;
                    width: 300px;
            }
        </style>
        <a href = "../View/Assistant.html "> <p align='center'><input type="button" class="c1" value="Add Assistant" ></a> </p>
        <link rel="stylesheet" type="text/css" href="../View/style.css" />
<?php
        echo "<table border=2 width=700> <tr> <td> ID</td> <td> Name </td> <td> Email </td> <td> Designation </td>  <td>  Gender </td> <td colspan='2'> Operations </td></tr> ";
        while ($data = mysqli_fetch_assoc($result))
        {
           echo "<tr>
                    <td>{$data['id']} </td>
                    <td> {$data['name']} </td>
                    <td> {$data['email']} </td>
                    <td> {$data['designation']} </td>
                    <td> {$data['gender']} </td>
                    
                 
                  ";
                  $tempid=$data['id'];
                  $tempname=$data['name'];
                  $tempbprice=$data['designation'] ?>
                  <?php 
                  echo "<td> " ; ?>
                  <a href = "../Controller/edit_assistant_check.php?id= <?php echo $tempid;?>&name=<?php echo $tempname;?>"><input type="button" class="c1" value="Edit" align='center'>  </a>
                  <?php 
                  echo "</td> " ; 

                  echo "<td> " ; ?>
                  <a href = "../Controller/delete_assistant.php?id= <?php echo $data['id']; ?> "> <input type="button" class="c1"value="Delete" align='center'>   </a>
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
<link rel="stylesheet" type="text/css" href="../View/style.css" />
