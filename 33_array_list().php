<?php
    $array2d = [
        [1,"musfik","admin"],
        [2,"rahman","user"],
        [3,"tamim","user"],
        [4,"mohammad","user"],
    ];

    foreach($array2d as list($id,$name,$type)){
        echo "$id $name $type <br>";
    }
?>