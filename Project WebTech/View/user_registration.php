<?php
    session_start();
    include '../Partial View/header.php';
    if(isset($_COOKIE['flag'])){
    
?>





<!DOCTYPE html>
<html>
<head>
    <title>Employee Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
    <div id = "frm">
 
        <form action="../Controller/employee_validation.php" method="POST" class="form-group">
            <table width="60%"  align="center" border="1" class="table table-dark">

                <tr>
                    <th colspan="3">
                       <h1>Employee Registration</h1> 
                    </th>
                </tr>


                <tr>
                    <td>First Name</td>
                    <td><input type="text" id="fName" name="fName" placeholder=""></td>
                </tr>

                <tr>
                    <td>Last Name</td>
                    <td><input type="text" id="lName" name="lName" placeholder=""></td>
                </tr>

 
                <tr>
                    <td>Email Address: </td>
                    <td><input type="text" id="email" name="email" placeholder="patient@example.com"></td>
                </tr>

                 <tr>
                    <td>Phone No.  </td>
                    <td><input type="text" id="phone" name="phone" placeholder="+880XXXXXXXXXX"></td>
                </tr>

                <tr>
                    <td>Password</td>
                    <td><input type="password" id="password" name="password"></td>
                </tr>    
                

                
                 <tr>
                    <td>Date of Birth: </td>
                    <td><input size="3" type="text" id="email" name="day" placeholder="dd">
                        /<input size="3" type="text" name="month" placeholder="mm">
                        /<input size="4" type="text" name="year" placeholder="yyyy">

                       (dd/mm/yyyy)
                        
                    </td>
                </tr>
 
                
                <tr>
                    <td>Role</td>
                    <td>
                    <select id="role" name="role">
                        <option value="def">--Assign Role--</option>
                        <option value="manager">Manager</option>
                        <option value="doctor">Doctor</option>
                        <option value="receptionist">Receptionist</option>
                        <option value="patient">Patient</option>
                        
                    </select>
                    </td>
                </tr>
 
                <tr>
                    <td>Gender: </td>
                    <td><input type="radio" id="male" name="gender" value="male"><label for="male">Male</label>
                    <input type="radio" id="female" name="gender" value="female"><label for="female">Female</label>
                    <input type="radio" id="other" name="gender" value="other"><label for="other">Other</label>
                   
                </tr>
 
                
               
                <tr>
                    <td>Photo: </td>
                    <td><input type="file" id="upload" name="profile_picture"></td>
                </tr>

                 <tr>
                    <td>Salary</td>
                    <td><input type="number" id="salary" name="salary"></td>
                </tr>



                <tr>
                    <td colspan="3">
                        <br>
                    </td>
                    
                </tr>
 
                <tr align="right">

                    <td colspan="2"><input type="Submit" name="reg_btn" class="btn btn-info">
                        <input type="Submit" name="reset" value="Reset" class="btn btn-danger">
                    </td>
                    
                </tr>


 
            </table>
        </form>
 
    </div>
 
</body>
</html>

<?php
    }
    else
    {
        header('location: login.html');
    }
?>
