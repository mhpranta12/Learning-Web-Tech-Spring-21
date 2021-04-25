<?php 
    require_once('db.php');

	function getAllDoc(){

		$conn = getConnection();
		$sql = "select * from doctor";
		$result = mysqli_query($conn, $sql);
		$users = [];
		while ($row = mysqli_fetch_assoc($result)) {
			array_push($users, $row);
		}
		return $users;
	}

    function insertDoctor($doctor)
    {
	$conn = getConnection();
    $sql = "insert into doctor values('','{$doctor['uname']}', '{$doctor['password']}','{$doctor['name']}', '{$doctor['email']}','{$doctor['designation']}','{$doctor['gender']}')";
	$result = mysqli_query($conn, $sql);

	if($result)
    {
		return true;
	}
    else
    {
		return false;
	}

    }

    function validateDoctor($username, $password){
        $conn = getConnection();
        $sql = "select * from doctor where uname='{$username}' and password='{$password}'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
    
        //if(count($row) > 0)
        if ($row['uname']==$username && $row['password']==$password)
        {
            return true;

        }
        else
        {
            return false;
        }
    }


    function deleteProduct($id)
	{
	$conn = getConnection();
	$sql = "delete from products where id='{$id}'";
	$result = mysqli_query($conn, $sql);
	
	if($result)
	{
		return true;
	}
	else
	{
		return false;
	}
    }

	function updateProduct($doctor)
	{
	$conn = getConnection();
	$sql = "update products set name='{$product['newname']}',buying price='{$product['bprice']}' where id='{$product['id']}'";
	$result = mysqli_query($conn, $sql);
	
	if($result)
	{
		return true;
	}
	else
	{
		return false;
	}
    }

    function getProductbyName($name)
    {
	$conn = getConnection();
	$sql = "select * from products where name='{$name}'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($conn, $sql);
	
	
	return $result;
    }

	function getNamebyID($id)
    {
	$conn = getConnection();
	$sql = "select * from products where name='{$id}'";
	$result = mysqli_query($conn, $sql);
	
	return $result;
    }


?>