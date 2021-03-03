<?php
           if(isset($_POST['submit']))
           {
            $uname=$_POST["uname"];
            $password=$_POST["upassword"];

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
                            header('location:View/home.php');
                            echo"Login Success";
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
