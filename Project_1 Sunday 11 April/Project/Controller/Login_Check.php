<?php
            session_start();

           if(isset($_POST['submit']))
           {
            $uname=$_POST["uname"];
            $password=$_POST["upassword"];
            $_SESSION['name']=$uname;
            $_SESSION['password']=$password;

            $user= array('name'=>$uname ,
            'password'=>$password );

            
           
            

         
            if (file_exists('../Model/doctor_info.json'))
            {
                $get_data= file_get_contents('../Model/doctor_info.json'); 
                $array_data =json_decode($get_data,true);
               
                if ($uname !="" && $password !="")
                {
                
                    $uinfo = ['name'=>$uname ,
                              'password'=>$password ];
                    
                   foreach($array_data as $check)
                   {

                        if( $check['name'] == $uname && $check['password'] == $password )
                        { 
                            
                          
                            header('location: ../View/dashboard.html');
                            break;
                           
                        }
                        else
                        {
                            echo "Credentials Error";
                            break;
                        }

                        
                        
                       
                   }
                }

            } 
        }

?>