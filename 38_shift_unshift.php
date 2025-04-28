<?php
    $a = [1,2,3,4,5,6,7,8,9,10];
    array_shift($a);
    array_shift($a);
    array_shift($a);

    array_unshift($a,10,20,30,40);

    echo "<pre>";
    print_r($a);
    echo "</pre>";
?>