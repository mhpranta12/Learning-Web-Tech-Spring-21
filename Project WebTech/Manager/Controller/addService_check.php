<?php
   

    require_once('../Model/serviceModel.php');

    if(isset($_POST['addService'])){


        if(empty($_POST['service_name']))
        {
                echo "<p style = 'color:red'>Service field must not be empty</p>";
        }

        if(empty($_POST['service_price']))
        {
            echo "<p style='color:red'>Price must be given</p>";
        }

        else
        {
            $service_name = $_POST['service_name'];
            $service_price = $_POST['service_price'];

            

            if (checkService($_POST['service_name']) == false)
            {
                echo "Service Already in Exists<br/>";
            }

            else
            {
                $service = [	
                    'service_name'	=> $service_name, 
                    'service_price'	=> $service_price
                ];
        
                
        
                $status = insertService($service);	
                if($status)
                {
                    echo "Service added successfully!";
                }
        
                else
                {
                    echo "Something is wrong";
                }

            }
            
            
            
    

        }

       
    }

    
    
    




?>