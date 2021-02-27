<?php
    session_start();
         
?>



<!DOCTYPE html>
<html>
<head>
    
    <title>Profile</title>
  
        <table align='center' border="1" width="1100px">
                         <tr>           
                            <th colspan="2"> <img src="logo.png" width=160px height=100px align="left">
                            <p align='right'>Logged in as <?php echo $_SESSION['username'];?>|
                                <a href="LOGIN.php" align='right';>Logout</a> </p>
                            </th>
                            
                        </tr> 
                        <tr> 
                            <td height =200px>   Account <br>
                            <hr>
                            <ul type ='dish'>
                             <li><a href= "DASHBOARD.php"> Dashboard </a></li>
                             <li><a href= "VIEW_PROFILE.php"> View Profile </a></li>
                             <li><a href= "EDIT_PROFILE.php"> Edit Profile </a></li>
                             <li><a href= "PROFILE_PICTURE.php"> Change Profile Picture </a></li>
                             <li><a href= "CHANGE_PASSWORD.php"> Change Password </a></li>
                             <li><a href= "LOGIN.php">Logout </a></li>

                            </ul>
                            </td>
                            <td height =200px>
                            <fieldset>
			<legend><b> Edit Profile </b> </legend>

            <form method="POST" action="Edit_Profile_Check.php">
                                    Name  : <input type ="text" name="uname" width="200px" placeholder="Enter Name"> </input><br><hr>
                                    Email  : <input type ="email" name="email"placeholder="Enter Email "> </input><br><hr>
                    
                              
                                <input type="radio"  name="gender" value="Male">Male
                                <input type="radio" name="gender" value="Female">Female
                                <input type="radio" name="gender" value="Others"> Others <br> <br>
                            
                                DD  <input type="text" width="80px" name="myday" placeholder="Day"> 
                                MM  <input type="text" name="mymonth" placeholder="Month">
                                YY  <input type="text" name="myyear" placeholder="Year"> <br>
                                <br>
                                <p align='right' >(dd / mm // yyyy)</p> 
                           
                                 <br><hr>
                                            <input type="submit" name="submit" value="Submit">
                                            <input type="reset">
                            
                            </form>
                
                

               
                
			<br> <br>
					
		</fieldset>
                            </td>
                    
                        <tr>
                        
                    </tr>
                   
        
                    <td colspan="3">
                        <h6 style="text-align: center;">Copyright  @2021</h6>
                    </td>
        </table>
    
    </form>
</body>
</html>