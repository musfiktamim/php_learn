<?php
    $a = [1,2,3,4,5];
    $colors = ["red","green","black","white","brown"];
    $new_arr = array_map("squar",$a,$colors);

    function squar($a,$b){
        return "$a is $b";
    }
    echo "<pre>";
    print_r($new_arr);
    echo "</pre>";
    
?>