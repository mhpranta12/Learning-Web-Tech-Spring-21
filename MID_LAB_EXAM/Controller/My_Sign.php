<?php
        if($_POST["submit"])
        {
            $uname=$_POST["uname"];
            $password=$_POST["upassword"];
            $utype =  $_POST["utype"];
            $email=$_POST["email"];
            $user = [
                'name'=>$uname ,
                'password'=>$password,
                'email'=>$email,
                'gender'=>$gender

            ];
            $json=json_encode($user);
            

            file_get_contents('../Model/udata.json');

            if (file_exists('../Model/udata.json'))
            {
                $get_data= file_get_contents('../Model/udata.json'); 
                $array_data =json_decode($get_data);
                $uinfo = array('name'=>$uname ,
                'password'=>$password,
                'email'=>$email,
                'utype'=>$utype
            );
                $array_data[]=$uinfo;
                $json_data=json_encode($array_data);
                if(file_put_contents('../Model/udata.json',$json_data))
                {
                    header("login.html");
                }
                else
                {
                    echo "Sorry can't Register . . . . ";
                }
            }
        }

?>