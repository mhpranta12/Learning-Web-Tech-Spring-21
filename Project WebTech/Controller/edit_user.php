<?php
	include '../Partial View/header.php';
	require_once('../Model/loginModel.php');


	if(!isset($_GET['id']))
	{
		echo "No Employee Found!";
		exit;

	}

	$id = $_GET['id'];
	$employee = getEmployeeById($id); 

	if(!$employee)
	{
		echo "No employee found!";
		exit;
	}

	if($_SERVER['REQUEST_METHOD'] === 'POST')
	{
		$employee = updateemployee($_POST, $id);

		if(isset($_FILES['picture']))
		{
			uploadImage($_FILES['picture'], $employee);
			
		}

		header("Location: employee_list.php");

	}
  
?>

<div class="container">


	<div class="card">
		<div class="card-header">
			<h3>Update Employee</h3>
			<div class="card-body">
				<form method="POST" enctype="multipart/form-data" action="">
					<div class="form-group">
						<label>ID</label>
						<input name="id" value="<?php echo $employee['id']; ?>" class="form-control" readonly>
					</div>

					<div class="form-group">
						<label>First Name</label>
						<input name="fName" value="<?php echo $employee['fName']; ?>" class="form-control">
					</div>

					<div class="form-group">
						<label>Last Name</label>
						<input name="lName" value="<?php echo $employee['lName']; ?>" class="form-control">
					</div>

					<div class="form-group">
						<label>Email</label>
						<input name="email" value="<?php echo $employee['email']; ?>" class="form-control">
					</div>

					<div class="form-group">
						<label>Phone No.</label>
						<input name="phone" value="<?php echo $employee['phone']; ?>" class="form-control">
					</div>

					<div class="form-group">
					
                    	<label>Gender: <?php echo $employee['gender']; ?></label><br>
						<input type="radio" name="gender" <?php if($employee['gender']=="male") {echo "checked"};?> value="male">Male
						<input type="radio" name="gender" <?php if($employee['gender']=="female") {echo "checked"};?> value="female">Female
						<input type="radio" name="gender" <?php if($employee['gender']=="other") {echo "checked"};?> value="other">Other
					</div>

					<div class="form-group">
						<label>DOB</label>
						<input name="complain" value="<?php echo $employee['dob']; ?>" class="form-control">
					</div>

					<div class="form-group">
						<label>Salary</label>
						<input name="complain" value="<?php echo $employee['salary']; ?>" class="form-control">
					</div>


		

					<button class="btn btn-success">Submit</button>
			</form>
		  </div>
		</div>
		
	</div>
	
	
</div>