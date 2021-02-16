<?php 
            $l=0;

            for ( $i=0; $i<=3; $i++)
            {
                for ( $j=0; $j<$l; $j++)
                {
                echo "*";
                }
                $l++;
               
                echo "<br/>";

            }
              $line=3;  
            for ( $a=0; $a<=3; $a++)
            {
                for ( $j=1; $j<=$line; $j++)
                {
                echo $j;
                }
                $line--;
               
                echo "<br/>";

            }
           
            $linenew=1;
            $v=1;
            for ($i=1; $i<=3; $i++)	
            {	 
            for($j=$v;$j<=$linenew;$j++)	  
            {	  	
            echo chr(64+$j)." ";	 
            }	  
            $v++;	
            echo "<br/>";   	
            $linenew+=2;
            }  

   
           
?>