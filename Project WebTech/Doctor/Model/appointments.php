<?php
        require_once('../Model/db.php');
        
        function insertAppointment($appointment)
        {
            $conn=getConnection();
            $sql = "insert into appointments values ('{$appointment['serial']}','{$appointment['name']}','{$appointment['gender']}','{$appointment['problem']}','{$appointment['phone']}')";
            $result = mysqli_query($conn,$sql);
            if($result)
            {
                return true;
            }
            else
            return false;
        }

        function deleteAppointment($serial)
        {
            $conn=getConnection();
            $sql = "delete from appointments where serial={$serial}";
            $result = mysqli_query($conn,$sql);
            if($result)
            {
                return true;
            }
            else
            return false;
        }

        function updateAppointment($appointment)
	{
	$conn = getConnection();
	$sql = "update appointments set serial='{$appointment['serial']}',patient name='{$appointment['name']}',gender ='{$appointment['gender']}',problem ='{$appointment['problem']}',phone ='{$appointment['phone']}' where serial='{$appointment['serial']}'";
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


?>