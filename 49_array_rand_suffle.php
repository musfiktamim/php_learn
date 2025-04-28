<?php
    $color = ["red","green","blue","yellow","brown"];

    $new_arr1 = array_rand($color);
    $new_arr2 = array_rand($color,3);

    shuffle($color);


    echo "<pre>";
    print_r($new_arr1);
    print_r($new_arr2);
    print_r($color);
    echo "</pre>";

?>