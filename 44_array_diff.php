<?php
    $name1 = ["a"=>"Musfik","b"=>"Rahman","c"=>"Tamim","d"=>"Muhammad"];
    $name2 = ["a"=>"Musfik","c"=>"Muhammad"];

    echo "<pre>";
    print_r(array_diff($name1,$name2));
    print_r(array_diff_key($name1,$name2));
    print_r(array_diff_assoc($name1,$name2));
    echo "</pre>";
?>