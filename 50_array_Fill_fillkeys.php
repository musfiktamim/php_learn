<?php
    $a = ["a","b","c","d","e"];

    $new_arr1 = array_fill_keys($a,"Tamim");

    $make_array = array_fill(10,1000,"Tamim");

    shuffle($make_array);

    echo "<pre>";
    print_r($new_arr1);
    echo "</br>";
    print_r($make_array);
    echo "</pre>";
?>