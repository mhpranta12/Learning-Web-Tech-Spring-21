<?php 
    require_once('db.php');

    function insertProduct($product)
    {
	$conn = getConnection();
    $sql = "insert into products values('', '{$product['name']}', '{$product['buyingprice']}', '{$product['sellingprice']}','{$product['profit']}','')";
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

	function updateProduct($product)
	{
	$conn = getConnection();
	$sql = "update products set name='{$product['newname']}' where id='{$product['id']}'";
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