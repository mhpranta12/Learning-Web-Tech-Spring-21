<?php
	include_once('../Model/loginModel.php');

	$id = $_GET['id'];
	
	$res = deleteUser($id);

	if($res)
	{
		echo "User Deleted successfully";
	}

	else
	{
		echo "Something is wrong";
	}
?>