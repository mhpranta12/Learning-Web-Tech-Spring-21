<?php
        require_once('../Model/db.php');
        
        function insertAssistant($assistant)
        {
            $conn=getConnection();
            $sql = "insert into assistant values ('','{$assistant['name']}','{$assistant['email']}','{$assistant['designation']}','{$assistant['gender']}')";
            $result = mysqli_query($conn,$sql);
            if($result)
            {
                return true;
            }
            else
            return false;
        }

        function deleteAssistant($id)
        {
            $conn=getConnection();
            $sql = "delete from assistant where id={$id}";
            $result = mysqli_query($conn,$sql);
            if($result)
            {
                return true;
            }
            else
            return false;
        }

        function updateAssistant($assistant)
	{
	$conn = getConnection();
	$sql = "update assistant set id='{$assistant['id']}', name='{$assistant['newname']}',email ='{$assistant['email']}',designation ='{$assistant['desig']}',gender ='{$assistant['gender']}' where id='{$assistant['id']}'";
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