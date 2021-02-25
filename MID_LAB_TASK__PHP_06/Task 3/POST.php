<?php

                if(isset($_POST['submit'])){
                    $f=0;
                    print_r($_FILES);
                    if( ($_FILES['ufile']['size'])> 2000000)
                    {
                        $f=1;
                    }
                    else
                    {
                        $f=0;
                    }
                    if (($_FILES['ufile']['type'])=='jpeg')
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
                    if ($f==1)
                    {
                        echo "The file is too big or the format is not correct...";
                    }
                    else
                    {
                        echo"Ok";
                    }
                   
                }
                
?>