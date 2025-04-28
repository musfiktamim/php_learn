<?php

    $user = [
        [
            "id"=>1,
            "fname"=>"Musfik",
            "lname"=>"Rahman",
        ],
        [
            "id"=>2,
            "fname"=>"Azim",
            "lname"=>"Uddin",
        ],
        [
            "id"=>3,
            "fname"=>"Rohan",
            "lname"=>"Aziz",
        ],
    ];

    $color = ["red","green","blue","yellow","brown"];

    $new_data = array_column($user,'fname',"id");

    $new_data1 = array_chunk($color,2,true);

    echo "<pre>";
    print_r($new_data);
    print_r($new_data1);
    echo "</pre>";

?>