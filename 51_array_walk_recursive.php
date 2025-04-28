<?php
    $color = [
        "a"=>"Red",
        "b"=>"Green",
        "c"=>"Blue",
        "d"=>"Yellow",
        "e"=>"Brown",
    ];

    $color2 = [
        "a"=>[
            "100"=>"Red100",
            "200"=>"Red200",
        ],
        "b"=>"Green",
        "c"=>"Blue",
        "d"=>"Yellow",
        "e"=>"Brown",
    ];

    array_walk($color,"myFun","What The");

    array_walk_recursive($color2,"myFun","What The");
    
    function myFun($value,$key,$pram){
        echo "$key $pram  $value <br>";
    }

?>