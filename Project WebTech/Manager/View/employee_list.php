<?php
    session_start();
    include '../Partial View/header.php';
    require_once('../model/loginModel.php');
    if(isset($_COOKIE['flag'])){

        $employees = getAllEmployee();

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
        <a class="btn btn-success" href="user_registration.php">Register New employee</a>
    </p>

    <div class="card">
        <div class="card-header">
            <h3>employee List</h3>
        </div>

        <table class="table table-striped" width="100%"  align="center" border="1">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Role</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($employees as $employee): ?>
                <tr>
                    
                    <td><?php echo $employee['id'] ?></td>
                    <td><?php echo $employee['fName']." ".$employee['lName'] ?></td>
                    <td><?php echo $employee['email']?></td>
                    <td><?php echo $employee['phone'] ?></td>
                    <td><?php echo $employee['role'] ?></td>
                    <td>
                        <a href="employee_view.php?id=<?php echo $employee['id']?>" class="btn btn-sm btn-info">View</a>
                        <a href="../Controller/edit_user.php?id=<?php echo $employee['id']?>" class="btn btn-sm btn-primary">Edit</a>
                        <a href="../Controller/delete_user.php?id=<?php echo $employee['id']?>" onclick="return deleteAlert();" class="btn btn-sm btn-danger">Delete</a>
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
?>