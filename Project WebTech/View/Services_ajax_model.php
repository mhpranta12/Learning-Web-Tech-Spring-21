<?php
	
	
    require_once("../Model/db.php");
	
	$conn= getConnection();
	$name= $_REQUEST['name'];
	$sql = "select * from services where service_name like '%{$name}%'";
	$result = mysqli_query($conn, $sql);
    echo $name;

	$response = "<table class='table table-dark' align='center' width='70%';>
					<tr>
						<td>Id</td>
						<td>Service Name</td>
						<td>service Price </td>
					</tr>";
	while ($row=mysqli_fetch_assoc($result)) {
		$response .= 	"<tr>
							<td>{$row['id']}</td>
							<td>{$row['service_name']}</td>
							<td>{$row['service_price']}</td>
						</tr>";
	}

	$response .= "</table>";
	
	echo $response;	
?>