
<!DOCTYPE html>
<html>
<head>
	<title>Name Input field</title>
</head>
<body>
	<form method="POST" action="#">
		<fieldset>
			<legend>Email</legend>
			Email: 		<input type="email" name="myemail" value="<?php if(isset($_POST['myemail'])){ echo $_POST['myemail']; }?>"> <br>
						<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>