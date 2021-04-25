<?php 
    require_once('db.php');

	function getAllUser(){

		$conn = getConnection();
		$sql = "select * from patients";
		$result = mysqli_query($conn, $sql);
		$users = [];
		while ($row = mysqli_fetch_assoc($result)) {
			array_push($users, $row);
		}
		return $users;
	}

    function insertPatients($patients)
    {
	$conn = getConnection();
    $sql="insert into Registration values('','{$name}','{$email}','{$username}','{$password}','{$repassword}','{$age}','{$gender}',NOW())";
	$result = mysqli_query($conn, $sql);

	if($result)
    {
		header('location:../View/Login.html');
	}
    else
    {
		echo "Sorry You can't register . . . . ";
	}

    }


  


?>