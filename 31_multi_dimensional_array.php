<?php
    $arrayof2d1 = array(array(1,2,3,4),array(5,6,7,8));
    $arrayof2d2 = [[1,2,3,4],[5,6,7,8]];
    echo "<pre>";
    print_r($arrayof2d1);
    echo "</pre>";
    
    echo "<pre>";
    echo ($arrayof2d1[1][2]);
    echo "</pre>";

    echo "<pre>";
    print_r($arrayof2d2);
    echo "</pre>";

    foreach($arrayof2d2 as $value1){
        foreach($value1 as $finalValue){
            echo " $finalValue <br>";
        }
    }
    
?>