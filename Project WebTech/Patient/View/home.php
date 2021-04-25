<?php
session_start();
	
	if (isset($_SESSION['flag'])) {
	?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>

	<center><h1>Welcome to Patient's Dashboard</h1></center>
	<div class="home">
	


            <center><h1>Patient's Dashboard</h1></center>
            
            <table>
            	<ol>
            		<li><a href="../View/doctorList.html"> Doctor's List  </a><br> </li>
            		<li><a href="../View/appoinment.html"> Doctor Appointment   </a><br> </li>
            	
            		<li><a href="../View/signup.html"> Registration </a><br></li>
            	
            		<li><a href="../View/cabinInfo.html">Cabin Information </a> <br></li>

            		<li><a href="../View/machineList.html"> Machine Information  </a><br> </li>
            	
            		<li> <a href="../View/icuInfo.html"> ICU Abailability List </a><br></li>
            	
            		<li> <a href="../View/time.html"> Time Schedule </a><br></li>
            	
            		<li><a href="../View/OT.html"> OT Availability  </a><br></li>
            	
            		<li><a href="../View/pharmaInfo.html"> Pharmacy Information  </a><br></li>
            	
            		<li><a href="../View/serial.html"> Serial No  </a><br></li>
            	</ol>

            </table>
            
           
           
            
            
       
       




	<a href="../View/index.html">Logout</a>
	 </div>

</body>
</html>
<?php
}

?>
		



