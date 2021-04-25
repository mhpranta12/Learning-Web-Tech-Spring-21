<?php

	if(isset($_COOKIE['flag'])){
	
		require_once('../Model/loginModel.php');
		/*require_once('employee_list.php');*/


		if(!isset($_GET['id']))
		{
			echo "No Employee Found!";
			exit;

		}

		$id = $_GET['id'];
		$employee = getEmployeeById($id); 
		if(!$employee)
		{
			echo "No record found";
		}

		else{

?>





<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>

	<title>employee List</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>

	<div class="card">
		<div class="card-header">
			<h3>Employee Profile</h3>
		</div>

		<table class="table">
			<tr>
				<th>First Name: </th>
				<td><?php echo $employee['fName']?></td>
			</tr>

			<tr>
				<th>Last Name: </th>
				<td><?php echo $employee['lName']?></td>
			</tr>

			<tr>
				<th>Email: </th>
				<td><?php echo $employee['email']?></td>
			</tr>

			<tr>
				<th>Phone: </th>
				<td><?php echo $employee['phone']?></td>
			</tr>

			<tr>
				<th>Role: </th>
				<td><?php echo $employee['role']?></td>
			</tr>

			<tr>
				<th>Gender</th>
				<td><?php echo $employee['gender']?></td>
			</tr>

			
			<tr>
				<th>Date Of Birth</th>
				<td><?php echo $employee['dob'] ?></td>
			</tr>


			<tr>
				<th>Salary</th>
				<td>Tk. <?php echo $employee['salary']?></td>
			</tr>


		</table>
	</div>

	

</body>
</html>


<?php 
		}
	}

	else{
		header('location: login.html');
	}


?>