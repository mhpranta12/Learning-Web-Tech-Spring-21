<?php
	require_once('db.php');

	function validateUser($user_email, $password)
	{
		$conn = getConnection();
		$sql = "SELECT * FROM users WHERE email = '{$user_email}' and password = '{$password} '";
		$result = mysqli_query($conn, $sql);

		$row = mysqli_fetch_assoc($result);
		$role = $row['role'];

		if(count($row) > 0 && $role == 'manager')
		{
			header("Location: ../View/managerDashboard.php");
			return true;
		}

		else if(count($row) > 0 && $role == 'doctor')
		{
			echo "Welcome to Doctor's Dashboard";
			return true;
		}

		else if(count($row) > 0 && $role == 'patient')
		{
			echo "Welcome to Patient's Dashboard";
			return true;
		}

		else if(count($row) > 0 && $role == 'receptionist')
		{
			echo "Welcome to Receptionist's Dashboard";
			return true;
		}

		else
		{
			return false;
		}

		

/*		if(count($row) > 0)
		{
			return true;
		}

		else
		{
			return false;
		}	
*/
	}

	function insertEmployee($employee){
		$conn = getConnection();
		$sql = "INSERT INTO users VALUES('', '{$employee['fName']}', '{$employee['lName']}', '{$employee['email']}', '{$employee['phone']}', '{$employee['password']}', '{$employee['dob']}', '{$employee['role']}', '{$employee['gender']}', '{$employee['profile_picture']}', '{$employee['salary']}' )";

		$result = mysqli_query($conn, $sql);
	    

		if($result){
			return true;
		}else{
			return false;
		}

	}

	function getAllEmployee(){
		$conn = getConnection();
		$sql = "select * from users";
		$result = mysqli_query($conn, $sql);
		$users = [];
		while ($row = mysqli_fetch_assoc($result)) {
			array_push($users, $row);
		}
		return $users;
	}

	function getEmployeeById($id){
	
		$conn = getConnection();
		$sql = "select * from users where id='{$id}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}


	function deleteUser($id)
	{
		$conn = getConnection();
		$sql = "delete from users where id='{$id}'";
		$result = mysqli_query($conn, $sql);
		
		if($result){
			return true;
		}else{
			return false;
		}
	}


	/*function updateUser($user){
		$conn = getConnection();
		$sql = "update users set username='{$employee['username']}', password='{$employee['password']}', email='{$employee['email']}', type='$employee['role']'";
		$result = mysqli_query($conn, $sql)
		
		if($result){
			return true;
		}else{
			return false;
		}
	}*/





?>