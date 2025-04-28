<?php
    $a1 = [10,20,30,40,50];
    $b1 = [60,70,80];

    $a2 = ["a"=>1,"b"=>2,"c"=>3];
    $b2 = ["a"=>3,"d"=>2,"e"=>3];

    $a3 = ["tamim","rahman","musfik"];
    $b3 = [17,18,19];

    $ne_arr1 = array_merge($a1,$b1);
    $ne_arr2 = array_merge($a2,$b2);
    $ne_arr3 = $a2 + $b2;

    $ne_arr4 = array_merge_recursive($a2,$b2);

    $ne_arr5 = array_combine($a3,$b3);

    
    echo "<pre>";
    print_r($ne_arr1);
    print_r($ne_arr2);
    print_r($ne_arr3);
    print_r($ne_arr4);
    print_r($ne_arr5);
    echo $ne_arr5['tamim'];
    echo "</pre>";
    
?>