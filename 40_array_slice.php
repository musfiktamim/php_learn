<?php
    $a = [1,2,3,4,5,6,7,8,9,10];

    
    echo "<pre>";
    print_r(array_slice($a,1,4));    
    print_r(array_slice($a,1,3));    
    print_r(array_slice($a,1,2));    
    print_r(array_slice($a,1,-1));
    echo "</pre>";
?>