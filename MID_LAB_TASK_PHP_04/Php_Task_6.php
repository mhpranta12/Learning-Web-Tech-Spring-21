<?php 
            $students = ['pranta' ,'mehedi' ,'hasan'];
            $search='pranta';
            for ( $i=0; $i<sizeof($students); $i++)
            {
                if ($students[$i] == $search)
                {
                    echo $search."  found !!";
                 }                
            }
           
           
?>