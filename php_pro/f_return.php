<?php

function chk_value($a,$b)
{
    if ($a>$b)
    {
        return 0;
    }
    else
    {
        return 1;
    
    }
}

$x= chk_value(30,20);

if ($x==0)
    {
        echo "The first number is greater";
    }
    else
    {
        echo "smaller";
    }

echo $x;

?>