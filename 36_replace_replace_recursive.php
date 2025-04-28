<?php
    $a = [1,2,3,4,1=>5];
    $b = [6,7];
    $c = ["red","green","blue"];

    $a2d = ["a"=>["red"],"b"=>["green","pink"]];
    $b2d = ["a"=>["yellow"],"b"=>["black"]];

    $newArr = ["a"=>"black","b"=>"white",1=>"sky"];

    $new_array1 = array_replace($a,$b,$c);
    $new_array2 = array_replace($a,$newArr);

    $new_array3 = array_replace_recursive($a2d,$b2d);


    

    echo "<pre>";
    print_r($new_array1);
    print_r($new_array2);
    print_r($new_array3);
    echo "</pre>";
    
?>