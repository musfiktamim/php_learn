<?php
    $name1 = ["a"=>"Musfik","b"=>"Rahman","c"=>"Tamim","d"=>"Muhammad","e"=>"Muhammad"];
    $name2 = ["a"=>"Musfik","c"=>"Muhammad"];

    echo "<pre>";
    print_r(array_values($name1));
    print_r(array_unique($name1));
    echo "</pre>";
    
?>