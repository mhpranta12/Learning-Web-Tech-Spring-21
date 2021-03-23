<?php 
    require_once('db.php');
    function insertProduct($product)
    {
	$conn = getConnection();
    $sql = "insert into products values('', '{$product['name']}', '{$product['buyingprice']}', '{$product['sellingprice']}', '{$product['displayable']}')";
	$result = mysqli_query($conn, $sql);

	if($result){
		return true;
	}
    else
    {
		return false;
	}

    }


    function deleteProduct($id){
	$conn = getConnection();
	$sql = "delete from products where id='{$id}";
	$result = mysqli_query($conn, $sql);
	
	if($result){
		return true;
	}else{
		return false;
	}
}
?>