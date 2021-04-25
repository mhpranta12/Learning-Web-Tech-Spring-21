<?php
    session_start();
    include '../Partial View/header.php';
    if(isset($_COOKIE['flag'])){
?>


<!DOCTYPE html>
    <html>
    <head>
        <title>Services Page</title>
        <script type="text/javascript" src="../Scripts/ajax_search.js"></script>
    </head>
    <body>
        
        
            <table class="table table-dark" align="center" width="70%" style="background-color:powderblue;" >
                <thead class="thead-dark">
                
                    <tr>
                        <th align="left"><img src="../Resources/logo.jpg" width="100" height="100"></th>
                        <td><p><a href="managerDashboard.php"> Dashboard</a></p></td>
                        <td><p><a href="../Controller/logout.php"> Logout</a></p></td>
                        <td><p><a href=""> Registration</a></p></td>
                        <td>
                            <div id="search-bar">
                                <label>Search: </label>
                                <input type="text" id="name" id="name" autocomplete="off" onkeyup="change()">
                            </div>
                            
                        </td>
                    </tr>

                    
                         
                        
                    

                </thead>

                <div id="result"></div>

               
               
               
            <table border="1" width="100%" class="table table-dark">
                <tr>
                    <td>Service ID</td>
                    <td>Name</td>
                    <td>Cost</td>
                    <td>Action</td>
                </tr>


            
            <?php

            require_once('../model/serviceModel.php');

            $serviceArr =  getAllServices();

            foreach($serviceArr as $service)
            {
                
                echo "<tr>";
                
                
                    echo "<td class='serviceId'>"; echo $service['id'];  echo "</td>";
                    echo "<td>"; echo $service['service_name'];  echo "</td>";
                    echo "<td>"; echo $service['service_price']; echo "</td>"; 
                    
                    echo "
        
                    <td>
                        <a href='edit.php?id={$service['id']}'> EDIT</a> |
                        <a class='delete-btn' href='../controller/service_delete.php?id={$service['id']}'> DELETE</a>
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
