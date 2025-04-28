<?php
    $a = [1,2,3,4,5,6,7,8,9,10];
    $b = [11,22];
    
    array_splice($a,count($a),0,$b);

    echo "<pre>";
    print_r($a);
    echo "</pre>";
?>