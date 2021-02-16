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

            $linenew=0;
            for ( $a=0; $a<=3; $a++)
            {
                for ( $j="A"; $j<="F"; $j++)
                {
                echo $j;
                echo "<br/>";
                $linenew++;
                }
                $line--;
               
                echo "<br/>";

            }
   
           
?>