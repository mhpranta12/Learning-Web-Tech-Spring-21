
<!DOCTYPE html>
<html>
<head>
	<title>Date Of Birth</title>
</head>
<body>
	<form method="POST" action="#">
		<fieldset>
			<legend>Email</legend>

			<legend>Date Of Birth</legend>
			DD<input type="textarea" width="80px" name="myday" value="<?php if(isset($_POST['myday'])){ echo $_POST['myday']; }?>"> 
			MM<input type="textarea" name="mymonth" value="<?php if(isset($_POST['mymonth'])){ echo $_POST['mymonth']; }?>">
			YY<input type="textarea" name="myyear" value="<?php if(isset($_POST['myyear'])){ echo $_POST['myyear']; }?>"> <br> <br>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>