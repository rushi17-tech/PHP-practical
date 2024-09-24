<?php

    function evne ($n)     
    {
    
        //$n=8;
        if($n%2==0)
        {
            echo "The number is even<br>";
        }
        else
        {
            echo "The number is odd<br>";
        }
    }

    evne(2);
    evne(5);
    evne(8);

?>