<?php
    session_start();
    include '../Partial View/header.php';
    if(isset($_COOKIE['flag'])){

?>



    <!DOCTYPE html>
    <html>
    <head>
        <title>Registration Page</title>
    </head>
    <body>
        <form method="post" action="../Controller/addService_check.php">
            <fieldset>
                <legend>Add Service</legend>
                <table>
                    <tr>
                        <td>Service Name</td>
                        <td><input type="text" name="service_name" value="" placeholder=""></td>
                    </tr>
                    <tr>
                        <td>Price</td>
                        <td><input type="number" name="service_price" value=""></td>
                    </tr>
                    
                    

                    
        
                </table>
                                
            </fieldset>


                    
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" name="addService" value="Submit"> 
                            <input type="Submit" name="btn" value="Reset">
                        </td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </body>
    </html>


<?php
    }
    else
    {
        header('location: login.html');
    }
?>