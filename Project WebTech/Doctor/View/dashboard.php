<?php
    session_start();
    
    if(isset($_COOKIE['flag'])){

?>
<html>
    <body>
       
            <style>
                .h
                {
                    object-position: center;
                }
                </style>
                <div style= background-image: url("../View/image.png"); >
                <p align="right"> <u> Important Links</u> </a> </p>
                <p align="right"> <a href="https://corona.gov.bd/"> Corona </a> </p>
                <p align="right"> <a href="https://www.icddrb.org/"> ICDDR </a> </p>  
                <p align="right"> <a href="https://dghs.gov.bd/index.php/bd/"> DGHS </a> </p>
                <p align="right"> <a href="https://www.who.int/"> WHO </a> </p>
            <p align="right"><h1 class="h"> Doctor's Dashboard  </h1> </p><hr>
            <h3>Welcome <?php echo "  ".$_SESSION['name']; ?> </h3>
            <img src="service.png" style=width:"300px">
            <link rel="stylesheet" type="text/css" href="style.css" />
            <p align='right'><a href="../Controller/logout.php" id="g2"> <input type="button"  class="btn2" value="Log Out <?php echo " ".$_SESSION['name']; ?> ->" align='center'>  </a></p><br>
            <Style>
                    /*#g1{
                        background-color: antiquewhite;
                    }
                    #g2
                    {
                        background-color:cornflowerblue;
                    }*/
                    #t1
                    {
                        background-color:cornsilk;
                    }
            </Style>
            
               <tr>
                <td height=80px>
                    <p align='left'><a href="../View/Assistant.html"  align:center> <input type="button" class="btn"  value="Add Assistant" align='center' > </input></p> </a> <br>
                </td>
                </tr>
                
                <tr>
                <td height=80px>
                    <a href="../View/Registration_js.html"id="g2">  <input type="button"  class="btn"  value="Registration" align='center'> </input>  </a><br>
                </td>
                </tr>
                <br>
                <tr>
                <td height=80px>
                    <a href="../View/doctor_list.php"id="g1"> <input type="button" class="btn"  value="Doctor's List" align='center'>   </a><br>        
                </td>
                </tr>
                <br>
                <td height=80px>
                    <a href="../View/Login.html"id="g1"> <input type="button" class="btn"  value="Login" align='center'>    </a><br>        
                    <tr>
                </td>
                <br>
                <td height=80px>
                    <a href="../View/Add_Profile_pic.html"id="g1">  <input type="button" class="btn"  value="Change Profile Picture" align='center'>   </a><br>        
                </td>
                </tr>
                <br>
                <tr>
                <td height=80px>
                    <a href="../View/Assistant_list.php"id="g1"> <input type="button" class="btn" value="Assistant List" align='center'>  </a><br>        
                </td>
                </tr>
                <br>
                <tr>
                    <td height=80px>
                        <a href="../View/patient.php"id="g1"> <input type="button" class="btn" value=" Patients " align='center'>  </a><br>        
                    </td>
                    </tr>
                    <br>
                <tr>
                <td height=80px>
                    <a href="../View/time.php"id="g1"> <input type="button"class="btn"  value="Time Schedule" align='center'>  </a><br>        
                </td>
                </tr>
                <br>
                <tr>
                <td height=80px>
                    <a href="../View/ot_list.php"id="g1"> <input type="button" class="btn" value="OT Available" align='center'>   </a><br>        
                </td>
                </tr>
                <br>
                <tr>
                <td height=80px>
                    <a href="../View/pharm.php"> <input type="button" class="btn" value=" Pharmacy " align='center'>  </a><br>        
                </td>
                </tr>
                <br>
                <tr>
                <td height=80px>
                    <a href="../View/Search_assistant.html"> <input type="button"class="btn"  value="Search Assistant " align='center'>   </a><br>        
                </td>
                </tr>
                <br>
                
                    <tr>
                <td height=80px>
                    <a href="../View/Appointment_list.php"> <input type="button"class="btn"  value="Appointments " align='center'>   </a><br>        
                </td>
                </tr>
                <br>
                <tr>
                <td height=80px>
                    <p align='left'><a href="../View/User.php"  align:center> <input type="button" class="btn"  value="View Employee" align='center' > </input></p> </a> <br>
                </td>
                </tr>
               
                <tr>
                <td height=80px>
                    <a href="../View/management.html"> <input type="button"class="btn"  value="Management Info " align='center'>   </a><br>        
                </td>
                </tr>
                
            
                </div>
           
           
           
    </body>
</html>
 <?php
    } 
 else 
 {
    header('location: ../View/normal_dashboard.html');
 }
 ?>