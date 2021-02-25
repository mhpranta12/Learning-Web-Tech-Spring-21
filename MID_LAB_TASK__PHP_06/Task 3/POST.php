<?php

                if(isset($_POST['submit'])){
                 // a flag variable to ensure .......... 
                    $atext = array ('jpg','jpeg','png');
                    $files=$_FILES['ufile']['name'];
                    $ext=pathinfo($files,PATHINFO_EXTENSION);
                    
                   
                    print_r($_FILES);
                    if( ($_FILES['ufile']['size'])> 2000000 || !in_array($ext,$atext) ) //checking size of file.....
                    {
                        echo "The file is too big or the format is not correct...";

                    }
                    else
                    {
                        echo"Ok";
                    }

                    /*if (($_FILES['ufile']['type'])=='jpeg') // checking the format ......
                    {
                        $f=0;
                    }
                    else if(($_FILES['ufile']['type'])=='jpg')
                    {
                        $f=0;
                    }
                    else if (($_FILES['ufile']['type'])=='png')
                    {
                        $f=0;
                    }
                    else 
                    {
                        $f=1;
                    }*/
                   

                   
                }
                
?>