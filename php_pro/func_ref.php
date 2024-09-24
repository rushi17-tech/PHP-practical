<?php

    function a1(&$x)
    {
        $x.="hello how r u ?<br>";
    }

    $s1="good morning<br>";
    a1($s1);
    echo $s1;

?>