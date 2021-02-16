<?php 
            $number1=2000;
            $number2=1000;
            $number3=20000;

            if ($number1 > $number2 && $number1>$number3)
            {
                $max=$number1;
            }
            else if ($number2 > $number1 && $number2>$number3)
            {
                $max=$number2;
            }
            else if ($number3 > $number1 && $number3>$number2)
            {
                $max=$number3;
            }


            echo $max. "  is the biggest";
?>