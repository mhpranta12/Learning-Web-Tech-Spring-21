<link rel="stylesheet" type="text/css" href="../View/style.css" />
<?php 
        
        require_once('../Model/db.php');
        
        $conn = getConnection();
        $query="select * from management";
        $result= mysqli_query($conn,$query);
        $data = mysqli_fetch_assoc($result);
        
        echo "<h1> Management Info </h1>";
        echo "<hr>";
?>
        Rent           . . . . . . . . . . . . . . . . . . . . . . . . . . . . . .  <?php echo $data['Rent'];echo "<br>"; ?>

        Expenditure    . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . <?php echo $data['Expenditure']; echo "<br>";?>

        Income         . . . . . . . . . . . . . . . . . . . . . . . . . . . . . .  <?php echo$data['Income']; echo "<br>";?>

        Utility Cost   . . . . . . . . . . . . . . . . . . . . . . . . . . . . . .  <?php echo $data['utility Cost'] ;echo "<br>" ;?>
        
        <?php echo "<hr>" ;?>
        <?php echo "db : " ;echo$data['debit']; echo "<br>";?>
        <?php echo "cr : " ;echo$data['credit']; echo "<br>";?>
           

        
<br> <br>
<a href="../View/dashboard.php"> <input type="button" class="btn" value="Dashboard">  </a>