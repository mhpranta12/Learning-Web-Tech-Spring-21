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

            
           
            

         
            if (file_exists('../Model/udata.json'))
            {
                $get_data= file_get_contents('../Model/udata.json'); 
                $array_data =json_decode($get_data);
               
                if ($uname!="" && $password!="")
                {
                
                    $uinfo = ['name'=>$uname ,
                    'password'=>$password ];
                    
                   foreach($array_data as $check)
                   {

                        if( $check->name==$uname && $check->password ==$password )
                        { 
                            
                            echo"Login Success";
                            header('location: ../View/home.php');
                            break;
                           
                        }

                        if( $check->name!=$uname && $check->password !=$password )
                        { 
                            header('location:C:\xampp\htdocs\WebTech\View\home.php');
                            echo"Err";
                            break;
                           
                        }
                        
                       
                   }
                }

            } 
        }

?>
