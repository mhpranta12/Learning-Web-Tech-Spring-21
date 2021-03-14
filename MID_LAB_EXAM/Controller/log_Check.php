<?php
            session_start();

           if(isset($_POST['submit']))
           {
            $uid=$_POST["uid"];
            $password=$_POST["upassword"];
            $_SESSION['uid']=$uid;
            $_SESSION['password']=$password;

            $user= array('uid'=>$uid ,
            'password'=>$password );

            
           
            

         
            if (file_exists('../Model/udata.json'))
            {
                $get_data= file_get_contents('../Model/udata.json'); 
                $array_data =json_decode($get_data,true);
               
                if ($Uid !="" && $password !="")
                {
                
                    $uinfo = ['uid'=>$uid ,
                              'password'=>$password ];
                    
                   foreach($array_data as $check)
                   {

                        if( $check['uid'] == $uid && $check['password'] == $password )
                        { 
                            
                          
                            header('location: ../View/home.php');
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
