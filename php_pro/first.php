<?php
    

    $r = 0; 

    
    function ok ($r){

        if ($r % 2 == 0) {
            echo "It is even";
        }
        else{
            echo "It is odd";
        }

    }
    
    echo ".".ok($r);
    
?> 