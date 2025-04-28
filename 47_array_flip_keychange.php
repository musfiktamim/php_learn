<?php
    $a = [
        "Bill"=>10,
        "Joe"=>20,
        "Peter"=>30,
    ];

    $new_arr1 = array_flip($a);

    $new_arr2 = array_change_key_case($a);

    $new_arr3 = array_change_key_case($a,CASE_UPPER);
    $new_arr4 = array_change_key_case($a,CASE_LOWER);

    echo "<pre>";
    print_r($a);
    print_r($new_arr1);
    print_r($new_arr2);
    print_r($new_arr3);
    print_r($new_arr4);
    echo "</pre>";

?>