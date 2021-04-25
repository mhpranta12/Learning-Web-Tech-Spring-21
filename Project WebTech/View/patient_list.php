<?php
    session_start();
    include '../Partial View/header.php';
    require_once('../model/patientModel.php');
    if(isset($_COOKIE['flag'])){

        $patients = getAllPatients();

?>

<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript">
        function deleteAlert(){
            return confirm("Are you sure you want to delete?");
        }
    </script>
    
</head>
<body>


<div class="container">

    <p>
        <a class="btn btn-success" href="patient_registration.html">Register New Patient</a>
    </p>

    <div class="card">
        <div class="card-header">
            <h3>Patient List</h3>
        </div>
        <td>
            <div id="search-bar">
                 <label>Search: </label>
                  <input type="text" id="name" id="name" autocomplete="off" onkeyup="change()">
            </div>
            <br>                
        </td>

        <table class="table table-striped" width="100%"  align="center" border="1">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Complain</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($patients as $patient): ?>
                <tr>
                    
                    <td><?php echo $patient['id'] ?></td>
                    <td><?php echo $patient['fName']." ".$patient['lName'] ?></td>
                    <td><?php echo $patient['email']?></td>
                    <td><?php echo $patient['phone'] ?></td>
                    <td><?php echo $patient['complain'] ?></td>
                    <td>
                        <a href="patient_view.php?id=<?php echo $patient['id']?>" class="btn btn-sm btn-info">View</a>
                        <a href="../Controller/edit_patient.php?id=<?php echo $patient['id']?>" class="btn btn-sm btn-primary">Edit</a>
                        <a href="../Controller/delete_patient.php?id=<?php echo $patient['id']?>" onclick="return deleteAlert();" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>

            <?php endforeach; ?>
        </tbody>


    </table>


    </div>
    


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