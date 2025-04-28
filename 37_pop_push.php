<?php
    $a = [1,2,3,4,5,6,7,8,9,10];

    array_pop($a);
    array_push($a,20,30,40,50,60);
    array_pop($a);
    echo "<pre>";
    print_r($a);
    echo "</pre>";
?>