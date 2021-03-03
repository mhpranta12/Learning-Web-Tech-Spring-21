<?php

            $uname=$_POST["uname"];
            $password=$_POST["upassword"];

            $user = [
                'name'=>$uname ,
                'password'=>$password

            ];
            $json=json_encode($user);
            echo $json;

            file_get_contents('../Model/udata.json');

            if (file_exists('../Model/udata.json'))
            {
                $get_data= file_get_contents('../Model/udata.json'); 
                $array_data =json_decode($get_data);
                $uinfo = array('name'=>$uname ,
                'password'=>$password);
                $array_data[]=$uinfo;
                $json_data=json_encode($array_data);
                if(file_put_contents('../Model/udata.json',$json_data))
                {
                    echo"Sueccesfully Registered ! ! !";
                    header("login.html");
                }
                else
                {
                    echo "Sorry can't Register . . . . ";
                }
            }

?>