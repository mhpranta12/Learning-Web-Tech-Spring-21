<?php
            

           if(isset($_POST['submit']))
           {
            $email = $_POST['email'];
           
            if (file_exists('../Model/doctor_info.json'))
            {
                $get_data= file_get_contents('../Model/doctor_info.json'); 
                $array_data =json_decode($get_data,true);
               
                if ($email !="" )
                {
                
                    
                    
                   foreach($array_data as $check)
                   {

                        if( $check['email'] == $email )
                        { 
                            
                          
                            echo "Verification code was sent .";
                            break;
                           
                        }
                        else
                        {
                            echo "Email was not found ";
                            break;
                        }

                        
                        
                       
                   }
                }

            } 
        }

?>