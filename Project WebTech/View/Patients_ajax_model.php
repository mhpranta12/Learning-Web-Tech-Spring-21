<?php
	
	
    require_once("../Model/db.php");
	
	$conn= getConnection();
	$name= $_REQUEST['name'];
	$sql = "select * from patients where fName like '%{$name}%'";
	$result = mysqli_query($conn, $sql);
    echo $name;

	$response = "<table class='table table-dark' align='center' width='70%';>
					<tr>
						<td>Id</td>
						<td>Patient Name</td>
						<td>Email</td>
						<td>Phone</td>
						<td>Complain</td>
					</tr>";
	while ($row=mysqli_fetch_assoc($result)) {
		$response .= 	"<tr>
							<td>{$row['id']}</td>
							<td>{$row['fName']." ".$row['lName']}</td>
							<td>{$row['Phone']}</td>
							<td>{$row['Email']}</td>
						</tr>";
	}

	$response .= "</table>";
	
	echo $response;	
?>