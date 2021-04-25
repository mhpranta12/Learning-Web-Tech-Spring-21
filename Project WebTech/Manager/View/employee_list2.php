<?php
    session_start();
    include '../Partial View/header.php';
    if(isset($_COOKIE['flag'])){
?>


<!DOCTYPE html>
    <html>
    <head>
        <title>Employee Page</title>
    </head>
    <body>
        <nav>

        
        </nav>
        
            <table class="table table-dark" align="center" width="70%" style="background-color:powderblue;" >
                <thead class="thead-dark">
                
                    <tr>
                        <th align="left"><img src="../Resources/logo.jpg" width="100" height="100"></th>
                        <td><p><a href="managerDashboard.php"> Dashboard</a></p></td>
                        <td><p><a href="../Controller/logout.php"> Logout</a></p></td>
                        <td><p><a href=""> Registration</a></p></td>
                    </tr>

                </thead>
               
               
            <table border="1" width="100%" class="table table-dark">
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Phone No.</td>
                    <td>Role</td>
                    <td>Action</td>
                </tr>


            
            <?php

            require_once('../model/loginModel.php');

            $empArr =  getAllEmployee();

            foreach($empArr as $employee)
            {
                
                echo "<tr>";
                
                
                    echo "<td class='empId'>"; echo $employee['id'];  echo "</td>";
                    echo "<td>"; echo $employee['fName']." ".$employee['lName'];  echo "</td>";
                    echo "<td>"; echo $employee['email']; echo "</td>"; 

                    echo "<td>"; echo $employee['phone']; echo "</td>";

                    echo "<td>"; echo $employee['role']; echo "</td>";
                    
                    echo "
        
                    <td>
                        <a href='employee_view.php?id={$employee['id']}'>View</a> |

                        <a href='../Controller/employee_edit.php?id={$employee['id']}'> EDIT</a> |
                        <a class='delete-btn' href='../controller/employee_delete.php?id={$employee['id']}'> DELETE</a>
                    </td>
                        </tr>";
                
                
                

            }   

            ?>

            
            
        </table>

                </tr>
                <tfoot>
                    <tr>
                        <td colspan="4" style="border:1pt solid black;" align = "center">Copyright @ 2021</td>
                    </tr>
                </tfoot>
            </table>
           
    </body>
    </html>


 <?php
    }
    else
    {
        header('location: login.html');
    }
?>
