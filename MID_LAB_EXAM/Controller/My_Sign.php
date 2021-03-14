<?php
        if($_POST["submit"])
        {
            $uid=$_POST["uid"];
            $uname=$_POST["uname"];
            $password=$_POST["upassword"];
           
            $utype=$_POST["utype"];
            $user = [
                'name'=>$uname ,
                'password'=>$password,
                

            ];
            $json=json_encode($user);
            

            file_get_contents('../Model/udata.json');

            if (file_exists('../Model/udata.json'))
            {
                $get_data= file_get_contents('../Model/udata.json'); 
                $array_data =json_decode($get_data);
                $uinfo = array('name'=>$uname ,
                'password'=>$password,
                'uid'=>$uid,
                'utype'=>$utype
            );
                $array_data[]=$uinfo;
                $json_data=json_encode($array_data);
                if(file_put_contents('../Model/udata.json',$json_data))
                {
                    echo "Registered";
                }
                else
                {
                    echo "Sorry can't Register . . . . ";
                }
            }
        }

?>