<!DOCTYPE html>
<html>
<head>
	<title>Change Profile Picture</title>
</head>
<body>
	<form method="POST" action="Profile_Picture_Check.php" enctype="multipart/form-data">
	<fieldset>
			<legend><b>Profile Picture</b></legend>
                <img src ="user.png" height="80px" weight="40px"> </img><br>
				<input type ="file"name="ufile"> </input><br><hr>
             
			 <br>
						<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>