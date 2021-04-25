<?php
    session_start();
    include '../Partial View/header.php';
    if(isset($_COOKIE['flag'])){
    
?>





<!DOCTYPE html>
<html>
<head>
    <title>Add Service</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script src="../Scripts/serviceFormValidation.js"></script>

    <link rel="stylesheet" type="../Style/CSS/addServiceStyle.css" href="">


</head>
<body>

    <div id = "frm">
 
        <form action="../Controller/addService_check.php" method="POST" class="form-group" id="service_form">
            <table width="60%"  align="center" border="1" class="table table-dark">

                <tr>
                    <th colspan="3">
                       <h1>Add New Service</h1> 
                    </th>
                </tr>


                <tr>
                    <td>Service Name</td>
                    <td><input type="text" id="service_name" name="service_name" placeholder=""></td>
                </tr>

                <tr>
                    <td>Cost</td>
                    <td><input type="text" id="service_price" name="service_price" placeholder=""></td>
                </tr>

 

               
 
                <tr align="right">

                    <td colspan="2"><input type="Submit" name="addService" class="btn btn-info">
                        <input type="Submit" name="btn" value="Reset" class="btn btn-danger">
                    </td>
                    
                </tr>


 
            </table>
        </form>
 
    </div>
 
</body>

    

</html>

<?php
    }
    else
    {
        header('location: login.html');
    }
?>
